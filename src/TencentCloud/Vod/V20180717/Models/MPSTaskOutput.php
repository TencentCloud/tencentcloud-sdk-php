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
 * MPS 子任务输出返回结果。
 *
 * @method array getOutputFiles() 获取任务返回结果中的文件类型结果。如智能擦除中，擦除后的视频文件将被存入媒资，并在此字段中给出 FileId；基于画面提取的字幕文件 Url 将在此字段中给出。
 * @method void setOutputFiles(array $OutputFiles) 设置任务返回结果中的文件类型结果。如智能擦除中，擦除后的视频文件将被存入媒资，并在此字段中给出 FileId；基于画面提取的字幕文件 Url 将在此字段中给出。
 * @method string getOutputText() 获取任务返回的结果，该字段对应 MPS 任务返回中的Output结果，以 JSON 格式返回
不同MPS任务输出结果结构不同，具体返回内容参考MPS任务输出结构体
[智能分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskClassificationOutput)
[智能封面结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskCoverOutput)
[智能标签结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskTagOutput)
[智能按帧标签分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskFrameTagOutput)
[智能高光结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHighlightOutput)
[智能拆条结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskSegmentOutput)
[智能片头片尾结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHeadTailOutput)
[智能摘要结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDescriptionOutput)
[智能横转竖结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHorizontalToVerticalOutput)
[智能译制结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDubbingOutput)
[智能视频理解结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskVideoComprehensionOutput)
[智能字幕语音全文识别结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskAsrFullTextResultOutput)
[智能字幕翻译结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTransTextResultOutput)
[智能字幕纯字幕文件翻译结果](https://cloud.tencent.com/document/product/862/37615#PureSubtitleTransResultOutput)
[智能字幕文字提取字幕结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTextResultOutput)


 * @method void setOutputText(string $OutputText) 设置任务返回的结果，该字段对应 MPS 任务返回中的Output结果，以 JSON 格式返回
不同MPS任务输出结果结构不同，具体返回内容参考MPS任务输出结构体
[智能分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskClassificationOutput)
[智能封面结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskCoverOutput)
[智能标签结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskTagOutput)
[智能按帧标签分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskFrameTagOutput)
[智能高光结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHighlightOutput)
[智能拆条结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskSegmentOutput)
[智能片头片尾结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHeadTailOutput)
[智能摘要结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDescriptionOutput)
[智能横转竖结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHorizontalToVerticalOutput)
[智能译制结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDubbingOutput)
[智能视频理解结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskVideoComprehensionOutput)
[智能字幕语音全文识别结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskAsrFullTextResultOutput)
[智能字幕翻译结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTransTextResultOutput)
[智能字幕纯字幕文件翻译结果](https://cloud.tencent.com/document/product/862/37615#PureSubtitleTransResultOutput)
[智能字幕文字提取字幕结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTextResultOutput)
 */
class MPSTaskOutput extends AbstractModel
{
    /**
     * @var array 任务返回结果中的文件类型结果。如智能擦除中，擦除后的视频文件将被存入媒资，并在此字段中给出 FileId；基于画面提取的字幕文件 Url 将在此字段中给出。
     */
    public $OutputFiles;

    /**
     * @var string 任务返回的结果，该字段对应 MPS 任务返回中的Output结果，以 JSON 格式返回
不同MPS任务输出结果结构不同，具体返回内容参考MPS任务输出结构体
[智能分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskClassificationOutput)
[智能封面结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskCoverOutput)
[智能标签结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskTagOutput)
[智能按帧标签分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskFrameTagOutput)
[智能高光结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHighlightOutput)
[智能拆条结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskSegmentOutput)
[智能片头片尾结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHeadTailOutput)
[智能摘要结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDescriptionOutput)
[智能横转竖结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHorizontalToVerticalOutput)
[智能译制结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDubbingOutput)
[智能视频理解结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskVideoComprehensionOutput)
[智能字幕语音全文识别结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskAsrFullTextResultOutput)
[智能字幕翻译结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTransTextResultOutput)
[智能字幕纯字幕文件翻译结果](https://cloud.tencent.com/document/product/862/37615#PureSubtitleTransResultOutput)
[智能字幕文字提取字幕结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTextResultOutput)


     */
    public $OutputText;

    /**
     * @param array $OutputFiles 任务返回结果中的文件类型结果。如智能擦除中，擦除后的视频文件将被存入媒资，并在此字段中给出 FileId；基于画面提取的字幕文件 Url 将在此字段中给出。
     * @param string $OutputText 任务返回的结果，该字段对应 MPS 任务返回中的Output结果，以 JSON 格式返回
不同MPS任务输出结果结构不同，具体返回内容参考MPS任务输出结构体
[智能分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskClassificationOutput)
[智能封面结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskCoverOutput)
[智能标签结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskTagOutput)
[智能按帧标签分类结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskFrameTagOutput)
[智能高光结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHighlightOutput)
[智能拆条结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskSegmentOutput)
[智能片头片尾结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHeadTailOutput)
[智能摘要结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDescriptionOutput)
[智能横转竖结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskHorizontalToVerticalOutput)
[智能译制结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskDubbingOutput)
[智能视频理解结果](https://cloud.tencent.com/document/product/862/37615#AiAnalysisTaskVideoComprehensionOutput)
[智能字幕语音全文识别结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskAsrFullTextResultOutput)
[智能字幕翻译结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTransTextResultOutput)
[智能字幕纯字幕文件翻译结果](https://cloud.tencent.com/document/product/862/37615#PureSubtitleTransResultOutput)
[智能字幕文字提取字幕结果](https://cloud.tencent.com/document/product/862/37615#SmartSubtitleTaskTextResultOutput)
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
        if (array_key_exists("OutputFiles",$param) and $param["OutputFiles"] !== null) {
            $this->OutputFiles = [];
            foreach ($param["OutputFiles"] as $key => $value){
                $obj = new MPSOutputFile();
                $obj->deserialize($value);
                array_push($this->OutputFiles, $obj);
            }
        }

        if (array_key_exists("OutputText",$param) and $param["OutputText"] !== null) {
            $this->OutputText = $param["OutputText"];
        }
    }
}
