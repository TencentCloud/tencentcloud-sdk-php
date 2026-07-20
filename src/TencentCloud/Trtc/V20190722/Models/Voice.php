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
 * @method string getVoiceId() 获取<p>音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID</p>
 * @method float getSpeed() 获取<p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0</p>
 * @method void setSpeed(float $Speed) 设置<p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0</p>
 * @method float getVolume() 获取<p>音量调节，默认1.0，10 为最大音量，建议保持默认值 1.0，区间：(0, 10]</p>
 * @method void setVolume(float $Volume) 设置<p>音量调节，默认1.0，10 为最大音量，建议保持默认值 1.0，区间：(0, 10]</p>
 * @method integer getPitch() 获取<p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0</p>
 * @method void setPitch(integer $Pitch) 设置<p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0</p>
 * @method string getEmotion() 获取<p>情绪控制，目前仅flow_01_ex模型支持</p><p>枚举值：</p><ul><li>happy： 高兴</li><li>sad： 悲伤</li><li>angry： 愤怒</li><li>fearful： 害怕</li><li>disgusted： 厌恶</li><li>surprised： 惊讶</li><li>calm： 中性</li><li>fluent： 生动</li><li>whisper： 低语</li></ul>
 * @method void setEmotion(string $Emotion) 设置<p>情绪控制，目前仅flow_01_ex模型支持</p><p>枚举值：</p><ul><li>happy： 高兴</li><li>sad： 悲伤</li><li>angry： 愤怒</li><li>fearful： 害怕</li><li>disgusted： 厌恶</li><li>surprised： 惊讶</li><li>calm： 中性</li><li>fluent： 生动</li><li>whisper： 低语</li></ul>
 */
class Voice extends AbstractModel
{
    /**
     * @var string <p>音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID</p>
     */
    public $VoiceId;

    /**
     * @var float <p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0</p>
     */
    public $Speed;

    /**
     * @var float <p>音量调节，默认1.0，10 为最大音量，建议保持默认值 1.0，区间：(0, 10]</p>
     */
    public $Volume;

    /**
     * @var integer <p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0</p>
     */
    public $Pitch;

    /**
     * @var string <p>情绪控制，目前仅flow_01_ex模型支持</p><p>枚举值：</p><ul><li>happy： 高兴</li><li>sad： 悲伤</li><li>angry： 愤怒</li><li>fearful： 害怕</li><li>disgusted： 厌恶</li><li>surprised： 惊讶</li><li>calm： 中性</li><li>fluent： 生动</li><li>whisper： 低语</li></ul>
     */
    public $Emotion;

    /**
     * @param string $VoiceId <p>音色 ID，可从音色列表获取，或使用声音克隆生成的自定义音色 ID</p>
     * @param float $Speed <p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0</p>
     * @param float $Volume <p>音量调节，默认1.0，10 为最大音量，建议保持默认值 1.0，区间：(0, 10]</p>
     * @param integer $Pitch <p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12],  默认0</p>
     * @param string $Emotion <p>情绪控制，目前仅flow_01_ex模型支持</p><p>枚举值：</p><ul><li>happy： 高兴</li><li>sad： 悲伤</li><li>angry： 愤怒</li><li>fearful： 害怕</li><li>disgusted： 厌恶</li><li>surprised： 惊讶</li><li>calm： 中性</li><li>fluent： 生动</li><li>whisper： 低语</li></ul>
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

        if (array_key_exists("Emotion",$param) and $param["Emotion"] !== null) {
            $this->Emotion = $param["Emotion"];
        }
    }
}
