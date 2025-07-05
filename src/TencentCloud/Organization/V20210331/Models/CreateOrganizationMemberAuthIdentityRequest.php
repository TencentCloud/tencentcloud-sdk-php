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
 * CreateOrganizationMemberAuthIdentity请求参数结构体
 *
 * @method array getMemberUins() 获取成员Uin列表。最多10个
 * @method void setMemberUins(array $MemberUins) 设置成员Uin列表。最多10个
 * @method array getIdentityIds() 获取身份Id列表。最多5个，可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 * @method void setIdentityIds(array $IdentityIds) 设置身份Id列表。最多5个，可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 */
class CreateOrganizationMemberAuthIdentityRequest extends AbstractModel
{
    /**
     * @var array 成员Uin列表。最多10个
     */
    public $MemberUins;

    /**
     * @var array 身份Id列表。最多5个，可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
     */
    public $IdentityIds;

    /**
     * @param array $MemberUins 成员Uin列表。最多10个
     * @param array $IdentityIds 身份Id列表。最多5个，可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
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

        if (array_key_exists("IdentityIds",$param) and $param["IdentityIds"] !== null) {
            $this->IdentityIds = $param["IdentityIds"];
        }
    }
}
