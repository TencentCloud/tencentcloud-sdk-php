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
 * @method boolean getAsyncWorkflow() 获取是否开启异步工作流
 * @method void setAsyncWorkflow(boolean $AsyncWorkflow) 设置是否开启异步工作流
 * @method string getStatus() 获取状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)
 * @method void setStatus(string $Status) 设置状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)
 * @method string getWorkflowDescription() 获取工作流描述
 * @method void setWorkflowDescription(string $WorkflowDescription) 设置工作流描述
 * @method string getWorkflowId() 获取工作流Id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流Id
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 */
class SingleWorkflowConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启异步工作流
     */
    public $AsyncWorkflow;

    /**
     * @var string 状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)
     */
    public $Status;

    /**
     * @var string 工作流描述
     */
    public $WorkflowDescription;

    /**
     * @var string 工作流Id
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @param boolean $AsyncWorkflow 是否开启异步工作流
     * @param string $Status 状态 发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 PUBLISHED_FAIL:发布失败；DRAFT：待调试)
     * @param string $WorkflowDescription 工作流描述
     * @param string $WorkflowId 工作流Id
     * @param string $WorkflowName 工作流名称
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
    }
}
