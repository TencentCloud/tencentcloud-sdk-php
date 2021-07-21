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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * X509证书信息
 *
 * @method string getCertName() 获取证书名称
 * @method void setCertName(string $CertName) 设置证书名称
 * @method string getCertSN() 获取证书的序列号，16进制编码
 * @method void setCertSN(string $CertSN) 设置证书的序列号，16进制编码
 * @method string getIssuerName() 获取证书颁发着名称
 * @method void setIssuerName(string $IssuerName) 设置证书颁发着名称
 * @method string getSubject() 获取证书主题
 * @method void setSubject(string $Subject) 设置证书主题
 * @method integer getCreateTime() 获取证书创建时间，秒级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置证书创建时间，秒级时间戳
 * @method integer getEffectiveTime() 获取证书生效时间，秒级时间戳
 * @method void setEffectiveTime(integer $EffectiveTime) 设置证书生效时间，秒级时间戳
 * @method integer getExpireTime() 获取证书失效时间，秒级时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置证书失效时间，秒级时间戳
 * @method string getCertText() 获取X509证书内容
 * @method void setCertText(string $CertText) 设置X509证书内容
 */
class CertInfo extends AbstractModel
{
    /**
     * @var string 证书名称
     */
    public $CertName;

    /**
     * @var string 证书的序列号，16进制编码
     */
    public $CertSN;

    /**
     * @var string 证书颁发着名称
     */
    public $IssuerName;

    /**
     * @var string 证书主题
     */
    public $Subject;

    /**
     * @var integer 证书创建时间，秒级时间戳
     */
    public $CreateTime;

    /**
     * @var integer 证书生效时间，秒级时间戳
     */
    public $EffectiveTime;

    /**
     * @var integer 证书失效时间，秒级时间戳
     */
    public $ExpireTime;

    /**
     * @var string X509证书内容
     */
    public $CertText;

    /**
     * @param string $CertName 证书名称
     * @param string $CertSN 证书的序列号，16进制编码
     * @param string $IssuerName 证书颁发着名称
     * @param string $Subject 证书主题
     * @param integer $CreateTime 证书创建时间，秒级时间戳
     * @param integer $EffectiveTime 证书生效时间，秒级时间戳
     * @param integer $ExpireTime 证书失效时间，秒级时间戳
     * @param string $CertText X509证书内容
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertSN",$param) and $param["CertSN"] !== null) {
            $this->CertSN = $param["CertSN"];
        }

        if (array_key_exists("IssuerName",$param) and $param["IssuerName"] !== null) {
            $this->IssuerName = $param["IssuerName"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CertText",$param) and $param["CertText"] !== null) {
            $this->CertText = $param["CertText"];
        }
    }
}
