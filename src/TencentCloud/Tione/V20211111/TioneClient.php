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

namespace TencentCloud\Tione\V20211111;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tione\V20211111\Models as Models;

/**
 * @method Models\ChatCompletionResponse ChatCompletion(Models\ChatCompletionRequest $req) 该接口支持与自行部署的大模型的聊天。

使用该接口调用时需要携带腾讯云的密钥信息用于身份信息鉴权，建议通过腾讯云的云 API SDK调用，具体可以参考
https://cloud.tencent.com/document/product/1278/85305
 * @method Models\CreateDatasetResponse CreateDataset(Models\CreateDatasetRequest $req) 创建数据集
 * @method Models\CreateExportResponse CreateExport(Models\CreateExportRequest $req) 创建任务式建模训练任务，Notebook，在线服务和批量预测任务日志下载任务API
 * @method Models\CreateModelServiceResponse CreateModelService(Models\CreateModelServiceRequest $req) 用于创建、发布一个新的模型服务
 * @method Models\CreateModelServiceAuthTokenResponse CreateModelServiceAuthToken(Models\CreateModelServiceAuthTokenRequest $req) 创建一个 AuthToken
 * @method Models\CreateNotebookResponse CreateNotebook(Models\CreateNotebookRequest $req) 创建Notebook
 * @method Models\CreatePresignedNotebookUrlResponse CreatePresignedNotebookUrl(Models\CreatePresignedNotebookUrlRequest $req) 生成Notebook访问链接
 * @method Models\CreateTrainingModelResponse CreateTrainingModel(Models\CreateTrainingModelRequest $req) 导入模型
 * @method Models\CreateTrainingTaskResponse CreateTrainingTask(Models\CreateTrainingTaskRequest $req) 创建模型训练任务
 * @method Models\DeleteDatasetResponse DeleteDataset(Models\DeleteDatasetRequest $req) 删除数据集
 * @method Models\DeleteExportResponse DeleteExport(Models\DeleteExportRequest $req) 删除任务式建模训练任务，Notebook，在线服务和批量预测任务日志导出任务API
 * @method Models\DeleteModelServiceResponse DeleteModelService(Models\DeleteModelServiceRequest $req) 根据服务id删除模型服务
 * @method Models\DeleteModelServiceAuthTokenResponse DeleteModelServiceAuthToken(Models\DeleteModelServiceAuthTokenRequest $req) 删除一个 AuthToken
 * @method Models\DeleteModelServiceGroupResponse DeleteModelServiceGroup(Models\DeleteModelServiceGroupRequest $req) 根据服务组id删除服务组下所有模型服务
 * @method Models\DeleteNotebookResponse DeleteNotebook(Models\DeleteNotebookRequest $req) 删除Notebook
 * @method Models\DeleteTrainingModelResponse DeleteTrainingModel(Models\DeleteTrainingModelRequest $req) 删除模型
 * @method Models\DeleteTrainingModelVersionResponse DeleteTrainingModelVersion(Models\DeleteTrainingModelVersionRequest $req) 删除模型版本
 * @method Models\DeleteTrainingTaskResponse DeleteTrainingTask(Models\DeleteTrainingTaskRequest $req) 删除训练任务
 * @method Models\DescribeBillingResourceGroupResponse DescribeBillingResourceGroup(Models\DescribeBillingResourceGroupRequest $req) 查询资源组节点列表
 * @method Models\DescribeBillingResourceGroupsResponse DescribeBillingResourceGroups(Models\DescribeBillingResourceGroupsRequest $req) 查询资源组详情
 * @method Models\DescribeBillingResourceInstanceRunningJobsResponse DescribeBillingResourceInstanceRunningJobs(Models\DescribeBillingResourceInstanceRunningJobsRequest $req) 查询资源组节点运行中的任务
 * @method Models\DescribeBillingSpecsResponse DescribeBillingSpecs(Models\DescribeBillingSpecsRequest $req) 本接口(DescribeBillingSpecs) 提供查询计费项列表
 * @method Models\DescribeBillingSpecsPriceResponse DescribeBillingSpecsPrice(Models\DescribeBillingSpecsPriceRequest $req) 本接口(DescribeBillingSpecsPrice)用于查询按量计费计费项价格。
 * @method Models\DescribeBuildInImagesResponse DescribeBuildInImages(Models\DescribeBuildInImagesRequest $req) 获取内置镜像列表
 * @method Models\DescribeDatasetsResponse DescribeDatasets(Models\DescribeDatasetsRequest $req) 查询数据集列表
 * @method Models\DescribeEventsResponse DescribeEvents(Models\DescribeEventsRequest $req) 获取任务式建模训练任务，Notebook，在线服务和批量预测任务的事件API
 * @method Models\DescribeExportResponse DescribeExport(Models\DescribeExportRequest $req) 查看任务式建模训练任务，Notebook，在线服务和批量预测任务日志下载任务状态API
 * @method Models\DescribeInferTemplatesResponse DescribeInferTemplates(Models\DescribeInferTemplatesRequest $req) 已废弃，收敛到统一接口

查询推理镜像模板
 * @method Models\DescribeLogsResponse DescribeLogs(Models\DescribeLogsRequest $req) 获取任务式建模训练任务，Notebook，在线服务和批量预测任务的日志API
 * @method Models\DescribeModelAccelerateTaskResponse DescribeModelAccelerateTask(Models\DescribeModelAccelerateTaskRequest $req) 查询模型优化任务详情
 * @method Models\DescribeModelAccelerateVersionsResponse DescribeModelAccelerateVersions(Models\DescribeModelAccelerateVersionsRequest $req) 模型加速之后的模型版本列表
 * @method Models\DescribeModelServiceResponse DescribeModelService(Models\DescribeModelServiceRequest $req) 查询单个服务
 * @method Models\DescribeModelServiceCallInfoResponse DescribeModelServiceCallInfo(Models\DescribeModelServiceCallInfoRequest $req) 展示服务的调用信息
 * @method Models\DescribeModelServiceGroupResponse DescribeModelServiceGroup(Models\DescribeModelServiceGroupRequest $req) 查询单个服务组
 * @method Models\DescribeModelServiceGroupsResponse DescribeModelServiceGroups(Models\DescribeModelServiceGroupsRequest $req) 列举在线推理服务组
 * @method Models\DescribeModelServiceHotUpdatedResponse DescribeModelServiceHotUpdated(Models\DescribeModelServiceHotUpdatedRequest $req) 用于查询模型服务能否开启热更新
 * @method Models\DescribeNotebookResponse DescribeNotebook(Models\DescribeNotebookRequest $req) Notebook详情
 * @method Models\DescribeNotebooksResponse DescribeNotebooks(Models\DescribeNotebooksRequest $req) Notebook列表
 * @method Models\DescribePlatformImagesResponse DescribePlatformImages(Models\DescribePlatformImagesRequest $req) 查询平台镜像信息
 * @method Models\DescribeSubAccountLinuxUserInfosResponse DescribeSubAccountLinuxUserInfos(Models\DescribeSubAccountLinuxUserInfosRequest $req) 批量查询子账号Linux用户信息
 * @method Models\DescribeTrainingModelVersionResponse DescribeTrainingModelVersion(Models\DescribeTrainingModelVersionRequest $req) 查询模型版本
 * @method Models\DescribeTrainingModelVersionsResponse DescribeTrainingModelVersions(Models\DescribeTrainingModelVersionsRequest $req) 模型版本列表
 * @method Models\DescribeTrainingTaskResponse DescribeTrainingTask(Models\DescribeTrainingTaskRequest $req) 训练任务详情
 * @method Models\DescribeTrainingTaskPodsResponse DescribeTrainingTaskPods(Models\DescribeTrainingTaskPodsRequest $req) 训练任务pod列表
 * @method Models\DescribeTrainingTasksResponse DescribeTrainingTasks(Models\DescribeTrainingTasksRequest $req) 训练任务列表
 * @method Models\ModifyModelServiceResponse ModifyModelService(Models\ModifyModelServiceRequest $req) 用于更新模型服务
 * @method Models\ModifyModelServiceAuthTokenResponse ModifyModelServiceAuthToken(Models\ModifyModelServiceAuthTokenRequest $req) 修改一个 AuthToken
 * @method Models\ModifyModelServiceAuthorizationResponse ModifyModelServiceAuthorization(Models\ModifyModelServiceAuthorizationRequest $req) 修改服务鉴权配置
 * @method Models\ModifyNotebookResponse ModifyNotebook(Models\ModifyNotebookRequest $req) 修改Notebook
 * @method Models\ModifyNotebookTagsResponse ModifyNotebookTags(Models\ModifyNotebookTagsRequest $req) 修改Notebook标签
 * @method Models\PushTrainingMetricsResponse PushTrainingMetrics(Models\PushTrainingMetricsRequest $req) 上报训练自定义指标
 * @method Models\StartNotebookResponse StartNotebook(Models\StartNotebookRequest $req) 启动Notebook
 * @method Models\StartTrainingTaskResponse StartTrainingTask(Models\StartTrainingTaskRequest $req) 启动模型训练任务
 * @method Models\StopModelAccelerateTaskResponse StopModelAccelerateTask(Models\StopModelAccelerateTaskRequest $req) 停止模型加速任务
 * @method Models\StopNotebookResponse StopNotebook(Models\StopNotebookRequest $req) 停止Notebook
 * @method Models\StopTrainingTaskResponse StopTrainingTask(Models\StopTrainingTaskRequest $req) 停止模型训练任务
 * @method Models\UpdateSubAccountLinuxUserInfoResponse UpdateSubAccountLinuxUserInfo(Models\UpdateSubAccountLinuxUserInfoRequest $req) 更新子账号Linux用户信息
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
