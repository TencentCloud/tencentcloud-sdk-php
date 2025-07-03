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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDE透明数据加密配置
 *
 * @method string getEncryption() 获取是否已开通TDE加密，enable-已开通，disable-未开通
 * @method void setEncryption(string $Encryption) 设置是否已开通TDE加密，enable-已开通，disable-未开通
 * @method string getCertificateAttribution() 获取证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，none-表示没有证书
 * @method void setCertificateAttribution(string $CertificateAttribution) 设置证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，none-表示没有证书
 * @method string getQuoteUin() 获取开通TDE加密时引用的其他主账号ID
 * @method void setQuoteUin(string $QuoteUin) 设置开通TDE加密时引用的其他主账号ID
 * @method string getCMKId() 获取KMS中购买的用户主密钥ID（CMK）
 * @method void setCMKId(string $CMKId) 设置KMS中购买的用户主密钥ID（CMK）
 * @method string getCMKRegion() 获取CMK所属的地域，不同地域的CMK不互通
 * @method void setCMKRegion(string $CMKRegion) 设置CMK所属的地域，不同地域的CMK不互通
 */
class TDEConfigAttribute extends AbstractModel
{
    /**
     * @var string 是否已开通TDE加密，enable-已开通，disable-未开通
     */
    public $Encryption;

    /**
     * @var string 证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，none-表示没有证书
     */
    public $CertificateAttribution;

    /**
     * @var string 开通TDE加密时引用的其他主账号ID
     */
    public $QuoteUin;

    /**
     * @var string KMS中购买的用户主密钥ID（CMK）
     */
    public $CMKId;

    /**
     * @var string CMK所属的地域，不同地域的CMK不互通
     */
    public $CMKRegion;

    /**
     * @param string $Encryption 是否已开通TDE加密，enable-已开通，disable-未开通
     * @param string $CertificateAttribution 证书归属。self-表示使用该账号自身的证书，others-表示引用其他账号的证书，none-表示没有证书
     * @param string $QuoteUin 开通TDE加密时引用的其他主账号ID
     * @param string $CMKId KMS中购买的用户主密钥ID（CMK）
     * @param string $CMKRegion CMK所属的地域，不同地域的CMK不互通
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
        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("CertificateAttribution",$param) and $param["CertificateAttribution"] !== null) {
            $this->CertificateAttribution = $param["CertificateAttribution"];
        }

        if (array_key_exists("QuoteUin",$param) and $param["QuoteUin"] !== null) {
            $this->QuoteUin = $param["QuoteUin"];
        }

        if (array_key_exists("CMKId",$param) and $param["CMKId"] !== null) {
            $this->CMKId = $param["CMKId"];
        }

        if (array_key_exists("CMKRegion",$param) and $param["CMKRegion"] !== null) {
            $this->CMKRegion = $param["CMKRegion"];
        }
    }
}
