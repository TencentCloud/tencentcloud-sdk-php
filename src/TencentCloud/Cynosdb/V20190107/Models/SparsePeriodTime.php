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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 稀疏备份周期信息
 *
 * @method array getWeekDays() 获取按周：星期几列表，1-7，1=周一，7=周日（仅 weekly 周期使用，最多7个）
 * @method void setWeekDays(array $WeekDays) 设置按周：星期几列表，1-7，1=周一，7=周日（仅 weekly 周期使用，最多7个）
 * @method array getDays() 获取按月：日期列表，1-31（仅 monthly 周期使用，最多7个）
 * @method void setDays(array $Days) 设置按月：日期列表，1-31（仅 monthly 周期使用，最多7个）
 * @method array getMonthDays() 获取按年：月日组合列表（仅 yearly 周期使用，最多7个）
 * @method void setMonthDays(array $MonthDays) 设置按年：月日组合列表（仅 yearly 周期使用，最多7个）
 */
class SparsePeriodTime extends AbstractModel
{
    /**
     * @var array 按周：星期几列表，1-7，1=周一，7=周日（仅 weekly 周期使用，最多7个）
     */
    public $WeekDays;

    /**
     * @var array 按月：日期列表，1-31（仅 monthly 周期使用，最多7个）
     */
    public $Days;

    /**
     * @var array 按年：月日组合列表（仅 yearly 周期使用，最多7个）
     */
    public $MonthDays;

    /**
     * @param array $WeekDays 按周：星期几列表，1-7，1=周一，7=周日（仅 weekly 周期使用，最多7个）
     * @param array $Days 按月：日期列表，1-31（仅 monthly 周期使用，最多7个）
     * @param array $MonthDays 按年：月日组合列表（仅 yearly 周期使用，最多7个）
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
        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("MonthDays",$param) and $param["MonthDays"] !== null) {
            $this->MonthDays = [];
            foreach ($param["MonthDays"] as $key => $value){
                $obj = new MonthDay();
                $obj->deserialize($value);
                array_push($this->MonthDays, $obj);
            }
        }
    }
}
