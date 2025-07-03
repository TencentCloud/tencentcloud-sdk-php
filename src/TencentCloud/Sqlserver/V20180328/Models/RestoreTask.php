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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回档任务记录
 *
 * @method string getTargetInstanceId() 获取目标实例ID
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置目标实例ID
 * @method string getTargetInstanceName() 获取目标实例名称
 * @method void setTargetInstanceName(string $TargetInstanceName) 设置目标实例名称
 * @method integer getTargetInstanceStatus() 获取目标实例状态。取值范围：
1：申请中
2：运行中
3：受限运行中 (主备切换中)
4：已隔离
5：回收中
6：已回收
7：任务执行中 (实例做备份、回档等操作)
8：已下线
9：实例扩容中
10：实例迁移中
11：只读
12：重启中
 * @method void setTargetInstanceStatus(integer $TargetInstanceStatus) 设置目标实例状态。取值范围：
1：申请中
2：运行中
3：受限运行中 (主备切换中)
4：已隔离
5：回收中
6：已回收
7：任务执行中 (实例做备份、回档等操作)
8：已下线
9：实例扩容中
10：实例迁移中
11：只读
12：重启中
 * @method string getTargetRegion() 获取目标实例所在地域
 * @method void setTargetRegion(string $TargetRegion) 设置目标实例所在地域
 * @method integer getRestoreId() 获取回档记录ID
 * @method void setRestoreId(integer $RestoreId) 设置回档记录ID
 * @method integer getTargetType() 获取回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
 * @method void setTargetType(integer $TargetType) 设置回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
 * @method integer getRestoreType() 获取回档方式，0-按照时间点回档，1-按照备份集回档
 * @method void setRestoreType(integer $RestoreType) 设置回档方式，0-按照时间点回档，1-按照备份集回档
 * @method string getRestoreTime() 获取回档目标时间
 * @method void setRestoreTime(string $RestoreTime) 设置回档目标时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getStatus() 获取回档状态，0-初始化，1-运行中，2-成功，3-失败
 * @method void setStatus(integer $Status) 设置回档状态，0-初始化，1-运行中，2-成功，3-失败
 * @method integer getFlowId() 获取回档异步任务ID
 * @method void setFlowId(integer $FlowId) 设置回档异步任务ID
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var string 目标实例ID
     */
    public $TargetInstanceId;

    /**
     * @var string 目标实例名称
     */
    public $TargetInstanceName;

    /**
     * @var integer 目标实例状态。取值范围：
1：申请中
2：运行中
3：受限运行中 (主备切换中)
4：已隔离
5：回收中
6：已回收
7：任务执行中 (实例做备份、回档等操作)
8：已下线
9：实例扩容中
10：实例迁移中
11：只读
12：重启中
     */
    public $TargetInstanceStatus;

    /**
     * @var string 目标实例所在地域
     */
    public $TargetRegion;

    /**
     * @var integer 回档记录ID
     */
    public $RestoreId;

    /**
     * @var integer 回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
     */
    public $TargetType;

    /**
     * @var integer 回档方式，0-按照时间点回档，1-按照备份集回档
     */
    public $RestoreType;

    /**
     * @var string 回档目标时间
     */
    public $RestoreTime;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 回档状态，0-初始化，1-运行中，2-成功，3-失败
     */
    public $Status;

    /**
     * @var integer 回档异步任务ID
     */
    public $FlowId;

    /**
     * @param string $TargetInstanceId 目标实例ID
     * @param string $TargetInstanceName 目标实例名称
     * @param integer $TargetInstanceStatus 目标实例状态。取值范围：
1：申请中
2：运行中
3：受限运行中 (主备切换中)
4：已隔离
5：回收中
6：已回收
7：任务执行中 (实例做备份、回档等操作)
8：已下线
9：实例扩容中
10：实例迁移中
11：只读
12：重启中
     * @param string $TargetRegion 目标实例所在地域
     * @param integer $RestoreId 回档记录ID
     * @param integer $TargetType 回档到目标实例的类型，0-当前实例，1-已有实例，2-全新实例
     * @param integer $RestoreType 回档方式，0-按照时间点回档，1-按照备份集回档
     * @param string $RestoreTime 回档目标时间
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Status 回档状态，0-初始化，1-运行中，2-成功，3-失败
     * @param integer $FlowId 回档异步任务ID
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
        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("TargetInstanceName",$param) and $param["TargetInstanceName"] !== null) {
            $this->TargetInstanceName = $param["TargetInstanceName"];
        }

        if (array_key_exists("TargetInstanceStatus",$param) and $param["TargetInstanceStatus"] !== null) {
            $this->TargetInstanceStatus = $param["TargetInstanceStatus"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("RestoreId",$param) and $param["RestoreId"] !== null) {
            $this->RestoreId = $param["RestoreId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
