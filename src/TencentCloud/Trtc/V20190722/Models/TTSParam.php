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
 * 伴生转录TTS参数
 *
 * @method string getModel() 获取<p>tts模型</p>
 * @method void setModel(string $Model) 设置<p>tts模型</p>
 * @method string getLanguage() 获取<p>tts语言，必须在TranslationParam 的TargetLang列表中。</p>
 * @method void setLanguage(string $Language) 设置<p>tts语言，必须在TranslationParam 的TargetLang列表中。</p>
 * @method TranscriptionUserInfoParams getTargetUser() 获取<p>需要TTS播报的主播用户，该主播用户必须在订阅白名单里并且不在订阅黑名单里。</p>
 * @method void setTargetUser(TranscriptionUserInfoParams $TargetUser) 设置<p>需要TTS播报的主播用户，该主播用户必须在订阅白名单里并且不在订阅黑名单里。</p>
 * @method TranscriptionUserInfoParams getTTSRobotUser() 获取<p>TTS 音频回推到房间的机器人用户。</p>
 * @method void setTTSRobotUser(TranscriptionUserInfoParams $TTSRobotUser) 设置<p>TTS 音频回推到房间的机器人用户。</p>
 * @method TTSVoice getVoice() 获取<p>TTS的声音配置参数。</p>
 * @method void setVoice(TTSVoice $Voice) 设置<p>TTS的声音配置参数。</p>
 */
class TTSParam extends AbstractModel
{
    /**
     * @var string <p>tts模型</p>
     */
    public $Model;

    /**
     * @var string <p>tts语言，必须在TranslationParam 的TargetLang列表中。</p>
     */
    public $Language;

    /**
     * @var TranscriptionUserInfoParams <p>需要TTS播报的主播用户，该主播用户必须在订阅白名单里并且不在订阅黑名单里。</p>
     */
    public $TargetUser;

    /**
     * @var TranscriptionUserInfoParams <p>TTS 音频回推到房间的机器人用户。</p>
     */
    public $TTSRobotUser;

    /**
     * @var TTSVoice <p>TTS的声音配置参数。</p>
     */
    public $Voice;

    /**
     * @param string $Model <p>tts模型</p>
     * @param string $Language <p>tts语言，必须在TranslationParam 的TargetLang列表中。</p>
     * @param TranscriptionUserInfoParams $TargetUser <p>需要TTS播报的主播用户，该主播用户必须在订阅白名单里并且不在订阅黑名单里。</p>
     * @param TranscriptionUserInfoParams $TTSRobotUser <p>TTS 音频回推到房间的机器人用户。</p>
     * @param TTSVoice $Voice <p>TTS的声音配置参数。</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("TargetUser",$param) and $param["TargetUser"] !== null) {
            $this->TargetUser = new TranscriptionUserInfoParams();
            $this->TargetUser->deserialize($param["TargetUser"]);
        }

        if (array_key_exists("TTSRobotUser",$param) and $param["TTSRobotUser"] !== null) {
            $this->TTSRobotUser = new TranscriptionUserInfoParams();
            $this->TTSRobotUser->deserialize($param["TTSRobotUser"]);
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new TTSVoice();
            $this->Voice->deserialize($param["Voice"]);
        }
    }
}
