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

namespace TencentCloud\Cat\V20180409;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cat\V20180409\Models as Models;

/**
* @method Models\BindAlarmPolicyResponse BindAlarmPolicy(Models\BindAlarmPolicyRequest $req) 绑定拨测任务和告警策略组
* @method Models\CreateAgentGroupResponse CreateAgentGroup(Models\CreateAgentGroupRequest $req) 添加拨测分组
* @method Models\CreateAlarmPloicyResponse CreateAlarmPloicy(Models\CreateAlarmPloicyRequest $req) 为拨测任务创建告警策略
* @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 创建拨测任务（创建任务并发起验证）

操作提示：
下一步，请通过VerifyCatResult 接口，验证一下拨测验证是否成功。如果成功，则可通过RunTask 接口运行该任务。

* @method Models\CreateTaskExResponse CreateTaskEx(Models\CreateTaskExRequest $req) 创建拨测任务(扩充)
* @method Models\DeleteAgentGroupResponse DeleteAgentGroup(Models\DeleteAgentGroupRequest $req) 删除拨测分组
* @method Models\DeleteTasksResponse DeleteTasks(Models\DeleteTasksRequest $req) 删除多个拨测任务
* @method Models\DescribeAgentGroupResponse DescribeAgentGroup(Models\DescribeAgentGroupRequest $req) 查询拨测分组详情
* @method Models\DescribeAgentGroupsResponse DescribeAgentGroups(Models\DescribeAgentGroupsRequest $req) 查询拨测分组列表
* @method Models\DescribeAgentsResponse DescribeAgents(Models\DescribeAgentsRequest $req) 查询本用户可选的拨测点列表
* @method Models\DescribeAlarmGroupsResponse DescribeAlarmGroups(Models\DescribeAlarmGroupsRequest $req) 查询用户的告警接收组列表
* @method Models\DescribeAlarmTopicResponse DescribeAlarmTopic(Models\DescribeAlarmTopicRequest $req) 查询用户的告警主题列表
* @method Models\DescribeAlarmsResponse DescribeAlarms(Models\DescribeAlarmsRequest $req) 查询拨测告警列表
* @method Models\DescribeAlarmsByTaskResponse DescribeAlarmsByTask(Models\DescribeAlarmsByTaskRequest $req) 按任务查询拨测告警列表
* @method Models\DescribeCatLogsResponse DescribeCatLogs(Models\DescribeCatLogsRequest $req) 查询拨测流水
* @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 查询拨测任务详情
* @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 查询拨测任务信息
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 查询拨测任务列表
* @method Models\DescribeTasksByTypeResponse DescribeTasksByType(Models\DescribeTasksByTypeRequest $req) 按类型查询拨测任务列表
* @method Models\DescribeUserLimitResponse DescribeUserLimit(Models\DescribeUserLimitRequest $req) 获取用户可用资源限制
* @method Models\GetAvailRatioHistoryResponse GetAvailRatioHistory(Models\GetAvailRatioHistoryRequest $req) 获取指定时刻的可用率地图信息
* @method Models\GetDailyAvailRatioResponse GetDailyAvailRatio(Models\GetDailyAvailRatioRequest $req) 获取一天的整体可用率信息
* @method Models\GetRealAvailRatioResponse GetRealAvailRatio(Models\GetRealAvailRatioRequest $req) 获取实时可用率信息
* @method Models\GetRespTimeTrendResponse GetRespTimeTrend(Models\GetRespTimeTrendRequest $req) 查询拨测任务的统计数据
* @method Models\GetRespTimeTrendExResponse GetRespTimeTrendEx(Models\GetRespTimeTrendExRequest $req) 查询拨测任务的走势数据
* @method Models\GetResultSummaryResponse GetResultSummary(Models\GetResultSummaryRequest $req) 获取任务列表的实时数据
* @method Models\GetReturnCodeHistoryResponse GetReturnCodeHistory(Models\GetReturnCodeHistoryRequest $req) 查询拨测任务的历史返回码信息
* @method Models\GetReturnCodeInfoResponse GetReturnCodeInfo(Models\GetReturnCodeInfoRequest $req) 查询拨测任务的返回码统计信息
* @method Models\GetTaskTotalNumberResponse GetTaskTotalNumber(Models\GetTaskTotalNumberRequest $req) 获取AppId下的拨测任务总数
* @method Models\ModifyAgentGroupResponse ModifyAgentGroup(Models\ModifyAgentGroupRequest $req) 修改拨测分组
* @method Models\ModifyAlarmPloicyResponse ModifyAlarmPloicy(Models\ModifyAlarmPloicyRequest $req) 为拨测任务修改告警策略
* @method Models\ModifyTaskResponse ModifyTask(Models\ModifyTaskRequest $req) 修改 拨测任务。
如果验证未成功，请先验证成功。避免修改为失败率100%的拨测任务。

* @method Models\ModifyTaskExResponse ModifyTaskEx(Models\ModifyTaskExRequest $req) 修改拨测任务(扩展)
* @method Models\PauseTaskResponse PauseTask(Models\PauseTaskRequest $req) 暂停拨测任务
* @method Models\RunTaskResponse RunTask(Models\RunTaskRequest $req) 运行拨测任务
* @method Models\VerifyResultResponse VerifyResult(Models\VerifyResultRequest $req) 验证拨测任务，结果验证查询（验证成功的，才建议创建拨测任务）
 */

class CatClient extends AbstractClient
{
    protected $endpoint = "cat.tencentcloudapi.com";

    protected $version = "2018-04-09";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cat")."\\"."V20180409\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
