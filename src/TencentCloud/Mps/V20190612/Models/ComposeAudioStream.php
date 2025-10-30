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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 音频流信息。
 *
 * @method string getCodec() 获取音频流的编码方式，可选值：
<li>AAC：AAC 编码（默认），用于容器为 mp4。</li>
<li>MP3：mp3 编码，用于容器为 mp3。</li>
 * @method void setCodec(string $Codec) 设置音频流的编码方式，可选值：
<li>AAC：AAC 编码（默认），用于容器为 mp4。</li>
<li>MP3：mp3 编码，用于容器为 mp3。</li>
 * @method integer getSampleRate() 获取音频流的采样率，单位：Hz，可选值：
<li>16000（默认）</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
 * @method void setSampleRate(integer $SampleRate) 设置音频流的采样率，单位：Hz，可选值：
<li>16000（默认）</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
 * @method integer getAudioChannel() 获取声道数，可选值：
<li>1：单声道 。</li>
<li>2：双声道（默认）。</li>
 * @method void setAudioChannel(integer $AudioChannel) 设置声道数，可选值：
<li>1：单声道 。</li>
<li>2：双声道（默认）。</li>
 * @method integer getBitrate() 获取参考码率，单位 kbps，范围：26~10000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将根据音频参数自动采用合适的码率。
 * @method void setBitrate(integer $Bitrate) 设置参考码率，单位 kbps，范围：26~10000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将根据音频参数自动采用合适的码率。
 */
class ComposeAudioStream extends AbstractModel
{
    /**
     * @var string 音频流的编码方式，可选值：
<li>AAC：AAC 编码（默认），用于容器为 mp4。</li>
<li>MP3：mp3 编码，用于容器为 mp3。</li>
     */
    public $Codec;

    /**
     * @var integer 音频流的采样率，单位：Hz，可选值：
<li>16000（默认）</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
     */
    public $SampleRate;

    /**
     * @var integer 声道数，可选值：
<li>1：单声道 。</li>
<li>2：双声道（默认）。</li>
     */
    public $AudioChannel;

    /**
     * @var integer 参考码率，单位 kbps，范围：26~10000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将根据音频参数自动采用合适的码率。
     */
    public $Bitrate;

    /**
     * @param string $Codec 音频流的编码方式，可选值：
<li>AAC：AAC 编码（默认），用于容器为 mp4。</li>
<li>MP3：mp3 编码，用于容器为 mp3。</li>
     * @param integer $SampleRate 音频流的采样率，单位：Hz，可选值：
<li>16000（默认）</li>
<li>32000</li>
<li>44100</li>
<li>48000</li>
     * @param integer $AudioChannel 声道数，可选值：
<li>1：单声道 。</li>
<li>2：双声道（默认）。</li>
     * @param integer $Bitrate 参考码率，单位 kbps，范围：26~10000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将根据音频参数自动采用合适的码率。
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
