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
 * Webhook 来源扩展配置。
 *
 * @method string getCredentialId() 获取访问外部平台的 OAuth 凭证 ID，不能为空。
 * @method void setCredentialId(string $CredentialId) 设置访问外部平台的 OAuth 凭证 ID，不能为空。
 * @method AppTriggerWebhookCredential getCredential() 获取<p>绑定凭证的只读摘要；创建和修改时忽略</p>
 * @method void setCredential(AppTriggerWebhookCredential $Credential) 设置<p>绑定凭证的只读摘要；创建和修改时忽略</p>
 * @method AppTriggerGongfengWebhookConfig getGongfengConfig() 获取工蜂配置，仅 WebhookProvider=1 时使用，与 TAPDConfig 互斥。
 * @method void setGongfengConfig(AppTriggerGongfengWebhookConfig $GongfengConfig) 设置工蜂配置，仅 WebhookProvider=1 时使用，与 TAPDConfig 互斥。
 * @method AppTriggerTAPDWebhookConfig getTAPDConfig() 获取TAPD 配置，仅 WebhookProvider=2 时使用，与 GongfengConfig 互斥。
 * @method void setTAPDConfig(AppTriggerTAPDWebhookConfig $TAPDConfig) 设置TAPD 配置，仅 WebhookProvider=2 时使用，与 GongfengConfig 互斥。
 */
class AppTriggerWebhookConfigExt extends AbstractModel
{
    /**
     * @var string 访问外部平台的 OAuth 凭证 ID，不能为空。
     */
    public $CredentialId;

    /**
     * @var AppTriggerWebhookCredential <p>绑定凭证的只读摘要；创建和修改时忽略</p>
     */
    public $Credential;

    /**
     * @var AppTriggerGongfengWebhookConfig 工蜂配置，仅 WebhookProvider=1 时使用，与 TAPDConfig 互斥。
     */
    public $GongfengConfig;

    /**
     * @var AppTriggerTAPDWebhookConfig TAPD 配置，仅 WebhookProvider=2 时使用，与 GongfengConfig 互斥。
     */
    public $TAPDConfig;

    /**
     * @param string $CredentialId 访问外部平台的 OAuth 凭证 ID，不能为空。
     * @param AppTriggerWebhookCredential $Credential <p>绑定凭证的只读摘要；创建和修改时忽略</p>
     * @param AppTriggerGongfengWebhookConfig $GongfengConfig 工蜂配置，仅 WebhookProvider=1 时使用，与 TAPDConfig 互斥。
     * @param AppTriggerTAPDWebhookConfig $TAPDConfig TAPD 配置，仅 WebhookProvider=2 时使用，与 GongfengConfig 互斥。
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("Credential",$param) and $param["Credential"] !== null) {
            $this->Credential = new AppTriggerWebhookCredential();
            $this->Credential->deserialize($param["Credential"]);
        }

        if (array_key_exists("GongfengConfig",$param) and $param["GongfengConfig"] !== null) {
            $this->GongfengConfig = new AppTriggerGongfengWebhookConfig();
            $this->GongfengConfig->deserialize($param["GongfengConfig"]);
        }

        if (array_key_exists("TAPDConfig",$param) and $param["TAPDConfig"] !== null) {
            $this->TAPDConfig = new AppTriggerTAPDWebhookConfig();
            $this->TAPDConfig->deserialize($param["TAPDConfig"]);
        }
    }
}
