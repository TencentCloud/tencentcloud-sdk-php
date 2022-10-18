<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OIDC认证相关配置
 *
 * @method boolean getAutoCreateOIDCConfig() 获取创建身份提供商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCreateOIDCConfig(boolean $AutoCreateOIDCConfig) 设置创建身份提供商
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAutoCreateClientId() 获取创建身份提供商的ClientId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCreateClientId(array $AutoCreateClientId) 设置创建身份提供商的ClientId
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoInstallPodIdentityWebhookAddon() 获取创建PodIdentityWebhook组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoInstallPodIdentityWebhookAddon(boolean $AutoInstallPodIdentityWebhookAddon) 设置创建PodIdentityWebhook组件
注意：此字段可能返回 null，表示取不到有效值。
 */
class OIDCConfigAuthenticationOptions extends AbstractModel
{
    /**
     * @var boolean 创建身份提供商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCreateOIDCConfig;

    /**
     * @var array 创建身份提供商的ClientId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCreateClientId;

    /**
     * @var boolean 创建PodIdentityWebhook组件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoInstallPodIdentityWebhookAddon;

    /**
     * @param boolean $AutoCreateOIDCConfig 创建身份提供商
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AutoCreateClientId 创建身份提供商的ClientId
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoInstallPodIdentityWebhookAddon 创建PodIdentityWebhook组件
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AutoCreateOIDCConfig",$param) and $param["AutoCreateOIDCConfig"] !== null) {
            $this->AutoCreateOIDCConfig = $param["AutoCreateOIDCConfig"];
        }

        if (array_key_exists("AutoCreateClientId",$param) and $param["AutoCreateClientId"] !== null) {
            $this->AutoCreateClientId = $param["AutoCreateClientId"];
        }

        if (array_key_exists("AutoInstallPodIdentityWebhookAddon",$param) and $param["AutoInstallPodIdentityWebhookAddon"] !== null) {
            $this->AutoInstallPodIdentityWebhookAddon = $param["AutoInstallPodIdentityWebhookAddon"];
        }
    }
}
