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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCustomersCredit请求参数结构体
 *
 * @method string getFilterType() 获取搜索条件类型，只能是：ClientUin|Name|Remark|Email四选一
 * @method void setFilterType(string $FilterType) 设置搜索条件类型，只能是：ClientUin|Name|Remark|Email四选一
 * @method string getFilter() 获取查询条件值
 * @method void setFilter(string $Filter) 设置查询条件值
 * @method integer getPage() 获取分页参数：当前页数，从1开始
 * @method void setPage(integer $Page) 设置分页参数：当前页数，从1开始
 * @method integer getPageSize() 获取分页参数：每页条数
 * @method void setPageSize(integer $PageSize) 设置分页参数：每页条数
 * @method string getOrder() 获取排序参数，根据AssociationTime按照空或者desc：逆序，asc：顺序的方式进行排序
 * @method void setOrder(string $Order) 设置排序参数，根据AssociationTime按照空或者desc：逆序，asc：顺序的方式进行排序
 */
class QueryCustomersCreditRequest extends AbstractModel
{
    /**
     * @var string 搜索条件类型，只能是：ClientUin|Name|Remark|Email四选一
     */
    public $FilterType;

    /**
     * @var string 查询条件值
     */
    public $Filter;

    /**
     * @var integer 分页参数：当前页数，从1开始
     */
    public $Page;

    /**
     * @var integer 分页参数：每页条数
     */
    public $PageSize;

    /**
     * @var string 排序参数，根据AssociationTime按照空或者desc：逆序，asc：顺序的方式进行排序
     */
    public $Order;

    /**
     * @param string $FilterType 搜索条件类型，只能是：ClientUin|Name|Remark|Email四选一
     * @param string $Filter 查询条件值
     * @param integer $Page 分页参数：当前页数，从1开始
     * @param integer $PageSize 分页参数：每页条数
     * @param string $Order 排序参数，根据AssociationTime按照空或者desc：逆序，asc：顺序的方式进行排序
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
