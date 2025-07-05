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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetAccountPassword请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getUserName() 获取需要修改的用户名
 * @method void setUserName(string $UserName) 设置需要修改的用户名
 * @method string getNewPassword() 获取新密码
 * @method void setNewPassword(string $NewPassword) 设置新密码
 */
class ResetAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 需要修改的用户名
     */
    public $UserName;

    /**
     * @var string 新密码
     */
    public $NewPassword;

    /**
     * @param string $InstanceId 实例Id
     * @param string $UserName 需要修改的用户名
     * @param string $NewPassword 新密码
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }
    }
}
