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
 * SSL VPN Server DnsServers
 *
 * @method string getPrimaryDns() 获取主DNS配置
 * @method void setPrimaryDns(string $PrimaryDns) 设置主DNS配置
 * @method string getSecondaryDns() 获取备DNS配置
 * @method void setSecondaryDns(string $SecondaryDns) 设置备DNS配置
 */
class DnsServers extends AbstractModel
{
    /**
     * @var string 主DNS配置
     */
    public $PrimaryDns;

    /**
     * @var string 备DNS配置
     */
    public $SecondaryDns;

    /**
     * @param string $PrimaryDns 主DNS配置
     * @param string $SecondaryDns 备DNS配置
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
        if (array_key_exists("PrimaryDns",$param) and $param["PrimaryDns"] !== null) {
            $this->PrimaryDns = $param["PrimaryDns"];
        }

        if (array_key_exists("SecondaryDns",$param) and $param["SecondaryDns"] !== null) {
            $this->SecondaryDns = $param["SecondaryDns"];
        }
    }
}
