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
 * Asr 文字敏感信息
 *
 * @method float getConfidence() 获取Asr 文字敏感评分，分值为0到100。
 * @method void setConfidence(float $Confidence) 设置Asr 文字敏感评分，分值为0到100。
 * @method string getSuggestion() 获取Asr 文字敏感结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置Asr 文字敏感结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
 * @method array getSegmentSet() 获取Asr 文字敏感嫌疑的视频片段列表。
 * @method void setSegmentSet(array $SegmentSet) 设置Asr 文字敏感嫌疑的视频片段列表。
 */
class AiReviewPoliticalAsrTaskOutput extends AbstractModel
{
    /**
     * @var float Asr 文字敏感评分，分值为0到100。
     */
    public $Confidence;

    /**
     * @var string Asr 文字敏感结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var array Asr 文字敏感嫌疑的视频片段列表。
     */
    public $SegmentSet;

    /**
     * @param float $Confidence Asr 文字敏感评分，分值为0到100。
     * @param string $Suggestion Asr 文字敏感结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
     * @param array $SegmentSet Asr 文字敏感嫌疑的视频片段列表。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewAsrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
