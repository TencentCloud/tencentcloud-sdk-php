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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserProfile请求参数结构体
 *
 * @method string getUserId() 获取待修改用户ID
 * @method void setUserId(string $UserId) 设置待修改用户ID
 * @method string getNickname() 获取待修改的用户名
 * @method void setNickname(string $Nickname) 设置待修改的用户名
 * @method string getAvatar() 获取待修改头像url
 * @method void setAvatar(string $Avatar) 设置待修改头像url
 */
class ModifyUserProfileRequest extends AbstractModel
{
    /**
     * @var string 待修改用户ID
     */
    public $UserId;

    /**
     * @var string 待修改的用户名
     */
    public $Nickname;

    /**
     * @var string 待修改头像url
     */
    public $Avatar;

    /**
     * @param string $UserId 待修改用户ID
     * @param string $Nickname 待修改的用户名
     * @param string $Avatar 待修改头像url
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
