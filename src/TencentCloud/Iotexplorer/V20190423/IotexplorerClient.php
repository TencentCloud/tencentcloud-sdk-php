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

namespace TencentCloud\Iotexplorer\V20190423;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotexplorer\V20190423\Models as Models;

/**
 * @method Models\BindDevicesResponse BindDevices(Models\BindDevicesRequest $req) 批量绑定子设备
 * @method Models\BindProductsResponse BindProducts(Models\BindProductsRequest $req) 批量绑定子产品
 * @method Models\CallDeviceActionAsyncResponse CallDeviceActionAsync(Models\CallDeviceActionAsyncRequest $req) 提供给用户异步调用设备行为的能力
 * @method Models\CallDeviceActionSyncResponse CallDeviceActionSync(Models\CallDeviceActionSyncRequest $req) 为用户提供同步调用设备行为的能力。
 * @method Models\ControlDeviceDataResponse ControlDeviceData(Models\ControlDeviceDataRequest $req) 根据设备产品ID、设备名称，设置控制设备的属性数据。
 * @method Models\CreateBatchProductionResponse CreateBatchProduction(Models\CreateBatchProductionRequest $req) 用于新建批量生产设备
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 创建设备
 * @method Models\CreateFenceBindResponse CreateFenceBind(Models\CreateFenceBindRequest $req) 创建围栏绑定信息
 * @method Models\CreateLoRaFrequencyResponse CreateLoRaFrequency(Models\CreateLoRaFrequencyRequest $req) 创建 LoRa 自定义频点
 * @method Models\CreateLoRaGatewayResponse CreateLoRaGateway(Models\CreateLoRaGatewayRequest $req) 创建新 LoRa 网关设备接口
 * @method Models\CreatePositionFenceResponse CreatePositionFence(Models\CreatePositionFenceRequest $req) 创建围栏
 * @method Models\CreatePositionSpaceResponse CreatePositionSpace(Models\CreatePositionSpaceRequest $req) 创建位置空间
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 为用户提供新建项目的能力，用于集中管理产品和应用。
 * @method Models\CreateStudioProductResponse CreateStudioProduct(Models\CreateStudioProductRequest $req) 为用户提供新建产品的能力，用于管理用户的设备
 * @method Models\CreateTopicPolicyResponse CreateTopicPolicy(Models\CreateTopicPolicyRequest $req) 本接口（CreateTopicPolicy）用于创建一个Topic 
 * @method Models\CreateTopicRuleResponse CreateTopicRule(Models\CreateTopicRuleRequest $req) 创建规则
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备
 * @method Models\DeleteDevicesResponse DeleteDevices(Models\DeleteDevicesRequest $req) 批量删除设备
 * @method Models\DeleteFenceBindResponse DeleteFenceBind(Models\DeleteFenceBindRequest $req) 删除围栏绑定信息
 * @method Models\DeleteLoRaFrequencyResponse DeleteLoRaFrequency(Models\DeleteLoRaFrequencyRequest $req) 提供删除LoRa自定义频点的能力
 * @method Models\DeleteLoRaGatewayResponse DeleteLoRaGateway(Models\DeleteLoRaGatewayRequest $req) 删除  LoRa 网关的接口
 * @method Models\DeletePositionFenceResponse DeletePositionFence(Models\DeletePositionFenceRequest $req) 删除围栏
 * @method Models\DeletePositionSpaceResponse DeletePositionSpace(Models\DeletePositionSpaceRequest $req) 删除位置空间
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 提供删除某个项目的能力
 * @method Models\DeleteStudioProductResponse DeleteStudioProduct(Models\DeleteStudioProductRequest $req) 提供删除某个项目下产品的能力
 * @method Models\DeleteTopicPolicyResponse DeleteTopicPolicy(Models\DeleteTopicPolicyRequest $req) 本接口（DeleteTopicPolicy）用于删除Topic 
 * @method Models\DeleteTopicRuleResponse DeleteTopicRule(Models\DeleteTopicRuleRequest $req) 删除规则
 * @method Models\DescribeBatchProductionResponse DescribeBatchProduction(Models\DescribeBatchProductionRequest $req) 获取量产详情信息。
 * @method Models\DescribeBindedProductsResponse DescribeBindedProducts(Models\DescribeBindedProductsRequest $req) 获取网关产品已经绑定的子产品
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 用于查看某个设备的详细信息
 * @method Models\DescribeDeviceBindGatewayResponse DescribeDeviceBindGateway(Models\DescribeDeviceBindGatewayRequest $req) 查询设备绑定的网关设备
 * @method Models\DescribeDeviceDataResponse DescribeDeviceData(Models\DescribeDeviceDataRequest $req) 根据设备产品ID、设备名称，获取设备上报的属性数据。
 * @method Models\DescribeDeviceDataHistoryResponse DescribeDeviceDataHistory(Models\DescribeDeviceDataHistoryRequest $req) 获取设备在指定时间范围内上报的历史数据。
 * @method Models\DescribeDeviceLocationSolveResponse DescribeDeviceLocationSolve(Models\DescribeDeviceLocationSolveRequest $req) 获取实时位置解析
 * @method Models\DescribeDevicePositionListResponse DescribeDevicePositionList(Models\DescribeDevicePositionListRequest $req) 获取设备位置列表
 * @method Models\DescribeFenceBindListResponse DescribeFenceBindList(Models\DescribeFenceBindListRequest $req) 获取围栏绑定信息列表
 * @method Models\DescribeFenceEventListResponse DescribeFenceEventList(Models\DescribeFenceEventListRequest $req) 获取围栏告警事件列表
 * @method Models\DescribeFirmwareTaskResponse DescribeFirmwareTask(Models\DescribeFirmwareTaskRequest $req) 查询固件升级任务列表
 * @method Models\DescribeGatewayBindDevicesResponse DescribeGatewayBindDevices(Models\DescribeGatewayBindDevicesRequest $req) 获取网关绑定的子设备列表
 * @method Models\DescribeGatewaySubDeviceListResponse DescribeGatewaySubDeviceList(Models\DescribeGatewaySubDeviceListRequest $req) 查询绑定到家庭的网关设备的子设备列表
 * @method Models\DescribeGatewaySubProductsResponse DescribeGatewaySubProducts(Models\DescribeGatewaySubProductsRequest $req) 用于获取网关可绑定或解绑的子产品
 * @method Models\DescribeLoRaFrequencyResponse DescribeLoRaFrequency(Models\DescribeLoRaFrequencyRequest $req) 提供查询LoRa自定义频点详情的能力
 * @method Models\DescribeModelDefinitionResponse DescribeModelDefinition(Models\DescribeModelDefinitionRequest $req) 查询产品配置的数据模板信息
 * @method Models\DescribePositionFenceListResponse DescribePositionFenceList(Models\DescribePositionFenceListRequest $req) 获取围栏列表
 * @method Models\DescribeProjectResponse DescribeProject(Models\DescribeProjectRequest $req) 查询项目详情
 * @method Models\DescribeSpaceFenceEventListResponse DescribeSpaceFenceEventList(Models\DescribeSpaceFenceEventListRequest $req) 获取位置空间中围栏告警事件列表
 * @method Models\DescribeStudioProductResponse DescribeStudioProduct(Models\DescribeStudioProductRequest $req) 提供查看产品详细信息的能力，包括产品的ID、数据协议、认证类型等重要参数
 * @method Models\DescribeTopicPolicyResponse DescribeTopicPolicy(Models\DescribeTopicPolicyRequest $req) 本接口（DescribeTopicPolicy）用于查看Topic详细信息 
 * @method Models\DescribeTopicRuleResponse DescribeTopicRule(Models\DescribeTopicRuleRequest $req) 获取规则信息
 * @method Models\DirectBindDeviceInFamilyResponse DirectBindDeviceInFamily(Models\DirectBindDeviceInFamilyRequest $req) 直接绑定设备和家庭
 * @method Models\DisableTopicRuleResponse DisableTopicRule(Models\DisableTopicRuleRequest $req) 禁用规则
 * @method Models\EnableTopicRuleResponse EnableTopicRule(Models\EnableTopicRuleRequest $req) 启用规则
 * @method Models\GenSingleDeviceSignatureOfPublicResponse GenSingleDeviceSignatureOfPublic(Models\GenSingleDeviceSignatureOfPublicRequest $req) 无
 * @method Models\GetBatchProductionsListResponse GetBatchProductionsList(Models\GetBatchProductionsListRequest $req) 列出量产数据列表信息。
 * @method Models\GetCOSURLResponse GetCOSURL(Models\GetCOSURLRequest $req) 本接口（GetCOSURL）用于获取固件COS存储的上传请求URL地址
 * @method Models\GetDeviceListResponse GetDeviceList(Models\GetDeviceListRequest $req) 用于查询某个产品下的设备列表
 * @method Models\GetDeviceLocationHistoryResponse GetDeviceLocationHistory(Models\GetDeviceLocationHistoryRequest $req) 获取设备历史位置
 * @method Models\GetFamilyDeviceUserListResponse GetFamilyDeviceUserList(Models\GetFamilyDeviceUserListRequest $req) 用于获取设备绑定的用户列表
 * @method Models\GetGatewaySubDeviceListResponse GetGatewaySubDeviceList(Models\GetGatewaySubDeviceListRequest $req) 获取指定网关设备的子设备列表
 * @method Models\GetLoRaGatewayListResponse GetLoRaGatewayList(Models\GetLoRaGatewayListRequest $req) 获取 LoRa 网关列表接口
 * @method Models\GetPositionSpaceListResponse GetPositionSpaceList(Models\GetPositionSpaceListRequest $req) 获取位置空间列表
 * @method Models\GetProjectListResponse GetProjectList(Models\GetProjectListRequest $req) 提供查询用户所创建的项目列表查询功能。
 * @method Models\GetStudioProductListResponse GetStudioProductList(Models\GetStudioProductListRequest $req) 提供查询某个项目下所有产品信息的能力。
 * @method Models\GetTopicRuleListResponse GetTopicRuleList(Models\GetTopicRuleListRequest $req) 获取规则列表
 * @method Models\ListEventHistoryResponse ListEventHistory(Models\ListEventHistoryRequest $req) 获取设备的历史事件
 * @method Models\ListFirmwaresResponse ListFirmwares(Models\ListFirmwaresRequest $req) 本接口（ListFirmwares）用于获取固件列表 
 * @method Models\ListTopicPolicyResponse ListTopicPolicy(Models\ListTopicPolicyRequest $req) 本接口（ListTopicPolicy）用于获取Topic列表
 * @method Models\ModifyFenceBindResponse ModifyFenceBind(Models\ModifyFenceBindRequest $req) 更新围栏绑定信息
 * @method Models\ModifyLoRaFrequencyResponse ModifyLoRaFrequency(Models\ModifyLoRaFrequencyRequest $req) 修改LoRa自定义频点
 * @method Models\ModifyLoRaGatewayResponse ModifyLoRaGateway(Models\ModifyLoRaGatewayRequest $req) 修改 LoRa 网关信息
 * @method Models\ModifyModelDefinitionResponse ModifyModelDefinition(Models\ModifyModelDefinitionRequest $req) 提供修改产品的数据模板的能力
 * @method Models\ModifyPositionFenceResponse ModifyPositionFence(Models\ModifyPositionFenceRequest $req) 更新围栏
 * @method Models\ModifyPositionSpaceResponse ModifyPositionSpace(Models\ModifyPositionSpaceRequest $req) 更新位置空间
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改项目
 * @method Models\ModifySpacePropertyResponse ModifySpaceProperty(Models\ModifySpacePropertyRequest $req) 更新位置空间产品属性
 * @method Models\ModifyStudioProductResponse ModifyStudioProduct(Models\ModifyStudioProductRequest $req) 提供修改产品的名称和描述等信息的能力，对于已发布产品不允许进行修改。
 * @method Models\ModifyTopicPolicyResponse ModifyTopicPolicy(Models\ModifyTopicPolicyRequest $req) 本接口（UpdateTopicPolicy）用于更新Topic信息 
 * @method Models\ModifyTopicRuleResponse ModifyTopicRule(Models\ModifyTopicRuleRequest $req) 修改规则
 * @method Models\PublishBroadcastMessageResponse PublishBroadcastMessage(Models\PublishBroadcastMessageRequest $req) 发布广播消息
 * @method Models\PublishMessageResponse PublishMessage(Models\PublishMessageRequest $req) 本接口（PublishMessage）用于使用自定义透传协议进行设备远控
 * @method Models\PublishRRPCMessageResponse PublishRRPCMessage(Models\PublishRRPCMessageRequest $req) 下发RRPC消息
 * @method Models\ReleaseStudioProductResponse ReleaseStudioProduct(Models\ReleaseStudioProductRequest $req) 产品开发完成并测试通过后，通过发布产品将产品设置为发布状态
 * @method Models\SearchPositionSpaceResponse SearchPositionSpace(Models\SearchPositionSpaceRequest $req) 搜索位置空间
 * @method Models\SearchStudioProductResponse SearchStudioProduct(Models\SearchStudioProductRequest $req) 提供根据产品名称查找产品的能力
 * @method Models\SearchTopicRuleResponse SearchTopicRule(Models\SearchTopicRuleRequest $req) 搜索规则
 * @method Models\UnbindDevicesResponse UnbindDevices(Models\UnbindDevicesRequest $req) 批量解绑子设备
 * @method Models\UnbindProductsResponse UnbindProducts(Models\UnbindProductsRequest $req) 批量解绑子产品
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
