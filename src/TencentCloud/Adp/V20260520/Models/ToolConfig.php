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
 * @method ApiToolConfig getApiToolConfig() 获取API插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiToolConfig(ApiToolConfig $ApiToolConfig) 设置API插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppToolConfig getAppToolConfig() 获取应用插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppToolConfig(AppToolConfig $AppToolConfig) 设置应用插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method CodeToolConfig getCodeToolConfig() 获取代码插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeToolConfig(CodeToolConfig $CodeToolConfig) 设置代码插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method MCPToolConfig getMCPToolConfig() 获取mcp插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCPToolConfig(MCPToolConfig $MCPToolConfig) 设置mcp插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ToolConfig extends AbstractModel
{
    /**
     * @var ApiToolConfig API插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiToolConfig;

    /**
     * @var AppToolConfig 应用插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppToolConfig;

    /**
     * @var CodeToolConfig 代码插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeToolConfig;

    /**
     * @var MCPToolConfig mcp插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCPToolConfig;

    /**
     * @param ApiToolConfig $ApiToolConfig API插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppToolConfig $AppToolConfig 应用插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param CodeToolConfig $CodeToolConfig 代码插件工具配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param MCPToolConfig $MCPToolConfig mcp插件工具配置
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
