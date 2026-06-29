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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsageRankList返回参数结构体
 *
 * @method string getDimension() 获取<p>回填请求的统计维度。</p>
 * @method void setDimension(string $Dimension) 设置<p>回填请求的统计维度。</p>
 * @method string getMetricType() 获取<p>回填请求的指标族：tokens / search 。</p>
 * @method void setMetricType(string $MetricType) 设置<p>回填请求的指标族：tokens / search 。</p>
 * @method array getMetricKeys() 获取<p>本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，按MetricType 区分：tokens=[Total,Input,Output,Cache]、search=[SearchRequestCount,SearchCount]</p>
 * @method void setMetricKeys(array $MetricKeys) 设置<p>本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，按MetricType 区分：tokens=[Total,Input,Output,Cache]、search=[SearchRequestCount,SearchCount]</p>
 * @method string getViewName() 获取<p>视图（数据来源）</p>
 * @method void setViewName(string $ViewName) 设置<p>视图（数据来源）</p>
 * @method integer getPeriod() 获取<p>回填请求的统计粒度（秒）。ShowAll=true 时为 0。</p>
 * @method void setPeriod(integer $Period) 设置<p>回填请求的统计粒度（秒）。ShowAll=true 时为 0。</p>
 * @method string getStartTime() 获取<p>回填请求的起始时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>回填请求的起始时间。</p>
 * @method string getEndTime() 获取<p>回填请求的结束时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>回填请求的结束时间。</p>
 * @method integer getTotal() 获取<p>全量对象数。</p>
 * @method void setTotal(integer $Total) 设置<p>全量对象数。</p>
 * @method integer getOffset() 获取<p>回填请求的翻页起点。ShowAll=true 时为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>回填请求的翻页起点。ShowAll=true 时为 0。</p>
 * @method integer getLimit() 获取<p>页大小，恒为 10。ShowAll=true 时为 Total。</p>
 * @method void setLimit(integer $Limit) 设置<p>页大小，恒为 10。ShowAll=true 时为 Total。</p>
 * @method array getTimestamps() 获取<p>Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。</p>
 * @method void setTimestamps(array $Timestamps) 设置<p>Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。</p>
 * @method array getTopList() 获取<p>对象排行列表，按<code>MetricKeys[0]</code>降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。</p>
 * @method void setTopList(array $TopList) 设置<p>对象排行列表，按<code>MetricKeys[0]</code>降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。</p>
 * @method UsageStats getPageStats() 获取<p>分页统计结果</p>
 * @method void setPageStats(UsageStats $PageStats) 设置<p>分页统计结果</p>
 * @method UsageStats getTotalStats() 获取<p>总统计结果</p>
 * @method void setTotalStats(UsageStats $TotalStats) 设置<p>总统计结果</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUsageRankListResponse extends AbstractModel
{
    /**
     * @var string <p>回填请求的统计维度。</p>
     */
    public $Dimension;

    /**
     * @var string <p>回填请求的指标族：tokens / search 。</p>
     */
    public $MetricType;

    /**
     * @var array <p>本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，按MetricType 区分：tokens=[Total,Input,Output,Cache]、search=[SearchRequestCount,SearchCount]</p>
     */
    public $MetricKeys;

    /**
     * @var string <p>视图（数据来源）</p>
     */
    public $ViewName;

    /**
     * @var integer <p>回填请求的统计粒度（秒）。ShowAll=true 时为 0。</p>
     */
    public $Period;

    /**
     * @var string <p>回填请求的起始时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>回填请求的结束时间。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>全量对象数。</p>
     */
    public $Total;

    /**
     * @var integer <p>回填请求的翻页起点。ShowAll=true 时为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>页大小，恒为 10。ShowAll=true 时为 Total。</p>
     */
    public $Limit;

    /**
     * @var array <p>Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。</p>
     */
    public $Timestamps;

    /**
     * @var array <p>对象排行列表，按<code>MetricKeys[0]</code>降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。</p>
     */
    public $TopList;

    /**
     * @var UsageStats <p>分页统计结果</p>
     */
    public $PageStats;

    /**
     * @var UsageStats <p>总统计结果</p>
     */
    public $TotalStats;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Dimension <p>回填请求的统计维度。</p>
     * @param string $MetricType <p>回填请求的指标族：tokens / search 。</p>
     * @param array $MetricKeys <p>本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，按MetricType 区分：tokens=[Total,Input,Output,Cache]、search=[SearchRequestCount,SearchCount]</p>
     * @param string $ViewName <p>视图（数据来源）</p>
     * @param integer $Period <p>回填请求的统计粒度（秒）。ShowAll=true 时为 0。</p>
     * @param string $StartTime <p>回填请求的起始时间。</p>
     * @param string $EndTime <p>回填请求的结束时间。</p>
     * @param integer $Total <p>全量对象数。</p>
     * @param integer $Offset <p>回填请求的翻页起点。ShowAll=true 时为 0。</p>
     * @param integer $Limit <p>页大小，恒为 10。ShowAll=true 时为 Total。</p>
     * @param array $Timestamps <p>Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。</p>
     * @param array $TopList <p>对象排行列表，按<code>MetricKeys[0]</code>降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。</p>
     * @param UsageStats $PageStats <p>分页统计结果</p>
     * @param UsageStats $TotalStats <p>总统计结果</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("MetricKeys",$param) and $param["MetricKeys"] !== null) {
            $this->MetricKeys = $param["MetricKeys"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("TopList",$param) and $param["TopList"] !== null) {
            $this->TopList = [];
            foreach ($param["TopList"] as $key => $value){
                $obj = new UsageRankItem();
                $obj->deserialize($value);
                array_push($this->TopList, $obj);
            }
        }

        if (array_key_exists("PageStats",$param) and $param["PageStats"] !== null) {
            $this->PageStats = new UsageStats();
            $this->PageStats->deserialize($param["PageStats"]);
        }

        if (array_key_exists("TotalStats",$param) and $param["TotalStats"] !== null) {
            $this->TotalStats = new UsageStats();
            $this->TotalStats->deserialize($param["TotalStats"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
