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
 * TaskDsDTO 减少嵌套层数
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskId() 获取虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置虚拟任务标记
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
 * @method string getRealWorkflowId() 获取真实工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealWorkflowId(string $RealWorkflowId) 设置真实工作流id
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
 * @method string getLastUpdate() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置更新时间
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
 * @method string getStartTime() 获取生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间
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
 * @method string getCycleType() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延时调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延时调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取延时执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置延时执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取重试等待时间,单位分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置重试等待时间,单位分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetriable() 获取是否可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetriable(integer $Retriable) 设置是否可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取调度扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置调度扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取运行优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置运行优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeDsVO getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskTypeDsVO $TaskType) 设置任务类型
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
 * @method string getSelfDepend() 获取是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取LeftCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置LeftCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取TopCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置TopCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskExtDsVO getTaskExt() 获取TaskExt信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExt(TaskExtDsVO $TaskExt) 设置TaskExt信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProperties() 获取taskExt 导入导出json使用 private Map  properties;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(string $Properties) 设置taskExt 导入导出json使用 private Map  properties;
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotes() 获取任务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotes(string $Notes) 设置任务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1
     * 表示当前周期生成下一周期数据时间任务实例
     *
     * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1
     * 表示当前周期生成下一周期数据时间任务实例
     *
     * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取资源池队列名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置资源池队列名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarms() 获取任务告警信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarms(array $Alarms) 设置任务告警信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarm() 获取alarmDTO 导入导出json使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarm(string $Alarm) 设置alarmDTO 导入导出json使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptChange() 获取任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptChange(boolean $ScriptChange) 设置任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerCommitTime() 获取最新调度计划变更时间 仅生产态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) 设置最新调度计划变更时间 仅生产态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNormalizedJobStartTime() 获取仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalizedJobStartTime(string $NormalizedJobStartTime) 设置仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecoverFreezeStartTime() 获取启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoverFreezeStartTime(string $RecoverFreezeStartTime) 设置启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServer() 获取源数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServer(string $SourceServer) 设置源数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServer() 获取目标数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServer(string $TargetServer) 设置目标数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取父子节点树
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置父子节点树
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreater() 获取创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreater(string $Creater) 设置创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventListenerConfig() 获取支持事件监听器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerConfig(string $EventListenerConfig) 设置支持事件监听器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventPublisherConfig() 获取支持事件触发器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventPublisherConfig(string $EventPublisherConfig) 设置支持事件触发器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependencyConfigList() 获取依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyConfigList(array $DependencyConfigList) 设置依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskStatus() 获取虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskStatus(string $VirtualTaskStatus) 设置虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecycleTips() 获取回收站还原提示语
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecycleTips(string $RecycleTips) 设置回收站还原提示语
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecycleUser() 获取回收站所属用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecycleUser(string $RecycleUser) 设置回收站所属用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewOrUpdate() 获取新增 或 修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewOrUpdate(string $NewOrUpdate) 设置新增 或 修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskLinkInfo() 获取任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLinkInfo(array $TaskLinkInfo) 设置任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImportResult() 获取导入结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportResult(boolean $ImportResult) 设置导入结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportErrMsg() 获取导入失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportErrMsg(string $ImportErrMsg) 设置导入失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentType() 获取任务内容 全部内容 配置内容 资源内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentType(string $ContentType) 设置任务内容 全部内容 配置内容 资源内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskAutoSubmit() 获取是否导入提交运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAutoSubmit(boolean $TaskAutoSubmit) 设置是否导入提交运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取上层产品 数据质量 / 数据开发 / ...
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置上层产品 数据质量 / 数据开发 / ...
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnId() 获取创建者帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnId(string $OwnId) 设置创建者帐号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取最后修改的人的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置最后修改的人的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取资源组

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionDesc() 获取版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionDesc(string $VersionDesc) 设置版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkId() 获取编排-删除添加的链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkId(string $LinkId) 设置编排-删除添加的链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserFileId() 获取脚本引用关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserFileId(string $UserFileId) 设置脚本引用关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceId() 获取来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceId(string $SourceServiceId) 设置来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServiceType() 获取来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServiceType(string $SourceServiceType) 设置来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceId() 获取去向数据源ID（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceId(string $TargetServiceId) 设置去向数据源ID（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceType() 获取去向数据源类型（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceType(string $TargetServiceType) 设置去向数据源类型（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamInList() 获取TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamInList(array $ParamInList) 设置TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamOutList() 获取TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamOutList(array $ParamOutList) 设置TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDsDTOLiteV3 extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 虚拟任务标记
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
     * @var string 真实工作流id
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
     * @var string 更新时间
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
     * @var string 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束日期
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
     * @var string 对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var integer 延时调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer 延时执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var integer 重试等待时间,单位分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWait;

    /**
     * @var integer 是否可重试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Retriable;

    /**
     * @var string 调度扩展信息
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
     * @var TaskTypeDsVO 任务类型
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
     * @var string 是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var float LeftCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float TopCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var TaskExtDsVO TaskExt信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExt;

    /**
     * @var string taskExt 导入导出json使用 private Map  properties;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string 任务备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notes;

    /**
     * @var string 实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1
     * 表示当前周期生成下一周期数据时间任务实例
     *
     * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string 资源池队列名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

    /**
     * @var array 任务告警信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alarms;

    /**
     * @var string alarmDTO 导入导出json使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alarm;

    /**
     * @var boolean 任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptChange;

    /**
     * @var boolean 任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string 最新调度计划变更时间 仅生产态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerCommitTime;

    /**
     * @var string 仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalizedJobStartTime;

    /**
     * @var string 启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoverFreezeStartTime;

    /**
     * @var string 源数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServer;

    /**
     * @var string 目标数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServer;

    /**
     * @var array 父子节点树
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creater;

    /**
     * @var string 分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string 是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string 支持事件监听器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerConfig;

    /**
     * @var string 支持事件触发器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventPublisherConfig;

    /**
     * @var array 依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyConfigList;

    /**
     * @var string 虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskStatus;

    /**
     * @var string 回收站还原提示语
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecycleTips;

    /**
     * @var string 回收站所属用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecycleUser;

    /**
     * @var string 新增 或 修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewOrUpdate;

    /**
     * @var array 任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var array 任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLinkInfo;

    /**
     * @var boolean 导入结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportResult;

    /**
     * @var string 导入失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportErrMsg;

    /**
     * @var string 任务内容 全部内容 配置内容 资源内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentType;

    /**
     * @var boolean 是否导入提交运行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAutoSubmit;

    /**
     * @var string 上层产品 数据质量 / 数据开发 / ...
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 创建者帐号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnId;

    /**
     * @var string 子账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最后修改的人的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string 资源组

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string 版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionDesc;

    /**
     * @var string 编排-删除添加的链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkId;

    /**
     * @var string 脚本引用关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserFileId;

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
     * @var string 去向数据源ID（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceId;

    /**
     * @var string 去向数据源类型（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceType;

    /**
     * @var array TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamInList;

    /**
     * @var array TaskOutputParam输出参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamOutList;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskId 虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag 虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealWorkflowId 真实工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId 责任人用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 步长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression 对于crontab类型调度配置其为用户输入 对于周期类型调度配置其为系统计算
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延时调度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime 延时执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait 重试等待时间,单位分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Retriable 是否可重试
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 调度扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit 运行次数限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority 运行优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeDsVO $TaskType 任务类型
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
     * @param string $SelfDepend 是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate LeftCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate TopCoordinate坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskExtDsVO $TaskExt TaskExt信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Properties taskExt 导入导出json使用 private Map  properties;
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Notes 任务备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy 实例生成策略 T+1 表示当前周期生成上一周期数据时间任务实例 默认T+1 T+0 表示当前周期生成当前周期数据时间任务实例 T-1
     * 表示当前周期生成下一周期数据时间任务实例
     *
     * service不做默认策略处理, 下沉到数据初始化默认T+1, service涉及到多个更新task的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue 资源池队列名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Alarms 任务告警信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alarm alarmDTO 导入导出json使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptChange 任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit 任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerCommitTime 最新调度计划变更时间 仅生产态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NormalizedJobStartTime 仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecoverFreezeStartTime 启动暂停的任务时，选择不补录中间实例，通过此字段来标识从哪个时间开始生成实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServer 源数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServer 目标数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 父子节点树
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater 创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel 分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow 是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventListenerConfig 支持事件监听器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventPublisherConfig 支持事件触发器配置导入导出
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependencyConfigList 依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskStatus 虚拟任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecycleTips 回收站还原提示语
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecycleUser 回收站所属用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewOrUpdate 新增 或 修改
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskLinkInfo 任务上游依赖信息 用于发布管理导入导出
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ImportResult 导入结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportErrMsg 导入失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentType 任务内容 全部内容 配置内容 资源内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskAutoSubmit 是否导入提交运行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 上层产品 数据质量 / 数据开发 / ...
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnId 创建者帐号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 子账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser 最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 最后修改的人的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 资源组

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionDesc 版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkId 编排-删除添加的链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserFileId 脚本引用关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceId 来源数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServiceType 来源数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceId 去向数据源ID（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceType 去向数据源类型（离线同步）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamInList TaskInputParam输入参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamOutList TaskOutputParam输出参数
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
                $obj = new TaskDsDTONoRecurV2();
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
                $obj = new DependencyConfigDsDTONoRecurV3();
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
    }
}
