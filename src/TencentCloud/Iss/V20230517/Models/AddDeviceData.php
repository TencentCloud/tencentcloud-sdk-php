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
 * 增加设备接口返回数据
 *
 * @method string getDeviceId() 获取<p>设备iD</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备iD</p>
 * @method string getCode() 获取<p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
 * @method void setCode(string $Code) 设置<p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
 * @method string getName() 获取<p>设备名称</p>
 * @method void setName(string $Name) 设置<p>设备名称</p>
 * @method integer getAccessProtocol() 获取<p>设备接入协议，1:RTMP,2:GB</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul>
 * @method void setAccessProtocol(integer $AccessProtocol) 设置<p>设备接入协议，1:RTMP,2:GB</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul>
 * @method integer getType() 获取<p>设备类型，1:IPC,2:NVR</p>
 * @method void setType(integer $Type) 设置<p>设备类型，1:IPC,2:NVR</p>
 * @method string getClusterId() 获取<p>设备接入服务节点ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>设备接入服务节点ID</p>
 * @method string getClusterName() 获取<p>设备接入服务节点名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>设备接入服务节点名称</p>
 * @method integer getTransportProtocol() 获取<p>设备流传输协议，1:UDP,2:TCP</p>
 * @method void setTransportProtocol(integer $TransportProtocol) 设置<p>设备流传输协议，1:UDP,2:TCP</p>
 * @method string getPassword() 获取<p>设备密码</p>
 * @method void setPassword(string $Password) 设置<p>设备密码</p>
 * @method string getDescription() 获取<p>设备描述</p>
 * @method void setDescription(string $Description) 设置<p>设备描述</p>
 * @method integer getStatus() 获取<p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
 * @method void setStatus(integer $Status) 设置<p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
 * @method integer getOrganizationId() 获取<p>设备所属组织ID</p>
 * @method void setOrganizationId(integer $OrganizationId) 设置<p>设备所属组织ID</p>
 * @method string getGatewayId() 获取<p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getProtocolType() 获取<p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setProtocolType(integer $ProtocolType) 设置<p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
 * @method string getIp() 获取<p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setIp(string $Ip) 设置<p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getPort() 获取<p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setPort(integer $Port) 设置<p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
 * @method string getUsername() 获取<p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setUsername(string $Username) 设置<p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getAppId() 获取<p>用户ID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户ID</p>
 */
class AddDeviceData extends AbstractModel
{
    /**
     * @var string <p>设备iD</p>
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
     * @var integer <p>设备接入协议，1:RTMP,2:GB</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul>
     */
    public $AccessProtocol;

    /**
     * @var integer <p>设备类型，1:IPC,2:NVR</p>
     */
    public $Type;

    /**
     * @var string <p>设备接入服务节点ID</p>
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
     * @var integer <p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
     */
    public $Status;

    /**
     * @var integer <p>设备所属组织ID</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $ProtocolType;

    /**
     * @var string <p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $Ip;

    /**
     * @var integer <p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $Port;

    /**
     * @var string <p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $Username;

    /**
     * @var integer <p>用户ID</p>
     */
    public $AppId;

    /**
     * @param string $DeviceId <p>设备iD</p>
     * @param string $Code <p>设备编码（国标设备即我们为设备生成的20位国标编码，rtmp 设备为10 位设备编码）</p>
     * @param string $Name <p>设备名称</p>
     * @param integer $AccessProtocol <p>设备接入协议，1:RTMP,2:GB</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul>
     * @param integer $Type <p>设备类型，1:IPC,2:NVR</p>
     * @param string $ClusterId <p>设备接入服务节点ID</p>
     * @param string $ClusterName <p>设备接入服务节点名称</p>
     * @param integer $TransportProtocol <p>设备流传输协议，1:UDP,2:TCP</p>
     * @param string $Password <p>设备密码</p>
     * @param string $Description <p>设备描述</p>
     * @param integer $Status <p>设备状态，0:未注册,1:在线,2:离线,3:禁用</p>
     * @param integer $OrganizationId <p>设备所属组织ID</p>
     * @param string $GatewayId <p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $ProtocolType <p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
     * @param string $Ip <p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $Port <p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
     * @param string $Username <p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $AppId <p>用户ID</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
