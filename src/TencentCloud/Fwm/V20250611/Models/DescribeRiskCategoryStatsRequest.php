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
 * DescribeRiskCategoryStats请求参数结构体
 *
 * @method integer getLimit() 获取分页大小,默认20
 * @method void setLimit(integer $Limit) 设置分页大小,默认20
 * @method integer getOffset() 获取分页偏移量,默认0
 * @method void setOffset(integer $Offset) 设置分页偏移量,默认0
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 * @method array getFilters() 获取筛选器
 * @method void setFilters(array $Filters) 设置筛选器
 * @method string getBy() 获取排序字段："RuleCount", "TreatedCount", "IgnoredCount", "UntreatedCount", "DisposalRate"
 * @method void setBy(string $By) 设置排序字段："RuleCount", "TreatedCount", "IgnoredCount", "UntreatedCount", "DisposalRate"
 * @method string getOrder() 获取顺序
 * @method void setOrder(string $Order) 设置顺序
 * @method string getMemberId() 获取成员Id
 * @method void setMemberId(string $MemberId) 设置成员Id
 */
class DescribeRiskCategoryStatsRequest extends AbstractModel
{
    /**
     * @var integer 分页大小,默认20
     */
    public $Limit;

    /**
     * @var integer 分页偏移量,默认0
     */
    public $Offset;

    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @var array 筛选器
     */
    public $Filters;

    /**
     * @var string 排序字段："RuleCount", "TreatedCount", "IgnoredCount", "UntreatedCount", "DisposalRate"
     */
    public $By;

    /**
     * @var string 顺序
     */
    public $Order;

    /**
     * @var string 成员Id
     */
    public $MemberId;

    /**
     * @param integer $Limit 分页大小,默认20
     * @param integer $Offset 分页偏移量,默认0
     * @param string $Product 产品类型
     * @param array $Filters 筛选器
     * @param string $By 排序字段："RuleCount", "TreatedCount", "IgnoredCount", "UntreatedCount", "DisposalRate"
     * @param string $Order 顺序
     * @param string $MemberId 成员Id
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
