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
 * 直播 AI 内容审核声音鉴黄结果
 *
 * @method float getStartPtsTime() 获取嫌疑片段起始的 PTS 时间，单位：秒。
 * @method void setStartPtsTime(float $StartPtsTime) 设置嫌疑片段起始的 PTS 时间，单位：秒。
 * @method float getEndPtsTime() 获取嫌疑片段结束的 PTS 时间，单位：秒。
 * @method void setEndPtsTime(float $EndPtsTime) 设置嫌疑片段结束的 PTS 时间，单位：秒。
 * @method float getConfidence() 获取嫌疑片段涉黄分数。
 * @method void setConfidence(float $Confidence) 设置嫌疑片段涉黄分数。
 * @method string getSuggestion() 获取嫌疑片段鉴黄结果建议，取值范围：
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) 设置嫌疑片段鉴黄结果建议，取值范围：
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() 获取视频鉴黄结果标签，取值范围：
<li>sexual_moan：呻吟。</li>
 * @method void setLabel(string $Label) 设置视频鉴黄结果标签，取值范围：
<li>sexual_moan：呻吟。</li>
 */
class LiveStreamAiReviewVoicePornResult extends AbstractModel
{
    /**
     * @var float 嫌疑片段起始的 PTS 时间，单位：秒。
     */
    public $StartPtsTime;

    /**
     * @var float 嫌疑片段结束的 PTS 时间，单位：秒。
     */
    public $EndPtsTime;

    /**
     * @var float 嫌疑片段涉黄分数。
     */
    public $Confidence;

    /**
     * @var string 嫌疑片段鉴黄结果建议，取值范围：
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string 视频鉴黄结果标签，取值范围：
<li>sexual_moan：呻吟。</li>
     */
    public $Label;

    /**
     * @param float $StartPtsTime 嫌疑片段起始的 PTS 时间，单位：秒。
     * @param float $EndPtsTime 嫌疑片段结束的 PTS 时间，单位：秒。
     * @param float $Confidence 嫌疑片段涉黄分数。
     * @param string $Suggestion 嫌疑片段鉴黄结果建议，取值范围：
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label 视频鉴黄结果标签，取值范围：
<li>sexual_moan：呻吟。</li>
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
        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
