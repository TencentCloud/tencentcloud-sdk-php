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
 * Agent 详情
 *
 * @method string getAgentId() 获取<p>Agent ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID</p>
 * @method AgentProfile getProfile() 获取<p>Agent基本配置</p>
 * @method void setProfile(AgentProfile $Profile) 设置<p>Agent基本配置</p>
 * @method string getInstructions() 获取<p>系统提示词</p>
 * @method void setInstructions(string $Instructions) 设置<p>系统提示词</p>
 * @method AgentModelConfig getModel() 获取<p>模型信息</p>
 * @method void setModel(AgentModelConfig $Model) 设置<p>模型信息</p>
 * @method array getToolList() 获取<p>工具详情</p>
 * @method void setToolList(array $ToolList) 设置<p>工具详情</p>
 * @method array getPluginList() 获取<p>插件配置</p>
 * @method void setPluginList(array $PluginList) 设置<p>插件配置</p>
 * @method array getSkillList() 获取<p>技能详情</p>
 * @method void setSkillList(array $SkillList) 设置<p>技能详情</p>
 * @method AgentAdvancedConfig getAdvancedConfig() 获取<p>高级配置</p>
 * @method void setAdvancedConfig(AgentAdvancedConfig $AdvancedConfig) 设置<p>高级配置</p>
 */
class AgentDetail extends AbstractModel
{
    /**
     * @var string <p>Agent ID</p>
     */
    public $AgentId;

    /**
     * @var AgentProfile <p>Agent基本配置</p>
     */
    public $Profile;

    /**
     * @var string <p>系统提示词</p>
     */
    public $Instructions;

    /**
     * @var AgentModelConfig <p>模型信息</p>
     */
    public $Model;

    /**
     * @var array <p>工具详情</p>
     */
    public $ToolList;

    /**
     * @var array <p>插件配置</p>
     */
    public $PluginList;

    /**
     * @var array <p>技能详情</p>
     */
    public $SkillList;

    /**
     * @var AgentAdvancedConfig <p>高级配置</p>
     */
    public $AdvancedConfig;

    /**
     * @param string $AgentId <p>Agent ID</p>
     * @param AgentProfile $Profile <p>Agent基本配置</p>
     * @param string $Instructions <p>系统提示词</p>
     * @param AgentModelConfig $Model <p>模型信息</p>
     * @param array $ToolList <p>工具详情</p>
     * @param array $PluginList <p>插件配置</p>
     * @param array $SkillList <p>技能详情</p>
     * @param AgentAdvancedConfig $AdvancedConfig <p>高级配置</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new AgentProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Instructions",$param) and $param["Instructions"] !== null) {
            $this->Instructions = $param["Instructions"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AgentModelConfig();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = [];
            foreach ($param["ToolList"] as $key => $value){
                $obj = new AgentTool();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("PluginList",$param) and $param["PluginList"] !== null) {
            $this->PluginList = [];
            foreach ($param["PluginList"] as $key => $value){
                $obj = new AgentPlugin();
                $obj->deserialize($value);
                array_push($this->PluginList, $obj);
            }
        }

        if (array_key_exists("SkillList",$param) and $param["SkillList"] !== null) {
            $this->SkillList = [];
            foreach ($param["SkillList"] as $key => $value){
                $obj = new AgentSkill();
                $obj->deserialize($value);
                array_push($this->SkillList, $obj);
            }
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AgentAdvancedConfig();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }
    }
}
