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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKBComponentVersionList请求参数结构体
 *
 * @method PURL getPURL() 获取要查询的组件 PURL
 * @method void setPURL(PURL $PURL) 设置要查询的组件 PURL
 * @method integer getPageNumber() 获取页号
 * @method void setPageNumber(integer $PageNumber) 设置页号
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method string getOrder() 获取排序方式，可以是"ASC"或"DESC"，默认"DESC"
 * @method void setOrder(string $Order) 设置排序方式，可以是"ASC"或"DESC"，默认"DESC"
 * @method array getOrderBy() 获取排序字段，可能的字段包括“Version”、"PublishTime"
 * @method void setOrderBy(array $OrderBy) 设置排序字段，可能的字段包括“Version”、"PublishTime"
 * @method ComponentTagFilter getFilter() 获取Tag筛选
 * @method void setFilter(ComponentTagFilter $Filter) 设置Tag筛选
 */
class DescribeKBComponentVersionListRequest extends AbstractModel
{
    /**
     * @var PURL 要查询的组件 PURL
     */
    public $PURL;

    /**
     * @var integer 页号
     */
    public $PageNumber;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var string 排序方式，可以是"ASC"或"DESC"，默认"DESC"
     */
    public $Order;

    /**
     * @var array 排序字段，可能的字段包括“Version”、"PublishTime"
     */
    public $OrderBy;

    /**
     * @var ComponentTagFilter Tag筛选
     */
    public $Filter;

    /**
     * @param PURL $PURL 要查询的组件 PURL
     * @param integer $PageNumber 页号
     * @param integer $PageSize 页大小
     * @param string $Order 排序方式，可以是"ASC"或"DESC"，默认"DESC"
     * @param array $OrderBy 排序字段，可能的字段包括“Version”、"PublishTime"
     * @param ComponentTagFilter $Filter Tag筛选
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
        if (array_key_exists("PURL",$param) and $param["PURL"] !== null) {
            $this->PURL = new PURL();
            $this->PURL->deserialize($param["PURL"]);
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new ComponentTagFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
