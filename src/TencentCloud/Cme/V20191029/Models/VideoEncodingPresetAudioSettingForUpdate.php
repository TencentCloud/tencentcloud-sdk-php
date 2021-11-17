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
 * 视频编码配置中的音频设置更新信息
 *
 * @method string getBitrate() 获取音频码率，单位：bps。
不填则不修改。
 * @method void setBitrate(string $Bitrate) 设置音频码率，单位：bps。
不填则不修改。
 * @method integer getChannels() 获取音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
不填则不修改。
 * @method void setChannels(integer $Channels) 设置音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
不填则不修改。
 * @method integer getSampleRate() 获取音频流的采样率，目前仅支持： 16000； 32000； 44100； 48000。单位：Hz。
不填则不修改。
 * @method void setSampleRate(integer $SampleRate) 设置音频流的采样率，目前仅支持： 16000； 32000； 44100； 48000。单位：Hz。
不填则不修改。
 */
class VideoEncodingPresetAudioSettingForUpdate extends AbstractModel
{
    /**
     * @var string 音频码率，单位：bps。
不填则不修改。
     */
    public $Bitrate;

    /**
     * @var integer 音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
不填则不修改。
     */
    public $Channels;

    /**
     * @var integer 音频流的采样率，目前仅支持： 16000； 32000； 44100； 48000。单位：Hz。
不填则不修改。
     */
    public $SampleRate;

    /**
     * @param string $Bitrate 音频码率，单位：bps。
不填则不修改。
     * @param integer $Channels 音频声道数，可选值： 
<li>1：单声道；</li>
<li>2：双声道。</li> 
不填则不修改。
     * @param integer $SampleRate 音频流的采样率，目前仅支持： 16000； 32000； 44100； 48000。单位：Hz。
不填则不修改。
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
