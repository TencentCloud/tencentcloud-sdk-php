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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getStartTime() 获取<p>要检索日志的起始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>要检索日志的起始时间</p>
 * @method string getEndTime() 获取<p>要检索日志的结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>要检索日志的结束时间</p>
 * @method string getLogType() 获取<p>日志类型</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型</p>
 * @method array getLogFilter() 获取<p>过滤条件[type, Compare, Value]</p>
 * @method void setLogFilter(array $LogFilter) 设置<p>过滤条件[type, Compare, Value]</p>
 * @method integer getLimit() 获取<p>单页条数限制，取值1-100，默认100</p>
 * @method void setLimit(integer $Limit) 设置<p>单页条数限制，取值1-100，默认100</p>
 * @method integer getOffset() 获取<p>偏移量，大于0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，大于0</p>
 * @method string getOrder() 获取<p>排序，可选：ASC，DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序，可选：ASC，DESC</p>
 * @method string getOrderBy() 获取<p>排序条件，根据业务字段不同，可选排序字段不一样</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序条件，根据业务字段不同，可选排序字段不一样</p>
 */
class DescribeLogsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>要检索日志的起始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>要检索日志的结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>日志类型</p>
     */
    public $LogType;

    /**
     * @var array <p>过滤条件[type, Compare, Value]</p>
     */
    public $LogFilter;

    /**
     * @var integer <p>单页条数限制，取值1-100，默认100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，大于0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序，可选：ASC，DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序条件，根据业务字段不同，可选排序字段不一样</p>
     */
    public $OrderBy;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $StartTime <p>要检索日志的起始时间</p>
     * @param string $EndTime <p>要检索日志的结束时间</p>
     * @param string $LogType <p>日志类型</p>
     * @param array $LogFilter <p>过滤条件[type, Compare, Value]</p>
     * @param integer $Limit <p>单页条数限制，取值1-100，默认100</p>
     * @param integer $Offset <p>偏移量，大于0</p>
     * @param string $Order <p>排序，可选：ASC，DESC</p>
     * @param string $OrderBy <p>排序条件，根据业务字段不同，可选排序字段不一样</p>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
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
