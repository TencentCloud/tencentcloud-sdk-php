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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionStatisticsByInterval请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getStatisticInterval() 获取<p>统计时间间隔：hour|day|month</p>
 * @method void setStatisticInterval(string $StatisticInterval) 设置<p>统计时间间隔：hour|day|month</p>
 * @method string getDeviceId() 获取<p>设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID</p>
 * @method integer getStartTime() 获取<p>起始时间，单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间，单位：秒</p>
 * @method integer getEndTime() 获取<p>结束时间，单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，单位：秒</p>
 */
class DescribeSessionStatisticsByIntervalRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>统计时间间隔：hour|day|month</p>
     */
    public $StatisticInterval;

    /**
     * @var string <p>设备ID</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>起始时间，单位：秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，单位：秒</p>
     */
    public $EndTime;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $StatisticInterval <p>统计时间间隔：hour|day|month</p>
     * @param string $DeviceId <p>设备ID</p>
     * @param integer $StartTime <p>起始时间，单位：秒</p>
     * @param integer $EndTime <p>结束时间，单位：秒</p>
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
