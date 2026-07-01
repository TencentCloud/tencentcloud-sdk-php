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
 * TextToSpeechSSE请求参数结构体
 *
 * @method string getText() 获取<p>需要转语音的文字内容，最大支持20000字符</p>
 * @method void setText(string $Text) 设置<p>需要转语音的文字内容，最大支持20000字符</p>
 * @method Voice getVoice() 获取<p>文本转语音的声音配置</p>
 * @method void setVoice(Voice $Voice) 设置<p>文本转语音的声音配置</p>
 * @method integer getSdkAppId() 获取<p>TRTC的SdkAppId</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的SdkAppId</p>
 * @method AudioFormat getAudioFormat() 获取<p>文本转语音的输出音频的格式</p>
 * @method void setAudioFormat(AudioFormat $AudioFormat) 设置<p>文本转语音的输出音频的格式</p>
 * @method string getAPIKey() 获取<p>TTS的API密钥</p>
 * @method void setAPIKey(string $APIKey) 设置<p>TTS的API密钥</p>
 * @method string getModel() 获取<p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
 * @method void setModel(string $Model) 设置<p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
 * @method string getLanguage() 获取<p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
 * @method void setLanguage(string $Language) 设置<p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
 * @method array getPronunciationDict() 获取<p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
 * @method void setPronunciationDict(array $PronunciationDict) 设置<p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
 * @method integer getAlignmentMode() 获取<p>字幕级别</p><p>枚举值：</p><ul><li>0： 无字幕</li><li>1： 句子级别字幕</li><li>2： 词级别字幕，目前只有flow_01_ex支持</li></ul><p>默认值：0</p>
 * @method void setAlignmentMode(integer $AlignmentMode) 设置<p>字幕级别</p><p>枚举值：</p><ul><li>0： 无字幕</li><li>1： 句子级别字幕</li><li>2： 词级别字幕，目前只有flow_01_ex支持</li></ul><p>默认值：0</p>
 * @method string getExtraParams() 获取<p>json字符串，用于拓展用法</p>
 * @method void setExtraParams(string $ExtraParams) 设置<p>json字符串，用于拓展用法</p>
 */
class TextToSpeechSSERequest extends AbstractModel
{
    /**
     * @var string <p>需要转语音的文字内容，最大支持20000字符</p>
     */
    public $Text;

    /**
     * @var Voice <p>文本转语音的声音配置</p>
     */
    public $Voice;

    /**
     * @var integer <p>TRTC的SdkAppId</p>
     */
    public $SdkAppId;

    /**
     * @var AudioFormat <p>文本转语音的输出音频的格式</p>
     */
    public $AudioFormat;

    /**
     * @var string <p>TTS的API密钥</p>
     * @deprecated
     */
    public $APIKey;

    /**
     * @var string <p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
     */
    public $Model;

    /**
     * @var string <p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
     */
    public $Language;

    /**
     * @var array <p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
     */
    public $PronunciationDict;

    /**
     * @var integer <p>字幕级别</p><p>枚举值：</p><ul><li>0： 无字幕</li><li>1： 句子级别字幕</li><li>2： 词级别字幕，目前只有flow_01_ex支持</li></ul><p>默认值：0</p>
     */
    public $AlignmentMode;

    /**
     * @var string <p>json字符串，用于拓展用法</p>
     */
    public $ExtraParams;

    /**
     * @param string $Text <p>需要转语音的文字内容，最大支持20000字符</p>
     * @param Voice $Voice <p>文本转语音的声音配置</p>
     * @param integer $SdkAppId <p>TRTC的SdkAppId</p>
     * @param AudioFormat $AudioFormat <p>文本转语音的输出音频的格式</p>
     * @param string $APIKey <p>TTS的API密钥</p>
     * @param string $Model <p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
     * @param string $Language <p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
     * @param array $PronunciationDict <p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
     * @param integer $AlignmentMode <p>字幕级别</p><p>枚举值：</p><ul><li>0： 无字幕</li><li>1： 句子级别字幕</li><li>2： 词级别字幕，目前只有flow_01_ex支持</li></ul><p>默认值：0</p>
     * @param string $ExtraParams <p>json字符串，用于拓展用法</p>
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

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new Voice();
            $this->Voice->deserialize($param["Voice"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = new AudioFormat();
            $this->AudioFormat->deserialize($param["AudioFormat"]);
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("PronunciationDict",$param) and $param["PronunciationDict"] !== null) {
            $this->PronunciationDict = [];
            foreach ($param["PronunciationDict"] as $key => $value){
                $obj = new PronunciationDict();
                $obj->deserialize($value);
                array_push($this->PronunciationDict, $obj);
            }
        }

        if (array_key_exists("AlignmentMode",$param) and $param["AlignmentMode"] !== null) {
            $this->AlignmentMode = $param["AlignmentMode"];
        }

        if (array_key_exists("ExtraParams",$param) and $param["ExtraParams"] !== null) {
            $this->ExtraParams = $param["ExtraParams"];
        }
    }
}
