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
 * 翻译片段。
 *
 * @method float getConfidence() 获取<p>识别片段置信度。取值：0~100。</p>
 * @method void setConfidence(float $Confidence) 设置<p>识别片段置信度。取值：0~100。</p>
 * @method float getStartTimeOffset() 获取<p>识别片段起始的偏移时间，单位：秒。</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置<p>识别片段起始的偏移时间，单位：秒。</p>
 * @method float getEndTimeOffset() 获取<p>识别片段终止的偏移时间，单位：秒。</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置<p>识别片段终止的偏移时间，单位：秒。</p>
 * @method string getText() 获取<p>识别文本。</p>
 * @method void setText(string $Text) 设置<p>识别文本。</p>
 * @method string getTrans() 获取<p>翻译文本。</p>
 * @method void setTrans(string $Trans) 设置<p>翻译文本。</p>
 * @method array getWordlist() 获取<p>字词时间戳信息。</p>
 * @method void setWordlist(array $Wordlist) 设置<p>字词时间戳信息。</p>
 */
class AiRecognitionTaskTransTextSegmentItem extends AbstractModel
{
    /**
     * @var float <p>识别片段置信度。取值：0~100。</p>
     */
    public $Confidence;

    /**
     * @var float <p>识别片段起始的偏移时间，单位：秒。</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>识别片段终止的偏移时间，单位：秒。</p>
     */
    public $EndTimeOffset;

    /**
     * @var string <p>识别文本。</p>
     */
    public $Text;

    /**
     * @var string <p>翻译文本。</p>
     */
    public $Trans;

    /**
     * @var array <p>字词时间戳信息。</p>
     */
    public $Wordlist;

    /**
     * @param float $Confidence <p>识别片段置信度。取值：0~100。</p>
     * @param float $StartTimeOffset <p>识别片段起始的偏移时间，单位：秒。</p>
     * @param float $EndTimeOffset <p>识别片段终止的偏移时间，单位：秒。</p>
     * @param string $Text <p>识别文本。</p>
     * @param string $Trans <p>翻译文本。</p>
     * @param array $Wordlist <p>字词时间戳信息。</p>
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

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Trans",$param) and $param["Trans"] !== null) {
            $this->Trans = $param["Trans"];
        }

        if (array_key_exists("Wordlist",$param) and $param["Wordlist"] !== null) {
            $this->Wordlist = [];
            foreach ($param["Wordlist"] as $key => $value){
                $obj = new WordResult();
                $obj->deserialize($value);
                array_push($this->Wordlist, $obj);
            }
        }
    }
}
