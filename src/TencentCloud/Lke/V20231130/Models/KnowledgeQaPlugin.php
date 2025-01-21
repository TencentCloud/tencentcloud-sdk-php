<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 应用关联插件信息
 *
 * @method string getPluginId() 获取插件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginId(string $PluginId) 设置插件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPluginName() 获取插件名称
 * @method void setPluginName(string $PluginName) 设置插件名称
 * @method string getPluginIcon() 获取插件图标
 * @method void setPluginIcon(string $PluginIcon) 设置插件图标
 * @method string getToolId() 获取工具ID
 * @method void setToolId(string $ToolId) 设置工具ID
 * @method string getToolName() 获取工具名称
 * @method void setToolName(string $ToolName) 设置工具名称
 * @method string getToolDesc() 获取工具描述
 * @method void setToolDesc(string $ToolDesc) 设置工具描述
 * @method array getInputs() 获取工具输入参数
 * @method void setInputs(array $Inputs) 设置工具输入参数
 * @method boolean getIsBindingKnowledge() 获取插件是否和知识库绑定
 * @method void setIsBindingKnowledge(boolean $IsBindingKnowledge) 设置插件是否和知识库绑定
 */
class KnowledgeQaPlugin extends AbstractModel
{
    /**
     * @var string 插件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginId;

    /**
     * @var string 插件名称
     */
    public $PluginName;

    /**
     * @var string 插件图标
     */
    public $PluginIcon;

    /**
     * @var string 工具ID
     */
    public $ToolId;

    /**
     * @var string 工具名称
     */
    public $ToolName;

    /**
     * @var string 工具描述
     */
    public $ToolDesc;

    /**
     * @var array 工具输入参数
     */
    public $Inputs;

    /**
     * @var boolean 插件是否和知识库绑定
     */
    public $IsBindingKnowledge;

    /**
     * @param string $PluginId 插件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PluginName 插件名称
     * @param string $PluginIcon 插件图标
     * @param string $ToolId 工具ID
     * @param string $ToolName 工具名称
     * @param string $ToolDesc 工具描述
     * @param array $Inputs 工具输入参数
     * @param boolean $IsBindingKnowledge 插件是否和知识库绑定
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

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginIcon",$param) and $param["PluginIcon"] !== null) {
            $this->PluginIcon = $param["PluginIcon"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolDesc",$param) and $param["ToolDesc"] !== null) {
            $this->ToolDesc = $param["ToolDesc"];
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new PluginToolReqParam();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }

        if (array_key_exists("IsBindingKnowledge",$param) and $param["IsBindingKnowledge"] !== null) {
            $this->IsBindingKnowledge = $param["IsBindingKnowledge"];
        }
    }
}
