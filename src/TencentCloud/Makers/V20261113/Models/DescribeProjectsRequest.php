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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method string getZoneId() 获取<p>Makers 站点 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>Makers 站点 ID</p>
 * @method integer getOffset() 获取<p>页码偏移，从 0 开始。后端跳过 Offset * Limit 条</p>
 * @method void setOffset(integer $Offset) 设置<p>页码偏移，从 0 开始。后端跳过 Offset * Limit 条</p>
 * @method integer getLimit() 获取<p>每页数量，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，最大 100</p>
 * @method array getFilters() 获取<p>过滤条件。Name 取值 ProjectId、Name、Status、Provider</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。Name 取值 ProjectId、Name、Status、Provider</p>
 * @method array getProjectIds() 获取<p>按项目 ID 查询</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>按项目 ID 查询</p>
 * @method string getOrderBy() 获取<p>排序字段。CreatedOn、ModifiedOn。默认 CreatedOn</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段。CreatedOn、ModifiedOn。默认 CreatedOn</p>
 * @method string getOrderType() 获取<p>排序方向。Asc、Desc、ASC、DESC。默认 DESC</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序方向。Asc、Desc、ASC、DESC。默认 DESC</p>
 * @method string getSource() 获取<p>来源。drop 时只返回 Upload 项目</p>
 * @method void setSource(string $Source) 设置<p>来源。drop 时只返回 Upload 项目</p>
 * @method string getQuery() 获取<p>按项目名称模糊搜索</p>
 * @method void setQuery(string $Query) 设置<p>按项目名称模糊搜索</p>
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var string <p>Makers 站点 ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>页码偏移，从 0 开始。后端跳过 Offset * Limit 条</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，最大 100</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件。Name 取值 ProjectId、Name、Status、Provider</p>
     */
    public $Filters;

    /**
     * @var array <p>按项目 ID 查询</p>
     */
    public $ProjectIds;

    /**
     * @var string <p>排序字段。CreatedOn、ModifiedOn。默认 CreatedOn</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方向。Asc、Desc、ASC、DESC。默认 DESC</p>
     */
    public $OrderType;

    /**
     * @var string <p>来源。drop 时只返回 Upload 项目</p>
     */
    public $Source;

    /**
     * @var string <p>按项目名称模糊搜索</p>
     */
    public $Query;

    /**
     * @param string $ZoneId <p>Makers 站点 ID</p>
     * @param integer $Offset <p>页码偏移，从 0 开始。后端跳过 Offset * Limit 条</p>
     * @param integer $Limit <p>每页数量，最大 100</p>
     * @param array $Filters <p>过滤条件。Name 取值 ProjectId、Name、Status、Provider</p>
     * @param array $ProjectIds <p>按项目 ID 查询</p>
     * @param string $OrderBy <p>排序字段。CreatedOn、ModifiedOn。默认 CreatedOn</p>
     * @param string $OrderType <p>排序方向。Asc、Desc、ASC、DESC。默认 DESC</p>
     * @param string $Source <p>来源。drop 时只返回 Upload 项目</p>
     * @param string $Query <p>按项目名称模糊搜索</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ProjectFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
