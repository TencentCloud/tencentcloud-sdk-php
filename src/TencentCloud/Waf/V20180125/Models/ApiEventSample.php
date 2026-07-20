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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 安全事件样本
 *
 * @method string getRequest() 获取<p>攻击样本的请求部分</p>
 * @method void setRequest(string $Request) 设置<p>攻击样本的请求部分</p>
 * @method string getResponse() 获取<p>攻击样本的响应</p>
 * @method void setResponse(string $Response) 设置<p>攻击样本的响应</p>
 * @method string getStatus() 获取<p>攻击样本状态码</p>
 * @method void setStatus(string $Status) 设置<p>攻击样本状态码</p>
 */
class ApiEventSample extends AbstractModel
{
    /**
     * @var string <p>攻击样本的请求部分</p>
     */
    public $Request;

    /**
     * @var string <p>攻击样本的响应</p>
     */
    public $Response;

    /**
     * @var string <p>攻击样本状态码</p>
     */
    public $Status;

    /**
     * @param string $Request <p>攻击样本的请求部分</p>
     * @param string $Response <p>攻击样本的响应</p>
     * @param string $Status <p>攻击样本状态码</p>
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
        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
