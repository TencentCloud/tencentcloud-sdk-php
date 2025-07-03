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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getStartTime() 获取开始时间，格式为："2017-07-12 10:29:20"。
 * @method void setStartTime(string $StartTime) 设置开始时间，格式为："2017-07-12 10:29:20"。
 * @method string getEndTime() 获取结束时间，格式为："2017-07-12 10:29:20"。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式为："2017-07-12 10:29:20"。
 * @method string getOrder() 获取排序方式。支持值包括："ASC" - 升序，"DESC" - 降序。
 * @method void setOrder(string $Order) 设置排序方式。支持值包括："ASC" - 升序，"DESC" - 降序。
 * @method string getOrderBy() 获取排序字段。支持值包括：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
 * @method void setOrderBy(string $OrderBy) 设置排序字段。支持值包括：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
 * @method AuditLogFilter getFilter() 获取已废弃。
 * @method void setFilter(AuditLogFilter $Filter) 设置已废弃。
 * @method integer getLimit() 获取分页参数，单次返回的数据条数。默认值为100，最大值为100。
 * @method void setLimit(integer $Limit) 设置分页参数，单次返回的数据条数。默认值为100，最大值为100。
 * @method integer getOffset() 获取分页偏移量。
说明：Limit 和 Offset 的取值之和需小于等于65536。
 * @method void setOffset(integer $Offset) 设置分页偏移量。
说明：Limit 和 Offset 的取值之和需小于等于65536。
 * @method array getLogFilter() 获取过滤条件。多个值之前是且的关系。
 * @method void setLogFilter(array $LogFilter) 设置过滤条件。多个值之前是且的关系。
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，格式为："2017-07-12 10:29:20"。
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式为："2017-07-12 10:29:20"。
     */
    public $EndTime;

    /**
     * @var string 排序方式。支持值包括："ASC" - 升序，"DESC" - 降序。
     */
    public $Order;

    /**
     * @var string 排序字段。支持值包括：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
     */
    public $OrderBy;

    /**
     * @var AuditLogFilter 已废弃。
     * @deprecated
     */
    public $Filter;

    /**
     * @var integer 分页参数，单次返回的数据条数。默认值为100，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量。
说明：Limit 和 Offset 的取值之和需小于等于65536。
     */
    public $Offset;

    /**
     * @var array 过滤条件。多个值之前是且的关系。
     */
    public $LogFilter;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $StartTime 开始时间，格式为："2017-07-12 10:29:20"。
     * @param string $EndTime 结束时间，格式为："2017-07-12 10:29:20"。
     * @param string $Order 排序方式。支持值包括："ASC" - 升序，"DESC" - 降序。
     * @param string $OrderBy 排序字段。支持值包括：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
     * @param AuditLogFilter $Filter 已废弃。
     * @param integer $Limit 分页参数，单次返回的数据条数。默认值为100，最大值为100。
     * @param integer $Offset 分页偏移量。
说明：Limit 和 Offset 的取值之和需小于等于65536。
     * @param array $LogFilter 过滤条件。多个值之前是且的关系。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
