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
 * @method string getLanguage() 获取<p>语言参数，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
 * @method void setLanguage(string $Language) 设置<p>语言参数，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
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
     * @var string <p>语言参数，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
     */
    public $Language;

    /**
     * @param integer $SdkAppId <p>TRTC的SdkAppId</p>
     * @param string $VoiceName <p>声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位</p>
     * @param string $PromptAudio <p>声音克隆的参考音频，base64字符串，支持wav、mp3、m4a格式，长度在6秒～180秒之间</p>
     * @param string $APIKey <p>TTS的API密钥</p>
     * @param string $PromptText <p>声音克隆的参考文本，为参考音频对应的文字。</p>
     * @param string $Model <p>TTS的模型，支持flow_02_turbo，flow_01_ex，默认为flow_02_turbo</p><p>枚举值：</p><ul><li>flow_02_turbo： 高性价比模型，兼顾效果和成本</li><li>flow_01_ex： 高天花板模型，能力全面，在音色克隆上表现更优</li></ul>
     * @param string $Language <p>语言参数，默认为空，表示自动识别</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>yue： 粤语</li><li>ms： 马来语</li><li>ar： 阿拉伯语</li><li>id： 印尼语</li><li>th： 泰语</li><li>vi： 越南语</li></ul>
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
