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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源账户信息
 *
 * @method string getResourceId() 获取资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID。
 * @method string getUserName() 获取用户名。
 * @method void setUserName(string $UserName) 设置用户名。
 * @method string getPassword() 获取密码。
 * @method void setPassword(string $Password) 设置密码。
 */
class DspaResourceAccount extends AbstractModel
{
    /**
     * @var string 资源ID。
     */
    public $ResourceId;

    /**
     * @var string 用户名。
     */
    public $UserName;

    /**
     * @var string 密码。
     */
    public $Password;

    /**
     * @param string $ResourceId 资源ID。
     * @param string $UserName 用户名。
     * @param string $Password 密码。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
