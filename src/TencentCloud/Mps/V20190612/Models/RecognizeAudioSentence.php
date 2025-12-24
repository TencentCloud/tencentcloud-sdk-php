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
 * 识别音频单句结果
 *
 * @method float getStart() 获取在音频中的起始时间，单位秒
 * @method void setStart(float $Start) 设置在音频中的起始时间，单位秒
 * @method float getEnd() 获取在音频中的截止时间，单位秒
 * @method void setEnd(float $End) 设置在音频中的截止时间，单位秒
 * @method string getText() 获取音频识别结果
 * @method void setText(string $Text) 设置音频识别结果
 * @method array getWordsInfo() 获取字词时间戳结果
 * @method void setWordsInfo(array $WordsInfo) 设置字词时间戳结果
 */
class RecognizeAudioSentence extends AbstractModel
{
    /**
     * @var float 在音频中的起始时间，单位秒
     */
    public $Start;

    /**
     * @var float 在音频中的截止时间，单位秒
     */
    public $End;

    /**
     * @var string 音频识别结果
     */
    public $Text;

    /**
     * @var array 字词时间戳结果
     */
    public $WordsInfo;

    /**
     * @param float $Start 在音频中的起始时间，单位秒
     * @param float $End 在音频中的截止时间，单位秒
     * @param string $Text 音频识别结果
     * @param array $WordsInfo 字词时间戳结果
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("WordsInfo",$param) and $param["WordsInfo"] !== null) {
            $this->WordsInfo = [];
            foreach ($param["WordsInfo"] as $key => $value){
                $obj = new WordResult();
                $obj->deserialize($value);
                array_push($this->WordsInfo, $obj);
            }
        }
    }
}
