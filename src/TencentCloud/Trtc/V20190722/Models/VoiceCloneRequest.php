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
 * VoiceClone请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的SdkAppId</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的SdkAppId</p>
 * @method string getVoiceName() 获取<p>声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位</p>
 * @method void setVoiceName(string $VoiceName) 设置<p>声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位</p>
 * @method string getPromptAudio() 获取<p>声音克隆的参考音频，base64字符串，支持wav、mp3、m4a格式，长度在6秒～180秒之间</p>
 * @method void setPromptAudio(string $PromptAudio) 设置<p>声音克隆的参考音频，base64字符串，支持wav、mp3、m4a格式，长度在6秒～180秒之间</p>
 * @method string getAPIKey() 获取<p>TTS的API密钥</p>
 * @method void setAPIKey(string $APIKey) 设置<p>TTS的API密钥</p>
 * @method string getPromptText() 获取<p>声音克隆的参考文本，为参考音频对应的文字。</p>
 * @method void setPromptText(string $PromptText) 设置<p>声音克隆的参考文本，为参考音频对应的文字。</p>
 * @method string getModel() 获取<p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
 * @method void setModel(string $Model) 设置<p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
 * @method string getLanguage() 获取<p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
 * @method void setLanguage(string $Language) 设置<p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
 */
class VoiceCloneRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的SdkAppId</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位</p>
     */
    public $VoiceName;

    /**
     * @var string <p>声音克隆的参考音频，base64字符串，支持wav、mp3、m4a格式，长度在6秒～180秒之间</p>
     */
    public $PromptAudio;

    /**
     * @var string <p>TTS的API密钥</p>
     * @deprecated
     */
    public $APIKey;

    /**
     * @var string <p>声音克隆的参考文本，为参考音频对应的文字。</p>
     */
    public $PromptText;

    /**
     * @var string <p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
     */
    public $Model;

    /**
     * @var string <p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
     */
    public $Language;

    /**
     * @param integer $SdkAppId <p>TRTC的SdkAppId</p>
     * @param string $VoiceName <p>声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位</p>
     * @param string $PromptAudio <p>声音克隆的参考音频，base64字符串，支持wav、mp3、m4a格式，长度在6秒～180秒之间</p>
     * @param string $APIKey <p>TTS的API密钥</p>
     * @param string $PromptText <p>声音克隆的参考文本，为参考音频对应的文字。</p>
     * @param string $Model <p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
     * @param string $Language <p>需要合成的语言，默认为空，表示自动识别</p><p>flow_02_turbo支持以下语言：</p><ul><li>zh：中文</li><li>en：英文</li><li>ja：日语</li><li>ko：韩语</li><li>yue：粤语</li><li>ms：马来语</li><li>ar：阿拉伯语</li><li>id：印尼语</li><li>th：泰语</li><li>vi：越南语</li></ul><p>flow_01_ex支持以下语言：</p><ul><li>zh：中文（简体） (Chinese Simplified)</li><li>zh-tw：中文（繁体） (Chinese Traditional)</li><li>en：英语 (English)</li><li>ja：日语 (Japanese)</li><li>ko：韩语 (Korean)</li><li>ms：马来语 (Malay)</li><li>yue：粤语 (Cantonese)</li><li>ar：阿拉伯语 (Arabic)</li><li>ru：俄语 (Russian)</li><li>es：西班牙语 (Spanish)</li><li>fr：法语 (French)</li><li>pt：葡萄牙语 (Portuguese)</li><li>de：德语 (German)</li><li>tr：土耳其语 (Turkish)</li><li>nl：荷兰语 (Dutch)</li><li>uk：乌克兰语 (Ukrainian)</li><li>vi：越南语 (Vietnamese)</li><li>id：印尼语 (Indonesian)</li><li>it：意大利语 (Italian)</li><li>th：泰语 (Thai)</li><li>pl：波兰语 (Polish)</li><li>ro：罗马尼亚语 (Romanian)</li><li>el：希腊语 (Greek)</li><li>cs：捷克语 (Czech)</li><li>fi：芬兰语 (Finnish)</li><li>hi：印地语 (Hindi)</li><li>bg：保加利亚语 (Bulgarian)</li><li>da：丹麦语 (Danish)</li><li>he：希伯来语 (Hebrew)</li><li>fa：波斯语（法尔西语） (Persian)</li><li>sk：斯洛伐克语 (Slovak)</li><li>sv：瑞典语 (Swedish)</li><li>hr：克罗地亚语 (Croatian)</li><li>tl：菲律宾语（他加禄语） (Filipino)</li><li>hu：匈牙利语 (Hungarian)</li><li>no：挪威语 (Norwegian)</li><li>sl：斯洛文尼亚语 (Slovenian)</li><li>ca：加泰罗尼亚语 (Catalan)</li><li>nn：新挪威语 (Nynorsk)</li><li>ta：泰米尔语 (Tamil)</li><li>af：南非荷兰语 (Afrikaans)</li></ul>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("PromptAudio",$param) and $param["PromptAudio"] !== null) {
            $this->PromptAudio = $param["PromptAudio"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("PromptText",$param) and $param["PromptText"] !== null) {
            $this->PromptText = $param["PromptText"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }
    }
}
