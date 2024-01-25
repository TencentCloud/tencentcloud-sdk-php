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
 * @method Models\AcquireLockResponse AcquireLock(Models\AcquireLockRequest $req) 获取协同编辑资源锁
 * @method Models\AnalyzeDependentTasksResponse AnalyzeDependentTasks(Models\AnalyzeDependentTasksRequest $req) 上游依赖自动解析
 * @method Models\BatchCreateIntegrationTaskAlarmsResponse BatchCreateIntegrationTaskAlarms(Models\BatchCreateIntegrationTaskAlarmsRequest $req) 批量创建任务告警规则
 * @method Models\BatchCreateTaskVersionAsyncResponse BatchCreateTaskVersionAsync(Models\BatchCreateTaskVersionAsyncRequest $req) 异步批量创建任务版本
 * @method Models\BatchCreateTaskVersionDsResponse BatchCreateTaskVersionDs(Models\BatchCreateTaskVersionDsRequest $req) 批量创建任务版本Ds
 * @method Models\BatchCreateVirtualTaskDsResponse BatchCreateVirtualTaskDs(Models\BatchCreateVirtualTaskDsRequest $req) 批量创建虚拟任务, 用于新建跨工作流任务场景中新增跨工作流任务操作
 * @method Models\BatchDeleteIntegrationTasksResponse BatchDeleteIntegrationTasks(Models\BatchDeleteIntegrationTasksRequest $req) 批量删除集成任务
 * @method Models\BatchDeleteOpsTasksResponse BatchDeleteOpsTasks(Models\BatchDeleteOpsTasksRequest $req) 智能运维-批量删除任务
 * @method Models\BatchDeleteTasksDsResponse BatchDeleteTasksDs(Models\BatchDeleteTasksDsRequest $req) Ds批量删除任务，仅对任务状态为”已停止“有效；
 * @method Models\BatchDeleteTasksDsAsyncResponse BatchDeleteTasksDsAsync(Models\BatchDeleteTasksDsAsyncRequest $req) Ds批量删除任务，仅对任务状态为”已停止“有效；
 * @method Models\BatchDeleteTasksNewResponse BatchDeleteTasksNew(Models\BatchDeleteTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
批量删除任务，仅对任务状态为”已停止“有效；

 * @method Models\BatchForceSuccessIntegrationTaskInstancesResponse BatchForceSuccessIntegrationTaskInstances(Models\BatchForceSuccessIntegrationTaskInstancesRequest $req) 批量置成功集成任务实例
 * @method Models\BatchKillIntegrationTaskInstancesResponse BatchKillIntegrationTaskInstances(Models\BatchKillIntegrationTaskInstancesRequest $req) 批量终止集成任务实例
 * @method Models\BatchMakeUpIntegrationTasksResponse BatchMakeUpIntegrationTasks(Models\BatchMakeUpIntegrationTasksRequest $req) 对集成离线任务执行批量补数据操作
 * @method Models\BatchModifyOpsOwnersResponse BatchModifyOpsOwners(Models\BatchModifyOpsOwnersRequest $req) 批量修改任务责任人
 * @method Models\BatchModifyOwnersNewResponse BatchModifyOwnersNew(Models\BatchModifyOwnersNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
批量修改任务责任人
 * @method Models\BatchRerunIntegrationTaskInstancesResponse BatchRerunIntegrationTaskInstances(Models\BatchRerunIntegrationTaskInstancesRequest $req) 批量重跑集成任务实例
 * @method Models\BatchResumeIntegrationTasksResponse BatchResumeIntegrationTasks(Models\BatchResumeIntegrationTasksRequest $req) 批量继续执行集成实时任务
 * @method Models\BatchRunOpsTaskResponse BatchRunOpsTask(Models\BatchRunOpsTaskRequest $req) 任务运维-任务列表 批量运行
 * @method Models\BatchRunTasksDsResponse BatchRunTasksDs(Models\BatchRunTasksDsRequest $req) 批量运行任务, 用于工作流-任务配置-运行、工作流-任务右键-运行、任务运维-任务管理-更多操作-运行、任务运维-任务管理-选择任务-批量运行等场景。
1. 任务运行预判断
2. 更新db中任务状态
3. 通知scheduler进行运行操作
 * @method Models\BatchStartIntegrationTasksResponse BatchStartIntegrationTasks(Models\BatchStartIntegrationTasksRequest $req) 批量运行集成任务
 * @method Models\BatchStopIntegrationTasksResponse BatchStopIntegrationTasks(Models\BatchStopIntegrationTasksRequest $req) 批量停止集成任务
 * @method Models\BatchStopOpsTasksResponse BatchStopOpsTasks(Models\BatchStopOpsTasksRequest $req) 仅对任务状态为”调度中“和”已暂停“有效，对所选任务的任务实例进行终止，并停止调度
 * @method Models\BatchStopTasksNewResponse BatchStopTasksNew(Models\BatchStopTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
仅对任务状态为”调度中“和”已暂停“有效，对所选任务的任务实例进行终止，并停止调度
 * @method Models\BatchStopWorkflowsByIdsResponse BatchStopWorkflowsByIds(Models\BatchStopWorkflowsByIdsRequest $req) 批量停止工作流
 * @method Models\BatchSuspendIntegrationTasksResponse BatchSuspendIntegrationTasks(Models\BatchSuspendIntegrationTasksRequest $req) 批量暂停集成任务
 * @method Models\BatchUpdateIntegrationTasksResponse BatchUpdateIntegrationTasks(Models\BatchUpdateIntegrationTasksRequest $req) 批量更新集成任务（暂时仅支持批量更新责任人）
 * @method Models\BatchUpdateTasksDsResponse BatchUpdateTasksDs(Models\BatchUpdateTasksDsRequest $req) 批量更新任务Ds
 * @method Models\CheckAlarmRegularNameExistResponse CheckAlarmRegularNameExist(Models\CheckAlarmRegularNameExistRequest $req) 判断告警规则重名
 * @method Models\CheckDuplicateRuleNameResponse CheckDuplicateRuleName(Models\CheckDuplicateRuleNameRequest $req) 检查规则名称是否重复
 * @method Models\CheckDuplicateTemplateNameResponse CheckDuplicateTemplateName(Models\CheckDuplicateTemplateNameRequest $req) 检查规则模板名称是否重复
 * @method Models\CheckIntegrationNodeNameExistsResponse CheckIntegrationNodeNameExists(Models\CheckIntegrationNodeNameExistsRequest $req) 判断集成节点名称是否存在
 * @method Models\CheckIntegrationTaskNameExistsResponse CheckIntegrationTaskNameExists(Models\CheckIntegrationTaskNameExistsRequest $req) 判断集成任务名称是否存在
 * @method Models\CheckTaskNameExistResponse CheckTaskNameExist(Models\CheckTaskNameExistRequest $req) 离线任务重名校验
 * @method Models\CheckTaskNameExistDsResponse CheckTaskNameExistDs(Models\CheckTaskNameExistDsRequest $req) 检查任务名称是否重复
 * @method Models\CheckTaskPriorityDsResponse CheckTaskPriorityDs(Models\CheckTaskPriorityDsRequest $req) 检查操作用户对所选任务是否有操作权限, 用于新建跨工作流任务场景中展示审批提示操作
 * @method Models\CommitExportTaskResponse CommitExportTask(Models\CommitExportTaskRequest $req) 提交数据导出任务
 * @method Models\CommitIntegrationTaskResponse CommitIntegrationTask(Models\CommitIntegrationTaskRequest $req) 提交集成任务
 * @method Models\CommitRuleGroupExecResultResponse CommitRuleGroupExecResult(Models\CommitRuleGroupExecResultRequest $req) Runner 规则检测结果上报
 * @method Models\CommitRuleGroupTaskResponse CommitRuleGroupTask(Models\CommitRuleGroupTaskRequest $req) 提交规则组运行任务接口
 * @method Models\CopyTaskDsResponse CopyTaskDs(Models\CopyTaskDsRequest $req) 复制任务Ds
 * @method Models\CountOpsInstanceStateResponse CountOpsInstanceState(Models\CountOpsInstanceStateRequest $req) 统计任务实例状态
 * @method Models\CreateBaselineResponse CreateBaseline(Models\CreateBaselineRequest $req) 创建基线
 * @method Models\CreateCustomFunctionResponse CreateCustomFunction(Models\CreateCustomFunctionRequest $req) 创建用户自定义函数
 * @method Models\CreateDataSourceResponse CreateDataSource(Models\CreateDataSourceRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建数据源
 * @method Models\CreateDsFolderResponse CreateDsFolder(Models\CreateDsFolderRequest $req) 编排空间-创建文件夹
 * @method Models\CreateFileVersionResponse CreateFileVersion(Models\CreateFileVersionRequest $req) 创建开发空间版本
 * @method Models\CreateFolderResponse CreateFolder(Models\CreateFolderRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建文件夹
 * @method Models\CreateHiveTableResponse CreateHiveTable(Models\CreateHiveTableRequest $req) 建hive表
 * @method Models\CreateHiveTableByDDLResponse CreateHiveTableByDDL(Models\CreateHiveTableByDDLRequest $req) 创建hive表，返回表名称
 * @method Models\CreateInLongAgentResponse CreateInLongAgent(Models\CreateInLongAgentRequest $req) 注册采集器
 * @method Models\CreateIntegrationNodeResponse CreateIntegrationNode(Models\CreateIntegrationNodeRequest $req) 创建集成节点
 * @method Models\CreateIntegrationTaskResponse CreateIntegrationTask(Models\CreateIntegrationTaskRequest $req) 创建集成任务
 * @method Models\CreateOfflineTaskResponse CreateOfflineTask(Models\CreateOfflineTaskRequest $req) 创建离线任务
 * @method Models\CreateOpsMakePlanResponse CreateOpsMakePlan(Models\CreateOpsMakePlanRequest $req) 补录任务
 * @method Models\CreateOrUpdateResourceResponse CreateOrUpdateResource(Models\CreateOrUpdateResourceRequest $req) 资源管理需要先将资源上传到cos中，然后调用该接口，将cos资源绑定到wedata
 * @method Models\CreatePathResponse CreatePath(Models\CreatePathRequest $req) 新建文件夹
 * @method Models\CreateProjectParamDsResponse CreateProjectParamDs(Models\CreateProjectParamDsRequest $req) 创建项目参数
 * @method Models\CreateResourcePathResponse CreateResourcePath(Models\CreateResourcePathRequest $req) 文件路径的根目录为 /datastudio/resource，如果要在根目录下创建 aaa 文件夹，FilePath的值应该为 /datastudio/resource，如果根目录下已经创建了 aaa 文件夹，要在 aaa 下创建  bbb 文件夹，FilePath的值应该为 /datastudio/resource/aaa
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 创建质量规则接口
 * @method Models\CreateRuleTemplateResponse CreateRuleTemplate(Models\CreateRuleTemplateRequest $req) 创建规则模版
 * @method Models\CreateScriptsImportTasksDsResponse CreateScriptsImportTasksDs(Models\CreateScriptsImportTasksDsRequest $req) 编排空间导入开发空间脚本。
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建任务
 * @method Models\CreateTaskAlarmRegularResponse CreateTaskAlarmRegular(Models\CreateTaskAlarmRegularRequest $req) 创建任务告警规则
 * @method Models\CreateTaskDsResponse CreateTaskDs(Models\CreateTaskDsRequest $req) 创建任务Ds
 * @method Models\CreateTaskFolderResponse CreateTaskFolder(Models\CreateTaskFolderRequest $req) 编排空间-工作流-创建任务文件夹
 * @method Models\CreateTaskInParamDsResponse CreateTaskInParamDs(Models\CreateTaskInParamDsRequest $req) 设置任务输入参数
 * @method Models\CreateTaskOutParamDsResponse CreateTaskOutParamDs(Models\CreateTaskOutParamDsRequest $req) 设置任务输出参数
 * @method Models\CreateTaskOutputRegistriesResponse CreateTaskOutputRegistries(Models\CreateTaskOutputRegistriesRequest $req) 批量创建登记项
 * @method Models\CreateTaskOutputRegistryResponse CreateTaskOutputRegistry(Models\CreateTaskOutputRegistryRequest $req) 新增或编辑产出登记项
 * @method Models\CreateTaskParamDsResponse CreateTaskParamDs(Models\CreateTaskParamDsRequest $req) 任务引用参数
 * @method Models\CreateTaskVersionDsResponse CreateTaskVersionDs(Models\CreateTaskVersionDsRequest $req) 创建任务版本
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
创建工作流
 * @method Models\DagInstancesResponse DagInstances(Models\DagInstancesRequest $req) 拉取dag实例
 * @method Models\DeleteBaselineResponse DeleteBaseline(Models\DeleteBaselineRequest $req) DeleteBaseline
 * @method Models\DeleteCustomFunctionResponse DeleteCustomFunction(Models\DeleteCustomFunctionRequest $req) 删除用户自定义函数
 * @method Models\DeleteDataSourcesResponse DeleteDataSources(Models\DeleteDataSourcesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
删除数据源
 * @method Models\DeleteDsEventListenerResponse DeleteDsEventListener(Models\DeleteDsEventListenerRequest $req) 删除事件监听者
 * @method Models\DeleteDsEventPublisherResponse DeleteDsEventPublisher(Models\DeleteDsEventPublisherRequest $req) 删除事件发布者
 * @method Models\DeleteDsFolderResponse DeleteDsFolder(Models\DeleteDsFolderRequest $req) 编排空间-删除文件夹
 * @method Models\DeleteFileResponse DeleteFile(Models\DeleteFileRequest $req) 删除文件
 * @method Models\DeleteFilePathResponse DeleteFilePath(Models\DeleteFilePathRequest $req) 开发空间-批量删除目录和文件
 * @method Models\DeleteFolderResponse DeleteFolder(Models\DeleteFolderRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
删除文件夹
 * @method Models\DeleteInLongAgentResponse DeleteInLongAgent(Models\DeleteInLongAgentRequest $req) 删除采集器
 * @method Models\DeleteIntegrationNodeResponse DeleteIntegrationNode(Models\DeleteIntegrationNodeRequest $req) 删除集成节点
 * @method Models\DeleteIntegrationTaskResponse DeleteIntegrationTask(Models\DeleteIntegrationTaskRequest $req) 删除集成任务
 * @method Models\DeleteLinkResponse DeleteLink(Models\DeleteLinkRequest $req) 删除任务连接
 * @method Models\DeleteOfflineTaskResponse DeleteOfflineTask(Models\DeleteOfflineTaskRequest $req) 删除任务
 * @method Models\DeleteProjectParamDsResponse DeleteProjectParamDs(Models\DeleteProjectParamDsRequest $req) 删除项目参数
 * @method Models\DeleteProjectParamVersionDsResponse DeleteProjectParamVersionDs(Models\DeleteProjectParamVersionDsRequest $req) 删除项目参数版本
 * @method Models\DeleteProjectUsersResponse DeleteProjectUsers(Models\DeleteProjectUsersRequest $req) 删除项目用户
 * @method Models\DeleteResourceResponse DeleteResource(Models\DeleteResourceRequest $req) 资源管理删除资源
 * @method Models\DeleteResourceFileResponse DeleteResourceFile(Models\DeleteResourceFileRequest $req) 资源管理-删除资源文件
 * @method Models\DeleteResourceFilesResponse DeleteResourceFiles(Models\DeleteResourceFilesRequest $req) 资源管理-批量删除资源文件
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除质量规则接口
 * @method Models\DeleteRuleTemplateResponse DeleteRuleTemplate(Models\DeleteRuleTemplateRequest $req) 删除规则模版
 * @method Models\DeleteTaskAlarmRegularResponse DeleteTaskAlarmRegular(Models\DeleteTaskAlarmRegularRequest $req) 删除任务告警规则
 * @method Models\DeleteTaskDsResponse DeleteTaskDs(Models\DeleteTaskDsRequest $req) 删除任务Ds
 * @method Models\DeleteTaskFolderResponse DeleteTaskFolder(Models\DeleteTaskFolderRequest $req) 编排空间-工作流-删除任务文件夹
 * @method Models\DeleteTaskInParamDsResponse DeleteTaskInParamDs(Models\DeleteTaskInParamDsRequest $req) 删除任务输入参数
 * @method Models\DeleteTaskOutParamDsResponse DeleteTaskOutParamDs(Models\DeleteTaskOutParamDsRequest $req) 删除任务输出参数
 * @method Models\DeleteTaskOutputRegistryResponse DeleteTaskOutputRegistry(Models\DeleteTaskOutputRegistryRequest $req) 删除产出登记项
 * @method Models\DeleteWorkflowByIdResponse DeleteWorkflowById(Models\DeleteWorkflowByIdRequest $req) 通过工作流Id删除工作流
 * @method Models\DeleteWorkflowNewResponse DeleteWorkflowNew(Models\DeleteWorkflowNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
删除工作流
 * @method Models\DescribeAlarmEventsResponse DescribeAlarmEvents(Models\DescribeAlarmEventsRequest $req) 告警事件列表
 * @method Models\DescribeAlarmReceiverResponse DescribeAlarmReceiver(Models\DescribeAlarmReceiverRequest $req) 告警接收人详情
 * @method Models\DescribeAllByFolderNewResponse DescribeAllByFolderNew(Models\DescribeAllByFolderNewRequest $req) 查询父目录下所有子文件夹+工作流
 * @method Models\DescribeAllTaskTypeResponse DescribeAllTaskType(Models\DescribeAllTaskTypeRequest $req) 获取所有任务类型
 * @method Models\DescribeAllUsedVersionSonResponse DescribeAllUsedVersionSon(Models\DescribeAllUsedVersionSonRequest $req) 根据任务Id查找生产态子任务
 * @method Models\DescribeApproveListResponse DescribeApproveList(Models\DescribeApproveListRequest $req) 获取待审批列表
 * @method Models\DescribeApproveTypeListResponse DescribeApproveTypeList(Models\DescribeApproveTypeListRequest $req) 获取审批分类列表
 * @method Models\DescribeBaselineAllTaskDagResponse DescribeBaselineAllTaskDag(Models\DescribeBaselineAllTaskDagRequest $req) 查询基线DAG
 * @method Models\DescribeBaselineByIdResponse DescribeBaselineById(Models\DescribeBaselineByIdRequest $req) 基线列表
 * @method Models\DescribeBaselineInstanceDagResponse DescribeBaselineInstanceDag(Models\DescribeBaselineInstanceDagRequest $req) 查询基线实例DAG
 * @method Models\DescribeBaselineInstanceGanttResponse DescribeBaselineInstanceGantt(Models\DescribeBaselineInstanceGanttRequest $req) 查询基线实例关键任务实例甘特图
 * @method Models\DescribeBaselineInstancesResponse DescribeBaselineInstances(Models\DescribeBaselineInstancesRequest $req) 查询基线实例列表
 * @method Models\DescribeBaselinesResponse DescribeBaselines(Models\DescribeBaselinesRequest $req) 基线列表
 * @method Models\DescribeBatchOperateTaskResponse DescribeBatchOperateTask(Models\DescribeBatchOperateTaskRequest $req) 批量操作任务列表
 * @method Models\DescribeBelongToResponse DescribeBelongTo(Models\DescribeBelongToRequest $req) 智能运维-事件列表-所属任务/基线过滤列表
 * @method Models\DescribeBrowsingHistoriesResponse DescribeBrowsingHistories(Models\DescribeBrowsingHistoriesRequest $req) 查询用户数据开发浏览历史
 * @method Models\DescribeChildrenDsResponse DescribeChildrenDs(Models\DescribeChildrenDsRequest $req) 查询子任务信息Ds
 * @method Models\DescribeChildrenPathTreesResponse DescribeChildrenPathTrees(Models\DescribeChildrenPathTreesRequest $req) 开发空间-拉取指定路径目录树
 * @method Models\DescribeClusterNamespaceListResponse DescribeClusterNamespaceList(Models\DescribeClusterNamespaceListRequest $req) 获取集群命名空间列表
 * @method Models\DescribeCodeDetailResponse DescribeCodeDetail(Models\DescribeCodeDetailRequest $req) 查询文件或任务详情
 * @method Models\DescribeCodeDetailV2Response DescribeCodeDetailV2(Models\DescribeCodeDetailV2Request $req) 全局搜索查询文件或任务详情
 * @method Models\DescribeCodeSearchAuditInfoResponse DescribeCodeSearchAuditInfo(Models\DescribeCodeSearchAuditInfoRequest $req) 查询最近5条代码搜索审计日志
 * @method Models\DescribeCodeSearchAuditInfoV2Response DescribeCodeSearchAuditInfoV2(Models\DescribeCodeSearchAuditInfoV2Request $req) 获取代码搜索最近n条关键字搜索信息
 * @method Models\DescribeCodeSearchCountResponse DescribeCodeSearchCount(Models\DescribeCodeSearchCountRequest $req) 代码搜索结果的统计信息
 * @method Models\DescribeCodeSearchInfoResponse DescribeCodeSearchInfo(Models\DescribeCodeSearchInfoRequest $req) 根据条件搜索代码
 * @method Models\DescribeCodeSearchInfoV2Response DescribeCodeSearchInfoV2(Models\DescribeCodeSearchInfoV2Request $req) 全局搜索根据条件搜索代码
 * @method Models\DescribeColumnLineageResponse DescribeColumnLineage(Models\DescribeColumnLineageRequest $req) 列出字段血缘信息
 * @method Models\DescribeColumnsMetaResponse DescribeColumnsMeta(Models\DescribeColumnsMetaRequest $req) 查询表的所有列元数据
 * @method Models\DescribeCrontabTopNDsResponse DescribeCrontabTopNDs(Models\DescribeCrontabTopNDsRequest $req) 获取 crontab topN 个数据时间周期
 * @method Models\DescribeDataBasesResponse DescribeDataBases(Models\DescribeDataBasesRequest $req) 查询数据来源列表
 * @method Models\DescribeDataCheckStatResponse DescribeDataCheckStat(Models\DescribeDataCheckStatRequest $req) 数据质量的概览页面数据监测情况接口
 * @method Models\DescribeDataDevelopTaskTypeResponse DescribeDataDevelopTaskType(Models\DescribeDataDevelopTaskTypeRequest $req) 获取数据开发任务类型
 * @method Models\DescribeDataObjectsResponse DescribeDataObjects(Models\DescribeDataObjectsRequest $req) 查询规则组数据对象列表
 * @method Models\DescribeDataSourceInfoListResponse DescribeDataSourceInfoList(Models\DescribeDataSourceInfoListRequest $req) 获取数据源信息-数据源分页列表
 * @method Models\DescribeDataSourceListResponse DescribeDataSourceList(Models\DescribeDataSourceListRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
数据源详情
 * @method Models\DescribeDataSourceWithoutInfoResponse DescribeDataSourceWithoutInfo(Models\DescribeDataSourceWithoutInfoRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
数据源列表
 * @method Models\DescribeDataTypesResponse DescribeDataTypes(Models\DescribeDataTypesRequest $req) 获取字段类型列表
 * @method Models\DescribeDatabaseInfoListResponse DescribeDatabaseInfoList(Models\DescribeDatabaseInfoListRequest $req) 获取数据库信息
 * @method Models\DescribeDatabaseMetasResponse DescribeDatabaseMetas(Models\DescribeDatabaseMetasRequest $req) 查询数据库列表
 * @method Models\DescribeDatasourceResponse DescribeDatasource(Models\DescribeDatasourceRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
数据源详情
 * @method Models\DescribeDependOpsTaskListResponse DescribeDependOpsTaskList(Models\DescribeDependOpsTaskListRequest $req) 根据任务id获取下游依赖任务列表
 * @method Models\DescribeDependOpsTasksResponse DescribeDependOpsTasks(Models\DescribeDependOpsTasksRequest $req) 根据层级查找上/下游任务节点
 * @method Models\DescribeDependTaskListsResponse DescribeDependTaskLists(Models\DescribeDependTaskListsRequest $req) 通过taskIds查询task详情列表
 * @method Models\DescribeDependTasksDevDsResponse DescribeDependTasksDevDs(Models\DescribeDependTasksDevDsRequest $req) 根据层级查找开发态上下游任务节点
 * @method Models\DescribeDependTasksNewResponse DescribeDependTasksNew(Models\DescribeDependTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
根据层级查找上/下游任务节点
 * @method Models\DescribeDependencyTasksForProjectCloneResponse DescribeDependencyTasksForProjectClone(Models\DescribeDependencyTasksForProjectCloneRequest $req) 【项目克隆任务模式】依赖任务信息查询
 * @method Models\DescribeDependencyWorkflowForProjectCloneResponse DescribeDependencyWorkflowForProjectClone(Models\DescribeDependencyWorkflowForProjectCloneRequest $req) 查询依赖工作流信息查询-项目克隆使用
 * @method Models\DescribeDevelopmentSpaceSupportTypeResponse DescribeDevelopmentSpaceSupportType(Models\DescribeDevelopmentSpaceSupportTypeRequest $req) 获取开发空间支持的脚本类型
 * @method Models\DescribeDiagnosticInfoByBaselineIdResponse DescribeDiagnosticInfoByBaselineId(Models\DescribeDiagnosticInfoByBaselineIdRequest $req) 查询基线诊断信息
 * @method Models\DescribeDimensionScoreResponse DescribeDimensionScore(Models\DescribeDimensionScoreRequest $req) 质量报告-查询质量评分
 * @method Models\DescribeDrInstancePageResponse DescribeDrInstancePage(Models\DescribeDrInstancePageRequest $req) 分页查询试运行实例列表
 * @method Models\DescribeDrInstanceScriptContentResponse DescribeDrInstanceScriptContent(Models\DescribeDrInstanceScriptContentRequest $req) 查询试运行实例执行内容
 * @method Models\DescribeDrSonInstanceResponse DescribeDrSonInstance(Models\DescribeDrSonInstanceRequest $req) 查询试运行实例子实例列表
 * @method Models\DescribeDsEventResponse DescribeDsEvent(Models\DescribeDsEventRequest $req) 分页查询事件
 * @method Models\DescribeDsFolderTreeResponse DescribeDsFolderTree(Models\DescribeDsFolderTreeRequest $req) 查询目录树
 * @method Models\DescribeDsKettleServerFolderTreeResponse DescribeDsKettleServerFolderTree(Models\DescribeDsKettleServerFolderTreeRequest $req) 查询 kettle 资源服务器目录树
 * @method Models\DescribeDsParentFolderTreeResponse DescribeDsParentFolderTree(Models\DescribeDsParentFolderTreeRequest $req) 查询父目录树，用于工作流、任务定位
 * @method Models\DescribeEtlTaskTypeResponse DescribeEtlTaskType(Models\DescribeEtlTaskTypeRequest $req) 获取数据同步任务类型
 * @method Models\DescribeEventResponse DescribeEvent(Models\DescribeEventRequest $req) 根据项目ID和事件名称查看事件详情
 * @method Models\DescribeEventCasesResponse DescribeEventCases(Models\DescribeEventCasesRequest $req) 根据条件查找事件实例
 * @method Models\DescribeEventConsumeTasksResponse DescribeEventConsumeTasks(Models\DescribeEventConsumeTasksRequest $req) 查看事件实例的消费任务
 * @method Models\DescribeEventDetailResponse DescribeEventDetail(Models\DescribeEventDetailRequest $req) 智能运维事件详情1
 * @method Models\DescribeEventIsAlarmTypesResponse DescribeEventIsAlarmTypes(Models\DescribeEventIsAlarmTypesRequest $req) 事件是否告警过滤条件
 * @method Models\DescribeEventListenerByTaskIdResponse DescribeEventListenerByTaskId(Models\DescribeEventListenerByTaskIdRequest $req) 根据任务ID获取任务监听事件
 * @method Models\DescribeEventListenerTaskResponse DescribeEventListenerTask(Models\DescribeEventListenerTaskRequest $req) 事件管理-查询事件关联任务
 * @method Models\DescribeEventTypesResponse DescribeEventTypes(Models\DescribeEventTypesRequest $req) 查询事件类型列表
 * @method Models\DescribeEventsResponse DescribeEvents(Models\DescribeEventsRequest $req) 智能运维事件查询列表
 * @method Models\DescribeExecStrategyResponse DescribeExecStrategy(Models\DescribeExecStrategyRequest $req) 查询规则组执行策略
 * @method Models\DescribeFatherDatasourceInfoDsResponse DescribeFatherDatasourceInfoDs(Models\DescribeFatherDatasourceInfoDsRequest $req) 查询父任务数据源信息Ds
 * @method Models\DescribeFathersResponse DescribeFathers(Models\DescribeFathersRequest $req) 获取关联父实例
 * @method Models\DescribeFieldBasicInfoResponse DescribeFieldBasicInfo(Models\DescribeFieldBasicInfoRequest $req) 元数据模型-字段基础信息查询接口
 * @method Models\DescribeFolderListResponse DescribeFolderList(Models\DescribeFolderListRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
拉取文件夹目录
 * @method Models\DescribeFolderWorkflowListResponse DescribeFolderWorkflowList(Models\DescribeFolderWorkflowListRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
拉取文件夹下的工作流
 * @method Models\DescribeFunctionKindsResponse DescribeFunctionKinds(Models\DescribeFunctionKindsRequest $req) 查询函数分类
 * @method Models\DescribeFunctionTypesResponse DescribeFunctionTypes(Models\DescribeFunctionTypesRequest $req) 查询函数类型
 * @method Models\DescribeImportableOfflineTaskResponse DescribeImportableOfflineTask(Models\DescribeImportableOfflineTaskRequest $req) 查询可导入的集成任务
 * @method Models\DescribeInLongAgentListResponse DescribeInLongAgentList(Models\DescribeInLongAgentListRequest $req) 获取采集器列表
 * @method Models\DescribeInLongAgentTaskListResponse DescribeInLongAgentTaskList(Models\DescribeInLongAgentTaskListRequest $req) 查询采集器关联的任务列表
 * @method Models\DescribeInLongAgentVpcListResponse DescribeInLongAgentVpcList(Models\DescribeInLongAgentVpcListRequest $req) 获取采集器所在集群的VPC列表
 * @method Models\DescribeInLongTkeClusterListResponse DescribeInLongTkeClusterList(Models\DescribeInLongTkeClusterListRequest $req) 获取TKE集群列表
 * @method Models\DescribeInfoTransByTypeIdDsResponse DescribeInfoTransByTypeIdDs(Models\DescribeInfoTransByTypeIdDsRequest $req) 基于任务类型获取任务信息Ds
 * @method Models\DescribeInstanceByCycleResponse DescribeInstanceByCycle(Models\DescribeInstanceByCycleRequest $req) 根据周期类型查询所有实例
 * @method Models\DescribeInstanceByCycleReportResponse DescribeInstanceByCycleReport(Models\DescribeInstanceByCycleReportRequest $req) 实例状态周期增长趋势
 * @method Models\DescribeInstanceLastLogResponse DescribeInstanceLastLog(Models\DescribeInstanceLastLogRequest $req) 日志获取详情页面
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表
 * @method Models\DescribeInstanceLogResponse DescribeInstanceLog(Models\DescribeInstanceLogRequest $req) 获取实例运行日志
 * @method Models\DescribeInstanceLogDetailResponse DescribeInstanceLogDetail(Models\DescribeInstanceLogDetailRequest $req) 获取具体实例相关日志信息
 * @method Models\DescribeInstanceLogFileResponse DescribeInstanceLogFile(Models\DescribeInstanceLogFileRequest $req) 下载日志文件，返回日志URL
 * @method Models\DescribeInstanceLogListResponse DescribeInstanceLogList(Models\DescribeInstanceLogListRequest $req) 离线任务实例运行日志列表
 * @method Models\DescribeInstanceLogsResponse DescribeInstanceLogs(Models\DescribeInstanceLogsRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
获取实例日志列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 数据质量，查询调度任务的实例列表
 * @method Models\DescribeInstancesInfoWithTaskInfoResponse DescribeInstancesInfoWithTaskInfo(Models\DescribeInstancesInfoWithTaskInfoRequest $req) 拉取实例列表，join task表一些信息
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
 * @method Models\DescribeLockResponse DescribeLock(Models\DescribeLockRequest $req) 获取协同编辑资源锁
 * @method Models\DescribeMonitorsByPageResponse DescribeMonitorsByPage(Models\DescribeMonitorsByPageRequest $req) 分页查询质量监控组
 * @method Models\DescribeOfflineTaskTokenResponse DescribeOfflineTaskToken(Models\DescribeOfflineTaskTokenRequest $req) 获取离线任务长连接Token
 * @method Models\DescribeOperateOpsTaskDatasourceResponse DescribeOperateOpsTaskDatasource(Models\DescribeOperateOpsTaskDatasourceRequest $req) 任务运维搜索 查询生产态任务数据源列表
 * @method Models\DescribeOperateOpsTaskDatasourceTypeResponse DescribeOperateOpsTaskDatasourceType(Models\DescribeOperateOpsTaskDatasourceTypeRequest $req) 任务运维-查询生产态任务数据源类型列表
 * @method Models\DescribeOperateOpsTasksResponse DescribeOperateOpsTasks(Models\DescribeOperateOpsTasksRequest $req) 任务运维列表组合条件查询
 * @method Models\DescribeOperateTasksResponse DescribeOperateTasks(Models\DescribeOperateTasksRequest $req) 任务运维列表组合条件查询
 * @method Models\DescribeOpsInstanceLogListResponse DescribeOpsInstanceLogList(Models\DescribeOpsInstanceLogListRequest $req) 实例运维-获取实例日志列表
 * @method Models\DescribeOpsMakePlanInstancesResponse DescribeOpsMakePlanInstances(Models\DescribeOpsMakePlanInstancesRequest $req) 根据补录计划和补录任务获取补录实例列表。
 * @method Models\DescribeOpsMakePlanTasksResponse DescribeOpsMakePlanTasks(Models\DescribeOpsMakePlanTasksRequest $req) 查看补录计划任务
 * @method Models\DescribeOpsMakePlansResponse DescribeOpsMakePlans(Models\DescribeOpsMakePlansRequest $req) 根据条件分页查询补录计划
 * @method Models\DescribeOpsWorkflowsResponse DescribeOpsWorkflows(Models\DescribeOpsWorkflowsRequest $req) 查询用户生产工作流列表
 * @method Models\DescribeOrganizationalFunctionsResponse DescribeOrganizationalFunctions(Models\DescribeOrganizationalFunctionsRequest $req) 查询全量函数
 * @method Models\DescribeParentTaskResponse DescribeParentTask(Models\DescribeParentTaskRequest $req) 查询任务父依赖
 * @method Models\DescribePathTreesResponse DescribePathTrees(Models\DescribePathTreesRequest $req) 开发空间-拉取完整目录树
 * @method Models\DescribeProdTasksResponse DescribeProdTasks(Models\DescribeProdTasksRequest $req) 数据质量获取生产调度任务列表
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 获取项目信息
 * @method Models\DescribeProjectParamDsPageResponse DescribeProjectParamDsPage(Models\DescribeProjectParamDsPageRequest $req) 查询项目全局参数
 * @method Models\DescribeProjectParamVersionInfoDsResponse DescribeProjectParamVersionInfoDs(Models\DescribeProjectParamVersionInfoDsRequest $req) 拉取项目参数版本详情
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
 * @method Models\DescribeScheduleInstanceResponse DescribeScheduleInstance(Models\DescribeScheduleInstanceRequest $req) 在基线系统内查询单个调度任务实例
 * @method Models\DescribeScheduleInstancesResponse DescribeScheduleInstances(Models\DescribeScheduleInstancesRequest $req) 获取实例列表
 * @method Models\DescribeSchedulerInstanceStatusResponse DescribeSchedulerInstanceStatus(Models\DescribeSchedulerInstanceStatusRequest $req) 运维大屏-实例状态分布
 * @method Models\DescribeSchedulerRunTimeInstanceCntByStatusResponse DescribeSchedulerRunTimeInstanceCntByStatus(Models\DescribeSchedulerRunTimeInstanceCntByStatusRequest $req) 运维大屏-实例运行时长排行
 * @method Models\DescribeSchedulerTaskCntByStatusResponse DescribeSchedulerTaskCntByStatus(Models\DescribeSchedulerTaskCntByStatusRequest $req) 任务状态统计
 * @method Models\DescribeSchedulerTaskTypeCntResponse DescribeSchedulerTaskTypeCnt(Models\DescribeSchedulerTaskTypeCntRequest $req) 运维大屏-任务状态分布
 * @method Models\DescribeScriptsImportTaskTypeResponse DescribeScriptsImportTaskType(Models\DescribeScriptsImportTaskTypeRequest $req) 获取脚本导出任务类型
 * @method Models\DescribeSonInstancesResponse DescribeSonInstances(Models\DescribeSonInstancesRequest $req) 获取关联子实例
 * @method Models\DescribeStandardRuleDetailInfoListResponse DescribeStandardRuleDetailInfoList(Models\DescribeStandardRuleDetailInfoListRequest $req) 获取数据标准规则详情
 * @method Models\DescribeStatisticInstanceStatusTrendOpsResponse DescribeStatisticInstanceStatusTrendOps(Models\DescribeStatisticInstanceStatusTrendOpsRequest $req) 任务状态趋势
 * @method Models\DescribeStreamTaskLogListResponse DescribeStreamTaskLogList(Models\DescribeStreamTaskLogListRequest $req) 查询实时任务日志列表
 * @method Models\DescribeSuccessorOpsTaskInfosResponse DescribeSuccessorOpsTaskInfos(Models\DescribeSuccessorOpsTaskInfosRequest $req) 获取下游任务信息
 * @method Models\DescribeTableBasicInfoResponse DescribeTableBasicInfo(Models\DescribeTableBasicInfoRequest $req) 元数据模型-表基础信息查询接口
 * @method Models\DescribeTableInfoListResponse DescribeTableInfoList(Models\DescribeTableInfoListRequest $req) 获取数据表信息
 * @method Models\DescribeTableLineageResponse DescribeTableLineage(Models\DescribeTableLineageRequest $req) 列出表血缘信息
 * @method Models\DescribeTableLineageInfoResponse DescribeTableLineageInfo(Models\DescribeTableLineageInfoRequest $req) 列出表血缘信息
 * @method Models\DescribeTableMetaResponse DescribeTableMeta(Models\DescribeTableMetaRequest $req) 查询表元数据详情
 * @method Models\DescribeTableMetasResponse DescribeTableMetas(Models\DescribeTableMetasRequest $req) 获取表元数据list
 * @method Models\DescribeTableQualityDetailsResponse DescribeTableQualityDetails(Models\DescribeTableQualityDetailsRequest $req) 质量报告-查询表质量详情
 * @method Models\DescribeTableSchemaInfoResponse DescribeTableSchemaInfo(Models\DescribeTableSchemaInfoRequest $req) 获取表schema信息
 * @method Models\DescribeTableScoreTrendResponse DescribeTableScoreTrend(Models\DescribeTableScoreTrendRequest $req) 查询表得分趋势
 * @method Models\DescribeTaskAlarmRegulationsResponse DescribeTaskAlarmRegulations(Models\DescribeTaskAlarmRegulationsRequest $req) 查询任务告警规则列表
 * @method Models\DescribeTaskBindVirtualTaskResponse DescribeTaskBindVirtualTask(Models\DescribeTaskBindVirtualTaskRequest $req) 获取任务绑定的虚拟任务
 * @method Models\DescribeTaskByCycleResponse DescribeTaskByCycle(Models\DescribeTaskByCycleRequest $req) 根据周期类型 查询所有任务
 * @method Models\DescribeTaskByCycleReportResponse DescribeTaskByCycleReport(Models\DescribeTaskByCycleReportRequest $req) 任务状态周期增长趋势
 * @method Models\DescribeTaskByStatusReportResponse DescribeTaskByStatusReport(Models\DescribeTaskByStatusReportRequest $req) 任务状态趋势
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
查询任务具体详情
 * @method Models\DescribeTaskDetailDsResponse DescribeTaskDetailDs(Models\DescribeTaskDetailDsRequest $req) 查询任务具体详情Ds
 * @method Models\DescribeTaskInstanceResponse DescribeTaskInstance(Models\DescribeTaskInstanceRequest $req) 离线任务实例详情
 * @method Models\DescribeTaskInstanceReportDetailResponse DescribeTaskInstanceReportDetail(Models\DescribeTaskInstanceReportDetailRequest $req) 离线任务实例统计明细
 * @method Models\DescribeTaskInstancesResponse DescribeTaskInstances(Models\DescribeTaskInstancesRequest $req) 查询任务实例列表
 * @method Models\DescribeTaskLatestRunTimeResponse DescribeTaskLatestRunTime(Models\DescribeTaskLatestRunTimeRequest $req) 通过指定基准时间，计算出最近一次任务基于该基准时间的运行时间
 * @method Models\DescribeTaskListByConditionDsResponse DescribeTaskListByConditionDs(Models\DescribeTaskListByConditionDsRequest $req) 基于条件翻页获取任务列表, 用于新建跨工作流任务场景中展示工作流列表操作
 * @method Models\DescribeTaskLockStatusResponse DescribeTaskLockStatus(Models\DescribeTaskLockStatusRequest $req) 查看任务锁状态信息
 * @method Models\DescribeTaskOutputRegistriesResponse DescribeTaskOutputRegistries(Models\DescribeTaskOutputRegistriesRequest $req) 获取指定任务产出登记列表
 * @method Models\DescribeTaskParentRunTimeResponse DescribeTaskParentRunTime(Models\DescribeTaskParentRunTimeRequest $req) 基于当前任务的数据时间计算依赖的上游任务数据时间
 * @method Models\DescribeTaskReportResponse DescribeTaskReport(Models\DescribeTaskReportRequest $req) 按起止日期统计离线任务的所有实例的运行指标总和
 * @method Models\DescribeTaskReportDetailListResponse DescribeTaskReportDetailList(Models\DescribeTaskReportDetailListRequest $req) 离线任务周期统计明细
 * @method Models\DescribeTaskRunHistoryResponse DescribeTaskRunHistory(Models\DescribeTaskRunHistoryRequest $req) 分页查询任务运行历史
 * @method Models\DescribeTaskScriptResponse DescribeTaskScript(Models\DescribeTaskScriptRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
查询任务脚本
 * @method Models\DescribeTaskTypeByScriptTypeResponse DescribeTaskTypeByScriptType(Models\DescribeTaskTypeByScriptTypeRequest $req) 根据脚本类型获取任务类型
 * @method Models\DescribeTasksByPageResponse DescribeTasksByPage(Models\DescribeTasksByPageRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
根据工作流分页查询任务
 * @method Models\DescribeTasksForProjectCloneResponse DescribeTasksForProjectClone(Models\DescribeTasksForProjectCloneRequest $req) 任务信息查询-项目克隆使用
 * @method Models\DescribeTemplateDimCountResponse DescribeTemplateDimCount(Models\DescribeTemplateDimCountRequest $req) 查询规则模板维度分布情况
 * @method Models\DescribeTemplateHistoryResponse DescribeTemplateHistory(Models\DescribeTemplateHistoryRequest $req) 查询规则模板操作记录
 * @method Models\DescribeThirdTaskRunLogResponse DescribeThirdTaskRunLog(Models\DescribeThirdTaskRunLogRequest $req) 获取第三方运行日志
 * @method Models\DescribeTopTableStatResponse DescribeTopTableStat(Models\DescribeTopTableStatRequest $req) 数据质量概览页面表排行接口
 * @method Models\DescribeTrendStatResponse DescribeTrendStat(Models\DescribeTrendStatRequest $req) 数据质量概览页面趋势变化接口
 * @method Models\DescribeWorkflowCanvasInfoResponse DescribeWorkflowCanvasInfo(Models\DescribeWorkflowCanvasInfoRequest $req) 查询工作流画布
 * @method Models\DescribeWorkflowCanvasInfoDsResponse DescribeWorkflowCanvasInfoDs(Models\DescribeWorkflowCanvasInfoDsRequest $req) 数据开发-获取工作流画布信息
 * @method Models\DescribeWorkflowCanvasOpLogsResponse DescribeWorkflowCanvasOpLogs(Models\DescribeWorkflowCanvasOpLogsRequest $req) 获取工作流操作日志
 * @method Models\DescribeWorkflowExecuteByIdResponse DescribeWorkflowExecuteById(Models\DescribeWorkflowExecuteByIdRequest $req) 查询工作流画布运行起止时间
 * @method Models\DescribeWorkflowForProjectCloneResponse DescribeWorkflowForProjectClone(Models\DescribeWorkflowForProjectCloneRequest $req) 工作流信息查询-项目克隆使用
 * @method Models\DescribeWorkflowInfoByIdResponse DescribeWorkflowInfoById(Models\DescribeWorkflowInfoByIdRequest $req) 通过工作流id，查询工作流详情
 * @method Models\DescribeWorkflowListByProjectIdResponse DescribeWorkflowListByProjectId(Models\DescribeWorkflowListByProjectIdRequest $req) 根据项目id 获取项目下所有工作流列表
 * @method Models\DescribeWorkflowOpsCanvasInfoResponse DescribeWorkflowOpsCanvasInfo(Models\DescribeWorkflowOpsCanvasInfoRequest $req) 查询运维画布信息，只需要获取边和节点
 * @method Models\DescribeWorkflowSchedulerInfoDsResponse DescribeWorkflowSchedulerInfoDs(Models\DescribeWorkflowSchedulerInfoDsRequest $req) 获取工作流调度信息
 * @method Models\DescribeWorkflowTaskCountResponse DescribeWorkflowTaskCount(Models\DescribeWorkflowTaskCountRequest $req) 查询工作流任务数
 * @method Models\DescribeWorkflowTasksForProjectCloneResponse DescribeWorkflowTasksForProjectClone(Models\DescribeWorkflowTasksForProjectCloneRequest $req) 工作流任务信息查询-项目克隆使用
 * @method Models\DiagnosePlusResponse DiagnosePlus(Models\DiagnosePlusRequest $req) 实例诊断信息
 * @method Models\DryRunDIOfflineTaskResponse DryRunDIOfflineTask(Models\DryRunDIOfflineTaskRequest $req) 调试运行集成任务
 * @method Models\EditBaselineResponse EditBaseline(Models\EditBaselineRequest $req) 编辑基线
 * @method Models\ExportDsEventResponse ExportDsEvent(Models\ExportDsEventRequest $req) 事件管理-导出事件
 * @method Models\ExportFilesResponse ExportFiles(Models\ExportFilesRequest $req) 批量导出文件
 * @method Models\ExportProjectParamDsResponse ExportProjectParamDs(Models\ExportProjectParamDsRequest $req) 导出项目参数
 * @method Models\ExportWorkflowXmlResponse ExportWorkflowXml(Models\ExportWorkflowXmlRequest $req) 导出工作流(XML格式)，导出的文件存储在 cos 中(私有化 csp)，请自行下载，相关的下载信息在返回值中可以获取到
 * @method Models\ExportWorkflowZipResponse ExportWorkflowZip(Models\ExportWorkflowZipRequest $req) 导出工作流到 Zip 文件，导出的文件存储在 cos 中(私有化 csp)，请自行下载，相关的下载信息在返回值中可以获取到
 * @method Models\FindAllFolderResponse FindAllFolder(Models\FindAllFolderRequest $req) 查找全部的文件夹
 * @method Models\FindDependTaskListDsResponse FindDependTaskListDs(Models\FindDependTaskListDsRequest $req) 拉取下游依赖的任务列表Ds
 * @method Models\FindDependTaskListsDsResponse FindDependTaskListsDs(Models\FindDependTaskListsDsRequest $req) 批量拉取下游依赖的任务列表Ds
 * @method Models\FindFuzzyTasksDsResponse FindFuzzyTasksDs(Models\FindFuzzyTasksDsRequest $req) 编排空间-根据项目名称和任务名称模糊查询所有任务
 * @method Models\ForceSucInstancesResponse ForceSucInstances(Models\ForceSucInstancesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
实例批量置成功
 * @method Models\ForceSucScheduleInstancesResponse ForceSucScheduleInstances(Models\ForceSucScheduleInstancesRequest $req) 实例强制成功
 * @method Models\FreezeOpsTasksResponse FreezeOpsTasks(Models\FreezeOpsTasksRequest $req) 任务运维-批量冻结任务
 * @method Models\FreezeTasksResponse FreezeTasks(Models\FreezeTasksRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
批量冻结任务
 * @method Models\FreezeTasksByMultiWorkflowResponse FreezeTasksByMultiWorkflow(Models\FreezeTasksByMultiWorkflowRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
基于多个工作流进行批量冻结任务操作
 * @method Models\FreezeTasksByWorkflowIdsResponse FreezeTasksByWorkflowIds(Models\FreezeTasksByWorkflowIdsRequest $req) 暂停工作流下的所有任务
 * @method Models\GenHiveTableDDLSqlResponse GenHiveTableDDLSql(Models\GenHiveTableDDLSqlRequest $req) 生成建hive表的sql
 * @method Models\GetAdvanceRunParamsResponse GetAdvanceRunParams(Models\GetAdvanceRunParamsRequest $req) 获取高级运行参数
 * @method Models\GetBatchDetailErrorLogResponse GetBatchDetailErrorLog(Models\GetBatchDetailErrorLogRequest $req) 获取批量操作错误日志
 * @method Models\GetCosTokenResponse GetCosToken(Models\GetCosTokenRequest $req) 获取cos token
 * @method Models\GetFileInfoResponse GetFileInfo(Models\GetFileInfoRequest $req) 开发空间-获取数据开发脚本信息
 * @method Models\GetIntegrationNodeColumnSchemaResponse GetIntegrationNodeColumnSchema(Models\GetIntegrationNodeColumnSchemaRequest $req) 提取数据集成节点字段Schema
 * @method Models\GetOfflineDIInstanceListResponse GetOfflineDIInstanceList(Models\GetOfflineDIInstanceListRequest $req) 获取离线任务实例列表(新)
 * @method Models\GetOfflineInstanceListResponse GetOfflineInstanceList(Models\GetOfflineInstanceListRequest $req) 获取离线任务实例
 * @method Models\GetPathTreesResponse GetPathTrees(Models\GetPathTreesRequest $req) 回收站脚本文件目录树
 * @method Models\GetResourcePathTreeResponse GetResourcePathTree(Models\GetResourcePathTreeRequest $req) 资源管理-拉取资源目录树
 * @method Models\GetRunSonListDsResponse GetRunSonListDs(Models\GetRunSonListDsRequest $req) 获取工作流运行任务下游Ds
 * @method Models\GetTestRunTaskInstancesStatusInfoResponse GetTestRunTaskInstancesStatusInfo(Models\GetTestRunTaskInstancesStatusInfoRequest $req) 获取调试任务实例状态信息
 * @method Models\HeartBeatResponse HeartBeat(Models\HeartBeatRequest $req) 协同编辑资源锁心跳
 * @method Models\ImportDsEventResponse ImportDsEvent(Models\ImportDsEventRequest $req) 事件管理-导入事件
 * @method Models\ImportFilesResponse ImportFiles(Models\ImportFilesRequest $req) 批量导入文件
 * @method Models\ImportOfflineTaskResponse ImportOfflineTask(Models\ImportOfflineTaskRequest $req) 异步导入集成任务
 * @method Models\ImportProjectParamDsResponse ImportProjectParamDs(Models\ImportProjectParamDsRequest $req) 导入项目参数
 * @method Models\JudgeTaskListenEventResponse JudgeTaskListenEvent(Models\JudgeTaskListenEventRequest $req) 任务是否存在监听事件
 * @method Models\KillInstancesResponse KillInstances(Models\KillInstancesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
实例批量终止操作
 * @method Models\KillOpsMakePlanInstancesResponse KillOpsMakePlanInstances(Models\KillOpsMakePlanInstancesRequest $req) 按补录计划批量终止实例。
 * @method Models\KillScheduleInstancesResponse KillScheduleInstances(Models\KillScheduleInstancesRequest $req) 批量kill实例
 * @method Models\ListBatchDetailResponse ListBatchDetail(Models\ListBatchDetailRequest $req) 获取操作详情列表
 * @method Models\ListBatchJobResponse ListBatchJob(Models\ListBatchJobRequest $req) 获取操作历史列表
 * @method Models\LockIntegrationTaskResponse LockIntegrationTask(Models\LockIntegrationTaskRequest $req) 锁定集成任务
 * @method Models\MakeUpOpsTasksResponse MakeUpOpsTasks(Models\MakeUpOpsTasksRequest $req) 任务批量补录，调度状态任务才可以补录；
 * @method Models\MakeUpTasksByWorkflowResponse MakeUpTasksByWorkflow(Models\MakeUpTasksByWorkflowRequest $req) 工作流补数据
 * @method Models\MakeUpTasksNewResponse MakeUpTasksNew(Models\MakeUpTasksNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
任务批量补录，调度状态任务才可以补录；



 * @method Models\MakeUpWorkflowNewResponse MakeUpWorkflowNew(Models\MakeUpWorkflowNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
工作流下所有任务的补录
 * @method Models\ModifyApproveStatusResponse ModifyApproveStatus(Models\ModifyApproveStatusRequest $req) 修改审批单状态
 * @method Models\ModifyBaselineAlarmStatusResponse ModifyBaselineAlarmStatus(Models\ModifyBaselineAlarmStatusRequest $req) 编辑基线告警状态
 * @method Models\ModifyBaselineTaskAlarmStatusResponse ModifyBaselineTaskAlarmStatus(Models\ModifyBaselineTaskAlarmStatusRequest $req) 编辑基线实例中任务告警状态
 * @method Models\ModifyDataSourceResponse ModifyDataSource(Models\ModifyDataSourceRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
修改数据源
 * @method Models\ModifyDimensionWeightResponse ModifyDimensionWeight(Models\ModifyDimensionWeightRequest $req) 质量报告-修改维度权限
 * @method Models\ModifyDsFolderResponse ModifyDsFolder(Models\ModifyDsFolderRequest $req) 数据开发模块-文件夹更新
 * @method Models\ModifyExecStrategyResponse ModifyExecStrategy(Models\ModifyExecStrategyRequest $req) 更新规则组执行策略
 * @method Models\ModifyFolderResponse ModifyFolder(Models\ModifyFolderRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
文件夹更新
 * @method Models\ModifyIntegrationNodeResponse ModifyIntegrationNode(Models\ModifyIntegrationNodeRequest $req) 更新集成节点
 * @method Models\ModifyIntegrationTaskResponse ModifyIntegrationTask(Models\ModifyIntegrationTaskRequest $req) 更新集成任务
 * @method Models\ModifyMonitorStatusResponse ModifyMonitorStatus(Models\ModifyMonitorStatusRequest $req) 更新监控状态
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 更新质量规则接口
 * @method Models\ModifyRuleGroupSubscriptionResponse ModifyRuleGroupSubscription(Models\ModifyRuleGroupSubscriptionRequest $req) 更新规则组订阅信息
 * @method Models\ModifyRuleTemplateResponse ModifyRuleTemplate(Models\ModifyRuleTemplateRequest $req) 编辑规则模板
 * @method Models\ModifyTaskAlarmRegularResponse ModifyTaskAlarmRegular(Models\ModifyTaskAlarmRegularRequest $req) 修改任务告警规则
 * @method Models\ModifyTaskFolderResponse ModifyTaskFolder(Models\ModifyTaskFolderRequest $req) 编排空间-工作流-创建任务文件夹
 * @method Models\ModifyTaskInfoResponse ModifyTaskInfo(Models\ModifyTaskInfoRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
更新任务
 * @method Models\ModifyTaskInfoDsResponse ModifyTaskInfoDs(Models\ModifyTaskInfoDsRequest $req) 更新任务Ds
 * @method Models\ModifyTaskLinksResponse ModifyTaskLinks(Models\ModifyTaskLinksRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
添加父任务依赖
 * @method Models\ModifyTaskLinksDsResponse ModifyTaskLinksDs(Models\ModifyTaskLinksDsRequest $req) 添加父任务依赖
 * @method Models\ModifyTaskNameResponse ModifyTaskName(Models\ModifyTaskNameRequest $req) 重命名任务（任务编辑）
 * @method Models\ModifyTaskScriptResponse ModifyTaskScript(Models\ModifyTaskScriptRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
修改任务脚本
 * @method Models\ModifyTaskScriptDsResponse ModifyTaskScriptDs(Models\ModifyTaskScriptDsRequest $req) 修改任务脚本Ds
 * @method Models\ModifyWorkflowInfoResponse ModifyWorkflowInfo(Models\ModifyWorkflowInfoRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
更新工作流
 * @method Models\ModifyWorkflowScheduleResponse ModifyWorkflowSchedule(Models\ModifyWorkflowScheduleRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
更新工作流调度
 * @method Models\MoveFileResponse MoveFile(Models\MoveFileRequest $req) 移动文件
 * @method Models\MoveTasksToFolderResponse MoveTasksToFolder(Models\MoveTasksToFolderRequest $req) 编排空间-工作流-移动任务到工作流文件夹
 * @method Models\RegisterDsEventResponse RegisterDsEvent(Models\RegisterDsEventRequest $req) 注册事件
 * @method Models\RegisterDsEventListenerResponse RegisterDsEventListener(Models\RegisterDsEventListenerRequest $req) 注册事件监听者
 * @method Models\RegisterDsEventPublisherResponse RegisterDsEventPublisher(Models\RegisterDsEventPublisherRequest $req) 注册事件发布者
 * @method Models\RegisterEventResponse RegisterEvent(Models\RegisterEventRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
注册事件
 * @method Models\RegisterEventListenerResponse RegisterEventListener(Models\RegisterEventListenerRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
注册事件监听器
 * @method Models\ReleaseLockResponse ReleaseLock(Models\ReleaseLockRequest $req) 释放协同编辑资源锁
 * @method Models\RemoveWorkflowDsResponse RemoveWorkflowDs(Models\RemoveWorkflowDsRequest $req) 删除编排空间工作流
 * @method Models\RenameFileResponse RenameFile(Models\RenameFileRequest $req) 重命名文件
 * @method Models\RenameResourceResponse RenameResource(Models\RenameResourceRequest $req) 资源管理-重命名资源
 * @method Models\RenameResourceFileResponse RenameResourceFile(Models\RenameResourceFileRequest $req) 资源管理-重命名资源文件
 * @method Models\RenameTaskDsResponse RenameTaskDs(Models\RenameTaskDsRequest $req) RenameTaskDs
 * @method Models\RenewWorkflowDsResponse RenewWorkflowDs(Models\RenewWorkflowDsRequest $req) 更新工作流
 * @method Models\RenewWorkflowFolderDsResponse RenewWorkflowFolderDs(Models\RenewWorkflowFolderDsRequest $req) 移动文件夹
 * @method Models\RenewWorkflowOwnerDsResponse RenewWorkflowOwnerDs(Models\RenewWorkflowOwnerDsRequest $req) 批量更新工作流下任务责任人
 * @method Models\RenewWorkflowSchedulerInfoDsResponse RenewWorkflowSchedulerInfoDs(Models\RenewWorkflowSchedulerInfoDsRequest $req) 更新工作流下任务调度信息
 * @method Models\RerunInstancesResponse RerunInstances(Models\RerunInstancesRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
实例批量重跑
 * @method Models\RerunOpsMakePlanInstancesResponse RerunOpsMakePlanInstances(Models\RerunOpsMakePlanInstancesRequest $req) 按补录计划批量重跑/选择补录计划→补录任务→补录实例，点击重跑
 * @method Models\RerunScheduleInstancesResponse RerunScheduleInstances(Models\RerunScheduleInstancesRequest $req) 实例批量重跑
 * @method Models\RestartInLongAgentResponse RestartInLongAgent(Models\RestartInLongAgentRequest $req) 重启采集器
 * @method Models\ResumeIntegrationTaskResponse ResumeIntegrationTask(Models\ResumeIntegrationTaskRequest $req) 继续集成任务
 * @method Models\RobAndLockIntegrationTaskResponse RobAndLockIntegrationTask(Models\RobAndLockIntegrationTaskRequest $req) 抢占锁定集成任务
 * @method Models\RunForceSucScheduleInstancesResponse RunForceSucScheduleInstances(Models\RunForceSucScheduleInstancesRequest $req) 实例强制成功
 * @method Models\RunRerunScheduleInstancesResponse RunRerunScheduleInstances(Models\RunRerunScheduleInstancesRequest $req) 实例批量重跑
 * @method Models\RunTaskResponse RunTask(Models\RunTaskRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
运行任务
 * @method Models\RunTasksByMultiWorkflowResponse RunTasksByMultiWorkflow(Models\RunTasksByMultiWorkflowRequest $req) 批量启动工作流
 * @method Models\SaveCustomFunctionResponse SaveCustomFunction(Models\SaveCustomFunctionRequest $req) 保存用户自定义函数
 * @method Models\SavePositionsDsResponse SavePositionsDs(Models\SavePositionsDsRequest $req) 批量保存任务位置
 * @method Models\ScriptUsedByOtherTaskDsResponse ScriptUsedByOtherTaskDs(Models\ScriptUsedByOtherTaskDsRequest $req) 判断脚本文件是否被任务列表所引用
 * @method Models\SetTaskAlarmNewResponse SetTaskAlarmNew(Models\SetTaskAlarmNewRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
设置任务告警，新建/更新告警信息（最新）
 * @method Models\StartIntegrationTaskResponse StartIntegrationTask(Models\StartIntegrationTaskRequest $req) 启动集成任务
 * @method Models\StopBaselineResponse StopBaseline(Models\StopBaselineRequest $req) 提交基线
 * @method Models\StopIntegrationTaskResponse StopIntegrationTask(Models\StopIntegrationTaskRequest $req) 停止集成任务
 * @method Models\SubmitBaselineResponse SubmitBaseline(Models\SubmitBaselineRequest $req) 提交基线
 * @method Models\SubmitCustomFunctionResponse SubmitCustomFunction(Models\SubmitCustomFunctionRequest $req) 提交自定义函数
 * @method Models\SubmitPySparkTaskResponse SubmitPySparkTask(Models\SubmitPySparkTaskRequest $req) 即席分析提交PySpark任务
 * @method Models\SubmitPythonTaskResponse SubmitPythonTask(Models\SubmitPythonTaskRequest $req) 即席分析提交PYTHON任务
 * @method Models\SubmitShellTaskResponse SubmitShellTask(Models\SubmitShellTaskRequest $req) 即席分析提交SHELL任务
 * @method Models\SubmitSqlTaskResponse SubmitSqlTask(Models\SubmitSqlTaskRequest $req) 即席分析提交SQL任务
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
提交任务
 * @method Models\SubmitTaskTestRunResponse SubmitTaskTestRun(Models\SubmitTaskTestRunRequest $req) 无
 * @method Models\SubmitWorkflowResponse SubmitWorkflow(Models\SubmitWorkflowRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
提交工作流
 * @method Models\SuspendIntegrationTaskResponse SuspendIntegrationTask(Models\SuspendIntegrationTaskRequest $req) 暂停集成任务
 * @method Models\TaskLogResponse TaskLog(Models\TaskLogRequest $req) 查询Inlong manager日志
 * @method Models\TriggerDsEventResponse TriggerDsEvent(Models\TriggerDsEventRequest $req) 事件管理-触发事件
 * @method Models\TriggerEventResponse TriggerEvent(Models\TriggerEventRequest $req) <p style="color:red;">[注意：该Beta版本只满足广州区部分白名单客户使用]</p>
触发事件
 * @method Models\UnlockIntegrationTaskResponse UnlockIntegrationTask(Models\UnlockIntegrationTaskRequest $req) 解锁集成任务
 * @method Models\UpdateBatchTaskAdvancedSettingsResponse UpdateBatchTaskAdvancedSettings(Models\UpdateBatchTaskAdvancedSettingsRequest $req) 批量更新高级设置
 * @method Models\UpdateBatchTaskDatasourceResponse UpdateBatchTaskDatasource(Models\UpdateBatchTaskDatasourceRequest $req) 批量更新数据源
 * @method Models\UpdateBatchTaskInChargeResponse UpdateBatchTaskInCharge(Models\UpdateBatchTaskInChargeRequest $req) 批量修改责任人
 * @method Models\UpdateBatchTaskParameterResponse UpdateBatchTaskParameter(Models\UpdateBatchTaskParameterRequest $req) 批量修改参数
 * @method Models\UpdateBatchTaskParamsResponse UpdateBatchTaskParams(Models\UpdateBatchTaskParamsRequest $req) 批量更新调度参数
 * @method Models\UpdateBatchTaskResourceGroupResponse UpdateBatchTaskResourceGroup(Models\UpdateBatchTaskResourceGroupRequest $req) 批量修改资源组
 * @method Models\UpdateBatchTaskScheduleResponse UpdateBatchTaskSchedule(Models\UpdateBatchTaskScheduleRequest $req) 批量更新调度周期设置
 * @method Models\UpdateDsEventResponse UpdateDsEvent(Models\UpdateDsEventRequest $req) 更新事件
 * @method Models\UpdateEventListenerResponse UpdateEventListener(Models\UpdateEventListenerRequest $req) 更新事件监听
 * @method Models\UpdateInLongAgentResponse UpdateInLongAgent(Models\UpdateInLongAgentRequest $req) 更新采集器
 * @method Models\UpdateTaskDsResponse UpdateTaskDs(Models\UpdateTaskDsRequest $req) 更新任务Ds
 * @method Models\UpdateWorkflowOwnerResponse UpdateWorkflowOwner(Models\UpdateWorkflowOwnerRequest $req) 修改工作流责任人
 * @method Models\UploadAdvanceRunParamsResponse UploadAdvanceRunParams(Models\UploadAdvanceRunParamsRequest $req) 保存高级运行用户自定义参数
 * @method Models\UploadContentResponse UploadContent(Models\UploadContentRequest $req) 保存任务信息
 * @method Models\UploadFilesDsResponse UploadFilesDs(Models\UploadFilesDsRequest $req) 文件上传需要先获取文件上传所需要的秘钥，文件位置等信息，因为文件名字可能会出现冲突，所以需要传入将要写入的文件，如果检测到文件名冲突，WeData 后端会在文件名上加入随机字符串。
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
