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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEncryptKeys() 获取base64加密后的EncryptKeys信息。
 * @method void setEncryptKeys(string $EncryptKeys) 设置base64加密后的EncryptKeys信息。
 * @method string getSessionKey() 获取使用公钥加密的sessionkey，用来使用aes-128 ecb模式解码encryptkeys中key和iv。
 * @method void setSessionKey(string $SessionKey) 设置使用公钥加密的sessionkey，用来使用aes-128 ecb模式解码encryptkeys中key和iv。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeDrmEncryptKeys返回参数结构体
 */
class DescribeDrmEncryptKeysResponse extends AbstractModel
{
    /**
     * @var string base64加密后的EncryptKeys信息。
     */
    public $EncryptKeys;

    /**
     * @var string 使用公钥加密的sessionkey，用来使用aes-128 ecb模式解码encryptkeys中key和iv。
     */
    public $SessionKey;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $EncryptKeys base64加密后的EncryptKeys信息。
     * @param string $SessionKey 使用公钥加密的sessionkey，用来使用aes-128 ecb模式解码encryptkeys中key和iv。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EncryptKeys",$param) and $param["EncryptKeys"] !== null) {
            $this->EncryptKeys = $param["EncryptKeys"];
        }

        if (array_key_exists("SessionKey",$param) and $param["SessionKey"] !== null) {
            $this->SessionKey = $param["SessionKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
