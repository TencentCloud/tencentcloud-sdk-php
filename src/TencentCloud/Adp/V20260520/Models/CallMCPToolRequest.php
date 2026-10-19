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
 * CallMCPTool请求参数结构体
 *
 * @method string getPluginId() 获取<p>能力边界：一次请求只能调该 plugin 上的工具</p>
 * @method void setPluginId(string $PluginId) 设置<p>能力边界：一次请求只能调该 plugin 上的工具</p>
 * @method string getThreadId() 获取<p>agent-exec 侧 thread</p>
 * @method void setThreadId(string $ThreadId) 设置<p>agent-exec 侧 thread</p>
 * @method string getToolName() 获取<p>工具名，用于在 plugin 配置的 tool_list 中定位 tool_id</p>
 * @method void setToolName(string $ToolName) 设置<p>工具名，用于在 plugin 配置的 tool_list 中定位 tool_id</p>
 * @method string getArguments() 获取<p>JSON：工具入参原文，原样透传给 MCP Server</p>
 * @method void setArguments(string $Arguments) 设置<p>JSON：工具入参原文，原样透传给 MCP Server</p>
 */
class CallMCPToolRequest extends AbstractModel
{
    /**
     * @var string <p>能力边界：一次请求只能调该 plugin 上的工具</p>
     */
    public $PluginId;

    /**
     * @var string <p>agent-exec 侧 thread</p>
     */
    public $ThreadId;

    /**
     * @var string <p>工具名，用于在 plugin 配置的 tool_list 中定位 tool_id</p>
     */
    public $ToolName;

    /**
     * @var string <p>JSON：工具入参原文，原样透传给 MCP Server</p>
     */
    public $Arguments;

    /**
     * @param string $PluginId <p>能力边界：一次请求只能调该 plugin 上的工具</p>
     * @param string $ThreadId <p>agent-exec 侧 thread</p>
     * @param string $ToolName <p>工具名，用于在 plugin 配置的 tool_list 中定位 tool_id</p>
     * @param string $Arguments <p>JSON：工具入参原文，原样透传给 MCP Server</p>
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

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }
    }
}
