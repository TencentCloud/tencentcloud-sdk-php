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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssessDeviceRiskPremiumPro请求参数结构体
 *
 * @method string getDeviceToken() 获取<p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
 * @method void setDeviceToken(string $DeviceToken) 设置<p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
 * @method string getUserIp() 获取<p>客户端 IP 地址（IPv4或IPv6）</p>
 * @method void setUserIp(string $UserIp) 设置<p>客户端 IP 地址（IPv4或IPv6）</p>
 */
class AssessDeviceRiskPremiumProRequest extends AbstractModel
{
    /**
     * @var string <p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
     */
    public $DeviceToken;

    /**
     * @var string <p>客户端 IP 地址（IPv4或IPv6）</p>
     */
    public $UserIp;

    /**
     * @param string $DeviceToken <p>用户设备指纹token标识，在您的网站或者应用程序中集成设备指纹的SDK后获取</p>
     * @param string $UserIp <p>客户端 IP 地址（IPv4或IPv6）</p>
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
        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }
    }
}
