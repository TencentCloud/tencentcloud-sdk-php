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
支持的过滤项包括：DspaId、Status、Version、DspaName。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
 * @method void setFilters(array $Filters) 设置过滤项。
支持的过滤项包括：DspaId、Status、Version、DspaName。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
 * @method string getListMode() 获取展示模式。
 * @method void setListMode(string $ListMode) 设置展示模式。
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
支持的过滤项包括：DspaId、Status、Version、DspaName。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
     */
    public $Filters;

    /**
     * @var string 展示模式。
     */
    public $ListMode;

    /**
     * @param integer $Limit 分页步长，默认为100。
     * @param integer $Offset 分页偏移量，默认为0。
     * @param array $Filters 过滤项。
支持的过滤项包括：DspaId、Status、Version、DspaName。
DspaId和DspaName支持模糊搜索。
Status支持的可选值：enabled、disabled。
Version支持的可选值：trial、official。
     * @param string $ListMode 展示模式。
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

        if (array_key_exists("ListMode",$param) and $param["ListMode"] !== null) {
            $this->ListMode = $param["ListMode"];
        }
    }
}
