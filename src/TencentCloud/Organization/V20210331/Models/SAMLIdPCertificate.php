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
 * SAML 签名证书信息
 *
 * @method string getSerialNumber() 获取证书序列号。
 * @method void setSerialNumber(string $SerialNumber) 设置证书序列号。
 * @method string getIssuer() 获取证书颁发者。
 * @method void setIssuer(string $Issuer) 设置证书颁发者。
 * @method integer getVersion() 获取证书版本。
 * @method void setVersion(integer $Version) 设置证书版本。
 * @method string getCertificateId() 获取证书ID。
 * @method void setCertificateId(string $CertificateId) 设置证书ID。
 * @method string getPublicKey() 获取PEM 格式的公钥证书（Base64 编码）。
 * @method void setPublicKey(string $PublicKey) 设置PEM 格式的公钥证书（Base64 编码）。
 * @method string getSignatureAlgorithm() 获取证书的签名算法。
 * @method void setSignatureAlgorithm(string $SignatureAlgorithm) 设置证书的签名算法。
 * @method string getNotAfter() 获取证书的过期时间。
 * @method void setNotAfter(string $NotAfter) 设置证书的过期时间。
 * @method string getNotBefore() 获取证书的创建时间。
 * @method void setNotBefore(string $NotBefore) 设置证书的创建时间。
 * @method string getSubject() 获取证书的主体。
 * @method void setSubject(string $Subject) 设置证书的主体。
 * @method string getX509Certificate() 获取PEM 格式的 X509 证书。
 * @method void setX509Certificate(string $X509Certificate) 设置PEM 格式的 X509 证书。
 */
class SAMLIdPCertificate extends AbstractModel
{
    /**
     * @var string 证书序列号。
     */
    public $SerialNumber;

    /**
     * @var string 证书颁发者。
     */
    public $Issuer;

    /**
     * @var integer 证书版本。
     */
    public $Version;

    /**
     * @var string 证书ID。
     */
    public $CertificateId;

    /**
     * @var string PEM 格式的公钥证书（Base64 编码）。
     */
    public $PublicKey;

    /**
     * @var string 证书的签名算法。
     */
    public $SignatureAlgorithm;

    /**
     * @var string 证书的过期时间。
     */
    public $NotAfter;

    /**
     * @var string 证书的创建时间。
     */
    public $NotBefore;

    /**
     * @var string 证书的主体。
     */
    public $Subject;

    /**
     * @var string PEM 格式的 X509 证书。
     */
    public $X509Certificate;

    /**
     * @param string $SerialNumber 证书序列号。
     * @param string $Issuer 证书颁发者。
     * @param integer $Version 证书版本。
     * @param string $CertificateId 证书ID。
     * @param string $PublicKey PEM 格式的公钥证书（Base64 编码）。
     * @param string $SignatureAlgorithm 证书的签名算法。
     * @param string $NotAfter 证书的过期时间。
     * @param string $NotBefore 证书的创建时间。
     * @param string $Subject 证书的主体。
     * @param string $X509Certificate PEM 格式的 X509 证书。
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
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("SignatureAlgorithm",$param) and $param["SignatureAlgorithm"] !== null) {
            $this->SignatureAlgorithm = $param["SignatureAlgorithm"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("X509Certificate",$param) and $param["X509Certificate"] !== null) {
            $this->X509Certificate = $param["X509Certificate"];
        }
    }
}
