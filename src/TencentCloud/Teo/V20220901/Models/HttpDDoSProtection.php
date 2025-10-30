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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP DDOS防护配置。
 *
 * @method AdaptiveFrequencyControl getAdaptiveFrequencyControl() 获取自适应频控的具体配置。
 * @method void setAdaptiveFrequencyControl(AdaptiveFrequencyControl $AdaptiveFrequencyControl) 设置自适应频控的具体配置。
 * @method ClientFiltering getClientFiltering() 获取智能客户端过滤的具体配置。
 * @method void setClientFiltering(ClientFiltering $ClientFiltering) 设置智能客户端过滤的具体配置。
 * @method BandwidthAbuseDefense getBandwidthAbuseDefense() 获取流量防盗刷的具体配置。
 * @method void setBandwidthAbuseDefense(BandwidthAbuseDefense $BandwidthAbuseDefense) 设置流量防盗刷的具体配置。
 * @method SlowAttackDefense getSlowAttackDefense() 获取慢速攻击防护的具体配置。
 * @method void setSlowAttackDefense(SlowAttackDefense $SlowAttackDefense) 设置慢速攻击防护的具体配置。
 */
class HttpDDoSProtection extends AbstractModel
{
    /**
     * @var AdaptiveFrequencyControl 自适应频控的具体配置。
     */
    public $AdaptiveFrequencyControl;

    /**
     * @var ClientFiltering 智能客户端过滤的具体配置。
     */
    public $ClientFiltering;

    /**
     * @var BandwidthAbuseDefense 流量防盗刷的具体配置。
     */
    public $BandwidthAbuseDefense;

    /**
     * @var SlowAttackDefense 慢速攻击防护的具体配置。
     */
    public $SlowAttackDefense;

    /**
     * @param AdaptiveFrequencyControl $AdaptiveFrequencyControl 自适应频控的具体配置。
     * @param ClientFiltering $ClientFiltering 智能客户端过滤的具体配置。
     * @param BandwidthAbuseDefense $BandwidthAbuseDefense 流量防盗刷的具体配置。
     * @param SlowAttackDefense $SlowAttackDefense 慢速攻击防护的具体配置。
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
        if (array_key_exists("AdaptiveFrequencyControl",$param) and $param["AdaptiveFrequencyControl"] !== null) {
            $this->AdaptiveFrequencyControl = new AdaptiveFrequencyControl();
            $this->AdaptiveFrequencyControl->deserialize($param["AdaptiveFrequencyControl"]);
        }

        if (array_key_exists("ClientFiltering",$param) and $param["ClientFiltering"] !== null) {
            $this->ClientFiltering = new ClientFiltering();
            $this->ClientFiltering->deserialize($param["ClientFiltering"]);
        }

        if (array_key_exists("BandwidthAbuseDefense",$param) and $param["BandwidthAbuseDefense"] !== null) {
            $this->BandwidthAbuseDefense = new BandwidthAbuseDefense();
            $this->BandwidthAbuseDefense->deserialize($param["BandwidthAbuseDefense"]);
        }

        if (array_key_exists("SlowAttackDefense",$param) and $param["SlowAttackDefense"] !== null) {
            $this->SlowAttackDefense = new SlowAttackDefense();
            $this->SlowAttackDefense->deserialize($param["SlowAttackDefense"]);
        }
    }
}
