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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos桶关联角色列表信息
 *
 * @method string getRoleId() 获取角色ID
 * @method void setRoleId(string $RoleId) 设置角色ID
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method string getRoleDescription() 获取角色描述
 * @method void setRoleDescription(string $RoleDescription) 设置角色描述
 * @method integer getPermissionCount() 获取可访问权限数
 * @method void setPermissionCount(integer $PermissionCount) 设置可访问权限数
 * @method integer getCreateTime() 获取策略创建时间
 * @method void setCreateTime(integer $CreateTime) 设置策略创建时间
 */
class CosRoleAccessInfo extends AbstractModel
{
    /**
     * @var string 角色ID
     */
    public $RoleId;

    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var string 角色描述
     */
    public $RoleDescription;

    /**
     * @var integer 可访问权限数
     */
    public $PermissionCount;

    /**
     * @var integer 策略创建时间
     */
    public $CreateTime;

    /**
     * @param string $RoleId 角色ID
     * @param string $RoleName 角色名称
     * @param string $RoleDescription 角色描述
     * @param integer $PermissionCount 可访问权限数
     * @param integer $CreateTime 策略创建时间
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

        if (array_key_exists("RoleDescription",$param) and $param["RoleDescription"] !== null) {
            $this->RoleDescription = $param["RoleDescription"];
        }

        if (array_key_exists("PermissionCount",$param) and $param["PermissionCount"] !== null) {
            $this->PermissionCount = $param["PermissionCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
