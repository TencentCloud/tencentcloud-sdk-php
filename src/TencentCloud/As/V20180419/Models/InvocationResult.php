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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行命令结果。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInvocationId() 获取执行活动ID。
 * @method void setInvocationId(string $InvocationId) 设置执行活动ID。
 * @method string getInvocationTaskId() 获取执行任务ID。
 * @method void setInvocationTaskId(string $InvocationTaskId) 设置执行任务ID。
 * @method string getCommandId() 获取命令ID。
 * @method void setCommandId(string $CommandId) 设置命令ID。
 * @method string getTaskStatus() 获取执行任务状态。
 * @method void setTaskStatus(string $TaskStatus) 设置执行任务状态。
 * @method string getErrorMessage() 获取执行异常信息。
 * @method void setErrorMessage(string $ErrorMessage) 设置执行异常信息。
 */
class InvocationResult extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 执行活动ID。
     */
    public $InvocationId;

    /**
     * @var string 执行任务ID。
     */
    public $InvocationTaskId;

    /**
     * @var string 命令ID。
     */
    public $CommandId;

    /**
     * @var string 执行任务状态。
     */
    public $TaskStatus;

    /**
     * @var string 执行异常信息。
     */
    public $ErrorMessage;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InvocationId 执行活动ID。
     * @param string $InvocationTaskId 执行任务ID。
     * @param string $CommandId 命令ID。
     * @param string $TaskStatus 执行任务状态。
     * @param string $ErrorMessage 执行异常信息。
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

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InvocationTaskId",$param) and $param["InvocationTaskId"] !== null) {
            $this->InvocationTaskId = $param["InvocationTaskId"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
