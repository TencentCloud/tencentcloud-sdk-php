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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警历史详情
 *
 * @method string getRecordId() 获取告警历史ID
 * @method void setRecordId(string $RecordId) 设置告警历史ID
 * @method string getAlarmId() 获取告警策略ID
 * @method void setAlarmId(string $AlarmId) 设置告警策略ID
 * @method string getAlarmName() 获取告警策略名称
 * @method void setAlarmName(string $AlarmName) 设置告警策略名称
 * @method string getTopicId() 获取监控对象ID
 * @method void setTopicId(string $TopicId) 设置监控对象ID
 * @method string getTopicName() 获取监控对象名称
 * @method void setTopicName(string $TopicName) 设置监控对象名称
 * @method string getRegion() 获取监控对象所属地域
 * @method void setRegion(string $Region) 设置监控对象所属地域
 * @method string getTrigger() 获取触发条件
 * @method void setTrigger(string $Trigger) 设置触发条件
 * @method integer getTriggerCount() 获取持续周期，持续满足触发条件TriggerCount个周期后，再进行告警
 * @method void setTriggerCount(integer $TriggerCount) 设置持续周期，持续满足触发条件TriggerCount个周期后，再进行告警
 * @method integer getAlarmPeriod() 获取告警通知发送频率，单位为分钟
 * @method void setAlarmPeriod(integer $AlarmPeriod) 设置告警通知发送频率，单位为分钟
 * @method array getNotices() 获取通知渠道组
 * @method void setNotices(array $Notices) 设置通知渠道组
 * @method integer getDuration() 获取告警持续时间，单位为分钟
 * @method void setDuration(integer $Duration) 设置告警持续时间，单位为分钟
 * @method integer getStatus() 获取告警状态，0代表未恢复，1代表已恢复，2代表已失效
 * @method void setStatus(integer $Status) 设置告警状态，0代表未恢复，1代表已恢复，2代表已失效
 * @method integer getCreateTime() 获取告警发生时间，毫秒级Unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置告警发生时间，毫秒级Unix时间戳
 * @method array getGroupTriggerCondition() 获取告警分组触发时对应的分组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) 设置告警分组触发时对应的分组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmLevel() 获取告警级别，0代表警告(Warn)，1代表提醒(Info)，2代表紧急 (Critical)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别，0代表警告(Warn)，1代表提醒(Info)，2代表紧急 (Critical)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorObjectType() 获取监控对象类型。
0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置监控对象类型。
0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertHistoryRecord extends AbstractModel
{
    /**
     * @var string 告警历史ID
     */
    public $RecordId;

    /**
     * @var string 告警策略ID
     */
    public $AlarmId;

    /**
     * @var string 告警策略名称
     */
    public $AlarmName;

    /**
     * @var string 监控对象ID
     */
    public $TopicId;

    /**
     * @var string 监控对象名称
     */
    public $TopicName;

    /**
     * @var string 监控对象所属地域
     */
    public $Region;

    /**
     * @var string 触发条件
     */
    public $Trigger;

    /**
     * @var integer 持续周期，持续满足触发条件TriggerCount个周期后，再进行告警
     */
    public $TriggerCount;

    /**
     * @var integer 告警通知发送频率，单位为分钟
     */
    public $AlarmPeriod;

    /**
     * @var array 通知渠道组
     */
    public $Notices;

    /**
     * @var integer 告警持续时间，单位为分钟
     */
    public $Duration;

    /**
     * @var integer 告警状态，0代表未恢复，1代表已恢复，2代表已失效
     */
    public $Status;

    /**
     * @var integer 告警发生时间，毫秒级Unix时间戳
     */
    public $CreateTime;

    /**
     * @var array 告警分组触发时对应的分组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupTriggerCondition;

    /**
     * @var integer 告警级别，0代表警告(Warn)，1代表提醒(Info)，2代表紧急 (Critical)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var integer 监控对象类型。
0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorObjectType;

    /**
     * @param string $RecordId 告警历史ID
     * @param string $AlarmId 告警策略ID
     * @param string $AlarmName 告警策略名称
     * @param string $TopicId 监控对象ID
     * @param string $TopicName 监控对象名称
     * @param string $Region 监控对象所属地域
     * @param string $Trigger 触发条件
     * @param integer $TriggerCount 持续周期，持续满足触发条件TriggerCount个周期后，再进行告警
     * @param integer $AlarmPeriod 告警通知发送频率，单位为分钟
     * @param array $Notices 通知渠道组
     * @param integer $Duration 告警持续时间，单位为分钟
     * @param integer $Status 告警状态，0代表未恢复，1代表已恢复，2代表已失效
     * @param integer $CreateTime 告警发生时间，毫秒级Unix时间戳
     * @param array $GroupTriggerCondition 告警分组触发时对应的分组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmLevel 告警级别，0代表警告(Warn)，1代表提醒(Info)，2代表紧急 (Critical)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorObjectType 监控对象类型。
0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("AlarmName",$param) and $param["AlarmName"] !== null) {
            $this->AlarmName = $param["AlarmName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = $param["Trigger"];
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new AlertHistoryNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupTriggerCondition",$param) and $param["GroupTriggerCondition"] !== null) {
            $this->GroupTriggerCondition = [];
            foreach ($param["GroupTriggerCondition"] as $key => $value){
                $obj = new GroupTriggerConditionInfo();
                $obj->deserialize($value);
                array_push($this->GroupTriggerCondition, $obj);
            }
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }
    }
}
