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
 * @method Models\CreateDatasetResponse CreateDataset(Models\CreateDatasetRequest $req) 创建数据集
 * @method Models\CreateTrainingModelResponse CreateTrainingModel(Models\CreateTrainingModelRequest $req) 导入模型
 * @method Models\CreateTrainingTaskResponse CreateTrainingTask(Models\CreateTrainingTaskRequest $req) 创建模型训练任务
 * @method Models\DeleteDatasetResponse DeleteDataset(Models\DeleteDatasetRequest $req) 删除数据集
 * @method Models\DeleteTrainingModelResponse DeleteTrainingModel(Models\DeleteTrainingModelRequest $req) 删除模型
 * @method Models\DeleteTrainingModelVersionResponse DeleteTrainingModelVersion(Models\DeleteTrainingModelVersionRequest $req) 删除模型版本
 * @method Models\DeleteTrainingTaskResponse DeleteTrainingTask(Models\DeleteTrainingTaskRequest $req) 删除训练任务
 * @method Models\DescribeBillingResourceGroupsResponse DescribeBillingResourceGroups(Models\DescribeBillingResourceGroupsRequest $req) 查询资源组详情
 * @method Models\DescribeBillingSpecsPriceResponse DescribeBillingSpecsPrice(Models\DescribeBillingSpecsPriceRequest $req) 本接口(DescribeBillingSpecsPrice)用于查询计费项价格。
 * @method Models\DescribeDatasetDetailStructuredResponse DescribeDatasetDetailStructured(Models\DescribeDatasetDetailStructuredRequest $req) 查询结构化数据集详情
 * @method Models\DescribeDatasetDetailUnstructuredResponse DescribeDatasetDetailUnstructured(Models\DescribeDatasetDetailUnstructuredRequest $req) 查询非结构化数据集详情
 * @method Models\DescribeDatasetsResponse DescribeDatasets(Models\DescribeDatasetsRequest $req) 查询数据集列表
 * @method Models\DescribeInferTemplatesResponse DescribeInferTemplates(Models\DescribeInferTemplatesRequest $req) 查询推理镜像模板
 * @method Models\DescribeLatestTrainingMetricsResponse DescribeLatestTrainingMetrics(Models\DescribeLatestTrainingMetricsRequest $req) 查询最近上报的训练自定义指标
 * @method Models\DescribeLogsResponse DescribeLogs(Models\DescribeLogsRequest $req) 获取训练、推理、Notebook服务的日志
 * @method Models\DescribeTrainingFrameworksResponse DescribeTrainingFrameworks(Models\DescribeTrainingFrameworksRequest $req) 训练框架列表
 * @method Models\DescribeTrainingMetricsResponse DescribeTrainingMetrics(Models\DescribeTrainingMetricsRequest $req) 查询训练自定义指标
 * @method Models\DescribeTrainingModelVersionResponse DescribeTrainingModelVersion(Models\DescribeTrainingModelVersionRequest $req) 查询模型版本
 * @method Models\DescribeTrainingModelVersionsResponse DescribeTrainingModelVersions(Models\DescribeTrainingModelVersionsRequest $req) 模型版本列表
 * @method Models\DescribeTrainingModelsResponse DescribeTrainingModels(Models\DescribeTrainingModelsRequest $req) 模型列表
 * @method Models\DescribeTrainingTaskResponse DescribeTrainingTask(Models\DescribeTrainingTaskRequest $req) 训练任务详情
 * @method Models\DescribeTrainingTaskPodsResponse DescribeTrainingTaskPods(Models\DescribeTrainingTaskPodsRequest $req) 训练任务pod列表
 * @method Models\DescribeTrainingTasksResponse DescribeTrainingTasks(Models\DescribeTrainingTasksRequest $req) 训练任务列表
 * @method Models\PushTrainingMetricsResponse PushTrainingMetrics(Models\PushTrainingMetricsRequest $req) 上报训练自定义指标
 * @method Models\StartTrainingTaskResponse StartTrainingTask(Models\StartTrainingTaskRequest $req) 启动模型训练任务
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
