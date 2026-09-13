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
 * GetWorkflowRun请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method string getWorkflowRunId() 获取<p>工作流运行ID，可通过 ListWorkflowRuns 获取。必填</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行ID，可通过 ListWorkflowRuns 获取。必填</p>
 */
class GetWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>工作流运行ID，可通过 ListWorkflowRuns 获取。必填</p>
     */
    public $WorkflowRunId;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param string $WorkflowRunId <p>工作流运行ID，可通过 ListWorkflowRuns 获取。必填</p>
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

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
