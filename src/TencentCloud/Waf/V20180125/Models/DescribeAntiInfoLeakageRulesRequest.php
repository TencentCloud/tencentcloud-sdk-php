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
 * DescribeAntiInfoLeakageRules请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getOffset() 获取翻页支持，读取偏移
 * @method void setOffset(integer $Offset) 设置翻页支持，读取偏移
 * @method integer getLimit() 获取翻页支持，读取长度限制
 * @method void setLimit(integer $Limit) 设置翻页支持，读取长度限制
 * @method string getOrder() 获取排序方式，asc或者desc
 * @method void setOrder(string $Order) 设置排序方式，asc或者desc
 * @method array getFilters() 获取过滤器,可以允许如下的值：
RuleId,Match_field,Name,Action,Status
 * @method void setFilters(array $Filters) 设置过滤器,可以允许如下的值：
RuleId,Match_field,Name,Action,Status
 */
class DescribeAntiInfoLeakageRulesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 翻页支持，读取偏移
     */
    public $Offset;

    /**
     * @var integer 翻页支持，读取长度限制
     */
    public $Limit;

    /**
     * @var string 排序方式，asc或者desc
     */
    public $Order;

    /**
     * @var array 过滤器,可以允许如下的值：
RuleId,Match_field,Name,Action,Status
     */
    public $Filters;

    /**
     * @param string $Domain 域名
     * @param integer $Offset 翻页支持，读取偏移
     * @param integer $Limit 翻页支持，读取长度限制
     * @param string $Order 排序方式，asc或者desc
     * @param array $Filters 过滤器,可以允许如下的值：
RuleId,Match_field,Name,Action,Status
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
