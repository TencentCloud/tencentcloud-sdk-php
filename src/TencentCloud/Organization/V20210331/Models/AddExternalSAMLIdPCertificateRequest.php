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
 * AddExternalSAMLIdPCertificate请求参数结构体
 *
 * @method string getZoneId() 获取空间ID。
 * @method void setZoneId(string $ZoneId) 设置空间ID。
 * @method string getX509Certificate() 获取PEM 格式的 X509 证书。  由 SAML 身份提供商提供。
 * @method void setX509Certificate(string $X509Certificate) 设置PEM 格式的 X509 证书。  由 SAML 身份提供商提供。
 */
class AddExternalSAMLIdPCertificateRequest extends AbstractModel
{
    /**
     * @var string 空间ID。
     */
    public $ZoneId;

    /**
     * @var string PEM 格式的 X509 证书。  由 SAML 身份提供商提供。
     */
    public $X509Certificate;

    /**
     * @param string $ZoneId 空间ID。
     * @param string $X509Certificate PEM 格式的 X509 证书。  由 SAML 身份提供商提供。
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

        if (array_key_exists("X509Certificate",$param) and $param["X509Certificate"] !== null) {
            $this->X509Certificate = $param["X509Certificate"];
        }
    }
}
