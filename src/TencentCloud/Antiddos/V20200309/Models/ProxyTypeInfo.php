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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发类型
 *
 * @method array getProxyPorts() 获取转发监听端口列表，端口取值1~65535
 * @method void setProxyPorts(array $ProxyPorts) 设置转发监听端口列表，端口取值1~65535
 * @method string getProxyType() 获取转发协议，取值[
http(HTTP协议)
https(HTTPS协议)
]
 * @method void setProxyType(string $ProxyType) 设置转发协议，取值[
http(HTTP协议)
https(HTTPS协议)
]
 */
class ProxyTypeInfo extends AbstractModel
{
    /**
     * @var array 转发监听端口列表，端口取值1~65535
     */
    public $ProxyPorts;

    /**
     * @var string 转发协议，取值[
http(HTTP协议)
https(HTTPS协议)
]
     */
    public $ProxyType;

    /**
     * @param array $ProxyPorts 转发监听端口列表，端口取值1~65535
     * @param string $ProxyType 转发协议，取值[
http(HTTP协议)
https(HTTPS协议)
]
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
        if (array_key_exists("ProxyPorts",$param) and $param["ProxyPorts"] !== null) {
            $this->ProxyPorts = $param["ProxyPorts"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }
    }
}
