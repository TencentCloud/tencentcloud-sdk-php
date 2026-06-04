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
 * 插件的工具信息
 *
 * @method string getDescription() 获取工具描述信息
 * @method void setDescription(string $Description) 设置工具描述信息
 * @method string getName() 获取工具名称
 * @method void setName(string $Name) 设置工具名称
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method string getToolId() 获取工具id
 * @method void setToolId(string $ToolId) 设置工具id
 * @method ToolBilling getBilling() 获取工具计费信息
 * @method void setBilling(ToolBilling $Billing) 设置工具计费信息
 * @method integer getCallCount() 获取工具调用次数
 * @method void setCallCount(integer $CallCount) 设置工具调用次数
 * @method integer getToolAccessMode() 获取<p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： READ_ONLY</li><li>2： WRITE_DELETE</li></ul>
 * @method void setToolAccessMode(integer $ToolAccessMode) 设置<p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： READ_ONLY</li><li>2： WRITE_DELETE</li></ul>
 * @method ToolConfig getToolConfig() 获取工具配置
 * @method void setToolConfig(ToolConfig $ToolConfig) 设置工具配置
 */
class Tool extends AbstractModel
{
    /**
     * @var string 工具描述信息
     */
    public $Description;

    /**
     * @var string 工具名称
     */
    public $Name;

    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var string 工具id
     */
    public $ToolId;

    /**
     * @var ToolBilling 工具计费信息
     */
    public $Billing;

    /**
     * @var integer 工具调用次数
     */
    public $CallCount;

    /**
     * @var integer <p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： READ_ONLY</li><li>2： WRITE_DELETE</li></ul>
     */
    public $ToolAccessMode;

    /**
     * @var ToolConfig 工具配置
     */
    public $ToolConfig;

    /**
     * @param string $Description 工具描述信息
     * @param string $Name 工具名称
     * @param string $PluginId 插件id
     * @param string $ToolId 工具id
     * @param ToolBilling $Billing 工具计费信息
     * @param integer $CallCount 工具调用次数
     * @param integer $ToolAccessMode <p>工具访问模式</p><p>枚举值：</p><ul><li>0： 未指定</li><li>1： READ_ONLY</li><li>2： WRITE_DELETE</li></ul>
     * @param ToolConfig $ToolConfig 工具配置
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new ToolBilling();
            $this->Billing->deserialize($param["Billing"]);
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("ToolAccessMode",$param) and $param["ToolAccessMode"] !== null) {
            $this->ToolAccessMode = $param["ToolAccessMode"];
        }

        if (array_key_exists("ToolConfig",$param) and $param["ToolConfig"] !== null) {
            $this->ToolConfig = new ToolConfig();
            $this->ToolConfig->deserialize($param["ToolConfig"]);
        }
    }
}
