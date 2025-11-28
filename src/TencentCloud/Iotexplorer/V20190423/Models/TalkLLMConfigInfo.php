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
 * LLM配置信息。
 *
 * @method string getLLMType() 获取支持的LLM类型，openai-OPENAI格式。
 * @method void setLLMType(string $LLMType) 设置支持的LLM类型，openai-OPENAI格式。
 * @method boolean getEnabled() 获取是否开启
 * @method void setEnabled(boolean $Enabled) 设置是否开启
 * @method string getModel() 获取模型
 * @method void setModel(string $Model) 设置模型
 * @method boolean getStreaming() 获取是否开启
 * @method void setStreaming(boolean $Streaming) 设置是否开启
 * @method string getConfig() 获取配置信息JSON字符串，根据`LLMType`进行不同的值匹配。例如`LLMType`是`openai`，`Config`值是`{\"ApiKey\":\"sk-09***\",\"ApiUrl\":\"base_url\",\"SystemPrompt\":\"你是一个语音助手\",\"Timeout\":30,\"History\":0,\"MetaInfo\":{\"productID\":\"test\"}}`

## openai
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手",
  "Timeout":20,
  "History":10,
  "MetaInfo":{}
}
```
 * @method void setConfig(string $Config) 设置配置信息JSON字符串，根据`LLMType`进行不同的值匹配。例如`LLMType`是`openai`，`Config`值是`{\"ApiKey\":\"sk-09***\",\"ApiUrl\":\"base_url\",\"SystemPrompt\":\"你是一个语音助手\",\"Timeout\":30,\"History\":0,\"MetaInfo\":{\"productID\":\"test\"}}`

## openai
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手",
  "Timeout":20,
  "History":10,
  "MetaInfo":{}
}
```
 * @method float getTemperature() 获取温度
 * @method void setTemperature(float $Temperature) 设置温度
 * @method integer getMaxTokens() 获取最大token数
 * @method void setMaxTokens(integer $MaxTokens) 设置最大token数
 * @method float getTopP() 获取topP
 * @method void setTopP(float $TopP) 设置topP
 * @method array getTools() 获取工具ID列表
 * @method void setTools(array $Tools) 设置工具ID列表
 */
class TalkLLMConfigInfo extends AbstractModel
{
    /**
     * @var string 支持的LLM类型，openai-OPENAI格式。
     */
    public $LLMType;

    /**
     * @var boolean 是否开启
     */
    public $Enabled;

    /**
     * @var string 模型
     */
    public $Model;

    /**
     * @var boolean 是否开启
     */
    public $Streaming;

    /**
     * @var string 配置信息JSON字符串，根据`LLMType`进行不同的值匹配。例如`LLMType`是`openai`，`Config`值是`{\"ApiKey\":\"sk-09***\",\"ApiUrl\":\"base_url\",\"SystemPrompt\":\"你是一个语音助手\",\"Timeout\":30,\"History\":0,\"MetaInfo\":{\"productID\":\"test\"}}`

## openai
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手",
  "Timeout":20,
  "History":10,
  "MetaInfo":{}
}
```
     */
    public $Config;

    /**
     * @var float 温度
     */
    public $Temperature;

    /**
     * @var integer 最大token数
     */
    public $MaxTokens;

    /**
     * @var float topP
     */
    public $TopP;

    /**
     * @var array 工具ID列表
     */
    public $Tools;

    /**
     * @param string $LLMType 支持的LLM类型，openai-OPENAI格式。
     * @param boolean $Enabled 是否开启
     * @param string $Model 模型
     * @param boolean $Streaming 是否开启
     * @param string $Config 配置信息JSON字符串，根据`LLMType`进行不同的值匹配。例如`LLMType`是`openai`，`Config`值是`{\"ApiKey\":\"sk-09***\",\"ApiUrl\":\"base_url\",\"SystemPrompt\":\"你是一个语音助手\",\"Timeout\":30,\"History\":0,\"MetaInfo\":{\"productID\":\"test\"}}`

## openai
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手",
  "Timeout":20,
  "History":10,
  "MetaInfo":{}
}
```
     * @param float $Temperature 温度
     * @param integer $MaxTokens 最大token数
     * @param float $TopP topP
     * @param array $Tools 工具ID列表
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
        if (array_key_exists("LLMType",$param) and $param["LLMType"] !== null) {
            $this->LLMType = $param["LLMType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Streaming",$param) and $param["Streaming"] !== null) {
            $this->Streaming = $param["Streaming"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("Tools",$param) and $param["Tools"] !== null) {
            $this->Tools = $param["Tools"];
        }
    }
}
