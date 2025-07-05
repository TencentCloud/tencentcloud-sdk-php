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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 认证信息
 *
 * @method string getIp() 获取地址
 * @method void setIp(string $Ip) 设置地址
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getUser() 获取账号
 * @method void setUser(string $User) 设置账号
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method string getAccessURL() 获取唤起链接｜wss链接
 * @method void setAccessURL(string $AccessURL) 设置唤起链接｜wss链接
 */
class AccessInfo extends AbstractModel
{
    /**
     * @var string 地址
     */
    public $Ip;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 账号
     */
    public $User;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var string 唤起链接｜wss链接
     */
    public $AccessURL;

    /**
     * @param string $Ip 地址
     * @param integer $Port 端口
     * @param string $User 账号
     * @param string $Password 密码
     * @param string $AccessURL 唤起链接｜wss链接
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AccessURL",$param) and $param["AccessURL"] !== null) {
            $this->AccessURL = $param["AccessURL"];
        }
    }
}
