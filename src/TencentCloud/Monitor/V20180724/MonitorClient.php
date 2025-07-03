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

namespace TencentCloud\Monitor\V20180724;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Monitor\V20180724\Models as Models;

/**
 * @method Models\BindPrometheusManagedGrafanaResponse BindPrometheusManagedGrafana(Models\BindPrometheusManagedGrafanaRequest $req) 绑定 Grafana 可视化服务实例
 * @method Models\BindingPolicyObjectResponse BindingPolicyObject(Models\BindingPolicyObjectRequest $req) 将告警策略绑定到特定对象
 * @method Models\BindingPolicyTagResponse BindingPolicyTag(Models\BindingPolicyTagRequest $req) 策略绑定标签
 * @method Models\CleanGrafanaInstanceResponse CleanGrafanaInstance(Models\CleanGrafanaInstanceRequest $req) 强制销毁 Grafana 实例
 * @method Models\CreateAlarmNoticeResponse CreateAlarmNotice(Models\CreateAlarmNoticeRequest $req) 创建通知模板
 * @method Models\CreateAlarmPolicyResponse CreateAlarmPolicy(Models\CreateAlarmPolicyRequest $req) 创建告警策略
 * @method Models\CreateAlarmShieldResponse CreateAlarmShield(Models\CreateAlarmShieldRequest $req) 创建告警屏蔽规则
 * @method Models\CreateAlertRuleResponse CreateAlertRule(Models\CreateAlertRuleRequest $req) 创建 Prometheus 告警规则。

请注意，**告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description**，，请参考 [Prometheus Rule更多配置请参考](https://prometheus.io/docs/prometheus/latest/configuration/alerting_rules/)。
 * @method Models\CreateConditionsTemplateResponse CreateConditionsTemplate(Models\CreateConditionsTemplateRequest $req) 创建告警条件模板
 * @method Models\CreateExporterIntegrationResponse CreateExporterIntegration(Models\CreateExporterIntegrationRequest $req) 创建集成中心 exporter 集成，因集成较多，建议控制台创建集成。(前提：已授权创建托管 EKS 集群，验证方式：1. 控制台界面确认，未提示授权则表示已授权创建；2. 通过 DescribePrometheusInstanceInitStatus 接口查询集群状态，如果托管集群不存在，可通过 RunPrometheusInstance 接口创建)
 * @method Models\CreateExternalClusterResponse CreateExternalCluster(Models\CreateExternalClusterRequest $req) 注册外部集群到云上 TMP 实例
 * @method Models\CreateGrafanaInstanceResponse CreateGrafanaInstance(Models\CreateGrafanaInstanceRequest $req) 本接口（CreateGrafanaInstance）用于创建 Grafana 包年包月实例，默认基础版、到期自动续费、不可使用代金券。
 * @method Models\CreateGrafanaIntegrationResponse CreateGrafanaIntegration(Models\CreateGrafanaIntegrationRequest $req) 创建 Grafana 集成配置，其中 Prometheus 集成不通过该接口创建，可参考 BindPrometheusManagedGrafana 接口
 * @method Models\CreateGrafanaNotificationChannelResponse CreateGrafanaNotificationChannel(Models\CreateGrafanaNotificationChannelRequest $req) 创建 Grafana 告警通道
 * @method Models\CreatePolicyGroupResponse CreatePolicyGroup(Models\CreatePolicyGroupRequest $req) 增加策略组
 * @method Models\CreatePrometheusAgentResponse CreatePrometheusAgent(Models\CreatePrometheusAgentRequest $req) 创建 Prometheus CVM Agent
 * @method Models\CreatePrometheusAlertGroupResponse CreatePrometheusAlertGroup(Models\CreatePrometheusAlertGroupRequest $req) 创建Prometheus告警规则分组

告警分组中可包含多条告警规则，分组内告警消息通过告警分组的通知模板发送。
支持单个告警分组下分别创建启用/禁用的告警规则。
 * @method Models\CreatePrometheusAlertPolicyResponse CreatePrometheusAlertPolicy(Models\CreatePrometheusAlertPolicyRequest $req) 创建 Prometheus 告警策略(将逐步废弃，建议使用 CreatePrometheusAlertGroup 创建告警策略)
 * @method Models\CreatePrometheusClusterAgentResponse CreatePrometheusClusterAgent(Models\CreatePrometheusClusterAgentRequest $req) 与腾讯云可观测融合的2.0实例关联集群
 * @method Models\CreatePrometheusConfigResponse CreatePrometheusConfig(Models\CreatePrometheusConfigRequest $req) 创建prometheus配置
 * @method Models\CreatePrometheusGlobalNotificationResponse CreatePrometheusGlobalNotification(Models\CreatePrometheusGlobalNotificationRequest $req) 创建全局告警通知渠道。集群内创建的告警规则如果未配置告警通知渠道，默认走全局告警通知渠道（建议在控制台创建告警，集群内创建告警不易维护）
 * @method Models\CreatePrometheusMultiTenantInstancePostPayModeResponse CreatePrometheusMultiTenantInstancePostPayMode(Models\CreatePrometheusMultiTenantInstancePostPayModeRequest $req) 创建按量 Prometheus 实例，根据用量收费实例
 * @method Models\CreatePrometheusRecordRuleYamlResponse CreatePrometheusRecordRuleYaml(Models\CreatePrometheusRecordRuleYamlRequest $req) 以Yaml的方式创建聚合规则
 * @method Models\CreatePrometheusScrapeJobResponse CreatePrometheusScrapeJob(Models\CreatePrometheusScrapeJobRequest $req) 创建 Prometheus Agent 抓取任务
 * @method Models\CreatePrometheusTempResponse CreatePrometheusTemp(Models\CreatePrometheusTempRequest $req) 创建一个云原生Prometheus模板
 * @method Models\CreateRecordingRuleResponse CreateRecordingRule(Models\CreateRecordingRuleRequest $req) 创建 Prometheus 的预聚合规则
 * @method Models\CreateSSOAccountResponse CreateSSOAccount(Models\CreateSSOAccountRequest $req) Grafana实例授权其他腾讯云用户
 * @method Models\CreateServiceDiscoveryResponse CreateServiceDiscovery(Models\CreateServiceDiscoveryRequest $req) 在腾讯云容器服务下创建 Prometheus 服务发现。
<p>注意：前提条件，已经通过 Prometheus 控制台集成了对应的腾讯云容器服务，具体请参考
<a href="https://cloud.tencent.com/document/product/248/48859" target="_blank">Agent 安装</a>。</p>
 * @method Models\DeleteAlarmNoticesResponse DeleteAlarmNotices(Models\DeleteAlarmNoticesRequest $req) 删除告警通知模板
 * @method Models\DeleteAlarmPolicyResponse DeleteAlarmPolicy(Models\DeleteAlarmPolicyRequest $req) 删除告警策略
 * @method Models\DeleteAlarmShieldsResponse DeleteAlarmShields(Models\DeleteAlarmShieldsRequest $req) 删除告警屏蔽规则
 * @method Models\DeleteAlertRulesResponse DeleteAlertRules(Models\DeleteAlertRulesRequest $req) 批量删除 Prometheus 报警规则
 * @method Models\DeleteExporterIntegrationResponse DeleteExporterIntegration(Models\DeleteExporterIntegrationRequest $req) 删除集成中心 exporter 集成
 * @method Models\DeleteGrafanaInstanceResponse DeleteGrafanaInstance(Models\DeleteGrafanaInstanceRequest $req) 本接口（DeleteGrafanaInstance）用于 Grafana 包年包月实例的退费，调用后实例处于停服状态，不可使用，7天后自动销毁。
 * @method Models\DeleteGrafanaIntegrationResponse DeleteGrafanaIntegration(Models\DeleteGrafanaIntegrationRequest $req) 删除 Grafana 集成配置
 * @method Models\DeleteGrafanaNotificationChannelResponse DeleteGrafanaNotificationChannel(Models\DeleteGrafanaNotificationChannelRequest $req) 删除 Grafana 告警通道
 * @method Models\DeletePolicyGroupResponse DeletePolicyGroup(Models\DeletePolicyGroupRequest $req) 删除告警策略组
 * @method Models\DeletePrometheusAlertGroupsResponse DeletePrometheusAlertGroups(Models\DeletePrometheusAlertGroupsRequest $req) 删除Prometheus告警规则分组
 * @method Models\DeletePrometheusAlertPolicyResponse DeletePrometheusAlertPolicy(Models\DeletePrometheusAlertPolicyRequest $req) 删除2.0实例告警策略
 * @method Models\DeletePrometheusClusterAgentResponse DeletePrometheusClusterAgent(Models\DeletePrometheusClusterAgentRequest $req) 解除TMP实例的集群关联
 * @method Models\DeletePrometheusConfigResponse DeletePrometheusConfig(Models\DeletePrometheusConfigRequest $req) 删除Prometheus配置，如果目标不存在，将返回成功
 * @method Models\DeletePrometheusRecordRuleYamlResponse DeletePrometheusRecordRuleYaml(Models\DeletePrometheusRecordRuleYamlRequest $req) 删除聚合实例
 * @method Models\DeletePrometheusScrapeJobsResponse DeletePrometheusScrapeJobs(Models\DeletePrometheusScrapeJobsRequest $req) 删除 Prometheus Agent 抓取任务
 * @method Models\DeletePrometheusTempResponse DeletePrometheusTemp(Models\DeletePrometheusTempRequest $req) 删除一个云原生Prometheus配置模板
 * @method Models\DeletePrometheusTempSyncResponse DeletePrometheusTempSync(Models\DeletePrometheusTempSyncRequest $req) 解除模板同步，这将会删除目标中该模板所生产的配置，针对V2版本实例
 * @method Models\DeleteRecordingRulesResponse DeleteRecordingRules(Models\DeleteRecordingRulesRequest $req) 批量删除 Prometheus 预聚合规则
 * @method Models\DeleteSSOAccountResponse DeleteSSOAccount(Models\DeleteSSOAccountRequest $req) Grafana可视化服务 删除授权用户
 * @method Models\DeleteServiceDiscoveryResponse DeleteServiceDiscovery(Models\DeleteServiceDiscoveryRequest $req) 删除在腾讯云容器服务下创建的 Prometheus 服务发现。
<p>注意：前提条件，已经通过 Prometheus 控制台集成了对应的腾讯云容器服务，具体请参考
<a href="https://cloud.tencent.com/document/product/248/48859" target="_blank">Agent 安装</a>。</p>
 * @method Models\DescribeAccidentEventListResponse DescribeAccidentEventList(Models\DescribeAccidentEventListRequest $req) 获取平台事件列表
 * @method Models\DescribeAlarmEventsResponse DescribeAlarmEvents(Models\DescribeAlarmEventsRequest $req) 查询告警事件列表
 * @method Models\DescribeAlarmHistoriesResponse DescribeAlarmHistories(Models\DescribeAlarmHistoriesRequest $req) 查询告警历史

请注意，**如果使用子用户进行告警历史的查询，只能查询到被授权项目下的告警历史**，或不区分项目的产品的告警历史。如何对子账户授予项目的权限，请参考 [访问管理-项目与标签](https://cloud.tencent.com/document/product/598/32738)。
 * @method Models\DescribeAlarmMetricsResponse DescribeAlarmMetrics(Models\DescribeAlarmMetricsRequest $req) 查询告警指标列表
 * @method Models\DescribeAlarmNoticeResponse DescribeAlarmNotice(Models\DescribeAlarmNoticeRequest $req) 查询单个通知模板的详情
 * @method Models\DescribeAlarmNoticeCallbacksResponse DescribeAlarmNoticeCallbacks(Models\DescribeAlarmNoticeCallbacksRequest $req) 获取告警通知模板所有回调URL
 * @method Models\DescribeAlarmNoticesResponse DescribeAlarmNotices(Models\DescribeAlarmNoticesRequest $req) 查询通知模板列表
 * @method Models\DescribeAlarmPoliciesResponse DescribeAlarmPolicies(Models\DescribeAlarmPoliciesRequest $req) 查询告警策略列表
 * @method Models\DescribeAlarmPolicyResponse DescribeAlarmPolicy(Models\DescribeAlarmPolicyRequest $req) 获取单个告警策略详情
 * @method Models\DescribeAlarmSmsQuotaResponse DescribeAlarmSmsQuota(Models\DescribeAlarmSmsQuotaRequest $req) 获取告警短信配额
 * @method Models\DescribeAlertRulesResponse DescribeAlertRules(Models\DescribeAlertRulesRequest $req) Prometheus 报警规则查询接口
 * @method Models\DescribeAllNamespacesResponse DescribeAllNamespaces(Models\DescribeAllNamespacesRequest $req) 查询所有名字空间
 * @method Models\DescribeBaseMetricsResponse DescribeBaseMetrics(Models\DescribeBaseMetricsRequest $req) 获取基础指标属性
 * @method Models\DescribeBasicAlarmListResponse DescribeBasicAlarmList(Models\DescribeBasicAlarmListRequest $req) 获取基础告警列表
 * @method Models\DescribeBindingPolicyObjectListResponse DescribeBindingPolicyObjectList(Models\DescribeBindingPolicyObjectListRequest $req) 获取已绑定对象列表
 * @method Models\DescribeClusterAgentCreatingProgressResponse DescribeClusterAgentCreatingProgress(Models\DescribeClusterAgentCreatingProgressRequest $req) 获取prom实例中集群详细的关联状态
 * @method Models\DescribeConditionsTemplateListResponse DescribeConditionsTemplateList(Models\DescribeConditionsTemplateListRequest $req) 获取条件模板列表
 * @method Models\DescribeDNSConfigResponse DescribeDNSConfig(Models\DescribeDNSConfigRequest $req) 列出 Grafana DNS 配置
 * @method Models\DescribeExporterIntegrationsResponse DescribeExporterIntegrations(Models\DescribeExporterIntegrationsRequest $req) 查询集成中心 exporter 集成列表
 * @method Models\DescribeExternalClusterRegisterCommandResponse DescribeExternalClusterRegisterCommand(Models\DescribeExternalClusterRegisterCommandRequest $req) 查看外部集群注册命令
 * @method Models\DescribeExternalClusterUninstallCommandResponse DescribeExternalClusterUninstallCommand(Models\DescribeExternalClusterUninstallCommandRequest $req) 查看外部集群 Agent 卸载命令
 * @method Models\DescribeGrafanaChannelsResponse DescribeGrafanaChannels(Models\DescribeGrafanaChannelsRequest $req) 列出 Grafana 所有告警通道
 * @method Models\DescribeGrafanaConfigResponse DescribeGrafanaConfig(Models\DescribeGrafanaConfigRequest $req) 列出 Grafana 的设置，即 grafana.ini 文件内容
 * @method Models\DescribeGrafanaEnvironmentsResponse DescribeGrafanaEnvironments(Models\DescribeGrafanaEnvironmentsRequest $req) 列出 Grafana 环境变量
 * @method Models\DescribeGrafanaInstancesResponse DescribeGrafanaInstances(Models\DescribeGrafanaInstancesRequest $req) 列出用户所有的 Grafana 服务
 * @method Models\DescribeGrafanaIntegrationsResponse DescribeGrafanaIntegrations(Models\DescribeGrafanaIntegrationsRequest $req) 列出 Grafana 已安装的集成
 * @method Models\DescribeGrafanaNotificationChannelsResponse DescribeGrafanaNotificationChannels(Models\DescribeGrafanaNotificationChannelsRequest $req) 列出 Grafana 告警通道
 * @method Models\DescribeGrafanaWhiteListResponse DescribeGrafanaWhiteList(Models\DescribeGrafanaWhiteListRequest $req) 列出 Grafana 白名单
 * @method Models\DescribeInstalledPluginsResponse DescribeInstalledPlugins(Models\DescribeInstalledPluginsRequest $req) 列出实例已安装的插件
 * @method Models\DescribeMonitorResourceInfoResponse DescribeMonitorResourceInfo(Models\DescribeMonitorResourceInfoRequest $req) 获取资源消耗页概览
 * @method Models\DescribeMonitorTypesResponse DescribeMonitorTypes(Models\DescribeMonitorTypesRequest $req) 腾讯云可观测平台支持多种类型的监控，此接口列出支持的所有类型
 * @method Models\DescribePhoneAlarmFlowTotalCountResponse DescribePhoneAlarmFlowTotalCount(Models\DescribePhoneAlarmFlowTotalCountRequest $req) 查询周期内电话流水总数
 * @method Models\DescribePluginOverviewsResponse DescribePluginOverviews(Models\DescribePluginOverviewsRequest $req) 列出可安装的所有 Grafana 插件。
 * @method Models\DescribePolicyConditionListResponse DescribePolicyConditionList(Models\DescribePolicyConditionListRequest $req) 获取基础告警策略条件
 * @method Models\DescribePolicyGroupInfoResponse DescribePolicyGroupInfo(Models\DescribePolicyGroupInfoRequest $req) 获取基础策略组详情
 * @method Models\DescribePolicyGroupListResponse DescribePolicyGroupList(Models\DescribePolicyGroupListRequest $req) 获取基础策略告警组列表
 * @method Models\DescribePolicyObjectCountResponse DescribePolicyObjectCount(Models\DescribePolicyObjectCountRequest $req) 查询策略组在每个地域下面绑定的对象数统计
 * @method Models\DescribeProductEventListResponse DescribeProductEventList(Models\DescribeProductEventListRequest $req) 分页获取产品事件的列表
 * @method Models\DescribeProductListResponse DescribeProductList(Models\DescribeProductListRequest $req) 查询腾讯云可观测平台云产品列表，支持云服务器CVM、云数据库、云消息队列、负载均衡、容器服务、专线等云产品。
 * @method Models\DescribePrometheusAgentInstancesResponse DescribePrometheusAgentInstances(Models\DescribePrometheusAgentInstancesRequest $req) 获取关联目标集群的实例列表
 * @method Models\DescribePrometheusAgentsResponse DescribePrometheusAgents(Models\DescribePrometheusAgentsRequest $req) 列出 Prometheus CVM Agent
 * @method Models\DescribePrometheusAlertGroupsResponse DescribePrometheusAlertGroups(Models\DescribePrometheusAlertGroupsRequest $req) 查询给定prometheus下的告警分组
 * @method Models\DescribePrometheusAlertPolicyResponse DescribePrometheusAlertPolicy(Models\DescribePrometheusAlertPolicyRequest $req) 获取2.0实例告警策略列表
 * @method Models\DescribePrometheusClusterAgentsResponse DescribePrometheusClusterAgents(Models\DescribePrometheusClusterAgentsRequest $req) 获取TMP实例关联集群列表
 * @method Models\DescribePrometheusConfigResponse DescribePrometheusConfig(Models\DescribePrometheusConfigRequest $req) 拉取Prometheus配置
 * @method Models\DescribePrometheusGlobalConfigResponse DescribePrometheusGlobalConfig(Models\DescribePrometheusGlobalConfigRequest $req) 获得实例级别抓取配置
 * @method Models\DescribePrometheusGlobalNotificationResponse DescribePrometheusGlobalNotification(Models\DescribePrometheusGlobalNotificationRequest $req) 查询全局告警通知渠道
 * @method Models\DescribePrometheusInstanceDetailResponse DescribePrometheusInstanceDetail(Models\DescribePrometheusInstanceDetailRequest $req) 获取TMP实例详情
 * @method Models\DescribePrometheusInstanceInitStatusResponse DescribePrometheusInstanceInitStatus(Models\DescribePrometheusInstanceInitStatusRequest $req) 获取2.0实例初始化任务状态
 * @method Models\DescribePrometheusInstanceUsageResponse DescribePrometheusInstanceUsage(Models\DescribePrometheusInstanceUsageRequest $req) 查询Prometheus按量实例用量
 * @method Models\DescribePrometheusInstancesResponse DescribePrometheusInstances(Models\DescribePrometheusInstancesRequest $req) 本接口 (DescribePrometheusInstances) 用于查询一个或多个实例的详细信息。
<ul>
<li>可以根据实例ID、实例名称或者实例状态等信息来查询实例的详细信息</li>
<li>如果参数为空，返回当前用户一定数量（Limit所指定的数量，默认为20）的实例。</li>
</ul>
 * @method Models\DescribePrometheusInstancesOverviewResponse DescribePrometheusInstancesOverview(Models\DescribePrometheusInstancesOverviewRequest $req) 获取与 Prometheus 监控融合实例列表
 * @method Models\DescribePrometheusIntegrationMetricsResponse DescribePrometheusIntegrationMetrics(Models\DescribePrometheusIntegrationMetricsRequest $req) 获取prometheus集成指标
 * @method Models\DescribePrometheusRecordRulesResponse DescribePrometheusRecordRules(Models\DescribePrometheusRecordRulesRequest $req) 获取聚合规则列表，包含关联集群内crd资源创建的record rule
 * @method Models\DescribePrometheusRegionsResponse DescribePrometheusRegions(Models\DescribePrometheusRegionsRequest $req) 列出 Prometheus 服务所有可用的地域
 * @method Models\DescribePrometheusScrapeJobsResponse DescribePrometheusScrapeJobs(Models\DescribePrometheusScrapeJobsRequest $req) 列出 Prometheus 抓取任务
 * @method Models\DescribePrometheusTargetsTMPResponse DescribePrometheusTargetsTMP(Models\DescribePrometheusTargetsTMPRequest $req) 获取targets信息，在过滤条件中指定job名称时返回targets详情，否则仅返回数量
 * @method Models\DescribePrometheusTempResponse DescribePrometheusTemp(Models\DescribePrometheusTempRequest $req) 拉取模板列表，默认模板将总是在最前面
 * @method Models\DescribePrometheusTempSyncResponse DescribePrometheusTempSync(Models\DescribePrometheusTempSyncRequest $req) 获取模板关联实例信息，针对V2版本实例
 * @method Models\DescribePrometheusZonesResponse DescribePrometheusZones(Models\DescribePrometheusZonesRequest $req) 列出 Prometheus 服务可用区。
 * @method Models\DescribeRecordingRulesResponse DescribeRecordingRules(Models\DescribeRecordingRulesRequest $req) 根据条件查询 Prometheus 预聚合规则
 * @method Models\DescribeRemoteURLsResponse DescribeRemoteURLs(Models\DescribeRemoteURLsRequest $req) 获取多写配置详情
 * @method Models\DescribeSSOAccountResponse DescribeSSOAccount(Models\DescribeSSOAccountRequest $req) 列出当前grafana实例的所有授权账号
 * @method Models\DescribeServiceDiscoveryResponse DescribeServiceDiscovery(Models\DescribeServiceDiscoveryRequest $req) 列出在腾讯云容器服务下创建的 Prometheus 服务发现。
<p>注意：前提条件，已经通过 Prometheus 控制台集成了对应的腾讯云容器服务，具体请参考
<a href="https://cloud.tencent.com/document/product/248/48859" target="_blank">Agent 安装</a>。</p>
 * @method Models\DescribeStatisticDataResponse DescribeStatisticData(Models\DescribeStatisticDataRequest $req) 根据维度条件查询监控数据
 * @method Models\DestroyPrometheusInstanceResponse DestroyPrometheusInstance(Models\DestroyPrometheusInstanceRequest $req) 彻底删除 Prometheus 实例相关数据，给定的实例必须先被 Terminate(该接口是异步接口，实例是否释放需要通过 DescribePrometheusInstances 接口返回的状态来判断)。
 * @method Models\EnableGrafanaInternetResponse EnableGrafanaInternet(Models\EnableGrafanaInternetRequest $req) 设置 Grafana 公网访问
 * @method Models\EnableGrafanaSSOResponse EnableGrafanaSSO(Models\EnableGrafanaSSORequest $req) 设置 Grafana 单点登录，使用腾讯云账号
 * @method Models\EnableSSOCamCheckResponse EnableSSOCamCheck(Models\EnableSSOCamCheckRequest $req) SSO单点登录时，设置是否cam鉴权
 * @method Models\ExportPrometheusReadOnlyDynamicAPIResponse ExportPrometheusReadOnlyDynamicAPI(Models\ExportPrometheusReadOnlyDynamicAPIRequest $req) Prometheus 内部动态 api 代理，仅内部使用
 * @method Models\GetMonitorDataResponse GetMonitorData(Models\GetMonitorDataRequest $req) 获取云产品的监控数据。此接口不适用于拉取容器服务监控数据，如需拉取容器服务监控数据，请使用[根据维度条件查询监控数据](https://cloud.tencent.com/document/product/248/51845)接口。
传入产品的命名空间、对象维度描述和监控指标即可获得相应的监控数据。
接口调用限制：单请求最多可支持批量拉取10个实例的监控数据，单请求的数据点数限制为1440个。
若您需要调用的指标、对象较多，可能存在因限频出现拉取失败的情况，建议尽量将请求按时间维度均摊。
参数SpecifyStatistics目前可支持返回三种统计方式（avg，max，min），分别为二进制1，2，4。
例子：3:avg+max，5:avg+min，6:max+min，7:avg+max+min
拉取数据的粒度和统计方式的对应关系尽量在接入平台进行配置，如果没有配置对应统计方式，请提工单反馈。

>?
>- 2022年9月1日起，腾讯云可观测平台开始对GetMonitorData接口计费。每个主账号每月可获得100万次免费请求额度，超过免费额度后如需继续调用接口需要开通 [API请求按量付费](https://buy.cloud.tencent.com/APIRequestBuy)。计费规则可查看[API计费文档](https://cloud.tencent.com/document/product/248/77914)。
 * @method Models\GetPrometheusAgentManagementCommandResponse GetPrometheusAgentManagementCommand(Models\GetPrometheusAgentManagementCommandRequest $req) 获取 Prometheus Agent 管理相关的命令行
 * @method Models\GetTopNMonitorDataResponse GetTopNMonitorData(Models\GetTopNMonitorDataRequest $req) 支持TopN查询，对于给定的监控指标和时间区间，按照指标大小按序返回不同维度组合及数据。
 * @method Models\InstallPluginsResponse InstallPlugins(Models\InstallPluginsRequest $req) 安装 Grafana Plugin
 * @method Models\ModifyAlarmNoticeResponse ModifyAlarmNotice(Models\ModifyAlarmNoticeRequest $req) 编辑告警通知模板
 * @method Models\ModifyAlarmPolicyConditionResponse ModifyAlarmPolicyCondition(Models\ModifyAlarmPolicyConditionRequest $req) 修改告警策略触发条件
 * @method Models\ModifyAlarmPolicyInfoResponse ModifyAlarmPolicyInfo(Models\ModifyAlarmPolicyInfoRequest $req) 告警2.0编辑告警策略基本信息，包括策略名、备注
 * @method Models\ModifyAlarmPolicyNoticeResponse ModifyAlarmPolicyNotice(Models\ModifyAlarmPolicyNoticeRequest $req) 修改告警策略绑定的告警通知模板
 * @method Models\ModifyAlarmPolicyStatusResponse ModifyAlarmPolicyStatus(Models\ModifyAlarmPolicyStatusRequest $req) 启停告警策略
 * @method Models\ModifyAlarmPolicyTasksResponse ModifyAlarmPolicyTasks(Models\ModifyAlarmPolicyTasksRequest $req) 修改告警策略的触发任务，TriggerTasks字段放触发任务列表，TriggerTasks传空数组时，代表解绑该策略的所有触发任务。
 * @method Models\ModifyAlarmReceiversResponse ModifyAlarmReceivers(Models\ModifyAlarmReceiversRequest $req) 修改告警接收人
 * @method Models\ModifyGrafanaInstanceResponse ModifyGrafanaInstance(Models\ModifyGrafanaInstanceRequest $req) 修改 Grafana 实例属性
 * @method Models\ModifyPolicyGroupResponse ModifyPolicyGroup(Models\ModifyPolicyGroupRequest $req) 更新策略组
 * @method Models\ModifyPrometheusAgentExternalLabelsResponse ModifyPrometheusAgentExternalLabels(Models\ModifyPrometheusAgentExternalLabelsRequest $req) 修改被关联集群的external labels
 * @method Models\ModifyPrometheusAlertPolicyResponse ModifyPrometheusAlertPolicy(Models\ModifyPrometheusAlertPolicyRequest $req) 修改2.0实例告警策略
 * @method Models\ModifyPrometheusConfigResponse ModifyPrometheusConfig(Models\ModifyPrometheusConfigRequest $req) 修改prometheus采集配置
 * @method Models\ModifyPrometheusGlobalNotificationResponse ModifyPrometheusGlobalNotification(Models\ModifyPrometheusGlobalNotificationRequest $req) 修改全局告警通知渠道
 * @method Models\ModifyPrometheusInstanceAttributesResponse ModifyPrometheusInstanceAttributes(Models\ModifyPrometheusInstanceAttributesRequest $req) 修改 Prometheus 实例相关属性
 * @method Models\ModifyPrometheusRecordRuleYamlResponse ModifyPrometheusRecordRuleYaml(Models\ModifyPrometheusRecordRuleYamlRequest $req) 通过yaml的方式修改Prometheus预聚合规则
 * @method Models\ModifyPrometheusTempResponse ModifyPrometheusTemp(Models\ModifyPrometheusTempRequest $req) 修改模板内容
 * @method Models\ModifyRemoteURLsResponse ModifyRemoteURLs(Models\ModifyRemoteURLsRequest $req) 修改多写配置
 * @method Models\ResumeGrafanaInstanceResponse ResumeGrafanaInstance(Models\ResumeGrafanaInstanceRequest $req) 本接口（ResumeGrafanaInstance）用于 Grafana 包年包月实例的停服续费，调用后按原版本续费一个月。仍在运行中的实例无法使用该接口进行续费。
 * @method Models\RunPrometheusInstanceResponse RunPrometheusInstance(Models\RunPrometheusInstanceRequest $req) 初始化TMP实例，开启集成中心时调用
 * @method Models\SetDefaultAlarmPolicyResponse SetDefaultAlarmPolicy(Models\SetDefaultAlarmPolicyRequest $req) 设置一个策略为该告警策略类型、该项目的默认告警策略。
同一项目下相同的告警策略类型，就会被设置为非默认。
 * @method Models\SyncPrometheusTempResponse SyncPrometheusTemp(Models\SyncPrometheusTempRequest $req) 同步模板到实例或者集群，针对V2版本实例
 * @method Models\TerminatePrometheusInstancesResponse TerminatePrometheusInstances(Models\TerminatePrometheusInstancesRequest $req) 销毁按量 Prometheus 实例
 * @method Models\UnBindingAllPolicyObjectResponse UnBindingAllPolicyObject(Models\UnBindingAllPolicyObjectRequest $req) 删除全部的关联对象
 * @method Models\UnBindingPolicyObjectResponse UnBindingPolicyObject(Models\UnBindingPolicyObjectRequest $req) 删除策略的关联对象
 * @method Models\UnbindPrometheusManagedGrafanaResponse UnbindPrometheusManagedGrafana(Models\UnbindPrometheusManagedGrafanaRequest $req) 解除实例绑定的 Grafana 可视化实例
 * @method Models\UninstallGrafanaDashboardResponse UninstallGrafanaDashboard(Models\UninstallGrafanaDashboardRequest $req) 删除 Grafana Dashboard
 * @method Models\UninstallGrafanaPluginsResponse UninstallGrafanaPlugins(Models\UninstallGrafanaPluginsRequest $req) 删除已安装的插件
 * @method Models\UpdateAlertRuleResponse UpdateAlertRule(Models\UpdateAlertRuleRequest $req) 更新 Prometheus 的告警规则。

请注意，**告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description**，请参考 [Prometheus Rule更多配置请参考](https://prometheus.io/docs/prometheus/latest/configuration/alerting_rules/)。
 * @method Models\UpdateAlertRuleStateResponse UpdateAlertRuleState(Models\UpdateAlertRuleStateRequest $req) 更新 Prometheus 报警策略状态
 * @method Models\UpdateDNSConfigResponse UpdateDNSConfig(Models\UpdateDNSConfigRequest $req) 更新 Grafana 的 DNS 配置
 * @method Models\UpdateExporterIntegrationResponse UpdateExporterIntegration(Models\UpdateExporterIntegrationRequest $req) 更新 exporter 集成配置
 * @method Models\UpdateGrafanaConfigResponse UpdateGrafanaConfig(Models\UpdateGrafanaConfigRequest $req) 更新 Grafana 配置
 * @method Models\UpdateGrafanaEnvironmentsResponse UpdateGrafanaEnvironments(Models\UpdateGrafanaEnvironmentsRequest $req) 更新 Grafana 环境变量
 * @method Models\UpdateGrafanaIntegrationResponse UpdateGrafanaIntegration(Models\UpdateGrafanaIntegrationRequest $req) 更新 Grafana 集成配置
 * @method Models\UpdateGrafanaNotificationChannelResponse UpdateGrafanaNotificationChannel(Models\UpdateGrafanaNotificationChannelRequest $req) 更新 Grafana 告警通道
 * @method Models\UpdateGrafanaWhiteListResponse UpdateGrafanaWhiteList(Models\UpdateGrafanaWhiteListRequest $req) 更新 Grafana 白名单
 * @method Models\UpdatePrometheusAgentStatusResponse UpdatePrometheusAgentStatus(Models\UpdatePrometheusAgentStatusRequest $req) 更新 Prometheus CVM Agent 状态
 * @method Models\UpdatePrometheusAlertGroupResponse UpdatePrometheusAlertGroup(Models\UpdatePrometheusAlertGroupRequest $req) 更新Prometheus告警规则分组
 * @method Models\UpdatePrometheusAlertGroupStateResponse UpdatePrometheusAlertGroupState(Models\UpdatePrometheusAlertGroupStateRequest $req) 批量更新告警分组状态，将分组中全部告警规则更新为目标状态
 * @method Models\UpdatePrometheusScrapeJobResponse UpdatePrometheusScrapeJob(Models\UpdatePrometheusScrapeJobRequest $req) 更新 Prometheus Agent 抓取任务
 * @method Models\UpdateRecordingRuleResponse UpdateRecordingRule(Models\UpdateRecordingRuleRequest $req) 更新 Prometheus 的预聚合规则
 * @method Models\UpdateSSOAccountResponse UpdateSSOAccount(Models\UpdateSSOAccountRequest $req) 更新已授权账号的备注、权限信息，会直接覆盖原有的信息，不传则不会更新。
 * @method Models\UpdateServiceDiscoveryResponse UpdateServiceDiscovery(Models\UpdateServiceDiscoveryRequest $req) 在腾讯云容器服务下更新 Prometheus 服务发现。
<p>注意：前提条件，已经通过 Prometheus 控制台集成了对应的腾讯云容器服务，具体请参考
<a href="https://cloud.tencent.com/document/product/248/48859" target="_blank">Agent 安装</a>。</p>
 * @method Models\UpgradeGrafanaDashboardResponse UpgradeGrafanaDashboard(Models\UpgradeGrafanaDashboardRequest $req) 升级 Grafana Dashboard
 * @method Models\UpgradeGrafanaInstanceResponse UpgradeGrafanaInstance(Models\UpgradeGrafanaInstanceRequest $req) 升级 Grafana 实例
 */

class MonitorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "monitor";

    /**
     * @var string
     */
    protected $version = "2018-07-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("monitor")."\\"."V20180724\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
