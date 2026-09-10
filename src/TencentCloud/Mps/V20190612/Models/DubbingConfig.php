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
 * dubbing任务配置
 *
 * @method string getDubbingMode() 获取<p>配音类型，可选值：FullAutoEmotionClone：全自动高情感克隆配音；RoleBasedSmartDubbing：按角色智能配音；SingleVoice：指定单一音色；</p>
 * @method void setDubbingMode(string $DubbingMode) 设置<p>配音类型，可选值：FullAutoEmotionClone：全自动高情感克隆配音；RoleBasedSmartDubbing：按角色智能配音；SingleVoice：指定单一音色；</p>
 * @method integer getBackgroundVolume() 获取<p>背景音音量，范围0-100</p><p>默认值：80</p>
 * @method void setBackgroundVolume(integer $BackgroundVolume) 设置<p>背景音音量，范围0-100</p><p>默认值：80</p>
 * @method string getSecondaryTuning() 获取<p>二次微调开关，可选值：<br>ON: 开启二次微调；<br>OFF: 不开启二次微调；</p><p>默认值：OFF</p><p>仅 RoleBasedSmartDubbing 时允许设为 ON</p>
 * @method void setSecondaryTuning(string $SecondaryTuning) 设置<p>二次微调开关，可选值：<br>ON: 开启二次微调；<br>OFF: 不开启二次微调；</p><p>默认值：OFF</p><p>仅 RoleBasedSmartDubbing 时允许设为 ON</p>
 * @method string getVoiceId() 获取<p>指定音色</p><p>仅 SingleVoice 时有效且 Create 必填</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>指定音色</p><p>仅 SingleVoice 时有效且 Create 必填</p>
 * @method string getDubbingVersion() 获取<p>配音版本，可选值：v1，v2</p><p>默认值：v2</p><p>只在（FullAutoEmotionClone：全自动高情感克隆配音）模式下生效</p>
 * @method void setDubbingVersion(string $DubbingVersion) 设置<p>配音版本，可选值：v1，v2</p><p>默认值：v2</p><p>只在（FullAutoEmotionClone：全自动高情感克隆配音）模式下生效</p>
 */
class DubbingConfig extends AbstractModel
{
    /**
     * @var string <p>配音类型，可选值：FullAutoEmotionClone：全自动高情感克隆配音；RoleBasedSmartDubbing：按角色智能配音；SingleVoice：指定单一音色；</p>
     */
    public $DubbingMode;

    /**
     * @var integer <p>背景音音量，范围0-100</p><p>默认值：80</p>
     */
    public $BackgroundVolume;

    /**
     * @var string <p>二次微调开关，可选值：<br>ON: 开启二次微调；<br>OFF: 不开启二次微调；</p><p>默认值：OFF</p><p>仅 RoleBasedSmartDubbing 时允许设为 ON</p>
     */
    public $SecondaryTuning;

    /**
     * @var string <p>指定音色</p><p>仅 SingleVoice 时有效且 Create 必填</p>
     */
    public $VoiceId;

    /**
     * @var string <p>配音版本，可选值：v1，v2</p><p>默认值：v2</p><p>只在（FullAutoEmotionClone：全自动高情感克隆配音）模式下生效</p>
     */
    public $DubbingVersion;

    /**
     * @param string $DubbingMode <p>配音类型，可选值：FullAutoEmotionClone：全自动高情感克隆配音；RoleBasedSmartDubbing：按角色智能配音；SingleVoice：指定单一音色；</p>
     * @param integer $BackgroundVolume <p>背景音音量，范围0-100</p><p>默认值：80</p>
     * @param string $SecondaryTuning <p>二次微调开关，可选值：<br>ON: 开启二次微调；<br>OFF: 不开启二次微调；</p><p>默认值：OFF</p><p>仅 RoleBasedSmartDubbing 时允许设为 ON</p>
     * @param string $VoiceId <p>指定音色</p><p>仅 SingleVoice 时有效且 Create 必填</p>
     * @param string $DubbingVersion <p>配音版本，可选值：v1，v2</p><p>默认值：v2</p><p>只在（FullAutoEmotionClone：全自动高情感克隆配音）模式下生效</p>
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
        if (array_key_exists("DubbingMode",$param) and $param["DubbingMode"] !== null) {
            $this->DubbingMode = $param["DubbingMode"];
        }

        if (array_key_exists("BackgroundVolume",$param) and $param["BackgroundVolume"] !== null) {
            $this->BackgroundVolume = $param["BackgroundVolume"];
        }

        if (array_key_exists("SecondaryTuning",$param) and $param["SecondaryTuning"] !== null) {
            $this->SecondaryTuning = $param["SecondaryTuning"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("DubbingVersion",$param) and $param["DubbingVersion"] !== null) {
            $this->DubbingVersion = $param["DubbingVersion"];
        }
    }
}
