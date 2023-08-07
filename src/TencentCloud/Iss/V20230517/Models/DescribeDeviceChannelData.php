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
 * 查询设备通道信息返回结果
 *
 * @method string getDeviceId() 获取设备 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelId() 获取通道 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelId(string $ChannelId) 设置通道 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelCode() 获取通道编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelCode(string $ChannelCode) 设置通道编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取通道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置通道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取流状态（0:未传输,1:传输中）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置流状态（0:未传输,1:传输中）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPTZType() 获取是否可控 Ptz（0:不可控,1:可控）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTZType(integer $PTZType) 设置是否可控 Ptz（0:不可控,1:可控）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManufacturer() 获取通道厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(string $Manufacturer) 设置通道厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResolution() 获取通道支持分辨率（分辨率列表由‘/’隔开，国标协议样例（6/3），自定义样例（12800960/640480））
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolution(string $Resolution) 设置通道支持分辨率（分辨率列表由‘/’隔开，国标协议样例（6/3），自定义样例（12800960/640480））
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取通道在离线状态（0:离线,1:在线）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置通道在离线状态（0:离线,1:在线）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置所在地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDeviceChannelData extends AbstractModel
{
    /**
     * @var string 设备 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 通道 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelId;

    /**
     * @var string 通道编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelCode;

    /**
     * @var string 通道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 流状态（0:未传输,1:传输中）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 是否可控 Ptz（0:不可控,1:可控）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTZType;

    /**
     * @var string 通道厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @var string 通道支持分辨率（分辨率列表由‘/’隔开，国标协议样例（6/3），自定义样例（12800960/640480））
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resolution;

    /**
     * @var integer 通道在离线状态（0:离线,1:在线）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @param string $DeviceId 设备 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelId 通道 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelCode 通道编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 通道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 流状态（0:未传输,1:传输中）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PTZType 是否可控 Ptz（0:不可控,1:可控）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manufacturer 通道厂商
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resolution 通道支持分辨率（分辨率列表由‘/’隔开，国标协议样例（6/3），自定义样例（12800960/640480））
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 通道在离线状态（0:离线,1:在线）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 所在地域
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PTZType",$param) and $param["PTZType"] !== null) {
            $this->PTZType = $param["PTZType"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
