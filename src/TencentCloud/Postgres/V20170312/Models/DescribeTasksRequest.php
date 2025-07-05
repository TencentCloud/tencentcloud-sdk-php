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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method integer getTaskId() 获取按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。
 * @method void setTaskId(integer $TaskId) 设置按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。
 * @method string getDBInstanceId() 获取按照数据库实例ID进行查询。
 * @method void setDBInstanceId(string $DBInstanceId) 设置按照数据库实例ID进行查询。
 * @method string getMinStartTime() 获取任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。
 * @method void setMinStartTime(string $MinStartTime) 设置任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。
 * @method string getMaxStartTime() 获取任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。
 * @method void setMaxStartTime(string $MaxStartTime) 设置任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。
 * @method integer getLimit() 获取每页显示数量，取值范围为1-100，默认为返回20条。
 * @method void setLimit(integer $Limit) 设置每页显示数量，取值范围为1-100，默认为返回20条。
 * @method integer getOffset() 获取数据偏移量，从0开始。
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始。
 * @method string getOrderBy() 获取排序字段，支持StartTime,EndTime，默认为StartTime。
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持StartTime,EndTime，默认为StartTime。
 * @method string getOrderByType() 获取排序方式，包括升序：asc，降序：desc，默认为desc。
 * @method void setOrderByType(string $OrderByType) 设置排序方式，包括升序：asc，降序：desc，默认为desc。
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer 按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。
     */
    public $TaskId;

    /**
     * @var string 按照数据库实例ID进行查询。
     */
    public $DBInstanceId;

    /**
     * @var string 任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。
     */
    public $MinStartTime;

    /**
     * @var string 任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。
     */
    public $MaxStartTime;

    /**
     * @var integer 每页显示数量，取值范围为1-100，默认为返回20条。
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始。
     */
    public $Offset;

    /**
     * @var string 排序字段，支持StartTime,EndTime，默认为StartTime。
     */
    public $OrderBy;

    /**
     * @var string 排序方式，包括升序：asc，降序：desc，默认为desc。
     */
    public $OrderByType;

    /**
     * @param integer $TaskId 按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。
     * @param string $DBInstanceId 按照数据库实例ID进行查询。
     * @param string $MinStartTime 任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。
     * @param string $MaxStartTime 任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。
     * @param integer $Limit 每页显示数量，取值范围为1-100，默认为返回20条。
     * @param integer $Offset 数据偏移量，从0开始。
     * @param string $OrderBy 排序字段，支持StartTime,EndTime，默认为StartTime。
     * @param string $OrderByType 排序方式，包括升序：asc，降序：desc，默认为desc。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MinStartTime",$param) and $param["MinStartTime"] !== null) {
            $this->MinStartTime = $param["MinStartTime"];
        }

        if (array_key_exists("MaxStartTime",$param) and $param["MaxStartTime"] !== null) {
            $this->MaxStartTime = $param["MaxStartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
