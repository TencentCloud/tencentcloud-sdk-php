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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 协议封禁配置。
 *
 * @method string getTCPProtocol() 获取<p>TCP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method void setTCPProtocol(string $TCPProtocol) 设置<p>TCP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method string getUDPProtocol() 获取<p>UDP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method void setUDPProtocol(string $UDPProtocol) 设置<p>UDP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method string getICMPProtocol() 获取<p>ICMP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method void setICMPProtocol(string $ICMPProtocol) 设置<p>ICMP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method string getOtherProtocol() 获取<p>其它协议封禁（除 TCP/UDP/ICMP 外的协议）。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method void setOtherProtocol(string $OtherProtocol) 设置<p>其它协议封禁（除 TCP/UDP/ICMP 外的协议）。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 */
class ProtocolBlockingConfig extends AbstractModel
{
    /**
     * @var string <p>TCP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     */
    public $TCPProtocol;

    /**
     * @var string <p>UDP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     */
    public $UDPProtocol;

    /**
     * @var string <p>ICMP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     */
    public $ICMPProtocol;

    /**
     * @var string <p>其它协议封禁（除 TCP/UDP/ICMP 外的协议）。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     */
    public $OtherProtocol;

    /**
     * @param string $TCPProtocol <p>TCP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     * @param string $UDPProtocol <p>UDP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     * @param string $ICMPProtocol <p>ICMP 协议封禁。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     * @param string $OtherProtocol <p>其它协议封禁（除 TCP/UDP/ICMP 外的协议）。</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
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
        if (array_key_exists("TCPProtocol",$param) and $param["TCPProtocol"] !== null) {
            $this->TCPProtocol = $param["TCPProtocol"];
        }

        if (array_key_exists("UDPProtocol",$param) and $param["UDPProtocol"] !== null) {
            $this->UDPProtocol = $param["UDPProtocol"];
        }

        if (array_key_exists("ICMPProtocol",$param) and $param["ICMPProtocol"] !== null) {
            $this->ICMPProtocol = $param["ICMPProtocol"];
        }

        if (array_key_exists("OtherProtocol",$param) and $param["OtherProtocol"] !== null) {
            $this->OtherProtocol = $param["OtherProtocol"];
        }
    }
}
