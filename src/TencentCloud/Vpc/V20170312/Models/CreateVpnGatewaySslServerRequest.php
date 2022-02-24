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
 * @method string getVpnGatewayId() 获取VPN实例ID
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN实例ID
 * @method string getSslVpnServerName() 获取SSL_VPN_SERVER 实例名
 * @method void setSslVpnServerName(string $SslVpnServerName) 设置SSL_VPN_SERVER 实例名
 * @method array getLocalAddress() 获取本端地址网段
 * @method void setLocalAddress(array $LocalAddress) 设置本端地址网段
 * @method string getRemoteAddress() 获取客户端地址网段
 * @method void setRemoteAddress(string $RemoteAddress) 设置客户端地址网段
 * @method string getSslVpnProtocol() 获取SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP
 * @method void setSslVpnProtocol(string $SslVpnProtocol) 设置SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP
 * @method integer getSslVpnPort() 获取SSL VPN服务端监听协议端口。默认1194。
 * @method void setSslVpnPort(integer $SslVpnPort) 设置SSL VPN服务端监听协议端口。默认1194。
 * @method string getIntegrityAlgorithm() 获取认证算法。可选 'SHA1', 'MD5', 'NONE'。默认NONE
 * @method void setIntegrityAlgorithm(string $IntegrityAlgorithm) 设置认证算法。可选 'SHA1', 'MD5', 'NONE'。默认NONE
 * @method string getEncryptAlgorithm() 获取加密算法。可选 'AES-128-CBC', 'AES-192-CBC', 'AES-256-CBC', 'NONE'。默认NONE
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置加密算法。可选 'AES-128-CBC', 'AES-192-CBC', 'AES-256-CBC', 'NONE'。默认NONE
 * @method boolean getCompress() 获取是否支持压缩。当前仅支持不支持压缩。默认False
 * @method void setCompress(boolean $Compress) 设置是否支持压缩。当前仅支持不支持压缩。默认False
 */
class CreateVpnGatewaySslServerRequest extends AbstractModel
{
    /**
     * @var string VPN实例ID
     */
    public $VpnGatewayId;

    /**
     * @var string SSL_VPN_SERVER 实例名
     */
    public $SslVpnServerName;

    /**
     * @var array 本端地址网段
     */
    public $LocalAddress;

    /**
     * @var string 客户端地址网段
     */
    public $RemoteAddress;

    /**
     * @var string SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP
     */
    public $SslVpnProtocol;

    /**
     * @var integer SSL VPN服务端监听协议端口。默认1194。
     */
    public $SslVpnPort;

    /**
     * @var string 认证算法。可选 'SHA1', 'MD5', 'NONE'。默认NONE
     */
    public $IntegrityAlgorithm;

    /**
     * @var string 加密算法。可选 'AES-128-CBC', 'AES-192-CBC', 'AES-256-CBC', 'NONE'。默认NONE
     */
    public $EncryptAlgorithm;

    /**
     * @var boolean 是否支持压缩。当前仅支持不支持压缩。默认False
     */
    public $Compress;

    /**
     * @param string $VpnGatewayId VPN实例ID
     * @param string $SslVpnServerName SSL_VPN_SERVER 实例名
     * @param array $LocalAddress 本端地址网段
     * @param string $RemoteAddress 客户端地址网段
     * @param string $SslVpnProtocol SSL VPN服务端监听协议。当前仅支持 UDP。默认UDP
     * @param integer $SslVpnPort SSL VPN服务端监听协议端口。默认1194。
     * @param string $IntegrityAlgorithm 认证算法。可选 'SHA1', 'MD5', 'NONE'。默认NONE
     * @param string $EncryptAlgorithm 加密算法。可选 'AES-128-CBC', 'AES-192-CBC', 'AES-256-CBC', 'NONE'。默认NONE
     * @param boolean $Compress 是否支持压缩。当前仅支持不支持压缩。默认False
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

        if (array_key_exists("IntegrityAlgorithm",$param) and $param["IntegrityAlgorithm"] !== null) {
            $this->IntegrityAlgorithm = $param["IntegrityAlgorithm"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }
    }
}
