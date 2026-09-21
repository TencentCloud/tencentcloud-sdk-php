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
 * UpdateUserDevice请求参数结构体
 *
 * @method string getDeviceId() 获取<p>设备ID（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
 * @method string getName() 获取<p>设备名称（仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位）</p>
 * @method void setName(string $Name) 设置<p>设备名称（仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位）</p>
 * @method integer getTransportProtocol() 获取<p>设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）</p>
 * @method void setTransportProtocol(integer $TransportProtocol) 设置<p>设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）</p>
 * @method string getPassword() 获取<p>设备密码（仅国标设备支持，长度不超过 64 位）</p>
 * @method void setPassword(string $Password) 设置<p>设备密码（仅国标设备支持，长度不超过 64 位）</p>
 * @method string getDescription() 获取<p>设备描述（长度不超过128位）</p>
 * @method void setDescription(string $Description) 设置<p>设备描述（长度不超过128位）</p>
 * @method string getIp() 获取<p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setIp(string $Ip) 设置<p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getPort() 获取<p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setPort(integer $Port) 设置<p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
 * @method string getUsername() 获取<p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setUsername(string $Username) 设置<p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getProtocolType() 获取<p>网关设备接入协议（已不再使用，保留用于兼容，可忽略）</p>
 * @method void setProtocolType(integer $ProtocolType) 设置<p>网关设备接入协议（已不再使用，保留用于兼容，可忽略）</p>
 * @method integer getAudioSwitch() 获取<p>音频关开（0：关闭；1：开启）默认开启，关闭时丢弃音频</p>
 * @method void setAudioSwitch(integer $AudioSwitch) 设置<p>音频关开（0：关闭；1：开启）默认开启，关闭时丢弃音频</p>
 * @method integer getSubscribeSwitch() 获取<p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
 * @method void setSubscribeSwitch(integer $SubscribeSwitch) 设置<p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
 * @method integer getSilentFrameSwitch() 获取<p>是否开启静音帧（0：关闭；1 开启）</p>
 * @method void setSilentFrameSwitch(integer $SilentFrameSwitch) 设置<p>是否开启静音帧（0：关闭；1 开启）</p>
 * @method integer getTimeSyncSwitch() 获取<p>时钟同步开关（仅国标设备生效）</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值： 1</p>
 * @method void setTimeSyncSwitch(integer $TimeSyncSwitch) 设置<p>时钟同步开关（仅国标设备生效）</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值： 1</p>
 */
class UpdateUserDeviceRequest extends AbstractModel
{
    /**
     * @var string <p>设备ID（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
     */
    public $DeviceId;

    /**
     * @var string <p>设备名称（仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位）</p>
     */
    public $Name;

    /**
     * @var integer <p>设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）</p>
     */
    public $TransportProtocol;

    /**
     * @var string <p>设备密码（仅国标设备支持，长度不超过 64 位）</p>
     */
    public $Password;

    /**
     * @var string <p>设备描述（长度不超过128位）</p>
     */
    public $Description;

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
     * @var integer <p>网关设备接入协议（已不再使用，保留用于兼容，可忽略）</p>
     */
    public $ProtocolType;

    /**
     * @var integer <p>音频关开（0：关闭；1：开启）默认开启，关闭时丢弃音频</p>
     */
    public $AudioSwitch;

    /**
     * @var integer <p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
     */
    public $SubscribeSwitch;

    /**
     * @var integer <p>是否开启静音帧（0：关闭；1 开启）</p>
     */
    public $SilentFrameSwitch;

    /**
     * @var integer <p>时钟同步开关（仅国标设备生效）</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值： 1</p>
     */
    public $TimeSyncSwitch;

    /**
     * @param string $DeviceId <p>设备ID（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
     * @param string $Name <p>设备名称（仅支持中文、英文、数字、空格、中英文括号、_、-, 长度不超过128位）</p>
     * @param integer $TransportProtocol <p>设备流传输协议，仅国标设备有效，填0则不做更改（1:UDP,2:TCP）</p>
     * @param string $Password <p>设备密码（仅国标设备支持，长度不超过 64 位）</p>
     * @param string $Description <p>设备描述（长度不超过128位）</p>
     * @param string $Ip <p>设备接入IP（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $Port <p>设备Port（已不再使用，保留用于兼容，可忽略）</p>
     * @param string $Username <p>设备用户名（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $ProtocolType <p>网关设备接入协议（已不再使用，保留用于兼容，可忽略）</p>
     * @param integer $AudioSwitch <p>音频关开（0：关闭；1：开启）默认开启，关闭时丢弃音频</p>
     * @param integer $SubscribeSwitch <p>订阅开关（0：关闭；1：开启）默认开启，开启状态下会订阅设备通道变化，仅国标NVR设备有效</p>
     * @param integer $SilentFrameSwitch <p>是否开启静音帧（0：关闭；1 开启）</p>
     * @param integer $TimeSyncSwitch <p>时钟同步开关（仅国标设备生效）</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值： 1</p>
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

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AudioSwitch",$param) and $param["AudioSwitch"] !== null) {
            $this->AudioSwitch = $param["AudioSwitch"];
        }

        if (array_key_exists("SubscribeSwitch",$param) and $param["SubscribeSwitch"] !== null) {
            $this->SubscribeSwitch = $param["SubscribeSwitch"];
        }

        if (array_key_exists("SilentFrameSwitch",$param) and $param["SilentFrameSwitch"] !== null) {
            $this->SilentFrameSwitch = $param["SilentFrameSwitch"];
        }

        if (array_key_exists("TimeSyncSwitch",$param) and $param["TimeSyncSwitch"] !== null) {
            $this->TimeSyncSwitch = $param["TimeSyncSwitch"];
        }
    }
}
