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
     * @var AppTriggerWebhookStatus <p>Webhook状态</p>
     */
    public $WebhookStatus;

    /**
     * @param AppTriggerScheduleStatus $ScheduledStatus <p>定时器状态</p>
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

        if (array_key_exists("WebhookStatus",$param) and $param["WebhookStatus"] !== null) {
            $this->WebhookStatus = new AppTriggerWebhookStatus();
            $this->WebhookStatus->deserialize($param["WebhookStatus"]);
        }
    }
}
