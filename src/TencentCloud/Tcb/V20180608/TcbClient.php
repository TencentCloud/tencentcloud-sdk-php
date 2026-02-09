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

namespace TencentCloud\Tcb\V20180608;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcb\V20180608\Models as Models;

/**
 * @method Models\BindCloudBaseAccessDomainResponse BindCloudBaseAccessDomain(Models\BindCloudBaseAccessDomainRequest $req) 绑定云开发自定义域名，用于云接入和静态托管
 * @method Models\BindCloudBaseGWDomainResponse BindCloudBaseGWDomain(Models\BindCloudBaseGWDomainRequest $req) 绑定自定义域名
 * @method Models\BindEnvGatewayResponse BindEnvGateway(Models\BindEnvGatewayRequest $req) 绑定另外一个环境下的网关，callContainer请求可以访问到该网关
 * @method Models\CheckTcbServiceResponse CheckTcbService(Models\CheckTcbServiceRequest $req) 检查是否开通Tcb服务
 * @method Models\CommonServiceAPIResponse CommonServiceAPI(Models\CommonServiceAPIRequest $req) TCB云API统一入口
 * @method Models\CreateAndDeployCloudBaseProjectResponse CreateAndDeployCloudBaseProject(Models\CreateAndDeployCloudBaseProjectRequest $req) 创建云开发项目
 * @method Models\CreateAuthDomainResponse CreateAuthDomain(Models\CreateAuthDomainRequest $req) 增加安全域名
 * @method Models\CreateBillDealResponse CreateBillDeal(Models\CreateBillDealRequest $req) 创建云开发产品计费订单
 * @method Models\CreateCloudBaseGWAPIResponse CreateCloudBaseGWAPI(Models\CreateCloudBaseGWAPIRequest $req) 创建云开发网关API
 * @method Models\CreateCloudBaseRunResourceResponse CreateCloudBaseRunResource(Models\CreateCloudBaseRunResourceRequest $req) 开通容器托管的资源，包括集群创建，VPC配置，异步任务创建，镜像托管，Coding等，查看创建结果需要根据DescribeCloudBaseRunResource接口来查看
 * @method Models\CreateCloudBaseRunServerVersionResponse CreateCloudBaseRunServerVersion(Models\CreateCloudBaseRunServerVersionRequest $req) 创建服务版本
 * @method Models\CreateHostingDomainResponse CreateHostingDomain(Models\CreateHostingDomainRequest $req) 创建托管域名
 * @method Models\CreateMySQLResponse CreateMySQL(Models\CreateMySQLRequest $req) 开通Mysql
 * @method Models\CreatePostpayPackageResponse CreatePostpayPackage(Models\CreatePostpayPackageRequest $req) 开通后付费资源
 * @method Models\CreateStaticStoreResponse CreateStaticStore(Models\CreateStaticStoreRequest $req) 创建静态托管资源，包括COS和CDN，异步任务创建，查看创建结果需要根据DescribeStaticStore接口来查看
 * @method Models\CreateTableResponse CreateTable(Models\CreateTableRequest $req) 本接口(CreateTable)用于创建表，支持创建capped类型集合，暂时不支持分片表
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 创建tcb用户
 * @method Models\DeleteCloudBaseGWAPIResponse DeleteCloudBaseGWAPI(Models\DeleteCloudBaseGWAPIRequest $req) 删除网关API
 * @method Models\DeleteCloudBaseGWDomainResponse DeleteCloudBaseGWDomain(Models\DeleteCloudBaseGWDomainRequest $req) 删除网关域名
 * @method Models\DeleteCloudBaseProjectLatestVersionResponse DeleteCloudBaseProjectLatestVersion(Models\DeleteCloudBaseProjectLatestVersionRequest $req) 删除云项目
 * @method Models\DeleteCloudBaseRunServerVersionResponse DeleteCloudBaseRunServerVersion(Models\DeleteCloudBaseRunServerVersionRequest $req) 删除服务版本
 * @method Models\DeleteGatewayVersionResponse DeleteGatewayVersion(Models\DeleteGatewayVersionRequest $req) 删除网关某版本
 * @method Models\DeleteTableResponse DeleteTable(Models\DeleteTableRequest $req) 本接口(DeleteTable)用于删除表，删除表后表中数据将会被删除且无法恢复，请谨慎操作
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) 删除tcb用户
 * @method Models\DeleteWxGatewayRouteResponse DeleteWxGatewayRoute(Models\DeleteWxGatewayRouteRequest $req) 删除安全网关路由
 * @method Models\DescribeActivityRecordResponse DescribeActivityRecord(Models\DescribeActivityRecordRequest $req) 查询活动记录信息
 * @method Models\DescribeAuthDomainsResponse DescribeAuthDomains(Models\DescribeAuthDomainsRequest $req) 获取安全域名列表
 * @method Models\DescribeBaasPackageListResponse DescribeBaasPackageList(Models\DescribeBaasPackageListRequest $req) 获取新套餐列表，含详情，如果传了PackageId，则只获取指定套餐详情
 * @method Models\DescribeBillingInfoResponse DescribeBillingInfo(Models\DescribeBillingInfoRequest $req) 获取计费相关信息
 * @method Models\DescribeCbrServerVersionResponse DescribeCbrServerVersion(Models\DescribeCbrServerVersionRequest $req) 查询服务版本的详情
 * @method Models\DescribeCloudBaseBuildServiceResponse DescribeCloudBaseBuildService(Models\DescribeCloudBaseBuildServiceRequest $req) 获取云托管代码上传url
 * @method Models\DescribeCloudBaseGWAPIResponse DescribeCloudBaseGWAPI(Models\DescribeCloudBaseGWAPIRequest $req) 获取网关API列表
 * @method Models\DescribeCloudBaseGWServiceResponse DescribeCloudBaseGWService(Models\DescribeCloudBaseGWServiceRequest $req) 获取网关服务
 * @method Models\DescribeCloudBaseProjectLatestVersionListResponse DescribeCloudBaseProjectLatestVersionList(Models\DescribeCloudBaseProjectLatestVersionListRequest $req) 获取云开发项目列表
 * @method Models\DescribeCloudBaseProjectVersionListResponse DescribeCloudBaseProjectVersionList(Models\DescribeCloudBaseProjectVersionListRequest $req) 云项目部署列表
 * @method Models\DescribeCloudBaseRunResourceResponse DescribeCloudBaseRunResource(Models\DescribeCloudBaseRunResourceRequest $req) 查看容器托管的集群状态
 * @method Models\DescribeCloudBaseRunResourceForExtendResponse DescribeCloudBaseRunResourceForExtend(Models\DescribeCloudBaseRunResourceForExtendRequest $req) 查看容器托管的集群状态扩展使用
 * @method Models\DescribeCloudBaseRunServerResponse DescribeCloudBaseRunServer(Models\DescribeCloudBaseRunServerRequest $req) 查询单个服务的详情，版本以及详情
 * @method Models\DescribeCloudBaseRunServerVersionResponse DescribeCloudBaseRunServerVersion(Models\DescribeCloudBaseRunServerVersionRequest $req) 查询服务版本的详情，CPU和MEM  请使用CPUSize和MemSize
 * @method Models\DescribeCloudBaseRunVersionResponse DescribeCloudBaseRunVersion(Models\DescribeCloudBaseRunVersionRequest $req) 查询服务版本详情(新)
 * @method Models\DescribeCloudBaseRunVersionSnapshotResponse DescribeCloudBaseRunVersionSnapshot(Models\DescribeCloudBaseRunVersionSnapshotRequest $req) 查询版本历史
 * @method Models\DescribeCreateMySQLResultResponse DescribeCreateMySQLResult(Models\DescribeCreateMySQLResultRequest $req) 查询开通Mysql结果
 * @method Models\DescribeCurveDataResponse DescribeCurveData(Models\DescribeCurveDataRequest $req) 根据用户传入的指标, 拉取一段时间内的监控数据。
 * @method Models\DescribeDatabaseACLResponse DescribeDatabaseACL(Models\DescribeDatabaseACLRequest $req) 获取数据库权限
 * @method Models\DescribeDownloadFileResponse DescribeDownloadFile(Models\DescribeDownloadFileRequest $req) 获取下载文件信息
 * @method Models\DescribeEnvAccountCircleResponse DescribeEnvAccountCircle(Models\DescribeEnvAccountCircleRequest $req) 查询环境计费周期
 * @method Models\DescribeEnvDealRegionResponse DescribeEnvDealRegion(Models\DescribeEnvDealRegionRequest $req) 获取环境下单地域
 * @method Models\DescribeEnvFreeQuotaResponse DescribeEnvFreeQuota(Models\DescribeEnvFreeQuotaRequest $req) 查询后付费免费配额信息
 * @method Models\DescribeEnvLimitResponse DescribeEnvLimit(Models\DescribeEnvLimitRequest $req) 查询环境个数上限
 * @method Models\DescribeEnvPostpaidDeductResponse DescribeEnvPostpaidDeduct(Models\DescribeEnvPostpaidDeductRequest $req) 查询环境后付费计费详情
 * @method Models\DescribeEnvsResponse DescribeEnvs(Models\DescribeEnvsRequest $req) 获取环境列表，含环境下的各个资源信息。尤其是各资源的唯一标识，是请求各资源的关键参数
 * @method Models\DescribeExtensionUploadInfoResponse DescribeExtensionUploadInfo(Models\DescribeExtensionUploadInfoRequest $req) 描述扩展上传文件信息
 * @method Models\DescribeExtraPkgBillingInfoResponse DescribeExtraPkgBillingInfo(Models\DescribeExtraPkgBillingInfoRequest $req) 获取增值包计费相关信息
 * @method Models\DescribeGatewayCurveDataResponse DescribeGatewayCurveData(Models\DescribeGatewayCurveDataRequest $req) 查询网关监控数据
 * @method Models\DescribeGatewayVersionsResponse DescribeGatewayVersions(Models\DescribeGatewayVersionsRequest $req) 查询网关版本信息
暂不鉴权
 * @method Models\DescribeGraphDataResponse DescribeGraphData(Models\DescribeGraphDataRequest $req) 根据用户传入的指标, 拉取一段时间内的监控数据。
 * @method Models\DescribeHostingDomainTaskResponse DescribeHostingDomainTask(Models\DescribeHostingDomainTaskRequest $req) 查询静态托管域名任务状态
 * @method Models\DescribeMySQLClusterDetailResponse DescribeMySQLClusterDetail(Models\DescribeMySQLClusterDetailRequest $req) 销毁Mysql
 * @method Models\DescribeMySQLTaskStatusResponse DescribeMySQLTaskStatus(Models\DescribeMySQLTaskStatusRequest $req) 查询Mysql任务状态
 * @method Models\DescribePostpayFreeQuotasResponse DescribePostpayFreeQuotas(Models\DescribePostpayFreeQuotasRequest $req) 查询后付费资源免费量
 * @method Models\DescribePostpayPackageFreeQuotasResponse DescribePostpayPackageFreeQuotas(Models\DescribePostpayPackageFreeQuotasRequest $req) 获取后付费免费额度
 * @method Models\DescribeQuotaDataResponse DescribeQuotaData(Models\DescribeQuotaDataRequest $req) 查询指定指标的配额使用量
 * @method Models\DescribeSafeRuleResponse DescribeSafeRule(Models\DescribeSafeRuleRequest $req) 查询数据库安全规则
 * @method Models\DescribeSmsQuotasResponse DescribeSmsQuotas(Models\DescribeSmsQuotasRequest $req) 查询后付费短信资源量
1 有免费包的返回SmsFreeQuota结构所有字段
2 没有免费包，有付费包，付费返回复用SmsFreeQuota结构，其中只有 TodayUsedQuota 字段有效
3 都没有返回为空数组
 * @method Models\DescribeSpecialCostItemsResponse DescribeSpecialCostItems(Models\DescribeSpecialCostItemsRequest $req) 查询环境1分钱抵扣信息
 * @method Models\DescribeStaticStoreResponse DescribeStaticStore(Models\DescribeStaticStoreRequest $req) 查看当前环境下静态托管资源信息，根据返回结果判断静态资源的状态
 * @method Models\DescribeTableResponse DescribeTable(Models\DescribeTableRequest $req) 查询表的相关信息，包括索引等信息
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 本接口(ListTables)用于查询所有表信息，包括表名、表中数据条数、表中数据量、索引个数及索引的大小等
 * @method Models\DescribeUserActivityInfoResponse DescribeUserActivityInfo(Models\DescribeUserActivityInfoRequest $req) 查询用户活动信息
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) 查询tcb用户列表
 * @method Models\DescribeWxGatewayRoutesResponse DescribeWxGatewayRoutes(Models\DescribeWxGatewayRoutesRequest $req) 查看安全网关路由
 * @method Models\DescribeWxGatewaysResponse DescribeWxGateways(Models\DescribeWxGatewaysRequest $req) 查看安全网关
 * @method Models\DestroyEnvResponse DestroyEnv(Models\DestroyEnvRequest $req) 销毁环境
 * @method Models\DestroyMySQLResponse DestroyMySQL(Models\DestroyMySQLRequest $req) 销毁Mysql
 * @method Models\DestroyStaticStoreResponse DestroyStaticStore(Models\DestroyStaticStoreRequest $req) 销毁静态托管资源，该接口创建异步销毁任务，资源最终状态可从DestroyStaticStore接口查看
 * @method Models\EditAuthConfigResponse EditAuthConfig(Models\EditAuthConfigRequest $req) 修改登录配置
 * @method Models\EstablishCloudBaseRunServerResponse EstablishCloudBaseRunServer(Models\EstablishCloudBaseRunServerRequest $req) 创建云应用服务
 * @method Models\EstablishWxGatewayRouteResponse EstablishWxGatewayRoute(Models\EstablishWxGatewayRouteRequest $req) 创建或修改安全网关路由
 * @method Models\FreezeCloudBaseRunServersResponse FreezeCloudBaseRunServers(Models\FreezeCloudBaseRunServersRequest $req) 批量冻结
 * @method Models\ListTablesResponse ListTables(Models\ListTablesRequest $req) 本接口(ListTables)用于查询所有表信息，包括表名、表中数据条数、表中数据量、索引个数及索引的大小等
 * @method Models\ModifyCloudBaseGWAPIResponse ModifyCloudBaseGWAPI(Models\ModifyCloudBaseGWAPIRequest $req) 修改云开发网关API
 * @method Models\ModifyCloudBaseRunServerFlowConfResponse ModifyCloudBaseRunServerFlowConf(Models\ModifyCloudBaseRunServerFlowConfRequest $req) 修改容器内的版本流量配置
 * @method Models\ModifyCloudBaseRunServerVersionResponse ModifyCloudBaseRunServerVersion(Models\ModifyCloudBaseRunServerVersionRequest $req) 修改服务版本的副本数，环境变量
 * @method Models\ModifyClsTopicResponse ModifyClsTopic(Models\ModifyClsTopicRequest $req) 修改日志主题
 * @method Models\ModifyDatabaseACLResponse ModifyDatabaseACL(Models\ModifyDatabaseACLRequest $req) 修改数据库权限
 * @method Models\ModifyEnvResponse ModifyEnv(Models\ModifyEnvRequest $req) 更新环境信息
 * @method Models\ModifyGatewayVersionTrafficResponse ModifyGatewayVersionTraffic(Models\ModifyGatewayVersionTrafficRequest $req) 设置网关版本的流量比例
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 修改tcb用户
 * @method Models\ReinstateEnvResponse ReinstateEnv(Models\ReinstateEnvRequest $req) 针对已隔离的免费环境，可以通过本接口将其恢复访问。
 * @method Models\ReplaceActivityRecordResponse ReplaceActivityRecord(Models\ReplaceActivityRecordRequest $req) 更新活动详情
 * @method Models\RunSqlResponse RunSql(Models\RunSqlRequest $req) 执行SQL语句
 * @method Models\SearchClsLogResponse SearchClsLog(Models\SearchClsLogRequest $req) 搜索CLS日志，TCB角色密钥访问
 * @method Models\UnfreezeCloudBaseRunServersResponse UnfreezeCloudBaseRunServers(Models\UnfreezeCloudBaseRunServersRequest $req) 批量解冻服务
 * @method Models\UpdateTableResponse UpdateTable(Models\UpdateTableRequest $req) 本接口(UpdateTable)用于修改表信息，当前可以支持创建和删除索引
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
