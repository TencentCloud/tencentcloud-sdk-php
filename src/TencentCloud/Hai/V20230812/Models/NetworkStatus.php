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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HAI 实例的网络配置和消耗情况
 *
 * @method string getInstanceId() 获取HAI 的实例 ID
 * @method void setInstanceId(string $InstanceId) 设置HAI 的实例 ID
 * @method string getAddressIp() 获取公网 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIp(string $AddressIp) 设置公网 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取出带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置出带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalTrafficAmount() 获取流量包总量，单位GB
 * @method void setTotalTrafficAmount(float $TotalTrafficAmount) 设置流量包总量，单位GB
 * @method float getRemainingTrafficAmount() 获取流量包剩余量，单位GB
 * @method void setRemainingTrafficAmount(float $RemainingTrafficAmount) 设置流量包剩余量，单位GB
 */
class NetworkStatus extends AbstractModel
{
    /**
     * @var string HAI 的实例 ID
     */
    public $InstanceId;

    /**
     * @var string 公网 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIp;

    /**
     * @var integer 出带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var float 流量包总量，单位GB
     */
    public $TotalTrafficAmount;

    /**
     * @var float 流量包剩余量，单位GB
     */
    public $RemainingTrafficAmount;

    /**
     * @param string $InstanceId HAI 的实例 ID
     * @param string $AddressIp 公网 IP 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 出带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalTrafficAmount 流量包总量，单位GB
     * @param float $RemainingTrafficAmount 流量包剩余量，单位GB
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("TotalTrafficAmount",$param) and $param["TotalTrafficAmount"] !== null) {
            $this->TotalTrafficAmount = $param["TotalTrafficAmount"];
        }

        if (array_key_exists("RemainingTrafficAmount",$param) and $param["RemainingTrafficAmount"] !== null) {
            $this->RemainingTrafficAmount = $param["RemainingTrafficAmount"];
        }
    }
}
