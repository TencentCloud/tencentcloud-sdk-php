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
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method string getPluginName() 获取<p>插件名称</p>
 * @method void setPluginName(string $PluginName) 设置<p>插件名称</p>
 * @method string getIconUrl() 获取<p>插件图标url</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>插件图标url</p>
 * @method integer getPluginType() 获取<p>0 自定义插件<br>1 官方插件<br>2 第三方插件 目前用于第三方实现的mcp server</p>
 * @method void setPluginType(integer $PluginType) 设置<p>0 自定义插件<br>1 官方插件<br>2 第三方插件 目前用于第三方实现的mcp server</p>
 * @method string getToolId() 获取<p>工具id</p>
 * @method void setToolId(string $ToolId) 设置<p>工具id</p>
 * @method string getToolName() 获取<p>工具名称</p>
 * @method void setToolName(string $ToolName) 设置<p>工具名称</p>
 * @method string getToolDesc() 获取<p>工具描述</p>
 * @method void setToolDesc(string $ToolDesc) 设置<p>工具描述</p>
 * @method array getInputs() 获取<p>输入参数</p>
 * @method void setInputs(array $Inputs) 设置<p>输入参数</p>
 * @method array getOutputs() 获取<p>输出参数</p>
 * @method void setOutputs(array $Outputs) 设置<p>输出参数</p>
 * @method integer getCreateType() 获取<p>创建方式，0:服务创建，1:代码创建，2:MCP创建</p>
 * @method void setCreateType(integer $CreateType) 设置<p>创建方式，0:服务创建，1:代码创建，2:MCP创建</p>
 * @method AgentMCPServerInfo getMcpServer() 获取<p>MCP插件的配置信息</p>
 * @method void setMcpServer(AgentMCPServerInfo $McpServer) 设置<p>MCP插件的配置信息</p>
 * @method boolean getIsBindingKnowledge() 获取<p>该工具是否和知识库绑定</p>
 * @method void setIsBindingKnowledge(boolean $IsBindingKnowledge) 设置<p>该工具是否和知识库绑定</p>
 * @method integer getStatus() 获取<p>插件状态，1:可用，2:不可用</p>
 * @method void setStatus(integer $Status) 设置<p>插件状态，1:可用，2:不可用</p>
 * @method array getHeaders() 获取<p>header信息</p>
 * @method void setHeaders(array $Headers) 设置<p>header信息</p>
 * @method string getCallingMethod() 获取<p>NON_STREAMING: 非流式  STREAMIN: 流式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallingMethod(string $CallingMethod) 设置<p>NON_STREAMING: 非流式  STREAMIN: 流式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuery() 获取<p>query信息</p>
 * @method void setQuery(array $Query) 设置<p>query信息</p>
 * @method integer getFinanceStatus() 获取<p>工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）</p>
 * @method void setFinanceStatus(integer $FinanceStatus) 设置<p>工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）</p>
 * @method integer getToolSource() 获取<p>工具来源: 0-来自插件，1-来自工作流</p>
 * @method void setToolSource(integer $ToolSource) 设置<p>工具来源: 0-来自插件，1-来自工作流</p>
 * @method integer getFinanceType() 获取<p>计费状态；0-不计费，1-限时免费，2-官方收费</p>
 * @method void setFinanceType(integer $FinanceType) 设置<p>计费状态；0-不计费，1-限时免费，2-官方收费</p>
 * @method ToolAdvanceConfig getToolAdvanceConfig() 获取<p>工具高级设置</p>
 * @method void setToolAdvanceConfig(ToolAdvanceConfig $ToolAdvanceConfig) 设置<p>工具高级设置</p>
 * @method integer getAuthMode() 获取<p>授权模式； 0-开发者授权；1-使用者授权</p>
 * @method void setAuthMode(integer $AuthMode) 设置<p>授权模式； 0-开发者授权；1-使用者授权</p>
 * @method integer getAuthType() 获取<p>授权类型; 0-无鉴权；1-APIKey；2-CAM授权；3-Oauth2.0授权；</p>
 * @method void setAuthType(integer $AuthType) 设置<p>授权类型; 0-无鉴权；1-APIKey；2-CAM授权；3-Oauth2.0授权；</p>
 * @method integer getAuthConfigStatus() 获取<p>工具授权配置状态；0：不需要授权，1：需要授权-未配置，2：需要授权-已配置</p>
 * @method void setAuthConfigStatus(integer $AuthConfigStatus) 设置<p>工具授权配置状态；0：不需要授权，1：需要授权-未配置，2：需要授权-已配置</p>
 * @method integer getToolAccessMode() 获取<p>连接器工具 API 类型</p><p>枚举值：</p><ul><li>1： 只读</li><li>2： 写/删除</li></ul>
 * @method void setToolAccessMode(integer $ToolAccessMode) 设置<p>连接器工具 API 类型</p><p>枚举值：</p><ul><li>1： 只读</li><li>2： 写/删除</li></ul>
 * @method boolean getIsDisabled() 获取<p>是否禁用该工具</p>
 * @method void setIsDisabled(boolean $IsDisabled) 设置<p>是否禁用该工具</p>
 */
class AgentToolInfo extends AbstractModel
{
    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var string <p>插件名称</p>
     */
    public $PluginName;

    /**
     * @var string <p>插件图标url</p>
     */
    public $IconUrl;

    /**
     * @var integer <p>0 自定义插件<br>1 官方插件<br>2 第三方插件 目前用于第三方实现的mcp server</p>
     */
    public $PluginType;

    /**
     * @var string <p>工具id</p>
     */
    public $ToolId;

    /**
     * @var string <p>工具名称</p>
     */
    public $ToolName;

    /**
     * @var string <p>工具描述</p>
     */
    public $ToolDesc;

    /**
     * @var array <p>输入参数</p>
     */
    public $Inputs;

    /**
     * @var array <p>输出参数</p>
     */
    public $Outputs;

    /**
     * @var integer <p>创建方式，0:服务创建，1:代码创建，2:MCP创建</p>
     */
    public $CreateType;

    /**
     * @var AgentMCPServerInfo <p>MCP插件的配置信息</p>
     */
    public $McpServer;

    /**
     * @var boolean <p>该工具是否和知识库绑定</p>
     */
    public $IsBindingKnowledge;

    /**
     * @var integer <p>插件状态，1:可用，2:不可用</p>
     */
    public $Status;

    /**
     * @var array <p>header信息</p>
     */
    public $Headers;

    /**
     * @var string <p>NON_STREAMING: 非流式  STREAMIN: 流式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallingMethod;

    /**
     * @var array <p>query信息</p>
     */
    public $Query;

    /**
     * @var integer <p>工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）</p>
     */
    public $FinanceStatus;

    /**
     * @var integer <p>工具来源: 0-来自插件，1-来自工作流</p>
     */
    public $ToolSource;

    /**
     * @var integer <p>计费状态；0-不计费，1-限时免费，2-官方收费</p>
     */
    public $FinanceType;

    /**
     * @var ToolAdvanceConfig <p>工具高级设置</p>
     */
    public $ToolAdvanceConfig;

    /**
     * @var integer <p>授权模式； 0-开发者授权；1-使用者授权</p>
     */
    public $AuthMode;

    /**
     * @var integer <p>授权类型; 0-无鉴权；1-APIKey；2-CAM授权；3-Oauth2.0授权；</p>
     */
    public $AuthType;

    /**
     * @var integer <p>工具授权配置状态；0：不需要授权，1：需要授权-未配置，2：需要授权-已配置</p>
     */
    public $AuthConfigStatus;

    /**
     * @var integer <p>连接器工具 API 类型</p><p>枚举值：</p><ul><li>1： 只读</li><li>2： 写/删除</li></ul>
     */
    public $ToolAccessMode;

    /**
     * @var boolean <p>是否禁用该工具</p>
     */
    public $IsDisabled;

    /**
     * @param string $PluginId <p>插件id</p>
     * @param string $PluginName <p>插件名称</p>
     * @param string $IconUrl <p>插件图标url</p>
     * @param integer $PluginType <p>0 自定义插件<br>1 官方插件<br>2 第三方插件 目前用于第三方实现的mcp server</p>
     * @param string $ToolId <p>工具id</p>
     * @param string $ToolName <p>工具名称</p>
     * @param string $ToolDesc <p>工具描述</p>
     * @param array $Inputs <p>输入参数</p>
     * @param array $Outputs <p>输出参数</p>
     * @param integer $CreateType <p>创建方式，0:服务创建，1:代码创建，2:MCP创建</p>
     * @param AgentMCPServerInfo $McpServer <p>MCP插件的配置信息</p>
     * @param boolean $IsBindingKnowledge <p>该工具是否和知识库绑定</p>
     * @param integer $Status <p>插件状态，1:可用，2:不可用</p>
     * @param array $Headers <p>header信息</p>
     * @param string $CallingMethod <p>NON_STREAMING: 非流式  STREAMIN: 流式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Query <p>query信息</p>
     * @param integer $FinanceStatus <p>工具计费状态 0-不计费 1-可用 2-不可用（欠费、无资源等）</p>
     * @param integer $ToolSource <p>工具来源: 0-来自插件，1-来自工作流</p>
     * @param integer $FinanceType <p>计费状态；0-不计费，1-限时免费，2-官方收费</p>
     * @param ToolAdvanceConfig $ToolAdvanceConfig <p>工具高级设置</p>
     * @param integer $AuthMode <p>授权模式； 0-开发者授权；1-使用者授权</p>
     * @param integer $AuthType <p>授权类型; 0-无鉴权；1-APIKey；2-CAM授权；3-Oauth2.0授权；</p>
     * @param integer $AuthConfigStatus <p>工具授权配置状态；0：不需要授权，1：需要授权-未配置，2：需要授权-已配置</p>
     * @param integer $ToolAccessMode <p>连接器工具 API 类型</p><p>枚举值：</p><ul><li>1： 只读</li><li>2： 写/删除</li></ul>
     * @param boolean $IsDisabled <p>是否禁用该工具</p>
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

        if (array_key_exists("AuthMode",$param) and $param["AuthMode"] !== null) {
            $this->AuthMode = $param["AuthMode"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthConfigStatus",$param) and $param["AuthConfigStatus"] !== null) {
            $this->AuthConfigStatus = $param["AuthConfigStatus"];
        }

        if (array_key_exists("ToolAccessMode",$param) and $param["ToolAccessMode"] !== null) {
            $this->ToolAccessMode = $param["ToolAccessMode"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }
    }
}
