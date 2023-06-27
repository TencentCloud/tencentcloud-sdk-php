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
 * waf斯巴达-编辑防护域名中的端口结构
 *
 * @method integer getNginxServerId() 获取nginx Id
 * @method void setNginxServerId(integer $NginxServerId) 设置nginx Id
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getUpstreamPort() 获取后端端口
 * @method void setUpstreamPort(string $UpstreamPort) 设置后端端口
 * @method string getUpstreamProtocol() 获取后端协议
 * @method void setUpstreamProtocol(string $UpstreamProtocol) 设置后端协议
 */
class SpartaProtectionPort extends AbstractModel
{
    /**
     * @var integer nginx Id
     */
    public $NginxServerId;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 后端端口
     */
    public $UpstreamPort;

    /**
     * @var string 后端协议
     */
    public $UpstreamProtocol;

    /**
     * @param integer $NginxServerId nginx Id
     * @param string $Port 端口
     * @param string $Protocol 协议
     * @param string $UpstreamPort 后端端口
     * @param string $UpstreamProtocol 后端协议
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
        if (array_key_exists("NginxServerId",$param) and $param["NginxServerId"] !== null) {
            $this->NginxServerId = $param["NginxServerId"];
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
    }
}
