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
 * 计划下的设备通道信息
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
 * @method string getOrganizationName() 获取所属组织名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置所属组织名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordPlanChannelInfo extends AbstractModel
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
     * @var string 所属组织名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @param string $DeviceId 设备通道所属的设备ID
     * @param string $DeviceName 设备通道所属的设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelId 设备通道ID
     * @param string $ChannelName 设备通道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 所属组织名称
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}
