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

namespace TencentCloud\Cloudstudio\V20210524;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudstudio\V20210524\Models as Models;

/**
 * @method Models\CreateCustomizeTemplatesResponse CreateCustomizeTemplates(Models\CreateCustomizeTemplatesRequest $req) 添加自定义模板
 * @method Models\CreateWorkspaceByAgentResponse CreateWorkspaceByAgent(Models\CreateWorkspaceByAgentRequest $req) 云服务器方式创建工作空间
 * @method Models\CreateWorkspaceByTemplateResponse CreateWorkspaceByTemplate(Models\CreateWorkspaceByTemplateRequest $req) 快速开始, 基于模板创建工作空间
 * @method Models\CreateWorkspaceByVersionControlResponse CreateWorkspaceByVersionControl(Models\CreateWorkspaceByVersionControlRequest $req) 根据模板创建工作空间
 * @method Models\CreateWorkspaceTemporaryTokenResponse CreateWorkspaceTemporaryToken(Models\CreateWorkspaceTemporaryTokenRequest $req) 为工作空间创建临时访问凭证，重复调用会创建新的 Token，旧的 Token 将会自动失效
 * @method Models\DeleteCustomizeTemplatesByIdResponse DeleteCustomizeTemplatesById(Models\DeleteCustomizeTemplatesByIdRequest $req) 删除自定义模板
 * @method Models\DescribeCustomizeTemplatesResponse DescribeCustomizeTemplates(Models\DescribeCustomizeTemplatesRequest $req) 获取所有模板列表
 * @method Models\DescribeCustomizeTemplatesByIdResponse DescribeCustomizeTemplatesById(Models\DescribeCustomizeTemplatesByIdRequest $req) 获取特定模板信息
 * @method Models\DescribeCustomizeTemplatesPresetsResponse DescribeCustomizeTemplatesPresets(Models\DescribeCustomizeTemplatesPresetsRequest $req) 获取创建模板的预置参数
 * @method Models\DescribeWorkspaceEnvListResponse DescribeWorkspaceEnvList(Models\DescribeWorkspaceEnvListRequest $req) 环境列表接口返回信息
 * @method Models\DescribeWorkspaceIsReadyResponse DescribeWorkspaceIsReady(Models\DescribeWorkspaceIsReadyRequest $req) 获取工作空间是否已经启动就绪
 * @method Models\DescribeWorkspaceNameExistResponse DescribeWorkspaceNameExist(Models\DescribeWorkspaceNameExistRequest $req) 检查工作空间是否存在
 * @method Models\DescribeWorkspaceStatusResponse DescribeWorkspaceStatus(Models\DescribeWorkspaceStatusRequest $req) 获取工作空间元信息
 * @method Models\DescribeWorkspaceStatusListResponse DescribeWorkspaceStatusList(Models\DescribeWorkspaceStatusListRequest $req) 获取用户工作空间列表
 * @method Models\ModifyCustomizeTemplateVersionControlResponse ModifyCustomizeTemplateVersionControl(Models\ModifyCustomizeTemplateVersionControlRequest $req) 修改模板默认代码仓库
 * @method Models\ModifyCustomizeTemplatesFullByIdResponse ModifyCustomizeTemplatesFullById(Models\ModifyCustomizeTemplatesFullByIdRequest $req) 全量修改自定义模板，不忽略空
 * @method Models\ModifyCustomizeTemplatesPartByIdResponse ModifyCustomizeTemplatesPartById(Models\ModifyCustomizeTemplatesPartByIdRequest $req) 全量修改自定义模板，忽略空
 * @method Models\ModifyWorkspaceAttributesResponse ModifyWorkspaceAttributes(Models\ModifyWorkspaceAttributesRequest $req) 修改工作空间的名称和描述
 * @method Models\RecoverWorkspaceResponse RecoverWorkspace(Models\RecoverWorkspaceRequest $req) 恢复工作空间

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
    protected $version = "2021-05-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudstudio")."\\"."V20210524\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
