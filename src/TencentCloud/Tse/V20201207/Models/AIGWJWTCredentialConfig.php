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
 * AI网关 JWT 凭证物料配置
 *
 * @method string getKey() 获取<p>JWT 消费者标识，iss claim</p>
 * @method void setKey(string $Key) 设置<p>JWT 消费者标识，iss claim</p>
 * @method string getAlgorithm() 获取<p>签名算法，取值：HS256 HS384 HS512 RS256 RS384 RS512 ES256 ES384 ES512</p>
 * @method void setAlgorithm(string $Algorithm) 设置<p>签名算法，取值：HS256 HS384 HS512 RS256 RS384 RS512 ES256 ES384 ES512</p>
 * @method string getSecret() 获取<p>HS 对称密钥，仅 Algorithm 为 HS256/HS384/HS512 时必填；RS/ES* 时留空</p>
 * @method void setSecret(string $Secret) 设置<p>HS 对称密钥，仅 Algorithm 为 HS256/HS384/HS512 时必填；RS/ES* 时留空</p>
 * @method string getRSAPublicKey() 获取<p>RS/ES PEM 格式公钥，仅 Algorithm 为 RS256/RS384/RS512/ES256/ES384/ES512 时必填；HS* 时留空</p>
 * @method void setRSAPublicKey(string $RSAPublicKey) 设置<p>RS/ES PEM 格式公钥，仅 Algorithm 为 RS256/RS384/RS512/ES256/ES384/ES512 时必填；HS* 时留空</p>
 */
class AIGWJWTCredentialConfig extends AbstractModel
{
    /**
     * @var string <p>JWT 消费者标识，iss claim</p>
     */
    public $Key;

    /**
     * @var string <p>签名算法，取值：HS256 HS384 HS512 RS256 RS384 RS512 ES256 ES384 ES512</p>
     */
    public $Algorithm;

    /**
     * @var string <p>HS 对称密钥，仅 Algorithm 为 HS256/HS384/HS512 时必填；RS/ES* 时留空</p>
     */
    public $Secret;

    /**
     * @var string <p>RS/ES PEM 格式公钥，仅 Algorithm 为 RS256/RS384/RS512/ES256/ES384/ES512 时必填；HS* 时留空</p>
     */
    public $RSAPublicKey;

    /**
     * @param string $Key <p>JWT 消费者标识，iss claim</p>
     * @param string $Algorithm <p>签名算法，取值：HS256 HS384 HS512 RS256 RS384 RS512 ES256 ES384 ES512</p>
     * @param string $Secret <p>HS 对称密钥，仅 Algorithm 为 HS256/HS384/HS512 时必填；RS/ES* 时留空</p>
     * @param string $RSAPublicKey <p>RS/ES PEM 格式公钥，仅 Algorithm 为 RS256/RS384/RS512/ES256/ES384/ES512 时必填；HS* 时留空</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("RSAPublicKey",$param) and $param["RSAPublicKey"] !== null) {
            $this->RSAPublicKey = $param["RSAPublicKey"];
        }
    }
}
