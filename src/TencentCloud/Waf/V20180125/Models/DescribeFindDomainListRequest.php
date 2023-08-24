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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFindDomainList请求参数结构体
 *
 * @method integer getOffset() 获取分页
 * @method void setOffset(integer $Offset) 设置分页
 * @method integer getLimit() 获取每页容量
 * @method void setLimit(integer $Limit) 设置每页容量
 * @method string getKey() 获取过滤条件
 * @method void setKey(string $Key) 设置过滤条件
 * @method string getIsWafDomain() 获取是否接入waf
 * @method void setIsWafDomain(string $IsWafDomain) 设置是否接入waf
 * @method string getBy() 获取排序参数
 * @method void setBy(string $By) 设置排序参数
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 */
class DescribeFindDomainListRequest extends AbstractModel
{
    /**
     * @var integer 分页
     */
    public $Offset;

    /**
     * @var integer 每页容量
     */
    public $Limit;

    /**
     * @var string 过滤条件
     */
    public $Key;

    /**
     * @var string 是否接入waf
     */
    public $IsWafDomain;

    /**
     * @var string 排序参数
     */
    public $By;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @param integer $Offset 分页
     * @param integer $Limit 每页容量
     * @param string $Key 过滤条件
     * @param string $IsWafDomain 是否接入waf
     * @param string $By 排序参数
     * @param string $Order 排序方式
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("IsWafDomain",$param) and $param["IsWafDomain"] !== null) {
            $this->IsWafDomain = $param["IsWafDomain"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
