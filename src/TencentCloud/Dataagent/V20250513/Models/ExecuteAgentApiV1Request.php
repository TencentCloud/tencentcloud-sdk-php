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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecuteAgentApiV1请求参数结构体
 *
 * @method string getRequestPath() 获取<p>参数路径</p>
 * @method void setRequestPath(string $RequestPath) 设置<p>参数路径</p>
 * @method string getRequestType() 获取<p>post还是get</p><p>枚举值：</p><ul><li>post： post请求</li><li>get： get请求</li></ul>
 * @method void setRequestType(string $RequestType) 设置<p>post还是get</p><p>枚举值：</p><ul><li>post： post请求</li><li>get： get请求</li></ul>
 */
class ExecuteAgentApiV1Request extends AbstractModel
{
    /**
     * @var string <p>参数路径</p>
     */
    public $RequestPath;

    /**
     * @var string <p>post还是get</p><p>枚举值：</p><ul><li>post： post请求</li><li>get： get请求</li></ul>
     */
    public $RequestType;

    /**
     * @param string $RequestPath <p>参数路径</p>
     * @param string $RequestType <p>post还是get</p><p>枚举值：</p><ul><li>post： post请求</li><li>get： get请求</li></ul>
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
        if (array_key_exists("RequestPath",$param) and $param["RequestPath"] !== null) {
            $this->RequestPath = $param["RequestPath"];
        }

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }
    }
}
