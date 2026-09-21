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
 * AddUserDevice请求参数结构体
 *
 * @method string getName() 获取<p>设备名称，仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位；（设备名称无需全局唯一，可以重复）</p>
 * @method void setName(string $Name) 设置<p>设备名称，仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位；（设备名称无需全局唯一，可以重复）</p>
 * @method integer getAccessProtocol() 获取<p>设备接入协议（1:RTMP,2:GB,6:ISUP）</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul><p>默认值：2</p>
 * @method void setAccessProtocol(integer $AccessProtocol) 设置<p>设备接入协议（1:RTMP,2:GB,6:ISUP）</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul><p>默认值：2</p>
 * @method integer getType() 获取<p>设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）</p><p>枚举值：</p><ul><li>1： IPC</li><li>2： NVR</li></ul>
 * @method void setType(integer $Type) 设置<p>设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）</p><p>枚举值：</p><ul><li>1： IPC</li><li>2： NVR</li></ul>
 * @method string getOrganizationId() 获取<p>设备所属组织ID，从查询组织接口DescribeOrganization中获取</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>设备所属组织ID，从查询组织接口DescribeOrganization中获取</p>
 * @method string getClusterId() 获取<p>设备接入服务节点ID（从查询设备可用服务节点接口DescribeRegionDomain中获取的Value字段）</p>
 * @method void setClusterId(string $ClusterId) 设置<p>设备接入服务节点ID（从查询设备可用服务节点接口DescribeRegionDomain中获取的Value字段）</p>
 * @method integer getTransportProtocol() 获取<p>设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)</p>
 * @method void setTransportProtocol(integer $TransportProtocol) 设置<p>设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)</p>
 * @method string getPassword() 获取<p>设备密码（国标设备必填，长度为1-64个字符）</p>
 * @method void setPassword(string $Password) 设置<p>设备密码（国标设备必填，长度为1-64个字符）</p>
 * @method string getDescription() 获取<p>设备描述，长度不超过128个字符</p>
 * @method void setDescription(string $Description) 设置<p>设备描述，长度不超过128个字符</p>
 * @method string getGatewayId() 获取<p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getProtocolType() 获取<p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setProtocolType(integer $ProtocolType) 设置<p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
 * @method string getIp() 获取<p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setIp(string $Ip) 设置<p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getPort() 获取<p>设备端口（已不再使用，保留用于兼容，可忽略）</p><p>取值范围：[1, 65535]</p><p>单位： 端口</p>
 * @method void setPort(integer $Port) 设置<p>设备端口（已不再使用，保留用于兼容，可忽略）</p><p>取值范围：[1, 65535]</p><p>单位： 端口</p>
 * @method string getUsername() 获取<p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setUsername(string $Username) 设置<p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
 * @method string getSNCode() 获取<p>设备 SN（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setSNCode(string $SNCode) 设置<p>设备 SN（已不再使用，保留用于兼容，可忽略）</p>
 * @method string getAppName() 获取<p>RTMP推流地址自定义AppName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
 * @method void setAppName(string $AppName) 设置<p>RTMP推流地址自定义AppName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
 * @method string getStreamName() 获取<p>RTMP推流地址自定义StreamName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
 * @method void setStreamName(string $StreamName) 设置<p>RTMP推流地址自定义StreamName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
 */
class AddUserDeviceRequest extends AbstractModel
{
    /**
     * @var string <p>设备名称，仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位；（设备名称无需全局唯一，可以重复）</p>
     */
    public $Name;

    /**
     * @var integer <p>设备接入协议（1:RTMP,2:GB,6:ISUP）</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul><p>默认值：2</p>
     */
    public $AccessProtocol;

    /**
     * @var integer <p>设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）</p><p>枚举值：</p><ul><li>1： IPC</li><li>2： NVR</li></ul>
     */
    public $Type;

    /**
     * @var string <p>设备所属组织ID，从查询组织接口DescribeOrganization中获取</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>设备接入服务节点ID（从查询设备可用服务节点接口DescribeRegionDomain中获取的Value字段）</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>设备密码（国标设备必填，长度为1-64个字符）</p>
     */
    public $Password;

    /**
     * @var string <p>设备描述，长度不超过128个字符</p>
     */
    public $Description;

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
     * @var integer <p>设备端口（已不再使用，保留用于兼容，可忽略）</p><p>取值范围：[1, 65535]</p><p>单位： 端口</p>
     */
    public $Port;

    /**
     * @var string <p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $Username;

    /**
     * @var string <p>设备 SN（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $SNCode;

    /**
     * @var string <p>RTMP推流地址自定义AppName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
     */
    public $AppName;

    /**
     * @var string <p>RTMP推流地址自定义StreamName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
     */
    public $StreamName;

    /**
     * @param string $Name <p>设备名称，仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位；（设备名称无需全局唯一，可以重复）</p>
     * @param integer $AccessProtocol <p>设备接入协议（1:RTMP,2:GB,6:ISUP）</p><p>枚举值：</p><ul><li>1： RTMP</li><li>2： GB</li><li>6： ISUP</li></ul><p>默认值：2</p>
     * @param integer $Type <p>设备类型，1:IPC,2:NVR；（若设备接入协议选择RTMP，则设备类型只能选择IPC）</p><p>枚举值：</p><ul><li>1： IPC</li><li>2： NVR</li></ul>
     * @param string $OrganizationId <p>设备所属组织ID，从查询组织接口DescribeOrganization中获取</p>
     * @param string $ClusterId <p>设备接入服务节点ID（从查询设备可用服务节点接口DescribeRegionDomain中获取的Value字段）</p>
     * @param integer $TransportProtocol <p>设备流传输协议，1:UDP,2:TCP；(国标设备有效，不填写则默认UDP协议)</p>
     * @param string $Password <p>设备密码（国标设备必填，长度为1-64个字符）</p>
     * @param string $Description <p>设备描述，长度不超过128个字符</p>
     * @param string $GatewayId <p>设备接入网关ID（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $ProtocolType <p>网关接入协议类型（已不再使用，保留用于兼容，可忽略）</p>
     * @param string $Ip <p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $Port <p>设备端口（已不再使用，保留用于兼容，可忽略）</p><p>取值范围：[1, 65535]</p><p>单位： 端口</p>
     * @param string $Username <p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
     * @param string $SNCode <p>设备 SN（已不再使用，保留用于兼容，可忽略）</p>
     * @param string $AppName <p>RTMP推流地址自定义AppName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
     * @param string $StreamName <p>RTMP推流地址自定义StreamName（仅RTMP需要，支持英文、数字、_、-、.、长度不超过64位）</p>
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

        if (array_key_exists("SNCode",$param) and $param["SNCode"] !== null) {
            $this->SNCode = $param["SNCode"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
