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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDSPAClusters请求参数结构体
 *
 * @method integer getLimit() 获取分页步长，默认为100。
 * @method void setLimit(integer $Limit) 设置分页步长，默认为100。
 * @method integer getOffset() 获取分页偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0。
 * @method array getFilters() 获取过滤项。
支持的过滤项包括：DspaId、Status、Version、DspaName、Channel。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
Channel支持的可选值：sp_cds_dsgc_pre（代表dsgc实例）、sp_cds_dsgc_wedata_dc（代表wedata实例）
 * @method void setFilters(array $Filters) 设置过滤项。
支持的过滤项包括：DspaId、Status、Version、DspaName、Channel。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
Channel支持的可选值：sp_cds_dsgc_pre（代表dsgc实例）、sp_cds_dsgc_wedata_dc（代表wedata实例）
 * @method array getTagFilter() 获取Tag键值过滤
 * @method void setTagFilter(array $TagFilter) 设置Tag键值过滤
 * @method string getListMode() 获取展示模式。

目前只有两个值的处理逻辑：

空值：需要查询每个实例的配额信息，因为是串行查询，所以速度很慢，limit最大为100

"simple"：不需要查询每个实例的配额信息，速度快，limit最大为1000
 * @method void setListMode(string $ListMode) 设置展示模式。

目前只有两个值的处理逻辑：

空值：需要查询每个实例的配额信息，因为是串行查询，所以速度很慢，limit最大为100

"simple"：不需要查询每个实例的配额信息，速度快，limit最大为1000
 */
class ListDSPAClustersRequest extends AbstractModel
{
    /**
     * @var integer 分页步长，默认为100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤项。
支持的过滤项包括：DspaId、Status、Version、DspaName、Channel。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
Channel支持的可选值：sp_cds_dsgc_pre（代表dsgc实例）、sp_cds_dsgc_wedata_dc（代表wedata实例）
     */
    public $Filters;

    /**
     * @var array Tag键值过滤
     */
    public $TagFilter;

    /**
     * @var string 展示模式。

目前只有两个值的处理逻辑：

空值：需要查询每个实例的配额信息，因为是串行查询，所以速度很慢，limit最大为100

"simple"：不需要查询每个实例的配额信息，速度快，limit最大为1000
     */
    public $ListMode;

    /**
     * @param integer $Limit 分页步长，默认为100。
     * @param integer $Offset 分页偏移量，默认为0。
     * @param array $Filters 过滤项。
支持的过滤项包括：DspaId、Status、Version、DspaName、Channel。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
Channel支持的可选值：sp_cds_dsgc_pre（代表dsgc实例）、sp_cds_dsgc_wedata_dc（代表wedata实例）
     * @param array $TagFilter Tag键值过滤
     * @param string $ListMode 展示模式。

目前只有两个值的处理逻辑：

空值：需要查询每个实例的配额信息，因为是串行查询，所以速度很慢，limit最大为100

"simple"：不需要查询每个实例的配额信息，速度快，limit最大为1000
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DspaDataSourceMngFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilter",$param) and $param["TagFilter"] !== null) {
            $this->TagFilter = [];
            foreach ($param["TagFilter"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagFilter, $obj);
            }
        }

        if (array_key_exists("ListMode",$param) and $param["ListMode"] !== null) {
            $this->ListMode = $param["ListMode"];
        }
    }
}
