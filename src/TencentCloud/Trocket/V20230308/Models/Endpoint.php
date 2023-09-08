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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入点信息
 *
 * @method string getType() 获取接入点类型，
VPC，
PUBLIC 公网
 * @method void setType(string $Type) 设置接入点类型，
VPC，
PUBLIC 公网
 * @method string getStatus() 获取状态，
OPEN 开启，
CLOSE 关闭，
PROCESSING 操作中，
 * @method void setStatus(string $Status) 设置状态，
OPEN 开启，
CLOSE 关闭，
PROCESSING 操作中，
 * @method string getPayMode() 获取付费类型，仅公网
PREPAID 包年包月
POSTPAID 按量付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置付费类型，仅公网
PREPAID 包年包月
POSTPAID 按量付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpointUrl() 获取接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointUrl(string $EndpointUrl) 设置接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取公网带宽，Mbps为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽，Mbps为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpRules() 获取公网放通规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpRules(array $IpRules) 设置公网放通规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string 接入点类型，
VPC，
PUBLIC 公网
     */
    public $Type;

    /**
     * @var string 状态，
OPEN 开启，
CLOSE 关闭，
PROCESSING 操作中，
     */
    public $Status;

    /**
     * @var string 付费类型，仅公网
PREPAID 包年包月
POSTPAID 按量付费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointUrl;

    /**
     * @var string VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 公网带宽，Mbps为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var array 公网放通规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpRules;

    /**
     * @param string $Type 接入点类型，
VPC，
PUBLIC 公网
     * @param string $Status 状态，
OPEN 开启，
CLOSE 关闭，
PROCESSING 操作中，
     * @param string $PayMode 付费类型，仅公网
PREPAID 包年包月
POSTPAID 按量付费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndpointUrl 接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 公网带宽，Mbps为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpRules 公网放通规则
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("EndpointUrl",$param) and $param["EndpointUrl"] !== null) {
            $this->EndpointUrl = $param["EndpointUrl"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }
    }
}
