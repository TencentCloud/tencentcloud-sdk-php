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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备状态信息
 *
 * @method string getWID() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWID(string $WID) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceStatus() 获取设备状态（online=normal+fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceStatus(string $DeviceStatus) 设置设备状态（online=normal+fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceStatusUpdateTime() 获取设备状态更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceStatusUpdateTime(string $DeviceStatusUpdateTime) 设置设备状态更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAlive() 获取推流状态。推流中-true，未推流-false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAlive(boolean $IsAlive) 设置推流状态。推流中-true，未推流-false
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceStatusInfo extends AbstractModel
{
    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WID;

    /**
     * @var string 设备状态（online=normal+fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceStatus;

    /**
     * @var string 设备状态更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceStatusUpdateTime;

    /**
     * @var string 设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 推流状态。推流中-true，未推流-false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAlive;

    /**
     * @param string $WID 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceStatus 设备状态（online=normal+fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceStatusUpdateTime 设备状态更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAlive 推流状态。推流中-true，未推流-false
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("DeviceStatusUpdateTime",$param) and $param["DeviceStatusUpdateTime"] !== null) {
            $this->DeviceStatusUpdateTime = $param["DeviceStatusUpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAlive",$param) and $param["IsAlive"] !== null) {
            $this->IsAlive = $param["IsAlive"];
        }
    }
}
