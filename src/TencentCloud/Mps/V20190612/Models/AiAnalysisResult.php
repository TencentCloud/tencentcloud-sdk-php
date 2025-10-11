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
 * 智能分析结果
 *
 * @method string getType() 获取任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
<li>Highlight：智能精彩集锦</li>
<li>DeLogo：智能擦除</li>
<li>Description：大模型摘要</li>
<li>Dubbing：智能译制</li>
<li>VideoRemake: 视频去重</li>
 * @method void setType(string $Type) 设置任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
<li>Highlight：智能精彩集锦</li>
<li>DeLogo：智能擦除</li>
<li>Description：大模型摘要</li>
<li>Dubbing：智能译制</li>
<li>VideoRemake: 视频去重</li>
 * @method AiAnalysisTaskClassificationResult getClassificationTask() 获取视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationTask(AiAnalysisTaskClassificationResult $ClassificationTask) 设置视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskCoverResult getCoverTask() 获取视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverTask(AiAnalysisTaskCoverResult $CoverTask) 设置视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskTagResult getTagTask() 获取视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagTask(AiAnalysisTaskTagResult $TagTask) 设置视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskFrameTagResult getFrameTagTask() 获取视频内容分析智能按帧标签任务的查询结果，当任务类型为 FrameTag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameTagTask(AiAnalysisTaskFrameTagResult $FrameTagTask) 设置视频内容分析智能按帧标签任务的查询结果，当任务类型为 FrameTag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskHighlightResult getHighlightTask() 获取视频内容分析集锦任务的查询结果，当任务类型为 Highlight时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighlightTask(AiAnalysisTaskHighlightResult $HighlightTask) 设置视频内容分析集锦任务的查询结果，当任务类型为 Highlight时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskDelLogoResult getDeLogoTask() 获取视频内容分析智能擦除任务的查询结果，当任务类型为 DeLogo 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeLogoTask(AiAnalysisTaskDelLogoResult $DeLogoTask) 设置视频内容分析智能擦除任务的查询结果，当任务类型为 DeLogo 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskSegmentResult getSegmentTask() 获取视频内容分析拆条任务的查询结果，当任务类型为 SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentTask(AiAnalysisTaskSegmentResult $SegmentTask) 设置视频内容分析拆条任务的查询结果，当任务类型为 SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskHeadTailResult getHeadTailTask() 获取视频内容分析片头片尾任务的查询结果，当任务类型为 HeadTailRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadTailTask(AiAnalysisTaskHeadTailResult $HeadTailTask) 设置视频内容分析片头片尾任务的查询结果，当任务类型为 HeadTailRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskDescriptionResult getDescriptionTask() 获取视频内容分析摘要任务的查询结果，当任务类型为 Description 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptionTask(AiAnalysisTaskDescriptionResult $DescriptionTask) 设置视频内容分析摘要任务的查询结果，当任务类型为 Description 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskHorizontalToVerticalResult getHorizontalToVerticalTask() 获取视频内容分析横转竖任务的查询结果，当任务类型为 HorizontalToVertical 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorizontalToVerticalTask(AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask) 设置视频内容分析横转竖任务的查询结果，当任务类型为 HorizontalToVertical 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskDubbingResult getDubbingTask() 获取视频内容分析译制任务的查询结果，当任务类型为 Dubbing 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDubbingTask(AiAnalysisTaskDubbingResult $DubbingTask) 设置视频内容分析译制任务的查询结果，当任务类型为 Dubbing 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskVideoRemakeResult getVideoRemakeTask() 获取视频内容分析去重任务的查询结果，当任务类型为 VideoRemake 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoRemakeTask(AiAnalysisTaskVideoRemakeResult $VideoRemakeTask) 设置视频内容分析去重任务的查询结果，当任务类型为 VideoRemake 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisResult extends AbstractModel
{
    /**
     * @var string 任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
<li>Highlight：智能精彩集锦</li>
<li>DeLogo：智能擦除</li>
<li>Description：大模型摘要</li>
<li>Dubbing：智能译制</li>
<li>VideoRemake: 视频去重</li>
     */
    public $Type;

    /**
     * @var AiAnalysisTaskClassificationResult 视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationTask;

    /**
     * @var AiAnalysisTaskCoverResult 视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverTask;

    /**
     * @var AiAnalysisTaskTagResult 视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagTask;

    /**
     * @var AiAnalysisTaskFrameTagResult 视频内容分析智能按帧标签任务的查询结果，当任务类型为 FrameTag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameTagTask;

    /**
     * @var AiAnalysisTaskHighlightResult 视频内容分析集锦任务的查询结果，当任务类型为 Highlight时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighlightTask;

    /**
     * @var AiAnalysisTaskDelLogoResult 视频内容分析智能擦除任务的查询结果，当任务类型为 DeLogo 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeLogoTask;

    /**
     * @var AiAnalysisTaskSegmentResult 视频内容分析拆条任务的查询结果，当任务类型为 SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentTask;

    /**
     * @var AiAnalysisTaskHeadTailResult 视频内容分析片头片尾任务的查询结果，当任务类型为 HeadTailRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadTailTask;

    /**
     * @var AiAnalysisTaskDescriptionResult 视频内容分析摘要任务的查询结果，当任务类型为 Description 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptionTask;

    /**
     * @var AiAnalysisTaskHorizontalToVerticalResult 视频内容分析横转竖任务的查询结果，当任务类型为 HorizontalToVertical 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorizontalToVerticalTask;

    /**
     * @var AiAnalysisTaskDubbingResult 视频内容分析译制任务的查询结果，当任务类型为 Dubbing 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DubbingTask;

    /**
     * @var AiAnalysisTaskVideoRemakeResult 视频内容分析去重任务的查询结果，当任务类型为 VideoRemake 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoRemakeTask;

    /**
     * @param string $Type 任务的类型，可以取的值有：
<li>Classification：智能分类</li>
<li>Cover：智能封面</li>
<li>Tag：智能标签</li>
<li>FrameTag：智能按帧标签</li>
<li>Highlight：智能精彩集锦</li>
<li>DeLogo：智能擦除</li>
<li>Description：大模型摘要</li>
<li>Dubbing：智能译制</li>
<li>VideoRemake: 视频去重</li>
     * @param AiAnalysisTaskClassificationResult $ClassificationTask 视频内容分析智能分类任务的查询结果，当任务类型为 Classification 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskCoverResult $CoverTask 视频内容分析智能封面任务的查询结果，当任务类型为 Cover 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskTagResult $TagTask 视频内容分析智能标签任务的查询结果，当任务类型为 Tag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskFrameTagResult $FrameTagTask 视频内容分析智能按帧标签任务的查询结果，当任务类型为 FrameTag 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskHighlightResult $HighlightTask 视频内容分析集锦任务的查询结果，当任务类型为 Highlight时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskDelLogoResult $DeLogoTask 视频内容分析智能擦除任务的查询结果，当任务类型为 DeLogo 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskSegmentResult $SegmentTask 视频内容分析拆条任务的查询结果，当任务类型为 SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskHeadTailResult $HeadTailTask 视频内容分析片头片尾任务的查询结果，当任务类型为 HeadTailRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskDescriptionResult $DescriptionTask 视频内容分析摘要任务的查询结果，当任务类型为 Description 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskHorizontalToVerticalResult $HorizontalToVerticalTask 视频内容分析横转竖任务的查询结果，当任务类型为 HorizontalToVertical 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskDubbingResult $DubbingTask 视频内容分析译制任务的查询结果，当任务类型为 Dubbing 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskVideoRemakeResult $VideoRemakeTask 视频内容分析去重任务的查询结果，当任务类型为 VideoRemake 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClassificationTask",$param) and $param["ClassificationTask"] !== null) {
            $this->ClassificationTask = new AiAnalysisTaskClassificationResult();
            $this->ClassificationTask->deserialize($param["ClassificationTask"]);
        }

        if (array_key_exists("CoverTask",$param) and $param["CoverTask"] !== null) {
            $this->CoverTask = new AiAnalysisTaskCoverResult();
            $this->CoverTask->deserialize($param["CoverTask"]);
        }

        if (array_key_exists("TagTask",$param) and $param["TagTask"] !== null) {
            $this->TagTask = new AiAnalysisTaskTagResult();
            $this->TagTask->deserialize($param["TagTask"]);
        }

        if (array_key_exists("FrameTagTask",$param) and $param["FrameTagTask"] !== null) {
            $this->FrameTagTask = new AiAnalysisTaskFrameTagResult();
            $this->FrameTagTask->deserialize($param["FrameTagTask"]);
        }

        if (array_key_exists("HighlightTask",$param) and $param["HighlightTask"] !== null) {
            $this->HighlightTask = new AiAnalysisTaskHighlightResult();
            $this->HighlightTask->deserialize($param["HighlightTask"]);
        }

        if (array_key_exists("DeLogoTask",$param) and $param["DeLogoTask"] !== null) {
            $this->DeLogoTask = new AiAnalysisTaskDelLogoResult();
            $this->DeLogoTask->deserialize($param["DeLogoTask"]);
        }

        if (array_key_exists("SegmentTask",$param) and $param["SegmentTask"] !== null) {
            $this->SegmentTask = new AiAnalysisTaskSegmentResult();
            $this->SegmentTask->deserialize($param["SegmentTask"]);
        }

        if (array_key_exists("HeadTailTask",$param) and $param["HeadTailTask"] !== null) {
            $this->HeadTailTask = new AiAnalysisTaskHeadTailResult();
            $this->HeadTailTask->deserialize($param["HeadTailTask"]);
        }

        if (array_key_exists("DescriptionTask",$param) and $param["DescriptionTask"] !== null) {
            $this->DescriptionTask = new AiAnalysisTaskDescriptionResult();
            $this->DescriptionTask->deserialize($param["DescriptionTask"]);
        }

        if (array_key_exists("HorizontalToVerticalTask",$param) and $param["HorizontalToVerticalTask"] !== null) {
            $this->HorizontalToVerticalTask = new AiAnalysisTaskHorizontalToVerticalResult();
            $this->HorizontalToVerticalTask->deserialize($param["HorizontalToVerticalTask"]);
        }

        if (array_key_exists("DubbingTask",$param) and $param["DubbingTask"] !== null) {
            $this->DubbingTask = new AiAnalysisTaskDubbingResult();
            $this->DubbingTask->deserialize($param["DubbingTask"]);
        }

        if (array_key_exists("VideoRemakeTask",$param) and $param["VideoRemakeTask"] !== null) {
            $this->VideoRemakeTask = new AiAnalysisTaskVideoRemakeResult();
            $this->VideoRemakeTask->deserialize($param["VideoRemakeTask"]);
        }
    }
}
