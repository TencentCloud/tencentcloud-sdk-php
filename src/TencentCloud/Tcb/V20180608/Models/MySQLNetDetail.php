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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDSQL-C网络信息类型
 *
 * @method string getPrivateNetAddress() 获取内网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateNetAddress(string $PrivateNetAddress) 设置内网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPubNetAddress() 获取外网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPubNetAddress(string $PubNetAddress) 设置外网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNet() 获取网络信息（VPCID/SubnetID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNet(string $Net) 设置网络信息（VPCID/SubnetID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPubNetAccessEnabled() 获取是否开通公网
 * @method void setPubNetAccessEnabled(boolean $PubNetAccessEnabled) 设置是否开通公网
 * @method string getVpcId() 获取vpc id 
 * @method void setVpcId(string $VpcId) 设置vpc id 
 * @method string getVpcName() 获取vpc name
 * @method void setVpcName(string $VpcName) 设置vpc name
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getSubnetName() 获取子网名
 * @method void setSubnetName(string $SubnetName) 设置子网名
 */
class MySQLNetDetail extends AbstractModel
{
    /**
     * @var string 内网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateNetAddress;

    /**
     * @var string 外网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PubNetAddress;

    /**
     * @var string 网络信息（VPCID/SubnetID）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Net;

    /**
     * @var boolean 是否开通公网
     */
    public $PubNetAccessEnabled;

    /**
     * @var string vpc id 
     */
    public $VpcId;

    /**
     * @var string vpc name
     */
    public $VpcName;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 子网名
     */
    public $SubnetName;

    /**
     * @param string $PrivateNetAddress 内网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PubNetAddress 外网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Net 网络信息（VPCID/SubnetID）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PubNetAccessEnabled 是否开通公网
     * @param string $VpcId vpc id 
     * @param string $VpcName vpc name
     * @param string $SubnetId 子网ID
     * @param string $SubnetName 子网名
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
        if (array_key_exists("PrivateNetAddress",$param) and $param["PrivateNetAddress"] !== null) {
            $this->PrivateNetAddress = $param["PrivateNetAddress"];
        }

        if (array_key_exists("PubNetAddress",$param) and $param["PubNetAddress"] !== null) {
            $this->PubNetAddress = $param["PubNetAddress"];
        }

        if (array_key_exists("Net",$param) and $param["Net"] !== null) {
            $this->Net = $param["Net"];
        }

        if (array_key_exists("PubNetAccessEnabled",$param) and $param["PubNetAccessEnabled"] !== null) {
            $this->PubNetAccessEnabled = $param["PubNetAccessEnabled"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }
    }
}
