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
 * DescribeBaselinePolicyItemList请求参数结构体
 *
 * @method integer getPolicyID() 获取<p>基线策略ID</p>
 * @method void setPolicyID(integer $PolicyID) 设置<p>基线策略ID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getParentCategoryID() 获取<p>基线父分类 ID，用于筛选指定父分类下的检测项。</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置<p>基线父分类 ID，用于筛选指定父分类下的检测项。</p>
 * @method integer getLimit() 获取<p>分页查询每页返回条数，默认值 10，最大值 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询每页返回条数，默认值 10，最大值 100。</p>
 * @method integer getOffset() 获取<p>分页查询偏移量，默认值 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量，默认值 0。</p>
 * @method array getFilters() 获取<p>通用过滤条件列表。支持的过滤字段：</p><ul><li>CategoryID：子分类 ID，精确匹配</li><li>Name：检测项名称，模糊匹配</li><li>RiskLevel：风险等级，精确匹配。取值：LOW、MEDIUM、HIGH、CRITICAL</li><li>SupportCustomValue：是否支持编辑，精确匹配。取值：true、false</li></ul>
 * @method void setFilters(array $Filters) 设置<p>通用过滤条件列表。支持的过滤字段：</p><ul><li>CategoryID：子分类 ID，精确匹配</li><li>Name：检测项名称，模糊匹配</li><li>RiskLevel：风险等级，精确匹配。取值：LOW、MEDIUM、HIGH、CRITICAL</li><li>SupportCustomValue：是否支持编辑，精确匹配。取值：true、false</li></ul>
 */
class DescribeBaselinePolicyItemListRequest extends AbstractModel
{
    /**
     * @var integer <p>基线策略ID</p>
     */
    public $PolicyID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>基线父分类 ID，用于筛选指定父分类下的检测项。</p>
     */
    public $ParentCategoryID;

    /**
     * @var integer <p>分页查询每页返回条数，默认值 10，最大值 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询偏移量，默认值 0。</p>
     */
    public $Offset;

    /**
     * @var array <p>通用过滤条件列表。支持的过滤字段：</p><ul><li>CategoryID：子分类 ID，精确匹配</li><li>Name：检测项名称，模糊匹配</li><li>RiskLevel：风险等级，精确匹配。取值：LOW、MEDIUM、HIGH、CRITICAL</li><li>SupportCustomValue：是否支持编辑，精确匹配。取值：true、false</li></ul>
     */
    public $Filters;

    /**
     * @param integer $PolicyID <p>基线策略ID</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $ParentCategoryID <p>基线父分类 ID，用于筛选指定父分类下的检测项。</p>
     * @param integer $Limit <p>分页查询每页返回条数，默认值 10，最大值 100。</p>
     * @param integer $Offset <p>分页查询偏移量，默认值 0。</p>
     * @param array $Filters <p>通用过滤条件列表。支持的过滤字段：</p><ul><li>CategoryID：子分类 ID，精确匹配</li><li>Name：检测项名称，模糊匹配</li><li>RiskLevel：风险等级，精确匹配。取值：LOW、MEDIUM、HIGH、CRITICAL</li><li>SupportCustomValue：是否支持编辑，精确匹配。取值：true、false</li></ul>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
