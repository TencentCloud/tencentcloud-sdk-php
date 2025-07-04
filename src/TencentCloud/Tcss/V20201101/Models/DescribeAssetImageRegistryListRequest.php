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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method array getFilters() 获取过滤字段
IsAuthorized是否授权，取值全部all，未授权0，已授权1
 * @method void setFilters(array $Filters) 设置过滤字段
IsAuthorized是否授权，取值全部all，未授权0，已授权1
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式，asc，desc
 * @method void setOrder(string $Order) 设置排序方式，asc，desc
 * @method boolean getOnlyShowLatest() 获取是否仅展示各repository最新的镜像, 默认为false
 * @method void setOnlyShowLatest(boolean $OnlyShowLatest) 设置是否仅展示各repository最新的镜像, 默认为false
 * @method boolean getIsRunning() 获取是否仅展示运行中容器镜像
 * @method void setIsRunning(boolean $IsRunning) 设置是否仅展示运行中容器镜像
 */
class DescribeAssetImageRegistryListRequest extends AbstractModel
{
    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var array 过滤字段
IsAuthorized是否授权，取值全部all，未授权0，已授权1
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式，asc，desc
     */
    public $Order;

    /**
     * @var boolean 是否仅展示各repository最新的镜像, 默认为false
     */
    public $OnlyShowLatest;

    /**
     * @var boolean 是否仅展示运行中容器镜像
     */
    public $IsRunning;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0
     * @param array $Filters 过滤字段
IsAuthorized是否授权，取值全部all，未授权0，已授权1
     * @param string $By 排序字段
     * @param string $Order 排序方式，asc，desc
     * @param boolean $OnlyShowLatest 是否仅展示各repository最新的镜像, 默认为false
     * @param boolean $IsRunning 是否仅展示运行中容器镜像
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
                $obj = new AssetFilters();
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

        if (array_key_exists("OnlyShowLatest",$param) and $param["OnlyShowLatest"] !== null) {
            $this->OnlyShowLatest = $param["OnlyShowLatest"];
        }

        if (array_key_exists("IsRunning",$param) and $param["IsRunning"] !== null) {
            $this->IsRunning = $param["IsRunning"];
        }
    }
}
