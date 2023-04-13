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

namespace TencentCloud\Tiw\V20190919;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tiw\V20190919\Models as Models;

/**
 * @method Models\ApplyTiwTrialResponse ApplyTiwTrial(Models\ApplyTiwTrialRequest $req) 申请互动白板试用，默认15天
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) 创建白板应用
 * @method Models\CreateOfflineRecordResponse CreateOfflineRecord(Models\CreateOfflineRecordRequest $req) 创建课后录制任务
 * @method Models\CreatePPTCheckTaskResponse CreatePPTCheckTask(Models\CreatePPTCheckTaskRequest $req) 检测PPT文件，识别PPT中包含的动态转码任务（Transcode）不支持的元素
 * @method Models\CreateSnapshotTaskResponse CreateSnapshotTask(Models\CreateSnapshotTaskRequest $req) 创建白板板书生成任务, 在任务结束后，如果提供了回调地址，将通过回调地址通知板书生成结果
 * @method Models\CreateTranscodeResponse CreateTranscode(Models\CreateTranscodeRequest $req) 创建一个文档转码任务
 * @method Models\CreateVideoGenerationTaskResponse CreateVideoGenerationTask(Models\CreateVideoGenerationTaskRequest $req) 创建视频生成任务
 * @method Models\DescribeAPIServiceResponse DescribeAPIService(Models\DescribeAPIServiceRequest $req) 通过服务角色调用其他云产品API接口获取信息
 * @method Models\DescribeApplicationInfosResponse DescribeApplicationInfos(Models\DescribeApplicationInfosRequest $req) 查询白板应用详情
 * @method Models\DescribeApplicationUsageResponse DescribeApplicationUsage(Models\DescribeApplicationUsageRequest $req) 查询互动白板各个子产品用量
 * @method Models\DescribeBoardSDKLogResponse DescribeBoardSDKLog(Models\DescribeBoardSDKLogRequest $req) 查询客户端白板日志
 * @method Models\DescribeIMApplicationsResponse DescribeIMApplications(Models\DescribeIMApplicationsRequest $req) 查询可用于创建白板应用的IM应用列表
 * @method Models\DescribeOfflineRecordResponse DescribeOfflineRecord(Models\DescribeOfflineRecordRequest $req) 查询课后录制任务的进度与录制结果等相关信息
 * @method Models\DescribeOfflineRecordCallbackResponse DescribeOfflineRecordCallback(Models\DescribeOfflineRecordCallbackRequest $req) 查询课后录制回调地址
 * @method Models\DescribeOnlineRecordResponse DescribeOnlineRecord(Models\DescribeOnlineRecordRequest $req) 查询录制任务状态与结果
 * @method Models\DescribeOnlineRecordCallbackResponse DescribeOnlineRecordCallback(Models\DescribeOnlineRecordCallbackRequest $req) 查询实时录制回调地址
 * @method Models\DescribePPTCheckResponse DescribePPTCheck(Models\DescribePPTCheckRequest $req) 查询PPT检测任务的执行进度或结果
 * @method Models\DescribePPTCheckCallbackResponse DescribePPTCheckCallback(Models\DescribePPTCheckCallbackRequest $req) 查询PPT检测任务回调地址
 * @method Models\DescribePostpaidUsageResponse DescribePostpaidUsage(Models\DescribePostpaidUsageRequest $req) 查询用户后付费用量
 * @method Models\DescribeQualityMetricsResponse DescribeQualityMetrics(Models\DescribeQualityMetricsRequest $req) 查询互动白板质量数据
 * @method Models\DescribeRecordSearchResponse DescribeRecordSearch(Models\DescribeRecordSearchRequest $req) 根据房间号搜索实时录制任务
 * @method Models\DescribeRoomListResponse DescribeRoomList(Models\DescribeRoomListRequest $req) 查询白板房间列表
 * @method Models\DescribeRunningTasksResponse DescribeRunningTasks(Models\DescribeRunningTasksRequest $req) 根据指定的任务类型，获取当前正在执行中的任务列表。只能查询最近3天内创建的任务。
 * @method Models\DescribeSnapshotTaskResponse DescribeSnapshotTask(Models\DescribeSnapshotTaskRequest $req) 获取指定白板板书生成任务信息
 * @method Models\DescribeTIWDailyUsageResponse DescribeTIWDailyUsage(Models\DescribeTIWDailyUsageRequest $req) 查询互动白板天维度计费用量。
1. 单次查询统计区间最多不能超过31天。
2. 由于统计延迟等原因，暂时不支持查询当天数据，建议在次日上午7点以后再来查询前一天的用量，例如在10月27日上午7点后，再来查询到10月26日整天的用量

 * @method Models\DescribeTIWRoomDailyUsageResponse DescribeTIWRoomDailyUsage(Models\DescribeTIWRoomDailyUsageRequest $req) 查询互动白板房间维度每天计费用量。
1. 单次查询统计区间最多不能超过31天。
2. 由于统计延迟等原因，暂时不支持查询当天数据，建议在次日上午7点以后再来查询前一天的用量，例如在10月27日上午7点后，再来查询到10月26日整天的用量

 * @method Models\DescribeTranscodeResponse DescribeTranscode(Models\DescribeTranscodeRequest $req) 查询文档转码任务的执行进度与转码结果
 * @method Models\DescribeTranscodeCallbackResponse DescribeTranscodeCallback(Models\DescribeTranscodeCallbackRequest $req) 查询文档转码回调地址
 * @method Models\DescribeTranscodeSearchResponse DescribeTranscodeSearch(Models\DescribeTranscodeSearchRequest $req) 按文档名称搜索转码任务
 * @method Models\DescribeUsageSummaryResponse DescribeUsageSummary(Models\DescribeUsageSummaryRequest $req) 查询指定时间段内子产品的用量汇总
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) 查询白板用户列表
 * @method Models\DescribeUserResourcesResponse DescribeUserResources(Models\DescribeUserResourcesRequest $req) 查询客户资源列表
 * @method Models\DescribeUserStatusResponse DescribeUserStatus(Models\DescribeUserStatusRequest $req) 查询互动白板用户详情，包括是否开通了互动白板，当前互动白板服务有效期等信息

 * @method Models\DescribeVideoGenerationTaskResponse DescribeVideoGenerationTask(Models\DescribeVideoGenerationTaskRequest $req) 查询录制视频生成任务状态与结果
 * @method Models\DescribeVideoGenerationTaskCallbackResponse DescribeVideoGenerationTaskCallback(Models\DescribeVideoGenerationTaskCallbackRequest $req) 查询录制视频生成回调地址
 * @method Models\DescribeWarningCallbackResponse DescribeWarningCallback(Models\DescribeWarningCallbackRequest $req) 查询告警回调地址。此功能需要申请白名单使用。
 * @method Models\DescribeWhiteboardApplicationConfigResponse DescribeWhiteboardApplicationConfig(Models\DescribeWhiteboardApplicationConfigRequest $req) 查询白板应用任务相关的配置，包括存储桶、回调等
 * @method Models\DescribeWhiteboardBucketConfigResponse DescribeWhiteboardBucketConfig(Models\DescribeWhiteboardBucketConfigRequest $req) 查询文档转码，实时录制存储桶的配置
 * @method Models\DescribeWhiteboardPushResponse DescribeWhiteboardPush(Models\DescribeWhiteboardPushRequest $req) 查询推流任务状态与结果
 * @method Models\DescribeWhiteboardPushCallbackResponse DescribeWhiteboardPushCallback(Models\DescribeWhiteboardPushCallbackRequest $req) 查询白板推流回调地址
 * @method Models\DescribeWhiteboardPushSearchResponse DescribeWhiteboardPushSearch(Models\DescribeWhiteboardPushSearchRequest $req) 根据房间号搜索白板推流任务
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) 修改白板应用
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) 设置白板月功能费自动续费
 * @method Models\ModifyWhiteboardApplicationConfigResponse ModifyWhiteboardApplicationConfig(Models\ModifyWhiteboardApplicationConfigRequest $req) 修改白板应用任务相关的配置，包括存储桶、回调等
 * @method Models\ModifyWhiteboardBucketConfigResponse ModifyWhiteboardBucketConfig(Models\ModifyWhiteboardBucketConfigRequest $req) 设置文档转码，实时录制存储桶的配置
 * @method Models\PauseOnlineRecordResponse PauseOnlineRecord(Models\PauseOnlineRecordRequest $req) 暂停实时录制
 * @method Models\ResumeOnlineRecordResponse ResumeOnlineRecord(Models\ResumeOnlineRecordRequest $req) 恢复实时录制
 * @method Models\SetOfflineRecordCallbackResponse SetOfflineRecordCallback(Models\SetOfflineRecordCallbackRequest $req) 设置课后录制回调地址
 * @method Models\SetOnlineRecordCallbackResponse SetOnlineRecordCallback(Models\SetOnlineRecordCallbackRequest $req) 设置实时录制回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40258
 * @method Models\SetOnlineRecordCallbackKeyResponse SetOnlineRecordCallbackKey(Models\SetOnlineRecordCallbackKeyRequest $req) 设置实时录制回调鉴权密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetPPTCheckCallbackResponse SetPPTCheckCallback(Models\SetPPTCheckCallbackRequest $req) 设置PPT检测任务回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40260#c9cbe05f-fe1a-4410-b4dc-40cc301c7b81
 * @method Models\SetPPTCheckCallbackKeyResponse SetPPTCheckCallbackKey(Models\SetPPTCheckCallbackKeyRequest $req) 设置PPT检测任务回调密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetTranscodeCallbackResponse SetTranscodeCallback(Models\SetTranscodeCallbackRequest $req) 设置文档转码回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40260
 * @method Models\SetTranscodeCallbackKeyResponse SetTranscodeCallbackKey(Models\SetTranscodeCallbackKeyRequest $req) 设置文档转码回调鉴权密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetVideoGenerationTaskCallbackResponse SetVideoGenerationTaskCallback(Models\SetVideoGenerationTaskCallbackRequest $req) 设置录制视频生成回调地址
 * @method Models\SetVideoGenerationTaskCallbackKeyResponse SetVideoGenerationTaskCallbackKey(Models\SetVideoGenerationTaskCallbackKeyRequest $req) 设置视频生成回调鉴权密钥
 * @method Models\SetWarningCallbackResponse SetWarningCallback(Models\SetWarningCallbackRequest $req) 设置告警回调地址。此功能需要申请白名单使用。
 * @method Models\SetWhiteboardPushCallbackResponse SetWhiteboardPushCallback(Models\SetWhiteboardPushCallbackRequest $req) 设置白板推流回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetWhiteboardPushCallbackKeyResponse SetWhiteboardPushCallbackKey(Models\SetWhiteboardPushCallbackKeyRequest $req) 设置白板推流回调鉴权密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\StartOnlineRecordResponse StartOnlineRecord(Models\StartOnlineRecordRequest $req) 发起一个实时录制任务
 * @method Models\StartWhiteboardPushResponse StartWhiteboardPush(Models\StartWhiteboardPushRequest $req) 发起一个白板推流任务
 * @method Models\StopOnlineRecordResponse StopOnlineRecord(Models\StopOnlineRecordRequest $req) 停止实时录制
 * @method Models\StopWhiteboardPushResponse StopWhiteboardPush(Models\StopWhiteboardPushRequest $req) 停止白板推流任务
 */

class TiwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tiw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tiw";

    /**
     * @var string
     */
    protected $version = "2019-09-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("tiw")."\\"."V20190919\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
