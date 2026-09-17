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
 * 编辑角色资料事件详情
 *
 * @method string getRoleNameAfter() 获取<p>修改后的角色名，允许空串</p>
 * @method void setRoleNameAfter(string $RoleNameAfter) 设置<p>修改后的角色名，允许空串</p>
 * @method string getRoleSignatureAfter() 获取<p>修改后的签名档，允许空串</p>
 * @method void setRoleSignatureAfter(string $RoleSignatureAfter) 设置<p>修改后的签名档，允许空串</p>
 * @method string getServerId() 获取<p>所属服务器ID，允许空串</p>
 * @method void setServerId(string $ServerId) 设置<p>所属服务器ID，允许空串</p>
 * @method User getUserInfo() 获取<p>编辑者账号信息</p>
 * @method void setUserInfo(User $UserInfo) 设置<p>编辑者账号信息</p>
 * @method Role getRoleInfo() 获取<p>角色信息</p>
 * @method void setRoleInfo(Role $RoleInfo) 设置<p>角色信息</p>
 */
class ModifyRoleEvent extends AbstractModel
{
    /**
     * @var string <p>修改后的角色名，允许空串</p>
     */
    public $RoleNameAfter;

    /**
     * @var string <p>修改后的签名档，允许空串</p>
     */
    public $RoleSignatureAfter;

    /**
     * @var string <p>所属服务器ID，允许空串</p>
     */
    public $ServerId;

    /**
     * @var User <p>编辑者账号信息</p>
     */
    public $UserInfo;

    /**
     * @var Role <p>角色信息</p>
     */
    public $RoleInfo;

    /**
     * @param string $RoleNameAfter <p>修改后的角色名，允许空串</p>
     * @param string $RoleSignatureAfter <p>修改后的签名档，允许空串</p>
     * @param string $ServerId <p>所属服务器ID，允许空串</p>
     * @param User $UserInfo <p>编辑者账号信息</p>
     * @param Role $RoleInfo <p>角色信息</p>
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
        if (array_key_exists("RoleNameAfter",$param) and $param["RoleNameAfter"] !== null) {
            $this->RoleNameAfter = $param["RoleNameAfter"];
        }

        if (array_key_exists("RoleSignatureAfter",$param) and $param["RoleSignatureAfter"] !== null) {
            $this->RoleSignatureAfter = $param["RoleSignatureAfter"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
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
