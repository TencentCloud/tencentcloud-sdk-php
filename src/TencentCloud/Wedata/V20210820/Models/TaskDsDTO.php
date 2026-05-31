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
 * 任务信息
 *
 * @method string getTaskId() 获取<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskId() 获取<p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置<p>虚拟任务标记</p>
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
 * @method string getRealWorkflowId() 获取<p>真实工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealWorkflowId(string $RealWorkflowId) 设置<p>真实工作流id</p>
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
 * @method string getLastUpdate() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取<p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置<p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间</p>
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
 * @method string getCycleType() 获取<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取<p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置<p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取<p>对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取<p>延时调度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置<p>延时调度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取<p>延时执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置<p>延时执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取<p>重试等待时间,单位分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置<p>重试等待时间,单位分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetriable() 获取<p>是否可重试</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetriable(integer $Retriable) 设置<p>是否可重试</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取<p>调度扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置<p>调度扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取<p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置<p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取<p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置<p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeDsVO getTaskType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskTypeDsVO $TaskType) 设置<p>任务类型</p>
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
 * @method string getSelfDepend() 获取<p>是否自身依赖 是1 否2 并行3</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置<p>是否自身依赖 是1 否2 并行3</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取<p>LeftCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置<p>LeftCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取<p>TopCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置<p>TopCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskExtDsVO getTaskExt() 获取<p>TaskExt信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExt(TaskExtDsVO $TaskExt) 设置<p>TaskExt信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProperties() 获取<p>taskExt 导入导出json使用 private Map  properties;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(string $Properties) 设置<p>taskExt 导入导出json使用 private Map  properties;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotes() 获取<p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotes(string $Notes) 设置<p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取<p>实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1</p><pre><code> * 表示当前周期生成下一周期数据时间任务实例 * * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径</code></pre>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置<p>实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1</p><pre><code> * 表示当前周期生成下一周期数据时间任务实例 * * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径</code></pre>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取<p>资源池队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置<p>资源池队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarms() 获取<p>任务告警信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarms(array $Alarms) 设置<p>任务告警信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarm() 获取<p>alarmDTO 导入导出json使用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarm(string $Alarm) 设置<p>alarmDTO 导入导出json使用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptChange() 获取<p>任务脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptChange(boolean $ScriptChange) 设置<p>任务脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取<p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置<p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerCommitTime() 获取<p>最新调度计划变更时间 仅生产态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) 设置<p>最新调度计划变更时间 仅生产态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNormalizedJobStartTime() 获取<p>仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalizedJobStartTime(string $NormalizedJobStartTime) 设置<p>仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecoverFreezeStartTime() 获取<p>启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoverFreezeStartTime(string $RecoverFreezeStartTime) 设置<p>启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServer() 获取<p>源数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServer(string $SourceServer) 设置<p>源数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServer() 获取<p>目标数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServer(string $TargetServer) 设置<p>目标数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取<p>父子节点树</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>父子节点树</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreater() 获取<p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreater(string $Creater) 设置<p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取<p>分支，依赖关系，and/or, 默认and</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置<p>分支，依赖关系，and/or, 默认and</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取<p>是否支持工作流依赖 yes / no 默认 no</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>是否支持工作流依赖 yes / no 默认 no</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventListenerConfig() 获取<p>支持事件监听器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerConfig(string $EventListenerConfig) 设置<p>支持事件监听器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventPublisherConfig() 获取<p>支持事件触发器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventPublisherConfig(string $EventPublisherConfig) 设置<p>支持事件触发器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependencyConfigList() 获取<p>依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyConfigList(array $DependencyConfigList) 设置<p>依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskStatus() 获取<p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskStatus(string $VirtualTaskStatus) 设置<p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecycleTips() 获取<p>回收站还原提示语</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecycleTips(string $RecycleTips) 设置<p>回收站还原提示语</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecycleUser() 获取<p>回收站所属用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecycleUser(string $RecycleUser) 设置<p>回收站所属用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewOrUpdate() 获取<p>新增 或 修改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewOrUpdate(string $NewOrUpdate) 设置<p>新增 或 修改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取<p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置<p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskLinkInfo() 获取<p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLinkInfo(array $TaskLinkInfo) 设置<p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImportResult() 获取<p>导入结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportResult(boolean $ImportResult) 设置<p>导入结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportErrMsg() 获取<p>导入失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportErrMsg(string $ImportErrMsg) 设置<p>导入失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentType() 获取<p>任务内容 全部内容 配置内容 资源内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentType(string $ContentType) 设置<p>任务内容 全部内容 配置内容 资源内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskAutoSubmit() 获取<p>是否导入提交运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAutoSubmit(boolean $TaskAutoSubmit) 设置<p>是否导入提交运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取<p>上层产品 数据质量 / 数据开发 / ...</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置<p>上层产品 数据质量 / 数据开发 / ...</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnId() 获取<p>创建者账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnId(string $OwnId) 设置<p>创建者账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取<p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置<p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取<p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置<p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取<p>最后修改的人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置<p>最后修改的人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取<p>最后修改的人的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置<p>最后修改的人的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取<p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置<p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionDesc() 获取<p>版本提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionDesc(string $VersionDesc) 设置<p>版本提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkId() 获取<p>编排-删除添加的链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkId(string $LinkId) 设置<p>编排-删除添加的链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserFileId() 获取<p>脚本引用关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserFileId(string $UserFileId) 设置<p>脚本引用关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceId() 获取<p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceId(string $SourceServiceId) 设置<p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceType() 获取<p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceType(string $SourceServiceType) 设置<p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceId() 获取<p>去向数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceId(string $TargetServiceId) 设置<p>去向数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceType() 获取<p>去向数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceType(string $TargetServiceType) 设置<p>去向数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamInList() 获取<p>输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamInList(array $ParamInList) 设置<p>输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamOutList() 获取<p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamOutList(array $ParamOutList) 设置<p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderId() 获取<p>任务文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderId(string $TaskFolderId) 设置<p>任务文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryAttempts() 获取<p>最大尝试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryAttempts(integer $MaxRetryAttempts) 设置<p>最大尝试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceName() 获取<p>数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceName(string $SourceServiceName) 设置<p>数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskRegisterOutputTable() 获取<p>任务产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskRegisterOutputTable(array $TaskRegisterOutputTable) 设置<p>任务产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCycleDependencyConfigList() 获取<p>循环依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleDependencyConfigList(array $CycleDependencyConfigList) 设置<p>循环依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarning() 获取<p>特殊警告信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarning(string $Warning) 设置<p>特殊警告信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleRunType() 获取<p>0 正常调度 1 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleRunType(integer $ScheduleRunType) 设置<p>0 正常调度 1 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcurrentStrategy() 获取<p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcurrentStrategy(integer $ConcurrentStrategy) 设置<p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>UTC+8;UDC-8</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>UTC+8;UDC-8</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取<p>引用的代码模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置<p>引用的代码模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowRedoType() 获取<p>允许重跑类 ALL 无论实例成功或者失败，都允许重跑 FAILURE 只有失败的实例允许重跑，成功的实例不允许重跑 NONE 无论成功或者失败，都不允许重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowRedoType(string $AllowRedoType) 设置<p>允许重跑类 ALL 无论实例成功或者失败，都允许重跑 FAILURE 只有失败的实例允许重跑，成功的实例不允许重跑 NONE 无论成功或者失败，都不允许重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取<p>BundleId<br>CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>BundleId<br>CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取<p>bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置<p>bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllowDownstreamDependency() 获取<p>是否允许下游依赖 0 不允许 1 允许</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowDownstreamDependency(integer $AllowDownstreamDependency) 设置<p>是否允许下游依赖 0 不允许 1 允许</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyTriggerPolicy() 获取<ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyTriggerPolicy(string $DependencyTriggerPolicy) 设置<ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTimestamp() 获取<p>任务最后更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTimestamp(integer $LastUpdateTimestamp) 设置<p>任务最后更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDsDTO extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>虚拟任务标记</p>
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
     * @var string <p>真实工作流id</p>
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
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string <p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
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
     * @var string <p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束日期</p>
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
     * @var string <p>对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var integer <p>延时调度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer <p>延时执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var integer <p>重试等待时间,单位分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWait;

    /**
     * @var integer <p>是否可重试</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Retriable;

    /**
     * @var string <p>调度扩展信息</p>
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
     * @var TaskTypeDsVO <p>任务类型</p>
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
     * @var string <p>是否自身依赖 是1 否2 并行3</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var float <p>LeftCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float <p>TopCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var TaskExtDsVO <p>TaskExt信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExt;

    /**
     * @var string <p>taskExt 导入导出json使用 private Map  properties;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string <p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notes;

    /**
     * @var string <p>实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1</p><pre><code> * 表示当前周期生成下一周期数据时间任务实例 * * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径</code></pre>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string <p>资源池队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

    /**
     * @var array <p>任务告警信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alarms;

    /**
     * @var string <p>alarmDTO 导入导出json使用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alarm;

    /**
     * @var boolean <p>任务脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptChange;

    /**
     * @var boolean <p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string <p>最新调度计划变更时间 仅生产态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerCommitTime;

    /**
     * @var string <p>仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalizedJobStartTime;

    /**
     * @var string <p>启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoverFreezeStartTime;

    /**
     * @var string <p>源数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServer;

    /**
     * @var string <p>目标数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServer;

    /**
     * @var array <p>父子节点树</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string <p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creater;

    /**
     * @var string <p>分支，依赖关系，and/or, 默认and</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string <p>是否支持工作流依赖 yes / no 默认 no</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string <p>支持事件监听器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerConfig;

    /**
     * @var string <p>支持事件触发器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventPublisherConfig;

    /**
     * @var array <p>依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyConfigList;

    /**
     * @var string <p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskStatus;

    /**
     * @var string <p>回收站还原提示语</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecycleTips;

    /**
     * @var string <p>回收站所属用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecycleUser;

    /**
     * @var string <p>新增 或 修改</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewOrUpdate;

    /**
     * @var array <p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var array <p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLinkInfo;

    /**
     * @var boolean <p>导入结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportResult;

    /**
     * @var string <p>导入失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportErrMsg;

    /**
     * @var string <p>任务内容 全部内容 配置内容 资源内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentType;

    /**
     * @var boolean <p>是否导入提交运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAutoSubmit;

    /**
     * @var string <p>上层产品 数据质量 / 数据开发 / ...</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string <p>创建者账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnId;

    /**
     * @var string <p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string <p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string <p>最后修改的人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>最后修改的人的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string <p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string <p>版本提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionDesc;

    /**
     * @var string <p>编排-删除添加的链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkId;

    /**
     * @var string <p>脚本引用关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserFileId;

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
     * @var string <p>去向数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceId;

    /**
     * @var string <p>去向数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceType;

    /**
     * @var array <p>输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamInList;

    /**
     * @var array <p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamOutList;

    /**
     * @var string <p>任务文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderId;

    /**
     * @var integer <p>最大尝试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetryAttempts;

    /**
     * @var string <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string <p>数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServiceName;

    /**
     * @var array <p>任务产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskRegisterOutputTable;

    /**
     * @var array <p>循环依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleDependencyConfigList;

    /**
     * @var string <p>特殊警告信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warning;

    /**
     * @var integer <p>0 正常调度 1 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleRunType;

    /**
     * @var integer <p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcurrentStrategy;

    /**
     * @var string <p>UTC+8;UDC-8</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>引用的代码模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string <p>允许重跑类 ALL 无论实例成功或者失败，都允许重跑 FAILURE 只有失败的实例允许重跑，成功的实例不允许重跑 NONE 无论成功或者失败，都不允许重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowRedoType;

    /**
     * @var string <p>BundleId<br>CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var integer <p>是否允许下游依赖 0 不允许 1 允许</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowDownstreamDependency;

    /**
     * @var string <ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyTriggerPolicy;

    /**
     * @var integer <p>任务最后更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTimestamp;

    /**
     * @param string $TaskId <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskId <p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag <p>虚拟任务标记</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealWorkflowId <p>真实工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId <p>责任人用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>执行时间左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>执行时间右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep <p>步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression <p>对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime <p>延时调度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime <p>延时执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait <p>重试等待时间,单位分钟</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Retriable <p>是否可重试</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction <p>调度扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit <p>运行次数限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority <p>运行优先级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeDsVO $TaskType <p>任务类型</p>
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
     * @param string $SelfDepend <p>是否自身依赖 是1 否2 并行3</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate <p>LeftCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate <p>TopCoordinate坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskExtDsVO $TaskExt <p>TaskExt信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Properties <p>taskExt 导入导出json使用 private Map  properties;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Notes <p>任务备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy <p>实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1</p><pre><code> * 表示当前周期生成下一周期数据时间任务实例 * * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径</code></pre>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue <p>资源池队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Alarms <p>任务告警信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alarm <p>alarmDTO 导入导出json使用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptChange <p>任务脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit <p>任务版本是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerCommitTime <p>最新调度计划变更时间 仅生产态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NormalizedJobStartTime <p>仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecoverFreezeStartTime <p>启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServer <p>源数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServer <p>目标数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks <p>父子节点树</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater <p>创建者</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel <p>分支，依赖关系，and/or, 默认and</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow <p>是否支持工作流依赖 yes / no 默认 no</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventListenerConfig <p>支持事件监听器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventPublisherConfig <p>支持事件触发器配置导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependencyConfigList <p>依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskStatus <p>任务状态，取值范围：</p><ul><li>N 新建</li><li>Y 运行</li><li>F 停止</li><li>O 冻结</li><li>T 停止中</li><li>INVALID 已失效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecycleTips <p>回收站还原提示语</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecycleUser <p>回收站所属用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewOrUpdate <p>新增 或 修改</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params <p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskLinkInfo <p>任务上游依赖信息 用于发布管理导入导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ImportResult <p>导入结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportErrMsg <p>导入失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentType <p>任务内容 全部内容 配置内容 资源内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskAutoSubmit <p>是否导入提交运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName <p>上层产品 数据质量 / 数据开发 / ...</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnId <p>创建者账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId <p>子账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId <p>租户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser <p>最后修改的人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId <p>最后修改的人的ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup <p>资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionDesc <p>版本提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkId <p>编排-删除添加的链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserFileId <p>脚本引用关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceId <p>来源数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceType <p>来源数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceId <p>去向数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceType <p>去向数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamInList <p>输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamOutList <p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderId <p>任务文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryAttempts <p>最大尝试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceName <p>数据源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskRegisterOutputTable <p>任务产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CycleDependencyConfigList <p>循环依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Warning <p>特殊警告信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleRunType <p>0 正常调度 1 空跑调度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConcurrentStrategy <p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>UTC+8;UDC-8</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId <p>引用的代码模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowRedoType <p>允许重跑类 ALL 无论实例成功或者失败，都允许重跑 FAILURE 只有失败的实例允许重跑，成功的实例不允许重跑 NONE 无论成功或者失败，都不允许重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId <p>BundleId<br>CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo <p>bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllowDownstreamDependency <p>是否允许下游依赖 0 不允许 1 允许</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyTriggerPolicy <ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTimestamp <p>任务最后更新时间戳</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
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

        if (array_key_exists("Retriable",$param) and $param["Retriable"] !== null) {
            $this->Retriable = $param["Retriable"];
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
            $this->TaskType = new TaskTypeDsVO();
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

        if (array_key_exists("TaskExt",$param) and $param["TaskExt"] !== null) {
            $this->TaskExt = new TaskExtDsVO();
            $this->TaskExt->deserialize($param["TaskExt"]);
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
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

        if (array_key_exists("Alarms",$param) and $param["Alarms"] !== null) {
            $this->Alarms = [];
            foreach ($param["Alarms"] as $key => $value){
                $obj = new AlarmDsVO();
                $obj->deserialize($value);
                array_push($this->Alarms, $obj);
            }
        }

        if (array_key_exists("Alarm",$param) and $param["Alarm"] !== null) {
            $this->Alarm = $param["Alarm"];
        }

        if (array_key_exists("ScriptChange",$param) and $param["ScriptChange"] !== null) {
            $this->ScriptChange = $param["ScriptChange"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("LastSchedulerCommitTime",$param) and $param["LastSchedulerCommitTime"] !== null) {
            $this->LastSchedulerCommitTime = $param["LastSchedulerCommitTime"];
        }

        if (array_key_exists("NormalizedJobStartTime",$param) and $param["NormalizedJobStartTime"] !== null) {
            $this->NormalizedJobStartTime = $param["NormalizedJobStartTime"];
        }

        if (array_key_exists("RecoverFreezeStartTime",$param) and $param["RecoverFreezeStartTime"] !== null) {
            $this->RecoverFreezeStartTime = $param["RecoverFreezeStartTime"];
        }

        if (array_key_exists("SourceServer",$param) and $param["SourceServer"] !== null) {
            $this->SourceServer = $param["SourceServer"];
        }

        if (array_key_exists("TargetServer",$param) and $param["TargetServer"] !== null) {
            $this->TargetServer = $param["TargetServer"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskDsDTO();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
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

        if (array_key_exists("DependencyConfigList",$param) and $param["DependencyConfigList"] !== null) {
            $this->DependencyConfigList = [];
            foreach ($param["DependencyConfigList"] as $key => $value){
                $obj = new DependencyConfigDsDTO();
                $obj->deserialize($value);
                array_push($this->DependencyConfigList, $obj);
            }
        }

        if (array_key_exists("VirtualTaskStatus",$param) and $param["VirtualTaskStatus"] !== null) {
            $this->VirtualTaskStatus = $param["VirtualTaskStatus"];
        }

        if (array_key_exists("RecycleTips",$param) and $param["RecycleTips"] !== null) {
            $this->RecycleTips = $param["RecycleTips"];
        }

        if (array_key_exists("RecycleUser",$param) and $param["RecycleUser"] !== null) {
            $this->RecycleUser = $param["RecycleUser"];
        }

        if (array_key_exists("NewOrUpdate",$param) and $param["NewOrUpdate"] !== null) {
            $this->NewOrUpdate = $param["NewOrUpdate"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ParameterTaskDsDto();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("TaskLinkInfo",$param) and $param["TaskLinkInfo"] !== null) {
            $this->TaskLinkInfo = [];
            foreach ($param["TaskLinkInfo"] as $key => $value){
                $obj = new TaskLinkDsDTO();
                $obj->deserialize($value);
                array_push($this->TaskLinkInfo, $obj);
            }
        }

        if (array_key_exists("ImportResult",$param) and $param["ImportResult"] !== null) {
            $this->ImportResult = $param["ImportResult"];
        }

        if (array_key_exists("ImportErrMsg",$param) and $param["ImportErrMsg"] !== null) {
            $this->ImportErrMsg = $param["ImportErrMsg"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("TaskAutoSubmit",$param) and $param["TaskAutoSubmit"] !== null) {
            $this->TaskAutoSubmit = $param["TaskAutoSubmit"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
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

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("LinkId",$param) and $param["LinkId"] !== null) {
            $this->LinkId = $param["LinkId"];
        }

        if (array_key_exists("UserFileId",$param) and $param["UserFileId"] !== null) {
            $this->UserFileId = $param["UserFileId"];
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

        if (array_key_exists("ParamInList",$param) and $param["ParamInList"] !== null) {
            $this->ParamInList = [];
            foreach ($param["ParamInList"] as $key => $value){
                $obj = new ParameterTaskInDsDto();
                $obj->deserialize($value);
                array_push($this->ParamInList, $obj);
            }
        }

        if (array_key_exists("ParamOutList",$param) and $param["ParamOutList"] !== null) {
            $this->ParamOutList = [];
            foreach ($param["ParamOutList"] as $key => $value){
                $obj = new ParameterTaskOutDsDto();
                $obj->deserialize($value);
                array_push($this->ParamOutList, $obj);
            }
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("MaxRetryAttempts",$param) and $param["MaxRetryAttempts"] !== null) {
            $this->MaxRetryAttempts = $param["MaxRetryAttempts"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("SourceServiceName",$param) and $param["SourceServiceName"] !== null) {
            $this->SourceServiceName = $param["SourceServiceName"];
        }

        if (array_key_exists("TaskRegisterOutputTable",$param) and $param["TaskRegisterOutputTable"] !== null) {
            $this->TaskRegisterOutputTable = [];
            foreach ($param["TaskRegisterOutputTable"] as $key => $value){
                $obj = new TaskDataRegistryDTO();
                $obj->deserialize($value);
                array_push($this->TaskRegisterOutputTable, $obj);
            }
        }

        if (array_key_exists("CycleDependencyConfigList",$param) and $param["CycleDependencyConfigList"] !== null) {
            $this->CycleDependencyConfigList = [];
            foreach ($param["CycleDependencyConfigList"] as $key => $value){
                $obj = new TaskCycleLinkDTO();
                $obj->deserialize($value);
                array_push($this->CycleDependencyConfigList, $obj);
            }
        }

        if (array_key_exists("Warning",$param) and $param["Warning"] !== null) {
            $this->Warning = $param["Warning"];
        }

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
        }

        if (array_key_exists("ConcurrentStrategy",$param) and $param["ConcurrentStrategy"] !== null) {
            $this->ConcurrentStrategy = $param["ConcurrentStrategy"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("AllowDownstreamDependency",$param) and $param["AllowDownstreamDependency"] !== null) {
            $this->AllowDownstreamDependency = $param["AllowDownstreamDependency"];
        }

        if (array_key_exists("DependencyTriggerPolicy",$param) and $param["DependencyTriggerPolicy"] !== null) {
            $this->DependencyTriggerPolicy = $param["DependencyTriggerPolicy"];
        }

        if (array_key_exists("LastUpdateTimestamp",$param) and $param["LastUpdateTimestamp"] !== null) {
            $this->LastUpdateTimestamp = $param["LastUpdateTimestamp"];
        }
    }
}
