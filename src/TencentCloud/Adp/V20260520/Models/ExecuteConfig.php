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
 * ExecuteConfig
 *
 * @method AppTriggerPromptExecuteConfig getPromptConfig() 获取<p>Prompt配置</p>
 * @method void setPromptConfig(AppTriggerPromptExecuteConfig $PromptConfig) 设置<p>Prompt配置</p>
 * @method AppTriggerWorkflowExecuteConfig getWorkflowConfig() 获取<p>工作流配置</p>
 * @method void setWorkflowConfig(AppTriggerWorkflowExecuteConfig $WorkflowConfig) 设置<p>工作流配置</p>
 */
class ExecuteConfig extends AbstractModel
{
    /**
     * @var AppTriggerPromptExecuteConfig <p>Prompt配置</p>
     */
    public $PromptConfig;

    /**
     * @var AppTriggerWorkflowExecuteConfig <p>工作流配置</p>
     */
    public $WorkflowConfig;

    /**
     * @param AppTriggerPromptExecuteConfig $PromptConfig <p>Prompt配置</p>
     * @param AppTriggerWorkflowExecuteConfig $WorkflowConfig <p>工作流配置</p>
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
        if (array_key_exists("PromptConfig",$param) and $param["PromptConfig"] !== null) {
            $this->PromptConfig = new AppTriggerPromptExecuteConfig();
            $this->PromptConfig->deserialize($param["PromptConfig"]);
        }

        if (array_key_exists("WorkflowConfig",$param) and $param["WorkflowConfig"] !== null) {
            $this->WorkflowConfig = new AppTriggerWorkflowExecuteConfig();
            $this->WorkflowConfig->deserialize($param["WorkflowConfig"]);
        }
    }
}
