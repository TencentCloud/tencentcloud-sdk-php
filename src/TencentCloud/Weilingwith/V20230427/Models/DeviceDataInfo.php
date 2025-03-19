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
 * @method void setWID(string $WID) 设置设备ID， wid
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDeviceTypeCode() 获取设备类型Id
 * @method void setDeviceTypeCode(string $DeviceTypeCode) 设置设备类型Id
 * @method string getDeviceTypeName() 获取设备类型名称
 * @method void setDeviceTypeName(string $DeviceTypeName) 设置设备类型名称
 * @method integer getProductId() 获取产品Id
 * @method void setProductId(integer $ProductId) 设置产品Id
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getProductAbility() 获取产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
 * @method void setProductAbility(integer $ProductAbility) 设置产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
 * @method array getSpaceInfoSet() 获取设备位置信息
 * @method void setSpaceInfoSet(array $SpaceInfoSet) 设置设备位置信息
 * @method string getModelId() 获取模型id
 * @method void setModelId(string $ModelId) 设置模型id
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method array getDeviceTagSet() 获取设备标签名，非必填
 * @method void setDeviceTagSet(array $DeviceTagSet) 设置设备标签名，非必填
 * @method integer getIsActive() 获取激活状态（1激活、0未激活）
 * @method void setIsActive(integer $IsActive) 设置激活状态（1激活、0未激活）
 * @method string getActiveTime() 获取 激活时间
 * @method void setActiveTime(string $ActiveTime) 设置 激活时间
 * @method boolean getIsLive() 获取推流状态（推流中、未推流） 仅摄像机有的状态
 * @method void setIsLive(boolean $IsLive) 设置推流状态（推流中、未推流） 仅摄像机有的状态
 * @method string getParentWID() 获取设备所属父设备id（子设备才有）
 * @method void setParentWID(string $ParentWID) 设置设备所属父设备id（子设备才有）
 * @method string getParentWIDName() 获取设备所有父设备名称（子设备才有）
 * @method void setParentWIDName(string $ParentWIDName) 设置设备所有父设备名称（子设备才有）
 * @method string getSN() 获取序列号
 * @method void setSN(string $SN) 设置序列号
 * @method DeviceLocation getLocation() 获取设备点位坐标值
 * @method void setLocation(DeviceLocation $Location) 设置设备点位坐标值
 * @method array getFieldList() 获取自定义字段
 * @method void setFieldList(array $FieldList) 设置自定义字段
 * @method string getGroupInfo() 获取分组信息
 * @method void setGroupInfo(string $GroupInfo) 设置分组信息
 * @method string getDeviceStatus() 获取通信在/离线状态（online=normal+fault，offline）
 * @method void setDeviceStatus(string $DeviceStatus) 设置通信在/离线状态（online=normal+fault，offline）
 * @method string getStatus() 获取设备业务状态（normal、fault、offline）
 * @method void setStatus(string $Status) 设置设备业务状态（normal、fault、offline）
 */
class DeviceDataInfo extends AbstractModel
{
    /**
     * @var string 设备ID， wid
     */
    public $WID;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备类型Id
     */
    public $DeviceTypeCode;

    /**
     * @var string 设备类型名称
     */
    public $DeviceTypeName;

    /**
     * @var integer 产品Id
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
     */
    public $ProductAbility;

    /**
     * @var array 设备位置信息
     */
    public $SpaceInfoSet;

    /**
     * @var string 模型id
     */
    public $ModelId;

    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var array 设备标签名，非必填
     */
    public $DeviceTagSet;

    /**
     * @var integer 激活状态（1激活、0未激活）
     */
    public $IsActive;

    /**
     * @var string  激活时间
     */
    public $ActiveTime;

    /**
     * @var boolean 推流状态（推流中、未推流） 仅摄像机有的状态
     */
    public $IsLive;

    /**
     * @var string 设备所属父设备id（子设备才有）
     */
    public $ParentWID;

    /**
     * @var string 设备所有父设备名称（子设备才有）
     */
    public $ParentWIDName;

    /**
     * @var string 序列号
     */
    public $SN;

    /**
     * @var DeviceLocation 设备点位坐标值
     */
    public $Location;

    /**
     * @var array 自定义字段
     */
    public $FieldList;

    /**
     * @var string 分组信息
     */
    public $GroupInfo;

    /**
     * @var string 通信在/离线状态（online=normal+fault，offline）
     */
    public $DeviceStatus;

    /**
     * @var string 设备业务状态（normal、fault、offline）
     */
    public $Status;

    /**
     * @param string $WID 设备ID， wid
     * @param string $DeviceName 设备名称
     * @param string $DeviceTypeCode 设备类型Id
     * @param string $DeviceTypeName 设备类型名称
     * @param integer $ProductId 产品Id
     * @param string $ProductName 产品名称
     * @param integer $ProductAbility 产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
     * @param array $SpaceInfoSet 设备位置信息
     * @param string $ModelId 模型id
     * @param string $ModelName 模型名称
     * @param array $DeviceTagSet 设备标签名，非必填
     * @param integer $IsActive 激活状态（1激活、0未激活）
     * @param string $ActiveTime  激活时间
     * @param boolean $IsLive 推流状态（推流中、未推流） 仅摄像机有的状态
     * @param string $ParentWID 设备所属父设备id（子设备才有）
     * @param string $ParentWIDName 设备所有父设备名称（子设备才有）
     * @param string $SN 序列号
     * @param DeviceLocation $Location 设备点位坐标值
     * @param array $FieldList 自定义字段
     * @param string $GroupInfo 分组信息
     * @param string $DeviceStatus 通信在/离线状态（online=normal+fault，offline）
     * @param string $Status 设备业务状态（normal、fault、offline）
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
