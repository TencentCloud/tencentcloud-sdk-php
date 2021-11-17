<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编码配置中的音频设置
 *
 * @method string getCodec() 获取音频流的编码格式，可选值：
AAC：AAC 编码。

默认值：AAC。
 * @method void setCodec(string $Codec) 设置音频流的编码格式，可选值：
AAC：AAC 编码。

默认值：AAC。
 * @method integer getBitrate() 获取音频码率，单位：bps。
默认值：64K。
 * @method void setBitrate(integer $Bitrate) 设置音频码率，单位：bps。
默认值：64K。
 * @method integer getChannels() 获取音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
默认值：2。
 * @method void setChannels(integer $Channels) 设置音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
默认值：2。
 * @method integer getSampleRate() 获取音频流的采样率，仅支持 16000； 32000； 44100； 48000。单位：Hz。 
默认值：16000。
 * @method void setSampleRate(integer $SampleRate) 设置音频流的采样率，仅支持 16000； 32000； 44100； 48000。单位：Hz。 
默认值：16000。
 */
class VideoEncodingPresetAudioSetting extends AbstractModel
{
    /**
     * @var string 音频流的编码格式，可选值：
AAC：AAC 编码。

默认值：AAC。
     */
    public $Codec;

    /**
     * @var integer 音频码率，单位：bps。
默认值：64K。
     */
    public $Bitrate;

    /**
     * @var integer 音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
默认值：2。
     */
    public $Channels;

    /**
     * @var integer 音频流的采样率，仅支持 16000； 32000； 44100； 48000。单位：Hz。 
默认值：16000。
     */
    public $SampleRate;

    /**
     * @param string $Codec 音频流的编码格式，可选值：
AAC：AAC 编码。

默认值：AAC。
     * @param integer $Bitrate 音频码率，单位：bps。
默认值：64K。
     * @param integer $Channels 音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
默认值：2。
     * @param integer $SampleRate 音频流的采样率，仅支持 16000； 32000； 44100； 48000。单位：Hz。 
默认值：16000。
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

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }
    }
}
