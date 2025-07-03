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
 * @method Models\AcceptJoinShareUnitInvitationResponse AcceptJoinShareUnitInvitation(Models\AcceptJoinShareUnitInvitationRequest $req) 接受加入共享单元邀请。
 * @method Models\AddExternalSAMLIdPCertificateResponse AddExternalSAMLIdPCertificate(Models\AddExternalSAMLIdPCertificateRequest $req) 添加SAML签名证书
 * @method Models\AddOrganizationMemberEmailResponse AddOrganizationMemberEmail(Models\AddOrganizationMemberEmailRequest $req) 添加组织成员邮箱
 * @method Models\AddOrganizationNodeResponse AddOrganizationNode(Models\AddOrganizationNodeRequest $req) 添加企业组织节点
 * @method Models\AddPermissionPolicyToRoleConfigurationResponse AddPermissionPolicyToRoleConfiguration(Models\AddPermissionPolicyToRoleConfigurationRequest $req) 为权限配置添加策略
 * @method Models\AddShareUnitResponse AddShareUnit(Models\AddShareUnitRequest $req) 创建共享单元。
 * @method Models\AddShareUnitMembersResponse AddShareUnitMembers(Models\AddShareUnitMembersRequest $req) 添加共享单元成员
 * @method Models\AddShareUnitResourcesResponse AddShareUnitResources(Models\AddShareUnitResourcesRequest $req) 添加共享单元资源
 * @method Models\AddUserToGroupResponse AddUserToGroup(Models\AddUserToGroupRequest $req) 为用户组添加用户
 * @method Models\AttachPolicyResponse AttachPolicy(Models\AttachPolicyRequest $req) 绑定策略
 * @method Models\BindOrganizationMemberAuthAccountResponse BindOrganizationMemberAuthAccount(Models\BindOrganizationMemberAuthAccountRequest $req) 绑定组织成员和组织管理员子账号的授权关系
 * @method Models\BindOrganizationPolicySubAccountResponse BindOrganizationPolicySubAccount(Models\BindOrganizationPolicySubAccountRequest $req) 绑定成员访问授权策略和组织管理员子账号
 * @method Models\CancelOrganizationMemberAuthAccountResponse CancelOrganizationMemberAuthAccount(Models\CancelOrganizationMemberAuthAccountRequest $req) 取消组织成员和组织管理员子账号的授权关系
 * @method Models\CancelOrganizationPolicySubAccountResponse CancelOrganizationPolicySubAccount(Models\CancelOrganizationPolicySubAccountRequest $req) 解绑成员访问授权策略和组织管理员子账号
 * @method Models\CheckAccountDeleteResponse CheckAccountDelete(Models\CheckAccountDeleteRequest $req) 成员账号删除检查
 * @method Models\ClearExternalSAMLIdentityProviderResponse ClearExternalSAMLIdentityProvider(Models\ClearExternalSAMLIdentityProviderRequest $req) 清空SAML身份提供商配置信息
 * @method Models\CreateGroupResponse CreateGroup(Models\CreateGroupRequest $req) 创建用户组
 * @method Models\CreateOrgServiceAssignResponse CreateOrgServiceAssign(Models\CreateOrgServiceAssignRequest $req) 添加集团服务委派管理员
 * @method Models\CreateOrganizationResponse CreateOrganization(Models\CreateOrganizationRequest $req) 创建企业组织
 * @method Models\CreateOrganizationIdentityResponse CreateOrganizationIdentity(Models\CreateOrganizationIdentityRequest $req) 添加组织身份
 * @method Models\CreateOrganizationMemberResponse CreateOrganizationMember(Models\CreateOrganizationMemberRequest $req) 创建组织成员
 * @method Models\CreateOrganizationMemberAuthIdentityResponse CreateOrganizationMemberAuthIdentity(Models\CreateOrganizationMemberAuthIdentityRequest $req) 添加组织成员访问授权
 * @method Models\CreateOrganizationMemberPolicyResponse CreateOrganizationMemberPolicy(Models\CreateOrganizationMemberPolicyRequest $req) 创建组织成员访问授权策略
 * @method Models\CreateOrganizationMembersPolicyResponse CreateOrganizationMembersPolicy(Models\CreateOrganizationMembersPolicyRequest $req) 创建组织成员访问策略
 * @method Models\CreatePolicyResponse CreatePolicy(Models\CreatePolicyRequest $req) 创建一个特殊类型的策略，您可以关联到企业组织Root节点、企业部门节点或者企业的成员账号。
 * @method Models\CreateRoleAssignmentResponse CreateRoleAssignment(Models\CreateRoleAssignmentRequest $req) 在成员账号上授权
 * @method Models\CreateRoleConfigurationResponse CreateRoleConfiguration(Models\CreateRoleConfigurationRequest $req) 创建权限配置
 * @method Models\CreateSCIMCredentialResponse CreateSCIMCredential(Models\CreateSCIMCredentialRequest $req) 创建SCIM密钥
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 创建用户
 * @method Models\CreateUserSyncProvisioningResponse CreateUserSyncProvisioning(Models\CreateUserSyncProvisioningRequest $req) 创建子用户同步任务
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) 删除成员账号
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) 删除用户组
 * @method Models\DeleteOrgServiceAssignResponse DeleteOrgServiceAssign(Models\DeleteOrgServiceAssignRequest $req) 删除集团服务委派管理员
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) 删除企业组织
 * @method Models\DeleteOrganizationIdentityResponse DeleteOrganizationIdentity(Models\DeleteOrganizationIdentityRequest $req) 删除组织身份
 * @method Models\DeleteOrganizationMemberAuthIdentityResponse DeleteOrganizationMemberAuthIdentity(Models\DeleteOrganizationMemberAuthIdentityRequest $req) 删除组织成员访问授权
 * @method Models\DeleteOrganizationMembersResponse DeleteOrganizationMembers(Models\DeleteOrganizationMembersRequest $req) 从组织中移除成员账号，不会删除账号。
 * @method Models\DeleteOrganizationMembersPolicyResponse DeleteOrganizationMembersPolicy(Models\DeleteOrganizationMembersPolicyRequest $req) 删除组织成员访问策略
 * @method Models\DeleteOrganizationNodesResponse DeleteOrganizationNodes(Models\DeleteOrganizationNodesRequest $req) 批量删除企业组织节点
 * @method Models\DeletePolicyResponse DeletePolicy(Models\DeletePolicyRequest $req) 删除策略
 * @method Models\DeleteRoleAssignmentResponse DeleteRoleAssignment(Models\DeleteRoleAssignmentRequest $req) 移除成员账号上的授权
 * @method Models\DeleteRoleConfigurationResponse DeleteRoleConfiguration(Models\DeleteRoleConfigurationRequest $req) 删除权限配置信息
 * @method Models\DeleteSCIMCredentialResponse DeleteSCIMCredential(Models\DeleteSCIMCredentialRequest $req) 删除SCIM密钥
 * @method Models\DeleteShareUnitResponse DeleteShareUnit(Models\DeleteShareUnitRequest $req) 删除共享单元。
 * @method Models\DeleteShareUnitMembersResponse DeleteShareUnitMembers(Models\DeleteShareUnitMembersRequest $req) 删除共享单元成员
 * @method Models\DeleteShareUnitResourcesResponse DeleteShareUnitResources(Models\DeleteShareUnitResourcesRequest $req) 删除共享单元资源
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 删除用户
 * @method Models\DeleteUserSyncProvisioningResponse DeleteUserSyncProvisioning(Models\DeleteUserSyncProvisioningRequest $req) 删除子用户同步任务
 * @method Models\DescribeEffectivePolicyResponse DescribeEffectivePolicy(Models\DescribeEffectivePolicyRequest $req) 查询目标关联的有效策略
 * @method Models\DescribeIdentityCenterResponse DescribeIdentityCenter(Models\DescribeIdentityCenterRequest $req) 获取集团账号身份中心服务信息
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) 获取企业组织信息
 * @method Models\DescribeOrganizationAuthNodeResponse DescribeOrganizationAuthNode(Models\DescribeOrganizationAuthNodeRequest $req) 获取已设置管理员的互信主体关系列表
 * @method Models\DescribeOrganizationFinancialByMemberResponse DescribeOrganizationFinancialByMember(Models\DescribeOrganizationFinancialByMemberRequest $req) 以成员维度获取组织财务信息
 * @method Models\DescribeOrganizationFinancialByMonthResponse DescribeOrganizationFinancialByMonth(Models\DescribeOrganizationFinancialByMonthRequest $req) 以月维度获取组织财务信息趋势
 * @method Models\DescribeOrganizationFinancialByProductResponse DescribeOrganizationFinancialByProduct(Models\DescribeOrganizationFinancialByProductRequest $req) 以产品维度获取组织财务信息
 * @method Models\DescribeOrganizationMemberAuthAccountsResponse DescribeOrganizationMemberAuthAccounts(Models\DescribeOrganizationMemberAuthAccountsRequest $req) 获取组织成员被绑定授权关系的子账号列表
 * @method Models\DescribeOrganizationMemberAuthIdentitiesResponse DescribeOrganizationMemberAuthIdentities(Models\DescribeOrganizationMemberAuthIdentitiesRequest $req) 获取组织成员访问授权列表
 * @method Models\DescribeOrganizationMemberEmailBindResponse DescribeOrganizationMemberEmailBind(Models\DescribeOrganizationMemberEmailBindRequest $req) 查询成员邮箱绑定详细信息
 * @method Models\DescribeOrganizationMemberPoliciesResponse DescribeOrganizationMemberPolicies(Models\DescribeOrganizationMemberPoliciesRequest $req) 获取组织成员的授权策略列表
 * @method Models\DescribeOrganizationMembersResponse DescribeOrganizationMembers(Models\DescribeOrganizationMembersRequest $req) 获取企业组织成员列表
 * @method Models\DescribeOrganizationNodesResponse DescribeOrganizationNodes(Models\DescribeOrganizationNodesRequest $req) 获取组织节点列表
 * @method Models\DescribePolicyResponse DescribePolicy(Models\DescribePolicyRequest $req) 本接口（DescribePolicy）可用于查询查看策略详情。
 * @method Models\DescribePolicyConfigResponse DescribePolicyConfig(Models\DescribePolicyConfigRequest $req) 本接口（DescribePolicyConfig）可用于查询企业组织策略配置
 * @method Models\DescribeShareAreasResponse DescribeShareAreas(Models\DescribeShareAreasRequest $req) 获取可共享地域列表
 * @method Models\DescribeShareUnitMembersResponse DescribeShareUnitMembers(Models\DescribeShareUnitMembersRequest $req) 获取共享单元成员列表。
 * @method Models\DescribeShareUnitResourcesResponse DescribeShareUnitResources(Models\DescribeShareUnitResourcesRequest $req) 获取共享单元资源列表。
 * @method Models\DescribeShareUnitsResponse DescribeShareUnits(Models\DescribeShareUnitsRequest $req) 获取共享单元列表。
 * @method Models\DetachPolicyResponse DetachPolicy(Models\DetachPolicyRequest $req) 解绑策略
 * @method Models\DisablePolicyTypeResponse DisablePolicyType(Models\DisablePolicyTypeRequest $req) 禁用策略类型
 * @method Models\DismantleRoleConfigurationResponse DismantleRoleConfiguration(Models\DismantleRoleConfigurationRequest $req) 解除权限配置在成员账号上的部署
 * @method Models\EnablePolicyTypeResponse EnablePolicyType(Models\EnablePolicyTypeRequest $req) 启用策略类型
 * @method Models\GetExternalSAMLIdentityProviderResponse GetExternalSAMLIdentityProvider(Models\GetExternalSAMLIdentityProviderRequest $req) 查询SAML身份提供商配置信息
 * @method Models\GetGroupResponse GetGroup(Models\GetGroupRequest $req) 查询用户组信息
 * @method Models\GetProvisioningTaskStatusResponse GetProvisioningTaskStatus(Models\GetProvisioningTaskStatusRequest $req) 查询用户同步异步任务的状态
 * @method Models\GetRoleConfigurationResponse GetRoleConfiguration(Models\GetRoleConfigurationRequest $req) 查询权限配置信息
 * @method Models\GetSCIMSynchronizationStatusResponse GetSCIMSynchronizationStatus(Models\GetSCIMSynchronizationStatusRequest $req) 获取SCIM同步状态
 * @method Models\GetTaskStatusResponse GetTaskStatus(Models\GetTaskStatusRequest $req) 查询异步任务的状态
 * @method Models\GetUserResponse GetUser(Models\GetUserRequest $req) 查询用户信息
 * @method Models\GetUserSyncProvisioningResponse GetUserSyncProvisioning(Models\GetUserSyncProvisioningRequest $req) 查询CAM用户同步
 * @method Models\GetZoneSAMLServiceProviderInfoResponse GetZoneSAMLServiceProviderInfo(Models\GetZoneSAMLServiceProviderInfoRequest $req) 查询SAML服务提供商配置信息
 * @method Models\GetZoneStatisticsResponse GetZoneStatistics(Models\GetZoneStatisticsRequest $req) 查询空间的统计信息
 * @method Models\InviteOrganizationMemberResponse InviteOrganizationMember(Models\InviteOrganizationMemberRequest $req) 邀请组织成员
 * @method Models\ListExternalSAMLIdPCertificatesResponse ListExternalSAMLIdPCertificates(Models\ListExternalSAMLIdPCertificatesRequest $req) 查询SAML签名证书列表
 * @method Models\ListGroupMembersResponse ListGroupMembers(Models\ListGroupMembersRequest $req) 查询用户组中的用户列表
 * @method Models\ListGroupsResponse ListGroups(Models\ListGroupsRequest $req) 查询用户组列表
 * @method Models\ListJoinedGroupsForUserResponse ListJoinedGroupsForUser(Models\ListJoinedGroupsForUserRequest $req) 查询用户加入的用户组
 * @method Models\ListNonCompliantResourceResponse ListNonCompliantResource(Models\ListNonCompliantResourceRequest $req) 获取成员标签检测不合规资源列表
 * @method Models\ListOrgServiceAssignMemberResponse ListOrgServiceAssignMember(Models\ListOrgServiceAssignMemberRequest $req) 获取集团服务委派管理员列表
 * @method Models\ListOrganizationIdentityResponse ListOrganizationIdentity(Models\ListOrganizationIdentityRequest $req) 获取组织成员访问身份列表
 * @method Models\ListOrganizationServiceResponse ListOrganizationService(Models\ListOrganizationServiceRequest $req) 获取集团服务设置列表
 * @method Models\ListPermissionPoliciesInRoleConfigurationResponse ListPermissionPoliciesInRoleConfiguration(Models\ListPermissionPoliciesInRoleConfigurationRequest $req) 获取权限配置中的策略列表
 * @method Models\ListPoliciesResponse ListPolicies(Models\ListPoliciesRequest $req) 本接口（ListPolicies）可用于查询查看策略列表数据
 * @method Models\ListPoliciesForTargetResponse ListPoliciesForTarget(Models\ListPoliciesForTargetRequest $req) 本接口（ListPoliciesForTarget）查询目标关联的策略列表
 * @method Models\ListRoleAssignmentsResponse ListRoleAssignments(Models\ListRoleAssignmentsRequest $req) 查询授权列表
 * @method Models\ListRoleConfigurationProvisioningsResponse ListRoleConfigurationProvisionings(Models\ListRoleConfigurationProvisioningsRequest $req) 查询权限配置部署列表
 * @method Models\ListRoleConfigurationsResponse ListRoleConfigurations(Models\ListRoleConfigurationsRequest $req) 查询权限配置列表
 * @method Models\ListSCIMCredentialsResponse ListSCIMCredentials(Models\ListSCIMCredentialsRequest $req) 查询用户SCIM密钥列表
 * @method Models\ListTargetsForPolicyResponse ListTargetsForPolicy(Models\ListTargetsForPolicyRequest $req) 本接口（ListTargetsForPolicy）查询某个指定策略关联的目标列表
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) 查询异步任务列表
 * @method Models\ListUserSyncProvisioningsResponse ListUserSyncProvisionings(Models\ListUserSyncProvisioningsRequest $req) 查询CAM用户同步列表
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) 查询用户列表
 * @method Models\MoveOrganizationNodeMembersResponse MoveOrganizationNodeMembers(Models\MoveOrganizationNodeMembersRequest $req) 移动成员到指定企业组织节点
 * @method Models\OpenIdentityCenterResponse OpenIdentityCenter(Models\OpenIdentityCenterRequest $req) 开通身份中心服务（CIC）
 * @method Models\ProvisionRoleConfigurationResponse ProvisionRoleConfiguration(Models\ProvisionRoleConfigurationRequest $req) 将权限配置部署到成员账号上
 * @method Models\QuitOrganizationResponse QuitOrganization(Models\QuitOrganizationRequest $req) 退出企业组织
 * @method Models\RejectJoinShareUnitInvitationResponse RejectJoinShareUnitInvitation(Models\RejectJoinShareUnitInvitationRequest $req) 拒绝加入共享单元邀请。
 * @method Models\RemoveExternalSAMLIdPCertificateResponse RemoveExternalSAMLIdPCertificate(Models\RemoveExternalSAMLIdPCertificateRequest $req) 移除SAML签名证书
 * @method Models\RemovePermissionPolicyFromRoleConfigurationResponse RemovePermissionPolicyFromRoleConfiguration(Models\RemovePermissionPolicyFromRoleConfigurationRequest $req) 为权限配置移除策略
 * @method Models\RemoveUserFromGroupResponse RemoveUserFromGroup(Models\RemoveUserFromGroupRequest $req) 从用户组中移除用户
 * @method Models\SendOrgMemberAccountBindEmailResponse SendOrgMemberAccountBindEmail(Models\SendOrgMemberAccountBindEmailRequest $req) 重新发送成员绑定邮箱激活邮件
 * @method Models\SetExternalSAMLIdentityProviderResponse SetExternalSAMLIdentityProvider(Models\SetExternalSAMLIdentityProviderRequest $req) 配置SAML身份提供商信息
 * @method Models\UpdateCustomPolicyForRoleConfigurationResponse UpdateCustomPolicyForRoleConfiguration(Models\UpdateCustomPolicyForRoleConfigurationRequest $req) 为权限配置修改自定义策略
 * @method Models\UpdateGroupResponse UpdateGroup(Models\UpdateGroupRequest $req) 修改用户组信息
 * @method Models\UpdateOrganizationIdentityResponse UpdateOrganizationIdentity(Models\UpdateOrganizationIdentityRequest $req) 更新组织身份
 * @method Models\UpdateOrganizationMemberResponse UpdateOrganizationMember(Models\UpdateOrganizationMemberRequest $req) 更新组织成员信息
 * @method Models\UpdateOrganizationMemberEmailBindResponse UpdateOrganizationMemberEmailBind(Models\UpdateOrganizationMemberEmailBindRequest $req) 修改绑定成员邮箱
 * @method Models\UpdateOrganizationMembersPolicyResponse UpdateOrganizationMembersPolicy(Models\UpdateOrganizationMembersPolicyRequest $req) 修改组织成员访问策略
 * @method Models\UpdateOrganizationNodeResponse UpdateOrganizationNode(Models\UpdateOrganizationNodeRequest $req) 更新企业组织节点
 * @method Models\UpdatePolicyResponse UpdatePolicy(Models\UpdatePolicyRequest $req) 编辑策略
 * @method Models\UpdateRoleConfigurationResponse UpdateRoleConfiguration(Models\UpdateRoleConfigurationRequest $req) 修改权限配置信息
 * @method Models\UpdateSCIMCredentialStatusResponse UpdateSCIMCredentialStatus(Models\UpdateSCIMCredentialStatusRequest $req) 启用/禁用SCIM密钥
 * @method Models\UpdateSCIMSynchronizationStatusResponse UpdateSCIMSynchronizationStatus(Models\UpdateSCIMSynchronizationStatusRequest $req) 启用/禁用用户SCIM同步
 * @method Models\UpdateShareUnitResponse UpdateShareUnit(Models\UpdateShareUnitRequest $req) 更新共享单元。
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) 修改用户信息
 * @method Models\UpdateUserStatusResponse UpdateUserStatus(Models\UpdateUserStatusRequest $req) 修改用户状态
 * @method Models\UpdateUserSyncProvisioningResponse UpdateUserSyncProvisioning(Models\UpdateUserSyncProvisioningRequest $req) 创建子用户同步任务
 * @method Models\UpdateZoneResponse UpdateZone(Models\UpdateZoneRequest $req) 更新用户空间名
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
