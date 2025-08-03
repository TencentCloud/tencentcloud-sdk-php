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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎资源弹性伸缩策略
 *
 * @method boolean getScheduledElasticityEnabled() 获取是否开启弹性伸缩：true/false
 * @method void setScheduledElasticityEnabled(boolean $ScheduledElasticityEnabled) 设置是否开启弹性伸缩：true/false
 * @method string getScheduleType() 获取调度类型：ONCE（一次性调度），DAILY（每日调度），WEEKLY（每周调度），MONTHLY（每月调度）
 * @method void setScheduleType(string $ScheduleType) 设置调度类型：ONCE（一次性调度），DAILY（每日调度），WEEKLY（每周调度），MONTHLY（每月调度）
 * @method array getScheduleDays() 获取调度日期：WEEKLY传：1~7； MONTHLY传:1~31；其它类型不传
 * @method void setScheduleDays(array $ScheduleDays) 设置调度日期：WEEKLY传：1~7； MONTHLY传:1~31；其它类型不传
 * @method string getTimeZone() 获取调度时区
 * @method void setTimeZone(string $TimeZone) 设置调度时区
 * @method array getElasticPlans() 获取弹性伸缩计划
 * @method void setElasticPlans(array $ElasticPlans) 设置弹性伸缩计划
 */
class ScheduleElasticityConf extends AbstractModel
{
    /**
     * @var boolean 是否开启弹性伸缩：true/false
     */
    public $ScheduledElasticityEnabled;

    /**
     * @var string 调度类型：ONCE（一次性调度），DAILY（每日调度），WEEKLY（每周调度），MONTHLY（每月调度）
     */
    public $ScheduleType;

    /**
     * @var array 调度日期：WEEKLY传：1~7； MONTHLY传:1~31；其它类型不传
     */
    public $ScheduleDays;

    /**
     * @var string 调度时区
     */
    public $TimeZone;

    /**
     * @var array 弹性伸缩计划
     */
    public $ElasticPlans;

    /**
     * @param boolean $ScheduledElasticityEnabled 是否开启弹性伸缩：true/false
     * @param string $ScheduleType 调度类型：ONCE（一次性调度），DAILY（每日调度），WEEKLY（每周调度），MONTHLY（每月调度）
     * @param array $ScheduleDays 调度日期：WEEKLY传：1~7； MONTHLY传:1~31；其它类型不传
     * @param string $TimeZone 调度时区
     * @param array $ElasticPlans 弹性伸缩计划
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
        if (array_key_exists("ScheduledElasticityEnabled",$param) and $param["ScheduledElasticityEnabled"] !== null) {
            $this->ScheduledElasticityEnabled = $param["ScheduledElasticityEnabled"];
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("ScheduleDays",$param) and $param["ScheduleDays"] !== null) {
            $this->ScheduleDays = $param["ScheduleDays"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("ElasticPlans",$param) and $param["ElasticPlans"] !== null) {
            $this->ElasticPlans = [];
            foreach ($param["ElasticPlans"] as $key => $value){
                $obj = new ElasticPlan();
                $obj->deserialize($value);
                array_push($this->ElasticPlans, $obj);
            }
        }
    }
}
