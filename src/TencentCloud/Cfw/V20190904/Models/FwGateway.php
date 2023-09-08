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
 * 防火墙引流网关信息
 *
 * @method string getGatewayId() 获取防火墙网关id
 * @method void setGatewayId(string $GatewayId) 设置防火墙网关id
 * @method string getVpcId() 获取网关所属vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置网关所属vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpAddress() 获取网关ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddress(string $IpAddress) 设置网关ip地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class FwGateway extends AbstractModel
{
    /**
     * @var string 防火墙网关id
     */
    public $GatewayId;

    /**
     * @var string 网关所属vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 网关ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddress;

    /**
     * @param string $GatewayId 防火墙网关id
     * @param string $VpcId 网关所属vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpAddress 网关ip地址
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }
    }
}
