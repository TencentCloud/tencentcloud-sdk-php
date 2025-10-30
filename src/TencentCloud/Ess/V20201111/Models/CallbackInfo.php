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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业应用回调信息
 *
 * @method string getCallbackUrl() 获取回调url,。请确保回调地址能够接收并处理 HTTP POST 请求，并返回状态码 200 以表示处理正常。
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调url,。请确保回调地址能够接收并处理 HTTP POST 请求，并返回状态码 200 以表示处理正常。
 * @method string getToken() 获取回调加密key，已废弃
 * @method void setToken(string $Token) 设置回调加密key，已废弃
 * @method string getCallbackKey() 获取回调加密key，用于回调消息加解密。
 * @method void setCallbackKey(string $CallbackKey) 设置回调加密key，用于回调消息加解密。
 * @method string getCallbackToken() 获取回调验签token，用于回调通知校验。
 * @method void setCallbackToken(string $CallbackToken) 设置回调验签token，用于回调通知校验。
 */
class CallbackInfo extends AbstractModel
{
    /**
     * @var string 回调url,。请确保回调地址能够接收并处理 HTTP POST 请求，并返回状态码 200 以表示处理正常。
     */
    public $CallbackUrl;

    /**
     * @var string 回调加密key，已废弃
     * @deprecated
     */
    public $Token;

    /**
     * @var string 回调加密key，用于回调消息加解密。
     */
    public $CallbackKey;

    /**
     * @var string 回调验签token，用于回调通知校验。
     */
    public $CallbackToken;

    /**
     * @param string $CallbackUrl 回调url,。请确保回调地址能够接收并处理 HTTP POST 请求，并返回状态码 200 以表示处理正常。
     * @param string $Token 回调加密key，已废弃
     * @param string $CallbackKey 回调加密key，用于回调消息加解密。
     * @param string $CallbackToken 回调验签token，用于回调通知校验。
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
        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }
    }
}
