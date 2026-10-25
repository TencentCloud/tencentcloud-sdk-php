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

namespace TencentCloud\Rum\V20210622;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rum\V20210622\Models as Models;

/**
 * @method Models\CreateFieldTransformRuleResponse CreateFieldTransformRule(Models\CreateFieldTransformRuleRequest $req) 创建字段配置规则
 * @method Models\CreateReleaseFileResponse CreateReleaseFile(Models\CreateReleaseFileRequest $req) 创建对应项目的文件记录
 * @method Models\CreateStarProjectResponse CreateStarProject(Models\CreateStarProjectRequest $req) 个人用户添加星标项目
 * @method Models\CreateTDEMApplicationResponse CreateTDEMApplication(Models\CreateTDEMApplicationRequest $req) 在指定业务系统下创建应用。
 * @method Models\CreateTDEMBusinessSystemResponse CreateTDEMBusinessSystem(Models\CreateTDEMBusinessSystemRequest $req) 创建业务系统。InstanceId 由后端生成，格式 rum-<12 位随机字母数字>。重名返回 InvalidParameterValue。
 * @method Models\CreateTDEMDialTaskResponse CreateTDEMDialTask(Models\CreateTDEMDialTaskRequest $req) 创建一条移动拨测任务。同一应用处于 active 的任务最多 50 条。四项启动范围都为空时不限制启动；填写多项时必须同时满足，同一项多个值命中任意一个即可。
 * @method Models\CreateTDEMFieldTransformRuleResponse CreateTDEMFieldTransformRule(Models\CreateTDEMFieldTransformRuleRequest $req) 为应用创建字段值替换规则，单应用上限 50 条。替代已废弃的 CreateFieldTransformRule；AppId 为 string。
 * @method Models\CreateTDEMFunnelResponse CreateTDEMFunnel(Models\CreateTDEMFunnelRequest $req) 创建漏斗
 * @method Models\CreateWhitelistResponse CreateWhitelist(Models\CreateWhitelistRequest $req) 创建白名单
 * @method Models\DeleteFieldTransformRuleResponse DeleteFieldTransformRule(Models\DeleteFieldTransformRuleRequest $req) 删除字段配置规则
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 删除实例，谨慎操作，不可恢复
 * @method Models\DeleteMiniProgramReplayPackResponse DeleteMiniProgramReplayPack(Models\DeleteMiniProgramReplayPackRequest $req) 删除回放包元数据，并尽力删除COS上回放包与源码zip。不存在返回ResourceNotFound。
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除给定的 rum 的项目
 * @method Models\DeleteReleaseFileResponse DeleteReleaseFile(Models\DeleteReleaseFileRequest $req) 将对应 sourcemap 文件删除
 * @method Models\DeleteStarProjectResponse DeleteStarProject(Models\DeleteStarProjectRequest $req) 删除用户名下的星标项目
 * @method Models\DeleteSymbolArtifactResponse DeleteSymbolArtifact(Models\DeleteSymbolArtifactRequest $req) 删除指定的符号制品。
 * @method Models\DeleteTDEMApplicationResponse DeleteTDEMApplication(Models\DeleteTDEMApplicationRequest $req) 逻辑删除应用，ProjectKey 即刻失效。
 * @method Models\DeleteTDEMBusinessSystemResponse DeleteTDEMBusinessSystem(Models\DeleteTDEMBusinessSystemRequest $req) 删除业务系统。名下存在未删除应用时返回 ResourceInUse。
 * @method Models\DeleteTDEMDialTaskResponse DeleteTDEMDialTask(Models\DeleteTDEMDialTaskRequest $req) 将拨测任务标记为已删除。已删除的任务再次删除视为成功。不物理删除任务行，也不删除历史拨测结果。
 * @method Models\DeleteTDEMFieldTransformRuleResponse DeleteTDEMFieldTransformRule(Models\DeleteTDEMFieldTransformRuleRequest $req) 按规则 Id 删除字段值替换规则。替代已废弃的 DeleteFieldTransformRule；AppId 为 string。
 * @method Models\DeleteTDEMFunnelResponse DeleteTDEMFunnel(Models\DeleteTDEMFunnelRequest $req) 删除漏斗
 * @method Models\DeleteWhitelistResponse DeleteWhitelist(Models\DeleteWhitelistRequest $req) 删除白名单
 * @method Models\DescribeAppDimensionMetricsResponse DescribeAppDimensionMetrics(Models\DescribeAppDimensionMetricsRequest $req) 用于查询 app 监控多维分析数据
 * @method Models\DescribeAppMetricsDataResponse DescribeAppMetricsData(Models\DescribeAppMetricsDataRequest $req) 获取 app 监控指标数据
 * @method Models\DescribeAppSingleCaseDetailListResponse DescribeAppSingleCaseDetailList(Models\DescribeAppSingleCaseDetailListRequest $req) 查询 app 监控个例样本详情列表
 * @method Models\DescribeAppSingleCaseListResponse DescribeAppSingleCaseList(Models\DescribeAppSingleCaseListRequest $req) 查询 app 监控个例聚合列表
 * @method Models\DescribeApplicationExitReportDetailResponse DescribeApplicationExitReportDetail(Models\DescribeApplicationExitReportDetailRequest $req) 获取应用退出个例上报详情
 * @method Models\DescribeApplicationExitReportListResponse DescribeApplicationExitReportList(Models\DescribeApplicationExitReportListRequest $req) 获取应用退出个例上报列表
 * @method Models\DescribeDataResponse DescribeData(Models\DescribeDataRequest $req) 转发monitor查询
 * @method Models\DescribeDataBridgeUrlV2Response DescribeDataBridgeUrlV2(Models\DescribeDataBridgeUrlV2Request $req) 获取DescribeDataBridgeUrl信息
 * @method Models\DescribeDataCustomUrlResponse DescribeDataCustomUrl(Models\DescribeDataCustomUrlRequest $req) 获取DescribeDataCustomUrl信息
 * @method Models\DescribeDataCustomUrlV2Response DescribeDataCustomUrlV2(Models\DescribeDataCustomUrlV2Request $req) 获取DescribeDataCustomUrl信息
 * @method Models\DescribeDataEventUrlResponse DescribeDataEventUrl(Models\DescribeDataEventUrlRequest $req) 获取DescribeDataEventUrl信息
 * @method Models\DescribeDataEventUrlV2Response DescribeDataEventUrlV2(Models\DescribeDataEventUrlV2Request $req) 获取DescribeDataEventUrl信息
 * @method Models\DescribeDataFetchProjectResponse DescribeDataFetchProject(Models\DescribeDataFetchProjectRequest $req) 获取DescribeDataFetchProject信息。已下线，请使用DescribeDataFetchUrl
 * @method Models\DescribeDataFetchUrlResponse DescribeDataFetchUrl(Models\DescribeDataFetchUrlRequest $req) 获取DescribeDataFetchUrl信息
 * @method Models\DescribeDataFetchUrlInfoResponse DescribeDataFetchUrlInfo(Models\DescribeDataFetchUrlInfoRequest $req) 获取DescribeDataFetchUrlInfo信息
 * @method Models\DescribeDataFetchUrlV2Response DescribeDataFetchUrlV2(Models\DescribeDataFetchUrlV2Request $req) 获取DescribeDataFetchUrl信息
 * @method Models\DescribeDataLogUrlInfoResponse DescribeDataLogUrlInfo(Models\DescribeDataLogUrlInfoRequest $req) 获取loginfo信息
 * @method Models\DescribeDataLogUrlStatisticsResponse DescribeDataLogUrlStatistics(Models\DescribeDataLogUrlStatisticsRequest $req) 获取LogUrlStatistics信息
 * @method Models\DescribeDataLogUrlStatisticsV2Response DescribeDataLogUrlStatisticsV2(Models\DescribeDataLogUrlStatisticsV2Request $req) 获取LogUrlStatistics信息
 * @method Models\DescribeDataPerformancePageResponse DescribeDataPerformancePage(Models\DescribeDataPerformancePageRequest $req) 获取PerformancePage信息
 * @method Models\DescribeDataPerformancePageV2Response DescribeDataPerformancePageV2(Models\DescribeDataPerformancePageV2Request $req) 获取PerformancePage信息
 * @method Models\DescribeDataPvUrlInfoResponse DescribeDataPvUrlInfo(Models\DescribeDataPvUrlInfoRequest $req) 获取PvUrlInfo信息
 * @method Models\DescribeDataPvUrlStatisticsResponse DescribeDataPvUrlStatistics(Models\DescribeDataPvUrlStatisticsRequest $req) 获取DescribeDataPvUrlStatistics信息
 * @method Models\DescribeDataPvUrlStatisticsV2Response DescribeDataPvUrlStatisticsV2(Models\DescribeDataPvUrlStatisticsV2Request $req) 获取DescribeDataPvUrlStatistics信息
 * @method Models\DescribeDataReportCountResponse DescribeDataReportCount(Models\DescribeDataReportCountRequest $req) 获取项目上报量
 * @method Models\DescribeDataReportCountV2Response DescribeDataReportCountV2(Models\DescribeDataReportCountV2Request $req) 获取项目上报量
 * @method Models\DescribeDataSetUrlStatisticsResponse DescribeDataSetUrlStatistics(Models\DescribeDataSetUrlStatisticsRequest $req) 获取DescribeDataSetUrlStatistics信息
 * @method Models\DescribeDataSetUrlStatisticsV2Response DescribeDataSetUrlStatisticsV2(Models\DescribeDataSetUrlStatisticsV2Request $req) 获取DescribeDataSetUrlStatistics信息
 * @method Models\DescribeDataStaticProjectResponse DescribeDataStaticProject(Models\DescribeDataStaticProjectRequest $req) 获取DescribeDataStaticProject信息
 * @method Models\DescribeDataStaticProjectV2Response DescribeDataStaticProjectV2(Models\DescribeDataStaticProjectV2Request $req) 获取DescribeDataStaticProject信息
 * @method Models\DescribeDataStaticResourceResponse DescribeDataStaticResource(Models\DescribeDataStaticResourceRequest $req) 获取DescribeDataStaticResource信息
 * @method Models\DescribeDataStaticResourceV2Response DescribeDataStaticResourceV2(Models\DescribeDataStaticResourceV2Request $req) 获取DescribeDataStaticResource信息
 * @method Models\DescribeDataStaticUrlResponse DescribeDataStaticUrl(Models\DescribeDataStaticUrlRequest $req) 获取DescribeDataStaticUrl信息
 * @method Models\DescribeDataStaticUrlV2Response DescribeDataStaticUrlV2(Models\DescribeDataStaticUrlV2Request $req) 获取DescribeDataStaticUrl信息
 * @method Models\DescribeDataWebVitalsPageResponse DescribeDataWebVitalsPage(Models\DescribeDataWebVitalsPageRequest $req) 获取DescribeDataWebVitalsPage信息，用户核心活动信息
页面加载性能之Web Vitals。性能关键点
 * @method Models\DescribeDataWebVitalsPageV2Response DescribeDataWebVitalsPageV2(Models\DescribeDataWebVitalsPageV2Request $req) 获取DescribeDataWebVitalsPage信息，用户核心活动信息
页面加载性能之Web Vitals。性能关键点
 * @method Models\DescribeErrorResponse DescribeError(Models\DescribeErrorRequest $req) 获取首页错误信息
 * @method Models\DescribeExceptionDetailResponse DescribeExceptionDetail(Models\DescribeExceptionDetailRequest $req) 获取异常问题详情数据
 * @method Models\DescribeExceptionReportListResponse DescribeExceptionReportList(Models\DescribeExceptionReportListRequest $req) 获取异常个例列表
 * @method Models\DescribeFOOMMallocProblemDetailResponse DescribeFOOMMallocProblemDetail(Models\DescribeFOOMMallocProblemDetailRequest $req) 获取FOOM内存分配问题详情数据
 * @method Models\DescribeFOOMMallocProblemListResponse DescribeFOOMMallocProblemList(Models\DescribeFOOMMallocProblemListRequest $req) 获取FOOM内存分配问题列表数据
 * @method Models\DescribeFOOMMallocReportListResponse DescribeFOOMMallocReportList(Models\DescribeFOOMMallocReportListRequest $req) 获取FOOM内存分配问题上报列表
 * @method Models\DescribeFOOMProblemDetailResponse DescribeFOOMProblemDetail(Models\DescribeFOOMProblemDetailRequest $req) 获取FOOM问题详情数据
 * @method Models\DescribeFOOMProblemListResponse DescribeFOOMProblemList(Models\DescribeFOOMProblemListRequest $req) 获取FOOM问题列表数据
 * @method Models\DescribeFOOMReportListResponse DescribeFOOMReportList(Models\DescribeFOOMReportListRequest $req) 获取FOOM问题上报列表
 * @method Models\DescribeFieldTransformRulesResponse DescribeFieldTransformRules(Models\DescribeFieldTransformRulesRequest $req) 获取字段配置规则
 * @method Models\DescribeFieldValuesResponse DescribeFieldValues(Models\DescribeFieldValuesRequest $req) 获取TDEM字段值列表
 * @method Models\DescribeFileCertificateResponse DescribeFileCertificate(Models\DescribeFileCertificateRequest $req) 获取COS存储的临时密钥，具体到ProjectId
 * @method Models\DescribeIssueAffectedUsersResponse DescribeIssueAffectedUsers(Models\DescribeIssueAffectedUsersRequest $req) 按用户维度聚合某问题的受影响用户清单，服务端分页。AppId 与 IssueId 必填；AppVersion / StartTime / EndTime / Keyword 用于收窄范围，同时作用于清单与 Total，因此 Total 为当前条件下去重后的用户数， 条件全空时等于问题详情的影响用户数。OrderKey / OrderBy 只改变行序、不改变结果集合；排序一律由服务端执行， 并保留 uid 作为次级键以保证翻页不重不漏。接口只读。
 * @method Models\DescribeIssueBreadcrumbsResponse DescribeIssueBreadcrumbs(Models\DescribeIssueBreadcrumbsRequest $req) 获取指定 Issue 当前事件或最新事件之前的 Breadcrumbs 面包屑序列
 * @method Models\DescribeIssueCrashLogDownloadURLResponse DescribeIssueCrashLogDownloadURL(Models\DescribeIssueCrashLogDownloadURLRequest $req) 获取日志下载链接
 * @method Models\DescribeIssueDetailResponse DescribeIssueDetail(Models\DescribeIssueDetailRequest $req) 获取指定 Issue 的摘要信息以及默认选中的最新事件详情
 * @method Models\DescribeIssueEventDetailResponse DescribeIssueEventDetail(Models\DescribeIssueEventDetailRequest $req) 获取指定 Issue 下单个事件的完整详情，包括栈信息、上下文和符号化状态等字段
 * @method Models\DescribeIssueEventsResponse DescribeIssueEvents(Models\DescribeIssueEventsRequest $req) 根据条件获取指定 Issue 的错误事件列表，支持按时间范围、关键字和扩展过滤器查询，返回分页事件数据
 * @method Models\DescribeIssueTrendResponse DescribeIssueTrend(Models\DescribeIssueTrendRequest $req) 获取指定 Issue 在给定时间范围内的趋势分桶统计数据
 * @method Models\DescribeIssuesResponse DescribeIssues(Models\DescribeIssuesRequest $req) 根据筛选条件分页查询 Issue 列表，支持环境、Issue 类型、状态、关键字、扩展过滤器和排序条件
 * @method Models\DescribeIssuesDistributionResponse DescribeIssuesDistribution(Models\DescribeIssuesDistributionRequest $req) 获取问题分布数据
 * @method Models\DescribeIssuesListResponse DescribeIssuesList(Models\DescribeIssuesListRequest $req) 获取问题列表数据
 * @method Models\DescribeIssuesStatisticsTrendResponse DescribeIssuesStatisticsTrend(Models\DescribeIssuesStatisticsTrendRequest $req) 获取问题趋势数据
 * @method Models\DescribeLagANRProblemAccountDetailResponse DescribeLagANRProblemAccountDetail(Models\DescribeLagANRProblemAccountDetailRequest $req) 获取卡顿ANR问题用户详情
 * @method Models\DescribeLagANRProblemFeatureAccountsResponse DescribeLagANRProblemFeatureAccounts(Models\DescribeLagANRProblemFeatureAccountsRequest $req) 获取卡顿ANR问题用户列表
 * @method Models\DescribeLagANRProblemListResponse DescribeLagANRProblemList(Models\DescribeLagANRProblemListRequest $req) 获取卡顿ANR问题列表数据
 * @method Models\DescribeMiniProgramReplayPackResponse DescribeMiniProgramReplayPack(Models\DescribeMiniProgramReplayPackRequest $req) 按AppId+BundleHash取已编译回放包正文。成功含Pack（tmpl/css/js/manifest/hash），不返回WXML/WXSS源码。不存在返回ResourceNotFound。
 * @method Models\DescribeMiniProgramReplayPacksResponse DescribeMiniProgramReplayPacks(Models\DescribeMiniProgramReplayPacksRequest $req) 按AppId列出回放包元数据，不含Pack正文。可按Status过滤。Limit默认20、最大100。
 * @method Models\DescribePerformanceMetricsResponse DescribePerformanceMetrics(Models\DescribePerformanceMetricsRequest $req) 获取TDEM性能指标数据
 * @method Models\DescribeProjectLimitsResponse DescribeProjectLimits(Models\DescribeProjectLimitsRequest $req) 获取应用上报抽样信息
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 获取项目列表（实例创建的团队下的项目列表）
 * @method Models\DescribePvListResponse DescribePvList(Models\DescribePvListRequest $req) 获取项目下的PV列表
 * @method Models\DescribeReleaseFileSignResponse DescribeReleaseFileSign(Models\DescribeReleaseFileSignRequest $req) 获取上传文件存储的临时密钥
 * @method Models\DescribeReleaseFilesResponse DescribeReleaseFiles(Models\DescribeReleaseFilesRequest $req) 获取应用对应sourcemap文件列表
 * @method Models\DescribeReplayDataResponse DescribeReplayData(Models\DescribeReplayDataRequest $req) 从对象存储读取录屏帧数据
 * @method Models\DescribeReplayDetailsResponse DescribeReplayDetails(Models\DescribeReplayDetailsRequest $req) 获取回放日志
 * @method Models\DescribeReplayMetaResponse DescribeReplayMeta(Models\DescribeReplayMetaRequest $req) 获取回放元数据
 * @method Models\DescribeRumGroupLogResponse DescribeRumGroupLog(Models\DescribeRumGroupLogRequest $req) 获取项目下的日志聚合信息
 * @method Models\DescribeRumGroupLogV2Response DescribeRumGroupLogV2(Models\DescribeRumGroupLogV2Request $req) 根据label 聚合分析日志
 * @method Models\DescribeRumLogDetailsV2Response DescribeRumLogDetailsV2(Models\DescribeRumLogDetailsV2Request $req) 查询日志明细
 * @method Models\DescribeRumLogExportResponse DescribeRumLogExport(Models\DescribeRumLogExportRequest $req) 获取项目下的日志列表（实例创建的项目下的日志列表）
 * @method Models\DescribeRumLogExportV2Response DescribeRumLogExportV2(Models\DescribeRumLogExportV2Request $req) 创建日志导出
 * @method Models\DescribeRumLogExportsResponse DescribeRumLogExports(Models\DescribeRumLogExportsRequest $req) 获取项目下的日志导出列表
 * @method Models\DescribeRumLogExportsV2Response DescribeRumLogExportsV2(Models\DescribeRumLogExportsV2Request $req) 获取日志导出列表
 * @method Models\DescribeRumLogListResponse DescribeRumLogList(Models\DescribeRumLogListRequest $req) 获取项目下的日志列表（实例创建的项目下的日志列表）
 * @method Models\DescribeRumLogTotalV2Response DescribeRumLogTotalV2(Models\DescribeRumLogTotalV2Request $req) 查询原始日志总量
 * @method Models\DescribeRumStatsLogListResponse DescribeRumStatsLogList(Models\DescribeRumStatsLogListRequest $req) 获取项目下的日志列表，分钟级
 * @method Models\DescribeRumStatsLogListV2Response DescribeRumStatsLogListV2(Models\DescribeRumStatsLogListV2Request $req) 查询日志时间分布
 * @method Models\DescribeSampleRateResponse DescribeSampleRate(Models\DescribeSampleRateRequest $req) 获取应用的采样率
 * @method Models\DescribeScoresResponse DescribeScores(Models\DescribeScoresRequest $req) 获取首页分数列表
 * @method Models\DescribeScoresV2Response DescribeScoresV2(Models\DescribeScoresV2Request $req) 获取首页分数列表
 * @method Models\DescribeSessionListResponse DescribeSessionList(Models\DescribeSessionListRequest $req) 查询会话列表
 * @method Models\DescribeStruggleDistributionResponse DescribeStruggleDistribution(Models\DescribeStruggleDistributionRequest $req) 获取挣扎事件分布数据
 * @method Models\DescribeSymbolArtifactUploadCredentialResponse DescribeSymbolArtifactUploadCredential(Models\DescribeSymbolArtifactUploadCredentialRequest $req) 获取符号制品上传临时凭证。
 * @method Models\DescribeSymbolArtifactsResponse DescribeSymbolArtifacts(Models\DescribeSymbolArtifactsRequest $req) 分页查询指定类型的符号制品。
 * @method Models\DescribeTDEMApplicationsResponse DescribeTDEMApplications(Models\DescribeTDEMApplicationsRequest $req) 查询应用列表，默认仅当前用户名下有权限的应用；可按业务系统 InstanceId 筛选。
 * @method Models\DescribeTDEMBusinessSystemsResponse DescribeTDEMBusinessSystems(Models\DescribeTDEMBusinessSystemsRequest $req) 查询当前用户名下业务系统列表（超管返回全部）。分页 Offset/Limit，默认 Limit=20 上限 100。
 * @method Models\DescribeTDEMDialDimensionsResponse DescribeTDEMDialDimensions(Models\DescribeTDEMDialDimensionsRequest $req) 按一个维度拆分拨测指标。Dimension 取值说明：platform、app_version、device、net_type、operator、region、country、target_ip。target_region 不是合法值。region 对应客户端省份，country 对应国家。
 * @method Models\DescribeTDEMDialExecutionDetailResponse DescribeTDEMDialExecutionDetail(Models\DescribeTDEMDialExecutionDetailRequest $req) 返回一个拨测批次的探测结果和路由追踪。Probes 的 Region、Operator 是目标 IP 归属。逐跳归属同时写在 Probes.MTR.Hops 和顶层 MTR.Hops。
 * @method Models\DescribeTDEMDialExecutionListResponse DescribeTDEMDialExecutionList(Models\DescribeTDEMDialExecutionListRequest $req) 按批次返回拨测执行记录，一批次一行。TargetIps 是目标地址，TargetIpGeo 是这些地址的地区和运营商。行上的 Region 和 Operator 仍是客户端地区和运营商。
 * @method Models\DescribeTDEMDialOverviewResponse DescribeTDEMDialOverview(Models\DescribeTDEMDialOverviewRequest $req) 按时间窗汇总拨测批次。一次多 IP 探测计为 1 个批次。
 * @method Models\DescribeTDEMDialTasksResponse DescribeTDEMDialTasks(Models\DescribeTDEMDialTasksRequest $req) 查询应用下未删除的拨测任务，包含启动范围。
 * @method Models\DescribeTDEMDialTrendResponse DescribeTDEMDialTrend(Models\DescribeTDEMDialTrendRequest $req) 按小时或天返回拨测趋势。Granularity 不传时按小时。
 * @method Models\DescribeTDEMEventDetailResponse DescribeTDEMEventDetail(Models\DescribeTDEMEventDetailRequest $req) 按 AppId+EventId 查询事件详情，含主表字段与可选符号化结果。Date 推荐传以命中分区；或用 StartDate+EndDate（<=2 天）。越权与不存在统一 ResourceNotFound。
 * @method Models\DescribeTDEMEventRankResponse DescribeTDEMEventRank(Models\DescribeTDEMEventRankRequest $req) 错误指纹或 API/资源 URL（含按访问页、状态、标签）排行。读 tdem_events，不走主分析立方 GroupBy。Kind：error/api/resource/api_page/resource_page/api_status/api_status_top/resource_status/tag。 Kind=exception_dimension返回当前普通维度或标签值的同批完整分类计数；展开不另行取数。
 * @method Models\DescribeTDEMEventSearchResponse DescribeTDEMEventSearch(Models\DescribeTDEMEventSearchRequest $req) 数据探索事件明细分页。会话分类不得调用本接口（Category 禁止 session）。时间单位 Unix 毫秒。
 * @method Models\DescribeTDEMEventSearchSummaryResponse DescribeTDEMEventSearchSummary(Models\DescribeTDEMEventSearchSummaryRequest $req) 同一筛选下的分类计数、访问用户、业务用户、窗口合计与分桶趋势。Category 可含 session。空窗返回 0 与空 Series。
 * @method Models\DescribeTDEMFieldTransformRulesResponse DescribeTDEMFieldTransformRules(Models\DescribeTDEMFieldTransformRulesRequest $req) 查询应用下字段值替换规则列表。替代已废弃的 DescribeFieldTransformRules；AppId 为 string。
 * @method Models\DescribeTDEMFunnelDetailResponse DescribeTDEMFunnelDetail(Models\DescribeTDEMFunnelDetailRequest $req) 获取漏斗详情
 * @method Models\DescribeTDEMFunnelDimensionsResponse DescribeTDEMFunnelDimensions(Models\DescribeTDEMFunnelDimensionsRequest $req) 获取漏斗分析报告维度数据
 * @method Models\DescribeTDEMFunnelListResponse DescribeTDEMFunnelList(Models\DescribeTDEMFunnelListRequest $req) 获取漏斗列表
 * @method Models\DescribeTDEMFunnelReportResponse DescribeTDEMFunnelReport(Models\DescribeTDEMFunnelReportRequest $req) 获取漏斗报告
 * @method Models\DescribeTDEMFunnelStepSessionListResponse DescribeTDEMFunnelStepSessionList(Models\DescribeTDEMFunnelStepSessionListRequest $req) 获取漏斗步骤会话
 * @method Models\DescribeTDEMFunnelTrendResponse DescribeTDEMFunnelTrend(Models\DescribeTDEMFunnelTrendRequest $req) 获取漏斗趋势
 * @method Models\DescribeTDEMMetricDistributionResponse DescribeTDEMMetricDistribution(Models\DescribeTDEMMetricDistributionRequest $req) 按单维度 GroupBy 查询分析指标分布。读 tdem_metric_agg。
 * @method Models\DescribeTDEMMetricSummaryResponse DescribeTDEMMetricSummary(Models\DescribeTDEMMetricSummaryRequest $req) 查询指定应用与时间窗内的分析指标区间合计。单查返回 Metrics；传 Queries 时返回 Results。读 tdem_metric_agg。
 * @method Models\DescribeTDEMMetricTrendResponse DescribeTDEMMetricTrend(Models\DescribeTDEMMetricTrendRequest $req) 查询分析指标时序。可传 CompareStartTime/CompareEndTime 做对比窗（仅批量）。读 tdem_metric_agg。
 * @method Models\DescribeTDEMOverviewScoresResponse DescribeTDEMOverviewScores(Models\DescribeTDEMOverviewScoresRequest $req) 客户端总览列表批量评分。按应用列表一次返回各计分项单项分与加权总分。AppIds 1-200；不归属当前用户的应用不出现在响应中。
 * @method Models\DescribeTDEMRelatedEventsResponse DescribeTDEMRelatedEvents(Models\DescribeTDEMRelatedEventsRequest $req) 会话时间线 / 页面子事件 / 错误前轨迹。Mode：timeline / page / breadcrumb。Limit 默认 200，上限 200。
 * @method Models\DescribeTDEMSSEDimensionsResponse DescribeTDEMSSEDimensions(Models\DescribeTDEMSSEDimensionsRequest $req) 按一个维度返回大模型对话次数和当前指标值，按指标值降序，最多 200 行。region 由 country 与 province 拼接。
 * @method Models\DescribeTDEMSSEDistributionResponse DescribeTDEMSSEDistribution(Models\DescribeTDEMSSEDistributionRequest $req) 返回吞吐率、首次消息时延或流畅度的分档分布。档位左闭右开，最后一档有限区间右端闭合，超出右端的样本进入溢出档。错误率与卡死率返回 InvalidParameter。
 * @method Models\DescribeTDEMSSEPercentileResponse DescribeTDEMSSEPercentile(Models\DescribeTDEMSSEPercentileRequest $req) 返回吞吐率、首次消息时延或流畅度在整个时间窗及各时间桶上的平均值和 P50、P75、P95、P99。错误率与卡死率返回 InvalidParameter。
 * @method Models\DescribeTDEMSSESummaryResponse DescribeTDEMSSESummary(Models\DescribeTDEMSSESummaryRequest $req) 查询指定应用与时间窗内的大模型对话汇总，包含对话次数、token 总数、吞吐率、首次消息时延、错误率、卡死率和流畅度。只读 tdem.tdem_events 中 event_type 为 sse_call 的事件。
 * @method Models\DescribeTDEMSSETrendResponse DescribeTDEMSSETrend(Models\DescribeTDEMSSETrendRequest $req) 按时间桶返回大模型对话趋势。overall 填充 Points，其他维度按整个窗口的指标值从高到低取 TopN 并填充 Series。
 * @method Models\DescribeTDEMSampleConfigResponse DescribeTDEMSampleConfig(Models\DescribeTDEMSampleConfigRequest $req) 读取当前生效的 Web 规则化采样文档。ProjectId 必填且 > 0。无行则返回内置缺省（Event.Enabled=true、Types 空、Replay 关闭且体验率 0），不自动插库。SnapshotId 无快照为 0。query handler 做 PascalCase ↔ 存储 snake_case 映射。非 Web 应用不得走本接口，继续 DescribeSampleRate。
 * @method Models\DescribeTDEMSampleRateResponse DescribeTDEMSampleRate(Models\DescribeTDEMSampleRateRequest $req) 查询单个应用的采集采样率与会话回放采样率。替代已废弃的 DescribeSampleRate；AppId 为 string。
 * @method Models\DescribeTDEMSessionReplayTimelineResponse DescribeTDEMSessionReplayTimeline(Models\DescribeTDEMSessionReplayTimelineRequest $req) 获取回放时间线数据
 * @method Models\DescribeTDEMUsageDetailResponse DescribeTDEMUsageDetail(Models\DescribeTDEMUsageDetailRequest $req) 按业务系统/应用查询用量明细（含行趋势、端类型、删除/停用标记）。Keyword 匹配业务系统名、应用名或应用 ID。
 * @method Models\DescribeTDEMUsageSummaryResponse DescribeTDEMUsageSummary(Models\DescribeTDEMUsageSummaryRequest $req) 查询当前使用者名下（超管为全部）上报总量与趋势。时间 StartTime/EndTime 为 YYYY-MM-DD HH:00:00 小时对齐。不要求请求体带 AppId。
 * @method Models\DescribeTawAreasResponse DescribeTawAreas(Models\DescribeTawAreasRequest $req) 查询片区信息
 * @method Models\DescribeTawInstancesResponse DescribeTawInstances(Models\DescribeTawInstancesRequest $req) 查询实例信息
 * @method Models\DescribeTokenResponse DescribeToken(Models\DescribeTokenRequest $req) 查询令牌
 * @method Models\DescribeTopIssuesResponse DescribeTopIssues(Models\DescribeTopIssuesRequest $req) 查询top问题列表
 * @method Models\DescribeUserJourneySanKeyResponse DescribeUserJourneySanKey(Models\DescribeUserJourneySanKeyRequest $req) 获取用户旅程数据
 * @method Models\DescribeUvListResponse DescribeUvList(Models\DescribeUvListRequest $req) 获取项目下的UV列表
 * @method Models\DescribeWhitelistsResponse DescribeWhitelists(Models\DescribeWhitelistsRequest $req) 获取白名单列表
 * @method Models\ModifyFieldTransformRuleResponse ModifyFieldTransformRule(Models\ModifyFieldTransformRuleRequest $req) 修改字段配置规则
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改 RUM 业务系统
 * @method Models\ModifyIssueStatusResponse ModifyIssueStatus(Models\ModifyIssueStatusRequest $req) 更新 Issue 状态，支持 resolve、ignore、reopen 等状态流转动作
 * @method Models\ModifyMiniProgramReplayPackResponse ModifyMiniProgramReplayPack(Models\ModifyMiniProgramReplayPackRequest $req) 更新回放包元数据，仅支持改Release，不重编译。换源码请再调UploadMiniProgramSource。
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改 RUM 应用信息
 * @method Models\ModifyProjectLimitResponse ModifyProjectLimit(Models\ModifyProjectLimitRequest $req) 新增修改限流
 * @method Models\ModifySampleRateResponse ModifySampleRate(Models\ModifySampleRateRequest $req) 配置tdem采样率
 * @method Models\ModifyTDEMApplicationResponse ModifyTDEMApplication(Models\ModifyTDEMApplicationRequest $req) 修改应用，仅传需修改字段。AppId 必填。
 * @method Models\ModifyTDEMBusinessSystemResponse ModifyTDEMBusinessSystem(Models\ModifyTDEMBusinessSystemRequest $req) 修改业务系统名称或描述。越权 UnauthorizedOperation；不存在或已删除 ResourceNotFound。
 * @method Models\ModifyTDEMDialTaskResponse ModifyTDEMDialTask(Models\ModifyTDEMDialTaskRequest $req) 修改拨测任务。未出现在请求中的字段保持原值。启动范围传空字符串表示清空该项。Type 和 ExecutionTime 创建后不可修改。暂停和恢复通过 Status 完成，不提供单独的状态接口。
 * @method Models\ModifyTDEMFieldTransformRuleResponse ModifyTDEMFieldTransformRule(Models\ModifyTDEMFieldTransformRuleRequest $req) 按规则 Id 修改字段值替换规则。替代已废弃的 ModifyFieldTransformRule；AppId 为 string。
 * @method Models\ModifyTDEMFunnelResponse ModifyTDEMFunnel(Models\ModifyTDEMFunnelRequest $req) 修改漏斗
 * @method Models\ModifyTDEMSampleConfigResponse ModifyTDEMSampleConfig(Models\ModifyTDEMSampleConfigRequest $req) 整页保存 Web 规则化采样文档：校验 → INSERT 快照 → UPSERT 当前行 → 刷新 Redis 下发缓存。不写 tdem_sample_rate。采样率 0–100、最多两位小数；规则 Conditions 不可为空；Types 含非闭集 key 返回 InvalidParameter。校验失败不写库。无 Restore/Import/Export/Diff。
 * @method Models\ModifyTDEMSampleRateResponse ModifyTDEMSampleRate(Models\ModifyTDEMSampleRateRequest $req) 设置或更新应用采集采样率；ReplaySampleRate 可选。替代已废弃的 ModifySampleRate；AppId 为 string。
 * @method Models\PreviewTDEMFunnelReportResponse PreviewTDEMFunnelReport(Models\PreviewTDEMFunnelReportRequest $req) 根据步骤配置直接生成漏斗预览报告（不保存漏斗，不需要FunnelId）
 * @method Models\ResumeInstanceResponse ResumeInstance(Models\ResumeInstanceRequest $req) 恢复 RUM 业务系统，恢复后，用户可以正常使用和上报数据
 * @method Models\ResumeProjectResponse ResumeProject(Models\ResumeProjectRequest $req) 恢复应用使用与上报数据
 * @method Models\ResumeTDEMApplicationResponse ResumeTDEMApplication(Models\ResumeTDEMApplicationRequest $req) 恢复已停止的应用，Status 变为 2。
 * @method Models\StopInstanceResponse StopInstance(Models\StopInstanceRequest $req) 停止实例
 * @method Models\StopProjectResponse StopProject(Models\StopProjectRequest $req) 停止项目使用与上报数据
 * @method Models\StopTDEMApplicationResponse StopTDEMApplication(Models\StopTDEMApplicationRequest $req) 停止应用采集，Status 变为 6。
 * @method Models\UploadMiniProgramSourceResponse UploadMiniProgramSource(Models\UploadMiniProgramSourceRequest $req) 上传微信小程序源码zip并同步编译回放包。控制台传FileBase64；zip需含app.json，跳过node_modules。同AppId+BundleHash且已ready则幂等。
 * @method Models\UploadSymbolArtifactResponse UploadSymbolArtifact(Models\UploadSymbolArtifactRequest $req) 登记已上传的符号制品。请先获取上传凭证并将文件上传到 COS。
 */

class RumClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rum.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rum";

    /**
     * @var string
     */
    protected $version = "2021-06-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("rum")."\\"."V20210622\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
