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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelAccelerateTasks请求参数结构体
 *
 * @method array getFilters() 获取过滤器
ModelAccTaskName 任务名称
ModelSource 模型来源
 * @method void setFilters(array $Filters) 设置过滤器
ModelAccTaskName 任务名称
ModelSource 模型来源
 * @method string getOrderField() 获取排序字段，默认CreateTime
 * @method void setOrderField(string $OrderField) 设置排序字段，默认CreateTime
 * @method string getOrder() 获取排序方式：ASC/DESC，默认DESC
 * @method void setOrder(string $Order) 设置排序方式：ASC/DESC，默认DESC
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回记录条数，默认10
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认10
 * @method array getTagFilters() 获取标签过滤
 * @method void setTagFilters(array $TagFilters) 设置标签过滤
 */
class DescribeModelAccelerateTasksRequest extends AbstractModel
{
    /**
     * @var array 过滤器
ModelAccTaskName 任务名称
ModelSource 模型来源
     */
    public $Filters;

    /**
     * @var string 排序字段，默认CreateTime
     */
    public $OrderField;

    /**
     * @var string 排序方式：ASC/DESC，默认DESC
     */
    public $Order;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认10
     */
    public $Limit;

    /**
     * @var array 标签过滤
     */
    public $TagFilters;

    /**
     * @param array $Filters 过滤器
ModelAccTaskName 任务名称
ModelSource 模型来源
     * @param string $OrderField 排序字段，默认CreateTime
     * @param string $Order 排序方式：ASC/DESC，默认DESC
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回记录条数，默认10
     * @param array $TagFilters 标签过滤
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
