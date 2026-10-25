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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMMetricDistribution请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID（必填）</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（必填）</p>
 * @method integer getStartTime() 获取<p>开始时间 Unix 毫秒（必填）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间 Unix 毫秒（必填）</p>
 * @method integer getEndTime() 获取<p>结束时间 Unix 毫秒（必填）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间 Unix 毫秒（必填）</p>
 * @method string getEventType() 获取<p>顶层事件类型；单查必填，批量用 Queries 时可不填</p>
 * @method void setEventType(string $EventType) 设置<p>顶层事件类型；单查必填，批量用 Queries 时可不填</p>
 * @method string getSubType() 获取<p>子类型；未知返回 0</p>
 * @method void setSubType(string $SubType) 设置<p>子类型；未知返回 0</p>
 * @method string getFilters() 获取<p>筛选条件 JSON 字符串：[{Key,Op,Values}]，走分析立方白名单</p>
 * @method void setFilters(string $Filters) 设置<p>筛选条件 JSON 字符串：[{Key,Op,Values}]，走分析立方白名单</p>
 * @method array getMetrics() 获取<p>指标名列表，如 count / rate；单查必填</p>
 * @method void setMetrics(array $Metrics) 设置<p>指标名列表，如 count / rate；单查必填</p>
 * @method string getMeasurementKey() 获取<p>分位/均值必填，如 lcp / duration</p>
 * @method void setMeasurementKey(string $MeasurementKey) 设置<p>分位/均值必填，如 lcp / duration</p>
 * @method string getGroupBy() 获取<p>单维度（Distribution 用）</p>
 * @method void setGroupBy(string $GroupBy) 设置<p>单维度（Distribution 用）</p>
 * @method integer getLimit() 获取<p>返回条数，Top 默认 10 上限 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回条数，Top 默认 10 上限 100</p>
 * @method array getQueries() 获取<p>批量查询，上限 32</p>
 * @method void setQueries(array $Queries) 设置<p>批量查询，上限 32</p>
 */
class DescribeTDEMMetricDistributionRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID（必填）</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间 Unix 毫秒（必填）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间 Unix 毫秒（必填）</p>
     */
    public $EndTime;

    /**
     * @var string <p>顶层事件类型；单查必填，批量用 Queries 时可不填</p>
     */
    public $EventType;

    /**
     * @var string <p>子类型；未知返回 0</p>
     */
    public $SubType;

    /**
     * @var string <p>筛选条件 JSON 字符串：[{Key,Op,Values}]，走分析立方白名单</p>
     */
    public $Filters;

    /**
     * @var array <p>指标名列表，如 count / rate；单查必填</p>
     */
    public $Metrics;

    /**
     * @var string <p>分位/均值必填，如 lcp / duration</p>
     */
    public $MeasurementKey;

    /**
     * @var string <p>单维度（Distribution 用）</p>
     */
    public $GroupBy;

    /**
     * @var integer <p>返回条数，Top 默认 10 上限 100</p>
     */
    public $Limit;

    /**
     * @var array <p>批量查询，上限 32</p>
     */
    public $Queries;

    /**
     * @param string $AppId <p>应用 ID（必填）</p>
     * @param integer $StartTime <p>开始时间 Unix 毫秒（必填）</p>
     * @param integer $EndTime <p>结束时间 Unix 毫秒（必填）</p>
     * @param string $EventType <p>顶层事件类型；单查必填，批量用 Queries 时可不填</p>
     * @param string $SubType <p>子类型；未知返回 0</p>
     * @param string $Filters <p>筛选条件 JSON 字符串：[{Key,Op,Values}]，走分析立方白名单</p>
     * @param array $Metrics <p>指标名列表，如 count / rate；单查必填</p>
     * @param string $MeasurementKey <p>分位/均值必填，如 lcp / duration</p>
     * @param string $GroupBy <p>单维度（Distribution 用）</p>
     * @param integer $Limit <p>返回条数，Top 默认 10 上限 100</p>
     * @param array $Queries <p>批量查询，上限 32</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("MeasurementKey",$param) and $param["MeasurementKey"] !== null) {
            $this->MeasurementKey = $param["MeasurementKey"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Queries",$param) and $param["Queries"] !== null) {
            $this->Queries = [];
            foreach ($param["Queries"] as $key => $value){
                $obj = new MetricQueryItem();
                $obj->deserialize($value);
                array_push($this->Queries, $obj);
            }
        }
    }
}
