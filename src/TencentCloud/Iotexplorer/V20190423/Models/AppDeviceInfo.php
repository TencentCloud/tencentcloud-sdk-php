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
 * 云api直接绑定设备出参
 *
 * @method string getDeviceId() 获取产品ID/设备名
 * @method void setDeviceId(string $DeviceId) 设置产品ID/设备名
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getAliasName() 获取设备别名
 * @method void setAliasName(string $AliasName) 设置设备别名
 * @method string getIconUrl() 获取icon地址
 * @method void setIconUrl(string $IconUrl) 设置icon地址
 * @method string getFamilyId() 获取家庭ID
 * @method void setFamilyId(string $FamilyId) 设置家庭ID
 * @method string getRoomId() 获取房间ID
 * @method void setRoomId(string $RoomId) 设置房间ID
 * @method integer getDeviceType() 获取设备类型
 * @method void setDeviceType(integer $DeviceType) 设置设备类型
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 */
class AppDeviceInfo extends AbstractModel
{
    /**
     * @var string 产品ID/设备名
     */
    public $DeviceId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 设备别名
     */
    public $AliasName;

    /**
     * @var string icon地址
     */
    public $IconUrl;

    /**
     * @var string 家庭ID
     */
    public $FamilyId;

    /**
     * @var string 房间ID
     */
    public $RoomId;

    /**
     * @var integer 设备类型
     */
    public $DeviceType;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $DeviceId 产品ID/设备名
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名
     * @param string $AliasName 设备别名
     * @param string $IconUrl icon地址
     * @param string $FamilyId 家庭ID
     * @param string $RoomId 房间ID
     * @param integer $DeviceType 设备类型
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("FamilyId",$param) and $param["FamilyId"] !== null) {
            $this->FamilyId = $param["FamilyId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
