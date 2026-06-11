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
 * @method string getPromptAudio() 获取<p>声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在6秒～180秒之间</p>
 * @method void setPromptAudio(string $PromptAudio) 设置<p>声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在6秒～180秒之间</p>
 * @method string getAPIKey() 获取<p>TTS的API密钥</p>
 * @method void setAPIKey(string $APIKey) 设置<p>TTS的API密钥</p>
 * @method string getPromptText() 获取<p>声音克隆的参考文本，为参考音频对应的文字。</p>
 * @method void setPromptText(string $PromptText) 设置<p>声音克隆的参考文本，为参考音频对应的文字。</p>
 * @method string getModel() 获取<p>TTS的模型：flow_02_turbo，flow_01_ex</p><p>枚举值：</p><ul><li>flow_02_turbo： flow_02_turbo</li><li>flow_01_ex： flow_01_ex</li></ul>
 * @method void setModel(string $Model) 设置<p>TTS的模型：flow_02_turbo，flow_01_ex</p><p>枚举值：</p><ul><li>flow_02_turbo： flow_02_turbo</li><li>flow_01_ex： flow_01_ex</li></ul>
 * @method string getLanguage() 获取<p>语言参数，默认为空， 参考： (ISO 639-1)</p>
 * @method void setLanguage(string $Language) 设置<p>语言参数，默认为空， 参考： (ISO 639-1)</p>
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
     * @var string <p>声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在6秒～180秒之间</p>
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
     * @var string <p>TTS的模型：flow_02_turbo，flow_01_ex</p><p>枚举值：</p><ul><li>flow_02_turbo： flow_02_turbo</li><li>flow_01_ex： flow_01_ex</li></ul>
     */
    public $Model;

    /**
     * @var string <p>语言参数，默认为空， 参考： (ISO 639-1)</p>
     */
    public $Language;

    /**
     * @param integer $SdkAppId <p>TRTC的SdkAppId</p>
     * @param string $VoiceName <p>声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位</p>
     * @param string $PromptAudio <p>声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在6秒～180秒之间</p>
     * @param string $APIKey <p>TTS的API密钥</p>
     * @param string $PromptText <p>声音克隆的参考文本，为参考音频对应的文字。</p>
     * @param string $Model <p>TTS的模型：flow_02_turbo，flow_01_ex</p><p>枚举值：</p><ul><li>flow_02_turbo： flow_02_turbo</li><li>flow_01_ex： flow_01_ex</li></ul>
     * @param string $Language <p>语言参数，默认为空， 参考： (ISO 639-1)</p>
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
