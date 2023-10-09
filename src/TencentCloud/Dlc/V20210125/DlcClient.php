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

namespace TencentCloud\Dlc\V20210125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dlc\V20210125\Models as Models;

/**
 * @method Models\AddDMSPartitionsResponse AddDMSPartitions(Models\AddDMSPartitionsRequest $req) DMS元数据新增分区
 * @method Models\AddUsersToWorkGroupResponse AddUsersToWorkGroup(Models\AddUsersToWorkGroupRequest $req) 添加用户到工作组
 * @method Models\AlterDMSDatabaseResponse AlterDMSDatabase(Models\AlterDMSDatabaseRequest $req) DMS元数据更新库
 * @method Models\AlterDMSPartitionResponse AlterDMSPartition(Models\AlterDMSPartitionRequest $req) DMS元数据更新分区
 * @method Models\AlterDMSTableResponse AlterDMSTable(Models\AlterDMSTableRequest $req) DMS元数据更新表
 * @method Models\AttachUserPolicyResponse AttachUserPolicy(Models\AttachUserPolicyRequest $req) 绑定鉴权策略到用户
 * @method Models\AttachWorkGroupPolicyResponse AttachWorkGroupPolicy(Models\AttachWorkGroupPolicyRequest $req) 绑定鉴权策略到工作组
 * @method Models\BindWorkGroupsToUserResponse BindWorkGroupsToUser(Models\BindWorkGroupsToUserRequest $req) 绑定工作组到用户
 * @method Models\CancelNotebookSessionStatementResponse CancelNotebookSessionStatement(Models\CancelNotebookSessionStatementRequest $req) 本接口（CancelNotebookSessionStatement）用于取消session中执行的任务
 * @method Models\CancelNotebookSessionStatementBatchResponse CancelNotebookSessionStatementBatch(Models\CancelNotebookSessionStatementBatchRequest $req) 本接口（CancelNotebookSessionStatementBatch）用于批量取消Session 中执行的任务
 * @method Models\CancelSparkSessionBatchSQLResponse CancelSparkSessionBatchSQL(Models\CancelSparkSessionBatchSQLRequest $req) 本接口（CancelSparkSessionBatchSQL）用于取消Spark SQL批任务。
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) 本接口（CancelTask），用于取消任务
 * @method Models\CheckDataEngineConfigPairsValidityResponse CheckDataEngineConfigPairsValidity(Models\CheckDataEngineConfigPairsValidityRequest $req) 本接口（CheckDataEngineConfigPairsValidity）用于检查引擎用户自定义参数的有效性
 * @method Models\CheckDataEngineImageCanBeRollbackResponse CheckDataEngineImageCanBeRollback(Models\CheckDataEngineImageCanBeRollbackRequest $req) 本接口（CheckDataEngineImageCanBeRollback）用于查看集群是否能回滚。
 * @method Models\CheckDataEngineImageCanBeUpgradeResponse CheckDataEngineImageCanBeUpgrade(Models\CheckDataEngineImageCanBeUpgradeRequest $req) 本接口（CheckDataEngineImageCanBeUpgrade）用于查看集群镜像是否能够升级。
 * @method Models\CheckLockMetaDataResponse CheckLockMetaData(Models\CheckLockMetaDataRequest $req) 元数据锁检查
 * @method Models\CreateDMSDatabaseResponse CreateDMSDatabase(Models\CreateDMSDatabaseRequest $req) DMS元数据创建库
 * @method Models\CreateDMSTableResponse CreateDMSTable(Models\CreateDMSTableRequest $req) DMS元数据创建表
 * @method Models\CreateDataEngineResponse CreateDataEngine(Models\CreateDataEngineRequest $req) 为用户创建数据引擎
 * @method Models\CreateDatabaseResponse CreateDatabase(Models\CreateDatabaseRequest $req) 本接口（CreateDatabase）用于生成建库SQL语句。
 * @method Models\CreateExportTaskResponse CreateExportTask(Models\CreateExportTaskRequest $req) 该接口（CreateExportTask）用于创建导出任务
 * @method Models\CreateImportTaskResponse CreateImportTask(Models\CreateImportTaskRequest $req) 该接口（CreateImportTask）用于创建导入任务
 * @method Models\CreateInternalTableResponse CreateInternalTable(Models\CreateInternalTableRequest $req) 创建托管存储内表（该接口已废弃）
 * @method Models\CreateNotebookSessionResponse CreateNotebookSession(Models\CreateNotebookSessionRequest $req) 本接口（CreateNotebookSession）用于创建交互式session（notebook）
 * @method Models\CreateNotebookSessionStatementResponse CreateNotebookSessionStatement(Models\CreateNotebookSessionStatementRequest $req) 本接口（CreateNotebookSessionStatement）用于在session中执行代码片段
 * @method Models\CreateNotebookSessionStatementSupportBatchSQLResponse CreateNotebookSessionStatementSupportBatchSQL(Models\CreateNotebookSessionStatementSupportBatchSQLRequest $req) 本接口（CreateNotebookSessionStatementSupportBatchSQL）用于创建交互式session并执行SQL任务
 * @method Models\CreateResultDownloadResponse CreateResultDownload(Models\CreateResultDownloadRequest $req) 创建查询结果下载任务
 * @method Models\CreateScriptResponse CreateScript(Models\CreateScriptRequest $req) 该接口（CreateScript）用于创建sql脚本。
 * @method Models\CreateSparkAppResponse CreateSparkApp(Models\CreateSparkAppRequest $req) 创建spark作业
 * @method Models\CreateSparkAppTaskResponse CreateSparkAppTask(Models\CreateSparkAppTaskRequest $req) 启动Spark作业
 * @method Models\CreateSparkSessionBatchSQLResponse CreateSparkSessionBatchSQL(Models\CreateSparkSessionBatchSQLRequest $req) 本接口（CreateSparkSessionBatchSQL）用于向Spark作业引擎提交Spark SQL批任务。
 * @method Models\CreateStoreLocationResponse CreateStoreLocation(Models\CreateStoreLocationRequest $req) 该接口（CreateStoreLocation）新增或覆盖计算结果存储位置。
 * @method Models\CreateTableResponse CreateTable(Models\CreateTableRequest $req) 本接口（CreateTable）用于生成建表SQL。
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 本接口（CreateTask）用于创建并执行SQL任务。（推荐使用CreateTasks接口）
 * @method Models\CreateTasksResponse CreateTasks(Models\CreateTasksRequest $req) 本接口（CreateTasks），用于批量创建并执行SQL任务
 * @method Models\CreateTasksInOrderResponse CreateTasksInOrder(Models\CreateTasksInOrderRequest $req) 按顺序创建任务（已经废弃，后期不再维护，请使用接口CreateTasks）
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 创建用户
 * @method Models\CreateWorkGroupResponse CreateWorkGroup(Models\CreateWorkGroupRequest $req) 创建工作组
 * @method Models\DeleteDataEngineResponse DeleteDataEngine(Models\DeleteDataEngineRequest $req) 删除数据引擎
 * @method Models\DeleteNotebookSessionResponse DeleteNotebookSession(Models\DeleteNotebookSessionRequest $req) 本接口（DeleteNotebookSession）用于删除交互式session（notebook）
 * @method Models\DeleteScriptResponse DeleteScript(Models\DeleteScriptRequest $req) 该接口（DeleteScript）用于删除sql脚本。
 * @method Models\DeleteSparkAppResponse DeleteSparkApp(Models\DeleteSparkAppRequest $req) 删除spark作业
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 删除用户
 * @method Models\DeleteUsersFromWorkGroupResponse DeleteUsersFromWorkGroup(Models\DeleteUsersFromWorkGroupRequest $req) 从工作组中删除用户
 * @method Models\DeleteWorkGroupResponse DeleteWorkGroup(Models\DeleteWorkGroupRequest $req) 删除工作组
 * @method Models\DescribeDMSDatabaseResponse DescribeDMSDatabase(Models\DescribeDMSDatabaseRequest $req) DMS元数据获取库
 * @method Models\DescribeDMSPartitionsResponse DescribeDMSPartitions(Models\DescribeDMSPartitionsRequest $req) DMS元数据获取分区
 * @method Models\DescribeDMSTableResponse DescribeDMSTable(Models\DescribeDMSTableRequest $req) DMS元数据获取表
 * @method Models\DescribeDMSTablesResponse DescribeDMSTables(Models\DescribeDMSTablesRequest $req) DMS元数据获取表列表
 * @method Models\DescribeDataEngineResponse DescribeDataEngine(Models\DescribeDataEngineRequest $req) 本接口根据名称用于获取数据引擎详细信息
 * @method Models\DescribeDataEngineImageVersionsResponse DescribeDataEngineImageVersions(Models\DescribeDataEngineImageVersionsRequest $req) 本接口（DescribeDataEngineImageVersions）用于获取独享集群大版本镜像列表。
 * @method Models\DescribeDataEnginePythonSparkImagesResponse DescribeDataEnginePythonSparkImages(Models\DescribeDataEnginePythonSparkImagesRequest $req) 本接口（DescribeDataEnginePythonSparkImages）用于获取PYSPARK镜像列表
 * @method Models\DescribeDataEnginesResponse DescribeDataEngines(Models\DescribeDataEnginesRequest $req) 本接口（DescribeDataEngines）用于查询DataEngines信息列表
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口（DescribeDatabases）用于查询数据库列表。
 * @method Models\DescribeDatasourceConnectionResponse DescribeDatasourceConnection(Models\DescribeDatasourceConnectionRequest $req) 本接口（DescribeDatasourceConnection）用于查询数据源信息
 * @method Models\DescribeEngineUsageInfoResponse DescribeEngineUsageInfo(Models\DescribeEngineUsageInfoRequest $req) 本接口根据引擎ID查询数据引擎资源使用情况
 * @method Models\DescribeForbiddenTableProResponse DescribeForbiddenTablePro(Models\DescribeForbiddenTableProRequest $req) 本接口（DescribeForbiddenTablePro）用于查询被禁用的表属性列表（新）
 * @method Models\DescribeLakeFsDirSummaryResponse DescribeLakeFsDirSummary(Models\DescribeLakeFsDirSummaryRequest $req) 查询托管存储指定目录的Summary
 * @method Models\DescribeLakeFsInfoResponse DescribeLakeFsInfo(Models\DescribeLakeFsInfoRequest $req) 查询用户的托管存储信息
 * @method Models\DescribeNotebookSessionResponse DescribeNotebookSession(Models\DescribeNotebookSessionRequest $req) 本接口（DescribeNotebookSession）用于查询交互式 session详情信息
 * @method Models\DescribeNotebookSessionLogResponse DescribeNotebookSessionLog(Models\DescribeNotebookSessionLogRequest $req) 本接口（DescribeNotebookSessionLog）用于查询交互式 session日志
 * @method Models\DescribeNotebookSessionStatementResponse DescribeNotebookSessionStatement(Models\DescribeNotebookSessionStatementRequest $req) 本接口（DescribeNotebookSessionStatement）用于查询session 中执行任务的详情
 * @method Models\DescribeNotebookSessionStatementSqlResultResponse DescribeNotebookSessionStatementSqlResult(Models\DescribeNotebookSessionStatementSqlResultRequest $req) 本接口（DescribeNotebookSessionStatementSqlResult）用于获取statement运行结果。
 * @method Models\DescribeNotebookSessionStatementsResponse DescribeNotebookSessionStatements(Models\DescribeNotebookSessionStatementsRequest $req) 本接口（DescribeNotebookSessionStatements）用于查询Session中执行的任务列表
 * @method Models\DescribeNotebookSessionsResponse DescribeNotebookSessions(Models\DescribeNotebookSessionsRequest $req) 本接口（DescribeNotebookSessions）用于查询交互式 session列表
 * @method Models\DescribeResultDownloadResponse DescribeResultDownload(Models\DescribeResultDownloadRequest $req) 查询结果下载任务
 * @method Models\DescribeScriptsResponse DescribeScripts(Models\DescribeScriptsRequest $req) 该接口（DescribeScripts）用于查询SQL脚本列表
 * @method Models\DescribeSparkAppJobResponse DescribeSparkAppJob(Models\DescribeSparkAppJobRequest $req) 查询spark作业信息
 * @method Models\DescribeSparkAppJobsResponse DescribeSparkAppJobs(Models\DescribeSparkAppJobsRequest $req) 查询spark作业列表
 * @method Models\DescribeSparkAppTasksResponse DescribeSparkAppTasks(Models\DescribeSparkAppTasksRequest $req) 查询Spark作业的运行任务列表
 * @method Models\DescribeSparkSessionBatchSQLResponse DescribeSparkSessionBatchSQL(Models\DescribeSparkSessionBatchSQLRequest $req) 本接口（DescribeSparkSessionBatchSQL）用于查询Spark SQL批任务运行状态
 * @method Models\DescribeSparkSessionBatchSqlLogResponse DescribeSparkSessionBatchSqlLog(Models\DescribeSparkSessionBatchSqlLogRequest $req) 本接口（DescribeSparkSessionBatchSqlLog）用于查询Spark SQL批任务日志
 * @method Models\DescribeStoreLocationResponse DescribeStoreLocation(Models\DescribeStoreLocationRequest $req) 查询计算结果存储位置。
 * @method Models\DescribeTableResponse DescribeTable(Models\DescribeTableRequest $req) 本接口（DescribeTable），用于查询单个表的详细信息。
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 本接口（DescribeTables）用于查询数据表列表。
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) 查询任务结果
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 该接口（DescribleTasks）用于查询任务列表
 * @method Models\DescribeUserDataEngineConfigResponse DescribeUserDataEngineConfig(Models\DescribeUserDataEngineConfigRequest $req) 查询用户自定义引擎参数
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) 获取用户详细信息
 * @method Models\DescribeUserRolesResponse DescribeUserRoles(Models\DescribeUserRolesRequest $req) 列举用户角色信息
 * @method Models\DescribeUserTypeResponse DescribeUserType(Models\DescribeUserTypeRequest $req) 获取用户类型
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) 获取用户列表信息
 * @method Models\DescribeViewsResponse DescribeViews(Models\DescribeViewsRequest $req) 本接口（DescribeViews）用于查询数据视图列表。
 * @method Models\DescribeWorkGroupInfoResponse DescribeWorkGroupInfo(Models\DescribeWorkGroupInfoRequest $req) 获取工作组详细信息
 * @method Models\DescribeWorkGroupsResponse DescribeWorkGroups(Models\DescribeWorkGroupsRequest $req) 获取工作组列表
 * @method Models\DetachUserPolicyResponse DetachUserPolicy(Models\DetachUserPolicyRequest $req) 解绑用户鉴权策略
 * @method Models\DetachWorkGroupPolicyResponse DetachWorkGroupPolicy(Models\DetachWorkGroupPolicyRequest $req) 解绑工作组鉴权策略
 * @method Models\DropDMSDatabaseResponse DropDMSDatabase(Models\DropDMSDatabaseRequest $req) DMS元数据删除库
 * @method Models\DropDMSPartitionsResponse DropDMSPartitions(Models\DropDMSPartitionsRequest $req) DMS元数据删除分区
 * @method Models\DropDMSTableResponse DropDMSTable(Models\DropDMSTableRequest $req) DMS元数据删除表
 * @method Models\GenerateCreateMangedTableSqlResponse GenerateCreateMangedTableSql(Models\GenerateCreateMangedTableSqlRequest $req) 生成创建托管表语句
 * @method Models\ListTaskJobLogDetailResponse ListTaskJobLogDetail(Models\ListTaskJobLogDetailRequest $req) 本接口（ListTaskJobLogDetail）用于获取spark 作业任务日志详情
 * @method Models\LockMetaDataResponse LockMetaData(Models\LockMetaDataRequest $req) 元数据锁
 * @method Models\ModifyDataEngineDescriptionResponse ModifyDataEngineDescription(Models\ModifyDataEngineDescriptionRequest $req) 修改引擎描述信息
 * @method Models\ModifyGovernEventRuleResponse ModifyGovernEventRule(Models\ModifyGovernEventRuleRequest $req) 修改数据治理事件阈值
 * @method Models\ModifySparkAppResponse ModifySparkApp(Models\ModifySparkAppRequest $req) 更新spark作业
 * @method Models\ModifySparkAppBatchResponse ModifySparkAppBatch(Models\ModifySparkAppBatchRequest $req) 本接口（ModifySparkAppBatch）用于批量修改Spark作业参数配置
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 修改用户信息
 * @method Models\ModifyUserTypeResponse ModifyUserType(Models\ModifyUserTypeRequest $req) 修改用户类型。只有管理员用户能够调用该接口进行操作
 * @method Models\ModifyWorkGroupResponse ModifyWorkGroup(Models\ModifyWorkGroupRequest $req) 修改工作组信息
 * @method Models\QueryResultResponse QueryResult(Models\QueryResultRequest $req) 获取任务结果查询
 * @method Models\RenewDataEngineResponse RenewDataEngine(Models\RenewDataEngineRequest $req) 续费数据引擎
 * @method Models\ReportHeartbeatMetaDataResponse ReportHeartbeatMetaData(Models\ReportHeartbeatMetaDataRequest $req) 上报元数据心跳
 * @method Models\RestartDataEngineResponse RestartDataEngine(Models\RestartDataEngineRequest $req) 重启引擎
 * @method Models\RollbackDataEngineImageResponse RollbackDataEngineImage(Models\RollbackDataEngineImageRequest $req) 回滚引擎镜像版本
 * @method Models\SuspendResumeDataEngineResponse SuspendResumeDataEngine(Models\SuspendResumeDataEngineRequest $req) 本接口用于控制挂起或启动数据引擎
 * @method Models\SwitchDataEngineResponse SwitchDataEngine(Models\SwitchDataEngineRequest $req) 切换主备集群
 * @method Models\SwitchDataEngineImageResponse SwitchDataEngineImage(Models\SwitchDataEngineImageRequest $req) 切换引擎镜像版本
 * @method Models\UnbindWorkGroupsFromUserResponse UnbindWorkGroupsFromUser(Models\UnbindWorkGroupsFromUserRequest $req) 解绑用户上的用户组
 * @method Models\UnlockMetaDataResponse UnlockMetaData(Models\UnlockMetaDataRequest $req) 元数据解锁
 * @method Models\UpdateDataEngineResponse UpdateDataEngine(Models\UpdateDataEngineRequest $req) 本接口用于更新数据引擎配置
 * @method Models\UpdateDataEngineConfigResponse UpdateDataEngineConfig(Models\UpdateDataEngineConfigRequest $req) 用户某种操作，触发引擎配置修改
 * @method Models\UpdateRowFilterResponse UpdateRowFilter(Models\UpdateRowFilterRequest $req) 此接口用于更新行过滤规则。注意只能更新过滤规则，不能更新规格对象catalog，database和table。
 * @method Models\UpdateUserDataEngineConfigResponse UpdateUserDataEngineConfig(Models\UpdateUserDataEngineConfigRequest $req) 修改用户引擎自定义配置
 * @method Models\UpgradeDataEngineImageResponse UpgradeDataEngineImage(Models\UpgradeDataEngineImageRequest $req) 升级引擎镜像
 */

class DlcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dlc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dlc";

    /**
     * @var string
     */
    protected $version = "2021-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("dlc")."\\"."V20210125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
