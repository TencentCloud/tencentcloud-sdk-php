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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ToolExample
 *
 * @method string getRequest() 获取<p>请求参数</p>
 * @method void setRequest(string $Request) 设置<p>请求参数</p>
 * @method string getResponse() 获取<p>响应参数</p>
 * @method void setResponse(string $Response) 设置<p>响应参数</p>
 */
class ToolExample extends AbstractModel
{
    /**
     * @var string <p>请求参数</p>
     */
    public $Request;

    /**
     * @var string <p>响应参数</p>
     */
    public $Response;

    /**
     * @param string $Request <p>请求参数</p>
     * @param string $Response <p>响应参数</p>
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
    }
}
