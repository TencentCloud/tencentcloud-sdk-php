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
 * Agent 可编辑配置
 *
 * @method AgentProfile getProfile() 获取<p>Agent基本配置</p>
 * @method void setProfile(AgentProfile $Profile) 设置<p>Agent基本配置</p>
 * @method string getInstructions() 获取系统提示词
 * @method void setInstructions(string $Instructions) 设置系统提示词
 * @method AgentModelConfig getModel() 获取主模型配置
 * @method void setModel(AgentModelConfig $Model) 设置主模型配置
 * @method array getToolList() 获取<p>工具信息</p>
 * @method void setToolList(array $ToolList) 设置<p>工具信息</p>
 * @method array getPluginList() 获取<p>插件信息</p>
 * @method void setPluginList(array $PluginList) 设置<p>插件信息</p>
 * @method array getSkillList() 获取<p>技能信息</p>
 * @method void setSkillList(array $SkillList) 设置<p>技能信息</p>
 * @method AgentAdvancedConfig getAdvancedConfig() 获取高级设置
 * @method void setAdvancedConfig(AgentAdvancedConfig $AdvancedConfig) 设置高级设置
 */
class AgentSpec extends AbstractModel
{
    /**
     * @var AgentProfile <p>Agent基本配置</p>
     */
    public $Profile;

    /**
     * @var string 系统提示词
     */
    public $Instructions;

    /**
     * @var AgentModelConfig 主模型配置
     */
    public $Model;

    /**
     * @var array <p>工具信息</p>
     */
    public $ToolList;

    /**
     * @var array <p>插件信息</p>
     */
    public $PluginList;

    /**
     * @var array <p>技能信息</p>
     */
    public $SkillList;

    /**
     * @var AgentAdvancedConfig 高级设置
     */
    public $AdvancedConfig;

    /**
     * @param AgentProfile $Profile <p>Agent基本配置</p>
     * @param string $Instructions 系统提示词
     * @param AgentModelConfig $Model 主模型配置
     * @param array $ToolList <p>工具信息</p>
     * @param array $PluginList <p>插件信息</p>
     * @param array $SkillList <p>技能信息</p>
     * @param AgentAdvancedConfig $AdvancedConfig 高级设置
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
                $obj = new AgentToolConfig();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("PluginList",$param) and $param["PluginList"] !== null) {
            $this->PluginList = [];
            foreach ($param["PluginList"] as $key => $value){
                $obj = new AgentPluginConfig();
                $obj->deserialize($value);
                array_push($this->PluginList, $obj);
            }
        }

        if (array_key_exists("SkillList",$param) and $param["SkillList"] !== null) {
            $this->SkillList = [];
            foreach ($param["SkillList"] as $key => $value){
                $obj = new AgentSkillConfig();
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
