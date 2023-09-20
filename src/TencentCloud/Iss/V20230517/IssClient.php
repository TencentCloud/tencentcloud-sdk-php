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

namespace TencentCloud\Iss\V20230517;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iss\V20230517\Models as Models;

/**
 * @method Models\AddAITaskResponse AddAITask(Models\AddAITaskRequest $req) 添加AI任务
 * @method Models\AddOrganizationResponse AddOrganization(Models\AddOrganizationRequest $req) 用于新增组织。
 * @method Models\AddRecordBackupPlanResponse AddRecordBackupPlan(Models\AddRecordBackupPlanRequest $req) 用于新增录像上云计划 （当前仅适用于通过GB28181协议和网关接入的设备/视频通道）
 * @method Models\AddRecordBackupTemplateResponse AddRecordBackupTemplate(Models\AddRecordBackupTemplateRequest $req) 用于新增录像上云模板。
> 该功能本质是拉取设备本地录像数据上云（即存在 IPC 摄像头存储卡或 NVR 硬盘中的录像），操作时需先设定录像时间段（即想要上云的设备本地录像），再设定上云时间段和上云倍速，平台将于上云时间段倍速拉取设备对应前一天的录像时间段数据。

> 设定需至少满足（上云时间段=前一天的录像时间段/上云倍速），建议上云时间段可多设定10%左右的时间，避免因网络波动导致数据拉取不完整。
 * @method Models\AddRecordPlanResponse AddRecordPlan(Models\AddRecordPlanRequest $req) 用于新增实时上云计划
 * @method Models\AddRecordRetrieveTaskResponse AddRecordRetrieveTask(Models\AddRecordRetrieveTaskRequest $req) 用于新建取回任务
 * @method Models\AddRecordTemplateResponse AddRecordTemplate(Models\AddRecordTemplateRequest $req) 用于新增实时上云模板
 * @method Models\AddStreamAuthResponse AddStreamAuth(Models\AddStreamAuthRequest $req) 用于设置推拉流鉴权配置。
 * @method Models\AddUserDeviceResponse AddUserDevice(Models\AddUserDeviceRequest $req) 用于新增单个设备。添加设备之后，可根据返回结果到设备上进行配置，配置后等待设备注册/推流。
 * @method Models\BatchOperateDeviceResponse BatchOperateDevice(Models\BatchOperateDeviceRequest $req) 用于批量操作（启用，禁用，删除）设备
 * @method Models\CheckDomainResponse CheckDomain(Models\CheckDomainRequest $req) 用于检测域名是否备案。
 * @method Models\ControlDevicePTZResponse ControlDevicePTZ(Models\ControlDevicePTZRequest $req) 用于设备通道云台控制，包括转动、变倍、变焦、光圈等。
 * @method Models\ControlDevicePresetResponse ControlDevicePreset(Models\ControlDevicePresetRequest $req) 用于操作设备预置位，包括设置、删除、调用。
 * @method Models\ControlDeviceStreamResponse ControlDeviceStream(Models\ControlDeviceStreamRequest $req) 用于获取设备的实时开流地址。
 * @method Models\ControlRecordResponse ControlRecord(Models\ControlRecordRequest $req) 用于录像回放过程中的倍速、跳转、播放/暂停/停止等控制。
 * @method Models\ControlRecordTimelineResponse ControlRecordTimeline(Models\ControlRecordTimelineRequest $req) 用于查询设备本地录像时间轴信息，为NVR/IPC本地存储的录像。
 * @method Models\DeleteAITaskResponse DeleteAITask(Models\DeleteAITaskRequest $req) 删除AI任务
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) 用于删除域名。
 * @method Models\DeleteGatewayResponse DeleteGateway(Models\DeleteGatewayRequest $req) 用于删除网关。
 * @method Models\DeleteOrganizationResponse DeleteOrganization(Models\DeleteOrganizationRequest $req) 用于删除组织。
 * @method Models\DeleteRecordBackupPlanResponse DeleteRecordBackupPlan(Models\DeleteRecordBackupPlanRequest $req) 用于删除录像上云模板。
 * @method Models\DeleteRecordBackupTemplateResponse DeleteRecordBackupTemplate(Models\DeleteRecordBackupTemplateRequest $req) 用于删除录像上云模板。
 * @method Models\DeleteRecordPlanResponse DeleteRecordPlan(Models\DeleteRecordPlanRequest $req) 用于删除实时上云计划
 * @method Models\DeleteRecordRetrieveTaskResponse DeleteRecordRetrieveTask(Models\DeleteRecordRetrieveTaskRequest $req) 用于删除取回任务
 * @method Models\DeleteRecordTemplateResponse DeleteRecordTemplate(Models\DeleteRecordTemplateRequest $req) 用于删除实时上云模板
 * @method Models\DeleteUserDeviceResponse DeleteUserDevice(Models\DeleteUserDeviceRequest $req) 用于删除已添加的设备。
 * @method Models\DescribeAITaskResponse DescribeAITask(Models\DescribeAITaskRequest $req) 获取AI任务详情
 * @method Models\DescribeAITaskResultResponse DescribeAITaskResult(Models\DescribeAITaskResultRequest $req) 获取AI任务识别结果
 * @method Models\DescribeCNAMEResponse DescribeCNAME(Models\DescribeCNAMERequest $req) 用于根据服务节点获取 CNAME 值。
 * @method Models\DescribeDeviceChannelResponse DescribeDeviceChannel(Models\DescribeDeviceChannelRequest $req) 用于查询设备的通道。
 * @method Models\DescribeDevicePresetResponse DescribeDevicePreset(Models\DescribeDevicePresetRequest $req) 用于查询设备通道预置位信息。
 * @method Models\DescribeDeviceRegionResponse DescribeDeviceRegion(Models\DescribeDeviceRegionRequest $req) 用于添加设备时，查询设备可以使用的服务节点，查询结果为已经绑定了域名的服务节点。
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) 用于查询添加的域名列表。
 * @method Models\DescribeDomainRegionResponse DescribeDomainRegion(Models\DescribeDomainRegionRequest $req) 用于用户添加域名时，查询可以绑定的服务节点，结果为平台支持的所有服务节点。（注意：每个服务节点只能绑定一个域名）
 * @method Models\DescribeGatewayResponse DescribeGateway(Models\DescribeGatewayRequest $req) 用于获取网关详情。
 * @method Models\DescribeGatewayMonitorResponse DescribeGatewayMonitor(Models\DescribeGatewayMonitorRequest $req) 用于获取网关的数据及流量监控信息。
 * @method Models\DescribeGatewayProtocolResponse DescribeGatewayProtocol(Models\DescribeGatewayProtocolRequest $req) 用于查询网关接入协议。
 * @method Models\DescribeGatewayVersionResponse DescribeGatewayVersion(Models\DescribeGatewayVersionRequest $req) 查询网关服务版本
 * @method Models\DescribeOrganizationResponse DescribeOrganization(Models\DescribeOrganizationRequest $req) 用于查询组织。
 * @method Models\DescribeRecordBackupPlanResponse DescribeRecordBackupPlan(Models\DescribeRecordBackupPlanRequest $req) 用于查询录像上云计划详情。
 * @method Models\DescribeRecordBackupTemplateResponse DescribeRecordBackupTemplate(Models\DescribeRecordBackupTemplateRequest $req) 用于查询录像上云模板详情。
 * @method Models\DescribeRecordFileResponse DescribeRecordFile(Models\DescribeRecordFileRequest $req) 用于查询设备云端录像时间轴信息（即为视频上云后设置录像计划后云存储的录像）
 * @method Models\DescribeRecordPlanResponse DescribeRecordPlan(Models\DescribeRecordPlanRequest $req) 用于查询实时上云计划详情
 * @method Models\DescribeRecordPlaybackUrlResponse DescribeRecordPlaybackUrl(Models\DescribeRecordPlaybackUrlRequest $req) 用于获取云端录像回放url地址
 * @method Models\DescribeRecordRetrieveTaskResponse DescribeRecordRetrieveTask(Models\DescribeRecordRetrieveTaskRequest $req) 用于查询云录像取回任务详情
 * @method Models\DescribeRecordSliceResponse DescribeRecordSlice(Models\DescribeRecordSliceRequest $req) 平台支持将数据以TS切片的形式存入客户自有COS桶，该接口用于支持客户快捷查询切片信息列表
（注意：只支持标准存储类型的查询）
 * @method Models\DescribeRecordTemplateResponse DescribeRecordTemplate(Models\DescribeRecordTemplateRequest $req) 用于查询实时上云模板详情
 * @method Models\DescribeStreamAuthResponse DescribeStreamAuth(Models\DescribeStreamAuthRequest $req) 用于查询推拉流鉴权配置。
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 用于查询任务详情
 * @method Models\DescribeUserDeviceResponse DescribeUserDevice(Models\DescribeUserDeviceRequest $req) 用于查询设备的详细信息。
 * @method Models\DescribeVideoDownloadUrlResponse DescribeVideoDownloadUrl(Models\DescribeVideoDownloadUrlRequest $req) 用于获取云录像下载 url
 * @method Models\ListAITasksResponse ListAITasks(Models\ListAITasksRequest $req) 获取AI任务列表
 * @method Models\ListDevicesResponse ListDevices(Models\ListDevicesRequest $req) 用于获取对应组织下的设备列表。
 * @method Models\ListGatewayDevicesResponse ListGatewayDevices(Models\ListGatewayDevicesRequest $req) 用于查询网关下挂载的设备列表。
 * @method Models\ListGatewaysResponse ListGateways(Models\ListGatewaysRequest $req) 用于获取网关列表。
 * @method Models\ListOrganizationChannelNumbersResponse ListOrganizationChannelNumbers(Models\ListOrganizationChannelNumbersRequest $req) 用于查询组织目录下的未添加到实时上云计划中的通道数量
 * @method Models\ListOrganizationChannelsResponse ListOrganizationChannels(Models\ListOrganizationChannelsRequest $req) 用于查询组织目录下的通道列表
 * @method Models\ListRecordBackupPlanDevicesResponse ListRecordBackupPlanDevices(Models\ListRecordBackupPlanDevicesRequest $req) 用于查询录像上云计划下的设备通道列表。
 * @method Models\ListRecordBackupPlansResponse ListRecordBackupPlans(Models\ListRecordBackupPlansRequest $req) 用于查询录像上云计划列表。
 * @method Models\ListRecordBackupTemplatesResponse ListRecordBackupTemplates(Models\ListRecordBackupTemplatesRequest $req) 用于查询录像上云模板列表。
 * @method Models\ListRecordPlanChannelsResponse ListRecordPlanChannels(Models\ListRecordPlanChannelsRequest $req) 用于查询用户下所有实时上云计划中的通道列表
 * @method Models\ListRecordPlanDevicesResponse ListRecordPlanDevices(Models\ListRecordPlanDevicesRequest $req) 用于查询实时上云计划下的设备通道列表
 * @method Models\ListRecordPlansResponse ListRecordPlans(Models\ListRecordPlansRequest $req) 用于查询实时上云计划列表
 * @method Models\ListRecordRetrieveTasksResponse ListRecordRetrieveTasks(Models\ListRecordRetrieveTasksRequest $req) 用于查询取回任务列表
 * @method Models\ListRecordTemplatesResponse ListRecordTemplates(Models\ListRecordTemplatesRequest $req) 用于查询实时上云模板列表
 * @method Models\ListSubTasksResponse ListSubTasks(Models\ListSubTasksRequest $req) 用于查询任务的子任务列表
 * @method Models\ListTasksResponse ListTasks(Models\ListTasksRequest $req) 用于查询批量任务和简单任务列表
 * @method Models\PlayRecordResponse PlayRecord(Models\PlayRecordRequest $req) 用于获取设备本地录像 URL 地址。
 * @method Models\RefreshDeviceChannelResponse RefreshDeviceChannel(Models\RefreshDeviceChannelRequest $req) 用于刷新国标设备的通道（接口调用后，触发向设备请求通道列表，新增的通道入库，设备上已删除的通道需自行删除、后台不自动删除）。
 * @method Models\UpdateAITaskResponse UpdateAITask(Models\UpdateAITaskRequest $req) 更新AI任务
 * @method Models\UpdateAITaskStatusResponse UpdateAITaskStatus(Models\UpdateAITaskStatusRequest $req) 更新 AI 任务状态
 * @method Models\UpdateDeviceOrganizationResponse UpdateDeviceOrganization(Models\UpdateDeviceOrganizationRequest $req) 用于批量更改设备的组织。
 * @method Models\UpdateDeviceStatusResponse UpdateDeviceStatus(Models\UpdateDeviceStatusRequest $req) 用于启用/禁用设备，禁用后拒绝设备注册。
 * @method Models\UpdateGatewayResponse UpdateGateway(Models\UpdateGatewayRequest $req) 用于修改网关信息（支持对网关名称和描述的修改）。
 * @method Models\UpdateOrganizationResponse UpdateOrganization(Models\UpdateOrganizationRequest $req) 用于修改组织。
 * @method Models\UpdateRecordBackupPlanResponse UpdateRecordBackupPlan(Models\UpdateRecordBackupPlanRequest $req) 用于修改录像上云计划。
 * @method Models\UpdateRecordBackupTemplateResponse UpdateRecordBackupTemplate(Models\UpdateRecordBackupTemplateRequest $req) 用于修改录像上云模板。
 * @method Models\UpdateRecordPlanResponse UpdateRecordPlan(Models\UpdateRecordPlanRequest $req) 用于修改实时上云计划
 * @method Models\UpdateRecordTemplateResponse UpdateRecordTemplate(Models\UpdateRecordTemplateRequest $req) 用于修改实时上云模板
 * @method Models\UpdateUserDeviceResponse UpdateUserDevice(Models\UpdateUserDeviceRequest $req) 用于修改设备的配置信息。
 * @method Models\UpgradeGatewayResponse UpgradeGateway(Models\UpgradeGatewayRequest $req) 用于网关升级（支持对所有待更新的服务一键升级）。
 */

class IssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iss.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iss";

    /**
     * @var string
     */
    protected $version = "2023-05-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("iss")."\\"."V20230517\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
