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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表查询接口采用新filter 接口，直接传给后台供后台查询过滤
 *
 * @method integer getLimit() 获取查询数量限制
 * @method void setLimit(integer $Limit) 设置查询数量限制
 * @method integer getOffset() 获取查询偏移位置
 * @method void setOffset(integer $Offset) 设置查询偏移位置
 * @method string getOrder() 获取需排序的字段
 * @method void setOrder(string $Order) 设置需排序的字段
 * @method string getBy() 获取排序采用升序还是降序 升:asc 降 desc
 * @method void setBy(string $By) 设置排序采用升序还是降序 升:asc 降 desc
 * @method array getFilters() 获取过滤的列及内容
 * @method void setFilters(array $Filters) 设置过滤的列及内容
 * @method string getStartTime() 获取可填无， 日志使用查询时间
 * @method void setStartTime(string $StartTime) 设置可填无， 日志使用查询时间
 * @method string getEndTime() 获取可填无， 日志使用查询时间
 * @method void setEndTime(string $EndTime) 设置可填无， 日志使用查询时间
 */
class Filter extends AbstractModel
{
    /**
     * @var integer 查询数量限制
     */
    public $Limit;

    /**
     * @var integer 查询偏移位置
     */
    public $Offset;

    /**
     * @var string 需排序的字段
     */
    public $Order;

    /**
     * @var string 排序采用升序还是降序 升:asc 降 desc
     */
    public $By;

    /**
     * @var array 过滤的列及内容
     */
    public $Filters;

    /**
     * @var string 可填无， 日志使用查询时间
     */
    public $StartTime;

    /**
     * @var string 可填无， 日志使用查询时间
     */
    public $EndTime;

    /**
     * @param integer $Limit 查询数量限制
     * @param integer $Offset 查询偏移位置
     * @param string $Order 需排序的字段
     * @param string $By 排序采用升序还是降序 升:asc 降 desc
     * @param array $Filters 过滤的列及内容
     * @param string $StartTime 可填无， 日志使用查询时间
     * @param string $EndTime 可填无， 日志使用查询时间
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new WhereFilter();
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
    }
}
