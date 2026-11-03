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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎实例维护窗口
 *
 * @method string getTimeZone() 获取<p>时区</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>时区</p>
 * @method integer getDayOfWeek() 获取<p>星期</p>
 * @method void setDayOfWeek(integer $DayOfWeek) 设置<p>星期</p>
 * @method string getStartTime() 获取<p>开始时间</p><p>参数格式：hh:mm</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p><p>参数格式：hh:mm</p>
 * @method string getEndTime() 获取<p>结束时间</p><p>参数格式：hh:mm</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p><p>参数格式：hh:mm</p>
 */
class MaintenanceWindow extends AbstractModel
{
    /**
     * @var string <p>时区</p>
     */
    public $TimeZone;

    /**
     * @var integer <p>星期</p>
     */
    public $DayOfWeek;

    /**
     * @var string <p>开始时间</p><p>参数格式：hh:mm</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p><p>参数格式：hh:mm</p>
     */
    public $EndTime;

    /**
     * @param string $TimeZone <p>时区</p>
     * @param integer $DayOfWeek <p>星期</p>
     * @param string $StartTime <p>开始时间</p><p>参数格式：hh:mm</p>
     * @param string $EndTime <p>结束时间</p><p>参数格式：hh:mm</p>
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
        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
