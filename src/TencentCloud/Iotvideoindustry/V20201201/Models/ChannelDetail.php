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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 国标通道详细信息
 *
 * @method string getChannelName() 获取通道名称
 * @method void setChannelName(string $ChannelName) 设置通道名称
 * @method string getChannelId() 获取通道唯一标识
 * @method void setChannelId(string $ChannelId) 设置通道唯一标识
 * @method integer getChannelType() 获取通道类型 0：未知；1：视频通道；2：音频通道；3：告警通道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelType(integer $ChannelType) 设置通道类型 0：未知；1：视频通道；2：音频通道；3：告警通道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelCode() 获取20位国标通道编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelCode(string $ChannelCode) 设置20位国标通道编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInformation() 获取通道扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInformation(string $ExtraInformation) 设置通道扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取通道在线状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置通道在线状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRecord() 获取通道是否存在录像标识 0：无录像；1：有录像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRecord(integer $IsRecord) 设置通道是否存在录像标识 0：无录像；1：有录像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceId() 获取通道所属设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置通道所属设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessGroupId() 获取通道所属虚拟组织的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessGroupId(string $BusinessGroupId) 设置通道所属虚拟组织的ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChannelDetail extends AbstractModel
{
    /**
     * @var string 通道名称
     */
    public $ChannelName;

    /**
     * @var string 通道唯一标识
     */
    public $ChannelId;

    /**
     * @var integer 通道类型 0：未知；1：视频通道；2：音频通道；3：告警通道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelType;

    /**
     * @var string 20位国标通道编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelCode;

    /**
     * @var string 通道扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInformation;

    /**
     * @var integer 通道在线状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 通道是否存在录像标识 0：无录像；1：有录像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRecord;

    /**
     * @var string 通道所属设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 通道所属虚拟组织的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessGroupId;

    /**
     * @param string $ChannelName 通道名称
     * @param string $ChannelId 通道唯一标识
     * @param integer $ChannelType 通道类型 0：未知；1：视频通道；2：音频通道；3：告警通道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelCode 20位国标通道编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInformation 通道扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 通道在线状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRecord 通道是否存在录像标识 0：无录像；1：有录像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceId 通道所属设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessGroupId 通道所属虚拟组织的ID
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("ExtraInformation",$param) and $param["ExtraInformation"] !== null) {
            $this->ExtraInformation = $param["ExtraInformation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsRecord",$param) and $param["IsRecord"] !== null) {
            $this->IsRecord = $param["IsRecord"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("BusinessGroupId",$param) and $param["BusinessGroupId"] !== null) {
            $this->BusinessGroupId = $param["BusinessGroupId"];
        }
    }
}
