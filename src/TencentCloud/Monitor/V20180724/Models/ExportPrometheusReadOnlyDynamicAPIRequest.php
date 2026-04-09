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
 * ExportPrometheusReadOnlyDynamicAPI请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method string getMethod() 获取HTTP 方法名 GET/POST/PUT/DELETE 等
 * @method void setMethod(string $Method) 设置HTTP 方法名 GET/POST/PUT/DELETE 等
 * @method string getPath() 获取HTTP 路径（包括 query string）
 * @method void setPath(string $Path) 设置HTTP 路径（包括 query string）
 * @method string getRequestBody() 获取HTTP 请求体，任何数据
 * @method void setRequestBody(string $RequestBody) 设置HTTP 请求体，任何数据
 * @method array getHeaders() 获取HTTP 请求头
 * @method void setHeaders(array $Headers) 设置HTTP 请求头
 * @method boolean getSelfMonitor() 获取是否请求自监控数据。自监控仅支持 /api/v1/query 与 /api/v1/query_range 接口。
 * @method void setSelfMonitor(boolean $SelfMonitor) 设置是否请求自监控数据。自监控仅支持 /api/v1/query 与 /api/v1/query_range 接口。
 */
class ExportPrometheusReadOnlyDynamicAPIRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var string HTTP 方法名 GET/POST/PUT/DELETE 等
     */
    public $Method;

    /**
     * @var string HTTP 路径（包括 query string）
     */
    public $Path;

    /**
     * @var string HTTP 请求体，任何数据
     */
    public $RequestBody;

    /**
     * @var array HTTP 请求头
     */
    public $Headers;

    /**
     * @var boolean 是否请求自监控数据。自监控仅支持 /api/v1/query 与 /api/v1/query_range 接口。
     */
    public $SelfMonitor;

    /**
     * @param string $InstanceId Prometheus 实例 ID
     * @param string $Method HTTP 方法名 GET/POST/PUT/DELETE 等
     * @param string $Path HTTP 路径（包括 query string）
     * @param string $RequestBody HTTP 请求体，任何数据
     * @param array $Headers HTTP 请求头
     * @param boolean $SelfMonitor 是否请求自监控数据。自监控仅支持 /api/v1/query 与 /api/v1/query_range 接口。
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

        if (array_key_exists("SelfMonitor",$param) and $param["SelfMonitor"] !== null) {
            $this->SelfMonitor = $param["SelfMonitor"];
        }
    }
}
