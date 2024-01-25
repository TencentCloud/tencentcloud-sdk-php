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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateVerifyResult请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getCertType() 获取证书类型。 0：仅配置HTTP监听端口，没有证书 1：证书来源为自有证书 2：证书来源为托管证书
 * @method void setCertType(integer $CertType) 设置证书类型。 0：仅配置HTTP监听端口，没有证书 1：证书来源为自有证书 2：证书来源为托管证书
 * @method string getCertificate() 获取CertType为1时，需要填充此参数，表示自有证书的证书链
 * @method void setCertificate(string $Certificate) 设置CertType为1时，需要填充此参数，表示自有证书的证书链
 * @method string getCertID() 获取CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method void setCertID(string $CertID) 设置CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
 * @method string getPrivateKey() 获取CertType为1时，需要填充此参数，表示自有证书的私钥
 * @method void setPrivateKey(string $PrivateKey) 设置CertType为1时，需要填充此参数，表示自有证书的私钥
 */
class DescribeCertificateVerifyResultRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 证书类型。 0：仅配置HTTP监听端口，没有证书 1：证书来源为自有证书 2：证书来源为托管证书
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
     * @param string $Domain 域名
     * @param integer $CertType 证书类型。 0：仅配置HTTP监听端口，没有证书 1：证书来源为自有证书 2：证书来源为托管证书
     * @param string $Certificate CertType为1时，需要填充此参数，表示自有证书的证书链
     * @param string $CertID CertType为2时，需要填充此参数，表示腾讯云SSL平台托管的证书id
     * @param string $PrivateKey CertType为1时，需要填充此参数，表示自有证书的私钥
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
    }
}
