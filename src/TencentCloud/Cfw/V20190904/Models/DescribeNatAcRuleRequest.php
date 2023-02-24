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
 * DescribeNatAcRule请求参数结构体
 *
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method string getIndex() 获取需要查询的索引，特定场景使用，可不填
 * @method void setIndex(string $Index) 设置需要查询的索引，特定场景使用，可不填
 * @method array getFilters() 获取过滤条件组合
 * @method void setFilters(array $Filters) 设置过滤条件组合
 * @method string getStartTime() 获取检索的起始时间，可不传
 * @method void setStartTime(string $StartTime) 设置检索的起始时间，可不传
 * @method string getEndTime() 获取检索的截止时间，可不传
 * @method void setEndTime(string $EndTime) 设置检索的截止时间，可不传
 * @method string getOrder() 获取desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值
 * @method void setOrder(string $Order) 设置desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值
 * @method string getBy() 获取排序所用到的字段
 * @method void setBy(string $By) 设置排序所用到的字段
 */
class DescribeNatAcRuleRequest extends AbstractModel
{
    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var string 需要查询的索引，特定场景使用，可不填
     */
    public $Index;

    /**
     * @var array 过滤条件组合
     */
    public $Filters;

    /**
     * @var string 检索的起始时间，可不传
     */
    public $StartTime;

    /**
     * @var string 检索的截止时间，可不传
     */
    public $EndTime;

    /**
     * @var string desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值
     */
    public $Order;

    /**
     * @var string 排序所用到的字段
     */
    public $By;

    /**
     * @param integer $Limit 每页条数
     * @param integer $Offset 偏移值
     * @param string $Index 需要查询的索引，特定场景使用，可不填
     * @param array $Filters 过滤条件组合
     * @param string $StartTime 检索的起始时间，可不传
     * @param string $EndTime 检索的截止时间，可不传
     * @param string $Order desc：降序；asc：升序。根据By字段的值进行排序，这里传参的话则By也必须有值
     * @param string $By 排序所用到的字段
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

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
