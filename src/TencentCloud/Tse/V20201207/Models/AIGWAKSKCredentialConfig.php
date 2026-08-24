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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * aksk类型密钥
 *
 * @method string getAccessKeyId() 获取<p>AccessKeyId</p>
 * @method void setAccessKeyId(string $AccessKeyId) 设置<p>AccessKeyId</p>
 * @method string getSecretAccessKey() 获取<p>SecretAccessKey</p>
 * @method void setSecretAccessKey(string $SecretAccessKey) 设置<p>SecretAccessKey</p>
 */
class AIGWAKSKCredentialConfig extends AbstractModel
{
    /**
     * @var string <p>AccessKeyId</p>
     */
    public $AccessKeyId;

    /**
     * @var string <p>SecretAccessKey</p>
     */
    public $SecretAccessKey;

    /**
     * @param string $AccessKeyId <p>AccessKeyId</p>
     * @param string $SecretAccessKey <p>SecretAccessKey</p>
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }
    }
}
