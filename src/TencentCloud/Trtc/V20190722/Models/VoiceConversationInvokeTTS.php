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
 * 调用服务端主动发起请求到TTS
 *
 * @method string getContent() 获取<p>注入的内容。</p>
 * @method void setContent(string $Content) 设置<p>注入的内容。</p>
 * @method integer getPriority() 获取<p>优先级。如果不处于对话中则将注入的内容送给TTS，否则由优先级决定。</p><p>枚举值：</p><ul><li>0： 高优先级，打断当前对话，并清空等待队列将注入的内容送给TTS。</li><li>1： 中优先级，不会打断当前对话，清空等待队列将注入的内容排队。如果不处于对话中则将注入的内容排队。</li><li>2： 低优先级，丢弃注入的内容。</li></ul><p>默认值：0</p><p>InvokeLLM和InvokeTTS的任务队列是同一队列，最多支持一个Invoke事件排队。</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级。如果不处于对话中则将注入的内容送给TTS，否则由优先级决定。</p><p>枚举值：</p><ul><li>0： 高优先级，打断当前对话，并清空等待队列将注入的内容送给TTS。</li><li>1： 中优先级，不会打断当前对话，清空等待队列将注入的内容排队。如果不处于对话中则将注入的内容排队。</li><li>2： 低优先级，丢弃注入的内容。</li></ul><p>默认值：0</p><p>InvokeLLM和InvokeTTS的任务队列是同一队列，最多支持一个Invoke事件排队。</p>
 */
class VoiceConversationInvokeTTS extends AbstractModel
{
    /**
     * @var string <p>注入的内容。</p>
     */
    public $Content;

    /**
     * @var integer <p>优先级。如果不处于对话中则将注入的内容送给TTS，否则由优先级决定。</p><p>枚举值：</p><ul><li>0： 高优先级，打断当前对话，并清空等待队列将注入的内容送给TTS。</li><li>1： 中优先级，不会打断当前对话，清空等待队列将注入的内容排队。如果不处于对话中则将注入的内容排队。</li><li>2： 低优先级，丢弃注入的内容。</li></ul><p>默认值：0</p><p>InvokeLLM和InvokeTTS的任务队列是同一队列，最多支持一个Invoke事件排队。</p>
     */
    public $Priority;

    /**
     * @param string $Content <p>注入的内容。</p>
     * @param integer $Priority <p>优先级。如果不处于对话中则将注入的内容送给TTS，否则由优先级决定。</p><p>枚举值：</p><ul><li>0： 高优先级，打断当前对话，并清空等待队列将注入的内容送给TTS。</li><li>1： 中优先级，不会打断当前对话，清空等待队列将注入的内容排队。如果不处于对话中则将注入的内容排队。</li><li>2： 低优先级，丢弃注入的内容。</li></ul><p>默认值：0</p><p>InvokeLLM和InvokeTTS的任务队列是同一队列，最多支持一个Invoke事件排队。</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
