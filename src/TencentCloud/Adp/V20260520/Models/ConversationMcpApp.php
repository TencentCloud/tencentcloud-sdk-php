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
 * MCP App 内容，供历史会话重建可交互 App
 *
 * @method string getPluginId() 获取<p>能力边界：一次请求只能读该 plugin 的资源</p>
 * @method void setPluginId(string $PluginId) 设置<p>能力边界：一次请求只能读该 plugin 的资源</p>
 * @method string getResourceUri() 获取<p>ui:// 资源，前端据此调 ReadMCPResource 拉 HTML</p>
 * @method void setResourceUri(string $ResourceUri) 设置<p>ui:// 资源，前端据此调 ReadMCPResource 拉 HTML</p>
 * @method string getThreadId() 获取<p>agent-exec 侧 thread</p>
 * @method void setThreadId(string $ThreadId) 设置<p>agent-exec 侧 thread</p>
 * @method string getToolResult() 获取<p>JSON：完整 CallToolResult 原文，供历史会话重建时重放</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolResult(string $ToolResult) 设置<p>JSON：完整 CallToolResult 原文，供历史会话重建时重放</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConversationMcpApp extends AbstractModel
{
    /**
     * @var string <p>能力边界：一次请求只能读该 plugin 的资源</p>
     */
    public $PluginId;

    /**
     * @var string <p>ui:// 资源，前端据此调 ReadMCPResource 拉 HTML</p>
     */
    public $ResourceUri;

    /**
     * @var string <p>agent-exec 侧 thread</p>
     */
    public $ThreadId;

    /**
     * @var string <p>JSON：完整 CallToolResult 原文，供历史会话重建时重放</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolResult;

    /**
     * @param string $PluginId <p>能力边界：一次请求只能读该 plugin 的资源</p>
     * @param string $ResourceUri <p>ui:// 资源，前端据此调 ReadMCPResource 拉 HTML</p>
     * @param string $ThreadId <p>agent-exec 侧 thread</p>
     * @param string $ToolResult <p>JSON：完整 CallToolResult 原文，供历史会话重建时重放</p>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ResourceUri",$param) and $param["ResourceUri"] !== null) {
            $this->ResourceUri = $param["ResourceUri"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("ToolResult",$param) and $param["ToolResult"] !== null) {
            $this->ToolResult = $param["ToolResult"];
        }
    }
}
