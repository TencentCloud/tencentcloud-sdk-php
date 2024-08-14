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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * saml 身份提供商配置信息。
 *
 * @method string getEntityId() 获取IdP 标识。
 * @method void setEntityId(string $EntityId) 设置IdP 标识。
 * @method string getSSOStatus() 获取SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
 * @method void setSSOStatus(string $SSOStatus) 设置SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
 * @method string getEncodedMetadataDocument() 获取IdP 元数据文档（Base64 编码）。
 * @method void setEncodedMetadataDocument(string $EncodedMetadataDocument) 设置IdP 元数据文档（Base64 编码）。
 * @method array getCertificateIds() 获取X509证书ID。
 * @method void setCertificateIds(array $CertificateIds) 设置X509证书ID。
 * @method string getLoginUrl() 获取IdP 的登录地址。
 * @method void setLoginUrl(string $LoginUrl) 设置IdP 的登录地址。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class SAMLIdentityProviderConfiguration extends AbstractModel
{
    /**
     * @var string IdP 标识。
     */
    public $EntityId;

    /**
     * @var string SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
     */
    public $SSOStatus;

    /**
     * @var string IdP 元数据文档（Base64 编码）。
     */
    public $EncodedMetadataDocument;

    /**
     * @var array X509证书ID。
     */
    public $CertificateIds;

    /**
     * @var string IdP 的登录地址。
     */
    public $LoginUrl;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $EntityId IdP 标识。
     * @param string $SSOStatus SSO 登录的启用状态。取值：  Enabled：启用。 Disabled（默认值）：禁用。
     * @param string $EncodedMetadataDocument IdP 元数据文档（Base64 编码）。
     * @param array $CertificateIds X509证书ID。
     * @param string $LoginUrl IdP 的登录地址。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("SSOStatus",$param) and $param["SSOStatus"] !== null) {
            $this->SSOStatus = $param["SSOStatus"];
        }

        if (array_key_exists("EncodedMetadataDocument",$param) and $param["EncodedMetadataDocument"] !== null) {
            $this->EncodedMetadataDocument = $param["EncodedMetadataDocument"];
        }

        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("LoginUrl",$param) and $param["LoginUrl"] !== null) {
            $this->LoginUrl = $param["LoginUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
