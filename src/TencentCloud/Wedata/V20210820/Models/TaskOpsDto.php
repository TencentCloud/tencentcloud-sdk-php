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
 * 任务运维详情
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskId() 获取虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealWorkflowId() 获取任务为虚拟任务时，任务所在的真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealWorkflowId(string $RealWorkflowId) 设置任务为虚拟任务时，任务所在的真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取责任人用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置责任人用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取调度生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置调度生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取调度结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置调度结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延时执行时间，unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延时执行时间，unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取重试等待时间, unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置重试等待时间, unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryAble() 获取是否可重试，1 代表可以重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryAble(integer $RetryAble) 设置是否可重试，1 代表可以重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取运行优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置运行优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeOpsDto getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskTypeOpsDto $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinDateTime() 获取最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinDateTime(string $MinDateTime) 设置最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxDateTime() 获取最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDateTime(string $MaxDateTime) 设置最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTTL() 获取运行耗时超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTTL(integer $ExecutionTTL) 设置运行耗时超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotes() 获取任务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotes(string $Notes) 设置任务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取任务初始化策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置任务初始化策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取计算队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置计算队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerCommitTime() 获取最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) 设置最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNormalizedJobStartTime() 获取按cron表达式计算的任务开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalizedJobStartTime(string $NormalizedJobStartTime) 设置按cron表达式计算的任务开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取调度计划描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置调度计划描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取计算资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置计算资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取任务创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置任务创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取任务依赖类型 and、or
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置任务依赖类型 and、or
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取任务工作流依赖 yes、no
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置任务工作流依赖 yes、no
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventListenerConfig() 获取事件监听配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerConfig(string $EventListenerConfig) 设置事件监听配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventPublisherConfig() 获取事件驱动配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventPublisherConfig(string $EventPublisherConfig) 设置事件驱动配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskStatus() 获取虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskStatus(string $VirtualTaskStatus) 设置虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method LinkOpsDto getTaskLinkInfo() 获取任务依赖边详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLinkInfo(LinkOpsDto $TaskLinkInfo) 设置任务依赖边详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取任务产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置任务产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnId() 获取主账户userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnId(string $OwnId) 设置主账户userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取更新人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置更新人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取更新人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置更新人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeDesc() 获取任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowWorkflow() 获取是否展示工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowWorkflow(boolean $ShowWorkflow) 设置是否展示工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstRunTime() 获取首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstRunTime(string $FirstRunTime) 设置首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取调度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置调度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleNum() 获取周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleNum(integer $CycleNum) 设置周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontab() 获取表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontab(string $Crontab) 设置表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartDate() 获取开始日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartDate(string $StartDate) 设置开始日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取周期单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置周期单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInitStrategy() 获取初始化策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitStrategy(string $InitStrategy) 设置初始化策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLayer() 获取层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLayer(string $Layer) 设置层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceId() 获取来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceId(string $SourceServiceId) 设置来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceType() 获取来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceType(string $SourceServiceType) 设置来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceId() 获取目标数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceId(string $TargetServiceId) 设置目标数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceType() 获取目标数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceType(string $TargetServiceType) 设置目标数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTasksStr() 获取子任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasksStr(string $TasksStr) 设置子任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskExtInfo() 获取任务扩展信息(目前返沪离线同步的任务详情)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExtInfo(string $TaskExtInfo) 设置任务扩展信息(目前返沪离线同步的任务详情)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventListenerInfos() 获取任务绑定的事件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerInfos(array $EventListenerInfos) 设置任务绑定的事件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiopsScriptInfo getScriptInfo() 获取脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptInfo(AiopsScriptInfo $ScriptInfo) 设置脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiopsDLCResourceConfigDto getDLCResourceConfig() 获取DLC资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDLCResourceConfig(AiopsDLCResourceConfigDto $DLCResourceConfig) 设置DLC资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiopsSimpleTaskDto getParentTaskInfos() 获取父任务simple信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTaskInfos(AiopsSimpleTaskDto $ParentTaskInfos) 设置父任务simple信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtResourceFlagDto getExtResourceFlag() 获取资源获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtResourceFlag(ExtResourceFlagDto $ExtResourceFlag) 设置资源获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNewParentTaskInfos() 获取父任务simple信息(新)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewParentTaskInfos(array $NewParentTaskInfos) 设置父任务simple信息(新)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfWorkFlowDependType() 获取任务自依赖类型：
yes： 任务需满足自依赖
no：任务无需满足自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfWorkFlowDependType(string $SelfWorkFlowDependType) 设置任务自依赖类型：
yes： 任务需满足自依赖
no：任务无需满足自依赖
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskOpsDto extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskId;

    /**
     * @var boolean 虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务为虚拟任务时，任务所在的真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealWorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 文件夹名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 责任人用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var string 调度生效日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 调度结束日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 步长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string 调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var integer 延时执行时间，unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer 开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var integer 重试等待时间, unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWait;

    /**
     * @var integer 是否可重试，1 代表可以重试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryAble;

    /**
     * @var string 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var integer 运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TryLimit;

    /**
     * @var integer 运行优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunPriority;

    /**
     * @var TaskTypeOpsDto 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string 集群name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinDateTime;

    /**
     * @var string 最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDateTime;

    /**
     * @var integer 运行耗时超时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTTL;

    /**
     * @var string 自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var float 左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float 顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var string 任务备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notes;

    /**
     * @var string 任务初始化策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string 计算队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

    /**
     * @var string 最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerCommitTime;

    /**
     * @var string 按cron表达式计算的任务开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalizedJobStartTime;

    /**
     * @var string 调度计划描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string 计算资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string 任务创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 任务依赖类型 and、or
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string 任务工作流依赖 yes、no
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string 事件监听配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerConfig;

    /**
     * @var string 事件驱动配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventPublisherConfig;

    /**
     * @var string 虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskStatus;

    /**
     * @var LinkOpsDto 任务依赖边详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLinkInfo;

    /**
     * @var string 任务产品类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 主账户userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnId;

    /**
     * @var string 用户userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 更新人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 更新人userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @var boolean 是否展示工作流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowWorkflow;

    /**
     * @var string 首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string 首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstRunTime;

    /**
     * @var string 调度描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var integer 周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleNum;

    /**
     * @var string 表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Crontab;

    /**
     * @var string 开始日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartDate;

    /**
     * @var string 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var string 周期单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var string 初始化策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitStrategy;

    /**
     * @var string 层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Layer;

    /**
     * @var string 来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServiceId;

    /**
     * @var string 来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServiceType;

    /**
     * @var string 目标数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceId;

    /**
     * @var string 目标数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceType;

    /**
     * @var string 子任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TasksStr;

    /**
     * @var boolean 任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var string 任务扩展信息(目前返沪离线同步的任务详情)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExtInfo;

    /**
     * @var array 任务绑定的事件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerInfos;

    /**
     * @var AiopsScriptInfo 脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptInfo;

    /**
     * @var AiopsDLCResourceConfigDto DLC资源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DLCResourceConfig;

    /**
     * @var AiopsSimpleTaskDto 父任务simple信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTaskInfos;

    /**
     * @var ExtResourceFlagDto 资源获取标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtResourceFlag;

    /**
     * @var array 父任务simple信息(新)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewParentTaskInfos;

    /**
     * @var string 任务自依赖类型：
yes： 任务需满足自依赖
no：任务无需满足自依赖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfWorkFlowDependType;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskId 虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag 虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealWorkflowId 任务为虚拟任务时，任务所在的真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId 责任人用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 调度生效日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 调度结束日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 步长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression 调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延时执行时间，unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime 开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait 重试等待时间, unit=分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryAble 是否可重试，1 代表可以重试
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit 运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority 运行优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeOpsDto $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinDateTime 最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxDateTime 最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTTL 运行耗时超时时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend 自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate 左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate 顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Notes 任务备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy 任务初始化策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue 计算队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerCommitTime 最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NormalizedJobStartTime 按cron表达式计算的任务开始执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc 调度计划描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 计算资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 任务创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel 任务依赖类型 and、or
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow 任务工作流依赖 yes、no
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventListenerConfig 事件监听配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventPublisherConfig 事件驱动配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskStatus 虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param LinkOpsDto $TaskLinkInfo 任务依赖边详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 任务产品类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnId 主账户userId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户userId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser 更新人昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 更新人userId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeDesc 任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowWorkflow 是否展示工作流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime 首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstRunTime 首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc 调度描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleNum 周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Crontab 表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartDate 开始日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit 周期单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InitStrategy 初始化策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Layer 层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceId 来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceType 来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceId 目标数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceType 目标数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TasksStr 子任务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit 任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskExtInfo 任务扩展信息(目前返沪离线同步的任务详情)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventListenerInfos 任务绑定的事件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiopsScriptInfo $ScriptInfo 脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiopsDLCResourceConfigDto $DLCResourceConfig DLC资源配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiopsSimpleTaskDto $ParentTaskInfos 父任务simple信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtResourceFlagDto $ExtResourceFlag 资源获取标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NewParentTaskInfos 父任务simple信息(新)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfWorkFlowDependType 任务自依赖类型：
yes： 任务需满足自依赖
no：任务无需满足自依赖
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RealWorkflowId",$param) and $param["RealWorkflowId"] !== null) {
            $this->RealWorkflowId = $param["RealWorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
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

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("RetryAble",$param) and $param["RetryAble"] !== null) {
            $this->RetryAble = $param["RetryAble"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskTypeOpsDto();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("MinDateTime",$param) and $param["MinDateTime"] !== null) {
            $this->MinDateTime = $param["MinDateTime"];
        }

        if (array_key_exists("MaxDateTime",$param) and $param["MaxDateTime"] !== null) {
            $this->MaxDateTime = $param["MaxDateTime"];
        }

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("LastSchedulerCommitTime",$param) and $param["LastSchedulerCommitTime"] !== null) {
            $this->LastSchedulerCommitTime = $param["LastSchedulerCommitTime"];
        }

        if (array_key_exists("NormalizedJobStartTime",$param) and $param["NormalizedJobStartTime"] !== null) {
            $this->NormalizedJobStartTime = $param["NormalizedJobStartTime"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DependencyRel",$param) and $param["DependencyRel"] !== null) {
            $this->DependencyRel = $param["DependencyRel"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("EventListenerConfig",$param) and $param["EventListenerConfig"] !== null) {
            $this->EventListenerConfig = $param["EventListenerConfig"];
        }

        if (array_key_exists("EventPublisherConfig",$param) and $param["EventPublisherConfig"] !== null) {
            $this->EventPublisherConfig = $param["EventPublisherConfig"];
        }

        if (array_key_exists("VirtualTaskStatus",$param) and $param["VirtualTaskStatus"] !== null) {
            $this->VirtualTaskStatus = $param["VirtualTaskStatus"];
        }

        if (array_key_exists("TaskLinkInfo",$param) and $param["TaskLinkInfo"] !== null) {
            $this->TaskLinkInfo = new LinkOpsDto();
            $this->TaskLinkInfo->deserialize($param["TaskLinkInfo"]);
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("OwnId",$param) and $param["OwnId"] !== null) {
            $this->OwnId = $param["OwnId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("ShowWorkflow",$param) and $param["ShowWorkflow"] !== null) {
            $this->ShowWorkflow = $param["ShowWorkflow"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("CycleNum",$param) and $param["CycleNum"] !== null) {
            $this->CycleNum = $param["CycleNum"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("SourceServiceType",$param) and $param["SourceServiceType"] !== null) {
            $this->SourceServiceType = $param["SourceServiceType"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("TargetServiceType",$param) and $param["TargetServiceType"] !== null) {
            $this->TargetServiceType = $param["TargetServiceType"];
        }

        if (array_key_exists("TasksStr",$param) and $param["TasksStr"] !== null) {
            $this->TasksStr = $param["TasksStr"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("TaskExtInfo",$param) and $param["TaskExtInfo"] !== null) {
            $this->TaskExtInfo = $param["TaskExtInfo"];
        }

        if (array_key_exists("EventListenerInfos",$param) and $param["EventListenerInfos"] !== null) {
            $this->EventListenerInfos = [];
            foreach ($param["EventListenerInfos"] as $key => $value){
                $obj = new AiOpsEventListenerDTO();
                $obj->deserialize($value);
                array_push($this->EventListenerInfos, $obj);
            }
        }

        if (array_key_exists("ScriptInfo",$param) and $param["ScriptInfo"] !== null) {
            $this->ScriptInfo = new AiopsScriptInfo();
            $this->ScriptInfo->deserialize($param["ScriptInfo"]);
        }

        if (array_key_exists("DLCResourceConfig",$param) and $param["DLCResourceConfig"] !== null) {
            $this->DLCResourceConfig = new AiopsDLCResourceConfigDto();
            $this->DLCResourceConfig->deserialize($param["DLCResourceConfig"]);
        }

        if (array_key_exists("ParentTaskInfos",$param) and $param["ParentTaskInfos"] !== null) {
            $this->ParentTaskInfos = new AiopsSimpleTaskDto();
            $this->ParentTaskInfos->deserialize($param["ParentTaskInfos"]);
        }

        if (array_key_exists("ExtResourceFlag",$param) and $param["ExtResourceFlag"] !== null) {
            $this->ExtResourceFlag = new ExtResourceFlagDto();
            $this->ExtResourceFlag->deserialize($param["ExtResourceFlag"]);
        }

        if (array_key_exists("NewParentTaskInfos",$param) and $param["NewParentTaskInfos"] !== null) {
            $this->NewParentTaskInfos = [];
            foreach ($param["NewParentTaskInfos"] as $key => $value){
                $obj = new AiopsSimpleTaskDto();
                $obj->deserialize($value);
                array_push($this->NewParentTaskInfos, $obj);
            }
        }

        if (array_key_exists("SelfWorkFlowDependType",$param) and $param["SelfWorkFlowDependType"] !== null) {
            $this->SelfWorkFlowDependType = $param["SelfWorkFlowDependType"];
        }
    }
}
