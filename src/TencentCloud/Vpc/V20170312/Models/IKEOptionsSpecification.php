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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议
 *
 * @method string getPropoEncryAlgorithm() 获取<p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;，&#39;SM4&#39;, 默认为3DES-CBC</p>
 * @method void setPropoEncryAlgorithm(string $PropoEncryAlgorithm) 设置<p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;，&#39;SM4&#39;, 默认为3DES-CBC</p>
 * @method string getPropoAuthenAlgorithm() 获取<p>认证算法：可选值：&#39;MD5&#39;，&#39;SHA&#39;，&#39;SHA-256&#39;，&#39;SHA-512&#39;， 默认为SHA。</p>
 * @method void setPropoAuthenAlgorithm(string $PropoAuthenAlgorithm) 设置<p>认证算法：可选值：&#39;MD5&#39;，&#39;SHA&#39;，&#39;SHA-256&#39;，&#39;SHA-512&#39;， 默认为SHA。</p>
 * @method string getExchangeMode() 获取<p>协商模式：可选值：&#39;AGGRESSIVE&#39;， &#39;MAIN&#39;，默认为MAIN。</p>
 * @method void setExchangeMode(string $ExchangeMode) 设置<p>协商模式：可选值：&#39;AGGRESSIVE&#39;， &#39;MAIN&#39;，默认为MAIN。</p>
 * @method string getLocalIdentity() 获取<p>本端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
 * @method void setLocalIdentity(string $LocalIdentity) 设置<p>本端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
 * @method string getRemoteIdentity() 获取<p>对端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
 * @method void setRemoteIdentity(string $RemoteIdentity) 设置<p>对端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
 * @method string getLocalAddress() 获取<p>本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP</p>
 * @method void setLocalAddress(string $LocalAddress) 设置<p>本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP</p>
 * @method string getRemoteAddress() 获取<p>对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填</p>
 * @method void setRemoteAddress(string $RemoteAddress) 设置<p>对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填</p>
 * @method string getLocalFqdnName() 获取<p>本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填</p>
 * @method void setLocalFqdnName(string $LocalFqdnName) 设置<p>本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填</p>
 * @method string getRemoteFqdnName() 获取<p>对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填</p>
 * @method void setRemoteFqdnName(string $RemoteFqdnName) 设置<p>对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填</p>
 * @method string getDhGroupName() 获取<p>DH group，指定IKE交换密钥时使用的DH组，可选值：&#39;GROUP1&#39;, &#39;GROUP2&#39;, &#39;GROUP5&#39;, &#39;GROUP14&#39;, &#39;GROUP15&#39;, &#39;GROUP16&#39;, &#39;GROUP19&#39;, &#39;GROUP20&#39;, &#39;GROUP21&#39;, &#39;GROUP24&#39;，默认是GROUP1。</p>
 * @method void setDhGroupName(string $DhGroupName) 设置<p>DH group，指定IKE交换密钥时使用的DH组，可选值：&#39;GROUP1&#39;, &#39;GROUP2&#39;, &#39;GROUP5&#39;, &#39;GROUP14&#39;, &#39;GROUP15&#39;, &#39;GROUP16&#39;, &#39;GROUP19&#39;, &#39;GROUP20&#39;, &#39;GROUP21&#39;, &#39;GROUP24&#39;，默认是GROUP1。</p>
 * @method integer getIKESaLifetimeSeconds() 获取<p>IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800</p>
 * @method void setIKESaLifetimeSeconds(integer $IKESaLifetimeSeconds) 设置<p>IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800</p>
 * @method string getIKEVersion() 获取<p>IKE版本</p>
 * @method void setIKEVersion(string $IKEVersion) 设置<p>IKE版本</p>
 */
class IKEOptionsSpecification extends AbstractModel
{
    /**
     * @var string <p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;，&#39;SM4&#39;, 默认为3DES-CBC</p>
     */
    public $PropoEncryAlgorithm;

    /**
     * @var string <p>认证算法：可选值：&#39;MD5&#39;，&#39;SHA&#39;，&#39;SHA-256&#39;，&#39;SHA-512&#39;， 默认为SHA。</p>
     */
    public $PropoAuthenAlgorithm;

    /**
     * @var string <p>协商模式：可选值：&#39;AGGRESSIVE&#39;， &#39;MAIN&#39;，默认为MAIN。</p>
     */
    public $ExchangeMode;

    /**
     * @var string <p>本端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
     */
    public $LocalIdentity;

    /**
     * @var string <p>对端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
     */
    public $RemoteIdentity;

    /**
     * @var string <p>本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP</p>
     */
    public $LocalAddress;

    /**
     * @var string <p>对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填</p>
     */
    public $RemoteAddress;

    /**
     * @var string <p>本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填</p>
     */
    public $LocalFqdnName;

    /**
     * @var string <p>对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填</p>
     */
    public $RemoteFqdnName;

    /**
     * @var string <p>DH group，指定IKE交换密钥时使用的DH组，可选值：&#39;GROUP1&#39;, &#39;GROUP2&#39;, &#39;GROUP5&#39;, &#39;GROUP14&#39;, &#39;GROUP15&#39;, &#39;GROUP16&#39;, &#39;GROUP19&#39;, &#39;GROUP20&#39;, &#39;GROUP21&#39;, &#39;GROUP24&#39;，默认是GROUP1。</p>
     */
    public $DhGroupName;

    /**
     * @var integer <p>IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800</p>
     */
    public $IKESaLifetimeSeconds;

    /**
     * @var string <p>IKE版本</p>
     */
    public $IKEVersion;

    /**
     * @param string $PropoEncryAlgorithm <p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;，&#39;SM4&#39;, 默认为3DES-CBC</p>
     * @param string $PropoAuthenAlgorithm <p>认证算法：可选值：&#39;MD5&#39;，&#39;SHA&#39;，&#39;SHA-256&#39;，&#39;SHA-512&#39;， 默认为SHA。</p>
     * @param string $ExchangeMode <p>协商模式：可选值：&#39;AGGRESSIVE&#39;， &#39;MAIN&#39;，默认为MAIN。</p>
     * @param string $LocalIdentity <p>本端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
     * @param string $RemoteIdentity <p>对端标识类型：可选值：&#39;ADDRESS&#39;, &#39;FQDN&#39;，默认为ADDRESS</p>
     * @param string $LocalAddress <p>本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP</p>
     * @param string $RemoteAddress <p>对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填</p>
     * @param string $LocalFqdnName <p>本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填</p>
     * @param string $RemoteFqdnName <p>对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填</p>
     * @param string $DhGroupName <p>DH group，指定IKE交换密钥时使用的DH组，可选值：&#39;GROUP1&#39;, &#39;GROUP2&#39;, &#39;GROUP5&#39;, &#39;GROUP14&#39;, &#39;GROUP15&#39;, &#39;GROUP16&#39;, &#39;GROUP19&#39;, &#39;GROUP20&#39;, &#39;GROUP21&#39;, &#39;GROUP24&#39;，默认是GROUP1。</p>
     * @param integer $IKESaLifetimeSeconds <p>IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800</p>
     * @param string $IKEVersion <p>IKE版本</p>
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
        if (array_key_exists("PropoEncryAlgorithm",$param) and $param["PropoEncryAlgorithm"] !== null) {
            $this->PropoEncryAlgorithm = $param["PropoEncryAlgorithm"];
        }

        if (array_key_exists("PropoAuthenAlgorithm",$param) and $param["PropoAuthenAlgorithm"] !== null) {
            $this->PropoAuthenAlgorithm = $param["PropoAuthenAlgorithm"];
        }

        if (array_key_exists("ExchangeMode",$param) and $param["ExchangeMode"] !== null) {
            $this->ExchangeMode = $param["ExchangeMode"];
        }

        if (array_key_exists("LocalIdentity",$param) and $param["LocalIdentity"] !== null) {
            $this->LocalIdentity = $param["LocalIdentity"];
        }

        if (array_key_exists("RemoteIdentity",$param) and $param["RemoteIdentity"] !== null) {
            $this->RemoteIdentity = $param["RemoteIdentity"];
        }

        if (array_key_exists("LocalAddress",$param) and $param["LocalAddress"] !== null) {
            $this->LocalAddress = $param["LocalAddress"];
        }

        if (array_key_exists("RemoteAddress",$param) and $param["RemoteAddress"] !== null) {
            $this->RemoteAddress = $param["RemoteAddress"];
        }

        if (array_key_exists("LocalFqdnName",$param) and $param["LocalFqdnName"] !== null) {
            $this->LocalFqdnName = $param["LocalFqdnName"];
        }

        if (array_key_exists("RemoteFqdnName",$param) and $param["RemoteFqdnName"] !== null) {
            $this->RemoteFqdnName = $param["RemoteFqdnName"];
        }

        if (array_key_exists("DhGroupName",$param) and $param["DhGroupName"] !== null) {
            $this->DhGroupName = $param["DhGroupName"];
        }

        if (array_key_exists("IKESaLifetimeSeconds",$param) and $param["IKESaLifetimeSeconds"] !== null) {
            $this->IKESaLifetimeSeconds = $param["IKESaLifetimeSeconds"];
        }

        if (array_key_exists("IKEVersion",$param) and $param["IKEVersion"] !== null) {
            $this->IKEVersion = $param["IKEVersion"];
        }
    }
}
