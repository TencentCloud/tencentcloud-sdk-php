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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getStartTime() 获取开始时间(建议开始到结束时间区间最大7天)。
 * @method void setStartTime(string $StartTime) 设置开始时间(建议开始到结束时间区间最大7天)。
 * @method string getEndTime() 获取结束时间(建议开始到结束时间区间最大7天）。
 * @method void setEndTime(string $EndTime) 设置结束时间(建议开始到结束时间区间最大7天）。
 * @method integer getLimit() 获取分页参数，单次返回的数据条数。默认值为100，最大值为100。
 * @method void setLimit(integer $Limit) 设置分页参数，单次返回的数据条数。默认值为100，最大值为100。
 * @method integer getOffset() 获取日志偏移量，最多支持偏移查询65535条日志。可填写范围：0 - 65535。
 * @method void setOffset(integer $Offset) 设置日志偏移量，最多支持偏移查询65535条日志。可填写范围：0 - 65535。
 * @method string getOrder() 获取排序方式。支持值包括："ASC" - 升序，"DESC" - 降序，默认降序排序。
 * @method void setOrder(string $Order) 设置排序方式。支持值包括："ASC" - 升序，"DESC" - 降序，默认降序排序。
 * @method string getOrderBy() 获取排序字段。支持值包括(默认按照时间戳排序)：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
 * @method void setOrderBy(string $OrderBy) 设置排序字段。支持值包括(默认按照时间戳排序)：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
 * @method array getLogFilter() 获取过滤条件。多个值之前是且的关系。
 * @method void setLogFilter(array $LogFilter) 设置过滤条件。多个值之前是且的关系。
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 开始时间(建议开始到结束时间区间最大7天)。
     */
    public $StartTime;

    /**
     * @var string 结束时间(建议开始到结束时间区间最大7天）。
     */
    public $EndTime;

    /**
     * @var integer 分页参数，单次返回的数据条数。默认值为100，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 日志偏移量，最多支持偏移查询65535条日志。可填写范围：0 - 65535。
     */
    public $Offset;

    /**
     * @var string 排序方式。支持值包括："ASC" - 升序，"DESC" - 降序，默认降序排序。
     */
    public $Order;

    /**
     * @var string 排序字段。支持值包括(默认按照时间戳排序)：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
     */
    public $OrderBy;

    /**
     * @var array 过滤条件。多个值之前是且的关系。
     */
    public $LogFilter;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $StartTime 开始时间(建议开始到结束时间区间最大7天)。
     * @param string $EndTime 结束时间(建议开始到结束时间区间最大7天）。
     * @param integer $Limit 分页参数，单次返回的数据条数。默认值为100，最大值为100。
     * @param integer $Offset 日志偏移量，最多支持偏移查询65535条日志。可填写范围：0 - 65535。
     * @param string $Order 排序方式。支持值包括："ASC" - 升序，"DESC" - 降序，默认降序排序。
     * @param string $OrderBy 排序字段。支持值包括(默认按照时间戳排序)：
"timestamp" - 时间戳；
"affectRows" - 影响行数；
"execTime" - 执行时间。
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilters();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
