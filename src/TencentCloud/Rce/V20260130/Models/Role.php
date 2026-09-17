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
 * 角色信息
 *
 * @method string getRoleId() 获取<p>角色ID</p>
 * @method void setRoleId(string $RoleId) 设置<p>角色ID</p>
 * @method string getRoleName() 获取<p>角色名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称</p>
 * @method string getRoleSignature() 获取<p>个性签名</p>
 * @method void setRoleSignature(string $RoleSignature) 设置<p>个性签名</p>
 * @method string getRoleLevel() 获取<p>角色等级</p>
 * @method void setRoleLevel(string $RoleLevel) 设置<p>角色等级</p>
 * @method float getRoleCe() 获取<p>角色总战力</p>
 * @method void setRoleCe(float $RoleCe) 设置<p>角色总战力</p>
 * @method string getRoleCreateTime() 获取<p>角色创建时间</p>
 * @method void setRoleCreateTime(string $RoleCreateTime) 设置<p>角色创建时间</p>
 */
class Role extends AbstractModel
{
    /**
     * @var string <p>角色ID</p>
     */
    public $RoleId;

    /**
     * @var string <p>角色名称</p>
     */
    public $RoleName;

    /**
     * @var string <p>个性签名</p>
     */
    public $RoleSignature;

    /**
     * @var string <p>角色等级</p>
     */
    public $RoleLevel;

    /**
     * @var float <p>角色总战力</p>
     */
    public $RoleCe;

    /**
     * @var string <p>角色创建时间</p>
     */
    public $RoleCreateTime;

    /**
     * @param string $RoleId <p>角色ID</p>
     * @param string $RoleName <p>角色名称</p>
     * @param string $RoleSignature <p>个性签名</p>
     * @param string $RoleLevel <p>角色等级</p>
     * @param float $RoleCe <p>角色总战力</p>
     * @param string $RoleCreateTime <p>角色创建时间</p>
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleSignature",$param) and $param["RoleSignature"] !== null) {
            $this->RoleSignature = $param["RoleSignature"];
        }

        if (array_key_exists("RoleLevel",$param) and $param["RoleLevel"] !== null) {
            $this->RoleLevel = $param["RoleLevel"];
        }

        if (array_key_exists("RoleCe",$param) and $param["RoleCe"] !== null) {
            $this->RoleCe = $param["RoleCe"];
        }

        if (array_key_exists("RoleCreateTime",$param) and $param["RoleCreateTime"] !== null) {
            $this->RoleCreateTime = $param["RoleCreateTime"];
        }
    }
}
