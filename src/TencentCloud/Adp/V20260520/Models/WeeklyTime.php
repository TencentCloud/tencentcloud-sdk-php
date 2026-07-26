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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WeeklyTime
 *
 * @method string getTimeOfDay() 获取时间
 * @method void setTimeOfDay(string $TimeOfDay) 设置时间
 * @method integer getWeekday() 获取周几
 * @method void setWeekday(integer $Weekday) 设置周几
 */
class WeeklyTime extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $TimeOfDay;

    /**
     * @var integer 周几
     */
    public $Weekday;

    /**
     * @param string $TimeOfDay 时间
     * @param integer $Weekday 周几
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
        if (array_key_exists("TimeOfDay",$param) and $param["TimeOfDay"] !== null) {
            $this->TimeOfDay = $param["TimeOfDay"];
        }

        if (array_key_exists("Weekday",$param) and $param["Weekday"] !== null) {
            $this->Weekday = $param["Weekday"];
        }
    }
}
