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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JWT 认证插件配置
 *
 * @method array getHeaderNames() 获取<p>签名的header名称列表</p>
 * @method void setHeaderNames(array $HeaderNames) 设置<p>签名的header名称列表</p>
 * @method array getCookieNames() 获取<p>签名的cookie名称列表</p>
 * @method void setCookieNames(array $CookieNames) 设置<p>签名的cookie名称列表</p>
 * @method array getURIParamNames() 获取<p>签名的URL参数名称列表</p>
 * @method void setURIParamNames(array $URIParamNames) 设置<p>签名的URL参数名称列表</p>
 * @method string getKeyClaimName() 获取<p>消费者标识</p>
 * @method void setKeyClaimName(string $KeyClaimName) 设置<p>消费者标识</p>
 * @method array getClaimsToVerify() 获取<p>标准消费者校验</p><p>枚举值：</p><ul><li>exp： exp</li><li>nbf： nbf</li></ul>
 * @method void setClaimsToVerify(array $ClaimsToVerify) 设置<p>标准消费者校验</p><p>枚举值：</p><ul><li>exp： exp</li><li>nbf： nbf</li></ul>
 * @method integer getMaximumExpiration() 获取<p>最大有效期</p>
 * @method void setMaximumExpiration(integer $MaximumExpiration) 设置<p>最大有效期</p>
 * @method boolean getSecretIsBase64() 获取<p>是否Base64编码</p>
 * @method void setSecretIsBase64(boolean $SecretIsBase64) 设置<p>是否Base64编码</p>
 * @method boolean getRunOnPreFlight() 获取<p>CORS预检验证</p>
 * @method void setRunOnPreFlight(boolean $RunOnPreFlight) 设置<p>CORS预检验证</p>
 */
class AIGWJWTAuthPluginConfig extends AbstractModel
{
    /**
     * @var array <p>签名的header名称列表</p>
     */
    public $HeaderNames;

    /**
     * @var array <p>签名的cookie名称列表</p>
     */
    public $CookieNames;

    /**
     * @var array <p>签名的URL参数名称列表</p>
     */
    public $URIParamNames;

    /**
     * @var string <p>消费者标识</p>
     */
    public $KeyClaimName;

    /**
     * @var array <p>标准消费者校验</p><p>枚举值：</p><ul><li>exp： exp</li><li>nbf： nbf</li></ul>
     */
    public $ClaimsToVerify;

    /**
     * @var integer <p>最大有效期</p>
     */
    public $MaximumExpiration;

    /**
     * @var boolean <p>是否Base64编码</p>
     */
    public $SecretIsBase64;

    /**
     * @var boolean <p>CORS预检验证</p>
     */
    public $RunOnPreFlight;

    /**
     * @param array $HeaderNames <p>签名的header名称列表</p>
     * @param array $CookieNames <p>签名的cookie名称列表</p>
     * @param array $URIParamNames <p>签名的URL参数名称列表</p>
     * @param string $KeyClaimName <p>消费者标识</p>
     * @param array $ClaimsToVerify <p>标准消费者校验</p><p>枚举值：</p><ul><li>exp： exp</li><li>nbf： nbf</li></ul>
     * @param integer $MaximumExpiration <p>最大有效期</p>
     * @param boolean $SecretIsBase64 <p>是否Base64编码</p>
     * @param boolean $RunOnPreFlight <p>CORS预检验证</p>
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
        if (array_key_exists("HeaderNames",$param) and $param["HeaderNames"] !== null) {
            $this->HeaderNames = $param["HeaderNames"];
        }

        if (array_key_exists("CookieNames",$param) and $param["CookieNames"] !== null) {
            $this->CookieNames = $param["CookieNames"];
        }

        if (array_key_exists("URIParamNames",$param) and $param["URIParamNames"] !== null) {
            $this->URIParamNames = $param["URIParamNames"];
        }

        if (array_key_exists("KeyClaimName",$param) and $param["KeyClaimName"] !== null) {
            $this->KeyClaimName = $param["KeyClaimName"];
        }

        if (array_key_exists("ClaimsToVerify",$param) and $param["ClaimsToVerify"] !== null) {
            $this->ClaimsToVerify = $param["ClaimsToVerify"];
        }

        if (array_key_exists("MaximumExpiration",$param) and $param["MaximumExpiration"] !== null) {
            $this->MaximumExpiration = $param["MaximumExpiration"];
        }

        if (array_key_exists("SecretIsBase64",$param) and $param["SecretIsBase64"] !== null) {
            $this->SecretIsBase64 = $param["SecretIsBase64"];
        }

        if (array_key_exists("RunOnPreFlight",$param) and $param["RunOnPreFlight"] !== null) {
            $this->RunOnPreFlight = $param["RunOnPreFlight"];
        }
    }
}
