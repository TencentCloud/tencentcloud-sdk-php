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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogDetailsV2请求参数结构体
 *
 * @method string getOrderBy() 获取排序方式 desc asc
 * @method void setOrderBy(string $OrderBy) 设置排序方式 desc asc
 * @method integer getStartTime() 获取开始时间（必填）格式为时间戳 毫秒
 * @method void setStartTime(integer $StartTime) 设置开始时间（必填）格式为时间戳 毫秒
 * @method integer getLimit() 获取单次查询返回的原始日志条数，最大值为100（必填）
 * @method void setLimit(integer $Limit) 设置单次查询返回的原始日志条数，最大值为100（必填）
 * @method string getFilter() 获取查询的相关参数
 * @method void setFilter(string $Filter) 设置查询的相关参数
 * @method integer getEndTime() 获取结束时间（必填）格式为时间戳 毫秒
 * @method void setEndTime(integer $EndTime) 设置结束时间（必填）格式为时间戳 毫秒
 * @method integer getID() 获取项目ID（必填）
 * @method void setID(integer $ID) 设置项目ID（必填）
 * @method integer getLastTime() 获取上次查询的最后一个日志的时间戳
 * @method void setLastTime(integer $LastTime) 设置上次查询的最后一个日志的时间戳
 * @method integer getLastRowId() 获取上次查询的最后一个日志的rowId
 * @method void setLastRowId(integer $LastRowId) 设置上次查询的最后一个日志的rowId
 */
class DescribeRumLogDetailsV2Request extends AbstractModel
{
    /**
     * @var string 排序方式 desc asc
     */
    public $OrderBy;

    /**
     * @var integer 开始时间（必填）格式为时间戳 毫秒
     */
    public $StartTime;

    /**
     * @var integer 单次查询返回的原始日志条数，最大值为100（必填）
     */
    public $Limit;

    /**
     * @var string 查询的相关参数
     */
    public $Filter;

    /**
     * @var integer 结束时间（必填）格式为时间戳 毫秒
     */
    public $EndTime;

    /**
     * @var integer 项目ID（必填）
     */
    public $ID;

    /**
     * @var integer 上次查询的最后一个日志的时间戳
     */
    public $LastTime;

    /**
     * @var integer 上次查询的最后一个日志的rowId
     */
    public $LastRowId;

    /**
     * @param string $OrderBy 排序方式 desc asc
     * @param integer $StartTime 开始时间（必填）格式为时间戳 毫秒
     * @param integer $Limit 单次查询返回的原始日志条数，最大值为100（必填）
     * @param string $Filter 查询的相关参数
     * @param integer $EndTime 结束时间（必填）格式为时间戳 毫秒
     * @param integer $ID 项目ID（必填）
     * @param integer $LastTime 上次查询的最后一个日志的时间戳
     * @param integer $LastRowId 上次查询的最后一个日志的rowId
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
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("LastRowId",$param) and $param["LastRowId"] !== null) {
            $this->LastRowId = $param["LastRowId"];
        }
    }
}
