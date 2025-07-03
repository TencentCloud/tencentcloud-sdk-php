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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例监听端口信息
 *
 * @method string getHttpPort() 获取监听的 http 端口范围。
 * @method void setHttpPort(string $HttpPort) 设置监听的 http 端口范围。
 * @method string getHttpsPort() 获取监听的 https 端口范围。
 * @method void setHttpsPort(string $HttpsPort) 设置监听的 https 端口范围。
 * @method string getTcpPort() 获取监听的 tcp 端口范围。
 * @method void setTcpPort(string $TcpPort) 设置监听的 tcp 端口范围。
 * @method string getUdpPort() 获取监听的 udp 端口范围。
 * @method void setUdpPort(string $UdpPort) 设置监听的 udp 端口范围。
 */
class InstancePort extends AbstractModel
{
    /**
     * @var string 监听的 http 端口范围。
     */
    public $HttpPort;

    /**
     * @var string 监听的 https 端口范围。
     */
    public $HttpsPort;

    /**
     * @var string 监听的 tcp 端口范围。
     */
    public $TcpPort;

    /**
     * @var string 监听的 udp 端口范围。
     */
    public $UdpPort;

    /**
     * @param string $HttpPort 监听的 http 端口范围。
     * @param string $HttpsPort 监听的 https 端口范围。
     * @param string $TcpPort 监听的 tcp 端口范围。
     * @param string $UdpPort 监听的 udp 端口范围。
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
        if (array_key_exists("HttpPort",$param) and $param["HttpPort"] !== null) {
            $this->HttpPort = $param["HttpPort"];
        }

        if (array_key_exists("HttpsPort",$param) and $param["HttpsPort"] !== null) {
            $this->HttpsPort = $param["HttpsPort"];
        }

        if (array_key_exists("TcpPort",$param) and $param["TcpPort"] !== null) {
            $this->TcpPort = $param["TcpPort"];
        }

        if (array_key_exists("UdpPort",$param) and $param["UdpPort"] !== null) {
            $this->UdpPort = $param["UdpPort"];
        }
    }
}
