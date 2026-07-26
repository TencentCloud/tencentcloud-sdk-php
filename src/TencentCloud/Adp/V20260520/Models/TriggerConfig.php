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
 * TriggerConfig
 *
 * @method AppTriggerScheduleConfig getScheduledConfig() 获取<p>定时器配置</p>
 * @method void setScheduledConfig(AppTriggerScheduleConfig $ScheduledConfig) 设置<p>定时器配置</p>
 * @method AppTriggerWebhookConfig getWebhookConfig() 获取<p>Webhook配置</p>
 * @method void setWebhookConfig(AppTriggerWebhookConfig $WebhookConfig) 设置<p>Webhook配置</p>
 */
class TriggerConfig extends AbstractModel
{
    /**
     * @var AppTriggerScheduleConfig <p>定时器配置</p>
     */
    public $ScheduledConfig;

    /**
     * @var AppTriggerWebhookConfig <p>Webhook配置</p>
     */
    public $WebhookConfig;

    /**
     * @param AppTriggerScheduleConfig $ScheduledConfig <p>定时器配置</p>
     * @param AppTriggerWebhookConfig $WebhookConfig <p>Webhook配置</p>
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
        if (array_key_exists("ScheduledConfig",$param) and $param["ScheduledConfig"] !== null) {
            $this->ScheduledConfig = new AppTriggerScheduleConfig();
            $this->ScheduledConfig->deserialize($param["ScheduledConfig"]);
        }

        if (array_key_exists("WebhookConfig",$param) and $param["WebhookConfig"] !== null) {
            $this->WebhookConfig = new AppTriggerWebhookConfig();
            $this->WebhookConfig->deserialize($param["WebhookConfig"]);
        }
    }
}
