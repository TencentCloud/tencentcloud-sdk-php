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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerRunLog
 *
 * @method string getConversationId() 获取<p>会话id</p>
 * @method void setConversationId(string $ConversationId) 设置<p>会话id</p>
 * @method string getDurationMs() 获取<p>执行时间</p>
 * @method void setDurationMs(string $DurationMs) 设置<p>执行时间</p>
 * @method string getEndTime() 获取<p>结束时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method integer getFireType() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td><td>3</td><td>手动立即执行</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td><td>4</td><td>测试执行</td></tr></tbody></table>
 * @method void setFireType(integer $FireType) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td><td>3</td><td>手动立即执行</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td><td>4</td><td>测试执行</td></tr></tbody></table>
 * @method string getInstanceId() 获取<p>触发实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>触发实例id</p>
 * @method integer getPushStatus() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_NONE</td><td>1</td><td>未配置推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_WAITING</td><td>2</td><td>等待推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_SUCCESS</td><td>3</td><td>推送成功</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_FAILED</td><td>4</td><td>推送失败</td></tr></tbody></table>
 * @method void setPushStatus(integer $PushStatus) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_NONE</td><td>1</td><td>未配置推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_WAITING</td><td>2</td><td>等待推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_SUCCESS</td><td>3</td><td>推送成功</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_FAILED</td><td>4</td><td>推送失败</td></tr></tbody></table>
 * @method string getResultCode() 获取<p>结果码</p>
 * @method void setResultCode(string $ResultCode) 设置<p>结果码</p>
 * @method string getResultSummary() 获取<p>结果概要</p>
 * @method void setResultSummary(string $ResultSummary) 设置<p>结果概要</p>
 * @method string getRunId() 获取<p>单次对话id</p>
 * @method void setRunId(string $RunId) 设置<p>单次对话id</p>
 * @method string getScheduledFireTime() 获取<p>触发时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
 * @method void setScheduledFireTime(string $ScheduledFireTime) 设置<p>触发时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
 * @method integer getScope() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method void setScope(integer $Scope) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method string getStartTime() 获取<p>开始执行时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始执行时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
 * @method integer getStatus() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
 * @method void setStatus(integer $Status) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
 * @method string getTriggerId() 获取<p>触发器id</p>
 * @method void setTriggerId(string $TriggerId) 设置<p>触发器id</p>
 * @method boolean getUnread() 获取<p>是否已读</p>
 * @method void setUnread(boolean $Unread) 设置<p>是否已读</p>
 * @method string getUserId() 获取<p>访客Id</p>
 * @method void setUserId(string $UserId) 设置<p>访客Id</p>
 * @method string getWorkflowRunId() 获取<p>工作流运行id</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行id</p>
 */
class AppTriggerRunLog extends AbstractModel
{
    /**
     * @var string <p>会话id</p>
     */
    public $ConversationId;

    /**
     * @var string <p>执行时间</p>
     */
    public $DurationMs;

    /**
     * @var string <p>结束时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td><td>3</td><td>手动立即执行</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td><td>4</td><td>测试执行</td></tr></tbody></table>
     */
    public $FireType;

    /**
     * @var string <p>触发实例id</p>
     */
    public $InstanceId;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_NONE</td><td>1</td><td>未配置推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_WAITING</td><td>2</td><td>等待推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_SUCCESS</td><td>3</td><td>推送成功</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_FAILED</td><td>4</td><td>推送失败</td></tr></tbody></table>
     */
    public $PushStatus;

    /**
     * @var string <p>结果码</p>
     */
    public $ResultCode;

    /**
     * @var string <p>结果概要</p>
     */
    public $ResultSummary;

    /**
     * @var string <p>单次对话id</p>
     */
    public $RunId;

    /**
     * @var string <p>触发时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
     */
    public $ScheduledFireTime;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     */
    public $Scope;

    /**
     * @var string <p>开始执行时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
     */
    public $StartTime;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
     */
    public $Status;

    /**
     * @var string <p>触发器id</p>
     */
    public $TriggerId;

    /**
     * @var boolean <p>是否已读</p>
     */
    public $Unread;

    /**
     * @var string <p>访客Id</p>
     */
    public $UserId;

    /**
     * @var string <p>工作流运行id</p>
     */
    public $WorkflowRunId;

    /**
     * @param string $ConversationId <p>会话id</p>
     * @param string $DurationMs <p>执行时间</p>
     * @param string $EndTime <p>结束时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param integer $FireType <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td><td>3</td><td>手动立即执行</td></tr><tr><td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td><td>4</td><td>测试执行</td></tr></tbody></table>
     * @param string $InstanceId <p>触发实例id</p>
     * @param integer $PushStatus <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_NONE</td><td>1</td><td>未配置推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_WAITING</td><td>2</td><td>等待推送</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_SUCCESS</td><td>3</td><td>推送成功</td></tr><tr><td>TIMER_RUN_PUSH_STATUS_FAILED</td><td>4</td><td>推送失败</td></tr></tbody></table>
     * @param string $ResultCode <p>结果码</p>
     * @param string $ResultSummary <p>结果概要</p>
     * @param string $RunId <p>单次对话id</p>
     * @param string $ScheduledFireTime <p>触发时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
     * @param integer $Scope <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     * @param string $StartTime <p>开始执行时间</p><p>参数格式：YYYY:MM:DD hh:mm:ss</p>
     * @param integer $Status <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
     * @param string $TriggerId <p>触发器id</p>
     * @param boolean $Unread <p>是否已读</p>
     * @param string $UserId <p>访客Id</p>
     * @param string $WorkflowRunId <p>工作流运行id</p>
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
        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FireType",$param) and $param["FireType"] !== null) {
            $this->FireType = $param["FireType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PushStatus",$param) and $param["PushStatus"] !== null) {
            $this->PushStatus = $param["PushStatus"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("ResultSummary",$param) and $param["ResultSummary"] !== null) {
            $this->ResultSummary = $param["ResultSummary"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("ScheduledFireTime",$param) and $param["ScheduledFireTime"] !== null) {
            $this->ScheduledFireTime = $param["ScheduledFireTime"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("Unread",$param) and $param["Unread"] !== null) {
            $this->Unread = $param["Unread"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
