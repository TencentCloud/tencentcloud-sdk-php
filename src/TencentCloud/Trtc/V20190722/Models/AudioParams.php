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
 * 录制音频转码参数。
 *
 * @method integer getSampleRate() 获取<p>音频采样率枚举值:(注意1 代表48000HZ, 2 代表44100HZ, 3 代表16000HZ)<br>1：48000Hz（默认）;<br>2：44100Hz<br>3：16000Hz。</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频采样率枚举值:(注意1 代表48000HZ, 2 代表44100HZ, 3 代表16000HZ)<br>1：48000Hz（默认）;<br>2：44100Hz<br>3：16000Hz。</p>
 * @method integer getChannel() 获取<p>声道数枚举值:<br>1：单声道;<br>2：双声道（默认）。</p>
 * @method void setChannel(integer $Channel) 设置<p>声道数枚举值:<br>1：单声道;<br>2：双声道（默认）。</p>
 * @method integer getBitRate() 获取<p>音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。</p>
 * @method void setBitRate(integer $BitRate) 设置<p>音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。</p>
 */
class AudioParams extends AbstractModel
{
    /**
     * @var integer <p>音频采样率枚举值:(注意1 代表48000HZ, 2 代表44100HZ, 3 代表16000HZ)<br>1：48000Hz（默认）;<br>2：44100Hz<br>3：16000Hz。</p>
     */
    public $SampleRate;

    /**
     * @var integer <p>声道数枚举值:<br>1：单声道;<br>2：双声道（默认）。</p>
     */
    public $Channel;

    /**
     * @var integer <p>音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。</p>
     */
    public $BitRate;

    /**
     * @param integer $SampleRate <p>音频采样率枚举值:(注意1 代表48000HZ, 2 代表44100HZ, 3 代表16000HZ)<br>1：48000Hz（默认）;<br>2：44100Hz<br>3：16000Hz。</p>
     * @param integer $Channel <p>声道数枚举值:<br>1：单声道;<br>2：双声道（默认）。</p>
     * @param integer $BitRate <p>音频码率: 取值范围[32000, 128000] ，单位bps，默认64000bps。</p>
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
