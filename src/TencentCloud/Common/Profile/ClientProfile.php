<?php
/*
 * Copyright (c) 2017 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common\Profile;

use TencentCloud\Common\Exception\TencentCloudSDKException;

/**
 * Client optional parameters class
 * Class ClientProfile
 * @package TencentCloud\Common\Profile
 */
class ClientProfile
{

    /**
     * @var string  HMAC SHA1 algorithm
     */
    public static $SIGN_HMAC_SHA1 = "HmacSHA1";

    /**
     * @var string HMAC SHA256 algorithm
     */
    public static $SIGN_HMAC_SHA256 = "HmacSHA256";

    /**
     * @var string Signature V3
     */
    public static $SIGN_TC3_SHA256 = "TC3-HMAC-SHA256";

    /**
     * @var string Chinese simplified
     */
    public static $ZH_CN = "zh-CN";

    /**
     * @var string English
     */
    public static $EN_US = "en-US";

    /**
     * @var boolean Enable region breaker
     */
    public $enableRegionBreaker;

    /**
     * @var HttpProfile HTTP related parameters
     */
    private $httpProfile;

    /**
     * @var string Signature method
     */
    private $signMethod;

    /**
     * @var string Unsigned payload
     */
    private $unsignedPayload;

    /**
     * @var boolean
     */
    private $checkPHPVersion;

    /**
     * @var string
     */
    private $language;

    /**
     * @var RegionBreakerProfile Region breaker related parameters
     */
    private $regionBreakerProfile;

    /**
     * ClientProfile constructor.
     * @param string $signMethod  Signature algorithm, currently supports SHA256, SHA1
     * @param HttpProfile $httpProfile HTTP parameters class
     * @param boolean $enableRegionBreaker  Enable region breaker
     * @param RegionBreakerProfile $regionBreakerProfile  Region breaker related parameters
     */
    public function __construct($signMethod = null, $httpProfile = null, $enableRegionBreaker = false, $regionBreakerProfile = null)
    {
        $this->signMethod = $signMethod ? $signMethod : ClientProfile::$SIGN_TC3_SHA256;
        $this->httpProfile = $httpProfile ? $httpProfile : new HttpProfile();
        $this->unsignedPayload = false;
	    $this->checkPHPVersion = true;
        $this->enableRegionBreaker = $enableRegionBreaker;
        $this->regionBreakerProfile = $regionBreakerProfile;
	//$this->language = ClientProfile::$ZH_CN;
    }

    /**
     * Set signature algorithm
     * @param string $signMethod Signature method, currently supports SHA256, SHA1, TC3
     */
    public function setSignMethod($signMethod)
    {
        $this->signMethod = $signMethod;
    }

    /**
     * Set HTTP related parameters
     * @param HttpProfile $httpProfile HTTP related parameters
     */
    public function setHttpProfile($httpProfile)
    {
        $this->httpProfile = $httpProfile;
    }

    /**
     * Get signature method
     * @return null|string Signature method
     */
    public function getSignMethod()
    {
        return $this->signMethod;
    }

    /**
     * Set whether to ignore content signature
     * @param bool $flag true means ignore signature
     */
    public function setUnsignedPayload($flag)
    {
        $this->unsignedPayload = $flag;
    }

    /**
     * Get whether to ignore content signature flag
     * @return bool
     */
    public function getUnsignedPayload()
    {
        return $this->unsignedPayload;
    }

    public function getCheckPHPVersion()
    {
        return $this->checkPHPVersion;
    }

    public function setCheckPHPVersion($flag)
    {
        $this->checkPHPVersion = $flag;
    }

    public function getLanguage()
    {
	return $this->language;
    }

    /**
     * @param string $language Valid values: zh-CN, en-US
     */
    public function setLanguage($language)
    {
	$this->language = $language;
    }

    public function getRegionBreakerProfile()
    {
        return $this->regionBreakerProfile;
    }

    /**
     * Set region breaker related parameters
     * @param RegionBreakerProfile $regionBreakerProfile Region breaker related parameters
     */
    public function setRegionBreakerProfile($regionBreakerProfile)
    {
        $this->regionBreakerProfile = $regionBreakerProfile;
    }

    /**
     * Get HTTP profile instance
     * @return null|HttpProfile HTTP profile instance
     */
    public function getHttpProfile()
    {
        return $this->httpProfile;
    }
}

class RegionBreakerProfile {

    public function __construct($masterEndpoint,
                                $slaveEndpoint,
                                $maxFailNum = 5,
                                $maxFailPercent = 0.75,
                                $windowInterval = 60*5,
                                $timeout = 60,
                                $maxRequests = 5) {
        if (empty($masterEndpoint) || !(substr($masterEndpoint, -20) === '.tencentcloudapi.com')) {
            throw new TencentCloudSDKException("", 'masterEndpoint must be provided and end with ".tencentcloudapi.com"');
        }
        if (empty($slaveEndpoint) || !(substr($slaveEndpoint, -20) === '.tencentcloudapi.com')) {
            throw new TencentCloudSDKException("", 'slaveEndpoint must be provided and end with ".tencentcloudapi.com"');
        }
        $this->masterEndpoint = $masterEndpoint;
        $this->slaveEndpoint = $slaveEndpoint;
        $this->maxFailNum = $maxFailNum;
        $this->maxFailPercent = $maxFailPercent;
        if ($this->maxFailPercent < 0 || $this->maxFailPercent > 1) {
            throw new TencentCloudSDKException("", "ClientError: max fail percent must be set between 0 and 1");
        }
        $this->windowInterval = $windowInterval;
        $this->timeout = $timeout;
        $this->maxRequests = $maxRequests;
    }
}