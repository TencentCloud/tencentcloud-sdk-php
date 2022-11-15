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
 * CreateOrganizationMemberPolicy请求参数结构体
 *
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method string getPolicyName() 获取策略名。最大长度为128个字符，支持英文字母、数字、符号+=,.@_-
 * @method void setPolicyName(string $PolicyName) 设置策略名。最大长度为128个字符，支持英文字母、数字、符号+=,.@_-
 * @method integer getIdentityId() 获取成员访问身份ID。可以调用DescribeOrganizationMemberAuthIdentities获取
 * @method void setIdentityId(integer $IdentityId) 设置成员访问身份ID。可以调用DescribeOrganizationMemberAuthIdentities获取
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 */
class CreateOrganizationMemberPolicyRequest extends AbstractModel
{
    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var string 策略名。最大长度为128个字符，支持英文字母、数字、符号+=,.@_-
     */
    public $PolicyName;

    /**
     * @var integer 成员访问身份ID。可以调用DescribeOrganizationMemberAuthIdentities获取
     */
    public $IdentityId;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @param integer $MemberUin 成员Uin。
     * @param string $PolicyName 策略名。最大长度为128个字符，支持英文字母、数字、符号+=,.@_-
     * @param integer $IdentityId 成员访问身份ID。可以调用DescribeOrganizationMemberAuthIdentities获取
     * @param string $Description 描述。
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
