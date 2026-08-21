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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebhookReceiverList请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method void setOffset(integer $Offset) 设置分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method integer getLimit() 获取每页返回数量
取值范围：[1, 200]
默认值：20
 * @method void setLimit(integer $Limit) 设置每页返回数量
取值范围：[1, 200]
默认值：20
 * @method array getFilters() 获取过滤条件
支持的过滤项：
Name：按机器人名称模糊搜索
Type：机器人类型，可选值：WEBHOOK（webhook） / SCF（云函数）
 * @method void setFilters(array $Filters) 设置过滤条件
支持的过滤项：
Name：按机器人名称模糊搜索
Type：机器人类型，可选值：WEBHOOK（webhook） / SCF（云函数）
 * @method string getOrder() 获取排序字段
枚举值：
InsertTime：创建时间
UpdateTime：更新时间
默认值：UpdateTime
 * @method void setOrder(string $Order) 设置排序字段
枚举值：
InsertTime：创建时间
UpdateTime：更新时间
默认值：UpdateTime
 * @method string getBy() 获取排序方式
枚举值：
asc：升序
desc：降序
默认值：desc
 * @method void setBy(string $By) 设置排序方式
枚举值：
asc：升序
desc：降序
默认值：desc
 */
class DescribeWebhookReceiverListRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量
取值范围：[0, +∞)
默认值：0
     */
    public $Offset;

    /**
     * @var integer 每页返回数量
取值范围：[1, 200]
默认值：20
     */
    public $Limit;

    /**
     * @var array 过滤条件
支持的过滤项：
Name：按机器人名称模糊搜索
Type：机器人类型，可选值：WEBHOOK（webhook） / SCF（云函数）
     */
    public $Filters;

    /**
     * @var string 排序字段
枚举值：
InsertTime：创建时间
UpdateTime：更新时间
默认值：UpdateTime
     */
    public $Order;

    /**
     * @var string 排序方式
枚举值：
asc：升序
desc：降序
默认值：desc
     */
    public $By;

    /**
     * @param integer $Offset 分页偏移量
取值范围：[0, +∞)
默认值：0
     * @param integer $Limit 每页返回数量
取值范围：[1, 200]
默认值：20
     * @param array $Filters 过滤条件
支持的过滤项：
Name：按机器人名称模糊搜索
Type：机器人类型，可选值：WEBHOOK（webhook） / SCF（云函数）
     * @param string $Order 排序字段
枚举值：
InsertTime：创建时间
UpdateTime：更新时间
默认值：UpdateTime
     * @param string $By 排序方式
枚举值：
asc：升序
desc：降序
默认值：desc
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
                $obj = new Filters();
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
