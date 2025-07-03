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
 * @method Models\AddProjectUserRoleResponse AddProjectUserRole(Models\AddProjectUserRoleRequest $req) 添加项目用户角色
 * @method Models\BatchCreateIntegrationTaskAlarmsResponse BatchCreateIntegrationTaskAlarms(Models\BatchCreateIntegrationTaskAlarmsRequest $req) 批量创建任务告警规则
 * @method Models\BatchCreateTaskVersionAsyncResponse BatchCreateTaskVersionAsync(Models\BatchCreateTaskVersionAsyncRequest $req) 异步批量创建任务版本
 * @method Models\BatchDeleteIntegrationTasksResponse BatchDeleteIntegrationTasks(Models\BatchDeleteIntegrationTasksRequest $req) 批量删除集成任务
 * @method Models\BatchDeleteOpsTasksResponse BatchDeleteOpsTasks(Models\BatchDeleteOpsTasksRequest $req) 任务运维-批量删除任务
 * @method Models\BatchForceSuccessIntegrationTaskInstancesResponse BatchForceSuccessIntegrationTaskInstances(Models\BatchForceSuccessIntegrationTaskInstancesRequest $req) 批量置成功集成任务实例
 * @method Models\BatchKillIntegrationTaskInstancesResponse BatchKillIntegrationTaskInstances(Models\BatchKillIntegrationTaskInstancesRequest $req) 批量终止集成任务实例
 * @method Models\BatchMakeUpIntegrationTasksResponse BatchMakeUpIntegrationTasks(Models\BatchMakeUpIntegrationTasksRequest $req) 对集成离线任务执行批量补数据操作
 * @method Models\BatchModifyOpsOwnersResponse BatchModifyOpsOwners(Models\BatchModifyOpsOwnersRequest $req) 批量修改任务责任人
 * @method Models\BatchRerunIntegrationTaskInstancesResponse BatchRerunIntegrationTaskInstances(Models\BatchRerunIntegrationTaskInstancesRequest $req) 批量重跑集成任务实例
 * @method Models\BatchResumeIntegrationTasksResponse BatchResumeIntegrationTasks(Models\BatchResumeIntegrationTasksRequest $req) 批量继续执行集成实时任务
 * @method Models\BatchRunOpsTaskResponse BatchRunOpsTask(Models\BatchRunOpsTaskRequest $req) 任务运维-任务列表 批量启动
 * @method Models\BatchStartIntegrationTasksResponse BatchStartIntegrationTasks(Models\BatchStartIntegrationTasksRequest $req) 批量运行集成任务
 * @method Models\BatchStopIntegrationTasksResponse BatchStopIntegrationTasks(Models\BatchStopIntegrationTasksRequest $req) 批量停止集成任务
 * @method Models\BatchStopOpsTasksResponse BatchStopOpsTasks(Models\BatchStopOpsTasksRequest $req) 仅对任务状态为”调度中“和”已暂停“有效，对所选任务的任务实例进行终止，并停止调度
 * @method Models\BatchStopWorkflowsByIdsResponse BatchStopWorkflowsByIds(Models\BatchStopWorkflowsByIdsRequest $req) 批量停止工作流
 * @method Models\BatchSuspendIntegrationTasksResponse BatchSuspendIntegrationTasks(Models\BatchSuspendIntegrationTasksRequest $req) 批量暂停集成任务
 * @method Models\BatchUpdateIntegrationTasksResponse BatchUpdateIntegrationTasks(Models\BatchUpdateIntegrationTasksRequest $req) 批量更新集成任务（暂时仅支持批量更新责任人）
 * @method Models\CheckAlarmRegularNameExistResponse CheckAlarmRegularNameExist(Models\CheckAlarmRegularNameExistRequest $req) 判断告警规则重名
 * @method Models\CheckIntegrationNodeNameExistsResponse CheckIntegrationNodeNameExists(Models\CheckIntegrationNodeNameExistsRequest $req) 判断集成节点名称是否存在
 * @method Models\CheckIntegrationTaskNameExistsResponse CheckIntegrationTaskNameExists(Models\CheckIntegrationTaskNameExistsRequest $req) 判断集成任务名称是否存在
 * @method Models\CheckTaskNameExistResponse CheckTaskNameExist(Models\CheckTaskNameExistRequest $req) 离线任务重名校验
 * @method Models\CommitIntegrationTaskResponse CommitIntegrationTask(Models\CommitIntegrationTaskRequest $req) 提交集成任务
 * @method Models\CommitRuleGroupTaskResponse CommitRuleGroupTask(Models\CommitRuleGroupTaskRequest $req) 提交规则组运行任务接口
 * @method Models\CountOpsInstanceStateResponse CountOpsInstanceState(Models\CountOpsInstanceStateRequest $req) 统计任务实例状态
 * @method Models\CreateCodeTemplateResponse CreateCodeTemplate(Models\CreateCodeTemplateRequest $req) 创建代码模版
 * @method Models\CreateCodeTemplateVersionResponse CreateCodeTemplateVersion(Models\CreateCodeTemplateVersionRequest $req) 提交代码模版
 * @method Models\CreateCustomFunctionResponse CreateCustomFunction(Models\CreateCustomFunctionRequest $req) 创建用户自定义函数
 * @method Models\CreateDataModelResponse CreateDataModel(Models\CreateDataModelRequest $req) 创建数据建模，提供给云应用使用，实现“Wedata数据建模”的下单发货
 * @method Models\CreateDataSourceResponse CreateDataSource(Models\CreateDataSourceRequest $req) 创建数据源
 * @method Models\CreateDsFolderResponse CreateDsFolder(Models\CreateDsFolderRequest $req) 编排空间-创建文件夹
 * @method Models\CreateHiveTableResponse CreateHiveTable(Models\CreateHiveTableRequest $req) 建hive表
 * @method Models\CreateHiveTableByDDLResponse CreateHiveTableByDDL(Models\CreateHiveTableByDDLRequest $req) 创建hive表，返回表名称
 * @method Models\CreateIntegrationNodeResponse CreateIntegrationNode(Models\CreateIntegrationNodeRequest $req) 创建集成节点
 * @method Models\CreateIntegrationTaskResponse CreateIntegrationTask(Models\CreateIntegrationTaskRequest $req) 创建集成任务
 * @method Models\CreateOfflineTaskResponse CreateOfflineTask(Models\CreateOfflineTaskRequest $req) 创建离线任务
 * @method Models\CreateOpsMakePlanResponse CreateOpsMakePlan(Models\CreateOpsMakePlanRequest $req) 批量补数据（创建补录任务）
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 创建质量规则接口
 * @method Models\CreateRuleTemplateResponse CreateRuleTemplate(Models\CreateRuleTemplateRequest $req) 创建规则模板
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 创建任务。本接口已废弃，请使用接口CreateTaskNew。
 * @method Models\CreateTaskAlarmRegularResponse CreateTaskAlarmRegular(Models\CreateTaskAlarmRegularRequest $req) 创建任务告警规则
 * @method Models\CreateTaskFolderResponse CreateTaskFolder(Models\CreateTaskFolderRequest $req) 编排空间-工作流-创建任务文件夹
 * @method Models\CreateTaskNewResponse CreateTaskNew(Models\CreateTaskNewRequest $req) 聚合创建任务
 * @method Models\CreateTaskVersionDsResponse CreateTaskVersionDs(Models\CreateTaskVersionDsRequest $req) 提交任务版本
 * @method Models\CreateWorkflowDsResponse CreateWorkflowDs(Models\CreateWorkflowDsRequest $req) 创建工作流
 * @method Models\DagInstancesResponse DagInstances(Models\DagInstancesRequest $req) 拉取dag实例
 * @method Models\DeleteCodeTemplateResponse DeleteCodeTemplate(Models\DeleteCodeTemplateRequest $req) 删除代码模版
 * @method Models\DeleteCustomFunctionResponse DeleteCustomFunction(Models\DeleteCustomFunctionRequest $req) 删除用户自定义函数
 * @method Models\DeleteDataModelResponse DeleteDataModel(Models\DeleteDataModelRequest $req) 销毁数据建模，提供给云应用使用，实现“Wedata数据建模”的销毁
 * @method Models\DeleteDataSourcesResponse DeleteDataSources(Models\DeleteDataSourcesRequest $req) 删除数据源
 * @method Models\DeleteDsFolderResponse DeleteDsFolder(Models\DeleteDsFolderRequest $req) 编排空间-删除文件夹
 * @method Models\DeleteFileResponse DeleteFile(Models\DeleteFileRequest $req) 删除文件
 * @method Models\DeleteFilePathResponse DeleteFilePath(Models\DeleteFilePathRequest $req) 开发空间-批量删除目录和文件
 * @method Models\DeleteIntegrationNodeResponse DeleteIntegrationNode(Models\DeleteIntegrationNodeRequest $req) 删除集成节点
 * @method Models\DeleteIntegrationTaskResponse DeleteIntegrationTask(Models\DeleteIntegrationTaskRequest $req) 删除集成任务
 * @method Models\DeleteLinkResponse DeleteLink(Models\DeleteLinkRequest $req) 删除任务连接
 * @method Models\DeleteOfflineTaskResponse DeleteOfflineTask(Models\DeleteOfflineTaskRequest $req) 删除任务
 * @method Models\DeleteProjectParamDsResponse DeleteProjectParamDs(Models\DeleteProjectParamDsRequest $req) 删除项目参数
 * @method Models\DeleteProjectUsersResponse DeleteProjectUsers(Models\DeleteProjectUsersRequest $req) 删除项目用户
 * @method Models\DeleteResourceResponse DeleteResource(Models\DeleteResourceRequest $req) 资源管理删除资源。本接口已废弃，请使用接口DeleteResourceFile。
 * @method Models\DeleteResourceFileResponse DeleteResourceFile(Models\DeleteResourceFileRequest $req) 资源管理-删除资源文件
 * @method Models\DeleteResourceFilesResponse DeleteResourceFiles(Models\DeleteResourceFilesRequest $req) 资源管理-批量删除资源文件
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除质量规则接口
 * @method Models\DeleteRuleTemplateResponse DeleteRuleTemplate(Models\DeleteRuleTemplateRequest $req) 删除规则模板
 * @method Models\DeleteTaskAlarmRegularResponse DeleteTaskAlarmRegular(Models\DeleteTaskAlarmRegularRequest $req) 删除任务告警规则
 * @method Models\DeleteTaskDsResponse DeleteTaskDs(Models\DeleteTaskDsRequest $req) 删除编排空间任务
 * @method Models\DeleteWorkflowByIdResponse DeleteWorkflowById(Models\DeleteWorkflowByIdRequest $req) 通过工作流Id删除工作流
 * @method Models\DescribeAlarmEventsResponse DescribeAlarmEvents(Models\DescribeAlarmEventsRequest $req) 告警事件列表
 * @method Models\DescribeAlarmReceiverResponse DescribeAlarmReceiver(Models\DescribeAlarmReceiverRequest $req) 告警接收人详情
 * @method Models\DescribeAllByFolderNewResponse DescribeAllByFolderNew(Models\DescribeAllByFolderNewRequest $req) 查询父目录下所有子文件夹+工作流
 * @method Models\DescribeApproveListResponse DescribeApproveList(Models\DescribeApproveListRequest $req) 获取待审批列表
 * @method Models\DescribeApproveTypeListResponse DescribeApproveTypeList(Models\DescribeApproveTypeListRequest $req) 获取审批分类列表
 * @method Models\DescribeBaseBizCatalogsResponse DescribeBaseBizCatalogs(Models\DescribeBaseBizCatalogsRequest $req) 数据地图-信息配置 数据类目列表
 * @method Models\DescribeBatchOperateTaskResponse DescribeBatchOperateTask(Models\DescribeBatchOperateTaskRequest $req) 批量操作页面获取任务列表
 * @method Models\DescribeCodeTemplateDetailResponse DescribeCodeTemplateDetail(Models\DescribeCodeTemplateDetailRequest $req) 查询代码模版具体详情
 * @method Models\DescribeColumnLineageResponse DescribeColumnLineage(Models\DescribeColumnLineageRequest $req) 列出字段血缘信息
 * @method Models\DescribeColumnsMetaResponse DescribeColumnsMeta(Models\DescribeColumnsMetaRequest $req) 查询表的所有列元数据
 * @method Models\DescribeDataCheckStatResponse DescribeDataCheckStat(Models\DescribeDataCheckStatRequest $req) 数据质量的概览页面数据监测情况接口
 * @method Models\DescribeDataServicePublishedApiDetailResponse DescribeDataServicePublishedApiDetail(Models\DescribeDataServicePublishedApiDetailRequest $req) 查询数据服务API的发布态信息
 * @method Models\DescribeDataServicePublishedApiListResponse DescribeDataServicePublishedApiList(Models\DescribeDataServicePublishedApiListRequest $req) 获取数据服务API的发布态信息列表
 * @method Models\DescribeDataSourceInfoListResponse DescribeDataSourceInfoList(Models\DescribeDataSourceInfoListRequest $req) 获取数据源信息-数据源分页列表
 * @method Models\DescribeDataSourceListResponse DescribeDataSourceList(Models\DescribeDataSourceListRequest $req) 数据源详情
 * @method Models\DescribeDatabaseInfoListResponse DescribeDatabaseInfoList(Models\DescribeDatabaseInfoListRequest $req) 获取数据库信息
 * @method Models\DescribeDatabaseMetasResponse DescribeDatabaseMetas(Models\DescribeDatabaseMetasRequest $req) 查询数据库列表
 * @method Models\DescribeDatasourceResponse DescribeDatasource(Models\DescribeDatasourceRequest $req) 数据源详情
 * @method Models\DescribeDependOpsTasksResponse DescribeDependOpsTasks(Models\DescribeDependOpsTasksRequest $req) 根据层级查找上/下游任务节点
 * @method Models\DescribeDependTaskListsResponse DescribeDependTaskLists(Models\DescribeDependTaskListsRequest $req) 通过taskIds查询task详情列表
 * @method Models\DescribeDimensionScoreResponse DescribeDimensionScore(Models\DescribeDimensionScoreRequest $req) 质量报告-查询质量评分
 * @method Models\DescribeDrInstancePageResponse DescribeDrInstancePage(Models\DescribeDrInstancePageRequest $req) 无效API，没有上线过的业务功能

分页查询试运行实例列表
 * @method Models\DescribeDsFolderTreeResponse DescribeDsFolderTree(Models\DescribeDsFolderTreeRequest $req) 查询目录树
 * @method Models\DescribeDsParentFolderTreeResponse DescribeDsParentFolderTree(Models\DescribeDsParentFolderTreeRequest $req) 查询父目录树，用于工作流、任务定位
 * @method Models\DescribeDsTaskVersionInfoResponse DescribeDsTaskVersionInfo(Models\DescribeDsTaskVersionInfoRequest $req) 查看任务版本详细信息
 * @method Models\DescribeDsTaskVersionListResponse DescribeDsTaskVersionList(Models\DescribeDsTaskVersionListRequest $req) 拉取任务版本列表
 * @method Models\DescribeDutyScheduleDetailsResponse DescribeDutyScheduleDetails(Models\DescribeDutyScheduleDetailsRequest $req) 获取值班日历
 * @method Models\DescribeDutyScheduleListResponse DescribeDutyScheduleList(Models\DescribeDutyScheduleListRequest $req) 获取值班表列表
 * @method Models\DescribeEventResponse DescribeEvent(Models\DescribeEventRequest $req) 根据项目ID和事件名称查看事件详情
 * @method Models\DescribeEventCasesResponse DescribeEventCases(Models\DescribeEventCasesRequest $req) 根据条件查找事件实例
 * @method Models\DescribeEventConsumeTasksResponse DescribeEventConsumeTasks(Models\DescribeEventConsumeTasksRequest $req) 查看事件实例的消费任务
 * @method Models\DescribeExecStrategyResponse DescribeExecStrategy(Models\DescribeExecStrategyRequest $req) 查询规则组执行策略
 * @method Models\DescribeExecutorGroupMetricResponse DescribeExecutorGroupMetric(Models\DescribeExecutorGroupMetricRequest $req) 商业化版本：根据id查询执行资源组指标
 * @method Models\DescribeFieldBasicInfoResponse DescribeFieldBasicInfo(Models\DescribeFieldBasicInfoRequest $req) 元数据模型-字段基础信息查询接口
 * @method Models\DescribeFolderWorkflowListResponse DescribeFolderWorkflowList(Models\DescribeFolderWorkflowListRequest $req) 根据项目id 获取项目下所有工作流列表
 * @method Models\DescribeFormVersionParamResponse DescribeFormVersionParam(Models\DescribeFormVersionParamRequest $req) 查询模版关联的任务和可填充参数，为下一步代码模版提交做准备
 * @method Models\DescribeFunctionKindsResponse DescribeFunctionKinds(Models\DescribeFunctionKindsRequest $req) 查询函数分类
 * @method Models\DescribeFunctionTypesResponse DescribeFunctionTypes(Models\DescribeFunctionTypesRequest $req) 查询函数类型
 * @method Models\DescribeInstanceByCycleResponse DescribeInstanceByCycle(Models\DescribeInstanceByCycleRequest $req) 根据周期类型查询所有实例
 * @method Models\DescribeInstanceDetailInfoResponse DescribeInstanceDetailInfo(Models\DescribeInstanceDetailInfoRequest $req) 实例详情页，返回某个实例所有生命周期信息
 * @method Models\DescribeInstanceLastLogResponse DescribeInstanceLastLog(Models\DescribeInstanceLastLogRequest $req) 日志获取详情页面
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表
 * @method Models\DescribeInstanceLogResponse DescribeInstanceLog(Models\DescribeInstanceLogRequest $req) 获取实例运行日志
 * @method Models\DescribeInstanceLogDetailResponse DescribeInstanceLogDetail(Models\DescribeInstanceLogDetailRequest $req) 获取具体实例相关日志信息
 * @method Models\DescribeInstanceLogFileResponse DescribeInstanceLogFile(Models\DescribeInstanceLogFileRequest $req) 下载日志文件，返回日志下载URL
 * @method Models\DescribeInstanceLogListResponse DescribeInstanceLogList(Models\DescribeInstanceLogListRequest $req) 离线任务实例运行日志列表
 * @method Models\DescribeIntegrationNodeResponse DescribeIntegrationNode(Models\DescribeIntegrationNodeRequest $req) 查询集成节点
 * @method Models\DescribeIntegrationStatisticsResponse DescribeIntegrationStatistics(Models\DescribeIntegrationStatisticsRequest $req) 数据集成大屏概览
 * @method Models\DescribeIntegrationStatisticsInstanceTrendResponse DescribeIntegrationStatisticsInstanceTrend(Models\DescribeIntegrationStatisticsInstanceTrendRequest $req) 数据集成大屏实例状态统计趋势
 * @method Models\DescribeIntegrationStatisticsRecordsTrendResponse DescribeIntegrationStatisticsRecordsTrend(Models\DescribeIntegrationStatisticsRecordsTrendRequest $req) 数据集成大屏同步条数统计趋势
 * @method Models\DescribeIntegrationStatisticsTaskStatusResponse DescribeIntegrationStatisticsTaskStatus(Models\DescribeIntegrationStatisticsTaskStatusRequest $req) 数据集成大屏任务状态分布统计
 * @method Models\DescribeIntegrationStatisticsTaskStatusTrendResponse DescribeIntegrationStatisticsTaskStatusTrend(Models\DescribeIntegrationStatisticsTaskStatusTrendRequest $req) 数据集成大屏任务状态统计趋势
 * @method Models\DescribeIntegrationTaskResponse DescribeIntegrationTask(Models\DescribeIntegrationTaskRequest $req) 查询集成任务
 * @method Models\DescribeIntegrationTasksResponse DescribeIntegrationTasks(Models\DescribeIntegrationTasksRequest $req) 查询集成任务列表
 * @method Models\DescribeIntegrationVersionNodesInfoResponse DescribeIntegrationVersionNodesInfo(Models\DescribeIntegrationVersionNodesInfoRequest $req) 查询集成任务版本节点信息
 * @method Models\DescribeManualTriggerRecordPageResponse DescribeManualTriggerRecordPage(Models\DescribeManualTriggerRecordPageRequest $req) 查询手动任务触发记录
 * @method Models\DescribeOfflineTaskTokenResponse DescribeOfflineTaskToken(Models\DescribeOfflineTaskTokenRequest $req) 获取离线任务长连接Token
 * @method Models\DescribeOperateOpsTasksResponse DescribeOperateOpsTasks(Models\DescribeOperateOpsTasksRequest $req) 任务运维列表组合条件查询
 * @method Models\DescribeOpsInstanceLogListResponse DescribeOpsInstanceLogList(Models\DescribeOpsInstanceLogListRequest $req) 实例运维-获取实例日志列表
 * @method Models\DescribeOpsMakePlanInstancesResponse DescribeOpsMakePlanInstances(Models\DescribeOpsMakePlanInstancesRequest $req) 根据补录计划和补录任务获取补录实例列表。
 * @method Models\DescribeOpsMakePlanTasksResponse DescribeOpsMakePlanTasks(Models\DescribeOpsMakePlanTasksRequest $req) 查看补录计划任务
 * @method Models\DescribeOpsMakePlansResponse DescribeOpsMakePlans(Models\DescribeOpsMakePlansRequest $req) 根据条件分页查询补录计划
 * @method Models\DescribeOpsWorkflowsResponse DescribeOpsWorkflows(Models\DescribeOpsWorkflowsRequest $req) 查询用户生产工作流列表
 * @method Models\DescribeOrganizationalFunctionsResponse DescribeOrganizationalFunctions(Models\DescribeOrganizationalFunctionsRequest $req) 查询全量函数
 * @method Models\DescribeParentTaskResponse DescribeParentTask(Models\DescribeParentTaskRequest $req) 查询任务父依赖
 * @method Models\DescribePendingSubmitTaskListResponse DescribePendingSubmitTaskList(Models\DescribePendingSubmitTaskListRequest $req) 获取待提交任务预提交校验信息（注意：工作流编号或者任务编号列表，必须填一项）
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 获取项目信息
 * @method Models\DescribeProjectUsersResponse DescribeProjectUsers(Models\DescribeProjectUsersRequest $req) 获取项目下的用户，分页返回
 * @method Models\DescribeQualityScoreResponse DescribeQualityScore(Models\DescribeQualityScoreRequest $req) 质量报告-质量评分
 * @method Models\DescribeQualityScoreTrendResponse DescribeQualityScoreTrend(Models\DescribeQualityScoreTrendRequest $req) 质量报告-质量分周期趋势
 * @method Models\DescribeRealTimeTaskInstanceNodeInfoResponse DescribeRealTimeTaskInstanceNodeInfo(Models\DescribeRealTimeTaskInstanceNodeInfoRequest $req) 查询实时任务实例节点信息
 * @method Models\DescribeRealTimeTaskMetricOverviewResponse DescribeRealTimeTaskMetricOverview(Models\DescribeRealTimeTaskMetricOverviewRequest $req) 实时任务运行指标概览
 * @method Models\DescribeRealTimeTaskSpeedResponse DescribeRealTimeTaskSpeed(Models\DescribeRealTimeTaskSpeedRequest $req) 实时任务同步速度趋势
 * @method Models\DescribeRealViewSchemaPageResponse DescribeRealViewSchemaPage(Models\DescribeRealViewSchemaPageRequest $req) 数据集成分页获取数据库SCHEMA信息
 * @method Models\DescribeRelatedTasksByTaskIdResponse DescribeRelatedTasksByTaskId(Models\DescribeRelatedTasksByTaskIdRequest $req) 根据任务ID分页查询任务绑定监听的事件
 * @method Models\DescribeReportTaskDetailResponse DescribeReportTaskDetail(Models\DescribeReportTaskDetailRequest $req) 查询上报任务详情
 * @method Models\DescribeReportTaskListResponse DescribeReportTaskList(Models\DescribeReportTaskListRequest $req) 查询上报任务列表
 * @method Models\DescribeResourceManagePathTreesResponse DescribeResourceManagePathTrees(Models\DescribeResourceManagePathTreesRequest $req) 获取资源管理目录树
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) 获取角色列表信息
 * @method Models\DescribeRuleResponse DescribeRule(Models\DescribeRuleRequest $req) 查询规则详情
 * @method Models\DescribeRuleDimStatResponse DescribeRuleDimStat(Models\DescribeRuleDimStatRequest $req) 数据质量概览页面触发维度分布统计接口
 * @method Models\DescribeRuleExecDetailResponse DescribeRuleExecDetail(Models\DescribeRuleExecDetailRequest $req) 查询规则执行结果详情
 * @method Models\DescribeRuleExecLogResponse DescribeRuleExecLog(Models\DescribeRuleExecLogRequest $req) 规则执行日志查询
 * @method Models\DescribeRuleExecResultsResponse DescribeRuleExecResults(Models\DescribeRuleExecResultsRequest $req) 规则执行结果列表查询
 * @method Models\DescribeRuleExecStatResponse DescribeRuleExecStat(Models\DescribeRuleExecStatRequest $req) 数据质量概览页面规则运行情况接口
 * @method Models\DescribeRuleGroupResponse DescribeRuleGroup(Models\DescribeRuleGroupRequest $req) 查询规则组详情接口
 * @method Models\DescribeRuleGroupExecResultsByPageResponse DescribeRuleGroupExecResultsByPage(Models\DescribeRuleGroupExecResultsByPageRequest $req) 规则组执行结果分页查询接口
 * @method Models\DescribeRuleGroupSubscriptionResponse DescribeRuleGroupSubscription(Models\DescribeRuleGroupSubscriptionRequest $req) 查询规则组订阅信息
 * @method Models\DescribeRuleGroupTableResponse DescribeRuleGroupTable(Models\DescribeRuleGroupTableRequest $req) 查询表绑定执行规则组信息
 * @method Models\DescribeRuleGroupsByPageResponse DescribeRuleGroupsByPage(Models\DescribeRuleGroupsByPageRequest $req) 【过滤条件】
{表名称TableName,支持模糊匹配}       {表负责人TableOwnerName,支持模糊匹配}      {监控方式MonitorTypes，1.未配置 2.关联生产调度 3.离线周期检测,支持多选}  {订阅人ReceiverUin}
【必要字段】
{数据来源DatasourceId}
 * @method Models\DescribeRuleTemplateResponse DescribeRuleTemplate(Models\DescribeRuleTemplateRequest $req) 查询模板详情
 * @method Models\DescribeRuleTemplatesResponse DescribeRuleTemplates(Models\DescribeRuleTemplatesRequest $req) 查询规则模板列表
 * @method Models\DescribeRuleTemplatesByPageResponse DescribeRuleTemplatesByPage(Models\DescribeRuleTemplatesByPageRequest $req) 【过滤条件】 {模板名称Name,支持模糊匹配} {模板类型type，1.系统模板 2.自定义模板} {质量检测维度QualityDims, 1.准确性 2.唯一性 3.完整性 4.一致性 5.及时性 6.有效性} 【排序字段】 { 引用数排序类型CitationOrderType，根据引用数量排序 ASC DESC}
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询质量规则列表
 * @method Models\DescribeRulesByPageResponse DescribeRulesByPage(Models\DescribeRulesByPageRequest $req) 分页查询质量规则
 * @method Models\DescribeScheduleInstancesResponse DescribeScheduleInstances(Models\DescribeScheduleInstancesRequest $req) 获取实例列表
 * @method Models\DescribeSchedulerInstanceStatusResponse DescribeSchedulerInstanceStatus(Models\DescribeSchedulerInstanceStatusRequest $req) 运维大屏-实例状态分布
 * @method Models\DescribeSchedulerRunTimeInstanceCntByStatusResponse DescribeSchedulerRunTimeInstanceCntByStatus(Models\DescribeSchedulerRunTimeInstanceCntByStatusRequest $req) 运维大屏-实例运行时长排行
 * @method Models\DescribeSchedulerTaskCntByStatusResponse DescribeSchedulerTaskCntByStatus(Models\DescribeSchedulerTaskCntByStatusRequest $req) 任务状态统计
 * @method Models\DescribeSchedulerTaskTypeCntResponse DescribeSchedulerTaskTypeCnt(Models\DescribeSchedulerTaskTypeCntRequest $req) 运维大屏-任务状态分布
 * @method Models\DescribeStatisticInstanceStatusTrendOpsResponse DescribeStatisticInstanceStatusTrendOps(Models\DescribeStatisticInstanceStatusTrendOpsRequest $req) 任务状态趋势
 * @method Models\DescribeStreamTaskLogListResponse DescribeStreamTaskLogList(Models\DescribeStreamTaskLogListRequest $req) 查询实时任务日志列表
 * @method Models\DescribeSuccessorOpsTaskInfosResponse DescribeSuccessorOpsTaskInfos(Models\DescribeSuccessorOpsTaskInfosRequest $req) 获取下游任务信息
 * @method Models\DescribeTableBasicInfoResponse DescribeTableBasicInfo(Models\DescribeTableBasicInfoRequest $req) 元数据模型-表基础信息查询接口
 * @method Models\DescribeTableInfoListResponse DescribeTableInfoList(Models\DescribeTableInfoListRequest $req) 获取数据表信息
 * @method Models\DescribeTableLineageResponse DescribeTableLineage(Models\DescribeTableLineageRequest $req) 列出表血缘信息
 * @method Models\DescribeTableLineageInfoResponse DescribeTableLineageInfo(Models\DescribeTableLineageInfoRequest $req) 列出表血缘信息
 * @method Models\DescribeTableMetaResponse DescribeTableMeta(Models\DescribeTableMetaRequest $req) 查询表元数据详情
 * @method Models\DescribeTableMetasResponse DescribeTableMetas(Models\DescribeTableMetasRequest $req) 获取表元数据list
 * @method Models\DescribeTablePartitionsResponse DescribeTablePartitions(Models\DescribeTablePartitionsRequest $req) 查询表的分区详情信息
 * @method Models\DescribeTableQualityDetailsResponse DescribeTableQualityDetails(Models\DescribeTableQualityDetailsRequest $req) 质量报告-查询表质量详情
 * @method Models\DescribeTableSchemaInfoResponse DescribeTableSchemaInfo(Models\DescribeTableSchemaInfoRequest $req) 获取表schema信息
 * @method Models\DescribeTableScoreTrendResponse DescribeTableScoreTrend(Models\DescribeTableScoreTrendRequest $req) 查询表得分趋势
 * @method Models\DescribeTaskAlarmRegulationsResponse DescribeTaskAlarmRegulations(Models\DescribeTaskAlarmRegulationsRequest $req) 查询任务告警规则列表
 * @method Models\DescribeTaskByCycleResponse DescribeTaskByCycle(Models\DescribeTaskByCycleRequest $req) 根据周期类型 查询所有任务
 * @method Models\DescribeTaskByCycleReportResponse DescribeTaskByCycleReport(Models\DescribeTaskByCycleReportRequest $req) 能够调通但该API已经没有使用了，看北京数据最后一次上报是23年10月，有接近一千万条数据历史无效数据。当前策略，云API示例修订然后已经分析出来的无效API走预下线流程。
https://capi.woa.com/api/detail?product=wedata&env=api_formal&version=2021-08-20&action=DescribeTaskByCycleReport
这两天在分析API的时候 有较多运维大屏的原始API当前已经没有使用了，但API没有下线。预计需要专项去梳理这一系列待下线API。

任务状态周期增长趋势
 * @method Models\DescribeTaskByStatusReportResponse DescribeTaskByStatusReport(Models\DescribeTaskByStatusReportRequest $req) 任务状态趋势
 * @method Models\DescribeTaskDetailDsResponse DescribeTaskDetailDs(Models\DescribeTaskDetailDsRequest $req) 查询任务具体详情【新】
 * @method Models\DescribeTaskLineageResponse DescribeTaskLineage(Models\DescribeTaskLineageRequest $req) 通过任务查询表的血缘关系
 * @method Models\DescribeTaskLockStatusResponse DescribeTaskLockStatus(Models\DescribeTaskLockStatusRequest $req) 查看任务锁状态信息
 * @method Models\DescribeTaskRunHistoryResponse DescribeTaskRunHistory(Models\DescribeTaskRunHistoryRequest $req) 分页查询任务运行历史
 * @method Models\DescribeTaskScriptResponse DescribeTaskScript(Models\DescribeTaskScriptRequest $req) 查询任务脚本。本接口已废弃，请使用接口GetPaginationTaskScript。
 * @method Models\DescribeTaskTableMetricOverviewResponse DescribeTaskTableMetricOverview(Models\DescribeTaskTableMetricOverviewRequest $req) 查询实时任务表粒度指标概览
 * @method Models\DescribeTaskTemplatesResponse DescribeTaskTemplates(Models\DescribeTaskTemplatesRequest $req) 查询项目下所有任务列表,包括虚拟任务
 * @method Models\DescribeTasksForCodeTemplateResponse DescribeTasksForCodeTemplate(Models\DescribeTasksForCodeTemplateRequest $req) 分页查询引用模板的任务列表
 * @method Models\DescribeTemplateDimCountResponse DescribeTemplateDimCount(Models\DescribeTemplateDimCountRequest $req) 查询规则模板维度分布情况
 * @method Models\DescribeTenantProjectsResponse DescribeTenantProjects(Models\DescribeTenantProjectsRequest $req) 租户全局范围的项目列表，与用户查看范围无关.
 * @method Models\DescribeThirdTaskRunLogResponse DescribeThirdTaskRunLog(Models\DescribeThirdTaskRunLogRequest $req) 获取第三方运行日志
 * @method Models\DescribeTopTableStatResponse DescribeTopTableStat(Models\DescribeTopTableStatRequest $req) 数据质量概览页面表排行接口
 * @method Models\DescribeTrendStatResponse DescribeTrendStat(Models\DescribeTrendStatRequest $req) 数据质量概览页面趋势变化接口
 * @method Models\DescribeWorkflowByFordIdsResponse DescribeWorkflowByFordIds(Models\DescribeWorkflowByFordIdsRequest $req) 根据文件夹查询工作流
 * @method Models\DescribeWorkflowCanvasInfoResponse DescribeWorkflowCanvasInfo(Models\DescribeWorkflowCanvasInfoRequest $req) 查询工作流画布
 * @method Models\DescribeWorkflowExecuteByIdResponse DescribeWorkflowExecuteById(Models\DescribeWorkflowExecuteByIdRequest $req) 查询工作流画布运行起止时间
 * @method Models\DescribeWorkflowInfoByIdResponse DescribeWorkflowInfoById(Models\DescribeWorkflowInfoByIdRequest $req) 通过工作流id，查询工作流详情
 * @method Models\DescribeWorkflowListByProjectIdResponse DescribeWorkflowListByProjectId(Models\DescribeWorkflowListByProjectIdRequest $req) 根据项目id 获取项目下所有工作流列表
 * @method Models\DescribeWorkflowSchedulerInfoDsResponse DescribeWorkflowSchedulerInfoDs(Models\DescribeWorkflowSchedulerInfoDsRequest $req) 获取工作流调度信息
 * @method Models\DescribeWorkflowTaskCountResponse DescribeWorkflowTaskCount(Models\DescribeWorkflowTaskCountRequest $req) 查询工作流任务数
 * @method Models\DiagnoseProResponse DiagnosePro(Models\DiagnoseProRequest $req) 实例诊断，用于诊断 INITIAL、DEPENDENCE、ALLOCATED、LAUNCHED、EVENT_LISTENING、BEFORE_ASPECT、EXPIRED、FAILED状态的实例
 * @method Models\DownloadLogByLineResponse DownloadLogByLine(Models\DownloadLogByLineRequest $req) 按行下载日志信息
 * @method Models\DryRunDIOfflineTaskResponse DryRunDIOfflineTask(Models\DryRunDIOfflineTaskRequest $req) 调试运行集成任务
 * @method Models\FindAllFolderResponse FindAllFolder(Models\FindAllFolderRequest $req) 编排空间批量操作页面查找全部的文件夹
 * @method Models\FreezeOpsTasksResponse FreezeOpsTasks(Models\FreezeOpsTasksRequest $req) 任务运维-批量暂停任务
 * @method Models\FreezeTasksByWorkflowIdsResponse FreezeTasksByWorkflowIds(Models\FreezeTasksByWorkflowIdsRequest $req) 暂停工作流下的所有任务
 * @method Models\GenHiveTableDDLSqlResponse GenHiveTableDDLSql(Models\GenHiveTableDDLSqlRequest $req) 生成建hive表的sql
 * @method Models\GetBatchDetailErrorLogResponse GetBatchDetailErrorLog(Models\GetBatchDetailErrorLogRequest $req) 获取批量操作错误日志
 * @method Models\GetCosTokenResponse GetCosToken(Models\GetCosTokenRequest $req) 获取cos token
 * @method Models\GetFileInfoResponse GetFileInfo(Models\GetFileInfoRequest $req) 开发空间-获取数据开发脚本信息
 * @method Models\GetInstanceLogResponse GetInstanceLog(Models\GetInstanceLogRequest $req) 获取实例列表
 * @method Models\GetIntegrationNodeColumnSchemaResponse GetIntegrationNodeColumnSchema(Models\GetIntegrationNodeColumnSchemaRequest $req) 提取数据集成节点字段Schema
 * @method Models\GetOfflineDIInstanceListResponse GetOfflineDIInstanceList(Models\GetOfflineDIInstanceListRequest $req) 获取离线任务实例列表(新)
 * @method Models\GetOfflineInstanceListResponse GetOfflineInstanceList(Models\GetOfflineInstanceListRequest $req) 获取离线任务实例
 * @method Models\GetPaginationTaskScriptResponse GetPaginationTaskScript(Models\GetPaginationTaskScriptRequest $req) 获取带分页的任务脚本
 * @method Models\GetTaskInstanceResponse GetTaskInstance(Models\GetTaskInstanceRequest $req) 获取实例列表
 * @method Models\JudgeResourceFileResponse JudgeResourceFile(Models\JudgeResourceFileRequest $req) 资源管理-判断资源文件是否存在
 * @method Models\KillOpsMakePlanInstancesResponse KillOpsMakePlanInstances(Models\KillOpsMakePlanInstancesRequest $req) 按补录计划批量终止实例。
 * @method Models\KillScheduleInstancesResponse KillScheduleInstances(Models\KillScheduleInstancesRequest $req) 批量终止实例
 * @method Models\ListBatchDetailResponse ListBatchDetail(Models\ListBatchDetailRequest $req) 获取批量操作详情列表
 * @method Models\ListInstancesResponse ListInstances(Models\ListInstancesRequest $req) 获取实例列表
 * @method Models\LockIntegrationTaskResponse LockIntegrationTask(Models\LockIntegrationTaskRequest $req) 锁定集成任务
 * @method Models\ModifyApproveStatusResponse ModifyApproveStatus(Models\ModifyApproveStatusRequest $req) 修改审批单状态
 * @method Models\ModifyDataSourceResponse ModifyDataSource(Models\ModifyDataSourceRequest $req) 修改数据源
 * @method Models\ModifyDimensionWeightResponse ModifyDimensionWeight(Models\ModifyDimensionWeightRequest $req) 质量报告-修改维度权限
 * @method Models\ModifyDsFolderResponse ModifyDsFolder(Models\ModifyDsFolderRequest $req) 数据开发模块-文件夹更新
 * @method Models\ModifyExecStrategyResponse ModifyExecStrategy(Models\ModifyExecStrategyRequest $req) 更新规则组执行策略
 * @method Models\ModifyIntegrationNodeResponse ModifyIntegrationNode(Models\ModifyIntegrationNodeRequest $req) 更新集成节点
 * @method Models\ModifyIntegrationTaskResponse ModifyIntegrationTask(Models\ModifyIntegrationTaskRequest $req) 更新集成任务
 * @method Models\ModifyMonitorStatusResponse ModifyMonitorStatus(Models\ModifyMonitorStatusRequest $req) 更新监控状态
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 更新质量规则接口
 * @method Models\ModifyRuleGroupSubscriptionResponse ModifyRuleGroupSubscription(Models\ModifyRuleGroupSubscriptionRequest $req) 更新规则组订阅信息
 * @method Models\ModifyRuleTemplateResponse ModifyRuleTemplate(Models\ModifyRuleTemplateRequest $req) 编辑规则模板
 * @method Models\ModifyTaskAlarmRegularResponse ModifyTaskAlarmRegular(Models\ModifyTaskAlarmRegularRequest $req) 修改任务告警规则
 * @method Models\ModifyTaskInfoResponse ModifyTaskInfo(Models\ModifyTaskInfoRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
更新任务。本接口已废弃，请使用接口ModifyTaskInfoDs。
 * @method Models\ModifyTaskInfoDsResponse ModifyTaskInfoDs(Models\ModifyTaskInfoDsRequest $req) 更新任务Ds
 * @method Models\ModifyTaskLinksResponse ModifyTaskLinks(Models\ModifyTaskLinksRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
添加父任务依赖。本接口已废弃，请使用接口ModifyTaskLinksDs。
 * @method Models\ModifyTaskLinksDsResponse ModifyTaskLinksDs(Models\ModifyTaskLinksDsRequest $req) 添加父任务依赖
 * @method Models\ModifyTaskNameResponse ModifyTaskName(Models\ModifyTaskNameRequest $req) 重命名任务（任务编辑）
 * @method Models\ModifyTaskScriptResponse ModifyTaskScript(Models\ModifyTaskScriptRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
修改任务脚本。本接口已废弃，请使用接口ModifyTaskInfoDs。
 * @method Models\ModifyWorkflowInfoResponse ModifyWorkflowInfo(Models\ModifyWorkflowInfoRequest $req) 更新工作流信息。本接口已废弃，请使用接口UpdateWorkflowInfo。
 * @method Models\ModifyWorkflowScheduleResponse ModifyWorkflowSchedule(Models\ModifyWorkflowScheduleRequest $req) 更新工作流调度。本接口已废弃，请使用接口RenewWorkflowSchedulerInfoDs。
 * @method Models\MoveTasksToFolderResponse MoveTasksToFolder(Models\MoveTasksToFolderRequest $req) 编排空间-工作流-移动任务到工作流文件夹
 * @method Models\RegisterDsEventResponse RegisterDsEvent(Models\RegisterDsEventRequest $req) 注册事件
 * @method Models\RegisterDsEventListenerResponse RegisterDsEventListener(Models\RegisterDsEventListenerRequest $req) 注册事件监听者
 * @method Models\RegisterEventResponse RegisterEvent(Models\RegisterEventRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
注册事件。本接口已废弃，请使用接口RegisterDsEvent。
 * @method Models\RegisterEventListenerResponse RegisterEventListener(Models\RegisterEventListenerRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
注册事件监听器。本接口已废弃，请使用接口RegisterDsEventListener。
 * @method Models\RemoveWorkflowDsResponse RemoveWorkflowDs(Models\RemoveWorkflowDsRequest $req) 删除编排空间工作流
 * @method Models\RenewWorkflowOwnerDsResponse RenewWorkflowOwnerDs(Models\RenewWorkflowOwnerDsRequest $req) 批量更新工作流下任务责任人
 * @method Models\RenewWorkflowSchedulerInfoDsResponse RenewWorkflowSchedulerInfoDs(Models\RenewWorkflowSchedulerInfoDsRequest $req) 更新工作流下任务调度信息
 * @method Models\ReportTaskLineageResponse ReportTaskLineage(Models\ReportTaskLineageRequest $req) 血缘上报接口
 * @method Models\ResumeIntegrationTaskResponse ResumeIntegrationTask(Models\ResumeIntegrationTaskRequest $req) 继续集成任务
 * @method Models\RobAndLockIntegrationTaskResponse RobAndLockIntegrationTask(Models\RobAndLockIntegrationTaskRequest $req) 抢占锁定集成任务
 * @method Models\RunForceSucScheduleInstancesResponse RunForceSucScheduleInstances(Models\RunForceSucScheduleInstancesRequest $req) 实例批量置成功
 * @method Models\RunRerunScheduleInstancesResponse RunRerunScheduleInstances(Models\RunRerunScheduleInstancesRequest $req) 实例批量重跑
 * @method Models\RunTasksByMultiWorkflowResponse RunTasksByMultiWorkflow(Models\RunTasksByMultiWorkflowRequest $req) 批量启动工作流
 * @method Models\SaveCustomFunctionResponse SaveCustomFunction(Models\SaveCustomFunctionRequest $req) 保存用户自定义函数
 * @method Models\SetTaskAlarmNewResponse SetTaskAlarmNew(Models\SetTaskAlarmNewRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
设置任务告警，新建/更新告警信息（最新）
 * @method Models\StartIntegrationTaskResponse StartIntegrationTask(Models\StartIntegrationTaskRequest $req) 启动集成任务
 * @method Models\StopIntegrationTaskResponse StopIntegrationTask(Models\StopIntegrationTaskRequest $req) 停止集成任务
 * @method Models\SubmitCustomFunctionResponse SubmitCustomFunction(Models\SubmitCustomFunctionRequest $req) 提交自定义函数
 * @method Models\SubmitSqlTaskResponse SubmitSqlTask(Models\SubmitSqlTaskRequest $req) 即席分析提交SQL任务
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
提交任务。本接口已废弃，请使用接口CreateTaskVersionDs。
 * @method Models\SubmitTaskTestRunResponse SubmitTaskTestRun(Models\SubmitTaskTestRunRequest $req) 无
 * @method Models\SubmitWorkflowResponse SubmitWorkflow(Models\SubmitWorkflowRequest $req) 提交工作流。本接口已废弃，请使用接口BatchCreateTaskVersionAsync。
 * @method Models\SuspendIntegrationTaskResponse SuspendIntegrationTask(Models\SuspendIntegrationTaskRequest $req) 暂停集成任务
 * @method Models\TaskLogResponse TaskLog(Models\TaskLogRequest $req) 查询Inlong manager日志
 * @method Models\TriggerDsEventResponse TriggerDsEvent(Models\TriggerDsEventRequest $req) 事件管理-触发事件
 * @method Models\TriggerEventResponse TriggerEvent(Models\TriggerEventRequest $req) <p style="color:red;">[注意：该版本只满足广州区部分白名单客户使用]</p>
触发事件。本接口已废弃，请使用接口TriggerDsEvent。
 * @method Models\TriggerManualTasksResponse TriggerManualTasks(Models\TriggerManualTasksRequest $req) 手动任务触发运行
 * @method Models\UnlockIntegrationTaskResponse UnlockIntegrationTask(Models\UnlockIntegrationTaskRequest $req) 解锁集成任务
 * @method Models\UpdateCodeTemplateResponse UpdateCodeTemplate(Models\UpdateCodeTemplateRequest $req) 更新模版
 * @method Models\UpdateDataModelRegistryInfoResponse UpdateDataModelRegistryInfo(Models\UpdateDataModelRegistryInfoRequest $req) 数语向wedata注册，提供自身cam角色信息，跳转域名、ip、端口信息等
 * @method Models\UpdateProjectUserRoleResponse UpdateProjectUserRole(Models\UpdateProjectUserRoleRequest $req) 修改项目用户角色
 * @method Models\UpdateWorkflowInfoResponse UpdateWorkflowInfo(Models\UpdateWorkflowInfoRequest $req) <p style="color:red;">[该接口为 ds 中开发]</p>
更新工作流（包括工作流基本信息与工作流参数）
 * @method Models\UpdateWorkflowOwnerResponse UpdateWorkflowOwner(Models\UpdateWorkflowOwnerRequest $req) 修改工作流责任人。本接口已废弃，请使用接口RenewWorkflowOwnerDs。
 * @method Models\UploadContentResponse UploadContent(Models\UploadContentRequest $req) 保存任务信息
 * @method Models\UploadResourceResponse UploadResource(Models\UploadResourceRequest $req) 资源管理-上传资源
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
