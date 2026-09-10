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
 * 插件授权配置
 *
 * @method integer getAuthType() 获取<p>授权方式。</p><p>枚举值：</p><ul><li>0：无鉴权</li><li>1：API Key 鉴权</li><li>2：CAM 授权</li><li>3：OAuth 2.0 授权</li></ul>
 * @method void setAuthType(integer $AuthType) 设置<p>授权方式。</p><p>枚举值：</p><ul><li>0：无鉴权</li><li>1：API Key 鉴权</li><li>2：CAM 授权</li><li>3：OAuth 2.0 授权</li></ul>
 * @method ApiKeyAuthConfig getApiKeyAuthConfig() 获取<p>API Key授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKeyAuthConfig(ApiKeyAuthConfig $ApiKeyAuthConfig) 设置<p>API Key授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CamAuthConfig getCamAuthConfig() 获取<p>CAM授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCamAuthConfig(CamAuthConfig $CamAuthConfig) 设置<p>CAM授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OAuthConfig getOAuthConfig() 获取<p>OAuth2.0授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOAuthConfig(OAuthConfig $OAuthConfig) 设置<p>OAuth2.0授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessKeyAuthConfig getAccessKeyAuthConfig() 获取<p>AccessKey授权配置</p>
 * @method void setAccessKeyAuthConfig(AccessKeyAuthConfig $AccessKeyAuthConfig) 设置<p>AccessKey授权配置</p>
 */
class AuthConfig extends AbstractModel
{
    /**
     * @var integer <p>授权方式。</p><p>枚举值：</p><ul><li>0：无鉴权</li><li>1：API Key 鉴权</li><li>2：CAM 授权</li><li>3：OAuth 2.0 授权</li></ul>
     */
    public $AuthType;

    /**
     * @var ApiKeyAuthConfig <p>API Key授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKeyAuthConfig;

    /**
     * @var CamAuthConfig <p>CAM授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CamAuthConfig;

    /**
     * @var OAuthConfig <p>OAuth2.0授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OAuthConfig;

    /**
     * @var AccessKeyAuthConfig <p>AccessKey授权配置</p>
     */
    public $AccessKeyAuthConfig;

    /**
     * @param integer $AuthType <p>授权方式。</p><p>枚举值：</p><ul><li>0：无鉴权</li><li>1：API Key 鉴权</li><li>2：CAM 授权</li><li>3：OAuth 2.0 授权</li></ul>
     * @param ApiKeyAuthConfig $ApiKeyAuthConfig <p>API Key授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CamAuthConfig $CamAuthConfig <p>CAM授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OAuthConfig $OAuthConfig <p>OAuth2.0授权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessKeyAuthConfig $AccessKeyAuthConfig <p>AccessKey授权配置</p>
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiKeyAuthConfig",$param) and $param["ApiKeyAuthConfig"] !== null) {
            $this->ApiKeyAuthConfig = new ApiKeyAuthConfig();
            $this->ApiKeyAuthConfig->deserialize($param["ApiKeyAuthConfig"]);
        }

        if (array_key_exists("CamAuthConfig",$param) and $param["CamAuthConfig"] !== null) {
            $this->CamAuthConfig = new CamAuthConfig();
            $this->CamAuthConfig->deserialize($param["CamAuthConfig"]);
        }

        if (array_key_exists("OAuthConfig",$param) and $param["OAuthConfig"] !== null) {
            $this->OAuthConfig = new OAuthConfig();
            $this->OAuthConfig->deserialize($param["OAuthConfig"]);
        }

        if (array_key_exists("AccessKeyAuthConfig",$param) and $param["AccessKeyAuthConfig"] !== null) {
            $this->AccessKeyAuthConfig = new AccessKeyAuthConfig();
            $this->AccessKeyAuthConfig->deserialize($param["AccessKeyAuthConfig"]);
        }
    }
}
