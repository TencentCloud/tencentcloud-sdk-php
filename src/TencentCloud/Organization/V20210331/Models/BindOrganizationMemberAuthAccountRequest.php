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
 * BindOrganizationMemberAuthAccount请求参数结构体
 *
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method integer getPolicyId() 获取策略ID。可以调用DescribeOrganizationMemberPolicies获取
 * @method void setPolicyId(integer $PolicyId) 设置策略ID。可以调用DescribeOrganizationMemberPolicies获取
 * @method array getOrgSubAccountUins() 获取组织管理员子账号Uin列表。最大5个
 * @method void setOrgSubAccountUins(array $OrgSubAccountUins) 设置组织管理员子账号Uin列表。最大5个
 */
class BindOrganizationMemberAuthAccountRequest extends AbstractModel
{
    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var integer 策略ID。可以调用DescribeOrganizationMemberPolicies获取
     */
    public $PolicyId;

    /**
     * @var array 组织管理员子账号Uin列表。最大5个
     */
    public $OrgSubAccountUins;

    /**
     * @param integer $MemberUin 成员Uin。
     * @param integer $PolicyId 策略ID。可以调用DescribeOrganizationMemberPolicies获取
     * @param array $OrgSubAccountUins 组织管理员子账号Uin列表。最大5个
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("OrgSubAccountUins",$param) and $param["OrgSubAccountUins"] !== null) {
            $this->OrgSubAccountUins = $param["OrgSubAccountUins"];
        }
    }
}
