<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Batch\V20170312;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Batch\V20170312\Models as Models;

/**
* @method Models\CreateComputeEnvResponse CreateComputeEnv(Models\CreateComputeEnvRequest $req) 用于创建计算环境
* @method Models\CreateTaskTemplateResponse CreateTaskTemplate(Models\CreateTaskTemplateRequest $req) 用于创建任务模板
* @method Models\DeleteComputeEnvResponse DeleteComputeEnv(Models\DeleteComputeEnvRequest $req) 用于删除计算环境
* @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) 用于删除作业记录。
删除作业的效果相当于删除作业相关的所有信息。删除成功后，作业相关的所有信息都无法查询。
待删除的作业必须处于完结状态，且其内部包含的所有任务实例也必须处于完结状态，否则会禁止操作。完结状态，是指处于 SUCCEED 或 FAILED 状态。
* @method Models\DeleteTaskTemplatesResponse DeleteTaskTemplates(Models\DeleteTaskTemplatesRequest $req) 用于删除任务模板信息
* @method Models\DescribeAvailableCvmInstanceTypesResponse DescribeAvailableCvmInstanceTypes(Models\DescribeAvailableCvmInstanceTypesRequest $req) 查看可用的CVM机型配置信息
* @method Models\DescribeComputeEnvResponse DescribeComputeEnv(Models\DescribeComputeEnvRequest $req) 用于查询计算环境的详细信息
* @method Models\DescribeComputeEnvActivitiesResponse DescribeComputeEnvActivities(Models\DescribeComputeEnvActivitiesRequest $req) 用于查询计算环境的活动信息
* @method Models\DescribeComputeEnvCreateInfoResponse DescribeComputeEnvCreateInfo(Models\DescribeComputeEnvCreateInfoRequest $req) 查看计算环境的创建信息。
* @method Models\DescribeComputeEnvCreateInfosResponse DescribeComputeEnvCreateInfos(Models\DescribeComputeEnvCreateInfosRequest $req) 用于查看计算环境创建信息列表，包括名称、描述、类型、环境参数、通知及期望节点数等。
* @method Models\DescribeComputeEnvsResponse DescribeComputeEnvs(Models\DescribeComputeEnvsRequest $req) 用于查看计算环境列表
* @method Models\DescribeCvmZoneInstanceConfigInfosResponse DescribeCvmZoneInstanceConfigInfos(Models\DescribeCvmZoneInstanceConfigInfosRequest $req) 获取批量计算可用区机型配置信息
* @method Models\DescribeJobResponse DescribeJob(Models\DescribeJobRequest $req) 用于查看一个作业的详细信息，包括内部任务（Task）和依赖（Dependence）信息。
* @method Models\DescribeJobSubmitInfoResponse DescribeJobSubmitInfo(Models\DescribeJobSubmitInfoRequest $req) 用于查询指定作业的提交信息，其返回内容包括 JobId 和 SubmitJob 接口中作为输入参数的作业提交信息
* @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 用于查询若干个作业的概览信息
* @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 用于查询指定任务的详细信息，包括任务内部的任务实例信息。
* @method Models\DescribeTaskTemplatesResponse DescribeTaskTemplates(Models\DescribeTaskTemplatesRequest $req) 用于查询任务模板信息
* @method Models\ModifyComputeEnvResponse ModifyComputeEnv(Models\ModifyComputeEnvRequest $req) 用于修改计算环境的期望节点数量
* @method Models\ModifyTaskTemplateResponse ModifyTaskTemplate(Models\ModifyTaskTemplateRequest $req) 用于修改任务模板
* @method Models\SubmitJobResponse SubmitJob(Models\SubmitJobRequest $req) 用于提交一个作业
* @method Models\TerminateComputeNodeResponse TerminateComputeNode(Models\TerminateComputeNodeRequest $req) 用于销毁计算节点。
对于状态为CREATED、CREATION_FAILED、RUNNING和ABNORMAL的节点，允许销毁处理。
* @method Models\TerminateComputeNodesResponse TerminateComputeNodes(Models\TerminateComputeNodesRequest $req) 用于批量销毁计算节点，不允许重复销毁同一个节点。
* @method Models\TerminateJobResponse TerminateJob(Models\TerminateJobRequest $req) 用于终止作业。
终止作业的效果相当于所含的所有任务实例进行TerminateTaskInstance操作。具体效果和用法可参考TerminateTaskInstance。
* @method Models\TerminateTaskInstanceResponse TerminateTaskInstance(Models\TerminateTaskInstanceRequest $req) 用于终止任务实例
对于状态已经为SUCCEED、FAILED的TaskInstance，batch不做处理。
对于状态为SUBMITTED、PENDING、RUNNABLE的TaskInstance，batch会将其置为FAILED状态。
对于状态为STARTING、RUNNING、FAILED_INTERRUPTED的TaskInstance，batch会先终止CVM，然后将状态置为FAILED，因此具有一定耗时。特别是如果CVM正在创建中，此时无法立即销毁CVM，Batch会在旁路注册一个定时销毁操作，在CVM创建好之后异步销毁。
对于状态为FAILED_INTERRUPTED的TaskInstance，TerminateTaskInstance操作实际成功之后，相关资源和配额才会释放。
本接口只支持提交到匿名计算环境的作业（SubmitJob指定ComputeEnv，不指定EnvId）。对于提交到具名计算环境的作业（SubmitJob指定EnvId，不指定ComputeEnv），不支持TerminateTaskInstance和TerminateJob操作。
 */

class BatchClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "batch.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2017-03-12";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("batch")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
