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
 * DescribeRumGroupLogV2请求参数结构体
 *
 * @method string getOrderBy() 获取<p>排序方式 desc asc（必填）</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方式 desc asc（必填）</p>
 * @method integer getStartTime() 获取<p>开始时间（必填）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间（必填）</p>
 * @method integer getLimit() 获取<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method string getFilter() 获取<p>过滤条件</p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件</p>
 * @method integer getEndTime() 获取<p>结束时间（必填）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间（必填）</p>
 * @method integer getID() 获取<p>项目ID（必填）</p>
 * @method void setID(integer $ID) 设置<p>项目ID（必填）</p>
 * @method string getLabel() 获取<p>聚合字段</p>
 * @method void setLabel(string $Label) 设置<p>聚合字段</p>
 * @method integer getLast() 获取<p>页数，第几页（注意：该字段已废弃！）</p>
 * @method void setLast(integer $Last) 设置<p>页数，第几页（注意：该字段已废弃！）</p>
 */
class DescribeRumGroupLogV2Request extends AbstractModel
{
    /**
     * @var string <p>排序方式 desc asc（必填）</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>开始时间（必填）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     */
    public $Limit;

    /**
     * @var string <p>过滤条件</p>
     */
    public $Filter;

    /**
     * @var integer <p>结束时间（必填）</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID（必填）</p>
     */
    public $ID;

    /**
     * @var string <p>聚合字段</p>
     */
    public $Label;

    /**
     * @var integer <p>页数，第几页（注意：该字段已废弃！）</p>
     */
    public $Last;

    /**
     * @param string $OrderBy <p>排序方式 desc asc（必填）</p>
     * @param integer $StartTime <p>开始时间（必填）</p>
     * @param integer $Limit <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     * @param string $Filter <p>过滤条件</p>
     * @param integer $EndTime <p>结束时间（必填）</p>
     * @param integer $ID <p>项目ID（必填）</p>
     * @param string $Label <p>聚合字段</p>
     * @param integer $Last <p>页数，第几页（注意：该字段已废弃！）</p>
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Last",$param) and $param["Last"] !== null) {
            $this->Last = $param["Last"];
        }
    }
}
