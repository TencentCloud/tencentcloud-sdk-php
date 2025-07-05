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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书基本信息
 *
 * @method string getIssuer() 获取颁发者
 * @method void setIssuer(string $Issuer) 设置颁发者
 * @method string getSubject() 获取颁发给
 * @method void setSubject(string $Subject) 设置颁发给
 * @method string getFingerprint() 获取证书指纹
 * @method void setFingerprint(string $Fingerprint) 设置证书指纹
 * @method string getValidFrom() 获取证书有效期开始时间
 * @method void setValidFrom(string $ValidFrom) 设置证书有效期开始时间
 * @method string getValidTo() 获取证书有效期结束时间
 * @method void setValidTo(string $ValidTo) 设置证书有效期结束时间
 */
class CertBasicInfo extends AbstractModel
{
    /**
     * @var string 颁发者
     */
    public $Issuer;

    /**
     * @var string 颁发给
     */
    public $Subject;

    /**
     * @var string 证书指纹
     */
    public $Fingerprint;

    /**
     * @var string 证书有效期开始时间
     */
    public $ValidFrom;

    /**
     * @var string 证书有效期结束时间
     */
    public $ValidTo;

    /**
     * @param string $Issuer 颁发者
     * @param string $Subject 颁发给
     * @param string $Fingerprint 证书指纹
     * @param string $ValidFrom 证书有效期开始时间
     * @param string $ValidTo 证书有效期结束时间
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
        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Fingerprint",$param) and $param["Fingerprint"] !== null) {
            $this->Fingerprint = $param["Fingerprint"];
        }

        if (array_key_exists("ValidFrom",$param) and $param["ValidFrom"] !== null) {
            $this->ValidFrom = $param["ValidFrom"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }
    }
}
