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
 * ModifyAlarm请求参数结构体
 *
 * @method string getAlarmId() 获取告警策略ID。
 * @method void setAlarmId(string $AlarmId) 设置告警策略ID。
 * @method string getName() 获取告警策略名称
 * @method void setName(string $Name) 设置告警策略名称
 * @method MonitorTime getMonitorTime() 获取监控任务运行时间点。
 * @method void setMonitorTime(MonitorTime $MonitorTime) 设置监控任务运行时间点。
 * @method string getCondition() 获取触发条件。

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
 * @method void setCondition(string $Condition) 设置触发条件。

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
 * @method integer getAlarmLevel() 获取告警级别。

0:警告(Warn);1:提醒(Info);2:紧急 (Critical)

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别。

0:警告(Warn);1:提醒(Info);2:紧急 (Critical)

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
 * @method array getMultiConditions() 获取多触发条件。 

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
 * @method void setMultiConditions(array $MultiConditions) 设置多触发条件。 

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
 * @method integer getTriggerCount() 获取持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。
 * @method void setTriggerCount(integer $TriggerCount) 设置持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。
 * @method integer getAlarmPeriod() 获取告警重复的周期。单位是分钟。取值范围是0~1440。
 * @method void setAlarmPeriod(integer $AlarmPeriod) 设置告警重复的周期。单位是分钟。取值范围是0~1440。
 * @method array getAlarmNoticeIds() 获取关联的告警通知模板列表。
 * @method void setAlarmNoticeIds(array $AlarmNoticeIds) 设置关联的告警通知模板列表。
 * @method array getAlarmTargets() 获取监控对象列表。
 * @method void setAlarmTargets(array $AlarmTargets) 设置监控对象列表。
 * @method boolean getStatus() 获取是否开启告警策略。
 * @method void setStatus(boolean $Status) 设置是否开启告警策略。
 * @method boolean getEnable() 获取该参数已废弃，请使用Status参数控制是否开启告警策略。
 * @method void setEnable(boolean $Enable) 设置该参数已废弃，请使用Status参数控制是否开启告警策略。
 * @method string getMessageTemplate() 获取用户自定义告警内容
 * @method void setMessageTemplate(string $MessageTemplate) 设置用户自定义告警内容
 * @method CallBackInfo getCallBack() 获取用户自定义回调
 * @method void setCallBack(CallBackInfo $CallBack) 设置用户自定义回调
 * @method array getAnalysis() 获取多维分析
 * @method void setAnalysis(array $Analysis) 设置多维分析
 * @method boolean getGroupTriggerStatus() 获取分组触发状态。true：开启，false：关闭（默认）
 * @method void setGroupTriggerStatus(boolean $GroupTriggerStatus) 设置分组触发状态。true：开启，false：关闭（默认）
 * @method array getGroupTriggerCondition() 获取分组触发条件。
 * @method void setGroupTriggerCondition(array $GroupTriggerCondition) 设置分组触发条件。
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method integer getMonitorObjectType() 获取监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。

 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。

 * @method array getClassifications() 获取告警附加分类信息列表。
Classifications元素个数不能超过20个。
Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 `^[a-z]([a-z0-9_]{0,49})$`。
Classifications元素的Value长度不能超过200个字符。
 * @method void setClassifications(array $Classifications) 设置告警附加分类信息列表。
Classifications元素个数不能超过20个。
Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 `^[a-z]([a-z0-9_]{0,49})$`。
Classifications元素的Value长度不能超过200个字符。
 */
class ModifyAlarmRequest extends AbstractModel
{
    /**
     * @var string 告警策略ID。
     */
    public $AlarmId;

    /**
     * @var string 告警策略名称
     */
    public $Name;

    /**
     * @var MonitorTime 监控任务运行时间点。
     */
    public $MonitorTime;

    /**
     * @var string 触发条件。

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
     */
    public $Condition;

    /**
     * @var integer 告警级别。

0:警告(Warn);1:提醒(Info);2:紧急 (Critical)

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
     */
    public $AlarmLevel;

    /**
     * @var array 多触发条件。 

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
     */
    public $MultiConditions;

    /**
     * @var integer 持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。
     */
    public $TriggerCount;

    /**
     * @var integer 告警重复的周期。单位是分钟。取值范围是0~1440。
     */
    public $AlarmPeriod;

    /**
     * @var array 关联的告警通知模板列表。
     */
    public $AlarmNoticeIds;

    /**
     * @var array 监控对象列表。
     */
    public $AlarmTargets;

    /**
     * @var boolean 是否开启告警策略。
     */
    public $Status;

    /**
     * @var boolean 该参数已废弃，请使用Status参数控制是否开启告警策略。
     * @deprecated
     */
    public $Enable;

    /**
     * @var string 用户自定义告警内容
     */
    public $MessageTemplate;

    /**
     * @var CallBackInfo 用户自定义回调
     */
    public $CallBack;

    /**
     * @var array 多维分析
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
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。最大支持10个标签键值对，并且不能有重复的键值对。
     */
    public $Tags;

    /**
     * @var integer 监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。

     */
    public $MonitorObjectType;

    /**
     * @var array 告警附加分类信息列表。
Classifications元素个数不能超过20个。
Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 `^[a-z]([a-z0-9_]{0,49})$`。
Classifications元素的Value长度不能超过200个字符。
     */
    public $Classifications;

    /**
     * @param string $AlarmId 告警策略ID。
     * @param string $Name 告警策略名称
     * @param MonitorTime $MonitorTime 监控任务运行时间点。
     * @param string $Condition 触发条件。

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
     * @param integer $AlarmLevel 告警级别。

0:警告(Warn);1:提醒(Info);2:紧急 (Critical)

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
     * @param array $MultiConditions 多触发条件。 

注意:  
- Condition和AlarmLevel是一组配置，MultiConditions是另一组配置，2组配置互斥。
     * @param integer $TriggerCount 持续周期。持续满足触发条件TriggerCount个周期后，再进行告警；最小值为1，最大值为2000。
     * @param integer $AlarmPeriod 告警重复的周期。单位是分钟。取值范围是0~1440。
     * @param array $AlarmNoticeIds 关联的告警通知模板列表。
     * @param array $AlarmTargets 监控对象列表。
     * @param boolean $Status 是否开启告警策略。
     * @param boolean $Enable 该参数已废弃，请使用Status参数控制是否开启告警策略。
     * @param string $MessageTemplate 用户自定义告警内容
     * @param CallBackInfo $CallBack 用户自定义回调
     * @param array $Analysis 多维分析
     * @param boolean $GroupTriggerStatus 分组触发状态。true：开启，false：关闭（默认）
     * @param array $GroupTriggerCondition 分组触发条件。
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的告警策略。最大支持10个标签键值对，并且不能有重复的键值对。
     * @param integer $MonitorObjectType 监控对象类型。0:执行语句共用监控对象; 1:每个执行语句单独选择监控对象。 
当值为1时，AlarmTargets元素个数不能超过10个，AlarmTargets中的Number必须是从1开始的连续正整数，不能重复。

     * @param array $Classifications 告警附加分类信息列表。
Classifications元素个数不能超过20个。
Classifications元素的Key不能为空，不能重复，长度不能超过50个字符，符合正则 `^[a-z]([a-z0-9_]{0,49})$`。
Classifications元素的Value长度不能超过200个字符。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorTime",$param) and $param["MonitorTime"] !== null) {
            $this->MonitorTime = new MonitorTime();
            $this->MonitorTime->deserialize($param["MonitorTime"]);
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

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("AlarmPeriod",$param) and $param["AlarmPeriod"] !== null) {
            $this->AlarmPeriod = $param["AlarmPeriod"];
        }

        if (array_key_exists("AlarmNoticeIds",$param) and $param["AlarmNoticeIds"] !== null) {
            $this->AlarmNoticeIds = $param["AlarmNoticeIds"];
        }

        if (array_key_exists("AlarmTargets",$param) and $param["AlarmTargets"] !== null) {
            $this->AlarmTargets = [];
            foreach ($param["AlarmTargets"] as $key => $value){
                $obj = new AlarmTarget();
                $obj->deserialize($value);
                array_push($this->AlarmTargets, $obj);
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
    }
}
