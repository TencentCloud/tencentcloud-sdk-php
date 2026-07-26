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
 * AppTriggerWorkflowExecuteConfig
 *
 * @method AppTriggerParamBindingConfig getParamBindingsApi() 获取<p>工作流API参数绑定</p>
 * @method void setParamBindingsApi(AppTriggerParamBindingConfig $ParamBindingsApi) 设置<p>工作流API参数绑定</p>
 * @method AppTriggerParamBindingConfig getParamBindingsWorkflow() 获取<p>工作流参数绑定</p>
 * @method void setParamBindingsWorkflow(AppTriggerParamBindingConfig $ParamBindingsWorkflow) 设置<p>工作流参数绑定</p>
 * @method string getWorkflowId() 获取<p>工作流ID</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
 * @method string getWorkflowName() 获取<p>工作流名字</p>
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名字</p>
 */
class AppTriggerWorkflowExecuteConfig extends AbstractModel
{
    /**
     * @var AppTriggerParamBindingConfig <p>工作流API参数绑定</p>
     */
    public $ParamBindingsApi;

    /**
     * @var AppTriggerParamBindingConfig <p>工作流参数绑定</p>
     */
    public $ParamBindingsWorkflow;

    /**
     * @var string <p>工作流ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流名字</p>
     */
    public $WorkflowName;

    /**
     * @param AppTriggerParamBindingConfig $ParamBindingsApi <p>工作流API参数绑定</p>
     * @param AppTriggerParamBindingConfig $ParamBindingsWorkflow <p>工作流参数绑定</p>
     * @param string $WorkflowId <p>工作流ID</p>
     * @param string $WorkflowName <p>工作流名字</p>
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
        if (array_key_exists("ParamBindingsApi",$param) and $param["ParamBindingsApi"] !== null) {
            $this->ParamBindingsApi = new AppTriggerParamBindingConfig();
            $this->ParamBindingsApi->deserialize($param["ParamBindingsApi"]);
        }

        if (array_key_exists("ParamBindingsWorkflow",$param) and $param["ParamBindingsWorkflow"] !== null) {
            $this->ParamBindingsWorkflow = new AppTriggerParamBindingConfig();
            $this->ParamBindingsWorkflow->deserialize($param["ParamBindingsWorkflow"]);
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }
    }
}
