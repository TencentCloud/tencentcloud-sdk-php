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
 * 翻译片段。
 *
 * @method float getConfidence() 获取识别片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置识别片段置信度。取值：0~100。
 * @method float getStartTimeOffset() 获取识别片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置识别片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取识别片段终止的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置识别片段终止的偏移时间，单位：秒。
 * @method string getText() 获取识别文本。
 * @method void setText(string $Text) 设置识别文本。
 * @method string getTrans() 获取翻译文本。
 * @method void setTrans(string $Trans) 设置翻译文本。
 * @method array getWordlist() 获取字词时间戳信息。
 * @method void setWordlist(array $Wordlist) 设置字词时间戳信息。
 */
class AiRecognitionTaskTransTextSegmentItem extends AbstractModel
{
    /**
     * @var float 识别片段置信度。取值：0~100。
     */
    public $Confidence;

    /**
     * @var float 识别片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 识别片段终止的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @var string 识别文本。
     */
    public $Text;

    /**
     * @var string 翻译文本。
     */
    public $Trans;

    /**
     * @var array 字词时间戳信息。
     */
    public $Wordlist;

    /**
     * @param float $Confidence 识别片段置信度。取值：0~100。
     * @param float $StartTimeOffset 识别片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 识别片段终止的偏移时间，单位：秒。
     * @param string $Text 识别文本。
     * @param string $Trans 翻译文本。
     * @param array $Wordlist 字词时间戳信息。
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
