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
 * AI对话相关配置。
 *
 * @method integer getInterruptMode() 获取<p>打断模式。</p><p>枚举值：</p><ul><li>0： 自动打断（ASR 出文本打断 TTS，配合InterruptSpeechDuration 使用，默认）</li><li>1： 手动打断（仅服务端/客户端接口 Interrupt 命令打断）</li><li>2： 关键词打断</li></ul>
 * @method void setInterruptMode(integer $InterruptMode) 设置<p>打断模式。</p><p>枚举值：</p><ul><li>0： 自动打断（ASR 出文本打断 TTS，配合InterruptSpeechDuration 使用，默认）</li><li>1： 手动打断（仅服务端/客户端接口 Interrupt 命令打断）</li><li>2： 关键词打断</li></ul>
 * @method integer getInterruptSpeechDuration() 获取<p>自动打断的最小用户语音持续时长（毫秒），默认 200</p><p>单位：毫秒</p>
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) 设置<p>自动打断的最小用户语音持续时长（毫秒），默认 200</p><p>单位：毫秒</p>
 * @method array getInterruptKeywords() 获取<p>预设的关键词，关键词打断，适用于需要用户明确表达意图才能打断的场景。最多支持128个关键词，InterruptMode 为2时生效，</p>
 * @method void setInterruptKeywords(array $InterruptKeywords) 设置<p>预设的关键词，关键词打断，适用于需要用户明确表达意图才能打断的场景。最多支持128个关键词，InterruptMode 为2时生效，</p>
 * @method integer getSilenceFollowUp() 获取<p>用户静音多久后 Bot 主动追问，范围 0~300，0 表示关闭（默认）。</p><p>单位：秒</p>
 * @method void setSilenceFollowUp(integer $SilenceFollowUp) 设置<p>用户静音多久后 Bot 主动追问，范围 0~300，0 表示关闭（默认）。</p><p>单位：秒</p>
 * @method string getSilenceFollowUpText() 获取<p>主动追问的文本。</p>
 * @method void setSilenceFollowUpText(string $SilenceFollowUpText) 设置<p>主动追问的文本。</p>
 * @method string getWelcomeMessage() 获取<p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
 * @method void setWelcomeMessage(string $WelcomeMessage) 设置<p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
 */
class VoiceConversationDialogConfig extends AbstractModel
{
    /**
     * @var integer <p>打断模式。</p><p>枚举值：</p><ul><li>0： 自动打断（ASR 出文本打断 TTS，配合InterruptSpeechDuration 使用，默认）</li><li>1： 手动打断（仅服务端/客户端接口 Interrupt 命令打断）</li><li>2： 关键词打断</li></ul>
     */
    public $InterruptMode;

    /**
     * @var integer <p>自动打断的最小用户语音持续时长（毫秒），默认 200</p><p>单位：毫秒</p>
     */
    public $InterruptSpeechDuration;

    /**
     * @var array <p>预设的关键词，关键词打断，适用于需要用户明确表达意图才能打断的场景。最多支持128个关键词，InterruptMode 为2时生效，</p>
     */
    public $InterruptKeywords;

    /**
     * @var integer <p>用户静音多久后 Bot 主动追问，范围 0~300，0 表示关闭（默认）。</p><p>单位：秒</p>
     */
    public $SilenceFollowUp;

    /**
     * @var string <p>主动追问的文本。</p>
     */
    public $SilenceFollowUpText;

    /**
     * @var string <p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
     */
    public $WelcomeMessage;

    /**
     * @param integer $InterruptMode <p>打断模式。</p><p>枚举值：</p><ul><li>0： 自动打断（ASR 出文本打断 TTS，配合InterruptSpeechDuration 使用，默认）</li><li>1： 手动打断（仅服务端/客户端接口 Interrupt 命令打断）</li><li>2： 关键词打断</li></ul>
     * @param integer $InterruptSpeechDuration <p>自动打断的最小用户语音持续时长（毫秒），默认 200</p><p>单位：毫秒</p>
     * @param array $InterruptKeywords <p>预设的关键词，关键词打断，适用于需要用户明确表达意图才能打断的场景。最多支持128个关键词，InterruptMode 为2时生效，</p>
     * @param integer $SilenceFollowUp <p>用户静音多久后 Bot 主动追问，范围 0~300，0 表示关闭（默认）。</p><p>单位：秒</p>
     * @param string $SilenceFollowUpText <p>主动追问的文本。</p>
     * @param string $WelcomeMessage <p>主播首次进房主动播报的欢迎语，主播退房后再次进房也会播报。</p>
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
        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptSpeechDuration",$param) and $param["InterruptSpeechDuration"] !== null) {
            $this->InterruptSpeechDuration = $param["InterruptSpeechDuration"];
        }

        if (array_key_exists("InterruptKeywords",$param) and $param["InterruptKeywords"] !== null) {
            $this->InterruptKeywords = $param["InterruptKeywords"];
        }

        if (array_key_exists("SilenceFollowUp",$param) and $param["SilenceFollowUp"] !== null) {
            $this->SilenceFollowUp = $param["SilenceFollowUp"];
        }

        if (array_key_exists("SilenceFollowUpText",$param) and $param["SilenceFollowUpText"] !== null) {
            $this->SilenceFollowUpText = $param["SilenceFollowUpText"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }
    }
}
