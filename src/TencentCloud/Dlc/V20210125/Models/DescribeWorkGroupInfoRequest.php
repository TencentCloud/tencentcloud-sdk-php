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
 * @method integer getWorkGroupId() 获取<p>工作组Id</p>
 * @method void setWorkGroupId(integer $WorkGroupId) 设置<p>工作组Id</p>
 * @method string getType() 获取<p>查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限</p>
 * @method void setType(string $Type) 设置<p>查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限</p>
 * @method array getFilters() 获取<p>查询的过滤条件。</p><p>当Type为User时，支持Key为user-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
 * @method void setFilters(array $Filters) 设置<p>查询的过滤条件。</p><p>当Type为User时，支持Key为user-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
 * @method string getSortBy() 获取<p>排序字段。</p><p>当Type为User时，支持create-time、user-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段。</p><p>当Type为User时，支持create-time、user-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
 * @method string getSorting() 获取<p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
 * @method void setSorting(string $Sorting) 设置<p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大值100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大值100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method string getPolicyId() 获取<p>要授权的策略列表</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>要授权的策略列表</p>
 */
class DescribeWorkGroupInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>工作组Id</p>
     */
    public $WorkGroupId;

    /**
     * @var string <p>查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限</p>
     */
    public $Type;

    /**
     * @var array <p>查询的过滤条件。</p><p>当Type为User时，支持Key为user-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段。</p><p>当Type为User时，支持create-time、user-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
     */
    public $Sorting;

    /**
     * @var integer <p>返回数量，默认20，最大值100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var string <p>要授权的策略列表</p>
     */
    public $PolicyId;

    /**
     * @param integer $WorkGroupId <p>工作组Id</p>
     * @param string $Type <p>查询信息类型：User：用户信息 DataAuth：数据权限 EngineAuth：引擎权限</p>
     * @param array $Filters <p>查询的过滤条件。</p><p>当Type为User时，支持Key为user-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
     * @param string $SortBy <p>排序字段。</p><p>当Type为User时，支持create-time、user-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
     * @param string $Sorting <p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
     * @param integer $Limit <p>返回数量，默认20，最大值100</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param string $PolicyId <p>要授权的策略列表</p>
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
