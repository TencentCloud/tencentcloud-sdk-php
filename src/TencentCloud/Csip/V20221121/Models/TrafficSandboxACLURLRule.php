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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL URL/协议/方法匹配规则
 *
 * @method array getURL() 获取URL 列表
入参限制：每项支持域名通配符，如 *.example.com、api.*.example.com、example.com/api/*
 * @method void setURL(array $URL) 设置URL 列表
入参限制：每项支持域名通配符，如 *.example.com、api.*.example.com、example.com/api/*
 * @method array getURLExcept() 获取排除的 URL 列表
入参限制：格式同 URL
 * @method void setURLExcept(array $URLExcept) 设置排除的 URL 列表
入参限制：格式同 URL
 * @method array getProtocol() 获取协议类型列表
枚举值：
http：HTTP 协议
https：HTTPS 协议
 * @method void setProtocol(array $Protocol) 设置协议类型列表
枚举值：
http：HTTP 协议
https：HTTPS 协议
 * @method array getMethod() 获取HTTP 方法列表
枚举值：
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
 * @method void setMethod(array $Method) 设置HTTP 方法列表
枚举值：
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
 */
class TrafficSandboxACLURLRule extends AbstractModel
{
    /**
     * @var array URL 列表
入参限制：每项支持域名通配符，如 *.example.com、api.*.example.com、example.com/api/*
     */
    public $URL;

    /**
     * @var array 排除的 URL 列表
入参限制：格式同 URL
     */
    public $URLExcept;

    /**
     * @var array 协议类型列表
枚举值：
http：HTTP 协议
https：HTTPS 协议
     */
    public $Protocol;

    /**
     * @var array HTTP 方法列表
枚举值：
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
     */
    public $Method;

    /**
     * @param array $URL URL 列表
入参限制：每项支持域名通配符，如 *.example.com、api.*.example.com、example.com/api/*
     * @param array $URLExcept 排除的 URL 列表
入参限制：格式同 URL
     * @param array $Protocol 协议类型列表
枚举值：
http：HTTP 协议
https：HTTPS 协议
     * @param array $Method HTTP 方法列表
枚举值：
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("URLExcept",$param) and $param["URLExcept"] !== null) {
            $this->URLExcept = $param["URLExcept"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
