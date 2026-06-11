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
 * TTS音频输出的格式
 *
 * @method string getFormat() 获取<p>生成的音频格式</p><ul><li><p>TextToSpeechSSE 流式接口</p><p>支持 pcm,mp3,  默认: pcm</p></li><li><p>TextToSpeech 非流式接口</p><p>支持 pcm,wav,mp3,  默认: pcm</p></li><li><p>AsyncTextToSpeech<br>支持pcm,mp3, 默认: mp3</p></li></ul>
 * @method void setFormat(string $Format) 设置<p>生成的音频格式</p><ul><li><p>TextToSpeechSSE 流式接口</p><p>支持 pcm,mp3,  默认: pcm</p></li><li><p>TextToSpeech 非流式接口</p><p>支持 pcm,wav,mp3,  默认: pcm</p></li><li><p>AsyncTextToSpeech<br>支持pcm,mp3, 默认: mp3</p></li></ul>
 * @method integer getSampleRate() 获取<p>生成的音频采样率，默认24000<br>可选</p><ul><li>16000</li><li>24000</li></ul>
 * @method void setSampleRate(integer $SampleRate) 设置<p>生成的音频采样率，默认24000<br>可选</p><ul><li>16000</li><li>24000</li></ul>
 * @method integer getBitrate() 获取<p>MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： <code>64</code>, <code>128</code>, <code>192</code>, <code>256</code> ,  默认： <code>128</code></p>
 * @method void setBitrate(integer $Bitrate) 设置<p>MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： <code>64</code>, <code>128</code>, <code>192</code>, <code>256</code> ,  默认： <code>128</code></p>
 */
class AudioFormat extends AbstractModel
{
    /**
     * @var string <p>生成的音频格式</p><ul><li><p>TextToSpeechSSE 流式接口</p><p>支持 pcm,mp3,  默认: pcm</p></li><li><p>TextToSpeech 非流式接口</p><p>支持 pcm,wav,mp3,  默认: pcm</p></li><li><p>AsyncTextToSpeech<br>支持pcm,mp3, 默认: mp3</p></li></ul>
     */
    public $Format;

    /**
     * @var integer <p>生成的音频采样率，默认24000<br>可选</p><ul><li>16000</li><li>24000</li></ul>
     */
    public $SampleRate;

    /**
     * @var integer <p>MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： <code>64</code>, <code>128</code>, <code>192</code>, <code>256</code> ,  默认： <code>128</code></p>
     */
    public $Bitrate;

    /**
     * @param string $Format <p>生成的音频格式</p><ul><li><p>TextToSpeechSSE 流式接口</p><p>支持 pcm,mp3,  默认: pcm</p></li><li><p>TextToSpeech 非流式接口</p><p>支持 pcm,wav,mp3,  默认: pcm</p></li><li><p>AsyncTextToSpeech<br>支持pcm,mp3, 默认: mp3</p></li></ul>
     * @param integer $SampleRate <p>生成的音频采样率，默认24000<br>可选</p><ul><li>16000</li><li>24000</li></ul>
     * @param integer $Bitrate <p>MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： <code>64</code>, <code>128</code>, <code>192</code>, <code>256</code> ,  默认： <code>128</code></p>
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
