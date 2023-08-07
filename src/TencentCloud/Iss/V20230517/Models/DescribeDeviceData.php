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
 * 查询设备接口返回数据
 *
 * @method string getDeviceId() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取设备编码（即我们为设备生成的20位国标编码）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置设备编码（即我们为设备生成的20位国标编码）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessProtocol() 获取设备接入协议，1:RTMP,2:GB,3:GW 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessProtocol(integer $AccessProtocol) 设置设备接入协议，1:RTMP,2:GB,3:GW 
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取设备类型，1:IPC,2:NVR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置设备类型，1:IPC,2:NVR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取设备接入服务节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置设备接入服务节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取设备接入服务节点名称

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置设备接入服务节点名称

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransportProtocol() 获取设备流传输协议，1:UDP,2:TCP 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransportProtocol(integer $TransportProtocol) 设置设备流传输协议，1:UDP,2:TCP 
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取设备密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置设备密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取设备描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置设备描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSipId() 获取sip服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSipId(string $SipId) 设置sip服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSipDomain() 获取sip服务域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSipDomain(string $SipDomain) 设置sip服务域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSipIp() 获取sip服务IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSipIp(string $SipIp) 设置sip服务IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSipPort() 获取sip服务端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSipPort(integer $SipPort) 设置sip服务端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPushStreamUrl() 获取Rtmp设备推流地址(仅rtmp设备有效)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPushStreamUrl(string $PushStreamUrl) 设置Rtmp设备推流地址(仅rtmp设备有效)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationId() 获取设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationId(string $OrganizationId) 设置设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayId() 获取设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayName() 获取设备所属网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayName(string $GatewayName) 设置设备所属网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocolTypeName() 获取设备网关协议名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolTypeName(string $ProtocolTypeName) 设置设备网关协议名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProtocolType() 获取网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolType(integer $ProtocolType) 设置网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取设备接入IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置设备接入IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取设备Port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置设备Port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取设备用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置设备用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取设备地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置设备地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManufacturer() 获取设备厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(string $Manufacturer) 设置设备厂商
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDeviceData extends AbstractModel
{
    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 设备编码（即我们为设备生成的20位国标编码）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 设备接入协议，1:RTMP,2:GB,3:GW 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessProtocol;

    /**
     * @var integer 设备类型，1:IPC,2:NVR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 设备接入服务节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 设备接入服务节点名称

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var integer 设备流传输协议，1:UDP,2:TCP 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransportProtocol;

    /**
     * @var string 设备密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string 设备描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string sip服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SipId;

    /**
     * @var string sip服务域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SipDomain;

    /**
     * @var string sip服务IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SipIp;

    /**
     * @var integer sip服务端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SipPort;

    /**
     * @var string Rtmp设备推流地址(仅rtmp设备有效)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PushStreamUrl;

    /**
     * @var integer 设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationId;

    /**
     * @var string 设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var string 设备所属网关名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayName;

    /**
     * @var string 设备网关协议名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolTypeName;

    /**
     * @var integer 网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolType;

    /**
     * @var string 设备接入IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 设备Port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 设备用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string 设备地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 设备厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @param string $DeviceId 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 设备编码（即我们为设备生成的20位国标编码）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessProtocol 设备接入协议，1:RTMP,2:GB,3:GW 
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 设备类型，1:IPC,2:NVR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 设备接入服务节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 设备接入服务节点名称

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransportProtocol 设备流传输协议，1:UDP,2:TCP 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 设备密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 设备描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SipId sip服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SipDomain sip服务域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SipIp sip服务IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SipPort sip服务端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PushStreamUrl Rtmp设备推流地址(仅rtmp设备有效)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationId 设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayId 设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayName 设备所属网关名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtocolTypeName 设备网关协议名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProtocolType 网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 设备接入IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 设备Port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 设备用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 设备地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manufacturer 设备厂商
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
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

        if (array_key_exists("SipId",$param) and $param["SipId"] !== null) {
            $this->SipId = $param["SipId"];
        }

        if (array_key_exists("SipDomain",$param) and $param["SipDomain"] !== null) {
            $this->SipDomain = $param["SipDomain"];
        }

        if (array_key_exists("SipIp",$param) and $param["SipIp"] !== null) {
            $this->SipIp = $param["SipIp"];
        }

        if (array_key_exists("SipPort",$param) and $param["SipPort"] !== null) {
            $this->SipPort = $param["SipPort"];
        }

        if (array_key_exists("PushStreamUrl",$param) and $param["PushStreamUrl"] !== null) {
            $this->PushStreamUrl = $param["PushStreamUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("ProtocolTypeName",$param) and $param["ProtocolTypeName"] !== null) {
            $this->ProtocolTypeName = $param["ProtocolTypeName"];
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }
    }
}
