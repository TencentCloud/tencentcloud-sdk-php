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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComplianceAssetList请求参数结构体
 *
 * @method array getAssetTypeSet() 获取资产类型列表。
 * @method void setAssetTypeSet(array $AssetTypeSet) 设置资产类型列表。
 * @method integer getOffset() 获取起始偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置起始偏移量，默认为0。
 * @method integer getLimit() 获取返回的数据量，默认为10，最大为100。
 * @method void setLimit(integer $Limit) 设置返回的数据量，默认为10，最大为100。
 * @method array getFilters() 获取查询过滤器
 * @method void setFilters(array $Filters) 设置查询过滤器
 */
class DescribeComplianceAssetListRequest extends AbstractModel
{
    /**
     * @var array 资产类型列表。
     */
    public $AssetTypeSet;

    /**
     * @var integer 起始偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回的数据量，默认为10，最大为100。
     */
    public $Limit;

    /**
     * @var array 查询过滤器
     */
    public $Filters;

    /**
     * @param array $AssetTypeSet 资产类型列表。
     * @param integer $Offset 起始偏移量，默认为0。
     * @param integer $Limit 返回的数据量，默认为10，最大为100。
     * @param array $Filters 查询过滤器
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
        if (array_key_exists("AssetTypeSet",$param) and $param["AssetTypeSet"] !== null) {
            $this->AssetTypeSet = $param["AssetTypeSet"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
