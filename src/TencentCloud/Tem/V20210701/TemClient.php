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
 * @method Models\CreateApplicationAutoscalerResponse CreateApplicationAutoscaler(Models\CreateApplicationAutoscalerRequest $req) 创建弹性伸缩策略组合
 * @method Models\CreateApplicationServiceResponse CreateApplicationService(Models\CreateApplicationServiceRequest $req) 新增访问方式
 * @method Models\CreateConfigDataResponse CreateConfigData(Models\CreateConfigDataRequest $req) 创建配置
 * @method Models\CreateCosTokenResponse CreateCosToken(Models\CreateCosTokenRequest $req) 生成Cos临时秘钥
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) 创建环境
 * @method Models\CreateLogConfigResponse CreateLogConfig(Models\CreateLogConfigRequest $req) 创建日志收集配置
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) 绑定云资源
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) 服务删除
  - 停止当前运行服务
  - 删除服务相关资源
  - 删除服务
 * @method Models\DeleteApplicationAutoscalerResponse DeleteApplicationAutoscaler(Models\DeleteApplicationAutoscalerRequest $req) 删除应用弹性策略组合
 * @method Models\DeleteApplicationServiceResponse DeleteApplicationService(Models\DeleteApplicationServiceRequest $req) 删除一条访问方式
 * @method Models\DeleteIngressResponse DeleteIngress(Models\DeleteIngressRequest $req) 删除 Ingress 规则
 * @method Models\DeployApplicationResponse DeployApplication(Models\DeployApplicationRequest $req) 应用部署
 * @method Models\DescribeApplicationAutoscalerListResponse DescribeApplicationAutoscalerList(Models\DescribeApplicationAutoscalerListRequest $req) 获取应用弹性策略组合
 * @method Models\DescribeApplicationInfoResponse DescribeApplicationInfo(Models\DescribeApplicationInfoRequest $req) 服务基本信息查看
 * @method Models\DescribeApplicationPodsResponse DescribeApplicationPods(Models\DescribeApplicationPodsRequest $req) 获取应用实例列表
 * @method Models\DescribeApplicationServiceListResponse DescribeApplicationServiceList(Models\DescribeApplicationServiceListRequest $req) 查询应用访问方式列表
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) 获取运行服务列表
 * @method Models\DescribeApplicationsStatusResponse DescribeApplicationsStatus(Models\DescribeApplicationsStatusRequest $req) 单环境下所有应用状态查看
 * @method Models\DescribeConfigDataResponse DescribeConfigData(Models\DescribeConfigDataRequest $req) 查询配置详情
 * @method Models\DescribeConfigDataListResponse DescribeConfigDataList(Models\DescribeConfigDataListRequest $req) 查询配置列表
 * @method Models\DescribeDeployApplicationDetailResponse DescribeDeployApplicationDetail(Models\DescribeDeployApplicationDetailRequest $req) 获取分批发布详情
 * @method Models\DescribeEnvironmentResponse DescribeEnvironment(Models\DescribeEnvironmentRequest $req) 获取环境基础信息
 * @method Models\DescribeEnvironmentStatusResponse DescribeEnvironmentStatus(Models\DescribeEnvironmentStatusRequest $req) 获取环境状态
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 获取环境列表
 * @method Models\DescribeIngressResponse DescribeIngress(Models\DescribeIngressRequest $req) 查询 Ingress 规则
 * @method Models\DescribeIngressesResponse DescribeIngresses(Models\DescribeIngressesRequest $req) 查询 Ingress 规则列表
 * @method Models\DescribeLogConfigResponse DescribeLogConfig(Models\DescribeLogConfigRequest $req) 查询日志收集配置详情
 * @method Models\DescribePagedLogConfigListResponse DescribePagedLogConfigList(Models\DescribePagedLogConfigListRequest $req) 查询分页的日志收集配置列表
 * @method Models\DescribeRelatedIngressesResponse DescribeRelatedIngresses(Models\DescribeRelatedIngressesRequest $req) 查询应用关联的 Ingress 规则列表
 * @method Models\DestroyConfigDataResponse DestroyConfigData(Models\DestroyConfigDataRequest $req) 销毁配置
 * @method Models\DestroyEnvironmentResponse DestroyEnvironment(Models\DestroyEnvironmentRequest $req) 销毁环境
 * @method Models\DestroyLogConfigResponse DestroyLogConfig(Models\DestroyLogConfigRequest $req) 销毁日志收集配置
 * @method Models\DisableApplicationAutoscalerResponse DisableApplicationAutoscaler(Models\DisableApplicationAutoscalerRequest $req) 关闭应用弹性策略组合
 * @method Models\EnableApplicationAutoscalerResponse EnableApplicationAutoscaler(Models\EnableApplicationAutoscalerRequest $req) 启用应用弹性策略组合
 * @method Models\GenerateApplicationPackageDownloadUrlResponse GenerateApplicationPackageDownloadUrl(Models\GenerateApplicationPackageDownloadUrlRequest $req) 生成应用程序包预签名下载链接
 * @method Models\ModifyApplicationAutoscalerResponse ModifyApplicationAutoscaler(Models\ModifyApplicationAutoscalerRequest $req) 修改弹性伸缩策略组合
 * @method Models\ModifyApplicationInfoResponse ModifyApplicationInfo(Models\ModifyApplicationInfoRequest $req) 修改应用基本信息
 * @method Models\ModifyApplicationReplicasResponse ModifyApplicationReplicas(Models\ModifyApplicationReplicasRequest $req) 修改应用实例数量
 * @method Models\ModifyApplicationServiceResponse ModifyApplicationService(Models\ModifyApplicationServiceRequest $req) 修改服务访问方式列表
 * @method Models\ModifyConfigDataResponse ModifyConfigData(Models\ModifyConfigDataRequest $req) 编辑配置
 * @method Models\ModifyEnvironmentResponse ModifyEnvironment(Models\ModifyEnvironmentRequest $req) 编辑环境
 * @method Models\ModifyIngressResponse ModifyIngress(Models\ModifyIngressRequest $req) 创建或者更新 Ingress 规则
 * @method Models\ModifyLogConfigResponse ModifyLogConfig(Models\ModifyLogConfigRequest $req) 编辑日志收集配置
 * @method Models\RestartApplicationResponse RestartApplication(Models\RestartApplicationRequest $req) 服务重启
 * @method Models\RestartApplicationPodResponse RestartApplicationPod(Models\RestartApplicationPodRequest $req) 重启应用实例
 * @method Models\ResumeDeployApplicationResponse ResumeDeployApplication(Models\ResumeDeployApplicationRequest $req) 开始下一批次发布
 * @method Models\RevertDeployApplicationResponse RevertDeployApplication(Models\RevertDeployApplicationRequest $req) 回滚分批发布
 * @method Models\RollingUpdateApplicationByVersionResponse RollingUpdateApplicationByVersion(Models\RollingUpdateApplicationByVersionRequest $req) 更新应用部署版本
 * @method Models\StopApplicationResponse StopApplication(Models\StopApplicationRequest $req) 服务停止
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
