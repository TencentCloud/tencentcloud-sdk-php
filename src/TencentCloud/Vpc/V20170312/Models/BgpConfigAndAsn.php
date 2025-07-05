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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN通道BGP配置
 *
 * @method string getTunnelCidr() 获取BGP通道CIDR
 * @method void setTunnelCidr(string $TunnelCidr) 设置BGP通道CIDR
 * @method string getLocalBgpIp() 获取本端BGP IP
 * @method void setLocalBgpIp(string $LocalBgpIp) 设置本端BGP IP
 * @method string getRemoteBgpIp() 获取对端BGP IP
 * @method void setRemoteBgpIp(string $RemoteBgpIp) 设置对端BGP IP
 * @method string getLocalBgpAsn() 获取本端BGP ASN号
 * @method void setLocalBgpAsn(string $LocalBgpAsn) 设置本端BGP ASN号
 * @method string getRemoteBgpAsn() 获取对端BGP ASN号
 * @method void setRemoteBgpAsn(string $RemoteBgpAsn) 设置对端BGP ASN号
 */
class BgpConfigAndAsn extends AbstractModel
{
    /**
     * @var string BGP通道CIDR
     */
    public $TunnelCidr;

    /**
     * @var string 本端BGP IP
     */
    public $LocalBgpIp;

    /**
     * @var string 对端BGP IP
     */
    public $RemoteBgpIp;

    /**
     * @var string 本端BGP ASN号
     */
    public $LocalBgpAsn;

    /**
     * @var string 对端BGP ASN号
     */
    public $RemoteBgpAsn;

    /**
     * @param string $TunnelCidr BGP通道CIDR
     * @param string $LocalBgpIp 本端BGP IP
     * @param string $RemoteBgpIp 对端BGP IP
     * @param string $LocalBgpAsn 本端BGP ASN号
     * @param string $RemoteBgpAsn 对端BGP ASN号
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
        if (array_key_exists("TunnelCidr",$param) and $param["TunnelCidr"] !== null) {
            $this->TunnelCidr = $param["TunnelCidr"];
        }

        if (array_key_exists("LocalBgpIp",$param) and $param["LocalBgpIp"] !== null) {
            $this->LocalBgpIp = $param["LocalBgpIp"];
        }

        if (array_key_exists("RemoteBgpIp",$param) and $param["RemoteBgpIp"] !== null) {
            $this->RemoteBgpIp = $param["RemoteBgpIp"];
        }

        if (array_key_exists("LocalBgpAsn",$param) and $param["LocalBgpAsn"] !== null) {
            $this->LocalBgpAsn = $param["LocalBgpAsn"];
        }

        if (array_key_exists("RemoteBgpAsn",$param) and $param["RemoteBgpAsn"] !== null) {
            $this->RemoteBgpAsn = $param["RemoteBgpAsn"];
        }
    }
}
