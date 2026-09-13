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
 * DescribeUsageRankList请求参数结构体
 *
 * @method string getDimension() 获取<p>统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。</p>
 * @method void setDimension(string $Dimension) 设置<p>统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。</p>
 * @method string getStartTime() 获取<p>起始时间（闭区间），RFC3339 格式。</p>
 * @method void setStartTime(string $StartTime) 设置<p>起始时间（闭区间），RFC3339 格式。</p>
 * @method string getEndTime() 获取<p>结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。</p>
 * @method string getMetricType() 获取<p>指标族切换字段。</p><ul><li>tokens（默认）：Token 用量消耗（statistics=sum），支持 Dimension = apikey/endpoint/model</li><li>search：联网搜索调用次数（statistics=sum），仅支持 Dimension = model</li><li>apikey_usage: APIKey 锚定用量统计（某 APIKey 下按模型或接入点展开）（statistics=sum），支持 Dimension = endpoint/model</li><li>其他值返回 InvalidParameter。</li></ul>
 * @method void setMetricType(string $MetricType) 设置<p>指标族切换字段。</p><ul><li>tokens（默认）：Token 用量消耗（statistics=sum），支持 Dimension = apikey/endpoint/model</li><li>search：联网搜索调用次数（statistics=sum），仅支持 Dimension = model</li><li>apikey_usage: APIKey 锚定用量统计（某 APIKey 下按模型或接入点展开）（statistics=sum），支持 Dimension = endpoint/model</li><li>其他值返回 InvalidParameter。</li></ul>
 * @method string getAnchor() 获取<p>锚定对象，用于缩小统计范围「在哪个具体对象之内」，MetricType 为 apikey_usage 时必填。<br>各 MetricType 是否支持/如何使用 Anchor，见 MetricType 字段说明。</p>
 * @method void setAnchor(string $Anchor) 设置<p>锚定对象，用于缩小统计范围「在哪个具体对象之内」，MetricType 为 apikey_usage 时必填。<br>各 MetricType 是否支持/如何使用 Anchor，见 MetricType 字段说明。</p>
 * @method string getTarget() 获取<p>维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。</p>
 * @method void setTarget(string $Target) 设置<p>维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。</p>
 * @method integer getPeriod() 获取<p>统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；&gt; 10 天 → 86400。仅 ShowAll=false 时使用。</p>
 * @method void setPeriod(integer $Period) 设置<p>统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；&gt; 10 天 → 86400。仅 ShowAll=false 时使用。</p>
 * @method integer getOffset() 获取<p>翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。</p>
 * @method boolean getShowAll() 获取<p>是否返回全量结果。</p><ul><li>false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含<br>Series 时序点用于绘制曲线。</li><li>true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。</li></ul>
 * @method void setShowAll(boolean $ShowAll) 设置<p>是否返回全量结果。</p><ul><li>false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含<br>Series 时序点用于绘制曲线。</li><li>true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。</li></ul>
 * @method string getSortKey() 获取<p>排序指标键（可选），具体值见响应 MetricKeys。为空时按 <code>MetricKeys[0]</code> 降序排序（tokens/apikey_usage 族为 TotalToken，search 族为 SearchRequestCount）。非法值返回 InvalidParameter。</p>
 * @method void setSortKey(string $SortKey) 设置<p>排序指标键（可选），具体值见响应 MetricKeys。为空时按 <code>MetricKeys[0]</code> 降序排序（tokens/apikey_usage 族为 TotalToken，search 族为 SearchRequestCount）。非法值返回 InvalidParameter。</p>
 */
class DescribeUsageRankListRequest extends AbstractModel
{
    /**
     * @var string <p>统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。</p>
     */
    public $Dimension;

    /**
     * @var string <p>起始时间（闭区间），RFC3339 格式。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>指标族切换字段。</p><ul><li>tokens（默认）：Token 用量消耗（statistics=sum），支持 Dimension = apikey/endpoint/model</li><li>search：联网搜索调用次数（statistics=sum），仅支持 Dimension = model</li><li>apikey_usage: APIKey 锚定用量统计（某 APIKey 下按模型或接入点展开）（statistics=sum），支持 Dimension = endpoint/model</li><li>其他值返回 InvalidParameter。</li></ul>
     */
    public $MetricType;

    /**
     * @var string <p>锚定对象，用于缩小统计范围「在哪个具体对象之内」，MetricType 为 apikey_usage 时必填。<br>各 MetricType 是否支持/如何使用 Anchor，见 MetricType 字段说明。</p>
     */
    public $Anchor;

    /**
     * @var string <p>维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。</p>
     */
    public $Target;

    /**
     * @var integer <p>统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；&gt; 10 天 → 86400。仅 ShowAll=false 时使用。</p>
     */
    public $Period;

    /**
     * @var integer <p>翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。</p>
     */
    public $Offset;

    /**
     * @var boolean <p>是否返回全量结果。</p><ul><li>false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含<br>Series 时序点用于绘制曲线。</li><li>true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。</li></ul>
     */
    public $ShowAll;

    /**
     * @var string <p>排序指标键（可选），具体值见响应 MetricKeys。为空时按 <code>MetricKeys[0]</code> 降序排序（tokens/apikey_usage 族为 TotalToken，search 族为 SearchRequestCount）。非法值返回 InvalidParameter。</p>
     */
    public $SortKey;

    /**
     * @param string $Dimension <p>统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。</p>
     * @param string $StartTime <p>起始时间（闭区间），RFC3339 格式。</p>
     * @param string $EndTime <p>结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。</p>
     * @param string $MetricType <p>指标族切换字段。</p><ul><li>tokens（默认）：Token 用量消耗（statistics=sum），支持 Dimension = apikey/endpoint/model</li><li>search：联网搜索调用次数（statistics=sum），仅支持 Dimension = model</li><li>apikey_usage: APIKey 锚定用量统计（某 APIKey 下按模型或接入点展开）（statistics=sum），支持 Dimension = endpoint/model</li><li>其他值返回 InvalidParameter。</li></ul>
     * @param string $Anchor <p>锚定对象，用于缩小统计范围「在哪个具体对象之内」，MetricType 为 apikey_usage 时必填。<br>各 MetricType 是否支持/如何使用 Anchor，见 MetricType 字段说明。</p>
     * @param string $Target <p>维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。</p>
     * @param integer $Period <p>统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；&gt; 10 天 → 86400。仅 ShowAll=false 时使用。</p>
     * @param integer $Offset <p>翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。</p>
     * @param boolean $ShowAll <p>是否返回全量结果。</p><ul><li>false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含<br>Series 时序点用于绘制曲线。</li><li>true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。</li></ul>
     * @param string $SortKey <p>排序指标键（可选），具体值见响应 MetricKeys。为空时按 <code>MetricKeys[0]</code> 降序排序（tokens/apikey_usage 族为 TotalToken，search 族为 SearchRequestCount）。非法值返回 InvalidParameter。</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Anchor",$param) and $param["Anchor"] !== null) {
            $this->Anchor = $param["Anchor"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ShowAll",$param) and $param["ShowAll"] !== null) {
            $this->ShowAll = $param["ShowAll"];
        }

        if (array_key_exists("SortKey",$param) and $param["SortKey"] !== null) {
            $this->SortKey = $param["SortKey"];
        }
    }
}
