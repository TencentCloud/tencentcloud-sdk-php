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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoleAssignment请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getRoleConfigurationId() 获取权限配置ID。
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置ID。
 * @method string getTargetType() 获取同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method void setTargetType(string $TargetType) 设置同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method integer getTargetUin() 获取集团账号目标账号的UIN
 * @method void setTargetUin(integer $TargetUin) 设置集团账号目标账号的UIN
 * @method string getPrincipalType() 获取CAM用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method void setPrincipalType(string $PrincipalType) 设置CAM用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method string getPrincipalId() 获取CAM用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）， 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。 	
 * @method void setPrincipalId(string $PrincipalId) 设置CAM用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）， 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。 	
 * @method string getDeprovisionStrategy() 获取当您移除一个集团账号目标账号上使用某访问配置的最后一个授权时，是否同时解除访问配置部署。取值： DeprovisionForLastRoleAssignmentOnAccount：解除访问配置部署。 None（默认值）：不解除访问配置部署。
 * @method void setDeprovisionStrategy(string $DeprovisionStrategy) 设置当您移除一个集团账号目标账号上使用某访问配置的最后一个授权时，是否同时解除访问配置部署。取值： DeprovisionForLastRoleAssignmentOnAccount：解除访问配置部署。 None（默认值）：不解除访问配置部署。
 */
class DeleteRoleAssignmentRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 权限配置ID。
     */
    public $RoleConfigurationId;

    /**
     * @var string 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     */
    public $TargetType;

    /**
     * @var integer 集团账号目标账号的UIN
     */
    public $TargetUin;

    /**
     * @var string CAM用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
     */
    public $PrincipalType;

    /**
     * @var string CAM用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）， 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。 	
     */
    public $PrincipalId;

    /**
     * @var string 当您移除一个集团账号目标账号上使用某访问配置的最后一个授权时，是否同时解除访问配置部署。取值： DeprovisionForLastRoleAssignmentOnAccount：解除访问配置部署。 None（默认值）：不解除访问配置部署。
     */
    public $DeprovisionStrategy;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $RoleConfigurationId 权限配置ID。
     * @param string $TargetType 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     * @param integer $TargetUin 集团账号目标账号的UIN
     * @param string $PrincipalType CAM用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC用户。 Group：表示该 CAM 用户同步的身份是CIC用户组。
     * @param string $PrincipalId CAM用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）， 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。 	
     * @param string $DeprovisionStrategy 当您移除一个集团账号目标账号上使用某访问配置的最后一个授权时，是否同时解除访问配置部署。取值： DeprovisionForLastRoleAssignmentOnAccount：解除访问配置部署。 None（默认值）：不解除访问配置部署。
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

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("DeprovisionStrategy",$param) and $param["DeprovisionStrategy"] !== null) {
            $this->DeprovisionStrategy = $param["DeprovisionStrategy"];
        }
    }
}
