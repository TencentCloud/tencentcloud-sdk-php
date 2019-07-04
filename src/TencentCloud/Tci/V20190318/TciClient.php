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

namespace TencentCloud\Tci\V20190318;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tci\V20190318\Models as Models;

/**
* @method Models\AIAssistantResponse AIAssistant(Models\AIAssistantRequest $req) 提供 AI 助教基础版本功能接口
* @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) 用于取消已经提交的任务
* @method Models\CheckAttendanceResponse CheckAttendance(Models\CheckAttendanceRequest $req) 人员考勤
* @method Models\CheckFacePhotoResponse CheckFacePhoto(Models\CheckFacePhotoRequest $req) 检查人脸图片是否合法
* @method Models\CreateFaceResponse CreateFace(Models\CreateFaceRequest $req) 创建人脸
* @method Models\CreateLibraryResponse CreateLibrary(Models\CreateLibraryRequest $req) 创建人员库
* @method Models\CreateVocabResponse CreateVocab(Models\CreateVocabRequest $req) 创建词汇
* @method Models\CreateVocabLibResponse CreateVocabLib(Models\CreateVocabLibRequest $req) 建立词汇库
* @method Models\DeleteFaceResponse DeleteFace(Models\DeleteFaceRequest $req) 删除人脸
* @method Models\DeleteLibraryResponse DeleteLibrary(Models\DeleteLibraryRequest $req) 删除人员库
* @method Models\DeletePersonResponse DeletePerson(Models\DeletePersonRequest $req) 删除人员
* @method Models\DeleteVocabResponse DeleteVocab(Models\DeleteVocabRequest $req) 删除词汇
* @method Models\DeleteVocabLibResponse DeleteVocabLib(Models\DeleteVocabLibRequest $req) 删除词汇库
* @method Models\DescribeAITaskResultResponse DescribeAITaskResult(Models\DescribeAITaskResultRequest $req) 获取标准化接口任务结果
* @method Models\DescribeAttendanceResultResponse DescribeAttendanceResult(Models\DescribeAttendanceResultRequest $req) 人脸考勤查询结果
* @method Models\DescribeAudioTaskResponse DescribeAudioTask(Models\DescribeAudioTaskRequest $req) 音频评估任务信息查询接口，异步查询客户提交的请求的结果。
* @method Models\DescribeConversationTaskResponse DescribeConversationTask(Models\DescribeConversationTaskRequest $req) 音频对话任务评估任务信息查询接口，异步查询客户提交的请求的结果。
* @method Models\DescribeHighlightResultResponse DescribeHighlightResult(Models\DescribeHighlightResultRequest $req) 视频精彩集锦结果查询接口，异步查询客户提交的请求的结果。
* @method Models\DescribeImageTaskResponse DescribeImageTask(Models\DescribeImageTaskRequest $req) 拉取任务详情
* @method Models\DescribeImageTaskStatisticResponse DescribeImageTaskStatistic(Models\DescribeImageTaskStatisticRequest $req) 获取图像任务统计信息
* @method Models\DescribeLibrariesResponse DescribeLibraries(Models\DescribeLibrariesRequest $req) 获取人员库列表
* @method Models\DescribePersonResponse DescribePerson(Models\DescribePersonRequest $req) 获取人员详情
* @method Models\DescribePersonsResponse DescribePersons(Models\DescribePersonsRequest $req) 拉取人员列表
* @method Models\DescribeVocabResponse DescribeVocab(Models\DescribeVocabRequest $req) 查询词汇
* @method Models\DescribeVocabLibResponse DescribeVocabLib(Models\DescribeVocabLibRequest $req) 查询词汇库
* @method Models\ModifyLibraryResponse ModifyLibrary(Models\ModifyLibraryRequest $req) 修改人员库信息
* @method Models\ModifyPersonResponse ModifyPerson(Models\ModifyPersonRequest $req) 修改人员信息
* @method Models\SubmitAudioTaskResponse SubmitAudioTask(Models\SubmitAudioTaskRequest $req) 音频任务提交接口
* @method Models\SubmitCheckAttendanceTaskResponse SubmitCheckAttendanceTask(Models\SubmitCheckAttendanceTaskRequest $req) 提交人员考勤任务
* @method Models\SubmitDoubleVideoHighlightsResponse SubmitDoubleVideoHighlights(Models\SubmitDoubleVideoHighlightsRequest $req) 发起双路视频生成精彩集锦接口。该接口可以通过客户传入的学生音视频及老师视频两路Url，自动生成一堂课程的精彩集锦。需要通过SubmitDoubleVideoHighlights接口获取生成结果。
* @method Models\SubmitHighlightsResponse SubmitHighlights(Models\SubmitHighlightsRequest $req) 发起视频生成精彩集锦接口。该接口可以通过客户传入的课程音频数据及相关策略（如微笑抽取，专注抽取等），自动生成一堂课程的精彩集锦。需要通过QueryHighlightResult接口获取生成结果。
* @method Models\SubmitImageTaskResponse SubmitImageTask(Models\SubmitImageTaskRequest $req) 提交图像分析任务
* @method Models\TransmitAudioStreamResponse TransmitAudioStream(Models\TransmitAudioStreamRequest $req) 分析音频信息
 */

class TciClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tci.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-03-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("tci")."\\"."V20190318\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
