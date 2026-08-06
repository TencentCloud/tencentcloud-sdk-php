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
 * @method integer getTaskId() 获取<p>按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。</p>
 * @method void setTaskId(integer $TaskId) 设置<p>按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。</p>
 * @method string getDBInstanceId() 获取<p>按照数据库实例ID进行查询。</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>按照数据库实例ID进行查询。</p>
 * @method string getMinStartTime() 获取<p>任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。</p>
 * @method void setMinStartTime(string $MinStartTime) 设置<p>任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。</p>
 * @method string getMaxStartTime() 获取<p>任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。</p>
 * @method void setMaxStartTime(string $MaxStartTime) 设置<p>任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。</p>
 * @method integer getLimit() 获取<p>每页显示数量，取值范围为1-100，默认为返回20条。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页显示数量，取值范围为1-100，默认为返回20条。</p>
 * @method integer getOffset() 获取<p>数据偏移量，从0开始。</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量，从0开始。</p>
 * @method string getOrderBy() 获取<p>排序字段，支持StartTime,EndTime，默认为StartTime。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段，支持StartTime,EndTime，默认为StartTime。</p>
 * @method string getOrderByType() 获取<p>排序方式，包括升序：asc，降序：desc，默认为desc。</p>
 * @method void setOrderByType(string $OrderByType) 设置<p>排序方式，包括升序：asc，降序：desc，默认为desc。</p>
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer <p>按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。</p>
     */
    public $TaskId;

    /**
     * @var string <p>按照数据库实例ID进行查询。</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。</p>
     */
    public $MinStartTime;

    /**
     * @var string <p>任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。</p>
     */
    public $MaxStartTime;

    /**
     * @var integer <p>每页显示数量，取值范围为1-100，默认为返回20条。</p>
     */
    public $Limit;

    /**
     * @var integer <p>数据偏移量，从0开始。</p>
     */
    public $Offset;

    /**
     * @var string <p>排序字段，支持StartTime,EndTime，默认为StartTime。</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方式，包括升序：asc，降序：desc，默认为desc。</p>
     */
    public $OrderByType;

    /**
     * @param integer $TaskId <p>按照任务ID进行查询。其余云API中返回的FlowId和TaskId等价。</p>
     * @param string $DBInstanceId <p>按照数据库实例ID进行查询。</p>
     * @param string $MinStartTime <p>任务的最早开始时间，形如2024-08-23 00:00:00,默认只展示180天内的数据。</p>
     * @param string $MaxStartTime <p>任务的最晚开始时间，形如2024-08-23 00:00:00，默认为当前时间。</p>
     * @param integer $Limit <p>每页显示数量，取值范围为1-100，默认为返回20条。</p>
     * @param integer $Offset <p>数据偏移量，从0开始。</p>
     * @param string $OrderBy <p>排序字段，支持StartTime,EndTime，默认为StartTime。</p>
     * @param string $OrderByType <p>排序方式，包括升序：asc，降序：desc，默认为desc。</p>
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
