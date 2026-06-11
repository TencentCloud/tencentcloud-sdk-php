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
 * 实例运维详情
 *
 * @method string getTaskId() 获取<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取<p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置<p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取<p>数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置<p>数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextCurDate() 获取<p>下一个数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextCurDate(string $NextCurDate) 设置<p>下一个数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取<p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置<p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取<p>尝试运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置<p>尝试运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTries() 获取<p>当前运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(integer $Tries) 设置<p>当前运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRunNum() 获取<p>重跑总次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRunNum(integer $TotalRunNum) 设置<p>重跑总次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDoFlag() 获取<p>是否补录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoFlag(integer $DoFlag) 设置<p>是否补录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedoFlag() 获取<p>是否是重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedoFlag(integer $RedoFlag) 设置<p>是否是重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntimeBroker() 获取<p>运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeBroker(string $RuntimeBroker) 设置<p>运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDesc() 获取<p>失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置<p>失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeOpsDto getTaskType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskTypeOpsDto $TaskType) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependenceFulfillTime() 获取<p>依赖判断完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependenceFulfillTime(string $DependenceFulfillTime) 设置<p>依赖判断完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstDependenceFulfillTime() 获取<p>首次依赖判断通过时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstDependenceFulfillTime(string $FirstDependenceFulfillTime) 设置<p>首次依赖判断通过时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstStartTime() 获取<p>首次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstStartTime(string $FirstStartTime) 设置<p>首次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>开始启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>开始启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>运行完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>运行完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCostTime() 获取<p>耗费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(string $CostTime) 设置<p>耗费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostMillisecond() 获取<p>耗费时间(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostMillisecond(integer $CostMillisecond) 设置<p>耗费时间(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxCostTime() 获取<p>最大运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxCostTime(integer $MaxCostTime) 设置<p>最大运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinCostTime() 获取<p>最小运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinCostTime(integer $MinCostTime) 设置<p>最小运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAvgCostTime() 获取<p>平均运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgCostTime(float $AvgCostTime) 设置<p>平均运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLog() 获取<p>最近日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLog(string $LastLog) 设置<p>最近日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDateTime() 获取<p>调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDateTime(string $SchedulerDateTime) 设置<p>调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerDateTime() 获取<p>上次调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerDateTime(string $LastSchedulerDateTime) 设置<p>上次调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取<p>最后更新事件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置<p>最后更新事件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取<p>分支，依赖关系 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置<p>分支，依赖关系 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionSpace() 获取<p>执行空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionSpace(string $ExecutionSpace) 设置<p>执行空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIgnoreEvent() 获取<p>忽略事件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreEvent(boolean $IgnoreEvent) 设置<p>忽略事件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取<p>虚拟任务实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置<p>虚拟任务实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSonList() 获取<p>递归实例信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSonList(string $SonList) 设置<p>递归实例信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取<p>产品业务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置<p>产品业务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取<p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置<p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceInstanceId() 获取<p>资源组指定执行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceInstanceId(string $ResourceInstanceId) 设置<p>资源组指定执行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取<p>资源队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置<p>资源队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取<p>最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置<p>最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstRunTime() 获取<p>首次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstRunTime(string $FirstRunTime) 设置<p>首次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取<p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置<p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceKey() 获取<p>实例标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置<p>实例标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取<p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置<p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedInstanceList() 获取<p>关联实例信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedInstanceList(array $RelatedInstanceList) 设置<p>关联实例信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRelatedInstanceSize() 获取<p>关联实例信息数量，不和RelatedInstanceList强关联。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedInstanceSize(integer $RelatedInstanceSize) 设置<p>关联实例信息数量，不和RelatedInstanceList强关联。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取<p>ownerId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置<p>ownerId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取<p>用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置<p>用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceLifeCycleOpsDto getInstanceLifeCycleOpsDto() 获取<p>实例生命周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLifeCycleOpsDto(InstanceLifeCycleOpsDto $InstanceLifeCycleOpsDto) 设置<p>实例生命周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryAttempts() 获取<p>自动重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryAttempts(integer $RetryAttempts) 设置<p>自动重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeletedFatherList() 获取<p>紧急去除的依赖父实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletedFatherList(array $DeletedFatherList) 设置<p>紧急去除的依赖父实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCirculateInstanceList() 获取<p>循环依赖关联的实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCirculateInstanceList(array $CirculateInstanceList) 设置<p>循环依赖关联的实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcurrentStrategy() 获取<p>并发策略, 0: 等待并发, 1: kill自身</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcurrentStrategy(integer $ConcurrentStrategy) 设置<p>并发策略, 0: 等待并发, 1: kill自身</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleRunType() 获取<p>调度运行方式, 0: 周期调度, 1: 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleRunType(integer $ScheduleRunType) 设置<p>调度运行方式, 0: 周期调度, 1: 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowRedoType() 获取<p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
 * @method void setAllowRedoType(string $AllowRedoType) 设置<p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
 * @method string getInstanceCycleType() 获取<p>实例生命周期</p>
 * @method void setInstanceCycleType(string $InstanceCycleType) 设置<p>实例生命周期</p>
 * @method string getInstanceSchedulerDesc() 获取<p>实例执行计划描述</p>
 * @method void setInstanceSchedulerDesc(string $InstanceSchedulerDesc) 设置<p>实例执行计划描述</p>
 * @method array getPrivileges() 获取<p>当前用户对该实例的权限列表</p>
 * @method void setPrivileges(array $Privileges) 设置<p>当前用户对该实例的权限列表</p>
 * @method string getTaskExecutionId() 获取<p>任务执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExecutionId(string $TaskExecutionId) 设置<p>任务执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcTaskId() 获取<p>dlc taskid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcTaskId(string $DlcTaskId) 设置<p>dlc taskid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcSparkJobId() 获取<p>dlc jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcSparkJobId(string $DlcSparkJobId) 设置<p>dlc jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method StrToStrMap getExt() 获取<p>扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(StrToStrMap $Ext) 设置<p>扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedEventList() 获取<p>事件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedEventList(array $RelatedEventList) 设置<p>事件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyTaskId() 获取<p>代理任务ID（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyTaskId(string $ProxyTaskId) 设置<p>代理任务ID（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowRunName() 获取<p>嵌套工作流名称（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunName(string $WorkflowRunName) 设置<p>嵌套工作流名称（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeOpsDto getProxyTaskType() 获取<p>代理任务类型（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyTaskType(TaskTypeOpsDto $ProxyTaskType) 设置<p>代理任务类型（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceOpsDto extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string <p>数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string <p>下一个数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextCurDate;

    /**
     * @var integer <p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunPriority;

    /**
     * @var integer <p>尝试运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TryLimit;

    /**
     * @var integer <p>当前运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tries;

    /**
     * @var integer <p>重跑总次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRunNum;

    /**
     * @var integer <p>是否补录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoFlag;

    /**
     * @var integer <p>是否是重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedoFlag;

    /**
     * @var string <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string <p>运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeBroker;

    /**
     * @var string <p>失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @var TaskTypeOpsDto <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string <p>依赖判断完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependenceFulfillTime;

    /**
     * @var string <p>首次依赖判断通过时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstDependenceFulfillTime;

    /**
     * @var string <p>首次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstStartTime;

    /**
     * @var string <p>开始启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>运行完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>耗费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @var integer <p>耗费时间(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostMillisecond;

    /**
     * @var integer <p>最大运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxCostTime;

    /**
     * @var integer <p>最小运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinCostTime;

    /**
     * @var float <p>平均运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgCostTime;

    /**
     * @var string <p>最近日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLog;

    /**
     * @var string <p>调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDateTime;

    /**
     * @var string <p>上次调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerDateTime;

    /**
     * @var string <p>最后更新事件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>分支，依赖关系 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string <p>执行空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionSpace;

    /**
     * @var boolean <p>忽略事件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreEvent;

    /**
     * @var boolean <p>虚拟任务实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var string <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>递归实例信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SonList;

    /**
     * @var string <p>产品业务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string <p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string <p>资源组指定执行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceInstanceId;

    /**
     * @var string <p>资源队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

    /**
     * @var string <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string <p>最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string <p>首次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstRunTime;

    /**
     * @var string <p>项目ID</p>
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
     * @var string <p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string <p>实例标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

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
     * @var array <p>关联实例信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedInstanceList;

    /**
     * @var integer <p>关联实例信息数量，不和RelatedInstanceList强关联。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedInstanceSize;

    /**
     * @var string <p>ownerId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var string <p>用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var InstanceLifeCycleOpsDto <p>实例生命周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLifeCycleOpsDto;

    /**
     * @var integer <p>自动重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryAttempts;

    /**
     * @var array <p>紧急去除的依赖父实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletedFatherList;

    /**
     * @var array <p>循环依赖关联的实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CirculateInstanceList;

    /**
     * @var integer <p>并发策略, 0: 等待并发, 1: kill自身</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcurrentStrategy;

    /**
     * @var integer <p>调度运行方式, 0: 周期调度, 1: 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleRunType;

    /**
     * @var string <p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
     */
    public $AllowRedoType;

    /**
     * @var string <p>实例生命周期</p>
     */
    public $InstanceCycleType;

    /**
     * @var string <p>实例执行计划描述</p>
     */
    public $InstanceSchedulerDesc;

    /**
     * @var array <p>当前用户对该实例的权限列表</p>
     */
    public $Privileges;

    /**
     * @var string <p>任务执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExecutionId;

    /**
     * @var string <p>dlc taskid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcTaskId;

    /**
     * @var string <p>dlc jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcSparkJobId;

    /**
     * @var StrToStrMap <p>扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var array <p>事件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedEventList;

    /**
     * @var string <p>代理任务ID（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyTaskId;

    /**
     * @var string <p>嵌套工作流名称（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunName;

    /**
     * @var TaskTypeOpsDto <p>代理任务类型（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyTaskType;

    /**
     * @param string $TaskId <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge <p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate <p>数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextCurDate <p>下一个数据时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority <p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit <p>尝试运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tries <p>当前运行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRunNum <p>重跑总次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DoFlag <p>是否补录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedoFlag <p>是否是重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuntimeBroker <p>运行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDesc <p>失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeOpsDto $TaskType <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependenceFulfillTime <p>依赖判断完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstDependenceFulfillTime <p>首次依赖判断通过时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstStartTime <p>首次启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>开始启动时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>运行完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CostTime <p>耗费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostMillisecond <p>耗费时间(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxCostTime <p>最大运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinCostTime <p>最小运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AvgCostTime <p>平均运行耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLog <p>最近日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDateTime <p>调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerDateTime <p>上次调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate <p>最后更新事件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel <p>分支，依赖关系 and、or</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionSpace <p>执行空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IgnoreEvent <p>忽略事件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag <p>虚拟任务实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SonList <p>递归实例信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName <p>产品业务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup <p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceInstanceId <p>资源组指定执行节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue <p>资源队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime <p>最近提交时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstRunTime <p>首次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId <p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceKey <p>实例标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId <p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedInstanceList <p>关联实例信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RelatedInstanceSize <p>关联实例信息数量，不和RelatedInstanceList强关联。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId <p>ownerId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId <p>用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceLifeCycleOpsDto $InstanceLifeCycleOpsDto <p>实例生命周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryAttempts <p>自动重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeletedFatherList <p>紧急去除的依赖父实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CirculateInstanceList <p>循环依赖关联的实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConcurrentStrategy <p>并发策略, 0: 等待并发, 1: kill自身</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleRunType <p>调度运行方式, 0: 周期调度, 1: 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowRedoType <p>允许重跑类型，ALL 表示无论实例运行成功还是失败都允许重跑，NONE表示无论成功或者失败都不允许重跑，FAILURE 表示只有运行失败才能重跑</p>
     * @param string $InstanceCycleType <p>实例生命周期</p>
     * @param string $InstanceSchedulerDesc <p>实例执行计划描述</p>
     * @param array $Privileges <p>当前用户对该实例的权限列表</p>
     * @param string $TaskExecutionId <p>任务执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcTaskId <p>dlc taskid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcSparkJobId <p>dlc jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param StrToStrMap $Ext <p>扩展属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedEventList <p>事件列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyTaskId <p>代理任务ID（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowRunName <p>嵌套工作流名称（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeOpsDto $ProxyTaskType <p>代理任务类型（仅 嵌套场景使用，非 嵌套 场景为 null）</p>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("NextCurDate",$param) and $param["NextCurDate"] !== null) {
            $this->NextCurDate = $param["NextCurDate"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("TotalRunNum",$param) and $param["TotalRunNum"] !== null) {
            $this->TotalRunNum = $param["TotalRunNum"];
        }

        if (array_key_exists("DoFlag",$param) and $param["DoFlag"] !== null) {
            $this->DoFlag = $param["DoFlag"];
        }

        if (array_key_exists("RedoFlag",$param) and $param["RedoFlag"] !== null) {
            $this->RedoFlag = $param["RedoFlag"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RuntimeBroker",$param) and $param["RuntimeBroker"] !== null) {
            $this->RuntimeBroker = $param["RuntimeBroker"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskTypeOpsDto();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("DependenceFulfillTime",$param) and $param["DependenceFulfillTime"] !== null) {
            $this->DependenceFulfillTime = $param["DependenceFulfillTime"];
        }

        if (array_key_exists("FirstDependenceFulfillTime",$param) and $param["FirstDependenceFulfillTime"] !== null) {
            $this->FirstDependenceFulfillTime = $param["FirstDependenceFulfillTime"];
        }

        if (array_key_exists("FirstStartTime",$param) and $param["FirstStartTime"] !== null) {
            $this->FirstStartTime = $param["FirstStartTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("CostMillisecond",$param) and $param["CostMillisecond"] !== null) {
            $this->CostMillisecond = $param["CostMillisecond"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("AvgCostTime",$param) and $param["AvgCostTime"] !== null) {
            $this->AvgCostTime = $param["AvgCostTime"];
        }

        if (array_key_exists("LastLog",$param) and $param["LastLog"] !== null) {
            $this->LastLog = $param["LastLog"];
        }

        if (array_key_exists("SchedulerDateTime",$param) and $param["SchedulerDateTime"] !== null) {
            $this->SchedulerDateTime = $param["SchedulerDateTime"];
        }

        if (array_key_exists("LastSchedulerDateTime",$param) and $param["LastSchedulerDateTime"] !== null) {
            $this->LastSchedulerDateTime = $param["LastSchedulerDateTime"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DependencyRel",$param) and $param["DependencyRel"] !== null) {
            $this->DependencyRel = $param["DependencyRel"];
        }

        if (array_key_exists("ExecutionSpace",$param) and $param["ExecutionSpace"] !== null) {
            $this->ExecutionSpace = $param["ExecutionSpace"];
        }

        if (array_key_exists("IgnoreEvent",$param) and $param["IgnoreEvent"] !== null) {
            $this->IgnoreEvent = $param["IgnoreEvent"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("SonList",$param) and $param["SonList"] !== null) {
            $this->SonList = $param["SonList"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ResourceInstanceId",$param) and $param["ResourceInstanceId"] !== null) {
            $this->ResourceInstanceId = $param["ResourceInstanceId"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
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

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("RelatedInstanceList",$param) and $param["RelatedInstanceList"] !== null) {
            $this->RelatedInstanceList = [];
            foreach ($param["RelatedInstanceList"] as $key => $value){
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->RelatedInstanceList, $obj);
            }
        }

        if (array_key_exists("RelatedInstanceSize",$param) and $param["RelatedInstanceSize"] !== null) {
            $this->RelatedInstanceSize = $param["RelatedInstanceSize"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("InstanceLifeCycleOpsDto",$param) and $param["InstanceLifeCycleOpsDto"] !== null) {
            $this->InstanceLifeCycleOpsDto = new InstanceLifeCycleOpsDto();
            $this->InstanceLifeCycleOpsDto->deserialize($param["InstanceLifeCycleOpsDto"]);
        }

        if (array_key_exists("RetryAttempts",$param) and $param["RetryAttempts"] !== null) {
            $this->RetryAttempts = $param["RetryAttempts"];
        }

        if (array_key_exists("DeletedFatherList",$param) and $param["DeletedFatherList"] !== null) {
            $this->DeletedFatherList = $param["DeletedFatherList"];
        }

        if (array_key_exists("CirculateInstanceList",$param) and $param["CirculateInstanceList"] !== null) {
            $this->CirculateInstanceList = [];
            foreach ($param["CirculateInstanceList"] as $key => $value){
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->CirculateInstanceList, $obj);
            }
        }

        if (array_key_exists("ConcurrentStrategy",$param) and $param["ConcurrentStrategy"] !== null) {
            $this->ConcurrentStrategy = $param["ConcurrentStrategy"];
        }

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
        }

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("InstanceCycleType",$param) and $param["InstanceCycleType"] !== null) {
            $this->InstanceCycleType = $param["InstanceCycleType"];
        }

        if (array_key_exists("InstanceSchedulerDesc",$param) and $param["InstanceSchedulerDesc"] !== null) {
            $this->InstanceSchedulerDesc = $param["InstanceSchedulerDesc"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("TaskExecutionId",$param) and $param["TaskExecutionId"] !== null) {
            $this->TaskExecutionId = $param["TaskExecutionId"];
        }

        if (array_key_exists("DlcTaskId",$param) and $param["DlcTaskId"] !== null) {
            $this->DlcTaskId = $param["DlcTaskId"];
        }

        if (array_key_exists("DlcSparkJobId",$param) and $param["DlcSparkJobId"] !== null) {
            $this->DlcSparkJobId = $param["DlcSparkJobId"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new StrToStrMap();
            $this->Ext->deserialize($param["Ext"]);
        }

        if (array_key_exists("RelatedEventList",$param) and $param["RelatedEventList"] !== null) {
            $this->RelatedEventList = [];
            foreach ($param["RelatedEventList"] as $key => $value){
                $obj = new EventCaseAuditLogOptDto();
                $obj->deserialize($value);
                array_push($this->RelatedEventList, $obj);
            }
        }

        if (array_key_exists("ProxyTaskId",$param) and $param["ProxyTaskId"] !== null) {
            $this->ProxyTaskId = $param["ProxyTaskId"];
        }

        if (array_key_exists("WorkflowRunName",$param) and $param["WorkflowRunName"] !== null) {
            $this->WorkflowRunName = $param["WorkflowRunName"];
        }

        if (array_key_exists("ProxyTaskType",$param) and $param["ProxyTaskType"] !== null) {
            $this->ProxyTaskType = new TaskTypeOpsDto();
            $this->ProxyTaskType->deserialize($param["ProxyTaskType"]);
        }
    }
}
