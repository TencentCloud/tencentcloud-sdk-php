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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeMetricData请求参数结构体
 *
 * @method string getAnalyzeTaskType() 获取分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验
 * @method void setAnalyzeTaskType(string $AnalyzeTaskType) 设置分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验
 * @method string getMetricType() 获取指标类型，指标查询默认传gauge
 * @method void setMetricType(string $MetricType) 设置指标类型，指标查询默认传gauge
 * @method string getField() 获取指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如："avg(ping_time)"代表整体时延(ms)
 * @method void setField(string $Field) 设置指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如："avg(ping_time)"代表整体时延(ms)
 * @method string getFilter() 获取过滤条件可以传单个过滤条件也可以拼接多个参数
 * @method void setFilter(string $Filter) 设置过滤条件可以传单个过滤条件也可以拼接多个参数
 * @method string getGroupBy() 获取聚合时间, 1m、1d、30d 等等
 * @method void setGroupBy(string $GroupBy) 设置聚合时间, 1m、1d、30d 等等
 * @method array getFilters() 获取多条件过滤，支持多个过滤条件组合查询
例如：[""host" = 'www.test.com'", "time >= now()-1h"]
 * @method void setFilters(array $Filters) 设置多条件过滤，支持多个过滤条件组合查询
例如：[""host" = 'www.test.com'", "time >= now()-1h"]
 */
class DescribeProbeMetricDataRequest extends AbstractModel
{
    /**
     * @var string 分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验
     */
    public $AnalyzeTaskType;

    /**
     * @var string 指标类型，指标查询默认传gauge
     */
    public $MetricType;

    /**
     * @var string 指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如："avg(ping_time)"代表整体时延(ms)
     */
    public $Field;

    /**
     * @var string 过滤条件可以传单个过滤条件也可以拼接多个参数
     */
    public $Filter;

    /**
     * @var string 聚合时间, 1m、1d、30d 等等
     */
    public $GroupBy;

    /**
     * @var array 多条件过滤，支持多个过滤条件组合查询
例如：[""host" = 'www.test.com'", "time >= now()-1h"]
     */
    public $Filters;

    /**
     * @param string $AnalyzeTaskType 分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验
     * @param string $MetricType 指标类型，指标查询默认传gauge
     * @param string $Field 指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如："avg(ping_time)"代表整体时延(ms)
     * @param string $Filter 过滤条件可以传单个过滤条件也可以拼接多个参数
     * @param string $GroupBy 聚合时间, 1m、1d、30d 等等
     * @param array $Filters 多条件过滤，支持多个过滤条件组合查询
例如：[""host" = 'www.test.com'", "time >= now()-1h"]
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
        if (array_key_exists("AnalyzeTaskType",$param) and $param["AnalyzeTaskType"] !== null) {
            $this->AnalyzeTaskType = $param["AnalyzeTaskType"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
