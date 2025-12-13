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
 * TTS的声音参数配置
 *
 * @method string getVoiceId() 获取 音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID
 * @method void setVoiceId(string $VoiceId) 设置 音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID
 * @method float getSpeed() 获取语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0
 * @method void setSpeed(float $Speed) 设置语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0
 * @method float getVolume() 获取 音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0
 * @method void setVolume(float $Volume) 设置 音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0
 * @method integer getPitch() 获取 音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0
 * @method void setPitch(integer $Pitch) 设置 音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0
 */
class Voice extends AbstractModel
{
    /**
     * @var string  音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID
     */
    public $VoiceId;

    /**
     * @var float 语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0
     */
    public $Speed;

    /**
     * @var float  音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0
     */
    public $Volume;

    /**
     * @var integer  音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0
     */
    public $Pitch;

    /**
     * @param string $VoiceId  音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID
     * @param float $Speed 语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0
     * @param float $Volume  音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0
     * @param integer $Pitch  音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Pitch",$param) and $param["Pitch"] !== null) {
            $this->Pitch = $param["Pitch"];
        }
    }
}
