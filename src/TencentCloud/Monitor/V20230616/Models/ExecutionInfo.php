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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行记录实体
 *
 * @method string getName() 获取<p>任务名</p>
 * @method void setName(string $Name) 设置<p>任务名</p>
 * @method string getTaskId() 获取<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionId() 获取<p>执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionId(string $ExecutionId) 设置<p>执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态: pending/running/completed/failed/timeout/cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态: pending/running/completed/failed/timeout/cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSummary() 获取<p>执行摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(string $Summary) 设置<p>执行摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationMs() 获取<p>执行耗时(毫秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationMs(integer $DurationMs) 设置<p>执行耗时(毫秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutionInfo extends AbstractModel
{
    /**
     * @var string <p>任务名</p>
     */
    public $Name;

    /**
     * @var string <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionId;

    /**
     * @var string <p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>状态: pending/running/completed/failed/timeout/cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>执行摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var integer <p>执行耗时(毫秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationMs;

    /**
     * @param string $Name <p>任务名</p>
     * @param string $TaskId <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionId <p>执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态: pending/running/completed/failed/timeout/cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Summary <p>执行摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationMs <p>执行耗时(毫秒)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }
    }
}
