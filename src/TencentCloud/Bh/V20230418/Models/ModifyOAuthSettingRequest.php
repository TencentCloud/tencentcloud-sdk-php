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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOAuthSetting请求参数结构体
 *
 * @method boolean getEnable() 获取是否开启OAuth认证，false-不开启，true-开启。
 * @method void setEnable(boolean $Enable) 设置是否开启OAuth认证，false-不开启，true-开启。
 * @method string getAuthMethod() 获取OAuth认证方式。
 * @method void setAuthMethod(string $AuthMethod) 设置OAuth认证方式。
 * @method string getClientId() 获取OAuth认证客户端Id
 * @method void setClientId(string $ClientId) 设置OAuth认证客户端Id
 * @method string getClientSecret() 获取OAuth认证客户端密钥
 * @method void setClientSecret(string $ClientSecret) 设置OAuth认证客户端密钥
 * @method string getCodeUrl() 获取获取OAuth认证授权码URL
 * @method void setCodeUrl(string $CodeUrl) 设置获取OAuth认证授权码URL
 * @method string getTokenUrl() 获取获取OAuth令牌URL
 * @method void setTokenUrl(string $TokenUrl) 设置获取OAuth令牌URL
 * @method string getUserInfoUrl() 获取获取OAuth用户信息URL
 * @method void setUserInfoUrl(string $UserInfoUrl) 设置获取OAuth用户信息URL
 * @method array getScopes() 获取使用Okta认证时指定范围。为空时默认使用 openid、profile、email。
 * @method void setScopes(array $Scopes) 设置使用Okta认证时指定范围。为空时默认使用 openid、profile、email。
 */
class ModifyOAuthSettingRequest extends AbstractModel
{
    /**
     * @var boolean 是否开启OAuth认证，false-不开启，true-开启。
     */
    public $Enable;

    /**
     * @var string OAuth认证方式。
     */
    public $AuthMethod;

    /**
     * @var string OAuth认证客户端Id
     */
    public $ClientId;

    /**
     * @var string OAuth认证客户端密钥
     */
    public $ClientSecret;

    /**
     * @var string 获取OAuth认证授权码URL
     */
    public $CodeUrl;

    /**
     * @var string 获取OAuth令牌URL
     */
    public $TokenUrl;

    /**
     * @var string 获取OAuth用户信息URL
     */
    public $UserInfoUrl;

    /**
     * @var array 使用Okta认证时指定范围。为空时默认使用 openid、profile、email。
     */
    public $Scopes;

    /**
     * @param boolean $Enable 是否开启OAuth认证，false-不开启，true-开启。
     * @param string $AuthMethod OAuth认证方式。
     * @param string $ClientId OAuth认证客户端Id
     * @param string $ClientSecret OAuth认证客户端密钥
     * @param string $CodeUrl 获取OAuth认证授权码URL
     * @param string $TokenUrl 获取OAuth令牌URL
     * @param string $UserInfoUrl 获取OAuth用户信息URL
     * @param array $Scopes 使用Okta认证时指定范围。为空时默认使用 openid、profile、email。
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AuthMethod",$param) and $param["AuthMethod"] !== null) {
            $this->AuthMethod = $param["AuthMethod"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }

        if (array_key_exists("CodeUrl",$param) and $param["CodeUrl"] !== null) {
            $this->CodeUrl = $param["CodeUrl"];
        }

        if (array_key_exists("TokenUrl",$param) and $param["TokenUrl"] !== null) {
            $this->TokenUrl = $param["TokenUrl"];
        }

        if (array_key_exists("UserInfoUrl",$param) and $param["UserInfoUrl"] !== null) {
            $this->UserInfoUrl = $param["UserInfoUrl"];
        }

        if (array_key_exists("Scopes",$param) and $param["Scopes"] !== null) {
            $this->Scopes = $param["Scopes"];
        }
    }
}
