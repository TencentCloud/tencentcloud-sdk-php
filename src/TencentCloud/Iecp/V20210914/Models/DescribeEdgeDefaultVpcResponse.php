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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeDefaultVpc返回参数结构体
 *
 * @method string getVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcCidrBlock() 获取网络CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置网络CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetCidrBlock() 获取子网CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置子网CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeDefaultVpcResponse extends AbstractModel
{
    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 网络CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcCidrBlock;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 子网CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetCidrBlock;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcCidrBlock 网络CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetCidrBlock 子网CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
