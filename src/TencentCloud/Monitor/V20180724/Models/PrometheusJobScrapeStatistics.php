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
 * Job抓取统计
 *
 * @method string getJobName() 获取Job 名
 * @method void setJobName(string $JobName) 设置Job 名
 * @method float getScrapedRate() 获取被采集的点数
 * @method void setScrapedRate(float $ScrapedRate) 设置被采集的点数
 * @method array getMetrics() 获取指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetrics(array $Metrics) 设置指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobType() 获取Job 类型
 * @method void setJobType(string $JobType) 设置Job 类型
 */
class PrometheusJobScrapeStatistics extends AbstractModel
{
    /**
     * @var string Job 名
     */
    public $JobName;

    /**
     * @var float 被采集的点数
     */
    public $ScrapedRate;

    /**
     * @var array 指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metrics;

    /**
     * @var string Job 类型
     */
    public $JobType;

    /**
     * @param string $JobName Job 名
     * @param float $ScrapedRate 被采集的点数
     * @param array $Metrics 指标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobType Job 类型
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("ScrapedRate",$param) and $param["ScrapedRate"] !== null) {
            $this->ScrapedRate = $param["ScrapedRate"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new PrometheusMetricScrapeStatistics();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }
    }
}
