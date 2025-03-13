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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInspectionSettings请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getType() 获取巡检类型，FixedTime/RealTime
 * @method void setType(string $Type) 设置巡检类型，FixedTime/RealTime
 * @method array getSettings() 获取任务配置
 * @method void setSettings(array $Settings) 设置任务配置
 * @method integer getStartTime() 获取开始时间戳
 * @method void setStartTime(integer $StartTime) 设置开始时间戳
 * @method integer getEndTime() 获取结束时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间戳
 * @method string getStrategy() 获取巡检周期，eg EveryDay EveryWeek EveryMonth
 * @method void setStrategy(string $Strategy) 设置巡检周期，eg EveryDay EveryWeek EveryMonth
 * @method string getClock() 获取每天的开始的时间
 * @method void setClock(string $Clock) 设置每天的开始的时间
 * @method string getDayOfWeek() 获取每周的周几
 * @method void setDayOfWeek(string $DayOfWeek) 设置每周的周几
 * @method string getDayOfMonth() 获取每月的第几号
 * @method void setDayOfMonth(string $DayOfMonth) 设置每月的第几号
 * @method string getJobId() 获取巡检作业Id
 * @method void setJobId(string $JobId) 设置巡检作业Id
 */
class ModifyInspectionSettingsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 巡检类型，FixedTime/RealTime
     */
    public $Type;

    /**
     * @var array 任务配置
     */
    public $Settings;

    /**
     * @var integer 开始时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳
     */
    public $EndTime;

    /**
     * @var string 巡检周期，eg EveryDay EveryWeek EveryMonth
     */
    public $Strategy;

    /**
     * @var string 每天的开始的时间
     */
    public $Clock;

    /**
     * @var string 每周的周几
     */
    public $DayOfWeek;

    /**
     * @var string 每月的第几号
     */
    public $DayOfMonth;

    /**
     * @var string 巡检作业Id
     */
    public $JobId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Type 巡检类型，FixedTime/RealTime
     * @param array $Settings 任务配置
     * @param integer $StartTime 开始时间戳
     * @param integer $EndTime 结束时间戳
     * @param string $Strategy 巡检周期，eg EveryDay EveryWeek EveryMonth
     * @param string $Clock 每天的开始的时间
     * @param string $DayOfWeek 每周的周几
     * @param string $DayOfMonth 每月的第几号
     * @param string $JobId 巡检作业Id
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Settings",$param) and $param["Settings"] !== null) {
            $this->Settings = [];
            foreach ($param["Settings"] as $key => $value){
                $obj = new InspectionTaskSettings();
                $obj->deserialize($value);
                array_push($this->Settings, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Clock",$param) and $param["Clock"] !== null) {
            $this->Clock = $param["Clock"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
