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
 * 定时任务列表项
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskKey() 获取<p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskKey(string $TaskKey) 设置<p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronExpr() 获取<p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronExpr(string $CronExpr) 设置<p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastRunTime() 获取<p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRunTime(string $LastRunTime) 设置<p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextRunTime() 获取<p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextRunTime(string $NextRunTime) 设置<p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentConfig getAgentConfig() 获取<p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentConfig(AgentConfig $AgentConfig) 设置<p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScheduledTaskSummary extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskKey;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronExpr;

    /**
     * @var string <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRunTime;

    /**
     * @var string <p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextRunTime;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var AgentConfig <p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentConfig;

    /**
     * @param string $TaskId <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskKey <p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronExpr <p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastRunTime <p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextRunTime <p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentConfig $AgentConfig <p>任务 Agent 配置（Prompt/Model/AgentId）</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskKey",$param) and $param["TaskKey"] !== null) {
            $this->TaskKey = $param["TaskKey"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("CronExpr",$param) and $param["CronExpr"] !== null) {
            $this->CronExpr = $param["CronExpr"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastRunTime",$param) and $param["LastRunTime"] !== null) {
            $this->LastRunTime = $param["LastRunTime"];
        }

        if (array_key_exists("NextRunTime",$param) and $param["NextRunTime"] !== null) {
            $this->NextRunTime = $param["NextRunTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new AgentConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }
    }
}
