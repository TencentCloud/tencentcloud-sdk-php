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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScdnIpStrategy请求参数结构体
 *
 * @method integer getOffset() 获取分页起始地址
 * @method void setOffset(integer $Offset) 设置分页起始地址
 * @method integer getLimit() 获取列表分页记录条数，最大1000
 * @method void setLimit(integer $Limit) 设置列表分页记录条数，最大1000
 * @method array getFilters() 获取查询条件过滤器
 * @method void setFilters(array $Filters) 设置查询条件过滤器
 * @method string getOrder() 获取指定查询返回结果的排序字段，支持domain，update_time
 * @method void setOrder(string $Order) 设置指定查询返回结果的排序字段，支持domain，update_time
 * @method string getSequence() 获取排序方式，支持asc，desc
 * @method void setSequence(string $Sequence) 设置排序方式，支持asc，desc
 */
class DescribeScdnIpStrategyRequest extends AbstractModel
{
    /**
     * @var integer 分页起始地址
     */
    public $Offset;

    /**
     * @var integer 列表分页记录条数，最大1000
     */
    public $Limit;

    /**
     * @var array 查询条件过滤器
     */
    public $Filters;

    /**
     * @var string 指定查询返回结果的排序字段，支持domain，update_time
     */
    public $Order;

    /**
     * @var string 排序方式，支持asc，desc
     */
    public $Sequence;

    /**
     * @param integer $Offset 分页起始地址
     * @param integer $Limit 列表分页记录条数，最大1000
     * @param array $Filters 查询条件过滤器
     * @param string $Order 指定查询返回结果的排序字段，支持domain，update_time
     * @param string $Sequence 排序方式，支持asc，desc
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ScdnIpStrategyFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }
    }
}
