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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeMetricData请求参数结构体
 *
 * @method string getAnalyzeTaskType() 获取<p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
 * @method void setAnalyzeTaskType(string $AnalyzeTaskType) 设置<p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
 * @method string getMetricType() 获取<p>指标类型（counter、gauge以及histogram），指标查询默认传gauge</p>
 * @method void setMetricType(string $MetricType) 设置<p>指标类型（counter、gauge以及histogram），指标查询默认传gauge</p>
 * @method string getField() 获取<p>指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如：&quot;avg(ping_time)&quot;代表整体时延(ms)；不同的任务类型支持不同的field查询，以及聚合规则，详情可见https://cloud.tencent.com/document/product/248/87584。</p>
 * @method void setField(string $Field) 设置<p>指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如：&quot;avg(ping_time)&quot;代表整体时延(ms)；不同的任务类型支持不同的field查询，以及聚合规则，详情可见https://cloud.tencent.com/document/product/248/87584。</p>
 * @method string getFilter() 获取<p>过滤条件可以传单个过滤条件也可以拼接多个参数</p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件可以传单个过滤条件也可以拼接多个参数</p>
 * @method string getGroupBy() 获取<p>聚合时间, 1m、1d、30d 等等</p>
 * @method void setGroupBy(string $GroupBy) 设置<p>聚合时间, 1m、1d、30d 等等</p>
 * @method array getFilters() 获取<p>多条件过滤，支持多个过滤条件组合查询<br>例如：[&quot;&quot;host&quot; = &#39;www.test.com&#39;&quot;, &quot;time &gt;= now()-1h&quot;]</p>
 * @method void setFilters(array $Filters) 设置<p>多条件过滤，支持多个过滤条件组合查询<br>例如：[&quot;&quot;host&quot; = &#39;www.test.com&#39;&quot;, &quot;time &gt;= now()-1h&quot;]</p>
 */
class DescribeProbeMetricDataRequest extends AbstractModel
{
    /**
     * @var string <p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
     */
    public $AnalyzeTaskType;

    /**
     * @var string <p>指标类型（counter、gauge以及histogram），指标查询默认传gauge</p>
     */
    public $MetricType;

    /**
     * @var string <p>指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如：&quot;avg(ping_time)&quot;代表整体时延(ms)；不同的任务类型支持不同的field查询，以及聚合规则，详情可见https://cloud.tencent.com/document/product/248/87584。</p>
     */
    public $Field;

    /**
     * @var string <p>过滤条件可以传单个过滤条件也可以拼接多个参数</p>
     */
    public $Filter;

    /**
     * @var string <p>聚合时间, 1m、1d、30d 等等</p>
     */
    public $GroupBy;

    /**
     * @var array <p>多条件过滤，支持多个过滤条件组合查询<br>例如：[&quot;&quot;host&quot; = &#39;www.test.com&#39;&quot;, &quot;time &gt;= now()-1h&quot;]</p>
     */
    public $Filters;

    /**
     * @param string $AnalyzeTaskType <p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
     * @param string $MetricType <p>指标类型（counter、gauge以及histogram），指标查询默认传gauge</p>
     * @param string $Field <p>指标详细字段，可以传递传具体的指标也可以对指标进行聚合查询例如：&quot;avg(ping_time)&quot;代表整体时延(ms)；不同的任务类型支持不同的field查询，以及聚合规则，详情可见https://cloud.tencent.com/document/product/248/87584。</p>
     * @param string $Filter <p>过滤条件可以传单个过滤条件也可以拼接多个参数</p>
     * @param string $GroupBy <p>聚合时间, 1m、1d、30d 等等</p>
     * @param array $Filters <p>多条件过滤，支持多个过滤条件组合查询<br>例如：[&quot;&quot;host&quot; = &#39;www.test.com&#39;&quot;, &quot;time &gt;= now()-1h&quot;]</p>
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
