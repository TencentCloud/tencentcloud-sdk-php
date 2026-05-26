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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 维护窗口配置
 *
 * @method integer getStartTime() 获取
 * @method void setStartTime(integer $StartTime) 设置
 * @method integer getDuration() 获取
 * @method void setDuration(integer $Duration) 设置
 * @method array getWeekDays() 获取
 * @method void setWeekDays(array $WeekDays) 设置
 */
class MaintenanceWindowInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $StartTime;

    /**
     * @var integer 
     */
    public $Duration;

    /**
     * @var array 
     */
    public $WeekDays;

    /**
     * @param integer $StartTime 
     * @param integer $Duration 
     * @param array $WeekDays 
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }
    }
}
