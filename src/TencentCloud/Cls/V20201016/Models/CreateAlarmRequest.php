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
 * CreateAlarm请求参数结构体
 *
 * @method string getName() 获取<p>告警策略名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
 * @method void setName(string $Name) 设置<p>告警策略名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
 * @method array getAlarmTargets() 获取<p>监控对象列表。</p>
 * @method void setAlarmTargets(array $AlarmTargets) 设置<p>监控对象列表。</p>
 * @method MonitorTime getMonitorTime() 获取<p>监控任务运行时间点。</p>
 * @method void setMonitorTime(MonitorTime $MonitorTime) 设置<p>监控任务运行时间点。</p>
 * @method integer getTriggerCount() 获取<p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。</p>
 * @method void setTriggerCount(integer $TriggerCount) 设置<p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。</p>
 * @method integer getAlarmPeriod() 获取<p>告警重复的周期，单位是分钟。取值范围是0~1440。</p>
 * @method void setAlarmPeriod(integer $AlarmPeriod) 设置<p>告警重复的周期，单位是分钟。取值范围是0~1440。</p>
 * @method string getCondition() 获取<p>告警发送通知的触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
 * @method void setCondition(string $Condition) 设置<p>告警发送通知的触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
 * @method integer getAlarmLevel() 获取<p>告警级别<br>0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。<br>注意:  </p><ul><li>不填则默认为0。</li><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
 * @method void setAlarmLevel(integer $AlarmLevel) 设置<p>告警级别<br>0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。<br>注意:  </p><ul><li>不填则默认为0。</li><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
 * @method array getMultiConditions() 获取<p>多触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
 * @method void setMultiConditions(array $MultiConditions) 设置<p>多触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
 * @method boolean getStatus() 获取<p>是否开启告警策略。<br>默认值为true</p>
 * @method void setStatus(boolean $Status) 设置<p>是否开启告警策略。<br>默认值为true</p>
 * @method boolean getEnable() 获取<p>请使用Status参数控制是否开启告警策略。</p>
 * @method void setEnable(boolean $Enable) 设置<p>请使用Status参数控制是否开启告警策略。</p>
 * @method string getMessageTemplate() 获取<p>用户自定义告警内容</p>
 * @method void setMessageTemplate(string $MessageTemplate) 设置<p>用户自定义告警内容</p>
 * @method CallBackInfo getCallBack() 获取<p>用户自定义回调</p>
 * @method void setCallBack(CallBackInfo $CallBack) 设置<p>用户自定义回调</p>
 * @method array getAnalysis() 获取<p>多维分析</p>
 * @method void setAnalysis(array $Analysis) 设置<p>多维分析</p>
 * @method boolean getGroupTriggerStatus() 获取<p>分组触发状态。<br>默认值false</p>
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) 设置<p>分组触发状态。<br>默认值false</p>
 * @method array getGroupTriggerCondition() 获取<p>分组触发条件。</p>
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) 设置<p>分组触发条件。</p>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。</p><p>最大支持10个标签键值对，并且不能有重复的键值对。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。</p><p>最大支持10个标签键值对，并且不能有重复的键值对。</p>
 * @method integer getMonitorObjectType() 获取<p>监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。<br>不填则默认为0。<br>当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。</p>
 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置<p>监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。<br>不填则默认为0。<br>当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。</p>
 * @method array getClassifications() 获取<p>告警附加分类信息列表。<br>Classifications元素个数不能超过20个。<br>Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 <code>^[a-z]([a-z0-9_]{0,49})$</code>。<br>Classifications元素的Value长度不能超过200个字符。</p>
 * @method void setClassifications(array $Classifications) 设置<p>告警附加分类信息列表。<br>Classifications元素个数不能超过20个。<br>Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 <code>^[a-z]([a-z0-9_]{0,49})$</code>。<br>Classifications元素的Value长度不能超过200个字符。</p>
 * @method array getAlarmNoticeIds() 获取<p>关联的日志服务告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) 设置<p>关联的日志服务告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
 * @method MonitorNotice getMonitorNotice() 获取<p>关联的可观测平台通知模板，与 AlarmNoticeIds 参数互斥，不能同时使用</p>
 * @method void setMonitorNotice(MonitorNotice $MonitorNotice) 设置<p>关联的可观测平台通知模板，与 AlarmNoticeIds 参数互斥，不能同时使用</p>
 */
class CreateAlarmRequest extends AbstractModel
{
    /**
     * @var string <p>告警策略名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
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
     * @var integer <p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。</p>
     */
    public $TriggerCount;

    /**
     * @var integer <p>告警重复的周期，单位是分钟。取值范围是0~1440。</p>
     */
    public $AlarmPeriod;

    /**
     * @var string <p>告警发送通知的触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
     */
    public $Condition;

    /**
     * @var integer <p>告警级别<br>0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。<br>注意:  </p><ul><li>不填则默认为0。</li><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
     */
    public $AlarmLevel;

    /**
     * @var array <p>多触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
     */
    public $MultiConditions;

    /**
     * @var boolean <p>是否开启告警策略。<br>默认值为true</p>
     */
    public $Status;

    /**
     * @var boolean <p>请使用Status参数控制是否开启告警策略。</p>
     * @deprecated
     */
    public $Enable;

    /**
     * @var string <p>用户自定义告警内容</p>
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo <p>用户自定义回调</p>
     */
    public $CallBack;

    /**
     * @var array <p>多维分析</p>
     */
    public $Analysis;

    /**
     * @var boolean <p>分组触发状态。<br>默认值false</p>
     */
    public $GroupTriggerStatus;

    /**
     * @var array <p>分组触发条件。</p>
     */
    public $GroupTriggerCondition;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。</p><p>最大支持10个标签键值对，并且不能有重复的键值对。</p>
     */
    public $Tags;

    /**
     * @var integer <p>监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。<br>不填则默认为0。<br>当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。</p>
     */
    public $MonitorObjectType;

    /**
     * @var array <p>告警附加分类信息列表。<br>Classifications元素个数不能超过20个。<br>Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 <code>^[a-z]([a-z0-9_]{0,49})$</code>。<br>Classifications元素的Value长度不能超过200个字符。</p>
     */
    public $Classifications;

    /**
     * @var array <p>关联的日志服务告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
     */
    public $AlarmNoticeIds;

    /**
     * @var MonitorNotice <p>关联的可观测平台通知模板，与 AlarmNoticeIds 参数互斥，不能同时使用</p>
     */
    public $MonitorNotice;

    /**
     * @param string $Name <p>告警策略名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
     * @param array $AlarmTargets <p>监控对象列表。</p>
     * @param MonitorTime $MonitorTime <p>监控任务运行时间点。</p>
     * @param integer $TriggerCount <p>持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。</p>
     * @param integer $AlarmPeriod <p>告警重复的周期，单位是分钟。取值范围是0~1440。</p>
     * @param string $Condition <p>告警发送通知的触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
     * @param integer $AlarmLevel <p>告警级别<br>0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。<br>注意:  </p><ul><li>不填则默认为0。</li><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
     * @param array $MultiConditions <p>多触发条件<br> 注意:  </p><ul><li>Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。</li></ul>
     * @param boolean $Status <p>是否开启告警策略。<br>默认值为true</p>
     * @param boolean $Enable <p>请使用Status参数控制是否开启告警策略。</p>
     * @param string $MessageTemplate <p>用户自定义告警内容</p>
     * @param CallBackInfo $CallBack <p>用户自定义回调</p>
     * @param array $Analysis <p>多维分析</p>
     * @param boolean $GroupTriggerStatus <p>分组触发状态。<br>默认值false</p>
     * @param array $GroupTriggerCondition <p>分组触发条件。</p>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。</p><p>最大支持10个标签键值对，并且不能有重复的键值对。</p>
     * @param integer $MonitorObjectType <p>监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。<br>不填则默认为0。<br>当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。</p>
     * @param array $Classifications <p>告警附加分类信息列表。<br>Classifications元素个数不能超过20个。<br>Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 <code>^[a-z]([a-z0-9_]{0,49})$</code>。<br>Classifications元素的Value长度不能超过200个字符。</p>
     * @param array $AlarmNoticeIds <p>关联的日志服务告警通知渠道组列表。-通过<a href="https://cloud.tencent.com/document/product/614/56462">获取通知渠道组列表</a>获取关联的告警通知渠道组列表，和MonitorNotice互斥</p>
     * @param MonitorNotice $MonitorNotice <p>关联的可观测平台通知模板，与 AlarmNoticeIds 参数互斥，不能同时使用</p>
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
                $obj = new AlarmTarget();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
            }
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("MultiConditions",$param) and $param["MultiConditions"] !== null) {
            $this->MultiConditions = [];
            foreach ($param["MultiConditions"] as $key => $value){
                $obj = new MultiCondition();
                $obj->deserialize($value);
                array_push($this->MultiConditions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
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

        if (array_key_exists("Classifications",$param) and $param["Classifications"] !== null) {
            $this->Classifications = [];
            foreach ($param["Classifications"] as $key => $value){
                $obj = new AlarmClassification();
                $obj->deserialize($value);
                array_push($this->Classifications, $obj);
            }
        }

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("MonitorNotice",$param) and $param["MonitorNotice"] !== null) {
            $this->MonitorNotice = new MonitorNotice();
            $this->MonitorNotice->deserialize($param["MonitorNotice"]);
        }
    }
}
