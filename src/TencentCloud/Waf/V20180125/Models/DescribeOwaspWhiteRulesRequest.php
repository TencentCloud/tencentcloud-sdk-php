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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOwaspWhiteRules请求参数结构体
 *
 * @method string getDomain() 获取需要查询的域名
 * @method void setDomain(string $Domain) 设置需要查询的域名
 * @method integer getOffset() 获取分页分页，默认为0
 * @method void setOffset(integer $Offset) 设置分页分页，默认为0
 * @method integer getLimit() 获取每页容量，默认为10
 * @method void setLimit(integer $Limit) 设置每页容量，默认为10
 * @method string getBy() 获取排序的字段，支持CreateTime：新建时间、UpdateTime：修改时间
 * @method void setBy(string $By) 设置排序的字段，支持CreateTime：新建时间、UpdateTime：修改时间
 * @method string getOrder() 获取排序方式，支持asc、desc
 * @method void setOrder(string $Order) 设置排序方式，支持asc、desc
 * @method array getFilters() 获取筛选条件，支持RuleId：加白规则ID、 Name：规则名称、RuleType：加白的规则类型、Status：规则开关状态、ValidStatus：规则生效状态、TimerType：生效方式、ID：具体的加白id，根据RuleType来判断是规则id还是类型id
 * @method void setFilters(array $Filters) 设置筛选条件，支持RuleId：加白规则ID、 Name：规则名称、RuleType：加白的规则类型、Status：规则开关状态、ValidStatus：规则生效状态、TimerType：生效方式、ID：具体的加白id，根据RuleType来判断是规则id还是类型id
 */
class DescribeOwaspWhiteRulesRequest extends AbstractModel
{
    /**
     * @var string 需要查询的域名
     */
    public $Domain;

    /**
     * @var integer 分页分页，默认为0
     */
    public $Offset;

    /**
     * @var integer 每页容量，默认为10
     */
    public $Limit;

    /**
     * @var string 排序的字段，支持CreateTime：新建时间、UpdateTime：修改时间
     */
    public $By;

    /**
     * @var string 排序方式，支持asc、desc
     */
    public $Order;

    /**
     * @var array 筛选条件，支持RuleId：加白规则ID、 Name：规则名称、RuleType：加白的规则类型、Status：规则开关状态、ValidStatus：规则生效状态、TimerType：生效方式、ID：具体的加白id，根据RuleType来判断是规则id还是类型id
     */
    public $Filters;

    /**
     * @param string $Domain 需要查询的域名
     * @param integer $Offset 分页分页，默认为0
     * @param integer $Limit 每页容量，默认为10
     * @param string $By 排序的字段，支持CreateTime：新建时间、UpdateTime：修改时间
     * @param string $Order 排序方式，支持asc、desc
     * @param array $Filters 筛选条件，支持RuleId：加白规则ID、 Name：规则名称、RuleType：加白的规则类型、Status：规则开关状态、ValidStatus：规则生效状态、TimerType：生效方式、ID：具体的加白id，根据RuleType来判断是规则id还是类型id
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
