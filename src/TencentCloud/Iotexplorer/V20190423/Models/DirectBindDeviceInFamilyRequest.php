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
 * DirectBindDeviceInFamily请求参数结构体
 *
 * @method string getIotAppID() 获取小程序appid
 * @method void setIotAppID(string $IotAppID) 设置小程序appid
 * @method string getUserID() 获取用户ID
 * @method void setUserID(string $UserID) 设置用户ID
 * @method string getFamilyId() 获取家庭ID
 * @method void setFamilyId(string $FamilyId) 设置家庭ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getRoomId() 获取房间ID
 * @method void setRoomId(string $RoomId) 设置房间ID
 */
class DirectBindDeviceInFamilyRequest extends AbstractModel
{
    /**
     * @var string 小程序appid
     */
    public $IotAppID;

    /**
     * @var string 用户ID
     */
    public $UserID;

    /**
     * @var string 家庭ID
     */
    public $FamilyId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 房间ID
     */
    public $RoomId;

    /**
     * @param string $IotAppID 小程序appid
     * @param string $UserID 用户ID
     * @param string $FamilyId 家庭ID
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名
     * @param string $RoomId 房间ID
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
        if (array_key_exists("IotAppID",$param) and $param["IotAppID"] !== null) {
            $this->IotAppID = $param["IotAppID"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("FamilyId",$param) and $param["FamilyId"] !== null) {
            $this->FamilyId = $param["FamilyId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
