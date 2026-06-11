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
 * @method string getLanguage() 获取<p>需要合成的语言，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
 * @method void setLanguage(string $Language) 设置<p>需要合成的语言，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
 * @method array getPronunciationDict() 获取<p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
 * @method void setPronunciationDict(array $PronunciationDict) 设置<p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
 * @method integer getAlignmentMode() 获取<p>默认为0，0表示不生成字幕，1表示生成字幕</p>
 * @method void setAlignmentMode(integer $AlignmentMode) 设置<p>默认为0，0表示不生成字幕，1表示生成字幕</p>
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
     * @var string <p>需要合成的语言，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
     */
    public $Language;

    /**
     * @var array <p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
     */
    public $PronunciationDict;

    /**
     * @var integer <p>默认为0，0表示不生成字幕，1表示生成字幕</p>
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
     * @param string $Language <p>需要合成的语言，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
     * @param array $PronunciationDict <p>多音字/生僻字发音纠正词典条目。指定特定词语在本次请求中使用的发音。</p>
     * @param integer $AlignmentMode <p>默认为0，0表示不生成字幕，1表示生成字幕</p>
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
