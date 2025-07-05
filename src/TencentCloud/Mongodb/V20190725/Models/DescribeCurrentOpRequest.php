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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurrentOp请求参数结构体
 *
 * @method string getInstanceId() 获取指定要查询的实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定要查询的实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method string getNs() 获取操作所属的命名空间 namespace，格式为 db.collection。
 * @method void setNs(string $Ns) 设置操作所属的命名空间 namespace，格式为 db.collection。
 * @method integer getMillisecondRunning() 获取设置查询筛选条件为操作任务已经执行的时间。
- 默认值为0，取值范围为[0, 3600000]，单位：毫秒。
- 结果将返回超过设置时间的操作。
 * @method void setMillisecondRunning(integer $MillisecondRunning) 设置设置查询筛选条件为操作任务已经执行的时间。
- 默认值为0，取值范围为[0, 3600000]，单位：毫秒。
- 结果将返回超过设置时间的操作。
 * @method string getOp() 获取设置查询筛选条件为操作任务类型。取值包括：none、update、insert，query、command、getmore、remove 和 killcursors。
 * @method void setOp(string $Op) 设置设置查询筛选条件为操作任务类型。取值包括：none、update、insert，query、command、getmore、remove 和 killcursors。
 * @method string getReplicaSetName() 获取筛选条件，分片名称。
 * @method void setReplicaSetName(string $ReplicaSetName) 设置筛选条件，分片名称。
 * @method string getState() 获取设置查询筛选条件为节点角色。
- primary：主节点。
- secondary：从节点。
 * @method void setState(string $State) 设置设置查询筛选条件为节点角色。
- primary：主节点。
- secondary：从节点。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为100，取值范围为[0,100]
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为100，取值范围为[0,100]
 * @method integer getOffset() 获取偏移量，默认值为0，取值范围为[0,10000]
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0，取值范围为[0,10000]
 * @method string getOrderBy() 获取返回结果集排序的字段，目前支持："MicrosecsRunning"/"microsecsrunning"，默认为升序排序
 * @method void setOrderBy(string $OrderBy) 设置返回结果集排序的字段，目前支持："MicrosecsRunning"/"microsecsrunning"，默认为升序排序
 * @method string getOrderByType() 获取返回结果集排序方式，可能的取值："ASC"/"asc"或"DESC"/"desc"
 * @method void setOrderByType(string $OrderByType) 设置返回结果集排序方式，可能的取值："ASC"/"asc"或"DESC"/"desc"
 */
class DescribeCurrentOpRequest extends AbstractModel
{
    /**
     * @var string 指定要查询的实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 操作所属的命名空间 namespace，格式为 db.collection。
     */
    public $Ns;

    /**
     * @var integer 设置查询筛选条件为操作任务已经执行的时间。
- 默认值为0，取值范围为[0, 3600000]，单位：毫秒。
- 结果将返回超过设置时间的操作。
     */
    public $MillisecondRunning;

    /**
     * @var string 设置查询筛选条件为操作任务类型。取值包括：none、update、insert，query、command、getmore、remove 和 killcursors。
     */
    public $Op;

    /**
     * @var string 筛选条件，分片名称。
     */
    public $ReplicaSetName;

    /**
     * @var string 设置查询筛选条件为节点角色。
- primary：主节点。
- secondary：从节点。
     */
    public $State;

    /**
     * @var integer 单次请求返回的数量，默认值为100，取值范围为[0,100]
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为0，取值范围为[0,10000]
     */
    public $Offset;

    /**
     * @var string 返回结果集排序的字段，目前支持："MicrosecsRunning"/"microsecsrunning"，默认为升序排序
     */
    public $OrderBy;

    /**
     * @var string 返回结果集排序方式，可能的取值："ASC"/"asc"或"DESC"/"desc"
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 指定要查询的实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param string $Ns 操作所属的命名空间 namespace，格式为 db.collection。
     * @param integer $MillisecondRunning 设置查询筛选条件为操作任务已经执行的时间。
- 默认值为0，取值范围为[0, 3600000]，单位：毫秒。
- 结果将返回超过设置时间的操作。
     * @param string $Op 设置查询筛选条件为操作任务类型。取值包括：none、update、insert，query、command、getmore、remove 和 killcursors。
     * @param string $ReplicaSetName 筛选条件，分片名称。
     * @param string $State 设置查询筛选条件为节点角色。
- primary：主节点。
- secondary：从节点。
     * @param integer $Limit 单次请求返回的数量，默认值为100，取值范围为[0,100]
     * @param integer $Offset 偏移量，默认值为0，取值范围为[0,10000]
     * @param string $OrderBy 返回结果集排序的字段，目前支持："MicrosecsRunning"/"microsecsrunning"，默认为升序排序
     * @param string $OrderByType 返回结果集排序方式，可能的取值："ASC"/"asc"或"DESC"/"desc"
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

        if (array_key_exists("Ns",$param) and $param["Ns"] !== null) {
            $this->Ns = $param["Ns"];
        }

        if (array_key_exists("MillisecondRunning",$param) and $param["MillisecondRunning"] !== null) {
            $this->MillisecondRunning = $param["MillisecondRunning"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
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
