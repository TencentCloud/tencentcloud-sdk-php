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
 * DescribeImageRegistryNamespaceList请求参数结构体
 *
 * @method integer getOffset() 获取本次查询的起始偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置本次查询的起始偏移量，默认为0。
 * @method integer getLimit() 获取本次查询的数据量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置本次查询的数据量，默认为10，最大值为100。
 * @method array getFilters() 获取查询的过滤条件。Name字段可取值"Namespace"。
 * @method void setFilters(array $Filters) 设置查询的过滤条件。Name字段可取值"Namespace"。
 */
class DescribeImageRegistryNamespaceListRequest extends AbstractModel
{
    /**
     * @var integer 本次查询的起始偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 本次查询的数据量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var array 查询的过滤条件。Name字段可取值"Namespace"。
     */
    public $Filters;

    /**
     * @param integer $Offset 本次查询的起始偏移量，默认为0。
     * @param integer $Limit 本次查询的数据量，默认为10，最大值为100。
     * @param array $Filters 查询的过滤条件。Name字段可取值"Namespace"。
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
