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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期挂钩动作的执行结果信息。
 *
 * @method string getLifecycleHookId() 获取生命周期挂钩标识。
 * @method void setLifecycleHookId(string $LifecycleHookId) 设置生命周期挂钩标识。
 * @method string getInstanceId() 获取实例标识。
 * @method void setInstanceId(string $InstanceId) 设置实例标识。
 * @method string getInvocationId() 获取执行活动ID。可通过TAT的[查询执行活动](https://cloud.tencent.com/document/api/1340/52679)API查询具体的执行结果。
 * @method void setInvocationId(string $InvocationId) 设置执行活动ID。可通过TAT的[查询执行活动](https://cloud.tencent.com/document/api/1340/52679)API查询具体的执行结果。
 * @method string getInvokeCommandResult() 获取命令调用的结果，表示执行TAT命令是否成功。<br>
<li>SUCCESSFUL 命令调用成功，不代表命令执行成功，执行的具体情况可根据InvocationId进行查询</li>
<li>FAILED 命令调用失败</li>
<li>NONE</li>
 * @method void setInvokeCommandResult(string $InvokeCommandResult) 设置命令调用的结果，表示执行TAT命令是否成功。<br>
<li>SUCCESSFUL 命令调用成功，不代表命令执行成功，执行的具体情况可根据InvocationId进行查询</li>
<li>FAILED 命令调用失败</li>
<li>NONE</li>
 * @method string getNotificationResult() 获取通知的结果，表示通知CMQ/TDMQ是否成功。<br>
<li>SUCCESSFUL 通知成功</li>
<li>FAILED 通知失败</li>
<li>NONE</li>
 * @method void setNotificationResult(string $NotificationResult) 设置通知的结果，表示通知CMQ/TDMQ是否成功。<br>
<li>SUCCESSFUL 通知成功</li>
<li>FAILED 通知失败</li>
<li>NONE</li>
 * @method string getLifecycleActionResult() 获取生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
 * @method void setLifecycleActionResult(string $LifecycleActionResult) 设置生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
 * @method string getResultReason() 获取结果的原因。<br>
<li>HEARTBEAT_TIMEOUT 由于心跳超时，结果根据DefaultResult设置。</li>
<li>NOTIFICATION_FAILURE 由于发送通知失败，结果根据DefaultResult设置。</li>
<li>CALL_INTERFACE 调用了接口CompleteLifecycleAction设置结果。</li>
<li>ANOTHER_ACTION_ABANDON 另一个生命周期操作的结果已设置为“ABANDON”。</li>
<li>COMMAND_CALL_FAILURE  由于命令调用失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_FINISH  命令执行完成。</li>
<li>COMMAND_EXEC_FAILURE 由于命令执行失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_RESULT_CHECK_FAILURE 由于命令结果检查失败，结果根据DefaultResult设置。</li>
 * @method void setResultReason(string $ResultReason) 设置结果的原因。<br>
<li>HEARTBEAT_TIMEOUT 由于心跳超时，结果根据DefaultResult设置。</li>
<li>NOTIFICATION_FAILURE 由于发送通知失败，结果根据DefaultResult设置。</li>
<li>CALL_INTERFACE 调用了接口CompleteLifecycleAction设置结果。</li>
<li>ANOTHER_ACTION_ABANDON 另一个生命周期操作的结果已设置为“ABANDON”。</li>
<li>COMMAND_CALL_FAILURE  由于命令调用失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_FINISH  命令执行完成。</li>
<li>COMMAND_EXEC_FAILURE 由于命令执行失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_RESULT_CHECK_FAILURE 由于命令结果检查失败，结果根据DefaultResult设置。</li>
 */
class LifecycleActionResultInfo extends AbstractModel
{
    /**
     * @var string 生命周期挂钩标识。
     */
    public $LifecycleHookId;

    /**
     * @var string 实例标识。
     */
    public $InstanceId;

    /**
     * @var string 执行活动ID。可通过TAT的[查询执行活动](https://cloud.tencent.com/document/api/1340/52679)API查询具体的执行结果。
     */
    public $InvocationId;

    /**
     * @var string 命令调用的结果，表示执行TAT命令是否成功。<br>
<li>SUCCESSFUL 命令调用成功，不代表命令执行成功，执行的具体情况可根据InvocationId进行查询</li>
<li>FAILED 命令调用失败</li>
<li>NONE</li>
     */
    public $InvokeCommandResult;

    /**
     * @var string 通知的结果，表示通知CMQ/TDMQ是否成功。<br>
<li>SUCCESSFUL 通知成功</li>
<li>FAILED 通知失败</li>
<li>NONE</li>
     */
    public $NotificationResult;

    /**
     * @var string 生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
     */
    public $LifecycleActionResult;

    /**
     * @var string 结果的原因。<br>
<li>HEARTBEAT_TIMEOUT 由于心跳超时，结果根据DefaultResult设置。</li>
<li>NOTIFICATION_FAILURE 由于发送通知失败，结果根据DefaultResult设置。</li>
<li>CALL_INTERFACE 调用了接口CompleteLifecycleAction设置结果。</li>
<li>ANOTHER_ACTION_ABANDON 另一个生命周期操作的结果已设置为“ABANDON”。</li>
<li>COMMAND_CALL_FAILURE  由于命令调用失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_FINISH  命令执行完成。</li>
<li>COMMAND_EXEC_FAILURE 由于命令执行失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_RESULT_CHECK_FAILURE 由于命令结果检查失败，结果根据DefaultResult设置。</li>
     */
    public $ResultReason;

    /**
     * @param string $LifecycleHookId 生命周期挂钩标识。
     * @param string $InstanceId 实例标识。
     * @param string $InvocationId 执行活动ID。可通过TAT的[查询执行活动](https://cloud.tencent.com/document/api/1340/52679)API查询具体的执行结果。
     * @param string $InvokeCommandResult 命令调用的结果，表示执行TAT命令是否成功。<br>
<li>SUCCESSFUL 命令调用成功，不代表命令执行成功，执行的具体情况可根据InvocationId进行查询</li>
<li>FAILED 命令调用失败</li>
<li>NONE</li>
     * @param string $NotificationResult 通知的结果，表示通知CMQ/TDMQ是否成功。<br>
<li>SUCCESSFUL 通知成功</li>
<li>FAILED 通知失败</li>
<li>NONE</li>
     * @param string $LifecycleActionResult 生命周期挂钩动作的执行结果，取值包括 CONTINUE、ABANDON。
     * @param string $ResultReason 结果的原因。<br>
<li>HEARTBEAT_TIMEOUT 由于心跳超时，结果根据DefaultResult设置。</li>
<li>NOTIFICATION_FAILURE 由于发送通知失败，结果根据DefaultResult设置。</li>
<li>CALL_INTERFACE 调用了接口CompleteLifecycleAction设置结果。</li>
<li>ANOTHER_ACTION_ABANDON 另一个生命周期操作的结果已设置为“ABANDON”。</li>
<li>COMMAND_CALL_FAILURE  由于命令调用失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_FINISH  命令执行完成。</li>
<li>COMMAND_EXEC_FAILURE 由于命令执行失败，结果根据DefaultResult设置。</li>
<li>COMMAND_EXEC_RESULT_CHECK_FAILURE 由于命令结果检查失败，结果根据DefaultResult设置。</li>
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
        if (array_key_exists("LifecycleHookId",$param) and $param["LifecycleHookId"] !== null) {
            $this->LifecycleHookId = $param["LifecycleHookId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InvokeCommandResult",$param) and $param["InvokeCommandResult"] !== null) {
            $this->InvokeCommandResult = $param["InvokeCommandResult"];
        }

        if (array_key_exists("NotificationResult",$param) and $param["NotificationResult"] !== null) {
            $this->NotificationResult = $param["NotificationResult"];
        }

        if (array_key_exists("LifecycleActionResult",$param) and $param["LifecycleActionResult"] !== null) {
            $this->LifecycleActionResult = $param["LifecycleActionResult"];
        }

        if (array_key_exists("ResultReason",$param) and $param["ResultReason"] !== null) {
            $this->ResultReason = $param["ResultReason"];
        }
    }
}
