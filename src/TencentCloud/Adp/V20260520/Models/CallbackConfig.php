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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调配置
 *
 * @method string getCallbackAesKey() 获取<p>回调AESKey</p>
 * @method void setCallbackAesKey(string $CallbackAesKey) 设置<p>回调AESKey</p>
 * @method string getCallbackToken() 获取<p>回调Token</p>
 * @method void setCallbackToken(string $CallbackToken) 设置<p>回调Token</p>
 * @method string getCallbackUrl() 获取<p>回调URL</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调URL</p>
 */
class CallbackConfig extends AbstractModel
{
    /**
     * @var string <p>回调AESKey</p>
     */
    public $CallbackAesKey;

    /**
     * @var string <p>回调Token</p>
     */
    public $CallbackToken;

    /**
     * @var string <p>回调URL</p>
     */
    public $CallbackUrl;

    /**
     * @param string $CallbackAesKey <p>回调AESKey</p>
     * @param string $CallbackToken <p>回调Token</p>
     * @param string $CallbackUrl <p>回调URL</p>
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
        if (array_key_exists("CallbackAesKey",$param) and $param["CallbackAesKey"] !== null) {
            $this->CallbackAesKey = $param["CallbackAesKey"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
