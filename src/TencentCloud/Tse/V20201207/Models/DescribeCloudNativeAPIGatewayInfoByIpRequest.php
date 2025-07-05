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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayInfoByIp请求参数结构体
 *
 * @method string getPublicNetworkIP() 获取云原生网关的公网ip
 * @method void setPublicNetworkIP(string $PublicNetworkIP) 设置云原生网关的公网ip
 */
class DescribeCloudNativeAPIGatewayInfoByIpRequest extends AbstractModel
{
    /**
     * @var string 云原生网关的公网ip
     */
    public $PublicNetworkIP;

    /**
     * @param string $PublicNetworkIP 云原生网关的公网ip
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
        if (array_key_exists("PublicNetworkIP",$param) and $param["PublicNetworkIP"] !== null) {
            $this->PublicNetworkIP = $param["PublicNetworkIP"];
        }
    }
}
