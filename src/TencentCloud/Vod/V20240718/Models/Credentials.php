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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 临时访问凭证。
 *
 * @method string getAccessKeyId() 获取<p>访问凭证 ID。</p>
 * @method void setAccessKeyId(string $AccessKeyId) 设置<p>访问凭证 ID。</p>
 * @method string getSecretAccessKey() 获取<p>访问凭证 Key。</p>
 * @method void setSecretAccessKey(string $SecretAccessKey) 设置<p>访问凭证 Key。</p>
 * @method string getSessionToken() 获取<p>访问凭证 Token，长度和绑定的策略有关，最长不超过 4096 字节。</p>
 * @method void setSessionToken(string $SessionToken) 设置<p>访问凭证 Token，长度和绑定的策略有关，最长不超过 4096 字节。</p>
 * @method string getExpiration() 获取<p>访问凭证的过期时间。</p>
 * @method void setExpiration(string $Expiration) 设置<p>访问凭证的过期时间。</p>
 */
class Credentials extends AbstractModel
{
    /**
     * @var string <p>访问凭证 ID。</p>
     */
    public $AccessKeyId;

    /**
     * @var string <p>访问凭证 Key。</p>
     */
    public $SecretAccessKey;

    /**
     * @var string <p>访问凭证 Token，长度和绑定的策略有关，最长不超过 4096 字节。</p>
     */
    public $SessionToken;

    /**
     * @var string <p>访问凭证的过期时间。</p>
     */
    public $Expiration;

    /**
     * @param string $AccessKeyId <p>访问凭证 ID。</p>
     * @param string $SecretAccessKey <p>访问凭证 Key。</p>
     * @param string $SessionToken <p>访问凭证 Token，长度和绑定的策略有关，最长不超过 4096 字节。</p>
     * @param string $Expiration <p>访问凭证的过期时间。</p>
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

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }
    }
}
