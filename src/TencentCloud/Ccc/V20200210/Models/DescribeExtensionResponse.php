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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExtension返回参数结构体
 *
 * @method string getExtensionId() 获取分机号
 * @method void setExtensionId(string $ExtensionId) 设置分机号
 * @method string getExtensionDomain() 获取域名
 * @method void setExtensionDomain(string $ExtensionDomain) 设置域名
 * @method string getPassword() 获取注册密码
 * @method void setPassword(string $Password) 设置注册密码
 * @method string getOutboundProxy() 获取代理服务器地址
 * @method void setOutboundProxy(string $OutboundProxy) 设置代理服务器地址
 * @method string getTransport() 获取传输协议
 * @method void setTransport(string $Transport) 设置传输协议
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExtensionResponse extends AbstractModel
{
    /**
     * @var string 分机号
     */
    public $ExtensionId;

    /**
     * @var string 域名
     */
    public $ExtensionDomain;

    /**
     * @var string 注册密码
     */
    public $Password;

    /**
     * @var string 代理服务器地址
     */
    public $OutboundProxy;

    /**
     * @var string 传输协议
     */
    public $Transport;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExtensionId 分机号
     * @param string $ExtensionDomain 域名
     * @param string $Password 注册密码
     * @param string $OutboundProxy 代理服务器地址
     * @param string $Transport 传输协议
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("ExtensionDomain",$param) and $param["ExtensionDomain"] !== null) {
            $this->ExtensionDomain = $param["ExtensionDomain"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("OutboundProxy",$param) and $param["OutboundProxy"] !== null) {
            $this->OutboundProxy = $param["OutboundProxy"];
        }

        if (array_key_exists("Transport",$param) and $param["Transport"] !== null) {
            $this->Transport = $param["Transport"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
