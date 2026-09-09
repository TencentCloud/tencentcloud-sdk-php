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
 * ControlAIConversation请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务唯一标识</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务唯一标识</p>
 * @method string getCommand() 获取<p>控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话。- TransparentData，透传信息给客户端。</p>
 * @method void setCommand(string $Command) 设置<p>控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话。- TransparentData，透传信息给客户端。</p>
 * @method ServerPushText getServerPushText() 获取<p>服务端发送播报文本命令，当Command为ServerPushText时必填</p>
 * @method void setServerPushText(ServerPushText $ServerPushText) 设置<p>服务端发送播报文本命令，当Command为ServerPushText时必填</p>
 * @method InvokeLLM getInvokeLLM() 获取<p>服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM=&quot;1&quot;</p>
 * @method void setInvokeLLM(InvokeLLM $InvokeLLM) 设置<p>服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM=&quot;1&quot;</p>
 * @method TransparentData getTransparentData() 获取<p>ai对话需要透传给客户端的信息</p>
 * @method void setTransparentData(TransparentData $TransparentData) 设置<p>ai对话需要透传给客户端的信息</p>
 */
class ControlAIConversationRequest extends AbstractModel
{
    /**
     * @var string <p>任务唯一标识</p>
     */
    public $TaskId;

    /**
     * @var string <p>控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话。- TransparentData，透传信息给客户端。</p>
     */
    public $Command;

    /**
     * @var ServerPushText <p>服务端发送播报文本命令，当Command为ServerPushText时必填</p>
     */
    public $ServerPushText;

    /**
     * @var InvokeLLM <p>服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM=&quot;1&quot;</p>
     */
    public $InvokeLLM;

    /**
     * @var TransparentData <p>ai对话需要透传给客户端的信息</p>
     */
    public $TransparentData;

    /**
     * @param string $TaskId <p>任务唯一标识</p>
     * @param string $Command <p>控制命令，目前支持命令如下：- ServerPushText，服务端发送文本给AI机器人，AI机器人会播报该文本. - InvokeLLM，服务端发送文本给大模型，触发对话。- TransparentData，透传信息给客户端。</p>
     * @param ServerPushText $ServerPushText <p>服务端发送播报文本命令，当Command为ServerPushText时必填</p>
     * @param InvokeLLM $InvokeLLM <p>服务端发送命令主动请求大模型,当Command为InvokeLLM时会把content请求到大模型,头部增加X-Invoke-LLM=&quot;1&quot;</p>
     * @param TransparentData $TransparentData <p>ai对话需要透传给客户端的信息</p>
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

        if (array_key_exists("TransparentData",$param) and $param["TransparentData"] !== null) {
            $this->TransparentData = new TransparentData();
            $this->TransparentData->deserialize($param["TransparentData"]);
        }
    }
}
