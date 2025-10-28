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

namespace TencentCloud\Trro\V20220325;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trro\V20220325\Models as Models;

/**
 * @method Models\BatchDeleteDevicesResponse BatchDeleteDevices(Models\BatchDeleteDevicesRequest $req) 用于批量删除设备
 * @method Models\BatchDeletePolicyResponse BatchDeletePolicy(Models\BatchDeletePolicyRequest $req) 用于批量删除修改权限配置
 * @method Models\BoundLicensesResponse BoundLicenses(Models\BoundLicensesRequest $req) 为推流设备绑定license，优先绑定到期时间最近的，到期时间相同优先绑定月包
 * @method Models\CreateCloudRecordingResponse CreateCloudRecording(Models\CreateCloudRecordingRequest $req) 启动云端录制功能，完成房间内的音视频录制，并上传到指定的云存储。
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 用于创建设备
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 用于创建项目
 * @method Models\DeleteCloudRecordingResponse DeleteCloudRecording(Models\DeleteCloudRecordingRequest $req) 成功开启录制后，可以使用此接口来停止录制任务。停止录制成功后不代表文件全部传输完成，如果未完成后台将会继续上传文件，成功后通过事件回调通知客户文件全部传输完成状态。
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 用于删除项目
 * @method Models\DescribeDeviceInfoResponse DescribeDeviceInfo(Models\DescribeDeviceInfoRequest $req) 用于获取指定设备信息
 * @method Models\DescribeDeviceListResponse DescribeDeviceList(Models\DescribeDeviceListRequest $req) 用于获取设备信息列表
 * @method Models\DescribeDeviceSessionDetailsResponse DescribeDeviceSessionDetails(Models\DescribeDeviceSessionDetailsRequest $req) 获取设备会话数据详单
 * @method Models\DescribeDeviceSessionListResponse DescribeDeviceSessionList(Models\DescribeDeviceSessionListRequest $req) 获取设备会话列表
 * @method Models\DescribePolicyResponse DescribePolicy(Models\DescribePolicyRequest $req) 用于查看权限配置
 * @method Models\DescribeProjectInfoResponse DescribeProjectInfo(Models\DescribeProjectInfoRequest $req) 用于获取项目信息
 * @method Models\DescribeProjectListResponse DescribeProjectList(Models\DescribeProjectListRequest $req) 用于获取项目列表
 * @method Models\DescribeRecentSessionListResponse DescribeRecentSessionList(Models\DescribeRecentSessionListRequest $req) 获取最新设备会话列表
 * @method Models\DescribeSessionStatisticsResponse DescribeSessionStatistics(Models\DescribeSessionStatisticsRequest $req) 获取会话统计值
 * @method Models\DescribeSessionStatisticsByIntervalResponse DescribeSessionStatisticsByInterval(Models\DescribeSessionStatisticsByIntervalRequest $req) 获取各时间段的会话统计值
 * @method Models\GetDeviceLicenseResponse GetDeviceLicense(Models\GetDeviceLicenseRequest $req) 获取设备已经绑定的可用授权数量
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 查询用户设备的授权绑定情况
 * @method Models\GetDurationDetailsResponse GetDurationDetails(Models\GetDurationDetailsRequest $req) 查询该时间段、对应项目、设备的不同分辨率的通话时长流水，流水以日期（天）为单位
 * @method Models\GetLicenseStatResponse GetLicenseStat(Models\GetLicenseStatRequest $req) 统计license类型数量
 * @method Models\GetLicensesResponse GetLicenses(Models\GetLicensesRequest $req) 按授权查看license列表
 * @method Models\GetTotalDurationResponse GetTotalDuration(Models\GetTotalDurationRequest $req) 查询该时间段、对应项目、设备的不同分辨率的通话时长汇总
 * @method Models\ModifyCallbackUrlResponse ModifyCallbackUrl(Models\ModifyCallbackUrlRequest $req) 设置回调URL
录制回调事件内容参考：https://cloud.tencent.com/document/product/647/81113
转推回调事件内容参考：https://cloud.tencent.com/document/product/647/88552
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) 用于修改设备信息
 * @method Models\ModifyPolicyResponse ModifyPolicy(Models\ModifyPolicyRequest $req) 用于修改权限配置
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 用于修改项目信息
 * @method Models\ModifyProjectSecModeResponse ModifyProjectSecMode(Models\ModifyProjectSecModeRequest $req) 使用项目共享密钥可动态生成设备登录密钥，登录前无需对设备进行提前注册，适合希望简化业务流程的客户。由于是公共密钥，请务必注意保护项目共享密钥，并及时更新。建议项目共享密钥保存在服务器侧。由服务器生成设备登录密码下发给设备，避免密钥保存在客户端侧产生的密钥泄露风险。

开启项目共享密钥后，对于已注册的设备，仍可使用原设备密码登录。若希望仅能通过共享密钥生成密码登录，请通过云 API 将设备密码更新为"USEPROJECTKEYPWD"。
 * @method Models\StartPublishLiveStreamResponse StartPublishLiveStream(Models\StartPublishLiveStreamRequest $req) 启动一个混流转推任务，将 TRTC 房间的多路音视频流混成一路音视频流，编码后推到直播 CDN 或者回推到 TRTC 房间。也支持不转码直接转推 TRTC 房间的单路流。启动成功后，会返回一个 SdkAppid 维度唯一的任务 Id（TaskId）。您需要保存该 TaskId，后续需要依赖此 TaskId 更新和结束任务。
 * @method Models\StopPublishLiveStreamResponse StopPublishLiveStream(Models\StopPublishLiveStreamRequest $req) 停止指定的混流转推任务。如果没有调用 Stop 接口停止任务，所有参与混流转推的主播离开房间超过MaxIdleTime 设置的时间后，任务也会自动停止。
 */

class TrroClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trro.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trro";

    /**
     * @var string
     */
    protected $version = "2022-03-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("trro")."\\"."V20220325\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
