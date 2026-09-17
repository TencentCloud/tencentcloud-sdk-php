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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发送者信息
 *
 * @method User getUserInfo() 获取<p>发送者账号信息</p>
 * @method void setUserInfo(User $UserInfo) 设置<p>发送者账号信息</p>
 * @method Role getRoleInfo() 获取<p>发送者角色信息</p>
 * @method void setRoleInfo(Role $RoleInfo) 设置<p>发送者角色信息</p>
 */
class Sender extends AbstractModel
{
    /**
     * @var User <p>发送者账号信息</p>
     */
    public $UserInfo;

    /**
     * @var Role <p>发送者角色信息</p>
     */
    public $RoleInfo;

    /**
     * @param User $UserInfo <p>发送者账号信息</p>
     * @param Role $RoleInfo <p>发送者角色信息</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("RoleInfo",$param) and $param["RoleInfo"] !== null) {
            $this->RoleInfo = new Role();
            $this->RoleInfo->deserialize($param["RoleInfo"]);
        }
    }
}
