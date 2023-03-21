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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例网络信息
 *
 * @method string getInstanceGroupType() 获取网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupType(string $InstanceGroupType) 设置网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceGroupId() 获取实例组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置实例组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetType() 获取网络类型, 0-基础网络, 1-vpc网络, 2-黑石网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetType(integer $NetType) 设置网络类型, 0-基础网络, 1-vpc网络, 2-黑石网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取私有网络IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置私有网络IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取私有网络端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置私有网络端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanDomain() 获取外网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanDomain(string $WanDomain) 设置外网域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIP() 获取外网Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIP(string $WanIP) 设置外网Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanPort() 获取外网端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanPort(integer $WanPort) 设置外网端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanStatus() 获取外网开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanStatus(string $WanStatus) 设置外网开启状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceNetInfo extends AbstractModel
{
    /**
     * @var string 网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupType;

    /**
     * @var string 实例组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupId;

    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 网络类型, 0-基础网络, 1-vpc网络, 2-黑石网络
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetType;

    /**
     * @var string 私有网络IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 私有网络端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string 外网域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanDomain;

    /**
     * @var string 外网Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIP;

    /**
     * @var integer 外网端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanPort;

    /**
     * @var string 外网开启状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanStatus;

    /**
     * @param string $InstanceGroupType 网络类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceGroupId 实例组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetType 网络类型, 0-基础网络, 1-vpc网络, 2-黑石网络
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip 私有网络IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport 私有网络端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanDomain 外网域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIP 外网Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanPort 外网端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanStatus 外网开启状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceGroupType",$param) and $param["InstanceGroupType"] !== null) {
            $this->InstanceGroupType = $param["InstanceGroupType"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }
    }
}
