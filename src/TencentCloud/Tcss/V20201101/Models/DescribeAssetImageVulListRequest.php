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
 * DescribeAssetImageVulList请求参数结构体
 *
 * @method string getImageID() 获取镜像id
 * @method void setImageID(string $ImageID) 设置镜像id
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Name- String - 是否必填：否 - 漏洞名称名称筛选，</li>
<li>Level - String - 是否必填：否 - 风险等级  1,2,3,4</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Name- String - 是否必填：否 - 漏洞名称名称筛选，</li>
<li>Level - String - 是否必填：否 - 风险等级  1,2,3,4</li>
 * @method string getBy() 获取排序字段（Level）
 * @method void setBy(string $By) 设置排序字段（Level）
 * @method string getOrder() 获取排序方式 + -
 * @method void setOrder(string $Order) 设置排序方式 + -
 */
class DescribeAssetImageVulListRequest extends AbstractModel
{
    /**
     * @var string 镜像id
     */
    public $ImageID;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>Name- String - 是否必填：否 - 漏洞名称名称筛选，</li>
<li>Level - String - 是否必填：否 - 风险等级  1,2,3,4</li>
     */
    public $Filters;

    /**
     * @var string 排序字段（Level）
     */
    public $By;

    /**
     * @var string 排序方式 + -
     */
    public $Order;

    /**
     * @param string $ImageID 镜像id
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Name- String - 是否必填：否 - 漏洞名称名称筛选，</li>
<li>Level - String - 是否必填：否 - 风险等级  1,2,3,4</li>
     * @param string $By 排序字段（Level）
     * @param string $Order 排序方式 + -
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
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
    }
}
