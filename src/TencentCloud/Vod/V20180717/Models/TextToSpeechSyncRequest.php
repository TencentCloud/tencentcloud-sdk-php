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
 * TextToSpeechSync请求参数结构体
 *
 * @method string getText() 获取<p>合成文本，语音合成时必填，文本长度不超过2000字节</p>
 * @method void setText(string $Text) 设置<p>合成文本，语音合成时必填，文本长度不超过2000字节</p>
 * @method string getVoiceId() 获取<p>音色Id，指定音色合成时填写，支持系统音色和设计、克隆音色。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色Id，指定音色合成时填写，支持系统音色和设计、克隆音色。</p>
 * @method string getSubAppId() 获取<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method void setSubAppId(string $SubAppId) 设置<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method string getLanguageBoost() 获取<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) 设置<p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
 * @method TextToSpeechSyncOutputOption getOutput() 获取<p>输出相关参数</p><p>可以指定输出形式等。默认输出音频base64。</p>
 * @method void setOutput(TextToSpeechSyncOutputOption $Output) 设置<p>输出相关参数</p><p>可以指定输出形式等。默认输出音频base64。</p>
 * @method string getExtParam() 获取<p>同步语音合成拓展参数。<code>ExtParam</code> 支持的字段：</p><ul>  <li><code>model</code> (string)：合成模型，可选 <code>minimax-speech-2.8-hd</code>、<code>minimax-speech-2.8-turbo</code>、<code>minimax-speech-2.6-hd</code>、<code>minimax-speech-2.6-turbo</code>、<code>minimax-speech-02-hd</code>、<code>minimax-speech-02-turbo</code>；默认 <code>minimax-speech-2.8-hd</code>。</li>  <li><code>voice_setting</code> (object)：音色微调，可选字段：    <ul>      <li><code>speed</code> (float)：语速，<code>[0.5, 2.0]</code>，默认 <code>1.0</code>。</li>      <li><code>vol</code> (float)：音量，<code>(0, 10]</code>，默认 <code>1.0</code>。</li>      <li><code>pitch</code> (int)：音调，<code>[-12, 12]</code>，默认 <code>0</code>。</li>      <li><code>emotion</code> (string)：情绪，可选 <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>。</li>    </ul>  </li>  <li><code>audio_setting</code> (object)：音频输出参数，可选字段：    <ul>      <li><code>sample_rate</code> (int)：采样率，可选 <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>，默认 <code>16000</code>。</li>      <li><code>format</code> (string)：音频格式，可选 <code>mp3</code> / <code>wav</code>，默认 <code>wav</code>。</li>      <li><code>duration</code> (float)：目标时长（秒）。</li>      <li><code>cut_silence</code> (bool)：是否裁剪静音段。</li>    </ul>  </li></ul>
 * @method void setExtParam(string $ExtParam) 设置<p>同步语音合成拓展参数。<code>ExtParam</code> 支持的字段：</p><ul>  <li><code>model</code> (string)：合成模型，可选 <code>minimax-speech-2.8-hd</code>、<code>minimax-speech-2.8-turbo</code>、<code>minimax-speech-2.6-hd</code>、<code>minimax-speech-2.6-turbo</code>、<code>minimax-speech-02-hd</code>、<code>minimax-speech-02-turbo</code>；默认 <code>minimax-speech-2.8-hd</code>。</li>  <li><code>voice_setting</code> (object)：音色微调，可选字段：    <ul>      <li><code>speed</code> (float)：语速，<code>[0.5, 2.0]</code>，默认 <code>1.0</code>。</li>      <li><code>vol</code> (float)：音量，<code>(0, 10]</code>，默认 <code>1.0</code>。</li>      <li><code>pitch</code> (int)：音调，<code>[-12, 12]</code>，默认 <code>0</code>。</li>      <li><code>emotion</code> (string)：情绪，可选 <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>。</li>    </ul>  </li>  <li><code>audio_setting</code> (object)：音频输出参数，可选字段：    <ul>      <li><code>sample_rate</code> (int)：采样率，可选 <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>，默认 <code>16000</code>。</li>      <li><code>format</code> (string)：音频格式，可选 <code>mp3</code> / <code>wav</code>，默认 <code>wav</code>。</li>      <li><code>duration</code> (float)：目标时长（秒）。</li>      <li><code>cut_silence</code> (bool)：是否裁剪静音段。</li>    </ul>  </li></ul>
 */
class TextToSpeechSyncRequest extends AbstractModel
{
    /**
     * @var string <p>合成文本，语音合成时必填，文本长度不超过2000字节</p>
     */
    public $Text;

    /**
     * @var string <p>音色Id，指定音色合成时填写，支持系统音色和设计、克隆音色。</p>
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
     * @var TextToSpeechSyncOutputOption <p>输出相关参数</p><p>可以指定输出形式等。默认输出音频base64。</p>
     */
    public $Output;

    /**
     * @var string <p>同步语音合成拓展参数。<code>ExtParam</code> 支持的字段：</p><ul>  <li><code>model</code> (string)：合成模型，可选 <code>minimax-speech-2.8-hd</code>、<code>minimax-speech-2.8-turbo</code>、<code>minimax-speech-2.6-hd</code>、<code>minimax-speech-2.6-turbo</code>、<code>minimax-speech-02-hd</code>、<code>minimax-speech-02-turbo</code>；默认 <code>minimax-speech-2.8-hd</code>。</li>  <li><code>voice_setting</code> (object)：音色微调，可选字段：    <ul>      <li><code>speed</code> (float)：语速，<code>[0.5, 2.0]</code>，默认 <code>1.0</code>。</li>      <li><code>vol</code> (float)：音量，<code>(0, 10]</code>，默认 <code>1.0</code>。</li>      <li><code>pitch</code> (int)：音调，<code>[-12, 12]</code>，默认 <code>0</code>。</li>      <li><code>emotion</code> (string)：情绪，可选 <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>。</li>    </ul>  </li>  <li><code>audio_setting</code> (object)：音频输出参数，可选字段：    <ul>      <li><code>sample_rate</code> (int)：采样率，可选 <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>，默认 <code>16000</code>。</li>      <li><code>format</code> (string)：音频格式，可选 <code>mp3</code> / <code>wav</code>，默认 <code>wav</code>。</li>      <li><code>duration</code> (float)：目标时长（秒）。</li>      <li><code>cut_silence</code> (bool)：是否裁剪静音段。</li>    </ul>  </li></ul>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>合成文本，语音合成时必填，文本长度不超过2000字节</p>
     * @param string $VoiceId <p>音色Id，指定音色合成时填写，支持系统音色和设计、克隆音色。</p>
     * @param string $SubAppId <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     * @param string $LanguageBoost <p>语言增强，如 "zh" "en" "auto"，默认 "auto"</p>
     * @param TextToSpeechSyncOutputOption $Output <p>输出相关参数</p><p>可以指定输出形式等。默认输出音频base64。</p>
     * @param string $ExtParam <p>同步语音合成拓展参数。<code>ExtParam</code> 支持的字段：</p><ul>  <li><code>model</code> (string)：合成模型，可选 <code>minimax-speech-2.8-hd</code>、<code>minimax-speech-2.8-turbo</code>、<code>minimax-speech-2.6-hd</code>、<code>minimax-speech-2.6-turbo</code>、<code>minimax-speech-02-hd</code>、<code>minimax-speech-02-turbo</code>；默认 <code>minimax-speech-2.8-hd</code>。</li>  <li><code>voice_setting</code> (object)：音色微调，可选字段：    <ul>      <li><code>speed</code> (float)：语速，<code>[0.5, 2.0]</code>，默认 <code>1.0</code>。</li>      <li><code>vol</code> (float)：音量，<code>(0, 10]</code>，默认 <code>1.0</code>。</li>      <li><code>pitch</code> (int)：音调，<code>[-12, 12]</code>，默认 <code>0</code>。</li>      <li><code>emotion</code> (string)：情绪，可选 <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>。</li>    </ul>  </li>  <li><code>audio_setting</code> (object)：音频输出参数，可选字段：    <ul>      <li><code>sample_rate</code> (int)：采样率，可选 <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>，默认 <code>16000</code>。</li>      <li><code>format</code> (string)：音频格式，可选 <code>mp3</code> / <code>wav</code>，默认 <code>wav</code>。</li>      <li><code>duration</code> (float)：目标时长（秒）。</li>      <li><code>cut_silence</code> (bool)：是否裁剪静音段。</li>    </ul>  </li></ul>
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

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TextToSpeechSyncOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
