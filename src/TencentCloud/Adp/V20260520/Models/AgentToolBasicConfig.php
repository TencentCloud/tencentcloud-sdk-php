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
 * Agent的工具基础配置
 *
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method string getToolId() 获取<p>工具id</p>
 * @method void setToolId(string $ToolId) 设置<p>工具id</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getInputList() 获取<p>工具输入参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputList(array $InputList) 设置<p>工具输入参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutputList() 获取<p>工具输出参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputList(array $OutputList) 设置<p>工具输出参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaderParameterList() 获取<p>工具Header参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderParameterList(array $HeaderParameterList) 设置<p>工具Header参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQueryParameterList() 获取<p>工具Query参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryParameterList(array $QueryParameterList) 设置<p>工具Query参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getToolSource() 获取<p>工具来源: 0-来自插件，1-来自工作流</p>
 * @method void setToolSource(integer $ToolSource) 设置<p>工具来源: 0-来自插件，1-来自工作流</p>
 * @method boolean getIsDisabled() 获取<p>是否禁用</p>
 * @method void setIsDisabled(boolean $IsDisabled) 设置<p>是否禁用</p>
 */
class AgentToolBasicConfig extends AbstractModel
{
    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var string <p>工具id</p>
     */
    public $ToolId;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>工具输入参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputList;

    /**
     * @var array <p>工具输出参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputList;

    /**
     * @var array <p>工具Header参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderParameterList;

    /**
     * @var array <p>工具Query参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryParameterList;

    /**
     * @var integer <p>工具来源: 0-来自插件，1-来自工作流</p>
     */
    public $ToolSource;

    /**
     * @var boolean <p>是否禁用</p>
     */
    public $IsDisabled;

    /**
     * @param string $PluginId <p>插件id</p>
     * @param string $ToolId <p>工具id</p>
     * @param string $Description <p>描述</p>
     * @param array $InputList <p>工具输入参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OutputList <p>工具输出参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeaderParameterList <p>工具Header参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QueryParameterList <p>工具Query参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ToolSource <p>工具来源: 0-来自插件，1-来自工作流</p>
     * @param boolean $IsDisabled <p>是否禁用</p>
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

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputList",$param) and $param["InputList"] !== null) {
            $this->InputList = [];
            foreach ($param["InputList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->InputList, $obj);
            }
        }

        if (array_key_exists("OutputList",$param) and $param["OutputList"] !== null) {
            $this->OutputList = [];
            foreach ($param["OutputList"] as $key => $value){
                $obj = new AgentToolOutputParameter();
                $obj->deserialize($value);
                array_push($this->OutputList, $obj);
            }
        }

        if (array_key_exists("HeaderParameterList",$param) and $param["HeaderParameterList"] !== null) {
            $this->HeaderParameterList = [];
            foreach ($param["HeaderParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->HeaderParameterList, $obj);
            }
        }

        if (array_key_exists("QueryParameterList",$param) and $param["QueryParameterList"] !== null) {
            $this->QueryParameterList = [];
            foreach ($param["QueryParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->QueryParameterList, $obj);
            }
        }

        if (array_key_exists("ToolSource",$param) and $param["ToolSource"] !== null) {
            $this->ToolSource = $param["ToolSource"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }
    }
}
