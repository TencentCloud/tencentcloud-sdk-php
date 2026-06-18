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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getStartTime() 获取要检索日志的起始时间
 * @method void setStartTime(string $StartTime) 设置要检索日志的起始时间
 * @method string getEndTime() 获取要检索日志的结束时间
 * @method void setEndTime(string $EndTime) 设置要检索日志的结束时间
 * @method array getLogFilter() 获取过滤条件
 * @method void setLogFilter(array $LogFilter) 设置过滤条件
 * @method integer getLimit() 获取单页条数限制
 * @method void setLimit(integer $Limit) 设置单页条数限制
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getOrder() 获取排序，可选：ASC，DESC
 * @method void setOrder(string $Order) 设置排序，可选：ASC，DESC
 * @method string getOrderBy() 获取排序条件，根据业务字段不同，可选排序字段不一样
 * @method void setOrderBy(string $OrderBy) 设置排序条件，根据业务字段不同，可选排序字段不一样
 */
class DescribeSlowLogsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 要检索日志的起始时间
     */
    public $StartTime;

    /**
     * @var string 要检索日志的结束时间
     */
    public $EndTime;

    /**
     * @var array 过滤条件
     */
    public $LogFilter;

    /**
     * @var integer 单页条数限制
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 排序，可选：ASC，DESC
     */
    public $Order;

    /**
     * @var string 排序条件，根据业务字段不同，可选排序字段不一样
     */
    public $OrderBy;

    /**
     * @param string $InstanceId 实例ID
     * @param string $StartTime 要检索日志的起始时间
     * @param string $EndTime 要检索日志的结束时间
     * @param array $LogFilter 过滤条件
     * @param integer $Limit 单页条数限制
     * @param integer $Offset 偏移量
     * @param string $Order 排序，可选：ASC，DESC
     * @param string $OrderBy 排序条件，根据业务字段不同，可选排序字段不一样
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

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
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
    }
}
