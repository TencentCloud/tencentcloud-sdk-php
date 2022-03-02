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
 * DescribeComplianceWhitelistItemList请求参数结构体
 *
 * @method integer getOffset() 获取起始偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置起始偏移量，默认为0。
 * @method integer getLimit() 获取要获取的数量，默认为10，最大为100。
 * @method void setLimit(integer $Limit) 设置要获取的数量，默认为10，最大为100。
 * @method array getAssetTypeSet() 获取资产类型列表。
 * @method void setAssetTypeSet(array $AssetTypeSet) 设置资产类型列表。
 * @method array getFilters() 获取查询过滤器
 * @method void setFilters(array $Filters) 设置查询过滤器
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式 desc asc
 * @method void setOrder(string $Order) 设置排序方式 desc asc
 */
class DescribeComplianceWhitelistItemListRequest extends AbstractModel
{
    /**
     * @var integer 起始偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 要获取的数量，默认为10，最大为100。
     */
    public $Limit;

    /**
     * @var array 资产类型列表。
     */
    public $AssetTypeSet;

    /**
     * @var array 查询过滤器
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式 desc asc
     */
    public $Order;

    /**
     * @param integer $Offset 起始偏移量，默认为0。
     * @param integer $Limit 要获取的数量，默认为10，最大为100。
     * @param array $AssetTypeSet 资产类型列表。
     * @param array $Filters 查询过滤器
     * @param string $By 排序字段
     * @param string $Order 排序方式 desc asc
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AssetTypeSet",$param) and $param["AssetTypeSet"] !== null) {
            $this->AssetTypeSet = $param["AssetTypeSet"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
