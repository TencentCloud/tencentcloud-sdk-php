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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoSnapshotPolicy请求参数结构体
 *
 * @method string getHour() 获取快照重复时间点
 * @method void setHour(string $Hour) 设置快照重复时间点
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method string getDayOfWeek() 获取快照重复日期，星期一到星期日
 * @method void setDayOfWeek(string $DayOfWeek) 设置快照重复日期，星期一到星期日
 * @method integer getAliveDays() 获取快照保留时长
 * @method void setAliveDays(integer $AliveDays) 设置快照保留时长
 * @method string getDayOfMonth() 获取快照按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照。
 * @method void setDayOfMonth(string $DayOfMonth) 设置快照按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照。
 * @method integer getIntervalDays() 获取间隔天数
 * @method void setIntervalDays(integer $IntervalDays) 设置间隔天数
 */
class CreateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string 快照重复时间点
     */
    public $Hour;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var string 快照重复日期，星期一到星期日
     */
    public $DayOfWeek;

    /**
     * @var integer 快照保留时长
     */
    public $AliveDays;

    /**
     * @var string 快照按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照。
     */
    public $DayOfMonth;

    /**
     * @var integer 间隔天数
     */
    public $IntervalDays;

    /**
     * @param string $Hour 快照重复时间点
     * @param string $PolicyName 策略名称
     * @param string $DayOfWeek 快照重复日期，星期一到星期日
     * @param integer $AliveDays 快照保留时长
     * @param string $DayOfMonth 快照按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照。
     * @param integer $IntervalDays 间隔天数
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
        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}
