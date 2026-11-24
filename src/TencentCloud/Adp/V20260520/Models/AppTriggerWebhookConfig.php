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
 * @method AppTriggerWebhookParamSchemaConfig getParamSchemaConfig() 获取<p>触发器webhook参数配置</p>
 * @method void setParamSchemaConfig(AppTriggerWebhookParamSchemaConfig $ParamSchemaConfig) 设置<p>触发器webhook参数配置</p>
 * @method AppTriggerWebhookConfigExt getWebhookConfigExt() 获取Webhook 来源扩展配置。通用 Webhook 不传；工蜂/TAPD 传对应配置及 OAuth 凭证，GongfengConfig 与 TAPDConfig 互斥且须与 WebhookProvider 一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebhookConfigExt(AppTriggerWebhookConfigExt $WebhookConfigExt) 设置Webhook 来源扩展配置。通用 Webhook 不传；工蜂/TAPD 传对应配置及 OAuth 凭证，GongfengConfig 与 TAPDConfig 互斥且须与 WebhookProvider 一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebhookKey() 获取<p>webhook的key</p>
 * @method void setWebhookKey(string $WebhookKey) 设置<p>webhook的key</p>
 * @method integer getWebhookProvider() 获取Webhook 来源。0：未指定，兼容通用 Webhook；1：工蜂；2：TAPD。
 * @method void setWebhookProvider(integer $WebhookProvider) 设置Webhook 来源。0：未指定，兼容通用 Webhook；1：工蜂；2：TAPD。
 * @method string getWebhookToken() 获取<p>webhook的密钥</p>
 * @method void setWebhookToken(string $WebhookToken) 设置<p>webhook的密钥</p>
 * @method string getWebhookUrl() 获取<p>webhook的地址</p>
 * @method void setWebhookUrl(string $WebhookUrl) 设置<p>webhook的地址</p>
 */
class AppTriggerWebhookConfig extends AbstractModel
{
    /**
     * @var AppTriggerWebhookParamSchemaConfig <p>触发器webhook参数配置</p>
     */
    public $ParamSchemaConfig;

    /**
     * @var AppTriggerWebhookConfigExt Webhook 来源扩展配置。通用 Webhook 不传；工蜂/TAPD 传对应配置及 OAuth 凭证，GongfengConfig 与 TAPDConfig 互斥且须与 WebhookProvider 一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebhookConfigExt;

    /**
     * @var string <p>webhook的key</p>
     */
    public $WebhookKey;

    /**
     * @var integer Webhook 来源。0：未指定，兼容通用 Webhook；1：工蜂；2：TAPD。
     */
    public $WebhookProvider;

    /**
     * @var string <p>webhook的密钥</p>
     */
    public $WebhookToken;

    /**
     * @var string <p>webhook的地址</p>
     */
    public $WebhookUrl;

    /**
     * @param AppTriggerWebhookParamSchemaConfig $ParamSchemaConfig <p>触发器webhook参数配置</p>
     * @param AppTriggerWebhookConfigExt $WebhookConfigExt Webhook 来源扩展配置。通用 Webhook 不传；工蜂/TAPD 传对应配置及 OAuth 凭证，GongfengConfig 与 TAPDConfig 互斥且须与 WebhookProvider 一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebhookKey <p>webhook的key</p>
     * @param integer $WebhookProvider Webhook 来源。0：未指定，兼容通用 Webhook；1：工蜂；2：TAPD。
     * @param string $WebhookToken <p>webhook的密钥</p>
     * @param string $WebhookUrl <p>webhook的地址</p>
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

        if (array_key_exists("WebhookConfigExt",$param) and $param["WebhookConfigExt"] !== null) {
            $this->WebhookConfigExt = new AppTriggerWebhookConfigExt();
            $this->WebhookConfigExt->deserialize($param["WebhookConfigExt"]);
        }

        if (array_key_exists("WebhookKey",$param) and $param["WebhookKey"] !== null) {
            $this->WebhookKey = $param["WebhookKey"];
        }

        if (array_key_exists("WebhookProvider",$param) and $param["WebhookProvider"] !== null) {
            $this->WebhookProvider = $param["WebhookProvider"];
        }

        if (array_key_exists("WebhookToken",$param) and $param["WebhookToken"] !== null) {
            $this->WebhookToken = $param["WebhookToken"];
        }

        if (array_key_exists("WebhookUrl",$param) and $param["WebhookUrl"] !== null) {
            $this->WebhookUrl = $param["WebhookUrl"];
        }
    }
}
