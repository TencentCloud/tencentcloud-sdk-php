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
 * AppTriggerSummary
 *
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method integer getExecuteType() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></tbody></table>
 * @method void setExecuteType(integer $ExecuteType) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></tbody></table>
 * @method string getFailedCount() 获取<p>失败次数</p>
 * @method void setFailedCount(string $FailedCount) 设置<p>失败次数</p>
 * @method string getLastSessionId() 获取<p>最近一次会话id</p>
 * @method void setLastSessionId(string $LastSessionId) 设置<p>最近一次会话id</p>
 * @method integer getScope() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table><p>取值范围：[0, 2]</p>
 * @method void setScope(integer $Scope) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table><p>取值范围：[0, 2]</p>
 * @method integer getStatus() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></tbody></table>
 * @method void setStatus(integer $Status) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></tbody></table>
 * @method string getSuccessCount() 获取<p>成功次数</p>
 * @method void setSuccessCount(string $SuccessCount) 设置<p>成功次数</p>
 * @method string getTriggerId() 获取<p>触发器id</p>
 * @method void setTriggerId(string $TriggerId) 设置<p>触发器id</p>
 * @method string getTriggerName() 获取<p>触发器名称</p>
 * @method void setTriggerName(string $TriggerName) 设置<p>触发器名称</p>
 * @method TriggerStatus getTriggerStatus() 获取<p>触发器执行状态</p>
 * @method void setTriggerStatus(TriggerStatus $TriggerStatus) 设置<p>触发器执行状态</p>
 * @method integer getTriggerType() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></tbody></table>
 * @method void setTriggerType(integer $TriggerType) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></tbody></table>
 * @method string getUnreadRunLogCount() 获取<p>未读日志的数量</p>
 * @method void setUnreadRunLogCount(string $UnreadRunLogCount) 设置<p>未读日志的数量</p>
 * @method string getUserId() 获取<p>访客ID</p>
 * @method void setUserId(string $UserId) 设置<p>访客ID</p>
 */
class AppTriggerSummary extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></tbody></table>
     */
    public $ExecuteType;

    /**
     * @var string <p>失败次数</p>
     */
    public $FailedCount;

    /**
     * @var string <p>最近一次会话id</p>
     */
    public $LastSessionId;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table><p>取值范围：[0, 2]</p>
     */
    public $Scope;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></tbody></table>
     */
    public $Status;

    /**
     * @var string <p>成功次数</p>
     */
    public $SuccessCount;

    /**
     * @var string <p>触发器id</p>
     */
    public $TriggerId;

    /**
     * @var string <p>触发器名称</p>
     */
    public $TriggerName;

    /**
     * @var TriggerStatus <p>触发器执行状态</p>
     */
    public $TriggerStatus;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></tbody></table>
     */
    public $TriggerType;

    /**
     * @var string <p>未读日志的数量</p>
     */
    public $UnreadRunLogCount;

    /**
     * @var string <p>访客ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param integer $ExecuteType <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></tbody></table>
     * @param string $FailedCount <p>失败次数</p>
     * @param string $LastSessionId <p>最近一次会话id</p>
     * @param integer $Scope <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table><p>取值范围：[0, 2]</p>
     * @param integer $Status <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></tbody></table>
     * @param string $SuccessCount <p>成功次数</p>
     * @param string $TriggerId <p>触发器id</p>
     * @param string $TriggerName <p>触发器名称</p>
     * @param TriggerStatus $TriggerStatus <p>触发器执行状态</p>
     * @param integer $TriggerType <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></tbody></table>
     * @param string $UnreadRunLogCount <p>未读日志的数量</p>
     * @param string $UserId <p>访客ID</p>
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

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("LastSessionId",$param) and $param["LastSessionId"] !== null) {
            $this->LastSessionId = $param["LastSessionId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("TriggerStatus",$param) and $param["TriggerStatus"] !== null) {
            $this->TriggerStatus = new TriggerStatus();
            $this->TriggerStatus->deserialize($param["TriggerStatus"]);
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("UnreadRunLogCount",$param) and $param["UnreadRunLogCount"] !== null) {
            $this->UnreadRunLogCount = $param["UnreadRunLogCount"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
