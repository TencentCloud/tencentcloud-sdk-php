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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群设备组信息。
 *
 * @method string getInstanceId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReadWriteDevice() 获取读写设备组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadWriteDevice(array $ReadWriteDevice) 设置读写设备组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReadOnlyDevice() 获取只读设备组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnlyDevice(array $ReadOnlyDevice) 设置只读设备组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFreeDevice() 获取空闲设备组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeDevice(array $FreeDevice) 设置空闲设备组
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceDeviceInfo extends AbstractModel
{
    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var array 读写设备组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadWriteDevice;

    /**
     * @var array 只读设备组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnlyDevice;

    /**
     * @var array 空闲设备组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeDevice;

    /**
     * @param string $InstanceId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReadWriteDevice 读写设备组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReadOnlyDevice 只读设备组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FreeDevice 空闲设备组
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReadWriteDevice",$param) and $param["ReadWriteDevice"] !== null) {
            $this->ReadWriteDevice = [];
            foreach ($param["ReadWriteDevice"] as $key => $value){
                $obj = new DeviceInfo();
                $obj->deserialize($value);
                array_push($this->ReadWriteDevice, $obj);
            }
        }

        if (array_key_exists("ReadOnlyDevice",$param) and $param["ReadOnlyDevice"] !== null) {
            $this->ReadOnlyDevice = [];
            foreach ($param["ReadOnlyDevice"] as $key => $value){
                $obj = new DeviceInfo();
                $obj->deserialize($value);
                array_push($this->ReadOnlyDevice, $obj);
            }
        }

        if (array_key_exists("FreeDevice",$param) and $param["FreeDevice"] !== null) {
            $this->FreeDevice = [];
            foreach ($param["FreeDevice"] as $key => $value){
                $obj = new DeviceInfo();
                $obj->deserialize($value);
                array_push($this->FreeDevice, $obj);
            }
        }
    }
}
