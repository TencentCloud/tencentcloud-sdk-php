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
 * DescribeOrganizationMemberAuthIdentities请求参数结构体
 *
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍，默认值 : 0
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍，默认值 : 0
 * @method integer getLimit() 获取限制数目。取值范围：1~50，默认值：10
 * @method void setLimit(integer $Limit) 设置限制数目。取值范围：1~50，默认值：10
 * @method integer getMemberUin() 获取组织成员Uin。入参MemberUin与IdentityId至少填写一个
 * @method void setMemberUin(integer $MemberUin) 设置组织成员Uin。入参MemberUin与IdentityId至少填写一个
 * @method integer getIdentityId() 获取身份ID。入参MemberUin与IdentityId至少填写一个, 可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 * @method void setIdentityId(integer $IdentityId) 设置身份ID。入参MemberUin与IdentityId至少填写一个, 可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 */
class DescribeOrganizationMemberAuthIdentitiesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量。取值是limit的整数倍，默认值 : 0
     */
    public $Offset;

    /**
     * @var integer 限制数目。取值范围：1~50，默认值：10
     */
    public $Limit;

    /**
     * @var integer 组织成员Uin。入参MemberUin与IdentityId至少填写一个
     */
    public $MemberUin;

    /**
     * @var integer 身份ID。入参MemberUin与IdentityId至少填写一个, 可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
     */
    public $IdentityId;

    /**
     * @param integer $Offset 偏移量。取值是limit的整数倍，默认值 : 0
     * @param integer $Limit 限制数目。取值范围：1~50，默认值：10
     * @param integer $MemberUin 组织成员Uin。入参MemberUin与IdentityId至少填写一个
     * @param integer $IdentityId 身份ID。入参MemberUin与IdentityId至少填写一个, 可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
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

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }
    }
}
