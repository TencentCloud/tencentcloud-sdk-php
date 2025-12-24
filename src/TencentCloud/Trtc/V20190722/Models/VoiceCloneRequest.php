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
 * @method integer getSdkAppId() 获取TRTC的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SdkAppId
 * @method string getVoiceName() 获取声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位
 * @method void setVoiceName(string $VoiceName) 设置声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位
 * @method string getPromptAudio() 获取声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在10秒～180秒之间
 * @method void setPromptAudio(string $PromptAudio) 设置声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在10秒～180秒之间
 * @method string getAPIKey() 获取TTS的API密钥
 * @method void setAPIKey(string $APIKey) 设置TTS的API密钥
 * @method string getPromptText() 获取声音克隆的参考文本，为参考音频对应的文字。
 * @method void setPromptText(string $PromptText) 设置声音克隆的参考文本，为参考音频对应的文字。
 * @method string getModel() 获取TTS的模型：flow_01_turbo，flow_01_ex
 * @method void setModel(string $Model) 设置TTS的模型：flow_01_turbo，flow_01_ex
 * @method string getLanguage() 获取语言参数，默认为空， 参考： (ISO 639-1) 
 * @method void setLanguage(string $Language) 设置语言参数，默认为空， 参考： (ISO 639-1) 
 */
class VoiceCloneRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位
     */
    public $VoiceName;

    /**
     * @var string 声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在10秒～180秒之间
     */
    public $PromptAudio;

    /**
     * @var string TTS的API密钥
     */
    public $APIKey;

    /**
     * @var string 声音克隆的参考文本，为参考音频对应的文字。
     */
    public $PromptText;

    /**
     * @var string TTS的模型：flow_01_turbo，flow_01_ex
     */
    public $Model;

    /**
     * @var string 语言参数，默认为空， 参考： (ISO 639-1) 
     */
    public $Language;

    /**
     * @param integer $SdkAppId TRTC的SdkAppId
     * @param string $VoiceName 声音克隆的名称, 只允许使用数字、字母、下划线，不能超过36位
     * @param string $PromptAudio 声音克隆的参考音频，必须为16k单声道的wav的base64字符串， 长度在10秒～180秒之间
     * @param string $APIKey TTS的API密钥
     * @param string $PromptText 声音克隆的参考文本，为参考音频对应的文字。
     * @param string $Model TTS的模型：flow_01_turbo，flow_01_ex
     * @param string $Language 语言参数，默认为空， 参考： (ISO 639-1) 
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
