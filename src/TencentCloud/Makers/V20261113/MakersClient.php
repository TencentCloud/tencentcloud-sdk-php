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

namespace TencentCloud\Makers\V20261113;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Makers\V20261113\Models as Models;

/**
 * @method Models\BlockProjectResponse BlockProject(Models\BlockProjectRequest $req) 封禁或解封当前账号指定站点下的项目及域名。Status 支持 Ban或Normal。
 * @method Models\CreateDeploymentResponse CreateDeployment(Models\CreateDeploymentRequest $req) 创建部署。上传制品时 ViaMeta 和 Provider 传 Upload，TempBucketPath 传已上传对象的路径。
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建项目。上传制品时 Provider 传 Upload，Channel 传 Custom。
 * @method Models\CreateZoneCustomDomainResponse CreateZoneCustomDomain(Models\CreateZoneCustomDomainRequest $req) 把一个自定义域名绑到项目的指定环境。
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除项目。进行中的构建会阻止删除。
 * @method Models\DeleteProjectCustomDomainsResponse DeleteProjectCustomDomains(Models\DeleteProjectCustomDomainsRequest $req) 按域名解绑项目的自定义域名。
 * @method Models\DeleteProjectEnvsResponse DeleteProjectEnvs(Models\DeleteProjectEnvsRequest $req) 按 EnvVars 删除环境变量。按 Id 或 Key 匹配。Value 必填但不参与匹配，可传任意值。
 * @method Models\DescribeCosTempTokenResponse DescribeCosTempToken(Models\DescribeCosTempTokenRequest $req) 获取上传制品用的 COS 桶、地域、目标路径和临时密钥。
 * @method Models\DescribeDeploymentLogResponse DescribeDeploymentLog(Models\DescribeDeploymentLogRequest $req) 返回构建日志的访问地址。
 * @method Models\DescribeDeploymentsResponse DescribeDeployments(Models\DescribeDeploymentsRequest $req) 查询项目的部署记录。
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 查询项目下的环境，含内置 Production、Preview 和自定义环境。
 * @method Models\DescribeProjectEnvsResponse DescribeProjectEnvs(Models\DescribeProjectEnvsRequest $req) 查询项目环境变量。不传 Env 时返回全部作用域。
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 分页查询站点下的项目。Offset 是页码偏移，后端按 Offset * Limit 跳过。
 * @method Models\DescribeZoneCustomDomainsResponse DescribeZoneCustomDomains(Models\DescribeZoneCustomDomainsRequest $req) 查询项目在站点下的自定义域名和预设域名。
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改项目名称和构建配置。未传的字段保持原值。
 * @method Models\ModifyProjectEnvsResponse ModifyProjectEnvs(Models\ModifyProjectEnvsRequest $req) 按传入的 EnvVars 写入环境变量。
 * @method Models\ModifyZoneCustomDomainEnvResponse ModifyZoneCustomDomainEnv(Models\ModifyZoneCustomDomainEnvRequest $req) 把已绑定的自定义域名切到另一个环境。
 */

class MakersClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "makers.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "makers";

    /**
     * @var string
     */
    protected $version = "2026-11-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("makers")."\\"."V20261113\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
