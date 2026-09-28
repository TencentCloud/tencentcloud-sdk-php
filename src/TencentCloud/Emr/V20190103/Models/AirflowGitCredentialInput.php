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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * airflow git鉴权配置
 *
 * @method string getUsername() 获取<p>用户名</p>
 * @method void setUsername(string $Username) 设置<p>用户名</p>
 * @method string getToken() 获取<p>用户凭证</p>
 * @method void setToken(string $Token) 设置<p>用户凭证</p>
 */
class AirflowGitCredentialInput extends AbstractModel
{
    /**
     * @var string <p>用户名</p>
     */
    public $Username;

    /**
     * @var string <p>用户凭证</p>
     */
    public $Token;

    /**
     * @param string $Username <p>用户名</p>
     * @param string $Token <p>用户凭证</p>
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

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
