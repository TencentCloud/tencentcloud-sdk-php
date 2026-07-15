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
 * 音频流配置参数
 *
 * @method string getCodec() 获取<p>音频流的编码格式。<br>当外层参数 Container 为 mp3 时，可选值为：</p><li>libmp3lame。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>libfdk_aac；</li><li>libmp3lame；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>libfdk_aac：更适合 mp4；</li><li>libmp3lame：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>libfdk_aac。</li>当外层参数 Format 为 HLS 或 MPEG-DASH 时，可选值为：<li>libfdk_aac。</li>当外层参数 Container 为 wav 时，可选值为：<li>pcm16。</li>
 * @method void setCodec(string $Codec) 设置<p>音频流的编码格式。<br>当外层参数 Container 为 mp3 时，可选值为：</p><li>libmp3lame。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>libfdk_aac；</li><li>libmp3lame；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>libfdk_aac：更适合 mp4；</li><li>libmp3lame：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>libfdk_aac。</li>当外层参数 Format 为 HLS 或 MPEG-DASH 时，可选值为：<li>libfdk_aac。</li>当外层参数 Container 为 wav 时，可选值为：<li>pcm16。</li>
 * @method integer getBitrate() 获取<p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。 当取值为 0，表示由云点播自动设置码率。</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。 当取值为 0，表示由云点播自动设置码率。</p>
 * @method integer getSampleRate() 获取<p>音频流的采样率，可选值：</p><li>16000，仅当 Codec 为 pcm16 时可选。</li><li>32000</li><li>44100</li><li>48000</li>单位：Hz。
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频流的采样率，可选值：</p><li>16000，仅当 Codec 为 pcm16 时可选。</li><li>32000</li><li>44100</li><li>48000</li>单位：Hz。
 * @method integer getAudioChannel() 获取<p>音频通道，可选值：</p><li>1：单通道</li><li>2：双通道</li><li>6：立体声</li><li>0：音频声道数和原始音频保持一致</li>当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为立体声。
 * @method void setAudioChannel(integer $AudioChannel) 设置<p>音频通道，可选值：</p><li>1：单通道</li><li>2：双通道</li><li>6：立体声</li><li>0：音频声道数和原始音频保持一致</li>当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为立体声。
 * @method array getStreamSelects() 获取<p>指定输出要保留的音频轨道。默认是全部保留源的。</p><p>仅当在参数 OverrideParameter 中指定时生效，其他情况下不生效。</p>
 * @method void setStreamSelects(array $StreamSelects) 设置<p>指定输出要保留的音频轨道。默认是全部保留源的。</p><p>仅当在参数 OverrideParameter 中指定时生效，其他情况下不生效。</p>
 */
class AudioTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string <p>音频流的编码格式。<br>当外层参数 Container 为 mp3 时，可选值为：</p><li>libmp3lame。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>libfdk_aac；</li><li>libmp3lame；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>libfdk_aac：更适合 mp4；</li><li>libmp3lame：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>libfdk_aac。</li>当外层参数 Format 为 HLS 或 MPEG-DASH 时，可选值为：<li>libfdk_aac。</li>当外层参数 Container 为 wav 时，可选值为：<li>pcm16。</li>
     */
    public $Codec;

    /**
     * @var integer <p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。 当取值为 0，表示由云点播自动设置码率。</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>音频流的采样率，可选值：</p><li>16000，仅当 Codec 为 pcm16 时可选。</li><li>32000</li><li>44100</li><li>48000</li>单位：Hz。
     */
    public $SampleRate;

    /**
     * @var integer <p>音频通道，可选值：</p><li>1：单通道</li><li>2：双通道</li><li>6：立体声</li><li>0：音频声道数和原始音频保持一致</li>当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为立体声。
     */
    public $AudioChannel;

    /**
     * @var array <p>指定输出要保留的音频轨道。默认是全部保留源的。</p><p>仅当在参数 OverrideParameter 中指定时生效，其他情况下不生效。</p>
     */
    public $StreamSelects;

    /**
     * @param string $Codec <p>音频流的编码格式。<br>当外层参数 Container 为 mp3 时，可选值为：</p><li>libmp3lame。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>libfdk_aac；</li><li>libmp3lame；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>libfdk_aac：更适合 mp4；</li><li>libmp3lame：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>libfdk_aac。</li>当外层参数 Format 为 HLS 或 MPEG-DASH 时，可选值为：<li>libfdk_aac。</li>当外层参数 Container 为 wav 时，可选值为：<li>pcm16。</li>
     * @param integer $Bitrate <p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。 当取值为 0，表示由云点播自动设置码率。</p>
     * @param integer $SampleRate <p>音频流的采样率，可选值：</p><li>16000，仅当 Codec 为 pcm16 时可选。</li><li>32000</li><li>44100</li><li>48000</li>单位：Hz。
     * @param integer $AudioChannel <p>音频通道，可选值：</p><li>1：单通道</li><li>2：双通道</li><li>6：立体声</li><li>0：音频声道数和原始音频保持一致</li>当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为立体声。
     * @param array $StreamSelects <p>指定输出要保留的音频轨道。默认是全部保留源的。</p><p>仅当在参数 OverrideParameter 中指定时生效，其他情况下不生效。</p>
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

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("StreamSelects",$param) and $param["StreamSelects"] !== null) {
            $this->StreamSelects = $param["StreamSelects"];
        }
    }
}
