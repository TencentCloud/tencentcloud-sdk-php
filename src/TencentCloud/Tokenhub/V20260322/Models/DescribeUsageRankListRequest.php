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
 * @method string getDimension() 获取统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。
 * @method void setDimension(string $Dimension) 设置统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。
 * @method string getStartTime() 获取起始时间（闭区间），RFC3339 格式。
 * @method void setStartTime(string $StartTime) 设置起始时间（闭区间），RFC3339 格式。
 * @method string getEndTime() 获取结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。
 * @method void setEndTime(string $EndTime) 设置结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。
 * @method string getMetricType() 获取指标族切换字段。本期支持 tokens（累计 Token 用量，statistics=sum）；传其他值将返回 InvalidParameter。空字符串或不传时默认 tokens。接口预留 MetricType 字段以支持后续指标族扩展。
 * @method void setMetricType(string $MetricType) 设置指标族切换字段。本期支持 tokens（累计 Token 用量，statistics=sum）；传其他值将返回 InvalidParameter。空字符串或不传时默认 tokens。接口预留 MetricType 字段以支持后续指标族扩展。
 * @method string getTarget() 获取维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。
 * @method void setTarget(string $Target) 设置维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。
 * @method integer getPeriod() 获取统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；> 10 天 → 86400。仅 ShowAll=false 时使用。
 * @method void setPeriod(integer $Period) 设置统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；> 10 天 → 86400。仅 ShowAll=false 时使用。
 * @method integer getOffset() 获取翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。
 * @method void setOffset(integer $Offset) 设置翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。
 * @method boolean getShowAll() 获取是否返回全量结果。
- false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含
  Series 时序点用于绘制曲线。
- true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。

 * @method void setShowAll(boolean $ShowAll) 设置是否返回全量结果。
- false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含
  Series 时序点用于绘制曲线。
- true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。
 */
class DescribeUsageRankListRequest extends AbstractModel
{
    /**
     * @var string 统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。
     */
    public $Dimension;

    /**
     * @var string 起始时间（闭区间），RFC3339 格式。
     */
    public $StartTime;

    /**
     * @var string 结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。
     */
    public $EndTime;

    /**
     * @var string 指标族切换字段。本期支持 tokens（累计 Token 用量，statistics=sum）；传其他值将返回 InvalidParameter。空字符串或不传时默认 tokens。接口预留 MetricType 字段以支持后续指标族扩展。
     */
    public $MetricType;

    /**
     * @var string 维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。
     */
    public $Target;

    /**
     * @var integer 统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；> 10 天 → 86400。仅 ShowAll=false 时使用。
     */
    public $Period;

    /**
     * @var integer 翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。
     */
    public $Offset;

    /**
     * @var boolean 是否返回全量结果。
- false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含
  Series 时序点用于绘制曲线。
- true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。

     */
    public $ShowAll;

    /**
     * @param string $Dimension 统计维度。取值：apikey（按 APIKey 统计）、endpoint（按接入点统计）、model（按模型统计）。
     * @param string $StartTime 起始时间（闭区间），RFC3339 格式。
     * @param string $EndTime 结束时间（开区间），RFC3339 格式。与 StartTime 的跨度最大 90 天。
     * @param string $MetricType 指标族切换字段。本期支持 tokens（累计 Token 用量，statistics=sum）；传其他值将返回 InvalidParameter。空字符串或不传时默认 tokens。接口预留 MetricType 字段以支持后续指标族扩展。
     * @param string $Target 维度过滤值。空字符串表示查询全部对象，非空时仅查询指定单个对象（如指定 APIKey ID）。最大 256 字符。
     * @param integer $Period 统计粒度（秒）。取值：60、300、3600、86400。必须不小于跨度对应下限：跨度 ≤ 1 天 → 60；1 ~ 5 天 → 300；5 ~ 10 天 → 3600；> 10 天 → 86400。仅 ShowAll=false 时使用。
     * @param integer $Offset 翻页起点，从 0 起，默认 0。ShowAll=true 时忽略。页大小固定为 10。
     * @param boolean $ShowAll 是否返回全量结果。
- false（默认）：按 Offset 分页返回 TopList（每页 10 条），每个对象包含
  Series 时序点用于绘制曲线。
- true：忽略 Offset，返回全量对象列表，不返回 Series（CSV 导出场景）。
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
    }
}
