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
 * TriggerStatus
 *
 * @method AppTriggerScheduleStatus getScheduledStatus() 获取<p>定时器状态</p>
 * @method void setScheduledStatus(AppTriggerScheduleStatus $ScheduledStatus) 设置<p>定时器状态</p>
 * @method integer getScope() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method void setScope(integer $Scope) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method string getUserId() 获取<p>访客id</p>
 * @method void setUserId(string $UserId) 设置<p>访客id</p>
 * @method AppTriggerWebhookStatus getWebhookStatus() 获取<p>Webhook状态</p>
 * @method void setWebhookStatus(AppTriggerWebhookStatus $WebhookStatus) 设置<p>Webhook状态</p>
 */
class TriggerStatus extends AbstractModel
{
    /**
     * @var AppTriggerScheduleStatus <p>定时器状态</p>
     */
    public $ScheduledStatus;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     */
    public $Scope;

    /**
     * @var string <p>访客id</p>
     */
    public $UserId;

    /**
     * @var AppTriggerWebhookStatus <p>Webhook状态</p>
     */
    public $WebhookStatus;

    /**
     * @param AppTriggerScheduleStatus $ScheduledStatus <p>定时器状态</p>
     * @param integer $Scope <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     * @param string $UserId <p>访客id</p>
     * @param AppTriggerWebhookStatus $WebhookStatus <p>Webhook状态</p>
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
        if (array_key_exists("ScheduledStatus",$param) and $param["ScheduledStatus"] !== null) {
            $this->ScheduledStatus = new AppTriggerScheduleStatus();
            $this->ScheduledStatus->deserialize($param["ScheduledStatus"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WebhookStatus",$param) and $param["WebhookStatus"] !== null) {
            $this->WebhookStatus = new AppTriggerWebhookStatus();
            $this->WebhookStatus->deserialize($param["WebhookStatus"]);
        }
    }
}
