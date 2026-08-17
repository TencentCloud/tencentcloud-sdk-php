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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddGateway请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID。可通过 GetCustomerGatewayClusterList 接口获取。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。可通过 GetCustomerGatewayClusterList 接口获取。</p>
 * @method string getUsername() 获取<p>网关登录用户名。最大 64 字符。</p>
 * @method void setUsername(string $Username) 设置<p>网关登录用户名。最大 64 字符。</p>
 * @method string getPassword() 获取<p>网关登录密码。最大 128 字符。</p>
 * @method void setPassword(string $Password) 设置<p>网关登录密码。最大 128 字符。</p>
 * @method string getGatewayIp() 获取<p>网关内网IP。</p>
 * @method void setGatewayIp(string $GatewayIp) 设置<p>网关内网IP。</p>
 * @method string getRegionId() 获取<p>地域标识。最大 32 字符。例如 ap-guangzhou。可通过 DescribeAccessPointList 接口获取。</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域标识。最大 32 字符。例如 ap-guangzhou。可通过 DescribeAccessPointList 接口获取。</p>
 */
class AddGatewayRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID。可通过 GetCustomerGatewayClusterList 接口获取。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>网关登录用户名。最大 64 字符。</p>
     */
    public $Username;

    /**
     * @var string <p>网关登录密码。最大 128 字符。</p>
     */
    public $Password;

    /**
     * @var string <p>网关内网IP。</p>
     */
    public $GatewayIp;

    /**
     * @var string <p>地域标识。最大 32 字符。例如 ap-guangzhou。可通过 DescribeAccessPointList 接口获取。</p>
     */
    public $RegionId;

    /**
     * @param string $ClusterId <p>集群 ID。可通过 GetCustomerGatewayClusterList 接口获取。</p>
     * @param string $Username <p>网关登录用户名。最大 64 字符。</p>
     * @param string $Password <p>网关登录密码。最大 128 字符。</p>
     * @param string $GatewayIp <p>网关内网IP。</p>
     * @param string $RegionId <p>地域标识。最大 32 字符。例如 ap-guangzhou。可通过 DescribeAccessPointList 接口获取。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("GatewayIp",$param) and $param["GatewayIp"] !== null) {
            $this->GatewayIp = $param["GatewayIp"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
