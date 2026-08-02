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
 * TWeTalk智能体配置信息描述
 *
 * @method integer getUin() 获取<p>主账号UIN</p>
 * @method void setUin(integer $Uin) 设置<p>主账号UIN</p>
 * @method integer getAppId() 获取<p>账号AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>账号AppId</p>
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getAgentId() 获取<p>智能体ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>智能体ID</p>
 * @method string getName() 获取<p>智能体名称</p>
 * @method void setName(string $Name) 设置<p>智能体名称</p>
 * @method string getDescription() 获取<p>智能体描述</p>
 * @method void setDescription(string $Description) 设置<p>智能体描述</p>
 * @method TalkSTTConfig getSTTConfig() 获取<p>语音识别配置</p>
 * @method void setSTTConfig(TalkSTTConfig $STTConfig) 设置<p>语音识别配置</p>
 * @method TalkLLMConfig getLLMConfig() 获取<p>大模型配置</p>
 * @method void setLLMConfig(TalkLLMConfig $LLMConfig) 设置<p>大模型配置</p>
 * @method TalkTTSConfig getTTSConfig() 获取<p>语音合成配置</p>
 * @method void setTTSConfig(TalkTTSConfig $TTSConfig) 设置<p>语音合成配置</p>
 * @method TalkConversationConfig getConversationConfig() 获取<p>对话行为配置</p>
 * @method void setConversationConfig(TalkConversationConfig $ConversationConfig) 设置<p>对话行为配置</p>
 * @method TalkMemoryConfig getMemoryConfig() 获取<p>长期记忆配置</p>
 * @method void setMemoryConfig(TalkMemoryConfig $MemoryConfig) 设置<p>长期记忆配置</p>
 * @method array getIOTTools() 获取<p>IoT 工具列表</p>
 * @method void setIOTTools(array $IOTTools) 设置<p>IoT 工具列表</p>
 * @method array getWebhookTools() 获取<p>Webhook 工具列表</p>
 * @method void setWebhookTools(array $WebhookTools) 设置<p>Webhook 工具列表</p>
 * @method string getMetadata() 获取<p>元信息JSON object 字符串</p>
 * @method void setMetadata(string $Metadata) 设置<p>元信息JSON object 字符串</p>
 * @method array getBindings() 获取<p>绑定关系列表</p>
 * @method void setBindings(array $Bindings) 设置<p>绑定关系列表</p>
 * @method integer getCreateTime() 获取<p>创建时间，Unix 秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，Unix 秒</p>
 * @method integer getUpdateTime() 获取<p>更新时间，Unix 秒</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间，Unix 秒</p>
 * @method TalkEventCallbackConfig getEventCallbackConfig() 获取<p>事件回调配置</p>
 * @method void setEventCallbackConfig(TalkEventCallbackConfig $EventCallbackConfig) 设置<p>事件回调配置</p>
 */
class TalkAgentInfo extends AbstractModel
{
    /**
     * @var integer <p>主账号UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>账号AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>智能体ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>智能体名称</p>
     */
    public $Name;

    /**
     * @var string <p>智能体描述</p>
     */
    public $Description;

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
     * @var TalkConversationConfig <p>对话行为配置</p>
     */
    public $ConversationConfig;

    /**
     * @var TalkMemoryConfig <p>长期记忆配置</p>
     */
    public $MemoryConfig;

    /**
     * @var array <p>IoT 工具列表</p>
     */
    public $IOTTools;

    /**
     * @var array <p>Webhook 工具列表</p>
     */
    public $WebhookTools;

    /**
     * @var string <p>元信息JSON object 字符串</p>
     */
    public $Metadata;

    /**
     * @var array <p>绑定关系列表</p>
     */
    public $Bindings;

    /**
     * @var integer <p>创建时间，Unix 秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间，Unix 秒</p>
     */
    public $UpdateTime;

    /**
     * @var TalkEventCallbackConfig <p>事件回调配置</p>
     */
    public $EventCallbackConfig;

    /**
     * @param integer $Uin <p>主账号UIN</p>
     * @param integer $AppId <p>账号AppId</p>
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $AgentId <p>智能体ID</p>
     * @param string $Name <p>智能体名称</p>
     * @param string $Description <p>智能体描述</p>
     * @param TalkSTTConfig $STTConfig <p>语音识别配置</p>
     * @param TalkLLMConfig $LLMConfig <p>大模型配置</p>
     * @param TalkTTSConfig $TTSConfig <p>语音合成配置</p>
     * @param TalkConversationConfig $ConversationConfig <p>对话行为配置</p>
     * @param TalkMemoryConfig $MemoryConfig <p>长期记忆配置</p>
     * @param array $IOTTools <p>IoT 工具列表</p>
     * @param array $WebhookTools <p>Webhook 工具列表</p>
     * @param string $Metadata <p>元信息JSON object 字符串</p>
     * @param array $Bindings <p>绑定关系列表</p>
     * @param integer $CreateTime <p>创建时间，Unix 秒</p>
     * @param integer $UpdateTime <p>更新时间，Unix 秒</p>
     * @param TalkEventCallbackConfig $EventCallbackConfig <p>事件回调配置</p>
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("Bindings",$param) and $param["Bindings"] !== null) {
            $this->Bindings = [];
            foreach ($param["Bindings"] as $key => $value){
                $obj = new TalkAgentBinding();
                $obj->deserialize($value);
                array_push($this->Bindings, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EventCallbackConfig",$param) and $param["EventCallbackConfig"] !== null) {
            $this->EventCallbackConfig = new TalkEventCallbackConfig();
            $this->EventCallbackConfig->deserialize($param["EventCallbackConfig"]);
        }
    }
}
