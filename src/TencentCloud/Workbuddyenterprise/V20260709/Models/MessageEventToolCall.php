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
    }
}
