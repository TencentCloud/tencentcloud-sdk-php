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
 * TaskMaintainInfo
 *
 * @method integer getMaintainStartTime() 获取执行开始时间(距离0点的秒数)
 * @method void setMaintainStartTime(integer $MaintainStartTime) 设置执行开始时间(距离0点的秒数)
 * @method integer getMaintainDuration() 获取持续的时间(单位：秒)
 * @method void setMaintainDuration(integer $MaintainDuration) 设置持续的时间(单位：秒)
 * @method array getMaintainWeekDays() 获取可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
 */
class TaskMaintainInfo extends AbstractModel
{
    /**
     * @var integer 执行开始时间(距离0点的秒数)
     */
    public $MaintainStartTime;

    /**
     * @var integer 持续的时间(单位：秒)
     */
    public $MaintainDuration;

    /**
     * @var array 可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
     */
    public $MaintainWeekDays;

    /**
     * @param integer $MaintainStartTime 执行开始时间(距离0点的秒数)
     * @param integer $MaintainDuration 持续的时间(单位：秒)
     * @param array $MaintainWeekDays 可以执行的时间，枚举值：["Mon","Tue","Wed","Thu","Fri", "Sat", "Sun"]
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
        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }
    }
}
