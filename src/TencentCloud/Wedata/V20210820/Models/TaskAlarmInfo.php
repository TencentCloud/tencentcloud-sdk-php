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
 * 任务告警信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getRegularName() 获取规则名称
 * @method void setRegularName(string $RegularName) 设置规则名称
 * @method integer getRegularStatus() 获取规则状态(0表示关闭，1表示打开)
 * @method void setRegularStatus(integer $RegularStatus) 设置规则状态(0表示关闭，1表示打开)
 * @method integer getAlarmLevel() 获取告警级别(0表示普通，1表示重要，2表示紧急)
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别(0表示普通，1表示重要，2表示紧急)
 * @method integer getAlarmIndicator() 获取告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
 * @method void setAlarmIndicator(integer $AlarmIndicator) 设置告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
 * @method string getAlarmWay() 获取告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
 * @method void setAlarmWay(string $AlarmWay) 设置告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
 * @method string getAlarmRecipientId() 获取告警接收人ID，多个用逗号隔开
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人ID，多个用逗号隔开
 * @method integer getTaskType() 获取任务类型(201表示实时，202表示离线)
 * @method void setTaskType(integer $TaskType) 设置任务类型(201表示实时，202表示离线)
 * @method string getAlarmRecipientName() 获取告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientName(string $AlarmRecipientName) 设置告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取主键ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置主键ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegularId() 获取规则ID
 * @method void setRegularId(string $RegularId) 设置规则ID
 * @method integer getTriggerType() 获取指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(integer $TriggerType) 设置指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedTime() 获取预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedTime(integer $EstimatedTime) 设置预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreater() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreater(string $Creater) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmIndicatorDesc() 获取告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmIndicatorDesc(string $AlarmIndicatorDesc) 设置告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperator() 获取实时任务告警需要的参数，1是大于2是小于
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(integer $Operator) 设置实时任务告警需要的参数，1是大于2是小于
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取节点id，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点id，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskAlarmInfo extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 规则名称
     */
    public $RegularName;

    /**
     * @var integer 规则状态(0表示关闭，1表示打开)
     */
    public $RegularStatus;

    /**
     * @var integer 告警级别(0表示普通，1表示重要，2表示紧急)
     */
    public $AlarmLevel;

    /**
     * @var integer 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
     */
    public $AlarmIndicator;

    /**
     * @var string 告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
     */
    public $AlarmWay;

    /**
     * @var string 告警接收人ID，多个用逗号隔开
     */
    public $AlarmRecipientId;

    /**
     * @var integer 任务类型(201表示实时，202表示离线)
     */
    public $TaskType;

    /**
     * @var string 告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientName;

    /**
     * @var string 主键ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 规则ID
     */
    public $RegularId;

    /**
     * @var integer 指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var integer 预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedTime;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creater;

    /**
     * @var string 告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmIndicatorDesc;

    /**
     * @var integer 实时任务告警需要的参数，1是大于2是小于
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 节点id，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 节点名称，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @param string $TaskId 任务ID
     * @param string $RegularName 规则名称
     * @param integer $RegularStatus 规则状态(0表示关闭，1表示打开)
     * @param integer $AlarmLevel 告警级别(0表示普通，1表示重要，2表示紧急)
     * @param integer $AlarmIndicator 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
     * @param string $AlarmWay 告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
     * @param string $AlarmRecipientId 告警接收人ID，多个用逗号隔开
     * @param integer $TaskType 任务类型(201表示实时，202表示离线)
     * @param string $AlarmRecipientName 告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 主键ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegularId 规则ID
     * @param integer $TriggerType 指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedTime 预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmIndicatorDesc 告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Operator 实时任务告警需要的参数，1是大于2是小于
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId 节点id，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称，多个逗号分隔
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RegularName",$param) and $param["RegularName"] !== null) {
            $this->RegularName = $param["RegularName"];
        }

        if (array_key_exists("RegularStatus",$param) and $param["RegularStatus"] !== null) {
            $this->RegularStatus = $param["RegularStatus"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmIndicator",$param) and $param["AlarmIndicator"] !== null) {
            $this->AlarmIndicator = $param["AlarmIndicator"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegularId",$param) and $param["RegularId"] !== null) {
            $this->RegularId = $param["RegularId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("AlarmIndicatorDesc",$param) and $param["AlarmIndicatorDesc"] !== null) {
            $this->AlarmIndicatorDesc = $param["AlarmIndicatorDesc"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
