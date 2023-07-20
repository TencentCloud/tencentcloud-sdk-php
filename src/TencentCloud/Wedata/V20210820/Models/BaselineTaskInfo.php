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
 * BaselineTaskInfo
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getTaskCycle() 获取任务调度周期
 * @method void setTaskCycle(string $TaskCycle) 设置任务调度周期
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getTaskInChargeName() 获取任务责任人名称
 * @method void setTaskInChargeName(string $TaskInChargeName) 设置任务责任人名称
 * @method string getTaskInChargeUin() 获取任务责任人id
 * @method void setTaskInChargeUin(string $TaskInChargeUin) 设置任务责任人id
 */
class BaselineTaskInfo extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 任务调度周期
     */
    public $TaskCycle;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 任务责任人名称
     */
    public $TaskInChargeName;

    /**
     * @var string 任务责任人id
     */
    public $TaskInChargeUin;

    /**
     * @param string $ProjectId 项目id
     * @param string $TaskName 任务名称
     * @param string $TaskId 任务id
     * @param string $TaskCycle 任务调度周期
     * @param string $WorkflowName 工作流名称
     * @param string $WorkflowId 工作流id
     * @param string $TaskInChargeName 任务责任人名称
     * @param string $TaskInChargeUin 任务责任人id
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskCycle",$param) and $param["TaskCycle"] !== null) {
            $this->TaskCycle = $param["TaskCycle"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskInChargeName",$param) and $param["TaskInChargeName"] !== null) {
            $this->TaskInChargeName = $param["TaskInChargeName"];
        }

        if (array_key_exists("TaskInChargeUin",$param) and $param["TaskInChargeUin"] !== null) {
            $this->TaskInChargeUin = $param["TaskInChargeUin"];
        }
    }
}
