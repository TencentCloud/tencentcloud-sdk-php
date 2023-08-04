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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserDevice请求参数结构体
 *
 * @method string getDeviceId() 获取设备ID（从获取设备列表接口ListDevices中获取）
 * @method void setDeviceId(string $DeviceId) 设置设备ID（从获取设备列表接口ListDevices中获取）
 * @method string getName() 获取设备名称（仅支持中文、英文、数字、_、-，长度不超过32个字符）
 * @method void setName(string $Name) 设置设备名称（仅支持中文、英文、数字、_、-，长度不超过32个字符）
 * @method integer getTransportProtocol() 获取设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）
 * @method void setTransportProtocol(integer $TransportProtocol) 设置设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）
 * @method string getPassword() 获取设备密码（仅国标，网关设备支持）
 * @method void setPassword(string $Password) 设置设备密码（仅国标，网关设备支持）
 * @method string getDescription() 获取设备描述（仅支持中文、英文、数字、_、-，长度不超过128位）
 * @method void setDescription(string $Description) 设置设备描述（仅支持中文、英文、数字、_、-，长度不超过128位）
 * @method string getIp() 获取设备接入Ip（仅网关接入支持）
 * @method void setIp(string $Ip) 设置设备接入Ip（仅网关接入支持）
 * @method integer getPort() 获取设备Port（仅网关接入支持）
 * @method void setPort(integer $Port) 设置设备Port（仅网关接入支持）
 * @method string getUsername() 获取设备用户名（仅网关接入支持）
 * @method void setUsername(string $Username) 设置设备用户名（仅网关接入支持）
 */
class UpdateUserDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备ID（从获取设备列表接口ListDevices中获取）
     */
    public $DeviceId;

    /**
     * @var string 设备名称（仅支持中文、英文、数字、_、-，长度不超过32个字符）
     */
    public $Name;

    /**
     * @var integer 设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）
     */
    public $TransportProtocol;

    /**
     * @var string 设备密码（仅国标，网关设备支持）
     */
    public $Password;

    /**
     * @var string 设备描述（仅支持中文、英文、数字、_、-，长度不超过128位）
     */
    public $Description;

    /**
     * @var string 设备接入Ip（仅网关接入支持）
     */
    public $Ip;

    /**
     * @var integer 设备Port（仅网关接入支持）
     */
    public $Port;

    /**
     * @var string 设备用户名（仅网关接入支持）
     */
    public $Username;

    /**
     * @param string $DeviceId 设备ID（从获取设备列表接口ListDevices中获取）
     * @param string $Name 设备名称（仅支持中文、英文、数字、_、-，长度不超过32个字符）
     * @param integer $TransportProtocol 设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）
     * @param string $Password 设备密码（仅国标，网关设备支持）
     * @param string $Description 设备描述（仅支持中文、英文、数字、_、-，长度不超过128位）
     * @param string $Ip 设备接入Ip（仅网关接入支持）
     * @param integer $Port 设备Port（仅网关接入支持）
     * @param string $Username 设备用户名（仅网关接入支持）
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TransportProtocol",$param) and $param["TransportProtocol"] !== null) {
            $this->TransportProtocol = $param["TransportProtocol"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
