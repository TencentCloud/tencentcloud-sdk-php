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
 * 直播流 AI 分析结果
 *
 * @method string getType() 获取结果的类型，取值范围：
<li>SegmentRecognition：拆条。</li>
<li>Highlight ：集锦。</li>
<li> Description：摘要。</li>
 * @method void setType(string $Type) 设置结果的类型，取值范围：
<li>SegmentRecognition：拆条。</li>
<li>Highlight ：集锦。</li>
<li> Description：摘要。</li>
 * @method array getSegmentResultSet() 获取拆条结果，当 Type 为
SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentResultSet(array $SegmentResultSet) 设置拆条结果，当 Type 为
SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHighlightResultSet() 获取集锦结果，当Type 为 Highlight 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighlightResultSet(array $HighlightResultSet) 设置集锦结果，当Type 为 Highlight 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveAiAnalysisDescriptionItem getDescriptionResult() 获取摘要结果，当Type 为 Description 时有效。
 * @method void setDescriptionResult(LiveAiAnalysisDescriptionItem $DescriptionResult) 设置摘要结果，当Type 为 Description 时有效。
 */
class LiveStreamAiAnalysisResultItem extends AbstractModel
{
    /**
     * @var string 结果的类型，取值范围：
<li>SegmentRecognition：拆条。</li>
<li>Highlight ：集锦。</li>
<li> Description：摘要。</li>
     */
    public $Type;

    /**
     * @var array 拆条结果，当 Type 为
SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentResultSet;

    /**
     * @var array 集锦结果，当Type 为 Highlight 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighlightResultSet;

    /**
     * @var LiveAiAnalysisDescriptionItem 摘要结果，当Type 为 Description 时有效。
     */
    public $DescriptionResult;

    /**
     * @param string $Type 结果的类型，取值范围：
<li>SegmentRecognition：拆条。</li>
<li>Highlight ：集锦。</li>
<li> Description：摘要。</li>
     * @param array $SegmentResultSet 拆条结果，当 Type 为
SegmentRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HighlightResultSet 集锦结果，当Type 为 Highlight 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveAiAnalysisDescriptionItem $DescriptionResult 摘要结果，当Type 为 Description 时有效。
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

        if (array_key_exists("SegmentResultSet",$param) and $param["SegmentResultSet"] !== null) {
            $this->SegmentResultSet = [];
            foreach ($param["SegmentResultSet"] as $key => $value){
                $obj = new SegmentRecognitionItem();
                $obj->deserialize($value);
                array_push($this->SegmentResultSet, $obj);
            }
        }

        if (array_key_exists("HighlightResultSet",$param) and $param["HighlightResultSet"] !== null) {
            $this->HighlightResultSet = [];
            foreach ($param["HighlightResultSet"] as $key => $value){
                $obj = new MediaAiAnalysisHighlightItem();
                $obj->deserialize($value);
                array_push($this->HighlightResultSet, $obj);
            }
        }

        if (array_key_exists("DescriptionResult",$param) and $param["DescriptionResult"] !== null) {
            $this->DescriptionResult = new LiveAiAnalysisDescriptionItem();
            $this->DescriptionResult->deserialize($param["DescriptionResult"]);
        }
    }
}
