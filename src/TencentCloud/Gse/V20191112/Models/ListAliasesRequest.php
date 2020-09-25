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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAliases请求参数结构体
 *
 * @method string getName() 获取名字，长度不小于1字符不超过1024字符
 * @method void setName(string $Name) 设置名字，长度不小于1字符不超过1024字符
 * @method string getRoutingStrategyType() 获取路由策略类型，有效值SIMPLE|TERMINAL
 * @method void setRoutingStrategyType(string $RoutingStrategyType) 设置路由策略类型，有效值SIMPLE|TERMINAL
 * @method integer getLimit() 获取要返回的最大结果数，最小值1
 * @method void setLimit(integer $Limit) 设置要返回的最大结果数，最小值1
 * @method integer getOffset() 获取偏移，默认0
 * @method void setOffset(integer $Offset) 设置偏移，默认0
 * @method string getOrderBy() 获取排序字段，例如CreationTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，例如CreationTime
 * @method string getOrderWay() 获取排序方式，有效值asc|desc
 * @method void setOrderWay(string $OrderWay) 设置排序方式，有效值asc|desc
 */
class ListAliasesRequest extends AbstractModel
{
    /**
     * @var string 名字，长度不小于1字符不超过1024字符
     */
    public $Name;

    /**
     * @var string 路由策略类型，有效值SIMPLE|TERMINAL
     */
    public $RoutingStrategyType;

    /**
     * @var integer 要返回的最大结果数，最小值1
     */
    public $Limit;

    /**
     * @var integer 偏移，默认0
     */
    public $Offset;

    /**
     * @var string 排序字段，例如CreationTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，有效值asc|desc
     */
    public $OrderWay;

    /**
     * @param string $Name 名字，长度不小于1字符不超过1024字符
     * @param string $RoutingStrategyType 路由策略类型，有效值SIMPLE|TERMINAL
     * @param integer $Limit 要返回的最大结果数，最小值1
     * @param integer $Offset 偏移，默认0
     * @param string $OrderBy 排序字段，例如CreationTime
     * @param string $OrderWay 排序方式，有效值asc|desc
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RoutingStrategyType",$param) and $param["RoutingStrategyType"] !== null) {
            $this->RoutingStrategyType = $param["RoutingStrategyType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderWay",$param) and $param["OrderWay"] !== null) {
            $this->OrderWay = $param["OrderWay"];
        }
    }
}
