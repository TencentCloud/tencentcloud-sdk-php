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
 * OAuth2 凭证物料配置
 *
 * @method string getClientId() 获取<p>OAuth2 client_id</p>
 * @method void setClientId(string $ClientId) 设置<p>OAuth2 client_id</p>
 * @method string getClientSecret() 获取<p>OAuth2 client_secret</p>
 * @method void setClientSecret(string $ClientSecret) 设置<p>OAuth2 client_secret</p>
 */
class AIGWOAuthCredentialConfig extends AbstractModel
{
    /**
     * @var string <p>OAuth2 client_id</p>
     */
    public $ClientId;

    /**
     * @var string <p>OAuth2 client_secret</p>
     */
    public $ClientSecret;

    /**
     * @param string $ClientId <p>OAuth2 client_id</p>
     * @param string $ClientSecret <p>OAuth2 client_secret</p>
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }
    }
}
