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
 * @method string getAppId() 获取
 * @method void setAppId(string $AppId) 设置
 * @method integer getExecuteType() 获取<table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></table>
 * @method void setExecuteType(integer $ExecuteType) 设置<table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></table>
 * @method string getFailedCount() 获取
 * @method void setFailedCount(string $FailedCount) 设置
 * @method string getLastSessionId() 获取
 * @method void setLastSessionId(string $LastSessionId) 设置
 * @method integer getStatus() 获取<table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></table>
 * @method void setStatus(integer $Status) 设置<table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></table>
 * @method string getSuccessCount() 获取
 * @method void setSuccessCount(string $SuccessCount) 设置
 * @method string getTriggerId() 获取
 * @method void setTriggerId(string $TriggerId) 设置
 * @method string getTriggerName() 获取
 * @method void setTriggerName(string $TriggerName) 设置
 * @method TriggerStatus getTriggerStatus() 获取
 * @method void setTriggerStatus(TriggerStatus $TriggerStatus) 设置
 * @method integer getTriggerType() 获取<table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></table>
 * @method void setTriggerType(integer $TriggerType) 设置<table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></table>
 * @method string getUnreadRunLogCount() 获取
 * @method void setUnreadRunLogCount(string $UnreadRunLogCount) 设置
 */
class AppTriggerSummary extends AbstractModel
{
    /**
     * @var string 
     */
    public $AppId;

    /**
     * @var integer <table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></table>
     */
    public $ExecuteType;

    /**
     * @var string 
     */
    public $FailedCount;

    /**
     * @var string 
     */
    public $LastSessionId;

    /**
     * @var integer <table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></table>
     */
    public $Status;

    /**
     * @var string 
     */
    public $SuccessCount;

    /**
     * @var string 
     */
    public $TriggerId;

    /**
     * @var string 
     */
    public $TriggerName;

    /**
     * @var TriggerStatus 
     */
    public $TriggerStatus;

    /**
     * @var integer <table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></table>
     */
    public $TriggerType;

    /**
     * @var string 
     */
    public $UnreadRunLogCount;

    /**
     * @param string $AppId 
     * @param integer $ExecuteType <table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td><td>1</td><td>指令执行</td></tr><tr><td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td><td>2</td><td>工作流执行</td></tr></table>
     * @param string $FailedCount 
     * @param string $LastSessionId 
     * @param integer $Status <table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>启用</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>暂停</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>已删除</td></tr></table>
     * @param string $SuccessCount 
     * @param string $TriggerId 
     * @param string $TriggerName 
     * @param TriggerStatus $TriggerStatus 
     * @param integer $TriggerType <table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>定时触发</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook 触发</td></tr></table>
     * @param string $UnreadRunLogCount 
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
    }
}
