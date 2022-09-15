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
 * DeleteWorkflowNew请求参数结构体
 *
 * @method string getWorkFlowId() 获取工作流id
 * @method void setWorkFlowId(string $WorkFlowId) 设置工作流id
 * @method boolean getDeleteMode() 获取true : 删除后下游任务可正常运行
false：删除后下游任务不可运行
 * @method void setDeleteMode(boolean $DeleteMode) 设置true : 删除后下游任务可正常运行
false：删除后下游任务不可运行
 * @method boolean getEnableNotify() 获取true：通知下游任务责任人
false:  不通知下游任务责任人
 * @method void setEnableNotify(boolean $EnableNotify) 设置true：通知下游任务责任人
false:  不通知下游任务责任人
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 */
class DeleteWorkflowNewRequest extends AbstractModel
{
    /**
     * @var string 工作流id
     */
    public $WorkFlowId;

    /**
     * @var boolean true : 删除后下游任务可正常运行
false：删除后下游任务不可运行
     */
    public $DeleteMode;

    /**
     * @var boolean true：通知下游任务责任人
false:  不通知下游任务责任人
     */
    public $EnableNotify;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @param string $WorkFlowId 工作流id
     * @param boolean $DeleteMode true : 删除后下游任务可正常运行
false：删除后下游任务不可运行
     * @param boolean $EnableNotify true：通知下游任务责任人
false:  不通知下游任务责任人
     * @param string $ProjectId 项目Id
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
        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }

        if (array_key_exists("EnableNotify",$param) and $param["EnableNotify"] !== null) {
            $this->EnableNotify = $param["EnableNotify"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
