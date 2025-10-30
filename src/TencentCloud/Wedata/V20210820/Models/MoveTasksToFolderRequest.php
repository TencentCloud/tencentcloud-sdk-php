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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MoveTasksToFolder请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getTaskFolderId() 获取任务文件夹ID
 * @method void setTaskFolderId(string $TaskFolderId) 设置任务文件夹ID
 * @method array getTaskIds() 获取任务ID
 * @method void setTaskIds(array $TaskIds) 设置任务ID
 * @method array getVirtualTaskIds() 获取虚拟任务ID
 * @method void setVirtualTaskIds(array $VirtualTaskIds) 设置虚拟任务ID
 */
class MoveTasksToFolderRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 任务文件夹ID
     */
    public $TaskFolderId;

    /**
     * @var array 任务ID
     */
    public $TaskIds;

    /**
     * @var array 虚拟任务ID
     */
    public $VirtualTaskIds;

    /**
     * @param string $ProjectId 项目Id
     * @param string $WorkflowId 工作流ID
     * @param string $TaskFolderId 任务文件夹ID
     * @param array $TaskIds 任务ID
     * @param array $VirtualTaskIds 虚拟任务ID
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

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("VirtualTaskIds",$param) and $param["VirtualTaskIds"] !== null) {
            $this->VirtualTaskIds = $param["VirtualTaskIds"];
        }
    }
}
