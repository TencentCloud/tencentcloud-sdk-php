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
 * DescribeOrganization返回参数结构体
 *
 * @method integer getOrgId() 获取<p>企业组织ID。</p>
 * @method void setOrgId(integer $OrgId) 设置<p>企业组织ID。</p>
 * @method integer getHostUin() 获取<p>创建者UIN。</p>
 * @method void setHostUin(integer $HostUin) 设置<p>创建者UIN。</p>
 * @method string getNickName() 获取<p>创建者昵称。</p>
 * @method void setNickName(string $NickName) 设置<p>创建者昵称。</p>
 * @method integer getOrgType() 获取<p>企业组织类型。</p>
 * @method void setOrgType(integer $OrgType) 设置<p>企业组织类型。</p>
 * @method boolean getIsManager() 获取<p>是否组织管理员。是：true ，否：false</p>
 * @method void setIsManager(boolean $IsManager) 设置<p>是否组织管理员。是：true ，否：false</p>
 * @method string getOrgPolicyType() 获取<p>策略类型。财务管理：Financial</p>
 * @method void setOrgPolicyType(string $OrgPolicyType) 设置<p>策略类型。财务管理：Financial</p>
 * @method string getOrgPolicyName() 获取<p>策略名。</p>
 * @method void setOrgPolicyName(string $OrgPolicyName) 设置<p>策略名。</p>
 * @method array getOrgPermission() 获取<p>成员财务权限列表。</p>
 * @method void setOrgPermission(array $OrgPermission) 设置<p>成员财务权限列表。</p>
 * @method integer getRootNodeId() 获取<p>组织根节点ID。</p>
 * @method void setRootNodeId(integer $RootNodeId) 设置<p>组织根节点ID。</p>
 * @method string getCreateTime() 获取<p>组织创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>组织创建时间。</p>
 * @method string getJoinTime() 获取<p>成员加入时间。</p>
 * @method void setJoinTime(string $JoinTime) 设置<p>成员加入时间。</p>
 * @method string getIsAllowQuit() 获取<p>成员是否允许退出。允许：Allow，不允许：Denied</p>
 * @method void setIsAllowQuit(string $IsAllowQuit) 设置<p>成员是否允许退出。允许：Allow，不允许：Denied</p>
 * @method string getPayUin() 获取<p>代付者Uin。</p>
 * @method void setPayUin(string $PayUin) 设置<p>代付者Uin。</p>
 * @method string getPayName() 获取<p>代付者名称。</p>
 * @method void setPayName(string $PayName) 设置<p>代付者名称。</p>
 * @method boolean getIsAssignManager() 获取<p>是否可信服务管理员。是：true，否：false</p>
 * @method void setIsAssignManager(boolean $IsAssignManager) 设置<p>是否可信服务管理员。是：true，否：false</p>
 * @method boolean getIsAuthManager() 获取<p>是否实名主体管理员。是：true，否：false</p>
 * @method void setIsAuthManager(boolean $IsAuthManager) 设置<p>是否实名主体管理员。是：true，否：false</p>
 * @method array getMemberPermissionOptions() 获取<p>创建/邀请成员时可设置的财务权限列表</p>
 * @method void setMemberPermissionOptions(array $MemberPermissionOptions) 设置<p>创建/邀请成员时可设置的财务权限列表</p>
 * @method string getDefaultPayType() 获取<p>创建/邀请成员时的默认付费方式。</p><p>枚举值：</p><ul><li>SelfPay： 自付</li><li>BehalfPay： 代付</li></ul>
 * @method void setDefaultPayType(string $DefaultPayType) 设置<p>创建/邀请成员时的默认付费方式。</p><p>枚举值：</p><ul><li>SelfPay： 自付</li><li>BehalfPay： 代付</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationResponse extends AbstractModel
{
    /**
     * @var integer <p>企业组织ID。</p>
     */
    public $OrgId;

    /**
     * @var integer <p>创建者UIN。</p>
     */
    public $HostUin;

    /**
     * @var string <p>创建者昵称。</p>
     */
    public $NickName;

    /**
     * @var integer <p>企业组织类型。</p>
     */
    public $OrgType;

    /**
     * @var boolean <p>是否组织管理员。是：true ，否：false</p>
     */
    public $IsManager;

    /**
     * @var string <p>策略类型。财务管理：Financial</p>
     */
    public $OrgPolicyType;

    /**
     * @var string <p>策略名。</p>
     */
    public $OrgPolicyName;

    /**
     * @var array <p>成员财务权限列表。</p>
     */
    public $OrgPermission;

    /**
     * @var integer <p>组织根节点ID。</p>
     */
    public $RootNodeId;

    /**
     * @var string <p>组织创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>成员加入时间。</p>
     */
    public $JoinTime;

    /**
     * @var string <p>成员是否允许退出。允许：Allow，不允许：Denied</p>
     */
    public $IsAllowQuit;

    /**
     * @var string <p>代付者Uin。</p>
     */
    public $PayUin;

    /**
     * @var string <p>代付者名称。</p>
     */
    public $PayName;

    /**
     * @var boolean <p>是否可信服务管理员。是：true，否：false</p>
     */
    public $IsAssignManager;

    /**
     * @var boolean <p>是否实名主体管理员。是：true，否：false</p>
     */
    public $IsAuthManager;

    /**
     * @var array <p>创建/邀请成员时可设置的财务权限列表</p>
     */
    public $MemberPermissionOptions;

    /**
     * @var string <p>创建/邀请成员时的默认付费方式。</p><p>枚举值：</p><ul><li>SelfPay： 自付</li><li>BehalfPay： 代付</li></ul>
     */
    public $DefaultPayType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OrgId <p>企业组织ID。</p>
     * @param integer $HostUin <p>创建者UIN。</p>
     * @param string $NickName <p>创建者昵称。</p>
     * @param integer $OrgType <p>企业组织类型。</p>
     * @param boolean $IsManager <p>是否组织管理员。是：true ，否：false</p>
     * @param string $OrgPolicyType <p>策略类型。财务管理：Financial</p>
     * @param string $OrgPolicyName <p>策略名。</p>
     * @param array $OrgPermission <p>成员财务权限列表。</p>
     * @param integer $RootNodeId <p>组织根节点ID。</p>
     * @param string $CreateTime <p>组织创建时间。</p>
     * @param string $JoinTime <p>成员加入时间。</p>
     * @param string $IsAllowQuit <p>成员是否允许退出。允许：Allow，不允许：Denied</p>
     * @param string $PayUin <p>代付者Uin。</p>
     * @param string $PayName <p>代付者名称。</p>
     * @param boolean $IsAssignManager <p>是否可信服务管理员。是：true，否：false</p>
     * @param boolean $IsAuthManager <p>是否实名主体管理员。是：true，否：false</p>
     * @param array $MemberPermissionOptions <p>创建/邀请成员时可设置的财务权限列表</p>
     * @param string $DefaultPayType <p>创建/邀请成员时的默认付费方式。</p><p>枚举值：</p><ul><li>SelfPay： 自付</li><li>BehalfPay： 代付</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("MemberPermissionOptions",$param) and $param["MemberPermissionOptions"] !== null) {
            $this->MemberPermissionOptions = [];
            foreach ($param["MemberPermissionOptions"] as $key => $value){
                $obj = new MemberPermissionOption();
                $obj->deserialize($value);
                array_push($this->MemberPermissionOptions, $obj);
            }
        }

        if (array_key_exists("DefaultPayType",$param) and $param["DefaultPayType"] !== null) {
            $this->DefaultPayType = $param["DefaultPayType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
