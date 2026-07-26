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
 * AppTriggerWebhookConfig
 *
 * @method AppTriggerWebhookParamSchemaConfig getParamSchemaConfig() 获取
 * @method void setParamSchemaConfig(AppTriggerWebhookParamSchemaConfig $ParamSchemaConfig) 设置
 * @method string getWebhookKey() 获取
 * @method void setWebhookKey(string $WebhookKey) 设置
 * @method string getWebhookToken() 获取
 * @method void setWebhookToken(string $WebhookToken) 设置
 * @method string getWebhookUrl() 获取
 * @method void setWebhookUrl(string $WebhookUrl) 设置
 */
class AppTriggerWebhookConfig extends AbstractModel
{
    /**
     * @var AppTriggerWebhookParamSchemaConfig 
     */
    public $ParamSchemaConfig;

    /**
     * @var string 
     */
    public $WebhookKey;

    /**
     * @var string 
     */
    public $WebhookToken;

    /**
     * @var string 
     */
    public $WebhookUrl;

    /**
     * @param AppTriggerWebhookParamSchemaConfig $ParamSchemaConfig 
     * @param string $WebhookKey 
     * @param string $WebhookToken 
     * @param string $WebhookUrl 
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
        if (array_key_exists("ParamSchemaConfig",$param) and $param["ParamSchemaConfig"] !== null) {
            $this->ParamSchemaConfig = new AppTriggerWebhookParamSchemaConfig();
            $this->ParamSchemaConfig->deserialize($param["ParamSchemaConfig"]);
        }

        if (array_key_exists("WebhookKey",$param) and $param["WebhookKey"] !== null) {
            $this->WebhookKey = $param["WebhookKey"];
        }

        if (array_key_exists("WebhookToken",$param) and $param["WebhookToken"] !== null) {
            $this->WebhookToken = $param["WebhookToken"];
        }

        if (array_key_exists("WebhookUrl",$param) and $param["WebhookUrl"] !== null) {
            $this->WebhookUrl = $param["WebhookUrl"];
        }
    }
}
