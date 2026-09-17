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
 * @method string getName() 获取<p>告警策略名称。</p>
 * @method void setName(string $Name) 设置<p>告警策略名称。</p>
 * @method array getAlarmTargets() 获取<p>监控对象列表。</p>
 * @method void setAlarmTargets(array $AlarmTargets) 设置<p>监控对象列表。</p>
 * @method MonitorTime getMonitorTime() 获取<p>监控任务运行时间点。</p>
 * @method void setMonitorTime(MonitorTime $MonitorTime) 设置<p>监控任务运行时间点。</p>
 * @method string getCondition() 获取<p>是否触发告警的单触发条件。与MultiConditions参数互斥。</p>
 * @method void setCondition(string $Condition) 设置<p>是否触发告警的单触发条件。与MultiConditions参数互斥。</p>
 * @method integer getTriggerCount() 获取<p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。</p>
 * @method void setTriggerCount(integer $TriggerCount) 设置<p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。</p>
 * @method integer getAlarmPeriod() 获取<p>告警重复的周期。单位是min。取值范围是0~1440。</p>
 * @method void setAlarmPeriod(integer $AlarmPeriod) 设置<p>告警重复的周期。单位是min。取值范围是0~1440。</p>
 * @method array getAlarmNoticeIds() 获取<p>关联的告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) 设置<p>关联的告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
 * @method boolean getStatus() 获取<p>开启状态。</p>
 * @method void setStatus(boolean $Status) 设置<p>开启状态。</p>
 * @method string getAlarmId() 获取<p>告警策略ID。</p>
 * @method void setAlarmId(string $AlarmId) 设置<p>告警策略ID。</p>
 * @method string getCreateTime() 获取<p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method string getUpdateTime() 获取<p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
 * @method string getMessageTemplate() 获取<p>自定义通知模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageTemplate(string $MessageTemplate) 设置<p>自定义通知模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CallBackInfo getCallBack() 获取<p>自定义回调模板</p>
 * @method void setCallBack(CallBackInfo $CallBack) 设置<p>自定义回调模板</p>
 * @method array getAnalysis() 获取<p>多维分析设置</p>
 * @method void setAnalysis(array $Analysis) 设置<p>多维分析设置</p>
 * @method boolean getGroupTriggerStatus() 获取<p>分组触发状态。true：开启，false：关闭（默认）</p>
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) 设置<p>分组触发状态。true：开启，false：关闭（默认）</p>
 * @method array getGroupTriggerCondition() 获取<p>分组触发条件。</p>
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) 设置<p>分组触发条件。</p>
 * @method array getTags() 获取<p>告警策略绑定的标签信息。</p>
 * @method void setTags(array $Tags) 设置<p>告警策略绑定的标签信息。</p>
 * @method integer getMonitorObjectType() 获取<p>监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。</p>
 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置<p>监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。</p>
 * @method integer getAlarmLevel() 获取<p>告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。</p>
 * @method void setAlarmLevel(integer $AlarmLevel) 设置<p>告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。</p>
 * @method array getClassifications() 获取<p>告警附加分类字段。</p>
 * @method void setClassifications(array $Classifications) 设置<p>告警附加分类字段。</p>
 * @method array getMultiConditions() 获取<p>多触发条件。与<br>Condition互斥。</p>
 * @method void setMultiConditions(array $MultiConditions) 设置<p>多触发条件。与<br>Condition互斥。</p>
 * @method MonitorNotice getMonitorNotice() 获取<p>腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥</p>
 * @method void setMonitorNotice(MonitorNotice $MonitorNotice) 设置<p>腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥</p>
 * @method AIAnalysis getAIAnalysis() 获取<p>AI分析内容</p>
 * @method void setAIAnalysis(AIAnalysis $AIAnalysis) 设置<p>AI分析内容</p>
 * @method integer getSubUin() 获取<p>最后修改人的uin信息</p>
 * @method void setSubUin(integer $SubUin) 设置<p>最后修改人的uin信息</p>
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string <p>告警策略名称。</p>
     */
    public $Name;

    /**
     * @var array <p>监控对象列表。</p>
     */
    public $AlarmTargets;

    /**
     * @var MonitorTime <p>监控任务运行时间点。</p>
     */
    public $MonitorTime;

    /**
     * @var string <p>是否触发告警的单触发条件。与MultiConditions参数互斥。</p>
     */
    public $Condition;

    /**
     * @var integer <p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。</p>
     */
    public $TriggerCount;

    /**
     * @var integer <p>告警重复的周期。单位是min。取值范围是0~1440。</p>
     */
    public $AlarmPeriod;

    /**
     * @var array <p>关联的告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
     */
    public $AlarmNoticeIds;

    /**
     * @var boolean <p>开启状态。</p>
     */
    public $Status;

    /**
     * @var string <p>告警策略ID。</p>
     */
    public $AlarmId;

    /**
     * @var string <p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>自定义通知模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo <p>自定义回调模板</p>
     */
    public $CallBack;

    /**
     * @var array <p>多维分析设置</p>
     */
    public $Analysis;

    /**
     * @var boolean <p>分组触发状态。true：开启，false：关闭（默认）</p>
     */
    public $GroupTriggerStatus;

    /**
     * @var array <p>分组触发条件。</p>
     */
    public $GroupTriggerCondition;

    /**
     * @var array <p>告警策略绑定的标签信息。</p>
     */
    public $Tags;

    /**
     * @var integer <p>监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。</p>
     */
    public $MonitorObjectType;

    /**
     * @var integer <p>告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。</p>
     */
    public $AlarmLevel;

    /**
     * @var array <p>告警附加分类字段。</p>
     */
    public $Classifications;

    /**
     * @var array <p>多触发条件。与<br>Condition互斥。</p>
     */
    public $MultiConditions;

    /**
     * @var MonitorNotice <p>腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥</p>
     */
    public $MonitorNotice;

    /**
     * @var AIAnalysis <p>AI分析内容</p>
     */
    public $AIAnalysis;

    /**
     * @var integer <p>最后修改人的uin信息</p>
     */
    public $SubUin;

    /**
     * @param string $Name <p>告警策略名称。</p>
     * @param array $AlarmTargets <p>监控对象列表。</p>
     * @param MonitorTime $MonitorTime <p>监控任务运行时间点。</p>
     * @param string $Condition <p>是否触发告警的单触发条件。与MultiConditions参数互斥。</p>
     * @param integer $TriggerCount <p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为10。</p>
     * @param integer $AlarmPeriod <p>告警重复的周期。单位是min。取值范围是0~1440。</p>
     * @param array $AlarmNoticeIds <p>关联的告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
     * @param boolean $Status <p>开启状态。</p>
     * @param string $AlarmId <p>告警策略ID。</p>
     * @param string $CreateTime <p>创建时间。格式： YYYY-MM-DD HH:MM:SS</p>
     * @param string $UpdateTime <p>最近更新时间。格式： YYYY-MM-DD HH:MM:SS</p>
     * @param string $MessageTemplate <p>自定义通知模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CallBackInfo $CallBack <p>自定义回调模板</p>
     * @param array $Analysis <p>多维分析设置</p>
     * @param boolean $GroupTriggerStatus <p>分组触发状态。true：开启，false：关闭（默认）</p>
     * @param array $GroupTriggerCondition <p>分组触发条件。</p>
     * @param array $Tags <p>告警策略绑定的标签信息。</p>
     * @param integer $MonitorObjectType <p>监控对象类型。0:执行语句共用监控对象;1:每个执行语句单独选择监控对象。</p>
     * @param integer $AlarmLevel <p>告警级别。0:警告(Warn);1:提醒(Info);2:紧急 (Critical)。</p>
     * @param array $Classifications <p>告警附加分类字段。</p>
     * @param array $MultiConditions <p>多触发条件。与<br>Condition互斥。</p>
     * @param MonitorNotice $MonitorNotice <p>腾讯云可观测平台通知渠道相关信息，和AlarmNoticeIds互斥</p>
     * @param AIAnalysis $AIAnalysis <p>AI分析内容</p>
     * @param integer $SubUin <p>最后修改人的uin信息</p>
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

        if (array_key_exists("AIAnalysis",$param) and $param["AIAnalysis"] !== null) {
            $this->AIAnalysis = new AIAnalysis();
            $this->AIAnalysis->deserialize($param["AIAnalysis"]);
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }
    }
}
