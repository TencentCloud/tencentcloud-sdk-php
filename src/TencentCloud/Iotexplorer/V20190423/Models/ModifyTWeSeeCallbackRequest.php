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
 * ModifyTWeSeeCallback请求参数结构体
 *
 * @method string getCallbackId() 获取回调目标 ID，格式为 `callback-` + 8 位小写字母数字
 * @method void setCallbackId(string $CallbackId) 设置回调目标 ID，格式为 `callback-` + 8 位小写字母数字
 * @method string getCallbackUrl() 获取回调 URL，需要可访问并通过 Echo 校验
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL，需要可访问并通过 Echo 校验
 * @method string getType() 获取回调类型。当前仅支持：`http`
 * @method void setType(string $Type) 设置回调类型。当前仅支持：`http`
 * @method string getCallbackToken() 获取回调签名 token，最大长度 128
 * @method void setCallbackToken(string $CallbackToken) 设置回调签名 token，最大长度 128
 */
class ModifyTWeSeeCallbackRequest extends AbstractModel
{
    /**
     * @var string 回调目标 ID，格式为 `callback-` + 8 位小写字母数字
     */
    public $CallbackId;

    /**
     * @var string 回调 URL，需要可访问并通过 Echo 校验
     */
    public $CallbackUrl;

    /**
     * @var string 回调类型。当前仅支持：`http`
     */
    public $Type;

    /**
     * @var string 回调签名 token，最大长度 128
     */
    public $CallbackToken;

    /**
     * @param string $CallbackId 回调目标 ID，格式为 `callback-` + 8 位小写字母数字
     * @param string $CallbackUrl 回调 URL，需要可访问并通过 Echo 校验
     * @param string $Type 回调类型。当前仅支持：`http`
     * @param string $CallbackToken 回调签名 token，最大长度 128
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
        if (array_key_exists("CallbackId",$param) and $param["CallbackId"] !== null) {
            $this->CallbackId = $param["CallbackId"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }
    }
}
