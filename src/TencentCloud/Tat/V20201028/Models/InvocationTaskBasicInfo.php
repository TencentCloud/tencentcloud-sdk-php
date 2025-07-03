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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行活动任务简介。
 *
 * @method string getInvocationTaskId() 获取执行任务ID。
 * @method void setInvocationTaskId(string $InvocationTaskId) 设置执行任务ID。
 * @method string getTaskStatus() 获取执行任务状态。取值范围：

- PENDING：等待下发
- DELIVERING：下发中
- DELIVER_DELAYED：延时下发
- DELIVER_FAILED：下发失败
- START_FAILED：命令启动失败
- RUNNING：命令运行中
- SUCCESS：命令成功
- FAILED：命令执行失败，执行完退出码不为 0
- TIMEOUT：命令超时
- TASK_TIMEOUT：客户端无响应
- CANCELLING：取消中
- CANCELLED：已取消（命令启动前就被取消）
- TERMINATED：已中止（命令执行期间被取消）
 * @method void setTaskStatus(string $TaskStatus) 设置执行任务状态。取值范围：

- PENDING：等待下发
- DELIVERING：下发中
- DELIVER_DELAYED：延时下发
- DELIVER_FAILED：下发失败
- START_FAILED：命令启动失败
- RUNNING：命令运行中
- SUCCESS：命令成功
- FAILED：命令执行失败，执行完退出码不为 0
- TIMEOUT：命令超时
- TASK_TIMEOUT：客户端无响应
- CANCELLING：取消中
- CANCELLED：已取消（命令启动前就被取消）
- TERMINATED：已中止（命令执行期间被取消）
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 */
class InvocationTaskBasicInfo extends AbstractModel
{
    /**
     * @var string 执行任务ID。
     */
    public $InvocationTaskId;

    /**
     * @var string 执行任务状态。取值范围：

- PENDING：等待下发
- DELIVERING：下发中
- DELIVER_DELAYED：延时下发
- DELIVER_FAILED：下发失败
- START_FAILED：命令启动失败
- RUNNING：命令运行中
- SUCCESS：命令成功
- FAILED：命令执行失败，执行完退出码不为 0
- TIMEOUT：命令超时
- TASK_TIMEOUT：客户端无响应
- CANCELLING：取消中
- CANCELLED：已取消（命令启动前就被取消）
- TERMINATED：已中止（命令执行期间被取消）
     */
    public $TaskStatus;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @param string $InvocationTaskId 执行任务ID。
     * @param string $TaskStatus 执行任务状态。取值范围：

- PENDING：等待下发
- DELIVERING：下发中
- DELIVER_DELAYED：延时下发
- DELIVER_FAILED：下发失败
- START_FAILED：命令启动失败
- RUNNING：命令运行中
- SUCCESS：命令成功
- FAILED：命令执行失败，执行完退出码不为 0
- TIMEOUT：命令超时
- TASK_TIMEOUT：客户端无响应
- CANCELLING：取消中
- CANCELLED：已取消（命令启动前就被取消）
- TERMINATED：已中止（命令执行期间被取消）
     * @param string $InstanceId 实例ID。
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
        if (array_key_exists("InvocationTaskId",$param) and $param["InvocationTaskId"] !== null) {
            $this->InvocationTaskId = $param["InvocationTaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
