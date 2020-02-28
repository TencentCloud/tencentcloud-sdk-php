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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCertificateId() 获取证书ID。
 * @method void setCertificateId(string $CertificateId) 设置证书ID。
 * @method string getValidType() 获取验证类型 DNS,DNS_AUTO,FILE
 * @method void setValidType(string $ValidType) 设置验证类型 DNS,DNS_AUTO,FILE
 * @method string getCsrType() 获取类型，可选项：Original、Upload、Online，默认original。
 * @method void setCsrType(string $CsrType) 设置类型，可选项：Original、Upload、Online，默认original。
 * @method string getCsrContent() 获取CSR内容。
 * @method void setCsrContent(string $CsrContent) 设置CSR内容。
 * @method string getCsrkeyPassword() 获取key密码。
 * @method void setCsrkeyPassword(string $CsrkeyPassword) 设置key密码。
 */

/**
 *ReplaceCertificate请求参数结构体
 */
class ReplaceCertificateRequest extends AbstractModel
{
    /**
     * @var string 证书ID。
     */
    public $CertificateId;

    /**
     * @var string 验证类型 DNS,DNS_AUTO,FILE
     */
    public $ValidType;

    /**
     * @var string 类型，可选项：Original、Upload、Online，默认original。
     */
    public $CsrType;

    /**
     * @var string CSR内容。
     */
    public $CsrContent;

    /**
     * @var string key密码。
     */
    public $CsrkeyPassword;
    /**
     * @param string $CertificateId 证书ID。
     * @param string $ValidType 验证类型 DNS,DNS_AUTO,FILE
     * @param string $CsrType 类型，可选项：Original、Upload、Online，默认original。
     * @param string $CsrContent CSR内容。
     * @param string $CsrkeyPassword key密码。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ValidType",$param) and $param["ValidType"] !== null) {
            $this->ValidType = $param["ValidType"];
        }

        if (array_key_exists("CsrType",$param) and $param["CsrType"] !== null) {
            $this->CsrType = $param["CsrType"];
        }

        if (array_key_exists("CsrContent",$param) and $param["CsrContent"] !== null) {
            $this->CsrContent = $param["CsrContent"];
        }

        if (array_key_exists("CsrkeyPassword",$param) and $param["CsrkeyPassword"] !== null) {
            $this->CsrkeyPassword = $param["CsrkeyPassword"];
        }
    }
}
