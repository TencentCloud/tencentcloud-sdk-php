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
 * 单工作流配置
 *
 * @method boolean getAsyncWorkflow() 获取<p>是否开启异步工作流</p>
 * @method void setAsyncWorkflow(boolean $AsyncWorkflow) 设置<p>是否开启异步工作流</p>
 * @method string getStatus() 获取<p>状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)</p>
 * @method void setStatus(string $Status) 设置<p>状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)</p>
 * @method string getWorkflowDescription() 获取<p>工作流描述</p>
 * @method void setWorkflowDescription(string $WorkflowDescription) 设置<p>工作流描述</p>
 * @method string getWorkflowId() 获取<p>工作流Id</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流Id</p>
 * @method string getWorkflowName() 获取<p>工作流名称</p>
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
 * @method boolean getEnabled() 获取<p>工作流是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>工作流是否启用</p>
 */
class SingleWorkflowConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启异步工作流</p>
     */
    public $AsyncWorkflow;

    /**
     * @var string <p>状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)</p>
     */
    public $Status;

    /**
     * @var string <p>工作流描述</p>
     */
    public $WorkflowDescription;

    /**
     * @var string <p>工作流Id</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流名称</p>
     */
    public $WorkflowName;

    /**
     * @var boolean <p>工作流是否启用</p>
     */
    public $Enabled;

    /**
     * @param boolean $AsyncWorkflow <p>是否开启异步工作流</p>
     * @param string $Status <p>状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)</p>
     * @param string $WorkflowDescription <p>工作流描述</p>
     * @param string $WorkflowId <p>工作流Id</p>
     * @param string $WorkflowName <p>工作流名称</p>
     * @param boolean $Enabled <p>工作流是否启用</p>
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
        if (array_key_exists("AsyncWorkflow",$param) and $param["AsyncWorkflow"] !== null) {
            $this->AsyncWorkflow = $param["AsyncWorkflow"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WorkflowDescription",$param) and $param["WorkflowDescription"] !== null) {
            $this->WorkflowDescription = $param["WorkflowDescription"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
