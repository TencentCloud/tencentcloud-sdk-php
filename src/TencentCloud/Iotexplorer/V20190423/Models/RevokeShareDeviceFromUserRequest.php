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
 * RevokeShareDeviceFromUser请求参数结构体
 *
 * @method string getAppKey() 获取<p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
 * @method void setAppKey(string $AppKey) 设置<p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名</p>
 * @method string getOwnerOpenID() 获取<p>设备所有者 OpenID（必须已存在）</p>
 * @method void setOwnerOpenID(string $OwnerOpenID) 设置<p>设备所有者 OpenID（必须已存在）</p>
 * @method string getToOpenID() 获取<p>被取消分享用户 OpenID（不存在视为已取消，幂等成功）</p>
 * @method void setToOpenID(string $ToOpenID) 设置<p>被取消分享用户 OpenID（不存在视为已取消，幂等成功）</p>
 */
class RevokeShareDeviceFromUserRequest extends AbstractModel
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
     * @var string <p>设备名</p>
     */
    public $DeviceName;

    /**
     * @var string <p>设备所有者 OpenID（必须已存在）</p>
     */
    public $OwnerOpenID;

    /**
     * @var string <p>被取消分享用户 OpenID（不存在视为已取消，幂等成功）</p>
     */
    public $ToOpenID;

    /**
     * @param string $AppKey <p>应用 AppKey，用于解析 IotAppID 并完成签名校验</p>
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名</p>
     * @param string $OwnerOpenID <p>设备所有者 OpenID（必须已存在）</p>
     * @param string $ToOpenID <p>被取消分享用户 OpenID（不存在视为已取消，幂等成功）</p>
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

        if (array_key_exists("OwnerOpenID",$param) and $param["OwnerOpenID"] !== null) {
            $this->OwnerOpenID = $param["OwnerOpenID"];
        }

        if (array_key_exists("ToOpenID",$param) and $param["ToOpenID"] !== null) {
            $this->ToOpenID = $param["ToOpenID"];
        }
    }
}
