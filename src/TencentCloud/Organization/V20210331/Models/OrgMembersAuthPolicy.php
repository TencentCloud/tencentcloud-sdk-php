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
 * 组织成员访问授权策略
 *
 * @method integer getIdentityId() 获取身份Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityId(integer $IdentityId) 设置身份Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityRoleName() 获取身份的角色名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityRoleName(string $IdentityRoleName) 设置身份的角色名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityRoleAliasName() 获取身份的角色别名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) 设置身份的角色别名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyId() 获取成员访问策略Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置成员访问策略Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取成员访问策略名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置成员访问策略名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemberUin() 获取成员uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberUin(integer $MemberUin) 设置成员uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberName() 获取成员名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberName(string $MemberName) 设置成员名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrgSubAccountUin() 获取子账号uin或者用户组Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgSubAccountUin(integer $OrgSubAccountUin) 设置子账号uin或者用户组Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgSubAccountName() 获取子账号名称或者用户组名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgSubAccountName(string $OrgSubAccountName) 设置子账号名称或者用户组名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindType() 获取绑定类型。1-子账号、2-用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindType(integer $BindType) 设置绑定类型。1-子账号、2-用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMembers() 获取成员信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMembers(array $Members) 设置成员信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrgMembersAuthPolicy extends AbstractModel
{
    /**
     * @var integer 身份Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityId;

    /**
     * @var string 身份的角色名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityRoleName;

    /**
     * @var string 身份的角色别名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityRoleAliasName;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 成员访问策略Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 成员访问策略名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var integer 成员uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberUin;

    /**
     * @var string 成员名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberName;

    /**
     * @var integer 子账号uin或者用户组Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgSubAccountUin;

    /**
     * @var string 子账号名称或者用户组名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgSubAccountName;

    /**
     * @var integer 绑定类型。1-子账号、2-用户组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindType;

    /**
     * @var array 成员信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Members;

    /**
     * @param integer $IdentityId 身份Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityRoleName 身份的角色名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityRoleAliasName 身份的角色别名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyId 成员访问策略Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 成员访问策略名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemberUin 成员uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberName 成员名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrgSubAccountUin 子账号uin或者用户组Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgSubAccountName 子账号名称或者用户组名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindType 绑定类型。1-子账号、2-用户组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Members 成员信息。
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("IdentityRoleName",$param) and $param["IdentityRoleName"] !== null) {
            $this->IdentityRoleName = $param["IdentityRoleName"];
        }

        if (array_key_exists("IdentityRoleAliasName",$param) and $param["IdentityRoleAliasName"] !== null) {
            $this->IdentityRoleAliasName = $param["IdentityRoleAliasName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("OrgSubAccountUin",$param) and $param["OrgSubAccountUin"] !== null) {
            $this->OrgSubAccountUin = $param["OrgSubAccountUin"];
        }

        if (array_key_exists("OrgSubAccountName",$param) and $param["OrgSubAccountName"] !== null) {
            $this->OrgSubAccountName = $param["OrgSubAccountName"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new MemberMainInfo();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }
    }
}
