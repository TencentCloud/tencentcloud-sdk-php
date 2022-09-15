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
 * SSL-VPN-SERVER 信息 SET
 *
 * @method string getVpcId() 获取VPC实例ID.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID.
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSslVpnServerId() 获取SSL-VPN-SERVER 实例ID。
 * @method void setSslVpnServerId(string $SslVpnServerId) 设置SSL-VPN-SERVER 实例ID。
 * @method string getVpnGatewayId() 获取VPN 实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN 实例ID。
 * @method string getSslVpnServerName() 获取SSL-VPN-SERVER name。
 * @method void setSslVpnServerName(string $SslVpnServerName) 设置SSL-VPN-SERVER name。
 * @method array getLocalAddress() 获取本端地址段。
 * @method void setLocalAddress(array $LocalAddress) 设置本端地址段。
 * @method string getRemoteAddress() 获取客户端地址段。
 * @method void setRemoteAddress(string $RemoteAddress) 设置客户端地址段。
 * @method integer getMaxConnection() 获取客户端最大连接数。
 * @method void setMaxConnection(integer $MaxConnection) 设置客户端最大连接数。
 * @method string getWanIp() 获取SSL-VPN 网关公网IP。
 * @method void setWanIp(string $WanIp) 设置SSL-VPN 网关公网IP。
 * @method string getSslVpnProtocol() 获取SSL VPN服务端监听协议
 * @method void setSslVpnProtocol(string $SslVpnProtocol) 设置SSL VPN服务端监听协议
 * @method integer getSslVpnPort() 获取SSL VPN服务端监听协议端口
 * @method void setSslVpnPort(integer $SslVpnPort) 设置SSL VPN服务端监听协议端口
 * @method string getEncryptAlgorithm() 获取加密算法。
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置加密算法。
 * @method string getIntegrityAlgorithm() 获取认证算法。
 * @method void setIntegrityAlgorithm(string $IntegrityAlgorithm) 设置认证算法。
 * @method integer getCompress() 获取是否支持压缩。
 * @method void setCompress(integer $Compress) 设置是否支持压缩。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getState() 获取SSL-VPN-SERVER 创建状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
 * @method void setState(integer $State) 设置SSL-VPN-SERVER 创建状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
 * @method integer getSsoEnabled() 获取是否开启SSO认证。1：开启  0： 不开启
 * @method void setSsoEnabled(integer $SsoEnabled) 设置是否开启SSO认证。1：开启  0： 不开启
 * @method string getEiamApplicationId() 获取EIAM应用ID
 * @method void setEiamApplicationId(string $EiamApplicationId) 设置EIAM应用ID
 * @method integer getAccessPolicyEnabled() 获取是否开启策略控制。0：不开启 1： 开启
 * @method void setAccessPolicyEnabled(integer $AccessPolicyEnabled) 设置是否开启策略控制。0：不开启 1： 开启
 * @method array getAccessPolicy() 获取策略信息
 * @method void setAccessPolicy(array $AccessPolicy) 设置策略信息
 */
class SslVpnSever extends AbstractModel
{
    /**
     * @var string VPC实例ID.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string SSL-VPN-SERVER 实例ID。
     */
    public $SslVpnServerId;

    /**
     * @var string VPN 实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string SSL-VPN-SERVER name。
     */
    public $SslVpnServerName;

    /**
     * @var array 本端地址段。
     */
    public $LocalAddress;

    /**
     * @var string 客户端地址段。
     */
    public $RemoteAddress;

    /**
     * @var integer 客户端最大连接数。
     */
    public $MaxConnection;

    /**
     * @var string SSL-VPN 网关公网IP。
     */
    public $WanIp;

    /**
     * @var string SSL VPN服务端监听协议
     */
    public $SslVpnProtocol;

    /**
     * @var integer SSL VPN服务端监听协议端口
     */
    public $SslVpnPort;

    /**
     * @var string 加密算法。
     */
    public $EncryptAlgorithm;

    /**
     * @var string 认证算法。
     */
    public $IntegrityAlgorithm;

    /**
     * @var integer 是否支持压缩。
     */
    public $Compress;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer SSL-VPN-SERVER 创建状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
     */
    public $State;

    /**
     * @var integer 是否开启SSO认证。1：开启  0： 不开启
     */
    public $SsoEnabled;

    /**
     * @var string EIAM应用ID
     */
    public $EiamApplicationId;

    /**
     * @var integer 是否开启策略控制。0：不开启 1： 开启
     */
    public $AccessPolicyEnabled;

    /**
     * @var array 策略信息
     */
    public $AccessPolicy;

    /**
     * @param string $VpcId VPC实例ID.
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SslVpnServerId SSL-VPN-SERVER 实例ID。
     * @param string $VpnGatewayId VPN 实例ID。
     * @param string $SslVpnServerName SSL-VPN-SERVER name。
     * @param array $LocalAddress 本端地址段。
     * @param string $RemoteAddress 客户端地址段。
     * @param integer $MaxConnection 客户端最大连接数。
     * @param string $WanIp SSL-VPN 网关公网IP。
     * @param string $SslVpnProtocol SSL VPN服务端监听协议
     * @param integer $SslVpnPort SSL VPN服务端监听协议端口
     * @param string $EncryptAlgorithm 加密算法。
     * @param string $IntegrityAlgorithm 认证算法。
     * @param integer $Compress 是否支持压缩。
     * @param string $CreateTime 创建时间。
     * @param integer $State SSL-VPN-SERVER 创建状态。
0 创建中
1 创建出错
2 更新中
3 更新出错
4 销毁中
5 销毁出粗
6 已连通
7 未知
     * @param integer $SsoEnabled 是否开启SSO认证。1：开启  0： 不开启
     * @param string $EiamApplicationId EIAM应用ID
     * @param integer $AccessPolicyEnabled 是否开启策略控制。0：不开启 1： 开启
     * @param array $AccessPolicy 策略信息
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SslVpnServerId",$param) and $param["SslVpnServerId"] !== null) {
            $this->SslVpnServerId = $param["SslVpnServerId"];
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

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SsoEnabled",$param) and $param["SsoEnabled"] !== null) {
            $this->SsoEnabled = $param["SsoEnabled"];
        }

        if (array_key_exists("EiamApplicationId",$param) and $param["EiamApplicationId"] !== null) {
            $this->EiamApplicationId = $param["EiamApplicationId"];
        }

        if (array_key_exists("AccessPolicyEnabled",$param) and $param["AccessPolicyEnabled"] !== null) {
            $this->AccessPolicyEnabled = $param["AccessPolicyEnabled"];
        }

        if (array_key_exists("AccessPolicy",$param) and $param["AccessPolicy"] !== null) {
            $this->AccessPolicy = [];
            foreach ($param["AccessPolicy"] as $key => $value){
                $obj = new AccessPolicy();
                $obj->deserialize($value);
                array_push($this->AccessPolicy, $obj);
            }
        }
    }
}
