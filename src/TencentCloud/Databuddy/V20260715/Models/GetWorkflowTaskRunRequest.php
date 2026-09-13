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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWorkflowTaskRun请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method string getWorkflowTaskRunId() 获取<p>任务运行ID，可通过 ListWorkflowTaskRuns 获取。必填</p>
 * @method void setWorkflowTaskRunId(string $WorkflowTaskRunId) 设置<p>任务运行ID，可通过 ListWorkflowTaskRuns 获取。必填</p>
 * @method InnerWorkflowTaskRunListOption getInnerWorkflowTaskRunListOption() 获取<p>内嵌工作流任务运行列表选项（仅限 FOR_EACH 任务使用）。非必填</p>
 * @method void setInnerWorkflowTaskRunListOption(InnerWorkflowTaskRunListOption $InnerWorkflowTaskRunListOption) 设置<p>内嵌工作流任务运行列表选项（仅限 FOR_EACH 任务使用）。非必填</p>
 */
class GetWorkflowTaskRunRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>任务运行ID，可通过 ListWorkflowTaskRuns 获取。必填</p>
     */
    public $WorkflowTaskRunId;

    /**
     * @var InnerWorkflowTaskRunListOption <p>内嵌工作流任务运行列表选项（仅限 FOR_EACH 任务使用）。非必填</p>
     */
    public $InnerWorkflowTaskRunListOption;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param string $WorkflowTaskRunId <p>任务运行ID，可通过 ListWorkflowTaskRuns 获取。必填</p>
     * @param InnerWorkflowTaskRunListOption $InnerWorkflowTaskRunListOption <p>内嵌工作流任务运行列表选项（仅限 FOR_EACH 任务使用）。非必填</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkflowTaskRunId",$param) and $param["WorkflowTaskRunId"] !== null) {
            $this->WorkflowTaskRunId = $param["WorkflowTaskRunId"];
        }

        if (array_key_exists("InnerWorkflowTaskRunListOption",$param) and $param["InnerWorkflowTaskRunListOption"] !== null) {
            $this->InnerWorkflowTaskRunListOption = new InnerWorkflowTaskRunListOption();
            $this->InnerWorkflowTaskRunListOption->deserialize($param["InnerWorkflowTaskRunListOption"]);
        }
    }
}
