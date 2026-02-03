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
 * http访问服务路由qps策略
 *
 * @method integer getQPSTotal() 获取qps限额总量
 * @method void setQPSTotal(integer $QPSTotal) 设置qps限额总量
 * @method CloudBaseClientQPSPolicy getQPSPerClient() 获取客户端限频，如果不限制，LimitBy=None
 * @method void setQPSPerClient(CloudBaseClientQPSPolicy $QPSPerClient) 设置客户端限频，如果不限制，LimitBy=None
 */
class CloudBaseGWAPIQPSPolicy extends AbstractModel
{
    /**
     * @var integer qps限额总量
     */
    public $QPSTotal;

    /**
     * @var CloudBaseClientQPSPolicy 客户端限频，如果不限制，LimitBy=None
     */
    public $QPSPerClient;

    /**
     * @param integer $QPSTotal qps限额总量
     * @param CloudBaseClientQPSPolicy $QPSPerClient 客户端限频，如果不限制，LimitBy=None
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
            $this->QPSPerClient = new CloudBaseClientQPSPolicy();
            $this->QPSPerClient->deserialize($param["QPSPerClient"]);
        }
    }
}
