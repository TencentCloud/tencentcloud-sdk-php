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
 * @method float getConfidence() 获取Ocr 文字涉黄评分，分值为0到100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(float $Confidence) 设置Ocr 文字涉黄评分，分值为0到100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取Ocr 文字涉黄结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置Ocr 文字涉黄结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSegmentSet() 获取Ocr 文字有涉黄嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentSet(array $SegmentSet) 设置Ocr 文字有涉黄嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *Ocr 文字涉黄信息
 */
class AiReviewPornOcrTaskOutput extends AbstractModel
{
    /**
     * @var float Ocr 文字涉黄评分，分值为0到100。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var string Ocr 文字涉黄结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var array Ocr 文字有涉黄嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentSet;
    /**
     * @param float $Confidence Ocr 文字涉黄评分，分值为0到100。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion Ocr 文字涉黄结果建议，取值范围：
<li>pass。</li>
<li>review。</li>
<li>block。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SegmentSet Ocr 文字有涉黄嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
                $obj = new MediaContentReviewOcrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
