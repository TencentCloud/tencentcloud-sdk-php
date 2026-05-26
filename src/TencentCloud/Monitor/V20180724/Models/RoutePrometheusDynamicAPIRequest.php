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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RoutePrometheusDynamicAPI请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Prometheus 实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Prometheus 实例 ID</p>
 * @method string getMethod() 获取<p>HTTP 方法名 GET/POST/PUT/DELETE 等</p>
 * @method void setMethod(string $Method) 设置<p>HTTP 方法名 GET/POST/PUT/DELETE 等</p>
 * @method string getPath() 获取<p>HTTP 路径（包括 query string）</p>
 * @method void setPath(string $Path) 设置<p>HTTP 路径（包括 query string）</p>
 * @method string getRequestBody() 获取<p>HTTP 请求体，任何数据</p>
 * @method void setRequestBody(string $RequestBody) 设置<p>HTTP 请求体，任何数据</p>
 * @method array getHeaders() 获取<p>HTTP 请求头</p>
 * @method void setHeaders(array $Headers) 设置<p>HTTP 请求头</p>
 */
class RoutePrometheusDynamicAPIRequest extends AbstractModel
{
    /**
     * @var string <p>Prometheus 实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>HTTP 方法名 GET/POST/PUT/DELETE 等</p>
     */
    public $Method;

    /**
     * @var string <p>HTTP 路径（包括 query string）</p>
     */
    public $Path;

    /**
     * @var string <p>HTTP 请求体，任何数据</p>
     */
    public $RequestBody;

    /**
     * @var array <p>HTTP 请求头</p>
     */
    public $Headers;

    /**
     * @param string $InstanceId <p>Prometheus 实例 ID</p>
     * @param string $Method <p>HTTP 方法名 GET/POST/PUT/DELETE 等</p>
     * @param string $Path <p>HTTP 路径（包括 query string）</p>
     * @param string $RequestBody <p>HTTP 请求体，任何数据</p>
     * @param array $Headers <p>HTTP 请求头</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new PrometheusStringKeyValuePair();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
