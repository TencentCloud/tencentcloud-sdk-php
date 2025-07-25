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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetPassword请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
 * @method string getUserName() 获取实例账户名。初始化实例密码，本参数传mongouser。
 * @method void setUserName(string $UserName) 设置实例账户名。初始化实例密码，本参数传mongouser。
 * @method string getPassword() 获取指定账户的新密码， 密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
 * @method void setPassword(string $Password) 设置指定账户的新密码， 密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
 */
class SetPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceId;

    /**
     * @var string 实例账户名。初始化实例密码，本参数传mongouser。
     */
    public $UserName;

    /**
     * @var string 指定账户的新密码， 密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
     */
    public $Password;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
     * @param string $UserName 实例账户名。初始化实例密码，本参数传mongouser。
     * @param string $Password 指定账户的新密码， 密码格式为8-32个字符长度，至少包含字母、数字和字符（!@#%^*()_）中的两种
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
