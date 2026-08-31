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
 * @method string getMemberId() 获取<p>成员 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberId(string $MemberId) 设置<p>成员 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取<p>成员账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>成员账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>账号Uin</p>
 * @method void setUin(string $Uin) 设置<p>账号Uin</p>
 * @method string getNickname() 获取<p>账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置<p>账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubAccountCount() 获取<p>子账号数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountCount(integer $SubAccountCount) 设置<p>子账号数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取<p>所属组织架构节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置<p>所属组织架构节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRole() 获取<p>成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(string $Role) 设置<p>成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleDisplay() 获取<p>成员身份显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleDisplay(string $RoleDisplay) 设置<p>成员身份显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccountGroupInfo getAccountGroup() 获取<p>所属账户组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroup(AccountGroupInfo $AccountGroup) 设置<p>所属账户组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCfwManaged() 获取<p>云防火墙纳管状态：0-未纳管，1-已纳管</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwManaged(integer $CfwManaged) 设置<p>云防火墙纳管状态：0-未纳管，1-已纳管</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwShareRole() 获取<p>云防火墙共享角色：sharer-共享者，user-使用者，none-未设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwShareRole(string $CfwShareRole) 设置<p>云防火墙共享角色：sharer-共享者，user-使用者，none-未设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwShareRoleDisplay() 获取<p>云防火墙共享角色显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwShareRoleDisplay(string $CfwShareRoleDisplay) 设置<p>云防火墙共享角色显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwSharerAppId() 获取<p>云防火墙共享者 AppId，成员角色为使用者时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwSharerAppId(string $CfwSharerAppId) 设置<p>云防火墙共享者 AppId，成员角色为使用者时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwInstanceId() 获取<p>云防火墙计费实例 ID，非空表示已购买云防火墙</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwInstanceId(string $CfwInstanceId) 设置<p>云防火墙计费实例 ID，非空表示已购买云防火墙</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyAnalysisEnabled() 获取<p>策略分析权限：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyAnalysisEnabled(integer $PolicyAnalysisEnabled) 设置<p>策略分析权限：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberCreateTime() 获取<p>成员加入集团时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberCreateTime(string $MemberCreateTime) 设置<p>成员加入集团时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJoinType() 获取<p>账号加入方式</p>
 * @method void setJoinType(string $JoinType) 设置<p>账号加入方式</p>
 * @method integer getCfwPayStatus() 获取<p>云防火墙套餐状态</p><p>枚举值：</p><ul><li>0： 未购买</li><li>2： 已购买</li><li>3： 试用中</li><li>4： 已过期</li></ul>
 * @method void setCfwPayStatus(integer $CfwPayStatus) 设置<p>云防火墙套餐状态</p><p>枚举值：</p><ul><li>0： 未购买</li><li>2： 已购买</li><li>3： 试用中</li><li>4： 已过期</li></ul>
 * @method integer getCfwCapable() 获取<p>是否具备云防火墙使用能力</p>
 * @method void setCfwCapable(integer $CfwCapable) 设置<p>是否具备云防火墙使用能力</p>
 * @method integer getSgManaged() 获取<p>私有安全组纳管开关， 0:未纳管，1:已纳管</p>
 * @method void setSgManaged(integer $SgManaged) 设置<p>私有安全组纳管开关， 0:未纳管，1:已纳管</p>
 * @method integer getIsCfwPostPay() 获取<p>是否是后付费云防版本</p><p>枚举值：</p><ul><li>1： 后付费</li><li>0： 非后付费</li><li>-1： 未知</li></ul>
 * @method void setIsCfwPostPay(integer $IsCfwPostPay) 设置<p>是否是后付费云防版本</p><p>枚举值：</p><ul><li>1： 后付费</li><li>0： 非后付费</li><li>-1： 未知</li></ul>
 */
class OrganMemberItem extends AbstractModel
{
    /**
     * @var string <p>成员 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberId;

    /**
     * @var string <p>成员账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>账号Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var integer <p>子账号数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountCount;

    /**
     * @var string <p>所属组织架构节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string <p>成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @var string <p>成员身份显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleDisplay;

    /**
     * @var AccountGroupInfo <p>所属账户组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroup;

    /**
     * @var integer <p>云防火墙纳管状态：0-未纳管，1-已纳管</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwManaged;

    /**
     * @var string <p>云防火墙共享角色：sharer-共享者，user-使用者，none-未设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwShareRole;

    /**
     * @var string <p>云防火墙共享角色显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwShareRoleDisplay;

    /**
     * @var string <p>云防火墙共享者 AppId，成员角色为使用者时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwSharerAppId;

    /**
     * @var string <p>云防火墙计费实例 ID，非空表示已购买云防火墙</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwInstanceId;

    /**
     * @var integer <p>策略分析权限：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyAnalysisEnabled;

    /**
     * @var string <p>成员加入集团时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberCreateTime;

    /**
     * @var string <p>账号加入方式</p>
     */
    public $JoinType;

    /**
     * @var integer <p>云防火墙套餐状态</p><p>枚举值：</p><ul><li>0： 未购买</li><li>2： 已购买</li><li>3： 试用中</li><li>4： 已过期</li></ul>
     */
    public $CfwPayStatus;

    /**
     * @var integer <p>是否具备云防火墙使用能力</p>
     */
    public $CfwCapable;

    /**
     * @var integer <p>私有安全组纳管开关， 0:未纳管，1:已纳管</p>
     */
    public $SgManaged;

    /**
     * @var integer <p>是否是后付费云防版本</p><p>枚举值：</p><ul><li>1： 后付费</li><li>0： 非后付费</li><li>-1： 未知</li></ul>
     */
    public $IsCfwPostPay;

    /**
     * @param string $MemberId <p>成员 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId <p>成员账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>账号Uin</p>
     * @param string $Nickname <p>账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubAccountCount <p>子账号数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName <p>所属组织架构节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Role <p>成员身份：admin-管理员，delegatedAdmin-委派管理员，member-普通成员</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleDisplay <p>成员身份显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccountGroupInfo $AccountGroup <p>所属账户组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CfwManaged <p>云防火墙纳管状态：0-未纳管，1-已纳管</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwShareRole <p>云防火墙共享角色：sharer-共享者，user-使用者，none-未设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwShareRoleDisplay <p>云防火墙共享角色显示名称（前端展示用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwSharerAppId <p>云防火墙共享者 AppId，成员角色为使用者时有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwInstanceId <p>云防火墙计费实例 ID，非空表示已购买云防火墙</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyAnalysisEnabled <p>策略分析权限：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberCreateTime <p>成员加入集团时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JoinType <p>账号加入方式</p>
     * @param integer $CfwPayStatus <p>云防火墙套餐状态</p><p>枚举值：</p><ul><li>0： 未购买</li><li>2： 已购买</li><li>3： 试用中</li><li>4： 已过期</li></ul>
     * @param integer $CfwCapable <p>是否具备云防火墙使用能力</p>
     * @param integer $SgManaged <p>私有安全组纳管开关， 0:未纳管，1:已纳管</p>
     * @param integer $IsCfwPostPay <p>是否是后付费云防版本</p><p>枚举值：</p><ul><li>1： 后付费</li><li>0： 非后付费</li><li>-1： 未知</li></ul>
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

        if (array_key_exists("CfwPayStatus",$param) and $param["CfwPayStatus"] !== null) {
            $this->CfwPayStatus = $param["CfwPayStatus"];
        }

        if (array_key_exists("CfwCapable",$param) and $param["CfwCapable"] !== null) {
            $this->CfwCapable = $param["CfwCapable"];
        }

        if (array_key_exists("SgManaged",$param) and $param["SgManaged"] !== null) {
            $this->SgManaged = $param["SgManaged"];
        }

        if (array_key_exists("IsCfwPostPay",$param) and $param["IsCfwPostPay"] !== null) {
            $this->IsCfwPostPay = $param["IsCfwPostPay"];
        }
    }
}
