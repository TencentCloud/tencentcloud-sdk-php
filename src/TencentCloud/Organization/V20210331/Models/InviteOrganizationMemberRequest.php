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
 * InviteOrganizationMember请求参数结构体
 *
 * @method integer getMemberUin() 获取被邀请账号Uin。
 * @method void setMemberUin(integer $MemberUin) 设置被邀请账号Uin。
 * @method string getName() 获取成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method void setName(string $Name) 设置成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method string getPolicyType() 获取关系策略。取值：Financial
 * @method void setPolicyType(string $PolicyType) 设置关系策略。取值：Financial
 * @method array getPermissionIds() 获取成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须
 * @method void setPermissionIds(array $PermissionIds) 设置成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须
 * @method integer getNodeId() 获取成员所属部门的节点ID。可以通过[DescribeOrganizationNodes](https://cloud.tencent.com/document/product/850/82926)获取
 * @method void setNodeId(integer $NodeId) 设置成员所属部门的节点ID。可以通过[DescribeOrganizationNodes](https://cloud.tencent.com/document/product/850/82926)获取
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method string getIsAllowQuit() 获取是否允许成员退出。允许：Allow，不允许：Denied。
 * @method void setIsAllowQuit(string $IsAllowQuit) 设置是否允许成员退出。允许：Allow，不允许：Denied。
 * @method string getPayUin() 获取代付者Uin。成员代付费时需要
 * @method void setPayUin(string $PayUin) 设置代付者Uin。成员代付费时需要
 * @method string getRelationAuthName() 获取互信实名主体名称。
 * @method void setRelationAuthName(string $RelationAuthName) 设置互信实名主体名称。
 * @method array getAuthFile() 获取互信主体证明文件列表。
 * @method void setAuthFile(array $AuthFile) 设置互信主体证明文件列表。
 * @method array getTags() 获取成员标签列表。最大10个
 * @method void setTags(array $Tags) 设置成员标签列表。最大10个
 */
class InviteOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var integer 被邀请账号Uin。
     */
    public $MemberUin;

    /**
     * @var string 成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     */
    public $Name;

    /**
     * @var string 关系策略。取值：Financial
     */
    public $PolicyType;

    /**
     * @var array 成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须
     */
    public $PermissionIds;

    /**
     * @var integer 成员所属部门的节点ID。可以通过[DescribeOrganizationNodes](https://cloud.tencent.com/document/product/850/82926)获取
     */
    public $NodeId;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var string 是否允许成员退出。允许：Allow，不允许：Denied。
     */
    public $IsAllowQuit;

    /**
     * @var string 代付者Uin。成员代付费时需要
     */
    public $PayUin;

    /**
     * @var string 互信实名主体名称。
     */
    public $RelationAuthName;

    /**
     * @var array 互信主体证明文件列表。
     */
    public $AuthFile;

    /**
     * @var array 成员标签列表。最大10个
     */
    public $Tags;

    /**
     * @param integer $MemberUin 被邀请账号Uin。
     * @param string $Name 成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     * @param string $PolicyType 关系策略。取值：Financial
     * @param array $PermissionIds 成员财务权限ID列表。取值：1-查看账单、2-查看余额、3-资金划拨（若需要开启资金划拨权限，请联系您的商务经理内部开通。）、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析、9-预算管理、10-信用额度设置（若需要开启信用额度设置权限，请联系您的商务经理内部开通。），1、2 默认必须
     * @param integer $NodeId 成员所属部门的节点ID。可以通过[DescribeOrganizationNodes](https://cloud.tencent.com/document/product/850/82926)获取
     * @param string $Remark 备注。
     * @param string $IsAllowQuit 是否允许成员退出。允许：Allow，不允许：Denied。
     * @param string $PayUin 代付者Uin。成员代付费时需要
     * @param string $RelationAuthName 互信实名主体名称。
     * @param array $AuthFile 互信主体证明文件列表。
     * @param array $Tags 成员标签列表。最大10个
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

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("RelationAuthName",$param) and $param["RelationAuthName"] !== null) {
            $this->RelationAuthName = $param["RelationAuthName"];
        }

        if (array_key_exists("AuthFile",$param) and $param["AuthFile"] !== null) {
            $this->AuthFile = [];
            foreach ($param["AuthFile"] as $key => $value){
                $obj = new AuthRelationFile();
                $obj->deserialize($value);
                array_push($this->AuthFile, $obj);
            }
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
