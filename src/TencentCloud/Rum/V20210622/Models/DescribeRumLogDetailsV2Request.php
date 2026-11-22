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
 * DescribeRumLogDetailsV2请求参数结构体
 *
 * @method string getOrderBy() 获取<p>排序方式 desc asc</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方式 desc asc</p>
 * @method integer getStartTime() 获取<p>Unix纳秒开始时间，包含该时刻；不猜测时间单位。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>Unix纳秒开始时间，包含该时刻；不猜测时间单位。</p>
 * @method integer getLimit() 获取<p>CLS路径单次返回1～1000条；旧路径保留原行为。短页不表示结束，以ListOver为准。</p>
 * @method void setLimit(integer $Limit) 设置<p>CLS路径单次返回1～1000条；旧路径保留原行为。短页不表示结束，以ListOver为准。</p>
 * @method string getFilter() 获取<p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
 * @method integer getEndTime() 获取<p>Unix纳秒结束时间，不包含该时刻。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>Unix纳秒结束时间，不包含该时刻。</p>
 * @method integer getID() 获取<p>项目ID（必填）</p>
 * @method void setID(integer $ID) 设置<p>项目ID（必填）</p>
 * @method integer getLastTime() 获取<p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
 * @method void setLastTime(integer $LastTime) 设置<p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
 * @method integer getLastRowId() 获取<p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
 * @method void setLastRowId(integer $LastRowId) 设置<p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
 * @method integer getOffset() 获取<p>从0开始的非负偏移量；保留缺省与显式0的差别。不能与非空Context同时使用，Context续页时删除Offset。</p>
 * @method void setOffset(integer $Offset) 设置<p>从0开始的非负偏移量；保留缺省与显式0的差别。不能与非空Context同时使用，Context续页时删除Offset。</p>
 * @method string getContext() 获取<p>原样回传上次非空Context，续页时删除Offset，其余有效查询条件保持不变；空串视为缺省。不保证快照或重放同一页。</p>
 * @method void setContext(string $Context) 设置<p>原样回传上次非空Context，续页时删除Offset，其余有效查询条件保持不变；空串视为缺省。不保证快照或重放同一页。</p>
 */
class DescribeRumLogDetailsV2Request extends AbstractModel
{
    /**
     * @var string <p>排序方式 desc asc</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>Unix纳秒开始时间，包含该时刻；不猜测时间单位。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>CLS路径单次返回1～1000条；旧路径保留原行为。短页不表示结束，以ListOver为准。</p>
     */
    public $Limit;

    /**
     * @var string <p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
     */
    public $Filter;

    /**
     * @var integer <p>Unix纳秒结束时间，不包含该时刻。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID（必填）</p>
     */
    public $ID;

    /**
     * @var integer <p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
     */
    public $LastTime;

    /**
     * @var integer <p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
     */
    public $LastRowId;

    /**
     * @var integer <p>从0开始的非负偏移量；保留缺省与显式0的差别。不能与非空Context同时使用，Context续页时删除Offset。</p>
     */
    public $Offset;

    /**
     * @var string <p>原样回传上次非空Context，续页时删除Offset，其余有效查询条件保持不变；空串视为缺省。不保证快照或重放同一页。</p>
     */
    public $Context;

    /**
     * @param string $OrderBy <p>排序方式 desc asc</p>
     * @param integer $StartTime <p>Unix纳秒开始时间，包含该时刻；不猜测时间单位。</p>
     * @param integer $Limit <p>CLS路径单次返回1～1000条；旧路径保留原行为。短页不表示结束，以ListOver为准。</p>
     * @param string $Filter <p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：<a href="https://cloud.tencent.com/document/product/248/87223">日志查询相关</a></p>
     * @param integer $EndTime <p>Unix纳秒结束时间，不包含该时刻。</p>
     * @param integer $ID <p>项目ID（必填）</p>
     * @param integer $LastTime <p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
     * @param integer $LastRowId <p>旧游标参数已废弃，请迁移至Offset或Context。LastTime和LastRowId均为0或缺省视为未传；非零旧游标在cls下拒绝，off/window且不带新分页参数时保留旧行为。</p>
     * @param integer $Offset <p>从0开始的非负偏移量；保留缺省与显式0的差别。不能与非空Context同时使用，Context续页时删除Offset。</p>
     * @param string $Context <p>原样回传上次非空Context，续页时删除Offset，其余有效查询条件保持不变；空串视为缺省。不保证快照或重放同一页。</p>
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
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("LastRowId",$param) and $param["LastRowId"] !== null) {
            $this->LastRowId = $param["LastRowId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
