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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTWeTalkAgent请求参数结构体
 *
 * @method TalkSTTConfig getSTTConfig() 获取<p>语音识别配置</p>
 * @method void setSTTConfig(TalkSTTConfig $STTConfig) 设置<p>语音识别配置</p>
 * @method TalkLLMConfig getLLMConfig() 获取<p>大模型配置</p>
 * @method void setLLMConfig(TalkLLMConfig $LLMConfig) 设置<p>大模型配置</p>
 * @method TalkTTSConfig getTTSConfig() 获取<p>语音合成配置</p>
 * @method void setTTSConfig(TalkTTSConfig $TTSConfig) 设置<p>语音合成配置</p>
 * @method string getName() 获取<p>智能体名称；为空时使用默认智能体名称</p>
 * @method void setName(string $Name) 设置<p>智能体名称；为空时使用默认智能体名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getDescription() 获取<p>智能体描述，最长1024字符</p>
 * @method void setDescription(string $Description) 设置<p>智能体描述，最长1024字符</p>
 * @method TalkConversationConfig getConversationConfig() 获取<p>对话行为配置</p>
 * @method void setConversationConfig(TalkConversationConfig $ConversationConfig) 设置<p>对话行为配置</p>
 * @method TalkMemoryConfig getMemoryConfig() 获取<p>长期记忆配置</p>
 * @method void setMemoryConfig(TalkMemoryConfig $MemoryConfig) 设置<p>长期记忆配置</p>
 * @method array getIOTTools() 获取<p>IoT工具配置列表</p>
 * @method void setIOTTools(array $IOTTools) 设置<p>IoT工具配置列表</p>
 * @method array getWebhookTools() 获取<p>Webhook工具配置列表</p>
 * @method void setWebhookTools(array $WebhookTools) 设置<p>Webhook工具配置列表</p>
 * @method string getMetadata() 获取<p>元信息扩展JSON对象字符串</p>
 * @method void setMetadata(string $Metadata) 设置<p>元信息扩展JSON对象字符串</p>
 */
class CreateTWeTalkAgentRequest extends AbstractModel
{
    /**
     * @var TalkSTTConfig <p>语音识别配置</p>
     */
    public $STTConfig;

    /**
     * @var TalkLLMConfig <p>大模型配置</p>
     */
    public $LLMConfig;

    /**
     * @var TalkTTSConfig <p>语音合成配置</p>
     */
    public $TTSConfig;

    /**
     * @var string <p>智能体名称；为空时使用默认智能体名称</p>
     */
    public $Name;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>智能体描述，最长1024字符</p>
     */
    public $Description;

    /**
     * @var TalkConversationConfig <p>对话行为配置</p>
     */
    public $ConversationConfig;

    /**
     * @var TalkMemoryConfig <p>长期记忆配置</p>
     */
    public $MemoryConfig;

    /**
     * @var array <p>IoT工具配置列表</p>
     */
    public $IOTTools;

    /**
     * @var array <p>Webhook工具配置列表</p>
     */
    public $WebhookTools;

    /**
     * @var string <p>元信息扩展JSON对象字符串</p>
     */
    public $Metadata;

    /**
     * @param TalkSTTConfig $STTConfig <p>语音识别配置</p>
     * @param TalkLLMConfig $LLMConfig <p>大模型配置</p>
     * @param TalkTTSConfig $TTSConfig <p>语音合成配置</p>
     * @param string $Name <p>智能体名称；为空时使用默认智能体名称</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Description <p>智能体描述，最长1024字符</p>
     * @param TalkConversationConfig $ConversationConfig <p>对话行为配置</p>
     * @param TalkMemoryConfig $MemoryConfig <p>长期记忆配置</p>
     * @param array $IOTTools <p>IoT工具配置列表</p>
     * @param array $WebhookTools <p>Webhook工具配置列表</p>
     * @param string $Metadata <p>元信息扩展JSON对象字符串</p>
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
        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new TalkSTTConfig();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new TalkLLMConfig();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new TalkTTSConfig();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConversationConfig",$param) and $param["ConversationConfig"] !== null) {
            $this->ConversationConfig = new TalkConversationConfig();
            $this->ConversationConfig->deserialize($param["ConversationConfig"]);
        }

        if (array_key_exists("MemoryConfig",$param) and $param["MemoryConfig"] !== null) {
            $this->MemoryConfig = new TalkMemoryConfig();
            $this->MemoryConfig->deserialize($param["MemoryConfig"]);
        }

        if (array_key_exists("IOTTools",$param) and $param["IOTTools"] !== null) {
            $this->IOTTools = [];
            foreach ($param["IOTTools"] as $key => $value){
                $obj = new TalkIOTTool();
                $obj->deserialize($value);
                array_push($this->IOTTools, $obj);
            }
        }

        if (array_key_exists("WebhookTools",$param) and $param["WebhookTools"] !== null) {
            $this->WebhookTools = [];
            foreach ($param["WebhookTools"] as $key => $value){
                $obj = new TalkWebhookTool();
                $obj->deserialize($value);
                array_push($this->WebhookTools, $obj);
            }
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }
    }
}
