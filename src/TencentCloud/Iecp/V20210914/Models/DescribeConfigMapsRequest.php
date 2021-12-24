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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigMaps请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置单元ID
 * @method integer getOffset() 获取翻页偏移量
 * @method void setOffset(integer $Offset) 设置翻页偏移量
 * @method integer getLimit() 获取每页大小(最大100)
 * @method void setLimit(integer $Limit) 设置每页大小(最大100)
 * @method string getConfigMapNamespace() 获取命名空间
 * @method void setConfigMapNamespace(string $ConfigMapNamespace) 设置命名空间
 * @method string getNamePattern() 获取模糊匹配的名称
 * @method void setNamePattern(string $NamePattern) 设置模糊匹配的名称
 * @method FieldSort getSort() 获取Sort.Fileld填写CreateTime Sort.Order(ASC|DESC) 默认ASC
 * @method void setSort(FieldSort $Sort) 设置Sort.Fileld填写CreateTime Sort.Order(ASC|DESC) 默认ASC
 */
class DescribeConfigMapsRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitID;

    /**
     * @var integer 翻页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页大小(最大100)
     */
    public $Limit;

    /**
     * @var string 命名空间
     */
    public $ConfigMapNamespace;

    /**
     * @var string 模糊匹配的名称
     */
    public $NamePattern;

    /**
     * @var FieldSort Sort.Fileld填写CreateTime Sort.Order(ASC|DESC) 默认ASC
     */
    public $Sort;

    /**
     * @param integer $EdgeUnitID 单元ID
     * @param integer $Offset 翻页偏移量
     * @param integer $Limit 每页大小(最大100)
     * @param string $ConfigMapNamespace 命名空间
     * @param string $NamePattern 模糊匹配的名称
     * @param FieldSort $Sort Sort.Fileld填写CreateTime Sort.Order(ASC|DESC) 默认ASC
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
        if (array_key_exists("EdgeUnitID",$param) and $param["EdgeUnitID"] !== null) {
            $this->EdgeUnitID = $param["EdgeUnitID"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConfigMapNamespace",$param) and $param["ConfigMapNamespace"] !== null) {
            $this->ConfigMapNamespace = $param["ConfigMapNamespace"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new FieldSort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
