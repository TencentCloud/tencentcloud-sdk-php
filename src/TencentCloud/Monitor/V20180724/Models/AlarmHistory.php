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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警历史数据
 *
 * @method string getAlarmId() 获取告警历史Id
 * @method void setAlarmId(string $AlarmId) 设置告警历史Id
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method string getNamespace() 获取策略类型
 * @method void setNamespace(string $Namespace) 设置策略类型
 * @method string getAlarmObject() 获取告警对象
 * @method void setAlarmObject(string $AlarmObject) 设置告警对象
 * @method string getContent() 获取告警内容
 * @method void setContent(string $Content) 设置告警内容
 * @method integer getFirstOccurTime() 获取时间戳，首次出现时间
 * @method void setFirstOccurTime(integer $FirstOccurTime) 设置时间戳，首次出现时间
 * @method integer getLastOccurTime() 获取时间戳，最后出现时间
 * @method void setLastOccurTime(integer $LastOccurTime) 设置时间戳，最后出现时间
 * @method string getAlarmStatus() 获取告警状态，ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足
 * @method void setAlarmStatus(string $AlarmStatus) 设置告警状态，ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足
 * @method string getPolicyId() 获取告警策略 Id
 * @method void setPolicyId(string $PolicyId) 设置告警策略 Id
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method string getVPC() 获取基础产品告警的告警对象所属网络
 * @method void setVPC(string $VPC) 设置基础产品告警的告警对象所属网络
 * @method integer getProjectId() 获取项目 Id
 * @method void setProjectId(integer $ProjectId) 设置项目 Id
 * @method string getProjectName() 获取项目名字
 * @method void setProjectName(string $ProjectName) 设置项目名字
 * @method array getInstanceGroup() 获取告警对象所属实例组
 * @method void setInstanceGroup(array $InstanceGroup) 设置告警对象所属实例组
 * @method array getReceiverUids() 获取接收人列表
 * @method void setReceiverUids(array $ReceiverUids) 设置接收人列表
 * @method array getReceiverGroups() 获取接收组列表
 * @method void setReceiverGroups(array $ReceiverGroups) 设置接收组列表
 * @method array getNoticeWays() 获取告警渠道列表 SMS=短信 EMAIL=邮件 CALL=电话 WECHAT=微信
 * @method void setNoticeWays(array $NoticeWays) 设置告警渠道列表 SMS=短信 EMAIL=邮件 CALL=电话 WECHAT=微信
 * @method string getOriginId() 获取可用于实例、实例组的绑定和解绑接口（[BindingPolicyObject](https://cloud.tencent.com/document/product/248/40421)、[UnBindingAllPolicyObject](https://cloud.tencent.com/document/product/248/40568)、[UnBindingPolicyObject](https://cloud.tencent.com/document/product/248/40567)）的策略 ID
 * @method void setOriginId(string $OriginId) 设置可用于实例、实例组的绑定和解绑接口（[BindingPolicyObject](https://cloud.tencent.com/document/product/248/40421)、[UnBindingAllPolicyObject](https://cloud.tencent.com/document/product/248/40568)、[UnBindingPolicyObject](https://cloud.tencent.com/document/product/248/40567)）的策略 ID
 * @method string getAlarmType() 获取告警类型
 * @method void setAlarmType(string $AlarmType) 设置告警类型
 * @method integer getEventId() 获取事件Id
 * @method void setEventId(integer $EventId) 设置事件Id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getPolicyExists() 获取策略是否存在 0=不存在 1=存在
 * @method void setPolicyExists(integer $PolicyExists) 设置策略是否存在 0=不存在 1=存在
 * @method array getMetricsInfo() 获取指标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricsInfo(array $MetricsInfo) 设置指标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimensions() 获取告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(string $Dimensions) 设置告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmLevel() 获取告警等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(string $AlarmLevel) 设置告警等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShieldFlag() 获取是否有配置告警屏蔽规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldFlag(integer $ShieldFlag) 设置是否有配置告警屏蔽规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmShieldingType() 获取屏蔽类型（英文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldingType(string $AlarmShieldingType) 设置屏蔽类型（英文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmShieldingTime() 获取屏蔽时间（英文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldingTime(string $AlarmShieldingTime) 设置屏蔽时间（英文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmShieldingShowType() 获取屏蔽类型（中文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldingShowType(string $AlarmShieldingShowType) 设置屏蔽类型（中文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmShieldingShowTime() 获取屏蔽时间（中文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldingShowTime(string $AlarmShieldingShowTime) 设置屏蔽时间（中文）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmShieldReason() 获取屏蔽原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmShieldReason(string $AlarmShieldReason) 设置屏蔽原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalDimensions() 获取告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalDimensions(string $InternalDimensions) 设置告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyPermissions() 获取策略是否有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyPermissions(integer $PolicyPermissions) 设置策略是否有权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmHistory extends AbstractModel
{
    /**
     * @var string 告警历史Id
     */
    public $AlarmId;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var string 策略类型
     */
    public $Namespace;

    /**
     * @var string 告警对象
     */
    public $AlarmObject;

    /**
     * @var string 告警内容
     */
    public $Content;

    /**
     * @var integer 时间戳，首次出现时间
     */
    public $FirstOccurTime;

    /**
     * @var integer 时间戳，最后出现时间
     */
    public $LastOccurTime;

    /**
     * @var string 告警状态，ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足
     */
    public $AlarmStatus;

    /**
     * @var string 告警策略 Id
     */
    public $PolicyId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var string 基础产品告警的告警对象所属网络
     */
    public $VPC;

    /**
     * @var integer 项目 Id
     */
    public $ProjectId;

    /**
     * @var string 项目名字
     */
    public $ProjectName;

    /**
     * @var array 告警对象所属实例组
     */
    public $InstanceGroup;

    /**
     * @var array 接收人列表
     */
    public $ReceiverUids;

    /**
     * @var array 接收组列表
     */
    public $ReceiverGroups;

    /**
     * @var array 告警渠道列表 SMS=短信 EMAIL=邮件 CALL=电话 WECHAT=微信
     */
    public $NoticeWays;

    /**
     * @var string 可用于实例、实例组的绑定和解绑接口（[BindingPolicyObject](https://cloud.tencent.com/document/product/248/40421)、[UnBindingAllPolicyObject](https://cloud.tencent.com/document/product/248/40568)、[UnBindingPolicyObject](https://cloud.tencent.com/document/product/248/40567)）的策略 ID
     */
    public $OriginId;

    /**
     * @var string 告警类型
     */
    public $AlarmType;

    /**
     * @var integer 事件Id
     */
    public $EventId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 策略是否存在 0=不存在 1=存在
     */
    public $PolicyExists;

    /**
     * @var array 指标信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricsInfo;

    /**
     * @var string 告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @var string 告警等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var integer 是否有配置告警屏蔽规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldFlag;

    /**
     * @var string 屏蔽类型（英文）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldingType;

    /**
     * @var string 屏蔽时间（英文）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldingTime;

    /**
     * @var string 屏蔽类型（中文）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldingShowType;

    /**
     * @var string 屏蔽时间（中文）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldingShowTime;

    /**
     * @var string 屏蔽原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmShieldReason;

    /**
     * @var string 告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalDimensions;

    /**
     * @var string 指标名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var integer 策略是否有权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyPermissions;

    /**
     * @param string $AlarmId 告警历史Id
     * @param string $MonitorType 监控类型
     * @param string $Namespace 策略类型
     * @param string $AlarmObject 告警对象
     * @param string $Content 告警内容
     * @param integer $FirstOccurTime 时间戳，首次出现时间
     * @param integer $LastOccurTime 时间戳，最后出现时间
     * @param string $AlarmStatus 告警状态，ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足
     * @param string $PolicyId 告警策略 Id
     * @param string $PolicyName 策略名称
     * @param string $VPC 基础产品告警的告警对象所属网络
     * @param integer $ProjectId 项目 Id
     * @param string $ProjectName 项目名字
     * @param array $InstanceGroup 告警对象所属实例组
     * @param array $ReceiverUids 接收人列表
     * @param array $ReceiverGroups 接收组列表
     * @param array $NoticeWays 告警渠道列表 SMS=短信 EMAIL=邮件 CALL=电话 WECHAT=微信
     * @param string $OriginId 可用于实例、实例组的绑定和解绑接口（[BindingPolicyObject](https://cloud.tencent.com/document/product/248/40421)、[UnBindingAllPolicyObject](https://cloud.tencent.com/document/product/248/40568)、[UnBindingPolicyObject](https://cloud.tencent.com/document/product/248/40567)）的策略 ID
     * @param string $AlarmType 告警类型
     * @param integer $EventId 事件Id
     * @param string $Region 地域
     * @param integer $PolicyExists 策略是否存在 0=不存在 1=存在
     * @param array $MetricsInfo 指标信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dimensions 告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmLevel 告警等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShieldFlag 是否有配置告警屏蔽规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmShieldingType 屏蔽类型（英文）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmShieldingTime 屏蔽时间（英文）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmShieldingShowType 屏蔽类型（中文）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmShieldingShowTime 屏蔽时间（中文）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmShieldReason 屏蔽原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalDimensions 告警实例的维度信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName 指标名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyPermissions 策略是否有权限
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

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("AlarmObject",$param) and $param["AlarmObject"] !== null) {
            $this->AlarmObject = $param["AlarmObject"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FirstOccurTime",$param) and $param["FirstOccurTime"] !== null) {
            $this->FirstOccurTime = $param["FirstOccurTime"];
        }

        if (array_key_exists("LastOccurTime",$param) and $param["LastOccurTime"] !== null) {
            $this->LastOccurTime = $param["LastOccurTime"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("VPC",$param) and $param["VPC"] !== null) {
            $this->VPC = $param["VPC"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = [];
            foreach ($param["InstanceGroup"] as $key => $value){
                $obj = new InstanceGroups();
                $obj->deserialize($value);
                array_push($this->InstanceGroup, $obj);
            }
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("NoticeWays",$param) and $param["NoticeWays"] !== null) {
            $this->NoticeWays = $param["NoticeWays"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PolicyExists",$param) and $param["PolicyExists"] !== null) {
            $this->PolicyExists = $param["PolicyExists"];
        }

        if (array_key_exists("MetricsInfo",$param) and $param["MetricsInfo"] !== null) {
            $this->MetricsInfo = [];
            foreach ($param["MetricsInfo"] as $key => $value){
                $obj = new AlarmHistoryMetric();
                $obj->deserialize($value);
                array_push($this->MetricsInfo, $obj);
            }
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("ShieldFlag",$param) and $param["ShieldFlag"] !== null) {
            $this->ShieldFlag = $param["ShieldFlag"];
        }

        if (array_key_exists("AlarmShieldingType",$param) and $param["AlarmShieldingType"] !== null) {
            $this->AlarmShieldingType = $param["AlarmShieldingType"];
        }

        if (array_key_exists("AlarmShieldingTime",$param) and $param["AlarmShieldingTime"] !== null) {
            $this->AlarmShieldingTime = $param["AlarmShieldingTime"];
        }

        if (array_key_exists("AlarmShieldingShowType",$param) and $param["AlarmShieldingShowType"] !== null) {
            $this->AlarmShieldingShowType = $param["AlarmShieldingShowType"];
        }

        if (array_key_exists("AlarmShieldingShowTime",$param) and $param["AlarmShieldingShowTime"] !== null) {
            $this->AlarmShieldingShowTime = $param["AlarmShieldingShowTime"];
        }

        if (array_key_exists("AlarmShieldReason",$param) and $param["AlarmShieldReason"] !== null) {
            $this->AlarmShieldReason = $param["AlarmShieldReason"];
        }

        if (array_key_exists("InternalDimensions",$param) and $param["InternalDimensions"] !== null) {
            $this->InternalDimensions = $param["InternalDimensions"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("PolicyPermissions",$param) and $param["PolicyPermissions"] !== null) {
            $this->PolicyPermissions = $param["PolicyPermissions"];
        }
    }
}
