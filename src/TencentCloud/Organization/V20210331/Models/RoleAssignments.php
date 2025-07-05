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
 * 成员账号的授权详情
 *
 * @method string getRoleConfigurationId() 获取权限配置ID。
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置ID。
 * @method string getRoleConfigurationName() 获取权限配置名称。
 * @method void setRoleConfigurationName(string $RoleConfigurationName) 设置权限配置名称。
 * @method integer getTargetUin() 获取集团账号目标账号的UIN。
 * @method void setTargetUin(integer $TargetUin) 设置集团账号目标账号的UIN。
 * @method string getTargetType() 获取同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号。
 * @method void setTargetType(string $TargetType) 设置同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号。
 * @method string getPrincipalId() 获取CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
 * @method void setPrincipalId(string $PrincipalId) 设置CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
 * @method string getPrincipalType() 获取CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method void setPrincipalType(string $PrincipalType) 设置CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method string getPrincipalName() 获取用户名称或者用户组名称
 * @method void setPrincipalName(string $PrincipalName) 设置用户名称或者用户组名称
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 * @method string getTargetName() 获取集团账号目标账号的名称。
 * @method void setTargetName(string $TargetName) 设置集团账号目标账号的名称。
 */
class RoleAssignments extends AbstractModel
{
    /**
     * @var string 权限配置ID。
     */
    public $RoleConfigurationId;

    /**
     * @var string 权限配置名称。
     */
    public $RoleConfigurationName;

    /**
     * @var integer 集团账号目标账号的UIN。
     */
    public $TargetUin;

    /**
     * @var string 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号。
     */
    public $TargetType;

    /**
     * @var string CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
     */
    public $PrincipalId;

    /**
     * @var string CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
     */
    public $PrincipalType;

    /**
     * @var string 用户名称或者用户组名称
     */
    public $PrincipalName;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 集团账号目标账号的名称。
     */
    public $TargetName;

    /**
     * @param string $RoleConfigurationId 权限配置ID。
     * @param string $RoleConfigurationName 权限配置名称。
     * @param integer $TargetUin 集团账号目标账号的UIN。
     * @param string $TargetType 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号。
     * @param string $PrincipalId CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
     * @param string $PrincipalType CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
     * @param string $PrincipalName 用户名称或者用户组名称
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
     * @param string $TargetName 集团账号目标账号的名称。
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
        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("PrincipalName",$param) and $param["PrincipalName"] !== null) {
            $this->PrincipalName = $param["PrincipalName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
