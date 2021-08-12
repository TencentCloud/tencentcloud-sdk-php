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

namespace TencentCloud\Tem\V20210701;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tem\V20210701\Models as Models;

/**
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) 创建应用
 * @method Models\CreateCosTokenResponse CreateCosToken(Models\CreateCosTokenRequest $req) 生成Cos临时秘钥
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) 创建环境
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) 绑定云资源
 * @method Models\DeleteIngressResponse DeleteIngress(Models\DeleteIngressRequest $req) 删除 Ingress 规则
 * @method Models\DeployApplicationResponse DeployApplication(Models\DeployApplicationRequest $req) 应用部署
 * @method Models\DescribeApplicationPodsResponse DescribeApplicationPods(Models\DescribeApplicationPodsRequest $req) 获取应用实例列表
 * @method Models\DescribeDeployApplicationDetailResponse DescribeDeployApplicationDetail(Models\DescribeDeployApplicationDetailRequest $req) 获取分批发布详情
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 获取租户环境列表
 * @method Models\DescribeIngressResponse DescribeIngress(Models\DescribeIngressRequest $req) 查询 Ingress 规则
 * @method Models\DescribeIngressesResponse DescribeIngresses(Models\DescribeIngressesRequest $req) 查询 Ingress 规则列表
 * @method Models\DescribeRelatedIngressesResponse DescribeRelatedIngresses(Models\DescribeRelatedIngressesRequest $req) 查询应用关联的 Ingress 规则列表
 * @method Models\GenerateApplicationPackageDownloadUrlResponse GenerateApplicationPackageDownloadUrl(Models\GenerateApplicationPackageDownloadUrlRequest $req) 生成应用程序包预签名下载链接
 * @method Models\ModifyApplicationInfoResponse ModifyApplicationInfo(Models\ModifyApplicationInfoRequest $req) 修改应用基本信息
 * @method Models\ModifyEnvironmentResponse ModifyEnvironment(Models\ModifyEnvironmentRequest $req) 编辑环境
 * @method Models\ModifyIngressResponse ModifyIngress(Models\ModifyIngressRequest $req) 创建或者更新 Ingress 规则
 * @method Models\RestartApplicationPodResponse RestartApplicationPod(Models\RestartApplicationPodRequest $req) 重启应用实例
 * @method Models\ResumeDeployApplicationResponse ResumeDeployApplication(Models\ResumeDeployApplicationRequest $req) 开始下一批次发布
 * @method Models\RevertDeployApplicationResponse RevertDeployApplication(Models\RevertDeployApplicationRequest $req) 回滚分批发布
 */

class TemClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tem.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tem";

    /**
     * @var string
     */
    protected $version = "2021-07-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tem")."\\"."V20210701\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
