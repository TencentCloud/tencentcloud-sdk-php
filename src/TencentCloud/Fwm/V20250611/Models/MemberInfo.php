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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成员信息
 *
 * @method string getAppId() 获取成员AppId
 * @method void setAppId(string $AppId) 设置成员AppId
 * @method string getUin() 获取成员Uin
 * @method void setUin(string $Uin) 设置成员Uin
 * @method string getNickname() 获取成员昵称
 * @method void setNickname(string $Nickname) 设置成员昵称
 * @method string getMemberId() 获取成员Id
 * @method void setMemberId(string $MemberId) 设置成员Id
 */
class MemberInfo extends AbstractModel
{
    /**
     * @var string 成员AppId
     */
    public $AppId;

    /**
     * @var string 成员Uin
     */
    public $Uin;

    /**
     * @var string 成员昵称
     */
    public $Nickname;

    /**
     * @var string 成员Id
     */
    public $MemberId;

    /**
     * @param string $AppId 成员AppId
     * @param string $Uin 成员Uin
     * @param string $Nickname 成员昵称
     * @param string $MemberId 成员Id
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
