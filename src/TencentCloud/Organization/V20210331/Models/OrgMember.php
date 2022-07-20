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
 * 企业组织成员
 *
 * @method integer getMemberUin() 获取成员Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取成员名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置成员名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberType() 获取成员类型，邀请：Invite， 创建：Create
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberType(string $MemberType) 设置成员类型，邀请：Invite， 创建：Create
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgPolicyType() 获取关系策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPolicyType(string $OrgPolicyType) 设置关系策略类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgPolicyName() 获取关系策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPolicyName(string $OrgPolicyName) 设置关系策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgPermission() 获取关系策略权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPermission(array $OrgPermission) 设置关系策略权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNodeId() 获取所属节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(integer $NodeId) 设置所属节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取所属节点名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置所属节点名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsAllowQuit() 获取是否允许成员退出。允许：Allow，不允许：Denied。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowQuit(string $IsAllowQuit) 设置是否允许成员退出。允许：Allow，不允许：Denied。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayUin() 获取代付者Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayUin(string $PayUin) 设置代付者Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayName() 获取代付者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayName(string $PayName) 设置代付者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgIdentity() 获取管理身份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgIdentity(array $OrgIdentity) 设置管理身份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindStatus() 获取安全信息绑定状态  未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindStatus(string $BindStatus) 设置安全信息绑定状态  未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPermissionStatus() 获取成员权限状态 已确认：Confirmed ，待确认：UnConfirmed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionStatus(string $PermissionStatus) 设置成员权限状态 已确认：Confirmed ，待确认：UnConfirmed
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrgMember extends AbstractModel
{
    /**
     * @var integer 成员Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberUin;

    /**
     * @var string 成员名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 成员类型，邀请：Invite， 创建：Create
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberType;

    /**
     * @var string 关系策略类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPolicyType;

    /**
     * @var string 关系策略名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPolicyName;

    /**
     * @var array 关系策略权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPermission;

    /**
     * @var integer 所属节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 所属节点名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 是否允许成员退出。允许：Allow，不允许：Denied。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowQuit;

    /**
     * @var string 代付者Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayUin;

    /**
     * @var string 代付者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayName;

    /**
     * @var array 管理身份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgIdentity;

    /**
     * @var string 安全信息绑定状态  未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindStatus;

    /**
     * @var string 成员权限状态 已确认：Confirmed ，待确认：UnConfirmed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionStatus;

    /**
     * @param integer $MemberUin 成员Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 成员名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberType 成员类型，邀请：Invite， 创建：Create
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgPolicyType 关系策略类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgPolicyName 关系策略名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OrgPermission 关系策略权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NodeId 所属节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 所属节点名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsAllowQuit 是否允许成员退出。允许：Allow，不允许：Denied。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayUin 代付者Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayName 代付者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OrgIdentity 管理身份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindStatus 安全信息绑定状态  未绑定：Unbound，待激活：Valid，绑定成功：Success，绑定失败：Failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PermissionStatus 成员权限状态 已确认：Confirmed ，待确认：UnConfirmed
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberType",$param) and $param["MemberType"] !== null) {
            $this->MemberType = $param["MemberType"];
        }

        if (array_key_exists("OrgPolicyType",$param) and $param["OrgPolicyType"] !== null) {
            $this->OrgPolicyType = $param["OrgPolicyType"];
        }

        if (array_key_exists("OrgPolicyName",$param) and $param["OrgPolicyName"] !== null) {
            $this->OrgPolicyName = $param["OrgPolicyName"];
        }

        if (array_key_exists("OrgPermission",$param) and $param["OrgPermission"] !== null) {
            $this->OrgPermission = [];
            foreach ($param["OrgPermission"] as $key => $value){
                $obj = new OrgPermission();
                $obj->deserialize($value);
                array_push($this->OrgPermission, $obj);
            }
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("PayName",$param) and $param["PayName"] !== null) {
            $this->PayName = $param["PayName"];
        }

        if (array_key_exists("OrgIdentity",$param) and $param["OrgIdentity"] !== null) {
            $this->OrgIdentity = [];
            foreach ($param["OrgIdentity"] as $key => $value){
                $obj = new MemberIdentity();
                $obj->deserialize($value);
                array_push($this->OrgIdentity, $obj);
            }
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("PermissionStatus",$param) and $param["PermissionStatus"] !== null) {
            $this->PermissionStatus = $param["PermissionStatus"];
        }
    }
}
