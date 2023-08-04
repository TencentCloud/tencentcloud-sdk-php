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
 * 获取设备列表的响应
 *
 * @method string getDeviceId() 获取设备 ID
 * @method void setDeviceId(string $DeviceId) 设置设备 ID
 * @method string getCode() 获取设备国标编码
 * @method void setCode(string $Code) 设置设备国标编码
 * @method integer getStatus() 获取设备状态。0:未注册，1:在线，2:离线，3:禁用
 * @method void setStatus(integer $Status) 设置设备状态。0:未注册，1:在线，2:离线，3:禁用
 * @method integer getTransportProtocol() 获取设备流传输协议。1:UDP,2:TCP
 * @method void setTransportProtocol(integer $TransportProtocol) 设置设备流传输协议。1:UDP,2:TCP
 * @method string getName() 获取设备名称
 * @method void setName(string $Name) 设置设备名称
 * @method integer getType() 获取设备类型。1:IPC,2:NVR
 * @method void setType(integer $Type) 设置设备类型。1:IPC,2:NVR
 * @method string getPassword() 获取设备密码
 * @method void setPassword(string $Password) 设置设备密码
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getClusterId() 获取设备接入服务节点 ID
 * @method void setClusterId(string $ClusterId) 设置设备接入服务节点 ID
 * @method string getClusterName() 获取服务节点名称
 * @method void setClusterName(string $ClusterName) 设置服务节点名称
 * @method integer getAccessProtocol() 获取接入协议。1:RTMP,2:GB,3:GW
 * @method void setAccessProtocol(integer $AccessProtocol) 设置接入协议。1:RTMP,2:GB,3:GW
 * @method string getOrganizationId() 获取设备所属组织 ID
 * @method void setOrganizationId(string $OrganizationId) 设置设备所属组织 ID
 * @method integer getChannelNum() 获取通道数量
 * @method void setChannelNum(integer $ChannelNum) 设置通道数量
 */
class ListDeviceInfo extends AbstractModel
{
    /**
     * @var string 设备 ID
     */
    public $DeviceId;

    /**
     * @var string 设备国标编码
     */
    public $Code;

    /**
     * @var integer 设备状态。0:未注册，1:在线，2:离线，3:禁用
     */
    public $Status;

    /**
     * @var integer 设备流传输协议。1:UDP,2:TCP
     */
    public $TransportProtocol;

    /**
     * @var string 设备名称
     */
    public $Name;

    /**
     * @var integer 设备类型。1:IPC,2:NVR
     */
    public $Type;

    /**
     * @var string 设备密码
     */
    public $Password;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 设备接入服务节点 ID
     */
    public $ClusterId;

    /**
     * @var string 服务节点名称
     */
    public $ClusterName;

    /**
     * @var integer 接入协议。1:RTMP,2:GB,3:GW
     */
    public $AccessProtocol;

    /**
     * @var string 设备所属组织 ID
     */
    public $OrganizationId;

    /**
     * @var integer 通道数量
     */
    public $ChannelNum;

    /**
     * @param string $DeviceId 设备 ID
     * @param string $Code 设备国标编码
     * @param integer $Status 设备状态。0:未注册，1:在线，2:离线，3:禁用
     * @param integer $TransportProtocol 设备流传输协议。1:UDP,2:TCP
     * @param string $Name 设备名称
     * @param integer $Type 设备类型。1:IPC,2:NVR
     * @param string $Password 设备密码
     * @param string $Description 描述
     * @param string $ClusterId 设备接入服务节点 ID
     * @param string $ClusterName 服务节点名称
     * @param integer $AccessProtocol 接入协议。1:RTMP,2:GB,3:GW
     * @param string $OrganizationId 设备所属组织 ID
     * @param integer $ChannelNum 通道数量
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransportProtocol",$param) and $param["TransportProtocol"] !== null) {
            $this->TransportProtocol = $param["TransportProtocol"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("ChannelNum",$param) and $param["ChannelNum"] !== null) {
            $this->ChannelNum = $param["ChannelNum"];
        }
    }
}
