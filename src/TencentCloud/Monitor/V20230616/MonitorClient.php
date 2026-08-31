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

namespace TencentCloud\Monitor\V20230616;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Monitor\V20230616\Models as Models;

/**
 * @method Models\CancelAIWorkbenchChatResponse CancelAIWorkbenchChat(Models\CancelAIWorkbenchChatRequest $req) 取消对话执行
 * @method Models\CreateAIWorkbenchAgentResponse CreateAIWorkbenchAgent(Models\CreateAIWorkbenchAgentRequest $req) 创建 Agent
 * @method Models\CreateAIWorkbenchTaskResponse CreateAIWorkbenchTask(Models\CreateAIWorkbenchTaskRequest $req) 创建任务
 * @method Models\CreateDispenseExternalRuleResponse CreateDispenseExternalRule(Models\CreateDispenseExternalRuleRequest $req) 转发接口：创建转发规则
 * @method Models\CreateNoticeContentTmplResponse CreateNoticeContentTmpl(Models\CreateNoticeContentTmplRequest $req) 创建自定义通知内容模板
 * @method Models\DeleteAIWorkbenchAgentResponse DeleteAIWorkbenchAgent(Models\DeleteAIWorkbenchAgentRequest $req) 删除 Agent
 * @method Models\DeleteAIWorkbenchTaskResponse DeleteAIWorkbenchTask(Models\DeleteAIWorkbenchTaskRequest $req) 删除任务
 * @method Models\DeleteDispenseExternalRuleResponse DeleteDispenseExternalRule(Models\DeleteDispenseExternalRuleRequest $req) 规则删除接口
 * @method Models\DeleteNoticeContentTmplsResponse DeleteNoticeContentTmpls(Models\DeleteNoticeContentTmplsRequest $req) 删除通知内容模板
 * @method Models\DescribeAIWorkbenchAgentResponse DescribeAIWorkbenchAgent(Models\DescribeAIWorkbenchAgentRequest $req) 查询 Agent 详情
 * @method Models\DescribeAIWorkbenchArtifactResponse DescribeAIWorkbenchArtifact(Models\DescribeAIWorkbenchArtifactRequest $req) 查询制品详情
 * @method Models\DescribeAIWorkbenchExecutionResponse DescribeAIWorkbenchExecution(Models\DescribeAIWorkbenchExecutionRequest $req) 查询执行详情
 * @method Models\DescribeAIWorkbenchSREDigitalTwinTaskListResponse DescribeAIWorkbenchSREDigitalTwinTaskList(Models\DescribeAIWorkbenchSREDigitalTwinTaskListRequest $req) 查询AI工作台SRE数字分身任务列表
 * @method Models\DescribeAIWorkbenchSREDigitalTwinWorkLogDetailResponse DescribeAIWorkbenchSREDigitalTwinWorkLogDetail(Models\DescribeAIWorkbenchSREDigitalTwinWorkLogDetailRequest $req) 查询AI工作台SRE数字分身工作日志详细信息
 * @method Models\DescribeAIWorkbenchSREDigitalTwinWorkLogListResponse DescribeAIWorkbenchSREDigitalTwinWorkLogList(Models\DescribeAIWorkbenchSREDigitalTwinWorkLogListRequest $req) 查询AI工作台SRE数字分身任务工作日志列表
 * @method Models\DescribeAIWorkbenchSessionResponse DescribeAIWorkbenchSession(Models\DescribeAIWorkbenchSessionRequest $req) 查询会话详情
 * @method Models\DescribeAIWorkbenchSkillResponse DescribeAIWorkbenchSkill(Models\DescribeAIWorkbenchSkillRequest $req) 查询技能详情
 * @method Models\DescribeAlarmNotifyHistoriesResponse DescribeAlarmNotifyHistories(Models\DescribeAlarmNotifyHistoriesRequest $req) 按需查询告警的通知历史
 * @method Models\DescribeDispenseExternalRuleResponse DescribeDispenseExternalRule(Models\DescribeDispenseExternalRuleRequest $req) 转发规则查询接口
 * @method Models\DescribeDispenseExternalRuleListResponse DescribeDispenseExternalRuleList(Models\DescribeDispenseExternalRuleListRequest $req) 查询所有列表
 * @method Models\DescribeDispenseRegionResponse DescribeDispenseRegion(Models\DescribeDispenseRegionRequest $req) 转发地域列表查询接口
 * @method Models\DescribeExtMetricResponse DescribeExtMetric(Models\DescribeExtMetricRequest $req) 查询对外指标
 * @method Models\DescribeExtNamespaceResponse DescribeExtNamespace(Models\DescribeExtNamespaceRequest $req) 转发查询对外命名空间接口
 * @method Models\DescribeKafkaResponse DescribeKafka(Models\DescribeKafkaRequest $req) 转发kafka连通性测试
 * @method Models\DescribeNoticeContentTmplResponse DescribeNoticeContentTmpl(Models\DescribeNoticeContentTmplRequest $req) 根据查询条件获取自定义通知内容模板，若所有查询条件空，则获取账号下所有模板
 * @method Models\GetAIWorkbenchArtifactDownloadURLResponse GetAIWorkbenchArtifactDownloadURL(Models\GetAIWorkbenchArtifactDownloadURLRequest $req) 获取AI工作台制品的下载地址
 * @method Models\ListAIWorkbenchAgentsResponse ListAIWorkbenchAgents(Models\ListAIWorkbenchAgentsRequest $req) 查询 Agent 列表
 * @method Models\ListAIWorkbenchArtifactsResponse ListAIWorkbenchArtifacts(Models\ListAIWorkbenchArtifactsRequest $req) 查询产物列表
 * @method Models\ListAIWorkbenchExecutionsResponse ListAIWorkbenchExecutions(Models\ListAIWorkbenchExecutionsRequest $req) 查询执行列表
 * @method Models\ListAIWorkbenchMCPsResponse ListAIWorkbenchMCPs(Models\ListAIWorkbenchMCPsRequest $req) 查询 MCP 列表
 * @method Models\ListAIWorkbenchMessagesResponse ListAIWorkbenchMessages(Models\ListAIWorkbenchMessagesRequest $req) 查询消息列表
 * @method Models\ListAIWorkbenchResourceInstancesResponse ListAIWorkbenchResourceInstances(Models\ListAIWorkbenchResourceInstancesRequest $req) 列出资源实例
 * @method Models\ListAIWorkbenchResourceMapsResponse ListAIWorkbenchResourceMaps(Models\ListAIWorkbenchResourceMapsRequest $req) 查询资源地图列表
 * @method Models\ListAIWorkbenchSessionsResponse ListAIWorkbenchSessions(Models\ListAIWorkbenchSessionsRequest $req) 查询会话列表
 * @method Models\ListAIWorkbenchSkillsResponse ListAIWorkbenchSkills(Models\ListAIWorkbenchSkillsRequest $req) 查询技能列表
 * @method Models\ListAIWorkbenchTasksResponse ListAIWorkbenchTasks(Models\ListAIWorkbenchTasksRequest $req) 查询任务列表
 * @method Models\ModifyDispenseExternalRuleResponse ModifyDispenseExternalRule(Models\ModifyDispenseExternalRuleRequest $req) 转发规则更新接口
 * @method Models\ModifyDispenseExternalRuleStatusResponse ModifyDispenseExternalRuleStatus(Models\ModifyDispenseExternalRuleStatusRequest $req) 新增规则开启关闭接口
 * @method Models\ModifyNoticeContentTmplResponse ModifyNoticeContentTmpl(Models\ModifyNoticeContentTmplRequest $req) 修改通知内容模板
 * @method Models\TriggerAIWorkbenchSREDigitalTwinTaskResponse TriggerAIWorkbenchSREDigitalTwinTask(Models\TriggerAIWorkbenchSREDigitalTwinTaskRequest $req) 触发数字分身任务请求
 * @method Models\TriggerAIWorkbenchTaskResponse TriggerAIWorkbenchTask(Models\TriggerAIWorkbenchTaskRequest $req) 手动触发任务
 * @method Models\UpdateAIWorkbenchAgentResponse UpdateAIWorkbenchAgent(Models\UpdateAIWorkbenchAgentRequest $req) 更新 Agent
 */

class MonitorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "monitor";

    /**
     * @var string
     */
    protected $version = "2023-06-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("monitor")."\\"."V20230616\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
