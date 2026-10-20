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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleGroups请求参数结构体
 *
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 * @method array getFilters() 获取产品类型
 * @method void setFilters(array $Filters) 设置产品类型
 * @method string getOrder() 获取排序
 * @method void setOrder(string $Order) 设置排序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method integer getOffset() 获取起始位置
 * @method void setOffset(integer $Offset) 设置起始位置
 * @method integer getLimit() 获取查询数量
 * @method void setLimit(integer $Limit) 设置查询数量
 */
class DescribeRuleGroupsRequest extends AbstractModel
{
    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @var array 产品类型
     */
    public $Filters;

    /**
     * @var string 排序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var integer 起始位置
     */
    public $Offset;

    /**
     * @var integer 查询数量
     */
    public $Limit;

    /**
     * @param string $Product 产品类型
     * @param array $Filters 产品类型
     * @param string $Order 排序
     * @param string $By 排序字段
     * @param integer $Offset 起始位置
     * @param integer $Limit 查询数量
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
