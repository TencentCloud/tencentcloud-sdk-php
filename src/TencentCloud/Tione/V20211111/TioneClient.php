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

namespace TencentCloud\Tione\V20211111;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tione\V20211111\Models as Models;

/**
 * @method Models\CreateBatchModelAccTasksResponse CreateBatchModelAccTasks(Models\CreateBatchModelAccTasksRequest $req) 批量创建模型加速任务
 * @method Models\CreateBatchTaskResponse CreateBatchTask(Models\CreateBatchTaskRequest $req) 创建跑批任务
 * @method Models\CreateDatasetResponse CreateDataset(Models\CreateDatasetRequest $req) 创建数据集
 * @method Models\CreateModelServiceResponse CreateModelService(Models\CreateModelServiceRequest $req) 用于创建、发布一个新的模型服务
 * @method Models\CreateOptimizedModelResponse CreateOptimizedModel(Models\CreateOptimizedModelRequest $req) 保存优化模型
 * @method Models\CreateTrainingModelResponse CreateTrainingModel(Models\CreateTrainingModelRequest $req) 导入模型
 * @method Models\CreateTrainingTaskResponse CreateTrainingTask(Models\CreateTrainingTaskRequest $req) 创建模型训练任务
 * @method Models\DeleteBatchTaskResponse DeleteBatchTask(Models\DeleteBatchTaskRequest $req) 删除跑批任务
 * @method Models\DeleteDatasetResponse DeleteDataset(Models\DeleteDatasetRequest $req) 删除数据集
 * @method Models\DeleteModelAccelerateTaskResponse DeleteModelAccelerateTask(Models\DeleteModelAccelerateTaskRequest $req) 删除模型加速任务
 * @method Models\DeleteModelServiceResponse DeleteModelService(Models\DeleteModelServiceRequest $req) 根据服务id删除模型服务
 * @method Models\DeleteModelServiceGroupResponse DeleteModelServiceGroup(Models\DeleteModelServiceGroupRequest $req) 根据服务组id删除服务组下所有模型服务
 * @method Models\DeleteTrainingModelResponse DeleteTrainingModel(Models\DeleteTrainingModelRequest $req) 删除模型
 * @method Models\DeleteTrainingModelVersionResponse DeleteTrainingModelVersion(Models\DeleteTrainingModelVersionRequest $req) 删除模型版本
 * @method Models\DeleteTrainingTaskResponse DeleteTrainingTask(Models\DeleteTrainingTaskRequest $req) 删除训练任务
 * @method Models\DescribeAPIConfigsResponse DescribeAPIConfigs(Models\DescribeAPIConfigsRequest $req) 列举API
 * @method Models\DescribeBatchTaskResponse DescribeBatchTask(Models\DescribeBatchTaskRequest $req) 查询跑批任务
 * @method Models\DescribeBatchTaskInstancesResponse DescribeBatchTaskInstances(Models\DescribeBatchTaskInstancesRequest $req) 查询跑批实例列表
 * @method Models\DescribeBatchTasksResponse DescribeBatchTasks(Models\DescribeBatchTasksRequest $req) 批量预测任务列表信息
 * @method Models\DescribeBillingResourceGroupsResponse DescribeBillingResourceGroups(Models\DescribeBillingResourceGroupsRequest $req) 查询资源组详情
 * @method Models\DescribeBillingSpecsResponse DescribeBillingSpecs(Models\DescribeBillingSpecsRequest $req) 本接口(DescribeBillingSpecs)用于查询计费项列表
 * @method Models\DescribeBillingSpecsPriceResponse DescribeBillingSpecsPrice(Models\DescribeBillingSpecsPriceRequest $req) 本接口(DescribeBillingSpecsPrice)用于查询计费项价格。
 * @method Models\DescribeDatasetDetailStructuredResponse DescribeDatasetDetailStructured(Models\DescribeDatasetDetailStructuredRequest $req) 查询结构化数据集详情
 * @method Models\DescribeDatasetDetailUnstructuredResponse DescribeDatasetDetailUnstructured(Models\DescribeDatasetDetailUnstructuredRequest $req) 查询非结构化数据集详情
 * @method Models\DescribeDatasetsResponse DescribeDatasets(Models\DescribeDatasetsRequest $req) 查询数据集列表
 * @method Models\DescribeInferTemplatesResponse DescribeInferTemplates(Models\DescribeInferTemplatesRequest $req) 查询推理镜像模板
 * @method Models\DescribeLatestTrainingMetricsResponse DescribeLatestTrainingMetrics(Models\DescribeLatestTrainingMetricsRequest $req) 查询最近上报的训练自定义指标
 * @method Models\DescribeLogsResponse DescribeLogs(Models\DescribeLogsRequest $req) 获取训练、推理、Notebook服务的日志
 * @method Models\DescribeModelAccEngineVersionsResponse DescribeModelAccEngineVersions(Models\DescribeModelAccEngineVersionsRequest $req) 查询模型加速引擎版本列表
 * @method Models\DescribeModelAccelerateTaskResponse DescribeModelAccelerateTask(Models\DescribeModelAccelerateTaskRequest $req) 查询模型优化任务详情
 * @method Models\DescribeModelAccelerateTasksResponse DescribeModelAccelerateTasks(Models\DescribeModelAccelerateTasksRequest $req) 查询模型加速任务列表
 * @method Models\DescribeModelServiceResponse DescribeModelService(Models\DescribeModelServiceRequest $req) 查询单个服务
 * @method Models\DescribeModelServiceCallInfoResponse DescribeModelServiceCallInfo(Models\DescribeModelServiceCallInfoRequest $req) 展示服务的调用信息
 * @method Models\DescribeModelServiceGroupResponse DescribeModelServiceGroup(Models\DescribeModelServiceGroupRequest $req) 查询单个服务组
 * @method Models\DescribeModelServiceGroupsResponse DescribeModelServiceGroups(Models\DescribeModelServiceGroupsRequest $req) 列举在线推理服务组
 * @method Models\DescribeModelServiceHistoryResponse DescribeModelServiceHistory(Models\DescribeModelServiceHistoryRequest $req) 展示服务的历史版本
 * @method Models\DescribeModelServiceHotUpdatedResponse DescribeModelServiceHotUpdated(Models\DescribeModelServiceHotUpdatedRequest $req) 用于查询模型服务能否开启热更新
 * @method Models\DescribeModelServicesResponse DescribeModelServices(Models\DescribeModelServicesRequest $req) 查询多个服务
 * @method Models\DescribeTrainingFrameworksResponse DescribeTrainingFrameworks(Models\DescribeTrainingFrameworksRequest $req) 训练框架列表
 * @method Models\DescribeTrainingMetricsResponse DescribeTrainingMetrics(Models\DescribeTrainingMetricsRequest $req) 查询训练自定义指标
 * @method Models\DescribeTrainingModelVersionResponse DescribeTrainingModelVersion(Models\DescribeTrainingModelVersionRequest $req) 查询模型版本
 * @method Models\DescribeTrainingModelVersionsResponse DescribeTrainingModelVersions(Models\DescribeTrainingModelVersionsRequest $req) 模型版本列表
 * @method Models\DescribeTrainingModelsResponse DescribeTrainingModels(Models\DescribeTrainingModelsRequest $req) 模型列表
 * @method Models\DescribeTrainingTaskResponse DescribeTrainingTask(Models\DescribeTrainingTaskRequest $req) 训练任务详情
 * @method Models\DescribeTrainingTaskPodsResponse DescribeTrainingTaskPods(Models\DescribeTrainingTaskPodsRequest $req) 训练任务pod列表
 * @method Models\DescribeTrainingTasksResponse DescribeTrainingTasks(Models\DescribeTrainingTasksRequest $req) 训练任务列表
 * @method Models\ModifyModelServiceResponse ModifyModelService(Models\ModifyModelServiceRequest $req) 用于更新模型服务
 * @method Models\ModifyModelServicePartialConfigResponse ModifyModelServicePartialConfig(Models\ModifyModelServicePartialConfigRequest $req) 增量更新在线推理服务的部分配置，不更新的配置项不需要传入
 * @method Models\ModifyServiceGroupWeightsResponse ModifyServiceGroupWeights(Models\ModifyServiceGroupWeightsRequest $req) 更新推理服务组流量分配
 * @method Models\PushTrainingMetricsResponse PushTrainingMetrics(Models\PushTrainingMetricsRequest $req) 上报训练自定义指标
 * @method Models\RestartModelAccelerateTaskResponse RestartModelAccelerateTask(Models\RestartModelAccelerateTaskRequest $req) 重启模型加速任务
 * @method Models\StartTrainingTaskResponse StartTrainingTask(Models\StartTrainingTaskRequest $req) 启动模型训练任务
 * @method Models\StopBatchTaskResponse StopBatchTask(Models\StopBatchTaskRequest $req) 停止跑批任务
 * @method Models\StopModelAccelerateTaskResponse StopModelAccelerateTask(Models\StopModelAccelerateTaskRequest $req) 停止模型加速任务
 * @method Models\StopTrainingTaskResponse StopTrainingTask(Models\StopTrainingTaskRequest $req) 停止模型训练任务
 */

class TioneClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tione.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tione";

    /**
     * @var string
     */
    protected $version = "2021-11-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("tione")."\\"."V20211111\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
