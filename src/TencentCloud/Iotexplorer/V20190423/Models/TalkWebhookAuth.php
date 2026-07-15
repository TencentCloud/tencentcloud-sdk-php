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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Webhook鉴权配置
 *
 * @method string getType() 获取鉴权类型：none、hmac、static_headers、bearer
 * @method void setType(string $Type) 设置鉴权类型：none、hmac、static_headers、bearer
 * @method string getSignKey() 获取HMAC签名密钥，Type=hmac时必填
 * @method void setSignKey(string $SignKey) 设置HMAC签名密钥，Type=hmac时必填
 * @method string getHeaders() 获取静态鉴权请求头，JSON对象字符串，仅允许白名单header名
 * @method void setHeaders(string $Headers) 设置静态鉴权请求头，JSON对象字符串，仅允许白名单header名
 * @method string getBearerToken() 获取Bearer Token，Type=bearer时用于生成Authorization请求头
 * @method void setBearerToken(string $BearerToken) 设置Bearer Token，Type=bearer时用于生成Authorization请求头
 */
class TalkWebhookAuth extends AbstractModel
{
    /**
     * @var string 鉴权类型：none、hmac、static_headers、bearer
     */
    public $Type;

    /**
     * @var string HMAC签名密钥，Type=hmac时必填
     */
    public $SignKey;

    /**
     * @var string 静态鉴权请求头，JSON对象字符串，仅允许白名单header名
     */
    public $Headers;

    /**
     * @var string Bearer Token，Type=bearer时用于生成Authorization请求头
     */
    public $BearerToken;

    /**
     * @param string $Type 鉴权类型：none、hmac、static_headers、bearer
     * @param string $SignKey HMAC签名密钥，Type=hmac时必填
     * @param string $Headers 静态鉴权请求头，JSON对象字符串，仅允许白名单header名
     * @param string $BearerToken Bearer Token，Type=bearer时用于生成Authorization请求头
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SignKey",$param) and $param["SignKey"] !== null) {
            $this->SignKey = $param["SignKey"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("BearerToken",$param) and $param["BearerToken"] !== null) {
            $this->BearerToken = $param["BearerToken"];
        }
    }
}
