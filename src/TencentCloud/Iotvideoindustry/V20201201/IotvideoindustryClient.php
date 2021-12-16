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

namespace TencentCloud\Iotvideoindustry\V20201201;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotvideoindustry\V20201201\Models as Models;

/**
 * @method Models\BindGroupDevicesResponse BindGroupDevices(Models\BindGroupDevicesRequest $req) 本接口(BindGroupDevices) 用于绑定设备到分组。
 * @method Models\ControlDevicePTZResponse ControlDevicePTZ(Models\ControlDevicePTZRequest $req) 本接口(ControlDevicePTZ) 用于对支持GB28181 PTZ信令的设备进行远程控制。
 * @method Models\ControlRecordStreamResponse ControlRecordStream(Models\ControlRecordStreamRequest $req) 对回放流进行控制，包括暂停、播放、拉动、结束等
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 本接口(CreateDevice) 用于创建设备。
 * @method Models\CreateDeviceGroupResponse CreateDeviceGroup(Models\CreateDeviceGroupRequest $req) 本接口(CreateDeviceGroup) 用于创建设备管理分组。
 * @method Models\CreateLiveChannelResponse CreateLiveChannel(Models\CreateLiveChannelRequest $req) 创建直播频道
 * @method Models\CreateLiveRecordPlanResponse CreateLiveRecordPlan(Models\CreateLiveRecordPlanRequest $req) 创建直播录制计划
 * @method Models\CreateMessageForwardResponse CreateMessageForward(Models\CreateMessageForwardRequest $req) 创建消息转发配置
 * @method Models\CreateRecordPlanResponse CreateRecordPlan(Models\CreateRecordPlanRequest $req) 本接口(CreateRecordPlan) 用于创建录制计划，使设备与时间模板绑定，以便及时启动录制
 * @method Models\CreateSceneResponse CreateScene(Models\CreateSceneRequest $req) 创建场景
 * @method Models\CreateTimeTemplateResponse CreateTimeTemplate(Models\CreateTimeTemplateRequest $req) 本接口(CreateTimeTemplate) 用于根据模板描述的具体录制时间片段，创建定制化的时间模板。
 * @method Models\DeleteChannelResponse DeleteChannel(Models\DeleteChannelRequest $req) 删除通道接口
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 本接口(DeleteDevice)用于删除设备。
 * @method Models\DeleteDeviceGroupResponse DeleteDeviceGroup(Models\DeleteDeviceGroupRequest $req) 本接口(DeleteDeviceGroup)用于删除分组。
 * @method Models\DeleteLiveChannelResponse DeleteLiveChannel(Models\DeleteLiveChannelRequest $req) 删除直播接口
 * @method Models\DeleteLiveRecordPlanResponse DeleteLiveRecordPlan(Models\DeleteLiveRecordPlanRequest $req) 删除直播录制计划
 * @method Models\DeleteLiveVideoListResponse DeleteLiveVideoList(Models\DeleteLiveVideoListRequest $req) 直播录像删除
 * @method Models\DeleteMessageForwardResponse DeleteMessageForward(Models\DeleteMessageForwardRequest $req) 删除消息转发配置
 * @method Models\DeleteRecordPlanResponse DeleteRecordPlan(Models\DeleteRecordPlanRequest $req) 本接口(DeleteRecordPlan)用于删除录制计划
录制计划删除的同时，会停止该录制计划下的全部录制任务。
 * @method Models\DeleteSceneResponse DeleteScene(Models\DeleteSceneRequest $req) 删除场景
 * @method Models\DeleteTimeTemplateResponse DeleteTimeTemplate(Models\DeleteTimeTemplateRequest $req) 本接口(DeleteTimeTemplate) 用于删除时间模板。
 * @method Models\DeleteVideoListResponse DeleteVideoList(Models\DeleteVideoListRequest $req) 删除录像存储列表
 * @method Models\DescribeAllDeviceListResponse DescribeAllDeviceList(Models\DescribeAllDeviceListRequest $req) 本接口(DescribeAllDeviceList) 用于获取设备列表。
 * @method Models\DescribeBindSceneDevicesResponse DescribeBindSceneDevices(Models\DescribeBindSceneDevicesRequest $req) 获取场景绑定设备列表
 * @method Models\DescribeChannelsByLiveRecordPlanResponse DescribeChannelsByLiveRecordPlan(Models\DescribeChannelsByLiveRecordPlanRequest $req) 根据直播录制计划获取频道列表
 * @method Models\DescribeDeviceGroupResponse DescribeDeviceGroup(Models\DescribeDeviceGroupRequest $req) 本接口(DescribeDeviceGroup)用于根据设备ID查询设备所在分组信息，可批量查询。
 * @method Models\DescribeDevicePassWordResponse DescribeDevicePassWord(Models\DescribeDevicePassWordRequest $req) 本接口(DescribeDevicePassWord)用于查询设备密码。
 * @method Models\DescribeDeviceStreamsResponse DescribeDeviceStreams(Models\DescribeDeviceStreamsRequest $req) 本接口(DescribeDeviceStreams)用于获取设备实时流地址。
 * @method Models\DescribeGroupByIdResponse DescribeGroupById(Models\DescribeGroupByIdRequest $req) 本接口(DescribeGroupById)用于根据分组ID查询分组。
 * @method Models\DescribeGroupByPathResponse DescribeGroupByPath(Models\DescribeGroupByPathRequest $req) 根据分组路径查询分组
 * @method Models\DescribeGroupDevicesResponse DescribeGroupDevices(Models\DescribeGroupDevicesRequest $req) 本接口(DescribeGroupDevices)用于查询分组下的设备列表。
 * @method Models\DescribeGroupsResponse DescribeGroups(Models\DescribeGroupsRequest $req) 本接口(DescribeGroups)用于批量查询分组信息。
 * @method Models\DescribeIPCChannelsResponse DescribeIPCChannels(Models\DescribeIPCChannelsRequest $req) 获取IPC设备下属通道
 * @method Models\DescribeLiveChannelResponse DescribeLiveChannel(Models\DescribeLiveChannelRequest $req) 直播详情接口
 * @method Models\DescribeLiveChannelListResponse DescribeLiveChannelList(Models\DescribeLiveChannelListRequest $req) 直播列表接口
 * @method Models\DescribeLiveRecordPlanByIdResponse DescribeLiveRecordPlanById(Models\DescribeLiveRecordPlanByIdRequest $req) 获取直播录制计划详情
 * @method Models\DescribeLiveRecordPlanIdsResponse DescribeLiveRecordPlanIds(Models\DescribeLiveRecordPlanIdsRequest $req) 获取直播录制计划列表
 * @method Models\DescribeLiveStreamResponse DescribeLiveStream(Models\DescribeLiveStreamRequest $req) 直播拉流接口
 * @method Models\DescribeLiveVideoListResponse DescribeLiveVideoList(Models\DescribeLiveVideoListRequest $req) 直播录像回放列表
 * @method Models\DescribeMessageForwardResponse DescribeMessageForward(Models\DescribeMessageForwardRequest $req) 查看消息转发配置详情
 * @method Models\DescribeMessageForwardsResponse DescribeMessageForwards(Models\DescribeMessageForwardsRequest $req) 查看消息转发配置列表
 * @method Models\DescribeRecordDatesByLiveResponse DescribeRecordDatesByLive(Models\DescribeRecordDatesByLiveRequest $req) 直播录像存储日期列表
 * @method Models\DescribeRecordStreamResponse DescribeRecordStream(Models\DescribeRecordStreamRequest $req) 获取回放视频流(NVR录制用)
RecordId和StartTime/EndTime互斥
当存在RecordId时，StartTime和EndTime无效
当RecordId为空，StartTime和EndTime生效
 * @method Models\DescribeSIPServerResponse DescribeSIPServer(Models\DescribeSIPServerRequest $req) 本接口用于获取SIP服务器相关配置，用户可以通过这些配置项，将设备通过GB28181协议注册到本服务。
 * @method Models\DescribeScenesResponse DescribeScenes(Models\DescribeScenesRequest $req) 获取场景列表
 * @method Models\DescribeStatisticDetailsResponse DescribeStatisticDetails(Models\DescribeStatisticDetailsRequest $req) 本接口(DescribeStatisticDetails)用于查询指定统计项详情，返回结果按天为单位聚合，支持的最大时间查询范围为31天。
 * @method Models\DescribeStatisticSummaryResponse DescribeStatisticSummary(Models\DescribeStatisticSummaryRequest $req) 本接口(DescribeStatisticSummary)用于查询用户昨日的概览数据。
 * @method Models\DescribeSubGroupsResponse DescribeSubGroups(Models\DescribeSubGroupsRequest $req) 本接口(DescribeSubGroups)用于查询分组下的子分组列表。
 * @method Models\DescribeSubscriptionStatusResponse DescribeSubscriptionStatus(Models\DescribeSubscriptionStatusRequest $req) 查询主设备订阅状态
 * @method Models\DescribeVideoListResponse DescribeVideoList(Models\DescribeVideoListRequest $req) 根据时间获取回放文件列表(云端录制用)
 * @method Models\GetRecordDatesByDevResponse GetRecordDatesByDev(Models\GetRecordDatesByDevRequest $req) 本接口(GetRecordDatesByDev)用于查询设备含有录像文件的日期列表。
 * @method Models\GetRecordPlanByDevResponse GetRecordPlanByDev(Models\GetRecordPlanByDevRequest $req) 本接口(GetRecordPlanByDev)用于根据设备ID查询其绑定的录制计划.
 * @method Models\GetRecordPlanByIdResponse GetRecordPlanById(Models\GetRecordPlanByIdRequest $req) 本接口(GetRecordPlanById)用于根据录制计划ID获取录制计划。
 * @method Models\GetRecordPlansResponse GetRecordPlans(Models\GetRecordPlansRequest $req) 本接口(GetRecordPlans)用于获取用户的全部录制计划。
 * @method Models\GetTimeTemplateByIdResponse GetTimeTemplateById(Models\GetTimeTemplateByIdRequest $req) 本接口(GetTimeTemplateById)用于根据模板ID获取时间模板详情。
 * @method Models\GetTimeTemplatesResponse GetTimeTemplates(Models\GetTimeTemplatesRequest $req) 本接口(GetTimeTemplates)用于获取时间模板列表。
 * @method Models\GetVideoListByConResponse GetVideoListByCon(Models\GetVideoListByConRequest $req) 本接口(GetVideoListByCon)用于查询设备的录制文件列表
 * @method Models\ModifyBindPlanLiveChannelResponse ModifyBindPlanLiveChannel(Models\ModifyBindPlanLiveChannelRequest $req) 直播录制计划绑定解绑直播频道
 * @method Models\ModifyDeviceDataResponse ModifyDeviceData(Models\ModifyDeviceDataRequest $req) 本接口(ModifyDeviceData)用于编辑设备信息。
 * @method Models\ModifyLiveChannelResponse ModifyLiveChannel(Models\ModifyLiveChannelRequest $req) 编辑直播接口
 * @method Models\ModifyLiveRecordPlanResponse ModifyLiveRecordPlan(Models\ModifyLiveRecordPlanRequest $req) 编辑直播录制计划
 * @method Models\ModifyLiveVideoResponse ModifyLiveVideo(Models\ModifyLiveVideoRequest $req) 直播录像编辑
 * @method Models\ModifyMessageForwardResponse ModifyMessageForward(Models\ModifyMessageForwardRequest $req) 修改消息转发配置
 * @method Models\ModifySubscriptionStatusResponse ModifySubscriptionStatus(Models\ModifySubscriptionStatusRequest $req) 编辑设备订阅状态
 * @method Models\ModifyVideoInfoResponse ModifyVideoInfo(Models\ModifyVideoInfoRequest $req) 修改录像存储列表
 * @method Models\UpdateDeviceGroupResponse UpdateDeviceGroup(Models\UpdateDeviceGroupRequest $req) 本接口(UpdateDeviceGroup)用于修改分组信息。
 * @method Models\UpdateDevicePassWordResponse UpdateDevicePassWord(Models\UpdateDevicePassWordRequest $req) 本接口(UpdateDevicePassWord)用于修改设备密码。
 * @method Models\UpdateRecordPlanResponse UpdateRecordPlan(Models\UpdateRecordPlanRequest $req) 本接口(UpdateRecordPlan)用于更新录制计划。
 * @method Models\UpdateTimeTemplateResponse UpdateTimeTemplate(Models\UpdateTimeTemplateRequest $req) 本接口(UpdateTimeTemplate)用于更新时间模板。
 */

class IotvideoindustryClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotvideoindustry.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotvideoindustry";

    /**
     * @var string
     */
    protected $version = "2020-12-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotvideoindustry")."\\"."V20201201\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
