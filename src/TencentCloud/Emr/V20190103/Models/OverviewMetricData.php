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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览数据
 *
 * @method string getMetric() 获取指标名
 * @method void setMetric(string $Metric) 设置指标名
 * @method integer getFirst() 获取第一个数据时间戳
 * @method void setFirst(integer $First) 设置第一个数据时间戳
 * @method integer getLast() 获取最后一个数据时间戳
 * @method void setLast(integer $Last) 设置最后一个数据时间戳
 * @method integer getInterval() 获取采样点时间间隔
 * @method void setInterval(integer $Interval) 设置采样点时间间隔
 * @method array getDataPoints() 获取采样点数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataPoints(array $DataPoints) 设置采样点数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetricTags getTags() 获取指标tags
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(MetricTags $Tags) 设置指标tags
注意：此字段可能返回 null，表示取不到有效值。
 */
class OverviewMetricData extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $Metric;

    /**
     * @var integer 第一个数据时间戳
     */
    public $First;

    /**
     * @var integer 最后一个数据时间戳
     */
    public $Last;

    /**
     * @var integer 采样点时间间隔
     */
    public $Interval;

    /**
     * @var array 采样点数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataPoints;

    /**
     * @var MetricTags 指标tags
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Metric 指标名
     * @param integer $First 第一个数据时间戳
     * @param integer $Last 最后一个数据时间戳
     * @param integer $Interval 采样点时间间隔
     * @param array $DataPoints 采样点数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetricTags $Tags 指标tags
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("First",$param) and $param["First"] !== null) {
            $this->First = $param["First"];
        }

        if (array_key_exists("Last",$param) and $param["Last"] !== null) {
            $this->Last = $param["Last"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = $param["DataPoints"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = new MetricTags();
            $this->Tags->deserialize($param["Tags"]);
        }
    }
}
