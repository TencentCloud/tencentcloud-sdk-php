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
 * UpdateWorkflow请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method string getWorkflowId() 获取<p>待更新的工作流ID，可通过 ListWorkflows 获取。必填</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>待更新的工作流ID，可通过 ListWorkflows 获取。必填</p>
 * @method array getFieldToRemoveList() 获取<p>需要清空的字段名列表，用于将指定字段重置为空</p>
 * @method void setFieldToRemoveList(array $FieldToRemoveList) 设置<p>需要清空的字段名列表，用于将指定字段重置为空</p>
 * @method Workflow getNewSetting() 获取<p>更新后的工作流配置，仅传入需要变更的部分即可</p>
 * @method void setNewSetting(Workflow $NewSetting) 设置<p>更新后的工作流配置，仅传入需要变更的部分即可</p>
 */
class UpdateWorkflowRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>待更新的工作流ID，可通过 ListWorkflows 获取。必填</p>
     */
    public $WorkflowId;

    /**
     * @var array <p>需要清空的字段名列表，用于将指定字段重置为空</p>
     */
    public $FieldToRemoveList;

    /**
     * @var Workflow <p>更新后的工作流配置，仅传入需要变更的部分即可</p>
     */
    public $NewSetting;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param string $WorkflowId <p>待更新的工作流ID，可通过 ListWorkflows 获取。必填</p>
     * @param array $FieldToRemoveList <p>需要清空的字段名列表，用于将指定字段重置为空</p>
     * @param Workflow $NewSetting <p>更新后的工作流配置，仅传入需要变更的部分即可</p>
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("FieldToRemoveList",$param) and $param["FieldToRemoveList"] !== null) {
            $this->FieldToRemoveList = $param["FieldToRemoveList"];
        }

        if (array_key_exists("NewSetting",$param) and $param["NewSetting"] !== null) {
            $this->NewSetting = new Workflow();
            $this->NewSetting->deserialize($param["NewSetting"]);
        }
    }
}
