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

namespace TencentCloud\Cloudstudio\V20230508;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudstudio\V20230508\Models as Models;

/**
 * @method Models\CreateWorkspaceResponse CreateWorkspace(Models\CreateWorkspaceRequest $req) 创建工作空间
 * @method Models\CreateWorkspaceTokenResponse CreateWorkspaceToken(Models\CreateWorkspaceTokenRequest $req) 创建工作空间临时访问凭证，重复调用会创建新的 Token，旧的 Token 将会自动失效
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 获取用户配置
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) 获取基础镜像列表
 * @method Models\DescribeWorkspacesResponse DescribeWorkspaces(Models\DescribeWorkspacesRequest $req) 获取用户工作空间列表
 * @method Models\ModifyWorkspaceResponse ModifyWorkspace(Models\ModifyWorkspaceRequest $req) 修改工作空间
 * @method Models\RemoveWorkspaceResponse RemoveWorkspace(Models\RemoveWorkspaceRequest $req) 删除工作空间
 * @method Models\RunWorkspaceResponse RunWorkspace(Models\RunWorkspaceRequest $req) 运行空间
 * @method Models\StopWorkspaceResponse StopWorkspace(Models\StopWorkspaceRequest $req) 停止运行空间
 */

class CloudstudioClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloudstudio.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cloudstudio";

    /**
     * @var string
     */
    protected $version = "2023-05-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudstudio")."\\"."V20230508\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
