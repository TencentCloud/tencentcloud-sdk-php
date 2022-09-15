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

namespace TencentCloud\Iotvideo\V20211125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotvideo\V20211125\Models as Models;

/**
 * @method Models\ApplyAIModelResponse ApplyAIModel(Models\ApplyAIModelRequest $req) 申请AI模型
 * @method Models\BatchUpdateFirmwareResponse BatchUpdateFirmware(Models\BatchUpdateFirmwareRequest $req) 本接口（BatchUpdateFirmware）用于批量更新设备固件 
 * @method Models\BindCloudStorageUserResponse BindCloudStorageUser(Models\BindCloudStorageUserRequest $req) 绑定云存用户
 * @method Models\CallDeviceActionAsyncResponse CallDeviceActionAsync(Models\CallDeviceActionAsyncRequest $req) 异步调用设备行为
 * @method Models\CallDeviceActionSyncResponse CallDeviceActionSync(Models\CallDeviceActionSyncRequest $req) 同步调用设备行为
 * @method Models\CancelAIModelApplicationResponse CancelAIModelApplication(Models\CancelAIModelApplicationRequest $req) 取消AI模型申请
 * @method Models\CancelDeviceFirmwareTaskResponse CancelDeviceFirmwareTask(Models\CancelDeviceFirmwareTaskRequest $req) 本接口用于取消设备升级任务
 * @method Models\CheckForwardAuthResponse CheckForwardAuth(Models\CheckForwardAuthRequest $req) 判断是否开启的转发的权限
 * @method Models\ControlDeviceDataResponse ControlDeviceData(Models\ControlDeviceDataRequest $req) 根据设备产品ID、设备名称，设置控制设备的属性数据。
 * @method Models\CreateAIDetectionResponse CreateAIDetection(Models\CreateAIDetectionRequest $req) 发起AI推理请求
 * @method Models\CreateBatchResponse CreateBatch(Models\CreateBatchRequest $req) 创建批次
 * @method Models\CreateCOSCredentialsResponse CreateCOSCredentials(Models\CreateCOSCredentialsRequest $req) 创建COS上传密钥
 * @method Models\CreateCloudStorageResponse CreateCloudStorage(Models\CreateCloudStorageRequest $req) 开通云存服务
 * @method Models\CreateDataForwardResponse CreateDataForward(Models\CreateDataForwardRequest $req) 创建数据转发
 * @method Models\CreateForwardRuleResponse CreateForwardRule(Models\CreateForwardRuleRequest $req) 创建转发规则
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 创建产品
 * @method Models\CreateTaskFileUrlResponse CreateTaskFileUrl(Models\CreateTaskFileUrlRequest $req) 本接口（CreateTaskFileUrl）用于获取产品级任务文件上传链接
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备
 * @method Models\DeleteFirmwareResponse DeleteFirmware(Models\DeleteFirmwareRequest $req) 本接口（DeleteFirmware）用于删除固件 
 * @method Models\DeleteForwardRuleResponse DeleteForwardRule(Models\DeleteForwardRuleRequest $req) 删除转发规则
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除产品
 * @method Models\DescribeAIModelApplicationsResponse DescribeAIModelApplications(Models\DescribeAIModelApplicationsRequest $req) 用户AI模型申请记录
 * @method Models\DescribeAIModelChannelResponse DescribeAIModelChannel(Models\DescribeAIModelChannelRequest $req) 查看AI推理结果推送配置
 * @method Models\DescribeAIModelUsageResponse DescribeAIModelUsage(Models\DescribeAIModelUsageRequest $req) 查看AI模型资源包
 * @method Models\DescribeAIModelsResponse DescribeAIModels(Models\DescribeAIModelsRequest $req) 拉取AI模型列表
 * @method Models\DescribeAccountResponse DescribeAccount(Models\DescribeAccountRequest $req) 获取消费版账号信息
 * @method Models\DescribeBalanceResponse DescribeBalance(Models\DescribeBalanceRequest $req) 查询账户余额
 * @method Models\DescribeBalanceTransactionsResponse DescribeBalanceTransactions(Models\DescribeBalanceTransactionsRequest $req) 拉取账户流水
 * @method Models\DescribeBatchResponse DescribeBatch(Models\DescribeBatchRequest $req) 获取批次详情
 * @method Models\DescribeBatchsResponse DescribeBatchs(Models\DescribeBatchsRequest $req) 获取批次列表
 * @method Models\DescribeBonusesResponse DescribeBonuses(Models\DescribeBonusesRequest $req) 查看运营活动资源包列表
 * @method Models\DescribeCategoryResponse DescribeCategory(Models\DescribeCategoryRequest $req) 获取Category详情
 * @method Models\DescribeCloudStorageResponse DescribeCloudStorage(Models\DescribeCloudStorageRequest $req) 获取设备云存服务详情
 * @method Models\DescribeCloudStorageDateResponse DescribeCloudStorageDate(Models\DescribeCloudStorageDateRequest $req) 获取具有云存的日期
 * @method Models\DescribeCloudStorageEventsResponse DescribeCloudStorageEvents(Models\DescribeCloudStorageEventsRequest $req) 拉取云存事件列表
 * @method Models\DescribeCloudStoragePackageConsumeDetailsResponse DescribeCloudStoragePackageConsumeDetails(Models\DescribeCloudStoragePackageConsumeDetailsRequest $req) 获取云存套餐包消耗详细记录
 * @method Models\DescribeCloudStoragePackageConsumeStatsResponse DescribeCloudStoragePackageConsumeStats(Models\DescribeCloudStoragePackageConsumeStatsRequest $req) 获取云存套餐包消耗统计
 * @method Models\DescribeCloudStorageStreamDataResponse DescribeCloudStorageStreamData(Models\DescribeCloudStorageStreamDataRequest $req) 获取设备图片流数据
 * @method Models\DescribeCloudStorageThumbnailResponse DescribeCloudStorageThumbnail(Models\DescribeCloudStorageThumbnailRequest $req) 拉取云存事件缩略图
 * @method Models\DescribeCloudStorageTimeResponse DescribeCloudStorageTime(Models\DescribeCloudStorageTimeRequest $req) 获取某一天云存时间轴
 * @method Models\DescribeCloudStorageUsersResponse DescribeCloudStorageUsers(Models\DescribeCloudStorageUsersRequest $req) 拉取云存用户列表
 * @method Models\DescribeDataForwardListResponse DescribeDataForwardList(Models\DescribeDataForwardListRequest $req) 获取数据转发列表
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 查看设备详情
 * @method Models\DescribeDeviceActionHistoryResponse DescribeDeviceActionHistory(Models\DescribeDeviceActionHistoryRequest $req) 为用户提供获取动作历史的能力。
 * @method Models\DescribeDeviceCommLogResponse DescribeDeviceCommLog(Models\DescribeDeviceCommLogRequest $req) 获取设备在指定时间范围内的通讯日志
 * @method Models\DescribeDeviceDataResponse DescribeDeviceData(Models\DescribeDeviceDataRequest $req) 获取设备属性数据
 * @method Models\DescribeDeviceDataHistoryResponse DescribeDeviceDataHistory(Models\DescribeDeviceDataHistoryRequest $req) 获取设备在指定时间范围内上报的历史数据。
 * @method Models\DescribeDeviceDataStatsResponse DescribeDeviceDataStats(Models\DescribeDeviceDataStatsRequest $req) 查询设备数据统计
 * @method Models\DescribeDeviceEventHistoryResponse DescribeDeviceEventHistory(Models\DescribeDeviceEventHistoryRequest $req) 获取设备的历史事件
 * @method Models\DescribeDeviceStatusLogResponse DescribeDeviceStatusLog(Models\DescribeDeviceStatusLogRequest $req) 获取设备上下线日志
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 获取设备列表
 * @method Models\DescribeFirmwareResponse DescribeFirmware(Models\DescribeFirmwareRequest $req) 本接口（DescribeFirmware）用于查询固件信息
 * @method Models\DescribeFirmwareTaskResponse DescribeFirmwareTask(Models\DescribeFirmwareTaskRequest $req) 此接口查询固件升级任务详情
 * @method Models\DescribeFirmwareTaskDevicesResponse DescribeFirmwareTaskDevices(Models\DescribeFirmwareTaskDevicesRequest $req) 本接口用于查询固件升级任务的设备列表
 * @method Models\DescribeFirmwareTaskDistributionResponse DescribeFirmwareTaskDistribution(Models\DescribeFirmwareTaskDistributionRequest $req) 本接口用于查询固件升级任务状态分布
 * @method Models\DescribeFirmwareTaskStatisticsResponse DescribeFirmwareTaskStatistics(Models\DescribeFirmwareTaskStatisticsRequest $req) 本接口用于查询固件升级任务统计信息
 * @method Models\DescribeFirmwareTasksResponse DescribeFirmwareTasks(Models\DescribeFirmwareTasksRequest $req) 本接口用于查询固件升级任务列表
 * @method Models\DescribeForwardRuleResponse DescribeForwardRule(Models\DescribeForwardRuleRequest $req) 获取产品转发规则
 * @method Models\DescribeMessageDataStatsResponse DescribeMessageDataStats(Models\DescribeMessageDataStatsRequest $req) 查询设备消息数量统计
 * @method Models\DescribeModelDefinitionResponse DescribeModelDefinition(Models\DescribeModelDefinitionRequest $req) 查询产品配置的数据模板信息
 * @method Models\DescribePackageConsumeTaskResponse DescribePackageConsumeTask(Models\DescribePackageConsumeTaskRequest $req) 查询套餐消耗记录详情
 * @method Models\DescribePackageConsumeTasksResponse DescribePackageConsumeTasks(Models\DescribePackageConsumeTasksRequest $req) 查询套餐消耗记录列表
 * @method Models\DescribeProductResponse DescribeProduct(Models\DescribeProductRequest $req) 获取产品详情
 * @method Models\DescribeProductDynamicRegisterResponse DescribeProductDynamicRegister(Models\DescribeProductDynamicRegisterRequest $req) 获取产品动态注册详情
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 获取产品列表
 * @method Models\DescribePushChannelResponse DescribePushChannel(Models\DescribePushChannelRequest $req) 查看推送通道
 * @method Models\DescribeSDKLogResponse DescribeSDKLog(Models\DescribeSDKLogRequest $req) 获取设备sdk日志
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) 获取video消费版用户信息
 * @method Models\EditFirmwareResponse EditFirmware(Models\EditFirmwareRequest $req) 本接口用于编辑固件信息
 * @method Models\GenSingleDeviceSignatureOfPublicResponse GenSingleDeviceSignatureOfPublic(Models\GenSingleDeviceSignatureOfPublicRequest $req) 获取设备的绑定签名
 * @method Models\GenerateSignedVideoURLResponse GenerateSignedVideoURL(Models\GenerateSignedVideoURLRequest $req) 获取视频防盗链播放URL
 * @method Models\GetAllFirmwareVersionResponse GetAllFirmwareVersion(Models\GetAllFirmwareVersionRequest $req) 本接口（GetAllFirmwareVersion）用于获取所有的版本列表 
 * @method Models\GetFirmwareURLResponse GetFirmwareURL(Models\GetFirmwareURLRequest $req) 本接口（GetFirmwareURL）用于获取固件存储的URL 
 * @method Models\ImportModelDefinitionResponse ImportModelDefinition(Models\ImportModelDefinitionRequest $req) 导入其它产品的数据模板，覆盖现有数据模板的物模型和产品分类信息
 * @method Models\InheritCloudStorageUserResponse InheritCloudStorageUser(Models\InheritCloudStorageUserRequest $req) 继承云存用户
 * @method Models\ListFirmwaresResponse ListFirmwares(Models\ListFirmwaresRequest $req) 本接口（ListFirmwares）用于获取固件列表 
 * @method Models\ModifyDataForwardResponse ModifyDataForward(Models\ModifyDataForwardRequest $req) 修改数据转发
 * @method Models\ModifyDataForwardStatusResponse ModifyDataForwardStatus(Models\ModifyDataForwardStatusRequest $req) 设置数据转发状态
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) 修改设备信息
 * @method Models\ModifyDeviceLogLevelResponse ModifyDeviceLogLevel(Models\ModifyDeviceLogLevelRequest $req) 更新设备日志级别
 * @method Models\ModifyForwardRuleResponse ModifyForwardRule(Models\ModifyForwardRuleRequest $req) 修改转发规则
 * @method Models\ModifyModelDefinitionResponse ModifyModelDefinition(Models\ModifyModelDefinitionRequest $req) 提供修改产品的数据模板的能力
 * @method Models\ModifyProductResponse ModifyProduct(Models\ModifyProductRequest $req) 修改产品信息
 * @method Models\ModifyProductDynamicRegisterResponse ModifyProductDynamicRegister(Models\ModifyProductDynamicRegisterRequest $req) 修改产品动态注册
 * @method Models\ModifyPushChannelResponse ModifyPushChannel(Models\ModifyPushChannelRequest $req) 更新推送通道
 * @method Models\PublishMessageResponse PublishMessage(Models\PublishMessageRequest $req) 本接口（PublishMessage）用于使用自定义透传协议进行设备远控
 * @method Models\ReportAliveDeviceResponse ReportAliveDevice(Models\ReportAliveDeviceRequest $req) 上报活跃设备
 * @method Models\ResetCloudStorageResponse ResetCloudStorage(Models\ResetCloudStorageRequest $req) 重置云存服务
 * @method Models\RetryDeviceFirmwareTaskResponse RetryDeviceFirmwareTask(Models\RetryDeviceFirmwareTaskRequest $req) 本接口用于重试设备升级任务
 * @method Models\SetForwardAuthResponse SetForwardAuth(Models\SetForwardAuthRequest $req) 设置转发权限
 * @method Models\TransferCloudStorageResponse TransferCloudStorage(Models\TransferCloudStorageRequest $req) 转移云存服务
 * @method Models\UpdateAIModelChannelResponse UpdateAIModelChannel(Models\UpdateAIModelChannelRequest $req) 更新AI推理结果推送配置
 * @method Models\UploadFirmwareResponse UploadFirmware(Models\UploadFirmwareRequest $req) 本接口（UploadFirmware）用于上传设备固件信息 
 * @method Models\WakeUpDeviceResponse WakeUpDevice(Models\WakeUpDeviceRequest $req) 设备唤醒
 */

class IotvideoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotvideo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotvideo";

    /**
     * @var string
     */
    protected $version = "2021-11-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotvideo")."\\"."V20211125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
