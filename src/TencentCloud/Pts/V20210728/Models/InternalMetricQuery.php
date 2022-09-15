<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询结构封装
 *
 * @method string getMetric() 获取指标名
 * @method void setMetric(string $Metric) 设置指标名
 * @method string getAggregation() 获取聚合函数
 * @method void setAggregation(string $Aggregation) 设置聚合函数
 * @method array getLabels() 获取deprecated, 请使用Filters
 * @method void setLabels(array $Labels) 设置deprecated, 请使用Filters
 * @method array getFilters() 获取指标过滤
 * @method void setFilters(array $Filters) 设置指标过滤
 * @method array getGroupBy() 获取指标分组
 * @method void setGroupBy(array $GroupBy) 设置指标分组
 */
class InternalMetricQuery extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $Metric;

    /**
     * @var string 聚合函数
     */
    public $Aggregation;

    /**
     * @var array deprecated, 请使用Filters
     */
    public $Labels;

    /**
     * @var array 指标过滤
     */
    public $Filters;

    /**
     * @var array 指标分组
     */
    public $GroupBy;

    /**
     * @param string $Metric 指标名
     * @param string $Aggregation 聚合函数
     * @param array $Labels deprecated, 请使用Filters
     * @param array $Filters 指标过滤
     * @param array $GroupBy 指标分组
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

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }
    }
}
