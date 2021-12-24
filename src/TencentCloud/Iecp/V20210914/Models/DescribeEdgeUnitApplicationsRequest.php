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
 * DescribeEdgeUnitApplications请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置单元ID
 * @method integer getOffset() 获取翻页偏移
 * @method void setOffset(integer $Offset) 设置翻页偏移
 * @method integer getLimit() 获取翻页大小
 * @method void setLimit(integer $Limit) 设置翻页大小
 * @method string getNamePattern() 获取名称模糊匹配
 * @method void setNamePattern(string $NamePattern) 设置名称模糊匹配
 * @method array getSort() 获取字段排序 (Sort.Filed为:StartTime）
 * @method void setSort(array $Sort) 设置字段排序 (Sort.Filed为:StartTime）
 * @method string getNamespace() 获取命名空间过滤
 * @method void setNamespace(string $Namespace) 设置命名空间过滤
 */
class DescribeEdgeUnitApplicationsRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer 翻页偏移
     */
    public $Offset;

    /**
     * @var integer 翻页大小
     */
    public $Limit;

    /**
     * @var string 名称模糊匹配
     */
    public $NamePattern;

    /**
     * @var array 字段排序 (Sort.Filed为:StartTime）
     */
    public $Sort;

    /**
     * @var string 命名空间过滤
     */
    public $Namespace;

    /**
     * @param integer $EdgeUnitId 单元ID
     * @param integer $Offset 翻页偏移
     * @param integer $Limit 翻页大小
     * @param string $NamePattern 名称模糊匹配
     * @param array $Sort 字段排序 (Sort.Filed为:StartTime）
     * @param string $Namespace 命名空间过滤
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = [];
            foreach ($param["Sort"] as $key => $value){
                $obj = new FieldSort();
                $obj->deserialize($value);
                array_push($this->Sort, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
