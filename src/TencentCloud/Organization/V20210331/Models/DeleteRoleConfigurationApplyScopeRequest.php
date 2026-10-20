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
 * DeleteRoleConfigurationApplyScope请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间ID</p>
 * @method array getRoleConfigurationIds() 获取<p>权限配置 ID 列表</p>
 * @method void setRoleConfigurationIds(array $RoleConfigurationIds) 设置<p>权限配置 ID 列表</p>
 * @method integer getTargetUin() 获取<p>目标账号 UIN</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>目标账号 UIN</p>
 * @method string getPrincipalId() 获取<p>身份 ID</p>
 * @method void setPrincipalId(string $PrincipalId) 设置<p>身份 ID</p>
 * @method string getPrincipalType() 获取<p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
 * @method void setPrincipalType(string $PrincipalType) 设置<p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
 */
class DeleteRoleConfigurationApplyScopeRequest extends AbstractModel
{
    /**
     * @var string <p>空间ID</p>
     */
    public $ZoneId;

    /**
     * @var array <p>权限配置 ID 列表</p>
     */
    public $RoleConfigurationIds;

    /**
     * @var integer <p>目标账号 UIN</p>
     */
    public $TargetUin;

    /**
     * @var string <p>身份 ID</p>
     */
    public $PrincipalId;

    /**
     * @var string <p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
     */
    public $PrincipalType;

    /**
     * @param string $ZoneId <p>空间ID</p>
     * @param array $RoleConfigurationIds <p>权限配置 ID 列表</p>
     * @param integer $TargetUin <p>目标账号 UIN</p>
     * @param string $PrincipalId <p>身份 ID</p>
     * @param string $PrincipalType <p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoleConfigurationIds",$param) and $param["RoleConfigurationIds"] !== null) {
            $this->RoleConfigurationIds = $param["RoleConfigurationIds"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }
    }
}
