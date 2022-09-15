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
 * DescribeMappingResults请求参数结构体
 *
 * @method array getFilter() 获取过滤条件，FilterKey 取值范围：AssetId，AssetIp，PrivateIp，Protocol，Service，OS，Process，Component，AssetType，Domain，Port，LastMappingTime，MappingType，Disposal，Vpc
 * @method void setFilter(array $Filter) 设置过滤条件，FilterKey 取值范围：AssetId，AssetIp，PrivateIp，Protocol，Service，OS，Process，Component，AssetType，Domain，Port，LastMappingTime，MappingType，Disposal，Vpc
 * @method array getSorter() 获取排序条件，SortKey取值范围：CreateTime，LastMappingTime
 * @method void setSorter(array $Sorter) 设置排序条件，SortKey取值范围：CreateTime，LastMappingTime
 * @method integer getPageIndex() 获取页码
 * @method void setPageIndex(integer $PageIndex) 设置页码
 * @method integer getPageSize() 获取页大小，默认大小20
 * @method void setPageSize(integer $PageSize) 设置页大小，默认大小20
 */
class DescribeMappingResultsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，FilterKey 取值范围：AssetId，AssetIp，PrivateIp，Protocol，Service，OS，Process，Component，AssetType，Domain，Port，LastMappingTime，MappingType，Disposal，Vpc
     */
    public $Filter;

    /**
     * @var array 排序条件，SortKey取值范围：CreateTime，LastMappingTime
     */
    public $Sorter;

    /**
     * @var integer 页码
     */
    public $PageIndex;

    /**
     * @var integer 页大小，默认大小20
     */
    public $PageSize;

    /**
     * @param array $Filter 过滤条件，FilterKey 取值范围：AssetId，AssetIp，PrivateIp，Protocol，Service，OS，Process，Component，AssetType，Domain，Port，LastMappingTime，MappingType，Disposal，Vpc
     * @param array $Sorter 排序条件，SortKey取值范围：CreateTime，LastMappingTime
     * @param integer $PageIndex 页码
     * @param integer $PageSize 页大小，默认大小20
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

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
