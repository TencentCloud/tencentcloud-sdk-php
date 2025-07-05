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
 * UpdateOrganizationMember请求参数结构体
 *
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method string getName() 获取成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method void setName(string $Name) 设置成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
 * @method string getRemark() 获取备注。最大长度为40个字符
 * @method void setRemark(string $Remark) 设置备注。最大长度为40个字符
 * @method string getPolicyType() 获取关系策略类型。PolicyType不为空，PermissionIds不能为空。取值：Financial
 * @method void setPolicyType(string $PolicyType) 设置关系策略类型。PolicyType不为空，PermissionIds不能为空。取值：Financial
 * @method array getPermissionIds() 获取成员财务权限ID列表。PermissionIds不为空，PolicyType不能为空。
取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析，如果有值，1、2 默认必须
 * @method void setPermissionIds(array $PermissionIds) 设置成员财务权限ID列表。PermissionIds不为空，PolicyType不能为空。
取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析，如果有值，1、2 默认必须
 * @method string getIsAllowQuit() 获取是否允许成员退出组织。取值：Allow-允许、Denied-不允许
 * @method void setIsAllowQuit(string $IsAllowQuit) 设置是否允许成员退出组织。取值：Allow-允许、Denied-不允许
 * @method string getPayUin() 获取代付者Uin。成员财务权限有代付费时需要，取值为成员对应主体的主体管理员Uin
 * @method void setPayUin(string $PayUin) 设置代付者Uin。成员财务权限有代付费时需要，取值为成员对应主体的主体管理员Uin
 * @method integer getIsModifyNickName() 获取是否同步组织成员名称到成员账号昵称。取值： 1-同步 0-不同步
 * @method void setIsModifyNickName(integer $IsModifyNickName) 设置是否同步组织成员名称到成员账号昵称。取值： 1-同步 0-不同步
 */
class UpdateOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var string 成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     */
    public $Name;

    /**
     * @var string 备注。最大长度为40个字符
     */
    public $Remark;

    /**
     * @var string 关系策略类型。PolicyType不为空，PermissionIds不能为空。取值：Financial
     */
    public $PolicyType;

    /**
     * @var array 成员财务权限ID列表。PermissionIds不为空，PolicyType不能为空。
取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析，如果有值，1、2 默认必须
     */
    public $PermissionIds;

    /**
     * @var string 是否允许成员退出组织。取值：Allow-允许、Denied-不允许
     */
    public $IsAllowQuit;

    /**
     * @var string 代付者Uin。成员财务权限有代付费时需要，取值为成员对应主体的主体管理员Uin
     */
    public $PayUin;

    /**
     * @var integer 是否同步组织成员名称到成员账号昵称。取值： 1-同步 0-不同步
     */
    public $IsModifyNickName;

    /**
     * @param integer $MemberUin 成员Uin。
     * @param string $Name 成员名称。最大长度为25个字符，支持英文字母、数字、汉字、符号+@、&._[]-:,
     * @param string $Remark 备注。最大长度为40个字符
     * @param string $PolicyType 关系策略类型。PolicyType不为空，PermissionIds不能为空。取值：Financial
     * @param array $PermissionIds 成员财务权限ID列表。PermissionIds不为空，PolicyType不能为空。
取值：1-查看账单、2-查看余额、3-资金划拨、4-合并出账、5-开票、6-优惠继承、7-代付费、8-成本分析，如果有值，1、2 默认必须
     * @param string $IsAllowQuit 是否允许成员退出组织。取值：Allow-允许、Denied-不允许
     * @param string $PayUin 代付者Uin。成员财务权限有代付费时需要，取值为成员对应主体的主体管理员Uin
     * @param integer $IsModifyNickName 是否同步组织成员名称到成员账号昵称。取值： 1-同步 0-不同步
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("IsModifyNickName",$param) and $param["IsModifyNickName"] !== null) {
            $this->IsModifyNickName = $param["IsModifyNickName"];
        }
    }
}
