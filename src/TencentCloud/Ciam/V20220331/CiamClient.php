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

namespace TencentCloud\Ciam\V20220331;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ciam\V20220331\Models as Models;

/**
 * @method Models\CreateApiImportUserJobResponse CreateApiImportUserJob(Models\CreateApiImportUserJobRequest $req) 新建接口导入用户任务
 * @method Models\CreateFileExportUserJobResponse CreateFileExportUserJob(Models\CreateFileExportUserJobRequest $req) 新建文件导出用户任务
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 创建用户
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) 批量删除用户
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) 多条件查询用户信息
 * @method Models\DescribeUserByIdResponse DescribeUserById(Models\DescribeUserByIdRequest $req) 根据ID查询用户信息
 * @method Models\LinkAccountResponse LinkAccount(Models\LinkAccountRequest $req) 账号融合
 * @method Models\ListJobsResponse ListJobs(Models\ListJobsRequest $req) 查询任务详情
 * @method Models\ListLogMessageByConditionResponse ListLogMessageByCondition(Models\ListLogMessageByConditionRequest $req) 查询日志信息
 * @method Models\ListUserResponse ListUser(Models\ListUserRequest $req) 查询用户列表
 * @method Models\ListUserByPropertyResponse ListUserByProperty(Models\ListUserByPropertyRequest $req) 根据属性查询用户列表
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) 重置用户密码
 * @method Models\SetPasswordResponse SetPassword(Models\SetPasswordRequest $req) 设置用户密码
 * @method Models\UpdateUserResponse UpdateUser(Models\UpdateUserRequest $req) 更新用户
 * @method Models\UpdateUserStatusResponse UpdateUserStatus(Models\UpdateUserStatusRequest $req) 更新用户状态
 */

class CiamClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ciam.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ciam";

    /**
     * @var string
     */
    protected $version = "2022-03-31";

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
        $respClass = "TencentCloud"."\\".ucfirst("ciam")."\\"."V20220331\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
