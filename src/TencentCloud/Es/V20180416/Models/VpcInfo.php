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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vpc信息
 *
 * @method string getVpcId() 获取vpcId信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpcId信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取SubnetId信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置SubnetId信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcUid() 获取VpcUid信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcUid(integer $VpcUid) 设置VpcUid信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubnetUid() 获取SubnetUid 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetUid(integer $SubnetUid) 设置SubnetUid 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableIpAddressCount() 获取可用ip数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) 设置可用ip数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string vpcId信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string SubnetId信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer VpcUid信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcUid;

    /**
     * @var integer SubnetUid 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetUid;

    /**
     * @var integer 可用ip数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableIpAddressCount;

    /**
     * @param string $VpcId vpcId信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId SubnetId信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcUid VpcUid信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubnetUid SubnetUid 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableIpAddressCount 可用ip数量
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcUid",$param) and $param["VpcUid"] !== null) {
            $this->VpcUid = $param["VpcUid"];
        }

        if (array_key_exists("SubnetUid",$param) and $param["SubnetUid"] !== null) {
            $this->SubnetUid = $param["SubnetUid"];
        }

        if (array_key_exists("AvailableIpAddressCount",$param) and $param["AvailableIpAddressCount"] !== null) {
            $this->AvailableIpAddressCount = $param["AvailableIpAddressCount"];
        }
    }
}
