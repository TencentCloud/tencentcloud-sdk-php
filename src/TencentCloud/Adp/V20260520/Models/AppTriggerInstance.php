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
 * AppTriggerInstance
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getConversationId() 获取<p>会话id</p>
 * @method void setConversationId(string $ConversationId) 设置<p>会话id</p>
 * @method string getCreatedAt() 获取<p>触发器创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>触发器创建时间</p>
 * @method string getFinishedAt() 获取<p>结束时间</p>
 * @method void setFinishedAt(string $FinishedAt) 设置<p>结束时间</p>
 * @method string getInstanceId() 获取<p>触发器运行实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>触发器运行实例id</p>
 * @method string getRequestId() 获取<p>请求ID</p>
 * @method void setRequestId(string $RequestId) 设置<p>请求ID</p>
 * @method string getResultCode() 获取<p>结果码</p>
 * @method void setResultCode(string $ResultCode) 设置<p>结果码</p>
 * @method string getResultSummary() 获取<p>结果摘要</p>
 * @method void setResultSummary(string $ResultSummary) 设置<p>结果摘要</p>
 * @method string getRunId() 获取<p>单次对话id</p>
 * @method void setRunId(string $RunId) 设置<p>单次对话id</p>
 * @method integer getScope() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method void setScope(integer $Scope) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method integer getSource() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>来源于应用触发器</td></tr></tbody></table>
 * @method void setSource(integer $Source) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>来源于应用触发器</td></tr></tbody></table>
 * @method string getStartedAt() 获取<p>触发器开始执行时间</p>
 * @method void setStartedAt(string $StartedAt) 设置<p>触发器开始执行时间</p>
 * @method integer getStatus() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
 * @method void setStatus(integer $Status) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
 * @method string getTraceId() 获取<p>TraceId，用于日志记录</p>
 * @method void setTraceId(string $TraceId) 设置<p>TraceId，用于日志记录</p>
 * @method string getTriggerId() 获取<p>触发器id</p>
 * @method void setTriggerId(string $TriggerId) 设置<p>触发器id</p>
 * @method string getUserId() 获取<p>访客ID</p>
 * @method void setUserId(string $UserId) 设置<p>访客ID</p>
 * @method string getWorkflowRunId() 获取<p>工作流运行ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行ID</p>
 */
class AppTriggerInstance extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>会话id</p>
     */
    public $ConversationId;

    /**
     * @var string <p>触发器创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>结束时间</p>
     */
    public $FinishedAt;

    /**
     * @var string <p>触发器运行实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>请求ID</p>
     */
    public $RequestId;

    /**
     * @var string <p>结果码</p>
     */
    public $ResultCode;

    /**
     * @var string <p>结果摘要</p>
     */
    public $ResultSummary;

    /**
     * @var string <p>单次对话id</p>
     */
    public $RunId;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     */
    public $Scope;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>来源于应用触发器</td></tr></tbody></table>
     */
    public $Source;

    /**
     * @var string <p>触发器开始执行时间</p>
     */
    public $StartedAt;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
     */
    public $Status;

    /**
     * @var string <p>TraceId，用于日志记录</p>
     */
    public $TraceId;

    /**
     * @var string <p>触发器id</p>
     */
    public $TriggerId;

    /**
     * @var string <p>访客ID</p>
     */
    public $UserId;

    /**
     * @var string <p>工作流运行ID</p>
     */
    public $WorkflowRunId;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $ConversationId <p>会话id</p>
     * @param string $CreatedAt <p>触发器创建时间</p>
     * @param string $FinishedAt <p>结束时间</p>
     * @param string $InstanceId <p>触发器运行实例id</p>
     * @param string $RequestId <p>请求ID</p>
     * @param string $ResultCode <p>结果码</p>
     * @param string $ResultSummary <p>结果摘要</p>
     * @param string $RunId <p>单次对话id</p>
     * @param integer $Scope <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     * @param integer $Source <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>来源于应用触发器</td></tr></tbody></table>
     * @param string $StartedAt <p>触发器开始执行时间</p>
     * @param integer $Status <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>TIMER_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>TIMER_RUN_STATUS_PENDING</td><td>1</td><td>等待执行</td></tr><tr><td>TIMER_RUN_STATUS_RUNNING</td><td>2</td><td>执行中</td></tr><tr><td>TIMER_RUN_STATUS_RETRY_WAIT</td><td>3</td><td>等待重试</td></tr><tr><td>TIMER_RUN_STATUS_SUCCESS</td><td>4</td><td>成功</td></tr><tr><td>TIMER_RUN_STATUS_DEAD</td><td>5</td><td>失败终态 (重试耗尽 / 不可重试)</td></tr><tr><td>TIMER_RUN_STATUS_CANCELLED</td><td>6</td><td>被任务暂停/删除/修改取消</td></tr></tbody></table>
     * @param string $TraceId <p>TraceId，用于日志记录</p>
     * @param string $TriggerId <p>触发器id</p>
     * @param string $UserId <p>访客ID</p>
     * @param string $WorkflowRunId <p>工作流运行ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
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

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
