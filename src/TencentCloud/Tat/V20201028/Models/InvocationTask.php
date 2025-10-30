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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行任务。
 *
 * @method string getInvocationId() 获取执行活动ID。
 * @method void setInvocationId(string $InvocationId) 设置执行活动ID。
 * @method string getInvocationTaskId() 获取执行任务ID。
 * @method void setInvocationTaskId(string $InvocationTaskId) 设置执行任务ID。
 * @method string getCommandId() 获取命令ID。
 * @method void setCommandId(string $CommandId) 设置命令ID。
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
 * @method TaskResult getTaskResult() 获取执行结果。
 * @method void setTaskResult(TaskResult $TaskResult) 设置执行结果。
 * @method string getStartTime() 获取执行任务开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置执行任务开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取执行任务结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置执行任务结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method string getUpdatedTime() 获取更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method CommandDocument getCommandDocument() 获取执行任务所执行的命令详情。
 * @method void setCommandDocument(CommandDocument $CommandDocument) 设置执行任务所执行的命令详情。
 * @method string getErrorInfo() 获取执行任务失败时的错误信息。
 * @method void setErrorInfo(string $ErrorInfo) 设置执行任务失败时的错误信息。
 * @method string getInvocationSource() 获取调用来源。

- USER：来源于用户调用。
- INVOKER：来源于定时执行。
 * @method void setInvocationSource(string $InvocationSource) 设置调用来源。

- USER：来源于用户调用。
- INVOKER：来源于定时执行。
 * @method string getCommandName() 获取执行的命令的名称。
 * @method void setCommandName(string $CommandName) 设置执行的命令的名称。
 */
class InvocationTask extends AbstractModel
{
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
     * @var TaskResult 执行结果。
     */
    public $TaskResult;

    /**
     * @var string 执行任务开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 执行任务结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
     */
    public $CreatedTime;

    /**
     * @var string 更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
     */
    public $UpdatedTime;

    /**
     * @var CommandDocument 执行任务所执行的命令详情。
     */
    public $CommandDocument;

    /**
     * @var string 执行任务失败时的错误信息。
     */
    public $ErrorInfo;

    /**
     * @var string 调用来源。

- USER：来源于用户调用。
- INVOKER：来源于定时执行。
     */
    public $InvocationSource;

    /**
     * @var string 执行的命令的名称。
     */
    public $CommandName;

    /**
     * @param string $InvocationId 执行活动ID。
     * @param string $InvocationTaskId 执行任务ID。
     * @param string $CommandId 命令ID。
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
     * @param TaskResult $TaskResult 执行结果。
     * @param string $StartTime 执行任务开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 执行任务结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param string $UpdatedTime 更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param CommandDocument $CommandDocument 执行任务所执行的命令详情。
     * @param string $ErrorInfo 执行任务失败时的错误信息。
     * @param string $InvocationSource 调用来源。

- USER：来源于用户调用。
- INVOKER：来源于定时执行。
     * @param string $CommandName 执行的命令的名称。
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskResult",$param) and $param["TaskResult"] !== null) {
            $this->TaskResult = new TaskResult();
            $this->TaskResult->deserialize($param["TaskResult"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("CommandDocument",$param) and $param["CommandDocument"] !== null) {
            $this->CommandDocument = new CommandDocument();
            $this->CommandDocument->deserialize($param["CommandDocument"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("InvocationSource",$param) and $param["InvocationSource"] !== null) {
            $this->InvocationSource = $param["InvocationSource"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }
    }
}
