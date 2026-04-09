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
 * CreateOrganizationMember请求参数结构体
 *
 * @method string getName() 获取<p>成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
 * @method void setName(string $Name) 设置<p>成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
 * @method string getPolicyType() 获取<p>关系策略。取值：Financial</p>
 * @method void setPolicyType(string $PolicyType) 设置<p>关系策略。取值：Financial</p>
 * @method array getPermissionIds() 获取<p>成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须</p>
 * @method void setPermissionIds(array $PermissionIds) 设置<p>成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须</p>
 * @method integer getNodeId() 获取<p>成员所属部门的节点ID。可以通过<a href="https://cloud.tencent.com/document/product/850/82926">DescribeOrganizationNodes</a>获取</p>
 * @method void setNodeId(integer $NodeId) 设置<p>成员所属部门的节点ID。可以通过<a href="https://cloud.tencent.com/document/product/850/82926">DescribeOrganizationNodes</a>获取</p>
 * @method string getAccountName() 获取<p>账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
 * @method void setAccountName(string $AccountName) 设置<p>账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
 * @method string getRemark() 获取<p>备注。</p>
 * @method void setRemark(string $Remark) 设置<p>备注。</p>
 * @method integer getRecordId() 获取<p>成员创建记录ID。创建异常重试时需要</p>
 * @method void setRecordId(integer $RecordId) 设置<p>成员创建记录ID。创建异常重试时需要</p>
 * @method string getPayUin() 获取<p>代付者Uin。成员代付费时需要</p>
 * @method void setPayUin(string $PayUin) 设置<p>代付者Uin。成员代付费时需要</p>
 * @method array getIdentityRoleID() 获取<p>成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持</p>
 * @method void setIdentityRoleID(array $IdentityRoleID) 设置<p>成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持</p>
 * @method integer getAuthRelationId() 获取<p>认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取</p>
 * @method void setAuthRelationId(integer $AuthRelationId) 设置<p>认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取</p>
 * @method array getTags() 获取<p>成员标签列表。最大10个</p>
 * @method void setTags(array $Tags) 设置<p>成员标签列表。最大10个</p>
 */
class CreateOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var string <p>成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
     */
    public $Name;

    /**
     * @var string <p>关系策略。取值：Financial</p>
     */
    public $PolicyType;

    /**
     * @var array <p>成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须</p>
     */
    public $PermissionIds;

    /**
     * @var integer <p>成员所属部门的节点ID。可以通过<a href="https://cloud.tencent.com/document/product/850/82926">DescribeOrganizationNodes</a>获取</p>
     */
    public $NodeId;

    /**
     * @var string <p>账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
     */
    public $AccountName;

    /**
     * @var string <p>备注。</p>
     */
    public $Remark;

    /**
     * @var integer <p>成员创建记录ID。创建异常重试时需要</p>
     */
    public $RecordId;

    /**
     * @var string <p>代付者Uin。成员代付费时需要</p>
     */
    public $PayUin;

    /**
     * @var array <p>成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持</p>
     */
    public $IdentityRoleID;

    /**
     * @var integer <p>认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取</p>
     */
    public $AuthRelationId;

    /**
     * @var array <p>成员标签列表。最大10个</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
     * @param string $PolicyType <p>关系策略。取值：Financial</p>
     * @param array $PermissionIds <p>成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须</p>
     * @param integer $NodeId <p>成员所属部门的节点ID。可以通过<a href="https://cloud.tencent.com/document/product/850/82926">DescribeOrganizationNodes</a>获取</p>
     * @param string $AccountName <p>账号名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&amp;._[]-:,</p>
     * @param string $Remark <p>备注。</p>
     * @param integer $RecordId <p>成员创建记录ID。创建异常重试时需要</p>
     * @param string $PayUin <p>代付者Uin。成员代付费时需要</p>
     * @param array $IdentityRoleID <p>成员访问身份ID列表。可以调用ListOrganizationIdentity获取，1默认支持</p>
     * @param integer $AuthRelationId <p>认证主体关系ID。给不同主体创建成员时需要，可以调用DescribeOrganizationAuthNode获取</p>
     * @param array $Tags <p>成员标签列表。最大10个</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
