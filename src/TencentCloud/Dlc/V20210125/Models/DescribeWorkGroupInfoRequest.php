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
 * DescribeWorkGroupInfo请求参数结构体
 *
 * @method integer getWorkGroupId() 获取工作组Id
 * @method void setWorkGroupId(integer $WorkGroupId) 设置工作组Id
 * @method string getType() 获取查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限
 * @method void setType(string $Type) 设置查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限
 * @method array getFilters() 获取查询的过滤条件。

当Type为User时，支持Key为user-name的模糊搜索；

当Type为DataAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

data-name：库表的模糊搜索。

当Type为EngineAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

engine-name：库表的模糊搜索。
 * @method void setFilters(array $Filters) 设置查询的过滤条件。

当Type为User时，支持Key为user-name的模糊搜索；

当Type为DataAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

data-name：库表的模糊搜索。

当Type为EngineAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

engine-name：库表的模糊搜索。
 * @method string getSortBy() 获取排序字段。

当Type为User时，支持create-time、user-name

当Type为DataAuth时，支持create-time

当Type为EngineAuth时，支持create-time
 * @method void setSortBy(string $SortBy) 设置排序字段。

当Type为User时，支持create-time、user-name

当Type为DataAuth时，支持create-time

当Type为EngineAuth时，支持create-time
 * @method string getSorting() 获取排序方式，desc表示正序，asc表示反序， 默认为asc
 * @method void setSorting(string $Sorting) 设置排序方式，desc表示正序，asc表示反序， 默认为asc
 * @method integer getLimit() 获取返回数量，默认20，最大值100
 * @method void setLimit(integer $Limit) 设置返回数量，默认20，最大值100
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 */
class DescribeWorkGroupInfoRequest extends AbstractModel
{
    /**
     * @var integer 工作组Id
     */
    public $WorkGroupId;

    /**
     * @var string 查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限
     */
    public $Type;

    /**
     * @var array 查询的过滤条件。

当Type为User时，支持Key为user-name的模糊搜索；

当Type为DataAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

data-name：库表的模糊搜索。

当Type为EngineAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

engine-name：库表的模糊搜索。
     */
    public $Filters;

    /**
     * @var string 排序字段。

当Type为User时，支持create-time、user-name

当Type为DataAuth时，支持create-time

当Type为EngineAuth时，支持create-time
     */
    public $SortBy;

    /**
     * @var string 排序方式，desc表示正序，asc表示反序， 默认为asc
     */
    public $Sorting;

    /**
     * @var integer 返回数量，默认20，最大值100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @param integer $WorkGroupId 工作组Id
     * @param string $Type 查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限
     * @param array $Filters 查询的过滤条件。

当Type为User时，支持Key为user-name的模糊搜索；

当Type为DataAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

data-name：库表的模糊搜索。

当Type为EngineAuth时，支持key：

policy-type：权限类型。

policy-source：数据来源。

engine-name：库表的模糊搜索。
     * @param string $SortBy 排序字段。

当Type为User时，支持create-time、user-name

当Type为DataAuth时，支持create-time

当Type为EngineAuth时，支持create-time
     * @param string $Sorting 排序方式，desc表示正序，asc表示反序， 默认为asc
     * @param integer $Limit 返回数量，默认20，最大值100
     * @param integer $Offset 偏移量，默认为0
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
