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
 * CreateOrganizationMembersPolicy请求参数结构体
 *
 * @method array getMemberUins() 获取成员Uin列表。最多10个
 * @method void setMemberUins(array $MemberUins) 设置成员Uin列表。最多10个
 * @method string getPolicyName() 获取策略名。长度1～128个字符，支持英文字母、数字、符号+=,.@_-
 * @method void setPolicyName(string $PolicyName) 设置策略名。长度1～128个字符，支持英文字母、数字、符号+=,.@_-
 * @method integer getIdentityId() 获取成员访问身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 * @method void setIdentityId(integer $IdentityId) 设置成员访问身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 * @method string getDescription() 获取策略描述。最大长度为128个字符
 * @method void setDescription(string $Description) 设置策略描述。最大长度为128个字符
 */
class CreateOrganizationMembersPolicyRequest extends AbstractModel
{
    /**
     * @var array 成员Uin列表。最多10个
     */
    public $MemberUins;

    /**
     * @var string 策略名。长度1～128个字符，支持英文字母、数字、符号+=,.@_-
     */
    public $PolicyName;

    /**
     * @var integer 成员访问身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
     */
    public $IdentityId;

    /**
     * @var string 策略描述。最大长度为128个字符
     */
    public $Description;

    /**
     * @param array $MemberUins 成员Uin列表。最多10个
     * @param string $PolicyName 策略名。长度1～128个字符，支持英文字母、数字、符号+=,.@_-
     * @param integer $IdentityId 成员访问身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
     * @param string $Description 策略描述。最大长度为128个字符
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
        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
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
