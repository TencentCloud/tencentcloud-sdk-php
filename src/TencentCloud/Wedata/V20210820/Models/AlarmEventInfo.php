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
 * 告警事件详情
 *
 * @method string getAlarmId() 获取告警ID
 * @method void setAlarmId(string $AlarmId) 设置告警ID
 * @method string getAlarmTime() 获取告警时间
 * @method void setAlarmTime(string $AlarmTime) 设置告警时间
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getRegularName() 获取规则名称
 * @method void setRegularName(string $RegularName) 设置规则名称
 * @method integer getAlarmLevel() 获取告警级别,0表示普通，1表示重要，2表示紧急
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别,0表示普通，1表示重要，2表示紧急
 * @method integer getAlarmWay() 获取告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
 * @method void setAlarmWay(integer $AlarmWay) 设置告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
 * @method string getAlarmRecipientId() 获取告警接收人Id，多个用逗号隔开
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人Id，多个用逗号隔开
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getAlarmIndicator() 获取告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
 * @method void setAlarmIndicator(integer $AlarmIndicator) 设置告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
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
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSendSuccess() 获取0：部分成功，1：全部成功，2：全部失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSendSuccess(integer $IsSendSuccess) 设置0：部分成功，1：全部成功，2：全部失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessageId() 获取消息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageId(string $MessageId) 设置消息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperator() 获取阈值计算算子，1 : 大于 2 ：小于
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(integer $Operator) 设置阈值计算算子，1 : 大于 2 ：小于
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmEventInfo extends AbstractModel
{
    /**
     * @var string 告警ID
     */
    public $AlarmId;

    /**
     * @var string 告警时间
     */
    public $AlarmTime;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 规则名称
     */
    public $RegularName;

    /**
     * @var integer 告警级别,0表示普通，1表示重要，2表示紧急
     */
    public $AlarmLevel;

    /**
     * @var integer 告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
     */
    public $AlarmWay;

    /**
     * @var string 告警接收人Id，多个用逗号隔开
     */
    public $AlarmRecipientId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
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
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 0：部分成功，1：全部成功，2：全部失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSendSuccess;

    /**
     * @var string 消息ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageId;

    /**
     * @var integer 阈值计算算子，1 : 大于 2 ：小于
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @param string $AlarmId 告警ID
     * @param string $AlarmTime 告警时间
     * @param string $TaskId 任务ID
     * @param string $RegularName 规则名称
     * @param integer $AlarmLevel 告警级别,0表示普通，1表示重要，2表示紧急
     * @param integer $AlarmWay 告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
     * @param string $AlarmRecipientId 告警接收人Id，多个用逗号隔开
     * @param string $ProjectId 项目ID
     * @param integer $AlarmIndicator 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
     * @param string $AlarmIndicatorDesc 告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerType 指标阈值，1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedTime 预计的超时时间，分钟级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSendSuccess 0：部分成功，1：全部成功，2：全部失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MessageId 消息ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Operator 阈值计算算子，1 : 大于 2 ：小于
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

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RegularName",$param) and $param["RegularName"] !== null) {
            $this->RegularName = $param["RegularName"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("IsSendSuccess",$param) and $param["IsSendSuccess"] !== null) {
            $this->IsSendSuccess = $param["IsSendSuccess"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
