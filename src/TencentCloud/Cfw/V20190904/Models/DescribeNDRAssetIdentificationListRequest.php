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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNDRAssetIdentificationList请求参数结构体
 *
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getOrder() 获取排序方式，asc正序 desc倒序
 * @method void setOrder(string $Order) 设置排序方式，asc正序 desc倒序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method array getFilters() 获取查询过滤条件，多个条件之间为AND的关系
 * @method void setFilters(array $Filters) 设置查询过滤条件，多个条件之间为AND的关系
 */
class DescribeNDRAssetIdentificationListRequest extends AbstractModel
{
    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 排序方式，asc正序 desc倒序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var array 查询过滤条件，多个条件之间为AND的关系
     */
    public $Filters;

    /**
     * @param integer $Limit 每页条数
     * @param integer $Offset 偏移量
     * @param string $Order 排序方式，asc正序 desc倒序
     * @param string $By 排序字段
     * @param array $Filters 查询过滤条件，多个条件之间为AND的关系
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new OperatorFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
