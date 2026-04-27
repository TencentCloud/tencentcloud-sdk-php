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

namespace TencentCloud\Bi\V20220105;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bi\V20220105\Models as Models;

/**
 * @method Models\ApplyEmbedIntervalResponse ApplyEmbedInterval(Models\ApplyEmbedIntervalRequest $req) 申请延长Token可用时间接口-强鉴权
 * @method Models\ClearEmbedTokenResponse ClearEmbedToken(Models\ClearEmbedTokenRequest $req) 强鉴权token 清理，只有企业管理员才能调用该接口
 * @method Models\CreateAuthApiKeyResponse CreateAuthApiKey(Models\CreateAuthApiKeyRequest $req) 创建ApiKey
 * @method Models\CreateDatasourceResponse CreateDatasource(Models\CreateDatasourceRequest $req) 创建数据源
 * @method Models\CreateDatasourceCloudResponse CreateDatasourceCloud(Models\CreateDatasourceCloudRequest $req) 创建云数据库
 * @method Models\CreateEmbedTokenResponse CreateEmbedToken(Models\CreateEmbedTokenRequest $req) 创建嵌出报表-强鉴权
 * @method Models\CreatePermissionRanksResponse CreatePermissionRanks(Models\CreatePermissionRanksRequest $req) 创建行列权限
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建项目
 * @method Models\CreateUserGroupResponse CreateUserGroup(Models\CreateUserGroupRequest $req) CreateUserGroup
 * @method Models\CreateUserGroupMemberResponse CreateUserGroupMember(Models\CreateUserGroupMemberRequest $req) CreateUserGroupMember
 * @method Models\CreateUserRoleResponse CreateUserRole(Models\CreateUserRoleRequest $req) 创建用户角色
 * @method Models\CreateUserRoleProjectResponse CreateUserRoleProject(Models\CreateUserRoleProjectRequest $req) 项目内-创建用户角色
 * @method Models\DeleteAuthApiKeyResponse DeleteAuthApiKey(Models\DeleteAuthApiKeyRequest $req) 删除ApiKey
 * @method Models\DeleteDatasourceResponse DeleteDatasource(Models\DeleteDatasourceRequest $req) 删除数据源
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除项目
 * @method Models\DeleteUserGroupResponse DeleteUserGroup(Models\DeleteUserGroupRequest $req) DeleteUserGroup
 * @method Models\DeleteUserGroupMemberResponse DeleteUserGroupMember(Models\DeleteUserGroupMemberRequest $req) DeleteUserGroupMember
 * @method Models\DeleteUserRoleResponse DeleteUserRole(Models\DeleteUserRoleRequest $req) 删除用户角色，会删除用户
 * @method Models\DeleteUserRoleProjectResponse DeleteUserRoleProject(Models\DeleteUserRoleProjectRequest $req) 项目内-删除用户角色
 * @method Models\DescribeAuthApiKeyInfoResponse DescribeAuthApiKeyInfo(Models\DescribeAuthApiKeyInfoRequest $req) ApiKey信息
 * @method Models\DescribeAuthApiKeyListResponse DescribeAuthApiKeyList(Models\DescribeAuthApiKeyListRequest $req) ApiKey列表
 * @method Models\DescribeDatasourceListResponse DescribeDatasourceList(Models\DescribeDatasourceListRequest $req) 查询数据源列表
 * @method Models\DescribePageWidgetListResponse DescribePageWidgetList(Models\DescribePageWidgetListRequest $req) 查询页面组件信息
 * @method Models\DescribePermissionRanksInfoResponse DescribePermissionRanksInfo(Models\DescribePermissionRanksInfoRequest $req) 根据角色或标签查询行列权限配置
 * @method Models\DescribePermissionRoleInfoResponse DescribePermissionRoleInfo(Models\DescribePermissionRoleInfoRequest $req) 行列权限项目内角色列表接口1
 * @method Models\DescribePermissionStatusInfoResponse DescribePermissionStatusInfo(Models\DescribePermissionStatusInfoRequest $req) 查询行列权限初始状态1
 * @method Models\DescribeProjectInfoResponse DescribeProjectInfo(Models\DescribeProjectInfoRequest $req) 项目详情接口
 * @method Models\DescribeProjectListResponse DescribeProjectList(Models\DescribeProjectListRequest $req) 项目信息
 * @method Models\DescribeResourceUserGroupPageListResponse DescribeResourceUserGroupPageList(Models\DescribeResourceUserGroupPageListRequest $req) 用户组资源权限查询接口
 * @method Models\DescribeUserGroupInfoResponse DescribeUserGroupInfo(Models\DescribeUserGroupInfoRequest $req) DescribeUserGroupInfo
 * @method Models\DescribeUserGroupMemberListResponse DescribeUserGroupMemberList(Models\DescribeUserGroupMemberListRequest $req) DescribeUserGroupMemberList
 * @method Models\DescribeUserGroupTreeListResponse DescribeUserGroupTreeList(Models\DescribeUserGroupTreeListRequest $req) 用户组数查询接口
 * @method Models\DescribeUserProjectListResponse DescribeUserProjectList(Models\DescribeUserProjectListRequest $req) 项目内-用户接口
 * @method Models\DescribeUserRoleListResponse DescribeUserRoleList(Models\DescribeUserRoleListRequest $req) 用户角色列表
 * @method Models\DescribeUserRoleProjectListResponse DescribeUserRoleProjectList(Models\DescribeUserRoleProjectListRequest $req) 项目内-用户角色列表
 * @method Models\ExportScreenPageResponse ExportScreenPage(Models\ExportScreenPageRequest $req) 页面截图导出
 * @method Models\ModifyAuthApiKeyResponse ModifyAuthApiKey(Models\ModifyAuthApiKeyRequest $req) 更新ApiKey
 * @method Models\ModifyDatasourceResponse ModifyDatasource(Models\ModifyDatasourceRequest $req) 更新数据源
 * @method Models\ModifyDatasourceCloudResponse ModifyDatasourceCloud(Models\ModifyDatasourceCloudRequest $req) 更新云数据库
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改项目信息
 * @method Models\ModifyResourceUserGroupResponse ModifyResourceUserGroup(Models\ModifyResourceUserGroupRequest $req) 更新用户组权限
 * @method Models\ModifyResourceUserGroupResourceResponse ModifyResourceUserGroupResource(Models\ModifyResourceUserGroupResourceRequest $req) 按资源 - 更新用户组权限
 * @method Models\ModifyUserDetailInfoResponse ModifyUserDetailInfo(Models\ModifyUserDetailInfoRequest $req) 修改用户角色信息
 * @method Models\ModifyUserGroupResponse ModifyUserGroup(Models\ModifyUserGroupRequest $req) ModifyUserGroup
 * @method Models\ModifyUserRoleResponse ModifyUserRole(Models\ModifyUserRoleRequest $req) 修改用户角色信息
 * @method Models\ModifyUserRoleProjectResponse ModifyUserRoleProject(Models\ModifyUserRoleProjectRequest $req) 项目-修改用户角色信息
 * @method Models\QueryUserGroupMemberResponse QueryUserGroupMember(Models\QueryUserGroupMemberRequest $req) QueryUserGroupMember
 */

class BiClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bi.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bi";

    /**
     * @var string
     */
    protected $version = "2022-01-05";

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
        $respClass = "TencentCloud"."\\".ucfirst("bi")."\\"."V20220105\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
