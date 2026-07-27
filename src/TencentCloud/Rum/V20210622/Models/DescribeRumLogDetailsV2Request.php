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
 * @method integer getStartTime() 获取<p>查询日志开始时间（必填）格式为时间戳 毫秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询日志开始时间（必填）格式为时间戳 毫秒</p>
 * @method integer getLimit() 获取<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method string getFilter() 获取<p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：https://cloud.tencent.com/document/product/248/87223</p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：https://cloud.tencent.com/document/product/248/87223</p>
 * @method integer getEndTime() 获取<p>查询日志结束时间（必填）格式为时间戳 毫秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询日志结束时间（必填）格式为时间戳 毫秒</p>
 * @method integer getID() 获取<p>项目ID（必填）</p>
 * @method void setID(integer $ID) 设置<p>项目ID（必填）</p>
 * @method integer getLastTime() 获取<p>上次查询的最后一个日志的时间戳</p>
 * @method void setLastTime(integer $LastTime) 设置<p>上次查询的最后一个日志的时间戳</p>
 * @method integer getLastRowId() 获取<p>上次查询的最后一个日志的rowId</p>
 * @method void setLastRowId(integer $LastRowId) 设置<p>上次查询的最后一个日志的rowId</p>
 */
class DescribeRumLogDetailsV2Request extends AbstractModel
{
    /**
     * @var string <p>排序方式 desc asc</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>查询日志开始时间（必填）格式为时间戳 毫秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     */
    public $Limit;

    /**
     * @var string <p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：https://cloud.tencent.com/document/product/248/87223</p>
     */
    public $Filter;

    /**
     * @var integer <p>查询日志结束时间（必填）格式为时间戳 毫秒</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID（必填）</p>
     */
    public $ID;

    /**
     * @var integer <p>上次查询的最后一个日志的时间戳</p>
     */
    public $LastTime;

    /**
     * @var integer <p>上次查询的最后一个日志的rowId</p>
     */
    public $LastRowId;

    /**
     * @param string $OrderBy <p>排序方式 desc asc</p>
     * @param integer $StartTime <p>查询日志开始时间（必填）格式为时间戳 毫秒</p>
     * @param integer $Limit <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     * @param string $Filter <p>过滤条件，其中key与运算符(Operator)对应可选字段枚举值与示例查看文档：https://cloud.tencent.com/document/product/248/87223</p>
     * @param integer $EndTime <p>查询日志结束时间（必填）格式为时间戳 毫秒</p>
     * @param integer $ID <p>项目ID（必填）</p>
     * @param integer $LastTime <p>上次查询的最后一个日志的时间戳</p>
     * @param integer $LastRowId <p>上次查询的最后一个日志的rowId</p>
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
    }
}
