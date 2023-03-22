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

namespace TencentCloud\Tcb\V20180608;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcb\V20180608\Models as Models;

/**
 * @method Models\BindEnvGatewayResponse BindEnvGateway(Models\BindEnvGatewayRequest $req) 绑定另外一个环境下的网关，callContainer请求可以访问到该网关
 * @method Models\CheckTcbServiceResponse CheckTcbService(Models\CheckTcbServiceRequest $req) 检查是否开通Tcb服务
 * @method Models\CommonServiceAPIResponse CommonServiceAPI(Models\CommonServiceAPIRequest $req) TCB云API统一入口
 * @method Models\CreateAndDeployCloudBaseProjectResponse CreateAndDeployCloudBaseProject(Models\CreateAndDeployCloudBaseProjectRequest $req) 创建云开发项目
 * @method Models\CreateAuthDomainResponse CreateAuthDomain(Models\CreateAuthDomainRequest $req) 增加安全域名
 * @method Models\CreateCloudBaseRunResourceResponse CreateCloudBaseRunResource(Models\CreateCloudBaseRunResourceRequest $req) 开通容器托管的资源，包括集群创建，VPC配置，异步任务创建，镜像托管，Coding等，查看创建结果需要根据DescribeCloudBaseRunResource接口来查看
 * @method Models\CreateCloudBaseRunServerVersionResponse CreateCloudBaseRunServerVersion(Models\CreateCloudBaseRunServerVersionRequest $req) 创建服务版本
 * @method Models\CreateHostingDomainResponse CreateHostingDomain(Models\CreateHostingDomainRequest $req) 创建托管域名
 * @method Models\CreatePostpayPackageResponse CreatePostpayPackage(Models\CreatePostpayPackageRequest $req) 开通后付费资源
 * @method Models\CreateStandaloneGatewayResponse CreateStandaloneGateway(Models\CreateStandaloneGatewayRequest $req) 本接口（CreateStandaloneGateway）用于创建独立网关。
 * @method Models\CreateStaticStoreResponse CreateStaticStore(Models\CreateStaticStoreRequest $req) 创建静态托管资源，包括COS和CDN，异步任务创建，查看创建结果需要根据DescribeStaticStore接口来查看
 * @method Models\CreateWxCloudBaseRunEnvResponse CreateWxCloudBaseRunEnv(Models\CreateWxCloudBaseRunEnvRequest $req) 创建微信云托管
 * @method Models\CreateWxCloudBaseRunServerDBClusterResponse CreateWxCloudBaseRunServerDBCluster(Models\CreateWxCloudBaseRunServerDBClusterRequest $req) 开通微信云托管MySQL数据库服务
 * @method Models\DeleteCloudBaseProjectLatestVersionResponse DeleteCloudBaseProjectLatestVersion(Models\DeleteCloudBaseProjectLatestVersionRequest $req) 删除云项目
 * @method Models\DeleteCloudBaseRunServerVersionResponse DeleteCloudBaseRunServerVersion(Models\DeleteCloudBaseRunServerVersionRequest $req) 删除服务版本
 * @method Models\DeleteEndUserResponse DeleteEndUser(Models\DeleteEndUserRequest $req) 删除终端用户
 * @method Models\DeleteWxGatewayRouteResponse DeleteWxGatewayRoute(Models\DeleteWxGatewayRouteRequest $req) 删除安全网关路由
 * @method Models\DescribeActivityInfoResponse DescribeActivityInfo(Models\DescribeActivityInfoRequest $req) 查询活动信息
 * @method Models\DescribeActivityRecordResponse DescribeActivityRecord(Models\DescribeActivityRecordRequest $req) 查询活动记录信息
 * @method Models\DescribeAuthDomainsResponse DescribeAuthDomains(Models\DescribeAuthDomainsRequest $req) 获取安全域名列表
 * @method Models\DescribeBaasPackageListResponse DescribeBaasPackageList(Models\DescribeBaasPackageListRequest $req) 获取新套餐列表，含详情，如果传了PackageId，则只获取指定套餐详情
 * @method Models\DescribeCloudBaseBuildServiceResponse DescribeCloudBaseBuildService(Models\DescribeCloudBaseBuildServiceRequest $req) 获取云托管代码上传url
 * @method Models\DescribeCloudBaseProjectLatestVersionListResponse DescribeCloudBaseProjectLatestVersionList(Models\DescribeCloudBaseProjectLatestVersionListRequest $req) 获取云开发项目列表
 * @method Models\DescribeCloudBaseProjectVersionListResponse DescribeCloudBaseProjectVersionList(Models\DescribeCloudBaseProjectVersionListRequest $req) 云项目部署列表
 * @method Models\DescribeCloudBaseRunAllVpcsResponse DescribeCloudBaseRunAllVpcs(Models\DescribeCloudBaseRunAllVpcsRequest $req) 查询环境下所有的vpc列表
 * @method Models\DescribeCloudBaseRunConfForGateWayResponse DescribeCloudBaseRunConfForGateWay(Models\DescribeCloudBaseRunConfForGateWayRequest $req) 独立网关中拉取云托管服务对应的配置信息
 * @method Models\DescribeCloudBaseRunOneClickTaskExternalResponse DescribeCloudBaseRunOneClickTaskExternal(Models\DescribeCloudBaseRunOneClickTaskExternalRequest $req) 查询一键部署任务 （特定接口：外部查询使用）
 * @method Models\DescribeCloudBaseRunOperationTypesResponse DescribeCloudBaseRunOperationTypes(Models\DescribeCloudBaseRunOperationTypesRequest $req) 查询服务、版本和操作类型
 * @method Models\DescribeCloudBaseRunPodListResponse DescribeCloudBaseRunPodList(Models\DescribeCloudBaseRunPodListRequest $req) 查询云应用服务版本容器列表
 * @method Models\DescribeCloudBaseRunResourceResponse DescribeCloudBaseRunResource(Models\DescribeCloudBaseRunResourceRequest $req) 查看容器托管的集群状态
 * @method Models\DescribeCloudBaseRunResourceForExtendResponse DescribeCloudBaseRunResourceForExtend(Models\DescribeCloudBaseRunResourceForExtendRequest $req) 查看容器托管的集群状态扩展使用
 * @method Models\DescribeCloudBaseRunServerResponse DescribeCloudBaseRunServer(Models\DescribeCloudBaseRunServerRequest $req) 查询单个服务的详情，版本以及详情
 * @method Models\DescribeCloudBaseRunServerDomainNameResponse DescribeCloudBaseRunServerDomainName(Models\DescribeCloudBaseRunServerDomainNameRequest $req) 查询微信云托管服务域名
 * @method Models\DescribeCloudBaseRunServerVersionResponse DescribeCloudBaseRunServerVersion(Models\DescribeCloudBaseRunServerVersionRequest $req) 查询服务版本的详情，CPU和MEM  请使用CPUSize和MemSize
 * @method Models\DescribeCloudBaseRunVersionResponse DescribeCloudBaseRunVersion(Models\DescribeCloudBaseRunVersionRequest $req) 查询服务版本详情(新)
 * @method Models\DescribeCloudBaseRunVersionRsByConditionResponse DescribeCloudBaseRunVersionRsByCondition(Models\DescribeCloudBaseRunVersionRsByConditionRequest $req) DescribeCloudBaseRunVersionRsByCondition 获取云托管详情
 * @method Models\DescribeCloudBaseRunVersionSnapshotResponse DescribeCloudBaseRunVersionSnapshot(Models\DescribeCloudBaseRunVersionSnapshotRequest $req) 查询版本历史
 * @method Models\DescribeCurveDataResponse DescribeCurveData(Models\DescribeCurveDataRequest $req) 根据用户传入的指标, 拉取一段时间内的监控数据。
 * @method Models\DescribeDatabaseACLResponse DescribeDatabaseACL(Models\DescribeDatabaseACLRequest $req) 获取数据库权限
 * @method Models\DescribeDownloadFileResponse DescribeDownloadFile(Models\DescribeDownloadFileRequest $req) 获取下载文件信息
 * @method Models\DescribeEndUserLoginStatisticResponse DescribeEndUserLoginStatistic(Models\DescribeEndUserLoginStatisticRequest $req) 获取环境终端用户新增与登录信息
 * @method Models\DescribeEndUserStatisticResponse DescribeEndUserStatistic(Models\DescribeEndUserStatisticRequest $req) 获取终端用户总量与平台分布情况
 * @method Models\DescribeEndUsersResponse DescribeEndUsers(Models\DescribeEndUsersRequest $req) 获取终端用户列表
 * @method Models\DescribeEnvDealRegionResponse DescribeEnvDealRegion(Models\DescribeEnvDealRegionRequest $req) 获取环境下单地域
 * @method Models\DescribeEnvFreeQuotaResponse DescribeEnvFreeQuota(Models\DescribeEnvFreeQuotaRequest $req) 查询后付费免费配额信息
 * @method Models\DescribeEnvLimitResponse DescribeEnvLimit(Models\DescribeEnvLimitRequest $req) 查询环境个数上限
 * @method Models\DescribeEnvPostpaidDeductResponse DescribeEnvPostpaidDeduct(Models\DescribeEnvPostpaidDeductRequest $req) 查询环境后付费计费详情
 * @method Models\DescribeEnvsResponse DescribeEnvs(Models\DescribeEnvsRequest $req) 获取环境列表，含环境下的各个资源信息。尤其是各资源的唯一标识，是请求各资源的关键参数
 * @method Models\DescribeExtensionUploadInfoResponse DescribeExtensionUploadInfo(Models\DescribeExtensionUploadInfoRequest $req) 描述扩展上传文件信息
 * @method Models\DescribeExtraPkgBillingInfoResponse DescribeExtraPkgBillingInfo(Models\DescribeExtraPkgBillingInfoRequest $req) 获取增值包计费相关信息
 * @method Models\DescribeGatewayCurveDataResponse DescribeGatewayCurveData(Models\DescribeGatewayCurveDataRequest $req) 查询网关监控数据
 * @method Models\DescribeHostingDomainTaskResponse DescribeHostingDomainTask(Models\DescribeHostingDomainTaskRequest $req) 查询静态托管域名任务状态
 * @method Models\DescribePostpayFreeQuotasResponse DescribePostpayFreeQuotas(Models\DescribePostpayFreeQuotasRequest $req) 查询后付费资源免费量
 * @method Models\DescribePostpayPackageFreeQuotasResponse DescribePostpayPackageFreeQuotas(Models\DescribePostpayPackageFreeQuotasRequest $req) 获取后付费免费额度
 * @method Models\DescribeQuotaDataResponse DescribeQuotaData(Models\DescribeQuotaDataRequest $req) 查询指定指标的配额使用量
 * @method Models\DescribeSmsQuotasResponse DescribeSmsQuotas(Models\DescribeSmsQuotasRequest $req) 查询后付费短信资源量
1 有免费包的返回SmsFreeQuota结构所有字段
2 没有免费包，有付费包，付费返回复用SmsFreeQuota结构，其中只有 TodayUsedQuota 字段有效
3 都没有返回为空数组
 * @method Models\DescribeSpecialCostItemsResponse DescribeSpecialCostItems(Models\DescribeSpecialCostItemsRequest $req) 查询环境1分钱抵扣信息
 * @method Models\DescribeStandaloneGatewayResponse DescribeStandaloneGateway(Models\DescribeStandaloneGatewayRequest $req) 本接口（DescribeStandaloneGateway）查询小租户网关套餐信息。
 * @method Models\DescribeStandaloneGatewayPackageResponse DescribeStandaloneGatewayPackage(Models\DescribeStandaloneGatewayPackageRequest $req) 本接口（DescribeStandaloneGatewayPackage）用于查询小租户网关套餐信息。
 * @method Models\DescribeUserActivityInfoResponse DescribeUserActivityInfo(Models\DescribeUserActivityInfoRequest $req) 查询用户活动信息
 * @method Models\DescribeWxCloudBaseRunEnvsResponse DescribeWxCloudBaseRunEnvs(Models\DescribeWxCloudBaseRunEnvsRequest $req) 查询微信云托管环境信息
 * @method Models\DescribeWxCloudBaseRunSubNetsResponse DescribeWxCloudBaseRunSubNets(Models\DescribeWxCloudBaseRunSubNetsRequest $req) 查询微信云托管子网
 * @method Models\DestroyEnvResponse DestroyEnv(Models\DestroyEnvRequest $req) 销毁环境
 * @method Models\DestroyStandaloneGatewayResponse DestroyStandaloneGateway(Models\DestroyStandaloneGatewayRequest $req) 本接口（DestroyStandaloneGateway）用于销毁小租户网关。
 * @method Models\DestroyStaticStoreResponse DestroyStaticStore(Models\DestroyStaticStoreRequest $req) 销毁静态托管资源，该接口创建异步销毁任务，资源最终状态可从DestroyStaticStore接口查看
 * @method Models\EstablishCloudBaseRunServerResponse EstablishCloudBaseRunServer(Models\EstablishCloudBaseRunServerRequest $req) 创建云应用服务
 * @method Models\EstablishWxGatewayRouteResponse EstablishWxGatewayRoute(Models\EstablishWxGatewayRouteRequest $req) 创建或修改安全网关路由
 * @method Models\FreezeCloudBaseRunServersResponse FreezeCloudBaseRunServers(Models\FreezeCloudBaseRunServersRequest $req) 批量冻结
 * @method Models\ModifyCloudBaseRunServerFlowConfResponse ModifyCloudBaseRunServerFlowConf(Models\ModifyCloudBaseRunServerFlowConfRequest $req) 修改容器内的版本流量配置
 * @method Models\ModifyCloudBaseRunServerVersionResponse ModifyCloudBaseRunServerVersion(Models\ModifyCloudBaseRunServerVersionRequest $req) 修改服务版本的副本数，环境变量
 * @method Models\ModifyClsTopicResponse ModifyClsTopic(Models\ModifyClsTopicRequest $req) 修改日志主题
 * @method Models\ModifyDatabaseACLResponse ModifyDatabaseACL(Models\ModifyDatabaseACLRequest $req) 修改数据库权限
 * @method Models\ModifyEndUserResponse ModifyEndUser(Models\ModifyEndUserRequest $req) 管理终端用户
 * @method Models\ModifyEnvResponse ModifyEnv(Models\ModifyEnvRequest $req) 更新环境信息
 * @method Models\ReinstateEnvResponse ReinstateEnv(Models\ReinstateEnvRequest $req) 针对已隔离的免费环境，可以通过本接口将其恢复访问。
 * @method Models\ReplaceActivityRecordResponse ReplaceActivityRecord(Models\ReplaceActivityRecordRequest $req) 更新活动详情
 * @method Models\RollUpdateCloudBaseRunServerVersionResponse RollUpdateCloudBaseRunServerVersion(Models\RollUpdateCloudBaseRunServerVersionRequest $req) 针对特定的版本，进行滚动更新
 * @method Models\SearchClsLogResponse SearchClsLog(Models\SearchClsLogRequest $req) 搜索CLS日志，TCB角色秘钥访问
 * @method Models\TurnOffStandaloneGatewayResponse TurnOffStandaloneGateway(Models\TurnOffStandaloneGatewayRequest $req) 本接口（TurnOffStandaloneGateway）用于关闭小租户网关。
 * @method Models\TurnOnStandaloneGatewayResponse TurnOnStandaloneGateway(Models\TurnOnStandaloneGatewayRequest $req) 本接口（TurnOnStandaloneGateway）用于开启小租户网关。
 * @method Models\UnfreezeCloudBaseRunServersResponse UnfreezeCloudBaseRunServers(Models\UnfreezeCloudBaseRunServersRequest $req) 批量解冻服务
 */

class TcbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcb";

    /**
     * @var string
     */
    protected $version = "2018-06-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcb")."\\"."V20180608\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
