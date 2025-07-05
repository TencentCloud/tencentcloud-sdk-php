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
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextCurDate() 获取下一个数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextCurDate(string $NextCurDate) 设置下一个数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取运行优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置运行优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTries() 获取当前运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(integer $Tries) 设置当前运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRunNum() 获取重跑总次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRunNum(integer $TotalRunNum) 设置重跑总次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDoFlag() 获取是否补录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoFlag(integer $DoFlag) 设置是否补录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedoFlag() 获取是否是重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedoFlag(integer $RedoFlag) 设置是否是重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntimeBroker() 获取运行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeBroker(string $RuntimeBroker) 设置运行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDesc() 获取失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeOpsDto getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(TaskTypeOpsDto $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependenceFulfillTime() 获取依赖判断完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependenceFulfillTime(string $DependenceFulfillTime) 设置依赖判断完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstDependenceFulfillTime() 获取首次依赖判断通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstDependenceFulfillTime(string $FirstDependenceFulfillTime) 设置首次依赖判断通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstStartTime() 获取首次启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstStartTime(string $FirstStartTime) 设置首次启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCostTime() 获取耗费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(string $CostTime) 设置耗费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostMillisecond() 获取耗费时间(ms)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostMillisecond(integer $CostMillisecond) 设置耗费时间(ms)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxCostTime() 获取最大运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxCostTime(integer $MaxCostTime) 设置最大运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinCostTime() 获取最小运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinCostTime(integer $MinCostTime) 设置最小运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAvgCostTime() 获取平均运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgCostTime(float $AvgCostTime) 设置平均运行耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLog() 获取最近日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLog(string $LastLog) 设置最近日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDateTime() 获取调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDateTime(string $SchedulerDateTime) 设置调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSchedulerDateTime() 获取上次调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerDateTime(string $LastSchedulerDateTime) 设置上次调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取最后更新事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置最后更新事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取分支，依赖关系 and、or
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置分支，依赖关系 and、or
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionSpace() 获取执行空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionSpace(string $ExecutionSpace) 设置执行空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIgnoreEvent() 获取忽略事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreEvent(boolean $IgnoreEvent) 设置忽略事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取虚拟任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置虚拟任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSonList() 获取递归实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSonList(string $SonList) 设置递归实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品业务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品业务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceInstanceId() 获取资源组指定执行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceInstanceId(string $ResourceInstanceId) 设置资源组指定执行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取资源队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置资源队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstRunTime() 获取首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstRunTime(string $FirstRunTime) 设置首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceKey() 获取实例标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置实例标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedInstanceList() 获取关联实例信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedInstanceList(array $RelatedInstanceList) 设置关联实例信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRelatedInstanceSize() 获取关联实例信息数量，不和RelatedInstanceList强关联。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedInstanceSize(integer $RelatedInstanceSize) 设置关联实例信息数量，不和RelatedInstanceList强关联。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取ownerId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置ownerId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceLifeCycleOpsDto getInstanceLifeCycleOpsDto() 获取实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLifeCycleOpsDto(InstanceLifeCycleOpsDto $InstanceLifeCycleOpsDto) 设置实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryAttempts() 获取自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryAttempts(integer $RetryAttempts) 设置自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeletedFatherList() 获取紧急去除的依赖父实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletedFatherList(array $DeletedFatherList) 设置紧急去除的依赖父实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCirculateInstanceList() 获取循环依赖关联的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCirculateInstanceList(array $CirculateInstanceList) 设置循环依赖关联的实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcurrentStrategy() 获取并发策略, 0: 等待并发, 1: kill自身
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcurrentStrategy(integer $ConcurrentStrategy) 设置并发策略, 0: 等待并发, 1: kill自身
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleRunType() 获取调度运行方式, 0: 周期调度, 1: 空跑调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleRunType(integer $ScheduleRunType) 设置调度运行方式, 0: 周期调度, 1: 空跑调度
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceOpsDto extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string 下一个数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextCurDate;

    /**
     * @var integer 运行优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunPriority;

    /**
     * @var integer 尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TryLimit;

    /**
     * @var integer 当前运行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tries;

    /**
     * @var integer 重跑总次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRunNum;

    /**
     * @var integer 是否补录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoFlag;

    /**
     * @var integer 是否是重跑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedoFlag;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 运行节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeBroker;

    /**
     * @var string 失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @var TaskTypeOpsDto 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 依赖判断完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependenceFulfillTime;

    /**
     * @var string 首次依赖判断通过时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstDependenceFulfillTime;

    /**
     * @var string 首次启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstStartTime;

    /**
     * @var string 开始启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 耗费时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @var integer 耗费时间(ms)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostMillisecond;

    /**
     * @var integer 最大运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxCostTime;

    /**
     * @var integer 最小运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinCostTime;

    /**
     * @var float 平均运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgCostTime;

    /**
     * @var string 最近日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLog;

    /**
     * @var string 调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDateTime;

    /**
     * @var string 上次调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerDateTime;

    /**
     * @var string 最后更新事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 分支，依赖关系 and、or
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string 执行空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionSpace;

    /**
     * @var boolean 忽略事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreEvent;

    /**
     * @var boolean 虚拟任务实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 递归实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SonList;

    /**
     * @var string 产品业务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string 资源组指定执行节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceInstanceId;

    /**
     * @var string 资源队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

    /**
     * @var string 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string 最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string 首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstRunTime;

    /**
     * @var string 项目ID
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
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 实例标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

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
     * @var array 关联实例信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedInstanceList;

    /**
     * @var integer 关联实例信息数量，不和RelatedInstanceList强关联。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedInstanceSize;

    /**
     * @var string ownerId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var string 用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var InstanceLifeCycleOpsDto 实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLifeCycleOpsDto;

    /**
     * @var integer 自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryAttempts;

    /**
     * @var array 紧急去除的依赖父实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletedFatherList;

    /**
     * @var array 循环依赖关联的实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CirculateInstanceList;

    /**
     * @var integer 并发策略, 0: 等待并发, 1: kill自身
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcurrentStrategy;

    /**
     * @var integer 调度运行方式, 0: 周期调度, 1: 空跑调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleRunType;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextCurDate 下一个数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority 运行优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit 尝试运行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tries 当前运行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRunNum 重跑总次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DoFlag 是否补录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedoFlag 是否是重跑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuntimeBroker 运行节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDesc 失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeOpsDto $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependenceFulfillTime 依赖判断完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstDependenceFulfillTime 首次依赖判断通过时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstStartTime 首次启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CostTime 耗费时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostMillisecond 耗费时间(ms)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxCostTime 最大运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinCostTime 最小运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AvgCostTime 平均运行耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLog 最近日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDateTime 调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerDateTime 上次调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate 最后更新事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel 分支，依赖关系 and、or
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionSpace 执行空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IgnoreEvent 忽略事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag 虚拟任务实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SonList 递归实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品业务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceInstanceId 资源组指定执行节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue 资源队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime 最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstRunTime 首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceKey 实例标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedInstanceList 关联实例信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RelatedInstanceSize 关联实例信息数量，不和RelatedInstanceList强关联。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId ownerId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceLifeCycleOpsDto $InstanceLifeCycleOpsDto 实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryAttempts 自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeletedFatherList 紧急去除的依赖父实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CirculateInstanceList 循环依赖关联的实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConcurrentStrategy 并发策略, 0: 等待并发, 1: kill自身
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleRunType 调度运行方式, 0: 周期调度, 1: 空跑调度
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
    }
}
