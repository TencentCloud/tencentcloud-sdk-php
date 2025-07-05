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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 的定义
 *
 * @method string getAgentId() 获取AgentID
 * @method void setAgentId(string $AgentId) 设置AgentID
 * @method string getWorkflowId() 获取WorkflowID，非空则当前Agent从workflow转换而来
 * @method void setWorkflowId(string $WorkflowId) 设置WorkflowID，非空则当前Agent从workflow转换而来
 * @method string getName() 获取Agent名称，同一个应用内，Agent名称不能重复
 * @method void setName(string $Name) 设置Agent名称，同一个应用内，Agent名称不能重复
 * @method string getIconUrl() 获取插件图标url
 * @method void setIconUrl(string $IconUrl) 设置插件图标url
 * @method string getInstructions() 获取Agent指令；当该Agent被调用时，将作为“系统提示词”使用，描述Agent应执行的操作和响应方式
 * @method void setInstructions(string $Instructions) 设置Agent指令；当该Agent被调用时，将作为“系统提示词”使用，描述Agent应执行的操作和响应方式
 * @method string getHandoffDescription() 获取当Agent作为转交目标时的描述，用于让其他Agent的LLM理解其功能和转交时机
 * @method void setHandoffDescription(string $HandoffDescription) 设置当Agent作为转交目标时的描述，用于让其他Agent的LLM理解其功能和转交时机
 * @method array getHandoffs() 获取Agent可转交的子AgentId列表
 * @method void setHandoffs(array $Handoffs) 设置Agent可转交的子AgentId列表
 * @method AgentModelInfo getModel() 获取Agent调用LLM时使用的模型配置
 * @method void setModel(AgentModelInfo $Model) 设置Agent调用LLM时使用的模型配置
 * @method array getTools() 获取Agent可使用的工具列表
 * @method void setTools(array $Tools) 设置Agent可使用的工具列表
 * @method array getPlugins() 获取Agent可使用的插件列表
 * @method void setPlugins(array $Plugins) 设置Agent可使用的插件列表
 * @method boolean getIsStartingAgent() 获取当前Agent是否是启动Agent
 * @method void setIsStartingAgent(boolean $IsStartingAgent) 设置当前Agent是否是启动Agent
 * @method integer getAgentType() 获取Agent类型; 0: 未指定类型; 1: 知识库检索Agent
 * @method void setAgentType(integer $AgentType) 设置Agent类型; 0: 未指定类型; 1: 知识库检索Agent
 */
class Agent extends AbstractModel
{
    /**
     * @var string AgentID
     */
    public $AgentId;

    /**
     * @var string WorkflowID，非空则当前Agent从workflow转换而来
     */
    public $WorkflowId;

    /**
     * @var string Agent名称，同一个应用内，Agent名称不能重复
     */
    public $Name;

    /**
     * @var string 插件图标url
     */
    public $IconUrl;

    /**
     * @var string Agent指令；当该Agent被调用时，将作为“系统提示词”使用，描述Agent应执行的操作和响应方式
     */
    public $Instructions;

    /**
     * @var string 当Agent作为转交目标时的描述，用于让其他Agent的LLM理解其功能和转交时机
     */
    public $HandoffDescription;

    /**
     * @var array Agent可转交的子AgentId列表
     */
    public $Handoffs;

    /**
     * @var AgentModelInfo Agent调用LLM时使用的模型配置
     */
    public $Model;

    /**
     * @var array Agent可使用的工具列表
     */
    public $Tools;

    /**
     * @var array Agent可使用的插件列表
     */
    public $Plugins;

    /**
     * @var boolean 当前Agent是否是启动Agent
     */
    public $IsStartingAgent;

    /**
     * @var integer Agent类型; 0: 未指定类型; 1: 知识库检索Agent
     */
    public $AgentType;

    /**
     * @param string $AgentId AgentID
     * @param string $WorkflowId WorkflowID，非空则当前Agent从workflow转换而来
     * @param string $Name Agent名称，同一个应用内，Agent名称不能重复
     * @param string $IconUrl 插件图标url
     * @param string $Instructions Agent指令；当该Agent被调用时，将作为“系统提示词”使用，描述Agent应执行的操作和响应方式
     * @param string $HandoffDescription 当Agent作为转交目标时的描述，用于让其他Agent的LLM理解其功能和转交时机
     * @param array $Handoffs Agent可转交的子AgentId列表
     * @param AgentModelInfo $Model Agent调用LLM时使用的模型配置
     * @param array $Tools Agent可使用的工具列表
     * @param array $Plugins Agent可使用的插件列表
     * @param boolean $IsStartingAgent 当前Agent是否是启动Agent
     * @param integer $AgentType Agent类型; 0: 未指定类型; 1: 知识库检索Agent
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Instructions",$param) and $param["Instructions"] !== null) {
            $this->Instructions = $param["Instructions"];
        }

        if (array_key_exists("HandoffDescription",$param) and $param["HandoffDescription"] !== null) {
            $this->HandoffDescription = $param["HandoffDescription"];
        }

        if (array_key_exists("Handoffs",$param) and $param["Handoffs"] !== null) {
            $this->Handoffs = $param["Handoffs"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AgentModelInfo();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Tools",$param) and $param["Tools"] !== null) {
            $this->Tools = [];
            foreach ($param["Tools"] as $key => $value){
                $obj = new AgentToolInfo();
                $obj->deserialize($value);
                array_push($this->Tools, $obj);
            }
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new AgentPluginInfo();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("IsStartingAgent",$param) and $param["IsStartingAgent"] !== null) {
            $this->IsStartingAgent = $param["IsStartingAgent"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }
    }
}
