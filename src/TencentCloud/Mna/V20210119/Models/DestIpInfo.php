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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标IP信息
 *
 * @method string getTime() 获取时间：s
 * @method void setTime(string $Time) 设置时间：s
 * @method string getGatewayIp() 获取网关IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayIp(string $GatewayIp) 设置网关IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewaySite() 获取网关地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewaySite(string $GatewaySite) 设置网关地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpCount() 获取目标IP数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpCount(integer $IpCount) 设置目标IP数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpList() 获取目标IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpList(array $IpList) 设置目标IP列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DestIpInfo extends AbstractModel
{
    /**
     * @var string 时间：s
     */
    public $Time;

    /**
     * @var string 网关IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayIp;

    /**
     * @var string 网关地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewaySite;

    /**
     * @var integer 目标IP数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpCount;

    /**
     * @var array 目标IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpList;

    /**
     * @param string $Time 时间：s
     * @param string $GatewayIp 网关IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewaySite 网关地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IpCount 目标IP数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpList 目标IP列表
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("GatewayIp",$param) and $param["GatewayIp"] !== null) {
            $this->GatewayIp = $param["GatewayIp"];
        }

        if (array_key_exists("GatewaySite",$param) and $param["GatewaySite"] !== null) {
            $this->GatewaySite = $param["GatewaySite"];
        }

        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
