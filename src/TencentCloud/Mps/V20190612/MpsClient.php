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
* @method Models\CreateAnimatedGraphicsTemplateResponse CreateAnimatedGraphicsTemplate(Models\CreateAnimatedGraphicsTemplateRequest $req) 创建用户自定义转动图模板，数量上限：16。
* @method Models\CreateImageSpriteTemplateResponse CreateImageSpriteTemplate(Models\CreateImageSpriteTemplateRequest $req) 创建用户自定义雪碧图模板，数量上限：16。
* @method Models\CreateSampleSnapshotTemplateResponse CreateSampleSnapshotTemplate(Models\CreateSampleSnapshotTemplateRequest $req) 创建用户自定义采样截图模板，数量上限：16。
* @method Models\CreateSnapshotByTimeOffsetTemplateResponse CreateSnapshotByTimeOffsetTemplate(Models\CreateSnapshotByTimeOffsetTemplateRequest $req) 创建用户自定义指定时间点截图模板，数量上限：16。
* @method Models\CreateTranscodeTemplateResponse CreateTranscodeTemplate(Models\CreateTranscodeTemplateRequest $req) 创建用户自定义转码模板，数量上限：1000。
* @method Models\CreateWatermarkTemplateResponse CreateWatermarkTemplate(Models\CreateWatermarkTemplateRequest $req) 创建用户自定义水印模板，数量上限：1000。
* @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) 对 COS 中指定 Bucket 的目录下上传的媒体文件，设置处理规则，包括：
1. 视频转码（带水印）；
2. 视频转动图；
3. 对视频按指定时间点截图；
4. 对视频采样截图；
5. 对视频截图雪碧图；
6. 对视频转自适应码流。

注意：创建工作流成功后是禁用状态，需要手动启用。
* @method Models\DeleteAnimatedGraphicsTemplateResponse DeleteAnimatedGraphicsTemplate(Models\DeleteAnimatedGraphicsTemplateRequest $req) 删除用户自定义转动图模板。
* @method Models\DeleteImageSpriteTemplateResponse DeleteImageSpriteTemplate(Models\DeleteImageSpriteTemplateRequest $req) 删除雪碧图模板。
* @method Models\DeleteSampleSnapshotTemplateResponse DeleteSampleSnapshotTemplate(Models\DeleteSampleSnapshotTemplateRequest $req) 删除用户自定义采样截图模板。
* @method Models\DeleteSnapshotByTimeOffsetTemplateResponse DeleteSnapshotByTimeOffsetTemplate(Models\DeleteSnapshotByTimeOffsetTemplateRequest $req) 删除用户自定义指定时间点截图模板。
* @method Models\DeleteTranscodeTemplateResponse DeleteTranscodeTemplate(Models\DeleteTranscodeTemplateRequest $req) 删除用户自定义转码模板。
* @method Models\DeleteWatermarkTemplateResponse DeleteWatermarkTemplate(Models\DeleteWatermarkTemplateRequest $req) 删除用户自定义水印模板。
* @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) 删除工作流。对于已启用的工作流，需要禁用后才能删除。
* @method Models\DescribeAnimatedGraphicsTemplatesResponse DescribeAnimatedGraphicsTemplates(Models\DescribeAnimatedGraphicsTemplatesRequest $req) 查询转动图模板列表，支持根据条件，分页查询。
* @method Models\DescribeImageSpriteTemplatesResponse DescribeImageSpriteTemplates(Models\DescribeImageSpriteTemplatesRequest $req) 查询雪碧图模板，支持根据条件，分页查询。
* @method Models\DescribeSampleSnapshotTemplatesResponse DescribeSampleSnapshotTemplates(Models\DescribeSampleSnapshotTemplatesRequest $req) 查询采样截图模板，支持根据条件，分页查询。
* @method Models\DescribeSnapshotByTimeOffsetTemplatesResponse DescribeSnapshotByTimeOffsetTemplates(Models\DescribeSnapshotByTimeOffsetTemplatesRequest $req) 查询指定时间点截图模板，支持根据条件，分页查询。
* @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 通过任务 ID 查询任务的执行状态和结果的详细信息（最多可以查询3天之内提交的任务）。
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) * 该接口用于查询任务列表；
* 当列表数据比较多时，单次接口调用无法拉取整个列表，可通过 ScrollToken 参数，分批拉取；
* 只能查询到最近三天（72 小时）内的任务。
* @method Models\DescribeTranscodeTemplatesResponse DescribeTranscodeTemplates(Models\DescribeTranscodeTemplatesRequest $req) 根据转码模板唯一标识，获取转码模板详情列表。返回结果包含符合条件的所有用户自定义模板及[系统预置转码模板](https://cloud.tencent.com/document/product/266/33476#.E9.A2.84.E7.BD.AE.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF)。
* @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) 用户服务信息查询，返回用户状态和计费类型；若未注册则返回相应错误提示。
* @method Models\DescribeWatermarkTemplatesResponse DescribeWatermarkTemplates(Models\DescribeWatermarkTemplatesRequest $req) 查询用户自定义水印模板，支持根据条件，分页查询。
* @method Models\DescribeWorkflowsResponse DescribeWorkflows(Models\DescribeWorkflowsRequest $req) 根据工作流 ID，获取工作流详情列表。
* @method Models\DisableWorkflowResponse DisableWorkflow(Models\DisableWorkflowRequest $req) 禁用工作流。
* @method Models\EnableWorkflowResponse EnableWorkflow(Models\EnableWorkflowRequest $req) 启用工作流。
* @method Models\ModifyAnimatedGraphicsTemplateResponse ModifyAnimatedGraphicsTemplate(Models\ModifyAnimatedGraphicsTemplateRequest $req) 修改用户自定义转动图模板。
* @method Models\ModifyImageSpriteTemplateResponse ModifyImageSpriteTemplate(Models\ModifyImageSpriteTemplateRequest $req) 修改用户自定义雪碧图模板。
* @method Models\ModifySampleSnapshotTemplateResponse ModifySampleSnapshotTemplate(Models\ModifySampleSnapshotTemplateRequest $req) 修改用户自定义采样截图模板。
* @method Models\ModifySnapshotByTimeOffsetTemplateResponse ModifySnapshotByTimeOffsetTemplate(Models\ModifySnapshotByTimeOffsetTemplateRequest $req) 修改用户自定义指定时间点截图模板。
* @method Models\ModifyTranscodeTemplateResponse ModifyTranscodeTemplate(Models\ModifyTranscodeTemplateRequest $req) 修改用户自定义转码模板信息。
* @method Models\ModifyWatermarkTemplateResponse ModifyWatermarkTemplate(Models\ModifyWatermarkTemplateRequest $req) 修改用户自定义水印模板，水印类型不允许修改。
* @method Models\ProcessLiveMediaResponse ProcessLiveMedia(Models\ProcessLiveMediaRequest $req) 对直播流媒体发起处理任务，功能包括：

1. 智能内容识别（人脸、文本全文、文本关键词、语音全文、语音关键词、物体）。
2. 智能内容分析（精彩集锦）。

直播流处理事件通知实时写入用户指定的消息队列 CMQ 中，用户需要从消息队列 CMQ 中获取事件通知结果，同时处理过程中存在输出文件的，会写入用户指定的输出文件的目标存储中。
* @method Models\ProcessMediaResponse ProcessMedia(Models\ProcessMediaRequest $req) 对 COS 中的媒体文件发起处理任务，功能包括：
1. 视频转码（带水印）；
2. 视频转动图；
3. 对视频按指定时间点截图；
4. 对视频采样截图；
5. 对视频截图雪碧图；
6. 对视频转自适应码流。
* @method Models\ResetWorkflowResponse ResetWorkflow(Models\ResetWorkflowRequest $req) 重新设置一个已经存在且处于禁用状态的工作流。
 */

class MpsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "mps.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-06-12";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
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
