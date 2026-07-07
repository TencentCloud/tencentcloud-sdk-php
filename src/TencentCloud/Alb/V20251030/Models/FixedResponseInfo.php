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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 固定应答信息
 *
 * @method integer getHttpCode() 获取返回的HTTP响应码，支持 2xx、4xx、5xx。
 * @method void setHttpCode(integer $HttpCode) 设置返回的HTTP响应码，支持 2xx、4xx、5xx。
 * @method string getContent() 获取返回的固定内容。只支持 ASCII 字符，最大1KB。
 * @method void setContent(string $Content) 设置返回的固定内容。只支持 ASCII 字符，最大1KB。
 * @method string getContentType() 获取返回固定内容的格式。
取值：text/plain、text/css、text/html、application/javascript或application/json。
 * @method void setContentType(string $ContentType) 设置返回固定内容的格式。
取值：text/plain、text/css、text/html、application/javascript或application/json。
 */
class FixedResponseInfo extends AbstractModel
{
    /**
     * @var integer 返回的HTTP响应码，支持 2xx、4xx、5xx。
     */
    public $HttpCode;

    /**
     * @var string 返回的固定内容。只支持 ASCII 字符，最大1KB。
     */
    public $Content;

    /**
     * @var string 返回固定内容的格式。
取值：text/plain、text/css、text/html、application/javascript或application/json。
     */
    public $ContentType;

    /**
     * @param integer $HttpCode 返回的HTTP响应码，支持 2xx、4xx、5xx。
     * @param string $Content 返回的固定内容。只支持 ASCII 字符，最大1KB。
     * @param string $ContentType 返回固定内容的格式。
取值：text/plain、text/css、text/html、application/javascript或application/json。
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
