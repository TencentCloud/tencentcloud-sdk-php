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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团成员信息
 *
 * @method string getMemberId() 获取成员 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberId(string $MemberId) 设置成员 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取成员账号 AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置成员账号 AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取账号Uin
 * @method void setUin(string $Uin) 设置账号Uin
 * @method string getNickname() 获取账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubAccountCount() 获取子账号数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountCount(integer $SubAccountCount) 设置子账号数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取所属组织架构节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置所属组织架构节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRole() 获取成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(string $Role) 设置成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleDisplay() 获取成员身份显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleDisplay(string $RoleDisplay) 设置成员身份显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccountGroupInfo getAccountGroup() 获取所属账户组 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroup(AccountGroupInfo $AccountGroup) 设置所属账户组 
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCfwManaged() 获取云防火墙纳管状态：0-未纳管，1-已纳管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwManaged(integer $CfwManaged) 设置云防火墙纳管状态：0-未纳管，1-已纳管
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwShareRole() 获取云防火墙共享角色：sharer-共享者，user-使用者，none-未设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwShareRole(string $CfwShareRole) 设置云防火墙共享角色：sharer-共享者，user-使用者，none-未设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwShareRoleDisplay() 获取云防火墙共享角色显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwShareRoleDisplay(string $CfwShareRoleDisplay) 设置云防火墙共享角色显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwSharerAppId() 获取云防火墙共享者 AppId，成员角色为使用者时有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwSharerAppId(string $CfwSharerAppId) 设置云防火墙共享者 AppId，成员角色为使用者时有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwInstanceId() 获取云防火墙计费实例 ID，非空表示已购买云防火墙
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwInstanceId(string $CfwInstanceId) 设置云防火墙计费实例 ID，非空表示已购买云防火墙
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyAnalysisEnabled() 获取策略分析权限：0-关闭，1-开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyAnalysisEnabled(integer $PolicyAnalysisEnabled) 设置策略分析权限：0-关闭，1-开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberCreateTime() 获取成员加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberCreateTime(string $MemberCreateTime) 设置成员加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJoinType() 获取账号加入方式
 * @method void setJoinType(string $JoinType) 设置账号加入方式
 */
class OrganMemberItem extends AbstractModel
{
    /**
     * @var string 成员 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberId;

    /**
     * @var string 成员账号 AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 账号Uin
     */
    public $Uin;

    /**
     * @var string 账号名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var integer 子账号数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountCount;

    /**
     * @var string 所属组织架构节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @var string 成员身份显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleDisplay;

    /**
     * @var AccountGroupInfo 所属账户组 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroup;

    /**
     * @var integer 云防火墙纳管状态：0-未纳管，1-已纳管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwManaged;

    /**
     * @var string 云防火墙共享角色：sharer-共享者，user-使用者，none-未设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwShareRole;

    /**
     * @var string 云防火墙共享角色显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwShareRoleDisplay;

    /**
     * @var string 云防火墙共享者 AppId，成员角色为使用者时有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwSharerAppId;

    /**
     * @var string 云防火墙计费实例 ID，非空表示已购买云防火墙
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwInstanceId;

    /**
     * @var integer 策略分析权限：0-关闭，1-开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyAnalysisEnabled;

    /**
     * @var string 成员加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberCreateTime;

    /**
     * @var string 账号加入方式
     */
    public $JoinType;

    /**
     * @param string $MemberId 成员 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 成员账号 AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 账号Uin
     * @param string $Nickname 账号名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubAccountCount 子账号数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 所属组织架构节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Role 成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleDisplay 成员身份显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccountGroupInfo $AccountGroup 所属账户组 
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CfwManaged 云防火墙纳管状态：0-未纳管，1-已纳管
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwShareRole 云防火墙共享角色：sharer-共享者，user-使用者，none-未设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwShareRoleDisplay 云防火墙共享角色显示名称（前端展示用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwSharerAppId 云防火墙共享者 AppId，成员角色为使用者时有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwInstanceId 云防火墙计费实例 ID，非空表示已购买云防火墙
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyAnalysisEnabled 策略分析权限：0-关闭，1-开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberCreateTime 成员加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JoinType 账号加入方式
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubAccountCount",$param) and $param["SubAccountCount"] !== null) {
            $this->SubAccountCount = $param["SubAccountCount"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("RoleDisplay",$param) and $param["RoleDisplay"] !== null) {
            $this->RoleDisplay = $param["RoleDisplay"];
        }

        if (array_key_exists("AccountGroup",$param) and $param["AccountGroup"] !== null) {
            $this->AccountGroup = new AccountGroupInfo();
            $this->AccountGroup->deserialize($param["AccountGroup"]);
        }

        if (array_key_exists("CfwManaged",$param) and $param["CfwManaged"] !== null) {
            $this->CfwManaged = $param["CfwManaged"];
        }

        if (array_key_exists("CfwShareRole",$param) and $param["CfwShareRole"] !== null) {
            $this->CfwShareRole = $param["CfwShareRole"];
        }

        if (array_key_exists("CfwShareRoleDisplay",$param) and $param["CfwShareRoleDisplay"] !== null) {
            $this->CfwShareRoleDisplay = $param["CfwShareRoleDisplay"];
        }

        if (array_key_exists("CfwSharerAppId",$param) and $param["CfwSharerAppId"] !== null) {
            $this->CfwSharerAppId = $param["CfwSharerAppId"];
        }

        if (array_key_exists("CfwInstanceId",$param) and $param["CfwInstanceId"] !== null) {
            $this->CfwInstanceId = $param["CfwInstanceId"];
        }

        if (array_key_exists("PolicyAnalysisEnabled",$param) and $param["PolicyAnalysisEnabled"] !== null) {
            $this->PolicyAnalysisEnabled = $param["PolicyAnalysisEnabled"];
        }

        if (array_key_exists("MemberCreateTime",$param) and $param["MemberCreateTime"] !== null) {
            $this->MemberCreateTime = $param["MemberCreateTime"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }
    }
}
