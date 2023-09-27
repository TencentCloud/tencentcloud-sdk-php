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

namespace TencentCloud\Bi\V20220105;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bi\V20220105\Models as Models;

/**
 * @method Models\ApplyEmbedIntervalResponse ApplyEmbedInterval(Models\ApplyEmbedIntervalRequest $req) 申请延长Token可用时间接口-强鉴权
 * @method Models\CreateDatasourceResponse CreateDatasource(Models\CreateDatasourceRequest $req) 创建数据源
 * @method Models\CreateDatasourceCloudResponse CreateDatasourceCloud(Models\CreateDatasourceCloudRequest $req) 创建云数据库
 * @method Models\CreateEmbedTokenResponse CreateEmbedToken(Models\CreateEmbedTokenRequest $req) 创建嵌出报表-强鉴权
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建项目
 * @method Models\CreateUserRoleResponse CreateUserRole(Models\CreateUserRoleRequest $req) 创建用户角色
 * @method Models\CreateUserRoleProjectResponse CreateUserRoleProject(Models\CreateUserRoleProjectRequest $req) 项目内-创建用户角色
 * @method Models\DeleteDatasourceResponse DeleteDatasource(Models\DeleteDatasourceRequest $req) 删除数据源
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除项目
 * @method Models\DeleteUserRoleResponse DeleteUserRole(Models\DeleteUserRoleRequest $req) 删除用户角色，会删除用户
 * @method Models\DeleteUserRoleProjectResponse DeleteUserRoleProject(Models\DeleteUserRoleProjectRequest $req) 项目内-删除用户角色
 * @method Models\DescribeDatasourceListResponse DescribeDatasourceList(Models\DescribeDatasourceListRequest $req) 查询数据源列表
 * @method Models\DescribeProjectInfoResponse DescribeProjectInfo(Models\DescribeProjectInfoRequest $req) 项目详情接口
 * @method Models\DescribeProjectListResponse DescribeProjectList(Models\DescribeProjectListRequest $req) 项目信息
 * @method Models\DescribeUserProjectListResponse DescribeUserProjectList(Models\DescribeUserProjectListRequest $req) 项目内-用户接口
 * @method Models\DescribeUserRoleListResponse DescribeUserRoleList(Models\DescribeUserRoleListRequest $req) 用户角色列表
 * @method Models\ModifyDatasourceResponse ModifyDatasource(Models\ModifyDatasourceRequest $req) 更新数据源
 * @method Models\ModifyDatasourceCloudResponse ModifyDatasourceCloud(Models\ModifyDatasourceCloudRequest $req) 更新云数据库
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改项目信息
 * @method Models\ModifyUserRoleResponse ModifyUserRole(Models\ModifyUserRoleRequest $req) 修改用户角色信息
 * @method Models\ModifyUserRoleProjectResponse ModifyUserRoleProject(Models\ModifyUserRoleProjectRequest $req) 项目-修改用户角色信息
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
