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
 * 定时任务执行日志列表项
 *
 * @method string getLogId() 获取<p>执行日志 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogId(string $LogId) 设置<p>执行日志 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskKey() 获取<p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskKey(string $TaskKey) 设置<p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发类型：MANUAL（手动）/ CRON（定时）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型：MANUAL（手动）/ CRON（定时）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>执行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>执行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationMs() 获取<p>执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationMs(integer $DurationMs) 设置<p>执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliveryStatus() 获取<p>投递状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliveryStatus(string $DeliveryStatus) 设置<p>投递状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>关联会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>关联会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionName() 获取<p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionName(string $SessionName) 设置<p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取<p>执行结果预览（前 50 字符），仅用于列表页展示；完整结果请调用 DescribeScheduledTaskLog</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置<p>执行结果预览（前 50 字符），仅用于列表页展示；完整结果请调用 DescribeScheduledTaskLog</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScheduledTaskLogSummary extends AbstractModel
{
    /**
     * @var string <p>执行日志 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogId;

    /**
     * @var string <p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskKey;

    /**
     * @var string <p>触发类型：MANUAL（手动）/ CRON（定时）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>执行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer <p>执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationMs;

    /**
     * @var string <p>投递状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliveryStatus;

    /**
     * @var string <p>关联会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string <p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionName;

    /**
     * @var string <p>执行结果预览（前 50 字符），仅用于列表页展示；完整结果请调用 DescribeScheduledTaskLog</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @param string $LogId <p>执行日志 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskKey <p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发类型：MANUAL（手动）/ CRON（定时）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>执行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationMs <p>执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliveryStatus <p>投递状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>关联会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionName <p>会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result <p>执行结果预览（前 50 字符），仅用于列表页展示；完整结果请调用 DescribeScheduledTaskLog</p>
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TaskKey",$param) and $param["TaskKey"] !== null) {
            $this->TaskKey = $param["TaskKey"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
