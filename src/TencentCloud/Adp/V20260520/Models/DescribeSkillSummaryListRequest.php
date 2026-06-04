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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillSummaryList请求参数结构体
 *
 * @method string getSpaceId() 获取空间ID，必填
 * @method void setSpaceId(string $SpaceId) 设置空间ID，必填
 * @method boolean getFavoriteOnly() 获取仅查询当前用户收藏的 Skill
 * @method void setFavoriteOnly(boolean $FavoriteOnly) 设置仅查询当前用户收藏的 Skill
 * @method array getFilterList() 获取过滤条件(多个Filter之间为AND关系,同一Filter的多个Values为OR关系): - SkillIdList: Skill ID列表,字符串数组,精确匹配 - ProviderType: Skill 提供方类型,枚举值数组,精确匹配 (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4) - CategoryKey: 分类标识,字符串数组,精确匹配 - AnalysisStatus: 安全检测状态,枚举值数组,精确匹配 (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4) - RiskLevel: 风险等级,枚举值数组,精确匹配 (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3) - ShareStatus: 共享状态,枚举值数组,精确匹配,仅在ProviderType包含SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED时生效 (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
 * @method void setFilterList(array $FilterList) 设置过滤条件(多个Filter之间为AND关系,同一Filter的多个Values为OR关系): - SkillIdList: Skill ID列表,字符串数组,精确匹配 - ProviderType: Skill 提供方类型,枚举值数组,精确匹配 (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4) - CategoryKey: 分类标识,字符串数组,精确匹配 - AnalysisStatus: 安全检测状态,枚举值数组,精确匹配 (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4) - RiskLevel: 风险等级,枚举值数组,精确匹配 (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3) - ShareStatus: 共享状态,枚举值数组,精确匹配,仅在ProviderType包含SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED时生效 (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
 * @method integer getPageNumber() 获取页码，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置页码，从 0 开始
 * @method integer getPageSize() 获取每页数量，最大值 100
 * @method void setPageSize(integer $PageSize) 设置每页数量，最大值 100
 * @method string getQuery() 获取名称/展示名称模糊搜索
 * @method void setQuery(string $Query) 设置名称/展示名称模糊搜索
 */
class DescribeSkillSummaryListRequest extends AbstractModel
{
    /**
     * @var string 空间ID，必填
     */
    public $SpaceId;

    /**
     * @var boolean 仅查询当前用户收藏的 Skill
     */
    public $FavoriteOnly;

    /**
     * @var array 过滤条件(多个Filter之间为AND关系,同一Filter的多个Values为OR关系): - SkillIdList: Skill ID列表,字符串数组,精确匹配 - ProviderType: Skill 提供方类型,枚举值数组,精确匹配 (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4) - CategoryKey: 分类标识,字符串数组,精确匹配 - AnalysisStatus: 安全检测状态,枚举值数组,精确匹配 (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4) - RiskLevel: 风险等级,枚举值数组,精确匹配 (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3) - ShareStatus: 共享状态,枚举值数组,精确匹配,仅在ProviderType包含SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED时生效 (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
     */
    public $FilterList;

    /**
     * @var integer 页码，从 0 开始
     */
    public $PageNumber;

    /**
     * @var integer 每页数量，最大值 100
     */
    public $PageSize;

    /**
     * @var string 名称/展示名称模糊搜索
     */
    public $Query;

    /**
     * @param string $SpaceId 空间ID，必填
     * @param boolean $FavoriteOnly 仅查询当前用户收藏的 Skill
     * @param array $FilterList 过滤条件(多个Filter之间为AND关系,同一Filter的多个Values为OR关系): - SkillIdList: Skill ID列表,字符串数组,精确匹配 - ProviderType: Skill 提供方类型,枚举值数组,精确匹配 (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4) - CategoryKey: 分类标识,字符串数组,精确匹配 - AnalysisStatus: 安全检测状态,枚举值数组,精确匹配 (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4) - RiskLevel: 风险等级,枚举值数组,精确匹配 (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3) - ShareStatus: 共享状态,枚举值数组,精确匹配,仅在ProviderType包含SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED时生效 (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
     * @param integer $PageNumber 页码，从 0 开始
     * @param integer $PageSize 每页数量，最大值 100
     * @param string $Query 名称/展示名称模糊搜索
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FavoriteOnly",$param) and $param["FavoriteOnly"] !== null) {
            $this->FavoriteOnly = $param["FavoriteOnly"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
