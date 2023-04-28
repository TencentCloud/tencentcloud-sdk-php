<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostQuantumCryptoSign请求参数结构体
 *
 * @method string getMessage() 获取Base64 编码的消息原文。消息原文的长度（Base64编码前的长度）不超过4096字节。
 * @method void setMessage(string $Message) 设置Base64 编码的消息原文。消息原文的长度（Base64编码前的长度）不超过4096字节。
 * @method string getKeyId() 获取密钥的唯一标识
 * @method void setKeyId(string $KeyId) 设置密钥的唯一标识
 */
class PostQuantumCryptoSignRequest extends AbstractModel
{
    /**
     * @var string Base64 编码的消息原文。消息原文的长度（Base64编码前的长度）不超过4096字节。
     */
    public $Message;

    /**
     * @var string 密钥的唯一标识
     */
    public $KeyId;

    /**
     * @param string $Message Base64 编码的消息原文。消息原文的长度（Base64编码前的长度）不超过4096字节。
     * @param string $KeyId 密钥的唯一标识
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
