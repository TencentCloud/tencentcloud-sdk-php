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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警配置
 *
 * @method string getAlarmId() 获取告警 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmId(string $AlarmId) 设置告警 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmMonitorType() 获取告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmMonitorType(string $AlarmMonitorType) 设置告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarmGroups() 获取告警组，最多 50 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmGroups(array $AlarmGroups) 设置告警组，最多 50 个
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDoNotDisturbWhenSkipped() 获取被跳过时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoNotDisturbWhenSkipped(boolean $DoNotDisturbWhenSkipped) 设置被跳过时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDoNotDisturbWhenManuallyTerminated() 获取被手动终止时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoNotDisturbWhenManuallyTerminated(boolean $DoNotDisturbWhenManuallyTerminated) 设置被手动终止时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDoNotDisturbUntilTheLastRetry() 获取最后一次重试前免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoNotDisturbUntilTheLastRetry(boolean $DoNotDisturbUntilTheLastRetry) 设置最后一次重试前免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmBrief extends AbstractModel
{
    /**
     * @var string 告警 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmId;

    /**
     * @var string 告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmMonitorType;

    /**
     * @var array 告警组，最多 50 个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmGroups;

    /**
     * @var boolean 被跳过时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoNotDisturbWhenSkipped;

    /**
     * @var boolean 被手动终止时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoNotDisturbWhenManuallyTerminated;

    /**
     * @var boolean 最后一次重试前免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoNotDisturbUntilTheLastRetry;

    /**
     * @param string $AlarmId 告警 ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmMonitorType 告警的监控对象类型，如工作流、任务等，当前支持 1. WORKFLOW 2. TASK
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmGroups 告警组，最多 50 个
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DoNotDisturbWhenSkipped 被跳过时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DoNotDisturbWhenManuallyTerminated 被手动终止时免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DoNotDisturbUntilTheLastRetry 最后一次重试前免打扰，默认值 false
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("AlarmMonitorType",$param) and $param["AlarmMonitorType"] !== null) {
            $this->AlarmMonitorType = $param["AlarmMonitorType"];
        }

        if (array_key_exists("AlarmGroups",$param) and $param["AlarmGroups"] !== null) {
            $this->AlarmGroups = [];
            foreach ($param["AlarmGroups"] as $key => $value){
                $obj = new AlarmGroup();
                $obj->deserialize($value);
                array_push($this->AlarmGroups, $obj);
            }
        }

        if (array_key_exists("DoNotDisturbWhenSkipped",$param) and $param["DoNotDisturbWhenSkipped"] !== null) {
            $this->DoNotDisturbWhenSkipped = $param["DoNotDisturbWhenSkipped"];
        }

        if (array_key_exists("DoNotDisturbWhenManuallyTerminated",$param) and $param["DoNotDisturbWhenManuallyTerminated"] !== null) {
            $this->DoNotDisturbWhenManuallyTerminated = $param["DoNotDisturbWhenManuallyTerminated"];
        }

        if (array_key_exists("DoNotDisturbUntilTheLastRetry",$param) and $param["DoNotDisturbUntilTheLastRetry"] !== null) {
            $this->DoNotDisturbUntilTheLastRetry = $param["DoNotDisturbUntilTheLastRetry"];
        }
    }
}
