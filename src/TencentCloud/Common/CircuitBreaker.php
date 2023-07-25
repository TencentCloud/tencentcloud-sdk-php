<?php

namespace TencentCloud\Common;
define("STATE_CLOSED", 0);
define("STATE_HALF_OPEN", 1);
define("STATE_OPEN", 2);
class Counter
{
    public $failures = 0;
    public $total = 0;
    public $consecutiveSuccesses = 0;
    public $consecutiveFailures = 0;
    
    public function onSuccess()
    {
        $this->total++;
        $this->consecutiveSuccesses++;
        $this->consecutiveFailures = 0;
    }
    
    public function onFailure()
    {
        $this->total++;
        $this->failures++;
        $this->consecutiveFailures++;
        $this->consecutiveSuccesses = 0;
    }
    
    public function clear()
    {
        $this->failures = 0;
        $this->total = 0;
        $this->consecutiveSuccesses = 0;
        $this->consecutiveFailures = 0;
    }
    
    public function getFailureRate()
    {
        if ($this->total == 0) {
            return 0.0;
        }
        return floatval($this->failures) / $this->total;
    }
}

class CircuitBreaker
{
    public $breakerSetting;
    public $counter;
    public $state;
    public $expiry;
    public $generation;
    
    public function __construct($breakerSetting)
    {
        $this->breakerSetting = $breakerSetting;
        $this->counter = new Counter();
        $this->state = STATE_CLOSED;
        $this->expiry = time() + $breakerSetting->windowInterval;
        $this->generation = 0;
    }
    
    public function readyToOpen()
    {
        return ($this->counter->failures >= $this->breakerSetting->maxFailNum &&
                $this->counter->getFailureRate() >= $this->breakerSetting->maxFailPercent) ||
            $this->counter->consecutiveFailures >= 5;
    }
    
    public function currentState($now)
    {
        if ($this->state == STATE_CLOSED) {
            if ($this->expiry <= $now) {
                $this->toNewGeneration($now);
            }
        } elseif ($this->state == STATE_OPEN) {
            if ($this->expiry <= $now) {
                
                $this->switchState(STATE_HALF_OPEN, $now);
            }
        }
        return array($this->state, $this->generation);
    }
    
    public function switchState($newState, $now)
    {
        if ($this->state == $newState) {
            return;
        }
        $this->state = $newState;
        $this->toNewGeneration($now);
    }
    
    public function toNewGeneration($now)
    {
        $this->generation = ($this->generation + 1) % 10;
        $this->counter->clear();
        if ($this->state == STATE_CLOSED) {
            $this->expiry = $now + $this->breakerSetting->windowInterval;
        } elseif ($this->state == STATE_OPEN) {
            $this->expiry = $now + $this->breakerSetting->timeout;
        } else { // STATE_HALF_OPEN
            $this->expiry = time();
        }
    }
    
    public function beforeRequests()
    {
        $now = time();
        list($state, $generation) = $this->currentState($now);
        if ($state == STATE_OPEN) {
            return array($generation, true);
        }
        return array($generation, false);
    }
    
    public function afterRequests($before, $success)
    {
        $now = time();
        list($state, $generation) = $this->currentState($now);
        if ($generation != $before) {
            return;
        }
        if ($success) {
            $this->onSuccess($state, $now);
        } else {
            $this->onFailure($state, $now);
        }
    }
    
    public function onSuccess($state, $now)
    {
        if ($state == STATE_CLOSED) {
            $this->counter->onSuccess();
        } elseif ($state == STATE_HALF_OPEN) {
            $this->counter->onSuccess();
            if ($this->counter->total - $this->counter->failures >= $this->breakerSetting->maxRequests) {
                $this->switchState(STATE_CLOSED, $now);
            }
        }
    }
    
    public function onFailure($state, $now)
    {
        if ($state == STATE_CLOSED) {
            $this->counter->onFailure();
            if ($this->readyToOpen()) {
                $this->switchState(STATE_OPEN, $now);
            }
        } elseif ($state == STATE_HALF_OPEN) {
            $this->counter->onFailure();
            $this->switchState(STATE_OPEN, $now);
        }
    }
}
