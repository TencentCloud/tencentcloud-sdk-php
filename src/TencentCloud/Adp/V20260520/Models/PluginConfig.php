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
 * 插件配置
 *
 * @method ApiPluginConfig getApiPluginConfig() 获取API插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiPluginConfig(ApiPluginConfig $ApiPluginConfig) 设置API插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppPluginConfig getAppPluginConfig() 获取应用插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppPluginConfig(AppPluginConfig $AppPluginConfig) 设置应用插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method MCPPluginConfig getMCPPluginConfig() 获取mcp插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCPPluginConfig(MCPPluginConfig $MCPPluginConfig) 设置mcp插件配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class PluginConfig extends AbstractModel
{
    /**
     * @var ApiPluginConfig API插件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiPluginConfig;

    /**
     * @var AppPluginConfig 应用插件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppPluginConfig;

    /**
     * @var MCPPluginConfig mcp插件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCPPluginConfig;

    /**
     * @param ApiPluginConfig $ApiPluginConfig API插件配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppPluginConfig $AppPluginConfig 应用插件配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param MCPPluginConfig $MCPPluginConfig mcp插件配置
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
        if (array_key_exists("ApiPluginConfig",$param) and $param["ApiPluginConfig"] !== null) {
            $this->ApiPluginConfig = new ApiPluginConfig();
            $this->ApiPluginConfig->deserialize($param["ApiPluginConfig"]);
        }

        if (array_key_exists("AppPluginConfig",$param) and $param["AppPluginConfig"] !== null) {
            $this->AppPluginConfig = new AppPluginConfig();
            $this->AppPluginConfig->deserialize($param["AppPluginConfig"]);
        }

        if (array_key_exists("MCPPluginConfig",$param) and $param["MCPPluginConfig"] !== null) {
            $this->MCPPluginConfig = new MCPPluginConfig();
            $this->MCPPluginConfig->deserialize($param["MCPPluginConfig"]);
        }
    }
}
