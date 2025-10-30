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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateVerifyResult请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getCertType() 获取证书类型，此参数和GmCertType不可同时为0。 0：不检测国际标准证书 1：证书来源为自有证书 2：证书来源为托管证书
 * @method void setCertType(integer $CertType) 设置证书类型，此参数和GmCertType不可同时为0。 0：不检测国际标准证书 1：证书来源为自有证书 2：证书来源为托管证书
 * @method string getCertificate() 获取CertType为1时，需要填充此参数，表示自有证书的证书链
 * @method void setCertificate(string $Certificate) 设置CertType为1时，需要填充此参数，表示自有证书的证书链
 * @method string getCertID() 获取CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method void setCertID(string $CertID) 设置CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method string getPrivateKey() 获取CertType为1时，需要填充此参数，表示自有证书的私钥
 * @method void setPrivateKey(string $PrivateKey) 设置CertType为1时，需要填充此参数，表示自有证书的私钥
 * @method integer getGmCertType() 获取国密证书类型，此参数和CertType不可同时为0。0：不检测国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
 * @method void setGmCertType(integer $GmCertType) 设置国密证书类型，此参数和CertType不可同时为0。0：不检测国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
 * @method string getGmCert() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
 * @method void setGmCert(string $GmCert) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
 * @method string getGmPrivateKey() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
 * @method void setGmPrivateKey(string $GmPrivateKey) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
 * @method string getGmEncCert() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
 * @method void setGmEncCert(string $GmEncCert) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
 * @method string getGmEncPrivateKey() 获取GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
 * @method void setGmEncPrivateKey(string $GmEncPrivateKey) 设置GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
 * @method string getGmSSLId() 获取GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method void setGmSSLId(string $GmSSLId) 设置GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 */
class DescribeCertificateVerifyResultRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 证书类型，此参数和GmCertType不可同时为0。 0：不检测国际标准证书 1：证书来源为自有证书 2：证书来源为托管证书
     */
    public $CertType;

    /**
     * @var string CertType为1时，需要填充此参数，表示自有证书的证书链
     */
    public $Certificate;

    /**
     * @var string CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     */
    public $CertID;

    /**
     * @var string CertType为1时，需要填充此参数，表示自有证书的私钥
     */
    public $PrivateKey;

    /**
     * @var integer 国密证书类型，此参数和CertType不可同时为0。0：不检测国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
     */
    public $GmCertType;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
     */
    public $GmCert;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
     */
    public $GmPrivateKey;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
     */
    public $GmEncCert;

    /**
     * @var string GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
     */
    public $GmEncPrivateKey;

    /**
     * @var string GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     */
    public $GmSSLId;

    /**
     * @param string $Domain 域名
     * @param integer $CertType 证书类型，此参数和GmCertType不可同时为0。 0：不检测国际标准证书 1：证书来源为自有证书 2：证书来源为托管证书
     * @param string $Certificate CertType为1时，需要填充此参数，表示自有证书的证书链
     * @param string $CertID CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     * @param string $PrivateKey CertType为1时，需要填充此参数，表示自有证书的私钥
     * @param integer $GmCertType 国密证书类型，此参数和CertType不可同时为0。0：不检测国密证书 1：证书来源为自有国密证书 2：证书来源为托管国密证书
     * @param string $GmCert GmCertType为1时，需要填充此参数，表示自有国密证书的证书链
     * @param string $GmPrivateKey GmCertType为1时，需要填充此参数，表示自有国密证书的私钥
     * @param string $GmEncCert GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书
     * @param string $GmEncPrivateKey GmCertType为1时，需要填充此参数，表示自有国密证书的加密证书的私钥
     * @param string $GmSSLId GmCertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("CertID",$param) and $param["CertID"] !== null) {
            $this->CertID = $param["CertID"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("GmCertType",$param) and $param["GmCertType"] !== null) {
            $this->GmCertType = $param["GmCertType"];
        }

        if (array_key_exists("GmCert",$param) and $param["GmCert"] !== null) {
            $this->GmCert = $param["GmCert"];
        }

        if (array_key_exists("GmPrivateKey",$param) and $param["GmPrivateKey"] !== null) {
            $this->GmPrivateKey = $param["GmPrivateKey"];
        }

        if (array_key_exists("GmEncCert",$param) and $param["GmEncCert"] !== null) {
            $this->GmEncCert = $param["GmEncCert"];
        }

        if (array_key_exists("GmEncPrivateKey",$param) and $param["GmEncPrivateKey"] !== null) {
            $this->GmEncPrivateKey = $param["GmEncPrivateKey"];
        }

        if (array_key_exists("GmSSLId",$param) and $param["GmSSLId"] !== null) {
            $this->GmSSLId = $param["GmSSLId"];
        }
    }
}
