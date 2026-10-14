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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC防火墙状态监控图
 *
 * @method string getIp() 获取IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPCID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPCID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取VPC 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置VPC 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowMax() 获取峰值流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowMax(integer $FlowMax) 设置峰值流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFlowAvg() 获取均值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowAvg(float $FlowAvg) 设置均值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTcRuleStatus() 获取限速状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcRuleStatus(integer $TcRuleStatus) 设置限速状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwInsId() 获取防火墙ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwInsId(string $FwInsId) 设置防火墙ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpVersion() 获取0 IPV4 , 1 IPV6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpVersion(integer $IpVersion) 设置0 IPV4 , 1 IPV6
注意：此字段可能返回 null，表示取不到有效值。
 */
class FwGroupIpFlowStat extends AbstractModel
{
    /**
     * @var string IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string VPCID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string VPC 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var integer 峰值流量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowMax;

    /**
     * @var float 均值带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowAvg;

    /**
     * @var integer 限速状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcRuleStatus;

    /**
     * @var string 防火墙ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwInsId;

    /**
     * @var integer 0 IPV4 , 1 IPV6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpVersion;

    /**
     * @param string $Ip IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPCID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName VPC 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowMax 峰值流量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FlowAvg 均值带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TcRuleStatus 限速状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwInsId 防火墙ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IpVersion 0 IPV4 , 1 IPV6
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("FlowMax",$param) and $param["FlowMax"] !== null) {
            $this->FlowMax = $param["FlowMax"];
        }

        if (array_key_exists("FlowAvg",$param) and $param["FlowAvg"] !== null) {
            $this->FlowAvg = $param["FlowAvg"];
        }

        if (array_key_exists("TcRuleStatus",$param) and $param["TcRuleStatus"] !== null) {
            $this->TcRuleStatus = $param["TcRuleStatus"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
