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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编排原子任务
 *
 * @method TranscodeTaskInput getTranscodeTask() 获取视频转码任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTask(TranscodeTaskInput $TranscodeTask) 设置视频转码任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AnimatedGraphicTaskInput getAnimatedGraphicTask() 获取视频转动图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnimatedGraphicTask(AnimatedGraphicTaskInput $AnimatedGraphicTask) 设置视频转动图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method SnapshotByTimeOffsetTaskInput getSnapshotByTimeOffsetTask() 获取视频按时间点截图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetTask(SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask) 设置视频按时间点截图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method SampleSnapshotTaskInput getSampleSnapshotTask() 获取视频采样截图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSnapshotTask(SampleSnapshotTaskInput $SampleSnapshotTask) 设置视频采样截图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageSpriteTaskInput getImageSpriteTask() 获取视频截雪碧图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSpriteTask(ImageSpriteTaskInput $ImageSpriteTask) 设置视频截雪碧图任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdaptiveDynamicStreamingTaskInput getAdaptiveDynamicStreamingTask() 获取转自适应码流任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveDynamicStreamingTask(AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask) 设置转自适应码流任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取视频内容审核类型任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置视频内容审核类型任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取视频内容分析类型任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置视频内容分析类型任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取视频内容识别类型任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置视频内容识别类型任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiQualityControlTaskInput getQualityControlTask() 获取媒体质检任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlTask(AiQualityControlTaskInput $QualityControlTask) 设置媒体质检任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExecRulesTask getExecRulesTask() 获取任务条件判断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecRulesTask(ExecRulesTask $ExecRulesTask) 设置任务条件判断
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() 获取智能字幕任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) 设置智能字幕任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartEraseTaskInput getSmartEraseTask() 获取智能擦除任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartEraseTask(SmartEraseTaskInput $SmartEraseTask) 设置智能擦除任务
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActivityPara extends AbstractModel
{
    /**
     * @var TranscodeTaskInput 视频转码任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTask;

    /**
     * @var AnimatedGraphicTaskInput 视频转动图任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnimatedGraphicTask;

    /**
     * @var SnapshotByTimeOffsetTaskInput 视频按时间点截图任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var SampleSnapshotTaskInput 视频采样截图任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSnapshotTask;

    /**
     * @var ImageSpriteTaskInput 视频截雪碧图任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSpriteTask;

    /**
     * @var AdaptiveDynamicStreamingTaskInput 转自适应码流任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var AiContentReviewTaskInput 视频内容审核类型任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 视频内容分析类型任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 视频内容识别类型任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiRecognitionTask;

    /**
     * @var AiQualityControlTaskInput 媒体质检任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlTask;

    /**
     * @var ExecRulesTask 任务条件判断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecRulesTask;

    /**
     * @var SmartSubtitlesTaskInput 智能字幕任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskInput 智能擦除任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartEraseTask;

    /**
     * @param TranscodeTaskInput $TranscodeTask 视频转码任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AnimatedGraphicTaskInput $AnimatedGraphicTask 视频转动图任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param SnapshotByTimeOffsetTaskInput $SnapshotByTimeOffsetTask 视频按时间点截图任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param SampleSnapshotTaskInput $SampleSnapshotTask 视频采样截图任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageSpriteTaskInput $ImageSpriteTask 视频截雪碧图任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdaptiveDynamicStreamingTaskInput $AdaptiveDynamicStreamingTask 转自适应码流任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiContentReviewTaskInput $AiContentReviewTask 视频内容审核类型任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskInput $AiAnalysisTask 视频内容分析类型任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiRecognitionTaskInput $AiRecognitionTask 视频内容识别类型任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiQualityControlTaskInput $QualityControlTask 媒体质检任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExecRulesTask $ExecRulesTask 任务条件判断
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask 智能字幕任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartEraseTaskInput $SmartEraseTask 智能擦除任务
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("QualityControlTask",$param) and $param["QualityControlTask"] !== null) {
            $this->QualityControlTask = new AiQualityControlTaskInput();
            $this->QualityControlTask->deserialize($param["QualityControlTask"]);
        }

        if (array_key_exists("ExecRulesTask",$param) and $param["ExecRulesTask"] !== null) {
            $this->ExecRulesTask = new ExecRulesTask();
            $this->ExecRulesTask->deserialize($param["ExecRulesTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new SmartEraseTaskInput();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
        }
    }
}
