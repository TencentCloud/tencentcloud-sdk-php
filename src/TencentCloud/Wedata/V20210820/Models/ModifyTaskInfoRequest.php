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
 * ModifyTaskInfo请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method integer getDelayTime() 获取执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟
 * @method void setDelayTime(integer $DelayTime) 设置执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟
 * @method integer getStartupTime() 获取启动时间
 * @method void setStartupTime(integer $StartupTime) 设置启动时间
 * @method integer getSelfDepend() 获取自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
 * @method void setSelfDepend(integer $SelfDepend) 设置自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
 * @method string getStartTime() 获取生效开始时间，格式 yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置生效开始时间，格式 yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取生效结束时间，格式 yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置生效结束时间，格式 yyyy-MM-dd HH:mm:ss
 * @method string getTaskAction() 获取调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
 * @method void setTaskAction(string $TaskAction) 设置调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
 * @method integer getCycleType() 获取"周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
 * @method void setCycleType(integer $CycleType) 设置"周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
 * @method integer getCycleStep() 获取步长，间隔时间，最小1
 * @method void setCycleStep(integer $CycleStep) 设置步长，间隔时间，最小1
 * @method string getCrontabExpression() 获取cron表达式  周期类型为crontab调度才需要
 * @method void setCrontabExpression(string $CrontabExpression) 设置cron表达式  周期类型为crontab调度才需要
 * @method string getExecutionStartTime() 获取执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method string getExecutionEndTime() 获取执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method string getTaskName() 获取新的任务名
 * @method void setTaskName(string $TaskName) 设置新的任务名
 * @method integer getRetryWait() 获取失败重试间隔,单位分钟，创建任务的时候已经给了默认值
 * @method void setRetryWait(integer $RetryWait) 设置失败重试间隔,单位分钟，创建任务的时候已经给了默认值
 * @method integer getTryLimit() 获取失败重试次数，创建任务的时候已经给了默认值
 * @method void setTryLimit(integer $TryLimit) 设置失败重试次数，创建任务的时候已经给了默认值
 * @method integer getRetriable() 获取是否可重试，1代表可以重试
 * @method void setRetriable(integer $Retriable) 设置是否可重试，1代表可以重试
 * @method integer getRunPriority() 获取运行优先级，4高 5中 6低
 * @method void setRunPriority(integer $RunPriority) 设置运行优先级，4高 5中 6低
 * @method array getTaskExt() 获取任务的扩展配置
 * @method void setTaskExt(array $TaskExt) 设置任务的扩展配置
 * @method string getResourceGroup() 获取执行资源组id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器
 * @method void setResourceGroup(string $ResourceGroup) 设置执行资源组id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器
 * @method string getYarnQueue() 获取资源池队列名称
 * @method void setYarnQueue(string $YarnQueue) 设置资源池队列名称
 * @method string getBrokerIp() 获取资源组下具体执行机，any 表示可以跑在任意一台。
 * @method void setBrokerIp(string $BrokerIp) 设置资源组下具体执行机，any 表示可以跑在任意一台。
 * @method string getInCharge() 获取责任人
 * @method void setInCharge(string $InCharge) 设置责任人
 * @method string getNotes() 获取任务备注
 * @method void setNotes(string $Notes) 设置任务备注
 * @method array getTaskParamInfos() 获取任务参数
 * @method void setTaskParamInfos(array $TaskParamInfos) 设置任务参数
 * @method string getSourceServer() 获取源数据源
 * @method void setSourceServer(string $SourceServer) 设置源数据源
 * @method string getTargetServer() 获取目标数据源
 * @method void setTargetServer(string $TargetServer) 设置目标数据源
 * @method string getDependencyWorkflow() 获取是否支持工作流依赖 yes / no 默认 no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置是否支持工作流依赖 yes / no 默认 no
 * @method array getDependencyConfigDTOs() 获取依赖配置
 * @method void setDependencyConfigDTOs(array $DependencyConfigDTOs) 设置依赖配置
 */
class ModifyTaskInfoRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var integer 执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟
     */
    public $DelayTime;

    /**
     * @var integer 启动时间
     */
    public $StartupTime;

    /**
     * @var integer 自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
     */
    public $SelfDepend;

    /**
     * @var string 生效开始时间，格式 yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 生效结束时间，格式 yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
     */
    public $TaskAction;

    /**
     * @var integer "周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
     */
    public $CycleType;

    /**
     * @var integer 步长，间隔时间，最小1
     */
    public $CycleStep;

    /**
     * @var string cron表达式  周期类型为crontab调度才需要
     */
    public $CrontabExpression;

    /**
     * @var string 执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     */
    public $ExecutionEndTime;

    /**
     * @var string 新的任务名
     */
    public $TaskName;

    /**
     * @var integer 失败重试间隔,单位分钟，创建任务的时候已经给了默认值
     */
    public $RetryWait;

    /**
     * @var integer 失败重试次数，创建任务的时候已经给了默认值
     */
    public $TryLimit;

    /**
     * @var integer 是否可重试，1代表可以重试
     */
    public $Retriable;

    /**
     * @var integer 运行优先级，4高 5中 6低
     */
    public $RunPriority;

    /**
     * @var array 任务的扩展配置
     */
    public $TaskExt;

    /**
     * @var string 执行资源组id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器
     */
    public $ResourceGroup;

    /**
     * @var string 资源池队列名称
     */
    public $YarnQueue;

    /**
     * @var string 资源组下具体执行机，any 表示可以跑在任意一台。
     */
    public $BrokerIp;

    /**
     * @var string 责任人
     */
    public $InCharge;

    /**
     * @var string 任务备注
     */
    public $Notes;

    /**
     * @var array 任务参数
     */
    public $TaskParamInfos;

    /**
     * @var string 源数据源
     */
    public $SourceServer;

    /**
     * @var string 目标数据源
     */
    public $TargetServer;

    /**
     * @var string 是否支持工作流依赖 yes / no 默认 no
     */
    public $DependencyWorkflow;

    /**
     * @var array 依赖配置
     */
    public $DependencyConfigDTOs;

    /**
     * @param string $ProjectId 项目Id
     * @param string $TaskId 任务ID
     * @param integer $DelayTime 执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟
     * @param integer $StartupTime 启动时间
     * @param integer $SelfDepend 自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
     * @param string $StartTime 生效开始时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 生效结束时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $TaskAction 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
     * @param integer $CycleType "周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
     * @param integer $CycleStep 步长，间隔时间，最小1
     * @param string $CrontabExpression cron表达式  周期类型为crontab调度才需要
     * @param string $ExecutionStartTime 执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     * @param string $ExecutionEndTime 执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     * @param string $TaskName 新的任务名
     * @param integer $RetryWait 失败重试间隔,单位分钟，创建任务的时候已经给了默认值
     * @param integer $TryLimit 失败重试次数，创建任务的时候已经给了默认值
     * @param integer $Retriable 是否可重试，1代表可以重试
     * @param integer $RunPriority 运行优先级，4高 5中 6低
     * @param array $TaskExt 任务的扩展配置
     * @param string $ResourceGroup 执行资源组id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器
     * @param string $YarnQueue 资源池队列名称
     * @param string $BrokerIp 资源组下具体执行机，any 表示可以跑在任意一台。
     * @param string $InCharge 责任人
     * @param string $Notes 任务备注
     * @param array $TaskParamInfos 任务参数
     * @param string $SourceServer 源数据源
     * @param string $TargetServer 目标数据源
     * @param string $DependencyWorkflow 是否支持工作流依赖 yes / no 默认 no
     * @param array $DependencyConfigDTOs 依赖配置
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Retriable",$param) and $param["Retriable"] !== null) {
            $this->Retriable = $param["Retriable"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("TaskExt",$param) and $param["TaskExt"] !== null) {
            $this->TaskExt = [];
            foreach ($param["TaskExt"] as $key => $value){
                $obj = new TaskExtInfo();
                $obj->deserialize($value);
                array_push($this->TaskExt, $obj);
            }
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("TaskParamInfos",$param) and $param["TaskParamInfos"] !== null) {
            $this->TaskParamInfos = [];
            foreach ($param["TaskParamInfos"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->TaskParamInfos, $obj);
            }
        }

        if (array_key_exists("SourceServer",$param) and $param["SourceServer"] !== null) {
            $this->SourceServer = $param["SourceServer"];
        }

        if (array_key_exists("TargetServer",$param) and $param["TargetServer"] !== null) {
            $this->TargetServer = $param["TargetServer"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("DependencyConfigDTOs",$param) and $param["DependencyConfigDTOs"] !== null) {
            $this->DependencyConfigDTOs = [];
            foreach ($param["DependencyConfigDTOs"] as $key => $value){
                $obj = new DependencyConfig();
                $obj->deserialize($value);
                array_push($this->DependencyConfigDTOs, $obj);
            }
        }
    }
}
