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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自治指标阈值
 *
 * @method string getMetric() 获取指标。
 * @method void setMetric(string $Metric) 设置指标。
 * @method integer getThreshold() 获取阈值。
 * @method void setThreshold(integer $Threshold) 设置阈值。
 * @method integer getDuration() 获取时间间隔。
 * @method void setDuration(integer $Duration) 设置时间间隔。
 */
class MetricThreshold extends AbstractModel
{
    /**
     * @var string 指标。
     */
    public $Metric;

    /**
     * @var integer 阈值。
     */
    public $Threshold;

    /**
     * @var integer 时间间隔。
     */
    public $Duration;

    /**
     * @param string $Metric 指标。
     * @param integer $Threshold 阈值。
     * @param integer $Duration 时间间隔。
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
