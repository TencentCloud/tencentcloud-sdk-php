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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScheduledTaskLog返回参数结构体
 *
 * @method string getLogId() 获取<p>执行日志 ID</p>
 * @method void setLogId(string $LogId) 设置<p>执行日志 ID</p>
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method string getTaskKey() 获取<p>任务唯一标识</p>
 * @method void setTaskKey(string $TaskKey) 设置<p>任务唯一标识</p>
 * @method string getSessionId() 获取<p>关联会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>关联会话 ID</p>
 * @method string getTriggerType() 获取<p>触发类型：MANUAL（手动）/ CRON（定时）</p>
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型：MANUAL（手动）/ CRON（定时）</p>
 * @method string getStatus() 获取<p>执行状态</p>
 * @method void setStatus(string $Status) 设置<p>执行状态</p>
 * @method string getPrompt() 获取<p>本次执行 Prompt</p>
 * @method void setPrompt(string $Prompt) 设置<p>本次执行 Prompt</p>
 * @method string getResult() 获取<p>执行输出内容（完整结果；列表接口 DescribeScheduledTaskLogList 仅返回前 50 字符预览）</p>
 * @method void setResult(string $Result) 设置<p>执行输出内容（完整结果；列表接口 DescribeScheduledTaskLogList 仅返回前 50 字符预览）</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method integer getDurationMs() 获取<p>执行时长（毫秒）</p>
 * @method void setDurationMs(integer $DurationMs) 设置<p>执行时长（毫秒）</p>
 * @method string getDeliveryStatus() 获取<p>投递状态</p>
 * @method void setDeliveryStatus(string $DeliveryStatus) 设置<p>投递状态</p>
 * @method string getDeliveryError() 获取<p>投递错误信息</p>
 * @method void setDeliveryError(string $DeliveryError) 设置<p>投递错误信息</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getErrorMessage() 获取<p>失败原因</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>失败原因</p>
 * @method string getSessionName() 获取<p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
 * @method void setSessionName(string $SessionName) 设置<p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScheduledTaskLogResponse extends AbstractModel
{
    /**
     * @var string <p>执行日志 ID</p>
     */
    public $LogId;

    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务唯一标识</p>
     */
    public $TaskKey;

    /**
     * @var string <p>关联会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>触发类型：MANUAL（手动）/ CRON（定时）</p>
     */
    public $TriggerType;

    /**
     * @var string <p>执行状态</p>
     */
    public $Status;

    /**
     * @var string <p>本次执行 Prompt</p>
     */
    public $Prompt;

    /**
     * @var string <p>执行输出内容（完整结果；列表接口 DescribeScheduledTaskLogList 仅返回前 50 字符预览）</p>
     */
    public $Result;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>执行时长（毫秒）</p>
     */
    public $DurationMs;

    /**
     * @var string <p>投递状态</p>
     */
    public $DeliveryStatus;

    /**
     * @var string <p>投递错误信息</p>
     */
    public $DeliveryError;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>失败原因</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
     */
    public $SessionName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LogId <p>执行日志 ID</p>
     * @param string $TaskId <p>任务 ID</p>
     * @param string $TaskKey <p>任务唯一标识</p>
     * @param string $SessionId <p>关联会话 ID</p>
     * @param string $TriggerType <p>触发类型：MANUAL（手动）/ CRON（定时）</p>
     * @param string $Status <p>执行状态</p>
     * @param string $Prompt <p>本次执行 Prompt</p>
     * @param string $Result <p>执行输出内容（完整结果；列表接口 DescribeScheduledTaskLogList 仅返回前 50 字符预览）</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param integer $DurationMs <p>执行时长（毫秒）</p>
     * @param string $DeliveryStatus <p>投递状态</p>
     * @param string $DeliveryError <p>投递错误信息</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $ErrorMessage <p>失败原因</p>
     * @param string $SessionName <p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskKey",$param) and $param["TaskKey"] !== null) {
            $this->TaskKey = $param["TaskKey"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
        }

        if (array_key_exists("DeliveryError",$param) and $param["DeliveryError"] !== null) {
            $this->DeliveryError = $param["DeliveryError"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
