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
 * RemoveWorkflowDs请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getDeleteScript() 获取是否删除脚本
 * @method void setDeleteScript(string $DeleteScript) 设置是否删除脚本
 * @method string getOperateIsInform() 获取删除是否通知下游
 * @method void setOperateIsInform(string $OperateIsInform) 设置删除是否通知下游
 * @method string getDeleteMode() 获取是否终止进行中的任务
 * @method void setDeleteMode(string $DeleteMode) 设置是否终止进行中的任务
 */
class RemoveWorkflowDsRequest extends AbstractModel
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
     * @var string 是否删除脚本
     */
    public $DeleteScript;

    /**
     * @var string 删除是否通知下游
     */
    public $OperateIsInform;

    /**
     * @var string 是否终止进行中的任务
     */
    public $DeleteMode;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowId 工作流ID
     * @param string $DeleteScript 是否删除脚本
     * @param string $OperateIsInform 删除是否通知下游
     * @param string $DeleteMode 是否终止进行中的任务
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

        if (array_key_exists("DeleteScript",$param) and $param["DeleteScript"] !== null) {
            $this->DeleteScript = $param["DeleteScript"];
        }

        if (array_key_exists("OperateIsInform",$param) and $param["OperateIsInform"] !== null) {
            $this->OperateIsInform = $param["OperateIsInform"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
