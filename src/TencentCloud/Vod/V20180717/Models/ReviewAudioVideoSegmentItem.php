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
 * 音视频审核片段。
 *
 * @method float getStartTimeOffset() 获取嫌疑片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置嫌疑片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取嫌疑片段结束的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置嫌疑片段结束的偏移时间，单位：秒。
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
<li>Terrorism：暴恐；</li>
<li>Political：令人不适宜的信息。</li>
 * @method void setLabel(string $Label) 设置嫌疑片段最可能的违规的标签，取值范围：
<li>Porn：色情；</li>
<li>Terrorism：暴恐；</li>
<li>Political：令人不适宜的信息。</li>
 * @method string getSubLabel() 获取当 Form 为 Image 或 Voice 时有效，表示当前标签（Label）下的二级标签。
当 Form 为 Image 且 Label 为 Porn 时，取值范围：
<li>porn：色情；</li>
<li>vulgar：低俗。</li>

当 Form 为 Image 且 Label 为 Terrorism 时，取值范围：
<li>guns：武器枪支；</li>
<li>bloody：血腥画面；</li>
<li>banners：暴恐旗帜；</li>
<li> scenario：暴恐画面；</li>
<li>explosion：爆炸火灾。</li>

当 Form 为 Image 且 Label 为 Political 时，取值范围：
<li>violation_photo：违规图标；</li>
<li>nation_politician：国家领导人；</li>
<li>province_politician：省部级领导人；</li>
<li>county_politician：市/县级领导人；</li>
<li>sensitive_politician：敏感相关人物；</li>
<li>foreign_politician：国外政治人物；</li>
<li>sensitive_entertainment：敏感娱乐明星；</li>
<li>sensitive_military：敏感军事人物。</li>

当 Form 为 Voice 且 Label 为 Porn 时，取值范围：
<li>moan：娇喘。</li>
 * @method void setSubLabel(string $SubLabel) 设置当 Form 为 Image 或 Voice 时有效，表示当前标签（Label）下的二级标签。
当 Form 为 Image 且 Label 为 Porn 时，取值范围：
<li>porn：色情；</li>
<li>vulgar：低俗。</li>

当 Form 为 Image 且 Label 为 Terrorism 时，取值范围：
<li>guns：武器枪支；</li>
<li>bloody：血腥画面；</li>
<li>banners：暴恐旗帜；</li>
<li> scenario：暴恐画面；</li>
<li>explosion：爆炸火灾。</li>

当 Form 为 Image 且 Label 为 Political 时，取值范围：
<li>violation_photo：违规图标；</li>
<li>nation_politician：国家领导人；</li>
<li>province_politician：省部级领导人；</li>
<li>county_politician：市/县级领导人；</li>
<li>sensitive_politician：敏感相关人物；</li>
<li>foreign_politician：国外政治人物；</li>
<li>sensitive_entertainment：敏感娱乐明星；</li>
<li>sensitive_military：敏感军事人物。</li>

当 Form 为 Voice 且 Label 为 Porn 时，取值范围：
<li>moan：娇喘。</li>
 * @method string getForm() 获取嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字；</li>
<li>ASR：语音中的文字；</li>
<li>Voice：声音。</li>
 * @method void setForm(string $Form) 设置嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字；</li>
<li>ASR：语音中的文字；</li>
<li>Voice：声音。</li>
 * @method array getAreaCoordSet() 获取当 Form 为 Image 或 OCR 时有效，表示嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置当 Form 为 Image 或 OCR 时有效，表示嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method string getText() 获取当 Form 为 OCR 或 ASR 时有效，表示识别出来的 OCR 或 ASR 文本内容。
 * @method void setText(string $Text) 设置当 Form 为 OCR 或 ASR 时有效，表示识别出来的 OCR 或 ASR 文本内容。
 * @method array getKeywordSet() 获取当 Form 为 OCR 或 ASR 时有效，表示嫌疑片段命中的违规关键词列表。
 * @method void setKeywordSet(array $KeywordSet) 设置当 Form 为 OCR 或 ASR 时有效，表示嫌疑片段命中的违规关键词列表。
 */
class ReviewAudioVideoSegmentItem extends AbstractModel
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
<li>Terrorism：暴恐；</li>
<li>Political：令人不适宜的信息。</li>
     */
    public $Label;

    /**
     * @var string 当 Form 为 Image 或 Voice 时有效，表示当前标签（Label）下的二级标签。
当 Form 为 Image 且 Label 为 Porn 时，取值范围：
<li>porn：色情；</li>
<li>vulgar：低俗。</li>

当 Form 为 Image 且 Label 为 Terrorism 时，取值范围：
<li>guns：武器枪支；</li>
<li>bloody：血腥画面；</li>
<li>banners：暴恐旗帜；</li>
<li> scenario：暴恐画面；</li>
<li>explosion：爆炸火灾。</li>

当 Form 为 Image 且 Label 为 Political 时，取值范围：
<li>violation_photo：违规图标；</li>
<li>nation_politician：国家领导人；</li>
<li>province_politician：省部级领导人；</li>
<li>county_politician：市/县级领导人；</li>
<li>sensitive_politician：敏感相关人物；</li>
<li>foreign_politician：国外政治人物；</li>
<li>sensitive_entertainment：敏感娱乐明星；</li>
<li>sensitive_military：敏感军事人物。</li>

当 Form 为 Voice 且 Label 为 Porn 时，取值范围：
<li>moan：娇喘。</li>
     */
    public $SubLabel;

    /**
     * @var string 嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字；</li>
<li>ASR：语音中的文字；</li>
<li>Voice：声音。</li>
     */
    public $Form;

    /**
     * @var array 当 Form 为 Image 或 OCR 时有效，表示嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     */
    public $AreaCoordSet;

    /**
     * @var string 当 Form 为 OCR 或 ASR 时有效，表示识别出来的 OCR 或 ASR 文本内容。
     */
    public $Text;

    /**
     * @var array 当 Form 为 OCR 或 ASR 时有效，表示嫌疑片段命中的违规关键词列表。
     */
    public $KeywordSet;

    /**
     * @param float $StartTimeOffset 嫌疑片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 嫌疑片段结束的偏移时间，单位：秒。
     * @param float $Confidence 嫌疑片段涉及令人反感的信息的分数。
     * @param string $Suggestion 嫌疑片段鉴别涉及违规信息的结果建议，取值范围：
<li>review：疑似违规，建议复审；</li>
<li>block：确认违规，建议封禁。</li>
     * @param string $Label 嫌疑片段最可能的违规的标签，取值范围：
<li>Porn：色情；</li>
<li>Terrorism：暴恐；</li>
<li>Political：令人不适宜的信息。</li>
     * @param string $SubLabel 当 Form 为 Image 或 Voice 时有效，表示当前标签（Label）下的二级标签。
当 Form 为 Image 且 Label 为 Porn 时，取值范围：
<li>porn：色情；</li>
<li>vulgar：低俗。</li>

当 Form 为 Image 且 Label 为 Terrorism 时，取值范围：
<li>guns：武器枪支；</li>
<li>bloody：血腥画面；</li>
<li>banners：暴恐旗帜；</li>
<li> scenario：暴恐画面；</li>
<li>explosion：爆炸火灾。</li>

当 Form 为 Image 且 Label 为 Political 时，取值范围：
<li>violation_photo：违规图标；</li>
<li>nation_politician：国家领导人；</li>
<li>province_politician：省部级领导人；</li>
<li>county_politician：市/县级领导人；</li>
<li>sensitive_politician：敏感相关人物；</li>
<li>foreign_politician：国外政治人物；</li>
<li>sensitive_entertainment：敏感娱乐明星；</li>
<li>sensitive_military：敏感军事人物。</li>

当 Form 为 Voice 且 Label 为 Porn 时，取值范围：
<li>moan：娇喘。</li>
     * @param string $Form 嫌疑片段违禁的形式，取值范围：
<li>Image：画面上的人物或图标；</li>
<li>OCR：画面上的文字；</li>
<li>ASR：语音中的文字；</li>
<li>Voice：声音。</li>
     * @param array $AreaCoordSet 当 Form 为 Image 或 OCR 时有效，表示嫌疑人物、图标或文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     * @param string $Text 当 Form 为 OCR 或 ASR 时有效，表示识别出来的 OCR 或 ASR 文本内容。
     * @param array $KeywordSet 当 Form 为 OCR 或 ASR 时有效，表示嫌疑片段命中的违规关键词列表。
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
