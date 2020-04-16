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

namespace TencentCloud\Cam\V20190116;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cam\V20190116\Models as Models;

/**
 * @method Models\AddUserResponse AddUser(Models\AddUserRequest $req) 添加子用户
 * @method Models\AddUserToGroupResponse AddUserToGroup(Models\AddUserToGroupRequest $req) 用户加入到用户组
 * @method Models\AttachGroupPolicyResponse AttachGroupPolicy(Models\AttachGroupPolicyRequest $req) 本接口（AttachGroupPolicy）可用于绑定策略到用户组。
 * @method Models\AttachRolePolicyResponse AttachRolePolicy(Models\AttachRolePolicyRequest $req) 本接口（AttachRolePolicy）用于绑定策略到角色。
 * @method Models\AttachUserPolicyResponse AttachUserPolicy(Models\AttachUserPolicyRequest $req) 本接口（AttachUserPolicy）可用于绑定到用户的策略。
 * @method Models\CheckResponse Check(Models\CheckRequest $req) mfa校验
 * @method Models\CheckNewMfaCodeResponse CheckNewMfaCode(Models\CheckNewMfaCodeRequest $req) 校验新手机新邮箱接口
 * @method Models\ConsumeCustomMFATokenResponse ConsumeCustomMFAToken(Models\ConsumeCustomMFATokenRequest $req) 验证自定义多因子Token
 * @method Models\CreateGroupResponse CreateGroup(Models\CreateGroupRequest $req) 创建用户组
 * @method Models\CreatePolicyResponse CreatePolicy(Models\CreatePolicyRequest $req) 本接口（CreatePolicy）可用于创建策略。
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 本接口（CreateRole）用于创建角色。
 * @method Models\CreateSAMLProviderResponse CreateSAMLProvider(Models\CreateSAMLProviderRequest $req) 创建SAML身份提供商
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) 删除用户组
 * @method Models\DeletePolicyResponse DeletePolicy(Models\DeletePolicyRequest $req) 本接口（DeletePolicy）可用于删除策略。
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) 本接口（DeleteRole）用于删除指定角色。
 * @method Models\DeleteSAMLProviderResponse DeleteSAMLProvider(Models\DeleteSAMLProviderRequest $req) 删除SAML身份提供商
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 删除子用户
 * @method Models\DescribeMfaCodeStatusResponse DescribeMfaCodeStatus(Models\DescribeMfaCodeStatusRequest $req) 查询微信code状态
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) 本接口（DescribeRoleList）用于获取账号下的角色列表。
 * @method Models\DetachGroupPolicyResponse DetachGroupPolicy(Models\DetachGroupPolicyRequest $req) 本接口（DetachGroupPolicy）可用于解除绑定到用户组的策略。
 * @method Models\DetachRolePolicyResponse DetachRolePolicy(Models\DetachRolePolicyRequest $req) 本接口（DetachRolePolicy）用于解除绑定角色的策略。
 * @method Models\DetachUserPolicyResponse DetachUserPolicy(Models\DetachUserPolicyRequest $req) 本接口（DetachUserPolicy）可用于解除绑定到用户的策略。
 * @method Models\DetectAuthResponse DetectAuth(Models\DetectAuthRequest $req) 发起人脸核身
 * @method Models\DetectMaskAuthResponse DetectMaskAuth(Models\DetectMaskAuthRequest $req) 获取并更新人脸核身校验状态实名传递参数比对
 * @method Models\DetectStateResponse DetectState(Models\DetectStateRequest $req) 获取并且更新人联合身状态
 * @method Models\GetCustomMFATokenInfoResponse GetCustomMFATokenInfo(Models\GetCustomMFATokenInfoRequest $req) 获取自定义多因子Token关联信息
 * @method Models\GetGroupResponse GetGroup(Models\GetGroupRequest $req) 查询用户组详情
 * @method Models\GetPolicyResponse GetPolicy(Models\GetPolicyRequest $req) 本接口（GetPolicy）可用于查询查看策略详情。
 * @method Models\GetRoleResponse GetRole(Models\GetRoleRequest $req) 本接口（GetRole）用于获取指定角色的详细信息。
 * @method Models\GetSAMLProviderResponse GetSAMLProvider(Models\GetSAMLProviderRequest $req) 查询SAML身份提供商详情
 * @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) 查询子用户
 * @method Models\ListAttachedGroupPoliciesResponse ListAttachedGroupPolicies(Models\ListAttachedGroupPoliciesRequest $req) 本接口（ListAttachedGroupPolicies）可用于查询用户组关联的策略列表。
 * @method Models\ListAttachedRolePoliciesResponse ListAttachedRolePolicies(Models\ListAttachedRolePoliciesRequest $req) 本接口（ListAttachedRolePolicies）用于获取角色绑定的策略列表。
 * @method Models\ListAttachedUserPoliciesResponse ListAttachedUserPolicies(Models\ListAttachedUserPoliciesRequest $req) 本接口（ListAttachedUserPolicies）可用于查询子账号关联的策略列表。
 * @method Models\ListCollaboratorsResponse ListCollaborators(Models\ListCollaboratorsRequest $req) 获取协作者列表
 * @method Models\ListEntitiesForPolicyResponse ListEntitiesForPolicy(Models\ListEntitiesForPolicyRequest $req) 本接口（ListEntitiesForPolicy）可用于查询策略关联的实体列表。
 * @method Models\ListGroupsResponse ListGroups(Models\ListGroupsRequest $req) 查询用户组列表
 * @method Models\ListGroupsForUserResponse ListGroupsForUser(Models\ListGroupsForUserRequest $req) 列出用户关联的用户组
 * @method Models\ListPoliciesResponse ListPolicies(Models\ListPoliciesRequest $req) 本接口（ListPolicies）可用于查询策略列表
 * @method Models\ListSAMLProvidersResponse ListSAMLProviders(Models\ListSAMLProvidersRequest $req) 查询SAML身份提供商列表
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) 拉取子用户
 * @method Models\ListUsersForGroupResponse ListUsersForGroup(Models\ListUsersForGroupRequest $req) 查询用户组关联的用户列表
 * @method Models\RemoveUserFromGroupResponse RemoveUserFromGroup(Models\RemoveUserFromGroupRequest $req) 从用户组删除用户
 * @method Models\SetFlagResponse SetFlag(Models\SetFlagRequest $req) 设置用户的登录保护和敏感操作校验方式
 * @method Models\UpdateAssumeRolePolicyResponse UpdateAssumeRolePolicy(Models\UpdateAssumeRolePolicyRequest $req) 本接口（UpdateAssumeRolePolicy）用于修改角色信任策略的策略文档。
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) 更新用户组
 * @method Models\UpdateRoleConsoleLoginResponse UpdateRoleConsoleLogin(Models\UpdateRoleConsoleLoginRequest $req) 本接口（UpdateRoleConsoleLogin）用于修改角色是否可登录。
 * @method Models\UpdateRoleDescriptionResponse UpdateRoleDescription(Models\UpdateRoleDescriptionRequest $req) 本接口（UpdateRoleDescription）用于修改角色的描述信息。
 * @method Models\UpdateSAMLProviderResponse UpdateSAMLProvider(Models\UpdateSAMLProviderRequest $req) 更新SAML身份提供商信息
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) 更新子用户
 */

class CamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cam.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-01-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("cam")."\\"."V20190116\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
