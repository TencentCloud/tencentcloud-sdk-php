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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个操作项的执行结果。 由 RunWorkflow / RerunWorkflowRun / KillWorkflowRun 共用： RunWorkflow—— WorkflowId / WorkflowName 有值，WorkflowRunId 为空 RerunWorkflowRun —— WorkflowId / WorkflowName / WorkflowRunId 均有值 KillWorkflowRun  —— WorkflowId / WorkflowName / WorkflowRunId 均有值
 *
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunActionId() 获取操作动作ID，用于追踪具体的执行动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunActionId(string $RunActionId) 设置操作动作ID，用于追踪具体的执行动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取失败错误信息，操作失败时返回具体的错误描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置失败错误信息，操作失败时返回具体的错误描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOpStatus() 获取操作状态，true 表示成功，false 表示失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpStatus(boolean $OpStatus) 设置操作状态，true 表示成功，false 表示失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowRunId() 获取工作流运行ID。重跑 / 终止场景返回被操作的运行ID；运行工作流场景为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行ID。重跑 / 终止场景返回被操作的运行ID；运行工作流场景为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunActionBrief extends AbstractModel
{
    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 操作动作ID，用于追踪具体的执行动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunActionId;

    /**
     * @var string 失败错误信息，操作失败时返回具体的错误描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var boolean 操作状态，true 表示成功，false 表示失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpStatus;

    /**
     * @var string 工作流运行ID。重跑 / 终止场景返回被操作的运行ID；运行工作流场景为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunId;

    /**
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunActionId 操作动作ID，用于追踪具体的执行动作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 失败错误信息，操作失败时返回具体的错误描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OpStatus 操作状态，true 表示成功，false 表示失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowRunId 工作流运行ID。重跑 / 终止场景返回被操作的运行ID；运行工作流场景为空
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("RunActionId",$param) and $param["RunActionId"] !== null) {
            $this->RunActionId = $param["RunActionId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("OpStatus",$param) and $param["OpStatus"] !== null) {
            $this->OpStatus = $param["OpStatus"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
