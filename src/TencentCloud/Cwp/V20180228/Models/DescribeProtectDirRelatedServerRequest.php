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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProtectDirRelatedServer请求参数结构体
 *
 * @method string getId() 获取唯一ID
 * @method void setId(string $Id) 设置唯一ID
 * @method integer getLimit() 获取分页条数 最大100条
 * @method void setLimit(integer $Limit) 设置分页条数 最大100条
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method array getFilters() 获取过滤参数 ProtectStatus
 * @method void setFilters(array $Filters) 设置过滤参数 ProtectStatus
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getBy() 获取排序值
 * @method void setBy(string $By) 设置排序值
 */
class DescribeProtectDirRelatedServerRequest extends AbstractModel
{
    /**
     * @var string 唯一ID
     */
    public $Id;

    /**
     * @var integer 分页条数 最大100条
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var array 过滤参数 ProtectStatus
     */
    public $Filters;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 排序值
     */
    public $By;

    /**
     * @param string $Id 唯一ID
     * @param integer $Limit 分页条数 最大100条
     * @param integer $Offset 偏移量
     * @param array $Filters 过滤参数 ProtectStatus
     * @param string $Order 排序方式
     * @param string $By 排序值
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
    }
}
