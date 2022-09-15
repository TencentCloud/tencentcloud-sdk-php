<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * SubmitWorkflow请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getVersionRemark() 获取提交的版本备注
 * @method void setVersionRemark(string $VersionRemark) 设置提交的版本备注
 * @method boolean getStartScheduling() 获取是否启动调度
 * @method void setStartScheduling(boolean $StartScheduling) 设置是否启动调度
 */
class SubmitWorkflowRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 提交的版本备注
     */
    public $VersionRemark;

    /**
     * @var boolean 是否启动调度
     */
    public $StartScheduling;

    /**
     * @param string $ProjectId 项目Id
     * @param string $WorkflowId 工作流id
     * @param string $VersionRemark 提交的版本备注
     * @param boolean $StartScheduling 是否启动调度
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

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("StartScheduling",$param) and $param["StartScheduling"] !== null) {
            $this->StartScheduling = $param["StartScheduling"];
        }
    }
}
