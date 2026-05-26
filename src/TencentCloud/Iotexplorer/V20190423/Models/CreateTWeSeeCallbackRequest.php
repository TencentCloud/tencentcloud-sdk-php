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
 * CreateTWeSeeCallback请求参数结构体
 *
 * @method string getType() 获取回调类型。可选值：\n- `http` HTTP 回调
 * @method void setType(string $Type) 设置回调类型。可选值：\n- `http` HTTP 回调
 * @method string getCallbackUrl() 获取回调 URL。要求 http 或 https 协议，仅支持 80 或 443 端口
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL。要求 http 或 https 协议，仅支持 80 或 443 端口
 * @method string getCallbackToken() 获取回调签名 Token。最大长度 128
 * @method void setCallbackToken(string $CallbackToken) 设置回调签名 Token。最大长度 128
 */
class CreateTWeSeeCallbackRequest extends AbstractModel
{
    /**
     * @var string 回调类型。可选值：\n- `http` HTTP 回调
     */
    public $Type;

    /**
     * @var string 回调 URL。要求 http 或 https 协议，仅支持 80 或 443 端口
     */
    public $CallbackUrl;

    /**
     * @var string 回调签名 Token。最大长度 128
     */
    public $CallbackToken;

    /**
     * @param string $Type 回调类型。可选值：\n- `http` HTTP 回调
     * @param string $CallbackUrl 回调 URL。要求 http 或 https 协议，仅支持 80 或 443 端口
     * @param string $CallbackToken 回调签名 Token。最大长度 128
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

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }
    }
}
