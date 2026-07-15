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
 * DescribeRumGroupLog请求参数结构体
 *
 * @method string getOrderBy() 获取<p>排序方式  desc  asc（必填）</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方式  desc  asc（必填）</p>
 * @method string getStartTime() 获取<p>开始时间（必填）</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间（必填）</p>
 * @method integer getLimit() 获取<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method integer getPage() 获取<p>页数，第几页（注意：该字段已废弃！）</p>
 * @method void setPage(integer $Page) 设置<p>页数，第几页（注意：该字段已废弃！）</p>
 * @method string getQuery() 获取<p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
 * @method void setQuery(string $Query) 设置<p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
 * @method string getEndTime() 获取<p>结束时间（必填）</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间（必填）</p>
 * @method integer getID() 获取<p>项目ID（必填）</p>
 * @method void setID(integer $ID) 设置<p>项目ID（必填）</p>
 * @method string getGroupField() 获取<p>聚合字段</p>
 * @method void setGroupField(string $GroupField) 设置<p>聚合字段</p>
 */
class DescribeRumGroupLogRequest extends AbstractModel
{
    /**
     * @var string <p>排序方式  desc  asc（必填）</p>
     */
    public $OrderBy;

    /**
     * @var string <p>开始时间（必填）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     */
    public $Limit;

    /**
     * @var integer <p>页数，第几页（注意：该字段已废弃！）</p>
     */
    public $Page;

    /**
     * @var string <p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
     */
    public $Query;

    /**
     * @var string <p>结束时间（必填）</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID（必填）</p>
     */
    public $ID;

    /**
     * @var string <p>聚合字段</p>
     */
    public $GroupField;

    /**
     * @param string $OrderBy <p>排序方式  desc  asc（必填）</p>
     * @param string $StartTime <p>开始时间（必填）</p>
     * @param integer $Limit <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     * @param integer $Page <p>页数，第几页（注意：该字段已废弃！）</p>
     * @param string $Query <p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
     * @param string $EndTime <p>结束时间（必填）</p>
     * @param integer $ID <p>项目ID（必填）</p>
     * @param string $GroupField <p>聚合字段</p>
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("GroupField",$param) and $param["GroupField"] !== null) {
            $this->GroupField = $param["GroupField"];
        }
    }
}
