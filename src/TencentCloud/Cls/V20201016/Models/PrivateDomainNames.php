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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有域名信息
 *
 * @method string getDomainName() 获取域名地址
 * @method void setDomainName(string $DomainName) 设置域名地址
 * @method string getIpAddr() 获取ip地址
 * @method void setIpAddr(string $IpAddr) 设置ip地址
 */
class PrivateDomainNames extends AbstractModel
{
    /**
     * @var string 域名地址
     */
    public $DomainName;

    /**
     * @var string ip地址
     */
    public $IpAddr;

    /**
     * @param string $DomainName 域名地址
     * @param string $IpAddr ip地址
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("IpAddr",$param) and $param["IpAddr"] !== null) {
            $this->IpAddr = $param["IpAddr"];
        }
    }
}
