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
 * @method Models\BindDeviceAccountPasswordResponse BindDeviceAccountPassword(Models\BindDeviceAccountPasswordRequest $req) 绑定主机账号密码
 * @method Models\BindDeviceAccountPrivateKeyResponse BindDeviceAccountPrivateKey(Models\BindDeviceAccountPrivateKeyRequest $req) 绑定主机账号私钥
 * @method Models\BindDeviceResourceResponse BindDeviceResource(Models\BindDeviceResourceRequest $req) 修改资产绑定的堡垒机服务
 * @method Models\CreateAclResponse CreateAcl(Models\CreateAclRequest $req) 新建访问权限
 * @method Models\CreateAssetSyncJobResponse CreateAssetSyncJob(Models\CreateAssetSyncJobRequest $req) 创建手工资产同步任务
 * @method Models\CreateCmdTemplateResponse CreateCmdTemplate(Models\CreateCmdTemplateRequest $req) 新建高危命令模板
 * @method Models\CreateDeviceAccountResponse CreateDeviceAccount(Models\CreateDeviceAccountRequest $req) 新建主机账号
 * @method Models\CreateDeviceGroupResponse CreateDeviceGroup(Models\CreateDeviceGroupRequest $req) 新建资产组
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 新建用户
 * @method Models\CreateUserGroupResponse CreateUserGroup(Models\CreateUserGroupRequest $req) 新建用户组
 * @method Models\DeleteAclsResponse DeleteAcls(Models\DeleteAclsRequest $req) 删除访问权限
 * @method Models\DeleteCmdTemplatesResponse DeleteCmdTemplates(Models\DeleteCmdTemplatesRequest $req) 删除高危命令模板
 * @method Models\DeleteDeviceAccountsResponse DeleteDeviceAccounts(Models\DeleteDeviceAccountsRequest $req) 删除主机账号
 * @method Models\DeleteDeviceGroupMembersResponse DeleteDeviceGroupMembers(Models\DeleteDeviceGroupMembersRequest $req) 删除资产组成员
 * @method Models\DeleteDeviceGroupsResponse DeleteDeviceGroups(Models\DeleteDeviceGroupsRequest $req) 删除资产组
 * @method Models\DeleteDevicesResponse DeleteDevices(Models\DeleteDevicesRequest $req) 删除主机
 * @method Models\DeleteUserGroupMembersResponse DeleteUserGroupMembers(Models\DeleteUserGroupMembersRequest $req) 删除用户组成员
 * @method Models\DeleteUserGroupsResponse DeleteUserGroups(Models\DeleteUserGroupsRequest $req) 删除用户组
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) 删除用户
 * @method Models\DeployResourceResponse DeployResource(Models\DeployResourceRequest $req) 开通服务，初始化资源，只针对新购资源
 * @method Models\DescribeAclsResponse DescribeAcls(Models\DescribeAclsRequest $req) 查询访问权限列表
 * @method Models\DescribeAssetSyncStatusResponse DescribeAssetSyncStatus(Models\DescribeAssetSyncStatusRequest $req) 查询资产同步状态
 * @method Models\DescribeCmdTemplatesResponse DescribeCmdTemplates(Models\DescribeCmdTemplatesRequest $req) 查询命令模板列表
 * @method Models\DescribeDasbImageIdsResponse DescribeDasbImageIds(Models\DescribeDasbImageIdsRequest $req) 获取镜像列表
 * @method Models\DescribeDeviceAccountsResponse DescribeDeviceAccounts(Models\DescribeDeviceAccountsRequest $req) 查询主机账号列表
 * @method Models\DescribeDeviceGroupMembersResponse DescribeDeviceGroupMembers(Models\DescribeDeviceGroupMembersRequest $req) 查询资产组成员列表
 * @method Models\DescribeDeviceGroupsResponse DescribeDeviceGroups(Models\DescribeDeviceGroupsRequest $req) 查询资产组列表
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询资产列表
 * @method Models\DescribeLoginEventResponse DescribeLoginEvent(Models\DescribeLoginEventRequest $req) 查询登录日志
 * @method Models\DescribeOperationEventResponse DescribeOperationEvent(Models\DescribeOperationEventRequest $req) 查询操作日志
 * @method Models\DescribeResourcesResponse DescribeResources(Models\DescribeResourcesRequest $req) 查询用户购买的堡垒机服务信息，包括资源ID、授权点数、VPC、过期时间等。
 * @method Models\DescribeUserGroupMembersResponse DescribeUserGroupMembers(Models\DescribeUserGroupMembersRequest $req) 查询用户组成员列表
 * @method Models\DescribeUserGroupsResponse DescribeUserGroups(Models\DescribeUserGroupsRequest $req) 查询用户组列表
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) 查询用户列表
 * @method Models\ImportExternalDeviceResponse ImportExternalDevice(Models\ImportExternalDeviceRequest $req) 导入外部资产信息
 * @method Models\ModifyAclResponse ModifyAcl(Models\ModifyAclRequest $req) 修改访问权限
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) 修改资产信息
 * @method Models\ModifyDeviceGroupResponse ModifyDeviceGroup(Models\ModifyDeviceGroupRequest $req) 修改资产组
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 修改用户信息
 * @method Models\ResetDeviceAccountPasswordResponse ResetDeviceAccountPassword(Models\ResetDeviceAccountPasswordRequest $req) 清除设备账号绑定密码
 * @method Models\ResetDeviceAccountPrivateKeyResponse ResetDeviceAccountPrivateKey(Models\ResetDeviceAccountPrivateKeyRequest $req) 清除设备账号绑定的密钥
 * @method Models\ResetUserResponse ResetUser(Models\ResetUserRequest $req) 重置用户
 * @method Models\SearchAuditLogResponse SearchAuditLog(Models\SearchAuditLogRequest $req) 搜索审计日志
 * @method Models\SearchCommandResponse SearchCommand(Models\SearchCommandRequest $req) 命令执行检索
 * @method Models\SearchCommandBySidResponse SearchCommandBySid(Models\SearchCommandBySidRequest $req) 根据会话Id搜索Command
 * @method Models\SearchFileResponse SearchFile(Models\SearchFileRequest $req) 文件传输检索
 * @method Models\SearchFileBySidResponse SearchFileBySid(Models\SearchFileBySidRequest $req) 搜索文件传输会话下文件操作列表
 * @method Models\SearchSessionResponse SearchSession(Models\SearchSessionRequest $req) 搜索会话
 * @method Models\SearchSessionCommandResponse SearchSessionCommand(Models\SearchSessionCommandRequest $req) 命令检索
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
