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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例网络信息(influxdb)
 *
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取vpc subnet id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置vpc subnet id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVIP() 获取vpc ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVIP(string $VIP) 设置vpc ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取vpc port地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置vpc port地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class Network extends AbstractModel
{
    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string vpc subnet id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string vpc ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VIP;

    /**
     * @var integer vpc port地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId vpc subnet id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VIP vpc ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port vpc port地址
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

        if (array_key_exists("VIP",$param) and $param["VIP"] !== null) {
            $this->VIP = $param["VIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
