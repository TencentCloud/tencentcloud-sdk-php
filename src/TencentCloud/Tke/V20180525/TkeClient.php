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

namespace TencentCloud\Tke\V20180525;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tke\V20180525\Models as Models;

/**
 * @method Models\AcquireClusterAdminRoleResponse AcquireClusterAdminRole(Models\AcquireClusterAdminRoleRequest $req) 通过此接口，可以获取集群的tke:admin的ClusterRole，即管理员角色，可以用于CAM侧高权限的用户，通过CAM策略给予子账户此接口权限，进而可以通过此接口直接获取到kubernetes集群内的管理员角色。
 * @method Models\AddClusterCIDRResponse AddClusterCIDR(Models\AddClusterCIDRRequest $req) 给GR集群增加可用的ClusterCIDR
 * @method Models\AddExistedInstancesResponse AddExistedInstances(Models\AddExistedInstancesRequest $req) 添加已经存在的实例到集群
 * @method Models\AddNodeToNodePoolResponse AddNodeToNodePool(Models\AddNodeToNodePoolRequest $req) 将集群内节点移入节点池
 * @method Models\AddVpcCniSubnetsResponse AddVpcCniSubnets(Models\AddVpcCniSubnetsRequest $req) 针对VPC-CNI模式的集群，增加集群容器网络可使用的子网
 * @method Models\CancelClusterReleaseResponse CancelClusterRelease(Models\CancelClusterReleaseRequest $req) 在应用市场中取消安装失败的应用
 * @method Models\CheckEdgeClusterCIDRResponse CheckEdgeClusterCIDR(Models\CheckEdgeClusterCIDRRequest $req) 检查边缘计算集群的CIDR是否冲突
 * @method Models\CheckInstancesUpgradeAbleResponse CheckInstancesUpgradeAble(Models\CheckInstancesUpgradeAbleRequest $req) 检查给定节点列表中哪些是可升级的
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建集群
 * @method Models\CreateClusterEndpointResponse CreateClusterEndpoint(Models\CreateClusterEndpointRequest $req) 创建集群访问端口
 * @method Models\CreateClusterEndpointVipResponse CreateClusterEndpointVip(Models\CreateClusterEndpointVipRequest $req) 创建托管集群外网访问端口（老的方式，仅支持托管集群外网端口）
 * @method Models\CreateClusterInstancesResponse CreateClusterInstances(Models\CreateClusterInstancesRequest $req) 扩展(新建)集群节点
 * @method Models\CreateClusterNodePoolResponse CreateClusterNodePool(Models\CreateClusterNodePoolRequest $req) 创建节点池
 * @method Models\CreateClusterReleaseResponse CreateClusterRelease(Models\CreateClusterReleaseRequest $req) 在应用市场中给集群创建应用
 * @method Models\CreateClusterRouteResponse CreateClusterRoute(Models\CreateClusterRouteRequest $req) 创建集群路由
 * @method Models\CreateClusterRouteTableResponse CreateClusterRouteTable(Models\CreateClusterRouteTableRequest $req) 创建集群路由表
 * @method Models\CreateClusterVirtualNodeResponse CreateClusterVirtualNode(Models\CreateClusterVirtualNodeRequest $req) 创建虚拟节点
 * @method Models\CreateClusterVirtualNodePoolResponse CreateClusterVirtualNodePool(Models\CreateClusterVirtualNodePoolRequest $req) 创建虚拟节点池
 * @method Models\CreateECMInstancesResponse CreateECMInstances(Models\CreateECMInstancesRequest $req) 创建边缘计算ECM机器
 * @method Models\CreateEKSClusterResponse CreateEKSCluster(Models\CreateEKSClusterRequest $req) 创建弹性集群
 * @method Models\CreateEKSContainerInstancesResponse CreateEKSContainerInstances(Models\CreateEKSContainerInstancesRequest $req) 创建容器实例
 * @method Models\CreateEdgeCVMInstancesResponse CreateEdgeCVMInstances(Models\CreateEdgeCVMInstancesRequest $req) 创建边缘容器CVM机器
 * @method Models\CreateEdgeLogConfigResponse CreateEdgeLogConfig(Models\CreateEdgeLogConfigRequest $req) 创建边缘集群日志采集配置
 * @method Models\CreateImageCacheResponse CreateImageCache(Models\CreateImageCacheRequest $req) 创建镜像缓存的接口。创建过程中，请勿删除EKSCI实例和云盘，否则镜像缓存将创建失败。
 * @method Models\CreatePrometheusAlertPolicyResponse CreatePrometheusAlertPolicy(Models\CreatePrometheusAlertPolicyRequest $req) 创建告警策略
 * @method Models\CreatePrometheusAlertRuleResponse CreatePrometheusAlertRule(Models\CreatePrometheusAlertRuleRequest $req) 创建告警规则
 * @method Models\CreatePrometheusClusterAgentResponse CreatePrometheusClusterAgent(Models\CreatePrometheusClusterAgentRequest $req) 与云监控融合的2.0实例关联集群
 * @method Models\CreatePrometheusConfigResponse CreatePrometheusConfig(Models\CreatePrometheusConfigRequest $req) 创建prometheus配置
 * @method Models\CreatePrometheusDashboardResponse CreatePrometheusDashboard(Models\CreatePrometheusDashboardRequest $req) 创建grafana监控面板
 * @method Models\CreatePrometheusGlobalNotificationResponse CreatePrometheusGlobalNotification(Models\CreatePrometheusGlobalNotificationRequest $req) 创建全局告警通知渠道
 * @method Models\CreatePrometheusRecordRuleYamlResponse CreatePrometheusRecordRuleYaml(Models\CreatePrometheusRecordRuleYamlRequest $req) 以Yaml的方式创建聚合规则
 * @method Models\CreatePrometheusTempResponse CreatePrometheusTemp(Models\CreatePrometheusTempRequest $req) 创建一个云原生Prometheus模板
 * @method Models\CreatePrometheusTemplateResponse CreatePrometheusTemplate(Models\CreatePrometheusTemplateRequest $req) 创建一个云原生Prometheus模板实例
 * @method Models\CreateTKEEdgeClusterResponse CreateTKEEdgeCluster(Models\CreateTKEEdgeClusterRequest $req) 创建边缘计算集群
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除集群(YUNAPI V3版本)
 * @method Models\DeleteClusterAsGroupsResponse DeleteClusterAsGroups(Models\DeleteClusterAsGroupsRequest $req) 删除集群伸缩组
 * @method Models\DeleteClusterEndpointResponse DeleteClusterEndpoint(Models\DeleteClusterEndpointRequest $req) 删除集群访问端口
 * @method Models\DeleteClusterEndpointVipResponse DeleteClusterEndpointVip(Models\DeleteClusterEndpointVipRequest $req) 删除托管集群外网访问端口（老的方式，仅支持托管集群外网端口）
 * @method Models\DeleteClusterInstancesResponse DeleteClusterInstances(Models\DeleteClusterInstancesRequest $req) 删除集群中的实例
 * @method Models\DeleteClusterNodePoolResponse DeleteClusterNodePool(Models\DeleteClusterNodePoolRequest $req) 删除节点池
 * @method Models\DeleteClusterRouteResponse DeleteClusterRoute(Models\DeleteClusterRouteRequest $req) 删除集群路由
 * @method Models\DeleteClusterRouteTableResponse DeleteClusterRouteTable(Models\DeleteClusterRouteTableRequest $req) 删除集群路由表
 * @method Models\DeleteClusterVirtualNodeResponse DeleteClusterVirtualNode(Models\DeleteClusterVirtualNodeRequest $req) 删除虚拟节点
 * @method Models\DeleteClusterVirtualNodePoolResponse DeleteClusterVirtualNodePool(Models\DeleteClusterVirtualNodePoolRequest $req) 删除虚拟节点池
 * @method Models\DeleteECMInstancesResponse DeleteECMInstances(Models\DeleteECMInstancesRequest $req) 删除ECM实例
 * @method Models\DeleteEKSClusterResponse DeleteEKSCluster(Models\DeleteEKSClusterRequest $req) 删除弹性集群(yunapiv3)
 * @method Models\DeleteEKSContainerInstancesResponse DeleteEKSContainerInstances(Models\DeleteEKSContainerInstancesRequest $req) 删除容器实例，可批量删除
 * @method Models\DeleteEdgeCVMInstancesResponse DeleteEdgeCVMInstances(Models\DeleteEdgeCVMInstancesRequest $req) 删除边缘容器CVM实例
 * @method Models\DeleteEdgeClusterInstancesResponse DeleteEdgeClusterInstances(Models\DeleteEdgeClusterInstancesRequest $req) 删除边缘计算实例
 * @method Models\DeleteImageCachesResponse DeleteImageCaches(Models\DeleteImageCachesRequest $req) 批量删除镜像缓存
 * @method Models\DeletePrometheusAlertPolicyResponse DeletePrometheusAlertPolicy(Models\DeletePrometheusAlertPolicyRequest $req) 删除2.0实例告警策略
 * @method Models\DeletePrometheusAlertRuleResponse DeletePrometheusAlertRule(Models\DeletePrometheusAlertRuleRequest $req) 删除告警规则
 * @method Models\DeletePrometheusClusterAgentResponse DeletePrometheusClusterAgent(Models\DeletePrometheusClusterAgentRequest $req) 解除TMP实例的集群关联
 * @method Models\DeletePrometheusConfigResponse DeletePrometheusConfig(Models\DeletePrometheusConfigRequest $req) 删除Prometheus配置，如果目标不存在，将返回成功
 * @method Models\DeletePrometheusRecordRuleYamlResponse DeletePrometheusRecordRuleYaml(Models\DeletePrometheusRecordRuleYamlRequest $req) 删除聚合实例
 * @method Models\DeletePrometheusTempResponse DeletePrometheusTemp(Models\DeletePrometheusTempRequest $req) 删除一个云原生Prometheus配置模板
 * @method Models\DeletePrometheusTempSyncResponse DeletePrometheusTempSync(Models\DeletePrometheusTempSyncRequest $req) 解除模板同步，这将会删除目标中该模板所生产的配置，针对V2版本实例
 * @method Models\DeletePrometheusTemplateResponse DeletePrometheusTemplate(Models\DeletePrometheusTemplateRequest $req) 删除一个云原生Prometheus配置模板
 * @method Models\DeletePrometheusTemplateSyncResponse DeletePrometheusTemplateSync(Models\DeletePrometheusTemplateSyncRequest $req) 取消模板同步，这将会删除目标中该模板所生产的配置
 * @method Models\DeleteTKEEdgeClusterResponse DeleteTKEEdgeCluster(Models\DeleteTKEEdgeClusterRequest $req) 删除边缘计算集群
 * @method Models\DescribeAvailableClusterVersionResponse DescribeAvailableClusterVersion(Models\DescribeAvailableClusterVersionRequest $req) 获取集群可以升级的所有版本
 * @method Models\DescribeAvailableTKEEdgeVersionResponse DescribeAvailableTKEEdgeVersion(Models\DescribeAvailableTKEEdgeVersionRequest $req) 边缘计算支持版本和k8s版本
 * @method Models\DescribeClusterAsGroupOptionResponse DescribeClusterAsGroupOption(Models\DescribeClusterAsGroupOptionRequest $req) 集群弹性伸缩配置
 * @method Models\DescribeClusterAsGroupsResponse DescribeClusterAsGroups(Models\DescribeClusterAsGroupsRequest $req) 集群关联的伸缩组列表
 * @method Models\DescribeClusterAuthenticationOptionsResponse DescribeClusterAuthenticationOptions(Models\DescribeClusterAuthenticationOptionsRequest $req) 查看集群认证配置
 * @method Models\DescribeClusterCommonNamesResponse DescribeClusterCommonNames(Models\DescribeClusterCommonNamesRequest $req) 获取指定子账户在RBAC授权模式中对应kube-apiserver客户端证书的CommonName字段，如果没有客户端证书，将会签发一个，此接口有最大传入子账户数量上限，当前为50
 * @method Models\DescribeClusterControllersResponse DescribeClusterControllers(Models\DescribeClusterControllersRequest $req) 用于查询Kubernetes的各个原生控制器是否开启
 * @method Models\DescribeClusterEndpointStatusResponse DescribeClusterEndpointStatus(Models\DescribeClusterEndpointStatusRequest $req) 查询集群访问端口状态(独立集群开启内网/外网访问，托管集群支持开启内网访问)
 * @method Models\DescribeClusterEndpointVipStatusResponse DescribeClusterEndpointVipStatus(Models\DescribeClusterEndpointVipStatusRequest $req) 查询集群开启端口流程状态(仅支持托管集群外网端口)
 * @method Models\DescribeClusterEndpointsResponse DescribeClusterEndpoints(Models\DescribeClusterEndpointsRequest $req) 获取集群的访问地址，包括内网地址，外网地址，外网域名，外网访问安全策略
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) 查询集群下节点实例信息
 * @method Models\DescribeClusterKubeconfigResponse DescribeClusterKubeconfig(Models\DescribeClusterKubeconfigRequest $req) 获取集群的kubeconfig文件，不同子账户获取自己的kubeconfig文件，该文件中有每个子账户自己的kube-apiserver的客户端证书，默认首次调此接口时候创建客户端证书，时效20年，未授予任何权限，如果是集群所有者或者主账户，则默认是cluster-admin权限。
 * @method Models\DescribeClusterLevelAttributeResponse DescribeClusterLevelAttribute(Models\DescribeClusterLevelAttributeRequest $req) 获取集群规模
 * @method Models\DescribeClusterLevelChangeRecordsResponse DescribeClusterLevelChangeRecords(Models\DescribeClusterLevelChangeRecordsRequest $req) 查询集群变配记录
 * @method Models\DescribeClusterNodePoolDetailResponse DescribeClusterNodePoolDetail(Models\DescribeClusterNodePoolDetailRequest $req) 查询节点池详情
 * @method Models\DescribeClusterNodePoolsResponse DescribeClusterNodePools(Models\DescribeClusterNodePoolsRequest $req) 查询节点池列表
 * @method Models\DescribeClusterPendingReleasesResponse DescribeClusterPendingReleases(Models\DescribeClusterPendingReleasesRequest $req) 在应用市场中查询正在安装中的应用列表
 * @method Models\DescribeClusterReleaseDetailsResponse DescribeClusterReleaseDetails(Models\DescribeClusterReleaseDetailsRequest $req) 查询通过应用市场安装的某个应用详情
 * @method Models\DescribeClusterReleaseHistoryResponse DescribeClusterReleaseHistory(Models\DescribeClusterReleaseHistoryRequest $req) 查询集群在应用市场中某个已安装应用的版本历史
 * @method Models\DescribeClusterReleasesResponse DescribeClusterReleases(Models\DescribeClusterReleasesRequest $req) 查询集群在应用市场中已安装应用列表
 * @method Models\DescribeClusterRouteTablesResponse DescribeClusterRouteTables(Models\DescribeClusterRouteTablesRequest $req) 查询集群路由表
 * @method Models\DescribeClusterRoutesResponse DescribeClusterRoutes(Models\DescribeClusterRoutesRequest $req) 查询集群路由
 * @method Models\DescribeClusterSecurityResponse DescribeClusterSecurity(Models\DescribeClusterSecurityRequest $req) 集群的密钥信息
 * @method Models\DescribeClusterStatusResponse DescribeClusterStatus(Models\DescribeClusterStatusRequest $req) 查看集群状态列表
 * @method Models\DescribeClusterVirtualNodeResponse DescribeClusterVirtualNode(Models\DescribeClusterVirtualNodeRequest $req) 查看虚拟节点列表
 * @method Models\DescribeClusterVirtualNodePoolsResponse DescribeClusterVirtualNodePools(Models\DescribeClusterVirtualNodePoolsRequest $req) 查看虚拟节点池列表
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群列表
 * @method Models\DescribeECMInstancesResponse DescribeECMInstances(Models\DescribeECMInstancesRequest $req) 获取ECM实例相关信息
 * @method Models\DescribeEKSClusterCredentialResponse DescribeEKSClusterCredential(Models\DescribeEKSClusterCredentialRequest $req) 获取弹性容器集群的接入认证信息
 * @method Models\DescribeEKSClustersResponse DescribeEKSClusters(Models\DescribeEKSClustersRequest $req) 查询弹性集群列表
 * @method Models\DescribeEKSContainerInstanceEventResponse DescribeEKSContainerInstanceEvent(Models\DescribeEKSContainerInstanceEventRequest $req) 查询容器实例的事件
 * @method Models\DescribeEKSContainerInstanceRegionsResponse DescribeEKSContainerInstanceRegions(Models\DescribeEKSContainerInstanceRegionsRequest $req) 查询容器实例支持的地域
 * @method Models\DescribeEKSContainerInstancesResponse DescribeEKSContainerInstances(Models\DescribeEKSContainerInstancesRequest $req) 查询容器实例
 * @method Models\DescribeEdgeAvailableExtraArgsResponse DescribeEdgeAvailableExtraArgs(Models\DescribeEdgeAvailableExtraArgsRequest $req) 查询边缘容器集群可用的自定义参数
 * @method Models\DescribeEdgeCVMInstancesResponse DescribeEdgeCVMInstances(Models\DescribeEdgeCVMInstancesRequest $req) 获取边缘容器CVM实例相关信息
 * @method Models\DescribeEdgeClusterExtraArgsResponse DescribeEdgeClusterExtraArgs(Models\DescribeEdgeClusterExtraArgsRequest $req) 查询边缘集群自定义参数
 * @method Models\DescribeEdgeClusterInstancesResponse DescribeEdgeClusterInstances(Models\DescribeEdgeClusterInstancesRequest $req) 查询边缘计算集群的节点信息
 * @method Models\DescribeEdgeClusterUpgradeInfoResponse DescribeEdgeClusterUpgradeInfo(Models\DescribeEdgeClusterUpgradeInfoRequest $req) 可以查询边缘集群升级信息，包含可以升级的组件，当前升级状态和升级错误信息
 * @method Models\DescribeEdgeLogSwitchesResponse DescribeEdgeLogSwitches(Models\DescribeEdgeLogSwitchesRequest $req) 获取事件、审计和日志的状态接口
 * @method Models\DescribeEksContainerInstanceLogResponse DescribeEksContainerInstanceLog(Models\DescribeEksContainerInstanceLogRequest $req) 查询容器实例中容器日志
 * @method Models\DescribeEnableVpcCniProgressResponse DescribeEnableVpcCniProgress(Models\DescribeEnableVpcCniProgressRequest $req) 本接口用于查询开启vpc-cni模式的任务进度
 * @method Models\DescribeExistedInstancesResponse DescribeExistedInstances(Models\DescribeExistedInstancesRequest $req) 查询已经存在的节点，判断是否可以加入集群
 * @method Models\DescribeExternalClusterSpecResponse DescribeExternalClusterSpec(Models\DescribeExternalClusterSpecRequest $req) 获取导入第三方集群YAML定义
 * @method Models\DescribeImageCachesResponse DescribeImageCaches(Models\DescribeImageCachesRequest $req) 查询镜像缓存信息接口
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) 获取镜像信息
 * @method Models\DescribePrometheusAgentInstancesResponse DescribePrometheusAgentInstances(Models\DescribePrometheusAgentInstancesRequest $req) 获取关联目标集群的实例列表
 * @method Models\DescribePrometheusAgentsResponse DescribePrometheusAgents(Models\DescribePrometheusAgentsRequest $req) 获取被关联集群列表
 * @method Models\DescribePrometheusAlertHistoryResponse DescribePrometheusAlertHistory(Models\DescribePrometheusAlertHistoryRequest $req) 获取告警历史
 * @method Models\DescribePrometheusAlertPolicyResponse DescribePrometheusAlertPolicy(Models\DescribePrometheusAlertPolicyRequest $req) 获取2.0实例告警策略列表
 * @method Models\DescribePrometheusAlertRuleResponse DescribePrometheusAlertRule(Models\DescribePrometheusAlertRuleRequest $req) 获取告警规则列表
 * @method Models\DescribePrometheusClusterAgentsResponse DescribePrometheusClusterAgents(Models\DescribePrometheusClusterAgentsRequest $req) 获取TMP实例关联集群列表
 * @method Models\DescribePrometheusConfigResponse DescribePrometheusConfig(Models\DescribePrometheusConfigRequest $req) 拉取Prometheus配置
 * @method Models\DescribePrometheusGlobalConfigResponse DescribePrometheusGlobalConfig(Models\DescribePrometheusGlobalConfigRequest $req) 获得实例级别抓取配置
 * @method Models\DescribePrometheusGlobalNotificationResponse DescribePrometheusGlobalNotification(Models\DescribePrometheusGlobalNotificationRequest $req) 查询全局告警通知渠道
 * @method Models\DescribePrometheusInstanceResponse DescribePrometheusInstance(Models\DescribePrometheusInstanceRequest $req) 获取实例详细信息
 * @method Models\DescribePrometheusInstanceInitStatusResponse DescribePrometheusInstanceInitStatus(Models\DescribePrometheusInstanceInitStatusRequest $req) 获取2.0实例初始化任务状态
 * @method Models\DescribePrometheusInstancesOverviewResponse DescribePrometheusInstancesOverview(Models\DescribePrometheusInstancesOverviewRequest $req) 获取与云监控融合实例列表
 * @method Models\DescribePrometheusOverviewsResponse DescribePrometheusOverviews(Models\DescribePrometheusOverviewsRequest $req) 获取实例列表
 * @method Models\DescribePrometheusRecordRulesResponse DescribePrometheusRecordRules(Models\DescribePrometheusRecordRulesRequest $req) 获取聚合规则列表，包含关联集群内crd资源创建的record rule
 * @method Models\DescribePrometheusTargetsResponse DescribePrometheusTargets(Models\DescribePrometheusTargetsRequest $req) 获取targets信息
 * @method Models\DescribePrometheusTempResponse DescribePrometheusTemp(Models\DescribePrometheusTempRequest $req) 拉取模板列表，默认模板将总是在最前面
 * @method Models\DescribePrometheusTempSyncResponse DescribePrometheusTempSync(Models\DescribePrometheusTempSyncRequest $req) 获取模板关联实例信息，针对V2版本实例
 * @method Models\DescribePrometheusTemplateSyncResponse DescribePrometheusTemplateSync(Models\DescribePrometheusTemplateSyncRequest $req) 获取模板同步信息
 * @method Models\DescribePrometheusTemplatesResponse DescribePrometheusTemplates(Models\DescribePrometheusTemplatesRequest $req) 拉取模板列表，默认模板将总是在最前面
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 获取容器服务支持的所有地域
 * @method Models\DescribeResourceUsageResponse DescribeResourceUsage(Models\DescribeResourceUsageRequest $req) 获取集群资源使用量
 * @method Models\DescribeRouteTableConflictsResponse DescribeRouteTableConflicts(Models\DescribeRouteTableConflictsRequest $req) 查询路由表冲突列表
 * @method Models\DescribeTKEEdgeClusterCredentialResponse DescribeTKEEdgeClusterCredential(Models\DescribeTKEEdgeClusterCredentialRequest $req) 获取边缘计算集群的认证信息
 * @method Models\DescribeTKEEdgeClusterStatusResponse DescribeTKEEdgeClusterStatus(Models\DescribeTKEEdgeClusterStatusRequest $req) 获取边缘计算集群的当前状态以及过程信息
 * @method Models\DescribeTKEEdgeClustersResponse DescribeTKEEdgeClusters(Models\DescribeTKEEdgeClustersRequest $req) 查询边缘集群列表
 * @method Models\DescribeTKEEdgeExternalKubeconfigResponse DescribeTKEEdgeExternalKubeconfig(Models\DescribeTKEEdgeExternalKubeconfigRequest $req) 获取边缘计算外部访问的kubeconfig
 * @method Models\DescribeTKEEdgeScriptResponse DescribeTKEEdgeScript(Models\DescribeTKEEdgeScriptRequest $req) 获取边缘脚本链接，此接口用于添加第三方节点，通过下载脚本从而将节点添加到边缘集群。
 * @method Models\DescribeVersionsResponse DescribeVersions(Models\DescribeVersionsRequest $req) 获取集群版本信息
 * @method Models\DescribeVpcCniPodLimitsResponse DescribeVpcCniPodLimits(Models\DescribeVpcCniPodLimitsRequest $req) 本接口查询当前用户和地域在指定可用区下的机型可支持的最大 TKE VPC-CNI 网络模式的 Pod 数量
 * @method Models\DisableClusterAuditResponse DisableClusterAudit(Models\DisableClusterAuditRequest $req) 关闭集群审计
 * @method Models\DisableClusterDeletionProtectionResponse DisableClusterDeletionProtection(Models\DisableClusterDeletionProtectionRequest $req) 关闭集群删除保护
 * @method Models\DisableEventPersistenceResponse DisableEventPersistence(Models\DisableEventPersistenceRequest $req) 关闭事件持久化功能
 * @method Models\DisableVpcCniNetworkTypeResponse DisableVpcCniNetworkType(Models\DisableVpcCniNetworkTypeRequest $req) 提供给附加了VPC-CNI能力的Global-Route集群关闭VPC-CNI
 * @method Models\DrainClusterVirtualNodeResponse DrainClusterVirtualNode(Models\DrainClusterVirtualNodeRequest $req) 驱逐虚拟节点
 * @method Models\EnableClusterAuditResponse EnableClusterAudit(Models\EnableClusterAuditRequest $req) 开启集群审计
 * @method Models\EnableClusterDeletionProtectionResponse EnableClusterDeletionProtection(Models\EnableClusterDeletionProtectionRequest $req) 启用集群删除保护
 * @method Models\EnableEventPersistenceResponse EnableEventPersistence(Models\EnableEventPersistenceRequest $req) 开启事件持久化功能
 * @method Models\EnableVpcCniNetworkTypeResponse EnableVpcCniNetworkType(Models\EnableVpcCniNetworkTypeRequest $req) GR集群可以通过本接口附加vpc-cni容器网络插件，开启vpc-cni容器网络能力
 * @method Models\ForwardApplicationRequestV3Response ForwardApplicationRequestV3(Models\ForwardApplicationRequestV3Request $req) 操作TKE集群的addon
 * @method Models\ForwardTKEEdgeApplicationRequestV3Response ForwardTKEEdgeApplicationRequestV3(Models\ForwardTKEEdgeApplicationRequestV3Request $req) 操作TKEEdge集群的addon
 * @method Models\GetClusterLevelPriceResponse GetClusterLevelPrice(Models\GetClusterLevelPriceRequest $req) 获取集群规模价格
 * @method Models\GetMostSuitableImageCacheResponse GetMostSuitableImageCache(Models\GetMostSuitableImageCacheRequest $req) 根据镜像列表，查询匹配的镜像缓存
 * @method Models\GetTkeAppChartListResponse GetTkeAppChartList(Models\GetTkeAppChartListRequest $req) 获取TKE支持的App列表
 * @method Models\GetUpgradeInstanceProgressResponse GetUpgradeInstanceProgress(Models\GetUpgradeInstanceProgressRequest $req) 获得节点升级当前的进度
 * @method Models\InstallEdgeLogAgentResponse InstallEdgeLogAgent(Models\InstallEdgeLogAgentRequest $req) 在tke@edge集群的边缘节点上安装日志采集组件
 * @method Models\InstallLogAgentResponse InstallLogAgent(Models\InstallLogAgentRequest $req) 在TKE集群中安装CLS日志采集组件
 * @method Models\ModifyClusterAsGroupAttributeResponse ModifyClusterAsGroupAttribute(Models\ModifyClusterAsGroupAttributeRequest $req) 修改集群伸缩组属性
 * @method Models\ModifyClusterAsGroupOptionAttributeResponse ModifyClusterAsGroupOptionAttribute(Models\ModifyClusterAsGroupOptionAttributeRequest $req) 修改集群弹性伸缩属性
 * @method Models\ModifyClusterAttributeResponse ModifyClusterAttribute(Models\ModifyClusterAttributeRequest $req) 修改集群属性
 * @method Models\ModifyClusterAuthenticationOptionsResponse ModifyClusterAuthenticationOptions(Models\ModifyClusterAuthenticationOptionsRequest $req) 修改集群认证配置
 * @method Models\ModifyClusterEndpointSPResponse ModifyClusterEndpointSP(Models\ModifyClusterEndpointSPRequest $req) 修改托管集群外网端口的安全策略（老的方式，仅支持托管集群外网端口）
 * @method Models\ModifyClusterNodePoolResponse ModifyClusterNodePool(Models\ModifyClusterNodePoolRequest $req) 编辑节点池
 * @method Models\ModifyClusterVirtualNodePoolResponse ModifyClusterVirtualNodePool(Models\ModifyClusterVirtualNodePoolRequest $req) 修改虚拟节点池
 * @method Models\ModifyNodePoolDesiredCapacityAboutAsgResponse ModifyNodePoolDesiredCapacityAboutAsg(Models\ModifyNodePoolDesiredCapacityAboutAsgRequest $req) 修改节点池关联伸缩组的期望实例数
 * @method Models\ModifyNodePoolInstanceTypesResponse ModifyNodePoolInstanceTypes(Models\ModifyNodePoolInstanceTypesRequest $req) 修改节点池的机型配置
 * @method Models\ModifyPrometheusAgentExternalLabelsResponse ModifyPrometheusAgentExternalLabels(Models\ModifyPrometheusAgentExternalLabelsRequest $req) 修改被关联集群的external labels
 * @method Models\ModifyPrometheusAlertPolicyResponse ModifyPrometheusAlertPolicy(Models\ModifyPrometheusAlertPolicyRequest $req) 修改2.0实例告警策略
 * @method Models\ModifyPrometheusAlertRuleResponse ModifyPrometheusAlertRule(Models\ModifyPrometheusAlertRuleRequest $req) 修改告警规则
 * @method Models\ModifyPrometheusConfigResponse ModifyPrometheusConfig(Models\ModifyPrometheusConfigRequest $req) 修改prometheus配置，如果配置项不存在，则会新增
 * @method Models\ModifyPrometheusGlobalNotificationResponse ModifyPrometheusGlobalNotification(Models\ModifyPrometheusGlobalNotificationRequest $req) 修改全局告警通知渠道
 * @method Models\ModifyPrometheusRecordRuleYamlResponse ModifyPrometheusRecordRuleYaml(Models\ModifyPrometheusRecordRuleYamlRequest $req) 通过yaml的方式修改Prometheus聚合实例
 * @method Models\ModifyPrometheusTempResponse ModifyPrometheusTemp(Models\ModifyPrometheusTempRequest $req) 修改模板内容
 * @method Models\ModifyPrometheusTemplateResponse ModifyPrometheusTemplate(Models\ModifyPrometheusTemplateRequest $req) 修改模板内容
 * @method Models\RemoveNodeFromNodePoolResponse RemoveNodeFromNodePool(Models\RemoveNodeFromNodePoolRequest $req) 移出节点池节点，但保留在集群内
 * @method Models\RestartEKSContainerInstancesResponse RestartEKSContainerInstances(Models\RestartEKSContainerInstancesRequest $req) 重启弹性容器实例，支持批量操作
 * @method Models\RollbackClusterReleaseResponse RollbackClusterRelease(Models\RollbackClusterReleaseRequest $req) 在应用市场中集群回滚应用至某个历史版本
 * @method Models\RunPrometheusInstanceResponse RunPrometheusInstance(Models\RunPrometheusInstanceRequest $req) 初始化TMP实例，开启集成中心时调用
 * @method Models\ScaleInClusterMasterResponse ScaleInClusterMaster(Models\ScaleInClusterMasterRequest $req) 缩容独立集群master节点
 * @method Models\ScaleOutClusterMasterResponse ScaleOutClusterMaster(Models\ScaleOutClusterMasterRequest $req) 扩容独立集群master节点
 * @method Models\SetNodePoolNodeProtectionResponse SetNodePoolNodeProtection(Models\SetNodePoolNodeProtectionRequest $req) 仅能设置节点池中处于伸缩组的节点
 * @method Models\SyncPrometheusTempResponse SyncPrometheusTemp(Models\SyncPrometheusTempRequest $req) 同步模板到实例或者集群，针对V2版本实例
 * @method Models\SyncPrometheusTemplateResponse SyncPrometheusTemplate(Models\SyncPrometheusTemplateRequest $req) 同步模板到实例或者集群
 * @method Models\UninstallClusterReleaseResponse UninstallClusterRelease(Models\UninstallClusterReleaseRequest $req) 在应用市场中集群删除某个应用
 * @method Models\UninstallEdgeLogAgentResponse UninstallEdgeLogAgent(Models\UninstallEdgeLogAgentRequest $req) 从tke@edge集群边缘节点上卸载日志采集组件
 * @method Models\UninstallLogAgentResponse UninstallLogAgent(Models\UninstallLogAgentRequest $req) 从TKE集群中卸载CLS日志采集组件
 * @method Models\UpdateClusterVersionResponse UpdateClusterVersion(Models\UpdateClusterVersionRequest $req) 升级集群 Master 组件到指定版本
 * @method Models\UpdateEKSClusterResponse UpdateEKSCluster(Models\UpdateEKSClusterRequest $req) 修改弹性集群名称等属性 
 * @method Models\UpdateEKSContainerInstanceResponse UpdateEKSContainerInstance(Models\UpdateEKSContainerInstanceRequest $req) 更新容器实例
 * @method Models\UpdateEdgeClusterVersionResponse UpdateEdgeClusterVersion(Models\UpdateEdgeClusterVersionRequest $req) 升级边缘集群组件到指定版本，此版本为TKEEdge专用版本。
 * @method Models\UpdateImageCacheResponse UpdateImageCache(Models\UpdateImageCacheRequest $req) 更新镜像缓存接口
 * @method Models\UpdateTKEEdgeClusterResponse UpdateTKEEdgeCluster(Models\UpdateTKEEdgeClusterRequest $req) 修改边缘计算集群名称等属性 
 * @method Models\UpgradeClusterInstancesResponse UpgradeClusterInstances(Models\UpgradeClusterInstancesRequest $req) 给集群的一批work节点进行升级
 * @method Models\UpgradeClusterReleaseResponse UpgradeClusterRelease(Models\UpgradeClusterReleaseRequest $req) 升级集群中已安装的应用
 */

class TkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tke.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tke";

    /**
     * @var string
     */
    protected $version = "2018-05-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("tke")."\\"."V20180525\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
