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
 * @method string getDimension() 获取回填请求的统计维度。
 * @method void setDimension(string $Dimension) 设置回填请求的统计维度。
 * @method string getMetricType() 获取回填请求的指标族（本期固定为 tokens）。前端按本字段切换图表渲染逻辑。
 * @method void setMetricType(string $MetricType) 设置回填请求的指标族（本期固定为 tokens）。前端按本字段切换图表渲染逻辑。
 * @method array getMetricKeys() 获取本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，顺序固定为 [Total, Input, Output]。本期为 [TotalToken, InputTotalToken, OutputTotalToken]。前端可遍历此列表渲染图表，无需硬编码 key 名。
 * @method void setMetricKeys(array $MetricKeys) 设置本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，顺序固定为 [Total, Input, Output]。本期为 [TotalToken, InputTotalToken, OutputTotalToken]。前端可遍历此列表渲染图表，无需硬编码 key 名。
 * @method string getViewName() 获取视图（数据来源）
 * @method void setViewName(string $ViewName) 设置视图（数据来源）
 * @method integer getPeriod() 获取回填请求的统计粒度（秒）。ShowAll=true 时为 0。
 * @method void setPeriod(integer $Period) 设置回填请求的统计粒度（秒）。ShowAll=true 时为 0。
 * @method string getStartTime() 获取回填请求的起始时间。
 * @method void setStartTime(string $StartTime) 设置回填请求的起始时间。
 * @method string getEndTime() 获取回填请求的结束时间。
 * @method void setEndTime(string $EndTime) 设置回填请求的结束时间。
 * @method integer getTotal() 获取全量对象数。
 * @method void setTotal(integer $Total) 设置全量对象数。
 * @method integer getOffset() 获取回填请求的翻页起点。ShowAll=true 时为 0。
 * @method void setOffset(integer $Offset) 设置回填请求的翻页起点。ShowAll=true 时为 0。
 * @method integer getLimit() 获取页大小，恒为 10。ShowAll=true 时为 Total。
 * @method void setLimit(integer $Limit) 设置页大小，恒为 10。ShowAll=true 时为 Total。
 * @method array getTimestamps() 获取Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。
 * @method void setTimestamps(array $Timestamps) 设置Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。
 * @method array getTopList() 获取对象排行列表，按主指标（`MetricKeys[0]`，本期为 TotalToken）降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。
 * @method void setTopList(array $TopList) 设置对象排行列表，按主指标（`MetricKeys[0]`，本期为 TotalToken）降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。
 * @method UsageStats getPageStats() 获取分页统计结果
 * @method void setPageStats(UsageStats $PageStats) 设置分页统计结果
 * @method UsageStats getTotalStats() 获取总统计结果
 * @method void setTotalStats(UsageStats $TotalStats) 设置总统计结果
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUsageRankListResponse extends AbstractModel
{
    /**
     * @var string 回填请求的统计维度。
     */
    public $Dimension;

    /**
     * @var string 回填请求的指标族（本期固定为 tokens）。前端按本字段切换图表渲染逻辑。
     */
    public $MetricType;

    /**
     * @var array 本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，顺序固定为 [Total, Input, Output]。本期为 [TotalToken, InputTotalToken, OutputTotalToken]。前端可遍历此列表渲染图表，无需硬编码 key 名。
     */
    public $MetricKeys;

    /**
     * @var string 视图（数据来源）
     */
    public $ViewName;

    /**
     * @var integer 回填请求的统计粒度（秒）。ShowAll=true 时为 0。
     */
    public $Period;

    /**
     * @var string 回填请求的起始时间。
     */
    public $StartTime;

    /**
     * @var string 回填请求的结束时间。
     */
    public $EndTime;

    /**
     * @var integer 全量对象数。
     */
    public $Total;

    /**
     * @var integer 回填请求的翻页起点。ShowAll=true 时为 0。
     */
    public $Offset;

    /**
     * @var integer 页大小，恒为 10。ShowAll=true 时为 Total。
     */
    public $Limit;

    /**
     * @var array Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。
     */
    public $Timestamps;

    /**
     * @var array 对象排行列表，按主指标（`MetricKeys[0]`，本期为 TotalToken）降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。
     */
    public $TopList;

    /**
     * @var UsageStats 分页统计结果
     */
    public $PageStats;

    /**
     * @var UsageStats 总统计结果
     */
    public $TotalStats;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Dimension 回填请求的统计维度。
     * @param string $MetricType 回填请求的指标族（本期固定为 tokens）。前端按本字段切换图表渲染逻辑。
     * @param array $MetricKeys 本次响应中 Stats / Series / PageStats / TotalStats 实际包含的 metric key 列表，顺序固定为 [Total, Input, Output]。本期为 [TotalToken, InputTotalToken, OutputTotalToken]。前端可遍历此列表渲染图表，无需硬编码 key 名。
     * @param string $ViewName 视图（数据来源）
     * @param integer $Period 回填请求的统计粒度（秒）。ShowAll=true 时为 0。
     * @param string $StartTime 回填请求的起始时间。
     * @param string $EndTime 回填请求的结束时间。
     * @param integer $Total 全量对象数。
     * @param integer $Offset 回填请求的翻页起点。ShowAll=true 时为 0。
     * @param integer $Limit 页大小，恒为 10。ShowAll=true 时为 Total。
     * @param array $Timestamps Series 数组对应的时间戳序列（Unix 秒）。ShowAll=true 时为空数组。
     * @param array $TopList 对象排行列表，按主指标（`MetricKeys[0]`，本期为 TotalToken）降序排序。ShowAll=false 时为当前页 10 个对象（含 Series）；ShowAll=true 时为全量对象（不含 Series，用于 CSV 导出）。
     * @param UsageStats $PageStats 分页统计结果
     * @param UsageStats $TotalStats 总统计结果
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
