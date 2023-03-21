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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogBackups请求参数结构体
 *
 * @method string getMinFinishTime() 获取备份的最小结束时间，形如2018-01-01 00:00:00。默认为7天前。
 * @method void setMinFinishTime(string $MinFinishTime) 设置备份的最小结束时间，形如2018-01-01 00:00:00。默认为7天前。
 * @method string getMaxFinishTime() 获取备份的最大结束时间，形如2018-01-01 00:00:00。默认为当前时间。
 * @method void setMaxFinishTime(string $MaxFinishTime) 设置备份的最大结束时间，形如2018-01-01 00:00:00。默认为当前时间。
 * @method array getFilters() 获取按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string。
db-instance-name：按照实例名过滤，类型为string。
db-instance-ip：按照实例私有网络IP地址过滤，类型为string。
 * @method void setFilters(array $Filters) 设置按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string。
db-instance-name：按照实例名过滤，类型为string。
db-instance-ip：按照实例私有网络IP地址过滤，类型为string。
 * @method integer getLimit() 获取每页显示数量，取值范围为1-100，默认为返回10条。
 * @method void setLimit(integer $Limit) 设置每页显示数量，取值范围为1-100，默认为返回10条。
 * @method integer getOffset() 获取数据偏移量，从0开始。
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始。
 * @method string getOrderBy() 获取排序字段，支持StartTime,FinishTime,Size。
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持StartTime,FinishTime,Size。
 * @method string getOrderByType() 获取排序方式，包括升序：asc，降序：desc。
 * @method void setOrderByType(string $OrderByType) 设置排序方式，包括升序：asc，降序：desc。
 */
class DescribeLogBackupsRequest extends AbstractModel
{
    /**
     * @var string 备份的最小结束时间，形如2018-01-01 00:00:00。默认为7天前。
     */
    public $MinFinishTime;

    /**
     * @var string 备份的最大结束时间，形如2018-01-01 00:00:00。默认为当前时间。
     */
    public $MaxFinishTime;

    /**
     * @var array 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string。
db-instance-name：按照实例名过滤，类型为string。
db-instance-ip：按照实例私有网络IP地址过滤，类型为string。
     */
    public $Filters;

    /**
     * @var integer 每页显示数量，取值范围为1-100，默认为返回10条。
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始。
     */
    public $Offset;

    /**
     * @var string 排序字段，支持StartTime,FinishTime,Size。
     */
    public $OrderBy;

    /**
     * @var string 排序方式，包括升序：asc，降序：desc。
     */
    public $OrderByType;

    /**
     * @param string $MinFinishTime 备份的最小结束时间，形如2018-01-01 00:00:00。默认为7天前。
     * @param string $MaxFinishTime 备份的最大结束时间，形如2018-01-01 00:00:00。默认为当前时间。
     * @param array $Filters 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string。
db-instance-name：按照实例名过滤，类型为string。
db-instance-ip：按照实例私有网络IP地址过滤，类型为string。
     * @param integer $Limit 每页显示数量，取值范围为1-100，默认为返回10条。
     * @param integer $Offset 数据偏移量，从0开始。
     * @param string $OrderBy 排序字段，支持StartTime,FinishTime,Size。
     * @param string $OrderByType 排序方式，包括升序：asc，降序：desc。
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
        if (array_key_exists("MinFinishTime",$param) and $param["MinFinishTime"] !== null) {
            $this->MinFinishTime = $param["MinFinishTime"];
        }

        if (array_key_exists("MaxFinishTime",$param) and $param["MaxFinishTime"] !== null) {
            $this->MaxFinishTime = $param["MaxFinishTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
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
