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

namespace TencentCloud\Eiam\V20210420;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Eiam\V20210420\Models as Models;

/**
 * @method Models\AddAccountToAccountGroupResponse AddAccountToAccountGroup(Models\AddAccountToAccountGroupRequest $req) 账号组添加账号
 * @method Models\AddUserToUserGroupResponse AddUserToUserGroup(Models\AddUserToUserGroupRequest $req) 加入用户到用户组
 * @method Models\CreateAccountGroupResponse CreateAccountGroup(Models\CreateAccountGroupRequest $req) 创建账号组
 * @method Models\CreateAppAccountResponse CreateAppAccount(Models\CreateAppAccountRequest $req) 创建应用账号
 * @method Models\CreateOrgNodeResponse CreateOrgNode(Models\CreateOrgNodeRequest $req) 新建一个机构节点
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 新建一个用户
 * @method Models\CreateUserGroupResponse CreateUserGroup(Models\CreateUserGroupRequest $req) 新建用户组
 * @method Models\DeleteAccountGroupResponse DeleteAccountGroup(Models\DeleteAccountGroupRequest $req) 删除账号组
 * @method Models\DeleteAppAccountResponse DeleteAppAccount(Models\DeleteAppAccountRequest $req) 删除应用账号
 * @method Models\DeleteOrgNodeResponse DeleteOrgNode(Models\DeleteOrgNodeRequest $req) 删除一个机构节点
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 通过用户名或用户 id 删除用户。
 * @method Models\DeleteUserGroupResponse DeleteUserGroup(Models\DeleteUserGroupRequest $req) 删除一个用户组
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) 批量删除当前节点下的用户。如果出现个别用户删除错误，将不影响其余被勾选用户被删除的操作，同时提示未被删除的用户名称/用户ID。
 * @method Models\DescribeAccountGroupResponse DescribeAccountGroup(Models\DescribeAccountGroupRequest $req) 查询账号组列表
 * @method Models\DescribeAppAccountResponse DescribeAppAccount(Models\DescribeAppAccountRequest $req) 查询应用账号列表
 * @method Models\DescribeApplicationResponse DescribeApplication(Models\DescribeApplicationRequest $req) 获取一个应用的信息。
 * @method Models\DescribeOrgNodeResponse DescribeOrgNode(Models\DescribeOrgNodeRequest $req) 根据机构节点ID读取机构节点信息
 * @method Models\DescribeOrgResourcesAuthorizationResponse DescribeOrgResourcesAuthorization(Models\DescribeOrgResourcesAuthorizationRequest $req) 查询指定机构下的资源授权列表
 * @method Models\DescribePublicKeyResponse DescribePublicKey(Models\DescribePublicKeyRequest $req) 获取JWT公钥信息。
 * @method Models\DescribeUserGroupResponse DescribeUserGroup(Models\DescribeUserGroupRequest $req) 获取用户组信息
 * @method Models\DescribeUserGroupResourcesAuthorizationResponse DescribeUserGroupResourcesAuthorization(Models\DescribeUserGroupResourcesAuthorizationRequest $req) 查询指定用户组下的资源授权列表
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) 通过用户名或用户 id 搜索用户
 * @method Models\DescribeUserResourcesAuthorizationResponse DescribeUserResourcesAuthorization(Models\DescribeUserResourcesAuthorizationRequest $req) 查询指定用户下的资源授权列表
 * @method Models\DescribeUserThirdPartyAccountInfoResponse DescribeUserThirdPartyAccountInfo(Models\DescribeUserThirdPartyAccountInfoRequest $req) 通过用户名或用户 id 获取用户的第三方账号绑定信息。
 * @method Models\ListAccountInAccountGroupResponse ListAccountInAccountGroup(Models\ListAccountInAccountGroupRequest $req)  获取账号组中的账号列表
 * @method Models\ListApplicationAuthorizationsResponse ListApplicationAuthorizations(Models\ListApplicationAuthorizationsRequest $req) 应用授权关系列表（含搜索条件匹配）。
 * @method Models\ListApplicationsResponse ListApplications(Models\ListApplicationsRequest $req) 获取应用列表信息。
 * @method Models\ListAuthorizedApplicationsToOrgNodeResponse ListAuthorizedApplicationsToOrgNode(Models\ListAuthorizedApplicationsToOrgNodeRequest $req) 通过机构节点ID获得被授权访问的应用列表。
 * @method Models\ListAuthorizedApplicationsToUserResponse ListAuthorizedApplicationsToUser(Models\ListAuthorizedApplicationsToUserRequest $req) 通过用户ID获得被授权访问的应用列表。
 * @method Models\ListAuthorizedApplicationsToUserGroupResponse ListAuthorizedApplicationsToUserGroup(Models\ListAuthorizedApplicationsToUserGroupRequest $req) 通过用户组ID获得被授权访问的应用列表。
 * @method Models\ListUserGroupsResponse ListUserGroups(Models\ListUserGroupsRequest $req) 获取用户组列表信息（包含查询条件）。
 * @method Models\ListUserGroupsOfUserResponse ListUserGroupsOfUser(Models\ListUserGroupsOfUserRequest $req) 获取用户所在的用户组列表
 * @method Models\ListUsersResponse ListUsers(Models\ListUsersRequest $req) 获取用户列表信息。
 * @method Models\ListUsersInOrgNodeResponse ListUsersInOrgNode(Models\ListUsersInOrgNodeRequest $req) 根据机构节点ID读取节点下用户
 * @method Models\ListUsersInUserGroupResponse ListUsersInUserGroup(Models\ListUsersInUserGroupRequest $req) 获取用户组中的用户列表
 * @method Models\ModifyAccountGroupResponse ModifyAccountGroup(Models\ModifyAccountGroupRequest $req) 修改账号组
 * @method Models\ModifyAppAccountResponse ModifyAppAccount(Models\ModifyAppAccountRequest $req) 修改应用账号
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) 更新一个应用的信息
 * @method Models\ModifyUserInfoResponse ModifyUserInfo(Models\ModifyUserInfoRequest $req) 通过用户名或用户 id 冻结用户
 * @method Models\RemoveAccountFromAccountGroupResponse RemoveAccountFromAccountGroup(Models\RemoveAccountFromAccountGroupRequest $req) 从账号组中移除账号
 * @method Models\RemoveUserFromUserGroupResponse RemoveUserFromUserGroup(Models\RemoveUserFromUserGroupRequest $req) 从用户组中移除用户
 * @method Models\UpdateOrgNodeResponse UpdateOrgNode(Models\UpdateOrgNodeRequest $req) 新建一个机构节点，
 */

class EiamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "eiam.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "eiam";

    /**
     * @var string
     */
    protected $version = "2021-04-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("eiam")."\\"."V20210420\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
