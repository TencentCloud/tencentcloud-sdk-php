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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微信硬件设备信息
 *
 * @method string getDeviceId() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method WXIoTDeviceInfo getWXIoTDeviceInfo() 获取设备信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWXIoTDeviceInfo(WXIoTDeviceInfo $WXIoTDeviceInfo) 设置设备信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class WXDeviceInfo extends AbstractModel
{
    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var WXIoTDeviceInfo 设备信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WXIoTDeviceInfo;

    /**
     * @param string $DeviceId 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param WXIoTDeviceInfo $WXIoTDeviceInfo 设备信息
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("WXIoTDeviceInfo",$param) and $param["WXIoTDeviceInfo"] !== null) {
            $this->WXIoTDeviceInfo = new WXIoTDeviceInfo();
            $this->WXIoTDeviceInfo->deserialize($param["WXIoTDeviceInfo"]);
        }
    }
}
