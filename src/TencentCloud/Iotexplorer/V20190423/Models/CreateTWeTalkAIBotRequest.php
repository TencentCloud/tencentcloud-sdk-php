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
 * CreateTWeTalkAIBot请求参数结构体
 *
 * @method string getName() 获取产品ID
 * @method void setName(string $Name) 设置产品ID
 * @method string getDescription() 获取名称
 * @method void setDescription(string $Description) 设置名称
 * @method string getTargetLanguage() 获取支持的语言，zh-中文；en-英文；默认zh
 * @method void setTargetLanguage(string $TargetLanguage) 设置支持的语言，zh-中文；en-英文；默认zh
 * @method TalkSTTConfigInfo getSTTConfig() 获取自定义语音识别配置
 * @method void setSTTConfig(TalkSTTConfigInfo $STTConfig) 设置自定义语音识别配置
 * @method TalkLLMConfigInfo getLLMConfig() 获取自定义大模型配置
 * @method void setLLMConfig(TalkLLMConfigInfo $LLMConfig) 设置自定义大模型配置
 * @method TalkTTSConfigInfo getTTSConfig() 获取语音合成配置
 * @method void setTTSConfig(TalkTTSConfigInfo $TTSConfig) 设置语音合成配置
 * @method TalkAgentConfigInfo getAgentConfig() 获取智能体配置
 * @method void setAgentConfig(TalkAgentConfigInfo $AgentConfig) 设置智能体配置
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class CreateTWeTalkAIBotRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $Name;

    /**
     * @var string 名称
     */
    public $Description;

    /**
     * @var string 支持的语言，zh-中文；en-英文；默认zh
     */
    public $TargetLanguage;

    /**
     * @var TalkSTTConfigInfo 自定义语音识别配置
     */
    public $STTConfig;

    /**
     * @var TalkLLMConfigInfo 自定义大模型配置
     */
    public $LLMConfig;

    /**
     * @var TalkTTSConfigInfo 语音合成配置
     */
    public $TTSConfig;

    /**
     * @var TalkAgentConfigInfo 智能体配置
     */
    public $AgentConfig;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param string $Name 产品ID
     * @param string $Description 名称
     * @param string $TargetLanguage 支持的语言，zh-中文；en-英文；默认zh
     * @param TalkSTTConfigInfo $STTConfig 自定义语音识别配置
     * @param TalkLLMConfigInfo $LLMConfig 自定义大模型配置
     * @param TalkTTSConfigInfo $TTSConfig 语音合成配置
     * @param TalkAgentConfigInfo $AgentConfig 智能体配置
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new TalkSTTConfigInfo();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new TalkLLMConfigInfo();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new TalkTTSConfigInfo();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new TalkAgentConfigInfo();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
