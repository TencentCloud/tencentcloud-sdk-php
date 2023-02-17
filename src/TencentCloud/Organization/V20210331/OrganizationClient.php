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

namespace TencentCloud\Organization\V20210331;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Organization\V20210331\Models as Models;

/**
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) 添加企业组织节点
 * @method Models\BindOrganizationMemberAuthAccountResponse BindOrganizationMemberAuthAccount(Models\BindOrganizationMemberAuthAccountRequest $req) 绑定组织成员和组织管理员子账号的授权关系
 * @method Models\CancelOrganizationMemberAuthAccountResponse CancelOrganizationMemberAuthAccount(Models\CancelOrganizationMemberAuthAccountRequest $req) 取消组织成员和组织管理员子账号的授权关系

 * @method Models\CreateOrganizationMemberResponse CreateOrganizationMember(Models\CreateOrganizationMemberRequest $req) 创建组织成员
 * @method Models\CreateOrganizationMemberPolicyResponse CreateOrganizationMemberPolicy(Models\CreateOrganizationMemberPolicyRequest $req) 创建组织成员访问授权策略
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) 批量删除企业组织成员
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) 批量删除企业组织节点
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) 获取企业组织信息
 * @method Models\DescribeOrganizationAuthNodeResponse DescribeOrganizationAuthNode(Models\DescribeOrganizationAuthNodeRequest $req) 获取已设置管理员的互信主体关系列表
 * @method Models\DescribeOrganizationMemberAuthAccountsResponse DescribeOrganizationMemberAuthAccounts(Models\DescribeOrganizationMemberAuthAccountsRequest $req) 获取组织成员被绑定授权关系的子账号列表
 * @method Models\DescribeOrganizationMemberAuthIdentitiesResponse DescribeOrganizationMemberAuthIdentities(Models\DescribeOrganizationMemberAuthIdentitiesRequest $req) 获取组织成员可被管理的身份列表
 * @method Models\DescribeOrganizationMemberPoliciesResponse DescribeOrganizationMemberPolicies(Models\DescribeOrganizationMemberPoliciesRequest $req) 获取组织成员的授权策略列表
 * @method Models\DescribeOrganizationMembersResponse DescribeOrganizationMembers(Models\DescribeOrganizationMembersRequest $req) 获取企业组织成员列表
 * @method Models\DescribeOrganizationNodesResponse DescribeOrganizationNodes(Models\DescribeOrganizationNodesRequest $req) 获取组织节点列表
 * @method Models\ListOrganizationIdentityResponse ListOrganizationIdentity(Models\ListOrganizationIdentityRequest $req) 获取组织成员访问身份列表
 * @method Models\MoveOrganizationNodeMembersResponse MoveOrganizationNodeMembers(Models\MoveOrganizationNodeMembersRequest $req) 移动成员到指定企业组织节点
 * @method Models\UpdateOrganizationNodeResponse UpdateOrganizationNode(Models\UpdateOrganizationNodeRequest $req) 更新企业组织节点
 */

class OrganizationClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "organization.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "organization";

    /**
     * @var string
     */
    protected $version = "2021-03-31";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("organization")."\\"."V20210331\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
