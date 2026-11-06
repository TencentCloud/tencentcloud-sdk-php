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
 * ControlVoiceConversation请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
 * @method string getTaskId() 获取<p>对话任务的唯一Id，在启动对话成功后会返回。</p>
 * @method void setTaskId(string $TaskId) 设置<p>对话任务的唯一Id，在启动对话成功后会返回。</p>
 * @method string getCommand() 获取<p>控制指令。</p><p>枚举值：</p><ul><li>&quot;Interrupt&quot;： 强制打断</li><li>&quot;invokellm&quot;： 文本注入 LLM：向当前对话上下文注入一段文本，触发一轮 LLM 回复。<code>S2S</code>模式不支持该指令</li><li>invoketts： 文本注入TTS：向当前TTS注入文本，触发TTS播报。<code>S2S</code>模式不支持该指令</li></ul>
 * @method void setCommand(string $Command) 设置<p>控制指令。</p><p>枚举值：</p><ul><li>&quot;Interrupt&quot;： 强制打断</li><li>&quot;invokellm&quot;： 文本注入 LLM：向当前对话上下文注入一段文本，触发一轮 LLM 回复。<code>S2S</code>模式不支持该指令</li><li>invoketts： 文本注入TTS：向当前TTS注入文本，触发TTS播报。<code>S2S</code>模式不支持该指令</li></ul>
 * @method VoiceConversationInvokeLLM getInvokeLLM() 获取<p>注入LLM的配置，<code>Command=invokellm</code> 时必填</p>
 * @method void setInvokeLLM(VoiceConversationInvokeLLM $InvokeLLM) 设置<p>注入LLM的配置，<code>Command=invokellm</code> 时必填</p>
 * @method VoiceConversationInvokeTTS getInvokeTTS() 获取<p>注入TTS的配置，<code>Command=invoketts</code> 时必填</p>
 * @method void setInvokeTTS(VoiceConversationInvokeTTS $InvokeTTS) 设置<p>注入TTS的配置，<code>Command=invoketts</code> 时必填</p>
 */
class ControlVoiceConversationRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>对话任务的唯一Id，在启动对话成功后会返回。</p>
     */
    public $TaskId;

    /**
     * @var string <p>控制指令。</p><p>枚举值：</p><ul><li>&quot;Interrupt&quot;： 强制打断</li><li>&quot;invokellm&quot;： 文本注入 LLM：向当前对话上下文注入一段文本，触发一轮 LLM 回复。<code>S2S</code>模式不支持该指令</li><li>invoketts： 文本注入TTS：向当前TTS注入文本，触发TTS播报。<code>S2S</code>模式不支持该指令</li></ul>
     */
    public $Command;

    /**
     * @var VoiceConversationInvokeLLM <p>注入LLM的配置，<code>Command=invokellm</code> 时必填</p>
     */
    public $InvokeLLM;

    /**
     * @var VoiceConversationInvokeTTS <p>注入TTS的配置，<code>Command=invoketts</code> 时必填</p>
     */
    public $InvokeTTS;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
     * @param string $TaskId <p>对话任务的唯一Id，在启动对话成功后会返回。</p>
     * @param string $Command <p>控制指令。</p><p>枚举值：</p><ul><li>&quot;Interrupt&quot;： 强制打断</li><li>&quot;invokellm&quot;： 文本注入 LLM：向当前对话上下文注入一段文本，触发一轮 LLM 回复。<code>S2S</code>模式不支持该指令</li><li>invoketts： 文本注入TTS：向当前TTS注入文本，触发TTS播报。<code>S2S</code>模式不支持该指令</li></ul>
     * @param VoiceConversationInvokeLLM $InvokeLLM <p>注入LLM的配置，<code>Command=invokellm</code> 时必填</p>
     * @param VoiceConversationInvokeTTS $InvokeTTS <p>注入TTS的配置，<code>Command=invoketts</code> 时必填</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("InvokeLLM",$param) and $param["InvokeLLM"] !== null) {
            $this->InvokeLLM = new VoiceConversationInvokeLLM();
            $this->InvokeLLM->deserialize($param["InvokeLLM"]);
        }

        if (array_key_exists("InvokeTTS",$param) and $param["InvokeTTS"] !== null) {
            $this->InvokeTTS = new VoiceConversationInvokeTTS();
            $this->InvokeTTS->deserialize($param["InvokeTTS"]);
        }
    }
}
