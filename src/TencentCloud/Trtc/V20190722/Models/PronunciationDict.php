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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。
 *
 * @method string getWord() 获取需要纠正发音的词语，前后空格自动去除。同一请求中若有重复词语，以最后一条为准。
 * @method void setWord(string $Word) 设置需要纠正发音的词语，前后空格自动去除。同一请求中若有重复词语，以最后一条为准。
 * @method string getPronunciation() 获取目标发音，支持以下格式：<br>① 带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 yin2 hang2；<br>② 拼音连写（无空格），如 yin2hang2；<br>③ 文字+拼音混写，如 银hang2；<br>④ 直接文本替换，会将原始文本替换为目标文本
 * @method void setPronunciation(string $Pronunciation) 设置目标发音，支持以下格式：<br>① 带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 yin2 hang2；<br>② 拼音连写（无空格），如 yin2hang2；<br>③ 文字+拼音混写，如 银hang2；<br>④ 直接文本替换，会将原始文本替换为目标文本
 */
class PronunciationDict extends AbstractModel
{
    /**
     * @var string 需要纠正发音的词语，前后空格自动去除。同一请求中若有重复词语，以最后一条为准。
     */
    public $Word;

    /**
     * @var string 目标发音，支持以下格式：<br>① 带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 yin2 hang2；<br>② 拼音连写（无空格），如 yin2hang2；<br>③ 文字+拼音混写，如 银hang2；<br>④ 直接文本替换，会将原始文本替换为目标文本
     */
    public $Pronunciation;

    /**
     * @param string $Word 需要纠正发音的词语，前后空格自动去除。同一请求中若有重复词语，以最后一条为准。
     * @param string $Pronunciation 目标发音，支持以下格式：<br>① 带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 yin2 hang2；<br>② 拼音连写（无空格），如 yin2hang2；<br>③ 文字+拼音混写，如 银hang2；<br>④ 直接文本替换，会将原始文本替换为目标文本
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("Pronunciation",$param) and $param["Pronunciation"] !== null) {
            $this->Pronunciation = $param["Pronunciation"];
        }
    }
}
