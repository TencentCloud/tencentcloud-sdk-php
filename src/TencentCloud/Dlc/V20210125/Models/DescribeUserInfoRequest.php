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
 * DescribeUserInfo请求参数结构体
 *
 * @method string getUserId() 获取<p>用户Id</p>
 * @method void setUserId(string $UserId) 设置<p>用户Id</p>
 * @method string getType() 获取<p>必传字段，查询的信息类型，Group：工作组 DataAuth：数据权限 EngineAuth:引擎权限 RowFilter：行级别权限</p>
 * @method void setType(string $Type) 设置<p>必传字段，查询的信息类型，Group：工作组 DataAuth：数据权限 EngineAuth:引擎权限 RowFilter：行级别权限</p>
 * @method array getFilters() 获取<p>查询的过滤条件。</p><p>当Type为Group时，支持Key为workgroup-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
 * @method void setFilters(array $Filters) 设置<p>查询的过滤条件。</p><p>当Type为Group时，支持Key为workgroup-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
 * @method string getSortBy() 获取<p>排序字段。</p><p>当Type为Group时，支持create-time、group-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段。</p><p>当Type为Group时，支持create-time、group-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
 * @method string getSorting() 获取<p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
 * @method void setSorting(string $Sorting) 设置<p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大值100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大值100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method string getAccountType() 获取<p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
 * @method void setAccountType(string $AccountType) 设置<p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
 * @method string getPolicyId() 获取<p>TF 资源 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>TF 资源 ID</p>
 */
class DescribeUserInfoRequest extends AbstractModel
{
    /**
     * @var string <p>用户Id</p>
     */
    public $UserId;

    /**
     * @var string <p>必传字段，查询的信息类型，Group：工作组 DataAuth：数据权限 EngineAuth:引擎权限 RowFilter：行级别权限</p>
     */
    public $Type;

    /**
     * @var array <p>查询的过滤条件。</p><p>当Type为Group时，支持Key为workgroup-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段。</p><p>当Type为Group时，支持create-time、group-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
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
     * @var string <p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
     */
    public $AccountType;

    /**
     * @var string <p>TF 资源 ID</p>
     */
    public $PolicyId;

    /**
     * @param string $UserId <p>用户Id</p>
     * @param string $Type <p>必传字段，查询的信息类型，Group：工作组 DataAuth：数据权限 EngineAuth:引擎权限 RowFilter：行级别权限</p>
     * @param array $Filters <p>查询的过滤条件。</p><p>当Type为Group时，支持Key为workgroup-name的模糊搜索；</p><p>当Type为DataAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>data-name：库表的模糊搜索。</p><p>当Type为EngineAuth时，支持key：</p><p>policy-type：权限类型。</p><p>policy-source：数据来源。</p><p>engine-name：库表的模糊搜索。</p>
     * @param string $SortBy <p>排序字段。</p><p>当Type为Group时，支持create-time、group-name</p><p>当Type为DataAuth时，支持create-time</p><p>当Type为EngineAuth时，支持create-time</p>
     * @param string $Sorting <p>排序方式，desc表示正序，asc表示反序， 默认为asc</p>
     * @param integer $Limit <p>返回数量，默认20，最大值100</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param string $AccountType <p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
     * @param string $PolicyId <p>TF 资源 ID</p>
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
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

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
