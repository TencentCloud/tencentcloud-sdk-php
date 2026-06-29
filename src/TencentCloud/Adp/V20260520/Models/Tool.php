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
 * Tool
 *
 * @method ToolBilling getBilling() 获取<p>工具计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBilling(ToolBilling $Billing) 设置<p>工具计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCallCount() 获取<p>工具调用次数</p><p>单位：次数</p>
 * @method void setCallCount(integer $CallCount) 设置<p>工具调用次数</p><p>单位：次数</p>
 * @method string getDescription() 获取<p>工具描述信息</p>
 * @method void setDescription(string $Description) 设置<p>工具描述信息</p>
 * @method string getName() 获取<p>工具名称</p>
 * @method void setName(string $Name) 设置<p>工具名称</p>
 * @method string getPluginId() 获取<p>插件ID</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件ID</p>
 * @method integer getToolAccessMode() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>未指定</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>只读</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>写/删除</td></tr></tbody></table>
 * @method void setToolAccessMode(integer $ToolAccessMode) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>未指定</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>只读</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>写/删除</td></tr></tbody></table>
 * @method ToolConfig getToolConfig() 获取<p>工具配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolConfig(ToolConfig $ToolConfig) 设置<p>工具配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToolId() 获取<p>工具ID</p>
 * @method void setToolId(string $ToolId) 设置<p>工具ID</p>
 */
class Tool extends AbstractModel
{
    /**
     * @var ToolBilling <p>工具计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Billing;

    /**
     * @var integer <p>工具调用次数</p><p>单位：次数</p>
     */
    public $CallCount;

    /**
     * @var string <p>工具描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>工具名称</p>
     */
    public $Name;

    /**
     * @var string <p>插件ID</p>
     */
    public $PluginId;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>未指定</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>只读</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>写/删除</td></tr></tbody></table>
     */
    public $ToolAccessMode;

    /**
     * @var ToolConfig <p>工具配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolConfig;

    /**
     * @var string <p>工具ID</p>
     */
    public $ToolId;

    /**
     * @param ToolBilling $Billing <p>工具计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CallCount <p>工具调用次数</p><p>单位：次数</p>
     * @param string $Description <p>工具描述信息</p>
     * @param string $Name <p>工具名称</p>
     * @param string $PluginId <p>插件ID</p>
     * @param integer $ToolAccessMode <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TOOL_ACCESS_MODE_UNKNOWN</td><td>0</td><td>未指定</td></tr><tr><td>TOOL_ACCESS_MODE_READ_ONLY</td><td>1</td><td>只读</td></tr><tr><td>TOOL_ACCESS_MODE_WRITE_DELETE</td><td>2</td><td>写/删除</td></tr></tbody></table>
     * @param ToolConfig $ToolConfig <p>工具配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ToolId <p>工具ID</p>
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
        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new ToolBilling();
            $this->Billing->deserialize($param["Billing"]);
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ToolAccessMode",$param) and $param["ToolAccessMode"] !== null) {
            $this->ToolAccessMode = $param["ToolAccessMode"];
        }

        if (array_key_exists("ToolConfig",$param) and $param["ToolConfig"] !== null) {
            $this->ToolConfig = new ToolConfig();
            $this->ToolConfig->deserialize($param["ToolConfig"]);
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }
    }
}
