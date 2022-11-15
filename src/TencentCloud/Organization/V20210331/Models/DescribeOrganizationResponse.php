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
 * DescribeOrganization返回参数结构体
 *
 * @method integer getOrgId() 获取企业组织ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgId(integer $OrgId) 设置企业组织ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostUin() 获取创建者UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostUin(integer $HostUin) 设置创建者UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取创建者昵称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置创建者昵称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrgType() 获取企业组织类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgType(integer $OrgType) 设置企业组织类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsManager() 获取是否组织管理员。是：true ，否：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsManager(boolean $IsManager) 设置是否组织管理员。是：true ，否：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgPolicyType() 获取策略类型。财务管理：Financial
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPolicyType(string $OrgPolicyType) 设置策略类型。财务管理：Financial
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgPolicyName() 获取策略名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPolicyName(string $OrgPolicyName) 设置策略名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgPermission() 获取成员财务权限列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPermission(array $OrgPermission) 设置成员财务权限列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRootNodeId() 获取组织根节点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootNodeId(integer $RootNodeId) 设置组织根节点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取组织创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置组织创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJoinTime() 获取成员加入时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinTime(string $JoinTime) 设置成员加入时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsAllowQuit() 获取成员是否允许退出。允许：Allow，不允许：Denied
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowQuit(string $IsAllowQuit) 设置成员是否允许退出。允许：Allow，不允许：Denied
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayUin() 获取代付者Uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayUin(string $PayUin) 设置代付者Uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayName() 获取代付者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayName(string $PayName) 设置代付者名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAssignManager() 获取是否可信服务管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAssignManager(boolean $IsAssignManager) 设置是否可信服务管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAuthManager() 获取是否实名主体管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAuthManager(boolean $IsAuthManager) 设置是否实名主体管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationResponse extends AbstractModel
{
    /**
     * @var integer 企业组织ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgId;

    /**
     * @var integer 创建者UIN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostUin;

    /**
     * @var string 创建者昵称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var integer 企业组织类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgType;

    /**
     * @var boolean 是否组织管理员。是：true ，否：false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsManager;

    /**
     * @var string 策略类型。财务管理：Financial
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPolicyType;

    /**
     * @var string 策略名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPolicyName;

    /**
     * @var array 成员财务权限列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPermission;

    /**
     * @var integer 组织根节点ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootNodeId;

    /**
     * @var string 组织创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 成员加入时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinTime;

    /**
     * @var string 成员是否允许退出。允许：Allow，不允许：Denied
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowQuit;

    /**
     * @var string 代付者Uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayUin;

    /**
     * @var string 代付者名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayName;

    /**
     * @var boolean 是否可信服务管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAssignManager;

    /**
     * @var boolean 是否实名主体管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAuthManager;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OrgId 企业组织ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostUin 创建者UIN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 创建者昵称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrgType 企业组织类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsManager 是否组织管理员。是：true ，否：false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgPolicyType 策略类型。财务管理：Financial
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgPolicyName 策略名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OrgPermission 成员财务权限列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RootNodeId 组织根节点ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 组织创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JoinTime 成员加入时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsAllowQuit 成员是否允许退出。允许：Allow，不允许：Denied
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayUin 代付者Uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayName 代付者名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAssignManager 是否可信服务管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAuthManager 是否实名主体管理员。是：true，否：false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("HostUin",$param) and $param["HostUin"] !== null) {
            $this->HostUin = $param["HostUin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("OrgType",$param) and $param["OrgType"] !== null) {
            $this->OrgType = $param["OrgType"];
        }

        if (array_key_exists("IsManager",$param) and $param["IsManager"] !== null) {
            $this->IsManager = $param["IsManager"];
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

        if (array_key_exists("RootNodeId",$param) and $param["RootNodeId"] !== null) {
            $this->RootNodeId = $param["RootNodeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
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

        if (array_key_exists("IsAssignManager",$param) and $param["IsAssignManager"] !== null) {
            $this->IsAssignManager = $param["IsAssignManager"];
        }

        if (array_key_exists("IsAuthManager",$param) and $param["IsAuthManager"] !== null) {
            $this->IsAuthManager = $param["IsAuthManager"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
