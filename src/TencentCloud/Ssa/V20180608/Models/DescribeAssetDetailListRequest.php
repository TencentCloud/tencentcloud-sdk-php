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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetDetailList请求参数结构体
 *
 * @method array getFilter() 获取查询条件，可支持的查询字段：AssetUniqid,AssetName,AssetIpAll,AssetVpcid,Tag
 * @method void setFilter(array $Filter) 设置查询条件，可支持的查询字段：AssetUniqid,AssetName,AssetIpAll,AssetVpcid,Tag
 * @method array getSorter() 获取排序条件，可支持的排序字段：
AssetCspmRiskNum,AssetVulNum,AssetEventNum,SsaAssetDiscoverTime
 * @method void setSorter(array $Sorter) 设置排序条件，可支持的排序字段：
AssetCspmRiskNum,AssetVulNum,AssetEventNum,SsaAssetDiscoverTime
 * @method array getRiskTags() 获取风险标签
 * @method void setRiskTags(array $RiskTags) 设置风险标签
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method integer getPageIndex() 获取页
 * @method void setPageIndex(integer $PageIndex) 设置页
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 */
class DescribeAssetDetailListRequest extends AbstractModel
{
    /**
     * @var array 查询条件，可支持的查询字段：AssetUniqid,AssetName,AssetIpAll,AssetVpcid,Tag
     */
    public $Filter;

    /**
     * @var array 排序条件，可支持的排序字段：
AssetCspmRiskNum,AssetVulNum,AssetEventNum,SsaAssetDiscoverTime
     */
    public $Sorter;

    /**
     * @var array 风险标签
     */
    public $RiskTags;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var integer 页
     */
    public $PageIndex;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @param array $Filter 查询条件，可支持的查询字段：AssetUniqid,AssetName,AssetIpAll,AssetVpcid,Tag
     * @param array $Sorter 排序条件，可支持的排序字段：
AssetCspmRiskNum,AssetVulNum,AssetEventNum,SsaAssetDiscoverTime
     * @param array $RiskTags 风险标签
     * @param array $Tags 标签
     * @param integer $PageIndex 页
     * @param integer $PageSize 页大小
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new AssetQueryFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Sorter",$param) and $param["Sorter"] !== null) {
            $this->Sorter = [];
            foreach ($param["Sorter"] as $key => $value){
                $obj = new QuerySort();
                $obj->deserialize($value);
                array_push($this->Sorter, $obj);
            }
        }

        if (array_key_exists("RiskTags",$param) and $param["RiskTags"] !== null) {
            $this->RiskTags = $param["RiskTags"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
