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
 * 边缘推理弹性伸缩策略。
 *
 * @method string getPolicyName() 获取策略名称。长度限制为 1~30 个字符。同一服务内策略名称需唯一。
 * @method void setPolicyName(string $PolicyName) 设置策略名称。长度限制为 1~30 个字符。同一服务内策略名称需唯一。
 * @method string getPolicyType() 获取策略类型，创建后不可修改。取值：<li>ScheduledScaling：定时伸缩。</li>
 * @method void setPolicyType(string $PolicyType) 设置策略类型，创建后不可修改。取值：<li>ScheduledScaling：定时伸缩。</li>
 * @method InferenceScheduledScalingPolicy getScheduledScalingPolicy() 获取定时伸缩配置。当 PolicyType 取值为 ScheduledScaling 时，该字段必填。
 * @method void setScheduledScalingPolicy(InferenceScheduledScalingPolicy $ScheduledScalingPolicy) 设置定时伸缩配置。当 PolicyType 取值为 ScheduledScaling 时，该字段必填。
 */
class InferenceScalingPolicy extends AbstractModel
{
    /**
     * @var string 策略名称。长度限制为 1~30 个字符。同一服务内策略名称需唯一。
     */
    public $PolicyName;

    /**
     * @var string 策略类型，创建后不可修改。取值：<li>ScheduledScaling：定时伸缩。</li>
     */
    public $PolicyType;

    /**
     * @var InferenceScheduledScalingPolicy 定时伸缩配置。当 PolicyType 取值为 ScheduledScaling 时，该字段必填。
     */
    public $ScheduledScalingPolicy;

    /**
     * @param string $PolicyName 策略名称。长度限制为 1~30 个字符。同一服务内策略名称需唯一。
     * @param string $PolicyType 策略类型，创建后不可修改。取值：<li>ScheduledScaling：定时伸缩。</li>
     * @param InferenceScheduledScalingPolicy $ScheduledScalingPolicy 定时伸缩配置。当 PolicyType 取值为 ScheduledScaling 时，该字段必填。
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("ScheduledScalingPolicy",$param) and $param["ScheduledScalingPolicy"] !== null) {
            $this->ScheduledScalingPolicy = new InferenceScheduledScalingPolicy();
            $this->ScheduledScalingPolicy->deserialize($param["ScheduledScalingPolicy"]);
        }
    }
}
