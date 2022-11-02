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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时的事务和行为
 *
 * @method boolean getScheduleStop() 获取是否要定时停止服务，true or false。true 则 ScheduleStopTime 必填， false 则 ScheduleStopTime 不生效
 * @method void setScheduleStop(boolean $ScheduleStop) 设置是否要定时停止服务，true or false。true 则 ScheduleStopTime 必填， false 则 ScheduleStopTime 不生效
 * @method string getScheduleStopTime() 获取要执行定时停止的时间，格式：“2022-01-26T19:46:22+08:00”
 * @method void setScheduleStopTime(string $ScheduleStopTime) 设置要执行定时停止的时间，格式：“2022-01-26T19:46:22+08:00”
 */
class ScheduledAction extends AbstractModel
{
    /**
     * @var boolean 是否要定时停止服务，true or false。true 则 ScheduleStopTime 必填， false 则 ScheduleStopTime 不生效
     */
    public $ScheduleStop;

    /**
     * @var string 要执行定时停止的时间，格式：“2022-01-26T19:46:22+08:00”
     */
    public $ScheduleStopTime;

    /**
     * @param boolean $ScheduleStop 是否要定时停止服务，true or false。true 则 ScheduleStopTime 必填， false 则 ScheduleStopTime 不生效
     * @param string $ScheduleStopTime 要执行定时停止的时间，格式：“2022-01-26T19:46:22+08:00”
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
        if (array_key_exists("ScheduleStop",$param) and $param["ScheduleStop"] !== null) {
            $this->ScheduleStop = $param["ScheduleStop"];
        }

        if (array_key_exists("ScheduleStopTime",$param) and $param["ScheduleStopTime"] !== null) {
            $this->ScheduleStopTime = $param["ScheduleStopTime"];
        }
    }
}
