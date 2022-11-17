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
 * 成员和子账号的授权关系
 *
 * @method integer getOrgSubAccountUin() 获取组织子账号Uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgSubAccountUin(integer $OrgSubAccountUin) 设置组织子账号Uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyId() 获取策略ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置策略ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取策略名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdentityId() 获取身份ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityId(integer $IdentityId) 设置身份ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityRoleName() 获取身份角色名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityRoleName(string $IdentityRoleName) 设置身份角色名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityRoleAliasName() 获取身份角色别名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) 设置身份角色别名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgSubAccountName() 获取子账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgSubAccountName(string $OrgSubAccountName) 设置子账号名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrgMemberAuthAccount extends AbstractModel
{
    /**
     * @var integer 组织子账号Uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgSubAccountUin;

    /**
     * @var integer 策略ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 策略名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var integer 身份ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityId;

    /**
     * @var string 身份角色名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityRoleName;

    /**
     * @var string 身份角色别名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityRoleAliasName;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 子账号名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgSubAccountName;

    /**
     * @param integer $OrgSubAccountUin 组织子账号Uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyId 策略ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 策略名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdentityId 身份ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityRoleName 身份角色名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityRoleAliasName 身份角色别名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgSubAccountName 子账号名称
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
        if (array_key_exists("OrgSubAccountUin",$param) and $param["OrgSubAccountUin"] !== null) {
            $this->OrgSubAccountUin = $param["OrgSubAccountUin"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OrgSubAccountName",$param) and $param["OrgSubAccountName"] !== null) {
            $this->OrgSubAccountName = $param["OrgSubAccountName"];
        }
    }
}
