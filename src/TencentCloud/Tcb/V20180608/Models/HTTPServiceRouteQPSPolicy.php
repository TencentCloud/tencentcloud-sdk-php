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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云开发路由限频策略
 *
 * @method integer getQPSTotal() 获取QPS值，每秒请求次数
 * @method void setQPSTotal(integer $QPSTotal) 设置QPS值，每秒请求次数
 * @method HTTPServiceQPSPerClient getQPSPerClient() 获取客户端限频配置
 * @method void setQPSPerClient(HTTPServiceQPSPerClient $QPSPerClient) 设置客户端限频配置
 */
class HTTPServiceRouteQPSPolicy extends AbstractModel
{
    /**
     * @var integer QPS值，每秒请求次数
     */
    public $QPSTotal;

    /**
     * @var HTTPServiceQPSPerClient 客户端限频配置
     */
    public $QPSPerClient;

    /**
     * @param integer $QPSTotal QPS值，每秒请求次数
     * @param HTTPServiceQPSPerClient $QPSPerClient 客户端限频配置
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
        if (array_key_exists("QPSTotal",$param) and $param["QPSTotal"] !== null) {
            $this->QPSTotal = $param["QPSTotal"];
        }

        if (array_key_exists("QPSPerClient",$param) and $param["QPSPerClient"] !== null) {
            $this->QPSPerClient = new HTTPServiceQPSPerClient();
            $this->QPSPerClient->deserialize($param["QPSPerClient"]);
        }
    }
}
