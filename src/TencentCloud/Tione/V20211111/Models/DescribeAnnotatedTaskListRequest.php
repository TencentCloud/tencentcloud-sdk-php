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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAnnotatedTaskList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取页面大小，默认为10
 * @method void setLimit(integer $Limit) 设置页面大小，默认为10
 * @method array getFilters() 获取过滤条件数组，支持数据集ID，标注场景、任务状态、数据集名称、人物名称的过滤，后面两个支持模糊查询
 * @method void setFilters(array $Filters) 设置过滤条件数组，支持数据集ID，标注场景、任务状态、数据集名称、人物名称的过滤，后面两个支持模糊查询
 * @method array getTagFilters() 获取标签过滤条件
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件
 * @method string getOrder() 获取排序方向：Asc Desc
 * @method void setOrder(string $Order) 设置排序方向：Asc Desc
 * @method string getOrderField() 获取排序字段
 * @method void setOrderField(string $OrderField) 设置排序字段
 */
class DescribeAnnotatedTaskListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 页面大小，默认为10
     */
    public $Limit;

    /**
     * @var array 过滤条件数组，支持数据集ID，标注场景、任务状态、数据集名称、人物名称的过滤，后面两个支持模糊查询
     */
    public $Filters;

    /**
     * @var array 标签过滤条件
     */
    public $TagFilters;

    /**
     * @var string 排序方向：Asc Desc
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $OrderField;

    /**
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 页面大小，默认为10
     * @param array $Filters 过滤条件数组，支持数据集ID，标注场景、任务状态、数据集名称、人物名称的过滤，后面两个支持模糊查询
     * @param array $TagFilters 标签过滤条件
     * @param string $Order 排序方向：Asc Desc
     * @param string $OrderField 排序字段
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
