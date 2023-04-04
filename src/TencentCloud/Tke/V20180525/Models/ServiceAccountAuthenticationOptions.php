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
 * ServiceAccount认证相关配置
 *
 * @method boolean getUseTKEDefault() 获取使用TKE默认issuer和jwksuri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseTKEDefault(boolean $UseTKEDefault) 设置使用TKE默认issuer和jwksuri
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssuer() 获取service-account-issuer
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuer(string $Issuer) 设置service-account-issuer
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJWKSURI() 获取service-account-jwks-uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJWKSURI(string $JWKSURI) 设置service-account-jwks-uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoCreateDiscoveryAnonymousAuth() 获取如果为true，则会自动创建允许匿名用户访问'/.well-known/openid-configuration'和/openid/v1/jwks的rbac规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCreateDiscoveryAnonymousAuth(boolean $AutoCreateDiscoveryAnonymousAuth) 设置如果为true，则会自动创建允许匿名用户访问'/.well-known/openid-configuration'和/openid/v1/jwks的rbac规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceAccountAuthenticationOptions extends AbstractModel
{
    /**
     * @var boolean 使用TKE默认issuer和jwksuri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseTKEDefault;

    /**
     * @var string service-account-issuer
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Issuer;

    /**
     * @var string service-account-jwks-uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JWKSURI;

    /**
     * @var boolean 如果为true，则会自动创建允许匿名用户访问'/.well-known/openid-configuration'和/openid/v1/jwks的rbac规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCreateDiscoveryAnonymousAuth;

    /**
     * @param boolean $UseTKEDefault 使用TKE默认issuer和jwksuri
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Issuer service-account-issuer
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JWKSURI service-account-jwks-uri
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoCreateDiscoveryAnonymousAuth 如果为true，则会自动创建允许匿名用户访问'/.well-known/openid-configuration'和/openid/v1/jwks的rbac规则
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
        if (array_key_exists("UseTKEDefault",$param) and $param["UseTKEDefault"] !== null) {
            $this->UseTKEDefault = $param["UseTKEDefault"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("JWKSURI",$param) and $param["JWKSURI"] !== null) {
            $this->JWKSURI = $param["JWKSURI"];
        }

        if (array_key_exists("AutoCreateDiscoveryAnonymousAuth",$param) and $param["AutoCreateDiscoveryAnonymousAuth"] !== null) {
            $this->AutoCreateDiscoveryAnonymousAuth = $param["AutoCreateDiscoveryAnonymousAuth"];
        }
    }
}
