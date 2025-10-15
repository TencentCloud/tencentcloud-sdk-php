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
 * @method string getLLMType() 获取支持的LLM类型，tencent-腾讯；openai-OPENAI格式；anthropic-ANTHROPIC；gemini-GEMINI;gemini-GEMINI;coze-扣子;dify-DIFY；tencent_lke-腾讯智能体平台；系统默认-openai。
 * @method void setLLMType(string $LLMType) 设置支持的LLM类型，tencent-腾讯；openai-OPENAI格式；anthropic-ANTHROPIC；gemini-GEMINI;gemini-GEMINI;coze-扣子;dify-DIFY；tencent_lke-腾讯智能体平台；系统默认-openai。
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

## anthropic
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手"
}
```
## gemini
```
{
  "AppId": 123456,
  "AccessToken": "*****",
  "ResourceId": "SecretKey****",
  "ModelName": "16k_zh",
  "Language":""
}
```
## coze
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "BotId": "v1",
   "UserId": "xxx",
  "ApiUrl": "https://api.coze.cn/v3/chat"
}
```
## dify
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "User": "xxx",
  "Inputs":{},
  "ConversationId":"c1"
}
```
## tencent_lke
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemRole": "一个小小助手",
  "SessionId":"123456"
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

## anthropic
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手"
}
```
## gemini
```
{
  "AppId": 123456,
  "AccessToken": "*****",
  "ResourceId": "SecretKey****",
  "ModelName": "16k_zh",
  "Language":""
}
```
## coze
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "BotId": "v1",
   "UserId": "xxx",
  "ApiUrl": "https://api.coze.cn/v3/chat"
}
```
## dify
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "User": "xxx",
  "Inputs":{},
  "ConversationId":"c1"
}
```
## tencent_lke
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemRole": "一个小小助手",
  "SessionId":"123456"
}
```

 * @method float getTemperature() 获取温度
 * @method void setTemperature(float $Temperature) 设置温度
 * @method integer getMaxTokens() 获取最大token数
 * @method void setMaxTokens(integer $MaxTokens) 设置最大token数
 * @method float getTopP() 获取topP
 * @method void setTopP(float $TopP) 设置topP
 */
class TalkLLMConfigInfo extends AbstractModel
{
    /**
     * @var string 支持的LLM类型，tencent-腾讯；openai-OPENAI格式；anthropic-ANTHROPIC；gemini-GEMINI;gemini-GEMINI;coze-扣子;dify-DIFY；tencent_lke-腾讯智能体平台；系统默认-openai。
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

## anthropic
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手"
}
```
## gemini
```
{
  "AppId": 123456,
  "AccessToken": "*****",
  "ResourceId": "SecretKey****",
  "ModelName": "16k_zh",
  "Language":""
}
```
## coze
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "BotId": "v1",
   "UserId": "xxx",
  "ApiUrl": "https://api.coze.cn/v3/chat"
}
```
## dify
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "User": "xxx",
  "Inputs":{},
  "ConversationId":"c1"
}
```
## tencent_lke
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemRole": "一个小小助手",
  "SessionId":"123456"
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
     * @param string $LLMType 支持的LLM类型，tencent-腾讯；openai-OPENAI格式；anthropic-ANTHROPIC；gemini-GEMINI;gemini-GEMINI;coze-扣子;dify-DIFY；tencent_lke-腾讯智能体平台；系统默认-openai。
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

## anthropic
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemPrompt": "一个小小助手"
}
```
## gemini
```
{
  "AppId": 123456,
  "AccessToken": "*****",
  "ResourceId": "SecretKey****",
  "ModelName": "16k_zh",
  "Language":""
}
```
## coze
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "BotId": "v1",
   "UserId": "xxx",
  "ApiUrl": "https://api.coze.cn/v3/chat"
}
```
## dify
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "User": "xxx",
  "Inputs":{},
  "ConversationId":"c1"
}
```
## tencent_lke
```
{
   "ApiKey": "sk-XXXXXXXXXXXX",
   "ApiUrl": "https://api.openai.com/v1",
   "SystemRole": "一个小小助手",
  "SessionId":"123456"
}
```

     * @param float $Temperature 温度
     * @param integer $MaxTokens 最大token数
     * @param float $TopP topP
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
    }
}
