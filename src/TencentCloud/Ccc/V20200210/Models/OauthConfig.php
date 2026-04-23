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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Oauth2鉴权
 *
 * @method string getTokenURL() 获取
 * @method void setTokenURL(string $TokenURL) 设置
 * @method string getClientId() 获取
 * @method void setClientId(string $ClientId) 设置
 * @method string getClientSecret() 获取
 * @method void setClientSecret(string $ClientSecret) 设置
 */
class OauthConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $TokenURL;

    /**
     * @var string 
     */
    public $ClientId;

    /**
     * @var string 
     */
    public $ClientSecret;

    /**
     * @param string $TokenURL 
     * @param string $ClientId 
     * @param string $ClientSecret 
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
        if (array_key_exists("TokenURL",$param) and $param["TokenURL"] !== null) {
            $this->TokenURL = $param["TokenURL"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }
    }
}
