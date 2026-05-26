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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMemoryPlusRecord请求参数结构体
 *
 * @method string getSpaceId() 获取<p>查询的 Memory 实例 ID。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>查询的 Memory 实例 ID。</p>
 * @method integer getOffset() 获取<p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
 * @method void setOffset(integer $Offset) 设置<p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
 * @method integer getLimit() 获取<p>单次查询返回的记录数量上限（分页大小）。</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的记录数量上限（分页大小）。</p>
 * @method string getRecordType() 获取<p>查询的记忆类型。</p><ul><li>conversation：L0 原始对话。</li><li>memory：L1 原子记忆。</li><li>scene：L2 场景记忆。</li><li>persona：L3 个性化画像。</li><li>memory/persona：L1 原子记忆-画像型。</li><li>memory/episodic：L1 原子记忆-事件型。</li><li>memory/instruction：L1 原子记忆-指令型。</li></ul>
 * @method void setRecordType(string $RecordType) 设置<p>查询的记忆类型。</p><ul><li>conversation：L0 原始对话。</li><li>memory：L1 原子记忆。</li><li>scene：L2 场景记忆。</li><li>persona：L3 个性化画像。</li><li>memory/persona：L1 原子记忆-画像型。</li><li>memory/episodic：L1 原子记忆-事件型。</li><li>memory/instruction：L1 原子记忆-指令型。</li></ul>
 * @method array getOutput() 获取<p>指定返回记录中的特定字段。</p>
 * @method void setOutput(array $Output) 设置<p>指定返回记录中的特定字段。</p>
 * @method array getFilters() 获取<p>过滤条件，当前仅支持 <strong>RecordType</strong> 为 <strong>conversation</strong> 的 <strong>session_id</strong> 过滤。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，当前仅支持 <strong>RecordType</strong> 为 <strong>conversation</strong> 的 <strong>session_id</strong> 过滤。</p>
 * @method string getOrderDirection() 获取<p>查询结果列表的排序规则。</p><ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>查询结果列表的排序规则。</p><ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
 * @method string getStartTime() 获取<p>查询时间范围的起始时间点。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询时间范围的起始时间点。</p>
 * @method string getEndTime() 获取<p>查询时间范围的结束时间点。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询时间范围的结束时间点。</p>
 */
class DescribeMemoryPlusRecordRequest extends AbstractModel
{
    /**
     * @var string <p>查询的 Memory 实例 ID。</p>
     */
    public $SpaceId;

    /**
     * @var integer <p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次查询返回的记录数量上限（分页大小）。</p>
     */
    public $Limit;

    /**
     * @var string <p>查询的记忆类型。</p><ul><li>conversation：L0 原始对话。</li><li>memory：L1 原子记忆。</li><li>scene：L2 场景记忆。</li><li>persona：L3 个性化画像。</li><li>memory/persona：L1 原子记忆-画像型。</li><li>memory/episodic：L1 原子记忆-事件型。</li><li>memory/instruction：L1 原子记忆-指令型。</li></ul>
     */
    public $RecordType;

    /**
     * @var array <p>指定返回记录中的特定字段。</p>
     */
    public $Output;

    /**
     * @var array <p>过滤条件，当前仅支持 <strong>RecordType</strong> 为 <strong>conversation</strong> 的 <strong>session_id</strong> 过滤。</p>
     */
    public $Filters;

    /**
     * @var string <p>查询结果列表的排序规则。</p><ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
     */
    public $OrderDirection;

    /**
     * @var string <p>查询时间范围的起始时间点。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询时间范围的结束时间点。</p>
     */
    public $EndTime;

    /**
     * @param string $SpaceId <p>查询的 Memory 实例 ID。</p>
     * @param integer $Offset <p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
     * @param integer $Limit <p>单次查询返回的记录数量上限（分页大小）。</p>
     * @param string $RecordType <p>查询的记忆类型。</p><ul><li>conversation：L0 原始对话。</li><li>memory：L1 原子记忆。</li><li>scene：L2 场景记忆。</li><li>persona：L3 个性化画像。</li><li>memory/persona：L1 原子记忆-画像型。</li><li>memory/episodic：L1 原子记忆-事件型。</li><li>memory/instruction：L1 原子记忆-指令型。</li></ul>
     * @param array $Output <p>指定返回记录中的特定字段。</p>
     * @param array $Filters <p>过滤条件，当前仅支持 <strong>RecordType</strong> 为 <strong>conversation</strong> 的 <strong>session_id</strong> 过滤。</p>
     * @param string $OrderDirection <p>查询结果列表的排序规则。</p><ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
     * @param string $StartTime <p>查询时间范围的起始时间点。</p>
     * @param string $EndTime <p>查询时间范围的结束时间点。</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new VDBFieldMap();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
