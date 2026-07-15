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
 * @method integer getUin() 获取主账号UIN
 * @method void setUin(integer $Uin) 设置主账号UIN
 * @method integer getAppId() 获取账号AppId
 * @method void setAppId(integer $AppId) 设置账号AppId
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getAgentId() 获取智能体ID
 * @method void setAgentId(string $AgentId) 设置智能体ID
 * @method string getName() 获取智能体名称
 * @method void setName(string $Name) 设置智能体名称
 * @method string getDescription() 获取智能体描述
 * @method void setDescription(string $Description) 设置智能体描述
 * @method TalkSTTConfig getSTTConfig() 获取语音识别配置
 * @method void setSTTConfig(TalkSTTConfig $STTConfig) 设置语音识别配置
 * @method TalkLLMConfig getLLMConfig() 获取大模型配置
 * @method void setLLMConfig(TalkLLMConfig $LLMConfig) 设置大模型配置
 * @method TalkTTSConfig getTTSConfig() 获取语音合成配置
 * @method void setTTSConfig(TalkTTSConfig $TTSConfig) 设置语音合成配置
 * @method TalkConversationConfig getConversationConfig() 获取对话行为配置
 * @method void setConversationConfig(TalkConversationConfig $ConversationConfig) 设置对话行为配置
 * @method TalkMemoryConfig getMemoryConfig() 获取长期记忆配置
 * @method void setMemoryConfig(TalkMemoryConfig $MemoryConfig) 设置长期记忆配置
 * @method array getIOTTools() 获取IoT 工具列表
 * @method void setIOTTools(array $IOTTools) 设置IoT 工具列表
 * @method array getWebhookTools() 获取Webhook 工具列表
 * @method void setWebhookTools(array $WebhookTools) 设置Webhook 工具列表
 * @method string getMetadata() 获取元信息JSON object 字符串
 * @method void setMetadata(string $Metadata) 设置元信息JSON object 字符串
 * @method array getBindings() 获取绑定关系列表
 * @method void setBindings(array $Bindings) 设置绑定关系列表
 * @method integer getCreateTime() 获取创建时间，Unix 秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，Unix 秒
 * @method integer getUpdateTime() 获取更新时间，Unix 秒
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，Unix 秒
 */
class TalkAgentInfo extends AbstractModel
{
    /**
     * @var integer 主账号UIN
     */
    public $Uin;

    /**
     * @var integer 账号AppId
     */
    public $AppId;

    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 智能体ID
     */
    public $AgentId;

    /**
     * @var string 智能体名称
     */
    public $Name;

    /**
     * @var string 智能体描述
     */
    public $Description;

    /**
     * @var TalkSTTConfig 语音识别配置
     */
    public $STTConfig;

    /**
     * @var TalkLLMConfig 大模型配置
     */
    public $LLMConfig;

    /**
     * @var TalkTTSConfig 语音合成配置
     */
    public $TTSConfig;

    /**
     * @var TalkConversationConfig 对话行为配置
     */
    public $ConversationConfig;

    /**
     * @var TalkMemoryConfig 长期记忆配置
     */
    public $MemoryConfig;

    /**
     * @var array IoT 工具列表
     */
    public $IOTTools;

    /**
     * @var array Webhook 工具列表
     */
    public $WebhookTools;

    /**
     * @var string 元信息JSON object 字符串
     */
    public $Metadata;

    /**
     * @var array 绑定关系列表
     */
    public $Bindings;

    /**
     * @var integer 创建时间，Unix 秒
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，Unix 秒
     */
    public $UpdateTime;

    /**
     * @param integer $Uin 主账号UIN
     * @param integer $AppId 账号AppId
     * @param string $InstanceId 实例 ID
     * @param string $AgentId 智能体ID
     * @param string $Name 智能体名称
     * @param string $Description 智能体描述
     * @param TalkSTTConfig $STTConfig 语音识别配置
     * @param TalkLLMConfig $LLMConfig 大模型配置
     * @param TalkTTSConfig $TTSConfig 语音合成配置
     * @param TalkConversationConfig $ConversationConfig 对话行为配置
     * @param TalkMemoryConfig $MemoryConfig 长期记忆配置
     * @param array $IOTTools IoT 工具列表
     * @param array $WebhookTools Webhook 工具列表
     * @param string $Metadata 元信息JSON object 字符串
     * @param array $Bindings 绑定关系列表
     * @param integer $CreateTime 创建时间，Unix 秒
     * @param integer $UpdateTime 更新时间，Unix 秒
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
    }
}
