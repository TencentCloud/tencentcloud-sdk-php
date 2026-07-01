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
 * 伴生转录TTS的语音参数配置
 *
 * @method string getVoiceId() 获取<p>音色 ID。对于不同的语言，需要填写特定的音色ID，如下所示：</p><ul><li>中文（&quot;zh&quot;）：男生音色&quot;v-male-s5NqE0rZ&quot;、女生音色&quot;v-female-R2s4N9qJ&quot;。</li><li>英语（&quot;en&quot;）：男生音色&quot;v-male-X6h4TvP9&quot;、女生音色&quot;v-female-P6q9LmR2&quot;。</li><li>日语（&quot;ja&quot;）：男生音色&quot;v-male-J3n8DxK2&quot;、女生音色&quot;v-female-J3k7NxR2&quot;。</li><li>粤语（&quot;yue&quot;）：男生音色&quot;v-male-D7p4XcL2&quot;、女生音色&quot;v-female-C5t1QxH9&quot;。</li><li>印度尼西亚语（&quot;id&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>泰语（&quot;th&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>越南语（&quot;vi&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>马来语（&quot;ms&quot;）：男生音色&quot;v-male-Q6p8ZxL3&quot;、女生音色&quot;v-female-C8k4NxL6&quot;。</li></ul><p>如果缺少满足您需求的音色，请联系我们的技术人员。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色 ID。对于不同的语言，需要填写特定的音色ID，如下所示：</p><ul><li>中文（&quot;zh&quot;）：男生音色&quot;v-male-s5NqE0rZ&quot;、女生音色&quot;v-female-R2s4N9qJ&quot;。</li><li>英语（&quot;en&quot;）：男生音色&quot;v-male-X6h4TvP9&quot;、女生音色&quot;v-female-P6q9LmR2&quot;。</li><li>日语（&quot;ja&quot;）：男生音色&quot;v-male-J3n8DxK2&quot;、女生音色&quot;v-female-J3k7NxR2&quot;。</li><li>粤语（&quot;yue&quot;）：男生音色&quot;v-male-D7p4XcL2&quot;、女生音色&quot;v-female-C5t1QxH9&quot;。</li><li>印度尼西亚语（&quot;id&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>泰语（&quot;th&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>越南语（&quot;vi&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>马来语（&quot;ms&quot;）：男生音色&quot;v-male-Q6p8ZxL3&quot;、女生音色&quot;v-female-C8k4NxL6&quot;。</li></ul><p>如果缺少满足您需求的音色，请联系我们的技术人员。</p>
 * @method float getSpeed() 获取<p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0。</p>
 * @method void setSpeed(float $Speed) 设置<p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0。</p>
 * @method float getVolume() 获取<p>音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0。</p>
 * @method void setVolume(float $Volume) 设置<p>音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0。</p>
 * @method integer getPitch() 获取<p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12]，默认0。</p>
 * @method void setPitch(integer $Pitch) 设置<p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12]，默认0。</p>
 */
class TTSVoice extends AbstractModel
{
    /**
     * @var string <p>音色 ID。对于不同的语言，需要填写特定的音色ID，如下所示：</p><ul><li>中文（&quot;zh&quot;）：男生音色&quot;v-male-s5NqE0rZ&quot;、女生音色&quot;v-female-R2s4N9qJ&quot;。</li><li>英语（&quot;en&quot;）：男生音色&quot;v-male-X6h4TvP9&quot;、女生音色&quot;v-female-P6q9LmR2&quot;。</li><li>日语（&quot;ja&quot;）：男生音色&quot;v-male-J3n8DxK2&quot;、女生音色&quot;v-female-J3k7NxR2&quot;。</li><li>粤语（&quot;yue&quot;）：男生音色&quot;v-male-D7p4XcL2&quot;、女生音色&quot;v-female-C5t1QxH9&quot;。</li><li>印度尼西亚语（&quot;id&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>泰语（&quot;th&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>越南语（&quot;vi&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>马来语（&quot;ms&quot;）：男生音色&quot;v-male-Q6p8ZxL3&quot;、女生音色&quot;v-female-C8k4NxL6&quot;。</li></ul><p>如果缺少满足您需求的音色，请联系我们的技术人员。</p>
     */
    public $VoiceId;

    /**
     * @var float <p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0。</p>
     */
    public $Speed;

    /**
     * @var float <p>音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0。</p>
     */
    public $Volume;

    /**
     * @var integer <p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12]，默认0。</p>
     */
    public $Pitch;

    /**
     * @param string $VoiceId <p>音色 ID。对于不同的语言，需要填写特定的音色ID，如下所示：</p><ul><li>中文（&quot;zh&quot;）：男生音色&quot;v-male-s5NqE0rZ&quot;、女生音色&quot;v-female-R2s4N9qJ&quot;。</li><li>英语（&quot;en&quot;）：男生音色&quot;v-male-X6h4TvP9&quot;、女生音色&quot;v-female-P6q9LmR2&quot;。</li><li>日语（&quot;ja&quot;）：男生音色&quot;v-male-J3n8DxK2&quot;、女生音色&quot;v-female-J3k7NxR2&quot;。</li><li>粤语（&quot;yue&quot;）：男生音色&quot;v-male-D7p4XcL2&quot;、女生音色&quot;v-female-C5t1QxH9&quot;。</li><li>印度尼西亚语（&quot;id&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>泰语（&quot;th&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>越南语（&quot;vi&quot;）：男生音色&quot;v-male-B5f2CnS3&quot;、女生音色&quot;v-female-W5n8HgB2&quot;。</li><li>马来语（&quot;ms&quot;）：男生音色&quot;v-male-Q6p8ZxL3&quot;、女生音色&quot;v-female-C8k4NxL6&quot;。</li></ul><p>如果缺少满足您需求的音色，请联系我们的技术人员。</p>
     * @param float $Speed <p>语速调节，0.5 为半速慢放，2.0 为两倍速快放，1.0 为正常语速，区间：[0.5, 2.0]，默认1.0。</p>
     * @param float $Volume <p>音量调节，0 为静音，10 为最大音量，建议保持默认值 1.0，区间：[0, 10]，默认1.0。</p>
     * @param integer $Pitch <p>音高调节，负值声音更低沉，正值声音更尖锐，0 为原始音高，区间 [-12, 12]，默认0。</p>
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
