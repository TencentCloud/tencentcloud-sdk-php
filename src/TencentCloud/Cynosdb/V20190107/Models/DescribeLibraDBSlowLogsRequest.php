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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraDBSlowLogs请求参数结构体
 *
 * @method string getInstanceId() 获取只读分析引擎实例 ID
 * @method void setInstanceId(string $InstanceId) 设置只读分析引擎实例 ID
 * @method integer getStartTime() 获取开始时间,1753171200。
 * @method void setStartTime(integer $StartTime) 设置开始时间,1753171200。
 * @method integer getEndTime() 获取结束时间,1753171200。
 * @method void setEndTime(integer $EndTime) 设置结束时间,1753171200。
 * @method string getLimit() 获取日志单页条数限制:0-200。
 * @method void setLimit(string $Limit) 设置日志单页条数限制:0-200。
 * @method string getOffset() 获取日志分页，大于0。
 * @method void setOffset(string $Offset) 设置日志分页，大于0。
 * @method string getOrder() 获取日志排序方式，DESC-降序，ASC-升序。
 * @method void setOrder(string $Order) 设置日志排序方式，DESC-降序，ASC-升序。
 * @method string getOrderBy() 获取日志排序条件。
 * @method void setOrderBy(string $OrderBy) 设置日志排序条件。
 * @method array getLogFilter() 获取过滤条件。
 * @method void setLogFilter(array $LogFilter) 设置过滤条件。
 */
class DescribeLibraDBSlowLogsRequest extends AbstractModel
{
    /**
     * @var string 只读分析引擎实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 开始时间,1753171200。
     */
    public $StartTime;

    /**
     * @var integer 结束时间,1753171200。
     */
    public $EndTime;

    /**
     * @var string 日志单页条数限制:0-200。
     */
    public $Limit;

    /**
     * @var string 日志分页，大于0。
     */
    public $Offset;

    /**
     * @var string 日志排序方式，DESC-降序，ASC-升序。
     */
    public $Order;

    /**
     * @var string 日志排序条件。
     */
    public $OrderBy;

    /**
     * @var array 过滤条件。
     */
    public $LogFilter;

    /**
     * @param string $InstanceId 只读分析引擎实例 ID
     * @param integer $StartTime 开始时间,1753171200。
     * @param integer $EndTime 结束时间,1753171200。
     * @param string $Limit 日志单页条数限制:0-200。
     * @param string $Offset 日志分页，大于0。
     * @param string $Order 日志排序方式，DESC-降序，ASC-升序。
     * @param string $OrderBy 日志排序条件。
     * @param array $LogFilter 过滤条件。
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
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
