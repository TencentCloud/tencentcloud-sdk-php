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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessMetrics请求参数结构体
 *
 * @method string getSpaceId() 获取space空间id
 * @method void setSpaceId(string $SpaceId) 设置space空间id
 * @method string getIndexId() 获取index索引id
 * @method void setIndexId(string $IndexId) 设置index索引id
 * @method array getMetricType() 获取指标类型，暂时只支持Storage(存储大小),AllMetric(所有存储指标：索引流量、存储大小、文档数量、读请求和写请求)
 * @method void setMetricType(array $MetricType) 设置指标类型，暂时只支持Storage(存储大小),AllMetric(所有存储指标：索引流量、存储大小、文档数量、读请求和写请求)
 * @method integer getDurationType() 获取时间长度类型DurationType(1: 3小时, 2: 昨天1天,3: 今日0点到现在)
 * @method void setDurationType(integer $DurationType) 设置时间长度类型DurationType(1: 3小时, 2: 昨天1天,3: 今日0点到现在)
 * @method array getBatchIndexList() 获取索引数据
 * @method void setBatchIndexList(array $BatchIndexList) 设置索引数据
 */
class DescribeServerlessMetricsRequest extends AbstractModel
{
    /**
     * @var string space空间id
     */
    public $SpaceId;

    /**
     * @var string index索引id
     */
    public $IndexId;

    /**
     * @var array 指标类型，暂时只支持Storage(存储大小),AllMetric(所有存储指标：索引流量、存储大小、文档数量、读请求和写请求)
     */
    public $MetricType;

    /**
     * @var integer 时间长度类型DurationType(1: 3小时, 2: 昨天1天,3: 今日0点到现在)
     */
    public $DurationType;

    /**
     * @var array 索引数据
     */
    public $BatchIndexList;

    /**
     * @param string $SpaceId space空间id
     * @param string $IndexId index索引id
     * @param array $MetricType 指标类型，暂时只支持Storage(存储大小),AllMetric(所有存储指标：索引流量、存储大小、文档数量、读请求和写请求)
     * @param integer $DurationType 时间长度类型DurationType(1: 3小时, 2: 昨天1天,3: 今日0点到现在)
     * @param array $BatchIndexList 索引数据
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("DurationType",$param) and $param["DurationType"] !== null) {
            $this->DurationType = $param["DurationType"];
        }

        if (array_key_exists("BatchIndexList",$param) and $param["BatchIndexList"] !== null) {
            $this->BatchIndexList = $param["BatchIndexList"];
        }
    }
}
