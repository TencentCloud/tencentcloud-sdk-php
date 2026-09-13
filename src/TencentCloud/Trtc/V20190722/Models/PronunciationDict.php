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
 * @method string getWord() 获取<p>需要纠正发音的词语，同一请求中若有重复词语，以最后一条为准。</p>
 * @method void setWord(string $Word) 设置<p>需要纠正发音的词语，同一请求中若有重复词语，以最后一条为准。</p>
 * @method string getPronunciation() 获取<p>目标发音，支持以下格式：</p><ul><li>带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 (yin2)(hang2)</li><li>英文音标，如  (rɪˈzjuːm)</li><li>裸文本替换，会将原始文本替换为目标文本</li></ul><p>支持任意格式混排，注意拼音和音标需要被括号包裹</p>
 * @method void setPronunciation(string $Pronunciation) 设置<p>目标发音，支持以下格式：</p><ul><li>带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 (yin2)(hang2)</li><li>英文音标，如  (rɪˈzjuːm)</li><li>裸文本替换，会将原始文本替换为目标文本</li></ul><p>支持任意格式混排，注意拼音和音标需要被括号包裹</p>
 */
class PronunciationDict extends AbstractModel
{
    /**
     * @var string <p>需要纠正发音的词语，同一请求中若有重复词语，以最后一条为准。</p>
     */
    public $Word;

    /**
     * @var string <p>目标发音，支持以下格式：</p><ul><li>带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 (yin2)(hang2)</li><li>英文音标，如  (rɪˈzjuːm)</li><li>裸文本替换，会将原始文本替换为目标文本</li></ul><p>支持任意格式混排，注意拼音和音标需要被括号包裹</p>
     */
    public $Pronunciation;

    /**
     * @param string $Word <p>需要纠正发音的词语，同一请求中若有重复词语，以最后一条为准。</p>
     * @param string $Pronunciation <p>目标发音，支持以下格式：</p><ul><li>带声调数字的拼音（1=阴平，2=阳平，3=上声，4=去声，5=轻声），如 (yin2)(hang2)</li><li>英文音标，如  (rɪˈzjuːm)</li><li>裸文本替换，会将原始文本替换为目标文本</li></ul><p>支持任意格式混排，注意拼音和音标需要被括号包裹</p>
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
