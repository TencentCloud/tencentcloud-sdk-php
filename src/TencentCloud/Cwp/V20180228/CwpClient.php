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

namespace TencentCloud\Cwp\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cwp\V20180228\Models as Models;

/**
 * @method Models\AddLoginWhiteListsResponse AddLoginWhiteLists(Models\AddLoginWhiteListsRequest $req) 批量添加异地登录白名单
 * @method Models\ChangeRuleEventsIgnoreStatusResponse ChangeRuleEventsIgnoreStatus(Models\ChangeRuleEventsIgnoreStatusRequest $req) 根据检测项id或事件id批量忽略事件或取消忽略
 * @method Models\ChangeStrategyEnableStatusResponse ChangeStrategyEnableStatus(Models\ChangeStrategyEnableStatusRequest $req) 根据策略id修改策略可用状态
 * @method Models\CheckBashPolicyParamsResponse CheckBashPolicyParams(Models\CheckBashPolicyParamsRequest $req) 校验高危命令用户规则新增和编辑时的参数。
 * @method Models\CheckBashRuleParamsResponse CheckBashRuleParams(Models\CheckBashRuleParamsRequest $req) 校验高危命令用户规则新增和编辑时的参数。
 * @method Models\CheckFileTamperRuleResponse CheckFileTamperRule(Models\CheckFileTamperRuleRequest $req) 检验核心文件监控前端新增和编辑时的规则参数。
 * @method Models\CheckFirstScanBaselineResponse CheckFirstScanBaseline(Models\CheckFirstScanBaselineRequest $req) 查询基线是否第一次检测
 * @method Models\CheckLogKafkaConnectionStateResponse CheckLogKafkaConnectionState(Models\CheckLogKafkaConnectionStateRequest $req) 检查日志投递kafka连通性
 * @method Models\ClearLocalStorageResponse ClearLocalStorage(Models\ClearLocalStorageRequest $req) 清理本地存储数据
 * @method Models\CreateBanWhiteListResponse CreateBanWhiteList(Models\CreateBanWhiteListRequest $req) 添加阻断白名单列表
 * @method Models\CreateBaselineStrategyResponse CreateBaselineStrategy(Models\CreateBaselineStrategyRequest $req) 根据策略信息创建基线策略
 * @method Models\CreateBuyBindTaskResponse CreateBuyBindTask(Models\CreateBuyBindTaskRequest $req) 新购授权自动绑定任务
 * @method Models\CreateEmergencyVulScanResponse CreateEmergencyVulScan(Models\CreateEmergencyVulScanRequest $req) 创建应急漏洞扫描任务
 * @method Models\CreateIncidentBacktrackingResponse CreateIncidentBacktracking(Models\CreateIncidentBacktrackingRequest $req) 对旗舰版机器单次触发事件调查及告警回溯
 * @method Models\CreateLicenseOrderResponse CreateLicenseOrder(Models\CreateLicenseOrderRequest $req) CreateLicenseOrder 该接口可以创建专业版/旗舰版订单
支持预付费后付费创建
后付费订单直接创建成功
预付费订单仅下单不支付,需要调用计费支付接口进行支付
 * @method Models\CreateLogExportResponse CreateLogExport(Models\CreateLogExportRequest $req) 创建日志下载任务
 * @method Models\CreateMaliciousRequestWhiteListResponse CreateMaliciousRequestWhiteList(Models\CreateMaliciousRequestWhiteListRequest $req) 添加恶意请求白名单
 * @method Models\CreateMalwareWhiteListResponse CreateMalwareWhiteList(Models\CreateMalwareWhiteListRequest $req) 创建木马白名单
 * @method Models\CreateNetAttackWhiteListResponse CreateNetAttackWhiteList(Models\CreateNetAttackWhiteListRequest $req) 创建网络攻击白名单
 * @method Models\CreateProtectServerResponse CreateProtectServer(Models\CreateProtectServerRequest $req) 添加网站防护服务器
 * @method Models\CreateRansomDefenseStrategyResponse CreateRansomDefenseStrategy(Models\CreateRansomDefenseStrategyRequest $req) 创建或修改防勒索策略
 * @method Models\CreateScanMalwareSettingResponse CreateScanMalwareSetting(Models\CreateScanMalwareSettingRequest $req) 该接口可以对入侵检测-文件查杀扫描检测
 * @method Models\CreateSearchLogResponse CreateSearchLog(Models\CreateSearchLogRequest $req) 添加历史搜索记录
 * @method Models\CreateSearchTemplateResponse CreateSearchTemplate(Models\CreateSearchTemplateRequest $req) 添加检索模板
 * @method Models\CreateVulFixResponse CreateVulFix(Models\CreateVulFixRequest $req) 提交漏洞修护
 * @method Models\CreateWhiteListOrderResponse CreateWhiteListOrder(Models\CreateWhiteListOrderRequest $req) 该接口可以创建白名单订单
 * @method Models\DeleteAllJavaMemShellsResponse DeleteAllJavaMemShells(Models\DeleteAllJavaMemShellsRequest $req) 删除全部java内存马事件
 * @method Models\DeleteBanWhiteListResponse DeleteBanWhiteList(Models\DeleteBanWhiteListRequest $req) 删除阻断白名单列表
 * @method Models\DeleteBaselinePolicyResponse DeleteBaselinePolicy(Models\DeleteBaselinePolicyRequest $req) 删除基线策略配置
 * @method Models\DeleteBaselineRuleResponse DeleteBaselineRule(Models\DeleteBaselineRuleRequest $req) 删除基线规则
 * @method Models\DeleteBaselineRuleIgnoreResponse DeleteBaselineRuleIgnore(Models\DeleteBaselineRuleIgnoreRequest $req) 删除基线忽略规则
 * @method Models\DeleteBaselineStrategyResponse DeleteBaselineStrategy(Models\DeleteBaselineStrategyRequest $req) 根据基线策略id删除策略
 * @method Models\DeleteBaselineWeakPasswordResponse DeleteBaselineWeakPassword(Models\DeleteBaselineWeakPasswordRequest $req) 删除基线弱口令
 * @method Models\DeleteBashEventsResponse DeleteBashEvents(Models\DeleteBashEventsRequest $req) 根据Ids删除高危命令事件
 * @method Models\DeleteBashPoliciesResponse DeleteBashPolicies(Models\DeleteBashPoliciesRequest $req) 删除高危命令策略
 * @method Models\DeleteBashRulesResponse DeleteBashRules(Models\DeleteBashRulesRequest $req) 删除高危命令规则
 * @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) 本接口 (DeleteBruteAttacks) 用于删除暴力破解记录。
 * @method Models\DeleteLicenseRecordResponse DeleteLicenseRecord(Models\DeleteLicenseRecordRequest $req) 对授权管理-订单列表内已过期的订单进行删除.(删除后的订单不在统计范畴内)
 * @method Models\DeleteLicenseRecordAllResponse DeleteLicenseRecordAll(Models\DeleteLicenseRecordAllRequest $req) 删除授权全部记录
 * @method Models\DeleteLogExportResponse DeleteLogExport(Models\DeleteLogExportRequest $req) 删除日志下载任务
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) 本接口用于删除异地登录白名单规则。
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) 本接口（DeleteMachine）用于卸载主机安全客户端。
 * @method Models\DeleteMachineClearHistoryResponse DeleteMachineClearHistory(Models\DeleteMachineClearHistoryRequest $req) 删除机器清理记录
 * @method Models\DeleteMachineTagResponse DeleteMachineTag(Models\DeleteMachineTagRequest $req) 删除服务器关联的标签
 * @method Models\DeleteMaliciousRequestWhiteListResponse DeleteMaliciousRequestWhiteList(Models\DeleteMaliciousRequestWhiteListRequest $req) 删除恶意请求白名单
 * @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) 本接口 (DeleteMaliciousRequests) 用于删除恶意请求记录。
 * @method Models\DeleteMalwareScanTaskResponse DeleteMalwareScanTask(Models\DeleteMalwareScanTaskRequest $req) 入侵管理-终止扫描任务
 * @method Models\DeleteMalwareWhiteListResponse DeleteMalwareWhiteList(Models\DeleteMalwareWhiteListRequest $req) 删除木马白名单
 * @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) 本接口 (DeleteMalwares) 用于删除木马记录。
 * @method Models\DeleteNetAttackWhiteListResponse DeleteNetAttackWhiteList(Models\DeleteNetAttackWhiteListRequest $req) 删除网络攻击白名单
 * @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) 本接口 (DeleteNonlocalLoginPlaces) 用于删除异地登录记录。
 * @method Models\DeletePrivilegeEventsResponse DeletePrivilegeEvents(Models\DeletePrivilegeEventsRequest $req) 根据Ids删除本地提权
 * @method Models\DeletePrivilegeRulesResponse DeletePrivilegeRules(Models\DeletePrivilegeRulesRequest $req) 删除本地提权规则
 * @method Models\DeleteProtectDirResponse DeleteProtectDir(Models\DeleteProtectDirRequest $req) 删除防护网站
 * @method Models\DeleteRaspRulesResponse DeleteRaspRules(Models\DeleteRaspRulesRequest $req) 删除漏洞防御白名单
 * @method Models\DeleteReverseShellEventsResponse DeleteReverseShellEvents(Models\DeleteReverseShellEventsRequest $req) 根据Ids删除反弹Shell事件
 * @method Models\DeleteReverseShellRulesResponse DeleteReverseShellRules(Models\DeleteReverseShellRulesRequest $req) 删除反弹Shell规则
 * @method Models\DeleteRiskDnsEventResponse DeleteRiskDnsEvent(Models\DeleteRiskDnsEventRequest $req) 删除恶意请求事件
 * @method Models\DeleteRiskDnsPolicyResponse DeleteRiskDnsPolicy(Models\DeleteRiskDnsPolicyRequest $req) 删除恶意请求策略
 * @method Models\DeleteScanTaskResponse DeleteScanTask(Models\DeleteScanTaskRequest $req) DeleteScanTask 该接口可以对指定类型的扫描任务进行停止扫描;
 * @method Models\DeleteSearchTemplateResponse DeleteSearchTemplate(Models\DeleteSearchTemplateRequest $req) 删除检索模板
 * @method Models\DeleteTagsResponse DeleteTags(Models\DeleteTagsRequest $req) 删除标签
 * @method Models\DeleteWebHookPolicyResponse DeleteWebHookPolicy(Models\DeleteWebHookPolicyRequest $req) 删除告警策略
 * @method Models\DeleteWebHookReceiverResponse DeleteWebHookReceiver(Models\DeleteWebHookReceiverRequest $req) 删除告警接收人
 * @method Models\DeleteWebHookRuleResponse DeleteWebHookRule(Models\DeleteWebHookRuleRequest $req) 删除企微机器人规则
 * @method Models\DeleteWebPageEventLogResponse DeleteWebPageEventLog(Models\DeleteWebPageEventLogRequest $req) 网站防篡改-删除事件记录
 * @method Models\DescribeABTestConfigResponse DescribeABTestConfig(Models\DescribeABTestConfigRequest $req) 获取用户当前灰度配置
 * @method Models\DescribeAESKeyResponse DescribeAESKey(Models\DescribeAESKeyRequest $req) 获取配置的aeskey和aesiv
 * @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) 本接口 (DescribeAccountStatistics) 用于获取账号统计列表数据。
 * @method Models\DescribeAgentInstallCommandResponse DescribeAgentInstallCommand(Models\DescribeAgentInstallCommandRequest $req) 获取agent安装命令
 * @method Models\DescribeAgentInstallationTokenResponse DescribeAgentInstallationToken(Models\DescribeAgentInstallationTokenRequest $req) 混合云安装agent token获取
 * @method Models\DescribeAlarmIncidentNodesResponse DescribeAlarmIncidentNodes(Models\DescribeAlarmIncidentNodesRequest $req) 获取告警点所在事件的所有节点信息
 * @method Models\DescribeAlarmVertexIdResponse DescribeAlarmVertexId(Models\DescribeAlarmVertexIdRequest $req) 查询告警点id列表
 * @method Models\DescribeAssetAppCountResponse DescribeAssetAppCount(Models\DescribeAssetAppCountRequest $req) 获取所有软件应用数量
 * @method Models\DescribeAssetAppListResponse DescribeAssetAppList(Models\DescribeAssetAppListRequest $req) 查询应用列表
 * @method Models\DescribeAssetAppProcessListResponse DescribeAssetAppProcessList(Models\DescribeAssetAppProcessListRequest $req) 获取软件关联进程列表
 * @method Models\DescribeAssetCoreModuleInfoResponse DescribeAssetCoreModuleInfo(Models\DescribeAssetCoreModuleInfoRequest $req) 获取内核模块详情
 * @method Models\DescribeAssetCoreModuleListResponse DescribeAssetCoreModuleList(Models\DescribeAssetCoreModuleListRequest $req) 查询资产管理内核模块列表
 * @method Models\DescribeAssetDatabaseCountResponse DescribeAssetDatabaseCount(Models\DescribeAssetDatabaseCountRequest $req) 获取所有数据库数量
 * @method Models\DescribeAssetDatabaseInfoResponse DescribeAssetDatabaseInfo(Models\DescribeAssetDatabaseInfoRequest $req) 获取资产管理数据库详情
 * @method Models\DescribeAssetDatabaseListResponse DescribeAssetDatabaseList(Models\DescribeAssetDatabaseListRequest $req) 查询资产管理数据库列表
 * @method Models\DescribeAssetDiskListResponse DescribeAssetDiskList(Models\DescribeAssetDiskListRequest $req) 获取主机磁盘分区列表
 * @method Models\DescribeAssetEnvListResponse DescribeAssetEnvList(Models\DescribeAssetEnvListRequest $req) 查询资产管理环境变量列表
 * @method Models\DescribeAssetHostTotalCountResponse DescribeAssetHostTotalCount(Models\DescribeAssetHostTotalCountRequest $req) 获取主机所有资源数量
 * @method Models\DescribeAssetInfoResponse DescribeAssetInfo(Models\DescribeAssetInfoRequest $req) 获取资产数量： 主机数、账号数、端口数、进程数、软件数、数据库数、Web应用数、Web框架数、Web服务数、Web站点数
 * @method Models\DescribeAssetInitServiceListResponse DescribeAssetInitServiceList(Models\DescribeAssetInitServiceListRequest $req) 查询资产管理启动服务列表
 * @method Models\DescribeAssetJarInfoResponse DescribeAssetJarInfo(Models\DescribeAssetJarInfoRequest $req) 获取Jar包详情
 * @method Models\DescribeAssetJarListResponse DescribeAssetJarList(Models\DescribeAssetJarListRequest $req) 查询Jar包列表
 * @method Models\DescribeAssetLoadInfoResponse DescribeAssetLoadInfo(Models\DescribeAssetLoadInfoRequest $req) 获取系统负载、内存使用率、硬盘使用率情况
 * @method Models\DescribeAssetMachineDetailResponse DescribeAssetMachineDetail(Models\DescribeAssetMachineDetailRequest $req) 获取资产管理主机资源详细信息
 * @method Models\DescribeAssetMachineListResponse DescribeAssetMachineList(Models\DescribeAssetMachineListRequest $req) 获取资产指纹页面的资源监控列表
 * @method Models\DescribeAssetMachineTagTopResponse DescribeAssetMachineTagTop(Models\DescribeAssetMachineTagTopRequest $req) 获取主机标签Top5
 * @method Models\DescribeAssetPlanTaskListResponse DescribeAssetPlanTaskList(Models\DescribeAssetPlanTaskListRequest $req) 查询资产管理计划任务列表
 * @method Models\DescribeAssetPortCountResponse DescribeAssetPortCount(Models\DescribeAssetPortCountRequest $req) 获取所有端口数量
 * @method Models\DescribeAssetPortInfoListResponse DescribeAssetPortInfoList(Models\DescribeAssetPortInfoListRequest $req) 获取资产管理端口列表
 * @method Models\DescribeAssetProcessCountResponse DescribeAssetProcessCount(Models\DescribeAssetProcessCountRequest $req) 获取所有进程数量
 * @method Models\DescribeAssetProcessInfoListResponse DescribeAssetProcessInfoList(Models\DescribeAssetProcessInfoListRequest $req) 获取资产管理进程列表
 * @method Models\DescribeAssetRecentMachineInfoResponse DescribeAssetRecentMachineInfo(Models\DescribeAssetRecentMachineInfoRequest $req) 获取主机最近趋势情况
 * @method Models\DescribeAssetSystemPackageListResponse DescribeAssetSystemPackageList(Models\DescribeAssetSystemPackageListRequest $req) 获取资产管理系统安装包列表
 * @method Models\DescribeAssetTotalCountResponse DescribeAssetTotalCount(Models\DescribeAssetTotalCountRequest $req) 获取所有资源数量：主机、账号、端口、进程、软件、数据库、Web应用、Web框架、Web服务、Web站点
 * @method Models\DescribeAssetTypeTopResponse DescribeAssetTypeTop(Models\DescribeAssetTypeTopRequest $req) 获取各种类型资源Top5
 * @method Models\DescribeAssetTypesResponse DescribeAssetTypes(Models\DescribeAssetTypesRequest $req) 获取资产指纹类型列表
 * @method Models\DescribeAssetUserCountResponse DescribeAssetUserCount(Models\DescribeAssetUserCountRequest $req) 获取所有账号数量
 * @method Models\DescribeAssetUserInfoResponse DescribeAssetUserInfo(Models\DescribeAssetUserInfoRequest $req) 获取主机账号详情
 * @method Models\DescribeAssetUserKeyListResponse DescribeAssetUserKeyList(Models\DescribeAssetUserKeyListRequest $req) 获取主机账号Key列表
 * @method Models\DescribeAssetUserListResponse DescribeAssetUserList(Models\DescribeAssetUserListRequest $req) 获取账号列表
 * @method Models\DescribeAssetWebAppCountResponse DescribeAssetWebAppCount(Models\DescribeAssetWebAppCountRequest $req) 获取所有Web应用数量
 * @method Models\DescribeAssetWebAppListResponse DescribeAssetWebAppList(Models\DescribeAssetWebAppListRequest $req) 获取资产管理Web应用列表
 * @method Models\DescribeAssetWebAppPluginListResponse DescribeAssetWebAppPluginList(Models\DescribeAssetWebAppPluginListRequest $req) 获取资产管理Web应用插件列表
 * @method Models\DescribeAssetWebFrameCountResponse DescribeAssetWebFrameCount(Models\DescribeAssetWebFrameCountRequest $req) 获取所有Web框架数量
 * @method Models\DescribeAssetWebFrameListResponse DescribeAssetWebFrameList(Models\DescribeAssetWebFrameListRequest $req) 获取资产管理Web框架列表
 * @method Models\DescribeAssetWebLocationCountResponse DescribeAssetWebLocationCount(Models\DescribeAssetWebLocationCountRequest $req) 获取所有Web站点数量
 * @method Models\DescribeAssetWebLocationInfoResponse DescribeAssetWebLocationInfo(Models\DescribeAssetWebLocationInfoRequest $req) 获取Web站点详情
 * @method Models\DescribeAssetWebLocationListResponse DescribeAssetWebLocationList(Models\DescribeAssetWebLocationListRequest $req) 获取Web站点列表
 * @method Models\DescribeAssetWebLocationPathListResponse DescribeAssetWebLocationPathList(Models\DescribeAssetWebLocationPathListRequest $req) 获取Web站点虚拟目录列表
 * @method Models\DescribeAssetWebServiceCountResponse DescribeAssetWebServiceCount(Models\DescribeAssetWebServiceCountRequest $req) 获取所有Web服务数量
 * @method Models\DescribeAssetWebServiceInfoListResponse DescribeAssetWebServiceInfoList(Models\DescribeAssetWebServiceInfoListRequest $req) 查询资产管理Web服务列表
 * @method Models\DescribeAssetWebServiceProcessListResponse DescribeAssetWebServiceProcessList(Models\DescribeAssetWebServiceProcessListRequest $req) 获取Web服务关联进程列表
 * @method Models\DescribeAttackEventInfoResponse DescribeAttackEventInfo(Models\DescribeAttackEventInfoRequest $req) 网络攻击事件详情
 * @method Models\DescribeAttackEventsResponse DescribeAttackEvents(Models\DescribeAttackEventsRequest $req) 按分页形式展示网络攻击检测事件列表
 * @method Models\DescribeAttackStatisticsResponse DescribeAttackStatistics(Models\DescribeAttackStatisticsRequest $req) 网络攻击数据统计
 * @method Models\DescribeAttackTopResponse DescribeAttackTop(Models\DescribeAttackTopRequest $req) 网络攻击top5数据列表
 * @method Models\DescribeAttackTrendsResponse DescribeAttackTrends(Models\DescribeAttackTrendsRequest $req) 网络攻击趋势数据
 * @method Models\DescribeAttackVulTypeListResponse DescribeAttackVulTypeList(Models\DescribeAttackVulTypeListRequest $req) 获取网络攻击威胁类型列表
 * @method Models\DescribeBanModeResponse DescribeBanMode(Models\DescribeBanModeRequest $req) 获取爆破阻断模式
 * @method Models\DescribeBanRegionsResponse DescribeBanRegions(Models\DescribeBanRegionsRequest $req) 获取阻断地域
 * @method Models\DescribeBanStatusResponse DescribeBanStatus(Models\DescribeBanStatusRequest $req) 获取阻断按钮状态
 * @method Models\DescribeBanWhiteListResponse DescribeBanWhiteList(Models\DescribeBanWhiteListRequest $req) 获取阻断白名单列表
 * @method Models\DescribeBaselineAnalysisDataResponse DescribeBaselineAnalysisData(Models\DescribeBaselineAnalysisDataRequest $req) 根据基线策略id查询基线策略数据概览统计
 * @method Models\DescribeBaselineBasicInfoResponse DescribeBaselineBasicInfo(Models\DescribeBaselineBasicInfoRequest $req) 查询基线基础信息列表
 * @method Models\DescribeBaselineDefaultStrategyListResponse DescribeBaselineDefaultStrategyList(Models\DescribeBaselineDefaultStrategyListRequest $req) 查询基线默认策略列表信息
 * @method Models\DescribeBaselineDetailResponse DescribeBaselineDetail(Models\DescribeBaselineDetailRequest $req) 根据基线id查询基线详情接口
 * @method Models\DescribeBaselineDetectListResponse DescribeBaselineDetectList(Models\DescribeBaselineDetectListRequest $req) 获取基线检测详情记录
 * @method Models\DescribeBaselineDetectOverviewResponse DescribeBaselineDetectOverview(Models\DescribeBaselineDetectOverviewRequest $req) 获取基线检测概览
 * @method Models\DescribeBaselineDownloadListResponse DescribeBaselineDownloadList(Models\DescribeBaselineDownloadListRequest $req) 获取基线下载列表
 * @method Models\DescribeBaselineEffectHostListResponse DescribeBaselineEffectHostList(Models\DescribeBaselineEffectHostListRequest $req) 根据基线id查询基线影响主机列表
 * @method Models\DescribeBaselineFixListResponse DescribeBaselineFixList(Models\DescribeBaselineFixListRequest $req) 获取基线修复列表
 * @method Models\DescribeBaselineHostDetectListResponse DescribeBaselineHostDetectList(Models\DescribeBaselineHostDetectListRequest $req) 获取基线检测主机列表
 * @method Models\DescribeBaselineHostIgnoreListResponse DescribeBaselineHostIgnoreList(Models\DescribeBaselineHostIgnoreListRequest $req) 获取忽略规则主机列表
 * @method Models\DescribeBaselineHostRiskTopResponse DescribeBaselineHostRiskTop(Models\DescribeBaselineHostRiskTopRequest $req) 获取基线服务器风险TOP5
 * @method Models\DescribeBaselineHostTopResponse DescribeBaselineHostTop(Models\DescribeBaselineHostTopRequest $req) 接口返回TopN的风险服务器
 * @method Models\DescribeBaselineItemDetectListResponse DescribeBaselineItemDetectList(Models\DescribeBaselineItemDetectListRequest $req) 获取基线检测项的列表
 * @method Models\DescribeBaselineItemIgnoreListResponse DescribeBaselineItemIgnoreList(Models\DescribeBaselineItemIgnoreListRequest $req) 获取忽略规则项列表
 * @method Models\DescribeBaselineItemInfoResponse DescribeBaselineItemInfo(Models\DescribeBaselineItemInfoRequest $req) 获取基线检测项信息
 * @method Models\DescribeBaselineItemListResponse DescribeBaselineItemList(Models\DescribeBaselineItemListRequest $req) 获取基线项检测结果列表
 * @method Models\DescribeBaselineItemRiskTopResponse DescribeBaselineItemRiskTop(Models\DescribeBaselineItemRiskTopRequest $req) 获取基线检测项TOP5
 * @method Models\DescribeBaselineListResponse DescribeBaselineList(Models\DescribeBaselineListRequest $req) 查询基线列表信息
 * @method Models\DescribeBaselinePolicyListResponse DescribeBaselinePolicyList(Models\DescribeBaselinePolicyListRequest $req) 获取基线策略列表
 * @method Models\DescribeBaselineRuleResponse DescribeBaselineRule(Models\DescribeBaselineRuleRequest $req) 根据基线id查询下属检测项信息
 * @method Models\DescribeBaselineRuleCategoryListResponse DescribeBaselineRuleCategoryList(Models\DescribeBaselineRuleCategoryListRequest $req) 获取基线分类列表
 * @method Models\DescribeBaselineRuleDetectListResponse DescribeBaselineRuleDetectList(Models\DescribeBaselineRuleDetectListRequest $req) 获取基线规则检测列表
 * @method Models\DescribeBaselineRuleIgnoreListResponse DescribeBaselineRuleIgnoreList(Models\DescribeBaselineRuleIgnoreListRequest $req) 获取基线忽略规则列表
 * @method Models\DescribeBaselineRuleListResponse DescribeBaselineRuleList(Models\DescribeBaselineRuleListRequest $req) 获取基线规则列表
 * @method Models\DescribeBaselineScanScheduleResponse DescribeBaselineScanSchedule(Models\DescribeBaselineScanScheduleRequest $req) 根据任务id查询基线检测进度
 * @method Models\DescribeBaselineStrategyDetailResponse DescribeBaselineStrategyDetail(Models\DescribeBaselineStrategyDetailRequest $req) 根据基线策略id查询策略详情
 * @method Models\DescribeBaselineStrategyListResponse DescribeBaselineStrategyList(Models\DescribeBaselineStrategyListRequest $req) 查询一个用户下的基线策略信息
 * @method Models\DescribeBaselineTopResponse DescribeBaselineTop(Models\DescribeBaselineTopRequest $req) 根据策略id查询基线检测项TOP
 * @method Models\DescribeBaselineWeakPasswordListResponse DescribeBaselineWeakPasswordList(Models\DescribeBaselineWeakPasswordListRequest $req) 获取基线弱口令列表
 * @method Models\DescribeBashEventsResponse DescribeBashEvents(Models\DescribeBashEventsRequest $req) 获取高危命令列表
 * @method Models\DescribeBashEventsInfoResponse DescribeBashEventsInfo(Models\DescribeBashEventsInfoRequest $req) 查询高危命令事件详情
 * @method Models\DescribeBashEventsInfoNewResponse DescribeBashEventsInfoNew(Models\DescribeBashEventsInfoNewRequest $req) 查询高危命令事件详情(新)
 * @method Models\DescribeBashEventsNewResponse DescribeBashEventsNew(Models\DescribeBashEventsNewRequest $req) 获取高危命令列表(新)
 * @method Models\DescribeBashPoliciesResponse DescribeBashPolicies(Models\DescribeBashPoliciesRequest $req) 获取高危命令策略列表
 * @method Models\DescribeBashRulesResponse DescribeBashRules(Models\DescribeBashRulesRequest $req) 获取高危命令规则列表
 * @method Models\DescribeBruteAttackListResponse DescribeBruteAttackList(Models\DescribeBruteAttackListRequest $req) 获取密码破解列表
 * @method Models\DescribeBruteAttackRulesResponse DescribeBruteAttackRules(Models\DescribeBruteAttackRulesRequest $req) 获取爆破破解规则
 * @method Models\DescribeCanFixVulMachineResponse DescribeCanFixVulMachine(Models\DescribeCanFixVulMachineRequest $req) 漏洞修护-查询可修护主机信息
 * @method Models\DescribeCanNotSeparateMachineResponse DescribeCanNotSeparateMachine(Models\DescribeCanNotSeparateMachineRequest $req) 获取木马不可隔离的主机
 * @method Models\DescribeClientExceptionResponse DescribeClientException(Models\DescribeClientExceptionRequest $req) 获取客户端异常事件
 * @method Models\DescribeDefenceEventDetailResponse DescribeDefenceEventDetail(Models\DescribeDefenceEventDetailRequest $req) 获取漏洞防御事件详情
 * @method Models\DescribeDirectConnectInstallCommandResponse DescribeDirectConnectInstallCommand(Models\DescribeDirectConnectInstallCommandRequest $req) 获取专线agent安装命令，包含token
 * @method Models\DescribeESAggregationsResponse DescribeESAggregations(Models\DescribeESAggregationsRequest $req) 获取ES字段聚合结果
 * @method Models\DescribeEmergencyVulListResponse DescribeEmergencyVulList(Models\DescribeEmergencyVulListRequest $req) 获取应急漏洞列表
 * @method Models\DescribeEventByTableResponse DescribeEventByTable(Models\DescribeEventByTableRequest $req) 根据事件表名和id查询告警事件详情
 * @method Models\DescribeExportMachinesResponse DescribeExportMachines(Models\DescribeExportMachinesRequest $req) 本接口 (DescribeExportMachines) 用于导出区域主机列表。
 * @method Models\DescribeFastAnalysisResponse DescribeFastAnalysis(Models\DescribeFastAnalysisRequest $req) 日志快速分析统计
 * @method Models\DescribeFileTamperEventRuleInfoResponse DescribeFileTamperEventRuleInfo(Models\DescribeFileTamperEventRuleInfoRequest $req) 查看产生事件时规则详情接口
 * @method Models\DescribeFileTamperEventsResponse DescribeFileTamperEvents(Models\DescribeFileTamperEventsRequest $req) 核心文件监控事件列表
 * @method Models\DescribeFileTamperRuleCountResponse DescribeFileTamperRuleCount(Models\DescribeFileTamperRuleCountRequest $req) 查询主机关联文件监控规则数量
 * @method Models\DescribeFileTamperRuleInfoResponse DescribeFileTamperRuleInfo(Models\DescribeFileTamperRuleInfoRequest $req) 查询某个监控规则的详情
 * @method Models\DescribeFileTamperRulesResponse DescribeFileTamperRules(Models\DescribeFileTamperRulesRequest $req) 核心文件监控规则列表
 * @method Models\DescribeGeneralStatResponse DescribeGeneralStat(Models\DescribeGeneralStatRequest $req) 获取主机相关统计
 * @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) 本接口 (DescribeHistoryAccounts) 用于获取账号变更历史列表数据。
 * @method Models\DescribeHistoryServiceResponse DescribeHistoryService(Models\DescribeHistoryServiceRequest $req) 查询日志检索服务信息
 * @method Models\DescribeHostInfoResponse DescribeHostInfo(Models\DescribeHostInfoRequest $req) 主机信息与标签信息查询
 * @method Models\DescribeHostLoginListResponse DescribeHostLoginList(Models\DescribeHostLoginListRequest $req) 获取异常登录列表
 * @method Models\DescribeHotVulTopResponse DescribeHotVulTop(Models\DescribeHotVulTopRequest $req) 获取全网热点漏洞
 * @method Models\DescribeIgnoreBaselineRuleResponse DescribeIgnoreBaselineRule(Models\DescribeIgnoreBaselineRuleRequest $req) 查询已经忽略的检测项信息
 * @method Models\DescribeIgnoreHostAndItemConfigResponse DescribeIgnoreHostAndItemConfig(Models\DescribeIgnoreHostAndItemConfigRequest $req) 获取一键忽略受影响的检测项和主机信息
 * @method Models\DescribeIgnoreRuleEffectHostListResponse DescribeIgnoreRuleEffectHostList(Models\DescribeIgnoreRuleEffectHostListRequest $req) 根据检测项id与筛选条件查询忽略检测项影响主机列表信息
 * @method Models\DescribeImportMachineInfoResponse DescribeImportMachineInfo(Models\DescribeImportMachineInfoRequest $req) 查询批量导入机器信息
 * @method Models\DescribeJavaMemShellInfoResponse DescribeJavaMemShellInfo(Models\DescribeJavaMemShellInfoRequest $req) 查询java内存马事件详细信息
 * @method Models\DescribeJavaMemShellListResponse DescribeJavaMemShellList(Models\DescribeJavaMemShellListRequest $req) 查询java内存马事件列表
 * @method Models\DescribeJavaMemShellPluginInfoResponse DescribeJavaMemShellPluginInfo(Models\DescribeJavaMemShellPluginInfoRequest $req) 查询给定主机java内存马插件信息
 * @method Models\DescribeJavaMemShellPluginListResponse DescribeJavaMemShellPluginList(Models\DescribeJavaMemShellPluginListRequest $req) 查询java内存马插件列表
 * @method Models\DescribeLicenseResponse DescribeLicense(Models\DescribeLicenseRequest $req) 查询授权信息
 * @method Models\DescribeLicenseBindListResponse DescribeLicenseBindList(Models\DescribeLicenseBindListRequest $req) 该接口可以获取设置中心-授权管理,某个授权下已绑定的授权机器列表
 * @method Models\DescribeLicenseBindScheduleResponse DescribeLicenseBindSchedule(Models\DescribeLicenseBindScheduleRequest $req) 查询授权绑定任务的进度
 * @method Models\DescribeLicenseGeneralResponse DescribeLicenseGeneral(Models\DescribeLicenseGeneralRequest $req) 授权管理-授权概览信息
 * @method Models\DescribeLicenseListResponse DescribeLicenseList(Models\DescribeLicenseListRequest $req) 获取用户所有授权订单信息
 * @method Models\DescribeLicenseWhiteConfigResponse DescribeLicenseWhiteConfig(Models\DescribeLicenseWhiteConfigRequest $req) 查询授权白名单的可用配置
 * @method Models\DescribeLogDeliveryKafkaOptionsResponse DescribeLogDeliveryKafkaOptions(Models\DescribeLogDeliveryKafkaOptionsRequest $req) 查询日志投递kafka可选项列表
 * @method Models\DescribeLogExportsResponse DescribeLogExports(Models\DescribeLogExportsRequest $req) 获取日志下载任务列表
 * @method Models\DescribeLogHistogramResponse DescribeLogHistogram(Models\DescribeLogHistogramRequest $req) 获取日志直方图信息
 * @method Models\DescribeLogIndexResponse DescribeLogIndex(Models\DescribeLogIndexRequest $req) 查询索引
 * @method Models\DescribeLogKafkaDeliverInfoResponse DescribeLogKafkaDeliverInfo(Models\DescribeLogKafkaDeliverInfoRequest $req) 获取kafka投递信息
 * @method Models\DescribeLogStorageConfigResponse DescribeLogStorageConfig(Models\DescribeLogStorageConfigRequest $req) 获取日志存储配置
 * @method Models\DescribeLogStorageRecordResponse DescribeLogStorageRecord(Models\DescribeLogStorageRecordRequest $req) 获取日志存储量记录
 * @method Models\DescribeLogStorageStatisticResponse DescribeLogStorageStatistic(Models\DescribeLogStorageStatisticRequest $req) 获取日志检索容量使用统计
 * @method Models\DescribeLogTypeResponse DescribeLogType(Models\DescribeLogTypeRequest $req) 日志分析功能-获取日志类型，使用该接口返回的结果暂时可过滤的日志类型
 * @method Models\DescribeLoginWhiteCombinedListResponse DescribeLoginWhiteCombinedList(Models\DescribeLoginWhiteCombinedListRequest $req) 获取异地登录白名单合并后列表
 * @method Models\DescribeLoginWhiteHostListResponse DescribeLoginWhiteHostList(Models\DescribeLoginWhiteHostListRequest $req) 查询合并后白名单机器列表
 * @method Models\DescribeLoginWhiteListResponse DescribeLoginWhiteList(Models\DescribeLoginWhiteListRequest $req) 获取异地登录白名单列表
 * @method Models\DescribeMachineClearHistoryResponse DescribeMachineClearHistory(Models\DescribeMachineClearHistoryRequest $req) 查询机器清理历史记录
 * @method Models\DescribeMachineDefenseCntResponse DescribeMachineDefenseCnt(Models\DescribeMachineDefenseCntRequest $req) 查询主机高级防御事件数统计
 * @method Models\DescribeMachineFileTamperRulesResponse DescribeMachineFileTamperRules(Models\DescribeMachineFileTamperRulesRequest $req) 查询主机相关核心文件监控规则列表
 * @method Models\DescribeMachineGeneralResponse DescribeMachineGeneral(Models\DescribeMachineGeneralRequest $req) 查询主机概览信息
 * @method Models\DescribeMachineInfoResponse DescribeMachineInfo(Models\DescribeMachineInfoRequest $req) 本接口（DescribeMachineInfo）用于获取机器详细信息。
 * @method Models\DescribeMachineLicenseDetailResponse DescribeMachineLicenseDetail(Models\DescribeMachineLicenseDetailRequest $req) 本接口 (DescribeMachineLicenseDetail)查询机器授权信息
 * @method Models\DescribeMachineListResponse DescribeMachineList(Models\DescribeMachineListRequest $req) 用于网页防篡改获取区域主机列表。
 * @method Models\DescribeMachineOsListResponse DescribeMachineOsList(Models\DescribeMachineOsListRequest $req) 查询可筛选操作系统列表.
 * @method Models\DescribeMachineRegionListResponse DescribeMachineRegionList(Models\DescribeMachineRegionListRequest $req) 查询主机地域列表
 * @method Models\DescribeMachineRegionsResponse DescribeMachineRegions(Models\DescribeMachineRegionsRequest $req) 获取机器地域列表
 * @method Models\DescribeMachineRiskCntResponse DescribeMachineRiskCnt(Models\DescribeMachineRiskCntRequest $req) 查询主机入侵检测事件统计
 * @method Models\DescribeMachineSnapshotResponse DescribeMachineSnapshot(Models\DescribeMachineSnapshotRequest $req) 漏洞修护-查询主机创建的快照
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 本接口 (DescribeMachines) 用于获取区域主机列表。
 * @method Models\DescribeMachinesSimpleResponse DescribeMachinesSimple(Models\DescribeMachinesSimpleRequest $req) 本接口 (DescribeMachinesSimple) 用于获取主机列表。
 * @method Models\DescribeMalWareListResponse DescribeMalWareList(Models\DescribeMalWareListRequest $req) 入侵检测获取木马列表
 * @method Models\DescribeMaliciousRequestWhiteListResponse DescribeMaliciousRequestWhiteList(Models\DescribeMaliciousRequestWhiteListRequest $req) 查询恶意请求白名单列表
 * @method Models\DescribeMalwareFileResponse DescribeMalwareFile(Models\DescribeMalwareFileRequest $req) 获取木马文件下载地址
 * @method Models\DescribeMalwareInfoResponse DescribeMalwareInfo(Models\DescribeMalwareInfoRequest $req) 查看恶意文件详情
 * @method Models\DescribeMalwareRiskOverviewResponse DescribeMalwareRiskOverview(Models\DescribeMalwareRiskOverviewRequest $req) 获取文件查杀概览信息
 * @method Models\DescribeMalwareRiskWarningResponse DescribeMalwareRiskWarning(Models\DescribeMalwareRiskWarningRequest $req) 打开入侵检测-恶意文件检测,弹出风险预警内容
 * @method Models\DescribeMalwareTimingScanSettingResponse DescribeMalwareTimingScanSetting(Models\DescribeMalwareTimingScanSettingRequest $req) 查询定时扫描配置
 * @method Models\DescribeMalwareWhiteListResponse DescribeMalwareWhiteList(Models\DescribeMalwareWhiteListRequest $req) 获取木马白名单列表
 * @method Models\DescribeMalwareWhiteListAffectListResponse DescribeMalwareWhiteListAffectList(Models\DescribeMalwareWhiteListAffectListRequest $req) 获取木马白名单受影响列表
 * @method Models\DescribeNetAttackSettingResponse DescribeNetAttackSetting(Models\DescribeNetAttackSettingRequest $req) 查询网络攻击设置
 * @method Models\DescribeNetAttackWhiteListResponse DescribeNetAttackWhiteList(Models\DescribeNetAttackWhiteListRequest $req) 获取网络攻击白名单列表
 * @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) 本接口 (DescribeOpenPortStatistics) 用于获取端口统计列表。
 * @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) 获取概览统计数据。
 * @method Models\DescribePrivilegeEventInfoResponse DescribePrivilegeEventInfo(Models\DescribePrivilegeEventInfoRequest $req) 本地提权信息详情
 * @method Models\DescribePrivilegeEventsResponse DescribePrivilegeEvents(Models\DescribePrivilegeEventsRequest $req) 获取本地提权事件列表
 * @method Models\DescribePrivilegeRulesResponse DescribePrivilegeRules(Models\DescribePrivilegeRulesRequest $req) 获取本地提权规则列表
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) 用于获取专业版概览信息。
 * @method Models\DescribeProVersionStatusResponse DescribeProVersionStatus(Models\DescribeProVersionStatusRequest $req) 用于获取单台主机或所有主机是否开通专业版状态。
 * @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) 本接口 (DescribeProcessStatistics) 用于获取进程统计列表数据。
 * @method Models\DescribeProductStatusResponse DescribeProductStatus(Models\DescribeProductStatusRequest $req) 产品试用状态查询接口
 * @method Models\DescribeProtectDirListResponse DescribeProtectDirList(Models\DescribeProtectDirListRequest $req) 网页防篡改防护目录列表
 * @method Models\DescribeProtectDirRelatedServerResponse DescribeProtectDirRelatedServer(Models\DescribeProtectDirRelatedServerRequest $req) 查询防护目录关联服务器列表信息
 * @method Models\DescribePublicProxyInstallCommandResponse DescribePublicProxyInstallCommand(Models\DescribePublicProxyInstallCommandRequest $req) 获取公网接入代理安装命令
 * @method Models\DescribeRansomDefenseBackupListResponse DescribeRansomDefenseBackupList(Models\DescribeRansomDefenseBackupListRequest $req) 查询主机快照备份列表
 * @method Models\DescribeRansomDefenseEventsListResponse DescribeRansomDefenseEventsList(Models\DescribeRansomDefenseEventsListRequest $req) 查询防勒索事件列表
 * @method Models\DescribeRansomDefenseMachineListResponse DescribeRansomDefenseMachineList(Models\DescribeRansomDefenseMachineListRequest $req) 查询备份详情列表
 * @method Models\DescribeRansomDefenseMachineStrategyInfoResponse DescribeRansomDefenseMachineStrategyInfo(Models\DescribeRansomDefenseMachineStrategyInfoRequest $req) 获取主机绑定策略列表
 * @method Models\DescribeRansomDefenseRollBackTaskListResponse DescribeRansomDefenseRollBackTaskList(Models\DescribeRansomDefenseRollBackTaskListRequest $req) 查询回滚任务列表
 * @method Models\DescribeRansomDefenseStateResponse DescribeRansomDefenseState(Models\DescribeRansomDefenseStateRequest $req) 获取用户防勒索趋势
 * @method Models\DescribeRansomDefenseStrategyDetailResponse DescribeRansomDefenseStrategyDetail(Models\DescribeRansomDefenseStrategyDetailRequest $req) 获取策略详情
 * @method Models\DescribeRansomDefenseStrategyListResponse DescribeRansomDefenseStrategyList(Models\DescribeRansomDefenseStrategyListRequest $req) 查询防勒索策略列表
 * @method Models\DescribeRansomDefenseStrategyMachinesResponse DescribeRansomDefenseStrategyMachines(Models\DescribeRansomDefenseStrategyMachinesRequest $req) 查询防勒索策略绑定机器列表
 * @method Models\DescribeRansomDefenseTrendResponse DescribeRansomDefenseTrend(Models\DescribeRansomDefenseTrendRequest $req) 获取全网勒索态势
 * @method Models\DescribeRaspMaxCpuResponse DescribeRaspMaxCpu(Models\DescribeRaspMaxCpuRequest $req) 查看漏洞防御最大cpu限制
 * @method Models\DescribeRaspRuleVulsResponse DescribeRaspRuleVuls(Models\DescribeRaspRuleVulsRequest $req) 获取漏洞防御白名单漏洞列表
 * @method Models\DescribeRaspRulesResponse DescribeRaspRules(Models\DescribeRaspRulesRequest $req) 查询漏洞防御白名单
 * @method Models\DescribeRecommendedProtectCpuResponse DescribeRecommendedProtectCpu(Models\DescribeRecommendedProtectCpuRequest $req) 查询推荐购买防护核数
 * @method Models\DescribeReverseShellEventInfoResponse DescribeReverseShellEventInfo(Models\DescribeReverseShellEventInfoRequest $req) 反弹shell信息详情
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) 获取反弹Shell列表
 * @method Models\DescribeReverseShellRulesResponse DescribeReverseShellRules(Models\DescribeReverseShellRulesRequest $req) 获取反弹Shell规则列表
 * @method Models\DescribeRiskBatchStatusResponse DescribeRiskBatchStatus(Models\DescribeRiskBatchStatusRequest $req) 查询入侵检测事件更新状态任务是否完成
 * @method Models\DescribeRiskDnsEventInfoResponse DescribeRiskDnsEventInfo(Models\DescribeRiskDnsEventInfoRequest $req) 查询恶意请求事件详情
 * @method Models\DescribeRiskDnsEventListResponse DescribeRiskDnsEventList(Models\DescribeRiskDnsEventListRequest $req) 获取恶意请求事件列表
 * @method Models\DescribeRiskDnsInfoResponse DescribeRiskDnsInfo(Models\DescribeRiskDnsInfoRequest $req) 查询恶意请求详情
 * @method Models\DescribeRiskDnsListResponse DescribeRiskDnsList(Models\DescribeRiskDnsListRequest $req) 入侵检测，获取恶意请求列表
 * @method Models\DescribeRiskDnsPolicyListResponse DescribeRiskDnsPolicyList(Models\DescribeRiskDnsPolicyListRequest $req) 获取恶意请求策略列表
 * @method Models\DescribeRiskProcessEventsResponse DescribeRiskProcessEvents(Models\DescribeRiskProcessEventsRequest $req) 获取异常进程列表
 * @method Models\DescribeSafeInfoResponse DescribeSafeInfo(Models\DescribeSafeInfoRequest $req) 查询安全通知信息
 * @method Models\DescribeScanMalwareScheduleResponse DescribeScanMalwareSchedule(Models\DescribeScanMalwareScheduleRequest $req) 查询木马扫描进度
 * @method Models\DescribeScanScheduleResponse DescribeScanSchedule(Models\DescribeScanScheduleRequest $req) 根据taskid查询检测进度
 * @method Models\DescribeScanStateResponse DescribeScanState(Models\DescribeScanStateRequest $req) DescribeScanState 该接口能查询对应模块正在进行的扫描任务状态
 * @method Models\DescribeScanTaskDetailsResponse DescribeScanTaskDetails(Models\DescribeScanTaskDetailsRequest $req) DescribeScanTaskDetails 查询扫描任务详情 , 可以查询扫描进度信息/异常;
 * @method Models\DescribeScanTaskStatusResponse DescribeScanTaskStatus(Models\DescribeScanTaskStatusRequest $req) DescribeScanTaskStatus 查询机器扫描状态列表用于过滤筛选
 * @method Models\DescribeScanVulSettingResponse DescribeScanVulSetting(Models\DescribeScanVulSettingRequest $req) 查询定期检测的配置
 * @method Models\DescribeScreenAttackHotspotResponse DescribeScreenAttackHotspot(Models\DescribeScreenAttackHotspotRequest $req) 大屏可视化获取全网攻击热点
 * @method Models\DescribeScreenBroadcastsResponse DescribeScreenBroadcasts(Models\DescribeScreenBroadcastsRequest $req) 大屏可视化安全播报
 * @method Models\DescribeScreenDefenseTrendsResponse DescribeScreenDefenseTrends(Models\DescribeScreenDefenseTrendsRequest $req) 大屏可视化防趋势接口
 * @method Models\DescribeScreenEmergentMsgResponse DescribeScreenEmergentMsg(Models\DescribeScreenEmergentMsgRequest $req) 大屏可视化紧急通知
 * @method Models\DescribeScreenEventsCntResponse DescribeScreenEventsCnt(Models\DescribeScreenEventsCntRequest $req) 大屏可视化获取安全概览相关事件统计数据接口
 * @method Models\DescribeScreenGeneralStatResponse DescribeScreenGeneralStat(Models\DescribeScreenGeneralStatRequest $req) 大屏可视化获取主机相关统计
 * @method Models\DescribeScreenHostInvasionResponse DescribeScreenHostInvasion(Models\DescribeScreenHostInvasionRequest $req) 大屏可视化主机入侵详情
 * @method Models\DescribeScreenMachineRegionsResponse DescribeScreenMachineRegions(Models\DescribeScreenMachineRegionsRequest $req) 大屏可视化主机区域选项列表
 * @method Models\DescribeScreenMachinesResponse DescribeScreenMachines(Models\DescribeScreenMachinesRequest $req) 大屏可视化主机区域列表
 * @method Models\DescribeScreenProtectionCntResponse DescribeScreenProtectionCnt(Models\DescribeScreenProtectionCntRequest $req) 大屏可视化主机安全防护引擎介绍
 * @method Models\DescribeScreenProtectionStatResponse DescribeScreenProtectionStat(Models\DescribeScreenProtectionStatRequest $req) 大屏获取安全防护状态
 * @method Models\DescribeScreenRiskAssetsTopResponse DescribeScreenRiskAssetsTop(Models\DescribeScreenRiskAssetsTopRequest $req) 大屏可视化风险资产top5（今日），统计今日风险资产
 * @method Models\DescribeSearchLogsResponse DescribeSearchLogs(Models\DescribeSearchLogsRequest $req) 获取历史搜索记录
 * @method Models\DescribeSearchTemplatesResponse DescribeSearchTemplates(Models\DescribeSearchTemplatesRequest $req) 获取快速检索列表
 * @method Models\DescribeSecurityBroadcastInfoResponse DescribeSecurityBroadcastInfo(Models\DescribeSecurityBroadcastInfoRequest $req) 查询安全播报文章信息
 * @method Models\DescribeSecurityBroadcastsResponse DescribeSecurityBroadcasts(Models\DescribeSecurityBroadcastsRequest $req) 安全播报列表页
 * @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) 本接口 (DescribeSecurityDynamics) 用于获取安全事件动态消息数据。
 * @method Models\DescribeSecurityEventStatResponse DescribeSecurityEventStat(Models\DescribeSecurityEventStatRequest $req) 获取安全事件统计
 * @method Models\DescribeSecurityEventsCntResponse DescribeSecurityEventsCnt(Models\DescribeSecurityEventsCntRequest $req) 获取安全概览相关事件统计数据接口
 * @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) 本接口 (DescribeSecurityTrends) 用于获取安全事件统计数据。
 * @method Models\DescribeServerRelatedDirInfoResponse DescribeServerRelatedDirInfo(Models\DescribeServerRelatedDirInfoRequest $req) 查询服务区关联目录详情
 * @method Models\DescribeServersAndRiskAndFirstInfoResponse DescribeServersAndRiskAndFirstInfo(Models\DescribeServersAndRiskAndFirstInfoRequest $req) 获取待处理风险文件数+影响服务器数+是否试用检测+最近检测时间
 * @method Models\DescribeStrategyExistResponse DescribeStrategyExist(Models\DescribeStrategyExistRequest $req) 根据策略名查询策略是否存在
 * @method Models\DescribeTagMachinesResponse DescribeTagMachines(Models\DescribeTagMachinesRequest $req) 获取指定标签关联的服务器信息
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) 获取所有主机标签
 * @method Models\DescribeTrialReportResponse DescribeTrialReport(Models\DescribeTrialReportRequest $req) 查询主机安全授权试用报告(仅限控制台申领的)
 * @method Models\DescribeUndoVulCountsResponse DescribeUndoVulCounts(Models\DescribeUndoVulCountsRequest $req) 获取漏洞管理模块指定类型的待处理漏洞数、主机数和非专业版主机数量
 * @method Models\DescribeUsersConfigResponse DescribeUsersConfig(Models\DescribeUsersConfigRequest $req) 用于查询用户自定义配置
 * @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) 此接口（DescribeUsualLoginPlaces）用于查询常用登录地。
 * @method Models\DescribeVdbAndPocInfoResponse DescribeVdbAndPocInfo(Models\DescribeVdbAndPocInfoRequest $req) 获取病毒库及POC的更新信息
 * @method Models\DescribeVersionCompareChartResponse DescribeVersionCompareChart(Models\DescribeVersionCompareChartRequest $req) 获取版本对比信息
 * @method Models\DescribeVersionStatisticsResponse DescribeVersionStatistics(Models\DescribeVersionStatisticsRequest $req) 用于统计专业版和基础版机器数。
 * @method Models\DescribeVertexDetailResponse DescribeVertexDetail(Models\DescribeVertexDetailRequest $req) 获取指定点属性信息
 * @method Models\DescribeVulCountByDatesResponse DescribeVulCountByDates(Models\DescribeVulCountByDatesRequest $req) 漏洞管理模块，获取近日指定类型的漏洞数量和主机数量
 * @method Models\DescribeVulCveIdInfoResponse DescribeVulCveIdInfo(Models\DescribeVulCveIdInfoRequest $req) CveId查询漏洞详情
 * @method Models\DescribeVulDefenceEventResponse DescribeVulDefenceEvent(Models\DescribeVulDefenceEventRequest $req) 获取漏洞防御事件列表
 * @method Models\DescribeVulDefenceListResponse DescribeVulDefenceList(Models\DescribeVulDefenceListRequest $req) 查询漏洞防御列表
 * @method Models\DescribeVulDefenceOverviewResponse DescribeVulDefenceOverview(Models\DescribeVulDefenceOverviewRequest $req) 获取漏洞防御概览信息，包括事件趋势及插件开启情况
 * @method Models\DescribeVulDefencePluginDetailResponse DescribeVulDefencePluginDetail(Models\DescribeVulDefencePluginDetailRequest $req) 获取单台主机漏洞防御插件信息
 * @method Models\DescribeVulDefencePluginExceptionCountResponse DescribeVulDefencePluginExceptionCount(Models\DescribeVulDefencePluginExceptionCountRequest $req) 获取当前异常插件数
 * @method Models\DescribeVulDefencePluginStatusResponse DescribeVulDefencePluginStatus(Models\DescribeVulDefencePluginStatusRequest $req) 获取各主机漏洞防御插件状态
 * @method Models\DescribeVulDefenceSettingResponse DescribeVulDefenceSetting(Models\DescribeVulDefenceSettingRequest $req) 获取当前漏洞防御插件设置
 * @method Models\DescribeVulEffectHostListResponse DescribeVulEffectHostList(Models\DescribeVulEffectHostListRequest $req) 漏洞影响主机列表
 * @method Models\DescribeVulEffectModulesResponse DescribeVulEffectModules(Models\DescribeVulEffectModulesRequest $req) 漏洞影响组件列表
 * @method Models\DescribeVulEmergentMsgResponse DescribeVulEmergentMsg(Models\DescribeVulEmergentMsgRequest $req) 获取漏洞紧急通知
 * @method Models\DescribeVulFixStatusResponse DescribeVulFixStatus(Models\DescribeVulFixStatusRequest $req) 漏洞修护-查找主机漏洞修护进度
 * @method Models\DescribeVulHostCountScanTimeResponse DescribeVulHostCountScanTime(Models\DescribeVulHostCountScanTimeRequest $req) 获取待处理漏洞数+影响主机数
 * @method Models\DescribeVulHostTopResponse DescribeVulHostTop(Models\DescribeVulHostTopRequest $req) 获取服务器风险top列表
 * @method Models\DescribeVulInfoCvssResponse DescribeVulInfoCvss(Models\DescribeVulInfoCvssRequest $req) 漏洞详情，带CVSS版本
 * @method Models\DescribeVulLabelsResponse DescribeVulLabels(Models\DescribeVulLabelsRequest $req) 获取用户漏洞所有标签列表
 * @method Models\DescribeVulLevelCountResponse DescribeVulLevelCount(Models\DescribeVulLevelCountRequest $req) 漏洞数量等级分布统计
 * @method Models\DescribeVulListResponse DescribeVulList(Models\DescribeVulListRequest $req) 获取漏洞列表数据
 * @method Models\DescribeVulOverviewResponse DescribeVulOverview(Models\DescribeVulOverviewRequest $req) 获取漏洞概览数据
 * @method Models\DescribeVulStoreListResponse DescribeVulStoreList(Models\DescribeVulStoreListRequest $req) 获取漏洞库列表
 * @method Models\DescribeVulTopResponse DescribeVulTop(Models\DescribeVulTopRequest $req) 漏洞top统计
 * @method Models\DescribeVulTrendResponse DescribeVulTrend(Models\DescribeVulTrendRequest $req) 获取漏洞态势信息
 * @method Models\DescribeWarningHostConfigResponse DescribeWarningHostConfig(Models\DescribeWarningHostConfigRequest $req) 查询告警机器范围配置
 * @method Models\DescribeWarningListResponse DescribeWarningList(Models\DescribeWarningListRequest $req) 获取当前用户告警列表
 * @method Models\DescribeWebHookPolicyResponse DescribeWebHookPolicy(Models\DescribeWebHookPolicyRequest $req) 查询告警策略
 * @method Models\DescribeWebHookReceiverResponse DescribeWebHookReceiver(Models\DescribeWebHookReceiverRequest $req) 查询告警接收人列表
 * @method Models\DescribeWebHookReceiverUsageResponse DescribeWebHookReceiverUsage(Models\DescribeWebHookReceiverUsageRequest $req) 查询指定告警接收人的关联策略使用信息
 * @method Models\DescribeWebHookRuleResponse DescribeWebHookRule(Models\DescribeWebHookRuleRequest $req) 获取企微机器人规则详情
 * @method Models\DescribeWebHookRulesResponse DescribeWebHookRules(Models\DescribeWebHookRulesRequest $req) 获取企微机器人规则列表
 * @method Models\DescribeWebPageEventListResponse DescribeWebPageEventList(Models\DescribeWebPageEventListRequest $req) 查询篡改事件列表
 * @method Models\DescribeWebPageGeneralizeResponse DescribeWebPageGeneralize(Models\DescribeWebPageGeneralizeRequest $req) 查询网站防篡改概览信息
 * @method Models\DescribeWebPageProtectStatResponse DescribeWebPageProtectStat(Models\DescribeWebPageProtectStatRequest $req) 网站防篡改-查询动态防护信息
 * @method Models\DescribeWebPageServiceInfoResponse DescribeWebPageServiceInfo(Models\DescribeWebPageServiceInfoRequest $req) 网站防篡改-查询网页防篡改服务器购买信息及服务器信息
 * @method Models\DestroyOrderResponse DestroyOrder(Models\DestroyOrderRequest $req) DestroyOrder  该接口可以对资源销毁.
 * @method Models\EditBashRulesResponse EditBashRules(Models\EditBashRulesRequest $req) 新增或修改高危命令规则
 * @method Models\EditPrivilegeRulesResponse EditPrivilegeRules(Models\EditPrivilegeRulesRequest $req) 新增或修改本地提权规则（支持多服务器选择）
 * @method Models\EditReverseShellRulesResponse EditReverseShellRules(Models\EditReverseShellRulesRequest $req) 编辑反弹Shell规则（支持多服务器选择）
 * @method Models\EditTagsResponse EditTags(Models\EditTagsRequest $req) 新增或编辑标签
 * @method Models\ExportAssetAppListResponse ExportAssetAppList(Models\ExportAssetAppListRequest $req) 导出资产管理应用列表
 * @method Models\ExportAssetCoreModuleListResponse ExportAssetCoreModuleList(Models\ExportAssetCoreModuleListRequest $req) 导出资产管理内核模块列表
 * @method Models\ExportAssetDatabaseListResponse ExportAssetDatabaseList(Models\ExportAssetDatabaseListRequest $req) 导出资产管理数据库列表
 * @method Models\ExportAssetEnvListResponse ExportAssetEnvList(Models\ExportAssetEnvListRequest $req) 导出资产管理环境变量列表
 * @method Models\ExportAssetInitServiceListResponse ExportAssetInitServiceList(Models\ExportAssetInitServiceListRequest $req) 导出资产管理启动服务列表
 * @method Models\ExportAssetJarListResponse ExportAssetJarList(Models\ExportAssetJarListRequest $req) 导出Jar包列表
 * @method Models\ExportAssetMachineDetailResponse ExportAssetMachineDetail(Models\ExportAssetMachineDetailRequest $req) 导出资产管理主机资源详细信息
 * @method Models\ExportAssetMachineListResponse ExportAssetMachineList(Models\ExportAssetMachineListRequest $req) 导出资源监控列表
 * @method Models\ExportAssetPlanTaskListResponse ExportAssetPlanTaskList(Models\ExportAssetPlanTaskListRequest $req) 导出资产管理计划任务列表
 * @method Models\ExportAssetPortInfoListResponse ExportAssetPortInfoList(Models\ExportAssetPortInfoListRequest $req) 导出资产管理端口列表
 * @method Models\ExportAssetProcessInfoListResponse ExportAssetProcessInfoList(Models\ExportAssetProcessInfoListRequest $req) 导出资产管理进程列表
 * @method Models\ExportAssetRecentMachineInfoResponse ExportAssetRecentMachineInfo(Models\ExportAssetRecentMachineInfoRequest $req) 导出主机最近趋势情况（最长最近90天）
 * @method Models\ExportAssetSystemPackageListResponse ExportAssetSystemPackageList(Models\ExportAssetSystemPackageListRequest $req) 导出资产管理系统安装包列表
 * @method Models\ExportAssetUserListResponse ExportAssetUserList(Models\ExportAssetUserListRequest $req) 导出账号列表
 * @method Models\ExportAssetWebAppListResponse ExportAssetWebAppList(Models\ExportAssetWebAppListRequest $req) 导出资产管理Web应用列表
 * @method Models\ExportAssetWebFrameListResponse ExportAssetWebFrameList(Models\ExportAssetWebFrameListRequest $req) 导出资产管理Web框架列表
 * @method Models\ExportAssetWebLocationListResponse ExportAssetWebLocationList(Models\ExportAssetWebLocationListRequest $req) 导出Web站点列表
 * @method Models\ExportAssetWebServiceInfoListResponse ExportAssetWebServiceInfoList(Models\ExportAssetWebServiceInfoListRequest $req) 导出资产管理Web服务列表
 * @method Models\ExportAttackEventsResponse ExportAttackEvents(Models\ExportAttackEventsRequest $req) 导出网络攻击事件
 * @method Models\ExportBaselineEffectHostListResponse ExportBaselineEffectHostList(Models\ExportBaselineEffectHostListRequest $req) 导出基线影响主机列表
 * @method Models\ExportBaselineFixListResponse ExportBaselineFixList(Models\ExportBaselineFixListRequest $req) 导出修复列表
 * @method Models\ExportBaselineHostDetectListResponse ExportBaselineHostDetectList(Models\ExportBaselineHostDetectListRequest $req) 导出基线主机检测
 * @method Models\ExportBaselineItemDetectListResponse ExportBaselineItemDetectList(Models\ExportBaselineItemDetectListRequest $req) 导出基线检测项
 * @method Models\ExportBaselineItemListResponse ExportBaselineItemList(Models\ExportBaselineItemListRequest $req) 导出检测项结果列表
 * @method Models\ExportBaselineListResponse ExportBaselineList(Models\ExportBaselineListRequest $req) 导出基线列表
 * @method Models\ExportBaselineRuleDetectListResponse ExportBaselineRuleDetectList(Models\ExportBaselineRuleDetectListRequest $req) 导出基线检测规则
 * @method Models\ExportBaselineWeakPasswordListResponse ExportBaselineWeakPasswordList(Models\ExportBaselineWeakPasswordListRequest $req) 导出弱口令配置列表
 * @method Models\ExportBashEventsResponse ExportBashEvents(Models\ExportBashEventsRequest $req) 导出高危命令事件
 * @method Models\ExportBashEventsNewResponse ExportBashEventsNew(Models\ExportBashEventsNewRequest $req) 导出高危命令事件(新)
 * @method Models\ExportBashPoliciesResponse ExportBashPolicies(Models\ExportBashPoliciesRequest $req) 导出高危命令策略
 * @method Models\ExportBruteAttacksResponse ExportBruteAttacks(Models\ExportBruteAttacksRequest $req) 本接口 (ExportBruteAttacks) 用于导出密码破解记录成CSV文件。
 * @method Models\ExportFileTamperEventsResponse ExportFileTamperEvents(Models\ExportFileTamperEventsRequest $req) 导出核心文件事件
 * @method Models\ExportFileTamperRulesResponse ExportFileTamperRules(Models\ExportFileTamperRulesRequest $req) 导出核心文件监控规则
 * @method Models\ExportIgnoreBaselineRuleResponse ExportIgnoreBaselineRule(Models\ExportIgnoreBaselineRuleRequest $req) 导出已忽略基线检测项信息
 * @method Models\ExportIgnoreRuleEffectHostListResponse ExportIgnoreRuleEffectHostList(Models\ExportIgnoreRuleEffectHostListRequest $req) 根据检测项id导出忽略检测项影响主机列表
 * @method Models\ExportJavaMemShellPluginsResponse ExportJavaMemShellPlugins(Models\ExportJavaMemShellPluginsRequest $req) 导出java内存马插件信息
 * @method Models\ExportJavaMemShellsResponse ExportJavaMemShells(Models\ExportJavaMemShellsRequest $req) 导出java内存马事件列表
 * @method Models\ExportLicenseDetailResponse ExportLicenseDetail(Models\ExportLicenseDetailRequest $req) 导出授权列表对应的绑定信息
 * @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) 本接口 (ExportMaliciousRequests) 用于导出下载恶意请求文件。
 * @method Models\ExportMalwaresResponse ExportMalwares(Models\ExportMalwaresRequest $req) 本接口 (ExportMalwares) 用于导出木马记录CSV文件。
 * @method Models\ExportNonlocalLoginPlacesResponse ExportNonlocalLoginPlaces(Models\ExportNonlocalLoginPlacesRequest $req) 本接口 (ExportNonlocalLoginPlaces) 用于导出异地登录事件记录CSV文件。
 * @method Models\ExportPrivilegeEventsResponse ExportPrivilegeEvents(Models\ExportPrivilegeEventsRequest $req) 导出本地提权事件
 * @method Models\ExportProtectDirListResponse ExportProtectDirList(Models\ExportProtectDirListRequest $req) 导出网页防篡改防护目录列表
 * @method Models\ExportRansomDefenseBackupListResponse ExportRansomDefenseBackupList(Models\ExportRansomDefenseBackupListRequest $req) 导出主机快照备份列表
 * @method Models\ExportRansomDefenseEventsListResponse ExportRansomDefenseEventsList(Models\ExportRansomDefenseEventsListRequest $req) 导出防勒索事件列表
 * @method Models\ExportRansomDefenseMachineListResponse ExportRansomDefenseMachineList(Models\ExportRansomDefenseMachineListRequest $req) 导出备份详情列表
 * @method Models\ExportRansomDefenseStrategyListResponse ExportRansomDefenseStrategyList(Models\ExportRansomDefenseStrategyListRequest $req) 导出防勒索策略列表
 * @method Models\ExportRansomDefenseStrategyMachinesResponse ExportRansomDefenseStrategyMachines(Models\ExportRansomDefenseStrategyMachinesRequest $req) 导出勒索防御策略绑定机器列表
 * @method Models\ExportReverseShellEventsResponse ExportReverseShellEvents(Models\ExportReverseShellEventsRequest $req) 导出反弹Shell事件
 * @method Models\ExportRiskDnsEventListResponse ExportRiskDnsEventList(Models\ExportRiskDnsEventListRequest $req) 导出恶意请求事件列表
 * @method Models\ExportRiskDnsPolicyListResponse ExportRiskDnsPolicyList(Models\ExportRiskDnsPolicyListRequest $req) 导出恶意请求策略列表
 * @method Models\ExportRiskProcessEventsResponse ExportRiskProcessEvents(Models\ExportRiskProcessEventsRequest $req) 导出异常进程事件
 * @method Models\ExportScanTaskDetailsResponse ExportScanTaskDetails(Models\ExportScanTaskDetailsRequest $req) 根据任务id导出指定扫描任务详情
 * @method Models\ExportSecurityTrendsResponse ExportSecurityTrends(Models\ExportSecurityTrendsRequest $req) 导出风险趋势
 * @method Models\ExportTasksResponse ExportTasks(Models\ExportTasksRequest $req) 用于异步导出数据量大的日志文件
 * @method Models\ExportVulDefenceEventResponse ExportVulDefenceEvent(Models\ExportVulDefenceEventRequest $req) 导出漏洞防御事件
 * @method Models\ExportVulDefenceListResponse ExportVulDefenceList(Models\ExportVulDefenceListRequest $req) 导出漏洞防御列表
 * @method Models\ExportVulDefencePluginEventResponse ExportVulDefencePluginEvent(Models\ExportVulDefencePluginEventRequest $req) 导出漏洞防御插件事件
 * @method Models\ExportVulDetectionExcelResponse ExportVulDetectionExcel(Models\ExportVulDetectionExcelRequest $req) 导出本次漏洞检测Excel
 * @method Models\ExportVulDetectionReportResponse ExportVulDetectionReport(Models\ExportVulDetectionReportRequest $req) 导出漏洞检测报告。
 * @method Models\ExportVulEffectHostListResponse ExportVulEffectHostList(Models\ExportVulEffectHostListRequest $req) 导出漏洞影响主机列表
 * @method Models\ExportVulInfoResponse ExportVulInfo(Models\ExportVulInfoRequest $req) 导出漏洞信息，包括影响主机列表，组件信息
 * @method Models\ExportVulListResponse ExportVulList(Models\ExportVulListRequest $req) 漏洞管理-导出漏洞列表
 * @method Models\ExportWebPageEventListResponse ExportWebPageEventList(Models\ExportWebPageEventListRequest $req) 导出篡改事件列表
 * @method Models\FixBaselineDetectResponse FixBaselineDetect(Models\FixBaselineDetectRequest $req) 修复基线检测
 * @method Models\GetLocalStorageItemResponse GetLocalStorageItem(Models\GetLocalStorageItemRequest $req) 获取本地存储数据
 * @method Models\KeysLocalStorageResponse KeysLocalStorage(Models\KeysLocalStorageRequest $req) 获取本地存储键值列表
 * @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req) 用于设置新增主机自动开通专业防护配置。
 * @method Models\ModifyBanModeResponse ModifyBanMode(Models\ModifyBanModeRequest $req) 修改爆破阻断模式
 * @method Models\ModifyBanStatusResponse ModifyBanStatus(Models\ModifyBanStatusRequest $req) 设置阻断开关状态
 * @method Models\ModifyBanWhiteListResponse ModifyBanWhiteList(Models\ModifyBanWhiteListRequest $req) 修改阻断白名单列表
 * @method Models\ModifyBaselinePolicyResponse ModifyBaselinePolicy(Models\ModifyBaselinePolicyRequest $req) 更改基线策略设置
 * @method Models\ModifyBaselinePolicyStateResponse ModifyBaselinePolicyState(Models\ModifyBaselinePolicyStateRequest $req) 更改基线策略状态
 * @method Models\ModifyBaselineRuleResponse ModifyBaselineRule(Models\ModifyBaselineRuleRequest $req) 更改基线检测规则
 * @method Models\ModifyBaselineRuleIgnoreResponse ModifyBaselineRuleIgnore(Models\ModifyBaselineRuleIgnoreRequest $req) 更改基线忽略规则
 * @method Models\ModifyBaselineWeakPasswordResponse ModifyBaselineWeakPassword(Models\ModifyBaselineWeakPasswordRequest $req) 更改或新增弱口令
 * @method Models\ModifyBashPolicyResponse ModifyBashPolicy(Models\ModifyBashPolicyRequest $req) 新增或修改高危命令策略
 * @method Models\ModifyBashPolicyStatusResponse ModifyBashPolicyStatus(Models\ModifyBashPolicyStatusRequest $req) 切换高危命令策略状态
 * @method Models\ModifyBruteAttackRulesResponse ModifyBruteAttackRules(Models\ModifyBruteAttackRulesRequest $req) 修改暴力破解规则
 * @method Models\ModifyEventAttackStatusResponse ModifyEventAttackStatus(Models\ModifyEventAttackStatusRequest $req) 修改网络攻击事件状态
 * @method Models\ModifyFileTamperEventsResponse ModifyFileTamperEvents(Models\ModifyFileTamperEventsRequest $req) 核心文件事件更新
 * @method Models\ModifyFileTamperRuleResponse ModifyFileTamperRule(Models\ModifyFileTamperRuleRequest $req) 编辑、新增核心文件监控规则
 * @method Models\ModifyFileTamperRuleStatusResponse ModifyFileTamperRuleStatus(Models\ModifyFileTamperRuleStatusRequest $req) 核心文件规则状态更新，支持批量删除 关闭
 * @method Models\ModifyJavaMemShellPluginSwitchResponse ModifyJavaMemShellPluginSwitch(Models\ModifyJavaMemShellPluginSwitchRequest $req) 开关java内存马插件
 * @method Models\ModifyJavaMemShellsStatusResponse ModifyJavaMemShellsStatus(Models\ModifyJavaMemShellsStatusRequest $req) 修改java内存马事件状态
 * @method Models\ModifyLicenseBindsResponse ModifyLicenseBinds(Models\ModifyLicenseBindsRequest $req) 设置中心-授权管理 对某个授权批量绑定机器
 * @method Models\ModifyLicenseOrderResponse ModifyLicenseOrder(Models\ModifyLicenseOrderRequest $req) 编辑《主机安全-按量计费》授权订单
 * @method Models\ModifyLicenseUnBindsResponse ModifyLicenseUnBinds(Models\ModifyLicenseUnBindsRequest $req) 设置中心-授权管理 对某个授权批量解绑机器
 * @method Models\ModifyLogKafkaAccessResponse ModifyLogKafkaAccess(Models\ModifyLogKafkaAccessRequest $req) 新增或修改日志投递kafka接入配置
 * @method Models\ModifyLogKafkaDeliverTypeResponse ModifyLogKafkaDeliverType(Models\ModifyLogKafkaDeliverTypeRequest $req) 修改指定日志类别投递配置、开关
 * @method Models\ModifyLogKafkaStateResponse ModifyLogKafkaState(Models\ModifyLogKafkaStateRequest $req) 修改日志投递状态信息
 * @method Models\ModifyLogStorageConfigResponse ModifyLogStorageConfig(Models\ModifyLogStorageConfigRequest $req) 修改日志存储配置
 * @method Models\ModifyLoginWhiteInfoResponse ModifyLoginWhiteInfo(Models\ModifyLoginWhiteInfoRequest $req) 更新登录审计白名单信息
 * @method Models\ModifyLoginWhiteRecordResponse ModifyLoginWhiteRecord(Models\ModifyLoginWhiteRecordRequest $req) 更新合并后登录审计白名单信息（服务器列表数目应小于1000）
 * @method Models\ModifyMachineAutoClearConfigResponse ModifyMachineAutoClearConfig(Models\ModifyMachineAutoClearConfigRequest $req) 修改机器清理配置
 * @method Models\ModifyMachineRemarkResponse ModifyMachineRemark(Models\ModifyMachineRemarkRequest $req) 修改主机备注信息
 * @method Models\ModifyMaliciousRequestWhiteListResponse ModifyMaliciousRequestWhiteList(Models\ModifyMaliciousRequestWhiteListRequest $req) 更新恶意请求白名单
 * @method Models\ModifyMalwareTimingScanSettingsResponse ModifyMalwareTimingScanSettings(Models\ModifyMalwareTimingScanSettingsRequest $req) 定时扫描设置
 * @method Models\ModifyMalwareWhiteListResponse ModifyMalwareWhiteList(Models\ModifyMalwareWhiteListRequest $req) 编辑木马白名单
 * @method Models\ModifyNetAttackSettingResponse ModifyNetAttackSetting(Models\ModifyNetAttackSettingRequest $req) 修改网络攻击设置
 * @method Models\ModifyNetAttackWhiteListResponse ModifyNetAttackWhiteList(Models\ModifyNetAttackWhiteListRequest $req) 编辑网络攻击白名单
 * @method Models\ModifyOrderAttributeResponse ModifyOrderAttribute(Models\ModifyOrderAttributeRequest $req) 对订单属性编辑
 * @method Models\ModifyRansomDefenseEventsStatusResponse ModifyRansomDefenseEventsStatus(Models\ModifyRansomDefenseEventsStatusRequest $req) 修改防勒索事件状态
 * @method Models\ModifyRansomDefenseStrategyStatusResponse ModifyRansomDefenseStrategyStatus(Models\ModifyRansomDefenseStrategyStatusRequest $req) 批量修改防勒索策略状态
 * @method Models\ModifyRaspMaxCpuResponse ModifyRaspMaxCpu(Models\ModifyRaspMaxCpuRequest $req) 编辑漏洞防御最大cpu配置
 * @method Models\ModifyRaspRulesResponse ModifyRaspRules(Models\ModifyRaspRulesRequest $req) 添加漏洞防御白名单
 * @method Models\ModifyReverseShellRulesAggregationResponse ModifyReverseShellRulesAggregation(Models\ModifyReverseShellRulesAggregationRequest $req) 编辑反弹Shell规则（支持多服务器选择）
 * @method Models\ModifyRiskDnsPolicyResponse ModifyRiskDnsPolicy(Models\ModifyRiskDnsPolicyRequest $req) 更改恶意请求策略
 * @method Models\ModifyRiskDnsPolicyStatusResponse ModifyRiskDnsPolicyStatus(Models\ModifyRiskDnsPolicyStatusRequest $req) 更改恶意请求策略状态
 * @method Models\ModifyRiskEventsStatusResponse ModifyRiskEventsStatus(Models\ModifyRiskEventsStatusRequest $req) 入侵检测所有事件的状态，包括：文件查杀，异常登录，密码破解，高危命令，反弹shell，本地提取
 * @method Models\ModifyUsersConfigResponse ModifyUsersConfig(Models\ModifyUsersConfigRequest $req) 用于创建/修改用户自定义配置
 * @method Models\ModifyVulDefenceEventStatusResponse ModifyVulDefenceEventStatus(Models\ModifyVulDefenceEventStatusRequest $req) 修改漏洞防御事件状态（修复漏洞通过其他接口实现）
 * @method Models\ModifyVulDefenceSettingResponse ModifyVulDefenceSetting(Models\ModifyVulDefenceSettingRequest $req) 修改漏洞防御插件设置
1）新增主机自动加入，scope为1，quuids为空
2）全量旗舰版不自动加入，scope为0，quuids为当前quuid列表，
3）给定quuid列表，scope为0，quuids为用户选择quuid
 * @method Models\ModifyWarningHostConfigResponse ModifyWarningHostConfig(Models\ModifyWarningHostConfigRequest $req) 修改告警机器范围配置
 * @method Models\ModifyWarningSettingResponse ModifyWarningSetting(Models\ModifyWarningSettingRequest $req) 修改告警设置
 * @method Models\ModifyWebHookPolicyResponse ModifyWebHookPolicy(Models\ModifyWebHookPolicyRequest $req) 新增或修改告警策略
 * @method Models\ModifyWebHookPolicyStatusResponse ModifyWebHookPolicyStatus(Models\ModifyWebHookPolicyStatusRequest $req) 修改告警策略开关
 * @method Models\ModifyWebHookReceiverResponse ModifyWebHookReceiver(Models\ModifyWebHookReceiverRequest $req) 新增或更新告警接收人
 * @method Models\ModifyWebHookRuleResponse ModifyWebHookRule(Models\ModifyWebHookRuleRequest $req) 新增或修改企微机器人规则
 * @method Models\ModifyWebHookRuleStatusResponse ModifyWebHookRuleStatus(Models\ModifyWebHookRuleStatusRequest $req) 修改企微机器人规则状态
 * @method Models\ModifyWebPageProtectDirResponse ModifyWebPageProtectDir(Models\ModifyWebPageProtectDirRequest $req) 创建/修改网站防护目录
 * @method Models\ModifyWebPageProtectSettingResponse ModifyWebPageProtectSetting(Models\ModifyWebPageProtectSettingRequest $req) 修改网站防护设置
 * @method Models\ModifyWebPageProtectSwitchResponse ModifyWebPageProtectSwitch(Models\ModifyWebPageProtectSwitchRequest $req) 网站防篡改防护设置开关
 * @method Models\RansomDefenseRollbackResponse RansomDefenseRollback(Models\RansomDefenseRollbackRequest $req) 防勒索快照回滚
 * @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) 本接口（RecoverMalwares）用于批量恢复已经被隔离的木马文件。
 * @method Models\RemoveLocalStorageItemResponse RemoveLocalStorageItem(Models\RemoveLocalStorageItemRequest $req) 删除本地存储数据
 * @method Models\RemoveMachineResponse RemoveMachine(Models\RemoveMachineRequest $req) 删除主机所有记录，目前只支持非腾讯云主机，且需要主机在离线状态
 * @method Models\RetryCreateSnapshotResponse RetryCreateSnapshot(Models\RetryCreateSnapshotRequest $req) 快照创建失败时可以重试创建快照并且自动进行漏洞修复
 * @method Models\RetryVulFixResponse RetryVulFix(Models\RetryVulFixRequest $req) 修复失败时单独对某一个主机修复漏洞
 * @method Models\ScanAssetResponse ScanAsset(Models\ScanAssetRequest $req) 资产指纹启动扫描
 * @method Models\ScanBaselineResponse ScanBaseline(Models\ScanBaselineRequest $req) 基线检测与基线重新检测接口
 * @method Models\ScanTaskAgainResponse ScanTaskAgain(Models\ScanTaskAgainRequest $req) ScanTaskAgain  重新开始扫描任务，可以指定机器
 * @method Models\ScanVulResponse ScanVul(Models\ScanVulRequest $req) 漏洞一键检测
 * @method Models\ScanVulAgainResponse ScanVulAgain(Models\ScanVulAgainRequest $req) 漏洞管理-重新检测接口
 * @method Models\ScanVulSettingResponse ScanVulSetting(Models\ScanVulSettingRequest $req) 定期扫描漏洞设置
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) 查询日志
 * @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) 本接口（SeparateMalwares）用于隔离木马。
 * @method Models\SetBashEventsStatusResponse SetBashEventsStatus(Models\SetBashEventsStatusRequest $req) 设置高危命令事件状态
 * @method Models\SetLocalStorageExpireResponse SetLocalStorageExpire(Models\SetLocalStorageExpireRequest $req) 设置本地存储过期时间
 * @method Models\SetLocalStorageItemResponse SetLocalStorageItem(Models\SetLocalStorageItemRequest $req) 设置本地存储数据
 * @method Models\StartBaselineDetectResponse StartBaselineDetect(Models\StartBaselineDetectRequest $req) 检测基线
 * @method Models\StopAssetScanResponse StopAssetScan(Models\StopAssetScanRequest $req) 停止资产扫描任务
 * @method Models\StopBaselineDetectResponse StopBaselineDetect(Models\StopBaselineDetectRequest $req) 停止基线检测
 * @method Models\StopNoticeBanTipsResponse StopNoticeBanTips(Models\StopNoticeBanTipsRequest $req) 不再提醒爆破阻断提示弹窗
 * @method Models\SwitchBashRulesResponse SwitchBashRules(Models\SwitchBashRulesRequest $req) 切换高危命令规则状态
 * @method Models\SyncAssetScanResponse SyncAssetScan(Models\SyncAssetScanRequest $req) 同步资产扫描信息
 * @method Models\SyncBaselineDetectSummaryResponse SyncBaselineDetectSummary(Models\SyncBaselineDetectSummaryRequest $req) 同步基线检测进度概要
 * @method Models\SyncMachinesResponse SyncMachines(Models\SyncMachinesRequest $req) 同步机器信息
 * @method Models\TestWebHookRuleResponse TestWebHookRule(Models\TestWebHookRuleRequest $req) 测试企微机器人规则
 * @method Models\TrustMalwaresResponse TrustMalwares(Models\TrustMalwaresRequest $req) 本接口(TrustMalwares)将被识别木马文件设为信任。
 * @method Models\UntrustMalwaresResponse UntrustMalwares(Models\UntrustMalwaresRequest $req) 本接口（UntrustMalwares）用于取消信任木马文件。
 * @method Models\UpdateBaselineStrategyResponse UpdateBaselineStrategy(Models\UpdateBaselineStrategyRequest $req) 根据基线策略id更新策略信息
 * @method Models\UpdateMachineTagsResponse UpdateMachineTags(Models\UpdateMachineTagsRequest $req) 关联机器标签列表
 */

class CwpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cwp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cwp";

    /**
     * @var string
     */
    protected $version = "2018-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cwp")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
