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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库账号信息
 *
 * @method string getUser() 获取账号名，可输入1 - 32个字符。
 * @method void setUser(string $User) 设置账号名，可输入1 - 32个字符。
 * @method string getHost() 获取账号的主机。
说明：
1. IP 形式，支持填入%。
2. 多个主机以分隔符分隔，分隔符支持;,|换行符和空格。
 * @method void setHost(string $Host) 设置账号的主机。
说明：
1. IP 形式，支持填入%。
2. 多个主机以分隔符分隔，分隔符支持;,|换行符和空格。
 */
class Account extends AbstractModel
{
    /**
     * @var string 账号名，可输入1 - 32个字符。
     */
    public $User;

    /**
     * @var string 账号的主机。
说明：
1. IP 形式，支持填入%。
2. 多个主机以分隔符分隔，分隔符支持;,|换行符和空格。
     */
    public $Host;

    /**
     * @param string $User 账号名，可输入1 - 32个字符。
     * @param string $Host 账号的主机。
说明：
1. IP 形式，支持填入%。
2. 多个主机以分隔符分隔，分隔符支持;,|换行符和空格。
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
