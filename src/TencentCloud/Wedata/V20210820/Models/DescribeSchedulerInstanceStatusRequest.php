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
 * DescribeSchedulerInstanceStatus请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskTypeId() 获取任务类型ID
 * @method void setTaskTypeId(string $TaskTypeId) 设置任务类型ID
 * @method string getExecutionGroupId() 获取执行资源组ID
 * @method void setExecutionGroupId(string $ExecutionGroupId) 设置执行资源组ID
 * @method string getExecutionGroupName() 获取执行资源组名字
 * @method void setExecutionGroupName(string $ExecutionGroupName) 设置执行资源组名字
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getInCharge() 获取责任人
 * @method void setInCharge(string $InCharge) 设置责任人
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method array getProjectIds() 获取任务ID列表
 * @method void setProjectIds(array $ProjectIds) 设置任务ID列表
 */
class DescribeSchedulerInstanceStatusRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务类型ID
     */
    public $TaskTypeId;

    /**
     * @var string 执行资源组ID
     */
    public $ExecutionGroupId;

    /**
     * @var string 执行资源组名字
     */
    public $ExecutionGroupName;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 责任人
     */
    public $InCharge;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var array 任务ID列表
     */
    public $ProjectIds;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskTypeId 任务类型ID
     * @param string $ExecutionGroupId 执行资源组ID
     * @param string $ExecutionGroupName 执行资源组名字
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $InCharge 责任人
     * @param string $WorkflowId 工作流ID
     * @param array $ProjectIds 任务ID列表
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

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("ExecutionGroupId",$param) and $param["ExecutionGroupId"] !== null) {
            $this->ExecutionGroupId = $param["ExecutionGroupId"];
        }

        if (array_key_exists("ExecutionGroupName",$param) and $param["ExecutionGroupName"] !== null) {
            $this->ExecutionGroupName = $param["ExecutionGroupName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
