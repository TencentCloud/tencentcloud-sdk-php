<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeAppSingleCaseDetailList请求参数结构体
 *
 * @method integer getProjectID() 获取app 项目ID
 * @method void setProjectID(integer $ProjectID) 设置app 项目ID
 * @method string getFrom() 获取查询的表名
 * @method void setFrom(string $From) 设置查询的表名
 * @method string getFields() 获取查询指标 field
 * @method void setFields(string $Fields) 设置查询指标 field
 * @method string getFilter() 获取查询的过滤条件
 * @method void setFilter(string $Filter) 设置查询的过滤条件
 * @method string getFilterSimple() 获取查询简单过滤条件
 * @method void setFilterSimple(string $FilterSimple) 设置查询简单过滤条件
 * @method array getGroupBy() 获取group by 条件
 * @method void setGroupBy(array $GroupBy) 设置group by 条件
 * @method array getOrderBy() 获取order by 条件
 * @method void setOrderBy(array $OrderBy) 设置order by 条件
 * @method integer getLimit() 获取limit 参数
 * @method void setLimit(integer $Limit) 设置limit 参数
 * @method integer getOffset() 获取offset 参数
 * @method void setOffset(integer $Offset) 设置offset 参数
 */
class DescribeAppSingleCaseDetailListRequest extends AbstractModel
{
    /**
     * @var integer app 项目ID
     */
    public $ProjectID;

    /**
     * @var string 查询的表名
     */
    public $From;

    /**
     * @var string 查询指标 field
     */
    public $Fields;

    /**
     * @var string 查询的过滤条件
     */
    public $Filter;

    /**
     * @var string 查询简单过滤条件
     */
    public $FilterSimple;

    /**
     * @var array group by 条件
     */
    public $GroupBy;

    /**
     * @var array order by 条件
     */
    public $OrderBy;

    /**
     * @var integer limit 参数
     */
    public $Limit;

    /**
     * @var integer offset 参数
     */
    public $Offset;

    /**
     * @param integer $ProjectID app 项目ID
     * @param string $From 查询的表名
     * @param string $Fields 查询指标 field
     * @param string $Filter 查询的过滤条件
     * @param string $FilterSimple 查询简单过滤条件
     * @param array $GroupBy group by 条件
     * @param array $OrderBy order by 条件
     * @param integer $Limit limit 参数
     * @param integer $Offset offset 参数
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
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("FilterSimple",$param) and $param["FilterSimple"] !== null) {
            $this->FilterSimple = $param["FilterSimple"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
