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
 * 编排子任务输出
 *
 * @method MediaProcessTaskTranscodeResult getTranscodeTask() 获取转码任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTask(MediaProcessTaskTranscodeResult $TranscodeTask) 设置转码任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskAnimatedGraphicResult getAnimatedGraphicTask() 获取转动图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnimatedGraphicTask(MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask) 设置转动图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskSampleSnapshotResult getSnapshotByTimeOffsetTask() 获取时间点截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetTask(MediaProcessTaskSampleSnapshotResult $SnapshotByTimeOffsetTask) 设置时间点截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskSampleSnapshotResult getSampleSnapshotTask() 获取采样截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSnapshotTask(MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask) 设置采样截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskImageSpriteResult getImageSpriteTask() 获取雪碧图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSpriteTask(MediaProcessTaskImageSpriteResult $ImageSpriteTask) 设置雪碧图任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaProcessTaskAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() 获取自适应码流任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveDynamicStreamingTask(MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) 设置自适应码流任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleRecognitionTaskResult getRecognitionTask() 获取识别任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognitionTask(ScheduleRecognitionTaskResult $RecognitionTask) 设置识别任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleReviewTaskResult getReviewTask() 获取审核任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewTask(ScheduleReviewTaskResult $ReviewTask) 设置审核任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleAnalysisTaskResult getAnalysisTask() 获取分析任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisTask(ScheduleAnalysisTaskResult $AnalysisTask) 设置分析任务输出
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActivityResItem extends AbstractModel
{
    /**
     * @var MediaProcessTaskTranscodeResult 转码任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTask;

    /**
     * @var MediaProcessTaskAnimatedGraphicResult 转动图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnimatedGraphicTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult 时间点截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetTask;

    /**
     * @var MediaProcessTaskSampleSnapshotResult 采样截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSnapshotTask;

    /**
     * @var MediaProcessTaskImageSpriteResult 雪碧图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSpriteTask;

    /**
     * @var MediaProcessTaskAdaptiveDynamicStreamingResult 自适应码流任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @var ScheduleRecognitionTaskResult 识别任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognitionTask;

    /**
     * @var ScheduleReviewTaskResult 审核任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewTask;

    /**
     * @var ScheduleAnalysisTaskResult 分析任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisTask;

    /**
     * @param MediaProcessTaskTranscodeResult $TranscodeTask 转码任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskAnimatedGraphicResult $AnimatedGraphicTask 转动图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskSampleSnapshotResult $SnapshotByTimeOffsetTask 时间点截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskSampleSnapshotResult $SampleSnapshotTask 采样截图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskImageSpriteResult $ImageSpriteTask 雪碧图任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaProcessTaskAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask 自适应码流任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleRecognitionTaskResult $RecognitionTask 识别任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleReviewTaskResult $ReviewTask 审核任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleAnalysisTaskResult $AnalysisTask 分析任务输出
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
            $this->TranscodeTask = new MediaProcessTaskTranscodeResult();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AnimatedGraphicTask",$param) and $param["AnimatedGraphicTask"] !== null) {
            $this->AnimatedGraphicTask = new MediaProcessTaskAnimatedGraphicResult();
            $this->AnimatedGraphicTask->deserialize($param["AnimatedGraphicTask"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetTask",$param) and $param["SnapshotByTimeOffsetTask"] !== null) {
            $this->SnapshotByTimeOffsetTask = new MediaProcessTaskSampleSnapshotResult();
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
    }
}
