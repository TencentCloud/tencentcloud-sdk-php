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
 * DescribeOrganizationMembersAuthPolicy请求参数结构体
 *
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍。默认值 : 0。
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍。默认值 : 0。
 * @method integer getLimit() 获取限制数目。取值范围：1~50。默认值：10。
 * @method void setLimit(integer $Limit) 设置限制数目。取值范围：1~50。默认值：10。
 * @method integer getMemberUin() 获取成员uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员uin。
 * @method integer getOrgSubAccountUin() 获取集团管理员子账号uin。
 * @method void setOrgSubAccountUin(integer $OrgSubAccountUin) 设置集团管理员子账号uin。
 * @method integer getPolicyId() 获取成员访问策略Id。
 * @method void setPolicyId(integer $PolicyId) 设置成员访问策略Id。
 */
class DescribeOrganizationMembersAuthPolicyRequest extends AbstractModel
{
    /**
     * @var integer 偏移量。取值是limit的整数倍。默认值 : 0。
     */
    public $Offset;

    /**
     * @var integer 限制数目。取值范围：1~50。默认值：10。
     */
    public $Limit;

    /**
     * @var integer 成员uin。
     */
    public $MemberUin;

    /**
     * @var integer 集团管理员子账号uin。
     */
    public $OrgSubAccountUin;

    /**
     * @var integer 成员访问策略Id。
     */
    public $PolicyId;

    /**
     * @param integer $Offset 偏移量。取值是limit的整数倍。默认值 : 0。
     * @param integer $Limit 限制数目。取值范围：1~50。默认值：10。
     * @param integer $MemberUin 成员uin。
     * @param integer $OrgSubAccountUin 集团管理员子账号uin。
     * @param integer $PolicyId 成员访问策略Id。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("OrgSubAccountUin",$param) and $param["OrgSubAccountUin"] !== null) {
            $this->OrgSubAccountUin = $param["OrgSubAccountUin"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
