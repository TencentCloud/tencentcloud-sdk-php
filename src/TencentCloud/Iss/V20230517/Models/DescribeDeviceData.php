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
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getCode() 获取设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）
 * @method void setCode(string $Code) 设置设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）
 * @method string getName() 获取设备名称
 * @method void setName(string $Name) 设置设备名称
 * @method integer getAccessProtocol() 获取设备接入协议，1:RTMP,2:GB,3:GW 
 * @method void setAccessProtocol(integer $AccessProtocol) 设置设备接入协议，1:RTMP,2:GB,3:GW 
 * @method integer getType() 获取设备类型，1:IPC,2:NVR
 * @method void setType(integer $Type) 设置设备类型，1:IPC,2:NVR
 * @method string getClusterId() 获取设备接入服务节点id
 * @method void setClusterId(string $ClusterId) 设置设备接入服务节点id
 * @method string getClusterName() 获取设备接入服务节点名称

 * @method void setClusterName(string $ClusterName) 设置设备接入服务节点名称

 * @method integer getTransportProtocol() 获取设备流传输协议，1:UDP,2:TCP 
 * @method void setTransportProtocol(integer $TransportProtocol) 设置设备流传输协议，1:UDP,2:TCP 
 * @method string getPassword() 获取设备密码
 * @method void setPassword(string $Password) 设置设备密码
 * @method string getDescription() 获取设备描述
 * @method void setDescription(string $Description) 设置设备描述
 * @method string getSipId() 获取sip服务ID
 * @method void setSipId(string $SipId) 设置sip服务ID
 * @method string getSipDomain() 获取sip服务域
 * @method void setSipDomain(string $SipDomain) 设置sip服务域
 * @method string getSipIp() 获取sip服务IP地址
 * @method void setSipIp(string $SipIp) 设置sip服务IP地址
 * @method integer getSipPort() 获取sip服务端口
 * @method void setSipPort(integer $SipPort) 设置sip服务端口
 * @method string getPushStreamUrl() 获取Rtmp设备推流地址(仅rtmp设备有效)
 * @method void setPushStreamUrl(string $PushStreamUrl) 设置Rtmp设备推流地址(仅rtmp设备有效)
 * @method integer getStatus() 获取设备状态，0:未注册,1:在线,2:离线,3:禁用
 * @method void setStatus(integer $Status) 设置设备状态，0:未注册,1:在线,2:离线,3:禁用
 * @method string getOrganizationId() 获取设备所属组织ID
 * @method void setOrganizationId(string $OrganizationId) 设置设备所属组织ID
 * @method string getGatewayId() 获取设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
 * @method void setGatewayId(string $GatewayId) 设置设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
 * @method string getGatewayName() 获取设备所属网关名称
 * @method void setGatewayName(string $GatewayName) 设置设备所属网关名称
 * @method string getProtocolTypeName() 获取设备网关协议名称
 * @method void setProtocolTypeName(string $ProtocolTypeName) 设置设备网关协议名称
 * @method integer getProtocolType() 获取网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
 * @method void setProtocolType(integer $ProtocolType) 设置网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
 * @method string getIp() 获取设备接入IP
 * @method void setIp(string $Ip) 设置设备接入IP
 * @method integer getPort() 获取设备Port
 * @method void setPort(integer $Port) 设置设备Port
 * @method string getUsername() 获取设备用户名
 * @method void setUsername(string $Username) 设置设备用户名
 * @method string getRegion() 获取设备地域
 * @method void setRegion(string $Region) 设置设备地域
 * @method string getManufacturer() 获取设备厂商
 * @method void setManufacturer(string $Manufacturer) 设置设备厂商
 * @method integer getAudioSwitch() 获取音频关开（0：关闭；1：开启）关闭时丢弃音频	
 * @method void setAudioSwitch(integer $AudioSwitch) 设置音频关开（0：关闭；1：开启）关闭时丢弃音频	
 * @method integer getSubscribeSwitch() 获取订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效	
 * @method void setSubscribeSwitch(integer $SubscribeSwitch) 设置订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效	
 * @method string getAppName() 获取RTMP推流地址自定义appName
 * @method void setAppName(string $AppName) 设置RTMP推流地址自定义appName
 * @method string getStreamName() 获取RTMP推流地址自定义streamName
 * @method void setStreamName(string $StreamName) 设置RTMP推流地址自定义streamName
 * @method integer getSilentFrameSwitch() 获取是否开启静音帧（0：关闭；1 开启）
 * @method void setSilentFrameSwitch(integer $SilentFrameSwitch) 设置是否开启静音帧（0：关闭；1 开启）
 */
class DescribeDeviceData extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）
     */
    public $Code;

    /**
     * @var string 设备名称
     */
    public $Name;

    /**
     * @var integer 设备接入协议，1:RTMP,2:GB,3:GW 
     */
    public $AccessProtocol;

    /**
     * @var integer 设备类型，1:IPC,2:NVR
     */
    public $Type;

    /**
     * @var string 设备接入服务节点id
     */
    public $ClusterId;

    /**
     * @var string 设备接入服务节点名称

     */
    public $ClusterName;

    /**
     * @var integer 设备流传输协议，1:UDP,2:TCP 
     */
    public $TransportProtocol;

    /**
     * @var string 设备密码
     */
    public $Password;

    /**
     * @var string 设备描述
     */
    public $Description;

    /**
     * @var string sip服务ID
     */
    public $SipId;

    /**
     * @var string sip服务域
     */
    public $SipDomain;

    /**
     * @var string sip服务IP地址
     */
    public $SipIp;

    /**
     * @var integer sip服务端口
     */
    public $SipPort;

    /**
     * @var string Rtmp设备推流地址(仅rtmp设备有效)
     */
    public $PushStreamUrl;

    /**
     * @var integer 设备状态，0:未注册,1:在线,2:离线,3:禁用
     */
    public $Status;

    /**
     * @var string 设备所属组织ID
     */
    public $OrganizationId;

    /**
     * @var string 设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
     */
    public $GatewayId;

    /**
     * @var string 设备所属网关名称
     */
    public $GatewayName;

    /**
     * @var string 设备网关协议名称
     */
    public $ProtocolTypeName;

    /**
     * @var integer 网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
     */
    public $ProtocolType;

    /**
     * @var string 设备接入IP
     */
    public $Ip;

    /**
     * @var integer 设备Port
     */
    public $Port;

    /**
     * @var string 设备用户名
     */
    public $Username;

    /**
     * @var string 设备地域
     */
    public $Region;

    /**
     * @var string 设备厂商
     */
    public $Manufacturer;

    /**
     * @var integer 音频关开（0：关闭；1：开启）关闭时丢弃音频	
     */
    public $AudioSwitch;

    /**
     * @var integer 订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效	
     */
    public $SubscribeSwitch;

    /**
     * @var string RTMP推流地址自定义appName
     */
    public $AppName;

    /**
     * @var string RTMP推流地址自定义streamName
     */
    public $StreamName;

    /**
     * @var integer 是否开启静音帧（0：关闭；1 开启）
     */
    public $SilentFrameSwitch;

    /**
     * @param string $DeviceId 设备ID
     * @param string $Code 设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）
     * @param string $Name 设备名称
     * @param integer $AccessProtocol 设备接入协议，1:RTMP,2:GB,3:GW 
     * @param integer $Type 设备类型，1:IPC,2:NVR
     * @param string $ClusterId 设备接入服务节点id
     * @param string $ClusterName 设备接入服务节点名称

     * @param integer $TransportProtocol 设备流传输协议，1:UDP,2:TCP 
     * @param string $Password 设备密码
     * @param string $Description 设备描述
     * @param string $SipId sip服务ID
     * @param string $SipDomain sip服务域
     * @param string $SipIp sip服务IP地址
     * @param integer $SipPort sip服务端口
     * @param string $PushStreamUrl Rtmp设备推流地址(仅rtmp设备有效)
     * @param integer $Status 设备状态，0:未注册,1:在线,2:离线,3:禁用
     * @param string $OrganizationId 设备所属组织ID
     * @param string $GatewayId 设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
     * @param string $GatewayName 设备所属网关名称
     * @param string $ProtocolTypeName 设备网关协议名称
     * @param integer $ProtocolType 网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
     * @param string $Ip 设备接入IP
     * @param integer $Port 设备Port
     * @param string $Username 设备用户名
     * @param string $Region 设备地域
     * @param string $Manufacturer 设备厂商
     * @param integer $AudioSwitch 音频关开（0：关闭；1：开启）关闭时丢弃音频	
     * @param integer $SubscribeSwitch 订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效	
     * @param string $AppName RTMP推流地址自定义appName
     * @param string $StreamName RTMP推流地址自定义streamName
     * @param integer $SilentFrameSwitch 是否开启静音帧（0：关闭；1 开启）
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

        if (array_key_exists("AudioSwitch",$param) and $param["AudioSwitch"] !== null) {
            $this->AudioSwitch = $param["AudioSwitch"];
        }

        if (array_key_exists("SubscribeSwitch",$param) and $param["SubscribeSwitch"] !== null) {
            $this->SubscribeSwitch = $param["SubscribeSwitch"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("SilentFrameSwitch",$param) and $param["SilentFrameSwitch"] !== null) {
            $this->SilentFrameSwitch = $param["SilentFrameSwitch"];
        }
    }
}
