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
 * @method string getModule() 获取模块名，这里填“monitor”
 * @method void setModule(string $Module) 设置模块名，这里填“monitor”
 * @method string getName() 获取屏蔽策略名称
 * @method void setName(string $Name) 设置屏蔽策略名称
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method string getNameSpace() 获取命名空间即策略类型
 * @method void setNameSpace(string $NameSpace) 设置命名空间即策略类型
 * @method string getShieldTimeType() 获取屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
 * @method void setShieldTimeType(string $ShieldTimeType) 设置屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
 * @method array getShieldObject() 获取屏蔽对象
 * @method void setShieldObject(array $ShieldObject) 设置屏蔽对象
 * @method array getShieldMetric() 获取屏蔽指标 为空则为全部指标
 * @method void setShieldMetric(array $ShieldMetric) 设置屏蔽指标 为空则为全部指标
 * @method integer getStartTime() 获取开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0
 * @method void setStartTime(integer $StartTime) 设置开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0
 * @method integer getEndTime() 获取结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0
 * @method void setEndTime(integer $EndTime) 设置结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0
 * @method integer getLoopStartDate() 获取循环开始日期 2022/04/01 缺省:0
 * @method void setLoopStartDate(integer $LoopStartDate) 设置循环开始日期 2022/04/01 缺省:0
 * @method integer getLoopEndDate() 获取循环结束日期 2022/04/05 缺省:0
 * @method void setLoopEndDate(integer $LoopEndDate) 设置循环结束日期 2022/04/05 缺省:0
 * @method string getShieldPolicyId() 获取需要屏蔽的策略ID
 * @method void setShieldPolicyId(string $ShieldPolicyId) 设置需要屏蔽的策略ID
 * @method array getShieldAlarmLevel() 获取需要屏蔽的告警等级，取值范围Warn,Remind,Serious
 * @method void setShieldAlarmLevel(array $ShieldAlarmLevel) 设置需要屏蔽的告警等级，取值范围Warn,Remind,Serious
 * @method string getVersionTag() 获取屏蔽类型，为OBJNAME是老版本实例名屏蔽，为POLICY是新版本维度匹配
 * @method void setVersionTag(string $VersionTag) 设置屏蔽类型，为OBJNAME是老版本实例名屏蔽，为POLICY是新版本维度匹配
 * @method string getDescription() 获取屏蔽规则的描述
 * @method void setDescription(string $Description) 设置屏蔽规则的描述
 * @method float getTimeZone() 获取 时区，东八区+8，西八区减8，以此类推

 * @method void setTimeZone(float $TimeZone) 设置 时区，东八区+8，西八区减8，以此类推

 * @method array getShieldEvent() 获取屏蔽事件 为空则为全部指标
 * @method void setShieldEvent(array $ShieldEvent) 设置屏蔽事件 为空则为全部指标
 * @method integer getShieldMetricFlag() 获取是否对指标屏蔽 1=是 0=否
 * @method void setShieldMetricFlag(integer $ShieldMetricFlag) 设置是否对指标屏蔽 1=是 0=否
 * @method integer getShieldEventFlag() 获取是否对事件屏蔽 1=是 0=否
 * @method void setShieldEventFlag(integer $ShieldEventFlag) 设置是否对事件屏蔽 1=是 0=否
 */
class CreateAlarmShieldRequest extends AbstractModel
{
    /**
     * @var string 模块名，这里填“monitor”
     */
    public $Module;

    /**
     * @var string 屏蔽策略名称
     */
    public $Name;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var string 命名空间即策略类型
     */
    public $NameSpace;

    /**
     * @var string 屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
     */
    public $ShieldTimeType;

    /**
     * @var array 屏蔽对象
     */
    public $ShieldObject;

    /**
     * @var array 屏蔽指标 为空则为全部指标
     */
    public $ShieldMetric;

    /**
     * @var integer 开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0
     */
    public $StartTime;

    /**
     * @var integer 结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0
     */
    public $EndTime;

    /**
     * @var integer 循环开始日期 2022/04/01 缺省:0
     */
    public $LoopStartDate;

    /**
     * @var integer 循环结束日期 2022/04/05 缺省:0
     */
    public $LoopEndDate;

    /**
     * @var string 需要屏蔽的策略ID
     */
    public $ShieldPolicyId;

    /**
     * @var array 需要屏蔽的告警等级，取值范围Warn,Remind,Serious
     */
    public $ShieldAlarmLevel;

    /**
     * @var string 屏蔽类型，为OBJNAME是老版本实例名屏蔽，为POLICY是新版本维度匹配
     */
    public $VersionTag;

    /**
     * @var string 屏蔽规则的描述
     */
    public $Description;

    /**
     * @var float  时区，东八区+8，西八区减8，以此类推

     */
    public $TimeZone;

    /**
     * @var array 屏蔽事件 为空则为全部指标
     */
    public $ShieldEvent;

    /**
     * @var integer 是否对指标屏蔽 1=是 0=否
     */
    public $ShieldMetricFlag;

    /**
     * @var integer 是否对事件屏蔽 1=是 0=否
     */
    public $ShieldEventFlag;

    /**
     * @param string $Module 模块名，这里填“monitor”
     * @param string $Name 屏蔽策略名称
     * @param string $MonitorType 监控类型
     * @param string $NameSpace 命名空间即策略类型
     * @param string $ShieldTimeType 屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
     * @param array $ShieldObject 屏蔽对象
     * @param array $ShieldMetric 屏蔽指标 为空则为全部指标
     * @param integer $StartTime 开始时间 相对时间范围:36000 绝对时间范围:1648742400 缺省:0
     * @param integer $EndTime 结束时间 相对时间范围:72000 绝对时间范围:1649088000 缺省:0
     * @param integer $LoopStartDate 循环开始日期 2022/04/01 缺省:0
     * @param integer $LoopEndDate 循环结束日期 2022/04/05 缺省:0
     * @param string $ShieldPolicyId 需要屏蔽的策略ID
     * @param array $ShieldAlarmLevel 需要屏蔽的告警等级，取值范围Warn,Remind,Serious
     * @param string $VersionTag 屏蔽类型，为OBJNAME是老版本实例名屏蔽，为POLICY是新版本维度匹配
     * @param string $Description 屏蔽规则的描述
     * @param float $TimeZone  时区，东八区+8，西八区减8，以此类推

     * @param array $ShieldEvent 屏蔽事件 为空则为全部指标
     * @param integer $ShieldMetricFlag 是否对指标屏蔽 1=是 0=否
     * @param integer $ShieldEventFlag 是否对事件屏蔽 1=是 0=否
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
