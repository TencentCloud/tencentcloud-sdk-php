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
 * DescribeOrganMembers请求参数结构体
 *
 * @method array getFilters() 获取搜索过滤条件列表，支持按成员 ID、账号名称、身份、纳管状态等字段筛选
 * @method void setFilters(array $Filters) 设置搜索过滤条件列表，支持按成员 ID、账号名称、身份、纳管状态等字段筛选
 * @method integer getLimit() 获取分页大小，默认 20
 * @method void setLimit(integer $Limit) 设置分页大小，默认 20
 * @method integer getOffset() 获取分页偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认 0
 * @method string getBy() 获取排序字段，如 MemberCreateTime
 * @method void setBy(string $By) 设置排序字段，如 MemberCreateTime
 * @method string getOrder() 获取排序方式：asc 升序，desc 降序
 * @method void setOrder(string $Order) 设置排序方式：asc 升序，desc 降序
 */
class DescribeOrganMembersRequest extends AbstractModel
{
    /**
     * @var array 搜索过滤条件列表，支持按成员 ID、账号名称、身份、纳管状态等字段筛选
     */
    public $Filters;

    /**
     * @var integer 分页大小，默认 20
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，默认 0
     */
    public $Offset;

    /**
     * @var string 排序字段，如 MemberCreateTime
     */
    public $By;

    /**
     * @var string 排序方式：asc 升序，desc 降序
     */
    public $Order;

    /**
     * @param array $Filters 搜索过滤条件列表，支持按成员 ID、账号名称、身份、纳管状态等字段筛选
     * @param integer $Limit 分页大小，默认 20
     * @param integer $Offset 分页偏移量，默认 0
     * @param string $By 排序字段，如 MemberCreateTime
     * @param string $Order 排序方式：asc 升序，desc 降序
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
