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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织目录下的通道信息
 *
 * @method string getDeviceId() 获取设备通道所属的设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备通道所属的设备ID
 * @method string getDeviceName() 获取设备通道所属的设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备通道所属的设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelId() 获取设备通道ID
 * @method void setChannelId(string $ChannelId) 设置设备通道ID
 * @method string getChannelName() 获取设备通道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelName(string $ChannelName) 设置设备通道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInPlan() 获取该通道是否在上云计划中，如果是，则不能在添加到其他上云计划|true：在上云计划中，false：不在上云计划中
 * @method void setInPlan(boolean $InPlan) 设置该通道是否在上云计划中，如果是，则不能在添加到其他上云计划|true：在上云计划中，false：不在上云计划中
 */
class OrganizationChannelInfo extends AbstractModel
{
    /**
     * @var string 设备通道所属的设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备通道所属的设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 设备通道ID
     */
    public $ChannelId;

    /**
     * @var string 设备通道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelName;

    /**
     * @var boolean 该通道是否在上云计划中，如果是，则不能在添加到其他上云计划|true：在上云计划中，false：不在上云计划中
     */
    public $InPlan;

    /**
     * @param string $DeviceId 设备通道所属的设备ID
     * @param string $DeviceName 设备通道所属的设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelId 设备通道ID
     * @param string $ChannelName 设备通道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InPlan 该通道是否在上云计划中，如果是，则不能在添加到其他上云计划|true：在上云计划中，false：不在上云计划中
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("InPlan",$param) and $param["InPlan"] !== null) {
            $this->InPlan = $param["InPlan"];
        }
    }
}
