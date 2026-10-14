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
 * 工作流运行实例的基本信息
 *
 * @method integer getDomain() 获取<p>运行环境。1:开发域，2:生产域</p>
 * @method void setDomain(integer $Domain) 设置<p>运行环境。1:开发域，2:生产域</p>
 * @method WorkflowRunProfile getWorkflowRunProfile() 获取<p>工作流运行实例基本信息</p>
 * @method void setWorkflowRunProfile(WorkflowRunProfile $WorkflowRunProfile) 设置<p>工作流运行实例基本信息</p>
 * @method WorkflowRunResult getWorkflowRunResult() 获取<p>工作流运行实例结果</p>
 * @method void setWorkflowRunResult(WorkflowRunResult $WorkflowRunResult) 设置<p>工作流运行实例结果</p>
 * @method WorkflowRunTime getWorkflowRunTime() 获取<p>工作流运行实例时间信息</p>
 * @method void setWorkflowRunTime(WorkflowRunTime $WorkflowRunTime) 设置<p>工作流运行实例时间信息</p>
 */
class WorkflowRunSummary extends AbstractModel
{
    /**
     * @var integer <p>运行环境。1:开发域，2:生产域</p>
     */
    public $Domain;

    /**
     * @var WorkflowRunProfile <p>工作流运行实例基本信息</p>
     */
    public $WorkflowRunProfile;

    /**
     * @var WorkflowRunResult <p>工作流运行实例结果</p>
     */
    public $WorkflowRunResult;

    /**
     * @var WorkflowRunTime <p>工作流运行实例时间信息</p>
     */
    public $WorkflowRunTime;

    /**
     * @param integer $Domain <p>运行环境。1:开发域，2:生产域</p>
     * @param WorkflowRunProfile $WorkflowRunProfile <p>工作流运行实例基本信息</p>
     * @param WorkflowRunResult $WorkflowRunResult <p>工作流运行实例结果</p>
     * @param WorkflowRunTime $WorkflowRunTime <p>工作流运行实例时间信息</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("WorkflowRunProfile",$param) and $param["WorkflowRunProfile"] !== null) {
            $this->WorkflowRunProfile = new WorkflowRunProfile();
            $this->WorkflowRunProfile->deserialize($param["WorkflowRunProfile"]);
        }

        if (array_key_exists("WorkflowRunResult",$param) and $param["WorkflowRunResult"] !== null) {
            $this->WorkflowRunResult = new WorkflowRunResult();
            $this->WorkflowRunResult->deserialize($param["WorkflowRunResult"]);
        }

        if (array_key_exists("WorkflowRunTime",$param) and $param["WorkflowRunTime"] !== null) {
            $this->WorkflowRunTime = new WorkflowRunTime();
            $this->WorkflowRunTime->deserialize($param["WorkflowRunTime"]);
        }
    }
}
