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
 * 对应设备的物料信息
 *
 * @method string getDeviceType() 获取设备信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceType(string $DeviceType) 设置设备信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialInfo getMaterialInfo() 获取物料信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialInfo(MaterialInfo $MaterialInfo) 设置物料信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceMaterialInfo extends AbstractModel
{
    /**
     * @var string 设备信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceType;

    /**
     * @var MaterialInfo 物料信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialInfo;

    /**
     * @param string $DeviceType 设备信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialInfo $MaterialInfo 物料信息
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("MaterialInfo",$param) and $param["MaterialInfo"] !== null) {
            $this->MaterialInfo = new MaterialInfo();
            $this->MaterialInfo->deserialize($param["MaterialInfo"]);
        }
    }
}
