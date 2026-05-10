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
 * Agent 的插件信息
 *
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method array getHeaders() 获取<p>应用配置的插件header信息</p>
 * @method void setHeaders(array $Headers) 设置<p>应用配置的插件header信息</p>
 * @method AgentModelInfo getModel() 获取<p>插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(AgentModelInfo $Model) 设置<p>插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPluginInfoType() 获取<p>插件信息类型; 0: 未指定类型; 1: 知识库问答插件</p>
 * @method void setPluginInfoType(integer $PluginInfoType) 设置<p>插件信息类型; 0: 未指定类型; 1: 知识库问答插件</p>
 * @method AgentKnowledgeQAPlugin getKnowledgeQa() 获取<p>知识库问答插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeQa(AgentKnowledgeQAPlugin $KnowledgeQa) 设置<p>知识库问答插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableRoleAuth() 获取<p>是否使用一键授权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRoleAuth(boolean $EnableRoleAuth) 设置<p>是否使用一键授权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuery() 获取<p>应用配置的插件query信息</p>
 * @method void setQuery(array $Query) 设置<p>应用配置的插件query信息</p>
 * @method integer getMcpType() 获取<p>MCP类型</p><p>枚举值：</p><ul><li>0： SSE 模式</li><li>1： Streamable Http 模式</li></ul>
 * @method void setMcpType(integer $McpType) 设置<p>MCP类型</p><p>枚举值：</p><ul><li>0： SSE 模式</li><li>1： Streamable Http 模式</li></ul>
 * @method integer getAuthMode() 获取<p>OAuth授权主体</p><p>枚举值：</p><ul><li>0： 开发者授权</li><li>1： 使用者授权</li></ul>
 * @method void setAuthMode(integer $AuthMode) 设置<p>OAuth授权主体</p><p>枚举值：</p><ul><li>0： 开发者授权</li><li>1： 使用者授权</li></ul>
 * @method integer getAuthType() 获取<p>授权方式</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： api key鉴权</li><li>2： 支持CAM授权</li><li>3： 支持Oauth2.0授权</li></ul>
 * @method void setAuthType(integer $AuthType) 设置<p>授权方式</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： api key鉴权</li><li>2： 支持CAM授权</li><li>3： 支持Oauth2.0授权</li></ul>
 * @method integer getAuthConfigStatus() 获取<p>授权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
 * @method void setAuthConfigStatus(integer $AuthConfigStatus) 设置<p>授权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
 * @method integer getPluginClass() 获取<p>插件用途类型</p><p>枚举值：</p><ul><li>0： 工具类</li><li>1： 连接器类</li></ul>
 * @method void setPluginClass(integer $PluginClass) 设置<p>插件用途类型</p><p>枚举值：</p><ul><li>0： 工具类</li><li>1： 连接器类</li></ul>
 * @method integer getPluginStatus() 获取<p>插件状态</p><p>枚举值：</p><ul><li>1： 成功</li><li>2： 不可用</li></ul>
 * @method void setPluginStatus(integer $PluginStatus) 设置<p>插件状态</p><p>枚举值：</p><ul><li>1： 成功</li><li>2： 不可用</li></ul>
 */
class AgentPluginInfo extends AbstractModel
{
    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var array <p>应用配置的插件header信息</p>
     */
    public $Headers;

    /**
     * @var AgentModelInfo <p>插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var integer <p>插件信息类型; 0: 未指定类型; 1: 知识库问答插件</p>
     */
    public $PluginInfoType;

    /**
     * @var AgentKnowledgeQAPlugin <p>知识库问答插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeQa;

    /**
     * @var boolean <p>是否使用一键授权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRoleAuth;

    /**
     * @var array <p>应用配置的插件query信息</p>
     */
    public $Query;

    /**
     * @var integer <p>MCP类型</p><p>枚举值：</p><ul><li>0： SSE 模式</li><li>1： Streamable Http 模式</li></ul>
     */
    public $McpType;

    /**
     * @var integer <p>OAuth授权主体</p><p>枚举值：</p><ul><li>0： 开发者授权</li><li>1： 使用者授权</li></ul>
     */
    public $AuthMode;

    /**
     * @var integer <p>授权方式</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： api key鉴权</li><li>2： 支持CAM授权</li><li>3： 支持Oauth2.0授权</li></ul>
     */
    public $AuthType;

    /**
     * @var integer <p>授权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
     */
    public $AuthConfigStatus;

    /**
     * @var integer <p>插件用途类型</p><p>枚举值：</p><ul><li>0： 工具类</li><li>1： 连接器类</li></ul>
     */
    public $PluginClass;

    /**
     * @var integer <p>插件状态</p><p>枚举值：</p><ul><li>1： 成功</li><li>2： 不可用</li></ul>
     */
    public $PluginStatus;

    /**
     * @param string $PluginId <p>插件id</p>
     * @param array $Headers <p>应用配置的插件header信息</p>
     * @param AgentModelInfo $Model <p>插件调用LLM时使用的模型配置，一般用于指定知识库问答插件的生成模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PluginInfoType <p>插件信息类型; 0: 未指定类型; 1: 知识库问答插件</p>
     * @param AgentKnowledgeQAPlugin $KnowledgeQa <p>知识库问答插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableRoleAuth <p>是否使用一键授权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Query <p>应用配置的插件query信息</p>
     * @param integer $McpType <p>MCP类型</p><p>枚举值：</p><ul><li>0： SSE 模式</li><li>1： Streamable Http 模式</li></ul>
     * @param integer $AuthMode <p>OAuth授权主体</p><p>枚举值：</p><ul><li>0： 开发者授权</li><li>1： 使用者授权</li></ul>
     * @param integer $AuthType <p>授权方式</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： api key鉴权</li><li>2： 支持CAM授权</li><li>3： 支持Oauth2.0授权</li></ul>
     * @param integer $AuthConfigStatus <p>授权配置状态</p><p>枚举值：</p><ul><li>0： 不需要授权</li><li>1： 未配置</li><li>2： 已配置</li></ul>
     * @param integer $PluginClass <p>插件用途类型</p><p>枚举值：</p><ul><li>0： 工具类</li><li>1： 连接器类</li></ul>
     * @param integer $PluginStatus <p>插件状态</p><p>枚举值：</p><ul><li>1： 成功</li><li>2： 不可用</li></ul>
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

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new AgentPluginHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AgentModelInfo();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("PluginInfoType",$param) and $param["PluginInfoType"] !== null) {
            $this->PluginInfoType = $param["PluginInfoType"];
        }

        if (array_key_exists("KnowledgeQa",$param) and $param["KnowledgeQa"] !== null) {
            $this->KnowledgeQa = new AgentKnowledgeQAPlugin();
            $this->KnowledgeQa->deserialize($param["KnowledgeQa"]);
        }

        if (array_key_exists("EnableRoleAuth",$param) and $param["EnableRoleAuth"] !== null) {
            $this->EnableRoleAuth = $param["EnableRoleAuth"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = [];
            foreach ($param["Query"] as $key => $value){
                $obj = new AgentPluginQuery();
                $obj->deserialize($value);
                array_push($this->Query, $obj);
            }
        }

        if (array_key_exists("McpType",$param) and $param["McpType"] !== null) {
            $this->McpType = $param["McpType"];
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

        if (array_key_exists("PluginClass",$param) and $param["PluginClass"] !== null) {
            $this->PluginClass = $param["PluginClass"];
        }

        if (array_key_exists("PluginStatus",$param) and $param["PluginStatus"] !== null) {
            $this->PluginStatus = $param["PluginStatus"];
        }
    }
}
