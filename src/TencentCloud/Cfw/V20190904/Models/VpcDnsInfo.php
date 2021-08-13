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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * nat防火墙 vpc dns 开关信息
 *
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method string getVpcName() 获取vpc 名称
 * @method void setVpcName(string $VpcName) 设置vpc 名称
 * @method integer getFwMode() 获取nat 防火墙模式 0：新增模式， 1: 接入模式
 * @method void setFwMode(integer $FwMode) 设置nat 防火墙模式 0：新增模式， 1: 接入模式
 * @method string getVpcIpv4Cidr() 获取vpc ipv4网段范围 CIDR（Classless Inter-Domain Routing，无类域间路由选择）
 * @method void setVpcIpv4Cidr(string $VpcIpv4Cidr) 设置vpc ipv4网段范围 CIDR（Classless Inter-Domain Routing，无类域间路由选择）
 * @method string getDNSEip() 获取外网弹性ip，防火墙 dns解析地址
 * @method void setDNSEip(string $DNSEip) 设置外网弹性ip，防火墙 dns解析地址
 * @method string getNatInsId() 获取nat网关id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatInsId(string $NatInsId) 设置nat网关id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatInsName() 获取nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatInsName(string $NatInsName) 设置nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchStatus() 获取0：开关关闭 ， 1: 开关打开
 * @method void setSwitchStatus(integer $SwitchStatus) 设置0：开关关闭 ， 1: 开关打开
 */
class VpcDnsInfo extends AbstractModel
{
    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string vpc 名称
     */
    public $VpcName;

    /**
     * @var integer nat 防火墙模式 0：新增模式， 1: 接入模式
     */
    public $FwMode;

    /**
     * @var string vpc ipv4网段范围 CIDR（Classless Inter-Domain Routing，无类域间路由选择）
     */
    public $VpcIpv4Cidr;

    /**
     * @var string 外网弹性ip，防火墙 dns解析地址
     */
    public $DNSEip;

    /**
     * @var string nat网关id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatInsId;

    /**
     * @var string nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatInsName;

    /**
     * @var integer 0：开关关闭 ， 1: 开关打开
     */
    public $SwitchStatus;

    /**
     * @param string $VpcId vpc id
     * @param string $VpcName vpc 名称
     * @param integer $FwMode nat 防火墙模式 0：新增模式， 1: 接入模式
     * @param string $VpcIpv4Cidr vpc ipv4网段范围 CIDR（Classless Inter-Domain Routing，无类域间路由选择）
     * @param string $DNSEip 外网弹性ip，防火墙 dns解析地址
     * @param string $NatInsId nat网关id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatInsName nat网关名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchStatus 0：开关关闭 ， 1: 开关打开
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

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("VpcIpv4Cidr",$param) and $param["VpcIpv4Cidr"] !== null) {
            $this->VpcIpv4Cidr = $param["VpcIpv4Cidr"];
        }

        if (array_key_exists("DNSEip",$param) and $param["DNSEip"] !== null) {
            $this->DNSEip = $param["DNSEip"];
        }

        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("NatInsName",$param) and $param["NatInsName"] !== null) {
            $this->NatInsName = $param["NatInsName"];
        }

        if (array_key_exists("SwitchStatus",$param) and $param["SwitchStatus"] !== null) {
            $this->SwitchStatus = $param["SwitchStatus"];
        }
    }
}
