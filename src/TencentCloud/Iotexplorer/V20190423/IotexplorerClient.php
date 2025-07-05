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

namespace TencentCloud\Iotexplorer\V20190423;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotexplorer\V20190423\Models as Models;

/**
 * @method Models\ActivateTWeCallLicenseResponse ActivateTWeCallLicense(Models\ActivateTWeCallLicenseRequest $req) 激活
 * @method Models\BindCloudStorageUserResponse BindCloudStorageUser(Models\BindCloudStorageUserRequest $req) 绑定云存用户
 * @method Models\BindDevicesResponse BindDevices(Models\BindDevicesRequest $req) 批量绑定子设备
 * @method Models\BindProductsResponse BindProducts(Models\BindProductsRequest $req) 批量绑定子产品。
 * @method Models\CallDeviceActionAsyncResponse CallDeviceActionAsync(Models\CallDeviceActionAsyncRequest $req) 提供给用户异步调用设备行为的能力
 * @method Models\CallDeviceActionSyncResponse CallDeviceActionSync(Models\CallDeviceActionSyncRequest $req) 为用户提供同步调用设备行为的能力。
 * @method Models\CancelAssignTWeCallLicenseResponse CancelAssignTWeCallLicense(Models\CancelAssignTWeCallLicenseRequest $req) 取消分配
 * @method Models\ChangeP2PRouteResponse ChangeP2PRoute(Models\ChangeP2PRouteRequest $req) p2p路线切换（此接口目前处于内测接口，可以联系申请加白 ）
 * @method Models\CheckFirmwareUpdateResponse CheckFirmwareUpdate(Models\CheckFirmwareUpdateRequest $req) 本接口（CheckFirmwareUpdate）用于查询设备可升级固件版本
 * @method Models\ControlDeviceDataResponse ControlDeviceData(Models\ControlDeviceDataRequest $req) 根据设备产品ID、设备名称，设置控制设备的属性数据。
 * @method Models\CreateAISearchTaskAsyncResponse CreateAISearchTaskAsync(Models\CreateAISearchTaskAsyncRequest $req) 创建视频语义异步搜索任务
 * @method Models\CreateBatchProductionResponse CreateBatchProduction(Models\CreateBatchProductionRequest $req) 用于新建批量生产设备
 * @method Models\CreateCloudStorageAIServiceResponse CreateCloudStorageAIService(Models\CreateCloudStorageAIServiceRequest $req) 开通设备云存AI分析服务
 * @method Models\CreateCloudStorageAIServiceTaskResponse CreateCloudStorageAIServiceTask(Models\CreateCloudStorageAIServiceTaskRequest $req) 创建设备云存 AI 分析任务
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 创建设备
 * @method Models\CreateDeviceChannelResponse CreateDeviceChannel(Models\CreateDeviceChannelRequest $req) 创建设备通道
 * @method Models\CreateExternalSourceAIServiceTaskResponse CreateExternalSourceAIServiceTask(Models\CreateExternalSourceAIServiceTaskRequest $req) 创建外部视频 AI 分析任务
 * @method Models\CreateFenceBindResponse CreateFenceBind(Models\CreateFenceBindRequest $req) > 创建围栏绑定信息。
 * @method Models\CreateFreeCloudStorageResponse CreateFreeCloudStorage(Models\CreateFreeCloudStorageRequest $req) 开通免费云存服务
 * @method Models\CreateIotVideoCloudStorageResponse CreateIotVideoCloudStorage(Models\CreateIotVideoCloudStorageRequest $req) 开通云存服务
 * @method Models\CreateLoRaFrequencyResponse CreateLoRaFrequency(Models\CreateLoRaFrequencyRequest $req) 创建 LoRa 自定义频点
 * @method Models\CreateLoRaGatewayResponse CreateLoRaGateway(Models\CreateLoRaGatewayRequest $req) 创建新 LoRa 网关设备接口
 * @method Models\CreatePositionFenceResponse CreatePositionFence(Models\CreatePositionFenceRequest $req) 创建围栏。
 * @method Models\CreatePositionSpaceResponse CreatePositionSpace(Models\CreatePositionSpaceRequest $req) 创建位置空间。
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 为用户提供新建项目的能力，用于集中管理产品和应用。
 * @method Models\CreateStudioProductResponse CreateStudioProduct(Models\CreateStudioProductRequest $req) 为用户提供新建产品的能力，用于管理用户的设备
 * @method Models\CreateTRTCSignaturesWithRoomIdResponse CreateTRTCSignaturesWithRoomId(Models\CreateTRTCSignaturesWithRoomIdRequest $req) 创建TRTC通话参数
 * @method Models\CreateTWeSeeRecognitionTaskResponse CreateTWeSeeRecognitionTask(Models\CreateTWeSeeRecognitionTaskRequest $req) 创建 TWeSee 语义理解任务
 * @method Models\CreateTopicPolicyResponse CreateTopicPolicy(Models\CreateTopicPolicyRequest $req) 本接口（CreateTopicPolicy）用于创建一个Topic
 * @method Models\CreateTopicRuleResponse CreateTopicRule(Models\CreateTopicRuleRequest $req) 创建规则
 * @method Models\DeleteCloudStorageEventResponse DeleteCloudStorageEvent(Models\DeleteCloudStorageEventRequest $req) 删除云存事件
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备
 * @method Models\DeleteDevicesResponse DeleteDevices(Models\DeleteDevicesRequest $req) 批量删除设备
 * @method Models\DeleteFenceBindResponse DeleteFenceBind(Models\DeleteFenceBindRequest $req) 删除围栏绑定信息。
 * @method Models\DeleteLoRaFrequencyResponse DeleteLoRaFrequency(Models\DeleteLoRaFrequencyRequest $req) 提供删除LoRa自定义频点的能力
 * @method Models\DeleteLoRaGatewayResponse DeleteLoRaGateway(Models\DeleteLoRaGatewayRequest $req) 删除  LoRa 网关的接口
 * @method Models\DeletePositionFenceResponse DeletePositionFence(Models\DeletePositionFenceRequest $req) 删除围栏。
 * @method Models\DeletePositionSpaceResponse DeletePositionSpace(Models\DeletePositionSpaceRequest $req) 删除位置空间。
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 提供删除某个项目的能力。
 * @method Models\DeleteStudioProductResponse DeleteStudioProduct(Models\DeleteStudioProductRequest $req) 提供删除某个项目下产品的能力
 * @method Models\DeleteTopicPolicyResponse DeleteTopicPolicy(Models\DeleteTopicPolicyRequest $req) 本接口（DeleteTopicPolicy）用于删除Topic
 * @method Models\DeleteTopicRuleResponse DeleteTopicRule(Models\DeleteTopicRuleRequest $req) 删除规则。
 * @method Models\DescribeAISearchTaskAsyncResponse DescribeAISearchTaskAsync(Models\DescribeAISearchTaskAsyncRequest $req) 获取视频语义异步搜索任务详情
 * @method Models\DescribeActivateDeviceResponse DescribeActivateDevice(Models\DescribeActivateDeviceRequest $req) 获取设备激活详情
 * @method Models\DescribeActivateLicenseServiceResponse DescribeActivateLicenseService(Models\DescribeActivateLicenseServiceRequest $req) 获取增值服务激活码详情
 * @method Models\DescribeBatchProductionResponse DescribeBatchProduction(Models\DescribeBatchProductionRequest $req) 获取量产详情信息。
 * @method Models\DescribeBindedProductsResponse DescribeBindedProducts(Models\DescribeBindedProductsRequest $req) 获取网关产品已经绑定的子产品
 * @method Models\DescribeCloudStorageResponse DescribeCloudStorage(Models\DescribeCloudStorageRequest $req) 获取设备云存服务详情
 * @method Models\DescribeCloudStorageAIServiceResponse DescribeCloudStorageAIService(Models\DescribeCloudStorageAIServiceRequest $req) 查询指定设备的云存 AI 服务开通状态与参数配置
 * @method Models\DescribeCloudStorageAIServiceCallbackResponse DescribeCloudStorageAIServiceCallback(Models\DescribeCloudStorageAIServiceCallbackRequest $req) 查询云存AI分析回调配置
 * @method Models\DescribeCloudStorageAIServiceTaskResponse DescribeCloudStorageAIServiceTask(Models\DescribeCloudStorageAIServiceTaskRequest $req) 查询指定的云存 AI 分析任务
 * @method Models\DescribeCloudStorageAIServiceTasksResponse DescribeCloudStorageAIServiceTasks(Models\DescribeCloudStorageAIServiceTasksRequest $req) 查询指定设备的云存 AI 分析任务列表
 * @method Models\DescribeCloudStorageDateResponse DescribeCloudStorageDate(Models\DescribeCloudStorageDateRequest $req) 获取具有云存的日期
 * @method Models\DescribeCloudStorageEventsResponse DescribeCloudStorageEvents(Models\DescribeCloudStorageEventsRequest $req) 拉取云存事件列表
 * @method Models\DescribeCloudStorageEventsWithAITasksResponse DescribeCloudStorageEventsWithAITasks(Models\DescribeCloudStorageEventsWithAITasksRequest $req) 拉取云存事件列表
 * @method Models\DescribeCloudStorageMultiThumbnailResponse DescribeCloudStorageMultiThumbnail(Models\DescribeCloudStorageMultiThumbnailRequest $req) 拉取多个云存事件缩略图
 * @method Models\DescribeCloudStorageOrderResponse DescribeCloudStorageOrder(Models\DescribeCloudStorageOrderRequest $req) 查询云存服务详情
 * @method Models\DescribeCloudStoragePackageConsumeDetailsResponse DescribeCloudStoragePackageConsumeDetails(Models\DescribeCloudStoragePackageConsumeDetailsRequest $req) 获取云存套餐包消耗详细记录
 * @method Models\DescribeCloudStoragePackageConsumeStatsResponse DescribeCloudStoragePackageConsumeStats(Models\DescribeCloudStoragePackageConsumeStatsRequest $req) 获取云存套餐包消耗统计
 * @method Models\DescribeCloudStorageStreamDataResponse DescribeCloudStorageStreamData(Models\DescribeCloudStorageStreamDataRequest $req) 获取设备图片流数据
 * @method Models\DescribeCloudStorageThumbnailResponse DescribeCloudStorageThumbnail(Models\DescribeCloudStorageThumbnailRequest $req) 拉取云存事件缩略图
 * @method Models\DescribeCloudStorageThumbnailListResponse DescribeCloudStorageThumbnailList(Models\DescribeCloudStorageThumbnailListRequest $req) 批量拉取云存事件缩略图
 * @method Models\DescribeCloudStorageTimeResponse DescribeCloudStorageTime(Models\DescribeCloudStorageTimeRequest $req) 获取某一天云存时间轴
 * @method Models\DescribeCloudStorageUsersResponse DescribeCloudStorageUsers(Models\DescribeCloudStorageUsersRequest $req) 拉取云存用户列表
 * @method Models\DescribeCsReportCountDataInfoResponse DescribeCsReportCountDataInfo(Models\DescribeCsReportCountDataInfoRequest $req) 获取云存上报统计信息
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 用于查看某个设备的详细信息
 * @method Models\DescribeDeviceBindGatewayResponse DescribeDeviceBindGateway(Models\DescribeDeviceBindGatewayRequest $req) 查询设备绑定的网关设备
 * @method Models\DescribeDeviceDataResponse DescribeDeviceData(Models\DescribeDeviceDataRequest $req) 根据设备产品ID、设备名称，获取设备上报的属性数据。
 * @method Models\DescribeDeviceDataHistoryResponse DescribeDeviceDataHistory(Models\DescribeDeviceDataHistoryRequest $req) 获取设备在指定时间范围内上报的历史数据。
 * @method Models\DescribeDeviceFirmWareResponse DescribeDeviceFirmWare(Models\DescribeDeviceFirmWareRequest $req) 获取设备固件信息
 * @method Models\DescribeDeviceFirmwaresResponse DescribeDeviceFirmwares(Models\DescribeDeviceFirmwaresRequest $req) 获取设备当前固件信息
 * @method Models\DescribeDeviceLocationSolveResponse DescribeDeviceLocationSolve(Models\DescribeDeviceLocationSolveRequest $req) 获取实时位置解析依赖于teg位置服务，近30天调用只有2个个人账号调用，产品推下线

获取实时位置解析
 * @method Models\DescribeDevicePackagesResponse DescribeDevicePackages(Models\DescribeDevicePackagesRequest $req) 根据设备信息拉取有效套餐列表
 * @method Models\DescribeDevicePositionListResponse DescribeDevicePositionList(Models\DescribeDevicePositionListRequest $req) 获取设备位置列表
 * @method Models\DescribeFenceBindListResponse DescribeFenceBindList(Models\DescribeFenceBindListRequest $req) 获取围栏绑定信息列表。
 * @method Models\DescribeFenceEventListResponse DescribeFenceEventList(Models\DescribeFenceEventListRequest $req) 获取围栏告警事件列表。
 * @method Models\DescribeFirmwareResponse DescribeFirmware(Models\DescribeFirmwareRequest $req) 查询固件信息
 * @method Models\DescribeFirmwareTaskResponse DescribeFirmwareTask(Models\DescribeFirmwareTaskRequest $req) 查询固件升级任务列表
 * @method Models\DescribeFirmwareUpdateStatusResponse DescribeFirmwareUpdateStatus(Models\DescribeFirmwareUpdateStatusRequest $req) 本接口（DescribeFirmwareUpdateStatus）用于查询设备固件升级状态及进度。
 * @method Models\DescribeFreeCloudStorageNumResponse DescribeFreeCloudStorageNum(Models\DescribeFreeCloudStorageNumRequest $req) 查询云存卡套餐信息
 * @method Models\DescribeGatewayBindDevicesResponse DescribeGatewayBindDevices(Models\DescribeGatewayBindDevicesRequest $req) 获取网关绑定的子设备列表
 * @method Models\DescribeGatewaySubDeviceListResponse DescribeGatewaySubDeviceList(Models\DescribeGatewaySubDeviceListRequest $req) 查询绑定到家庭的网关设备的子设备列表
 * @method Models\DescribeGatewaySubProductsResponse DescribeGatewaySubProducts(Models\DescribeGatewaySubProductsRequest $req) 用于获取网关可绑定或解绑的子产品。
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 公共实例过期时间 0001-01-01T00:00:00Z，公共实例是永久有效
 * @method Models\DescribeLoRaFrequencyResponse DescribeLoRaFrequency(Models\DescribeLoRaFrequencyRequest $req) 提供查询LoRa自定义频点详情的能力
 * @method Models\DescribeModelDefinitionResponse DescribeModelDefinition(Models\DescribeModelDefinitionRequest $req) 查询产品配置的数据模板信息
 * @method Models\DescribeP2PRouteResponse DescribeP2PRoute(Models\DescribeP2PRouteRequest $req) 当前p2p线路
 * @method Models\DescribePackageConsumeTaskResponse DescribePackageConsumeTask(Models\DescribePackageConsumeTaskRequest $req) 查询套餐消耗记录详情
 * @method Models\DescribePackageConsumeTasksResponse DescribePackageConsumeTasks(Models\DescribePackageConsumeTasksRequest $req) 查询套餐消耗记录列表
 * @method Models\DescribePositionFenceListResponse DescribePositionFenceList(Models\DescribePositionFenceListRequest $req) 获取围栏列表
 * @method Models\DescribeProductCloudStorageAIServiceResponse DescribeProductCloudStorageAIService(Models\DescribeProductCloudStorageAIServiceRequest $req) 查询指定产品的云存 AI 服务开通状态
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 查询项目详情
 * @method Models\DescribeSpaceFenceEventListResponse DescribeSpaceFenceEventList(Models\DescribeSpaceFenceEventListRequest $req) 获取位置空间中围栏告警事件列表。
 * @method Models\DescribeStudioProductResponse DescribeStudioProduct(Models\DescribeStudioProductRequest $req) 提供查看产品详细信息的能力，包括产品的ID、数据协议、认证类型等重要参数
 * @method Models\DescribeTWeSeeConfigResponse DescribeTWeSeeConfig(Models\DescribeTWeSeeConfigRequest $req) 拉取 TWeSee 配置
 * @method Models\DescribeTopicPolicyResponse DescribeTopicPolicy(Models\DescribeTopicPolicyRequest $req) 本接口（DescribeTopicPolicy）用于查看Topic详细信息
 * @method Models\DescribeTopicRuleResponse DescribeTopicRule(Models\DescribeTopicRuleRequest $req) 获取规则信息
 * @method Models\DescribeUnbindedDevicesResponse DescribeUnbindedDevices(Models\DescribeUnbindedDevicesRequest $req) 获取未绑定的设备列表
 * @method Models\DescribeVideoLicenseResponse DescribeVideoLicense(Models\DescribeVideoLicenseRequest $req) 用于查询视频激活码统计概览
 * @method Models\DirectBindDeviceInFamilyResponse DirectBindDeviceInFamily(Models\DirectBindDeviceInFamilyRequest $req) 直接绑定设备和家庭
 * @method Models\DisableTopicRuleResponse DisableTopicRule(Models\DisableTopicRuleRequest $req) 禁用规则
 * @method Models\DismissRoomByStrRoomIdFromTRTCResponse DismissRoomByStrRoomIdFromTRTC(Models\DismissRoomByStrRoomIdFromTRTCRequest $req) 解散TRTC房间
 * @method Models\EnableTopicRuleResponse EnableTopicRule(Models\EnableTopicRuleRequest $req) 启用规则
 * @method Models\GenSingleDeviceSignatureOfPublicResponse GenSingleDeviceSignatureOfPublic(Models\GenSingleDeviceSignatureOfPublicRequest $req) 无
 * @method Models\GenerateCloudStorageAIServiceTaskFileURLResponse GenerateCloudStorageAIServiceTaskFileURL(Models\GenerateCloudStorageAIServiceTaskFileURLRequest $req) 获取云存 AI 分析任务输出文件的下载地址
 * @method Models\GenerateSignedVideoURLResponse GenerateSignedVideoURL(Models\GenerateSignedVideoURLRequest $req) 获取视频防盗链播放URL
 * @method Models\GetAuthMiniProgramAppListResponse GetAuthMiniProgramAppList(Models\GetAuthMiniProgramAppListRequest $req) 查询小程序列表
 * @method Models\GetBatchProductionsListResponse GetBatchProductionsList(Models\GetBatchProductionsListRequest $req) 列出量产数据列表信息。
 * @method Models\GetCOSURLResponse GetCOSURL(Models\GetCOSURLRequest $req) 本接口（GetCOSURL）用于获取固件COS存储的上传请求URL地址
 * @method Models\GetDeviceListResponse GetDeviceList(Models\GetDeviceListRequest $req) 用于查询某个产品下的设备列表
 * @method Models\GetDeviceLocationHistoryResponse GetDeviceLocationHistory(Models\GetDeviceLocationHistoryRequest $req) 获取设备历史位置
 * @method Models\GetDeviceSumStatisticsResponse GetDeviceSumStatistics(Models\GetDeviceSumStatisticsRequest $req) 拉取设备统计汇总数据
 * @method Models\GetFamilyDeviceUserListResponse GetFamilyDeviceUserList(Models\GetFamilyDeviceUserListRequest $req) 用于获取设备绑定的用户列表
 * @method Models\GetGatewaySubDeviceListResponse GetGatewaySubDeviceList(Models\GetGatewaySubDeviceListRequest $req) 获取指定网关设备的子设备列表
 * @method Models\GetLoRaGatewayListResponse GetLoRaGatewayList(Models\GetLoRaGatewayListRequest $req) 获取 LoRa 网关列表接口
 * @method Models\GetPositionSpaceListResponse GetPositionSpaceList(Models\GetPositionSpaceListRequest $req) 获取位置空间列表
 * @method Models\GetProjectListResponse GetProjectList(Models\GetProjectListRequest $req) 提供查询用户所创建的项目列表查询功能。
 * @method Models\GetStudioProductListResponse GetStudioProductList(Models\GetStudioProductListRequest $req) 提供查询某个项目下所有产品信息的能力。
 * @method Models\GetTWeCallActiveStatusResponse GetTWeCallActiveStatus(Models\GetTWeCallActiveStatusRequest $req) 查询激活状态
 * @method Models\GetTopicRuleListResponse GetTopicRuleList(Models\GetTopicRuleListRequest $req) 获取规则列表
 * @method Models\GetWechatDeviceTicketResponse GetWechatDeviceTicket(Models\GetWechatDeviceTicketRequest $req) 查询微信设备授权票据
 * @method Models\InheritCloudStorageUserResponse InheritCloudStorageUser(Models\InheritCloudStorageUserRequest $req) 继承云存用户
 * @method Models\InvokeAISearchServiceResponse InvokeAISearchService(Models\InvokeAISearchServiceRequest $req) 视频语义搜索
 * @method Models\InvokeCloudStorageAIServiceTaskResponse InvokeCloudStorageAIServiceTask(Models\InvokeCloudStorageAIServiceTaskRequest $req) 同步执行设备云存 AI 分析任务
 * @method Models\InvokeExternalSourceAIServiceTaskResponse InvokeExternalSourceAIServiceTask(Models\InvokeExternalSourceAIServiceTaskRequest $req) 创建外部视频 AI 分析任务
 * @method Models\InvokeTWeSeeRecognitionTaskResponse InvokeTWeSeeRecognitionTask(Models\InvokeTWeSeeRecognitionTaskRequest $req) 同步执行 TWeSee 语义理解任务
 * @method Models\InvokeVideosKeywordsAnalyzerResponse InvokeVideosKeywordsAnalyzer(Models\InvokeVideosKeywordsAnalyzerRequest $req) 获取某个时间段的视频内容关键字
 * @method Models\ListEventHistoryResponse ListEventHistory(Models\ListEventHistoryRequest $req) 获取设备的历史事件
 * @method Models\ListFirmwaresResponse ListFirmwares(Models\ListFirmwaresRequest $req) 本接口（ListFirmwares）用于获取固件列表
 * @method Models\ListTopicPolicyResponse ListTopicPolicy(Models\ListTopicPolicyRequest $req) 本接口（ListTopicPolicy）用于获取Topic列表
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) 更新应用信息
 * @method Models\ModifyCloudStorageAIServiceResponse ModifyCloudStorageAIService(Models\ModifyCloudStorageAIServiceRequest $req) 修改指定设备的云存 AI 服务参数配置
 * @method Models\ModifyCloudStorageAIServiceCallbackResponse ModifyCloudStorageAIServiceCallback(Models\ModifyCloudStorageAIServiceCallbackRequest $req) 修改云存AI分析回调配置
 * @method Models\ModifyFenceBindResponse ModifyFenceBind(Models\ModifyFenceBindRequest $req) 更新围栏绑定信息。
 * @method Models\ModifyLoRaFrequencyResponse ModifyLoRaFrequency(Models\ModifyLoRaFrequencyRequest $req) 修改LoRa自定义频点
 * @method Models\ModifyLoRaGatewayResponse ModifyLoRaGateway(Models\ModifyLoRaGatewayRequest $req) 修改 LoRa 网关信息
 * @method Models\ModifyModelDefinitionResponse ModifyModelDefinition(Models\ModifyModelDefinitionRequest $req) 提供修改产品的数据模板的能力
 * @method Models\ModifyPositionFenceResponse ModifyPositionFence(Models\ModifyPositionFenceRequest $req) 更新围栏。
 * @method Models\ModifyPositionSpaceResponse ModifyPositionSpace(Models\ModifyPositionSpaceRequest $req) 更新位置空间。
 * @method Models\ModifyProductCloudStorageAIServiceResponse ModifyProductCloudStorageAIService(Models\ModifyProductCloudStorageAIServiceRequest $req) 修改指定产品的云存 AI 服务开通状态
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改项目。
 * @method Models\ModifySpacePropertyResponse ModifySpaceProperty(Models\ModifySpacePropertyRequest $req) 更新位置空间产品属性
 * @method Models\ModifyStudioProductResponse ModifyStudioProduct(Models\ModifyStudioProductRequest $req) 提供修改产品的名称和描述等信息的能力，对于已发布产品不允许进行修改。
 * @method Models\ModifyTWeSeeConfigResponse ModifyTWeSeeConfig(Models\ModifyTWeSeeConfigRequest $req) 修改 TWeSee 配置
 * @method Models\ModifyTopicPolicyResponse ModifyTopicPolicy(Models\ModifyTopicPolicyRequest $req) 本接口（UpdateTopicPolicy）用于更新Topic信息
 * @method Models\ModifyTopicRuleResponse ModifyTopicRule(Models\ModifyTopicRuleRequest $req) 修改规则
 * @method Models\PauseTWeCallDeviceResponse PauseTWeCallDevice(Models\PauseTWeCallDeviceRequest $req) 暂停设备
 * @method Models\PublishBroadcastMessageResponse PublishBroadcastMessage(Models\PublishBroadcastMessageRequest $req) 发布广播消息、发布RRPC消息属于早期服务，目前已停止维护，需要从官网下线。

发布广播消息
 * @method Models\PublishFirmwareUpdateMessageResponse PublishFirmwareUpdateMessage(Models\PublishFirmwareUpdateMessageRequest $req) 本接口（PublishFirmwareUpdateMessage）用于用户确认升级后，云端向设备发起固件升级请求。
 * @method Models\PublishMessageResponse PublishMessage(Models\PublishMessageRequest $req) 本接口（PublishMessage）用于使用自定义透传协议进行设备远控
 * @method Models\PublishRRPCMessageResponse PublishRRPCMessage(Models\PublishRRPCMessageRequest $req) 发布广播消息、发布RRPC消息属于早期服务，目前已停止维护，需要从官网下线。

下发RRPC消息
 * @method Models\ReleaseStudioProductResponse ReleaseStudioProduct(Models\ReleaseStudioProductRequest $req) 产品开发完成并测试通过后，通过发布产品将产品设置为发布状态
 * @method Models\RemoveUserByRoomIdFromTRTCResponse RemoveUserByRoomIdFromTRTC(Models\RemoveUserByRoomIdFromTRTCRequest $req) TRTC操作，将用户从房间移出
 * @method Models\ResetCloudStorageResponse ResetCloudStorage(Models\ResetCloudStorageRequest $req) 重置云存服务
 * @method Models\ResetCloudStorageAIServiceResponse ResetCloudStorageAIService(Models\ResetCloudStorageAIServiceRequest $req) 重置指定设备的云存 AI 服务
 * @method Models\ResetCloudStorageEventResponse ResetCloudStorageEvent(Models\ResetCloudStorageEventRequest $req) 重置云存事件
 * @method Models\ResetTWeCallDeviceResponse ResetTWeCallDevice(Models\ResetTWeCallDeviceRequest $req) 重置设备
 * @method Models\ResumeWeCallDeviceResponse ResumeWeCallDevice(Models\ResumeWeCallDeviceRequest $req) 恢复设备
 * @method Models\SearchPositionSpaceResponse SearchPositionSpace(Models\SearchPositionSpaceRequest $req) 搜索位置空间
 * @method Models\SearchStudioProductResponse SearchStudioProduct(Models\SearchStudioProductRequest $req) 提供根据产品名称查找产品的能力
 * @method Models\SearchTopicRuleResponse SearchTopicRule(Models\SearchTopicRuleRequest $req) 搜索规则
 * @method Models\TransferCloudStorageResponse TransferCloudStorage(Models\TransferCloudStorageRequest $req) 转移云存服务
 * @method Models\TransferTWeCallDeviceResponse TransferTWeCallDevice(Models\TransferTWeCallDeviceRequest $req) 转移设备
 * @method Models\UnbindDevicesResponse UnbindDevices(Models\UnbindDevicesRequest $req) 批量解绑子设备
 * @method Models\UnbindProductsResponse UnbindProducts(Models\UnbindProductsRequest $req) 批量解绑子产品。
 * @method Models\UpdateDeviceTWeCallAuthorizeStatusResponse UpdateDeviceTWeCallAuthorizeStatus(Models\UpdateDeviceTWeCallAuthorizeStatusRequest $req) 更新用户对设备的TweCall授权状态
 * @method Models\UpdateDevicesEnableStateResponse UpdateDevicesEnableState(Models\UpdateDevicesEnableStateRequest $req) 批量禁用启用设备
 * @method Models\UpdateFirmwareResponse UpdateFirmware(Models\UpdateFirmwareRequest $req) 本接口（UpdateFirmware）用于对指定设备发起固件升级请求
 * @method Models\UploadFirmwareResponse UploadFirmware(Models\UploadFirmwareRequest $req) 本接口（UploadFirmware）用于创建设备固件版本信息，在平台用于固件版本升级、固件资源下发等。
 */

class IotexplorerClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotexplorer.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotexplorer";

    /**
     * @var string
     */
    protected $version = "2019-04-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotexplorer")."\\"."V20190423\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
