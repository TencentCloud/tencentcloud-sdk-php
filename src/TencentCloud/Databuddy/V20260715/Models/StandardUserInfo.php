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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户基础展示信息
 *
 * @method string getUserUin() 获取用户UIN
 * @method void setUserUin(string $UserUin) 设置用户UIN
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getNickname() 获取昵称
 * @method void setNickname(string $Nickname) 设置昵称
 * @method string getUserTag() 获取0: 普通用户 1: entraId用户
 * @method void setUserTag(string $UserTag) 设置0: 普通用户 1: entraId用户
 */
class StandardUserInfo extends AbstractModel
{
    /**
     * @var string 用户UIN
     */
    public $UserUin;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 昵称
     */
    public $Nickname;

    /**
     * @var string 0: 普通用户 1: entraId用户
     */
    public $UserTag;

    /**
     * @param string $UserUin 用户UIN
     * @param string $UserName 用户名
     * @param string $Nickname 昵称
     * @param string $UserTag 0: 普通用户 1: entraId用户
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("UserTag",$param) and $param["UserTag"] !== null) {
            $this->UserTag = $param["UserTag"];
        }
    }
}
