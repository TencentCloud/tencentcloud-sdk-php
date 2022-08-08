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
 * 任务信息数据
 *
 * @method string getTaskId() 获取任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延时实例生成时间(延时调度)，转换为分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延时实例生成时间(延时调度)，转换为分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取crontab表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置crontab表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置更新时间
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
 * @method integer getCycleType() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(integer $CycleType) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取延时执行时间（延时执行) 对应为 开始时间 状态为分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置延时执行时间（延时执行) 对应为 开始时间 状态为分钟
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
 * @method integer getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinDateTime() 获取最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinDateTime(string $MinDateTime) 设置最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxDateTime() 获取最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDateTime(string $MaxDateTime) 设置最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSelfDepend() 获取是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(integer $SelfDepend) 设置是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskExt() 获取扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExt(array $TaskExt) 设置扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotes() 获取任务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotes(string $Notes) 设置任务备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnQueue() 获取队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnQueue(string $YarnQueue) 设置队列
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
 * @method string getSourceServer() 获取源数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServer(string $SourceServer) 设置源数据源
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
 * @method array getParams() 获取任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最后修改的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最后修改的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取最后修改的人Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置最后修改的人Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取资源组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionDesc() 获取版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionDesc(string $VersionDesc) 设置版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealWorkflowId() 获取真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealWorkflowId(string $RealWorkflowId) 设置真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServer() 获取目标数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServer(string $TargetServer) 设置目标数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependencyConfigs() 获取依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyConfigs(array $DependencyConfigs) 设置依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskStatus() 获取虚拟任务状态1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskStatus(string $VirtualTaskStatus) 设置虚拟任务状态1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTaskId() 获取虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfoData extends AbstractModel
{
    /**
     * @var string 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string 任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var boolean 跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var integer 延时实例生成时间(延时调度)，转换为分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var string crontab表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

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
     * @var integer 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 步长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var integer 延时执行时间（延时执行) 对应为 开始时间 状态为分钟
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
     * @var integer 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string 集群
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
     * @var integer 是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var array 扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExt;

    /**
     * @var string 任务备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notes;

    /**
     * @var string 队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnQueue;

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
     * @var string 源数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServer;

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
     * @var array 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string 最后修改的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最后修改的人Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string 资源组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string 版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionDesc;

    /**
     * @var string 真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealWorkflowId;

    /**
     * @var string 目标数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServer;

    /**
     * @var array 依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyConfigs;

    /**
     * @var string 虚拟任务状态1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskStatus;

    /**
     * @var string 虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskId;

    /**
     * @param string $TaskId 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag 跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延时实例生成时间(延时调度)，转换为分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression crontab表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleType 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 步长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime 延时执行时间（延时执行) 对应为 开始时间 状态为分钟
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
     * @param integer $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 指定的运行节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinDateTime 最小数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxDateTime 最大数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SelfDepend 是否自身依赖 是1 否2 并行3
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskExt 扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Notes 任务备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnQueue 队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit 任务版本是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSchedulerCommitTime 最新调度计划变更时间 仅生产态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NormalizedJobStartTime 仅生产态存储于生产态序列化任务信息, 减少base CPU重复密集计算
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServer 源数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creater 创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel 分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow 是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser 最后修改的人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最后修改的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 最后修改的人Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 资源组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionDesc 版本提交说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealWorkflowId 真实工作流Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServer 目标数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependencyConfigs 依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskStatus 虚拟任务状态1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTaskId 虚拟任务id
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

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
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
            $this->TaskType = $param["TaskType"];
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

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("TaskExt",$param) and $param["TaskExt"] !== null) {
            $this->TaskExt = [];
            foreach ($param["TaskExt"] as $key => $value){
                $obj = new TaskExtInfo();
                $obj->deserialize($value);
                array_push($this->TaskExt, $obj);
            }
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
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

        if (array_key_exists("SourceServer",$param) and $param["SourceServer"] !== null) {
            $this->SourceServer = $param["SourceServer"];
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

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
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

        if (array_key_exists("RealWorkflowId",$param) and $param["RealWorkflowId"] !== null) {
            $this->RealWorkflowId = $param["RealWorkflowId"];
        }

        if (array_key_exists("TargetServer",$param) and $param["TargetServer"] !== null) {
            $this->TargetServer = $param["TargetServer"];
        }

        if (array_key_exists("DependencyConfigs",$param) and $param["DependencyConfigs"] !== null) {
            $this->DependencyConfigs = [];
            foreach ($param["DependencyConfigs"] as $key => $value){
                $obj = new DependencyConfig();
                $obj->deserialize($value);
                array_push($this->DependencyConfigs, $obj);
            }
        }

        if (array_key_exists("VirtualTaskStatus",$param) and $param["VirtualTaskStatus"] !== null) {
            $this->VirtualTaskStatus = $param["VirtualTaskStatus"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }
    }
}
