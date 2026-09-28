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
 * 用户基本信息
 *
 * @method string getUserUin() 获取<p>uin</p>
 * @method void setUserUin(string $UserUin) 设置<p>uin</p>
 * @method string getUserName() 获取<p>子用户名称</p>
 * @method void setUserName(string $UserName) 设置<p>子用户名称</p>
 * @method string getNickname() 获取<p>子用户昵称</p>
 * @method void setNickname(string $Nickname) 设置<p>子用户昵称</p>
 * @method string getUserTag() 获取<p>0: 普通用户 1: entraId用户</p>
 * @method void setUserTag(string $UserTag) 设置<p>0: 普通用户 1: entraId用户</p>
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string <p>uin</p>
     */
    public $UserUin;

    /**
     * @var string <p>子用户名称</p>
     */
    public $UserName;

    /**
     * @var string <p>子用户昵称</p>
     */
    public $Nickname;

    /**
     * @var string <p>0: 普通用户 1: entraId用户</p>
     */
    public $UserTag;

    /**
     * @param string $UserUin <p>uin</p>
     * @param string $UserName <p>子用户名称</p>
     * @param string $Nickname <p>子用户昵称</p>
     * @param string $UserTag <p>0: 普通用户 1: entraId用户</p>
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
