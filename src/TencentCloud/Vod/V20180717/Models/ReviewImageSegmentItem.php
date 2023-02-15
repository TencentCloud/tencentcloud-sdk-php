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
 * 图片审核片段。
 *
 * @method float getConfidence() 获取嫌疑片段涉及令人反感的信息的分数。
 * @method void setConfidence(float $Confidence) 设置嫌疑片段涉及令人反感的信息的分数。
 * @method string getSuggestion() 获取嫌疑片段鉴别涉及违规信息的结果建议，取值范围：
<li>review：疑似违规，建议复审；</li>
<li>block：确认违规，建议封禁。</li>
 * @method void setSuggestion(string $Suggestion) 设置嫌疑片段鉴别涉及违规信息的结果建议，取值范围：
<li>review：疑似违规，建议复审；</li>
<li>block：确认违规，建议封禁。</li>
 * @method string getLabel() 获取嫌疑片段最可能的违规的标签，取值范围：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Ad：广告；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂。</li>
 * @method void setLabel(string $Label) 设置嫌疑片段最可能的违规的标签，取值范围：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Ad：广告；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂。</li>
 * @method string getSubLabel() 获取违规子标签。
 * @method void setSubLabel(string $SubLabel) 设置违规子标签。
 * @method string getForm() 获取嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字。</li>
 * @method void setForm(string $Form) 设置嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字。</li>
 * @method array getAreaCoordSet() 获取嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method string getText() 获取当 Form 为 OCR 时有效，表示识别出来的 OCR 文本内容。
 * @method void setText(string $Text) 设置当 Form 为 OCR 时有效，表示识别出来的 OCR 文本内容。
 * @method array getKeywordSet() 获取当 Form 为 OCR 时有效，表示嫌疑片段命中的违规关键词列表。
 * @method void setKeywordSet(array $KeywordSet) 设置当 Form 为 OCR 时有效，表示嫌疑片段命中的违规关键词列表。
 */
class ReviewImageSegmentItem extends AbstractModel
{
    /**
     * @var float 嫌疑片段涉及令人反感的信息的分数。
     */
    public $Confidence;

    /**
     * @var string 嫌疑片段鉴别涉及违规信息的结果建议，取值范围：
<li>review：疑似违规，建议复审；</li>
<li>block：确认违规，建议封禁。</li>
     */
    public $Suggestion;

    /**
     * @var string 嫌疑片段最可能的违规的标签，取值范围：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Ad：广告；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂。</li>
     */
    public $Label;

    /**
     * @var string 违规子标签。
     */
    public $SubLabel;

    /**
     * @var string 嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字。</li>
     */
    public $Form;

    /**
     * @var array 嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     */
    public $AreaCoordSet;

    /**
     * @var string 当 Form 为 OCR 时有效，表示识别出来的 OCR 文本内容。
     */
    public $Text;

    /**
     * @var array 当 Form 为 OCR 时有效，表示嫌疑片段命中的违规关键词列表。
     */
    public $KeywordSet;

    /**
     * @param float $Confidence 嫌疑片段涉及令人反感的信息的分数。
     * @param string $Suggestion 嫌疑片段鉴别涉及违规信息的结果建议，取值范围：
<li>review：疑似违规，建议复审；</li>
<li>block：确认违规，建议封禁。</li>
     * @param string $Label 嫌疑片段最可能的违规的标签，取值范围：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Ad：广告；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂。</li>
     * @param string $SubLabel 违规子标签。
     * @param string $Form 嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字。</li>
     * @param array $AreaCoordSet 嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     * @param string $Text 当 Form 为 OCR 时有效，表示识别出来的 OCR 文本内容。
     * @param array $KeywordSet 当 Form 为 OCR 时有效，表示嫌疑片段命中的违规关键词列表。
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Form",$param) and $param["Form"] !== null) {
            $this->Form = $param["Form"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }
    }
}
