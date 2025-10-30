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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetExternalSAMLIdentityProvider请求参数结构体
 *
 * @method string getZoneId() 获取空间ID。
 * @method void setZoneId(string $ZoneId) 设置空间ID。
 * @method string getEncodedMetadataDocument() 获取IdP 元数据文档（Base64 编码）。  由支持 SAML 2.0 协议的 IdP 提供。
 * @method void setEncodedMetadataDocument(string $EncodedMetadataDocument) 设置IdP 元数据文档（Base64 编码）。  由支持 SAML 2.0 协议的 IdP 提供。
 * @method string getSSOStatus() 获取SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
 * @method void setSSOStatus(string $SSOStatus) 设置SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
 * @method string getEntityId() 获取IdP 标识。
 * @method void setEntityId(string $EntityId) 设置IdP 标识。
 * @method string getLoginUrl() 获取IdP 的登录地址。
 * @method void setLoginUrl(string $LoginUrl) 设置IdP 的登录地址。
 * @method string getX509Certificate() 获取PEM 格式的 X509 证书。指定该参数会替换所有已经存在的证书。
 * @method void setX509Certificate(string $X509Certificate) 设置PEM 格式的 X509 证书。指定该参数会替换所有已经存在的证书。
 */
class SetExternalSAMLIdentityProviderRequest extends AbstractModel
{
    /**
     * @var string 空间ID。
     */
    public $ZoneId;

    /**
     * @var string IdP 元数据文档（Base64 编码）。  由支持 SAML 2.0 协议的 IdP 提供。
     */
    public $EncodedMetadataDocument;

    /**
     * @var string SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
     */
    public $SSOStatus;

    /**
     * @var string IdP 标识。
     */
    public $EntityId;

    /**
     * @var string IdP 的登录地址。
     */
    public $LoginUrl;

    /**
     * @var string PEM 格式的 X509 证书。指定该参数会替换所有已经存在的证书。
     */
    public $X509Certificate;

    /**
     * @param string $ZoneId 空间ID。
     * @param string $EncodedMetadataDocument IdP 元数据文档（Base64 编码）。  由支持 SAML 2.0 协议的 IdP 提供。
     * @param string $SSOStatus SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
     * @param string $EntityId IdP 标识。
     * @param string $LoginUrl IdP 的登录地址。
     * @param string $X509Certificate PEM 格式的 X509 证书。指定该参数会替换所有已经存在的证书。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EncodedMetadataDocument",$param) and $param["EncodedMetadataDocument"] !== null) {
            $this->EncodedMetadataDocument = $param["EncodedMetadataDocument"];
        }

        if (array_key_exists("SSOStatus",$param) and $param["SSOStatus"] !== null) {
            $this->SSOStatus = $param["SSOStatus"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("LoginUrl",$param) and $param["LoginUrl"] !== null) {
            $this->LoginUrl = $param["LoginUrl"];
        }

        if (array_key_exists("X509Certificate",$param) and $param["X509Certificate"] !== null) {
            $this->X509Certificate = $param["X509Certificate"];
        }
    }
}
