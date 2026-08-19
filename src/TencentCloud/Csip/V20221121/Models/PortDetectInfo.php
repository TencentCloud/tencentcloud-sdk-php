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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口探测信息
 *
 * @method string getHost() 获取主机地址(ip或者域名)
 * @method void setHost(string $Host) 设置主机地址(ip或者域名)
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getUpdateTime() 获取最近发现时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近发现时间
 */
class PortDetectInfo extends AbstractModel
{
    /**
     * @var string 主机地址(ip或者域名)
     */
    public $Host;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 最近发现时间
     */
    public $UpdateTime;

    /**
     * @param string $Host 主机地址(ip或者域名)
     * @param integer $Port 端口
     * @param string $Protocol 协议
     * @param string $Status 状态
     * @param string $UpdateTime 最近发现时间
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
