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
 * TextToSpeech请求参数结构体
 *
 * @method string getText() 获取<p>语音合成文本</p>
 * @method void setText(string $Text) 设置<p>语音合成文本</p>
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getTextLang() 获取<p>文本语言。不填默认自动识别<br>当前支持语言：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
 * @method void setTextLang(string $TextLang) 设置<p>文本语言。不填默认自动识别<br>当前支持语言：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
 * @method SyncDubbingOutputOption getOutput() 获取<p>输出相关参数</p>
 * @method void setOutput(SyncDubbingOutputOption $Output) 设置<p>输出相关参数</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p><p><strong>synExt</strong> Object 语音合成扩展参数<br>   <strong>duration</strong> Float 合成音频时长（单位秒），默认不控制时长。示例：5.2<br>   <strong>format</strong> String 输出音频格式，默认wav，支持wav、mp3<br>   <strong>sampleRate</strong> Integer 合成音频采样率，默认16000，支持[8000,16000,22050,24000,32000,44100]</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p><p><strong>synExt</strong> Object 语音合成扩展参数<br>   <strong>duration</strong> Float 合成音频时长（单位秒），默认不控制时长。示例：5.2<br>   <strong>format</strong> String 输出音频格式，默认wav，支持wav、mp3<br>   <strong>sampleRate</strong> Integer 合成音频采样率，默认16000，支持[8000,16000,22050,24000,32000,44100]</p>
 */
class TextToSpeechRequest extends AbstractModel
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
     * @var string <p>文本语言。不填默认自动识别<br>当前支持语言：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
     */
    public $TextLang;

    /**
     * @var SyncDubbingOutputOption <p>输出相关参数</p>
     */
    public $Output;

    /**
     * @var string <p>扩展参数，json字符串</p><p><strong>synExt</strong> Object 语音合成扩展参数<br>   <strong>duration</strong> Float 合成音频时长（单位秒），默认不控制时长。示例：5.2<br>   <strong>format</strong> String 输出音频格式，默认wav，支持wav、mp3<br>   <strong>sampleRate</strong> Integer 合成音频采样率，默认16000，支持[8000,16000,22050,24000,32000,44100]</p>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>语音合成文本</p>
     * @param string $VoiceId <p>音色ID</p>
     * @param string $TextLang <p>文本语言。不填默认自动识别<br>当前支持语言：<br>zh 中文 (Chinese)<br>en 英语 (English)<br>ja 日语 (Japanese)<br>de 德语 (German)<br>fr 法语 (French)<br>ko 韩语 (Korean)<br>ru 俄语 (Russian)<br>uk 乌克兰语 (Ukrainian)<br>pt 葡萄牙语 (Portuguese)<br>it 意大利语 (Italian)<br>es 西班牙语 (Spanish)<br>id 印度尼西亚语 (Indonesian)<br>nl 荷兰语 (Dutch)<br>tr 土耳其语 (Turkish)<br>fil 菲律宾语 (Filipino)<br>ms 马来语 (Malay)<br>el 希腊语 (Greek)<br>fi 芬兰语 (Finnish)<br>hr 克罗地亚语 (Croatian)<br>sk 斯洛伐克语 (Slovak)<br>pl 波兰语 (Polish)<br>sv 瑞典语 (Swedish)<br>hi 印地语 (Hindi)<br>bg 保加利亚语 (Bulgarian)<br>ro 罗马尼亚语 (Romanian)<br>ar 阿拉伯语 (Arabic)<br>cs 捷克语 (Czech)<br>da 丹麦语 (Danish)<br>ta 泰米尔语 (Tamil)<br>hun 匈牙利语（Hungarian）<br>vi 越南语（Vietnamese）<br>no 挪威语（Norwegian）<br>yue 粤语（Cantonese）<br>th 泰语（Thai）<br>he 希伯来语（Hebrew）<br>ca 加泰罗尼亚语（Catalan）<br>nn 尼诺斯克语（Nynorsk）<br>af 阿非利卡语（Afrikaans）<br>fa 波斯语（Persian）<br>sl 斯洛文尼亚语（Slovenian）</p>
     * @param SyncDubbingOutputOption $Output <p>输出相关参数</p>
     * @param string $ExtParam <p>扩展参数，json字符串</p><p><strong>synExt</strong> Object 语音合成扩展参数<br>   <strong>duration</strong> Float 合成音频时长（单位秒），默认不控制时长。示例：5.2<br>   <strong>format</strong> String 输出音频格式，默认wav，支持wav、mp3<br>   <strong>sampleRate</strong> Integer 合成音频采样率，默认16000，支持[8000,16000,22050,24000,32000,44100]</p>
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

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SyncDubbingOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
