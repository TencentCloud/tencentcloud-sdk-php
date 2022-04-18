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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护域名端口配置信息
 *
 * @method string getPort() 获取监听端口配置
 * @method void setPort(string $Port) 设置监听端口配置
 * @method string getProtocol() 获取与Port一一对应，表示端口对应的协议
 * @method void setProtocol(string $Protocol) 设置与Port一一对应，表示端口对应的协议
 * @method string getUpstreamPort() 获取与Port一一对应,  表示回源端口
 * @method void setUpstreamPort(string $UpstreamPort) 设置与Port一一对应,  表示回源端口
 * @method string getUpstreamProtocol() 获取与Port一一对应,  表示回源协议
 * @method void setUpstreamProtocol(string $UpstreamProtocol) 设置与Port一一对应,  表示回源协议
 * @method string getNginxServerId() 获取Nginx的服务器ID
 * @method void setNginxServerId(string $NginxServerId) 设置Nginx的服务器ID
 */
class PortItem extends AbstractModel
{
    /**
     * @var string 监听端口配置
     */
    public $Port;

    /**
     * @var string 与Port一一对应，表示端口对应的协议
     */
    public $Protocol;

    /**
     * @var string 与Port一一对应,  表示回源端口
     */
    public $UpstreamPort;

    /**
     * @var string 与Port一一对应,  表示回源协议
     */
    public $UpstreamProtocol;

    /**
     * @var string Nginx的服务器ID
     */
    public $NginxServerId;

    /**
     * @param string $Port 监听端口配置
     * @param string $Protocol 与Port一一对应，表示端口对应的协议
     * @param string $UpstreamPort 与Port一一对应,  表示回源端口
     * @param string $UpstreamProtocol 与Port一一对应,  表示回源协议
     * @param string $NginxServerId Nginx的服务器ID
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("UpstreamPort",$param) and $param["UpstreamPort"] !== null) {
            $this->UpstreamPort = $param["UpstreamPort"];
        }

        if (array_key_exists("UpstreamProtocol",$param) and $param["UpstreamProtocol"] !== null) {
            $this->UpstreamProtocol = $param["UpstreamProtocol"];
        }

        if (array_key_exists("NginxServerId",$param) and $param["NginxServerId"] !== null) {
            $this->NginxServerId = $param["NginxServerId"];
        }
    }
}
