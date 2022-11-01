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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的调用信息，服务组下唯一
 *
 * @method string getVpcHttpAddr() 获取内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcHttpAddr(string $VpcHttpAddr) 设置内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcHttpsAddr() 获取内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcHttpsAddr(string $VpcHttpsAddr) 设置内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcGrpcTlsAddr() 获取内网grpc调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcGrpcTlsAddr(string $VpcGrpcTlsAddr) 设置内网grpc调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取可访问的vpcid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置可访问的vpcid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取后端ip对应的子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置后端ip对应的子网
注意：此字段可能返回 null，表示取不到有效值。
 */
class InferGatewayCallInfo extends AbstractModel
{
    /**
     * @var string 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcHttpAddr;

    /**
     * @var string 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcHttpsAddr;

    /**
     * @var string 内网grpc调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcGrpcTlsAddr;

    /**
     * @var string 可访问的vpcid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 后端ip对应的子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @param string $VpcHttpAddr 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcHttpsAddr 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcGrpcTlsAddr 内网grpc调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 可访问的vpcid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 后端ip对应的子网
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
        if (array_key_exists("VpcHttpAddr",$param) and $param["VpcHttpAddr"] !== null) {
            $this->VpcHttpAddr = $param["VpcHttpAddr"];
        }

        if (array_key_exists("VpcHttpsAddr",$param) and $param["VpcHttpsAddr"] !== null) {
            $this->VpcHttpsAddr = $param["VpcHttpsAddr"];
        }

        if (array_key_exists("VpcGrpcTlsAddr",$param) and $param["VpcGrpcTlsAddr"] !== null) {
            $this->VpcGrpcTlsAddr = $param["VpcGrpcTlsAddr"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
