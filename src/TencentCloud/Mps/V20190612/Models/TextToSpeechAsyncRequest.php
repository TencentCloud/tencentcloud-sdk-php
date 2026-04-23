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
 * TextToSpeechAsync请求参数结构体
 *
 * @method string getText() 获取<p>语音合成文本</p>
 * @method void setText(string $Text) 设置<p>语音合成文本</p>
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getTextLang() 获取<p>文本语言，默认中文</p>
 * @method void setTextLang(string $TextLang) 设置<p>文本语言，默认中文</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p><p>synExt Object 语音合成扩展参数<br>  duration Float 合成音频时长，单位秒，示例：5.2<br>  sampleRate Integer 合成音频采样率，默认16000，支持[8000,16000,22050,32000,44100]<br>  pitch Integer 音调，默认0原音色输出，取值[-12, 12]</p><p>transExt Object 翻译扩展参数<br>  transInfo Object<br>   transDst String 目标语言，如en<br>  transRequirement String 翻译要求</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p><p>synExt Object 语音合成扩展参数<br>  duration Float 合成音频时长，单位秒，示例：5.2<br>  sampleRate Integer 合成音频采样率，默认16000，支持[8000,16000,22050,32000,44100]<br>  pitch Integer 音调，默认0原音色输出，取值[-12, 12]</p><p>transExt Object 翻译扩展参数<br>  transInfo Object<br>   transDst String 目标语言，如en<br>  transRequirement String 翻译要求</p>
 */
class TextToSpeechAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>语音合成文本</p>
     */
    public $Text;

    /**
     * @var string <p>音色ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>文本语言，默认中文</p>
     */
    public $TextLang;

    /**
     * @var string <p>扩展参数，json字符串</p><p>synExt Object 语音合成扩展参数<br>  duration Float 合成音频时长，单位秒，示例：5.2<br>  sampleRate Integer 合成音频采样率，默认16000，支持[8000,16000,22050,32000,44100]<br>  pitch Integer 音调，默认0原音色输出，取值[-12, 12]</p><p>transExt Object 翻译扩展参数<br>  transInfo Object<br>   transDst String 目标语言，如en<br>  transRequirement String 翻译要求</p>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>语音合成文本</p>
     * @param string $VoiceId <p>音色ID</p>
     * @param string $TextLang <p>文本语言，默认中文</p>
     * @param string $ExtParam <p>扩展参数，json字符串</p><p>synExt Object 语音合成扩展参数<br>  duration Float 合成音频时长，单位秒，示例：5.2<br>  sampleRate Integer 合成音频采样率，默认16000，支持[8000,16000,22050,32000,44100]<br>  pitch Integer 音调，默认0原音色输出，取值[-12, 12]</p><p>transExt Object 翻译扩展参数<br>  transInfo Object<br>   transDst String 目标语言，如en<br>  transRequirement String 翻译要求</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("TextLang",$param) and $param["TextLang"] !== null) {
            $this->TextLang = $param["TextLang"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
