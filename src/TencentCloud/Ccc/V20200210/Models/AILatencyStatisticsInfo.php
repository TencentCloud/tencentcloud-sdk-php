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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI时延统计
 *
 * @method integer getMinLatency() 获取最小值
 * @method void setMinLatency(integer $MinLatency) 设置最小值
 * @method integer getMiddleLatency() 获取中位数
 * @method void setMiddleLatency(integer $MiddleLatency) 设置中位数
 * @method integer getP90Latency() 获取p90
 * @method void setP90Latency(integer $P90Latency) 设置p90
 */
class AILatencyStatisticsInfo extends AbstractModel
{
    /**
     * @var integer 最小值
     */
    public $MinLatency;

    /**
     * @var integer 中位数
     */
    public $MiddleLatency;

    /**
     * @var integer p90
     */
    public $P90Latency;

    /**
     * @param integer $MinLatency 最小值
     * @param integer $MiddleLatency 中位数
     * @param integer $P90Latency p90
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
        if (array_key_exists("MinLatency",$param) and $param["MinLatency"] !== null) {
            $this->MinLatency = $param["MinLatency"];
        }

        if (array_key_exists("MiddleLatency",$param) and $param["MiddleLatency"] !== null) {
            $this->MiddleLatency = $param["MiddleLatency"];
        }

        if (array_key_exists("P90Latency",$param) and $param["P90Latency"] !== null) {
            $this->P90Latency = $param["P90Latency"];
        }
    }
}
