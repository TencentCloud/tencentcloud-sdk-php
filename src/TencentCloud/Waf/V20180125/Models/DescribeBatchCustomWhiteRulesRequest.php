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
 * DescribeBatchCustomWhiteRules请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取页尺寸，默认为10
 * @method void setLimit(integer $Limit) 设置页尺寸，默认为10
 * @method string getBy() 获取排序字段"modify_time"-更新时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间，默认为update_time
 * @method void setBy(string $By) 设置排序字段"modify_time"-更新时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间，默认为update_time
 * @method string getOrder() 获取排序类型desc-降序、asc-升序，默认为desc
 * @method void setOrder(string $Order) 设置排序类型desc-降序、asc-升序，默认为desc
 * @method array getFilters() 获取筛选列表，支持按照 ID：规则RuleId、Domain：生效的域名、Name：规则名称来筛选、ValidStatus：生效状态、Status：开关状态、TimerType：生效方式
 * @method void setFilters(array $Filters) 设置筛选列表，支持按照 ID：规则RuleId、Domain：生效的域名、Name：规则名称来筛选、ValidStatus：生效状态、Status：开关状态、TimerType：生效方式
 */
class DescribeBatchCustomWhiteRulesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 页尺寸，默认为10
     */
    public $Limit;

    /**
     * @var string 排序字段"modify_time"-更新时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间，默认为update_time
     */
    public $By;

    /**
     * @var string 排序类型desc-降序、asc-升序，默认为desc
     */
    public $Order;

    /**
     * @var array 筛选列表，支持按照 ID：规则RuleId、Domain：生效的域名、Name：规则名称来筛选、ValidStatus：生效状态、Status：开关状态、TimerType：生效方式
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 页尺寸，默认为10
     * @param string $By 排序字段"modify_time"-更新时间、"sort_id"-优先级、"id"-规则Id、"create_time"-创建时间，默认为update_time
     * @param string $Order 排序类型desc-降序、asc-升序，默认为desc
     * @param array $Filters 筛选列表，支持按照 ID：规则RuleId、Domain：生效的域名、Name：规则名称来筛选、ValidStatus：生效状态、Status：开关状态、TimerType：生效方式
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
