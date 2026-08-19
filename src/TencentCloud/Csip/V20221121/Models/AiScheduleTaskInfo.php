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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行任务记录
 *
 * @method string getTaskId() 获取<p>任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleId() 获取<p>所属AI 定时任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleId(string $ScheduleId) 设置<p>所属AI 定时任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerId() 获取<p>触发该任务的触发器 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置<p>触发该任务的触发器 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>Agent 调用的唯一会话 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>Agent 调用的唯一会话 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取<p>Agent 输出结果或错误详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置<p>Agent 输出结果或错误详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduledTime() 获取<p>计划触发时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledTime(integer $ScheduledTime) 设置<p>计划触发时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取<p>实际开始执行时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置<p>实际开始执行时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取<p>执行完成时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置<p>执行完成时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>定时任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>定时任务名称</p>
 * @method string getPrompts() 获取<p>定时任务提示词</p>
 * @method void setPrompts(string $Prompts) 设置<p>定时任务提示词</p>
 */
class AiScheduleTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>所属AI 定时任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleId;

    /**
     * @var string <p>触发该任务的触发器 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string <p>Agent 调用的唯一会话 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var integer <p>执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>Agent 输出结果或错误详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer <p>计划触发时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledTime;

    /**
     * @var integer <p>实际开始执行时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer <p>执行完成时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer <p>创建时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>定时任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>定时任务提示词</p>
     */
    public $Prompts;

    /**
     * @param string $TaskId <p>任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleId <p>所属AI 定时任务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerId <p>触发该任务的触发器 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>Agent 调用的唯一会话 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result <p>Agent 输出结果或错误详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduledTime <p>计划触发时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime <p>实际开始执行时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime <p>执行完成时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间，Unix 毫秒时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>定时任务名称</p>
     * @param string $Prompts <p>定时任务提示词</p>
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

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
        }
    }
}
