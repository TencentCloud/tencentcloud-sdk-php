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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标抓取统计
 *
 * @method string getMetricName() 获取指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标名
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSamplesRate() 获取原始数据中的点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSamplesRate(float $SamplesRate) 设置原始数据中的点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScrapedRate() 获取被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScrapedRate(float $ScrapedRate) 设置被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsRecommended() 获取是否推荐采集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRecommended(boolean $IsRecommended) 设置是否推荐采集
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusMetricScrapeStatistics extends AbstractModel
{
    /**
     * @var string 指标名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var float 原始数据中的点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SamplesRate;

    /**
     * @var float 被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScrapedRate;

    /**
     * @var boolean 是否推荐采集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRecommended;

    /**
     * @param string $MetricName 指标名
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SamplesRate 原始数据中的点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ScrapedRate 被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsRecommended 是否推荐采集
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("SamplesRate",$param) and $param["SamplesRate"] !== null) {
            $this->SamplesRate = $param["SamplesRate"];
        }

        if (array_key_exists("ScrapedRate",$param) and $param["ScrapedRate"] !== null) {
            $this->ScrapedRate = $param["ScrapedRate"];
        }

        if (array_key_exists("IsRecommended",$param) and $param["IsRecommended"] !== null) {
            $this->IsRecommended = $param["IsRecommended"];
        }
    }
}
