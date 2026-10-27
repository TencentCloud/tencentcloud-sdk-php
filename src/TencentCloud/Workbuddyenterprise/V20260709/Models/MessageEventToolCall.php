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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工具调用
 *
 * @method string getToolCallId() 获取<p>调用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolCallId(string $ToolCallId) 设置<p>调用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToolName() 获取<p>工具名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolName(string $ToolName) 设置<p>工具名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态 PENDING/IN_PROGRESS/SUCCEEDED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态 PENDING/IN_PROGRESS/SUCCEEDED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInput() 获取<p>工具调用Input（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(string $Input) 设置<p>工具调用Input（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutput() 获取<p>工具调用Output（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(string $Output) 设置<p>工具调用Output（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndedAt() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndedAt(string $EndedAt) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationMs() 获取<p>耗时毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationMs(integer $DurationMs) 设置<p>耗时毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartedAt() 获取<p>调用开始时间（RFC3339 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartedAt(string $StartedAt) 设置<p>调用开始时间（RFC3339 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpertId() 获取本次调用对应的业务专家 ID。
 * @method void setExpertId(string $ExpertId) 设置本次调用对应的业务专家 ID。
 * @method string getExpertName() 获取本次调用对应的专家名称。
 * @method void setExpertName(string $ExpertName) 设置本次调用对应的专家名称。
 * @method string getExpertVersion() 获取执行时解析到的专家资源版本。
 * @method void setExpertVersion(string $ExpertVersion) 设置执行时解析到的专家资源版本。
 * @method string getSubAgentId() 获取CBC 子代理执行实例 ID，可用于查询该次专家调用的消息事件。
 * @method void setSubAgentId(string $SubAgentId) 设置CBC 子代理执行实例 ID，可用于查询该次专家调用的消息事件。
 * @method string getSubAgentName() 获取CBC 子代理定义名称。
 * @method void setSubAgentName(string $SubAgentName) 设置CBC 子代理定义名称。
 * @method string getParentToolCallId() 获取父会话中触发本次子代理执行的工具调用 ID。
 * @method void setParentToolCallId(string $ParentToolCallId) 设置父会话中触发本次子代理执行的工具调用 ID。
 */
class MessageEventToolCall extends AbstractModel
{
    /**
     * @var string <p>调用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolCallId;

    /**
     * @var string <p>工具名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolName;

    /**
     * @var string <p>状态 PENDING/IN_PROGRESS/SUCCEEDED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>工具调用Input（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var string <p>工具调用Output（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndedAt;

    /**
     * @var integer <p>耗时毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationMs;

    /**
     * @var string <p>调用开始时间（RFC3339 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartedAt;

    /**
     * @var string 本次调用对应的业务专家 ID。
     */
    public $ExpertId;

    /**
     * @var string 本次调用对应的专家名称。
     */
    public $ExpertName;

    /**
     * @var string 执行时解析到的专家资源版本。
     */
    public $ExpertVersion;

    /**
     * @var string CBC 子代理执行实例 ID，可用于查询该次专家调用的消息事件。
     */
    public $SubAgentId;

    /**
     * @var string CBC 子代理定义名称。
     */
    public $SubAgentName;

    /**
     * @var string 父会话中触发本次子代理执行的工具调用 ID。
     */
    public $ParentToolCallId;

    /**
     * @param string $ToolCallId <p>调用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ToolName <p>工具名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态 PENDING/IN_PROGRESS/SUCCEEDED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Input <p>工具调用Input（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output <p>工具调用Output（已递归脱敏，JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndedAt <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationMs <p>耗时毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartedAt <p>调用开始时间（RFC3339 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpertId 本次调用对应的业务专家 ID。
     * @param string $ExpertName 本次调用对应的专家名称。
     * @param string $ExpertVersion 执行时解析到的专家资源版本。
     * @param string $SubAgentId CBC 子代理执行实例 ID，可用于查询该次专家调用的消息事件。
     * @param string $SubAgentName CBC 子代理定义名称。
     * @param string $ParentToolCallId 父会话中触发本次子代理执行的工具调用 ID。
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
        if (array_key_exists("ToolCallId",$param) and $param["ToolCallId"] !== null) {
            $this->ToolCallId = $param["ToolCallId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("EndedAt",$param) and $param["EndedAt"] !== null) {
            $this->EndedAt = $param["EndedAt"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("ExpertId",$param) and $param["ExpertId"] !== null) {
            $this->ExpertId = $param["ExpertId"];
        }

        if (array_key_exists("ExpertName",$param) and $param["ExpertName"] !== null) {
            $this->ExpertName = $param["ExpertName"];
        }

        if (array_key_exists("ExpertVersion",$param) and $param["ExpertVersion"] !== null) {
            $this->ExpertVersion = $param["ExpertVersion"];
        }

        if (array_key_exists("SubAgentId",$param) and $param["SubAgentId"] !== null) {
            $this->SubAgentId = $param["SubAgentId"];
        }

        if (array_key_exists("SubAgentName",$param) and $param["SubAgentName"] !== null) {
            $this->SubAgentName = $param["SubAgentName"];
        }

        if (array_key_exists("ParentToolCallId",$param) and $param["ParentToolCallId"] !== null) {
            $this->ParentToolCallId = $param["ParentToolCallId"];
        }
    }
}
