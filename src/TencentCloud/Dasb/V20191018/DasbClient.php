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

namespace TencentCloud\Dasb\V20191018;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dasb\V20191018\Models as Models;

/**
 * @method Models\AddDeviceGroupMembersResponse AddDeviceGroupMembers(Models\AddDeviceGroupMembersRequest $req) 添加资产组成员
 * @method Models\AddUserGroupMembersResponse AddUserGroupMembers(Models\AddUserGroupMembersRequest $req) 添加用户组成员
 * @method Models\BindDeviceResourceResponse BindDeviceResource(Models\BindDeviceResourceRequest $req) 修改资产绑定的堡垒机服务
 * @method Models\CreateAclResponse CreateAcl(Models\CreateAclRequest $req) 新建访问权限
 * @method Models\CreateDeviceGroupResponse CreateDeviceGroup(Models\CreateDeviceGroupRequest $req) 新建资产组
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 新建用户
 * @method Models\CreateUserGroupResponse CreateUserGroup(Models\CreateUserGroupRequest $req) 新建用户组
 * @method Models\DeleteAclsResponse DeleteAcls(Models\DeleteAclsRequest $req) 删除访问权限
 * @method Models\DeleteDeviceGroupMembersResponse DeleteDeviceGroupMembers(Models\DeleteDeviceGroupMembersRequest $req) 删除资产组成员
 * @method Models\DeleteDeviceGroupsResponse DeleteDeviceGroups(Models\DeleteDeviceGroupsRequest $req) 删除资产组
 * @method Models\DeleteUserGroupMembersResponse DeleteUserGroupMembers(Models\DeleteUserGroupMembersRequest $req) 删除用户组成员
 * @method Models\DeleteUserGroupsResponse DeleteUserGroups(Models\DeleteUserGroupsRequest $req) 删除用户组
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) 删除用户
 * @method Models\DescribeAclsResponse DescribeAcls(Models\DescribeAclsRequest $req) 查询访问权限列表
 * @method Models\DescribeDasbImageIdsResponse DescribeDasbImageIds(Models\DescribeDasbImageIdsRequest $req) 获取镜像列表
 * @method Models\DescribeDeviceGroupMembersResponse DescribeDeviceGroupMembers(Models\DescribeDeviceGroupMembersRequest $req) 查询资产组成员列表
 * @method Models\DescribeDeviceGroupsResponse DescribeDeviceGroups(Models\DescribeDeviceGroupsRequest $req) 查询资产组列表
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询资产列表
 * @method Models\DescribeResourcesResponse DescribeResources(Models\DescribeResourcesRequest $req) 查询用户购买的堡垒机服务信息，包括资源ID、授权点数、VPC、过期时间等。
 * @method Models\DescribeUserGroupMembersResponse DescribeUserGroupMembers(Models\DescribeUserGroupMembersRequest $req) 查询用户组成员列表
 * @method Models\DescribeUserGroupsResponse DescribeUserGroups(Models\DescribeUserGroupsRequest $req) 查询用户组列表
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) 查询用户列表
 * @method Models\ModifyAclResponse ModifyAcl(Models\ModifyAclRequest $req) 修改访问权限
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 修改用户信息
 */

class DasbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dasb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dasb";

    /**
     * @var string
     */
    protected $version = "2019-10-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("dasb")."\\"."V20191018\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
