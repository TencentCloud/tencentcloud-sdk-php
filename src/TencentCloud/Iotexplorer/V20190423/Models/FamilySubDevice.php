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
 * 子设备详情
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getAliasName() 获取设备别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置设备别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFamilyId() 获取设备绑定的家庭ID
 * @method void setFamilyId(string $FamilyId) 设置设备绑定的家庭ID
 * @method string getRoomId() 获取设备所在的房间ID，默认"0"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomId(string $RoomId) 设置设备所在的房间ID，默认"0"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrl(string $IconUrl) 设置图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrlGrid() 获取grid图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrlGrid(string $IconUrlGrid) 设置grid图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取设备绑定时间戳
 * @method void setCreateTime(integer $CreateTime) 设置设备绑定时间戳
 * @method integer getUpdateTime() 获取设备更新时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置设备更新时间戳
 */
class FamilySubDevice extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @var string 设备绑定的家庭ID
     */
    public $FamilyId;

    /**
     * @var string 设备所在的房间ID，默认"0"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomId;

    /**
     * @var string 图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrl;

    /**
     * @var string grid图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrlGrid;

    /**
     * @var integer 设备绑定时间戳
     */
    public $CreateTime;

    /**
     * @var integer 设备更新时间戳
     */
    public $UpdateTime;

    /**
     * @param string $ProductId 产品Id
     * @param string $DeviceName 设备名称
     * @param string $DeviceId 设备ID
     * @param string $AliasName 设备别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FamilyId 设备绑定的家庭ID
     * @param string $RoomId 设备所在的房间ID，默认"0"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl 图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrlGrid grid图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 设备绑定时间戳
     * @param integer $UpdateTime 设备更新时间戳
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("FamilyId",$param) and $param["FamilyId"] !== null) {
            $this->FamilyId = $param["FamilyId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("IconUrlGrid",$param) and $param["IconUrlGrid"] !== null) {
            $this->IconUrlGrid = $param["IconUrlGrid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
