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
 * @method string getIpProtocol() 获取网络协议，可选值：`TCP`、`UDP`。
 * @method void setIpProtocol(string $IpProtocol) 设置网络协议，可选值：`TCP`、`UDP`。
 * @method string getPublicIpAddress() 获取弹性IP。
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置弹性IP。
 * @method integer getPublicPort() 获取公网端口。
 * @method void setPublicPort(integer $PublicPort) 设置公网端口。
 * @method string getPrivateIpAddress() 获取内网地址。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置内网地址。
 * @method integer getPrivatePort() 获取内网端口。
 * @method void setPrivatePort(integer $PrivatePort) 设置内网端口。
 * @method string getDescription() 获取NAT网关转发规则描述。
 * @method void setDescription(string $Description) 设置NAT网关转发规则描述。
 * @method string getNatGatewayId() 获取NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取NAT网关转发规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置NAT网关转发规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *NAT网关的端口转发规则
 */
class NatGatewayDestinationIpPortTranslationNatRule extends AbstractModel
{
    /**
     * @var string 网络协议，可选值：`TCP`、`UDP`。
     */
    public $IpProtocol;

    /**
     * @var string 弹性IP。
     */
    public $PublicIpAddress;

    /**
     * @var integer 公网端口。
     */
    public $PublicPort;

    /**
     * @var string 内网地址。
     */
    public $PrivateIpAddress;

    /**
     * @var integer 内网端口。
     */
    public $PrivatePort;

    /**
     * @var string NAT网关转发规则描述。
     */
    public $Description;

    /**
     * @var string NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatGatewayId;

    /**
     * @var string 私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string NAT网关转发规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;
    /**
     * @param string $IpProtocol 网络协议，可选值：`TCP`、`UDP`。
     * @param string $PublicIpAddress 弹性IP。
     * @param integer $PublicPort 公网端口。
     * @param string $PrivateIpAddress 内网地址。
     * @param integer $PrivatePort 内网端口。
     * @param string $Description NAT网关转发规则描述。
     * @param string $NatGatewayId NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime NAT网关转发规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            $this->PrivatePort = $param["PrivatePort"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
