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
 * Prometheus 内部动态 api 代理响应
 *
 * @method integer getStatusCode() 获取HTTP 状态码
 * @method void setStatusCode(integer $StatusCode) 设置HTTP 状态码
 * @method string getResponseBody() 获取HTTP 响应体
 * @method void setResponseBody(string $ResponseBody) 设置HTTP 响应体
 */
class PrometheusDynamicAPIResponseHTTP extends AbstractModel
{
    /**
     * @var integer HTTP 状态码
     */
    public $StatusCode;

    /**
     * @var string HTTP 响应体
     */
    public $ResponseBody;

    /**
     * @param integer $StatusCode HTTP 状态码
     * @param string $ResponseBody HTTP 响应体
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ResponseBody",$param) and $param["ResponseBody"] !== null) {
            $this->ResponseBody = $param["ResponseBody"];
        }
    }
}
