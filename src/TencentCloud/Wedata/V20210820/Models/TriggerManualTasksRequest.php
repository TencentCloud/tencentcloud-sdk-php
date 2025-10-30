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
 * TriggerManualTasks请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTriggerName() 获取触发运行名称
 * @method void setTriggerName(string $TriggerName) 设置触发运行名称
 * @method string getTriggerScope() 获取运行范围 ENTIRE_WORKFLOW or SPECIFIED_TASK
 * @method void setTriggerScope(string $TriggerScope) 设置运行范围 ENTIRE_WORKFLOW or SPECIFIED_TASK
 * @method array getDataTimeList() 获取运行数据时间列表
 * @method void setDataTimeList(array $DataTimeList) 设置运行数据时间列表
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getTaskIds() 获取需要运行的任务列表
TriggerScope=ENTIRE_WORKFLOW 时无需传此参数，TriggerScope=SPECIFIED_TASK此参数必传
 * @method void setTaskIds(array $TaskIds) 设置需要运行的任务列表
TriggerScope=ENTIRE_WORKFLOW 时无需传此参数，TriggerScope=SPECIFIED_TASK此参数必传
 * @method string getSchedulerResourceGroup() 获取用户提交运行时指定的调度资源组，未指定时使用任务配置的调度资源组
 * @method void setSchedulerResourceGroup(string $SchedulerResourceGroup) 设置用户提交运行时指定的调度资源组，未指定时使用任务配置的调度资源组
 * @method string getIntegrationResourceGroup() 获取用户提交运行时指定的集成资源组，未指定时使用任务配置的集成资源组
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) 设置用户提交运行时指定的集成资源组，未指定时使用任务配置的集成资源组
 * @method string getExecOrder() 获取执行顺序 ASC、RAND、DESC
 * @method void setExecOrder(string $ExecOrder) 设置执行顺序 ASC、RAND、DESC
 * @method array getCustomParams() 获取自定义参数，最高优先级
 * @method void setCustomParams(array $CustomParams) 设置自定义参数，最高优先级
 * @method string getExtraParams() 获取页面反显使用，无业务含义
 * @method void setExtraParams(string $ExtraParams) 设置页面反显使用，无业务含义
 * @method string getScheduleTimeZone() 获取实例时间的时区
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置实例时间的时区
 * @method string getTimeType() 获取时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理
 * @method void setTimeType(string $TimeType) 设置时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理
 */
class TriggerManualTasksRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 触发运行名称
     */
    public $TriggerName;

    /**
     * @var string 运行范围 ENTIRE_WORKFLOW or SPECIFIED_TASK
     */
    public $TriggerScope;

    /**
     * @var array 运行数据时间列表
     */
    public $DataTimeList;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 需要运行的任务列表
TriggerScope=ENTIRE_WORKFLOW 时无需传此参数，TriggerScope=SPECIFIED_TASK此参数必传
     */
    public $TaskIds;

    /**
     * @var string 用户提交运行时指定的调度资源组，未指定时使用任务配置的调度资源组
     */
    public $SchedulerResourceGroup;

    /**
     * @var string 用户提交运行时指定的集成资源组，未指定时使用任务配置的集成资源组
     */
    public $IntegrationResourceGroup;

    /**
     * @var string 执行顺序 ASC、RAND、DESC
     */
    public $ExecOrder;

    /**
     * @var array 自定义参数，最高优先级
     */
    public $CustomParams;

    /**
     * @var string 页面反显使用，无业务含义
     */
    public $ExtraParams;

    /**
     * @var string 实例时间的时区
     */
    public $ScheduleTimeZone;

    /**
     * @var string 时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理
     */
    public $TimeType;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TriggerName 触发运行名称
     * @param string $TriggerScope 运行范围 ENTIRE_WORKFLOW or SPECIFIED_TASK
     * @param array $DataTimeList 运行数据时间列表
     * @param string $WorkflowId 工作流ID
     * @param string $Remark 备注
     * @param array $TaskIds 需要运行的任务列表
TriggerScope=ENTIRE_WORKFLOW 时无需传此参数，TriggerScope=SPECIFIED_TASK此参数必传
     * @param string $SchedulerResourceGroup 用户提交运行时指定的调度资源组，未指定时使用任务配置的调度资源组
     * @param string $IntegrationResourceGroup 用户提交运行时指定的集成资源组，未指定时使用任务配置的集成资源组
     * @param string $ExecOrder 执行顺序 ASC、RAND、DESC
     * @param array $CustomParams 自定义参数，最高优先级
     * @param string $ExtraParams 页面反显使用，无业务含义
     * @param string $ScheduleTimeZone 实例时间的时区
     * @param string $TimeType 时间类型，DATA_TIME：数据时间、SCHEDULE_TIME：计划调度时间, 为空时会被当成DATA_TIME处理
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

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("TriggerScope",$param) and $param["TriggerScope"] !== null) {
            $this->TriggerScope = $param["TriggerScope"];
        }

        if (array_key_exists("DataTimeList",$param) and $param["DataTimeList"] !== null) {
            $this->DataTimeList = $param["DataTimeList"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("SchedulerResourceGroup",$param) and $param["SchedulerResourceGroup"] !== null) {
            $this->SchedulerResourceGroup = $param["SchedulerResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }

        if (array_key_exists("ExecOrder",$param) and $param["ExecOrder"] !== null) {
            $this->ExecOrder = $param["ExecOrder"];
        }

        if (array_key_exists("CustomParams",$param) and $param["CustomParams"] !== null) {
            $this->CustomParams = [];
            foreach ($param["CustomParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->CustomParams, $obj);
            }
        }

        if (array_key_exists("ExtraParams",$param) and $param["ExtraParams"] !== null) {
            $this->ExtraParams = $param["ExtraParams"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }
    }
}
