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
 * AddUserDevice请求参数结构体
 *
 * @method string getName() 获取设备名称，仅支持中文、英文、数字、_、-，长度不超过32个字符；（设备名称无需全局唯一，可以重复）
 * @method void setName(string $Name) 设置设备名称，仅支持中文、英文、数字、_、-，长度不超过32个字符；（设备名称无需全局唯一，可以重复）
 * @method integer getAccessProtocol() 获取设备接入协议（1:RTMP,2:GB,3:GW）
 * @method void setAccessProtocol(integer $AccessProtocol) 设置设备接入协议（1:RTMP,2:GB,3:GW）
 * @method integer getType() 获取设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）
 * @method void setType(integer $Type) 设置设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）
 * @method string getOrganizationId() 获取设备所属组织ID，从查询组织接口DescribeOrganization中获取
 * @method void setOrganizationId(string $OrganizationId) 设置设备所属组织ID，从查询组织接口DescribeOrganization中获取
 * @method string getClusterId() 获取设备接入服务节点ID（从查询设备可用服务节点接口DescribeDeviceRegion中获取的Value字段）
 * @method void setClusterId(string $ClusterId) 设置设备接入服务节点ID（从查询设备可用服务节点接口DescribeDeviceRegion中获取的Value字段）
 * @method integer getTransportProtocol() 获取设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)
 * @method void setTransportProtocol(integer $TransportProtocol) 设置设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)
 * @method string getPassword() 获取设备密码（国标，网关设备必填，仅支持数字组合，长度为1-64个字符）
 * @method void setPassword(string $Password) 设置设备密码（国标，网关设备必填，仅支持数字组合，长度为1-64个字符）
 * @method string getDescription() 获取设备描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method void setDescription(string $Description) 设置设备描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method string getGatewayId() 获取设备接入网关ID，从查询网关列表接口中ListGateways获取（仅网关接入需要）
 * @method void setGatewayId(string $GatewayId) 设置设备接入网关ID，从查询网关列表接口中ListGateways获取（仅网关接入需要）
 * @method integer getProtocolType() 获取网关接入协议类型（从查询网关接入协议接口DescribeGatewayProtocol中获取）1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
 * @method void setProtocolType(integer $ProtocolType) 设置网关接入协议类型（从查询网关接入协议接口DescribeGatewayProtocol中获取）1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
 * @method string getIp() 获取设备接入IP（仅网关接入需要）
 * @method void setIp(string $Ip) 设置设备接入IP（仅网关接入需要）
 * @method integer getPort() 获取设备端口（仅网关接入需要）
 * @method void setPort(integer $Port) 设置设备端口（仅网关接入需要）
 * @method string getUsername() 获取设备用户名（仅网关接入需要）
 * @method void setUsername(string $Username) 设置设备用户名（仅网关接入需要）
 */
class AddUserDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备名称，仅支持中文、英文、数字、_、-，长度不超过32个字符；（设备名称无需全局唯一，可以重复）
     */
    public $Name;

    /**
     * @var integer 设备接入协议（1:RTMP,2:GB,3:GW）
     */
    public $AccessProtocol;

    /**
     * @var integer 设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）
     */
    public $Type;

    /**
     * @var string 设备所属组织ID，从查询组织接口DescribeOrganization中获取
     */
    public $OrganizationId;

    /**
     * @var string 设备接入服务节点ID（从查询设备可用服务节点接口DescribeDeviceRegion中获取的Value字段）
     */
    public $ClusterId;

    /**
     * @var integer 设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)
     */
    public $TransportProtocol;

    /**
     * @var string 设备密码（国标，网关设备必填，仅支持数字组合，长度为1-64个字符）
     */
    public $Password;

    /**
     * @var string 设备描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     */
    public $Description;

    /**
     * @var string 设备接入网关ID，从查询网关列表接口中ListGateways获取（仅网关接入需要）
     */
    public $GatewayId;

    /**
     * @var integer 网关接入协议类型（从查询网关接入协议接口DescribeGatewayProtocol中获取）1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
     */
    public $ProtocolType;

    /**
     * @var string 设备接入IP（仅网关接入需要）
     */
    public $Ip;

    /**
     * @var integer 设备端口（仅网关接入需要）
     */
    public $Port;

    /**
     * @var string 设备用户名（仅网关接入需要）
     */
    public $Username;

    /**
     * @param string $Name 设备名称，仅支持中文、英文、数字、_、-，长度不超过32个字符；（设备名称无需全局唯一，可以重复）
     * @param integer $AccessProtocol 设备接入协议（1:RTMP,2:GB,3:GW）
     * @param integer $Type 设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）
     * @param string $OrganizationId 设备所属组织ID，从查询组织接口DescribeOrganization中获取
     * @param string $ClusterId 设备接入服务节点ID（从查询设备可用服务节点接口DescribeDeviceRegion中获取的Value字段）
     * @param integer $TransportProtocol 设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)
     * @param string $Password 设备密码（国标，网关设备必填，仅支持数字组合，长度为1-64个字符）
     * @param string $Description 设备描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     * @param string $GatewayId 设备接入网关ID，从查询网关列表接口中ListGateways获取（仅网关接入需要）
     * @param integer $ProtocolType 网关接入协议类型（从查询网关接入协议接口DescribeGatewayProtocol中获取）1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
     * @param string $Ip 设备接入IP（仅网关接入需要）
     * @param integer $Port 设备端口（仅网关接入需要）
     * @param string $Username 设备用户名（仅网关接入需要）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
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
