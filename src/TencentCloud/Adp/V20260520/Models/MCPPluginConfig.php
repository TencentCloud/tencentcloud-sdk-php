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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP插件配置信息
 *
 * @method string getExternalMCPServerUrl() 获取<p>MCP插件外部访问地址</p>
 * @method void setExternalMCPServerUrl(string $ExternalMCPServerUrl) 设置<p>MCP插件外部访问地址</p>
 * @method string getMCPServerUrl() 获取<p>MCP server地址</p>
 * @method void setMCPServerUrl(string $MCPServerUrl) 设置<p>MCP server地址</p>
 * @method integer getMCPTransport() 获取<p>MCP传输类型: SSE/Streamable<br>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | SSE + HTTP 模式 |<br>| 1 | Streamable HTTP 模式 |</p>
 * @method void setMCPTransport(integer $MCPTransport) 设置<p>MCP传输类型: SSE/Streamable<br>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | SSE + HTTP 模式 |<br>| 1 | Streamable HTTP 模式 |</p>
 * @method array getPluginHeader() 获取<p>MCP插件的header参数</p>
 * @method void setPluginHeader(array $PluginHeader) 设置<p>MCP插件的header参数</p>
 * @method array getPluginQuery() 获取<p>MCP插件的query参数</p>
 * @method void setPluginQuery(array $PluginQuery) 设置<p>MCP插件的query参数</p>
 * @method integer getSSEReadTimeout() 获取<p>SSE长连接超时时间，单位秒</p>
 * @method void setSSEReadTimeout(integer $SSEReadTimeout) 设置<p>SSE长连接超时时间，单位秒</p>
 * @method integer getTimeout() 获取<p>请求超时时间，单位秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>请求超时时间，单位秒</p>
 * @method AuthConfig getAuthConfig() 获取<p>授权信息</p>
 * @method void setAuthConfig(AuthConfig $AuthConfig) 设置<p>授权信息</p>
 */
class MCPPluginConfig extends AbstractModel
{
    /**
     * @var string <p>MCP插件外部访问地址</p>
     */
    public $ExternalMCPServerUrl;

    /**
     * @var string <p>MCP server地址</p>
     */
    public $MCPServerUrl;

    /**
     * @var integer <p>MCP传输类型: SSE/Streamable<br>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | SSE + HTTP 模式 |<br>| 1 | Streamable HTTP 模式 |</p>
     */
    public $MCPTransport;

    /**
     * @var array <p>MCP插件的header参数</p>
     */
    public $PluginHeader;

    /**
     * @var array <p>MCP插件的query参数</p>
     */
    public $PluginQuery;

    /**
     * @var integer <p>SSE长连接超时时间，单位秒</p>
     */
    public $SSEReadTimeout;

    /**
     * @var integer <p>请求超时时间，单位秒</p>
     */
    public $Timeout;

    /**
     * @var AuthConfig <p>授权信息</p>
     */
    public $AuthConfig;

    /**
     * @param string $ExternalMCPServerUrl <p>MCP插件外部访问地址</p>
     * @param string $MCPServerUrl <p>MCP server地址</p>
     * @param integer $MCPTransport <p>MCP传输类型: SSE/Streamable<br>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | SSE + HTTP 模式 |<br>| 1 | Streamable HTTP 模式 |</p>
     * @param array $PluginHeader <p>MCP插件的header参数</p>
     * @param array $PluginQuery <p>MCP插件的query参数</p>
     * @param integer $SSEReadTimeout <p>SSE长连接超时时间，单位秒</p>
     * @param integer $Timeout <p>请求超时时间，单位秒</p>
     * @param AuthConfig $AuthConfig <p>授权信息</p>
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
        if (array_key_exists("ExternalMCPServerUrl",$param) and $param["ExternalMCPServerUrl"] !== null) {
            $this->ExternalMCPServerUrl = $param["ExternalMCPServerUrl"];
        }

        if (array_key_exists("MCPServerUrl",$param) and $param["MCPServerUrl"] !== null) {
            $this->MCPServerUrl = $param["MCPServerUrl"];
        }

        if (array_key_exists("MCPTransport",$param) and $param["MCPTransport"] !== null) {
            $this->MCPTransport = $param["MCPTransport"];
        }

        if (array_key_exists("PluginHeader",$param) and $param["PluginHeader"] !== null) {
            $this->PluginHeader = [];
            foreach ($param["PluginHeader"] as $key => $value){
                $obj = new PluginParam();
                $obj->deserialize($value);
                array_push($this->PluginHeader, $obj);
            }
        }

        if (array_key_exists("PluginQuery",$param) and $param["PluginQuery"] !== null) {
            $this->PluginQuery = [];
            foreach ($param["PluginQuery"] as $key => $value){
                $obj = new PluginParam();
                $obj->deserialize($value);
                array_push($this->PluginQuery, $obj);
            }
        }

        if (array_key_exists("SSEReadTimeout",$param) and $param["SSEReadTimeout"] !== null) {
            $this->SSEReadTimeout = $param["SSEReadTimeout"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("AuthConfig",$param) and $param["AuthConfig"] !== null) {
            $this->AuthConfig = new AuthConfig();
            $this->AuthConfig->deserialize($param["AuthConfig"]);
        }
    }
}
