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
 * DescribeSocCheckItemList请求参数结构体
 *
 * @method array getFilter() 获取查询参数,可支持的排序字段:Name,Type,AssetType,Level,Standard,IsFree
 * @method void setFilter(array $Filter) 设置查询参数,可支持的排序字段:Name,Type,AssetType,Level,Standard,IsFree
 * @method array getSorter() 获取排序参数:无
 * @method void setSorter(array $Sorter) 设置排序参数:无
 * @method integer getPageSize() 获取当前页码数据，默认值为10
 * @method void setPageSize(integer $PageSize) 设置当前页码数据，默认值为10
 * @method integer getPageIndex() 获取当前页面索引，默认值为0
 * @method void setPageIndex(integer $PageIndex) 设置当前页面索引，默认值为0
 */
class DescribeSocCheckItemListRequest extends AbstractModel
{
    /**
     * @var array 查询参数,可支持的排序字段:Name,Type,AssetType,Level,Standard,IsFree
     */
    public $Filter;

    /**
     * @var array 排序参数:无
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
     * @param array $Filter 查询参数,可支持的排序字段:Name,Type,AssetType,Level,Standard,IsFree
     * @param array $Sorter 排序参数:无
     * @param integer $PageSize 当前页码数据，默认值为10
     * @param integer $PageIndex 当前页面索引，默认值为0
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
    }
}
