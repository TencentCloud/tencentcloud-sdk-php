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
 * 编排子任务输出
 *
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() 获取<p>转码任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) 设置<p>转码任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() 获取<p>转动图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) 设置<p>转动图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskSnapshotByTimeOffsetResult getSnapshotByTimeOffsetTask() 获取<p>时间点截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask) 设置<p>时间点截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() 获取<p>采样截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) 设置<p>采样截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() 获取<p>雪碧图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) 设置<p>雪碧图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() 获取<p>自适应码流任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) 设置<p>自适应码流任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleRecognitionTaskResult getRecognitionTask() 获取<p>识别任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognitionTask(ScheduleRecognitionTaskResult $RecognitionTask) 设置<p>识别任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleReviewTaskResult getReviewTask() 获取<p>审核任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewTask(ScheduleReviewTaskResult $ReviewTask) 设置<p>审核任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleAnalysisTaskResult getAnalysisTask() 获取<p>分析任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisTask(ScheduleAnalysisTaskResult $AnalysisTask) 设置<p>分析任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleQualityControlTaskResult getQualityControlTask() 获取<p>媒体质检任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlTask(ScheduleQualityControlTaskResult $QualityControlTask) 设置<p>媒体质检任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleExecRuleTaskResult getExecRuleTask() 获取<p>条件判断任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecRuleTask(ScheduleExecRuleTaskResult $ExecRuleTask) 设置<p>条件判断任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleSmartSubtitleTaskResult getSmartSubtitlesTask() 获取<p>智能字幕任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartSubtitlesTask(ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask) 设置<p>智能字幕任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartEraseTaskResult getSmartEraseTask() 获取<p>智能擦除任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartEraseTask(SmartEraseTaskResult $SmartEraseTask) 设置<p>智能擦除任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AIDubbingTaskResult getAIDubbingTask() 获取<p>AI配音任务输出。</p>
 * @method void setAIDubbingTask(AIDubbingTaskResult $AIDubbingTask) 设置<p>AI配音任务输出。</p>
 */
class ActivityResItem extends AbstractModel
{
    /**
     * @var MediaProcessTaskTranscodeResult <p>转码任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult <p>转动图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSnapshotByTimeOffsetResult <p>时间点截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult <p>采样截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult <p>雪碧图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult <p>自适应码流任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var ScheduleRecognitionTaskResult <p>识别任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognitionTask;

    /**
     * @var ScheduleReviewTaskResult <p>审核任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewTask;

    /**
     * @var ScheduleAnalysisTaskResult <p>分析任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisTask;

    /**
     * @var ScheduleQualityControlTaskResult <p>媒体质检任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlTask;

    /**
     * @var ScheduleExecRuleTaskResult <p>条件判断任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecRuleTask;

    /**
     * @var ScheduleSmartSubtitleTaskResult <p>智能字幕任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskResult <p>智能擦除任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartEraseTask;

    /**
     * @var AIDubbingTaskResult <p>AI配音任务输出。</p>
     */
    public $AIDubbingTask;

    /**
     * @param MediaProcessTaskTranscodeResult $TranscodeTask <p>转码任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask <p>转动图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskSnapshotByTimeOffsetResult $SnapshotByTimeOffsetTask <p>时间点截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask <p>采样截图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask <p>雪碧图任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask <p>自适应码流任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleRecognitionTaskResult $RecognitionTask <p>识别任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleReviewTaskResult $ReviewTask <p>审核任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleAnalysisTaskResult $AnalysisTask <p>分析任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleQualityControlTaskResult $QualityControlTask <p>媒体质检任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleExecRuleTaskResult $ExecRuleTask <p>条件判断任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleSmartSubtitleTaskResult $SmartSubtitlesTask <p>智能字幕任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartEraseTaskResult $SmartEraseTask <p>智能擦除任务输出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AIDubbingTaskResult $AIDubbingTask <p>AI配音任务输出。</p>
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
            $this->TranscodeTask = new MediaProcessTaskTranscodeResult();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AnimatedGraphicTask",$param) and $param["AnimatedGraphicTask"] !== null) {
            $this->AnimatedGraphicTask = new MediaProcessTaskAnimatedGraphicResult();
            $this->AnimatedGraphicTask->deserialize($param["AnimatedGraphicTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new MediaProcessTaskSnapshotByTimeOffsetResult();
            $this->SnapshotByTimeOffsetTask->deserialize($param["SnapshotByTimeOffsetTask"]);
        }

        if (array_key_exists("SampleSnapshotTask",$param) and $param["SampleSnapshotTask"] !== null) {
            $this->SampleSnapshotTask = new MediaProcessTaskSampleSnapshotResult();
            $this->SampleSnapshotTask->deserialize($param["SampleSnapshotTask"]);
        }

        if (array_key_exists("ImageSpriteTask",$param) and $param["ImageSpriteTask"] !== null) {
            $this->ImageSpriteTask = new MediaProcessTaskImageSpriteResult();
            $this->ImageSpriteTask->deserialize($param["ImageSpriteTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new MediaProcessTaskAdaptiveDynamicStreamingResult();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }

        if (array_key_exists("RecognitionTask",$param) and $param["RecognitionTask"] !== null) {
            $this->RecognitionTask = new ScheduleRecognitionTaskResult();
            $this->RecognitionTask->deserialize($param["RecognitionTask"]);
        }

        if (array_key_exists("ReviewTask",$param) and $param["ReviewTask"] !== null) {
            $this->ReviewTask = new ScheduleReviewTaskResult();
            $this->ReviewTask->deserialize($param["ReviewTask"]);
        }

        if (array_key_exists("AnalysisTask",$param) and $param["AnalysisTask"] !== null) {
            $this->AnalysisTask = new ScheduleAnalysisTaskResult();
            $this->AnalysisTask->deserialize($param["AnalysisTask"]);
        }

        if (array_key_exists("QualityControlTask",$param) and $param["QualityControlTask"] !== null) {
            $this->QualityControlTask = new ScheduleQualityControlTaskResult();
            $this->QualityControlTask->deserialize($param["QualityControlTask"]);
        }

        if (array_key_exists("ExecRuleTask",$param) and $param["ExecRuleTask"] !== null) {
            $this->ExecRuleTask = new ScheduleExecRuleTaskResult();
            $this->ExecRuleTask->deserialize($param["ExecRuleTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new ScheduleSmartSubtitleTaskResult();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new SmartEraseTaskResult();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
        }

        if (array_key_exists("AIDubbingTask",$param) and $param["AIDubbingTask"] !== null) {
            $this->AIDubbingTask = new AIDubbingTaskResult();
            $this->AIDubbingTask->deserialize($param["AIDubbingTask"]);
        }
    }
}
