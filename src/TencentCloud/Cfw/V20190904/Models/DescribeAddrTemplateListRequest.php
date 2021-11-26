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
 * DescribeAddrTemplateList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，分页用
 * @method void setOffset(integer $Offset) 设置偏移量，分页用
 * @method integer getLimit() 获取条数，分页用
 * @method void setLimit(integer $Limit) 设置条数，分页用
 * @method string getBy() 获取排序字段，取值 'UpdateTime' | 'RulesNum'
 * @method void setBy(string $By) 设置排序字段，取值 'UpdateTime' | 'RulesNum'
 * @method string getOrder() 获取排序，取值 'asc'|'desc'
 * @method void setOrder(string $Order) 设置排序，取值 'asc'|'desc'
 * @method string getSearchValue() 获取搜索值
 * @method void setSearchValue(string $SearchValue) 设置搜索值
 */
class DescribeAddrTemplateListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，分页用
     */
    public $Offset;

    /**
     * @var integer 条数，分页用
     */
    public $Limit;

    /**
     * @var string 排序字段，取值 'UpdateTime' | 'RulesNum'
     */
    public $By;

    /**
     * @var string 排序，取值 'asc'|'desc'
     */
    public $Order;

    /**
     * @var string 搜索值
     */
    public $SearchValue;

    /**
     * @param integer $Offset 偏移量，分页用
     * @param integer $Limit 条数，分页用
     * @param string $By 排序字段，取值 'UpdateTime' | 'RulesNum'
     * @param string $Order 排序，取值 'asc'|'desc'
     * @param string $SearchValue 搜索值
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }
    }
}
