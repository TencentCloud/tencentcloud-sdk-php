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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基础角色对象
 *
 * @method string getRoleId() 获取角色id
 * @method void setRoleId(string $RoleId) 设置角色id
 * @method string getRoleName() 获取角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取角色昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置角色昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleType() 获取角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleType(string $RoleType) 设置角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSystemDefault() 获取系统预设
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDefault(boolean $SystemDefault) 设置系统预设
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameters() 获取自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameters(string $Parameters) 设置自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemberCount() 获取成员统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberCount(integer $MemberCount) 设置成员统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivileges() 获取权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivileges(array $Privileges) 设置权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseUser getOperator() 获取操作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(BaseUser $Operator) 设置操作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperateTime() 获取操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateTime(integer $OperateTime) 设置操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTimeStr() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimeStr(string $CreateTimeStr) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTimeStr() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTimeStr(string $UpdateTimeStr) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseRole extends AbstractModel
{
    /**
     * @var string 角色id
     */
    public $RoleId;

    /**
     * @var string 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var string 角色昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleType;

    /**
     * @var boolean 系统预设
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDefault;

    /**
     * @var string 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parameters;

    /**
     * @var integer 成员统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberCount;

    /**
     * @var array 权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privileges;

    /**
     * @var BaseUser 操作者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var integer 操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateTime;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimeStr;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTimeStr;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @param string $RoleId 角色id
     * @param string $RoleName 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 角色昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleType 角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SystemDefault 系统预设
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Parameters 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemberCount 成员统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Privileges 权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseUser $Operator 操作者
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperateTime 操作时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTimeStr 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTimeStr 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建人
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("SystemDefault",$param) and $param["SystemDefault"] !== null) {
            $this->SystemDefault = $param["SystemDefault"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new RolePrivilege();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new BaseUser();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateTimeStr",$param) and $param["CreateTimeStr"] !== null) {
            $this->CreateTimeStr = $param["CreateTimeStr"];
        }

        if (array_key_exists("UpdateTimeStr",$param) and $param["UpdateTimeStr"] !== null) {
            $this->UpdateTimeStr = $param["UpdateTimeStr"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
