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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编排原子任务
 *
 * @method TranscodeTaskInput getTranscodeTask() 获取视频转码任务
 * @method void setTranscodeTask(TranscodeTaskInput $TranscodeTask) 设置视频转码任务
 * @method AnimatedGraphicTaskInput getAnimatedGraphicTask() 获取视频转动图任务
 * @method void setAnimatedGraphicTask(AnimatedGraphicTaskInput $AnimatedGraphicTask) 设置视频转动图任务
 * @method SnapshotByTimeOffsetTaskInput getSnapshotByTimeOffsetTask() 获取视频按时间点截图任务
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask) 设置视频按时间点截图任务
 * @method SampleSnapshotTaskInput getSampleSnapshotTask() 获取视频采样截图任务
 * @method void setSampleSnapshotTask(SampleSnapshotTaskInput $SampleSnapshotTask) 设置视频采样截图任务
 * @method ImageSpriteTaskInput getImageSpriteTask() 获取视频截雪碧图任务
 * @method void setImageSpriteTask(ImageSpriteTaskInput $ImageSpriteTask) 设置视频截雪碧图任务
 * @method AdaptiveDynamicStreamingTaskInput getAdaptiveDynamicStreamingTask() 获取转自适应码流任务
 * @method void setAdaptiveDynamicStreamingTask(AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask) 设置转自适应码流任务
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取视频内容审核类型任务
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置视频内容审核类型任务
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取视频内容分析类型任务
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置视频内容分析类型任务
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取视频内容识别类型任务
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置视频内容识别类型任务
 */
class ActivityPara extends AbstractModel
{
    /**
     * @var TranscodeTaskInput 视频转码任务
     */
    public $TranscodeTask;

    /**
     * @var AnimatedGraphicTaskInput 视频转动图任务
     */
    public $AnimatedGraphicTask;

    /**
     * @var SnapshotByTimeOffsetTaskInput 视频按时间点截图任务
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var SampleSnapshotTaskInput 视频采样截图任务
     */
    public $SampleSnapshotTask;

    /**
     * @var ImageSpriteTaskInput 视频截雪碧图任务
     */
    public $ImageSpriteTask;

    /**
     * @var AdaptiveDynamicStreamingTaskInput 转自适应码流任务
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var AiContentReviewTaskInput 视频内容审核类型任务
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 视频内容分析类型任务
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 视频内容识别类型任务
     */
    public $AiRecognitionTask;

    /**
     * @param TranscodeTaskInput $TranscodeTask 视频转码任务
     * @param AnimatedGraphicTaskInput $AnimatedGraphicTask 视频转动图任务
     * @param SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask 视频按时间点截图任务
     * @param SampleSnapshotTaskInput $SampleSnapshotTask 视频采样截图任务
     * @param ImageSpriteTaskInput $ImageSpriteTask 视频截雪碧图任务
     * @param AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask 转自适应码流任务
     * @param AiContentReviewTaskInput $AiContentReviewTask 视频内容审核类型任务
     * @param AiAnalysisTaskInput $AiAnalysisTask 视频内容分析类型任务
     * @param AiRecognitionTaskInput $AiRecognitionTask 视频内容识别类型任务
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new TranscodeTaskInput();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AnimatedGraphicTask",$param) and $param["AnimatedGraphicTask"] !== null) {
            $this->AnimatedGraphicTask = new AnimatedGraphicTaskInput();
            $this->AnimatedGraphicTask->deserialize($param["AnimatedGraphicTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new SnapshotByTimeOffsetTaskInput();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("SampleSnapshotTask",$param) and $param["SampleSnapshotTask"] !== null) {
            $this->SampleSnapshotTask = new SampleSnapshotTaskInput();
            $this->SampleSnapshotTask->deserialize($param["SampleSnapshotTask"]);
        }

        if (array_key_exists("ImageSpriteTask",$param) and $param["ImageSpriteTask"] !== null) {
            $this->ImageSpriteTask = new ImageSpriteTaskInput();
            $this->ImageSpriteTask->deserialize($param["ImageSpriteTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new AdaptiveDynamicStreamingTaskInput();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }
    }
}
