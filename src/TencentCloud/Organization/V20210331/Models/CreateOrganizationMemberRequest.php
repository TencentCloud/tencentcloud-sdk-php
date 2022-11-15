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
 * CreateOrganizationMember请求参数结构体
 *
 * @method string getName() 获取成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method void setName(string $Name) 设置成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method string getPolicyType() 获取关系策略。取值：Financial
 * @method void setPolicyType(string $PolicyType) 设置关系策略。取值：Financial
 * @method array getPermissionIds() 获取成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费，1、2 默认必须
 * @method void setPermissionIds(array $PermissionIds) 设置成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费，1、2 默认必须
 * @method integer getNodeId() 获取成员所属部门的节点ID。可以调用DescribeOrganizationNodes获取
 * @method void setNodeId(integer $NodeId) 设置成员所属部门的节点ID。可以调用DescribeOrganizationNodes获取
 * @method string getAccountName() 获取账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method void setAccountName(string $AccountName) 设置账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method integer getRecordId() 获取成员创建记录ID。创建异常重试时需要
 * @method void setRecordId(integer $RecordId) 设置成员创建记录ID。创建异常重试时需要
 * @method string getPayUin() 获取代付者Uin。成员代付费时需要
 * @method void setPayUin(string $PayUin) 设置代付者Uin。成员代付费时需要
 * @method array getIdentityRoleID() 获取成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持
 * @method void setIdentityRoleID(array $IdentityRoleID) 设置成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持
 * @method integer getAuthRelationId() 获取认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取
 * @method void setAuthRelationId(integer $AuthRelationId) 设置认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取
 */
class CreateOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var string 成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     */
    public $Name;

    /**
     * @var string 关系策略。取值：Financial
     */
    public $PolicyType;

    /**
     * @var array 成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费，1、2 默认必须
     */
    public $PermissionIds;

    /**
     * @var integer 成员所属部门的节点ID。可以调用DescribeOrganizationNodes获取
     */
    public $NodeId;

    /**
     * @var string 账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     */
    public $AccountName;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var integer 成员创建记录ID。创建异常重试时需要
     */
    public $RecordId;

    /**
     * @var string 代付者Uin。成员代付费时需要
     */
    public $PayUin;

    /**
     * @var array 成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持
     */
    public $IdentityRoleID;

    /**
     * @var integer 认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取
     */
    public $AuthRelationId;

    /**
     * @param string $Name 成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     * @param string $PolicyType 关系策略。取值：Financial
     * @param array $PermissionIds 成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费，1、2 默认必须
     * @param integer $NodeId 成员所属部门的节点ID。可以调用DescribeOrganizationNodes获取
     * @param string $AccountName 账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     * @param string $Remark 备注。
     * @param integer $RecordId 成员创建记录ID。创建异常重试时需要
     * @param string $PayUin 代付者Uin。成员代付费时需要
     * @param array $IdentityRoleID 成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持
     * @param integer $AuthRelationId 认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("IdentityRoleID",$param) and $param["IdentityRoleID"] !== null) {
            $this->IdentityRoleID = $param["IdentityRoleID"];
        }

        if (array_key_exists("AuthRelationId",$param) and $param["AuthRelationId"] !== null) {
            $this->AuthRelationId = $param["AuthRelationId"];
        }
    }
}
