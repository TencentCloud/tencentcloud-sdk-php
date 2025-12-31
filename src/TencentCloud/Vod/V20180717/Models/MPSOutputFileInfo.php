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
 * MPS输出文件信息
 *
 * @method string getFileType() 获取MPS输出文件类型，可取值：
<li>Video：任务生成的视频文件。</li>
<li>Cover：任务生成的封面文件。</li>
<li>Audio：任务生成的音频文件。</li>
<li>Output：任务生成的结果输出，文件对应 MPS 任务返回中的Output结果，以 JSON 格式生成文件。</li>

Output类型文件，不同MPS任务对应输出结果不同，具体返回内容参考MPS任务输出结构体，结构体经过JSON序列化后生成Output类型文件
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
 * @method void setFileType(string $FileType) 设置MPS输出文件类型，可取值：
<li>Video：任务生成的视频文件。</li>
<li>Cover：任务生成的封面文件。</li>
<li>Audio：任务生成的音频文件。</li>
<li>Output：任务生成的结果输出，文件对应 MPS 任务返回中的Output结果，以 JSON 格式生成文件。</li>

Output类型文件，不同MPS任务对应输出结果不同，具体返回内容参考MPS任务输出结构体，结构体经过JSON序列化后生成Output类型文件
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
 * @method string getUrl() 获取MPS输出文件的URL
 * @method void setUrl(string $Url) 设置MPS输出文件的URL
 */
class MPSOutputFileInfo extends AbstractModel
{
    /**
     * @var string MPS输出文件类型，可取值：
<li>Video：任务生成的视频文件。</li>
<li>Cover：任务生成的封面文件。</li>
<li>Audio：任务生成的音频文件。</li>
<li>Output：任务生成的结果输出，文件对应 MPS 任务返回中的Output结果，以 JSON 格式生成文件。</li>

Output类型文件，不同MPS任务对应输出结果不同，具体返回内容参考MPS任务输出结构体，结构体经过JSON序列化后生成Output类型文件
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
    public $FileType;

    /**
     * @var string MPS输出文件的URL
     */
    public $Url;

    /**
     * @param string $FileType MPS输出文件类型，可取值：
<li>Video：任务生成的视频文件。</li>
<li>Cover：任务生成的封面文件。</li>
<li>Audio：任务生成的音频文件。</li>
<li>Output：任务生成的结果输出，文件对应 MPS 任务返回中的Output结果，以 JSON 格式生成文件。</li>

Output类型文件，不同MPS任务对应输出结果不同，具体返回内容参考MPS任务输出结构体，结构体经过JSON序列化后生成Output类型文件
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
     * @param string $Url MPS输出文件的URL
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
