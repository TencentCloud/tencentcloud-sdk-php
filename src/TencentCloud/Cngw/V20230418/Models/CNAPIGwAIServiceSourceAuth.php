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
 * AI的服务来源授权信息
 *
 * @method string getUsername() 获取<p>账号</p>
 * @method void setUsername(string $Username) 设置<p>账号</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method string getAccessToken() 获取<p>接入Token</p>
 * @method void setAccessToken(string $AccessToken) 设置<p>接入Token</p>
 */
class CNAPIGwAIServiceSourceAuth extends AbstractModel
{
    /**
     * @var string <p>账号</p>
     */
    public $Username;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var string <p>接入Token</p>
     */
    public $AccessToken;

    /**
     * @param string $Username <p>账号</p>
     * @param string $Password <p>密码</p>
     * @param string $AccessToken <p>接入Token</p>
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }
    }
}
