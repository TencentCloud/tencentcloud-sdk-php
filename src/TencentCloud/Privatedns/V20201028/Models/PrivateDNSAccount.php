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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有域解析账号
 *
 * @method string getUin() 获取主账号Uin
 * @method void setUin(string $Uin) 设置主账号Uin
 * @method string getAccount() 获取主账号名称
 * @method void setAccount(string $Account) 设置主账号名称
 * @method string getNickname() 获取用户昵称
 * @method void setNickname(string $Nickname) 设置用户昵称
 */
class PrivateDNSAccount extends AbstractModel
{
    /**
     * @var string 主账号Uin
     */
    public $Uin;

    /**
     * @var string 主账号名称
     */
    public $Account;

    /**
     * @var string 用户昵称
     */
    public $Nickname;

    /**
     * @param string $Uin 主账号Uin
     * @param string $Account 主账号名称
     * @param string $Nickname 用户昵称
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }
    }
}
