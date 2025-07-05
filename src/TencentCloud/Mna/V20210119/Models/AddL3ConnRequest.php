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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddL3Conn请求参数结构体
 *
 * @method string getCidr1() 获取设置互通网段CIDR1，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
 * @method void setCidr1(string $Cidr1) 设置设置互通网段CIDR1，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
 * @method string getCidr2() 获取设置互通网段CIDR2，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
 * @method void setCidr2(string $Cidr2) 设置设置互通网段CIDR2，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
 * @method string getDeviceId1() 获取CIDR1对应的设备ID
 * @method void setDeviceId1(string $DeviceId1) 设置CIDR1对应的设备ID
 * @method string getDeviceId2() 获取CIDR2对应的设备ID
 * @method void setDeviceId2(string $DeviceId2) 设置CIDR2对应的设备ID
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 */
class AddL3ConnRequest extends AbstractModel
{
    /**
     * @var string 设置互通网段CIDR1，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
     */
    public $Cidr1;

    /**
     * @var string 设置互通网段CIDR2，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
     */
    public $Cidr2;

    /**
     * @var string CIDR1对应的设备ID
     */
    public $DeviceId1;

    /**
     * @var string CIDR2对应的设备ID
     */
    public $DeviceId2;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @param string $Cidr1 设置互通网段CIDR1，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
     * @param string $Cidr2 设置互通网段CIDR2，支持： 10.0.0.0 - 10.255.255.255，172.16.0.0 - 172.31.255.255，192.168.0.0 - 192.168.255.255
     * @param string $DeviceId1 CIDR1对应的设备ID
     * @param string $DeviceId2 CIDR2对应的设备ID
     * @param string $Description 规则描述
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
        if (array_key_exists("Cidr1",$param) and $param["Cidr1"] !== null) {
            $this->Cidr1 = $param["Cidr1"];
        }

        if (array_key_exists("Cidr2",$param) and $param["Cidr2"] !== null) {
            $this->Cidr2 = $param["Cidr2"];
        }

        if (array_key_exists("DeviceId1",$param) and $param["DeviceId1"] !== null) {
            $this->DeviceId1 = $param["DeviceId1"];
        }

        if (array_key_exists("DeviceId2",$param) and $param["DeviceId2"] !== null) {
            $this->DeviceId2 = $param["DeviceId2"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
