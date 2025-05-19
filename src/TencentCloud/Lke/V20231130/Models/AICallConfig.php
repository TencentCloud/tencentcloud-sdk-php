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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能通话
 *
 * @method boolean getEnableVoiceInteract() 获取启用语音互动功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableVoiceInteract(boolean $EnableVoiceInteract) 设置启用语音互动功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableVoiceCall() 获取启用语音通话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableVoiceCall(boolean $EnableVoiceCall) 设置启用语音通话
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableDigitalHuman() 获取启用数智人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDigitalHuman(boolean $EnableDigitalHuman) 设置启用数智人
注意：此字段可能返回 null，表示取不到有效值。
 * @method VoiceConfig getVoice() 获取音色配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoice(VoiceConfig $Voice) 设置音色配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DigitalHumanConfig getDigitalHuman() 获取数智人配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDigitalHuman(DigitalHumanConfig $DigitalHuman) 设置数智人配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AICallConfig extends AbstractModel
{
    /**
     * @var boolean 启用语音互动功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableVoiceInteract;

    /**
     * @var boolean 启用语音通话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableVoiceCall;

    /**
     * @var boolean 启用数智人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDigitalHuman;

    /**
     * @var VoiceConfig 音色配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Voice;

    /**
     * @var DigitalHumanConfig 数智人配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DigitalHuman;

    /**
     * @param boolean $EnableVoiceInteract 启用语音互动功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableVoiceCall 启用语音通话
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableDigitalHuman 启用数智人
注意：此字段可能返回 null，表示取不到有效值。
     * @param VoiceConfig $Voice 音色配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DigitalHumanConfig $DigitalHuman 数智人配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EnableVoiceInteract",$param) and $param["EnableVoiceInteract"] !== null) {
            $this->EnableVoiceInteract = $param["EnableVoiceInteract"];
        }

        if (array_key_exists("EnableVoiceCall",$param) and $param["EnableVoiceCall"] !== null) {
            $this->EnableVoiceCall = $param["EnableVoiceCall"];
        }

        if (array_key_exists("EnableDigitalHuman",$param) and $param["EnableDigitalHuman"] !== null) {
            $this->EnableDigitalHuman = $param["EnableDigitalHuman"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new VoiceConfig();
            $this->Voice->deserialize($param["Voice"]);
        }

        if (array_key_exists("DigitalHuman",$param) and $param["DigitalHuman"] !== null) {
            $this->DigitalHuman = new DigitalHumanConfig();
            $this->DigitalHuman->deserialize($param["DigitalHuman"]);
        }
    }
}
