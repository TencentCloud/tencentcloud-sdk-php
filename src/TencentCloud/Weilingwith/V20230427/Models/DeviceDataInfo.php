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
 * 设备数据信息
 *
 * @method string getWID() 获取设备ID， wid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWID(string $WID) 设置设备ID， wid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceTypeCode() 获取设备类型Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceTypeCode(string $DeviceTypeCode) 设置设备类型Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceTypeName() 获取设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceTypeName(string $DeviceTypeName) 设置设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProductId() 获取产品Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(integer $ProductId) 设置产品Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProductAbility() 获取产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductAbility(integer $ProductAbility) 设置产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSpaceInfoSet() 获取设备位置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceInfoSet(array $SpaceInfoSet) 设置设备位置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelId() 获取模型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置模型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeviceTagSet() 获取设备标签名，非必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceTagSet(array $DeviceTagSet) 设置设备标签名，非必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsActive() 获取激活状态（1激活、0未激活）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsActive(integer $IsActive) 设置激活状态（1激活、0未激活）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveTime() 获取 激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveTime(string $ActiveTime) 设置 激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLive() 获取推流状态（推流中、未推流） 仅摄像机有的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLive(boolean $IsLive) 设置推流状态（推流中、未推流） 仅摄像机有的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentWID() 获取设备所属父设备id（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentWID(string $ParentWID) 设置设备所属父设备id（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentWIDName() 获取设备所有父设备名称（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentWIDName(string $ParentWIDName) 设置设备所有父设备名称（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSN() 获取序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSN(string $SN) 设置序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeviceLocation getLocation() 获取设备点位坐标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(DeviceLocation $Location) 设置设备点位坐标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFieldList() 获取自定义字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldList(array $FieldList) 设置自定义字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupInfo() 获取分组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupInfo(string $GroupInfo) 设置分组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceStatus() 获取通信在/离线状态（online=normal+fault，offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceStatus(string $DeviceStatus) 设置通信在/离线状态（online=normal+fault，offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceDataInfo extends AbstractModel
{
    /**
     * @var string 设备ID， wid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WID;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 设备类型Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceTypeCode;

    /**
     * @var string 设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceTypeName;

    /**
     * @var integer 产品Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var integer 产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductAbility;

    /**
     * @var array 设备位置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceInfoSet;

    /**
     * @var string 模型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var array 设备标签名，非必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceTagSet;

    /**
     * @var integer 激活状态（1激活、0未激活）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsActive;

    /**
     * @var string  激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveTime;

    /**
     * @var boolean 推流状态（推流中、未推流） 仅摄像机有的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLive;

    /**
     * @var string 设备所属父设备id（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentWID;

    /**
     * @var string 设备所有父设备名称（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentWIDName;

    /**
     * @var string 序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SN;

    /**
     * @var DeviceLocation 设备点位坐标值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var array 自定义字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldList;

    /**
     * @var string 分组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupInfo;

    /**
     * @var string 通信在/离线状态（online=normal+fault，offline）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceStatus;

    /**
     * @var string 设备业务状态（normal、fault、offline）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $WID 设备ID， wid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceName 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceTypeCode 设备类型Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceTypeName 设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProductId 产品Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProductAbility 产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SpaceInfoSet 设备位置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelId 模型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeviceTagSet 设备标签名，非必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsActive 激活状态（1激活、0未激活）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveTime  激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLive 推流状态（推流中、未推流） 仅摄像机有的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentWID 设备所属父设备id（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentWIDName 设备所有父设备名称（子设备才有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SN 序列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeviceLocation $Location 设备点位坐标值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FieldList 自定义字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupInfo 分组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceStatus 通信在/离线状态（online=normal+fault，offline）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 设备业务状态（normal、fault、offline）
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceTypeCode",$param) and $param["DeviceTypeCode"] !== null) {
            $this->DeviceTypeCode = $param["DeviceTypeCode"];
        }

        if (array_key_exists("DeviceTypeName",$param) and $param["DeviceTypeName"] !== null) {
            $this->DeviceTypeName = $param["DeviceTypeName"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductAbility",$param) and $param["ProductAbility"] !== null) {
            $this->ProductAbility = $param["ProductAbility"];
        }

        if (array_key_exists("SpaceInfoSet",$param) and $param["SpaceInfoSet"] !== null) {
            $this->SpaceInfoSet = [];
            foreach ($param["SpaceInfoSet"] as $key => $value){
                $obj = new DeviceSpaceInfo();
                $obj->deserialize($value);
                array_push($this->SpaceInfoSet, $obj);
            }
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("DeviceTagSet",$param) and $param["DeviceTagSet"] !== null) {
            $this->DeviceTagSet = $param["DeviceTagSet"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("IsLive",$param) and $param["IsLive"] !== null) {
            $this->IsLive = $param["IsLive"];
        }

        if (array_key_exists("ParentWID",$param) and $param["ParentWID"] !== null) {
            $this->ParentWID = $param["ParentWID"];
        }

        if (array_key_exists("ParentWIDName",$param) and $param["ParentWIDName"] !== null) {
            $this->ParentWIDName = $param["ParentWIDName"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new DeviceLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("FieldList",$param) and $param["FieldList"] !== null) {
            $this->FieldList = [];
            foreach ($param["FieldList"] as $key => $value){
                $obj = new CustomFieldInfo();
                $obj->deserialize($value);
                array_push($this->FieldList, $obj);
            }
        }

        if (array_key_exists("GroupInfo",$param) and $param["GroupInfo"] !== null) {
            $this->GroupInfo = $param["GroupInfo"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
