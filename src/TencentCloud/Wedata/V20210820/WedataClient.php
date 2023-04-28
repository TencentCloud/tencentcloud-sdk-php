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

namespace TencentCloud\Wedata\V20210820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wedata\V20210820\Models as Models;

/**
 * @method Models\BatchCreateIntegrationTaskAlarmsResponse BatchCreateIntegrationTaskAlarms(Models\BatchCreateIntegrationTaskAlarmsRequest $req) 批量创建任务告警规则
 * @method Models\BatchDeleteIntegrationTasksResponse BatchDeleteIntegrationTasks(Models\BatchDeleteIntegrationTasksRequest $req) 批量删除集成任务
 * @method Models\BatchDeleteTasksNewResponse BatchDeleteTasksNew(Models\BatchDeleteTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
批量删除任务，仅对任务状态为”已停止“有效；

 * @method Models\BatchForceSuccessIntegrationTaskInstancesResponse BatchForceSuccessIntegrationTaskInstances(Models\BatchForceSuccessIntegrationTaskInstancesRequest $req) 批量置成功集成任务实例
 * @method Models\BatchKillIntegrationTaskInstancesResponse BatchKillIntegrationTaskInstances(Models\BatchKillIntegrationTaskInstancesRequest $req) 批量终止集成任务实例
 * @method Models\BatchMakeUpIntegrationTasksResponse BatchMakeUpIntegrationTasks(Models\BatchMakeUpIntegrationTasksRequest $req) 对集成离线任务执行批量补数据操作
 * @method Models\BatchModifyOwnersNewResponse BatchModifyOwnersNew(Models\BatchModifyOwnersNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
批量修改任务责任人
 * @method Models\BatchRerunIntegrationTaskInstancesResponse BatchRerunIntegrationTaskInstances(Models\BatchRerunIntegrationTaskInstancesRequest $req) 批量重跑集成任务实例
 * @method Models\BatchResumeIntegrationTasksResponse BatchResumeIntegrationTasks(Models\BatchResumeIntegrationTasksRequest $req) 批量继续执行集成实时任务
 * @method Models\BatchStartIntegrationTasksResponse BatchStartIntegrationTasks(Models\BatchStartIntegrationTasksRequest $req) 批量运行集成任务
 * @method Models\BatchStopIntegrationTasksResponse BatchStopIntegrationTasks(Models\BatchStopIntegrationTasksRequest $req) 批量停止集成任务
 * @method Models\BatchStopTasksNewResponse BatchStopTasksNew(Models\BatchStopTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
仅对任务状态为”调度中“和”已暂停“有效，对所选任务的任务实例进行终止，并停止调度
 * @method Models\BatchSuspendIntegrationTasksResponse BatchSuspendIntegrationTasks(Models\BatchSuspendIntegrationTasksRequest $req) 批量暂停集成任务
 * @method Models\BatchUpdateIntegrationTasksResponse BatchUpdateIntegrationTasks(Models\BatchUpdateIntegrationTasksRequest $req) 批量更新集成任务（暂时仅支持批量更新责任人）
 * @method Models\CheckAlarmRegularNameExistResponse CheckAlarmRegularNameExist(Models\CheckAlarmRegularNameExistRequest $req) 判断告警规则重名
 * @method Models\CheckDuplicateRuleNameResponse CheckDuplicateRuleName(Models\CheckDuplicateRuleNameRequest $req) 检查规则名称是否重复
 * @method Models\CheckDuplicateTemplateNameResponse CheckDuplicateTemplateName(Models\CheckDuplicateTemplateNameRequest $req) 检查规则模板名称是否重复
 * @method Models\CheckIntegrationNodeNameExistsResponse CheckIntegrationNodeNameExists(Models\CheckIntegrationNodeNameExistsRequest $req) 判断集成节点名称是否存在
 * @method Models\CheckIntegrationTaskNameExistsResponse CheckIntegrationTaskNameExists(Models\CheckIntegrationTaskNameExistsRequest $req) 判断集成任务名称是否存在
 * @method Models\CheckTaskNameExistResponse CheckTaskNameExist(Models\CheckTaskNameExistRequest $req) 离线任务重名校验
 * @method Models\CommitExportTaskResponse CommitExportTask(Models\CommitExportTaskRequest $req) 提交数据导出任务
 * @method Models\CommitIntegrationTaskResponse CommitIntegrationTask(Models\CommitIntegrationTaskRequest $req) 提交集成任务
 * @method Models\CommitRuleGroupExecResultResponse CommitRuleGroupExecResult(Models\CommitRuleGroupExecResultRequest $req) Runner 规则检测结果上报
 * @method Models\CommitRuleGroupTaskResponse CommitRuleGroupTask(Models\CommitRuleGroupTaskRequest $req) 提交规则组运行任务接口
 * @method Models\CreateCustomFunctionResponse CreateCustomFunction(Models\CreateCustomFunctionRequest $req)  创建用户自定义函数
 * @method Models\CreateDataSourceResponse CreateDataSource(Models\CreateDataSourceRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建数据源
 * @method Models\CreateFolderResponse CreateFolder(Models\CreateFolderRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建文件夹
 * @method Models\CreateHiveTableResponse CreateHiveTable(Models\CreateHiveTableRequest $req) 建hive表
 * @method Models\CreateHiveTableByDDLResponse CreateHiveTableByDDL(Models\CreateHiveTableByDDLRequest $req) 创建hive表，返回表名称
 * @method Models\CreateInLongAgentResponse CreateInLongAgent(Models\CreateInLongAgentRequest $req) 注册采集器
 * @method Models\CreateIntegrationNodeResponse CreateIntegrationNode(Models\CreateIntegrationNodeRequest $req) 创建集成节点
 * @method Models\CreateIntegrationTaskResponse CreateIntegrationTask(Models\CreateIntegrationTaskRequest $req) 创建集成任务
 * @method Models\CreateOfflineTaskResponse CreateOfflineTask(Models\CreateOfflineTaskRequest $req) 创建离线任务
 * @method Models\CreateOrUpdateResourceResponse CreateOrUpdateResource(Models\CreateOrUpdateResourceRequest $req) 资源管理需要先将资源上传到cos中，然后调用该接口，将cos资源绑定到wedata
 * @method Models\CreateResourcePathResponse CreateResourcePath(Models\CreateResourcePathRequest $req) 文件路径的根目录为 /datastudio/resource，如果要在根目录下创建 aaa 文件夹，FilePath的值应该为 /datastudio/resource，如果根目录下已经创建了 aaa 文件夹，要在 aaa 下创建  bbb 文件夹，FilePath的值应该为 /datastudio/resource/aaa
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 创建质量规则接口
 * @method Models\CreateRuleTemplateResponse CreateRuleTemplate(Models\CreateRuleTemplateRequest $req) 创建规则模版
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建任务
 * @method Models\CreateTaskAlarmRegularResponse CreateTaskAlarmRegular(Models\CreateTaskAlarmRegularRequest $req) 创建任务告警规则
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建工作流
 * @method Models\DeleteCustomFunctionResponse DeleteCustomFunction(Models\DeleteCustomFunctionRequest $req) 删除用户自定义函数
 * @method Models\DeleteDataSourcesResponse DeleteDataSources(Models\DeleteDataSourcesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
删除数据源
 * @method Models\DeleteFolderResponse DeleteFolder(Models\DeleteFolderRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
删除文件夹
 * @method Models\DeleteInLongAgentResponse DeleteInLongAgent(Models\DeleteInLongAgentRequest $req) 删除采集器
 * @method Models\DeleteIntegrationNodeResponse DeleteIntegrationNode(Models\DeleteIntegrationNodeRequest $req) 删除集成节点
 * @method Models\DeleteIntegrationTaskResponse DeleteIntegrationTask(Models\DeleteIntegrationTaskRequest $req) 删除集成任务
 * @method Models\DeleteOfflineTaskResponse DeleteOfflineTask(Models\DeleteOfflineTaskRequest $req) 删除任务
 * @method Models\DeleteResourceResponse DeleteResource(Models\DeleteResourceRequest $req) 资源管理删除资源
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除质量规则接口
 * @method Models\DeleteRuleTemplateResponse DeleteRuleTemplate(Models\DeleteRuleTemplateRequest $req) 删除规则模版
 * @method Models\DeleteTaskAlarmRegularResponse DeleteTaskAlarmRegular(Models\DeleteTaskAlarmRegularRequest $req) 删除任务告警规则
 * @method Models\DeleteWorkflowNewResponse DeleteWorkflowNew(Models\DeleteWorkflowNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
删除工作流
 * @method Models\DescribeAlarmEventsResponse DescribeAlarmEvents(Models\DescribeAlarmEventsRequest $req) 告警事件列表
 * @method Models\DescribeAlarmReceiverResponse DescribeAlarmReceiver(Models\DescribeAlarmReceiverRequest $req) 告警接收人详情
 * @method Models\DescribeClusterNamespaceListResponse DescribeClusterNamespaceList(Models\DescribeClusterNamespaceListRequest $req) 获取集群命名空间列表
 * @method Models\DescribeDataBasesResponse DescribeDataBases(Models\DescribeDataBasesRequest $req) 查询数据来源列表
 * @method Models\DescribeDataCheckStatResponse DescribeDataCheckStat(Models\DescribeDataCheckStatRequest $req) 数据质量的概览页面数据监测情况接口
 * @method Models\DescribeDataObjectsResponse DescribeDataObjects(Models\DescribeDataObjectsRequest $req) 查询规则组数据对象列表
 * @method Models\DescribeDataSourceInfoListResponse DescribeDataSourceInfoList(Models\DescribeDataSourceInfoListRequest $req) 获取数据源信息-数据源分页列表
 * @method Models\DescribeDataSourceListResponse DescribeDataSourceList(Models\DescribeDataSourceListRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
数据源详情
 * @method Models\DescribeDataSourceWithoutInfoResponse DescribeDataSourceWithoutInfo(Models\DescribeDataSourceWithoutInfoRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
数据源列表
 * @method Models\DescribeDataTypesResponse DescribeDataTypes(Models\DescribeDataTypesRequest $req) 获取字段类型列表
 * @method Models\DescribeDatabaseInfoListResponse DescribeDatabaseInfoList(Models\DescribeDatabaseInfoListRequest $req) 获取数据库信息
 * @method Models\DescribeDatasourceResponse DescribeDatasource(Models\DescribeDatasourceRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
数据源详情
 * @method Models\DescribeDependTasksNewResponse DescribeDependTasksNew(Models\DescribeDependTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
根据层级查找上/下游任务节点
 * @method Models\DescribeDimensionScoreResponse DescribeDimensionScore(Models\DescribeDimensionScoreRequest $req) 质量报告-查询质量评分
 * @method Models\DescribeExecStrategyResponse DescribeExecStrategy(Models\DescribeExecStrategyRequest $req) 查询规则组执行策略
 * @method Models\DescribeFolderListResponse DescribeFolderList(Models\DescribeFolderListRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
拉取文件夹目录
 * @method Models\DescribeFolderWorkflowListResponse DescribeFolderWorkflowList(Models\DescribeFolderWorkflowListRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
拉取文件夹下的工作流
 * @method Models\DescribeFunctionKindsResponse DescribeFunctionKinds(Models\DescribeFunctionKindsRequest $req) 查询函数分类
 * @method Models\DescribeFunctionTypesResponse DescribeFunctionTypes(Models\DescribeFunctionTypesRequest $req) 查询函数类型
 * @method Models\DescribeInLongAgentListResponse DescribeInLongAgentList(Models\DescribeInLongAgentListRequest $req) 获取采集器列表
 * @method Models\DescribeInLongAgentTaskListResponse DescribeInLongAgentTaskList(Models\DescribeInLongAgentTaskListRequest $req) 查询采集器关联的任务列表
 * @method Models\DescribeInLongAgentVpcListResponse DescribeInLongAgentVpcList(Models\DescribeInLongAgentVpcListRequest $req) 获取采集器所在集群的VPC列表
 * @method Models\DescribeInLongTkeClusterListResponse DescribeInLongTkeClusterList(Models\DescribeInLongTkeClusterListRequest $req) 获取TKE集群列表
 * @method Models\DescribeInstanceLastLogResponse DescribeInstanceLastLog(Models\DescribeInstanceLastLogRequest $req) 日志获取详情页面
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表
 * @method Models\DescribeInstanceLogResponse DescribeInstanceLog(Models\DescribeInstanceLogRequest $req) 获取实例运行日志
 * @method Models\DescribeInstanceLogListResponse DescribeInstanceLogList(Models\DescribeInstanceLogListRequest $req) 离线任务实例运行日志列表
 * @method Models\DescribeInstanceLogsResponse DescribeInstanceLogs(Models\DescribeInstanceLogsRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
获取实例日志列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 数据质量，查询调度任务的实例列表
 * @method Models\DescribeIntegrationNodeResponse DescribeIntegrationNode(Models\DescribeIntegrationNodeRequest $req) 查询集成节点
 * @method Models\DescribeIntegrationStatisticsResponse DescribeIntegrationStatistics(Models\DescribeIntegrationStatisticsRequest $req) 数据集成大屏概览
 * @method Models\DescribeIntegrationStatisticsAgentStatusResponse DescribeIntegrationStatisticsAgentStatus(Models\DescribeIntegrationStatisticsAgentStatusRequest $req) 数据集成大屏采集器状态分布统计
 * @method Models\DescribeIntegrationStatisticsInstanceTrendResponse DescribeIntegrationStatisticsInstanceTrend(Models\DescribeIntegrationStatisticsInstanceTrendRequest $req) 数据集成大屏实例状态统计趋势
 * @method Models\DescribeIntegrationStatisticsRecordsTrendResponse DescribeIntegrationStatisticsRecordsTrend(Models\DescribeIntegrationStatisticsRecordsTrendRequest $req) 数据集成大屏同步条数统计趋势
 * @method Models\DescribeIntegrationStatisticsTaskStatusResponse DescribeIntegrationStatisticsTaskStatus(Models\DescribeIntegrationStatisticsTaskStatusRequest $req) 数据集成大屏任务状态分布统计
 * @method Models\DescribeIntegrationStatisticsTaskStatusTrendResponse DescribeIntegrationStatisticsTaskStatusTrend(Models\DescribeIntegrationStatisticsTaskStatusTrendRequest $req) 数据集成大屏任务状态统计趋势
 * @method Models\DescribeIntegrationTaskResponse DescribeIntegrationTask(Models\DescribeIntegrationTaskRequest $req) 查询集成任务
 * @method Models\DescribeIntegrationTasksResponse DescribeIntegrationTasks(Models\DescribeIntegrationTasksRequest $req) 查询集成任务列表
 * @method Models\DescribeIntegrationVersionNodesInfoResponse DescribeIntegrationVersionNodesInfo(Models\DescribeIntegrationVersionNodesInfoRequest $req) 查询集成任务版本节点信息
 * @method Models\DescribeKafkaTopicInfoResponse DescribeKafkaTopicInfo(Models\DescribeKafkaTopicInfoRequest $req) 获取kafka的topic信息
 * @method Models\DescribeMonitorsByPageResponse DescribeMonitorsByPage(Models\DescribeMonitorsByPageRequest $req) 分页查询质量监控组
 * @method Models\DescribeOfflineTaskTokenResponse DescribeOfflineTaskToken(Models\DescribeOfflineTaskTokenRequest $req) 获取离线任务长连接Token
 * @method Models\DescribeOperateTasksResponse DescribeOperateTasks(Models\DescribeOperateTasksRequest $req) 任务运维列表组合条件查询
 * @method Models\DescribeOrganizationalFunctionsResponse DescribeOrganizationalFunctions(Models\DescribeOrganizationalFunctionsRequest $req) 查询全量函数
 * @method Models\DescribeProdTasksResponse DescribeProdTasks(Models\DescribeProdTasksRequest $req) 数据质量获取生产调度任务列表
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 获取项目信息
 * @method Models\DescribeQualityScoreResponse DescribeQualityScore(Models\DescribeQualityScoreRequest $req) 质量报告-质量评分
 * @method Models\DescribeQualityScoreTrendResponse DescribeQualityScoreTrend(Models\DescribeQualityScoreTrendRequest $req) 质量报告-质量分周期趋势
 * @method Models\DescribeRealTimeTaskInstanceNodeInfoResponse DescribeRealTimeTaskInstanceNodeInfo(Models\DescribeRealTimeTaskInstanceNodeInfoRequest $req) 查询实时任务实例节点信息
 * @method Models\DescribeRealTimeTaskMetricOverviewResponse DescribeRealTimeTaskMetricOverview(Models\DescribeRealTimeTaskMetricOverviewRequest $req) 实时任务运行指标概览
 * @method Models\DescribeRealTimeTaskSpeedResponse DescribeRealTimeTaskSpeed(Models\DescribeRealTimeTaskSpeedRequest $req) 实时任务同步速度趋势
 * @method Models\DescribeRelatedInstancesResponse DescribeRelatedInstances(Models\DescribeRelatedInstancesRequest $req) 查询任务实例的关联实例列表
 * @method Models\DescribeResourceManagePathTreesResponse DescribeResourceManagePathTrees(Models\DescribeResourceManagePathTreesRequest $req) 获取资源管理目录树
 * @method Models\DescribeRuleResponse DescribeRule(Models\DescribeRuleRequest $req) 查询规则详情
 * @method Models\DescribeRuleDataSourcesResponse DescribeRuleDataSources(Models\DescribeRuleDataSourcesRequest $req) 查询质量规则数据源
 * @method Models\DescribeRuleDimStatResponse DescribeRuleDimStat(Models\DescribeRuleDimStatRequest $req) 数据质量概览页面触发维度分布统计接口
 * @method Models\DescribeRuleExecDetailResponse DescribeRuleExecDetail(Models\DescribeRuleExecDetailRequest $req) 查询规则执行结果详情
 * @method Models\DescribeRuleExecExportResultResponse DescribeRuleExecExportResult(Models\DescribeRuleExecExportResultRequest $req) 查询规则执行导出结果
 * @method Models\DescribeRuleExecHistoryResponse DescribeRuleExecHistory(Models\DescribeRuleExecHistoryRequest $req) 查询规则执行历史， 最近30条
 * @method Models\DescribeRuleExecLogResponse DescribeRuleExecLog(Models\DescribeRuleExecLogRequest $req) 规则执行日志查询
 * @method Models\DescribeRuleExecResultsResponse DescribeRuleExecResults(Models\DescribeRuleExecResultsRequest $req) 规则执行结果列表查询
 * @method Models\DescribeRuleExecResultsByPageResponse DescribeRuleExecResultsByPage(Models\DescribeRuleExecResultsByPageRequest $req) 分页查询规则执行结果列表
 * @method Models\DescribeRuleExecStatResponse DescribeRuleExecStat(Models\DescribeRuleExecStatRequest $req) 数据质量概览页面规则运行情况接口
 * @method Models\DescribeRuleGroupResponse DescribeRuleGroup(Models\DescribeRuleGroupRequest $req) 查询规则组详情接口
 * @method Models\DescribeRuleGroupExecResultsByPageResponse DescribeRuleGroupExecResultsByPage(Models\DescribeRuleGroupExecResultsByPageRequest $req) 规则组执行结果分页查询接口
 * @method Models\DescribeRuleGroupExecResultsByPageWithoutAuthResponse DescribeRuleGroupExecResultsByPageWithoutAuth(Models\DescribeRuleGroupExecResultsByPageWithoutAuthRequest $req) 规则组执行结果分页查询接口不带鉴权
 * @method Models\DescribeRuleGroupSubscriptionResponse DescribeRuleGroupSubscription(Models\DescribeRuleGroupSubscriptionRequest $req) 查询规则组订阅信息
 * @method Models\DescribeRuleGroupTableResponse DescribeRuleGroupTable(Models\DescribeRuleGroupTableRequest $req) 查询表绑定执行规则组信息
 * @method Models\DescribeRuleGroupsByPageResponse DescribeRuleGroupsByPage(Models\DescribeRuleGroupsByPageRequest $req) 【过滤条件】
{表名称TableName,支持模糊匹配}       {表负责人TableOwnerName,支持模糊匹配}      {监控方式MonitorTypes，1.未配置 2.关联生产调度 3.离线周期检测,支持多选}  {订阅人ReceiverUin}
【必要字段】
{数据来源DatasourceId}
 * @method Models\DescribeRuleHistoryByPageResponse DescribeRuleHistoryByPage(Models\DescribeRuleHistoryByPageRequest $req) 过滤条件【必要字段】{ruleId}
 * @method Models\DescribeRuleTablesByPageResponse DescribeRuleTablesByPage(Models\DescribeRuleTablesByPageRequest $req) 获取表列表
 * @method Models\DescribeRuleTemplateResponse DescribeRuleTemplate(Models\DescribeRuleTemplateRequest $req) 查询模板详情
 * @method Models\DescribeRuleTemplatesResponse DescribeRuleTemplates(Models\DescribeRuleTemplatesRequest $req) 查询规则模版列表
 * @method Models\DescribeRuleTemplatesByPageResponse DescribeRuleTemplatesByPage(Models\DescribeRuleTemplatesByPageRequest $req) 过滤条件】 {模版名称Name,支持模糊匹配} {模版类型type，1.系统模版 2.自定义模版} {质量检测维度QualityDims, 1.准确性 2.唯一性 3.完整性 4.一致性 5.及时性 6.有效性} 【排序字段】 { 引用数排序类型CitationOrderType，根据引用数量排序 ASC DESC}
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询质量规则列表
 * @method Models\DescribeRulesByPageResponse DescribeRulesByPage(Models\DescribeRulesByPageRequest $req) 分页查询质量规则
 * @method Models\DescribeStandardRuleDetailInfoListResponse DescribeStandardRuleDetailInfoList(Models\DescribeStandardRuleDetailInfoListRequest $req) 获取数据标准规则详情
 * @method Models\DescribeStreamTaskLogListResponse DescribeStreamTaskLogList(Models\DescribeStreamTaskLogListRequest $req) 查询实时任务日志列表
 * @method Models\DescribeTableInfoListResponse DescribeTableInfoList(Models\DescribeTableInfoListRequest $req) 获取数据表信息
 * @method Models\DescribeTableQualityDetailsResponse DescribeTableQualityDetails(Models\DescribeTableQualityDetailsRequest $req) 质量报告-查询表质量详情
 * @method Models\DescribeTableSchemaInfoResponse DescribeTableSchemaInfo(Models\DescribeTableSchemaInfoRequest $req) 获取表schema信息
 * @method Models\DescribeTableScoreTrendResponse DescribeTableScoreTrend(Models\DescribeTableScoreTrendRequest $req) 查询表得分趋势
 * @method Models\DescribeTaskAlarmRegulationsResponse DescribeTaskAlarmRegulations(Models\DescribeTaskAlarmRegulationsRequest $req) 查询任务告警规则列表
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
查询任务具体详情
 * @method Models\DescribeTaskInstanceResponse DescribeTaskInstance(Models\DescribeTaskInstanceRequest $req) 离线任务实例详情
 * @method Models\DescribeTaskInstanceReportDetailResponse DescribeTaskInstanceReportDetail(Models\DescribeTaskInstanceReportDetailRequest $req) 离线任务实例统计明细
 * @method Models\DescribeTaskInstancesResponse DescribeTaskInstances(Models\DescribeTaskInstancesRequest $req) 查询任务实例列表
 * @method Models\DescribeTaskLockStatusResponse DescribeTaskLockStatus(Models\DescribeTaskLockStatusRequest $req) 查看任务锁状态信息
 * @method Models\DescribeTaskReportResponse DescribeTaskReport(Models\DescribeTaskReportRequest $req) 按起止日期统计离线任务的所有实例的运行指标总和
 * @method Models\DescribeTaskReportDetailListResponse DescribeTaskReportDetailList(Models\DescribeTaskReportDetailListRequest $req) 离线任务周期统计明细
 * @method Models\DescribeTaskScriptResponse DescribeTaskScript(Models\DescribeTaskScriptRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
查询任务脚本
 * @method Models\DescribeTasksByPageResponse DescribeTasksByPage(Models\DescribeTasksByPageRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
根据工作流分页查询任务
 * @method Models\DescribeTemplateDimCountResponse DescribeTemplateDimCount(Models\DescribeTemplateDimCountRequest $req) 查询规则模版维度分布情况
 * @method Models\DescribeTemplateHistoryResponse DescribeTemplateHistory(Models\DescribeTemplateHistoryRequest $req) 查询规则模版操作记录
 * @method Models\DescribeTopTableStatResponse DescribeTopTableStat(Models\DescribeTopTableStatRequest $req) 数据质量概览页面表排行接口
 * @method Models\DescribeTrendStatResponse DescribeTrendStat(Models\DescribeTrendStatRequest $req) 数据质量概览页面趋势变化接口
 * @method Models\DryRunDIOfflineTaskResponse DryRunDIOfflineTask(Models\DryRunDIOfflineTaskRequest $req) 调试运行集成任务
 * @method Models\ForceSucInstancesResponse ForceSucInstances(Models\ForceSucInstancesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
实例批量置成功
 * @method Models\FreezeTasksResponse FreezeTasks(Models\FreezeTasksRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
批量冻结任务
 * @method Models\FreezeTasksByMultiWorkflowResponse FreezeTasksByMultiWorkflow(Models\FreezeTasksByMultiWorkflowRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
基于多个工作流进行批量冻结任务操作
 * @method Models\GenHiveTableDDLSqlResponse GenHiveTableDDLSql(Models\GenHiveTableDDLSqlRequest $req) 生成建hive表的sql
 * @method Models\GetIntegrationNodeColumnSchemaResponse GetIntegrationNodeColumnSchema(Models\GetIntegrationNodeColumnSchemaRequest $req) 提取数据集成节点字段Schema
 * @method Models\GetOfflineDIInstanceListResponse GetOfflineDIInstanceList(Models\GetOfflineDIInstanceListRequest $req) 获取离线任务实例列表(新)
 * @method Models\GetOfflineInstanceListResponse GetOfflineInstanceList(Models\GetOfflineInstanceListRequest $req) 获取离线任务实例
 * @method Models\KillInstancesResponse KillInstances(Models\KillInstancesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
实例批量终止操作
 * @method Models\LockIntegrationTaskResponse LockIntegrationTask(Models\LockIntegrationTaskRequest $req) 锁定集成任务
 * @method Models\MakeUpTasksNewResponse MakeUpTasksNew(Models\MakeUpTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
任务批量补录，调度状态任务才可以补录；



 * @method Models\MakeUpWorkflowNewResponse MakeUpWorkflowNew(Models\MakeUpWorkflowNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
工作流下所有任务的补录
 * @method Models\ModifyDataSourceResponse ModifyDataSource(Models\ModifyDataSourceRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
修改数据源
 * @method Models\ModifyDimensionWeightResponse ModifyDimensionWeight(Models\ModifyDimensionWeightRequest $req) 质量报告-修改维度权限
 * @method Models\ModifyExecStrategyResponse ModifyExecStrategy(Models\ModifyExecStrategyRequest $req) 更新规则组执行策略
 * @method Models\ModifyFolderResponse ModifyFolder(Models\ModifyFolderRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
文件夹更新
 * @method Models\ModifyIntegrationNodeResponse ModifyIntegrationNode(Models\ModifyIntegrationNodeRequest $req) 更新集成节点
 * @method Models\ModifyIntegrationTaskResponse ModifyIntegrationTask(Models\ModifyIntegrationTaskRequest $req) 更新集成任务
 * @method Models\ModifyMonitorStatusResponse ModifyMonitorStatus(Models\ModifyMonitorStatusRequest $req) 更新监控状态
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 更新质量规则接口
 * @method Models\ModifyRuleGroupSubscriptionResponse ModifyRuleGroupSubscription(Models\ModifyRuleGroupSubscriptionRequest $req) 更新规则组订阅信息
 * @method Models\ModifyRuleTemplateResponse ModifyRuleTemplate(Models\ModifyRuleTemplateRequest $req) 编辑规则模版
 * @method Models\ModifyTaskAlarmRegularResponse ModifyTaskAlarmRegular(Models\ModifyTaskAlarmRegularRequest $req) 修改任务告警规则
 * @method Models\ModifyTaskInfoResponse ModifyTaskInfo(Models\ModifyTaskInfoRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
更新任务
 * @method Models\ModifyTaskLinksResponse ModifyTaskLinks(Models\ModifyTaskLinksRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
添加父任务依赖
 * @method Models\ModifyTaskNameResponse ModifyTaskName(Models\ModifyTaskNameRequest $req) 重命名任务（任务编辑）
 * @method Models\ModifyTaskScriptResponse ModifyTaskScript(Models\ModifyTaskScriptRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
修改任务脚本
 * @method Models\ModifyWorkflowInfoResponse ModifyWorkflowInfo(Models\ModifyWorkflowInfoRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
更新工作流
 * @method Models\ModifyWorkflowScheduleResponse ModifyWorkflowSchedule(Models\ModifyWorkflowScheduleRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
更新工作流调度
 * @method Models\RegisterEventResponse RegisterEvent(Models\RegisterEventRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
注册事件
 * @method Models\RegisterEventListenerResponse RegisterEventListener(Models\RegisterEventListenerRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
注册事件监听器
 * @method Models\RerunInstancesResponse RerunInstances(Models\RerunInstancesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
实例批量重跑
 * @method Models\RestartInLongAgentResponse RestartInLongAgent(Models\RestartInLongAgentRequest $req) 重启采集器
 * @method Models\ResumeIntegrationTaskResponse ResumeIntegrationTask(Models\ResumeIntegrationTaskRequest $req) 继续集成任务
 * @method Models\RobAndLockIntegrationTaskResponse RobAndLockIntegrationTask(Models\RobAndLockIntegrationTaskRequest $req) 抢占锁定集成任务
 * @method Models\RunTaskResponse RunTask(Models\RunTaskRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
运行任务
 * @method Models\SaveCustomFunctionResponse SaveCustomFunction(Models\SaveCustomFunctionRequest $req) 保存用户自定义函数
 * @method Models\SetTaskAlarmNewResponse SetTaskAlarmNew(Models\SetTaskAlarmNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
设置任务告警，新建/更新告警信息（最新）
 * @method Models\StartIntegrationTaskResponse StartIntegrationTask(Models\StartIntegrationTaskRequest $req) 启动集成任务
 * @method Models\StopIntegrationTaskResponse StopIntegrationTask(Models\StopIntegrationTaskRequest $req) 停止集成任务
 * @method Models\SubmitCustomFunctionResponse SubmitCustomFunction(Models\SubmitCustomFunctionRequest $req) 提交自定义函数
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
提交任务
 * @method Models\SubmitWorkflowResponse SubmitWorkflow(Models\SubmitWorkflowRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
提交工作流
 * @method Models\SuspendIntegrationTaskResponse SuspendIntegrationTask(Models\SuspendIntegrationTaskRequest $req) 暂停集成任务
 * @method Models\TaskLogResponse TaskLog(Models\TaskLogRequest $req) 查询Inlong manager日志
 * @method Models\TriggerEventResponse TriggerEvent(Models\TriggerEventRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
触发事件
 * @method Models\UnlockIntegrationTaskResponse UnlockIntegrationTask(Models\UnlockIntegrationTaskRequest $req) 解锁集成任务
 * @method Models\UpdateInLongAgentResponse UpdateInLongAgent(Models\UpdateInLongAgentRequest $req) 更新采集器
 */

class WedataClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wedata.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wedata";

    /**
     * @var string
     */
    protected $version = "2021-08-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("wedata")."\\"."V20210820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
