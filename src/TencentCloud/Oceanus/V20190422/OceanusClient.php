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

namespace TencentCloud\Oceanus\V20190422;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Oceanus\V20190422\Models as Models;

/**
 * @method Models\CheckSavepointResponse CheckSavepoint(Models\CheckSavepointRequest $req) 检查快照是否可用
 * @method Models\CopyJobsResponse CopyJobs(Models\CopyJobsRequest $req) 单条和批量复制作业
 * @method Models\CreateFolderResponse CreateFolder(Models\CreateFolderRequest $req) 作业列表页面新建文件夹请求
 * @method Models\CreateJobResponse CreateJob(Models\CreateJobRequest $req) 新建作业接口，一个 AppId 最多允许创建1000个作业
 * @method Models\CreateJobConfigResponse CreateJobConfig(Models\CreateJobConfigRequest $req) 创建作业配置，一个作业最多有100个配置版本
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) 创建资源接口
 * @method Models\CreateResourceConfigResponse CreateResourceConfig(Models\CreateResourceConfigRequest $req) 创建资源配置接口
 * @method Models\CreateWorkSpaceResponse CreateWorkSpace(Models\CreateWorkSpaceRequest $req) 创建工作空间
 * @method Models\DeleteFoldersResponse DeleteFolders(Models\DeleteFoldersRequest $req) 作业列表删除文件夹
 * @method Models\DeleteJobConfigsResponse DeleteJobConfigs(Models\DeleteJobConfigsRequest $req) 删除作业配置
 * @method Models\DeleteJobsResponse DeleteJobs(Models\DeleteJobsRequest $req) 批量删除作业接口，批量操作数量上限20
 * @method Models\DeleteResourceConfigsResponse DeleteResourceConfigs(Models\DeleteResourceConfigsRequest $req) 删除资源版本
 * @method Models\DeleteResourcesResponse DeleteResources(Models\DeleteResourcesRequest $req) 删除资源接口
 * @method Models\DeleteTableConfigResponse DeleteTableConfig(Models\DeleteTableConfigRequest $req) 删除作业表配置
 * @method Models\DeleteWorkSpaceResponse DeleteWorkSpace(Models\DeleteWorkSpaceRequest $req) 删除工作空间
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群
 * @method Models\DescribeFolderResponse DescribeFolder(Models\DescribeFolderRequest $req) 查询指定文件夹及其相应的子文件夹信息
 * @method Models\DescribeJobConfigsResponse DescribeJobConfigs(Models\DescribeJobConfigsRequest $req) 查询作业配置列表，一次最多查询100个
 * @method Models\DescribeJobEventsResponse DescribeJobEvents(Models\DescribeJobEventsRequest $req) 请求参数不包含 "RunningOrderIds"时，接口获取指定作业的事件，包括作业启动停止、运行失败、快照失败、作业异常等各种事件类型;请求参数不包含 "RunningOrderIds"时，接口为查询作业实例ID接口,获取作业实例
 * @method Models\DescribeJobRuntimeInfoResponse DescribeJobRuntimeInfo(Models\DescribeJobRuntimeInfoRequest $req) 获取作业运行时的信息
 * @method Models\DescribeJobSavepointResponse DescribeJobSavepoint(Models\DescribeJobSavepointRequest $req) 查找Savepoint列表
 * @method Models\DescribeJobSubmissionLogResponse DescribeJobSubmissionLog(Models\DescribeJobSubmissionLogRequest $req) 查询作业实例启动日志
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 查询作业
 * @method Models\DescribeResourceConfigsResponse DescribeResourceConfigs(Models\DescribeResourceConfigsRequest $req) 描述资源配置接口
 * @method Models\DescribeResourceRelatedJobsResponse DescribeResourceRelatedJobs(Models\DescribeResourceRelatedJobsRequest $req) 获取资源关联作业信息
 * @method Models\DescribeResourcesResponse DescribeResources(Models\DescribeResourcesRequest $req) 描述资源接口
 * @method Models\DescribeSystemResourcesResponse DescribeSystemResources(Models\DescribeSystemResourcesRequest $req) 描述系统资源接口
 * @method Models\DescribeTreeJobsResponse DescribeTreeJobs(Models\DescribeTreeJobsRequest $req) 生成树状作业显示结构
 * @method Models\DescribeTreeResourcesResponse DescribeTreeResources(Models\DescribeTreeResourcesRequest $req) 查询树状结构资源列表
 * @method Models\DescribeWorkSpacesResponse DescribeWorkSpaces(Models\DescribeWorkSpacesRequest $req) 授权工作空间列表
 * @method Models\FetchSqlGatewayStatementResultResponse FetchSqlGatewayStatementResult(Models\FetchSqlGatewayStatementResultRequest $req) 查询Sql Gateway的Statement执行结果
 * @method Models\GetMetaTableResponse GetMetaTable(Models\GetMetaTableRequest $req) 查询元数据表
 * @method Models\ModifyFolderResponse ModifyFolder(Models\ModifyFolderRequest $req) 自定义树状结构页面拖拽文件夹
 * @method Models\ModifyJobResponse ModifyJob(Models\ModifyJobRequest $req) 更新作业属性，仅允许以下3种操作，不支持组合操作：
(1)	更新作业名称
(2)	更新作业备注 
(3)	更新作业最大并行度
变更前提：WorkerCuNum<=MaxParallelism
如果MaxParallelism变小，不重启作业，待下一次重启生效
如果MaxParallelism变大，则要求入参RestartAllowed必须为True
假设作业运行状态，则先停止作业，再启动作业，中间状态丢失
假设作业暂停状态，则将作业更改为停止状态，中间状态丢失
 * @method Models\ModifyWorkSpaceResponse ModifyWorkSpace(Models\ModifyWorkSpaceRequest $req) 修改工作空间
 * @method Models\RunJobsResponse RunJobs(Models\RunJobsRequest $req) 批量启动或者恢复作业，批量操作数量上限20
 * @method Models\RunSqlGatewayStatementResponse RunSqlGatewayStatement(Models\RunSqlGatewayStatementRequest $req) 通过Sql gateway执行satement
 * @method Models\StopJobsResponse StopJobs(Models\StopJobsRequest $req) 批量停止作业，批量操作数量上限为20
 * @method Models\TriggerJobSavepointResponse TriggerJobSavepoint(Models\TriggerJobSavepointRequest $req) 触发Savepoint
 */

class OceanusClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "oceanus.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "oceanus";

    /**
     * @var string
     */
    protected $version = "2019-04-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("oceanus")."\\"."V20190422\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
