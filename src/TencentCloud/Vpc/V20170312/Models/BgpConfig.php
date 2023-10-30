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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BgpConfig
 *
 * @method string getTunnelCidr() 获取BGP隧道网段。
 * @method void setTunnelCidr(string $TunnelCidr) 设置BGP隧道网段。
 * @method string getLocalBgpIp() 获取云端BGP地址。必须从BGP隧道网段内分配。
 * @method void setLocalBgpIp(string $LocalBgpIp) 设置云端BGP地址。必须从BGP隧道网段内分配。
 * @method string getRemoteBgpIp() 获取用户端BGP地址。必须从BGP隧道网段内分配。
 * @method void setRemoteBgpIp(string $RemoteBgpIp) 设置用户端BGP地址。必须从BGP隧道网段内分配。
 */
class BgpConfig extends AbstractModel
{
    /**
     * @var string BGP隧道网段。
     */
    public $TunnelCidr;

    /**
     * @var string 云端BGP地址。必须从BGP隧道网段内分配。
     */
    public $LocalBgpIp;

    /**
     * @var string 用户端BGP地址。必须从BGP隧道网段内分配。
     */
    public $RemoteBgpIp;

    /**
     * @param string $TunnelCidr BGP隧道网段。
     * @param string $LocalBgpIp 云端BGP地址。必须从BGP隧道网段内分配。
     * @param string $RemoteBgpIp 用户端BGP地址。必须从BGP隧道网段内分配。
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
    }
}
