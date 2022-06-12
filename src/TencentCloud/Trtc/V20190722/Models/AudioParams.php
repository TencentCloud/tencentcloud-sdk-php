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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制音频转码参数。
 *
 * @method integer getSampleRate() 获取音频采样率:
1：48000Hz（默认）;
2：44100Hz
3：16000Hz。
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率:
1：48000Hz（默认）;
2：44100Hz
3：16000Hz。
 * @method integer getChannel() 获取声道数:
1：单声道;
2：双声道（默认）。
 * @method void setChannel(integer $Channel) 设置声道数:
1：单声道;
2：双声道（默认）。
 * @method integer getBitRate() 获取音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。
 * @method void setBitRate(integer $BitRate) 设置音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。
 */
class AudioParams extends AbstractModel
{
    /**
     * @var integer 音频采样率:
1：48000Hz（默认）;
2：44100Hz
3：16000Hz。
     */
    public $SampleRate;

    /**
     * @var integer 声道数:
1：单声道;
2：双声道（默认）。
     */
    public $Channel;

    /**
     * @var integer 音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。
     */
    public $BitRate;

    /**
     * @param integer $SampleRate 音频采样率:
1：48000Hz（默认）;
2：44100Hz
3：16000Hz。
     * @param integer $Channel 声道数:
1：单声道;
2：双声道（默认）。
     * @param integer $BitRate 音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。
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
        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }
    }
}
