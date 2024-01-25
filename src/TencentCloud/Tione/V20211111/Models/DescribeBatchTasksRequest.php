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
 * DescribeBatchTasks请求参数结构体
 *
 * @method array getFilters() 获取过滤器

Name支持的取值范围：
BatchTaskId, BatchTaskName, Status, ModelVersionId

其中Status 的有效取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
 * @method void setFilters(array $Filters) 设置过滤器

Name支持的取值范围：
BatchTaskId, BatchTaskName, Status, ModelVersionId

其中Status 的有效取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
 * @method array getTagFilters() 获取标签过滤器
 * @method void setTagFilters(array $TagFilters) 设置标签过滤器
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取限制数目，默认为20
 * @method void setLimit(integer $Limit) 设置限制数目，默认为20
 * @method string getOrder() 获取输出列表的排列顺序。取值范围：ASC（升序排列）/ DESC（降序排列），默认为DESC
 * @method void setOrder(string $Order) 设置输出列表的排列顺序。取值范围：ASC（升序排列）/ DESC（降序排列），默认为DESC
 * @method string getOrderField() 获取排序字段。当前仅支持 "CreateTime"。
不传此字段则按照DB默认排序结果返回
 * @method void setOrderField(string $OrderField) 设置排序字段。当前仅支持 "CreateTime"。
不传此字段则按照DB默认排序结果返回
 */
class DescribeBatchTasksRequest extends AbstractModel
{
    /**
     * @var array 过滤器

Name支持的取值范围：
BatchTaskId, BatchTaskName, Status, ModelVersionId

其中Status 的有效取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
     */
    public $Filters;

    /**
     * @var array 标签过滤器
     */
    public $TagFilters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 限制数目，默认为20
     */
    public $Limit;

    /**
     * @var string 输出列表的排列顺序。取值范围：ASC（升序排列）/ DESC（降序排列），默认为DESC
     */
    public $Order;

    /**
     * @var string 排序字段。当前仅支持 "CreateTime"。
不传此字段则按照DB默认排序结果返回
     */
    public $OrderField;

    /**
     * @param array $Filters 过滤器

Name支持的取值范围：
BatchTaskId, BatchTaskName, Status, ModelVersionId

其中Status 的有效取值范围:
INIT, STARTING, RUNNING, FAILED, STOPPING, STOPPED, SUCCEED
     * @param array $TagFilters 标签过滤器
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 限制数目，默认为20
     * @param string $Order 输出列表的排列顺序。取值范围：ASC（升序排列）/ DESC（降序排列），默认为DESC
     * @param string $OrderField 排序字段。当前仅支持 "CreateTime"。
不传此字段则按照DB默认排序结果返回
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

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
