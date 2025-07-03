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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpnGatewaySslServer请求参数结构体
 *
 * @method string getVpnGatewayId() 获取VPN网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID。
 * @method string getSslVpnServerName() 获取SSL-VPN-SERVER 实例名称，长度不超过60个字节。
 * @method void setSslVpnServerName(string $SslVpnServerName) 设置SSL-VPN-SERVER 实例名称，长度不超过60个字节。
 * @method string getRemoteAddress() 获取客户端地址网段。
 * @method void setRemoteAddress(string $RemoteAddress) 设置客户端地址网段。
 * @method array getLocalAddress() 获取云端地址（CIDR）列表。
 * @method void setLocalAddress(array $LocalAddress) 设置云端地址（CIDR）列表。
 * @method string getSslVpnProtocol() 获取SSL VPN服务端监听协议。当前仅支持 UDP，默认UDP。
 * @method void setSslVpnProtocol(string $SslVpnProtocol) 设置SSL VPN服务端监听协议。当前仅支持 UDP，默认UDP。
 * @method integer getSslVpnPort() 获取SSL VPN服务端监听协议端口，默认1194。
 * @method void setSslVpnPort(integer $SslVpnPort) 设置SSL VPN服务端监听协议端口，默认1194。
 * @method string getIntegrityAlgorithm() 获取认证算法。可选 'SHA1'，默认SHA1。
 * @method void setIntegrityAlgorithm(string $IntegrityAlgorithm) 设置认证算法。可选 'SHA1'，默认SHA1。
 * @method string getEncryptAlgorithm() 获取加密算法。可选 'AES-128-CBC','AES-192-CBC', 'AES-256-CBC', 默认AES-128-CBC。
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置加密算法。可选 'AES-128-CBC','AES-192-CBC', 'AES-256-CBC', 默认AES-128-CBC。
 * @method boolean getCompress() 获取是否支持压缩。当前不支持压缩，默认False。
 * @method void setCompress(boolean $Compress) 设置是否支持压缩。当前不支持压缩，默认False。
 * @method boolean getSsoEnabled() 获取是否开启SSO认证。默认为False。该功能当前需要申请开白使用。
 * @method void setSsoEnabled(boolean $SsoEnabled) 设置是否开启SSO认证。默认为False。该功能当前需要申请开白使用。
 * @method boolean getAccessPolicyEnabled() 获取是否开启策略访问控制。默认为False
 * @method void setAccessPolicyEnabled(boolean $AccessPolicyEnabled) 设置是否开启策略访问控制。默认为False
 * @method string getSamlData() 获取SAML-DATA，开启SSO时传。
 * @method void setSamlData(string $SamlData) 设置SAML-DATA，开启SSO时传。
 * @method array getTags() 获取指定绑定的标签列表
 * @method void setTags(array $Tags) 设置指定绑定的标签列表
 */
class CreateVpnGatewaySslServerRequest extends AbstractModel
{
    /**
     * @var string VPN网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string SSL-VPN-SERVER 实例名称，长度不超过60个字节。
     */
    public $SslVpnServerName;

    /**
     * @var string 客户端地址网段。
     */
    public $RemoteAddress;

    /**
     * @var array 云端地址（CIDR）列表。
     */
    public $LocalAddress;

    /**
     * @var string SSL VPN服务端监听协议。当前仅支持 UDP，默认UDP。
     */
    public $SslVpnProtocol;

    /**
     * @var integer SSL VPN服务端监听协议端口，默认1194。
     */
    public $SslVpnPort;

    /**
     * @var string 认证算法。可选 'SHA1'，默认SHA1。
     */
    public $IntegrityAlgorithm;

    /**
     * @var string 加密算法。可选 'AES-128-CBC','AES-192-CBC', 'AES-256-CBC', 默认AES-128-CBC。
     */
    public $EncryptAlgorithm;

    /**
     * @var boolean 是否支持压缩。当前不支持压缩，默认False。
     */
    public $Compress;

    /**
     * @var boolean 是否开启SSO认证。默认为False。该功能当前需要申请开白使用。
     */
    public $SsoEnabled;

    /**
     * @var boolean 是否开启策略访问控制。默认为False
     */
    public $AccessPolicyEnabled;

    /**
     * @var string SAML-DATA，开启SSO时传。
     */
    public $SamlData;

    /**
     * @var array 指定绑定的标签列表
     */
    public $Tags;

    /**
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param string $SslVpnServerName SSL-VPN-SERVER 实例名称，长度不超过60个字节。
     * @param string $RemoteAddress 客户端地址网段。
     * @param array $LocalAddress 云端地址（CIDR）列表。
     * @param string $SslVpnProtocol SSL VPN服务端监听协议。当前仅支持 UDP，默认UDP。
     * @param integer $SslVpnPort SSL VPN服务端监听协议端口，默认1194。
     * @param string $IntegrityAlgorithm 认证算法。可选 'SHA1'，默认SHA1。
     * @param string $EncryptAlgorithm 加密算法。可选 'AES-128-CBC','AES-192-CBC', 'AES-256-CBC', 默认AES-128-CBC。
     * @param boolean $Compress 是否支持压缩。当前不支持压缩，默认False。
     * @param boolean $SsoEnabled 是否开启SSO认证。默认为False。该功能当前需要申请开白使用。
     * @param boolean $AccessPolicyEnabled 是否开启策略访问控制。默认为False
     * @param string $SamlData SAML-DATA，开启SSO时传。
     * @param array $Tags 指定绑定的标签列表
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("SslVpnServerName",$param) and $param["SslVpnServerName"] !== null) {
            $this->SslVpnServerName = $param["SslVpnServerName"];
        }

        if (array_key_exists("RemoteAddress",$param) and $param["RemoteAddress"] !== null) {
            $this->RemoteAddress = $param["RemoteAddress"];
        }

        if (array_key_exists("LocalAddress",$param) and $param["LocalAddress"] !== null) {
            $this->LocalAddress = $param["LocalAddress"];
        }

        if (array_key_exists("SslVpnProtocol",$param) and $param["SslVpnProtocol"] !== null) {
            $this->SslVpnProtocol = $param["SslVpnProtocol"];
        }

        if (array_key_exists("SslVpnPort",$param) and $param["SslVpnPort"] !== null) {
            $this->SslVpnPort = $param["SslVpnPort"];
        }

        if (array_key_exists("IntegrityAlgorithm",$param) and $param["IntegrityAlgorithm"] !== null) {
            $this->IntegrityAlgorithm = $param["IntegrityAlgorithm"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("SsoEnabled",$param) and $param["SsoEnabled"] !== null) {
            $this->SsoEnabled = $param["SsoEnabled"];
        }

        if (array_key_exists("AccessPolicyEnabled",$param) and $param["AccessPolicyEnabled"] !== null) {
            $this->AccessPolicyEnabled = $param["AccessPolicyEnabled"];
        }

        if (array_key_exists("SamlData",$param) and $param["SamlData"] !== null) {
            $this->SamlData = $param["SamlData"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
