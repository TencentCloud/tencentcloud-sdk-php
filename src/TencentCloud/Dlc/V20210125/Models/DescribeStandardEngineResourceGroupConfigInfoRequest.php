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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStandardEngineResourceGroupConfigInfo请求参数结构体
 *
 * @method string getSortBy() 获取排序字段
 * @method void setSortBy(string $SortBy) 设置排序字段
 * @method string getSorting() 获取升序，降序
 * @method void setSorting(string $Sorting) 设置升序，降序
 * @method array getFilters() 获取过滤条件可选，engine-resource-group-id--引擎资源组ID，engine-id---引擎ID
 * @method void setFilters(array $Filters) 设置过滤条件可选，engine-resource-group-id--引擎资源组ID，engine-id---引擎ID
 * @method integer getLimit() 获取数据条数，默认10
 * @method void setLimit(integer $Limit) 设置数据条数，默认10
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 */
class DescribeStandardEngineResourceGroupConfigInfoRequest extends AbstractModel
{
    /**
     * @var string 排序字段
     */
    public $SortBy;

    /**
     * @var string 升序，降序
     */
    public $Sorting;

    /**
     * @var array 过滤条件可选，engine-resource-group-id--引擎资源组ID，engine-id---引擎ID
     */
    public $Filters;

    /**
     * @var integer 数据条数，默认10
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @param string $SortBy 排序字段
     * @param string $Sorting 升序，降序
     * @param array $Filters 过滤条件可选，engine-resource-group-id--引擎资源组ID，engine-id---引擎ID
     * @param integer $Limit 数据条数，默认10
     * @param integer $Offset 偏移量，默认0
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
        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
    }
}
