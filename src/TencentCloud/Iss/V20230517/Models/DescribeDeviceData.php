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
 * 查询设备接口返回数据
 *
 * @method string getDeviceId() 获取<p>设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID</p>
 * @method string getCode() 获取<p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
 * @method void setCode(string $Code) 设置<p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
 * @method string getName() 获取<p>设备名称</p>
 * @method void setName(string $Name) 设置<p>设备名称</p>
 * @method integer getAccessProtocol() 获取<p>设备接入协议，1:RTMP,2:GB,3:GW</p>
 * @method void setAccessProtocol(integer $AccessProtocol) 设置<p>设备接入协议，1:RTMP,2:GB,3:GW</p>
 * @method integer getType() 获取<p>设备类型，1:IPC,2:NVR</p>
 * @method void setType(integer $Type) 设置<p>设备类型，1:IPC,2:NVR</p>
 * @method string getClusterId() 获取<p>设备接入服务节点id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>设备接入服务节点id</p>
 * @method string getClusterName() 获取<p>设备接入服务节点名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>设备接入服务节点名称</p>
 * @method integer getTransportProtocol() 获取<p>设备流传输协议，1:UDP,2:TCP</p>
 * @method void setTransportProtocol(integer $TransportProtocol) 设置<p>设备流传输协议，1:UDP,2:TCP</p>
 * @method string getPassword() 获取<p>设备密码</p>
 * @method void setPassword(string $Password) 设置<p>设备密码</p>
 * @method string getDescription() 获取<p>设备描述</p>
 * @method void setDescription(string $Description) 设置<p>设备描述</p>
 * @method string getSipId() 获取<p>sip服务ID</p>
 * @method void setSipId(string $SipId) 设置<p>sip服务ID</p>
 * @method string getSipDomain() 获取<p>sip服务域</p>
 * @method void setSipDomain(string $SipDomain) 设置<p>sip服务域</p>
 * @method string getSipIp() 获取<p>sip服务IP地址</p>
 * @method void setSipIp(string $SipIp) 设置<p>sip服务IP地址</p>
 * @method integer getSipPort() 获取<p>sip服务端口</p>
 * @method void setSipPort(integer $SipPort) 设置<p>sip服务端口</p>
 * @method string getPushStreamUrl() 获取<p>Rtmp设备推流地址(仅rtmp设备有效)</p>
 * @method void setPushStreamUrl(string $PushStreamUrl) 设置<p>Rtmp设备推流地址(仅rtmp设备有效)</p>
 * @method integer getStatus() 获取<p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
 * @method void setStatus(integer $Status) 设置<p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
 * @method string getOrganizationId() 获取<p>设备所属组织ID</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>设备所属组织ID</p>
 * @method string getGatewayId() 获取<p>设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）</p>
 * @method string getGatewayName() 获取<p>设备所属网关名称</p>
 * @method void setGatewayName(string $GatewayName) 设置<p>设备所属网关名称</p>
 * @method string getProtocolTypeName() 获取<p>设备网关协议名称</p>
 * @method void setProtocolTypeName(string $ProtocolTypeName) 设置<p>设备网关协议名称</p>
 * @method integer getProtocolType() 获取<p>网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）</p>
 * @method void setProtocolType(integer $ProtocolType) 设置<p>网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）</p>
 * @method string getIp() 获取<p>设备接入IP</p>
 * @method void setIp(string $Ip) 设置<p>设备接入IP</p>
 * @method integer getPort() 获取<p>设备Port</p>
 * @method void setPort(integer $Port) 设置<p>设备Port</p>
 * @method string getUsername() 获取<p>设备用户名</p>
 * @method void setUsername(string $Username) 设置<p>设备用户名</p>
 * @method string getRegion() 获取<p>设备地域</p>
 * @method void setRegion(string $Region) 设置<p>设备地域</p>
 * @method string getManufacturer() 获取<p>设备厂商</p>
 * @method void setManufacturer(string $Manufacturer) 设置<p>设备厂商</p>
 * @method integer getAudioSwitch() 获取<p>音频关开（0：关闭；1：开启）关闭时丢弃音频</p>
 * @method void setAudioSwitch(integer $AudioSwitch) 设置<p>音频关开（0：关闭；1：开启）关闭时丢弃音频</p>
 * @method integer getSubscribeSwitch() 获取<p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
 * @method void setSubscribeSwitch(integer $SubscribeSwitch) 设置<p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
 * @method string getAppName() 获取<p>RTMP推流地址自定义appName</p>
 * @method void setAppName(string $AppName) 设置<p>RTMP推流地址自定义appName</p>
 * @method string getStreamName() 获取<p>RTMP推流地址自定义streamName</p>
 * @method void setStreamName(string $StreamName) 设置<p>RTMP推流地址自定义streamName</p>
 * @method integer getSilentFrameSwitch() 获取<p>是否开启静音帧（0：关闭；1 开启）</p>
 * @method void setSilentFrameSwitch(integer $SilentFrameSwitch) 设置<p>是否开启静音帧（0：关闭；1 开启）</p>
 * @method string getPushStreamSecureUrl() 获取<p>Rtmp设备安全认证推流地址(仅rtmp设备有效)</p>
 * @method void setPushStreamSecureUrl(string $PushStreamSecureUrl) 设置<p>Rtmp设备安全认证推流地址(仅rtmp设备有效)</p>
 */
class DescribeDeviceData extends AbstractModel
{
    /**
     * @var string <p>设备ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
     */
    public $Code;

    /**
     * @var string <p>设备名称</p>
     */
    public $Name;

    /**
     * @var integer <p>设备接入协议，1:RTMP,2:GB,3:GW</p>
     */
    public $AccessProtocol;

    /**
     * @var integer <p>设备类型，1:IPC,2:NVR</p>
     */
    public $Type;

    /**
     * @var string <p>设备接入服务节点id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>设备接入服务节点名称</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>设备流传输协议，1:UDP,2:TCP</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>设备密码</p>
     */
    public $Password;

    /**
     * @var string <p>设备描述</p>
     */
    public $Description;

    /**
     * @var string <p>sip服务ID</p>
     */
    public $SipId;

    /**
     * @var string <p>sip服务域</p>
     */
    public $SipDomain;

    /**
     * @var string <p>sip服务IP地址</p>
     */
    public $SipIp;

    /**
     * @var integer <p>sip服务端口</p>
     */
    public $SipPort;

    /**
     * @var string <p>Rtmp设备推流地址(仅rtmp设备有效)</p>
     */
    public $PushStreamUrl;

    /**
     * @var integer <p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
     */
    public $Status;

    /**
     * @var string <p>设备所属组织ID</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）</p>
     */
    public $GatewayId;

    /**
     * @var string <p>设备所属网关名称</p>
     */
    public $GatewayName;

    /**
     * @var string <p>设备网关协议名称</p>
     */
    public $ProtocolTypeName;

    /**
     * @var integer <p>网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）</p>
     */
    public $ProtocolType;

    /**
     * @var string <p>设备接入IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>设备Port</p>
     */
    public $Port;

    /**
     * @var string <p>设备用户名</p>
     */
    public $Username;

    /**
     * @var string <p>设备地域</p>
     */
    public $Region;

    /**
     * @var string <p>设备厂商</p>
     */
    public $Manufacturer;

    /**
     * @var integer <p>音频关开（0：关闭；1：开启）关闭时丢弃音频</p>
     */
    public $AudioSwitch;

    /**
     * @var integer <p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
     */
    public $SubscribeSwitch;

    /**
     * @var string <p>RTMP推流地址自定义appName</p>
     */
    public $AppName;

    /**
     * @var string <p>RTMP推流地址自定义streamName</p>
     */
    public $StreamName;

    /**
     * @var integer <p>是否开启静音帧（0：关闭；1 开启）</p>
     */
    public $SilentFrameSwitch;

    /**
     * @var string <p>Rtmp设备安全认证推流地址(仅rtmp设备有效)</p>
     */
    public $PushStreamSecureUrl;

    /**
     * @param string $DeviceId <p>设备ID</p>
     * @param string $Code <p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
     * @param string $Name <p>设备名称</p>
     * @param integer $AccessProtocol <p>设备接入协议，1:RTMP,2:GB,3:GW</p>
     * @param integer $Type <p>设备类型，1:IPC,2:NVR</p>
     * @param string $ClusterId <p>设备接入服务节点id</p>
     * @param string $ClusterName <p>设备接入服务节点名称</p>
     * @param integer $TransportProtocol <p>设备流传输协议，1:UDP,2:TCP</p>
     * @param string $Password <p>设备密码</p>
     * @param string $Description <p>设备描述</p>
     * @param string $SipId <p>sip服务ID</p>
     * @param string $SipDomain <p>sip服务域</p>
     * @param string $SipIp <p>sip服务IP地址</p>
     * @param integer $SipPort <p>sip服务端口</p>
     * @param string $PushStreamUrl <p>Rtmp设备推流地址(仅rtmp设备有效)</p>
     * @param integer $Status <p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
     * @param string $OrganizationId <p>设备所属组织ID</p>
     * @param string $GatewayId <p>设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）</p>
     * @param string $GatewayName <p>设备所属网关名称</p>
     * @param string $ProtocolTypeName <p>设备网关协议名称</p>
     * @param integer $ProtocolType <p>网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）</p>
     * @param string $Ip <p>设备接入IP</p>
     * @param integer $Port <p>设备Port</p>
     * @param string $Username <p>设备用户名</p>
     * @param string $Region <p>设备地域</p>
     * @param string $Manufacturer <p>设备厂商</p>
     * @param integer $AudioSwitch <p>音频关开（0：关闭；1：开启）关闭时丢弃音频</p>
     * @param integer $SubscribeSwitch <p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
     * @param string $AppName <p>RTMP推流地址自定义appName</p>
     * @param string $StreamName <p>RTMP推流地址自定义streamName</p>
     * @param integer $SilentFrameSwitch <p>是否开启静音帧（0：关闭；1 开启）</p>
     * @param string $PushStreamSecureUrl <p>Rtmp设备安全认证推流地址(仅rtmp设备有效)</p>
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

        if (array_key_exists("PushStreamSecureUrl",$param) and $param["PushStreamSecureUrl"] !== null) {
            $this->PushStreamSecureUrl = $param["PushStreamSecureUrl"];
        }
    }
}
