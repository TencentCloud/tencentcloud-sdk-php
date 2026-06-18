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
 * ModifyMaintenanceWindow请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getStartTime() 获取<p>运维窗口开始时间</p><p>参数格式：hh:mm:ss</p>
 * @method void setStartTime(string $StartTime) 设置<p>运维窗口开始时间</p><p>参数格式：hh:mm:ss</p>
 * @method integer getDuration() 获取<p>运维窗口持续时间</p><p>取值范围：[1, 3]</p><p>单位：时</p>
 * @method void setDuration(integer $Duration) 设置<p>运维窗口持续时间</p><p>取值范围：[1, 3]</p><p>单位：时</p>
 * @method array getWeekDays() 获取<p>运维窗口日期</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
 * @method void setWeekDays(array $WeekDays) 设置<p>运维窗口日期</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
 */
class ModifyMaintenanceWindowRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>运维窗口开始时间</p><p>参数格式：hh:mm:ss</p>
     */
    public $StartTime;

    /**
     * @var integer <p>运维窗口持续时间</p><p>取值范围：[1, 3]</p><p>单位：时</p>
     */
    public $Duration;

    /**
     * @var array <p>运维窗口日期</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
     */
    public $WeekDays;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $StartTime <p>运维窗口开始时间</p><p>参数格式：hh:mm:ss</p>
     * @param integer $Duration <p>运维窗口持续时间</p><p>取值范围：[1, 3]</p><p>单位：时</p>
     * @param array $WeekDays <p>运维窗口日期</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
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
