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
 * ModifyTaskInfoDs请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目Id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目Id</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method integer getDelayTime() 获取<p>执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟</p>
 * @method void setDelayTime(integer $DelayTime) 设置<p>执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟</p>
 * @method integer getStartupTime() 获取<p>启动时间：该字段已废弃，无需填写</p>
 * @method void setStartupTime(integer $StartupTime) 设置<p>启动时间：该字段已废弃，无需填写</p>
 * @method integer getSelfDepend() 获取<p>自依赖类型  1:有序串行 一次一个 排队  2: 无序串行 一次一个 不排队 3:并行 一次多个；暂不支持其他值</p>
 * @method void setSelfDepend(integer $SelfDepend) 设置<p>自依赖类型  1:有序串行 一次一个 排队  2: 无序串行 一次一个 不排队 3:并行 一次多个；暂不支持其他值</p>
 * @method string getStartTime() 获取<p>生效开始时间，格式 yyyy-MM-dd HH:mm:ss</p>
 * @method void setStartTime(string $StartTime) 设置<p>生效开始时间，格式 yyyy-MM-dd HH:mm:ss</p>
 * @method string getEndTime() 获取<p>生效结束时间，格式 yyyy-MM-dd HH:mm:ss</p>
 * @method void setEndTime(string $EndTime) 设置<p>生效结束时间，格式 yyyy-MM-dd HH:mm:ss</p>
 * @method string getTaskAction() 获取<p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。设置该值时，请把CycleStep字段设置为1（如果原始值不为1）。</p>
 * @method void setTaskAction(string $TaskAction) 设置<p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。设置该值时，请把CycleStep字段设置为1（如果原始值不为1）。</p>
 * @method integer getCycleType() 获取<p>周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离</p>
 * @method void setCycleType(integer $CycleType) 设置<p>周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离</p>
 * @method integer getCycleStep() 获取<p>小时和分钟任务才有；分钟任务：5、10、15、20、30，表示每隔5【或其他值】分钟执行一次；小时任务：1、2、3、4、5、6、7、8、9、10、11、12，表示每隔1【或其他值】小时执行一次。该值大于1时，请把TaskAction字段设置为空字符串。</p>
 * @method void setCycleStep(integer $CycleStep) 设置<p>小时和分钟任务才有；分钟任务：5、10、15、20、30，表示每隔5【或其他值】分钟执行一次；小时任务：1、2、3、4、5、6、7、8、9、10、11、12，表示每隔1【或其他值】小时执行一次。该值大于1时，请把TaskAction字段设置为空字符串。</p>
 * @method string getCrontabExpression() 获取<p>cron表达式  周期类型为crontab调度才需要</p>
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>cron表达式  周期类型为crontab调度才需要</p>
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
 * @method string getTaskName() 获取<p>任务名，该字段废弃，请勿使用该字段重命名任务</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名，该字段废弃，请勿使用该字段重命名任务</p>
 * @method integer getRetryWait() 获取<p>失败重试间隔,单位分钟，创建任务的时候已经给了默认值</p>
 * @method void setRetryWait(integer $RetryWait) 设置<p>失败重试间隔,单位分钟，创建任务的时候已经给了默认值</p>
 * @method integer getTryLimit() 获取<p>失败重试次数，创建任务的时候已经给了默认值</p>
 * @method void setTryLimit(integer $TryLimit) 设置<p>失败重试次数，创建任务的时候已经给了默认值</p>
 * @method integer getRetriable() 获取<p>是否可重试，0代码不可重试，1代表可以重试；暂不支持其他值</p>
 * @method void setRetriable(integer $Retriable) 设置<p>是否可重试，0代码不可重试，1代表可以重试；暂不支持其他值</p>
 * @method integer getRunPriority() 获取<p>运行优先级，4高 5中 6低；暂不支持其他值</p>
 * @method void setRunPriority(integer $RunPriority) 设置<p>运行优先级，4高 5中 6低；暂不支持其他值</p>
 * @method array getTaskExt() 获取<p>任务的扩展配置</p>
 * @method void setTaskExt(array $TaskExt) 设置<p>任务的扩展配置</p>
 * @method string getResourceGroup() 获取<p>执行资源组Id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器</p>
 * @method void setResourceGroup(string $ResourceGroup) 设置<p>执行资源组Id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器</p>
 * @method string getYarnQueue() 获取<p>资源池队列名称</p>
 * @method void setYarnQueue(string $YarnQueue) 设置<p>资源池队列名称</p>
 * @method string getBrokerIp() 获取<p>资源组下具体执行机，any 表示可以跑在任意一台。</p>
 * @method void setBrokerIp(string $BrokerIp) 设置<p>资源组下具体执行机，any 表示可以跑在任意一台。</p>
 * @method string getInCharge() 获取<p>责任人，多个责任人请用分号隔开</p>
 * @method void setInCharge(string $InCharge) 设置<p>责任人，多个责任人请用分号隔开</p>
 * @method string getNotes() 获取<p>任务备注</p>
 * @method void setNotes(string $Notes) 设置<p>任务备注</p>
 * @method array getTaskParamInfos() 获取<p>任务参数</p>
 * @method void setTaskParamInfos(array $TaskParamInfos) 设置<p>任务参数</p>
 * @method string getSourceServer() 获取<p>源数据源Id</p>
 * @method void setSourceServer(string $SourceServer) 设置<p>源数据源Id</p>
 * @method string getTargetServer() 获取<p>目标数据源Id</p>
 * @method void setTargetServer(string $TargetServer) 设置<p>目标数据源Id</p>
 * @method string getDependencyWorkflow() 获取<p>是否支持工作流依赖 yes / no 默认 no</p>
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>是否支持工作流依赖 yes / no 默认 no</p>
 * @method array getDependencyConfigDTOs() 获取<p>依赖配置,仅可修改上游任务实例配置方法</p>
 * @method void setDependencyConfigDTOs(array $DependencyConfigDTOs) 设置<p>依赖配置,仅可修改上游任务实例配置方法</p>
 * @method integer getExecutionTTL() 获取<p>运行耗时超时时间分钟数</p>
 * @method void setExecutionTTL(integer $ExecutionTTL) 设置<p>运行耗时超时时间分钟数</p>
 * @method boolean getScriptChange() 获取<p>脚本是否改变</p>
 * @method void setScriptChange(boolean $ScriptChange) 设置<p>脚本是否改变</p>
 * @method string getScheduleTimeZone() 获取<p>任务时区，仅支持整数时区配置</p>
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>任务时区，仅支持整数时区配置</p>
 * @method integer getScheduleRunType() 获取<p>0 正常调度 1 空跑调度；暂不支持其他值</p>
 * @method void setScheduleRunType(integer $ScheduleRunType) 设置<p>0 正常调度 1 空跑调度；暂不支持其他值</p>
 * @method integer getConcurrentStrategy() 获取<p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill；暂不支持其他值</p>
 * @method void setConcurrentStrategy(integer $ConcurrentStrategy) 设置<p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill；暂不支持其他值</p>
 * @method RegisterDsEventPublisherReq getRegisterDsEventPublisherRequest() 获取<p>shell任务发布事件</p>
 * @method void setRegisterDsEventPublisherRequest(RegisterDsEventPublisherReq $RegisterDsEventPublisherRequest) 设置<p>shell任务发布事件</p>
 * @method string getContent() 获取<p>base64编码后脚本内容</p>
 * @method void setContent(string $Content) 设置<p>base64编码后脚本内容</p>
 * @method integer getMinuteOffset() 获取<p>分钟任务相位偏移</p>
 * @method void setMinuteOffset(integer $MinuteOffset) 设置<p>分钟任务相位偏移</p>
 */
class ModifyTaskInfoDsRequest extends AbstractModel
{
    /**
     * @var string <p>项目Id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟</p>
     */
    public $DelayTime;

    /**
     * @var integer <p>启动时间：该字段已废弃，无需填写</p>
     */
    public $StartupTime;

    /**
     * @var integer <p>自依赖类型  1:有序串行 一次一个 排队  2: 无序串行 一次一个 不排队 3:并行 一次多个；暂不支持其他值</p>
     */
    public $SelfDepend;

    /**
     * @var string <p>生效开始时间，格式 yyyy-MM-dd HH:mm:ss</p>
     */
    public $StartTime;

    /**
     * @var string <p>生效结束时间，格式 yyyy-MM-dd HH:mm:ss</p>
     */
    public $EndTime;

    /**
     * @var string <p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。设置该值时，请把CycleStep字段设置为1（如果原始值不为1）。</p>
     */
    public $TaskAction;

    /**
     * @var integer <p>周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离</p>
     */
    public $CycleType;

    /**
     * @var integer <p>小时和分钟任务才有；分钟任务：5、10、15、20、30，表示每隔5【或其他值】分钟执行一次；小时任务：1、2、3、4、5、6、7、8、9、10、11、12，表示每隔1【或其他值】小时执行一次。该值大于1时，请把TaskAction字段设置为空字符串。</p>
     */
    public $CycleStep;

    /**
     * @var string <p>cron表达式  周期类型为crontab调度才需要</p>
     */
    public $CrontabExpression;

    /**
     * @var string <p>执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>任务名，该字段废弃，请勿使用该字段重命名任务</p>
     */
    public $TaskName;

    /**
     * @var integer <p>失败重试间隔,单位分钟，创建任务的时候已经给了默认值</p>
     */
    public $RetryWait;

    /**
     * @var integer <p>失败重试次数，创建任务的时候已经给了默认值</p>
     */
    public $TryLimit;

    /**
     * @var integer <p>是否可重试，0代码不可重试，1代表可以重试；暂不支持其他值</p>
     */
    public $Retriable;

    /**
     * @var integer <p>运行优先级，4高 5中 6低；暂不支持其他值</p>
     */
    public $RunPriority;

    /**
     * @var array <p>任务的扩展配置</p>
     */
    public $TaskExt;

    /**
     * @var string <p>执行资源组Id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器</p>
     */
    public $ResourceGroup;

    /**
     * @var string <p>资源池队列名称</p>
     */
    public $YarnQueue;

    /**
     * @var string <p>资源组下具体执行机，any 表示可以跑在任意一台。</p>
     */
    public $BrokerIp;

    /**
     * @var string <p>责任人，多个责任人请用分号隔开</p>
     */
    public $InCharge;

    /**
     * @var string <p>任务备注</p>
     */
    public $Notes;

    /**
     * @var array <p>任务参数</p>
     */
    public $TaskParamInfos;

    /**
     * @var string <p>源数据源Id</p>
     */
    public $SourceServer;

    /**
     * @var string <p>目标数据源Id</p>
     */
    public $TargetServer;

    /**
     * @var string <p>是否支持工作流依赖 yes / no 默认 no</p>
     */
    public $DependencyWorkflow;

    /**
     * @var array <p>依赖配置,仅可修改上游任务实例配置方法</p>
     */
    public $DependencyConfigDTOs;

    /**
     * @var integer <p>运行耗时超时时间分钟数</p>
     */
    public $ExecutionTTL;

    /**
     * @var boolean <p>脚本是否改变</p>
     */
    public $ScriptChange;

    /**
     * @var string <p>任务时区，仅支持整数时区配置</p>
     */
    public $ScheduleTimeZone;

    /**
     * @var integer <p>0 正常调度 1 空跑调度；暂不支持其他值</p>
     */
    public $ScheduleRunType;

    /**
     * @var integer <p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill；暂不支持其他值</p>
     */
    public $ConcurrentStrategy;

    /**
     * @var RegisterDsEventPublisherReq <p>shell任务发布事件</p>
     */
    public $RegisterDsEventPublisherRequest;

    /**
     * @var string <p>base64编码后脚本内容</p>
     */
    public $Content;

    /**
     * @var integer <p>分钟任务相位偏移</p>
     */
    public $MinuteOffset;

    /**
     * @param string $ProjectId <p>项目Id</p>
     * @param string $TaskId <p>任务ID</p>
     * @param integer $DelayTime <p>执行时间，单位分钟，天/周/月/年调度才有。比如天调度，每天的02:00点执行一次，delayTime就是120分钟</p>
     * @param integer $StartupTime <p>启动时间：该字段已废弃，无需填写</p>
     * @param integer $SelfDepend <p>自依赖类型  1:有序串行 一次一个 排队  2: 无序串行 一次一个 不排队 3:并行 一次多个；暂不支持其他值</p>
     * @param string $StartTime <p>生效开始时间，格式 yyyy-MM-dd HH:mm:ss</p>
     * @param string $EndTime <p>生效结束时间，格式 yyyy-MM-dd HH:mm:ss</p>
     * @param string $TaskAction <p>调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。设置该值时，请把CycleStep字段设置为1（如果原始值不为1）。</p>
     * @param integer $CycleType <p>周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离</p>
     * @param integer $CycleStep <p>小时和分钟任务才有；分钟任务：5、10、15、20、30，表示每隔5【或其他值】分钟执行一次；小时任务：1、2、3、4、5、6、7、8、9、10、11、12，表示每隔1【或其他值】小时执行一次。该值大于1时，请把TaskAction字段设置为空字符串。</p>
     * @param string $CrontabExpression <p>cron表达式  周期类型为crontab调度才需要</p>
     * @param string $ExecutionStartTime <p>执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
     * @param string $ExecutionEndTime <p>执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效</p>
     * @param string $TaskName <p>任务名，该字段废弃，请勿使用该字段重命名任务</p>
     * @param integer $RetryWait <p>失败重试间隔,单位分钟，创建任务的时候已经给了默认值</p>
     * @param integer $TryLimit <p>失败重试次数，创建任务的时候已经给了默认值</p>
     * @param integer $Retriable <p>是否可重试，0代码不可重试，1代表可以重试；暂不支持其他值</p>
     * @param integer $RunPriority <p>运行优先级，4高 5中 6低；暂不支持其他值</p>
     * @param array $TaskExt <p>任务的扩展配置</p>
     * @param string $ResourceGroup <p>执行资源组Id，需要去资源管理服务上创建调度资源组，并且绑定cvm机器</p>
     * @param string $YarnQueue <p>资源池队列名称</p>
     * @param string $BrokerIp <p>资源组下具体执行机，any 表示可以跑在任意一台。</p>
     * @param string $InCharge <p>责任人，多个责任人请用分号隔开</p>
     * @param string $Notes <p>任务备注</p>
     * @param array $TaskParamInfos <p>任务参数</p>
     * @param string $SourceServer <p>源数据源Id</p>
     * @param string $TargetServer <p>目标数据源Id</p>
     * @param string $DependencyWorkflow <p>是否支持工作流依赖 yes / no 默认 no</p>
     * @param array $DependencyConfigDTOs <p>依赖配置,仅可修改上游任务实例配置方法</p>
     * @param integer $ExecutionTTL <p>运行耗时超时时间分钟数</p>
     * @param boolean $ScriptChange <p>脚本是否改变</p>
     * @param string $ScheduleTimeZone <p>任务时区，仅支持整数时区配置</p>
     * @param integer $ScheduleRunType <p>0 正常调度 1 空跑调度；暂不支持其他值</p>
     * @param integer $ConcurrentStrategy <p>0 并发度达到上限时，本次排队等待 1 并发度达到上限时，本次不执行，直接kill；暂不支持其他值</p>
     * @param RegisterDsEventPublisherReq $RegisterDsEventPublisherRequest <p>shell任务发布事件</p>
     * @param string $Content <p>base64编码后脚本内容</p>
     * @param integer $MinuteOffset <p>分钟任务相位偏移</p>
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

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }

        if (array_key_exists("ScriptChange",$param) and $param["ScriptChange"] !== null) {
            $this->ScriptChange = $param["ScriptChange"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
        }

        if (array_key_exists("ConcurrentStrategy",$param) and $param["ConcurrentStrategy"] !== null) {
            $this->ConcurrentStrategy = $param["ConcurrentStrategy"];
        }

        if (array_key_exists("RegisterDsEventPublisherRequest",$param) and $param["RegisterDsEventPublisherRequest"] !== null) {
            $this->RegisterDsEventPublisherRequest = new RegisterDsEventPublisherReq();
            $this->RegisterDsEventPublisherRequest->deserialize($param["RegisterDsEventPublisherRequest"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("MinuteOffset",$param) and $param["MinuteOffset"] !== null) {
            $this->MinuteOffset = $param["MinuteOffset"];
        }
    }
}
