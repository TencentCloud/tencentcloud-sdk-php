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

namespace TencentCloud\Mps\V20190612;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mps\V20190612\Models as Models;

/**
 * @method Models\BatchDeleteStreamLinkFlowResponse BatchDeleteStreamLinkFlow(Models\BatchDeleteStreamLinkFlowRequest $req) 批量删除媒体传输流。
 * @method Models\BatchProcessMediaResponse BatchProcessMedia(Models\BatchProcessMediaRequest $req) 对 URL视频链接批量发起处理任务，功能包括：
智能字幕（语音全文、语音热词、语音翻译）
 * @method Models\BatchStartStreamLinkFlowResponse BatchStartStreamLinkFlow(Models\BatchStartStreamLinkFlowRequest $req) 批量启动媒体传输流。
 * @method Models\BatchStopStreamLinkFlowResponse BatchStopStreamLinkFlow(Models\BatchStopStreamLinkFlowRequest $req) 批量停止媒体传输流。
 * @method Models\CreateAIAnalysisTemplateResponse CreateAIAnalysisTemplate(Models\CreateAIAnalysisTemplateRequest $req) 创建用户自定义内容分析模板，数量上限：50。
 * @method Models\CreateAIRecognitionTemplateResponse CreateAIRecognitionTemplate(Models\CreateAIRecognitionTemplateRequest $req) 创建用户自定义内容识别模板，数量上限：50。
 * @method Models\CreateAdaptiveDynamicStreamingTemplateResponse CreateAdaptiveDynamicStreamingTemplate(Models\CreateAdaptiveDynamicStreamingTemplateRequest $req) 创建转自适应码流模板，数量上限：100。
 * @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) 创建用户自定义转动图模板，数量上限：16。
 * @method Models\CreateAsrHotwordsResponse CreateAsrHotwords(Models\CreateAsrHotwordsRequest $req) 智能字幕新建热词库接口
 * @method Models\CreateContentReviewTemplateResponse CreateContentReviewTemplate(Models\CreateContentReviewTemplateRequest $req) 创建用户自定义内容审核模板，数量上限：50。
 * @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) 创建用户自定义雪碧图模板，数量上限：16。
 * @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) 创建直播录制模板
 * @method Models\CreatePersonSampleResponse CreatePersonSample(Models\CreatePersonSampleRequest $req) 该接口用于创建素材样本，用于通过五官定位等技术，进行内容识别、内容不适宜等视频处理。
 * @method Models\CreateQualityControlTemplateResponse CreateQualityControlTemplate(Models\CreateQualityControlTemplateRequest $req) 创建媒体质检模板，数量上限：50。
 * @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) 创建用户自定义采样截图模板，数量上限：16。
 * @method Models\CreateScheduleResponse CreateSchedule(Models\CreateScheduleRequest $req) 对 COS 中指定 Bucket 的目录下上传的媒体文件，设置处理规则，包括：
1. 视频转码（带水印）；
2. 视频转动图；
3. 对视频按指定时间点截图；
4. 对视频采样截图；
5. 对视频截图雪碧图；
6. 对视频转自适应码流；
7. 智能内容审核（鉴黄、敏感信息检测）；
8. 智能内容分析（标签、分类、封面、按帧标签）；
9. 智能内容识别（人脸、文本全文、文本关键词、语音全文、语音关键词）。

注意：创建编排成功后是禁用状态，需要手动启用。
 * @method Models\CreateSmartSubtitleTemplateResponse CreateSmartSubtitleTemplate(Models\CreateSmartSubtitleTemplateRequest $req) 创建自定义智能字幕模板
 * @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) 创建用户自定义指定时间点截图模板，数量上限：16。
 * @method Models\CreateStreamLinkEventResponse CreateStreamLinkEvent(Models\CreateStreamLinkEventRequest $req) 创建媒体传输的事件Event。
 * @method Models\CreateStreamLinkFlowResponse CreateStreamLinkFlow(Models\CreateStreamLinkFlowRequest $req) 创建媒体传输的传输流配置。
 * @method Models\CreateStreamLinkInputResponse CreateStreamLinkInput(Models\CreateStreamLinkInputRequest $req) 创建媒体传输的输入配置。
 * @method Models\CreateStreamLinkOutputInfoResponse CreateStreamLinkOutputInfo(Models\CreateStreamLinkOutputInfoRequest $req) 创建媒体传输流的输出信息。
 * @method Models\CreateStreamLinkSecurityGroupResponse CreateStreamLinkSecurityGroup(Models\CreateStreamLinkSecurityGroupRequest $req) 创建安全组，数量限制5个。
 * @method Models\CreateTranscodeTemplateResponse CreateTranscodeTemplate(Models\CreateTranscodeTemplateRequest $req) 创建用户自定义转码模板，数量上限：1000
 * @method Models\CreateVideoDatabaseEntryTaskResponse CreateVideoDatabaseEntryTask(Models\CreateVideoDatabaseEntryTaskRequest $req) 对URL链接或COS中的视频发起入库任务。
可选在任务完成后向回调方发送任务完成状态信息。
 * @method Models\CreateVideoSearchTaskResponse CreateVideoSearchTask(Models\CreateVideoSearchTaskRequest $req) 使用检索值检索库中最接近检索值的若干视频。
 * @method Models\CreateWatermarkTemplateResponse CreateWatermarkTemplate(Models\CreateWatermarkTemplateRequest $req) 创建用户自定义水印模板，数量上限：1000。
 * @method Models\CreateWordSamplesResponse CreateWordSamples(Models\CreateWordSamplesRequest $req) 该接口用于批量创建关键词样本，样本用于通过OCR、ASR技术，进行不适宜内容识别、内容识别等视频处理。
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) 对 COS 中指定 Bucket 的目录下上传的媒体文件，设置处理规则，包括：
1. 视频转码（带水印）；
2. 视频转动图；
3. 对视频按指定时间点截图；
4. 对视频采样截图；
5. 对视频截图雪碧图；
6. 对视频转自适应码流；
7. 智能内容审核（鉴黄、敏感信息检测）；
8. 智能内容分析（标签、分类、封面、按帧标签）；
9. 智能内容识别（人脸、文本全文、文本关键词、语音全文、语音关键词）。

注意：创建工作流成功后是禁用状态，需要手动启用。
 * @method Models\DeleteAIAnalysisTemplateResponse DeleteAIAnalysisTemplate(Models\DeleteAIAnalysisTemplateRequest $req) 删除用户自定义内容分析模板。

注意：模板 ID 为 10000 以下的为系统预置模板，不允许删除。
 * @method Models\DeleteAIRecognitionTemplateResponse DeleteAIRecognitionTemplate(Models\DeleteAIRecognitionTemplateRequest $req) 删除用户自定义内容识别模板。
 * @method Models\DeleteAdaptiveDynamicStreamingTemplateResponse DeleteAdaptiveDynamicStreamingTemplate(Models\DeleteAdaptiveDynamicStreamingTemplateRequest $req) 删除转自适应码流模板
 * @method Models\DeleteAnimatedGraphicsTemplateResponse DeleteAnimatedGraphicsTemplate(Models\DeleteAnimatedGraphicsTemplateRequest $req) 删除用户自定义转动图模板。
 * @method Models\DeleteAsrHotwordsResponse DeleteAsrHotwords(Models\DeleteAsrHotwordsRequest $req) 删除智能字幕热词库
 * @method Models\DeleteContentReviewTemplateResponse DeleteContentReviewTemplate(Models\DeleteContentReviewTemplateRequest $req) 删除用户自定义内容审核模板。
 * @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) 删除雪碧图模板。
 * @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) 删除直播录制模板
 * @method Models\DeletePersonSampleResponse DeletePersonSample(Models\DeletePersonSampleRequest $req) 该接口用于根据素材 ID，删除素材样本。
 * @method Models\DeleteQualityControlTemplateResponse DeleteQualityControlTemplate(Models\DeleteQualityControlTemplateRequest $req) 删除媒体质检模板
 * @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) 删除用户自定义采样截图模板。
 * @method Models\DeleteScheduleResponse DeleteSchedule(Models\DeleteScheduleRequest $req) 删除编排
 * @method Models\DeleteSmartSubtitleTemplateResponse DeleteSmartSubtitleTemplate(Models\DeleteSmartSubtitleTemplateRequest $req) 删除用户自定义智能字幕模板。
 * @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) 删除用户自定义指定时间点截图模板。
 * @method Models\DeleteStreamLinkEventResponse DeleteStreamLinkEvent(Models\DeleteStreamLinkEventRequest $req) 删除媒体传输的事件配置。
 * @method Models\DeleteStreamLinkFlowResponse DeleteStreamLinkFlow(Models\DeleteStreamLinkFlowRequest $req) 删除媒体传输的传输流配置。
 * @method Models\DeleteStreamLinkOutputResponse DeleteStreamLinkOutput(Models\DeleteStreamLinkOutputRequest $req) 删除媒体传输流的输出配置。
 * @method Models\DeleteStreamLinkSecurityGroupResponse DeleteStreamLinkSecurityGroup(Models\DeleteStreamLinkSecurityGroupRequest $req) 删除安全组。
 * @method Models\DeleteTranscodeTemplateResponse DeleteTranscodeTemplate(Models\DeleteTranscodeTemplateRequest $req) 删除用户自定义转码模板。
 * @method Models\DeleteWatermarkTemplateResponse DeleteWatermarkTemplate(Models\DeleteWatermarkTemplateRequest $req) 删除用户自定义水印模板。
 * @method Models\DeleteWordSamplesResponse DeleteWordSamples(Models\DeleteWordSamplesRequest $req) 该接口用于批量删除关键词样本。
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) 删除工作流。对于已启用的工作流，需要禁用后才能删除。
 * @method Models\DescribeAIAnalysisTemplatesResponse DescribeAIAnalysisTemplates(Models\DescribeAIAnalysisTemplatesRequest $req) 根据内容分析模板唯一标识，获取内容分析模板详情列表。返回结果包含符合条件的所有用户自定义内容分析模板及系统预置视频内容分析模板
 * @method Models\DescribeAIRecognitionTemplatesResponse DescribeAIRecognitionTemplates(Models\DescribeAIRecognitionTemplatesRequest $req) 根据内容识别模板唯一标识，获取内容识别模板详情列表。返回结果包含符合条件的所有用户自定义内容识别模板及系统预置视频内容识别模板
 * @method Models\DescribeAdaptiveDynamicStreamingTemplatesResponse DescribeAdaptiveDynamicStreamingTemplates(Models\DescribeAdaptiveDynamicStreamingTemplatesRequest $req) 查询转自适应码流模板，支持根据条件，分页查询。
 * @method Models\DescribeAnimatedGraphicsTemplatesResponse DescribeAnimatedGraphicsTemplates(Models\DescribeAnimatedGraphicsTemplatesRequest $req) 查询转动图模板列表，支持根据条件，分页查询。
 * @method Models\DescribeAsrHotwordsResponse DescribeAsrHotwords(Models\DescribeAsrHotwordsRequest $req) 查询智能字幕热词库
 * @method Models\DescribeAsrHotwordsListResponse DescribeAsrHotwordsList(Models\DescribeAsrHotwordsListRequest $req) 获取热词库列表
 * @method Models\DescribeBatchTaskDetailResponse DescribeBatchTaskDetail(Models\DescribeBatchTaskDetailRequest $req) 通过任务 ID 查询任务的执行状态和结果的详细信息（最多可以查询7天之内提交的任务）。
 * @method Models\DescribeContentReviewTemplatesResponse DescribeContentReviewTemplates(Models\DescribeContentReviewTemplatesRequest $req) 根据智能审核模板唯一标识，获取智能审核模板详情列表。返回结果包含符合条件的所有用户自定义模板及系统预置智能审核模板。
 * @method Models\DescribeGroupAttachFlowsByIdResponse DescribeGroupAttachFlowsById(Models\DescribeGroupAttachFlowsByIdRequest $req) 根据安全组反差关联的Flow信息。
 * @method Models\DescribeImageSpriteTemplatesResponse DescribeImageSpriteTemplates(Models\DescribeImageSpriteTemplatesRequest $req) 查询雪碧图模板，支持根据条件，分页查询。
 * @method Models\DescribeImageTaskDetailResponse DescribeImageTaskDetail(Models\DescribeImageTaskDetailRequest $req) 通过任务 ID 查询任务的执行状态和结果的详细信息（最多可以查询7天之内提交的任务）。
 * @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) 获取直播录制模板
 * @method Models\DescribeMediaMetaDataResponse DescribeMediaMetaData(Models\DescribeMediaMetaDataRequest $req) 获取媒体的元信息，包括视频画面宽、高、编码格式、时长、帧率等。
 * @method Models\DescribePersonSamplesResponse DescribePersonSamples(Models\DescribePersonSamplesRequest $req) 该接口用于查询素材样本信息，支持根据素材 ID、名称、标签，分页查询。
 * @method Models\DescribeQualityControlTemplatesResponse DescribeQualityControlTemplates(Models\DescribeQualityControlTemplatesRequest $req) 查询用户自定义媒体质检模板，支持根据条件，分页查询。
 * @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) 查询采样截图模板，支持根据条件，分页查询。
 * @method Models\DescribeSchedulesResponse DescribeSchedules(Models\DescribeSchedulesRequest $req) 查询编排。
 * @method Models\DescribeSmartSubtitleTemplatesResponse DescribeSmartSubtitleTemplates(Models\DescribeSmartSubtitleTemplatesRequest $req) 根据智能字幕 模板唯一标识，获取智能字幕模板详情列表。返回结果包含符合条件的所有用户自定义智能字幕模板及系统预置智能字幕模板
 * @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) 查询指定时间点截图模板，支持根据条件，分页查询。
 * @method Models\DescribeStreamLinkActivateStateResponse DescribeStreamLinkActivateState(Models\DescribeStreamLinkActivateStateRequest $req) 查询媒体传输开通状态。
 * @method Models\DescribeStreamLinkEventResponse DescribeStreamLinkEvent(Models\DescribeStreamLinkEventRequest $req) 查询媒体传输事件的配置信息。
 * @method Models\DescribeStreamLinkEventAttachedFlowsResponse DescribeStreamLinkEventAttachedFlows(Models\DescribeStreamLinkEventAttachedFlowsRequest $req) 查询媒体传输事件关联的所有媒体输入流的配置信息。
 * @method Models\DescribeStreamLinkEventsResponse DescribeStreamLinkEvents(Models\DescribeStreamLinkEventsRequest $req) 批量查询媒体传输事件的配置信息。
 * @method Models\DescribeStreamLinkFlowResponse DescribeStreamLinkFlow(Models\DescribeStreamLinkFlowRequest $req) 查询媒体输入流的配置信息。
 * @method Models\DescribeStreamLinkFlowLogsResponse DescribeStreamLinkFlowLogs(Models\DescribeStreamLinkFlowLogsRequest $req) 查询媒体传输流的日志信息。
 * @method Models\DescribeStreamLinkFlowMediaStatisticsResponse DescribeStreamLinkFlowMediaStatistics(Models\DescribeStreamLinkFlowMediaStatisticsRequest $req) 查询媒体传输流的媒体质量数据。
 * @method Models\DescribeStreamLinkFlowRealtimeStatusResponse DescribeStreamLinkFlowRealtimeStatus(Models\DescribeStreamLinkFlowRealtimeStatusRequest $req) 实时查询流的当前状态
 * @method Models\DescribeStreamLinkFlowSRTStatisticsResponse DescribeStreamLinkFlowSRTStatistics(Models\DescribeStreamLinkFlowSRTStatisticsRequest $req) 查询媒体传输流的SRT质量数据。
 * @method Models\DescribeStreamLinkFlowStatisticsResponse DescribeStreamLinkFlowStatistics(Models\DescribeStreamLinkFlowStatisticsRequest $req) 查询媒体传输流的媒体质量数据。
 * @method Models\DescribeStreamLinkFlowsResponse DescribeStreamLinkFlows(Models\DescribeStreamLinkFlowsRequest $req) 批量查询媒体输入流的配置信息。
 * @method Models\DescribeStreamLinkRegionsResponse DescribeStreamLinkRegions(Models\DescribeStreamLinkRegionsRequest $req) 查询媒体传输所有地区。
 * @method Models\DescribeStreamLinkSecurityGroupsResponse DescribeStreamLinkSecurityGroups(Models\DescribeStreamLinkSecurityGroupsRequest $req) 批量查询安全组信息。
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 通过任务 ID 查询任务的执行状态和结果的详细信息（最多可以查询7天之内提交的任务）。
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) * 该接口用于查询任务列表；
* 当列表数据比较多时，单次接口调用无法拉取整个列表，可通过 ScrollToken 参数，分批拉取；
* 只能查询到最近七天（168小时）内的任务。
 * @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) 根据转码模板唯一标识，获取转码模板详情列表。返回结果包含符合条件的所有用户自定义模板及[系统预置转码模板](https://cloud.tencent.com/document/product/266/33476#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF)。
 * @method Models\DescribeVideoDatabaseEntryTaskDetailResponse DescribeVideoDatabaseEntryTaskDetail(Models\DescribeVideoDatabaseEntryTaskDetailRequest $req) 根据任务ID查询视频入库任务的状态。
 * @method Models\DescribeVideoSearchTaskDetailResponse DescribeVideoSearchTaskDetail(Models\DescribeVideoSearchTaskDetailRequest $req) 根据任务ID查询视频检索任务的状态。
 * @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) 查询用户自定义水印模板，支持根据条件，分页查询。
 * @method Models\DescribeWordSamplesResponse DescribeWordSamples(Models\DescribeWordSamplesRequest $req) 该接口用于根据应用场景、关键词、标签，分页查询关键词样本信息。
 * @method Models\DescribeWorkflowsResponse DescribeWorkflows(Models\DescribeWorkflowsRequest $req) 根据工作流 ID，获取工作流详情列表。
 * @method Models\DisableScheduleResponse DisableSchedule(Models\DisableScheduleRequest $req) 禁用自动化触发编排任务。
 * @method Models\DisableWorkflowResponse DisableWorkflow(Models\DisableWorkflowRequest $req) 禁用工作流。
 * @method Models\DisassociateSecurityGroupResponse DisassociateSecurityGroup(Models\DisassociateSecurityGroupRequest $req) 批量解绑安全组下面关联的输入输出。
 * @method Models\EditMediaResponse EditMedia(Models\EditMediaRequest $req) 对视频进行编辑，生成一个新的视频。编辑的功能包括：
 

一、**剪辑任务**：简单的视频剪辑，如剪辑、拼接等
1. 对一个文件进行剪辑，生成一个新的视频；
2. 对多个文件进行拼接，生成一个新的视频；
3. 对多个文件进行剪辑，然后再拼接，生成一个新的视频。

二、**合成任务**：通过接口描述信息，合成一个新的视频。
1. 多轨道（视频、音频、字幕）、多类型元素（视频、图片、音频、文字、空）
2. 图像级别：贴图、缩放、任意角度旋转、镜像等
3. 音频级别：音量控制、淡入淡出、混音等
4. 视频级别：转场、倍数播放、拼接、剪切、字幕、画中画、音画分离、出入场动效等
 * @method Models\EnableScheduleResponse EnableSchedule(Models\EnableScheduleRequest $req) 启用自动化触发编排任务。
 * @method Models\EnableWorkflowResponse EnableWorkflow(Models\EnableWorkflowRequest $req) 启用工作流。
 * @method Models\ExecuteFunctionResponse ExecuteFunction(Models\ExecuteFunctionRequest $req) 本接口仅用于定制开发的特殊场景，除非云媒体处理客服人员主动告知您需要使用本接口，其它情况请勿调用。
 * @method Models\ManageTaskResponse ManageTask(Models\ManageTaskRequest $req) 对已发起的任务进行管理。
 * @method Models\ModifyAIAnalysisTemplateResponse ModifyAIAnalysisTemplate(Models\ModifyAIAnalysisTemplateRequest $req) 修改用户自定义内容分析模板。

注意：模板 ID 10000 以下的为系统预置模板，不允许修改。
 * @method Models\ModifyAIRecognitionTemplateResponse ModifyAIRecognitionTemplate(Models\ModifyAIRecognitionTemplateRequest $req) 修改用户自定义内容识别模板。
 * @method Models\ModifyAdaptiveDynamicStreamingTemplateResponse ModifyAdaptiveDynamicStreamingTemplate(Models\ModifyAdaptiveDynamicStreamingTemplateRequest $req) 修改转自适应码流模板
 * @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) 修改用户自定义转动图模板。
 * @method Models\ModifyAsrHotwordsResponse ModifyAsrHotwords(Models\ModifyAsrHotwordsRequest $req) 智能字幕更新热词库接口
 * @method Models\ModifyContentReviewTemplateResponse ModifyContentReviewTemplate(Models\ModifyContentReviewTemplateRequest $req) 修改用户自定义内容审核模板。
 * @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) 修改用户自定义雪碧图模板。
 * @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) 修改直播录制模板
 * @method Models\ModifyPersonSampleResponse ModifyPersonSample(Models\ModifyPersonSampleRequest $req) 该接口用于根据素材 ID，修改素材样本信息，包括名称、描述的修改，以及五官、标签的添加、删除、重置操作。五官删除操作需保证至少剩余 1 张图片，否则，请使用重置操作。
 * @method Models\ModifyQualityControlTemplateResponse ModifyQualityControlTemplate(Models\ModifyQualityControlTemplateRequest $req) 修改媒体质检模板。
 * @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) 修改用户自定义采样截图模板。
 * @method Models\ModifyScheduleResponse ModifySchedule(Models\ModifyScheduleRequest $req) 修改编排
 * @method Models\ModifySmartSubtitleTemplateResponse ModifySmartSubtitleTemplate(Models\ModifySmartSubtitleTemplateRequest $req) 修改用户自定义智能字幕模板。
 * @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) 修改用户自定义指定时间点截图模板。
 * @method Models\ModifyStreamLinkEventResponse ModifyStreamLinkEvent(Models\ModifyStreamLinkEventRequest $req) 修改媒体传输的事件配置信息。
 * @method Models\ModifyStreamLinkFlowResponse ModifyStreamLinkFlow(Models\ModifyStreamLinkFlowRequest $req) 修改媒体传输的传输流配置信息。
 * @method Models\ModifyStreamLinkInputResponse ModifyStreamLinkInput(Models\ModifyStreamLinkInputRequest $req) 修改媒体传输流的输入信息。
 * @method Models\ModifyStreamLinkOutputInfoResponse ModifyStreamLinkOutputInfo(Models\ModifyStreamLinkOutputInfoRequest $req) 修改媒体传输流的输出配置。
 * @method Models\ModifyStreamLinkSecurityGroupResponse ModifyStreamLinkSecurityGroup(Models\ModifyStreamLinkSecurityGroupRequest $req) 更新安全组。
 * @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) 修改用户自定义转码模板信息。
 * @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) 修改用户自定义水印模板，水印类型不允许修改。
 * @method Models\ModifyWordSampleResponse ModifyWordSample(Models\ModifyWordSampleRequest $req) 该接口用于修改关键词的应用场景、标签，关键词本身不可修改，如需修改，可删除重建。
 * @method Models\ParseLiveStreamProcessNotificationResponse ParseLiveStreamProcessNotification(Models\ParseLiveStreamProcessNotificationRequest $req) 从 CMQ 获取到消息后，从消息的 msgBody 字段中解析出 MPS 直播流处理事件通知的内容。
该接口不用于发起网络调用，而是用来帮助生成各个语言平台的 SDK，您可以参考 SDK 中的解析实现事件通知的解析。
 * @method Models\ParseNotificationResponse ParseNotification(Models\ParseNotificationRequest $req) 从 CMQ 获取到消息后，从消息的 msgBody 字段中解析出 MPS 事件通知的内容。
该接口不用于发起网络调用，而是用来帮助生成各个语言平台的 SDK，您可以参考 SDK 中的解析函数，实现事件通知的解析。
 * @method Models\ProcessImageResponse ProcessImage(Models\ProcessImageRequest $req) 发起图片处理，功能包括：
1. 格式转换；
2. 图像增强；
3. 图像擦除;
 * @method Models\ProcessLiveStreamResponse ProcessLiveStream(Models\ProcessLiveStreamRequest $req) 对直播流媒体发起处理任务，功能包括：

* 智能内容审核（画面鉴黄、敏感信息检测、声音鉴黄）；
* 智能内容识别（人脸、文本全文、文本关键词、语音全文、语音关键词、语音实时翻译、物体识别、游戏打点）。
* 智能内容分析（新闻实时拆条）。
* 质检（直播流格式诊断、音画内容检测（抖动、模糊、低光照、过曝光、黑边、白边、黑屏、白屏、花屏、噪点、马赛克、二维码等）、无参考打分）。
* 录制

直播流处理事件通知支持HTTP回调，也支持实时写入用户指定的消息队列 CMQ 中，用户从消息队列 CMQ 中获取事件通知结果，同时处理过程中存在输出文件的，会写入用户指定的输出文件的目标存储中。
 * @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) 对 URL视频链接 或 COS 中的媒体文件发起处理任务，功能包括：
1. 视频转码（普通转码、极速高清转码、音视频增强）；
2. 视频转动图；
3. 对视频按指定时间点截图；
4. 对视频采样截图；
5. 对视频截图雪碧图；
6. 对视频转自适应码流；
7. 智能内容审核（鉴黄、敏感信息检测）；
8. 智能内容分析（标签、分类、封面、按帧标签、拆条、集锦、片头片尾、游戏打点）；
9. 智能内容识别（人脸、文本全文、文本关键词、语音全文、语音关键词、语音翻译、物体识别）。
10. 媒体质检（直播流格式诊断、音画内容检测（抖动、模糊、低光照、过曝光、黑边、白边、黑屏、白屏、花屏、噪点、马赛克、二维码等）、无参考打分）
11. 智能字幕（语音全文、语音热词、语音翻译）
 * @method Models\RecognizeMediaForZhiXueResponse RecognizeMediaForZhiXue(Models\RecognizeMediaForZhiXueRequest $req) 智能媒体识别，包含表情和动作识别。仅用于智学，其他调用无效。
 * @method Models\ResetWorkflowResponse ResetWorkflow(Models\ResetWorkflowRequest $req) 重新设置一个已经存在且处于禁用状态的工作流。
 * @method Models\StartStreamLinkFlowResponse StartStreamLinkFlow(Models\StartStreamLinkFlowRequest $req) 启动媒体传输流。
 * @method Models\StopStreamLinkFlowResponse StopStreamLinkFlow(Models\StopStreamLinkFlowRequest $req) 停止媒体传输流。
 * @method Models\WithdrawsWatermarkResponse WithdrawsWatermark(Models\WithdrawsWatermarkRequest $req) 提取视频中的盲水印。
 */

class MpsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mps.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mps";

    /**
     * @var string
     */
    protected $version = "2019-06-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("mps")."\\"."V20190612\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
