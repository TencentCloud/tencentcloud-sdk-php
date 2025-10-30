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
 * 集群指标抓取统计
 *
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method float getScrapedRate() 获取被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScrapedRate(float $ScrapedRate) 设置被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getJobs() 获取Job列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobs(array $Jobs) 设置Job列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSamplesRate() 获取过滤前的指标采集速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSamplesRate(float $SamplesRate) 设置过滤前的指标采集速率
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusClusterScrapeStatistics extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var float 被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScrapedRate;

    /**
     * @var array Job列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Jobs;

    /**
     * @var float 过滤前的指标采集速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SamplesRate;

    /**
     * @param string $ClusterID 集群ID
     * @param float $ScrapedRate 被采集的点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Jobs Job列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SamplesRate 过滤前的指标采集速率
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ScrapedRate",$param) and $param["ScrapedRate"] !== null) {
            $this->ScrapedRate = $param["ScrapedRate"];
        }

        if (array_key_exists("Jobs",$param) and $param["Jobs"] !== null) {
            $this->Jobs = [];
            foreach ($param["Jobs"] as $key => $value){
                $obj = new PrometheusJobScrapeStatistics();
                $obj->deserialize($value);
                array_push($this->Jobs, $obj);
            }
        }

        if (array_key_exists("SamplesRate",$param) and $param["SamplesRate"] !== null) {
            $this->SamplesRate = $param["SamplesRate"];
        }
    }
}
