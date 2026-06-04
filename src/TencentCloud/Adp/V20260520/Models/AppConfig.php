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
 * 应用配置 - 用户可修改的所有配置
 *
 * @method AppExperienceConfig getExperience() 获取体验配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExperience(AppExperienceConfig $Experience) 设置体验配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppGreetingConfig getGreeting() 获取欢迎语配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGreeting(AppGreetingConfig $Greeting) 设置欢迎语配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppMemoryConfig getMemory() 获取记忆配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(AppMemoryConfig $Memory) 设置记忆配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppModeConfig getMode() 获取模式相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(AppModeConfig $Mode) 设置模式相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppModelConfig getModel() 获取模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(AppModelConfig $Model) 设置模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppWebSearchConfig getWebSearch() 获取联网搜索配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSearch(AppWebSearchConfig $WebSearch) 设置联网搜索配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppWorkflowConfig getWorkflow() 获取工作流配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflow(AppWorkflowConfig $Workflow) 设置工作流配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppConfig extends AbstractModel
{
    /**
     * @var AppExperienceConfig 体验配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Experience;

    /**
     * @var AppGreetingConfig 欢迎语配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Greeting;

    /**
     * @var AppMemoryConfig 记忆配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var AppModeConfig 模式相关配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var AppModelConfig 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var AppWebSearchConfig 联网搜索配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSearch;

    /**
     * @var AppWorkflowConfig 工作流配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workflow;

    /**
     * @param AppExperienceConfig $Experience 体验配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppGreetingConfig $Greeting 欢迎语配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppMemoryConfig $Memory 记忆配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppModeConfig $Mode 模式相关配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppModelConfig $Model 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppWebSearchConfig $WebSearch 联网搜索配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppWorkflowConfig $Workflow 工作流配置
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
        if (array_key_exists("Experience",$param) and $param["Experience"] !== null) {
            $this->Experience = new AppExperienceConfig();
            $this->Experience->deserialize($param["Experience"]);
        }

        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = new AppGreetingConfig();
            $this->Greeting->deserialize($param["Greeting"]);
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = new AppMemoryConfig();
            $this->Memory->deserialize($param["Memory"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = new AppModeConfig();
            $this->Mode->deserialize($param["Mode"]);
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModelConfig();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("WebSearch",$param) and $param["WebSearch"] !== null) {
            $this->WebSearch = new AppWebSearchConfig();
            $this->WebSearch->deserialize($param["WebSearch"]);
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = new AppWorkflowConfig();
            $this->Workflow->deserialize($param["Workflow"]);
        }
    }
}
