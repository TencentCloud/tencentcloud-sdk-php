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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MPS AI媒资任务项
 *
 * @method string getTaskType() 获取MPS智能处理任务类型，可取值：
<li>AiAnalysis.ClassificationTask：智能分类任务。</li>
<li>AiAnalysis.CoverTask：智能封面任务。</li>
<li>AiAnalysis.TagTask：智能标签任务。</li>
<li>AiAnalysis.FrameTagTask：智能按帧标签任务。</li>
<li>AiAnalysis.HighlightTask：智能高光任务。</li>
<li>AiAnalysis.SegmentTask：智能拆条任务。</li>
<li>AiAnalysis.HeadTailTask：智能片头片尾任务。</li>
<li>AiAnalysis.DescriptionTask：智能摘要任务。</li>
<li>AiAnalysis.HorizontalToVerticalTask：智能横转竖任务。</li>
<li>AiAnalysis.DubbingTask：智能译制任务。</li>
<li>AiAnalysis.VideoRemakeTask：智能去重任务。</li>
<li>AiAnalysis.VideoComprehensionTask：视频理解任务。</li>
<li>SmartSubtitle.AsrFullTextTask：智能语音全文识别任务。</li>
<li>SmartSubtitle.TransTextTask：	翻译结果。</li>
<li>SmartSubtitle.PureSubtitleTransTask：返回纯字幕文件翻译结果。</li>
<li>SmartSubtitle.OcrFullTextTask：智能文字提取字幕任务。</li>
 * @method void setTaskType(string $TaskType) 设置MPS智能处理任务类型，可取值：
<li>AiAnalysis.ClassificationTask：智能分类任务。</li>
<li>AiAnalysis.CoverTask：智能封面任务。</li>
<li>AiAnalysis.TagTask：智能标签任务。</li>
<li>AiAnalysis.FrameTagTask：智能按帧标签任务。</li>
<li>AiAnalysis.HighlightTask：智能高光任务。</li>
<li>AiAnalysis.SegmentTask：智能拆条任务。</li>
<li>AiAnalysis.HeadTailTask：智能片头片尾任务。</li>
<li>AiAnalysis.DescriptionTask：智能摘要任务。</li>
<li>AiAnalysis.HorizontalToVerticalTask：智能横转竖任务。</li>
<li>AiAnalysis.DubbingTask：智能译制任务。</li>
<li>AiAnalysis.VideoRemakeTask：智能去重任务。</li>
<li>AiAnalysis.VideoComprehensionTask：视频理解任务。</li>
<li>SmartSubtitle.AsrFullTextTask：智能语音全文识别任务。</li>
<li>SmartSubtitle.TransTextTask：	翻译结果。</li>
<li>SmartSubtitle.PureSubtitleTransTask：返回纯字幕文件翻译结果。</li>
<li>SmartSubtitle.OcrFullTextTask：智能文字提取字幕任务。</li>
 * @method array getAiMediaTasks() 获取MPS 智能处理任务结果集合
 * @method void setAiMediaTasks(array $AiMediaTasks) 设置MPS 智能处理任务结果集合
 */
class MPSAiMediaItem extends AbstractModel
{
    /**
     * @var string MPS智能处理任务类型，可取值：
<li>AiAnalysis.ClassificationTask：智能分类任务。</li>
<li>AiAnalysis.CoverTask：智能封面任务。</li>
<li>AiAnalysis.TagTask：智能标签任务。</li>
<li>AiAnalysis.FrameTagTask：智能按帧标签任务。</li>
<li>AiAnalysis.HighlightTask：智能高光任务。</li>
<li>AiAnalysis.SegmentTask：智能拆条任务。</li>
<li>AiAnalysis.HeadTailTask：智能片头片尾任务。</li>
<li>AiAnalysis.DescriptionTask：智能摘要任务。</li>
<li>AiAnalysis.HorizontalToVerticalTask：智能横转竖任务。</li>
<li>AiAnalysis.DubbingTask：智能译制任务。</li>
<li>AiAnalysis.VideoRemakeTask：智能去重任务。</li>
<li>AiAnalysis.VideoComprehensionTask：视频理解任务。</li>
<li>SmartSubtitle.AsrFullTextTask：智能语音全文识别任务。</li>
<li>SmartSubtitle.TransTextTask：	翻译结果。</li>
<li>SmartSubtitle.PureSubtitleTransTask：返回纯字幕文件翻译结果。</li>
<li>SmartSubtitle.OcrFullTextTask：智能文字提取字幕任务。</li>
     */
    public $TaskType;

    /**
     * @var array MPS 智能处理任务结果集合
     */
    public $AiMediaTasks;

    /**
     * @param string $TaskType MPS智能处理任务类型，可取值：
<li>AiAnalysis.ClassificationTask：智能分类任务。</li>
<li>AiAnalysis.CoverTask：智能封面任务。</li>
<li>AiAnalysis.TagTask：智能标签任务。</li>
<li>AiAnalysis.FrameTagTask：智能按帧标签任务。</li>
<li>AiAnalysis.HighlightTask：智能高光任务。</li>
<li>AiAnalysis.SegmentTask：智能拆条任务。</li>
<li>AiAnalysis.HeadTailTask：智能片头片尾任务。</li>
<li>AiAnalysis.DescriptionTask：智能摘要任务。</li>
<li>AiAnalysis.HorizontalToVerticalTask：智能横转竖任务。</li>
<li>AiAnalysis.DubbingTask：智能译制任务。</li>
<li>AiAnalysis.VideoRemakeTask：智能去重任务。</li>
<li>AiAnalysis.VideoComprehensionTask：视频理解任务。</li>
<li>SmartSubtitle.AsrFullTextTask：智能语音全文识别任务。</li>
<li>SmartSubtitle.TransTextTask：	翻译结果。</li>
<li>SmartSubtitle.PureSubtitleTransTask：返回纯字幕文件翻译结果。</li>
<li>SmartSubtitle.OcrFullTextTask：智能文字提取字幕任务。</li>
     * @param array $AiMediaTasks MPS 智能处理任务结果集合
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("AiMediaTasks",$param) and $param["AiMediaTasks"] !== null) {
            $this->AiMediaTasks = [];
            foreach ($param["AiMediaTasks"] as $key => $value){
                $obj = new MPSAiMediaTask();
                $obj->deserialize($value);
                array_push($this->AiMediaTasks, $obj);
            }
        }
    }
}
