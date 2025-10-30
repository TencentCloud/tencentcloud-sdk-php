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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CIC的空间统计
 *
 * @method integer getUserQuota() 获取用户配额。
 * @method void setUserQuota(integer $UserQuota) 设置用户配额。
 * @method integer getGroupQuota() 获取用户组配额。
 * @method void setGroupQuota(integer $GroupQuota) 设置用户组配额。
 * @method integer getRoleConfigurationQuota() 获取权限配置配额。
 * @method void setRoleConfigurationQuota(integer $RoleConfigurationQuota) 设置权限配置配额。
 * @method integer getSystemPolicyPerRoleConfigurationQuota() 获取权限配置绑定的系统策略配额。
 * @method void setSystemPolicyPerRoleConfigurationQuota(integer $SystemPolicyPerRoleConfigurationQuota) 设置权限配置绑定的系统策略配额。
 * @method integer getUserCount() 获取用户数。
 * @method void setUserCount(integer $UserCount) 设置用户数。
 * @method integer getGroupCount() 获取用户组数。
 * @method void setGroupCount(integer $GroupCount) 设置用户组数。
 * @method integer getRoleConfigurationCount() 获取权限配置数
 * @method void setRoleConfigurationCount(integer $RoleConfigurationCount) 设置权限配置数
 * @method integer getUserProvisioningCount() 获取同步用户数。
 * @method void setUserProvisioningCount(integer $UserProvisioningCount) 设置同步用户数。
 * @method integer getRoleConfigurationSyncCount() 获取同步角色数。
 * @method void setRoleConfigurationSyncCount(integer $RoleConfigurationSyncCount) 设置同步角色数。
 */
class ZoneStatistics extends AbstractModel
{
    /**
     * @var integer 用户配额。
     */
    public $UserQuota;

    /**
     * @var integer 用户组配额。
     */
    public $GroupQuota;

    /**
     * @var integer 权限配置配额。
     */
    public $RoleConfigurationQuota;

    /**
     * @var integer 权限配置绑定的系统策略配额。
     */
    public $SystemPolicyPerRoleConfigurationQuota;

    /**
     * @var integer 用户数。
     */
    public $UserCount;

    /**
     * @var integer 用户组数。
     */
    public $GroupCount;

    /**
     * @var integer 权限配置数
     */
    public $RoleConfigurationCount;

    /**
     * @var integer 同步用户数。
     */
    public $UserProvisioningCount;

    /**
     * @var integer 同步角色数。
     */
    public $RoleConfigurationSyncCount;

    /**
     * @param integer $UserQuota 用户配额。
     * @param integer $GroupQuota 用户组配额。
     * @param integer $RoleConfigurationQuota 权限配置配额。
     * @param integer $SystemPolicyPerRoleConfigurationQuota 权限配置绑定的系统策略配额。
     * @param integer $UserCount 用户数。
     * @param integer $GroupCount 用户组数。
     * @param integer $RoleConfigurationCount 权限配置数
     * @param integer $UserProvisioningCount 同步用户数。
     * @param integer $RoleConfigurationSyncCount 同步角色数。
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
        if (array_key_exists("UserQuota",$param) and $param["UserQuota"] !== null) {
            $this->UserQuota = $param["UserQuota"];
        }

        if (array_key_exists("GroupQuota",$param) and $param["GroupQuota"] !== null) {
            $this->GroupQuota = $param["GroupQuota"];
        }

        if (array_key_exists("RoleConfigurationQuota",$param) and $param["RoleConfigurationQuota"] !== null) {
            $this->RoleConfigurationQuota = $param["RoleConfigurationQuota"];
        }

        if (array_key_exists("SystemPolicyPerRoleConfigurationQuota",$param) and $param["SystemPolicyPerRoleConfigurationQuota"] !== null) {
            $this->SystemPolicyPerRoleConfigurationQuota = $param["SystemPolicyPerRoleConfigurationQuota"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("RoleConfigurationCount",$param) and $param["RoleConfigurationCount"] !== null) {
            $this->RoleConfigurationCount = $param["RoleConfigurationCount"];
        }

        if (array_key_exists("UserProvisioningCount",$param) and $param["UserProvisioningCount"] !== null) {
            $this->UserProvisioningCount = $param["UserProvisioningCount"];
        }

        if (array_key_exists("RoleConfigurationSyncCount",$param) and $param["RoleConfigurationSyncCount"] !== null) {
            $this->RoleConfigurationSyncCount = $param["RoleConfigurationSyncCount"];
        }
    }
}
