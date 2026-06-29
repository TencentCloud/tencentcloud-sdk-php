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
 * ToolConfig
 *
 * @method ApiToolConfig getApiToolConfig() 获取<p>API工具配置信息</p>
 * @method void setApiToolConfig(ApiToolConfig $ApiToolConfig) 设置<p>API工具配置信息</p>
 * @method AppToolConfig getAppToolConfig() 获取<p>应用配置信息</p>
 * @method void setAppToolConfig(AppToolConfig $AppToolConfig) 设置<p>应用配置信息</p>
 * @method CodeToolConfig getCodeToolConfig() 获取<p>代码工具配置信息</p>
 * @method void setCodeToolConfig(CodeToolConfig $CodeToolConfig) 设置<p>代码工具配置信息</p>
 * @method MCPToolConfig getMCPToolConfig() 获取<p>MCP工具配置信息</p>
 * @method void setMCPToolConfig(MCPToolConfig $MCPToolConfig) 设置<p>MCP工具配置信息</p>
 */
class ToolConfig extends AbstractModel
{
    /**
     * @var ApiToolConfig <p>API工具配置信息</p>
     */
    public $ApiToolConfig;

    /**
     * @var AppToolConfig <p>应用配置信息</p>
     */
    public $AppToolConfig;

    /**
     * @var CodeToolConfig <p>代码工具配置信息</p>
     */
    public $CodeToolConfig;

    /**
     * @var MCPToolConfig <p>MCP工具配置信息</p>
     */
    public $MCPToolConfig;

    /**
     * @param ApiToolConfig $ApiToolConfig <p>API工具配置信息</p>
     * @param AppToolConfig $AppToolConfig <p>应用配置信息</p>
     * @param CodeToolConfig $CodeToolConfig <p>代码工具配置信息</p>
     * @param MCPToolConfig $MCPToolConfig <p>MCP工具配置信息</p>
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
        if (array_key_exists("ApiToolConfig",$param) and $param["ApiToolConfig"] !== null) {
            $this->ApiToolConfig = new ApiToolConfig();
            $this->ApiToolConfig->deserialize($param["ApiToolConfig"]);
        }

        if (array_key_exists("AppToolConfig",$param) and $param["AppToolConfig"] !== null) {
            $this->AppToolConfig = new AppToolConfig();
            $this->AppToolConfig->deserialize($param["AppToolConfig"]);
        }

        if (array_key_exists("CodeToolConfig",$param) and $param["CodeToolConfig"] !== null) {
            $this->CodeToolConfig = new CodeToolConfig();
            $this->CodeToolConfig->deserialize($param["CodeToolConfig"]);
        }

        if (array_key_exists("MCPToolConfig",$param) and $param["MCPToolConfig"] !== null) {
            $this->MCPToolConfig = new MCPToolConfig();
            $this->MCPToolConfig->deserialize($param["MCPToolConfig"]);
        }
    }
}
