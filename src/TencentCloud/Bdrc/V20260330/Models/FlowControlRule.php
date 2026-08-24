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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流控规则
 *
 * @method string getStartTime() 获取流控开始时间
 * @method void setStartTime(string $StartTime) 设置流控开始时间
 * @method string getEndTime() 获取流控结束时间
 * @method void setEndTime(string $EndTime) 设置流控结束时间
 * @method integer getMaxBandwidthMBps() 获取流控规则最大带宽，单位MB/s
 * @method void setMaxBandwidthMBps(integer $MaxBandwidthMBps) 设置流控规则最大带宽，单位MB/s
 */
class FlowControlRule extends AbstractModel
{
    /**
     * @var string 流控开始时间
     */
    public $StartTime;

    /**
     * @var string 流控结束时间
     */
    public $EndTime;

    /**
     * @var integer 流控规则最大带宽，单位MB/s
     */
    public $MaxBandwidthMBps;

    /**
     * @param string $StartTime 流控开始时间
     * @param string $EndTime 流控结束时间
     * @param integer $MaxBandwidthMBps 流控规则最大带宽，单位MB/s
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

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxBandwidthMBps",$param) and $param["MaxBandwidthMBps"] !== null) {
            $this->MaxBandwidthMBps = $param["MaxBandwidthMBps"];
        }
    }
}
