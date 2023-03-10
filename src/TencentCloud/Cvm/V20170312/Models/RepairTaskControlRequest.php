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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RepairTaskControl请求参数结构体
 *
 * @method string getProduct() 获取待授权任务实例对应的产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
 * @method void setProduct(string $Product) 设置待授权任务实例对应的产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
 * @method array getInstanceIds() 获取指定待操作的实例ID列表，仅允许对列表中的实例ID相关的维修任务发起授权。
 * @method void setInstanceIds(array $InstanceIds) 设置指定待操作的实例ID列表，仅允许对列表中的实例ID相关的维修任务发起授权。
 * @method string getTaskId() 获取维修任务ID。
 * @method void setTaskId(string $TaskId) 设置维修任务ID。
 * @method string getOperate() 获取操作类型，当前只支持传入`AuthorizeRepair`。
 * @method void setOperate(string $Operate) 设置操作类型，当前只支持传入`AuthorizeRepair`。
 * @method string getOrderAuthTime() 获取预约授权时间，形如`2023-01-01 12:00:00`。预约时间需晚于当前时间至少5分钟，且在48小时之内。
 * @method void setOrderAuthTime(string $OrderAuthTime) 设置预约授权时间，形如`2023-01-01 12:00:00`。预约时间需晚于当前时间至少5分钟，且在48小时之内。
 * @method string getTaskSubMethod() 获取附加的授权处理策略。
 * @method void setTaskSubMethod(string $TaskSubMethod) 设置附加的授权处理策略。
 */
class RepairTaskControlRequest extends AbstractModel
{
    /**
     * @var string 待授权任务实例对应的产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
     */
    public $Product;

    /**
     * @var array 指定待操作的实例ID列表，仅允许对列表中的实例ID相关的维修任务发起授权。
     */
    public $InstanceIds;

    /**
     * @var string 维修任务ID。
     */
    public $TaskId;

    /**
     * @var string 操作类型，当前只支持传入`AuthorizeRepair`。
     */
    public $Operate;

    /**
     * @var string 预约授权时间，形如`2023-01-01 12:00:00`。预约时间需晚于当前时间至少5分钟，且在48小时之内。
     */
    public $OrderAuthTime;

    /**
     * @var string 附加的授权处理策略。
     */
    public $TaskSubMethod;

    /**
     * @param string $Product 待授权任务实例对应的产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
     * @param array $InstanceIds 指定待操作的实例ID列表，仅允许对列表中的实例ID相关的维修任务发起授权。
     * @param string $TaskId 维修任务ID。
     * @param string $Operate 操作类型，当前只支持传入`AuthorizeRepair`。
     * @param string $OrderAuthTime 预约授权时间，形如`2023-01-01 12:00:00`。预约时间需晚于当前时间至少5分钟，且在48小时之内。
     * @param string $TaskSubMethod 附加的授权处理策略。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("OrderAuthTime",$param) and $param["OrderAuthTime"] !== null) {
            $this->OrderAuthTime = $param["OrderAuthTime"];
        }

        if (array_key_exists("TaskSubMethod",$param) and $param["TaskSubMethod"] !== null) {
            $this->TaskSubMethod = $param["TaskSubMethod"];
        }
    }
}
