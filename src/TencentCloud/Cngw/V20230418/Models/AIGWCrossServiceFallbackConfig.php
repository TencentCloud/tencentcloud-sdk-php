<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨服务降级配置
 *
 * @method array getTriggerConditions() 获取<p>触发条件</p><p>枚举值：</p><ul><li>ServiceUnavailable： 服务不可用</li><li>ConnectionTimeout： 连接超时</li><li>RateLimited： 限流</li></ul>
 * @method void setTriggerConditions(array $TriggerConditions) 设置<p>触发条件</p><p>枚举值：</p><ul><li>ServiceUnavailable： 服务不可用</li><li>ConnectionTimeout： 连接超时</li><li>RateLimited： 限流</li></ul>
 * @method array getFallbackServiceChain() 获取<p>fallback 服务链</p>
 * @method void setFallbackServiceChain(array $FallbackServiceChain) 设置<p>fallback 服务链</p>
 * @method AIGWLLMQuotaFallbackTrigger getQuotaFallbackTrigger() 获取<p>额度降级触发配置</p>
 * @method void setQuotaFallbackTrigger(AIGWLLMQuotaFallbackTrigger $QuotaFallbackTrigger) 设置<p>额度降级触发配置</p>
 */
class AIGWCrossServiceFallbackConfig extends AbstractModel
{
    /**
     * @var array <p>触发条件</p><p>枚举值：</p><ul><li>ServiceUnavailable： 服务不可用</li><li>ConnectionTimeout： 连接超时</li><li>RateLimited： 限流</li></ul>
     */
    public $TriggerConditions;

    /**
     * @var array <p>fallback 服务链</p>
     */
    public $FallbackServiceChain;

    /**
     * @var AIGWLLMQuotaFallbackTrigger <p>额度降级触发配置</p>
     */
    public $QuotaFallbackTrigger;

    /**
     * @param array $TriggerConditions <p>触发条件</p><p>枚举值：</p><ul><li>ServiceUnavailable： 服务不可用</li><li>ConnectionTimeout： 连接超时</li><li>RateLimited： 限流</li></ul>
     * @param array $FallbackServiceChain <p>fallback 服务链</p>
     * @param AIGWLLMQuotaFallbackTrigger $QuotaFallbackTrigger <p>额度降级触发配置</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TriggerConditions",$param) and $param["TriggerConditions"] !== null) {
            $this->TriggerConditions = $param["TriggerConditions"];
        }

        if (array_key_exists("FallbackServiceChain",$param) and $param["FallbackServiceChain"] !== null) {
            $this->FallbackServiceChain = [];
            foreach ($param["FallbackServiceChain"] as $key => $value){
                $obj = new AIGWFallbackServiceItem();
                $obj->deserialize($value);
                array_push($this->FallbackServiceChain, $obj);
            }
        }

        if (array_key_exists("QuotaFallbackTrigger",$param) and $param["QuotaFallbackTrigger"] !== null) {
            $this->QuotaFallbackTrigger = new AIGWLLMQuotaFallbackTrigger();
            $this->QuotaFallbackTrigger->deserialize($param["QuotaFallbackTrigger"]);
        }
    }
}
