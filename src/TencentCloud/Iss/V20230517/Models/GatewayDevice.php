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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关设备数据
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method integer getProtocolType() 获取网关接入协议类型
 * @method void setProtocolType(integer $ProtocolType) 设置网关接入协议类型
 * @method string getProtocolTypeName() 获取网关接入协议名称
 * @method void setProtocolTypeName(string $ProtocolTypeName) 设置网关接入协议名称
 * @method string getName() 获取设备名称
 * @method void setName(string $Name) 设置设备名称
 * @method integer getType() 获取设备类型
 * @method void setType(integer $Type) 设置设备类型
 * @method string getIp() 获取设备内网IP
 * @method void setIp(string $Ip) 设置设备内网IP
 * @method integer getPort() 获取设备端口
 * @method void setPort(integer $Port) 设置设备端口
 * @method integer getChannelNum() 获取设备下通道数
 * @method void setChannelNum(integer $ChannelNum) 设置设备下通道数
 * @method integer getStatus() 获取设备状态
 * @method void setStatus(integer $Status) 设置设备状态
 */
class GatewayDevice extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var integer 网关接入协议类型
     */
    public $ProtocolType;

    /**
     * @var string 网关接入协议名称
     */
    public $ProtocolTypeName;

    /**
     * @var string 设备名称
     */
    public $Name;

    /**
     * @var integer 设备类型
     */
    public $Type;

    /**
     * @var string 设备内网IP
     */
    public $Ip;

    /**
     * @var integer 设备端口
     */
    public $Port;

    /**
     * @var integer 设备下通道数
     */
    public $ChannelNum;

    /**
     * @var integer 设备状态
     */
    public $Status;

    /**
     * @param string $DeviceId 设备ID
     * @param integer $ProtocolType 网关接入协议类型
     * @param string $ProtocolTypeName 网关接入协议名称
     * @param string $Name 设备名称
     * @param integer $Type 设备类型
     * @param string $Ip 设备内网IP
     * @param integer $Port 设备端口
     * @param integer $ChannelNum 设备下通道数
     * @param integer $Status 设备状态
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

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("ProtocolTypeName",$param) and $param["ProtocolTypeName"] !== null) {
            $this->ProtocolTypeName = $param["ProtocolTypeName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ChannelNum",$param) and $param["ChannelNum"] !== null) {
            $this->ChannelNum = $param["ChannelNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
