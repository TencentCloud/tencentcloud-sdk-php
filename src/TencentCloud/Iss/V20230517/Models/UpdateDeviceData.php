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
 * 修改设备接口返回数据
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
 * @method string getClusterId() 获取设备接入服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置设备接入服务节点ID
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
 * @method integer getStatus() 获取设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrganizationId() 获取设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationId(integer $OrganizationId) 设置设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayId() 获取设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
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
 * @method integer getAppId() 获取用户Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpdateDeviceData extends AbstractModel
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
     * @var string 设备接入服务节点ID
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
     * @var integer 设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationId;

    /**
     * @var string 设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

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
     * @var integer 用户Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

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
     * @param string $ClusterId 设备接入服务节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 设备接入服务节点名称

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransportProtocol 设备流传输协议，1:UDP,2:TCP 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 设备密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 设备描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 设备状态，0:未注册,1:在线,2:离线,3:禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrganizationId 设备所属组织ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayId 设备接入网关ID，从查询网关列表接口中获取（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProtocolType 网关接入协议类型，1.海康SDK，2.大华SDK，3.宇视SDK，4.Onvif（仅网关接入需要）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 设备接入IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 设备Port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 设备用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户Id
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
