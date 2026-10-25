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

namespace TencentCloud\Dbbrain\V20210527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbbrain\V20210527\Models as Models;

/**
 * @method Models\AddUserContactResponse AddUserContact(Models\AddUserContactRequest $req) 添加邮件接收联系人的姓名， 邮件地址，返回值为添加成功的联系人id。
 * @method Models\CancelDBAutonomyActionResponse CancelDBAutonomyAction(Models\CancelDBAutonomyActionRequest $req) 自治中心-终止自治任务（单次）
 * @method Models\CancelDBAutonomyEventResponse CancelDBAutonomyEvent(Models\CancelDBAutonomyEventRequest $req) 自治中心-终止自治事件
 * @method Models\CancelKillTaskResponse CancelKillTask(Models\CancelKillTaskRequest $req) 终止中断会话任务。
 * @method Models\CancelRedisBigKeyAnalysisTasksResponse CancelRedisBigKeyAnalysisTasks(Models\CancelRedisBigKeyAnalysisTasksRequest $req) 自治中心-终止自治任务（单次）
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) 不用审计日志时，关闭数据库审计
 * @method Models\CreateAuditLogFileResponse CreateAuditLogFile(Models\CreateAuditLogFileRequest $req) 用于创建云数据库实例的审计日志文件，最多下载600w审计日志。
 * @method Models\CreateDBDiagReportTaskResponse CreateDBDiagReportTask(Models\CreateDBDiagReportTaskRequest $req) 创建健康报告，并可以选择是否发送邮件。
 * @method Models\CreateDBDiagReportUrlResponse CreateDBDiagReportUrl(Models\CreateDBDiagReportUrlRequest $req) 创建健康报告的浏览地址。
 * @method Models\CreateDBDiagReportUrlsResponse CreateDBDiagReportUrls(Models\CreateDBDiagReportUrlsRequest $req) 批量创建健康报告的PDF下载链接，支持一次获取多个报告的下载地址。
 * @method Models\CreateIgnoreDiagRecordResponse CreateIgnoreDiagRecord(Models\CreateIgnoreDiagRecordRequest $req) 对实例的某个诊断项设置忽略或取消忽略状态。
 * @method Models\CreateKillTaskResponse CreateKillTask(Models\CreateKillTaskRequest $req) 创建中断会话的任务。
 * @method Models\CreateMailProfileResponse CreateMailProfile(Models\CreateMailProfileRequest $req) 创建邮件配置。其中入参ProfileType表示所创建配置的类型，ProfileType 取值包括：dbScan_mail_configuration（数据库巡检邮件配置）、scheduler_mail_configuration（定期生成健康报告的邮件发送配置）。Region统一选择广州，和实例所属地域无关。
 * @method Models\CreateMongoDBKillTaskResponse CreateMongoDBKillTask(Models\CreateMongoDBKillTaskRequest $req) 创建中断会话的任务。
 * @method Models\CreateProxySessionKillTaskResponse CreateProxySessionKillTask(Models\CreateProxySessionKillTaskRequest $req) 创建中止所有代理节点连接会话的异步任务。当前仅支持 Redis。得到的返回值为异步任务 id，可以作为参数传入接口 DescribeProxySessionKillTasks 查询kill会话任务执行状态。
 * @method Models\CreateRedisBigKeyAnalysisTaskResponse CreateRedisBigKeyAnalysisTask(Models\CreateRedisBigKeyAnalysisTaskRequest $req) 即时创建redis实例大key分析任务，限制正在运行的即时分析任务数量默认为5。
 * @method Models\CreateSchedulerMailProfileResponse CreateSchedulerMailProfile(Models\CreateSchedulerMailProfileRequest $req) 该接口用于创建定期生成健康报告并邮件发送的配置，将健康报告的定期生成时间作为参数传入（周一至周日），用于设置健康报告的定期生成时间，同时保存相应的定期邮件发送的配置。
 * @method Models\CreateSecurityAuditLogExportTaskResponse CreateSecurityAuditLogExportTask(Models\CreateSecurityAuditLogExportTaskRequest $req) 创建安全审计日志导出任务。
 * @method Models\CreateSqlFilterResponse CreateSqlFilter(Models\CreateSqlFilterRequest $req) 创建实例SQL限流任务。
 * @method Models\CreateUserAutonomyProfileResponse CreateUserAutonomyProfile(Models\CreateUserAutonomyProfileRequest $req) 自治中心-终止自治任务（单次）；注意：接口需要加白名单。
 * @method Models\DeleteAuditLogFileResponse DeleteAuditLogFile(Models\DeleteAuditLogFileRequest $req) 用于删除云数据库实例的审计日志文件。
 * @method Models\DeleteDBDiagReportTasksResponse DeleteDBDiagReportTasks(Models\DeleteDBDiagReportTasksRequest $req) 根据任务id删除健康报告生成任务
 * @method Models\DeleteRedisBigKeyAnalysisTasksResponse DeleteRedisBigKeyAnalysisTasks(Models\DeleteRedisBigKeyAnalysisTasksRequest $req) 删除Redis实例的大key分析任务。
 * @method Models\DeleteSecurityAuditLogExportTasksResponse DeleteSecurityAuditLogExportTasks(Models\DeleteSecurityAuditLogExportTasksRequest $req) 删除安全审计日志导出任务。
 * @method Models\DeleteSqlFiltersResponse DeleteSqlFilters(Models\DeleteSqlFiltersRequest $req) 删除实例SQL限流任务。
 * @method Models\DescribeAlarmTemplateResponse DescribeAlarmTemplate(Models\DescribeAlarmTemplateRequest $req) 通知模板查询
 * @method Models\DescribeAllUserContactResponse DescribeAllUserContact(Models\DescribeAllUserContactRequest $req) 获取邮件发送中联系人的相关信息。
 * @method Models\DescribeAllUserGroupResponse DescribeAllUserGroup(Models\DescribeAllUserGroupRequest $req) 获取邮件发送联系组的相关信息。
 * @method Models\DescribeAuditInstanceListResponse DescribeAuditInstanceList(Models\DescribeAuditInstanceListRequest $req) 查询实例列表
 * @method Models\DescribeAuditLogFilesResponse DescribeAuditLogFiles(Models\DescribeAuditLogFilesRequest $req) 用于创建云数据库实例的审计日志文件
 * @method Models\DescribeBlockingLockTreeResponse DescribeBlockingLockTree(Models\DescribeBlockingLockTreeRequest $req) 根据指定快照 token 查询该快照时刻的完整阻塞树（多层嵌套，根节点为头 blocker，支持多叉/多层展开）。支持两种定位方式，任选其一：(1) 优先 MonitorLoop（精确，lock monitor 一次扫描快照的唯一标识），可从 DescribeBlockingTimeRange / DescribeBlockingLogs / DescribeBlockingTrend 返回获取；(2) 兑底 BlockingTime（近似，任意阻塞时间点），后端会在该时间点±1分钟范围内找到最接近的 MonitorLoop 再下钻其阻塞树。当 MonitorLoop 不为空时优先采用；为空时回退使用 BlockingTime；两者都为空则返回参数错误。一个 MonitorLoop 可包含多棵独立阻塞树（若该快照内存在多组互不相干的阻塞链路）。对标 dbaas-pfs 的 DescribeLockTree。
 * @method Models\DescribeBlockingLogsResponse DescribeBlockingLogs(Models\DescribeBlockingLogsRequest $req) 查询指定实例在时间窗口内的阻塞日志扁平明细列表，不建阻塞树。每一条Item对应一次blocked_process_report（一条blocker→blocked边）在某一次monitorLoop内被lock monitor捕获的瞬时数据。支持按ReportTime / DurationMs / BlockedWaitTimeMs / BlockingWaitTimeMs升降序排序，并支持根因、数据库名、头SQL / 被阻塞SQL MD5、会话ID、登录名、客户端主机 / 应用、被阻塞锁模式、等待时长范围过滤与分页。适合普通表格展示与二次过滤；若需查看某个采集点的完整链路拓扑，请透传返回的MonitorLoop调用DescribeBlockingLockTree。注意：同一blocker→blocked会话对跨monitorLoop连续采集场景下会产生多条明细行，若需统计发生多少次阻塞请按(BlockingSessionId, BlockedSessionId, BlockedWaitResource)自行去重。时间字段按服务端时区UTC+8解析，建议单次查询跨度≤7天。
 * @method Models\DescribeBlockingTrendResponse DescribeBlockingTrend(Models\DescribeBlockingTrendRequest $req) 查询指定实例在时间窗口内按时间粒度聚合的阻塞计数时序，用于前端绘制阻塞趋势图。返回每个粒度 bucket 的 (StartTime, EndTime, LockCount, MonitorLoopCount)，实际聚合区间为前闭后开 [StartTime, EndTime)。为稠密时序：时间窗口内每个粒度 bucket 都返回一个点，无数据的 bucket 补零（LockCount=0, MonitorLoopCount=0），前端可直接绘制连续趋势图。粒度自动按时间跨度 deltaMs = EndTime - StartTime 决定（右开上界判定）：deltaMs≤5min→SECONDS(1s)，deltaMs≤1h→MINUTES(1min)，deltaMs≤3h→FIVE_MINUTES(5min)，deltaMs≤6h→TEN_MINUTES(10min)，deltaMs≤12h→FIFTEEN_MINUTES(15min)，deltaMs≤24h→THIRTY_MINUTES(30min)，deltaMs>24h→HOUR(1h)。底层走 Druid timeseries 原生聚合，服务端完成聚合，适合高频前端刷新。
 * @method Models\DescribeDBAuditLogTopSqlsResponse DescribeDBAuditLogTopSqls(Models\DescribeDBAuditLogTopSqlsRequest $req) 按照Sql模板+schema的聚合方式，统计排序指定时间段内的top慢sql。
 * @method Models\DescribeDBAuditLogsResponse DescribeDBAuditLogs(Models\DescribeDBAuditLogsRequest $req) 查询指定实例在时间窗口内的审计日志明细，支持按 SQL 类型、执行耗时、错误码、关键词等多条件过滤。当前仅支持 dcdb、mariadb 产品（cdb、cynosdb 已切至中台）。注意 Filter.MultiSql 与 Filter.ExcludeMultiSql 需以 JSON 字符串形式传递二维数组内容，例如 [["a","b"]] 表示 (a OR b)，服务端会自动解析。
 * @method Models\DescribeDBAutonomyActionResponse DescribeDBAutonomyAction(Models\DescribeDBAutonomyActionRequest $req) 自治中心-查询自治事件任务详情。
 * @method Models\DescribeDBAutonomyActionsResponse DescribeDBAutonomyActions(Models\DescribeDBAutonomyActionsRequest $req) 自治中心-终止自治任务（单次）
 * @method Models\DescribeDBAutonomyEventsResponse DescribeDBAutonomyEvents(Models\DescribeDBAutonomyEventsRequest $req) 自治中心-终止自治任务（单次）
 * @method Models\DescribeDBDiagEventResponse DescribeDBDiagEvent(Models\DescribeDBDiagEventRequest $req) 获取实例异常诊断事件的详情信息。
 * @method Models\DescribeDBDiagEventsResponse DescribeDBDiagEvents(Models\DescribeDBDiagEventsRequest $req) 获取指定时间段内的诊断事件列表，支持依据风险等级、实例ID等条件过滤。
 * @method Models\DescribeDBDiagHistoryResponse DescribeDBDiagHistory(Models\DescribeDBDiagHistoryRequest $req) 获取实例诊断事件的列表。
 * @method Models\DescribeDBDiagReportContentResponse DescribeDBDiagReportContent(Models\DescribeDBDiagReportContentRequest $req) 健康报告内容。
 * @method Models\DescribeDBDiagReportTasksResponse DescribeDBDiagReportTasks(Models\DescribeDBDiagReportTasksRequest $req) 查询健康报告生成任务列表。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 根据实例ID列表查询数据库实例基本信息，支持跨产品查询（MySQL、CynosDB、MariaDB、DCDB、MongoDB、PostgreSQL、Redis、TDStore等）。不支持分页，通过InstanceIds限制查询数量（最多100条）。
 * @method Models\DescribeDBPerfTimeSeriesResponse DescribeDBPerfTimeSeries(Models\DescribeDBPerfTimeSeriesRequest $req) 根据实例ID获取指定时间段的性能趋势。
 * @method Models\DescribeDBSpaceStatusResponse DescribeDBSpaceStatus(Models\DescribeDBSpaceStatusRequest $req) 获取指定时间段内的实例空间使用概览，包括磁盘增长量(MB)、磁盘剩余(MB)、磁盘总量(MB)及预计可用天数。
 * @method Models\DescribeDatabaseAutonomyStatusResponse DescribeDatabaseAutonomyStatus(Models\DescribeDatabaseAutonomyStatusRequest $req) 查询数据库自治功能的开关状态。当前支持 MongoDB 的索引推荐（AutoIndexAdvice）功能状态查询。
 * @method Models\DescribeDatabaseObjectV2Response DescribeDatabaseObjectV2(Models\DescribeDatabaseObjectV2Request $req) 查询指定 SELECT SQL 在实例上的执行计划，常用于慢 SQL 分析、SQL 优化等场景。仅支持 SELECT 类语句
 * @method Models\DescribeDeadLockLogsResponse DescribeDeadLockLogs(Models\DescribeDeadLockLogsRequest $req) 查询实例的死锁事件列表
 * @method Models\DescribeDiagDBInstancesResponse DescribeDiagDBInstances(Models\DescribeDiagDBInstancesRequest $req) 获取实例信息列表。Region统一选择广州。
 * @method Models\DescribeHealthScoreResponse DescribeHealthScore(Models\DescribeHealthScoreRequest $req) 根据实例ID获取指定时间段（30分钟）的健康得分，以及异常扣分项。
 * @method Models\DescribeHealthScoreTimeSeriesResponse DescribeHealthScoreTimeSeries(Models\DescribeHealthScoreTimeSeriesRequest $req) 获取指定时间段内的健康得分趋势
 * @method Models\DescribeIndexRecommendAggregationSlowLogsResponse DescribeIndexRecommendAggregationSlowLogs(Models\DescribeIndexRecommendAggregationSlowLogsRequest $req) 查询某张表的慢查模板概览，这个接口是对用户点击对应的推荐索引后，展示慢日志用的
 * @method Models\DescribeIndexRecommendInfoResponse DescribeIndexRecommendInfo(Models\DescribeIndexRecommendInfoRequest $req) 查询实例的索引推荐信息，包括索引统计相关信息，推荐索引列表，无效索引列表等。
 * @method Models\DescribeMailProfileResponse DescribeMailProfile(Models\DescribeMailProfileRequest $req) 获取发送邮件的配置， 包括数据库巡检的邮件配置以及定期生成健康报告的邮件发送配置。
 * @method Models\DescribeMetricTopProxiesResponse DescribeMetricTopProxies(Models\DescribeMetricTopProxiesRequest $req) 获取指定时间段内Redis Proxy 指标
 * @method Models\DescribeMongoDBProcessListResponse DescribeMongoDBProcessList(Models\DescribeMongoDBProcessListRequest $req) 查询MongoDB实时会话列表
 * @method Models\DescribeMySqlProcessListResponse DescribeMySqlProcessList(Models\DescribeMySqlProcessListRequest $req) 查询关系型数据库的实时线程列表。
 * @method Models\DescribeNoPrimaryKeyTablesResponse DescribeNoPrimaryKeyTables(Models\DescribeNoPrimaryKeyTablesRequest $req) 查询实例无主键表。
 * @method Models\DescribeProxyProcessStatisticsResponse DescribeProxyProcessStatistics(Models\DescribeProxyProcessStatisticsRequest $req) 获取当前实例下的单个proxy的会话统计详情信息， 返回数据为单个 proxy 的会话统计信息。【注意】该接口仅限部分环境调用。
 * @method Models\DescribeProxySessionKillTasksResponse DescribeProxySessionKillTasks(Models\DescribeProxySessionKillTasksRequest $req) 用于查询 redis 执行 kill 会话任务后代理节点的执行结果，入参异步任务 ID 从接口 CreateProxySessionKillTask 调用成功后取得。当前 product 只支持：redis。
 * @method Models\DescribeRedisBigKeyAnalysisTasksResponse DescribeRedisBigKeyAnalysisTasks(Models\DescribeRedisBigKeyAnalysisTasksRequest $req) 查询redis大key分析任务列表。
 * @method Models\DescribeRedisCmdPerfTimeSeriesResponse DescribeRedisCmdPerfTimeSeries(Models\DescribeRedisCmdPerfTimeSeriesRequest $req) 延迟分析-命令字分析-查询命令延迟趋势
 * @method Models\DescribeRedisCommandCostStatisticsResponse DescribeRedisCommandCostStatistics(Models\DescribeRedisCommandCostStatisticsRequest $req) 延迟分析-查询命令延迟分布
 * @method Models\DescribeRedisCommandOverviewResponse DescribeRedisCommandOverview(Models\DescribeRedisCommandOverviewRequest $req) 延迟分析-查询实例访问命令统计
 * @method Models\DescribeRedisProcessListResponse DescribeRedisProcessList(Models\DescribeRedisProcessListRequest $req) 获取 Redis 实例所有 proxy 节点的实时会话详情列表。
 * @method Models\DescribeRedisSlowLogTopSqlsResponse DescribeRedisSlowLogTopSqls(Models\DescribeRedisSlowLogTopSqlsRequest $req) 统计排序指定时间段内的top慢sql。
 * @method Models\DescribeRedisTopBigKeysResponse DescribeRedisTopBigKeys(Models\DescribeRedisTopBigKeysRequest $req) 查询redis实例大key列表。
 * @method Models\DescribeRedisTopCostCommandsResponse DescribeRedisTopCostCommands(Models\DescribeRedisTopCostCommandsRequest $req) 获取指定时间段内Redis 访问命令 cost top N
 * @method Models\DescribeRedisTopHotKeysResponse DescribeRedisTopHotKeys(Models\DescribeRedisTopHotKeysRequest $req) 热Key分析
 * @method Models\DescribeRedisTopKeyPrefixListResponse DescribeRedisTopKeyPrefixList(Models\DescribeRedisTopKeyPrefixListRequest $req) 查询redis实例top key前缀列表。
 * @method Models\DescribeRedisUnExpiredKeyStatisticsResponse DescribeRedisUnExpiredKeyStatistics(Models\DescribeRedisUnExpiredKeyStatisticsRequest $req) 查询Redis全量Key的内存分布情况。
 * @method Models\DescribeSecurityAuditLogDownloadUrlsResponse DescribeSecurityAuditLogDownloadUrls(Models\DescribeSecurityAuditLogDownloadUrlsRequest $req) 查询安全审计日志导出文件下载链接。目前日志文件下载仅提供腾讯云内网地址，请通过广州地域的腾讯云服务器进行下载。
 * @method Models\DescribeSecurityAuditLogExportTasksResponse DescribeSecurityAuditLogExportTasks(Models\DescribeSecurityAuditLogExportTasksRequest $req) 查询安全审计日志导出任务列表。
 * @method Models\DescribeSlowLogQueryTimeStatsResponse DescribeSlowLogQueryTimeStats(Models\DescribeSlowLogQueryTimeStatsRequest $req) 统计排序指定时间段内的top慢sql。
 * @method Models\DescribeSlowLogTimeSeriesStatsResponse DescribeSlowLogTimeSeriesStats(Models\DescribeSlowLogTimeSeriesStatsRequest $req) 获取慢日志统计柱状图。
 * @method Models\DescribeSlowLogTopSqlsResponse DescribeSlowLogTopSqls(Models\DescribeSlowLogTopSqlsRequest $req) 按照Sql模板+schema的聚合方式，统计排序指定时间段内的top慢sql。
 * @method Models\DescribeSlowLogUserHostStatsResponse DescribeSlowLogUserHostStats(Models\DescribeSlowLogUserHostStatsRequest $req) 获取慢日志来源地址统计分布图。
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) 获取指定时间内某个sql模板的慢日志明细
 * @method Models\DescribeSqlFiltersResponse DescribeSqlFilters(Models\DescribeSqlFiltersRequest $req) 查询实例SQL限流任务列表。
 * @method Models\DescribeSqlTemplateResponse DescribeSqlTemplate(Models\DescribeSqlTemplateRequest $req) 查询SQL模板。
 * @method Models\DescribeTableSpaceDataV2Response DescribeTableSpaceDataV2(Models\DescribeTableSpaceDataV2Request $req) 表空间数据查询（融合接口，多产品统一入口）。按入参 TableSchema + TableName（PG 系额外需 TableCatalog）定位单张表/集合，返回该表的空间使用明细。支持产品：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）、sqlserver（SQL Server）、dcdb（TDSQL MySQL 版）、tdsql（TDSQL）、mariadb（云数据库 MariaDB）。返回值按产品隔离：MySQL 系列返回 MysqlTableSpaceData；PostgreSQL 返回 PostgresTableSpaceData；MongoDB 返回 MongodbTableSpaceData（含集合明细列表 SpaceSchemas 和外层 Timestamp）；SQL Server 返回 SqlServerTableSpaceData。注意：只读实例（CDB RO / RO 组 / CynosDB RO / TDSQL-C 集群 RO）不支持空间分析，调用将直接报错。
 * @method Models\DescribeTopSpaceSchemaTimeSeriesResponse DescribeTopSpaceSchemaTimeSeries(Models\DescribeTopSpaceSchemaTimeSeriesRequest $req) 获取实例占用空间最大的前几个库在指定时间段内的每日由DBbrain定时采集的空间数据，默认返回按大小排序。
 * @method Models\DescribeTopSpaceSchemasResponse DescribeTopSpaceSchemas(Models\DescribeTopSpaceSchemasRequest $req) 获取实例Top库的实时空间统计信息，默认返回按大小排序。
 * @method Models\DescribeTopSpaceTableTimeSeriesResponse DescribeTopSpaceTableTimeSeries(Models\DescribeTopSpaceTableTimeSeriesRequest $req) 获取实例占用空间最大的前几张表在指定时间段内的每日由DBbrain定时采集的空间数据，默认返回按大小排序。
 * @method Models\DescribeTopSpaceTablesResponse DescribeTopSpaceTables(Models\DescribeTopSpaceTablesRequest $req) 获取实例Top表的实时空间统计信息，默认返回按大小排序。
 * @method Models\DescribeTopSpaceTablesV2Response DescribeTopSpaceTablesV2(Models\DescribeTopSpaceTablesV2Request $req) 表级空间 Top 对象查询（融合接口，多产品统一入口），按 SortBy 指定的排序字段返回实例内空间占用 Top N 的表/集合。支持产品：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）、dcdb（TDSQL MySQL 版）、tdsql（TDSQL）、mariadb（云数据库 MariaDB）。返回值根据产品类型返回对应字段：MySQL 系列返回 MysqlObjects，PostgreSQL 返回 PostgresObjects（PG 的 relation/bloat 字段与 MySQL 语义不同），MongoDB 返回 MongodbObjects。
 * @method Models\DescribeUserAutonomyProfileResponse DescribeUserAutonomyProfile(Models\DescribeUserAutonomyProfileRequest $req) 自治中心-终止自治任务（单次）；注意： 接口调用需要加白名单。
 * @method Models\DescribeUserSqlAdviceResponse DescribeUserSqlAdvice(Models\DescribeUserSqlAdviceRequest $req) 获取SQL优化建议。【产品用户回馈，此接口限免开放，后续将并入dbbrain专业版】
 * @method Models\KillMySqlThreadsResponse KillMySqlThreads(Models\KillMySqlThreadsRequest $req) 根据会话ID中断当前会话，该接口分为两次提交：第一次为预提交阶段，Stage为"Prepare"，得到的返回值包含SqlExecId；第二次为确认提交， Stage为"Commit"， 将SqlExecId的值作为参数传入，最终终止会话进程。注意：Prepare请求与Commit请求的间隔不能超过10秒，否则Prepare阶段生成的执行凭证（SqlExecId）将过期失效，Commit操作不会执行任何kill动作。
 * @method Models\ModifyAlarmPolicyResponse ModifyAlarmPolicy(Models\ModifyAlarmPolicyRequest $req) 修改告警策略
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) 修改审计配置相关信息，如高频存储时长等
 * @method Models\ModifyDiagDBInstanceConfResponse ModifyDiagDBInstanceConf(Models\ModifyDiagDBInstanceConfRequest $req) 修改实例的配置信息。
 * @method Models\ModifySqlFiltersResponse ModifySqlFilters(Models\ModifySqlFiltersRequest $req) 更改实例限流任务状态，目前仅用于终止限流。
 * @method Models\ModifyUserAutonomyProfileResponse ModifyUserAutonomyProfile(Models\ModifyUserAutonomyProfileRequest $req) 自治中心-终止自治任务（单次）；注意：接口需要加白名单。
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) 开启数据库审计服务
 * @method Models\UpdateAgentSwitchResponse UpdateAgentSwitch(Models\UpdateAgentSwitchRequest $req) 更新agent状态（停止或重连Agent）
 * @method Models\UpdateDatabaseAutonomyStatusResponse UpdateDatabaseAutonomyStatus(Models\UpdateDatabaseAutonomyStatusRequest $req) 设置数据库自治功能的开关状态。当前支持 MongoDB 的索引推荐（AutoIndexAdvice）功能的开启或关闭。
 * @method Models\UpdateMonitorSwitchResponse UpdateMonitorSwitch(Models\UpdateMonitorSwitchRequest $req) 更新Agent实例状态（停止或重连实例）
 * @method Models\VerifyUserAccountResponse VerifyUserAccount(Models\VerifyUserAccountRequest $req) 验证用户数据库账号权限，获取会话token。
 */

class DbbrainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbbrain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbbrain";

    /**
     * @var string
     */
    protected $version = "2021-05-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbbrain")."\\"."V20210527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
