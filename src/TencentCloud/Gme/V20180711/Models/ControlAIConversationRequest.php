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
 * ControlAIConversation请求参数结构体
 *
 * @method string getTaskId() 获取任务唯一标识
 * @method void setTaskId(string $TaskId) 设置任务唯一标识
 * @method string getCommand() 获取控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话
 * @method void setCommand(string $Command) 设置控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话
 * @method ServerPushText getServerPushText() 获取服务端发送播报文本命令，当Command为ServerPushText时必填
 * @method void setServerPushText(ServerPushText $ServerPushText) 设置服务端发送播报文本命令，当Command为ServerPushText时必填
 * @method InvokeLLM getInvokeLLM() 获取服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM="1"
 * @method void setInvokeLLM(InvokeLLM $InvokeLLM) 设置服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM="1"
 */
class ControlAIConversationRequest extends AbstractModel
{
    /**
     * @var string 任务唯一标识
     */
    public $TaskId;

    /**
     * @var string 控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话
     */
    public $Command;

    /**
     * @var ServerPushText 服务端发送播报文本命令，当Command为ServerPushText时必填
     */
    public $ServerPushText;

    /**
     * @var InvokeLLM 服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM="1"
     */
    public $InvokeLLM;

    /**
     * @param string $TaskId 任务唯一标识
     * @param string $Command 控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话
     * @param ServerPushText $ServerPushText 服务端发送播报文本命令，当Command为ServerPushText时必填
     * @param InvokeLLM $InvokeLLM 服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM="1"
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServerPushText",$param) and $param["ServerPushText"] !== null) {
            $this->ServerPushText = new ServerPushText();
            $this->ServerPushText->deserialize($param["ServerPushText"]);
        }

        if (array_key_exists("InvokeLLM",$param) and $param["InvokeLLM"] !== null) {
            $this->InvokeLLM = new InvokeLLM();
            $this->InvokeLLM->deserialize($param["InvokeLLM"]);
        }
    }
}
