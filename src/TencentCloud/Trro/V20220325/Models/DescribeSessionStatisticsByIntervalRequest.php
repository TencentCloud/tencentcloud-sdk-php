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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionStatisticsByInterval请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getStatisticInterval() 获取统计时间间隔：hour|day|month
 * @method void setStatisticInterval(string $StatisticInterval) 设置统计时间间隔：hour|day|month
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method integer getStartTime() 获取起始时间，单位：秒
 * @method void setStartTime(integer $StartTime) 设置起始时间，单位：秒
 * @method integer getEndTime() 获取结束时间，单位：秒
 * @method void setEndTime(integer $EndTime) 设置结束时间，单位：秒
 */
class DescribeSessionStatisticsByIntervalRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 统计时间间隔：hour|day|month
     */
    public $StatisticInterval;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var integer 起始时间，单位：秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间，单位：秒
     */
    public $EndTime;

    /**
     * @param string $ProjectId 项目ID
     * @param string $StatisticInterval 统计时间间隔：hour|day|month
     * @param string $DeviceId 设备ID
     * @param integer $StartTime 起始时间，单位：秒
     * @param integer $EndTime 结束时间，单位：秒
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StatisticInterval",$param) and $param["StatisticInterval"] !== null) {
            $this->StatisticInterval = $param["StatisticInterval"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
