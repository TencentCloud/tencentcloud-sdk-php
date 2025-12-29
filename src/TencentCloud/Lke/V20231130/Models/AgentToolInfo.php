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
 * Agent的工具信息
 *
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method string getPluginName() 获取插件名称
 * @method void setPluginName(string $PluginName) 设置插件名称
 * @method string getIconUrl() 获取插件图标url
 * @method void setIconUrl(string $IconUrl) 设置插件图标url
 * @method integer getPluginType() 获取0 自定义插件
1 官方插件
2 第三方插件 目前用于第三方实现的mcp server
 * @method void setPluginType(integer $PluginType) 设置0 自定义插件
1 官方插件
2 第三方插件 目前用于第三方实现的mcp server
 * @method string getToolId() 获取工具id
 * @method void setToolId(string $ToolId) 设置工具id
 * @method string getToolName() 获取工具名称
 * @method void setToolName(string $ToolName) 设置工具名称
 * @method string getToolDesc() 获取工具描述
 * @method void setToolDesc(string $ToolDesc) 设置工具描述
 * @method array getInputs() 获取输入参数
 * @method void setInputs(array $Inputs) 设置输入参数
 * @method array getOutputs() 获取输出参数
 * @method void setOutputs(array $Outputs) 设置输出参数
 * @method integer getCreateType() 获取创建方式，0:服务创建，1:代码创建，2:MCP创建	
 * @method void setCreateType(integer $CreateType) 设置创建方式，0:服务创建，1:代码创建，2:MCP创建	
 * @method AgentMCPServerInfo getMcpServer() 获取MCP插件的配置信息
 * @method void setMcpServer(AgentMCPServerInfo $McpServer) 设置MCP插件的配置信息
 * @method boolean getIsBindingKnowledge() 获取该工具是否和知识库绑定
 * @method void setIsBindingKnowledge(boolean $IsBindingKnowledge) 设置该工具是否和知识库绑定
 * @method integer getStatus() 获取插件状态，1:可用，2:不可用	
 * @method void setStatus(integer $Status) 设置插件状态，1:可用，2:不可用	
 * @method array getHeaders() 获取header信息
 * @method void setHeaders(array $Headers) 设置header信息
 * @method string getCallingMethod() 获取NON_STREAMING: 非流式  STREAMIN: 流式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallingMethod(string $CallingMethod) 设置NON_STREAMING: 非流式  STREAMIN: 流式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuery() 获取query信息
 * @method void setQuery(array $Query) 设置query信息
 * @method integer getFinanceStatus() 获取工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）
 * @method void setFinanceStatus(integer $FinanceStatus) 设置工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）
 * @method integer getToolSource() 获取工具来源: 0-来自插件，1-来自工作流
 * @method void setToolSource(integer $ToolSource) 设置工具来源: 0-来自插件，1-来自工作流
 * @method integer getFinanceType() 获取计费状态；0-不计费，1-限时免费，2-官方收费
 * @method void setFinanceType(integer $FinanceType) 设置计费状态；0-不计费，1-限时免费，2-官方收费
 * @method ToolAdvanceConfig getToolAdvanceConfig() 获取工具高级设置
 * @method void setToolAdvanceConfig(ToolAdvanceConfig $ToolAdvanceConfig) 设置工具高级设置
 */
class AgentToolInfo extends AbstractModel
{
    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var string 插件名称
     */
    public $PluginName;

    /**
     * @var string 插件图标url
     */
    public $IconUrl;

    /**
     * @var integer 0 自定义插件
1 官方插件
2 第三方插件 目前用于第三方实现的mcp server
     */
    public $PluginType;

    /**
     * @var string 工具id
     */
    public $ToolId;

    /**
     * @var string 工具名称
     */
    public $ToolName;

    /**
     * @var string 工具描述
     */
    public $ToolDesc;

    /**
     * @var array 输入参数
     */
    public $Inputs;

    /**
     * @var array 输出参数
     */
    public $Outputs;

    /**
     * @var integer 创建方式，0:服务创建，1:代码创建，2:MCP创建	
     */
    public $CreateType;

    /**
     * @var AgentMCPServerInfo MCP插件的配置信息
     */
    public $McpServer;

    /**
     * @var boolean 该工具是否和知识库绑定
     */
    public $IsBindingKnowledge;

    /**
     * @var integer 插件状态，1:可用，2:不可用	
     */
    public $Status;

    /**
     * @var array header信息
     */
    public $Headers;

    /**
     * @var string NON_STREAMING: 非流式  STREAMIN: 流式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallingMethod;

    /**
     * @var array query信息
     */
    public $Query;

    /**
     * @var integer 工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）
     */
    public $FinanceStatus;

    /**
     * @var integer 工具来源: 0-来自插件，1-来自工作流
     */
    public $ToolSource;

    /**
     * @var integer 计费状态；0-不计费，1-限时免费，2-官方收费
     */
    public $FinanceType;

    /**
     * @var ToolAdvanceConfig 工具高级设置
     */
    public $ToolAdvanceConfig;

    /**
     * @param string $PluginId 插件id
     * @param string $PluginName 插件名称
     * @param string $IconUrl 插件图标url
     * @param integer $PluginType 0 自定义插件
1 官方插件
2 第三方插件 目前用于第三方实现的mcp server
     * @param string $ToolId 工具id
     * @param string $ToolName 工具名称
     * @param string $ToolDesc 工具描述
     * @param array $Inputs 输入参数
     * @param array $Outputs 输出参数
     * @param integer $CreateType 创建方式，0:服务创建，1:代码创建，2:MCP创建	
     * @param AgentMCPServerInfo $McpServer MCP插件的配置信息
     * @param boolean $IsBindingKnowledge 该工具是否和知识库绑定
     * @param integer $Status 插件状态，1:可用，2:不可用	
     * @param array $Headers header信息
     * @param string $CallingMethod NON_STREAMING: 非流式  STREAMIN: 流式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Query query信息
     * @param integer $FinanceStatus 工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）
     * @param integer $ToolSource 工具来源: 0-来自插件，1-来自工作流
     * @param integer $FinanceType 计费状态；0-不计费，1-限时免费，2-官方收费
     * @param ToolAdvanceConfig $ToolAdvanceConfig 工具高级设置
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolDesc",$param) and $param["ToolDesc"] !== null) {
            $this->ToolDesc = $param["ToolDesc"];
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new AgentToolReqParam();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new AgentToolRspParam();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("CreateType",$param) and $param["CreateType"] !== null) {
            $this->CreateType = $param["CreateType"];
        }

        if (array_key_exists("McpServer",$param) and $param["McpServer"] !== null) {
            $this->McpServer = new AgentMCPServerInfo();
            $this->McpServer->deserialize($param["McpServer"]);
        }

        if (array_key_exists("IsBindingKnowledge",$param) and $param["IsBindingKnowledge"] !== null) {
            $this->IsBindingKnowledge = $param["IsBindingKnowledge"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new AgentPluginHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("CallingMethod",$param) and $param["CallingMethod"] !== null) {
            $this->CallingMethod = $param["CallingMethod"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = [];
            foreach ($param["Query"] as $key => $value){
                $obj = new AgentPluginQuery();
                $obj->deserialize($value);
                array_push($this->Query, $obj);
            }
        }

        if (array_key_exists("FinanceStatus",$param) and $param["FinanceStatus"] !== null) {
            $this->FinanceStatus = $param["FinanceStatus"];
        }

        if (array_key_exists("ToolSource",$param) and $param["ToolSource"] !== null) {
            $this->ToolSource = $param["ToolSource"];
        }

        if (array_key_exists("FinanceType",$param) and $param["FinanceType"] !== null) {
            $this->FinanceType = $param["FinanceType"];
        }

        if (array_key_exists("ToolAdvanceConfig",$param) and $param["ToolAdvanceConfig"] !== null) {
            $this->ToolAdvanceConfig = new ToolAdvanceConfig();
            $this->ToolAdvanceConfig->deserialize($param["ToolAdvanceConfig"]);
        }
    }
}
