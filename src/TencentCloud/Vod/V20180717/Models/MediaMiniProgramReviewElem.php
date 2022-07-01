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
 * 小程序音视频审核概要元信息
 *
 * @method string getType() 获取音视频审核类型。 
<li>Porn：画面涉及令人反感的信息，</li>
<li>Porn.Ocr：文字涉及令人反感的信息，</li>
<li>Porn.Asr：声音涉及令人反感的信息，</li>
<li>Terrorism：画面涉及令人不安全的信息，</li>
<li>Political：画面涉及令人不适宜的信息，</li>
<li>Political.Ocr：文字涉及令人不适宜的信息，</li>
<li>Political.Asr：声音涉及令人不适宜的信息。</li>
 * @method void setType(string $Type) 设置音视频审核类型。 
<li>Porn：画面涉及令人反感的信息，</li>
<li>Porn.Ocr：文字涉及令人反感的信息，</li>
<li>Porn.Asr：声音涉及令人反感的信息，</li>
<li>Terrorism：画面涉及令人不安全的信息，</li>
<li>Political：画面涉及令人不适宜的信息，</li>
<li>Political.Ocr：文字涉及令人不适宜的信息，</li>
<li>Political.Asr：声音涉及令人不适宜的信息。</li>
 * @method string getSuggestion() 获取音视频审核意见。
<li>pass：确认正常，</li>
<li>block：确认违规，</li>
<li>review：疑似违规。</li>
 * @method void setSuggestion(string $Suggestion) 设置音视频审核意见。
<li>pass：确认正常，</li>
<li>block：确认违规，</li>
<li>review：疑似违规。</li>
 * @method float getConfidence() 获取音视频审核结果置信度。取值 0~100。
 * @method void setConfidence(float $Confidence) 设置音视频审核结果置信度。取值 0~100。
 */
class MediaMiniProgramReviewElem extends AbstractModel
{
    /**
     * @var string 音视频审核类型。 
<li>Porn：画面涉及令人反感的信息，</li>
<li>Porn.Ocr：文字涉及令人反感的信息，</li>
<li>Porn.Asr：声音涉及令人反感的信息，</li>
<li>Terrorism：画面涉及令人不安全的信息，</li>
<li>Political：画面涉及令人不适宜的信息，</li>
<li>Political.Ocr：文字涉及令人不适宜的信息，</li>
<li>Political.Asr：声音涉及令人不适宜的信息。</li>
     */
    public $Type;

    /**
     * @var string 音视频审核意见。
<li>pass：确认正常，</li>
<li>block：确认违规，</li>
<li>review：疑似违规。</li>
     */
    public $Suggestion;

    /**
     * @var float 音视频审核结果置信度。取值 0~100。
     */
    public $Confidence;

    /**
     * @param string $Type 音视频审核类型。 
<li>Porn：画面涉及令人反感的信息，</li>
<li>Porn.Ocr：文字涉及令人反感的信息，</li>
<li>Porn.Asr：声音涉及令人反感的信息，</li>
<li>Terrorism：画面涉及令人不安全的信息，</li>
<li>Political：画面涉及令人不适宜的信息，</li>
<li>Political.Ocr：文字涉及令人不适宜的信息，</li>
<li>Political.Asr：声音涉及令人不适宜的信息。</li>
     * @param string $Suggestion 音视频审核意见。
<li>pass：确认正常，</li>
<li>block：确认违规，</li>
<li>review：疑似违规。</li>
     * @param float $Confidence 音视频审核结果置信度。取值 0~100。
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

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
