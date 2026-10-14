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
 * 工作流运行实例信息
 *
 * @method WorkflowRunSummary getWorkflowRunSummary() 获取工作流运行实例基本信息
 * @method void setWorkflowRunSummary(WorkflowRunSummary $WorkflowRunSummary) 设置工作流运行实例基本信息
 * @method WorkflowRunOutput getWorkflowRunOutput() 获取工作流运行实例输出信息
 * @method void setWorkflowRunOutput(WorkflowRunOutput $WorkflowRunOutput) 设置工作流运行实例输出信息
 * @method WorkflowRunMetadata getWorkflowRunMetadata() 获取工作流运行实例元数据
 * @method void setWorkflowRunMetadata(WorkflowRunMetadata $WorkflowRunMetadata) 设置工作流运行实例元数据
 */
class WorkflowRun extends AbstractModel
{
    /**
     * @var WorkflowRunSummary 工作流运行实例基本信息
     */
    public $WorkflowRunSummary;

    /**
     * @var WorkflowRunOutput 工作流运行实例输出信息
     */
    public $WorkflowRunOutput;

    /**
     * @var WorkflowRunMetadata 工作流运行实例元数据
     */
    public $WorkflowRunMetadata;

    /**
     * @param WorkflowRunSummary $WorkflowRunSummary 工作流运行实例基本信息
     * @param WorkflowRunOutput $WorkflowRunOutput 工作流运行实例输出信息
     * @param WorkflowRunMetadata $WorkflowRunMetadata 工作流运行实例元数据
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
        if (array_key_exists("WorkflowRunSummary",$param) and $param["WorkflowRunSummary"] !== null) {
            $this->WorkflowRunSummary = new WorkflowRunSummary();
            $this->WorkflowRunSummary->deserialize($param["WorkflowRunSummary"]);
        }

        if (array_key_exists("WorkflowRunOutput",$param) and $param["WorkflowRunOutput"] !== null) {
            $this->WorkflowRunOutput = new WorkflowRunOutput();
            $this->WorkflowRunOutput->deserialize($param["WorkflowRunOutput"]);
        }

        if (array_key_exists("WorkflowRunMetadata",$param) and $param["WorkflowRunMetadata"] !== null) {
            $this->WorkflowRunMetadata = new WorkflowRunMetadata();
            $this->WorkflowRunMetadata->deserialize($param["WorkflowRunMetadata"]);
        }
    }
}
