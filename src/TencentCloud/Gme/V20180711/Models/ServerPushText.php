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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务端控制AI对话机器人播报指定文本
 *
 * @method string getText() 获取服务端推送播报文本
 * @method void setText(string $Text) 设置服务端推送播报文本
 * @method boolean getInterrupt() 获取是否允许该文本打断机器人说话
 * @method void setInterrupt(boolean $Interrupt) 设置是否允许该文本打断机器人说话
 * @method boolean getStopAfterPlay() 获取播报完文本后，是否自动关闭对话任务
 * @method void setStopAfterPlay(boolean $StopAfterPlay) 设置播报完文本后，是否自动关闭对话任务
 * @method string getAudio() 获取服务端推送播报音频
    格式说明：音频必须为单声道，采样率必须跟对应TTS的采样率保持一致，编码为Base64字符串。
    输入规则：当提供Audio字段时，将不接受Text字段的输入。系统将直接播放Audio字段中的音频内容。
 * @method void setAudio(string $Audio) 设置服务端推送播报音频
    格式说明：音频必须为单声道，采样率必须跟对应TTS的采样率保持一致，编码为Base64字符串。
    输入规则：当提供Audio字段时，将不接受Text字段的输入。系统将直接播放Audio字段中的音频内容。
 * @method integer getDropMode() 获取默认为0，仅在Interrupt为false时有效
- 0表示当前有交互发生时，会丢弃Interrupt为false的消息
- 1表示当前有交互发生时，不会丢弃Interrupt为false的消息，而是缓存下来，等待当前交互结束后，再去处理

注意：DropMode为1时，允许缓存多个消息，如果后续出现了打断，缓存的消息会被清空
 * @method void setDropMode(integer $DropMode) 设置默认为0，仅在Interrupt为false时有效
- 0表示当前有交互发生时，会丢弃Interrupt为false的消息
- 1表示当前有交互发生时，不会丢弃Interrupt为false的消息，而是缓存下来，等待当前交互结束后，再去处理

注意：DropMode为1时，允许缓存多个消息，如果后续出现了打断，缓存的消息会被清空
 * @method integer getPriority() 获取ServerPushText消息的优先级，0表示可被打断，1表示不会被打断。**目前仅支持传入0，如果需要传入1，请提工单联系我们添加权限。**
注意：在接收到Priority=1的消息后，后续其他任何消息都会被忽略（包括Priority=1的消息），直到Priority=1的消息处理结束。该字段可与Interrupt、DropMode字段配合使用。
例子：
- Priority=1、Interrupt=true，会打断现有交互，立刻播报，播报过程中不会被打断
- Priority=1、Interrupt=false、DropMode=1，会等待当前交互结束，再进行播报，播报过程中不会被打断

 * @method void setPriority(integer $Priority) 设置ServerPushText消息的优先级，0表示可被打断，1表示不会被打断。**目前仅支持传入0，如果需要传入1，请提工单联系我们添加权限。**
注意：在接收到Priority=1的消息后，后续其他任何消息都会被忽略（包括Priority=1的消息），直到Priority=1的消息处理结束。该字段可与Interrupt、DropMode字段配合使用。
例子：
- Priority=1、Interrupt=true，会打断现有交互，立刻播报，播报过程中不会被打断
- Priority=1、Interrupt=false、DropMode=1，会等待当前交互结束，再进行播报，播报过程中不会被打断
 */
class ServerPushText extends AbstractModel
{
    /**
     * @var string 服务端推送播报文本
     */
    public $Text;

    /**
     * @var boolean 是否允许该文本打断机器人说话
     */
    public $Interrupt;

    /**
     * @var boolean 播报完文本后，是否自动关闭对话任务
     */
    public $StopAfterPlay;

    /**
     * @var string 服务端推送播报音频
    格式说明：音频必须为单声道，采样率必须跟对应TTS的采样率保持一致，编码为Base64字符串。
    输入规则：当提供Audio字段时，将不接受Text字段的输入。系统将直接播放Audio字段中的音频内容。
     */
    public $Audio;

    /**
     * @var integer 默认为0，仅在Interrupt为false时有效
- 0表示当前有交互发生时，会丢弃Interrupt为false的消息
- 1表示当前有交互发生时，不会丢弃Interrupt为false的消息，而是缓存下来，等待当前交互结束后，再去处理

注意：DropMode为1时，允许缓存多个消息，如果后续出现了打断，缓存的消息会被清空
     */
    public $DropMode;

    /**
     * @var integer ServerPushText消息的优先级，0表示可被打断，1表示不会被打断。**目前仅支持传入0，如果需要传入1，请提工单联系我们添加权限。**
注意：在接收到Priority=1的消息后，后续其他任何消息都会被忽略（包括Priority=1的消息），直到Priority=1的消息处理结束。该字段可与Interrupt、DropMode字段配合使用。
例子：
- Priority=1、Interrupt=true，会打断现有交互，立刻播报，播报过程中不会被打断
- Priority=1、Interrupt=false、DropMode=1，会等待当前交互结束，再进行播报，播报过程中不会被打断

     */
    public $Priority;

    /**
     * @param string $Text 服务端推送播报文本
     * @param boolean $Interrupt 是否允许该文本打断机器人说话
     * @param boolean $StopAfterPlay 播报完文本后，是否自动关闭对话任务
     * @param string $Audio 服务端推送播报音频
    格式说明：音频必须为单声道，采样率必须跟对应TTS的采样率保持一致，编码为Base64字符串。
    输入规则：当提供Audio字段时，将不接受Text字段的输入。系统将直接播放Audio字段中的音频内容。
     * @param integer $DropMode 默认为0，仅在Interrupt为false时有效
- 0表示当前有交互发生时，会丢弃Interrupt为false的消息
- 1表示当前有交互发生时，不会丢弃Interrupt为false的消息，而是缓存下来，等待当前交互结束后，再去处理

注意：DropMode为1时，允许缓存多个消息，如果后续出现了打断，缓存的消息会被清空
     * @param integer $Priority ServerPushText消息的优先级，0表示可被打断，1表示不会被打断。**目前仅支持传入0，如果需要传入1，请提工单联系我们添加权限。**
注意：在接收到Priority=1的消息后，后续其他任何消息都会被忽略（包括Priority=1的消息），直到Priority=1的消息处理结束。该字段可与Interrupt、DropMode字段配合使用。
例子：
- Priority=1、Interrupt=true，会打断现有交互，立刻播报，播报过程中不会被打断
- Priority=1、Interrupt=false、DropMode=1，会等待当前交互结束，再进行播报，播报过程中不会被打断
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Interrupt",$param) and $param["Interrupt"] !== null) {
            $this->Interrupt = $param["Interrupt"];
        }

        if (array_key_exists("StopAfterPlay",$param) and $param["StopAfterPlay"] !== null) {
            $this->StopAfterPlay = $param["StopAfterPlay"];
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = $param["Audio"];
        }

        if (array_key_exists("DropMode",$param) and $param["DropMode"] !== null) {
            $this->DropMode = $param["DropMode"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
