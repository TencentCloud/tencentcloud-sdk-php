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
 * @method string getFormat() 获取生成的音频格式

- TextToSpeechSSE 流式接口

 支持 pcm, 默认: pcm

- TextToSpeech 非流式接口

 支持 pcm,wav,mp3,  默认: pcm
 * @method void setFormat(string $Format) 设置生成的音频格式

- TextToSpeechSSE 流式接口

 支持 pcm, 默认: pcm

- TextToSpeech 非流式接口

 支持 pcm,wav,mp3,  默认: pcm
 * @method integer getSampleRate() 获取生成的音频采样率，默认24000
可选
- 16000
- 24000 
 * @method void setSampleRate(integer $SampleRate) 设置生成的音频采样率，默认24000
可选
- 16000
- 24000 
 * @method integer getBitrate() 获取 MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： `64`, `128`, `192`, `256` ,  默认： `128` 
 * @method void setBitrate(integer $Bitrate) 设置 MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： `64`, `128`, `192`, `256` ,  默认： `128` 
 */
class AudioFormat extends AbstractModel
{
    /**
     * @var string 生成的音频格式

- TextToSpeechSSE 流式接口

 支持 pcm, 默认: pcm

- TextToSpeech 非流式接口

 支持 pcm,wav,mp3,  默认: pcm
     */
    public $Format;

    /**
     * @var integer 生成的音频采样率，默认24000
可选
- 16000
- 24000 
     */
    public $SampleRate;

    /**
     * @var integer  MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： `64`, `128`, `192`, `256` ,  默认： `128` 
     */
    public $Bitrate;

    /**
     * @param string $Format 生成的音频格式

- TextToSpeechSSE 流式接口

 支持 pcm, 默认: pcm

- TextToSpeech 非流式接口

 支持 pcm,wav,mp3,  默认: pcm
     * @param integer $SampleRate 生成的音频采样率，默认24000
可选
- 16000
- 24000 
     * @param integer $Bitrate  MP3 比特率 (kbps)，仅对 MP3 格式生效, 可以选： `64`, `128`, `192`, `256` ,  默认： `128` 
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
