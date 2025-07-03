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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色凭证
 *
 * @method string getRoleName() 获取角色名
 * @method void setRoleName(string $RoleName) 设置角色名
 * @method string getToken() 获取用于goosefs client/sdk等
 * @method void setToken(string $Token) 设置用于goosefs client/sdk等
 */
class RoleToken extends AbstractModel
{
    /**
     * @var string 角色名
     */
    public $RoleName;

    /**
     * @var string 用于goosefs client/sdk等
     */
    public $Token;

    /**
     * @param string $RoleName 角色名
     * @param string $Token 用于goosefs client/sdk等
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
