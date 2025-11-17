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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警策略描述
 *
 * @method string getName() 获取告警策略名称。
 * @method void setName(string $Name) 设置告警策略名称。
 * @method array getAlarmTargets() 获取监控对象列表。
 * @method void setAlarmTargets(array $AlarmTargets) 设置监控对象列表。
 * @method MonitorTime getMonitorTime() 获取监控任务运行时间点。
 * @method void setMonitorTime(MonitorTime $MonitorTime) 设置监控任务运行时间点。
 * @method string getCondition() 获取是否触发告警的单触发条件。与MultiConditions参数互斥。
 * @method void setCondition(string $Condition) 设置是否触发告警的单触发条件。与MultiConditions参数互斥。
 * @method integer getTriggerCount() 获取持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
 * @method void setTriggerCount(integer $TriggerCount) 设置持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
 * @method integer getAlarmPeriod() 获取告警重复的周期。单位是min。取值范围是0~1440。
 * @method void setAlarmPeriod(integer $AlarmPeriod) 设置告警重复的周期。单位是min。取值范围是0~1440。
 * @method array getAlarmNoticeIds() 获取关联的告警通知渠道组列表。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取关联的告警通知渠道组列表，和MonitorNotice互斥
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) 设置关联的告警通知渠道组列表。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取关联的告警通知渠道组列表，和MonitorNotice互斥
 * @method boolean getStatus() 获取开启状态。
 * @method void setStatus(boolean $Status) 设置开启状态。
 * @method string getAlarmId() 获取告警策略ID。
 * @method void setAlarmId(string $AlarmId) 设置告警策略ID。
 * @method string getCreateTime() 获取创建时间。格式： YYYY-MM-DD HH:MM:SS
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式： YYYY-MM-DD HH:MM:SS
 * @method string getUpdateTime() 获取最近更新时间。格式： YYYY-MM-DD HH:MM:SS
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间。格式： YYYY-MM-DD HH:MM:SS
 * @method string getMessageTemplate() 获取自定义通知模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageTemplate(string $MessageTemplate) 设置自定义通知模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method CallBackInfo getCallBack() 获取自定义回调模板
 * @method void setCallBack(CallBackInfo $CallBack) 设置自定义回调模板
 * @method array getAnalysis() 获取多维分析设置
 * @method void setAnalysis(array $Analysis) 设置多维分析设置
 * @method boolean getGroupTriggerStatus() 获取分组触发状态。true：开启，false：关闭（默认）
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) 设置分组触发状态。true：开启，false：关闭（默认）
 * @method array getGroupTriggerCondition() 获取分组触发条件。
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) 设置分组触发条件。
 * @method array getTags() 获取告警策略绑定的标签信息。
 * @method void setTags(array $Tags) 设置告警策略绑定的标签信息。
 * @method integer getMonitorObjectType() 获取监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。 
 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。 
 * @method integer getAlarmLevel() 获取告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。
 * @method array getClassifications() 获取告警附加分类字段。
 * @method void setClassifications(array $Classifications) 设置告警附加分类字段。
 * @method array getMultiConditions() 获取多触发条件。与
Condition互斥。
 * @method void setMultiConditions(array $MultiConditions) 设置多触发条件。与
Condition互斥。
 * @method MonitorNotice getMonitorNotice() 获取腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥
 * @method void setMonitorNotice(MonitorNotice $MonitorNotice) 设置腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string 告警策略名称。
     */
    public $Name;

    /**
     * @var array 监控对象列表。
     */
    public $AlarmTargets;

    /**
     * @var MonitorTime 监控任务运行时间点。
     */
    public $MonitorTime;

    /**
     * @var string 是否触发告警的单触发条件。与MultiConditions参数互斥。
     */
    public $Condition;

    /**
     * @var integer 持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
     */
    public $TriggerCount;

    /**
     * @var integer 告警重复的周期。单位是min。取值范围是0~1440。
     */
    public $AlarmPeriod;

    /**
     * @var array 关联的告警通知渠道组列表。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取关联的告警通知渠道组列表，和MonitorNotice互斥
     */
    public $AlarmNoticeIds;

    /**
     * @var boolean 开启状态。
     */
    public $Status;

    /**
     * @var string 告警策略ID。
     */
    public $AlarmId;

    /**
     * @var string 创建时间。格式： YYYY-MM-DD HH:MM:SS
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间。格式： YYYY-MM-DD HH:MM:SS
     */
    public $UpdateTime;

    /**
     * @var string 自定义通知模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo 自定义回调模板
     */
    public $CallBack;

    /**
     * @var array 多维分析设置
     */
    public $Analysis;

    /**
     * @var boolean 分组触发状态。true：开启，false：关闭（默认）
     */
    public $GroupTriggerStatus;

    /**
     * @var array 分组触发条件。
     */
    public $GroupTriggerCondition;

    /**
     * @var array 告警策略绑定的标签信息。
     */
    public $Tags;

    /**
     * @var integer 监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。 
     */
    public $MonitorObjectType;

    /**
     * @var integer 告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。
     */
    public $AlarmLevel;

    /**
     * @var array 告警附加分类字段。
     */
    public $Classifications;

    /**
     * @var array 多触发条件。与
Condition互斥。
     */
    public $MultiConditions;

    /**
     * @var MonitorNotice 腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥
     */
    public $MonitorNotice;

    /**
     * @param string $Name 告警策略名称。
     * @param array $AlarmTargets 监控对象列表。
     * @param MonitorTime $MonitorTime 监控任务运行时间点。
     * @param string $Condition 是否触发告警的单触发条件。与MultiConditions参数互斥。
     * @param integer $TriggerCount 持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。
     * @param integer $AlarmPeriod 告警重复的周期。单位是min。取值范围是0~1440。
     * @param array $AlarmNoticeIds 关联的告警通知渠道组列表。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/product/614/56462)获取关联的告警通知渠道组列表，和MonitorNotice互斥
     * @param boolean $Status 开启状态。
     * @param string $AlarmId 告警策略ID。
     * @param string $CreateTime 创建时间。格式： YYYY-MM-DD HH:MM:SS
     * @param string $UpdateTime 最近更新时间。格式： YYYY-MM-DD HH:MM:SS
     * @param string $MessageTemplate 自定义通知模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param CallBackInfo $CallBack 自定义回调模板
     * @param array $Analysis 多维分析设置
     * @param boolean $GroupTriggerStatus 分组触发状态。true：开启，false：关闭（默认）
     * @param array $GroupTriggerCondition 分组触发条件。
     * @param array $Tags 告警策略绑定的标签信息。
     * @param integer $MonitorObjectType 监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。 
     * @param integer $AlarmLevel 告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。
     * @param array $Classifications 告警附加分类字段。
     * @param array $MultiConditions 多触发条件。与
Condition互斥。
     * @param MonitorNotice $MonitorNotice 腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AlarmTargets",$param) and $param["AlarmTargets"] !== null) {
            $this->AlarmTargets = [];
            foreach ($param["AlarmTargets"] as $key => $value){
                $obj = new AlarmTargetInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MessageTemplate",$param) and $param["MessageTemplate"] !== null) {
            $this->MessageTemplate = $param["MessageTemplate"];
        }

        if (array_key_exists("CallBack",$param) and $param["CallBack"] !== null) {
            $this->CallBack = new CallBackInfo();
            $this->CallBack->deserialize($param["CallBack"]);
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = [];
            foreach ($param["Analysis"] as $key => $value){
                $obj = new AnalysisDimensional();
                $obj->deserialize($value);
                array_push($this->Analysis, $obj);
            }
        }

        if (array_key_exists("GroupTriggerStatus",$param) and $param["GroupTriggerStatus"] !== null) {
            $this->GroupTriggerStatus = $param["GroupTriggerStatus"];
        }

        if (array_key_exists("GroupTriggerCondition",$param) and $param["GroupTriggerCondition"] !== null) {
            $this->GroupTriggerCondition = $param["GroupTriggerCondition"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("Classifications",$param) and $param["Classifications"] !== null) {
            $this->Classifications = [];
            foreach ($param["Classifications"] as $key => $value){
                $obj = new AlarmClassification();
                $obj->deserialize($value);
                array_push($this->Classifications, $obj);
            }
        }

        if (array_key_exists("MultiConditions",$param) and $param["MultiConditions"] !== null) {
            $this->MultiConditions = [];
            foreach ($param["MultiConditions"] as $key => $value){
                $obj = new MultiCondition();
                $obj->deserialize($value);
                array_push($this->MultiConditions, $obj);
            }
        }

        if (array_key_exists("MonitorNotice",$param) and $param["MonitorNotice"] !== null) {
            $this->MonitorNotice = new MonitorNotice();
            $this->MonitorNotice->deserialize($param["MonitorNotice"]);
        }
    }
}
