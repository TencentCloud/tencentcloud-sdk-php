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
 * MCP 实体
 *
 * @method string getMCPId() 获取<p>mcp的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCPId(string $MCPId) 设置<p>mcp的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>MCP 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>MCP 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>MCP 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>MCP 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取<p>MCP URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置<p>MCP URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransport() 获取<p>传输协议: sse / streamable_http / stdio</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransport(string $Transport) 设置<p>传输协议: sse / streamable_http / stdio</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取<p>认证类型: none / bearer / basic / api_key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置<p>认证类型: none / bearer / basic / api_key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthSecret() 获取<p>认证密钥(响应时脱敏)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthSecret(string $AuthSecret) 设置<p>认证密钥(响应时脱敏)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryCount() 获取<p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeaders() 获取<p>请求头 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(string $Headers) 设置<p>请求头 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MCPInfo extends AbstractModel
{
    /**
     * @var string <p>mcp的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCPId;

    /**
     * @var string <p>MCP 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>MCP 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>MCP URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string <p>传输协议: sse / streamable_http / stdio</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transport;

    /**
     * @var string <p>认证类型: none / bearer / basic / api_key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string <p>认证密钥(响应时脱敏)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthSecret;

    /**
     * @var integer <p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var integer <p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryCount;

    /**
     * @var string <p>请求头 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var boolean <p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @param string $MCPId <p>mcp的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>MCP 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>MCP 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url <p>MCP URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Transport <p>传输协议: sse / streamable_http / stdio</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType <p>认证类型: none / bearer / basic / api_key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthSecret <p>认证密钥(响应时脱敏)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>超时时间(秒)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryCount <p>重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Headers <p>请求头 JSON</p>
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
        if (array_key_exists("MCPId",$param) and $param["MCPId"] !== null) {
            $this->MCPId = $param["MCPId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Transport",$param) and $param["Transport"] !== null) {
            $this->Transport = $param["Transport"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthSecret",$param) and $param["AuthSecret"] !== null) {
            $this->AuthSecret = $param["AuthSecret"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
