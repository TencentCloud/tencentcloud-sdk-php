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
 * DNAT规则
 *
 * @method string getIpProtocol() 获取<p>IP协议</p>
 * @method void setIpProtocol(string $IpProtocol) 设置<p>IP协议</p>
 * @method string getPublicIpAddress() 获取<p>公网IP地址</p>
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置<p>公网IP地址</p>
 * @method integer getPublicPort() 获取<p>公网端口</p>
 * @method void setPublicPort(integer $PublicPort) 设置<p>公网端口</p>
 * @method string getPrivateIpAddress() 获取<p>内网IP地址</p>
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置<p>内网IP地址</p>
 * @method integer getPrivatePort() 获取<p>内网端口</p>
 * @method void setPrivatePort(integer $PrivatePort) 设置<p>内网端口</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class NatDnatRuleItem extends AbstractModel
{
    /**
     * @var string <p>IP协议</p>
     */
    public $IpProtocol;

    /**
     * @var string <p>公网IP地址</p>
     */
    public $PublicIpAddress;

    /**
     * @var integer <p>公网端口</p>
     */
    public $PublicPort;

    /**
     * @var string <p>内网IP地址</p>
     */
    public $PrivateIpAddress;

    /**
     * @var integer <p>内网端口</p>
     */
    public $PrivatePort;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param string $IpProtocol <p>IP协议</p>
     * @param string $PublicIpAddress <p>公网IP地址</p>
     * @param integer $PublicPort <p>公网端口</p>
     * @param string $PrivateIpAddress <p>内网IP地址</p>
     * @param integer $PrivatePort <p>内网端口</p>
     * @param string $Description <p>描述</p>
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
        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("PublicPort",$param) and $param["PublicPort"] !== null) {
            $this->PublicPort = $param["PublicPort"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            $this->PrivatePort = $param["PrivatePort"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
