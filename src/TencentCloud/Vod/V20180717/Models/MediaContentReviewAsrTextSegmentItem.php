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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音视频审核 Asr 文字的嫌疑片段
 *
 * @method float getStartTimeOffset() 获取嫌疑片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置嫌疑片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取嫌疑片段结束的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置嫌疑片段结束的偏移时间，单位：秒。
 * @method float getConfidence() 获取嫌疑片段置信度。
 * @method void setConfidence(float $Confidence) 设置嫌疑片段置信度。
 * @method string getSuggestion() 获取嫌疑片段音视频审核的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置嫌疑片段音视频审核的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method array getKeywordSet() 获取嫌疑关键词列表。
 * @method void setKeywordSet(array $KeywordSet) 设置嫌疑关键词列表。
 */
class MediaContentReviewAsrTextSegmentItem extends AbstractModel
{
    /**
     * @var float 嫌疑片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 嫌疑片段结束的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @var float 嫌疑片段置信度。
     */
    public $Confidence;

    /**
     * @var string 嫌疑片段音视频审核的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var array 嫌疑关键词列表。
     */
    public $KeywordSet;

    /**
     * @param float $StartTimeOffset 嫌疑片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 嫌疑片段结束的偏移时间，单位：秒。
     * @param float $Confidence 嫌疑片段置信度。
     * @param string $Suggestion 嫌疑片段音视频审核的结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     * @param array $KeywordSet 嫌疑关键词列表。
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }
    }
}
