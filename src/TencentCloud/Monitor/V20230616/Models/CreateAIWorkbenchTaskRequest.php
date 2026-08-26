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
 * CreateAIWorkbenchTask请求参数结构体
 *
 * @method string getName() 获取<p>任务名称</p>
 * @method void setName(string $Name) 设置<p>任务名称</p>
 * @method string getDescription() 获取<p>任务描述</p>
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
 * @method string getAgentId() 获取<p>关联 Agent ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>关联 Agent ID</p>
 * @method string getPromptTemplate() 获取<p>提示词模板</p>
 * @method void setPromptTemplate(string $PromptTemplate) 设置<p>提示词模板</p>
 * @method string getOutputFormat() 获取<p>输出格式: markdown / json</p>
 * @method void setOutputFormat(string $OutputFormat) 设置<p>输出格式: markdown / json</p>
 * @method string getTriggerType() 获取<p>触发类型: manual / cron / webhook</p>
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型: manual / cron / webhook</p>
 * @method string getCronExpr() 获取<p>Cron 表达式</p>
 * @method void setCronExpr(string $CronExpr) 设置<p>Cron 表达式</p>
 * @method string getCronTimezone() 获取<p>Cron 时区</p>
 * @method void setCronTimezone(string $CronTimezone) 设置<p>Cron 时区</p>
 * @method string getResourceMapId() 获取<p>关联资源地图 ID</p>
 * @method void setResourceMapId(string $ResourceMapId) 设置<p>关联资源地图 ID</p>
 * @method array getSkillIds() 获取<p>技能 ID 列表</p>
 * @method void setSkillIds(array $SkillIds) 设置<p>技能 ID 列表</p>
 * @method array getMcpEndpointIds() 获取<p>MCP 端点 ID 列表</p>
 * @method void setMcpEndpointIds(array $McpEndpointIds) 设置<p>MCP 端点 ID 列表</p>
 * @method integer getTimeoutSec() 获取<p>超时时间(秒)</p>
 * @method void setTimeoutSec(integer $TimeoutSec) 设置<p>超时时间(秒)</p>
 * @method integer getRetryCount() 获取<p>重试次数</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 */
class CreateAIWorkbenchTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>任务描述</p>
     */
    public $Description;

    /**
     * @var string <p>关联 Agent ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>提示词模板</p>
     */
    public $PromptTemplate;

    /**
     * @var string <p>输出格式: markdown / json</p>
     */
    public $OutputFormat;

    /**
     * @var string <p>触发类型: manual / cron / webhook</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Cron 表达式</p>
     */
    public $CronExpr;

    /**
     * @var string <p>Cron 时区</p>
     */
    public $CronTimezone;

    /**
     * @var string <p>关联资源地图 ID</p>
     */
    public $ResourceMapId;

    /**
     * @var array <p>技能 ID 列表</p>
     */
    public $SkillIds;

    /**
     * @var array <p>MCP 端点 ID 列表</p>
     */
    public $McpEndpointIds;

    /**
     * @var integer <p>超时时间(秒)</p>
     */
    public $TimeoutSec;

    /**
     * @var integer <p>重试次数</p>
     */
    public $RetryCount;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>任务名称</p>
     * @param string $Description <p>任务描述</p>
     * @param string $AgentId <p>关联 Agent ID</p>
     * @param string $PromptTemplate <p>提示词模板</p>
     * @param string $OutputFormat <p>输出格式: markdown / json</p>
     * @param string $TriggerType <p>触发类型: manual / cron / webhook</p>
     * @param string $CronExpr <p>Cron 表达式</p>
     * @param string $CronTimezone <p>Cron 时区</p>
     * @param string $ResourceMapId <p>关联资源地图 ID</p>
     * @param array $SkillIds <p>技能 ID 列表</p>
     * @param array $McpEndpointIds <p>MCP 端点 ID 列表</p>
     * @param integer $TimeoutSec <p>超时时间(秒)</p>
     * @param integer $RetryCount <p>重试次数</p>
     * @param boolean $Enabled <p>是否启用</p>
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

        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
