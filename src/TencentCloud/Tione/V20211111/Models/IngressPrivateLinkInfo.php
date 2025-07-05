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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有连接通道信息
 *
 * @method string getVpcId() 获取用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取用户子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置用户子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerHttpAddr() 获取内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpAddr(array $InnerHttpAddr) 设置内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerHttpsAddr() 获取内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpsAddr(array $InnerHttpsAddr) 设置内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取私有连接状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置私有连接状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class IngressPrivateLinkInfo extends AbstractModel
{
    /**
     * @var string 用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 用户子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var array 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpAddr;

    /**
     * @var array 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpsAddr;

    /**
     * @var string 私有连接状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @param string $VpcId 用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 用户子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerHttpAddr 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerHttpsAddr 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 私有连接状态
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

        if (array_key_exists("InnerHttpAddr",$param) and $param["InnerHttpAddr"] !== null) {
            $this->InnerHttpAddr = $param["InnerHttpAddr"];
        }

        if (array_key_exists("InnerHttpsAddr",$param) and $param["InnerHttpsAddr"] !== null) {
            $this->InnerHttpsAddr = $param["InnerHttpsAddr"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
