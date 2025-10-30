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
 * 健康得分趋势
 *
 * @method float getAvg() 获取平均得分
 * @method void setAvg(float $Avg) 设置平均得分
 * @method integer getHealthStatus() 获取健康状态
1-health
2-warning
3-critical
 * @method void setHealthStatus(integer $HealthStatus) 设置健康状态
1-health
2-warning
3-critical
 * @method string getMetric() 获取指标名称
 * @method void setMetric(string $Metric) 设置指标名称
 * @method array getSeries() 获取得分序列
 * @method void setSeries(array $Series) 设置得分序列
 * @method array getTimestamp() 获取时间序列，单位：毫秒数
 * @method void setTimestamp(array $Timestamp) 设置时间序列，单位：毫秒数
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 */
class HealthScoreTimeSeriesData extends AbstractModel
{
    /**
     * @var float 平均得分
     */
    public $Avg;

    /**
     * @var integer 健康状态
1-health
2-warning
3-critical
     */
    public $HealthStatus;

    /**
     * @var string 指标名称
     */
    public $Metric;

    /**
     * @var array 得分序列
     */
    public $Series;

    /**
     * @var array 时间序列，单位：毫秒数
     */
    public $Timestamp;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @param float $Avg 平均得分
     * @param integer $HealthStatus 健康状态
1-health
2-warning
3-critical
     * @param string $Metric 指标名称
     * @param array $Series 得分序列
     * @param array $Timestamp 时间序列，单位：毫秒数
     * @param string $Unit 单位
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
        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = $param["Series"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
