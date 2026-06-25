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
 * 精确缓存 redis 配置
 *
 * @method string getHost() 获取<p>Host</p>
 * @method void setHost(string $Host) 设置<p>Host</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 * @method string getUsername() 获取<p>用户名</p>
 * @method void setUsername(string $Username) 设置<p>用户名</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 */
class AIGWRedisConfig extends AbstractModel
{
    /**
     * @var string <p>Host</p>
     */
    public $Host;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>用户名</p>
     */
    public $Username;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @param string $Host <p>Host</p>
     * @param integer $Port <p>端口</p>
     * @param string $Username <p>用户名</p>
     * @param string $Password <p>密码</p>
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
