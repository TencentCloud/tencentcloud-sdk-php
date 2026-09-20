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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka访问协议
 *
 * @method string getProtocol() 获取<p>协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证。</p><ul><li>当IsEncryptionAddr为true时，Protocol必填。</li><li>支持的协议类型如下：<ul><li>plaintext：纯文本无加密协议</li><li>sasl_ssl：SASL 认证 + SSL 加密</li><li>ssl：纯 SSL/TLS 加密协议</li><li>sasl_plaintext：SASL 认证 + 非加密通道</li></ul></li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证。</p><ul><li>当IsEncryptionAddr为true时，Protocol必填。</li><li>支持的协议类型如下：<ul><li>plaintext：纯文本无加密协议</li><li>sasl_ssl：SASL 认证 + SSL 加密</li><li>ssl：纯 SSL/TLS 加密协议</li><li>sasl_plaintext：SASL 认证 + 非加密通道</li></ul></li></ul>
 * @method string getMechanism() 获取<p>加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512。</p><ul><li>当Protocol为  <code>sasl_plaintext</code> 或 <code>sasl_ssl</code> 时 Mechanism 必填。</li><li>支持加密类型如下<ul><li>PLAIN：明文认证</li><li>SCRAM-SHA-256：基于挑战-响应机制，使用PBKDF2-HMAC-SHA256算法</li><li>SCRAM-SHA-512：增强版SCRAM，使用PBKDF2-HMAC-SHA512算法</li></ul></li></ul>
 * @method void setMechanism(string $Mechanism) 设置<p>加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512。</p><ul><li>当Protocol为  <code>sasl_plaintext</code> 或 <code>sasl_ssl</code> 时 Mechanism 必填。</li><li>支持加密类型如下<ul><li>PLAIN：明文认证</li><li>SCRAM-SHA-256：基于挑战-响应机制，使用PBKDF2-HMAC-SHA256算法</li><li>SCRAM-SHA-512：增强版SCRAM，使用PBKDF2-HMAC-SHA512算法</li></ul></li></ul>
 * @method string getUserName() 获取<p>用户名。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
 * @method void setUserName(string $UserName) 设置<p>用户名。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
 * @method string getPassword() 获取<p>用户密码。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
 * @method void setPassword(string $Password) 设置<p>用户密码。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
 * @method integer getEnableClientCertificate() 获取<p>是否开启客户端证书验证</p>
 * @method void setEnableClientCertificate(integer $EnableClientCertificate) 设置<p>是否开启客户端证书验证</p>
 * @method integer getEnableServerCertificate() 获取<p>是否开启服务端证书验证</p>
 * @method void setEnableServerCertificate(integer $EnableServerCertificate) 设置<p>是否开启服务端证书验证</p>
 * @method string getCACertificateId() 获取<p>云托管CA证书id</p>
 * @method void setCACertificateId(string $CACertificateId) 设置<p>云托管CA证书id</p>
 * @method string getSVRCertificateId() 获取<p>云托管服务端证书id</p>
 * @method void setSVRCertificateId(string $SVRCertificateId) 设置<p>云托管服务端证书id</p>
 */
class KafkaProtocolInfo extends AbstractModel
{
    /**
     * @var string <p>协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证。</p><ul><li>当IsEncryptionAddr为true时，Protocol必填。</li><li>支持的协议类型如下：<ul><li>plaintext：纯文本无加密协议</li><li>sasl_ssl：SASL 认证 + SSL 加密</li><li>ssl：纯 SSL/TLS 加密协议</li><li>sasl_plaintext：SASL 认证 + 非加密通道</li></ul></li></ul>
     */
    public $Protocol;

    /**
     * @var string <p>加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512。</p><ul><li>当Protocol为  <code>sasl_plaintext</code> 或 <code>sasl_ssl</code> 时 Mechanism 必填。</li><li>支持加密类型如下<ul><li>PLAIN：明文认证</li><li>SCRAM-SHA-256：基于挑战-响应机制，使用PBKDF2-HMAC-SHA256算法</li><li>SCRAM-SHA-512：增强版SCRAM，使用PBKDF2-HMAC-SHA512算法</li></ul></li></ul>
     */
    public $Mechanism;

    /**
     * @var string <p>用户名。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
     */
    public $UserName;

    /**
     * @var string <p>用户密码。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
     */
    public $Password;

    /**
     * @var integer <p>是否开启客户端证书验证</p>
     */
    public $EnableClientCertificate;

    /**
     * @var integer <p>是否开启服务端证书验证</p>
     */
    public $EnableServerCertificate;

    /**
     * @var string <p>云托管CA证书id</p>
     */
    public $CACertificateId;

    /**
     * @var string <p>云托管服务端证书id</p>
     */
    public $SVRCertificateId;

    /**
     * @param string $Protocol <p>协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证。</p><ul><li>当IsEncryptionAddr为true时，Protocol必填。</li><li>支持的协议类型如下：<ul><li>plaintext：纯文本无加密协议</li><li>sasl_ssl：SASL 认证 + SSL 加密</li><li>ssl：纯 SSL/TLS 加密协议</li><li>sasl_plaintext：SASL 认证 + 非加密通道</li></ul></li></ul>
     * @param string $Mechanism <p>加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512。</p><ul><li>当Protocol为  <code>sasl_plaintext</code> 或 <code>sasl_ssl</code> 时 Mechanism 必填。</li><li>支持加密类型如下<ul><li>PLAIN：明文认证</li><li>SCRAM-SHA-256：基于挑战-响应机制，使用PBKDF2-HMAC-SHA256算法</li><li>SCRAM-SHA-512：增强版SCRAM，使用PBKDF2-HMAC-SHA512算法</li></ul></li></ul>
     * @param string $UserName <p>用户名。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
     * @param string $Password <p>用户密码。<br>当Protocol为sasl_plaintext或sasl_ssl时必填</p>
     * @param integer $EnableClientCertificate <p>是否开启客户端证书验证</p>
     * @param integer $EnableServerCertificate <p>是否开启服务端证书验证</p>
     * @param string $CACertificateId <p>云托管CA证书id</p>
     * @param string $SVRCertificateId <p>云托管服务端证书id</p>
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Mechanism",$param) and $param["Mechanism"] !== null) {
            $this->Mechanism = $param["Mechanism"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EnableClientCertificate",$param) and $param["EnableClientCertificate"] !== null) {
            $this->EnableClientCertificate = $param["EnableClientCertificate"];
        }

        if (array_key_exists("EnableServerCertificate",$param) and $param["EnableServerCertificate"] !== null) {
            $this->EnableServerCertificate = $param["EnableServerCertificate"];
        }

        if (array_key_exists("CACertificateId",$param) and $param["CACertificateId"] !== null) {
            $this->CACertificateId = $param["CACertificateId"];
        }

        if (array_key_exists("SVRCertificateId",$param) and $param["SVRCertificateId"] !== null) {
            $this->SVRCertificateId = $param["SVRCertificateId"];
        }
    }
}
