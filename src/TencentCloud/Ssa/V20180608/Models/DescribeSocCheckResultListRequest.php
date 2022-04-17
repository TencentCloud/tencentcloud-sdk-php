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
 * DescribeSocCheckResultList请求参数结构体
 *
 * @method array getFilter() 获取查询参数,可支持的查询参数：
Name,Type,AssetType,Result,PloyName,PloyId
 * @method void setFilter(array $Filter) 设置查询参数,可支持的查询参数：
Name,Type,AssetType,Result,PloyName,PloyId
 * @method array getSorter() 获取排序参数,可支持的排序参数：CheckStatus,RiskCount
 * @method void setSorter(array $Sorter) 设置排序参数,可支持的排序参数：CheckStatus,RiskCount
 * @method integer getPageSize() 获取当前页码数据，默认值为10
 * @method void setPageSize(integer $PageSize) 设置当前页码数据，默认值为10
 * @method integer getPageIndex() 获取当前页面索引，默认值为0
 * @method void setPageIndex(integer $PageIndex) 设置当前页面索引，默认值为0
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 */
class DescribeSocCheckResultListRequest extends AbstractModel
{
    /**
     * @var array 查询参数,可支持的查询参数：
Name,Type,AssetType,Result,PloyName,PloyId
     */
    public $Filter;

    /**
     * @var array 排序参数,可支持的排序参数：CheckStatus,RiskCount
     */
    public $Sorter;

    /**
     * @var integer 当前页码数据，默认值为10
     */
    public $PageSize;

    /**
     * @var integer 当前页面索引，默认值为0
     */
    public $PageIndex;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @param array $Filter 查询参数,可支持的查询参数：
Name,Type,AssetType,Result,PloyName,PloyId
     * @param array $Sorter 排序参数,可支持的排序参数：CheckStatus,RiskCount
     * @param integer $PageSize 当前页码数据，默认值为10
     * @param integer $PageIndex 当前页面索引，默认值为0
     * @param string $AssetId 资产id
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
                $obj = new QueryFilter();
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }
    }
}
