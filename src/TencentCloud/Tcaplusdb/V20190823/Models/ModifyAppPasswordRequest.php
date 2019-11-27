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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getApplicationId() 获取需要修改密码的应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置需要修改密码的应用实例ID
 * @method string getOldPassword() 获取应用旧密码
 * @method void setOldPassword(string $OldPassword) 设置应用旧密码
 * @method string getOldPasswordExpireTime() 获取应用旧密码预期失效时间
 * @method void setOldPasswordExpireTime(string $OldPasswordExpireTime) 设置应用旧密码预期失效时间
 * @method string getNewPassword() 获取应用新密码
 * @method void setNewPassword(string $NewPassword) 设置应用新密码
 * @method string getMode() 获取更新模式： `1` 更新密码；`2` 更新旧密码失效时间，默认为`1` 模式
 * @method void setMode(string $Mode) 设置更新模式： `1` 更新密码；`2` 更新旧密码失效时间，默认为`1` 模式
 */

/**
 *ModifyAppPassword请求参数结构体
 */
class ModifyAppPasswordRequest extends AbstractModel
{
    /**
     * @var string 需要修改密码的应用实例ID
     */
    public $ApplicationId;

    /**
     * @var string 应用旧密码
     */
    public $OldPassword;

    /**
     * @var string 应用旧密码预期失效时间
     */
    public $OldPasswordExpireTime;

    /**
     * @var string 应用新密码
     */
    public $NewPassword;

    /**
     * @var string 更新模式： `1` 更新密码；`2` 更新旧密码失效时间，默认为`1` 模式
     */
    public $Mode;
    /**
     * @param string $ApplicationId 需要修改密码的应用实例ID
     * @param string $OldPassword 应用旧密码
     * @param string $OldPasswordExpireTime 应用旧密码预期失效时间
     * @param string $NewPassword 应用新密码
     * @param string $Mode 更新模式： `1` 更新密码；`2` 更新旧密码失效时间，默认为`1` 模式
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            $this->OldPassword = $param["OldPassword"];
        }

        if (array_key_exists("OldPasswordExpireTime",$param) and $param["OldPasswordExpireTime"] !== null) {
            $this->OldPasswordExpireTime = $param["OldPasswordExpireTime"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
