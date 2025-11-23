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
 * DescribeRateLimitsV2请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getId() 获取限流规则ID
 * @method void setId(integer $Id) 设置限流规则ID
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method string getMethod() 获取限流接口名
 * @method void setMethod(string $Method) 设置限流接口名
 * @method string getLimitObject() 获取限流对象，可选API、Domain
 * @method void setLimitObject(string $LimitObject) 设置限流对象，可选API、Domain
 * @method integer getStatus() 获取规则开关，0表示关闭，1表示开启
 * @method void setStatus(integer $Status) 设置规则开关，0表示关闭，1表示开启
 * @method string getOrder() 获取排序方式，可选desc、asc
 * @method void setOrder(string $Order) 设置排序方式，可选desc、asc
 * @method string getBy() 获取排序字段，可选Priority、Timestamp、ID
 * @method void setBy(string $By) 设置排序字段，可选Priority、Timestamp、ID
 * @method integer getOffset() 获取分页的起始位置
 * @method void setOffset(integer $Offset) 设置分页的起始位置
 * @method integer getLimit() 获取每页行数
 * @method void setLimit(integer $Limit) 设置每页行数
 * @method array getFilters() 获取过滤器
 * @method void setFilters(array $Filters) 设置过滤器
 */
class DescribeRateLimitsV2Request extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 限流规则ID
     */
    public $Id;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var string 限流接口名
     */
    public $Method;

    /**
     * @var string 限流对象，可选API、Domain
     */
    public $LimitObject;

    /**
     * @var integer 规则开关，0表示关闭，1表示开启
     */
    public $Status;

    /**
     * @var string 排序方式，可选desc、asc
     */
    public $Order;

    /**
     * @var string 排序字段，可选Priority、Timestamp、ID
     */
    public $By;

    /**
     * @var integer 分页的起始位置
     */
    public $Offset;

    /**
     * @var integer 每页行数
     */
    public $Limit;

    /**
     * @var array 过滤器
     */
    public $Filters;

    /**
     * @param string $Domain 域名
     * @param integer $Id 限流规则ID
     * @param string $Name 规则名
     * @param string $Method 限流接口名
     * @param string $LimitObject 限流对象，可选API、Domain
     * @param integer $Status 规则开关，0表示关闭，1表示开启
     * @param string $Order 排序方式，可选desc、asc
     * @param string $By 排序字段，可选Priority、Timestamp、ID
     * @param integer $Offset 分页的起始位置
     * @param integer $Limit 每页行数
     * @param array $Filters 过滤器
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("LimitObject",$param) and $param["LimitObject"] !== null) {
            $this->LimitObject = $param["LimitObject"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
