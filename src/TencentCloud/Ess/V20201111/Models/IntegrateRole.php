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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业角色数据信息
 *
 * @method string getRoleId() 获取角色id
 * @method void setRoleId(string $RoleId) 设置角色id
 * @method string getRoleName() 获取角色名
 * @method void setRoleName(string $RoleName) 设置角色名
 * @method integer getRoleStatus() 获取角色状态，1-启用，2-禁用
 * @method void setRoleStatus(integer $RoleStatus) 设置角色状态，1-启用，2-禁用
 * @method boolean getIsGroupRole() 获取是否是集团角色，true-是，false-否
 * @method void setIsGroupRole(boolean $IsGroupRole) 设置是否是集团角色，true-是，false-否
 * @method array getSubOrgIdList() 获取管辖的子企业列表
 * @method void setSubOrgIdList(array $SubOrgIdList) 设置管辖的子企业列表
 * @method array getPermissionGroups() 获取权限树
 * @method void setPermissionGroups(array $PermissionGroups) 设置权限树
 */
class IntegrateRole extends AbstractModel
{
    /**
     * @var string 角色id
     */
    public $RoleId;

    /**
     * @var string 角色名
     */
    public $RoleName;

    /**
     * @var integer 角色状态，1-启用，2-禁用
     */
    public $RoleStatus;

    /**
     * @var boolean 是否是集团角色，true-是，false-否
     */
    public $IsGroupRole;

    /**
     * @var array 管辖的子企业列表
     */
    public $SubOrgIdList;

    /**
     * @var array 权限树
     */
    public $PermissionGroups;

    /**
     * @param string $RoleId 角色id
     * @param string $RoleName 角色名
     * @param integer $RoleStatus 角色状态，1-启用，2-禁用
     * @param boolean $IsGroupRole 是否是集团角色，true-是，false-否
     * @param array $SubOrgIdList 管辖的子企业列表
     * @param array $PermissionGroups 权限树
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

        if (array_key_exists("RoleStatus",$param) and $param["RoleStatus"] !== null) {
            $this->RoleStatus = $param["RoleStatus"];
        }

        if (array_key_exists("IsGroupRole",$param) and $param["IsGroupRole"] !== null) {
            $this->IsGroupRole = $param["IsGroupRole"];
        }

        if (array_key_exists("SubOrgIdList",$param) and $param["SubOrgIdList"] !== null) {
            $this->SubOrgIdList = $param["SubOrgIdList"];
        }

        if (array_key_exists("PermissionGroups",$param) and $param["PermissionGroups"] !== null) {
            $this->PermissionGroups = [];
            foreach ($param["PermissionGroups"] as $key => $value){
                $obj = new PermissionGroup();
                $obj->deserialize($value);
                array_push($this->PermissionGroups, $obj);
            }
        }
    }
}
