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
 * 任务运维详情
 *
 * @method string getTaskId() 获取<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskId() 获取<p>虚拟任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置<p>虚拟任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取<p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置<p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealWorkflowId() 获取<p>任务为虚拟任务时，任务所在的真实工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealWorkflowId(string $RealWorkflowId) 设置<p>任务为虚拟任务时，任务所在的真实工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取<p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置<p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取<p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置<p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>调度生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>调度生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>调度结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>调度结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取<p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置<p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取<p>调度cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>调度cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取<p>延时执行时间，unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置<p>延时执行时间，unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取<p>开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置<p>开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取<p>重试等待时间, unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置<p>重试等待时间, unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryAble() 获取<p>是否可重试，1 代表可以重试</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryAble(integer $RetryAble) 设置<p>是否可重试，1 代表可以重试</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取<p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为&#39;0,3,4&#39;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置<p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为&#39;0,3,4&#39;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取<p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置<p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取<p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置<p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeOpsDto getTaskType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskTypeOpsDto $TaskType) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取<p>指定的运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置<p>指定的运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>集群name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinDateTime() 获取<p>最小数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinDateTime(string $MinDateTime) 设置<p>最小数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxDateTime() 获取<p>最大数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDateTime(string $MaxDateTime) 设置<p>最大数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTTL() 获取<p>运行耗时超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTTL(integer $ExecutionTTL) 设置<p>运行耗时超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取<p>自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置<p>自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取<p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置<p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取<p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置<p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotes() 获取<p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotes(string $Notes) 设置<p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取<p>任务初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置<p>任务初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取<p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置<p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerCommitTime() 获取<p>最新调度提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) 设置<p>最新调度提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNormalizedJobStartTime() 获取<p>按cron表达式计算的任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalizedJobStartTime(string $NormalizedJobStartTime) 设置<p>按cron表达式计算的任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取<p>调度计划描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置<p>调度计划描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取<p>计算资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置<p>计算资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>任务创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>任务创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取<p>任务依赖类型 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置<p>任务依赖类型 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取<p>任务工作流依赖 yes、no</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>任务工作流依赖 yes、no</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventListenerConfig() 获取<p>事件监听配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerConfig(string $EventListenerConfig) 设置<p>事件监听配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventPublisherConfig() 获取<p>事件驱动配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventPublisherConfig(string $EventPublisherConfig) 设置<p>事件驱动配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskStatus() 获取<p>虚拟任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskStatus(string $VirtualTaskStatus) 设置<p>虚拟任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LinkOpsDto getTaskLinkInfo() 获取<p>任务依赖边详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLinkInfo(LinkOpsDto $TaskLinkInfo) 设置<p>任务依赖边详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取<p>任务产品类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置<p>任务产品类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnId() 获取<p>主账户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnId(string $OwnId) 设置<p>主账户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取<p>用户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置<p>用户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取<p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置<p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取<p>更新人昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置<p>更新人昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取<p>更新人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置<p>更新人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取<p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeDesc() 获取<p>任务类型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置<p>任务类型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowWorkflow() 获取<p>是否展示工作流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowWorkflow(boolean $ShowWorkflow) 设置<p>是否展示工作流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取<p>首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置<p>首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstRunTime() 获取<p>首次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstRunTime(string $FirstRunTime) 设置<p>首次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取<p>调度描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置<p>调度描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleNum() 获取<p>周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleNum(integer $CycleNum) 设置<p>周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontab() 获取<p>表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontab(string $Crontab) 设置<p>表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartDate() 获取<p>开始日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartDate(string $StartDate) 设置<p>开始日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取<p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置<p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取<p>周期单位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置<p>周期单位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInitStrategy() 获取<p>初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitStrategy(string $InitStrategy) 设置<p>初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLayer() 获取<p>层级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLayer(string $Layer) 设置<p>层级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceId() 获取<p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceId(string $SourceServiceId) 设置<p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceType() 获取<p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceType(string $SourceServiceType) 设置<p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceId() 获取<p>目标数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceId(string $TargetServiceId) 设置<p>目标数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceType() 获取<p>目标数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceType(string $TargetServiceType) 设置<p>目标数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTasksStr() 获取<p>子任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasksStr(string $TasksStr) 设置<p>子任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取<p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置<p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取<p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置<p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskExtInfo() 获取<p>任务扩展信息(目前返沪离线同步的任务详情)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExtInfo(string $TaskExtInfo) 设置<p>任务扩展信息(目前返沪离线同步的任务详情)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventListenerInfos() 获取<p>任务绑定的事件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerInfos(array $EventListenerInfos) 设置<p>任务绑定的事件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiopsScriptInfo getScriptInfo() 获取<p>脚本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptInfo(AiopsScriptInfo $ScriptInfo) 设置<p>脚本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiopsDLCResourceConfigDto getDLCResourceConfig() 获取<p>DLC资源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDLCResourceConfig(AiopsDLCResourceConfigDto $DLCResourceConfig) 设置<p>DLC资源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiopsSimpleTaskDto getParentTaskInfos() 获取<p>父任务simple信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTaskInfos(AiopsSimpleTaskDto $ParentTaskInfos) 设置<p>父任务simple信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtResourceFlagDto getExtResourceFlag() 获取<p>资源获取标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtResourceFlag(ExtResourceFlagDto $ExtResourceFlag) 设置<p>资源获取标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNewParentTaskInfos() 获取<p>父任务simple信息(新)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewParentTaskInfos(array $NewParentTaskInfos) 设置<p>父任务simple信息(新)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfWorkFlowDependType() 获取<p>任务自依赖类型：<br>yes： 任务需满足自依赖<br>no：任务无需满足自依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfWorkFlowDependType(string $SelfWorkFlowDependType) 设置<p>任务自依赖类型：<br>yes： 任务需满足自依赖<br>no：任务无需满足自依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowRedoType() 获取<p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
 * @method void setAllowRedoType(string $AllowRedoType) 设置<p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
 * @method string getOwnerId() 获取<p>负责人Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置<p>负责人Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivileges() 获取<p>当前用户对该任务的权限列表， 当前支持<br>CAN_MANAGE : 有权限管理操作</p>
 * @method void setPrivileges(array $Privileges) 设置<p>当前用户对该任务的权限列表， 当前支持<br>CAN_MANAGE : 有权限管理操作</p>
 * @method string getBundleId() 获取<p>bundle客户端唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>bundle客户端唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取<p>bundle客户端信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置<p>bundle客户端信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取<p>工作流类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置<p>工作流类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskExtOpsDto getTaskExtDTO() 获取<p>任务扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExtDTO(TaskExtOpsDto $TaskExtDTO) 设置<p>任务扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>任务时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>任务时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyTaskId() 获取<p>代理任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyTaskId(string $ProxyTaskId) 设置<p>代理任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyTaskTypeId() 获取<p>代理任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyTaskTypeId(integer $ProxyTaskTypeId) 设置<p>代理任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskOpsDto extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>虚拟任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskId;

    /**
     * @var boolean <p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var string <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>任务为虚拟任务时，任务所在的真实工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealWorkflowId;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>文件夹名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string <p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var string <p>调度生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>调度结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

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
     * @var string <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer <p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string <p>调度cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var integer <p>延时执行时间，unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer <p>开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var integer <p>重试等待时间, unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWait;

    /**
     * @var integer <p>是否可重试，1 代表可以重试</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryAble;

    /**
     * @var string <p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为&#39;0,3,4&#39;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var integer <p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TryLimit;

    /**
     * @var integer <p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunPriority;

    /**
     * @var TaskTypeOpsDto <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string <p>指定的运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string <p>集群name</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>最小数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinDateTime;

    /**
     * @var string <p>最大数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDateTime;

    /**
     * @var integer <p>运行耗时超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTTL;

    /**
     * @var string <p>自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var float <p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float <p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var string <p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notes;

    /**
     * @var string <p>任务初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string <p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

    /**
     * @var string <p>最新调度提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerCommitTime;

    /**
     * @var string <p>按cron表达式计算的任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalizedJobStartTime;

    /**
     * @var string <p>调度计划描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string <p>计算资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string <p>任务创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string <p>任务依赖类型 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string <p>任务工作流依赖 yes、no</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string <p>事件监听配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerConfig;

    /**
     * @var string <p>事件驱动配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventPublisherConfig;

    /**
     * @var string <p>虚拟任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskStatus;

    /**
     * @var LinkOpsDto <p>任务依赖边详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLinkInfo;

    /**
     * @var string <p>任务产品类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string <p>主账户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnId;

    /**
     * @var string <p>用户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string <p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string <p>更新人昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>更新人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var integer <p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string <p>任务类型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @var boolean <p>是否展示工作流</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowWorkflow;

    /**
     * @var string <p>首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string <p>首次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstRunTime;

    /**
     * @var string <p>调度描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var integer <p>周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleNum;

    /**
     * @var string <p>表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Crontab;

    /**
     * @var string <p>开始日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartDate;

    /**
     * @var string <p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var string <p>周期单位</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var string <p>初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitStrategy;

    /**
     * @var string <p>层级</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Layer;

    /**
     * @var string <p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServiceId;

    /**
     * @var string <p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServiceType;

    /**
     * @var string <p>目标数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceId;

    /**
     * @var string <p>目标数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceType;

    /**
     * @var string <p>子任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TasksStr;

    /**
     * @var boolean <p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string <p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var string <p>任务扩展信息(目前返沪离线同步的任务详情)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExtInfo;

    /**
     * @var array <p>任务绑定的事件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerInfos;

    /**
     * @var AiopsScriptInfo <p>脚本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptInfo;

    /**
     * @var AiopsDLCResourceConfigDto <p>DLC资源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DLCResourceConfig;

    /**
     * @var AiopsSimpleTaskDto <p>父任务simple信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTaskInfos;

    /**
     * @var ExtResourceFlagDto <p>资源获取标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtResourceFlag;

    /**
     * @var array <p>父任务simple信息(新)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewParentTaskInfos;

    /**
     * @var string <p>任务自依赖类型：<br>yes： 任务需满足自依赖<br>no：任务无需满足自依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfWorkFlowDependType;

    /**
     * @var string <p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
     */
    public $AllowRedoType;

    /**
     * @var string <p>负责人Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var array <p>当前用户对该任务的权限列表， 当前支持<br>CAN_MANAGE : 有权限管理操作</p>
     */
    public $Privileges;

    /**
     * @var string <p>bundle客户端唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>bundle客户端信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var string <p>工作流类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @var TaskExtOpsDto <p>任务扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExtDTO;

    /**
     * @var string <p>任务时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>代理任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyTaskId;

    /**
     * @var integer <p>代理任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyTaskTypeId;

    /**
     * @param string $TaskId <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskId <p>虚拟任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag <p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealWorkflowId <p>任务为虚拟任务时，任务所在的真实工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate <p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId <p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>调度生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>调度结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep <p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression <p>调度cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime <p>延时执行时间，unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime <p>开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait <p>重试等待时间, unit=分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryAble <p>是否可重试，1 代表可以重试</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction <p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为&#39;0,3,4&#39;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit <p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority <p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeOpsDto $TaskType <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp <p>指定的运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>集群name</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinDateTime <p>最小数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxDateTime <p>最大数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTTL <p>运行耗时超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend <p>自依赖类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate <p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate <p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Notes <p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy <p>任务初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue <p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerCommitTime <p>最新调度提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NormalizedJobStartTime <p>按cron表达式计算的任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc <p>调度计划描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup <p>计算资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>任务创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel <p>任务依赖类型 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow <p>任务工作流依赖 yes、no</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventListenerConfig <p>事件监听配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventPublisherConfig <p>事件驱动配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskStatus <p>虚拟任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LinkOpsDto $TaskLinkInfo <p>任务依赖边详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName <p>任务产品类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnId <p>主账户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId <p>用户userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId <p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser <p>更新人昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId <p>更新人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId <p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeDesc <p>任务类型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowWorkflow <p>是否展示工作流</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime <p>首次提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstRunTime <p>首次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc <p>调度描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleNum <p>周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Crontab <p>表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartDate <p>开始日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate <p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit <p>周期单位</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InitStrategy <p>初始化策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Layer <p>层级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceId <p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceType <p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceId <p>目标数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceType <p>目标数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TasksStr <p>子任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit <p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId <p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskExtInfo <p>任务扩展信息(目前返沪离线同步的任务详情)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventListenerInfos <p>任务绑定的事件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiopsScriptInfo $ScriptInfo <p>脚本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiopsDLCResourceConfigDto $DLCResourceConfig <p>DLC资源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiopsSimpleTaskDto $ParentTaskInfos <p>父任务simple信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtResourceFlagDto $ExtResourceFlag <p>资源获取标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NewParentTaskInfos <p>父任务simple信息(新)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfWorkFlowDependType <p>任务自依赖类型：<br>yes： 任务需满足自依赖<br>no：任务无需满足自依赖</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowRedoType <p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
     * @param string $OwnerId <p>负责人Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Privileges <p>当前用户对该任务的权限列表， 当前支持<br>CAN_MANAGE : 有权限管理操作</p>
     * @param string $BundleId <p>bundle客户端唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo <p>bundle客户端信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType <p>工作流类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskExtOpsDto $TaskExtDTO <p>任务扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>任务时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyTaskId <p>代理任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyTaskTypeId <p>代理任务类型ID</p>
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

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("TaskExtDTO",$param) and $param["TaskExtDTO"] !== null) {
            $this->TaskExtDTO = new TaskExtOpsDto();
            $this->TaskExtDTO->deserialize($param["TaskExtDTO"]);
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("ProxyTaskId",$param) and $param["ProxyTaskId"] !== null) {
            $this->ProxyTaskId = $param["ProxyTaskId"];
        }

        if (array_key_exists("ProxyTaskTypeId",$param) and $param["ProxyTaskTypeId"] !== null) {
            $this->ProxyTaskTypeId = $param["ProxyTaskTypeId"];
        }
    }
}
