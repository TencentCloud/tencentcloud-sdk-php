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
 * 边缘推理定时伸缩策略配置。
 *
 * @method array getScheduledActions() 获取定时伸缩动作列表。至少填写 1 个，最多支持 10 个。
 * @method void setScheduledActions(array $ScheduledActions) 设置定时伸缩动作列表。至少填写 1 个，最多支持 10 个。
 * @method InferenceScheduledScalingEffectiveRange getEffectiveRange() 获取有效期范围，用于描述该定时伸缩策略长期有效或仅在指定日期范围内有效。
 * @method void setEffectiveRange(InferenceScheduledScalingEffectiveRange $EffectiveRange) 设置有效期范围，用于描述该定时伸缩策略长期有效或仅在指定日期范围内有效。
 * @method string getTimeZone() 获取时区，使用 [IANA 时区](https://www.iana.org/time-zones) 标识 ScheduledActions 中的触发时间，例如 UTC、Asia/Shanghai、America/New_York、Europe/London、Asia/Kolkata。不传时默认使用 UTC。





 * @method void setTimeZone(string $TimeZone) 设置时区，使用 [IANA 时区](https://www.iana.org/time-zones) 标识 ScheduledActions 中的触发时间，例如 UTC、Asia/Shanghai、America/New_York、Europe/London、Asia/Kolkata。不传时默认使用 UTC。
 */
class InferenceScheduledScalingPolicy extends AbstractModel
{
    /**
     * @var array 定时伸缩动作列表。至少填写 1 个，最多支持 10 个。
     */
    public $ScheduledActions;

    /**
     * @var InferenceScheduledScalingEffectiveRange 有效期范围，用于描述该定时伸缩策略长期有效或仅在指定日期范围内有效。
     */
    public $EffectiveRange;

    /**
     * @var string 时区，使用 [IANA 时区](https://www.iana.org/time-zones) 标识 ScheduledActions 中的触发时间，例如 UTC、Asia/Shanghai、America/New_York、Europe/London、Asia/Kolkata。不传时默认使用 UTC。





     */
    public $TimeZone;

    /**
     * @param array $ScheduledActions 定时伸缩动作列表。至少填写 1 个，最多支持 10 个。
     * @param InferenceScheduledScalingEffectiveRange $EffectiveRange 有效期范围，用于描述该定时伸缩策略长期有效或仅在指定日期范围内有效。
     * @param string $TimeZone 时区，使用 [IANA 时区](https://www.iana.org/time-zones) 标识 ScheduledActions 中的触发时间，例如 UTC、Asia/Shanghai、America/New_York、Europe/London、Asia/Kolkata。不传时默认使用 UTC。
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
        if (array_key_exists("ScheduledActions",$param) and $param["ScheduledActions"] !== null) {
            $this->ScheduledActions = [];
            foreach ($param["ScheduledActions"] as $key => $value){
                $obj = new InferenceScheduledScalingAction();
                $obj->deserialize($value);
                array_push($this->ScheduledActions, $obj);
            }
        }

        if (array_key_exists("EffectiveRange",$param) and $param["EffectiveRange"] !== null) {
            $this->EffectiveRange = new InferenceScheduledScalingEffectiveRange();
            $this->EffectiveRange->deserialize($param["EffectiveRange"]);
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
