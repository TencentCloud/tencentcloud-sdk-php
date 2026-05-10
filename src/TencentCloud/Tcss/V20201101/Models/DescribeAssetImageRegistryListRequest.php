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
 * @method integer getLimit() 获取<p>需要返回的数量，默认为10，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>需要返回的数量，默认为10，最大值为100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method array getFilters() 获取<p>过滤字段<br>IsAuthorized是否授权，取值全部all，未授权0，已授权1</p>
 * @method void setFilters(array $Filters) 设置<p>过滤字段<br>IsAuthorized是否授权，取值全部all，未授权0，已授权1</p>
 * @method string getBy() 获取<p>排序字段</p>
 * @method void setBy(string $By) 设置<p>排序字段</p>
 * @method string getOrder() 获取<p>排序方式，asc，desc</p>
 * @method void setOrder(string $Order) 设置<p>排序方式，asc，desc</p>
 * @method boolean getOnlyShowLatest() 获取<p>是否仅展示各repository最新的镜像, 默认为false</p>
 * @method void setOnlyShowLatest(boolean $OnlyShowLatest) 设置<p>是否仅展示各repository最新的镜像, 默认为false</p>
 * @method boolean getIsRunning() 获取<p>是否仅展示运行中容器镜像</p>
 * @method void setIsRunning(boolean $IsRunning) 设置<p>是否仅展示运行中容器镜像</p>
 */
class DescribeAssetImageRegistryListRequest extends AbstractModel
{
    /**
     * @var integer <p>需要返回的数量，默认为10，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤字段<br>IsAuthorized是否授权，取值全部all，未授权0，已授权1</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段</p>
     */
    public $By;

    /**
     * @var string <p>排序方式，asc，desc</p>
     */
    public $Order;

    /**
     * @var boolean <p>是否仅展示各repository最新的镜像, 默认为false</p>
     */
    public $OnlyShowLatest;

    /**
     * @var boolean <p>是否仅展示运行中容器镜像</p>
     */
    public $IsRunning;

    /**
     * @param integer $Limit <p>需要返回的数量，默认为10，最大值为100</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param array $Filters <p>过滤字段<br>IsAuthorized是否授权，取值全部all，未授权0，已授权1</p>
     * @param string $By <p>排序字段</p>
     * @param string $Order <p>排序方式，asc，desc</p>
     * @param boolean $OnlyShowLatest <p>是否仅展示各repository最新的镜像, 默认为false</p>
     * @param boolean $IsRunning <p>是否仅展示运行中容器镜像</p>
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
