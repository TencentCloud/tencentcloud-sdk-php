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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillTriggerWorkflowRuns请求参数结构体
 *
 * @method string getProjectId() 获取项目ID	
 * @method void setProjectId(string $ProjectId) 设置项目ID	
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method array getWorkflowExecutionIdList() 获取指定要停止的工作流执行ID
 * @method void setWorkflowExecutionIdList(array $WorkflowExecutionIdList) 设置指定要停止的工作流执行ID
 * @method boolean getAll() 获取当指定的工作流运行为空时，是否全部终止正在运行的工作流执行	
 * @method void setAll(boolean $All) 设置当指定的工作流运行为空时，是否全部终止正在运行的工作流执行	
 * @method boolean getPending() 获取当指定的工作流运行为空时，是否仅停止等待中的工作流运行
 * @method void setPending(boolean $Pending) 设置当指定的工作流运行为空时，是否仅停止等待中的工作流运行
 */
class KillTriggerWorkflowRunsRequest extends AbstractModel
{
    /**
     * @var string 项目ID	
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var array 指定要停止的工作流执行ID
     */
    public $WorkflowExecutionIdList;

    /**
     * @var boolean 当指定的工作流运行为空时，是否全部终止正在运行的工作流执行	
     */
    public $All;

    /**
     * @var boolean 当指定的工作流运行为空时，是否仅停止等待中的工作流运行
     */
    public $Pending;

    /**
     * @param string $ProjectId 项目ID	
     * @param string $WorkflowId 工作流ID
     * @param array $WorkflowExecutionIdList 指定要停止的工作流执行ID
     * @param boolean $All 当指定的工作流运行为空时，是否全部终止正在运行的工作流执行	
     * @param boolean $Pending 当指定的工作流运行为空时，是否仅停止等待中的工作流运行
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowExecutionIdList",$param) and $param["WorkflowExecutionIdList"] !== null) {
            $this->WorkflowExecutionIdList = $param["WorkflowExecutionIdList"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Pending",$param) and $param["Pending"] !== null) {
            $this->Pending = $param["Pending"];
        }
    }
}
