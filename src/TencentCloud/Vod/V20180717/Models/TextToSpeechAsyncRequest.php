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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToSpeechAsync请求参数结构体
 *
 * @method string getText() 获取<p>语音合成文本</p>
 * @method void setText(string $Text) 设置<p>语音合成文本</p>
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getSubAppId() 获取<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method void setSubAppId(string $SubAppId) 设置<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method string getLanguageBoost() 获取<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) 设置<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method string getExtParam() 获取<p>文本合成语音（异步）拓展参数。ExtParam 支持的字段：</p><ul><li>model (string)：合成模型，可选 minimax-speech-2.8-hd、minimax-speech-2.8-turbo、minimax-speech-2.6-hd、minimax-speech-2.6-turbo、minimax-speech-02-hd、minimax-speech-02-turbo；默认 minimax-speech-2.8-hd。</li><li>text_lang (string)：文本语言，如 zh / en；与入参 LanguageBoost 同义，同时传入时以 ExtParam 为准。</li><li>audio_setting (object)：音频输出与音色微调参数（注意：异步接口的语速、音量、音调、情绪均在 audio_setting 下，与同步接口的 voice_setting 不同），可选字段：<ul><li>speed (float)：语速，[0.5, 2.0]，默认 1.0。</li><li>vol (float)：音量，(0, 10]，默认 1.0。</li><li>pitch (int)：音调，[-12, 12]，默认 0。</li><li>emotion (string)：情绪，可选 happy / sad / angry / fearful / disgusted / surprised / calm / fluent / whisper。</li><li>sample_rate (int)：采样率，可选 8000 / 16000 / 22050 / 24000 / 32000 / 44100，默认 16000。</li><li>format (string)：音频格式，可选 mp3 / wav，默认 wav。</li><li>duration (float)：目标时长（秒）。</li><li>cut_silence (bool)：是否裁剪静音段。</li></ul></li></ul>
 * @method void setExtParam(string $ExtParam) 设置<p>文本合成语音（异步）拓展参数。ExtParam 支持的字段：</p><ul><li>model (string)：合成模型，可选 minimax-speech-2.8-hd、minimax-speech-2.8-turbo、minimax-speech-2.6-hd、minimax-speech-2.6-turbo、minimax-speech-02-hd、minimax-speech-02-turbo；默认 minimax-speech-2.8-hd。</li><li>text_lang (string)：文本语言，如 zh / en；与入参 LanguageBoost 同义，同时传入时以 ExtParam 为准。</li><li>audio_setting (object)：音频输出与音色微调参数（注意：异步接口的语速、音量、音调、情绪均在 audio_setting 下，与同步接口的 voice_setting 不同），可选字段：<ul><li>speed (float)：语速，[0.5, 2.0]，默认 1.0。</li><li>vol (float)：音量，(0, 10]，默认 1.0。</li><li>pitch (int)：音调，[-12, 12]，默认 0。</li><li>emotion (string)：情绪，可选 happy / sad / angry / fearful / disgusted / surprised / calm / fluent / whisper。</li><li>sample_rate (int)：采样率，可选 8000 / 16000 / 22050 / 24000 / 32000 / 44100，默认 16000。</li><li>format (string)：音频格式，可选 mp3 / wav，默认 wav。</li><li>duration (float)：目标时长（秒）。</li><li>cut_silence (bool)：是否裁剪静音段。</li></ul></li></ul>
 * @method TextToSpeechAsyncOutputOption getOutput() 获取<p>输出相关参数</p><p>可以指定输出形式等。默认输出音频url。</p>
 * @method void setOutput(TextToSpeechAsyncOutputOption $Output) 设置<p>输出相关参数</p><p>可以指定输出形式等。默认输出音频url。</p>
 * @method string getSessionContext() 获取<p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getSessionId() 获取<p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
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
     * @var string <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     */
    public $SubAppId;

    /**
     * @var string <p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>文本合成语音（异步）拓展参数。ExtParam 支持的字段：</p><ul><li>model (string)：合成模型，可选 minimax-speech-2.8-hd、minimax-speech-2.8-turbo、minimax-speech-2.6-hd、minimax-speech-2.6-turbo、minimax-speech-02-hd、minimax-speech-02-turbo；默认 minimax-speech-2.8-hd。</li><li>text_lang (string)：文本语言，如 zh / en；与入参 LanguageBoost 同义，同时传入时以 ExtParam 为准。</li><li>audio_setting (object)：音频输出与音色微调参数（注意：异步接口的语速、音量、音调、情绪均在 audio_setting 下，与同步接口的 voice_setting 不同），可选字段：<ul><li>speed (float)：语速，[0.5, 2.0]，默认 1.0。</li><li>vol (float)：音量，(0, 10]，默认 1.0。</li><li>pitch (int)：音调，[-12, 12]，默认 0。</li><li>emotion (string)：情绪，可选 happy / sad / angry / fearful / disgusted / surprised / calm / fluent / whisper。</li><li>sample_rate (int)：采样率，可选 8000 / 16000 / 22050 / 24000 / 32000 / 44100，默认 16000。</li><li>format (string)：音频格式，可选 mp3 / wav，默认 wav。</li><li>duration (float)：目标时长（秒）。</li><li>cut_silence (bool)：是否裁剪静音段。</li></ul></li></ul>
     */
    public $ExtParam;

    /**
     * @var TextToSpeechAsyncOutputOption <p>输出相关参数</p><p>可以指定输出形式等。默认输出音频url。</p>
     */
    public $Output;

    /**
     * @var string <p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @param string $Text <p>语音合成文本</p>
     * @param string $VoiceId <p>音色ID</p>
     * @param string $SubAppId <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     * @param string $LanguageBoost <p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
     * @param string $ExtParam <p>文本合成语音（异步）拓展参数。ExtParam 支持的字段：</p><ul><li>model (string)：合成模型，可选 minimax-speech-2.8-hd、minimax-speech-2.8-turbo、minimax-speech-2.6-hd、minimax-speech-2.6-turbo、minimax-speech-02-hd、minimax-speech-02-turbo；默认 minimax-speech-2.8-hd。</li><li>text_lang (string)：文本语言，如 zh / en；与入参 LanguageBoost 同义，同时传入时以 ExtParam 为准。</li><li>audio_setting (object)：音频输出与音色微调参数（注意：异步接口的语速、音量、音调、情绪均在 audio_setting 下，与同步接口的 voice_setting 不同），可选字段：<ul><li>speed (float)：语速，[0.5, 2.0]，默认 1.0。</li><li>vol (float)：音量，(0, 10]，默认 1.0。</li><li>pitch (int)：音调，[-12, 12]，默认 0。</li><li>emotion (string)：情绪，可选 happy / sad / angry / fearful / disgusted / surprised / calm / fluent / whisper。</li><li>sample_rate (int)：采样率，可选 8000 / 16000 / 22050 / 24000 / 32000 / 44100，默认 16000。</li><li>format (string)：音频格式，可选 mp3 / wav，默认 wav。</li><li>duration (float)：目标时长（秒）。</li><li>cut_silence (bool)：是否裁剪静音段。</li></ul></li></ul>
     * @param TextToSpeechAsyncOutputOption $Output <p>输出相关参数</p><p>可以指定输出形式等。默认输出音频url。</p>
     * @param string $SessionContext <p>标识来源上下文，用于透传用户请求信息，在回调和任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $SessionId <p>用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TextToSpeechAsyncOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
