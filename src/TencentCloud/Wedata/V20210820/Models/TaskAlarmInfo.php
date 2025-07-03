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
 * @method string getAlarmWay() 获取告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
 * @method void setAlarmWay(string $AlarmWay) 设置告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
 * @method integer getTaskType() 获取任务类型(201表示实时，202表示离线)
 * @method void setTaskType(integer $TaskType) 设置任务类型(201表示实时，202表示离线)
 * @method string getId() 获取ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegularId() 获取规则ID
 * @method void setRegularId(string $RegularId) 设置规则ID
 * @method integer getAlarmIndicator() 获取告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
 * @method void setAlarmIndicator(integer $AlarmIndicator) 设置告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
 * @method integer getTriggerType() 获取指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(integer $TriggerType) 设置指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedTime() 获取预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedTime(integer $EstimatedTime) 设置预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmRecipientId() 获取告警接收人ID，多个用逗号隔开
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人ID，多个用逗号隔开
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreater() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreater(string $Creater) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmRecipientName() 获取告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientName(string $AlarmRecipientName) 设置告警接收人昵称，多个用逗号隔开
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
 * @method array getAlarmIndicatorInfos() 获取指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmIndicatorInfos(array $AlarmIndicatorInfos) 设置指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmRecipientType() 获取告警接收人类型，0指定人员；1任务责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) 设置告警接收人类型，0指定人员；1任务责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuietPeriods() 获取免打扰时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuietPeriods(array $QuietPeriods) 设置免打扰时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWeComHook() 获取企业微信群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeComHook(string $WeComHook) 设置企业微信群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取最近操作人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置最近操作人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCount() 获取关联任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置关联任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取监控对象类型,1:所有任务,2:指定任务,3:指定责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控对象类型,1:所有任务,2:指定任务,3:指定责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMonitorObjectIds() 获取监控对象列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorObjectIds(array $MonitorObjectIds) 设置监控对象列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestAlarmInstanceId() 获取最近一次告警的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestAlarmInstanceId(string $LatestAlarmInstanceId) 设置最近一次告警的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestAlarmTime() 获取最近一次告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestAlarmTime(string $LatestAlarmTime) 设置最近一次告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取告警规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置告警规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLarkWebHooks() 获取飞书群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarkWebHooks(string $LarkWebHooks) 设置飞书群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDingDingWebHooks() 获取钉钉群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDingDingWebHooks(string $DingDingWebHooks) 设置钉钉群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBusinessType() 获取业务类型, 0-非默认, 1-默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessType(integer $BusinessType) 设置业务类型, 0-非默认, 1-默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmMessageRule() 获取alarm message rule
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmMessageRule(string $AlarmMessageRule) 设置alarm message rule
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReportTarget() 获取 0- wedata, 1-inlong
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTarget(integer $ReportTarget) 设置 0- wedata, 1-inlong
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
     * @var string 告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
     */
    public $AlarmWay;

    /**
     * @var integer 任务类型(201表示实时，202表示离线)
     */
    public $TaskType;

    /**
     * @var string ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 规则ID
     */
    public $RegularId;

    /**
     * @var integer 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
     */
    public $AlarmIndicator;

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
     * @var string 告警接收人ID，多个用逗号隔开
     */
    public $AlarmRecipientId;

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
     * @var string 告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientName;

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
     * @var array 指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmIndicatorInfos;

    /**
     * @var integer 告警接收人类型，0指定人员；1任务责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientType;

    /**
     * @var array 免打扰时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuietPeriods;

    /**
     * @var string 企业微信群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeComHook;

    /**
     * @var string 最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最近操作人Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var integer 关联任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var integer 监控对象类型,1:所有任务,2:指定任务,3:指定责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var array 监控对象列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorObjectIds;

    /**
     * @var string 最近一次告警的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestAlarmInstanceId;

    /**
     * @var string 最近一次告警时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestAlarmTime;

    /**
     * @var string 告警规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 飞书群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LarkWebHooks;

    /**
     * @var string 钉钉群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DingDingWebHooks;

    /**
     * @var integer 业务类型, 0-非默认, 1-默认
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessType;

    /**
     * @var string alarm message rule
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmMessageRule;

    /**
     * @var integer  0- wedata, 1-inlong
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTarget;

    /**
     * @param string $TaskId 任务ID
     * @param string $RegularName 规则名称
     * @param integer $RegularStatus 规则状态(0表示关闭，1表示打开)
     * @param integer $AlarmLevel 告警级别(0表示普通，1表示重要，2表示紧急)
     * @param string $AlarmWay 告警方式,多个用逗号隔开（1:邮件，2:短信，3:微信，4:语音，5:代表企业微信，6:http）
     * @param integer $TaskType 任务类型(201表示实时，202表示离线)
     * @param string $Id ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegularId 规则ID
     * @param integer $AlarmIndicator 告警指标,0表示任务失败，1表示任务运行超时，2表示任务停止，3表示任务暂停
，4写入速度，5读取速度，6读取吞吐，7写入吞吐, 8脏数据字节数，9脏数据条数
     * @param integer $TriggerType 指标阈值(1表示离线任务第一次运行失败，2表示离线任务所有重试完成后失败)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedTime 预计的超时时间(分钟级别)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmRecipientId 告警接收人ID，多个用逗号隔开
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmRecipientName 告警接收人昵称，多个用逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmIndicatorDesc 告警指标描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Operator 实时任务告警需要的参数，1是大于2是小于
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId 节点id，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称，多个逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmIndicatorInfos 指标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmRecipientType 告警接收人类型，0指定人员；1任务责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuietPeriods 免打扰时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WeComHook 企业微信群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin 最近操作人Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCount 关联任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控对象类型,1:所有任务,2:指定任务,3:指定责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MonitorObjectIds 监控对象列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestAlarmInstanceId 最近一次告警的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestAlarmTime 最近一次告警时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 告警规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LarkWebHooks 飞书群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DingDingWebHooks 钉钉群Hook地址，多个hook地址使用,隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BusinessType 业务类型, 0-非默认, 1-默认
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmMessageRule alarm message rule
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReportTarget  0- wedata, 1-inlong
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

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegularId",$param) and $param["RegularId"] !== null) {
            $this->RegularId = $param["RegularId"];
        }

        if (array_key_exists("AlarmIndicator",$param) and $param["AlarmIndicator"] !== null) {
            $this->AlarmIndicator = $param["AlarmIndicator"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
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

        if (array_key_exists("AlarmIndicatorInfos",$param) and $param["AlarmIndicatorInfos"] !== null) {
            $this->AlarmIndicatorInfos = [];
            foreach ($param["AlarmIndicatorInfos"] as $key => $value){
                $obj = new AlarmIndicatorInfo();
                $obj->deserialize($value);
                array_push($this->AlarmIndicatorInfos, $obj);
            }
        }

        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("QuietPeriods",$param) and $param["QuietPeriods"] !== null) {
            $this->QuietPeriods = [];
            foreach ($param["QuietPeriods"] as $key => $value){
                $obj = new QuietPeriod();
                $obj->deserialize($value);
                array_push($this->QuietPeriods, $obj);
            }
        }

        if (array_key_exists("WeComHook",$param) and $param["WeComHook"] !== null) {
            $this->WeComHook = $param["WeComHook"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("MonitorObjectIds",$param) and $param["MonitorObjectIds"] !== null) {
            $this->MonitorObjectIds = $param["MonitorObjectIds"];
        }

        if (array_key_exists("LatestAlarmInstanceId",$param) and $param["LatestAlarmInstanceId"] !== null) {
            $this->LatestAlarmInstanceId = $param["LatestAlarmInstanceId"];
        }

        if (array_key_exists("LatestAlarmTime",$param) and $param["LatestAlarmTime"] !== null) {
            $this->LatestAlarmTime = $param["LatestAlarmTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LarkWebHooks",$param) and $param["LarkWebHooks"] !== null) {
            $this->LarkWebHooks = $param["LarkWebHooks"];
        }

        if (array_key_exists("DingDingWebHooks",$param) and $param["DingDingWebHooks"] !== null) {
            $this->DingDingWebHooks = $param["DingDingWebHooks"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("AlarmMessageRule",$param) and $param["AlarmMessageRule"] !== null) {
            $this->AlarmMessageRule = $param["AlarmMessageRule"];
        }

        if (array_key_exists("ReportTarget",$param) and $param["ReportTarget"] !== null) {
            $this->ReportTarget = $param["ReportTarget"];
        }
    }
}
