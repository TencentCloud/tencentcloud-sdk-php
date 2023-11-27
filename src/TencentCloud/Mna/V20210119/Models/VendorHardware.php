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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 厂商硬件详细信息
 *
 * @method string getHardwareId() 获取硬件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHardwareId(string $HardwareId) 设置硬件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSN() 获取硬件序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSN(string $SN) 设置硬件序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取激活状态， 空：全部； 1:待激活； 2:已激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置激活状态， 空：全部； 1:待激活； 2:已激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveTime() 获取激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveTime(string $ActiveTime) 设置激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取厂商备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置厂商备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceId() 获取设备id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseChargingMode() 获取license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) 设置license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOnlineTime() 获取最后在线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOnlineTime(string $LastOnlineTime) 设置最后在线时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class VendorHardware extends AbstractModel
{
    /**
     * @var string 硬件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HardwareId;

    /**
     * @var string 硬件序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SN;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 激活状态， 空：全部； 1:待激活； 2:已激活
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveTime;

    /**
     * @var string 厂商备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 设备id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var integer license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseChargingMode;

    /**
     * @var string 最后在线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOnlineTime;

    /**
     * @param string $HardwareId 硬件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SN 硬件序列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 激活状态， 空：全部； 1:待激活； 2:已激活
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveTime 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 厂商备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceId 设备id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseChargingMode license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOnlineTime 最后在线时间
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
        if (array_key_exists("HardwareId",$param) and $param["HardwareId"] !== null) {
            $this->HardwareId = $param["HardwareId"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }
    }
}
