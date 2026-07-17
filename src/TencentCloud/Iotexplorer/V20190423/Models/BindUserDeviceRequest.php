<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * BindUserDevice请求参数结构体
 *
 * @method string getAppKey() 获取<p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
 * @method void setAppKey(string $AppKey) 设置<p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名（禁止使用虚拟设备名 ~virtualDev）</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名（禁止使用虚拟设备名 ~virtualDev）</p>
 * @method string getOpenID() 获取<p>用户 OpenID，用于定位 / 兜底创建 App 用户</p>
 * @method void setOpenID(string $OpenID) 设置<p>用户 OpenID，用于定位 / 兜底创建 App 用户</p>
 * @method string getFamilyName() 获取<p>家庭名，默认 default</p>
 * @method void setFamilyName(string $FamilyName) 设置<p>家庭名，默认 default</p>
 * @method string getRoomId() 获取<p>房间 ID，默认 &quot;0&quot;</p>
 * @method void setRoomId(string $RoomId) 设置<p>房间 ID，默认 &quot;0&quot;</p>
 * @method string getNickName() 获取<p>用户昵称（仅首次创建用户时使用）</p>
 * @method void setNickName(string $NickName) 设置<p>用户昵称（仅首次创建用户时使用）</p>
 */
class BindUserDeviceRequest extends AbstractModel
{
    /**
     * @var string <p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
     */
    public $AppKey;

    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名（禁止使用虚拟设备名 ~virtualDev）</p>
     */
    public $DeviceName;

    /**
     * @var string <p>用户 OpenID，用于定位 / 兜底创建 App 用户</p>
     */
    public $OpenID;

    /**
     * @var string <p>家庭名，默认 default</p>
     */
    public $FamilyName;

    /**
     * @var string <p>房间 ID，默认 &quot;0&quot;</p>
     */
    public $RoomId;

    /**
     * @var string <p>用户昵称（仅首次创建用户时使用）</p>
     */
    public $NickName;

    /**
     * @param string $AppKey <p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名（禁止使用虚拟设备名 ~virtualDev）</p>
     * @param string $OpenID <p>用户 OpenID，用于定位 / 兜底创建 App 用户</p>
     * @param string $FamilyName <p>家庭名，默认 default</p>
     * @param string $RoomId <p>房间 ID，默认 &quot;0&quot;</p>
     * @param string $NickName <p>用户昵称（仅首次创建用户时使用）</p>
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
        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("OpenID",$param) and $param["OpenID"] !== null) {
            $this->OpenID = $param["OpenID"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }
    }
}
