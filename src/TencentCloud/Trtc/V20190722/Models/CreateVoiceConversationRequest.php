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
 * CreateVoiceConversation请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
 * @method string getRoomId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，对话的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
 * @method void setRoomId(string $RoomId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，对话的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
 * @method integer getRoomIdType() 获取<p>房间信息RoomType，必须和对话的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p><p>枚举值：</p><ul><li>0： 数字房间号</li><li>1： 字符串房间号</li></ul><p>默认值：0</p>
 * @method void setRoomIdType(integer $RoomIdType) 设置<p>房间信息RoomType，必须和对话的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p><p>枚举值：</p><ul><li>0： 数字房间号</li><li>1： 字符串房间号</li></ul><p>默认值：0</p>
 * @method VoiceConversationConfig getAgentConfig() 获取<p>对话机器人相关配置。</p>
 * @method void setAgentConfig(VoiceConversationConfig $AgentConfig) 设置<p>对话机器人相关配置。</p>
 * @method string getConversationMode() 获取<p>对话链路模式：<code>Cascade</code>（默认，三段式）/ <code>S2S</code>（端到端语音大模型）。</p><p>枚举值：</p><ul><li>Cascade： 默认，三段式</li><li>S2S： 端到端语音大模型</li></ul><p>默认值：Cascade</p>
 * @method void setConversationMode(string $ConversationMode) 设置<p>对话链路模式：<code>Cascade</code>（默认，三段式）/ <code>S2S</code>（端到端语音大模型）。</p><p>枚举值：</p><ul><li>Cascade： 默认，三段式</li><li>S2S： 端到端语音大模型</li></ul><p>默认值：Cascade</p>
 * @method VoiceConversationS2SConfig getS2SConfig() 获取<p>端到端语音大模型配置。<strong>仅 <code>S2S</code> 模式必填</strong>；<code>Cascade</code> 模式忽略。</p>
 * @method void setS2SConfig(VoiceConversationS2SConfig $S2SConfig) 设置<p>端到端语音大模型配置。<strong>仅 <code>S2S</code> 模式必填</strong>；<code>Cascade</code> 模式忽略。</p>
 * @method VoiceConversationSTTConfig getSTTConfig() 获取<p>语音识别配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
 * @method void setSTTConfig(VoiceConversationSTTConfig $STTConfig) 设置<p>语音识别配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
 * @method VoiceConversationLLMConfig getLLMConfig() 获取<p>大模型配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
 * @method void setLLMConfig(VoiceConversationLLMConfig $LLMConfig) 设置<p>大模型配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
 * @method VoiceConversationTTSConfig getTTSConfig() 获取<p>语音合成配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
 * @method void setTTSConfig(VoiceConversationTTSConfig $TTSConfig) 设置<p>语音合成配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
 * @method VoiceConversationDialogConfig getDialogConfig() 获取<p>对话控制配置，<code>S2S</code> 模式不支持填写该参数。</p>
 * @method void setDialogConfig(VoiceConversationDialogConfig $DialogConfig) 设置<p>对话控制配置，<code>S2S</code> 模式不支持填写该参数。</p>
 * @method VoiceConversationVisionConfig getVisionConfig() 获取<p>视觉理解配置，<code>S2S</code> 模式不支持填写该参数。</p>
 * @method void setVisionConfig(VoiceConversationVisionConfig $VisionConfig) 设置<p>视觉理解配置，<code>S2S</code> 模式不支持填写该参数。</p>
 */
class CreateVoiceConversationRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，对话的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>房间信息RoomType，必须和对话的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p><p>枚举值：</p><ul><li>0： 数字房间号</li><li>1： 字符串房间号</li></ul><p>默认值：0</p>
     */
    public $RoomIdType;

    /**
     * @var VoiceConversationConfig <p>对话机器人相关配置。</p>
     */
    public $AgentConfig;

    /**
     * @var string <p>对话链路模式：<code>Cascade</code>（默认，三段式）/ <code>S2S</code>（端到端语音大模型）。</p><p>枚举值：</p><ul><li>Cascade： 默认，三段式</li><li>S2S： 端到端语音大模型</li></ul><p>默认值：Cascade</p>
     */
    public $ConversationMode;

    /**
     * @var VoiceConversationS2SConfig <p>端到端语音大模型配置。<strong>仅 <code>S2S</code> 模式必填</strong>；<code>Cascade</code> 模式忽略。</p>
     */
    public $S2SConfig;

    /**
     * @var VoiceConversationSTTConfig <p>语音识别配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
     */
    public $STTConfig;

    /**
     * @var VoiceConversationLLMConfig <p>大模型配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
     */
    public $LLMConfig;

    /**
     * @var VoiceConversationTTSConfig <p>语音合成配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
     */
    public $TTSConfig;

    /**
     * @var VoiceConversationDialogConfig <p>对话控制配置，<code>S2S</code> 模式不支持填写该参数。</p>
     */
    public $DialogConfig;

    /**
     * @var VoiceConversationVisionConfig <p>视觉理解配置，<code>S2S</code> 模式不支持填写该参数。</p>
     */
    public $VisionConfig;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
     * @param string $RoomId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，对话的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
     * @param integer $RoomIdType <p>房间信息RoomType，必须和对话的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p><p>枚举值：</p><ul><li>0： 数字房间号</li><li>1： 字符串房间号</li></ul><p>默认值：0</p>
     * @param VoiceConversationConfig $AgentConfig <p>对话机器人相关配置。</p>
     * @param string $ConversationMode <p>对话链路模式：<code>Cascade</code>（默认，三段式）/ <code>S2S</code>（端到端语音大模型）。</p><p>枚举值：</p><ul><li>Cascade： 默认，三段式</li><li>S2S： 端到端语音大模型</li></ul><p>默认值：Cascade</p>
     * @param VoiceConversationS2SConfig $S2SConfig <p>端到端语音大模型配置。<strong>仅 <code>S2S</code> 模式必填</strong>；<code>Cascade</code> 模式忽略。</p>
     * @param VoiceConversationSTTConfig $STTConfig <p>语音识别配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
     * @param VoiceConversationLLMConfig $LLMConfig <p>大模型配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
     * @param VoiceConversationTTSConfig $TTSConfig <p>语音合成配置。<strong>仅 <code>Cascade</code> 模式必填</strong>；<code>S2S</code> 模式忽略。</p>
     * @param VoiceConversationDialogConfig $DialogConfig <p>对话控制配置，<code>S2S</code> 模式不支持填写该参数。</p>
     * @param VoiceConversationVisionConfig $VisionConfig <p>视觉理解配置，<code>S2S</code> 模式不支持填写该参数。</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new VoiceConversationConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("ConversationMode",$param) and $param["ConversationMode"] !== null) {
            $this->ConversationMode = $param["ConversationMode"];
        }

        if (array_key_exists("S2SConfig",$param) and $param["S2SConfig"] !== null) {
            $this->S2SConfig = new VoiceConversationS2SConfig();
            $this->S2SConfig->deserialize($param["S2SConfig"]);
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new VoiceConversationSTTConfig();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new VoiceConversationLLMConfig();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new VoiceConversationTTSConfig();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("DialogConfig",$param) and $param["DialogConfig"] !== null) {
            $this->DialogConfig = new VoiceConversationDialogConfig();
            $this->DialogConfig->deserialize($param["DialogConfig"]);
        }

        if (array_key_exists("VisionConfig",$param) and $param["VisionConfig"] !== null) {
            $this->VisionConfig = new VoiceConversationVisionConfig();
            $this->VisionConfig->deserialize($param["VisionConfig"]);
        }
    }
}
