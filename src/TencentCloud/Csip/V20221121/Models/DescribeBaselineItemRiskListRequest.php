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
 * DescribeBaselineItemRiskList请求参数结构体
 *
 * @method array getPolicyID() 获取<p>基线策略 ID 列表。</p>
 * @method void setPolicyID(array $PolicyID) 设置<p>基线策略 ID 列表。</p>
 * @method integer getParentCategoryID() 获取<p>基线系统父分类 ID。</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置<p>基线系统父分类 ID。</p>
 * @method integer getItemID() 获取<p>基线检测项 ID。</p>
 * @method void setItemID(integer $ItemID) 设置<p>基线检测项 ID。</p>
 * @method array getCheckAssetType() 获取<p>检测资产类型列表，元素取值为 HOST 或 CLUSTER。</p>
 * @method void setCheckAssetType(array $CheckAssetType) 设置<p>检测资产类型列表，元素取值为 HOST 或 CLUSTER。</p>
 * @method integer getCategoryID() 获取<p>基线子分类 ID。</p>
 * @method void setCategoryID(integer $CategoryID) 设置<p>基线子分类 ID。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>通用过滤条件。支持的 Name：ResultStatus（通过状态，Values: PASS/NOT_PASS）、AssetName（资产名称/ID，模糊搜索）、IP（IP地址，模糊搜索）、Tag（资产标签，模糊搜索）。</p>
 * @method void setFilters(array $Filters) 设置<p>通用过滤条件。支持的 Name：ResultStatus（通过状态，Values: PASS/NOT_PASS）、AssetName（资产名称/ID，模糊搜索）、IP（IP地址，模糊搜索）、Tag（资产标签，模糊搜索）。</p>
 * @method integer getLimit() 获取<p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
 * @method integer getOffset() 获取<p>分页查询起始偏移量，从 0 开始。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询起始偏移量，从 0 开始。</p>
 * @method string getOrder() 获取<p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
 * @method void setOrder(string $Order) 设置<p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
 * @method string getBy() 获取<p>排序字段名，由具体接口定义可选字段。</p>
 * @method void setBy(string $By) 设置<p>排序字段名，由具体接口定义可选字段。</p>
 */
class DescribeBaselineItemRiskListRequest extends AbstractModel
{
    /**
     * @var array <p>基线策略 ID 列表。</p>
     */
    public $PolicyID;

    /**
     * @var integer <p>基线系统父分类 ID。</p>
     */
    public $ParentCategoryID;

    /**
     * @var integer <p>基线检测项 ID。</p>
     */
    public $ItemID;

    /**
     * @var array <p>检测资产类型列表，元素取值为 HOST 或 CLUSTER。</p>
     */
    public $CheckAssetType;

    /**
     * @var integer <p>基线子分类 ID。</p>
     */
    public $CategoryID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>通用过滤条件。支持的 Name：ResultStatus（通过状态，Values: PASS/NOT_PASS）、AssetName（资产名称/ID，模糊搜索）、IP（IP地址，模糊搜索）、Tag（资产标签，模糊搜索）。</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询起始偏移量，从 0 开始。</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段名，由具体接口定义可选字段。</p>
     */
    public $By;

    /**
     * @param array $PolicyID <p>基线策略 ID 列表。</p>
     * @param integer $ParentCategoryID <p>基线系统父分类 ID。</p>
     * @param integer $ItemID <p>基线检测项 ID。</p>
     * @param array $CheckAssetType <p>检测资产类型列表，元素取值为 HOST 或 CLUSTER。</p>
     * @param integer $CategoryID <p>基线子分类 ID。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>通用过滤条件。支持的 Name：ResultStatus（通过状态，Values: PASS/NOT_PASS）、AssetName（资产名称/ID，模糊搜索）、IP（IP地址，模糊搜索）、Tag（资产标签，模糊搜索）。</p>
     * @param integer $Limit <p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
     * @param integer $Offset <p>分页查询起始偏移量，从 0 开始。</p>
     * @param string $Order <p>排序方向，取值 asc（升序）或 desc（降序），默认 desc。</p>
     * @param string $By <p>排序字段名，由具体接口定义可选字段。</p>
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
        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
