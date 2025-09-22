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

namespace TencentCloud\Wedata\V20250806;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wedata\V20250806\Models as Models;

/**
 * @method Models\CreateCodeFileResponse CreateCodeFile(Models\CreateCodeFileRequest $req) 新建代码文件
 * @method Models\CreateCodeFolderResponse CreateCodeFolder(Models\CreateCodeFolderRequest $req) 新建代码文件夹
 * @method Models\CreateDataBackfillPlanResponse CreateDataBackfillPlan(Models\CreateDataBackfillPlanRequest $req) 创建数据补录计划
 * @method Models\CreateOpsAlarmRuleResponse CreateOpsAlarmRule(Models\CreateOpsAlarmRuleRequest $req) 设置告警规则
 * @method Models\CreateResourceFileResponse CreateResourceFile(Models\CreateResourceFileRequest $req) 创建资源文件
 * @method Models\CreateResourceFolderResponse CreateResourceFolder(Models\CreateResourceFolderRequest $req) 创建资源文件文件夹
 * @method Models\CreateSQLFolderResponse CreateSQLFolder(Models\CreateSQLFolderRequest $req) 创建数据探索脚本文件夹
 * @method Models\CreateSQLScriptResponse CreateSQLScript(Models\CreateSQLScriptRequest $req) 新增SQL脚本
 * @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 创建任务接口
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) 创建工作流
 * @method Models\CreateWorkflowFolderResponse CreateWorkflowFolder(Models\CreateWorkflowFolderRequest $req) 创建文件夹
 * @method Models\DeleteCodeFileResponse DeleteCodeFile(Models\DeleteCodeFileRequest $req) 删除代码文件
 * @method Models\DeleteCodeFolderResponse DeleteCodeFolder(Models\DeleteCodeFolderRequest $req) 数据探索删除文件夹
 * @method Models\DeleteOpsAlarmRuleResponse DeleteOpsAlarmRule(Models\DeleteOpsAlarmRuleRequest $req) 删除告警规则
 * @method Models\DeleteResourceFileResponse DeleteResourceFile(Models\DeleteResourceFileRequest $req) 资源管理-删除资源文件
 * @method Models\DeleteResourceFolderResponse DeleteResourceFolder(Models\DeleteResourceFolderRequest $req) 删除资源文件文件夹
 * @method Models\DeleteSQLFolderResponse DeleteSQLFolder(Models\DeleteSQLFolderRequest $req) 删除SQL文件夹
 * @method Models\DeleteSQLScriptResponse DeleteSQLScript(Models\DeleteSQLScriptRequest $req) 删除探索脚本
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) 删除编排空间任务
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) 删除工作流
 * @method Models\DeleteWorkflowFolderResponse DeleteWorkflowFolder(Models\DeleteWorkflowFolderRequest $req) 删除数据开发文件夹
 * @method Models\GetAlarmMessageResponse GetAlarmMessage(Models\GetAlarmMessageRequest $req) 查询告警信息详情
 * @method Models\GetCodeFileResponse GetCodeFile(Models\GetCodeFileRequest $req) 查看代码文件详情
 * @method Models\GetOpsAlarmRuleResponse GetOpsAlarmRule(Models\GetOpsAlarmRuleRequest $req) 根据告警规则id/名称查询单个告警规则信息
 * @method Models\GetOpsAsyncJobResponse GetOpsAsyncJob(Models\GetOpsAsyncJobRequest $req) 查询运维中心异步操作详情
 * @method Models\GetOpsTaskResponse GetOpsTask(Models\GetOpsTaskRequest $req) 获取任务详情
 * @method Models\GetOpsTaskCodeResponse GetOpsTaskCode(Models\GetOpsTaskCodeRequest $req) 获取任务代码
 * @method Models\GetOpsWorkflowResponse GetOpsWorkflow(Models\GetOpsWorkflowRequest $req) 根据工作流id，获取工作流调度详情。
 * @method Models\GetResourceFileResponse GetResourceFile(Models\GetResourceFileRequest $req) 获取资源文件详情
 * @method Models\GetSQLScriptResponse GetSQLScript(Models\GetSQLScriptRequest $req) 查询脚本详情
 * @method Models\GetTaskResponse GetTask(Models\GetTaskRequest $req) 创建任务接口
 * @method Models\GetTaskCodeResponse GetTaskCode(Models\GetTaskCodeRequest $req) 获取任务代码
 * @method Models\GetTaskInstanceResponse GetTaskInstance(Models\GetTaskInstanceRequest $req) 调度实例详情
 * @method Models\GetTaskInstanceLogResponse GetTaskInstanceLog(Models\GetTaskInstanceLogRequest $req) 获取实例列表
 * @method Models\GetTaskVersionResponse GetTaskVersion(Models\GetTaskVersionRequest $req) 拉取任务版本列表
 * @method Models\GetWorkflowResponse GetWorkflow(Models\GetWorkflowRequest $req) 获取工作流信息
 * @method Models\KillTaskInstancesAsyncResponse KillTaskInstancesAsync(Models\KillTaskInstancesAsyncRequest $req) 实例批量终止操作-异步操作
 * @method Models\ListAlarmMessagesResponse ListAlarmMessages(Models\ListAlarmMessagesRequest $req) 获取告警信息列表
 * @method Models\ListCodeFolderContentsResponse ListCodeFolderContents(Models\ListCodeFolderContentsRequest $req) 获取文件夹内容
 * @method Models\ListDataBackfillInstancesResponse ListDataBackfillInstances(Models\ListDataBackfillInstancesRequest $req) 获取单次补录的所有实例详情
 * @method Models\ListDownstreamOpsTasksResponse ListDownstreamOpsTasks(Models\ListDownstreamOpsTasksRequest $req) 获取任务直接下游详情
 * @method Models\ListDownstreamTaskInstancesResponse ListDownstreamTaskInstances(Models\ListDownstreamTaskInstancesRequest $req) 获取实例直接上游
 * @method Models\ListDownstreamTasksResponse ListDownstreamTasks(Models\ListDownstreamTasksRequest $req) 获取任务直接下游详情
 * @method Models\ListOpsAlarmRulesResponse ListOpsAlarmRules(Models\ListOpsAlarmRulesRequest $req) 查询告警规则列表
 * @method Models\ListOpsTasksResponse ListOpsTasks(Models\ListOpsTasksRequest $req) 根据项目id获取任务列表
 * @method Models\ListOpsWorkflowsResponse ListOpsWorkflows(Models\ListOpsWorkflowsRequest $req) 根据项目ID获取项目下工作流
 * @method Models\ListResourceFilesResponse ListResourceFiles(Models\ListResourceFilesRequest $req) 获取资源文件列表
 * @method Models\ListResourceFoldersResponse ListResourceFolders(Models\ListResourceFoldersRequest $req) 查询资源文件文件夹列表
 * @method Models\ListSQLFolderContentsResponse ListSQLFolderContents(Models\ListSQLFolderContentsRequest $req) 查询数据探索文件夹树，包括文件夹下的脚本
 * @method Models\ListSQLScriptRunsResponse ListSQLScriptRuns(Models\ListSQLScriptRunsRequest $req) 查询SQL运行记录
 * @method Models\ListTaskInstanceExecutionsResponse ListTaskInstanceExecutions(Models\ListTaskInstanceExecutionsRequest $req) 调度实例详情
 * @method Models\ListTaskInstancesResponse ListTaskInstances(Models\ListTaskInstancesRequest $req) 获取实例列表
 * @method Models\ListTaskVersionsResponse ListTaskVersions(Models\ListTaskVersionsRequest $req) 任务保存版本列表
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) 查询任务分页信息
 * @method Models\ListUpstreamOpsTasksResponse ListUpstreamOpsTasks(Models\ListUpstreamOpsTasksRequest $req) 获取任务直接上游
 * @method Models\ListUpstreamTaskInstancesResponse ListUpstreamTaskInstances(Models\ListUpstreamTaskInstancesRequest $req) 获取实例直接上游
 * @method Models\ListUpstreamTasksResponse ListUpstreamTasks(Models\ListUpstreamTasksRequest $req) 获取任务直接上游
 * @method Models\ListWorkflowFoldersResponse ListWorkflowFolders(Models\ListWorkflowFoldersRequest $req) 查询文件夹列表
 * @method Models\ListWorkflowsResponse ListWorkflows(Models\ListWorkflowsRequest $req) 查询工作流列表
 * @method Models\PauseOpsTasksAsyncResponse PauseOpsTasksAsync(Models\PauseOpsTasksAsyncRequest $req) 异步批量暂停任务
 * @method Models\RerunTaskInstancesAsyncResponse RerunTaskInstancesAsync(Models\RerunTaskInstancesAsyncRequest $req) 实例批量重跑-异步
 * @method Models\RunSQLScriptResponse RunSQLScript(Models\RunSQLScriptRequest $req) 运行SQL脚本
 * @method Models\SetSuccessTaskInstancesAsyncResponse SetSuccessTaskInstancesAsync(Models\SetSuccessTaskInstancesAsyncRequest $req) 实例批量置成功-异步
 * @method Models\StopOpsTasksAsyncResponse StopOpsTasksAsync(Models\StopOpsTasksAsyncRequest $req) 异步批量下线任务
 * @method Models\StopSQLScriptRunResponse StopSQLScriptRun(Models\StopSQLScriptRunRequest $req) 停止运行SQL脚本
 * @method Models\SubmitTaskResponse SubmitTask(Models\SubmitTaskRequest $req) 提交任务。
 * @method Models\UpdateCodeFileResponse UpdateCodeFile(Models\UpdateCodeFileRequest $req) 更新代码文件
 * @method Models\UpdateCodeFolderResponse UpdateCodeFolder(Models\UpdateCodeFolderRequest $req) 重命名代码文件夹
 * @method Models\UpdateOpsAlarmRuleResponse UpdateOpsAlarmRule(Models\UpdateOpsAlarmRuleRequest $req) 修改告警规则
 * @method Models\UpdateOpsTasksOwnerResponse UpdateOpsTasksOwner(Models\UpdateOpsTasksOwnerRequest $req) 修改任务负责人
 * @method Models\UpdateResourceFileResponse UpdateResourceFile(Models\UpdateResourceFileRequest $req) 更新资源文件
 * @method Models\UpdateResourceFolderResponse UpdateResourceFolder(Models\UpdateResourceFolderRequest $req) 创建资源文件文件夹
 * @method Models\UpdateSQLFolderResponse UpdateSQLFolder(Models\UpdateSQLFolderRequest $req) 重命名SQL文件夹
 * @method Models\UpdateSQLScriptResponse UpdateSQLScript(Models\UpdateSQLScriptRequest $req) 保存探索脚本内容
 * @method Models\UpdateTaskResponse UpdateTask(Models\UpdateTaskRequest $req) 创建任务接口
 * @method Models\UpdateWorkflowResponse UpdateWorkflow(Models\UpdateWorkflowRequest $req) 更新工作流（包括工作流基本信息与工作流参数）
 * @method Models\UpdateWorkflowFolderResponse UpdateWorkflowFolder(Models\UpdateWorkflowFolderRequest $req) 创建文件夹
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
    protected $version = "2025-08-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("wedata")."\\"."V20250806\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
