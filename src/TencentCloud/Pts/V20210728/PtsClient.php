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

namespace TencentCloud\Pts\V20210728;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Pts\V20210728\Models as Models;

/**
 * @method Models\AbortCronJobsResponse AbortCronJobs(Models\AbortCronJobsRequest $req) 停止定时任务
 * @method Models\AbortJobResponse AbortJob(Models\AbortJobRequest $req) 停止任务
 * @method Models\AdjustJobSpeedResponse AdjustJobSpeed(Models\AdjustJobSpeedRequest $req) 调整任务的目标RPS
 * @method Models\CopyScenarioResponse CopyScenario(Models\CopyScenarioRequest $req) 复制场景
 * @method Models\CreateAlertChannelResponse CreateAlertChannel(Models\CreateAlertChannelRequest $req) 创建告警通知接收组
 * @method Models\CreateCronJobResponse CreateCronJob(Models\CreateCronJobRequest $req) 创建定时任务
 * @method Models\CreateFileResponse CreateFile(Models\CreateFileRequest $req) 创建文件
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建项目
 * @method Models\CreateScenarioResponse CreateScenario(Models\CreateScenarioRequest $req) 创建场景
 * @method Models\DeleteAlertChannelResponse DeleteAlertChannel(Models\DeleteAlertChannelRequest $req) 删除告警通知接收组
 * @method Models\DeleteCronJobsResponse DeleteCronJobs(Models\DeleteCronJobsRequest $req) 删除定时任务
 * @method Models\DeleteFilesResponse DeleteFiles(Models\DeleteFilesRequest $req) 删除文件
 * @method Models\DeleteJobsResponse DeleteJobs(Models\DeleteJobsRequest $req) 删除任务
 * @method Models\DeleteProjectsResponse DeleteProjects(Models\DeleteProjectsRequest $req) 删除项目
 * @method Models\DeleteScenariosResponse DeleteScenarios(Models\DeleteScenariosRequest $req) 删除场景
 * @method Models\DescribeAlertChannelsResponse DescribeAlertChannels(Models\DescribeAlertChannelsRequest $req) 查询告警通知接收组
 * @method Models\DescribeAlertRecordsResponse DescribeAlertRecords(Models\DescribeAlertRecordsRequest $req) 返回告警历史项的列表
 * @method Models\DescribeAvailableMetricsResponse DescribeAvailableMetrics(Models\DescribeAvailableMetricsRequest $req) 查询系统支持的指标
 * @method Models\DescribeCheckSummaryResponse DescribeCheckSummary(Models\DescribeCheckSummaryRequest $req) 查询检查点汇总信息
 * @method Models\DescribeCronJobsResponse DescribeCronJobs(Models\DescribeCronJobsRequest $req) 列出定时任务，非必填数组为空就默认全选
 * @method Models\DescribeErrorSummaryResponse DescribeErrorSummary(Models\DescribeErrorSummaryRequest $req) 查询错误详情汇总信息
 * @method Models\DescribeFilesResponse DescribeFiles(Models\DescribeFilesRequest $req) 查询文件列表
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 查询任务列表
 * @method Models\DescribeLabelValuesResponse DescribeLabelValues(Models\DescribeLabelValuesRequest $req) 查询标签内容
 * @method Models\DescribeMetricLabelWithValuesResponse DescribeMetricLabelWithValues(Models\DescribeMetricLabelWithValuesRequest $req) 查询指标所有的label及values值
 * @method Models\DescribeNormalLogsResponse DescribeNormalLogs(Models\DescribeNormalLogsRequest $req) 压测过程日志日志包括引擎输出日志及用户输出日志
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 查询项目列表
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 查询地域列表
 * @method Models\DescribeRequestSummaryResponse DescribeRequestSummary(Models\DescribeRequestSummaryRequest $req) 查询请求汇总信息
 * @method Models\DescribeSampleBatchQueryResponse DescribeSampleBatchQuery(Models\DescribeSampleBatchQueryRequest $req) 批量查询指标，返回固定时间点指标内容
 * @method Models\DescribeSampleLogsResponse DescribeSampleLogs(Models\DescribeSampleLogsRequest $req) 查询采样日志
 * @method Models\DescribeSampleMatrixBatchQueryResponse DescribeSampleMatrixBatchQuery(Models\DescribeSampleMatrixBatchQueryRequest $req) 批量查询指标矩阵
 * @method Models\DescribeSampleMatrixQueryResponse DescribeSampleMatrixQuery(Models\DescribeSampleMatrixQueryRequest $req) 查询指标矩阵
 * @method Models\DescribeSampleQueryResponse DescribeSampleQuery(Models\DescribeSampleQueryRequest $req) 查询指标，返回固定时间点指标内容
 * @method Models\DescribeScenarioWithJobsResponse DescribeScenarioWithJobs(Models\DescribeScenarioWithJobsRequest $req) 查询场景配置并附带已经执行的任务内容
 * @method Models\DescribeScenariosResponse DescribeScenarios(Models\DescribeScenariosRequest $req) 查询场景列表
 * @method Models\GenerateTmpKeyResponse GenerateTmpKey(Models\GenerateTmpKeyRequest $req) 生成临时COS凭证
 * @method Models\RestartCronJobsResponse RestartCronJobs(Models\RestartCronJobsRequest $req) 重启状态为已中止的定时任务
 * @method Models\StartJobResponse StartJob(Models\StartJobRequest $req) 创建并启动任务
 * @method Models\UpdateCronJobResponse UpdateCronJob(Models\UpdateCronJobRequest $req) 更新定时任务
 * @method Models\UpdateFileScenarioRelationResponse UpdateFileScenarioRelation(Models\UpdateFileScenarioRelationRequest $req) 更新关联文件场景
 * @method Models\UpdateJobResponse UpdateJob(Models\UpdateJobRequest $req) 更新任务
 * @method Models\UpdateProjectResponse UpdateProject(Models\UpdateProjectRequest $req) 更新项目
 * @method Models\UpdateScenarioResponse UpdateScenario(Models\UpdateScenarioRequest $req) 更新场景
 */

class PtsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "pts.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "pts";

    /**
     * @var string
     */
    protected $version = "2021-07-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("pts")."\\"."V20210728\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
