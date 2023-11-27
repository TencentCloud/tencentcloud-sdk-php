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
 * 激活设备
 *
 * @method string getVendor() 获取厂商名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVendor(string $Vendor) 设置厂商名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSN() 获取设备SN序列号
 * @method void setSN(string $SN) 设置设备SN序列号
 * @method string getDeviceName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataKey() 获取设备密钥
 * @method void setDataKey(string $DataKey) 设置设备密钥
 */
class ActivateHardware extends AbstractModel
{
    /**
     * @var string 厂商名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vendor;

    /**
     * @var string 设备SN序列号
     */
    public $SN;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 设备密钥
     */
    public $DataKey;

    /**
     * @param string $Vendor 厂商名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SN 设备SN序列号
     * @param string $DeviceName 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataKey 设备密钥
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DataKey",$param) and $param["DataKey"] !== null) {
            $this->DataKey = $param["DataKey"];
        }
    }
}
