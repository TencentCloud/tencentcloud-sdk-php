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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventCenterEvents请求参数结构体
 *
 * @method array getFilters() 获取<p>事件筛选条件，用于按事件来源、对象、类型、级别及工具等信息查询事件。</p><p>入参限制：最多支持 12 个筛选条件，同名筛选条件不可重复；每个条件支持 1～20 个值，每个值非空且不超过 256 字节。</p><p>支持的筛选字段：Source、ObjectType、ObjectId、EventType、EventLevel、Reason、EventId、ToolId、ToolType、Message。</p>
 * @method void setFilters(array $Filters) 设置<p>事件筛选条件，用于按事件来源、对象、类型、级别及工具等信息查询事件。</p><p>入参限制：最多支持 12 个筛选条件，同名筛选条件不可重复；每个条件支持 1～20 个值，每个值非空且不超过 256 字节。</p><p>支持的筛选字段：Source、ObjectType、ObjectId、EventType、EventLevel、Reason、EventId、ToolId、ToolType、Message。</p>
 * @method string getStartTime() 获取<p>查询开始时间，包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T13:28:00Z。</p><p>入参限制：必须早于 EndTime，且不能早于当前时间前 7 天。</p><p>默认值：不传时默认为 EndTime 前 1 小时。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间，包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T13:28:00Z。</p><p>入参限制：必须早于 EndTime，且不能早于当前时间前 7 天。</p><p>默认值：不传时默认为 EndTime 前 1 小时。</p>
 * @method string getEndTime() 获取<p>查询结束时间，不包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T14:28:00Z。</p><p>入参限制：必须晚于 StartTime，不应晚于当前时间。</p><p>默认值：不传时默认为当前时间。</p><p>查询范围为 [StartTime, EndTime)。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，不包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T14:28:00Z。</p><p>入参限制：必须晚于 StartTime，不应晚于当前时间。</p><p>默认值：不传时默认为当前时间。</p><p>查询范围为 [StartTime, EndTime)。</p>
 * @method integer getOffset() 获取<p>分页偏移量。</p><p>取值范围：[0, 10000]</p><p>默认值：0</p><p>Raw 模式按去重后的事件分页，Aggregate 模式按聚合结果分页。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。</p><p>取值范围：[0, 10000]</p><p>默认值：0</p><p>Raw 模式按去重后的事件分页，Aggregate 模式按聚合结果分页。</p>
 * @method integer getLimit() 获取<p>单次返回的最大结果条数。</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>单次返回的最大结果条数。</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method string getOrder() 获取<p>事件结果的时间排序方向。</p><p>枚举值：</p><ul><li>Asc： 按时间升序排列，较早的事件在前。</li><li>Desc： 按时间降序排列，较新的事件在前。默认值。</li></ul><p>默认值：Desc</p><p>Raw 模式按事件发生时间排序；Aggregate 模式按聚合结果最近发生时间排序。</p>
 * @method void setOrder(string $Order) 设置<p>事件结果的时间排序方向。</p><p>枚举值：</p><ul><li>Asc： 按时间升序排列，较早的事件在前。</li><li>Desc： 按时间降序排列，较新的事件在前。默认值。</li></ul><p>默认值：Desc</p><p>Raw 模式按事件发生时间排序；Aggregate 模式按聚合结果最近发生时间排序。</p>
 * @method string getMode() 获取<p>事件查询模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式，返回去重后的事件明细。默认值。</li><li>Aggregate： 聚合模式，返回聚合结果及事件数量、首次和最近发生时间；生命周期事件仍逐条展示。</li></ul><p>默认值：Raw</p><p>Raw 返回去重后的事件明细；Aggregate 返回聚合结果。</p>
 * @method void setMode(string $Mode) 设置<p>事件查询模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式，返回去重后的事件明细。默认值。</li><li>Aggregate： 聚合模式，返回聚合结果及事件数量、首次和最近发生时间；生命周期事件仍逐条展示。</li></ul><p>默认值：Raw</p><p>Raw 返回去重后的事件明细；Aggregate 返回聚合结果。</p>
 */
class DescribeEventCenterEventsRequest extends AbstractModel
{
    /**
     * @var array <p>事件筛选条件，用于按事件来源、对象、类型、级别及工具等信息查询事件。</p><p>入参限制：最多支持 12 个筛选条件，同名筛选条件不可重复；每个条件支持 1～20 个值，每个值非空且不超过 256 字节。</p><p>支持的筛选字段：Source、ObjectType、ObjectId、EventType、EventLevel、Reason、EventId、ToolId、ToolType、Message。</p>
     */
    public $Filters;

    /**
     * @var string <p>查询开始时间，包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T13:28:00Z。</p><p>入参限制：必须早于 EndTime，且不能早于当前时间前 7 天。</p><p>默认值：不传时默认为 EndTime 前 1 小时。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，不包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T14:28:00Z。</p><p>入参限制：必须晚于 StartTime，不应晚于当前时间。</p><p>默认值：不传时默认为当前时间。</p><p>查询范围为 [StartTime, EndTime)。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页偏移量。</p><p>取值范围：[0, 10000]</p><p>默认值：0</p><p>Raw 模式按去重后的事件分页，Aggregate 模式按聚合结果分页。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次返回的最大结果条数。</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     */
    public $Limit;

    /**
     * @var string <p>事件结果的时间排序方向。</p><p>枚举值：</p><ul><li>Asc： 按时间升序排列，较早的事件在前。</li><li>Desc： 按时间降序排列，较新的事件在前。默认值。</li></ul><p>默认值：Desc</p><p>Raw 模式按事件发生时间排序；Aggregate 模式按聚合结果最近发生时间排序。</p>
     */
    public $Order;

    /**
     * @var string <p>事件查询模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式，返回去重后的事件明细。默认值。</li><li>Aggregate： 聚合模式，返回聚合结果及事件数量、首次和最近发生时间；生命周期事件仍逐条展示。</li></ul><p>默认值：Raw</p><p>Raw 返回去重后的事件明细；Aggregate 返回聚合结果。</p>
     */
    public $Mode;

    /**
     * @param array $Filters <p>事件筛选条件，用于按事件来源、对象、类型、级别及工具等信息查询事件。</p><p>入参限制：最多支持 12 个筛选条件，同名筛选条件不可重复；每个条件支持 1～20 个值，每个值非空且不超过 256 字节。</p><p>支持的筛选字段：Source、ObjectType、ObjectId、EventType、EventLevel、Reason、EventId、ToolId、ToolType、Message。</p>
     * @param string $StartTime <p>查询开始时间，包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T13:28:00Z。</p><p>入参限制：必须早于 EndTime，且不能早于当前时间前 7 天。</p><p>默认值：不传时默认为 EndTime 前 1 小时。</p>
     * @param string $EndTime <p>查询结束时间，不包含该时间点。</p><p>参数格式：RFC3339 格式，例如 2026-10-23T14:28:00Z。</p><p>入参限制：必须晚于 StartTime，不应晚于当前时间。</p><p>默认值：不传时默认为当前时间。</p><p>查询范围为 [StartTime, EndTime)。</p>
     * @param integer $Offset <p>分页偏移量。</p><p>取值范围：[0, 10000]</p><p>默认值：0</p><p>Raw 模式按去重后的事件分页，Aggregate 模式按聚合结果分页。</p>
     * @param integer $Limit <p>单次返回的最大结果条数。</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     * @param string $Order <p>事件结果的时间排序方向。</p><p>枚举值：</p><ul><li>Asc： 按时间升序排列，较早的事件在前。</li><li>Desc： 按时间降序排列，较新的事件在前。默认值。</li></ul><p>默认值：Desc</p><p>Raw 模式按事件发生时间排序；Aggregate 模式按聚合结果最近发生时间排序。</p>
     * @param string $Mode <p>事件查询模式。</p><p>枚举值：</p><ul><li>Raw： 明细模式，返回去重后的事件明细。默认值。</li><li>Aggregate： 聚合模式，返回聚合结果及事件数量、首次和最近发生时间；生命周期事件仍逐条展示。</li></ul><p>默认值：Raw</p><p>Raw 返回去重后的事件明细；Aggregate 返回聚合结果。</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
