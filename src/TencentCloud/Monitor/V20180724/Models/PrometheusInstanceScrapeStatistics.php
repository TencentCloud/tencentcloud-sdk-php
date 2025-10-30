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
 * 实例抓取指标统计
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method float getScrapedRate() 获取被采集的点数
 * @method void setScrapedRate(float $ScrapedRate) 设置被采集的点数
 * @method array getClusters() 获取集群指标列表
 * @method void setClusters(array $Clusters) 设置集群指标列表
 * @method array getGlobal() 获取非容器指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobal(array $Global) 设置非容器指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSamplesRate() 获取过滤前的指标采集速率
 * @method void setSamplesRate(float $SamplesRate) 设置过滤前的指标采集速率
 */
class PrometheusInstanceScrapeStatistics extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var float 被采集的点数
     */
    public $ScrapedRate;

    /**
     * @var array 集群指标列表
     */
    public $Clusters;

    /**
     * @var array 非容器指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Global;

    /**
     * @var float 过滤前的指标采集速率
     */
    public $SamplesRate;

    /**
     * @param string $InstanceId 实例ID
     * @param float $ScrapedRate 被采集的点数
     * @param array $Clusters 集群指标列表
     * @param array $Global 非容器指标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SamplesRate 过滤前的指标采集速率
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ScrapedRate",$param) and $param["ScrapedRate"] !== null) {
            $this->ScrapedRate = $param["ScrapedRate"];
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = [];
            foreach ($param["Clusters"] as $key => $value){
                $obj = new PrometheusClusterScrapeStatistics();
                $obj->deserialize($value);
                array_push($this->Clusters, $obj);
            }
        }

        if (array_key_exists("Global",$param) and $param["Global"] !== null) {
            $this->Global = [];
            foreach ($param["Global"] as $key => $value){
                $obj = new PrometheusClusterScrapeStatistics();
                $obj->deserialize($value);
                array_push($this->Global, $obj);
            }
        }

        if (array_key_exists("SamplesRate",$param) and $param["SamplesRate"] !== null) {
            $this->SamplesRate = $param["SamplesRate"];
        }
    }
}
