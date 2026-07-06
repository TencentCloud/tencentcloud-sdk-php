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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlarmShield请求参数结构体
 *
 * @method string getModule() 获取<p>模块名，这里填“monitor”</p>
 * @method void setModule(string $Module) 设置<p>模块名，这里填“monitor”</p>
 * @method string getName() 获取<p>屏蔽策略名称</p>
 * @method void setName(string $Name) 设置<p>屏蔽策略名称</p>
 * @method string getMonitorType() 获取<p>监控类型</p>
 * @method void setMonitorType(string $MonitorType) 设置<p>监控类型</p>
 * @method string getNameSpace() 获取<p>命名空间即策略类型</p>
 * @method void setNameSpace(string $NameSpace) 设置<p>命名空间即策略类型</p>
 * @method string getShieldTimeType() 获取<p>屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽</p>
 * @method void setShieldTimeType(string $ShieldTimeType) 设置<p>屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽</p>
 * @method array getShieldObject() 获取<p>屏蔽对象</p>
 * @method void setShieldObject(array $ShieldObject) 设置<p>屏蔽对象</p>
 * @method array getShieldMetric() 获取<p>屏蔽指标 为空则为全部指标</p>
 * @method void setShieldMetric(array $ShieldMetric) 设置<p>屏蔽指标 为空则为全部指标</p>
 * @method integer getStartTime() 获取<p>开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0</p>
 * @method integer getEndTime() 获取<p>结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0</p>
 * @method integer getLoopStartDate() 获取<p>循环开始日期 2022/04/01 缺省:0</p>
 * @method void setLoopStartDate(integer $LoopStartDate) 设置<p>循环开始日期 2022/04/01 缺省:0</p>
 * @method integer getLoopEndDate() 获取<p>循环结束日期 2022/04/05 缺省:0</p>
 * @method void setLoopEndDate(integer $LoopEndDate) 设置<p>循环结束日期 2022/04/05 缺省:0</p>
 * @method string getShieldPolicyId() 获取<p>需要屏蔽的策略ID</p>
 * @method void setShieldPolicyId(string $ShieldPolicyId) 设置<p>需要屏蔽的策略ID</p>
 * @method array getShieldAlarmLevel() 获取<p>需要屏蔽的告警等级，取值范围Warn,Remind,Serious</p>
 * @method void setShieldAlarmLevel(array $ShieldAlarmLevel) 设置<p>需要屏蔽的告警等级，取值范围Warn,Remind,Serious</p>
 * @method string getVersionTag() 获取<p>屏蔽类型，为OBJNAME是实例屏蔽，为POLICY是策略屏蔽</p>
 * @method void setVersionTag(string $VersionTag) 设置<p>屏蔽类型，为OBJNAME是实例屏蔽，为POLICY是策略屏蔽</p>
 * @method string getDescription() 获取<p>屏蔽规则的描述</p>
 * @method void setDescription(string $Description) 设置<p>屏蔽规则的描述</p>
 * @method float getTimeZone() 获取<p>时区，东八区+8，西八区减8，以此类推</p>
 * @method void setTimeZone(float $TimeZone) 设置<p>时区，东八区+8，西八区减8，以此类推</p>
 * @method array getShieldEvent() 获取<p>屏蔽事件 为空则为全部指标</p>
 * @method void setShieldEvent(array $ShieldEvent) 设置<p>屏蔽事件 为空则为全部指标</p>
 * @method integer getShieldMetricFlag() 获取<p>是否对指标屏蔽 1=是 0=否</p>
 * @method void setShieldMetricFlag(integer $ShieldMetricFlag) 设置<p>是否对指标屏蔽 1=是 0=否</p>
 * @method integer getShieldEventFlag() 获取<p>是否对事件屏蔽 1=是 0=否</p>
 * @method void setShieldEventFlag(integer $ShieldEventFlag) 设置<p>是否对事件屏蔽 1=是 0=否</p>
 */
class CreateAlarmShieldRequest extends AbstractModel
{
    /**
     * @var string <p>模块名，这里填“monitor”</p>
     */
    public $Module;

    /**
     * @var string <p>屏蔽策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>监控类型</p>
     */
    public $MonitorType;

    /**
     * @var string <p>命名空间即策略类型</p>
     */
    public $NameSpace;

    /**
     * @var string <p>屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽</p>
     */
    public $ShieldTimeType;

    /**
     * @var array <p>屏蔽对象</p>
     */
    public $ShieldObject;

    /**
     * @var array <p>屏蔽指标 为空则为全部指标</p>
     */
    public $ShieldMetric;

    /**
     * @var integer <p>开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0</p>
     */
    public $EndTime;

    /**
     * @var integer <p>循环开始日期 2022/04/01 缺省:0</p>
     */
    public $LoopStartDate;

    /**
     * @var integer <p>循环结束日期 2022/04/05 缺省:0</p>
     */
    public $LoopEndDate;

    /**
     * @var string <p>需要屏蔽的策略ID</p>
     */
    public $ShieldPolicyId;

    /**
     * @var array <p>需要屏蔽的告警等级，取值范围Warn,Remind,Serious</p>
     */
    public $ShieldAlarmLevel;

    /**
     * @var string <p>屏蔽类型，为OBJNAME是实例屏蔽，为POLICY是策略屏蔽</p>
     */
    public $VersionTag;

    /**
     * @var string <p>屏蔽规则的描述</p>
     */
    public $Description;

    /**
     * @var float <p>时区，东八区+8，西八区减8，以此类推</p>
     */
    public $TimeZone;

    /**
     * @var array <p>屏蔽事件 为空则为全部指标</p>
     */
    public $ShieldEvent;

    /**
     * @var integer <p>是否对指标屏蔽 1=是 0=否</p>
     */
    public $ShieldMetricFlag;

    /**
     * @var integer <p>是否对事件屏蔽 1=是 0=否</p>
     */
    public $ShieldEventFlag;

    /**
     * @param string $Module <p>模块名，这里填“monitor”</p>
     * @param string $Name <p>屏蔽策略名称</p>
     * @param string $MonitorType <p>监控类型</p>
     * @param string $NameSpace <p>命名空间即策略类型</p>
     * @param string $ShieldTimeType <p>屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽</p>
     * @param array $ShieldObject <p>屏蔽对象</p>
     * @param array $ShieldMetric <p>屏蔽指标 为空则为全部指标</p>
     * @param integer $StartTime <p>开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0</p>
     * @param integer $EndTime <p>结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0</p>
     * @param integer $LoopStartDate <p>循环开始日期 2022/04/01 缺省:0</p>
     * @param integer $LoopEndDate <p>循环结束日期 2022/04/05 缺省:0</p>
     * @param string $ShieldPolicyId <p>需要屏蔽的策略ID</p>
     * @param array $ShieldAlarmLevel <p>需要屏蔽的告警等级，取值范围Warn,Remind,Serious</p>
     * @param string $VersionTag <p>屏蔽类型，为OBJNAME是实例屏蔽，为POLICY是策略屏蔽</p>
     * @param string $Description <p>屏蔽规则的描述</p>
     * @param float $TimeZone <p>时区，东八区+8，西八区减8，以此类推</p>
     * @param array $ShieldEvent <p>屏蔽事件 为空则为全部指标</p>
     * @param integer $ShieldMetricFlag <p>是否对指标屏蔽 1=是 0=否</p>
     * @param integer $ShieldEventFlag <p>是否对事件屏蔽 1=是 0=否</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("ShieldTimeType",$param) and $param["ShieldTimeType"] !== null) {
            $this->ShieldTimeType = $param["ShieldTimeType"];
        }

        if (array_key_exists("ShieldObject",$param) and $param["ShieldObject"] !== null) {
            $this->ShieldObject = $param["ShieldObject"];
        }

        if (array_key_exists("ShieldMetric",$param) and $param["ShieldMetric"] !== null) {
            $this->ShieldMetric = $param["ShieldMetric"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LoopStartDate",$param) and $param["LoopStartDate"] !== null) {
            $this->LoopStartDate = $param["LoopStartDate"];
        }

        if (array_key_exists("LoopEndDate",$param) and $param["LoopEndDate"] !== null) {
            $this->LoopEndDate = $param["LoopEndDate"];
        }

        if (array_key_exists("ShieldPolicyId",$param) and $param["ShieldPolicyId"] !== null) {
            $this->ShieldPolicyId = $param["ShieldPolicyId"];
        }

        if (array_key_exists("ShieldAlarmLevel",$param) and $param["ShieldAlarmLevel"] !== null) {
            $this->ShieldAlarmLevel = $param["ShieldAlarmLevel"];
        }

        if (array_key_exists("VersionTag",$param) and $param["VersionTag"] !== null) {
            $this->VersionTag = $param["VersionTag"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("ShieldEvent",$param) and $param["ShieldEvent"] !== null) {
            $this->ShieldEvent = $param["ShieldEvent"];
        }

        if (array_key_exists("ShieldMetricFlag",$param) and $param["ShieldMetricFlag"] !== null) {
            $this->ShieldMetricFlag = $param["ShieldMetricFlag"];
        }

        if (array_key_exists("ShieldEventFlag",$param) and $param["ShieldEventFlag"] !== null) {
            $this->ShieldEventFlag = $param["ShieldEventFlag"];
        }
    }
}
