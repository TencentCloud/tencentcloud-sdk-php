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
 * ModifyVpnGatewaySslServer请求参数结构体
 *
 * @method string getSslVpnServerId() 获取<p>SSL-VPN SERVER 实例ID</p>
 * @method void setSslVpnServerId(string $SslVpnServerId) 设置<p>SSL-VPN SERVER 实例ID</p>
 * @method string getSslVpnServerName() 获取<p>SSL-VPN SERVER NAME</p>
 * @method void setSslVpnServerName(string $SslVpnServerName) 设置<p>SSL-VPN SERVER NAME</p>
 * @method array getLocalAddress() 获取<p>本端地址</p>
 * @method void setLocalAddress(array $LocalAddress) 设置<p>本端地址</p>
 * @method string getRemoteAddress() 获取<p>客户端地址</p>
 * @method void setRemoteAddress(string $RemoteAddress) 设置<p>客户端地址</p>
 * @method string getSslVpnProtocol() 获取<p>SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP</p>
 * @method void setSslVpnProtocol(string $SslVpnProtocol) 设置<p>SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP</p>
 * @method integer getSslVpnPort() 获取<p>SSL VPN服务端监听协议端口。</p>
 * @method void setSslVpnPort(integer $SslVpnPort) 设置<p>SSL VPN服务端监听协议端口。</p>
 * @method string getEncryptAlgorithm() 获取<p>加密算法。可选值 &#39;AES-128-CBC&#39;, &#39;AES-192-CBC&#39;, &#39;AES-256-CBC&#39;, &#39;AES-128-GCM&#39;, &#39;AES-192-GCM&#39;, &#39;AES-256-GCM&#39;, 默认AES-128-CBC。</p>
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置<p>加密算法。可选值 &#39;AES-128-CBC&#39;, &#39;AES-192-CBC&#39;, &#39;AES-256-CBC&#39;, &#39;AES-128-GCM&#39;, &#39;AES-192-GCM&#39;, &#39;AES-256-GCM&#39;, 默认AES-128-CBC。</p>
 * @method string getIntegrityAlgorithm() 获取<p>认证算法。可选 &#39;SHA1&#39;, &#39;MD5&#39;, &#39;SHA224&#39;, &#39;SHA256&#39;, &#39;SHA384&#39;, &#39;SHA512&#39;，默认SHA1。</p>
 * @method void setIntegrityAlgorithm(string $IntegrityAlgorithm) 设置<p>认证算法。可选 &#39;SHA1&#39;, &#39;MD5&#39;, &#39;SHA224&#39;, &#39;SHA256&#39;, &#39;SHA384&#39;, &#39;SHA512&#39;，默认SHA1。</p>
 * @method boolean getCompress() 获取<p>是否支持压缩。当前不支持压缩。默认False。</p>
 * @method void setCompress(boolean $Compress) 设置<p>是否支持压缩。当前不支持压缩。默认False。</p>
 * @method boolean getSsoEnabled() 获取<p>是否开启SSO认证。默认为False。该功能当前需要申请开白使用。</p>
 * @method void setSsoEnabled(boolean $SsoEnabled) 设置<p>是否开启SSO认证。默认为False。该功能当前需要申请开白使用。</p>
 * @method string getSamlData() 获取<p>SAML-DATA</p>
 * @method void setSamlData(string $SamlData) 设置<p>SAML-DATA</p>
 * @method DnsServers getDnsServers() 获取<p>DNS Server地址</p>
 * @method void setDnsServers(DnsServers $DnsServers) 设置<p>DNS Server地址</p>
 */
class ModifyVpnGatewaySslServerRequest extends AbstractModel
{
    /**
     * @var string <p>SSL-VPN SERVER 实例ID</p>
     */
    public $SslVpnServerId;

    /**
     * @var string <p>SSL-VPN SERVER NAME</p>
     */
    public $SslVpnServerName;

    /**
     * @var array <p>本端地址</p>
     */
    public $LocalAddress;

    /**
     * @var string <p>客户端地址</p>
     */
    public $RemoteAddress;

    /**
     * @var string <p>SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP</p>
     * @deprecated
     */
    public $SslVpnProtocol;

    /**
     * @var integer <p>SSL VPN服务端监听协议端口。</p>
     */
    public $SslVpnPort;

    /**
     * @var string <p>加密算法。可选值 &#39;AES-128-CBC&#39;, &#39;AES-192-CBC&#39;, &#39;AES-256-CBC&#39;, &#39;AES-128-GCM&#39;, &#39;AES-192-GCM&#39;, &#39;AES-256-GCM&#39;, 默认AES-128-CBC。</p>
     */
    public $EncryptAlgorithm;

    /**
     * @var string <p>认证算法。可选 &#39;SHA1&#39;, &#39;MD5&#39;, &#39;SHA224&#39;, &#39;SHA256&#39;, &#39;SHA384&#39;, &#39;SHA512&#39;，默认SHA1。</p>
     */
    public $IntegrityAlgorithm;

    /**
     * @var boolean <p>是否支持压缩。当前不支持压缩。默认False。</p>
     */
    public $Compress;

    /**
     * @var boolean <p>是否开启SSO认证。默认为False。该功能当前需要申请开白使用。</p>
     */
    public $SsoEnabled;

    /**
     * @var string <p>SAML-DATA</p>
     */
    public $SamlData;

    /**
     * @var DnsServers <p>DNS Server地址</p>
     */
    public $DnsServers;

    /**
     * @param string $SslVpnServerId <p>SSL-VPN SERVER 实例ID</p>
     * @param string $SslVpnServerName <p>SSL-VPN SERVER NAME</p>
     * @param array $LocalAddress <p>本端地址</p>
     * @param string $RemoteAddress <p>客户端地址</p>
     * @param string $SslVpnProtocol <p>SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP</p>
     * @param integer $SslVpnPort <p>SSL VPN服务端监听协议端口。</p>
     * @param string $EncryptAlgorithm <p>加密算法。可选值 &#39;AES-128-CBC&#39;, &#39;AES-192-CBC&#39;, &#39;AES-256-CBC&#39;, &#39;AES-128-GCM&#39;, &#39;AES-192-GCM&#39;, &#39;AES-256-GCM&#39;, 默认AES-128-CBC。</p>
     * @param string $IntegrityAlgorithm <p>认证算法。可选 &#39;SHA1&#39;, &#39;MD5&#39;, &#39;SHA224&#39;, &#39;SHA256&#39;, &#39;SHA384&#39;, &#39;SHA512&#39;，默认SHA1。</p>
     * @param boolean $Compress <p>是否支持压缩。当前不支持压缩。默认False。</p>
     * @param boolean $SsoEnabled <p>是否开启SSO认证。默认为False。该功能当前需要申请开白使用。</p>
     * @param string $SamlData <p>SAML-DATA</p>
     * @param DnsServers $DnsServers <p>DNS Server地址</p>
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
        if (array_key_exists("SslVpnServerId",$param) and $param["SslVpnServerId"] !== null) {
            $this->SslVpnServerId = $param["SslVpnServerId"];
        }

        if (array_key_exists("SslVpnServerName",$param) and $param["SslVpnServerName"] !== null) {
            $this->SslVpnServerName = $param["SslVpnServerName"];
        }

        if (array_key_exists("LocalAddress",$param) and $param["LocalAddress"] !== null) {
            $this->LocalAddress = $param["LocalAddress"];
        }

        if (array_key_exists("RemoteAddress",$param) and $param["RemoteAddress"] !== null) {
            $this->RemoteAddress = $param["RemoteAddress"];
        }

        if (array_key_exists("SslVpnProtocol",$param) and $param["SslVpnProtocol"] !== null) {
            $this->SslVpnProtocol = $param["SslVpnProtocol"];
        }

        if (array_key_exists("SslVpnPort",$param) and $param["SslVpnPort"] !== null) {
            $this->SslVpnPort = $param["SslVpnPort"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("IntegrityAlgorithm",$param) and $param["IntegrityAlgorithm"] !== null) {
            $this->IntegrityAlgorithm = $param["IntegrityAlgorithm"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("SsoEnabled",$param) and $param["SsoEnabled"] !== null) {
            $this->SsoEnabled = $param["SsoEnabled"];
        }

        if (array_key_exists("SamlData",$param) and $param["SamlData"] !== null) {
            $this->SamlData = $param["SamlData"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = new DnsServers();
            $this->DnsServers->deserialize($param["DnsServers"]);
        }
    }
}
