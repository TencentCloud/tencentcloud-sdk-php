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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接口调用的响应详情
 *
 * @method integer getStatusCode() 获取<p>HTTP 状态码。</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>HTTP 状态码。</p>
 * @method string getHeaders() 获取<p>响应头，json 序列化后的字符串，键升序排列。敏感值已脱敏，无响应头时为空字符串。</p>
 * @method void setHeaders(string $Headers) 设置<p>响应头，json 序列化后的字符串，键升序排列。敏感值已脱敏，无响应头时为空字符串。</p>
 * @method string getBody() 获取<p>响应体，超长时被截断，是否截断见 Truncated。</p>
 * @method void setBody(string $Body) 设置<p>响应体，超长时被截断，是否截断见 Truncated。</p>
 * @method boolean getTruncated() 获取<p>响应体 Body 是否被截断。</p>
 * @method void setTruncated(boolean $Truncated) 设置<p>响应体 Body 是否被截断。</p>
 */
class AICallAPICallResponseDetail extends AbstractModel
{
    /**
     * @var integer <p>HTTP 状态码。</p>
     */
    public $StatusCode;

    /**
     * @var string <p>响应头，json 序列化后的字符串，键升序排列。敏感值已脱敏，无响应头时为空字符串。</p>
     */
    public $Headers;

    /**
     * @var string <p>响应体，超长时被截断，是否截断见 Truncated。</p>
     */
    public $Body;

    /**
     * @var boolean <p>响应体 Body 是否被截断。</p>
     */
    public $Truncated;

    /**
     * @param integer $StatusCode <p>HTTP 状态码。</p>
     * @param string $Headers <p>响应头，json 序列化后的字符串，键升序排列。敏感值已脱敏，无响应头时为空字符串。</p>
     * @param string $Body <p>响应体，超长时被截断，是否截断见 Truncated。</p>
     * @param boolean $Truncated <p>响应体 Body 是否被截断。</p>
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

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Truncated",$param) and $param["Truncated"] !== null) {
            $this->Truncated = $param["Truncated"];
        }
    }
}
