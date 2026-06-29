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
 * OAuth2.0授权信息
 *
 * @method string getAuthorizationUrl() 获取OAuth服务方授权页url地址
 * @method void setAuthorizationUrl(string $AuthorizationUrl) 设置OAuth服务方授权页url地址
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getClientSecret() 获取客户端密钥
 * @method void setClientSecret(string $ClientSecret) 设置客户端密钥
 * @method array getScopeList() 获取请求授权的数据范围
 * @method void setScopeList(array $ScopeList) 设置请求授权的数据范围
 * @method string getTokenUrl() 获取获取access token的url地址
 * @method void setTokenUrl(string $TokenUrl) 设置获取access token的url地址
 */
class OAuthConfig extends AbstractModel
{
    /**
     * @var string OAuth服务方授权页url地址
     */
    public $AuthorizationUrl;

    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 客户端密钥
     */
    public $ClientSecret;

    /**
     * @var array 请求授权的数据范围
     */
    public $ScopeList;

    /**
     * @var string 获取access token的url地址
     */
    public $TokenUrl;

    /**
     * @param string $AuthorizationUrl OAuth服务方授权页url地址
     * @param string $ClientId 客户端ID
     * @param string $ClientSecret 客户端密钥
     * @param array $ScopeList 请求授权的数据范围
     * @param string $TokenUrl 获取access token的url地址
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
        if (array_key_exists("AuthorizationUrl",$param) and $param["AuthorizationUrl"] !== null) {
            $this->AuthorizationUrl = $param["AuthorizationUrl"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }

        if (array_key_exists("ScopeList",$param) and $param["ScopeList"] !== null) {
            $this->ScopeList = $param["ScopeList"];
        }

        if (array_key_exists("TokenUrl",$param) and $param["TokenUrl"] !== null) {
            $this->TokenUrl = $param["TokenUrl"];
        }
    }
}
