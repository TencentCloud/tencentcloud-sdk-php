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

namespace TencentCloud\Cwp\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cwp\V20180228\Models as Models;

/**
 * @method Models\CancelIgnoreVulResponse CancelIgnoreVul(Models\CancelIgnoreVulRequest $req) 取消漏洞忽略
 * @method Models\ChangeRuleEventsIgnoreStatusResponse ChangeRuleEventsIgnoreStatus(Models\ChangeRuleEventsIgnoreStatusRequest $req) 根据检测项id或事件id批量忽略事件或取消忽略
 * @method Models\CheckBashRuleParamsResponse CheckBashRuleParams(Models\CheckBashRuleParamsRequest $req) 校验高危命令用户规则新增和编辑时的参数。
 * @method Models\CreateBaselineStrategyResponse CreateBaselineStrategy(Models\CreateBaselineStrategyRequest $req) 根据策略信息创建基线策略
 * @method Models\CreateEmergencyVulScanResponse CreateEmergencyVulScan(Models\CreateEmergencyVulScanRequest $req) 创建应急漏洞扫描任务
 * @method Models\CreateLicenseOrderResponse CreateLicenseOrder(Models\CreateLicenseOrderRequest $req) CreateLicenseOrder 该接口可以创建专业版/旗舰版订单
支持预付费后付费创建
后付费订单直接创建成功
预付费订单仅下单不支付,需要调用计费支付接口进行支付
 * @method Models\CreateProtectServerResponse CreateProtectServer(Models\CreateProtectServerRequest $req) 添加网站防护服务器
 * @method Models\CreateScanMalwareSettingResponse CreateScanMalwareSetting(Models\CreateScanMalwareSettingRequest $req) 该接口可以对入侵检测-文件查杀扫描检测
 * @method Models\CreateSearchLogResponse CreateSearchLog(Models\CreateSearchLogRequest $req) 添加历史搜索记录
 * @method Models\CreateSearchTemplateResponse CreateSearchTemplate(Models\CreateSearchTemplateRequest $req) 添加检索模板
 * @method Models\DeleteAttackLogsResponse DeleteAttackLogs(Models\DeleteAttackLogsRequest $req) 删除网络攻击日志
 * @method Models\DeleteBaselinePolicyResponse DeleteBaselinePolicy(Models\DeleteBaselinePolicyRequest $req) 删除基线策略配置
 * @method Models\DeleteBaselineStrategyResponse DeleteBaselineStrategy(Models\DeleteBaselineStrategyRequest $req) 根据基线策略id删除策略
 * @method Models\DeleteBashEventsResponse DeleteBashEvents(Models\DeleteBashEventsRequest $req) 根据Ids删除高危命令事件
 * @method Models\DeleteBashRulesResponse DeleteBashRules(Models\DeleteBashRulesRequest $req) 删除高危命令规则
 * @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) 本接口 (DeleteBruteAttacks) 用于删除暴力破解记录。
 * @method Models\DeleteLicenseRecordResponse DeleteLicenseRecord(Models\DeleteLicenseRecordRequest $req) 对授权管理-订单列表内已过期的订单进行删除.(删除后的订单不在统计范畴内)
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) 本接口用于删除异地登录白名单规则。
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) 本接口（DeleteMachine）用于卸载云镜客户端。
 * @method Models\DeleteMachineTagResponse DeleteMachineTag(Models\DeleteMachineTagRequest $req) 删除服务器关联的标签
 * @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) 本接口 (DeleteMaliciousRequests) 用于删除恶意请求记录。
 * @method Models\DeleteMalwareScanTaskResponse DeleteMalwareScanTask(Models\DeleteMalwareScanTaskRequest $req) 入侵管理-终止扫描任务
 * @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) 本接口 (DeleteMalwares) 用于删除木马记录。
 * @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) 本接口 (DeleteNonlocalLoginPlaces) 用于删除异地登录记录。
 * @method Models\DeletePrivilegeEventsResponse DeletePrivilegeEvents(Models\DeletePrivilegeEventsRequest $req) 根据Ids删除本地提权
 * @method Models\DeletePrivilegeRulesResponse DeletePrivilegeRules(Models\DeletePrivilegeRulesRequest $req) 删除本地提权规则
 * @method Models\DeleteProtectDirResponse DeleteProtectDir(Models\DeleteProtectDirRequest $req) 删除防护网站
 * @method Models\DeleteReverseShellEventsResponse DeleteReverseShellEvents(Models\DeleteReverseShellEventsRequest $req) 根据Ids删除反弹Shell事件
 * @method Models\DeleteReverseShellRulesResponse DeleteReverseShellRules(Models\DeleteReverseShellRulesRequest $req) 删除反弹Shell规则
 * @method Models\DeleteScanTaskResponse DeleteScanTask(Models\DeleteScanTaskRequest $req) DeleteScanTask 该接口可以对指定类型的扫描任务进行停止扫描;
 * @method Models\DeleteSearchTemplateResponse DeleteSearchTemplate(Models\DeleteSearchTemplateRequest $req) 删除检索模板
 * @method Models\DeleteTagsResponse DeleteTags(Models\DeleteTagsRequest $req) 删除标签
 * @method Models\DeleteWebPageEventLogResponse DeleteWebPageEventLog(Models\DeleteWebPageEventLogRequest $req) 网站防篡改-删除事件记录
 * @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) 本接口 (DescribeAccountStatistics) 用于获取帐号统计列表数据。
 * @method Models\DescribeAssetAppListResponse DescribeAssetAppList(Models\DescribeAssetAppListRequest $req) 查询应用列表
 * @method Models\DescribeAssetAppProcessListResponse DescribeAssetAppProcessList(Models\DescribeAssetAppProcessListRequest $req) 获取软件关联进程列表
 * @method Models\DescribeAssetCoreModuleInfoResponse DescribeAssetCoreModuleInfo(Models\DescribeAssetCoreModuleInfoRequest $req) 获取内核模块详情
 * @method Models\DescribeAssetCoreModuleListResponse DescribeAssetCoreModuleList(Models\DescribeAssetCoreModuleListRequest $req) 查询资产管理内核模块列表
 * @method Models\DescribeAssetDatabaseInfoResponse DescribeAssetDatabaseInfo(Models\DescribeAssetDatabaseInfoRequest $req) 获取资产管理数据库详情
 * @method Models\DescribeAssetDatabaseListResponse DescribeAssetDatabaseList(Models\DescribeAssetDatabaseListRequest $req) 查询资产管理数据库列表
 * @method Models\DescribeAssetEnvListResponse DescribeAssetEnvList(Models\DescribeAssetEnvListRequest $req) 查询资产管理环境变量列表
 * @method Models\DescribeAssetHostTotalCountResponse DescribeAssetHostTotalCount(Models\DescribeAssetHostTotalCountRequest $req) 获取主机所有资源数量
 * @method Models\DescribeAssetInfoResponse DescribeAssetInfo(Models\DescribeAssetInfoRequest $req) 获取资产数量： 主机数、账号数、端口数、进程数、软件数、数据库数、Web应用数、Web框架数、Web服务数、Web站点数
 * @method Models\DescribeAssetInitServiceListResponse DescribeAssetInitServiceList(Models\DescribeAssetInitServiceListRequest $req) 查询资产管理启动服务列表
 * @method Models\DescribeAssetJarInfoResponse DescribeAssetJarInfo(Models\DescribeAssetJarInfoRequest $req) 获取Jar包详情
 * @method Models\DescribeAssetJarListResponse DescribeAssetJarList(Models\DescribeAssetJarListRequest $req) 查询Jar包列表
 * @method Models\DescribeAssetMachineDetailResponse DescribeAssetMachineDetail(Models\DescribeAssetMachineDetailRequest $req) 获取资产管理主机资源详细信息
 * @method Models\DescribeAssetMachineListResponse DescribeAssetMachineList(Models\DescribeAssetMachineListRequest $req) 获取资产指纹页面的资源监控列表
 * @method Models\DescribeAssetPlanTaskListResponse DescribeAssetPlanTaskList(Models\DescribeAssetPlanTaskListRequest $req) 查询资产管理计划任务列表
 * @method Models\DescribeAssetPortInfoListResponse DescribeAssetPortInfoList(Models\DescribeAssetPortInfoListRequest $req) 获取资产管理端口列表
 * @method Models\DescribeAssetProcessInfoListResponse DescribeAssetProcessInfoList(Models\DescribeAssetProcessInfoListRequest $req) 获取资产管理进程列表
 * @method Models\DescribeAssetRecentMachineInfoResponse DescribeAssetRecentMachineInfo(Models\DescribeAssetRecentMachineInfoRequest $req) 获取主机最近趋势情况
 * @method Models\DescribeAssetSystemPackageListResponse DescribeAssetSystemPackageList(Models\DescribeAssetSystemPackageListRequest $req) 获取资产管理系统安装包列表
 * @method Models\DescribeAssetUserInfoResponse DescribeAssetUserInfo(Models\DescribeAssetUserInfoRequest $req) 获取主机账号详情
 * @method Models\DescribeAssetUserListResponse DescribeAssetUserList(Models\DescribeAssetUserListRequest $req) 获取账号列表
 * @method Models\DescribeAssetWebAppListResponse DescribeAssetWebAppList(Models\DescribeAssetWebAppListRequest $req) 获取资产管理Web应用列表
 * @method Models\DescribeAssetWebAppPluginListResponse DescribeAssetWebAppPluginList(Models\DescribeAssetWebAppPluginListRequest $req) 获取资产管理Web应用插件列表
 * @method Models\DescribeAssetWebFrameListResponse DescribeAssetWebFrameList(Models\DescribeAssetWebFrameListRequest $req) 获取资产管理Web框架列表
 * @method Models\DescribeAssetWebLocationInfoResponse DescribeAssetWebLocationInfo(Models\DescribeAssetWebLocationInfoRequest $req) 获取Web站点详情
 * @method Models\DescribeAssetWebLocationListResponse DescribeAssetWebLocationList(Models\DescribeAssetWebLocationListRequest $req) 获取Web站点列表
 * @method Models\DescribeAssetWebServiceInfoListResponse DescribeAssetWebServiceInfoList(Models\DescribeAssetWebServiceInfoListRequest $req) 查询资产管理Web服务列表
 * @method Models\DescribeAssetWebServiceProcessListResponse DescribeAssetWebServiceProcessList(Models\DescribeAssetWebServiceProcessListRequest $req) 获取Web服务关联进程列表
 * @method Models\DescribeAttackLogInfoResponse DescribeAttackLogInfo(Models\DescribeAttackLogInfoRequest $req) 网络攻击日志详情
 * @method Models\DescribeAttackLogsResponse DescribeAttackLogs(Models\DescribeAttackLogsRequest $req) 按分页形式展示网络攻击日志列表
 * @method Models\DescribeAttackVulTypeListResponse DescribeAttackVulTypeList(Models\DescribeAttackVulTypeListRequest $req) 获取网络攻击威胁类型列表
 * @method Models\DescribeAvailableExpertServiceDetailResponse DescribeAvailableExpertServiceDetail(Models\DescribeAvailableExpertServiceDetailRequest $req) 专家服务-可用订单详情
 * @method Models\DescribeBanModeResponse DescribeBanMode(Models\DescribeBanModeRequest $req) 获取爆破阻断模式
 * @method Models\DescribeBanRegionsResponse DescribeBanRegions(Models\DescribeBanRegionsRequest $req) 获取阻断地域
 * @method Models\DescribeBanStatusResponse DescribeBanStatus(Models\DescribeBanStatusRequest $req) 获取阻断按钮状态
 * @method Models\DescribeBanWhiteListResponse DescribeBanWhiteList(Models\DescribeBanWhiteListRequest $req) 获取阻断白名单列表
 * @method Models\DescribeBaselineAnalysisDataResponse DescribeBaselineAnalysisData(Models\DescribeBaselineAnalysisDataRequest $req) 根据基线策略id查询基线策略数据概览统计
 * @method Models\DescribeBaselineBasicInfoResponse DescribeBaselineBasicInfo(Models\DescribeBaselineBasicInfoRequest $req) 查询基线基础信息列表
 * @method Models\DescribeBaselineDetailResponse DescribeBaselineDetail(Models\DescribeBaselineDetailRequest $req) 根据基线id查询基线详情接口
 * @method Models\DescribeBaselineEffectHostListResponse DescribeBaselineEffectHostList(Models\DescribeBaselineEffectHostListRequest $req) 根据基线id查询基线影响主机列表
 * @method Models\DescribeBaselineHostDetectListResponse DescribeBaselineHostDetectList(Models\DescribeBaselineHostDetectListRequest $req) 获取基线检测主机列表
 * @method Models\DescribeBaselineHostTopResponse DescribeBaselineHostTop(Models\DescribeBaselineHostTopRequest $req) 接口返回TopN的风险服务器
 * @method Models\DescribeBaselineItemDetectListResponse DescribeBaselineItemDetectList(Models\DescribeBaselineItemDetectListRequest $req) 获取基线检测项的列表
 * @method Models\DescribeBaselineItemListResponse DescribeBaselineItemList(Models\DescribeBaselineItemListRequest $req) 获取基线项检测结果列表
 * @method Models\DescribeBaselineListResponse DescribeBaselineList(Models\DescribeBaselineListRequest $req) 查询基线列表信息
 * @method Models\DescribeBaselinePolicyListResponse DescribeBaselinePolicyList(Models\DescribeBaselinePolicyListRequest $req) 获取基线策略列表
 * @method Models\DescribeBaselineRuleResponse DescribeBaselineRule(Models\DescribeBaselineRuleRequest $req) 根据基线id查询下属检测项信息
 * @method Models\DescribeBaselineScanScheduleResponse DescribeBaselineScanSchedule(Models\DescribeBaselineScanScheduleRequest $req) 根据任务id查询基线检测进度
 * @method Models\DescribeBaselineStrategyDetailResponse DescribeBaselineStrategyDetail(Models\DescribeBaselineStrategyDetailRequest $req) 根据基线策略id查询策略详情
 * @method Models\DescribeBaselineStrategyListResponse DescribeBaselineStrategyList(Models\DescribeBaselineStrategyListRequest $req) 查询一个用户下的基线策略信息
 * @method Models\DescribeBaselineTopResponse DescribeBaselineTop(Models\DescribeBaselineTopRequest $req) 根据策略id查询基线检测项TOP
 * @method Models\DescribeBashEventsResponse DescribeBashEvents(Models\DescribeBashEventsRequest $req) 获取高危命令列表
 * @method Models\DescribeBashEventsNewResponse DescribeBashEventsNew(Models\DescribeBashEventsNewRequest $req) 获取高危命令列表(新)
 * @method Models\DescribeBashRulesResponse DescribeBashRules(Models\DescribeBashRulesRequest $req) 获取高危命令规则列表
 * @method Models\DescribeBruteAttackListResponse DescribeBruteAttackList(Models\DescribeBruteAttackListRequest $req) 获取密码破解列表
 * @method Models\DescribeBruteAttackRulesResponse DescribeBruteAttackRules(Models\DescribeBruteAttackRulesRequest $req) 获取爆破破解规则
 * @method Models\DescribeClientExceptionResponse DescribeClientException(Models\DescribeClientExceptionRequest $req) 获取客户端异常事件
 * @method Models\DescribeComponentStatisticsResponse DescribeComponentStatistics(Models\DescribeComponentStatisticsRequest $req) 本接口 (DescribeComponentStatistics) 用于获取组件统计列表数据。
 * @method Models\DescribeESAggregationsResponse DescribeESAggregations(Models\DescribeESAggregationsRequest $req) 获取ES字段聚合结果
 * @method Models\DescribeEmergencyResponseListResponse DescribeEmergencyResponseList(Models\DescribeEmergencyResponseListRequest $req) 专家服务-应急响应列表
 * @method Models\DescribeEmergencyVulListResponse DescribeEmergencyVulList(Models\DescribeEmergencyVulListRequest $req) 获取应急漏洞列表
 * @method Models\DescribeExpertServiceListResponse DescribeExpertServiceList(Models\DescribeExpertServiceListRequest $req) 专家服务-安全管家列表
 * @method Models\DescribeExpertServiceOrderListResponse DescribeExpertServiceOrderList(Models\DescribeExpertServiceOrderListRequest $req) 专家服务-专家服务订单列表
 * @method Models\DescribeExportMachinesResponse DescribeExportMachines(Models\DescribeExportMachinesRequest $req) 本接口 (DescribeExportMachines) 用于导出区域主机列表。
 * @method Models\DescribeGeneralStatResponse DescribeGeneralStat(Models\DescribeGeneralStatRequest $req) 获取主机相关统计
 * @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) 本接口 (DescribeHistoryAccounts) 用于获取帐号变更历史列表数据。
 * @method Models\DescribeHistoryServiceResponse DescribeHistoryService(Models\DescribeHistoryServiceRequest $req) 查询日志检索服务信息
 * @method Models\DescribeHostLoginListResponse DescribeHostLoginList(Models\DescribeHostLoginListRequest $req) 获取登录审计列表
 * @method Models\DescribeIgnoreBaselineRuleResponse DescribeIgnoreBaselineRule(Models\DescribeIgnoreBaselineRuleRequest $req) 查询已经忽略的检测项信息
 * @method Models\DescribeIgnoreRuleEffectHostListResponse DescribeIgnoreRuleEffectHostList(Models\DescribeIgnoreRuleEffectHostListRequest $req) 根据检测项id与筛选条件查询忽略检测项影响主机列表信息
 * @method Models\DescribeImportMachineInfoResponse DescribeImportMachineInfo(Models\DescribeImportMachineInfoRequest $req) 查询批量导入机器信息
 * @method Models\DescribeIndexListResponse DescribeIndexList(Models\DescribeIndexListRequest $req) 获取索引列表
 * @method Models\DescribeJavaMemShellListResponse DescribeJavaMemShellList(Models\DescribeJavaMemShellListRequest $req) 查询java内存马事件列表
 * @method Models\DescribeLicenseBindListResponse DescribeLicenseBindList(Models\DescribeLicenseBindListRequest $req) 该接口可以获取设置中心-授权管理,某个授权下已绑定的授权机器列表
 * @method Models\DescribeLicenseBindScheduleResponse DescribeLicenseBindSchedule(Models\DescribeLicenseBindScheduleRequest $req) 查询授权绑定任务的进度
 * @method Models\DescribeLicenseGeneralResponse DescribeLicenseGeneral(Models\DescribeLicenseGeneralRequest $req) 授权管理-授权概览信息
 * @method Models\DescribeLicenseListResponse DescribeLicenseList(Models\DescribeLicenseListRequest $req) 获取用户所有授权订单信息
 * @method Models\DescribeLogStorageStatisticResponse DescribeLogStorageStatistic(Models\DescribeLogStorageStatisticRequest $req) 获取日志检索容量使用统计
 * @method Models\DescribeLoginWhiteCombinedListResponse DescribeLoginWhiteCombinedList(Models\DescribeLoginWhiteCombinedListRequest $req) 获取异地登录白名单合并后列表
 * @method Models\DescribeLoginWhiteListResponse DescribeLoginWhiteList(Models\DescribeLoginWhiteListRequest $req) 获取异地登录白名单列表
 * @method Models\DescribeMachineInfoResponse DescribeMachineInfo(Models\DescribeMachineInfoRequest $req) 本接口（DescribeMachineInfo）用于获取机器详细信息。
 * @method Models\DescribeMachineListResponse DescribeMachineList(Models\DescribeMachineListRequest $req) 用于网页防篡改获取区域主机列表。
 * @method Models\DescribeMachineOsListResponse DescribeMachineOsList(Models\DescribeMachineOsListRequest $req) 查询可筛选操作系统列表.
 * @method Models\DescribeMachineRegionsResponse DescribeMachineRegions(Models\DescribeMachineRegionsRequest $req) 获取机器地域列表
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 本接口 (DescribeMachines) 用于获取区域主机列表。
 * @method Models\DescribeMalWareListResponse DescribeMalWareList(Models\DescribeMalWareListRequest $req) 入侵检测获取木马列表
 * @method Models\DescribeMaliciousRequestWhiteListResponse DescribeMaliciousRequestWhiteList(Models\DescribeMaliciousRequestWhiteListRequest $req) 查询恶意请求白名单列表
 * @method Models\DescribeMalwareFileResponse DescribeMalwareFile(Models\DescribeMalwareFileRequest $req) 获取木马文件下载地址
 * @method Models\DescribeMalwareInfoResponse DescribeMalwareInfo(Models\DescribeMalwareInfoRequest $req) 查看恶意文件详情
 * @method Models\DescribeMalwareRiskWarningResponse DescribeMalwareRiskWarning(Models\DescribeMalwareRiskWarningRequest $req) 打开入侵检测-恶意文件检测,弹出风险预警内容
 * @method Models\DescribeMalwareTimingScanSettingResponse DescribeMalwareTimingScanSetting(Models\DescribeMalwareTimingScanSettingRequest $req) 查询定时扫描配置
 * @method Models\DescribeMonthInspectionReportResponse DescribeMonthInspectionReport(Models\DescribeMonthInspectionReportRequest $req) 专家服务-安全管家月巡检报告下载
 * @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) 本接口 (DescribeOpenPortStatistics) 用于获取端口统计列表。
 * @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) 获取概览统计数据。
 * @method Models\DescribePrivilegeEventsResponse DescribePrivilegeEvents(Models\DescribePrivilegeEventsRequest $req) 获取本地提权事件列表
 * @method Models\DescribePrivilegeRulesResponse DescribePrivilegeRules(Models\DescribePrivilegeRulesRequest $req) 获取本地提权规则列表
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) 用于获取专业版概览信息。
 * @method Models\DescribeProVersionStatusResponse DescribeProVersionStatus(Models\DescribeProVersionStatusRequest $req) 用于获取单台主机或所有主机是否开通专业版状态。
 * @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) 本接口 (DescribeProcessStatistics) 用于获取进程统计列表数据。
 * @method Models\DescribeProtectDirListResponse DescribeProtectDirList(Models\DescribeProtectDirListRequest $req) 网页防篡改防护目录列表
 * @method Models\DescribeProtectDirRelatedServerResponse DescribeProtectDirRelatedServer(Models\DescribeProtectDirRelatedServerRequest $req) 查询防护目录关联服务器列表信息
 * @method Models\DescribeProtectNetListResponse DescribeProtectNetList(Models\DescribeProtectNetListRequest $req) 专家服务-旗舰重保列表
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) 获取反弹Shell列表
 * @method Models\DescribeReverseShellRulesResponse DescribeReverseShellRules(Models\DescribeReverseShellRulesRequest $req) 获取反弹Shell规则列表
 * @method Models\DescribeRiskDnsListResponse DescribeRiskDnsList(Models\DescribeRiskDnsListRequest $req) 入侵检测，获取恶意请求列表
 * @method Models\DescribeSaveOrUpdateWarningsResponse DescribeSaveOrUpdateWarnings(Models\DescribeSaveOrUpdateWarningsRequest $req) 更新或者插入用户告警设置(该接口废弃,请调用 ModifyWarningSetting )
 * @method Models\DescribeScanMalwareScheduleResponse DescribeScanMalwareSchedule(Models\DescribeScanMalwareScheduleRequest $req) 查询木马扫描进度
 * @method Models\DescribeScanScheduleResponse DescribeScanSchedule(Models\DescribeScanScheduleRequest $req) 根据taskid查询检测进度
 * @method Models\DescribeScanStateResponse DescribeScanState(Models\DescribeScanStateRequest $req) DescribeScanState 该接口能查询对应模块正在进行的扫描任务状态
 * @method Models\DescribeScanTaskDetailsResponse DescribeScanTaskDetails(Models\DescribeScanTaskDetailsRequest $req) DescribeScanTaskDetails 查询扫描任务详情 , 可以查询扫描进度信息/异常;
 * @method Models\DescribeScanTaskStatusResponse DescribeScanTaskStatus(Models\DescribeScanTaskStatusRequest $req) DescribeScanTaskStatus 查询机器扫描状态列表用于过滤筛选
 * @method Models\DescribeScanVulSettingResponse DescribeScanVulSetting(Models\DescribeScanVulSettingRequest $req) 查询定期检测的配置
 * @method Models\DescribeSearchExportListResponse DescribeSearchExportList(Models\DescribeSearchExportListRequest $req) 导出ES查询文档列表
 * @method Models\DescribeSearchLogsResponse DescribeSearchLogs(Models\DescribeSearchLogsRequest $req) 获取历史搜索记录
 * @method Models\DescribeSearchTemplatesResponse DescribeSearchTemplates(Models\DescribeSearchTemplatesRequest $req) 获取快速检索列表
 * @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) 本接口 (DescribeSecurityDynamics) 用于获取安全事件动态消息数据。
 * @method Models\DescribeSecurityEventStatResponse DescribeSecurityEventStat(Models\DescribeSecurityEventStatRequest $req) 获取安全事件统计
 * @method Models\DescribeSecurityEventsCntResponse DescribeSecurityEventsCnt(Models\DescribeSecurityEventsCntRequest $req) 获取安全概览相关事件统计数据接口
 * @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) 本接口 (DescribeSecurityTrends) 用于获取安全事件统计数据。
 * @method Models\DescribeServerRelatedDirInfoResponse DescribeServerRelatedDirInfo(Models\DescribeServerRelatedDirInfoRequest $req) 查询服务区关联目录详情
 * @method Models\DescribeServersAndRiskAndFirstInfoResponse DescribeServersAndRiskAndFirstInfo(Models\DescribeServersAndRiskAndFirstInfoRequest $req) 获取待处理风险文件数+影响服务器数+是否试用检测+最近检测时间
 * @method Models\DescribeStrategyExistResponse DescribeStrategyExist(Models\DescribeStrategyExistRequest $req) 根据策略名查询策略是否存在
 * @method Models\DescribeTagMachinesResponse DescribeTagMachines(Models\DescribeTagMachinesRequest $req) 获取指定标签关联的服务器信息
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) 获取所有主机标签
 * @method Models\DescribeUndoVulCountsResponse DescribeUndoVulCounts(Models\DescribeUndoVulCountsRequest $req) 获取漏洞管理模块指定类型的待处理漏洞数、主机数和非专业版主机数量
 * @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) 此接口（DescribeUsualLoginPlaces）用于查询常用登录地。
 * @method Models\DescribeVersionStatisticsResponse DescribeVersionStatistics(Models\DescribeVersionStatisticsRequest $req) 用于统计专业版和基础版机器数。
 * @method Models\DescribeVulCountByDatesResponse DescribeVulCountByDates(Models\DescribeVulCountByDatesRequest $req) 漏洞管理模块，获取近日指定类型的漏洞数量和主机数量
 * @method Models\DescribeVulEffectHostListResponse DescribeVulEffectHostList(Models\DescribeVulEffectHostListRequest $req) 漏洞影响主机列表
 * @method Models\DescribeVulHostCountScanTimeResponse DescribeVulHostCountScanTime(Models\DescribeVulHostCountScanTimeRequest $req) 获取待处理漏洞数+影响主机数
 * @method Models\DescribeVulHostTopResponse DescribeVulHostTop(Models\DescribeVulHostTopRequest $req) 获取服务器风险top列表
 * @method Models\DescribeVulInfoCvssResponse DescribeVulInfoCvss(Models\DescribeVulInfoCvssRequest $req) 漏洞详情，带CVSS版本
 * @method Models\DescribeVulLevelCountResponse DescribeVulLevelCount(Models\DescribeVulLevelCountRequest $req) 漏洞数量等级分布统计
 * @method Models\DescribeVulListResponse DescribeVulList(Models\DescribeVulListRequest $req) 获取漏洞列表数据
 * @method Models\DescribeVulTopResponse DescribeVulTop(Models\DescribeVulTopRequest $req) 漏洞top统计
 * @method Models\DescribeWarningListResponse DescribeWarningList(Models\DescribeWarningListRequest $req) 获取当前用户告警列表
 * @method Models\DescribeWebPageEventListResponse DescribeWebPageEventList(Models\DescribeWebPageEventListRequest $req) 查询篡改事件列表
 * @method Models\DescribeWebPageGeneralizeResponse DescribeWebPageGeneralize(Models\DescribeWebPageGeneralizeRequest $req) 查询网站防篡改概览信息
 * @method Models\DescribeWebPageProtectStatResponse DescribeWebPageProtectStat(Models\DescribeWebPageProtectStatRequest $req) 网站防篡改-查询动态防护信息
 * @method Models\DescribeWebPageServiceInfoResponse DescribeWebPageServiceInfo(Models\DescribeWebPageServiceInfoRequest $req) 网站防篡改-查询网页防篡改服务器购买信息及服务器信息
 * @method Models\DestroyOrderResponse DestroyOrder(Models\DestroyOrderRequest $req) DestroyOrder  该接口可以对资源销毁.
 * @method Models\EditBashRulesResponse EditBashRules(Models\EditBashRulesRequest $req) 新增或修改高危命令规则
 * @method Models\EditTagsResponse EditTags(Models\EditTagsRequest $req) 新增或编辑标签
 * @method Models\ExportAssetCoreModuleListResponse ExportAssetCoreModuleList(Models\ExportAssetCoreModuleListRequest $req) 导出资产管理内核模块列表
 * @method Models\ExportAssetWebServiceInfoListResponse ExportAssetWebServiceInfoList(Models\ExportAssetWebServiceInfoListRequest $req) 导出资产管理Web服务列表
 * @method Models\ExportAttackLogsResponse ExportAttackLogs(Models\ExportAttackLogsRequest $req) 导出网络攻击日志
 * @method Models\ExportBaselineEffectHostListResponse ExportBaselineEffectHostList(Models\ExportBaselineEffectHostListRequest $req) 导出基线影响主机列表
 * @method Models\ExportBaselineListResponse ExportBaselineList(Models\ExportBaselineListRequest $req) 导出基线列表
 * @method Models\ExportBashEventsResponse ExportBashEvents(Models\ExportBashEventsRequest $req) 导出高危命令事件
 * @method Models\ExportBruteAttacksResponse ExportBruteAttacks(Models\ExportBruteAttacksRequest $req) 本接口 (ExportBruteAttacks) 用于导出密码破解记录成CSV文件。
 * @method Models\ExportIgnoreBaselineRuleResponse ExportIgnoreBaselineRule(Models\ExportIgnoreBaselineRuleRequest $req) 导出已忽略基线检测项信息
 * @method Models\ExportIgnoreRuleEffectHostListResponse ExportIgnoreRuleEffectHostList(Models\ExportIgnoreRuleEffectHostListRequest $req) 根据检测项id导出忽略检测项影响主机列表
 * @method Models\ExportLicenseDetailResponse ExportLicenseDetail(Models\ExportLicenseDetailRequest $req) 导出授权列表对应的绑定信息
 * @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) 本接口 (ExportMaliciousRequests) 用于导出下载恶意请求文件。
 * @method Models\ExportMalwaresResponse ExportMalwares(Models\ExportMalwaresRequest $req) 本接口 (ExportMalwares) 用于导出木马记录CSV文件。
 * @method Models\ExportNonlocalLoginPlacesResponse ExportNonlocalLoginPlaces(Models\ExportNonlocalLoginPlacesRequest $req) 本接口 (ExportNonlocalLoginPlaces) 用于导出异地登录事件记录CSV文件。
 * @method Models\ExportPrivilegeEventsResponse ExportPrivilegeEvents(Models\ExportPrivilegeEventsRequest $req) 导出本地提权事件
 * @method Models\ExportProtectDirListResponse ExportProtectDirList(Models\ExportProtectDirListRequest $req) 导出网页防篡改防护目录列表
 * @method Models\ExportReverseShellEventsResponse ExportReverseShellEvents(Models\ExportReverseShellEventsRequest $req) 导出反弹Shell事件
 * @method Models\ExportScanTaskDetailsResponse ExportScanTaskDetails(Models\ExportScanTaskDetailsRequest $req) 根据任务id导出指定扫描任务详情 
 * @method Models\ExportSecurityTrendsResponse ExportSecurityTrends(Models\ExportSecurityTrendsRequest $req) 导出风险趋势
 * @method Models\ExportTasksResponse ExportTasks(Models\ExportTasksRequest $req) 用于异步导出数据量大的日志文件
 * @method Models\ExportVulDetectionExcelResponse ExportVulDetectionExcel(Models\ExportVulDetectionExcelRequest $req) 导出本次漏洞检测Excel
 * @method Models\ExportVulDetectionReportResponse ExportVulDetectionReport(Models\ExportVulDetectionReportRequest $req) 导出漏洞检测报告。
 * @method Models\ExportVulEffectHostListResponse ExportVulEffectHostList(Models\ExportVulEffectHostListRequest $req) 导出漏洞影响主机列表
 * @method Models\ExportVulListResponse ExportVulList(Models\ExportVulListRequest $req) 漏洞管理-导出漏洞列表
 * @method Models\ExportWebPageEventListResponse ExportWebPageEventList(Models\ExportWebPageEventListRequest $req) 导出篡改事件列表
 * @method Models\IgnoreImpactedHostsResponse IgnoreImpactedHosts(Models\IgnoreImpactedHostsRequest $req) 本接口 (IgnoreImpactedHosts) 用于忽略漏洞。
 * @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req)  用于设置新增主机自动开通专业防护配置。
 * @method Models\ModifyBanModeResponse ModifyBanMode(Models\ModifyBanModeRequest $req) 修改爆破阻断模式
 * @method Models\ModifyBanStatusResponse ModifyBanStatus(Models\ModifyBanStatusRequest $req) 设置阻断开关状态
 * @method Models\ModifyBaselinePolicyResponse ModifyBaselinePolicy(Models\ModifyBaselinePolicyRequest $req) 更改基线策略设置
 * @method Models\ModifyBruteAttackRulesResponse ModifyBruteAttackRules(Models\ModifyBruteAttackRulesRequest $req) 修改暴力破解规则
 * @method Models\ModifyLicenseBindsResponse ModifyLicenseBinds(Models\ModifyLicenseBindsRequest $req) 设置中心-授权管理 对某个授权批量绑定机器
 * @method Models\ModifyLicenseUnBindsResponse ModifyLicenseUnBinds(Models\ModifyLicenseUnBindsRequest $req) 设置中心-授权管理 对某个授权批量解绑机器
 * @method Models\ModifyMachineRemarkResponse ModifyMachineRemark(Models\ModifyMachineRemarkRequest $req) 修改主机备注信息
 * @method Models\ModifyMalwareTimingScanSettingsResponse ModifyMalwareTimingScanSettings(Models\ModifyMalwareTimingScanSettingsRequest $req) 定时扫描设置
 * @method Models\ModifyOrderAttributeResponse ModifyOrderAttribute(Models\ModifyOrderAttributeRequest $req) 对订单属性编辑
 * @method Models\ModifyWarningSettingResponse ModifyWarningSetting(Models\ModifyWarningSettingRequest $req) 修改告警设置
 * @method Models\ModifyWebPageProtectDirResponse ModifyWebPageProtectDir(Models\ModifyWebPageProtectDirRequest $req) 创建/修改网站防护目录
 * @method Models\ModifyWebPageProtectSettingResponse ModifyWebPageProtectSetting(Models\ModifyWebPageProtectSettingRequest $req) 修改网站防护设置
 * @method Models\ModifyWebPageProtectSwitchResponse ModifyWebPageProtectSwitch(Models\ModifyWebPageProtectSwitchRequest $req) 网站防篡改防护设置开关
 * @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) 本接口（RecoverMalwares）用于批量恢复已经被隔离的木马文件。
 * @method Models\ScanAssetResponse ScanAsset(Models\ScanAssetRequest $req) 资产指纹启动扫描
 * @method Models\ScanVulResponse ScanVul(Models\ScanVulRequest $req)  一键检测
 * @method Models\ScanVulAgainResponse ScanVulAgain(Models\ScanVulAgainRequest $req) 漏洞管理-重新检测接口
 * @method Models\ScanVulSettingResponse ScanVulSetting(Models\ScanVulSettingRequest $req) 定期扫描漏洞设置
 * @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) 本接口（SeparateMalwares）用于隔离木马。
 * @method Models\SetBashEventsStatusResponse SetBashEventsStatus(Models\SetBashEventsStatusRequest $req) 设置高危命令事件状态
 * @method Models\StartBaselineDetectResponse StartBaselineDetect(Models\StartBaselineDetectRequest $req) 检测基线
 * @method Models\StopBaselineDetectResponse StopBaselineDetect(Models\StopBaselineDetectRequest $req) 停止基线检测
 * @method Models\StopNoticeBanTipsResponse StopNoticeBanTips(Models\StopNoticeBanTipsRequest $req) 不再提醒爆破阻断提示弹窗
 * @method Models\SwitchBashRulesResponse SwitchBashRules(Models\SwitchBashRulesRequest $req) 切换高危命令规则状态
 * @method Models\SyncAssetScanResponse SyncAssetScan(Models\SyncAssetScanRequest $req) 同步资产扫描信息
 * @method Models\SyncBaselineDetectSummaryResponse SyncBaselineDetectSummary(Models\SyncBaselineDetectSummaryRequest $req) 同步基线检测进度概要
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
