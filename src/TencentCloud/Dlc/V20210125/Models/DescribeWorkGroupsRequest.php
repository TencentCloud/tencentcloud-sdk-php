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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkGroups请求参数结构体
 *
 * @method integer getWorkGroupId() 获取查询的工作组Id，不填或填0表示不过滤。
 * @method void setWorkGroupId(integer $WorkGroupId) 设置查询的工作组Id，不填或填0表示不过滤。
 * @method array getFilters() 获取过滤条件，当前仅支持按照工作组名称进行模糊搜索。Key为workgroup-name
 * @method void setFilters(array $Filters) 设置过滤条件，当前仅支持按照工作组名称进行模糊搜索。Key为workgroup-name
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认20，最大值100
 * @method void setLimit(integer $Limit) 设置返回数量，默认20，最大值100
 * @method string getSortBy() 获取排序字段，支持如下字段类型，create-time
 * @method void setSortBy(string $SortBy) 设置排序字段，支持如下字段类型，create-time
 * @method string getSorting() 获取排序方式，desc表示正序，asc表示反序， 默认为asc
 * @method void setSorting(string $Sorting) 设置排序方式，desc表示正序，asc表示反序， 默认为asc
 */
class DescribeWorkGroupsRequest extends AbstractModel
{
    /**
     * @var integer 查询的工作组Id，不填或填0表示不过滤。
     */
    public $WorkGroupId;

    /**
     * @var array 过滤条件，当前仅支持按照工作组名称进行模糊搜索。Key为workgroup-name
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20，最大值100
     */
    public $Limit;

    /**
     * @var string 排序字段，支持如下字段类型，create-time
     */
    public $SortBy;

    /**
     * @var string 排序方式，desc表示正序，asc表示反序， 默认为asc
     */
    public $Sorting;

    /**
     * @param integer $WorkGroupId 查询的工作组Id，不填或填0表示不过滤。
     * @param array $Filters 过滤条件，当前仅支持按照工作组名称进行模糊搜索。Key为workgroup-name
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认20，最大值100
     * @param string $SortBy 排序字段，支持如下字段类型，create-time
     * @param string $Sorting 排序方式，desc表示正序，asc表示反序， 默认为asc
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }
    }
}
