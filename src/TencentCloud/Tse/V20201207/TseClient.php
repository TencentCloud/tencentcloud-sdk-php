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

namespace TencentCloud\Tse\V20201207;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tse\V20201207\Models as Models;

/**
 * @method Models\BindAutoScalerResourceStrategyToGroupsResponse BindAutoScalerResourceStrategyToGroups(Models\BindAutoScalerResourceStrategyToGroupsRequest $req) 弹性伸缩策略批量绑定网关分组
 * @method Models\CloseWafProtectionResponse CloseWafProtection(Models\CloseWafProtectionRequest $req) 关闭 WAF 防护
 * @method Models\CreateAutoScalerResourceStrategyResponse CreateAutoScalerResourceStrategy(Models\CreateAutoScalerResourceStrategyRequest $req) 创建弹性伸缩策略
 * @method Models\CreateCloudNativeAPIGatewayResponse CreateCloudNativeAPIGateway(Models\CreateCloudNativeAPIGatewayRequest $req) 创建云原生API网关实例
 * @method Models\CreateCloudNativeAPIGatewayCanaryRuleResponse CreateCloudNativeAPIGatewayCanaryRule(Models\CreateCloudNativeAPIGatewayCanaryRuleRequest $req) 创建云原生网关的灰度规则
 * @method Models\CreateCloudNativeAPIGatewayCertificateResponse CreateCloudNativeAPIGatewayCertificate(Models\CreateCloudNativeAPIGatewayCertificateRequest $req) 创建云原生网关证书
 * @method Models\CreateCloudNativeAPIGatewayPublicNetworkResponse CreateCloudNativeAPIGatewayPublicNetwork(Models\CreateCloudNativeAPIGatewayPublicNetworkRequest $req) 创建公网网络配置
 * @method Models\CreateCloudNativeAPIGatewayRouteResponse CreateCloudNativeAPIGatewayRoute(Models\CreateCloudNativeAPIGatewayRouteRequest $req) 创建云原生网关路由
 * @method Models\CreateCloudNativeAPIGatewayRouteRateLimitResponse CreateCloudNativeAPIGatewayRouteRateLimit(Models\CreateCloudNativeAPIGatewayRouteRateLimitRequest $req) 创建云原生网关限流插件(路由)
 * @method Models\CreateCloudNativeAPIGatewayServiceResponse CreateCloudNativeAPIGatewayService(Models\CreateCloudNativeAPIGatewayServiceRequest $req) 创建云原生网关服务
 * @method Models\CreateCloudNativeAPIGatewayServiceRateLimitResponse CreateCloudNativeAPIGatewayServiceRateLimit(Models\CreateCloudNativeAPIGatewayServiceRateLimitRequest $req) 创建云原生网关限流插件(服务)
 * @method Models\CreateConfigFileResponse CreateConfigFile(Models\CreateConfigFileRequest $req) 创建配置文件
 * @method Models\CreateConfigFileGroupResponse CreateConfigFileGroup(Models\CreateConfigFileGroupRequest $req) 创建服务治理中心配置文件组
 * @method Models\CreateEngineResponse CreateEngine(Models\CreateEngineRequest $req) 创建引擎实例
 * @method Models\CreateGovernanceAliasResponse CreateGovernanceAlias(Models\CreateGovernanceAliasRequest $req) 创建治理中心服务别名
 * @method Models\CreateGovernanceInstancesResponse CreateGovernanceInstances(Models\CreateGovernanceInstancesRequest $req) 创建服务实例
 * @method Models\CreateGovernanceNamespacesResponse CreateGovernanceNamespaces(Models\CreateGovernanceNamespacesRequest $req) 创建治理中心命名空间
 * @method Models\CreateGovernanceServicesResponse CreateGovernanceServices(Models\CreateGovernanceServicesRequest $req) 创建治理中心服务
 * @method Models\CreateNativeGatewayServerGroupResponse CreateNativeGatewayServerGroup(Models\CreateNativeGatewayServerGroupRequest $req) 创建云原生网关引擎分组
 * @method Models\CreateNativeGatewayServiceSourceResponse CreateNativeGatewayServiceSource(Models\CreateNativeGatewayServiceSourceRequest $req) 创建网关服务来源
 * @method Models\CreateOrModifyCloudNativeAPIGatewayIPRestrictionResponse CreateOrModifyCloudNativeAPIGatewayIPRestriction(Models\CreateOrModifyCloudNativeAPIGatewayIPRestrictionRequest $req) 创建或编辑云原生网关访问控制
 * @method Models\CreateOrUpdateConfigFileAndReleaseResponse CreateOrUpdateConfigFileAndRelease(Models\CreateOrUpdateConfigFileAndReleaseRequest $req) 创建或更新配置文件并发布配置
 * @method Models\CreateWafDomainsResponse CreateWafDomains(Models\CreateWafDomainsRequest $req) 新建 WAF 防护域名
 * @method Models\DeleteAutoScalerResourceStrategyResponse DeleteAutoScalerResourceStrategy(Models\DeleteAutoScalerResourceStrategyRequest $req) 删除弹性伸缩策略
 * @method Models\DeleteCloudNativeAPIGatewayResponse DeleteCloudNativeAPIGateway(Models\DeleteCloudNativeAPIGatewayRequest $req) 删除云原生API网关实例
 * @method Models\DeleteCloudNativeAPIGatewayCanaryRuleResponse DeleteCloudNativeAPIGatewayCanaryRule(Models\DeleteCloudNativeAPIGatewayCanaryRuleRequest $req) 删除云原生网关的灰度规则
 * @method Models\DeleteCloudNativeAPIGatewayCertificateResponse DeleteCloudNativeAPIGatewayCertificate(Models\DeleteCloudNativeAPIGatewayCertificateRequest $req) 删除云原生网关证书
 * @method Models\DeleteCloudNativeAPIGatewayIPRestrictionResponse DeleteCloudNativeAPIGatewayIPRestriction(Models\DeleteCloudNativeAPIGatewayIPRestrictionRequest $req) 删除云原生网关访问控制
 * @method Models\DeleteCloudNativeAPIGatewayPublicNetworkResponse DeleteCloudNativeAPIGatewayPublicNetwork(Models\DeleteCloudNativeAPIGatewayPublicNetworkRequest $req) 删除公网网络配置
 * @method Models\DeleteCloudNativeAPIGatewayRouteResponse DeleteCloudNativeAPIGatewayRoute(Models\DeleteCloudNativeAPIGatewayRouteRequest $req) 删除云原生网关路由
 * @method Models\DeleteCloudNativeAPIGatewayRouteRateLimitResponse DeleteCloudNativeAPIGatewayRouteRateLimit(Models\DeleteCloudNativeAPIGatewayRouteRateLimitRequest $req) 删除云原生网关的限流插件(路由)
 * @method Models\DeleteCloudNativeAPIGatewayServiceResponse DeleteCloudNativeAPIGatewayService(Models\DeleteCloudNativeAPIGatewayServiceRequest $req) 删除云原生网关服务
 * @method Models\DeleteCloudNativeAPIGatewayServiceRateLimitResponse DeleteCloudNativeAPIGatewayServiceRateLimit(Models\DeleteCloudNativeAPIGatewayServiceRateLimitRequest $req) 删除云原生网关的限流插件(服务)
 * @method Models\DeleteConfigFileGroupResponse DeleteConfigFileGroup(Models\DeleteConfigFileGroupRequest $req) 删除配置文件分组
 * @method Models\DeleteConfigFileReleasesResponse DeleteConfigFileReleases(Models\DeleteConfigFileReleasesRequest $req) 删除配置发布
 * @method Models\DeleteConfigFilesResponse DeleteConfigFiles(Models\DeleteConfigFilesRequest $req) 删除配置文件
 * @method Models\DeleteEngineResponse DeleteEngine(Models\DeleteEngineRequest $req) 删除引擎实例
 * @method Models\DeleteGovernanceAliasesResponse DeleteGovernanceAliases(Models\DeleteGovernanceAliasesRequest $req) 删除治理中心服务别名
 * @method Models\DeleteGovernanceInstancesResponse DeleteGovernanceInstances(Models\DeleteGovernanceInstancesRequest $req) 删除服务实例
 * @method Models\DeleteGovernanceInstancesByHostResponse DeleteGovernanceInstancesByHost(Models\DeleteGovernanceInstancesByHostRequest $req) 删除治理中心服务实例
 * @method Models\DeleteGovernanceNamespacesResponse DeleteGovernanceNamespaces(Models\DeleteGovernanceNamespacesRequest $req) 删除治理中心命名空间
 * @method Models\DeleteGovernanceServicesResponse DeleteGovernanceServices(Models\DeleteGovernanceServicesRequest $req) 删除治理中心服务
 * @method Models\DeleteNativeGatewayServerGroupResponse DeleteNativeGatewayServerGroup(Models\DeleteNativeGatewayServerGroupRequest $req) 删除网关实例分组
 * @method Models\DeleteNativeGatewayServiceSourceResponse DeleteNativeGatewayServiceSource(Models\DeleteNativeGatewayServiceSourceRequest $req) 删除网关服务来源实例
 * @method Models\DeleteWafDomainsResponse DeleteWafDomains(Models\DeleteWafDomainsRequest $req) 删除 WAF 防护域名
 * @method Models\DescribeAllConfigFileTemplatesResponse DescribeAllConfigFileTemplates(Models\DescribeAllConfigFileTemplatesRequest $req) 获取全量配置文件模板列表
 * @method Models\DescribeAutoScalerResourceStrategiesResponse DescribeAutoScalerResourceStrategies(Models\DescribeAutoScalerResourceStrategiesRequest $req) 查看弹性伸缩策略列表
 * @method Models\DescribeAutoScalerResourceStrategyBindingGroupsResponse DescribeAutoScalerResourceStrategyBindingGroups(Models\DescribeAutoScalerResourceStrategyBindingGroupsRequest $req) 查看弹性伸缩策略绑定的网关分组
 * @method Models\DescribeCloudNativeAPIGatewayResponse DescribeCloudNativeAPIGateway(Models\DescribeCloudNativeAPIGatewayRequest $req) 获取云原生API网关实例信息
 * @method Models\DescribeCloudNativeAPIGatewayCanaryRulesResponse DescribeCloudNativeAPIGatewayCanaryRules(Models\DescribeCloudNativeAPIGatewayCanaryRulesRequest $req) 查询云原生网关灰度规则列表
 * @method Models\DescribeCloudNativeAPIGatewayCertificateDetailsResponse DescribeCloudNativeAPIGatewayCertificateDetails(Models\DescribeCloudNativeAPIGatewayCertificateDetailsRequest $req) 查询云原生网关单个证书详情
 * @method Models\DescribeCloudNativeAPIGatewayCertificatesResponse DescribeCloudNativeAPIGatewayCertificates(Models\DescribeCloudNativeAPIGatewayCertificatesRequest $req) 查询云原生网关证书列表
 * @method Models\DescribeCloudNativeAPIGatewayConfigResponse DescribeCloudNativeAPIGatewayConfig(Models\DescribeCloudNativeAPIGatewayConfigRequest $req) 获取云原生API网关实例网络配置信息
 * @method Models\DescribeCloudNativeAPIGatewayIPRestrictionResponse DescribeCloudNativeAPIGatewayIPRestriction(Models\DescribeCloudNativeAPIGatewayIPRestrictionRequest $req) 查询云原生网关访问控制
 * @method Models\DescribeCloudNativeAPIGatewayInfoByIpResponse DescribeCloudNativeAPIGatewayInfoByIp(Models\DescribeCloudNativeAPIGatewayInfoByIpRequest $req) 根据公网IP查询云原生网关实例信息
 * @method Models\DescribeCloudNativeAPIGatewayNodesResponse DescribeCloudNativeAPIGatewayNodes(Models\DescribeCloudNativeAPIGatewayNodesRequest $req) 获取云原生网关节点列表
 * @method Models\DescribeCloudNativeAPIGatewayPortsResponse DescribeCloudNativeAPIGatewayPorts(Models\DescribeCloudNativeAPIGatewayPortsRequest $req) 获取云原生API网关实例端口信息
 * @method Models\DescribeCloudNativeAPIGatewayRouteRateLimitResponse DescribeCloudNativeAPIGatewayRouteRateLimit(Models\DescribeCloudNativeAPIGatewayRouteRateLimitRequest $req) 查询云原生网关的限流插件(路由)
 * @method Models\DescribeCloudNativeAPIGatewayRoutesResponse DescribeCloudNativeAPIGatewayRoutes(Models\DescribeCloudNativeAPIGatewayRoutesRequest $req) 查询云原生网关路由列表
 * @method Models\DescribeCloudNativeAPIGatewayServiceRateLimitResponse DescribeCloudNativeAPIGatewayServiceRateLimit(Models\DescribeCloudNativeAPIGatewayServiceRateLimitRequest $req) 查询云原生网关的限流插件(服务)
 * @method Models\DescribeCloudNativeAPIGatewayServicesResponse DescribeCloudNativeAPIGatewayServices(Models\DescribeCloudNativeAPIGatewayServicesRequest $req) 查询云原生网关服务列表
 * @method Models\DescribeCloudNativeAPIGatewayServicesLightResponse DescribeCloudNativeAPIGatewayServicesLight(Models\DescribeCloudNativeAPIGatewayServicesLightRequest $req) 轻量查询云原生网关服务列表
 * @method Models\DescribeCloudNativeAPIGatewayUpstreamResponse DescribeCloudNativeAPIGatewayUpstream(Models\DescribeCloudNativeAPIGatewayUpstreamRequest $req) 获取云原生网关服务详情下的Upstream列表
 * @method Models\DescribeCloudNativeAPIGatewaysResponse DescribeCloudNativeAPIGateways(Models\DescribeCloudNativeAPIGatewaysRequest $req) 获取云原生API网关实例列表
 * @method Models\DescribeConfigFileResponse DescribeConfigFile(Models\DescribeConfigFileRequest $req) 根据命名空间、组、名字查找配置文件
 * @method Models\DescribeConfigFileGroupsResponse DescribeConfigFileGroups(Models\DescribeConfigFileGroupsRequest $req) 根据条件分页查询配置文件组
 * @method Models\DescribeConfigFileReleaseResponse DescribeConfigFileRelease(Models\DescribeConfigFileReleaseRequest $req) 获取配置文件发布
 * @method Models\DescribeConfigFileReleaseHistoriesResponse DescribeConfigFileReleaseHistories(Models\DescribeConfigFileReleaseHistoriesRequest $req) 获取配置文件发布历史列表
 * @method Models\DescribeConfigFileReleaseVersionsResponse DescribeConfigFileReleaseVersions(Models\DescribeConfigFileReleaseVersionsRequest $req) 查询某个配置所有版本信息
 * @method Models\DescribeConfigFileReleasesResponse DescribeConfigFileReleases(Models\DescribeConfigFileReleasesRequest $req) 查询配置版本列表
 * @method Models\DescribeConfigFilesResponse DescribeConfigFiles(Models\DescribeConfigFilesRequest $req) 根据命名空间、组名、名称、标签查询配置文件列表
 * @method Models\DescribeConfigFilesByGroupResponse DescribeConfigFilesByGroup(Models\DescribeConfigFilesByGroupRequest $req) 根据group查询配置文件列表
 * @method Models\DescribeGovernanceAliasesResponse DescribeGovernanceAliases(Models\DescribeGovernanceAliasesRequest $req) 查询治理中心服务别名列表
 * @method Models\DescribeGovernanceInstancesResponse DescribeGovernanceInstances(Models\DescribeGovernanceInstancesRequest $req) 查询服务实例
 * @method Models\DescribeGovernanceNamespacesResponse DescribeGovernanceNamespaces(Models\DescribeGovernanceNamespacesRequest $req) 查询服务治理中心命名空间列表
 * @method Models\DescribeGovernanceServiceContractVersionsResponse DescribeGovernanceServiceContractVersions(Models\DescribeGovernanceServiceContractVersionsRequest $req) 查询服务下契约版本列表
 * @method Models\DescribeGovernanceServiceContractsResponse DescribeGovernanceServiceContracts(Models\DescribeGovernanceServiceContractsRequest $req) 查询服务契约定义列表
 * @method Models\DescribeGovernanceServicesResponse DescribeGovernanceServices(Models\DescribeGovernanceServicesRequest $req) 查询治理中心服务列表
 * @method Models\DescribeInstanceTagInfosResponse DescribeInstanceTagInfos(Models\DescribeInstanceTagInfosRequest $req) 查看实例的标签信息
 * @method Models\DescribeNacosReplicasResponse DescribeNacosReplicas(Models\DescribeNacosReplicasRequest $req) 查询Nacos类型引擎实例副本信息
 * @method Models\DescribeNacosServerInterfacesResponse DescribeNacosServerInterfaces(Models\DescribeNacosServerInterfacesRequest $req) 查询nacos服务接口列表
 * @method Models\DescribeNativeGatewayServerGroupsResponse DescribeNativeGatewayServerGroups(Models\DescribeNativeGatewayServerGroupsRequest $req) 查询云原生网关分组信息
 * @method Models\DescribeNativeGatewayServiceSourcesResponse DescribeNativeGatewayServiceSources(Models\DescribeNativeGatewayServiceSourcesRequest $req) 查询网关服务来源实例列表
 * @method Models\DescribeOneCloudNativeAPIGatewayServiceResponse DescribeOneCloudNativeAPIGatewayService(Models\DescribeOneCloudNativeAPIGatewayServiceRequest $req) 获取云原生网关服务详情
 * @method Models\DescribePublicAddressConfigResponse DescribePublicAddressConfig(Models\DescribePublicAddressConfigRequest $req) 查询公网地址信息
 * @method Models\DescribePublicNetworkResponse DescribePublicNetwork(Models\DescribePublicNetworkRequest $req) 查询云原生API网关实例公网详情
 * @method Models\DescribeSREInstanceAccessAddressResponse DescribeSREInstanceAccessAddress(Models\DescribeSREInstanceAccessAddressRequest $req) 查询引擎实例访问地址
 * @method Models\DescribeSREInstancesResponse DescribeSREInstances(Models\DescribeSREInstancesRequest $req) 用于查询引擎实例列表
 * @method Models\DescribeUpstreamHealthCheckConfigResponse DescribeUpstreamHealthCheckConfig(Models\DescribeUpstreamHealthCheckConfigRequest $req) 获取云原生网关服务健康检查配置
 * @method Models\DescribeWafDomainsResponse DescribeWafDomains(Models\DescribeWafDomainsRequest $req) 获取 WAF 防护域名
 * @method Models\DescribeWafProtectionResponse DescribeWafProtection(Models\DescribeWafProtectionRequest $req) 获取 WAF 防护状态
 * @method Models\DescribeZookeeperReplicasResponse DescribeZookeeperReplicas(Models\DescribeZookeeperReplicasRequest $req) 查询Zookeeper类型注册引擎实例副本信息
 * @method Models\DescribeZookeeperServerInterfacesResponse DescribeZookeeperServerInterfaces(Models\DescribeZookeeperServerInterfacesRequest $req) 查询zookeeper服务接口列表
 * @method Models\ModifyAutoScalerResourceStrategyResponse ModifyAutoScalerResourceStrategy(Models\ModifyAutoScalerResourceStrategyRequest $req) 更新弹性伸缩策略
 * @method Models\ModifyCloudNativeAPIGatewayResponse ModifyCloudNativeAPIGateway(Models\ModifyCloudNativeAPIGatewayRequest $req) 修改云原生API网关实例基础信息
 * @method Models\ModifyCloudNativeAPIGatewayCanaryRuleResponse ModifyCloudNativeAPIGatewayCanaryRule(Models\ModifyCloudNativeAPIGatewayCanaryRuleRequest $req) 修改云原生网关的灰度规则
 * @method Models\ModifyCloudNativeAPIGatewayCertificateResponse ModifyCloudNativeAPIGatewayCertificate(Models\ModifyCloudNativeAPIGatewayCertificateRequest $req) 更新云原生网关证书
 * @method Models\ModifyCloudNativeAPIGatewayRouteResponse ModifyCloudNativeAPIGatewayRoute(Models\ModifyCloudNativeAPIGatewayRouteRequest $req) 修改云原生网关路由
 * @method Models\ModifyCloudNativeAPIGatewayRouteRateLimitResponse ModifyCloudNativeAPIGatewayRouteRateLimit(Models\ModifyCloudNativeAPIGatewayRouteRateLimitRequest $req) 修改云原生网关限流插件(路由)
 * @method Models\ModifyCloudNativeAPIGatewayServiceResponse ModifyCloudNativeAPIGatewayService(Models\ModifyCloudNativeAPIGatewayServiceRequest $req) 修改云原生网关服务
 * @method Models\ModifyCloudNativeAPIGatewayServiceRateLimitResponse ModifyCloudNativeAPIGatewayServiceRateLimit(Models\ModifyCloudNativeAPIGatewayServiceRateLimitRequest $req) 修改云原生网关限流插件(服务)
 * @method Models\ModifyConfigFileGroupResponse ModifyConfigFileGroup(Models\ModifyConfigFileGroupRequest $req) 批量修改配置文件组
 * @method Models\ModifyConfigFilesResponse ModifyConfigFiles(Models\ModifyConfigFilesRequest $req) 修改配置文件
 * @method Models\ModifyConsoleNetworkResponse ModifyConsoleNetwork(Models\ModifyConsoleNetworkRequest $req) 修改网关实例Konga网络配置
 * @method Models\ModifyGovernanceAliasResponse ModifyGovernanceAlias(Models\ModifyGovernanceAliasRequest $req) 修改治理中心服务别名
 * @method Models\ModifyGovernanceInstancesResponse ModifyGovernanceInstances(Models\ModifyGovernanceInstancesRequest $req) 修改治理中心服务实例
 * @method Models\ModifyGovernanceNamespacesResponse ModifyGovernanceNamespaces(Models\ModifyGovernanceNamespacesRequest $req) 修改治理中心命名空间
 * @method Models\ModifyGovernanceServicesResponse ModifyGovernanceServices(Models\ModifyGovernanceServicesRequest $req) 修改治理中心服务
 * @method Models\ModifyNativeGatewayServerGroupResponse ModifyNativeGatewayServerGroup(Models\ModifyNativeGatewayServerGroupRequest $req) 修改云原生API网关实例分组基础信息
 * @method Models\ModifyNativeGatewayServiceSourceResponse ModifyNativeGatewayServiceSource(Models\ModifyNativeGatewayServiceSourceRequest $req) 修改网关服务来源
 * @method Models\ModifyNetworkAccessStrategyResponse ModifyNetworkAccessStrategy(Models\ModifyNetworkAccessStrategyRequest $req) 修改云原生API网关实例Kong访问策略，支持白名单或者黑名单。
 * @method Models\ModifyNetworkBasicInfoResponse ModifyNetworkBasicInfo(Models\ModifyNetworkBasicInfoRequest $req) 修改云原生API网关实例网络基本信息，例如带宽以及描述、规格升级，只支持修改客户端公网/内网的信息。
 * @method Models\ModifyUpstreamNodeStatusResponse ModifyUpstreamNodeStatus(Models\ModifyUpstreamNodeStatusRequest $req) 修改云原生网关上游实例节点健康状态
 * @method Models\OpenWafProtectionResponse OpenWafProtection(Models\OpenWafProtectionRequest $req) 开启 WAF 防护
 * @method Models\PublishConfigFilesResponse PublishConfigFiles(Models\PublishConfigFilesRequest $req) 发布配置文件
 * @method Models\RestartSREInstanceResponse RestartSREInstance(Models\RestartSREInstanceRequest $req) 重启微服务引擎实例
 * @method Models\RollbackConfigFileReleasesResponse RollbackConfigFileReleases(Models\RollbackConfigFileReleasesRequest $req) 回滚配置发布
 * @method Models\UnbindAutoScalerResourceStrategyFromGroupsResponse UnbindAutoScalerResourceStrategyFromGroups(Models\UnbindAutoScalerResourceStrategyFromGroupsRequest $req) 弹性伸缩策略批量解绑网关分组
 * @method Models\UpdateCloudNativeAPIGatewayCertificateInfoResponse UpdateCloudNativeAPIGatewayCertificateInfo(Models\UpdateCloudNativeAPIGatewayCertificateInfoRequest $req) 修改云原生网关证书信息
 * @method Models\UpdateCloudNativeAPIGatewaySpecResponse UpdateCloudNativeAPIGatewaySpec(Models\UpdateCloudNativeAPIGatewaySpecRequest $req) 修改云原生API网关实例的节点规格信息，例如节点扩缩容或者升降配
 * @method Models\UpdateEngineInternetAccessResponse UpdateEngineInternetAccess(Models\UpdateEngineInternetAccessRequest $req) 修改引擎公网访问配置
 * @method Models\UpdateUpstreamHealthCheckConfigResponse UpdateUpstreamHealthCheckConfig(Models\UpdateUpstreamHealthCheckConfigRequest $req) 更新云原生网关健康检查配置
 * @method Models\UpdateUpstreamTargetsResponse UpdateUpstreamTargets(Models\UpdateUpstreamTargetsRequest $req) 更新网关上游实例列表，仅支持IPList服务类型
 */

class TseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tse.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tse";

    /**
     * @var string
     */
    protected $version = "2020-12-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("tse")."\\"."V20201207\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
