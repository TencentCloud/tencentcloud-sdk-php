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
 * 任务实体
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPromptTemplate() 获取<p>提示词模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptTemplate(string $PromptTemplate) 设置<p>提示词模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputFormat() 获取<p>输出格式: markdown / json</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputFormat(string $OutputFormat) 设置<p>输出格式: markdown / json</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronExpr() 获取<p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronExpr(string $CronExpr) 设置<p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronTimezone() 获取<p>Cron 时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronTimezone(string $CronTimezone) 设置<p>Cron 时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSkillIds() 获取<p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillIds(array $SkillIds) 设置<p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMcpEndpointIds() 获取<p>关联 MCP 端点 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMcpEndpointIds(array $McpEndpointIds) 设置<p>关联 MCP 端点 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutSec() 获取<p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutSec(integer $TimeoutSec) 设置<p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryCount() 获取<p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotifyIds() 获取<p>通知id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyIds(array $NotifyIds) 设置<p>通知id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>提示词模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptTemplate;

    /**
     * @var string <p>输出格式: markdown / json</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputFormat;

    /**
     * @var string <p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronExpr;

    /**
     * @var string <p>Cron 时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronTimezone;

    /**
     * @var array <p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillIds;

    /**
     * @var array <p>关联 MCP 端点 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $McpEndpointIds;

    /**
     * @var integer <p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutSec;

    /**
     * @var integer <p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryCount;

    /**
     * @var array <p>通知id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyIds;

    /**
     * @var boolean <p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @param string $TaskId <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PromptTemplate <p>提示词模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputFormat <p>输出格式: markdown / json</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发类型: manual / cron / webhook</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronExpr <p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronTimezone <p>Cron 时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SkillIds <p>关联技能 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $McpEndpointIds <p>关联 MCP 端点 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutSec <p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryCount <p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NotifyIds <p>通知id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled <p>是否启用</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("PromptTemplate",$param) and $param["PromptTemplate"] !== null) {
            $this->PromptTemplate = $param["PromptTemplate"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("CronExpr",$param) and $param["CronExpr"] !== null) {
            $this->CronExpr = $param["CronExpr"];
        }

        if (array_key_exists("CronTimezone",$param) and $param["CronTimezone"] !== null) {
            $this->CronTimezone = $param["CronTimezone"];
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
        }

        if (array_key_exists("McpEndpointIds",$param) and $param["McpEndpointIds"] !== null) {
            $this->McpEndpointIds = $param["McpEndpointIds"];
        }

        if (array_key_exists("TimeoutSec",$param) and $param["TimeoutSec"] !== null) {
            $this->TimeoutSec = $param["TimeoutSec"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("NotifyIds",$param) and $param["NotifyIds"] !== null) {
            $this->NotifyIds = $param["NotifyIds"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
