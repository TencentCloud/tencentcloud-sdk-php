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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchCustomRuleList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取页尺寸

 * @method void setLimit(integer $Limit) 设置页尺寸

 * @method string getBy() 获取排序字段
"update_time"-更新时间、"expire_time"-过期时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间
 * @method void setBy(string $By) 设置排序字段
"update_time"-更新时间、"expire_time"-过期时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间
 * @method string getOrder() 获取排序类型
desc-降序、asc-升序
 * @method void setOrder(string $Order) 设置排序类型
desc-降序、asc-升序
 * @method string getDataType() 获取数据类型 "custom-rule"-自定义规则、"custom-white-rule"-精准白名单
 * @method void setDataType(string $DataType) 设置数据类型 "custom-rule"-自定义规则、"custom-white-rule"-精准白名单
 * @method array getFilters() 获取筛选列表
 * @method void setFilters(array $Filters) 设置筛选列表
 */
class DescribeBatchCustomRuleListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 页尺寸

     */
    public $Limit;

    /**
     * @var string 排序字段
"update_time"-更新时间、"expire_time"-过期时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间
     */
    public $By;

    /**
     * @var string 排序类型
desc-降序、asc-升序
     */
    public $Order;

    /**
     * @var string 数据类型 "custom-rule"-自定义规则、"custom-white-rule"-精准白名单
     */
    public $DataType;

    /**
     * @var array 筛选列表
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 页尺寸

     * @param string $By 排序字段
"update_time"-更新时间、"expire_time"-过期时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间
     * @param string $Order 排序类型
desc-降序、asc-升序
     * @param string $DataType 数据类型 "custom-rule"-自定义规则、"custom-white-rule"-精准白名单
     * @param array $Filters 筛选列表
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

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
