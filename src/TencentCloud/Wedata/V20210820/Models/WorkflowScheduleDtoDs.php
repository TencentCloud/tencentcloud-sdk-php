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
 * 工作流调度信息
 *
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreater() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreater(string $Creater) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取<p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取<p>延迟时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置<p>延迟时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取<p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置<p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取<p>任务依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置<p>任务依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取<p>指定运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置<p>指定运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>调度周期时间单位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>调度周期时间单位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取<p>调度周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置<p>调度周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取<p>Cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>Cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取<p>实例初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置<p>实例初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取<p>工作流依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>工作流依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取<p>工作流首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置<p>工作流首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestSubmitTime() 获取<p>工作流最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestSubmitTime(string $LatestSubmitTime) 设置<p>工作流最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarOpen() 获取<p>日历调度是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarOpen(string $CalendarOpen) 设置<p>日历调度是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarName() 获取<p>日历调度名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarName(string $CalendarName) 设置<p>日历调度名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarId() 获取<p>日历调度id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarId(string $CalendarId) 设置<p>日历调度id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>时区配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowScheduleDtoDs extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creater;

    /**
     * @var string <p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var integer <p>延迟时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer <p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var string <p>任务依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var string <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>指定运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string <p>调度周期时间单位</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer <p>调度周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string <p>Cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string <p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>实例初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string <p>工作流依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string <p>工作流首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string <p>工作流最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestSubmitTime;

    /**
     * @var string <p>日历调度是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarOpen;

    /**
     * @var string <p>日历调度名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarName;

    /**
     * @var string <p>日历调度id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarId;

    /**
     * @var string <p>时区配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime <p>修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime <p>延迟时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime <p>启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend <p>任务依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction <p>指定运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>调度周期时间单位</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep <p>调度周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression <p>Cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy <p>实例初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow <p>工作流依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime <p>工作流首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestSubmitTime <p>工作流最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarOpen <p>日历调度是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarName <p>日历调度名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarId <p>日历调度id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>时区配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Privilege <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("LatestSubmitTime",$param) and $param["LatestSubmitTime"] !== null) {
            $this->LatestSubmitTime = $param["LatestSubmitTime"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarName",$param) and $param["CalendarName"] !== null) {
            $this->CalendarName = $param["CalendarName"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
