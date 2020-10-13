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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSwitchLists请求参数结构体
 *
 * @method integer getStatus() 获取防火墙状态
 * @method void setStatus(integer $Status) 设置防火墙状态
 * @method string getType() 获取资产类型
 * @method void setType(string $Type) 设置资产类型
 * @method string getArea() 获取地域
 * @method void setArea(string $Area) 设置地域
 * @method string getSearchValue() 获取搜索值
 * @method void setSearchValue(string $SearchValue) 设置搜索值
 * @method integer getLimit() 获取条数
 * @method void setLimit(integer $Limit) 设置条数
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method string getOrder() 获取排序，desc：降序，asc：升序
 * @method void setOrder(string $Order) 设置排序，desc：降序，asc：升序
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 */
class DescribeSwitchListsRequest extends AbstractModel
{
    /**
     * @var integer 防火墙状态
     */
    public $Status;

    /**
     * @var string 资产类型
     */
    public $Type;

    /**
     * @var string 地域
     */
    public $Area;

    /**
     * @var string 搜索值
     */
    public $SearchValue;

    /**
     * @var integer 条数
     */
    public $Limit;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var string 排序，desc：降序，asc：升序
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @param integer $Status 防火墙状态
     * @param string $Type 资产类型
     * @param string $Area 地域
     * @param string $SearchValue 搜索值
     * @param integer $Limit 条数
     * @param integer $Offset 偏移值
     * @param string $Order 排序，desc：降序，asc：升序
     * @param string $By 排序字段
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
