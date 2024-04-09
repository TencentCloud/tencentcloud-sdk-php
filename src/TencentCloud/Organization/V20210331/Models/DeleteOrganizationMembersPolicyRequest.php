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
 * DeleteOrganizationMembersPolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取访问策略ID。可以通过[DescribeOrganizationMemberPolicies](https://cloud.tencent.com/document/product/850/82935)获取
 * @method void setPolicyId(integer $PolicyId) 设置访问策略ID。可以通过[DescribeOrganizationMemberPolicies](https://cloud.tencent.com/document/product/850/82935)获取
 */
class DeleteOrganizationMembersPolicyRequest extends AbstractModel
{
    /**
     * @var integer 访问策略ID。可以通过[DescribeOrganizationMemberPolicies](https://cloud.tencent.com/document/product/850/82935)获取
     */
    public $PolicyId;

    /**
     * @param integer $PolicyId 访问策略ID。可以通过[DescribeOrganizationMemberPolicies](https://cloud.tencent.com/document/product/850/82935)获取
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
