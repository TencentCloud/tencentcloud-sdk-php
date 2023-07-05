<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警指标
 *
 * @method string getId() 获取指标id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置指标id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmIndicator() 获取告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmIndicator(integer $AlarmIndicator) 设置告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmIndicatorDesc() 获取告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmIndicatorDesc(string $AlarmIndicatorDesc) 设置告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerType() 获取指标阈值，1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(integer $TriggerType) 设置指标阈值，1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedTime() 获取预计的超时时间，分钟级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedTime(integer $EstimatedTime) 设置预计的超时时间，分钟级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperator() 获取实时任务告警需要的参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(integer $Operator) 设置实时任务告警需要的参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmIndicatorUnit() 获取告警指标阈值单位：ms(毫秒)、s(秒)、min(分钟)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmIndicatorUnit(string $AlarmIndicatorUnit) 设置告警指标阈值单位：ms(毫秒)、s(秒)、min(分钟)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取告警周期
 * @method void setDuration(integer $Duration) 设置告警周期
 * @method string getDurationUnit() 获取告警周期单位
 * @method void setDurationUnit(string $DurationUnit) 设置告警周期单位
 * @method integer getMaxTimes() 获取周期内最多告警次数
 * @method void setMaxTimes(integer $MaxTimes) 设置周期内最多告警次数
 */
class AlarmIndicatorInfo extends AbstractModel
{
    /**
     * @var string 指标id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmIndicator;

    /**
     * @var string 告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmIndicatorDesc;

    /**
     * @var integer 指标阈值，1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var integer 预计的超时时间，分钟级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedTime;

    /**
     * @var integer 实时任务告警需要的参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 告警指标阈值单位：ms(毫秒)、s(秒)、min(分钟)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmIndicatorUnit;

    /**
     * @var integer 告警周期
     */
    public $Duration;

    /**
     * @var string 告警周期单位
     */
    public $DurationUnit;

    /**
     * @var integer 周期内最多告警次数
     */
    public $MaxTimes;

    /**
     * @param string $Id 指标id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmIndicator 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmIndicatorDesc 告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerType 指标阈值，1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedTime 预计的超时时间，分钟级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Operator 实时任务告警需要的参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmIndicatorUnit 告警指标阈值单位：ms(毫秒)、s(秒)、min(分钟)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 告警周期
     * @param string $DurationUnit 告警周期单位
     * @param integer $MaxTimes 周期内最多告警次数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AlarmIndicator",$param) and $param["AlarmIndicator"] !== null) {
            $this->AlarmIndicator = $param["AlarmIndicator"];
        }

        if (array_key_exists("AlarmIndicatorDesc",$param) and $param["AlarmIndicatorDesc"] !== null) {
            $this->AlarmIndicatorDesc = $param["AlarmIndicatorDesc"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("AlarmIndicatorUnit",$param) and $param["AlarmIndicatorUnit"] !== null) {
            $this->AlarmIndicatorUnit = $param["AlarmIndicatorUnit"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("DurationUnit",$param) and $param["DurationUnit"] !== null) {
            $this->DurationUnit = $param["DurationUnit"];
        }

        if (array_key_exists("MaxTimes",$param) and $param["MaxTimes"] !== null) {
            $this->MaxTimes = $param["MaxTimes"];
        }
    }
}
