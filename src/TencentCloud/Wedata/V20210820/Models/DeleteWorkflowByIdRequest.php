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
 * DeleteWorkflowById请求参数结构体
 *
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method boolean getDeleteMode() 获取删除后下游任务的处理方式，true:下游任务均正常运行 false:下游任务均运行失败
 * @method void setDeleteMode(boolean $DeleteMode) 设置删除后下游任务的处理方式，true:下游任务均正常运行 false:下游任务均运行失败
 * @method boolean getEnableNotify() 获取删除任务后是否通知下游任务责任人, true:通知 false:不通知
 * @method void setEnableNotify(boolean $EnableNotify) 设置删除任务后是否通知下游任务责任人, true:通知 false:不通知
 */
class DeleteWorkflowByIdRequest extends AbstractModel
{
    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 删除后下游任务的处理方式，true:下游任务均正常运行 false:下游任务均运行失败
     */
    public $DeleteMode;

    /**
     * @var boolean 删除任务后是否通知下游任务责任人, true:通知 false:不通知
     */
    public $EnableNotify;

    /**
     * @param string $WorkflowId 工作流id
     * @param string $ProjectId 项目id
     * @param boolean $DeleteMode 删除后下游任务的处理方式，true:下游任务均正常运行 false:下游任务均运行失败
     * @param boolean $EnableNotify 删除任务后是否通知下游任务责任人, true:通知 false:不通知
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }

        if (array_key_exists("EnableNotify",$param) and $param["EnableNotify"] !== null) {
            $this->EnableNotify = $param["EnableNotify"];
        }
    }
}
