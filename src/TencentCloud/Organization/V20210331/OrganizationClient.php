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
 * @method Models\AddOrganizationMemberEmailResponse AddOrganizationMemberEmail(Models\AddOrganizationMemberEmailRequest $req) 添加组织成员邮箱
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) 添加企业组织节点
 * @method Models\BindOrganizationMemberAuthAccountResponse BindOrganizationMemberAuthAccount(Models\BindOrganizationMemberAuthAccountRequest $req) 绑定组织成员和组织管理员子账号的授权关系
 * @method Models\CancelOrganizationMemberAuthAccountResponse CancelOrganizationMemberAuthAccount(Models\CancelOrganizationMemberAuthAccountRequest $req) 取消组织成员和组织管理员子账号的授权关系

 * @method Models\CreateOrganizationResponse CreateOrganization(Models\CreateOrganizationRequest $req) 创建企业组织
 * @method Models\CreateOrganizationMemberResponse CreateOrganizationMember(Models\CreateOrganizationMemberRequest $req) 创建组织成员
 * @method Models\CreateOrganizationMemberAuthIdentityResponse CreateOrganizationMemberAuthIdentity(Models\CreateOrganizationMemberAuthIdentityRequest $req) 添加组织成员访问授权
 * @method Models\CreateOrganizationMemberPolicyResponse CreateOrganizationMemberPolicy(Models\CreateOrganizationMemberPolicyRequest $req) 创建组织成员访问授权策略
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) 删除企业组织
 * @method Models\DeleteOrganizationMemberAuthIdentityResponse DeleteOrganizationMemberAuthIdentity(Models\DeleteOrganizationMemberAuthIdentityRequest $req) 删除组织成员访问授权
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) 批量删除企业组织成员
 * @method Models\DeleteOrganizationMembersPolicyResponse DeleteOrganizationMembersPolicy(Models\DeleteOrganizationMembersPolicyRequest $req) 删除组织成员访问策略
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) 批量删除企业组织节点
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) 获取企业组织信息
 * @method Models\DescribeOrganizationAuthNodeResponse DescribeOrganizationAuthNode(Models\DescribeOrganizationAuthNodeRequest $req) 获取已设置管理员的互信主体关系列表
 * @method Models\DescribeOrganizationFinancialByMemberResponse DescribeOrganizationFinancialByMember(Models\DescribeOrganizationFinancialByMemberRequest $req) 以成员维度获取组织财务信息
 * @method Models\DescribeOrganizationFinancialByMonthResponse DescribeOrganizationFinancialByMonth(Models\DescribeOrganizationFinancialByMonthRequest $req) 以月维度获取组织财务信息趋势
 * @method Models\DescribeOrganizationFinancialByProductResponse DescribeOrganizationFinancialByProduct(Models\DescribeOrganizationFinancialByProductRequest $req) 以产品维度获取组织财务信息
 * @method Models\DescribeOrganizationMemberAuthAccountsResponse DescribeOrganizationMemberAuthAccounts(Models\DescribeOrganizationMemberAuthAccountsRequest $req) 获取组织成员被绑定授权关系的子账号列表
 * @method Models\DescribeOrganizationMemberAuthIdentitiesResponse DescribeOrganizationMemberAuthIdentities(Models\DescribeOrganizationMemberAuthIdentitiesRequest $req) 获取组织成员可被管理的身份列表
 * @method Models\DescribeOrganizationMemberEmailBindResponse DescribeOrganizationMemberEmailBind(Models\DescribeOrganizationMemberEmailBindRequest $req) 查询成员邮箱绑定详细信息
 * @method Models\DescribeOrganizationMemberPoliciesResponse DescribeOrganizationMemberPolicies(Models\DescribeOrganizationMemberPoliciesRequest $req) 获取组织成员的授权策略列表
 * @method Models\DescribeOrganizationMembersResponse DescribeOrganizationMembers(Models\DescribeOrganizationMembersRequest $req) 获取企业组织成员列表
 * @method Models\DescribeOrganizationNodesResponse DescribeOrganizationNodes(Models\DescribeOrganizationNodesRequest $req) 获取组织节点列表
 * @method Models\ListOrganizationIdentityResponse ListOrganizationIdentity(Models\ListOrganizationIdentityRequest $req) 获取组织成员访问身份列表
 * @method Models\MoveOrganizationNodeMembersResponse MoveOrganizationNodeMembers(Models\MoveOrganizationNodeMembersRequest $req) 移动成员到指定企业组织节点
 * @method Models\QuitOrganizationResponse QuitOrganization(Models\QuitOrganizationRequest $req) 退出企业组织
 * @method Models\UpdateOrganizationMemberResponse UpdateOrganizationMember(Models\UpdateOrganizationMemberRequest $req) 更新组织成员信息
 * @method Models\UpdateOrganizationMemberEmailBindResponse UpdateOrganizationMemberEmailBind(Models\UpdateOrganizationMemberEmailBindRequest $req) 修改绑定成员邮箱
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
