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
 * TTS配置信息。
 *
 * @method string getTTSType() 获取支持的LLM类型，支持tencent-腾讯；azure-亚马逊；volcengine-火山引擎；elevenlabs-ELEVENLABS；minimax-MINIMAX；cartesia-CARTESIA；aliyun-阿里；系统默认-tencent。
 * @method void setTTSType(string $TTSType) 设置支持的LLM类型，支持tencent-腾讯；azure-亚马逊；volcengine-火山引擎；elevenlabs-ELEVENLABS；minimax-MINIMAX；cartesia-CARTESIA；aliyun-阿里；系统默认-tencent。
 * @method boolean getEnabled() 获取是否开启
 * @method void setEnabled(boolean $Enabled) 设置是否开启
 * @method string getConfig() 获取配置信息JSON字符串，根据`TTSType`进行不同的值匹配。例如`TTSType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"VoiceType\":10001}`

## tencent
```
{
   "AppId": 100203,
   "SecretId": "XXXX",
   "SecretKey": "XXXXX",
  "VoiceType":123456
}
```

## azure
```
{
   "SubscriptionKey": 100203,
   "Region": "ch-zn",
   "VoiceName": "XXXXX",
  "Language":"zh"
}
```
## elevenlabs
```
{
   "ModelId": 100203,
   "VoiceId": "ch-zn",
   "ApiKey": "XXXXX"
}
```
## minimax
```
{  
  "Model":"xxxx",
   "ApiUrl": "346w34",
   "ApiKey": "xxx",
   "GroupId": "ion",
  "VoiceType":"xioawei"
}
```
## cartesia
```
{  
  "Model":"xxxx",
   "ApiKey": "xxx",
  "VoiceId":"xioawei"
}
```
## aliyun
```
{
   "VoiceType": 100203,
   "RegionId": "XXXX",
   "ApiKey": "XXXXX"
}
```
## volcengine
```
{
   "AppId": "346w34",
   "AccessToken": "xxx",
   "ResourceId": "volc.bigasr.sauc.duration",
  "VoiceType":"xioawei"
}
```

 * @method void setConfig(string $Config) 设置配置信息JSON字符串，根据`TTSType`进行不同的值匹配。例如`TTSType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"VoiceType\":10001}`

## tencent
```
{
   "AppId": 100203,
   "SecretId": "XXXX",
   "SecretKey": "XXXXX",
  "VoiceType":123456
}
```

## azure
```
{
   "SubscriptionKey": 100203,
   "Region": "ch-zn",
   "VoiceName": "XXXXX",
  "Language":"zh"
}
```
## elevenlabs
```
{
   "ModelId": 100203,
   "VoiceId": "ch-zn",
   "ApiKey": "XXXXX"
}
```
## minimax
```
{  
  "Model":"xxxx",
   "ApiUrl": "346w34",
   "ApiKey": "xxx",
   "GroupId": "ion",
  "VoiceType":"xioawei"
}
```
## cartesia
```
{  
  "Model":"xxxx",
   "ApiKey": "xxx",
  "VoiceId":"xioawei"
}
```
## aliyun
```
{
   "VoiceType": 100203,
   "RegionId": "XXXX",
   "ApiKey": "XXXXX"
}
```
## volcengine
```
{
   "AppId": "346w34",
   "AccessToken": "xxx",
   "ResourceId": "volc.bigasr.sauc.duration",
  "VoiceType":"xioawei"
}
```

 * @method float getSpeed() 获取温度
 * @method void setSpeed(float $Speed) 设置温度
 * @method float getVolume() 获取最大token数
 * @method void setVolume(float $Volume) 设置最大token数
 * @method float getPitch() 获取PITCH
 * @method void setPitch(float $Pitch) 设置PITCH
 */
class TalkTTSConfigInfo extends AbstractModel
{
    /**
     * @var string 支持的LLM类型，支持tencent-腾讯；azure-亚马逊；volcengine-火山引擎；elevenlabs-ELEVENLABS；minimax-MINIMAX；cartesia-CARTESIA；aliyun-阿里；系统默认-tencent。
     */
    public $TTSType;

    /**
     * @var boolean 是否开启
     */
    public $Enabled;

    /**
     * @var string 配置信息JSON字符串，根据`TTSType`进行不同的值匹配。例如`TTSType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"VoiceType\":10001}`

## tencent
```
{
   "AppId": 100203,
   "SecretId": "XXXX",
   "SecretKey": "XXXXX",
  "VoiceType":123456
}
```

## azure
```
{
   "SubscriptionKey": 100203,
   "Region": "ch-zn",
   "VoiceName": "XXXXX",
  "Language":"zh"
}
```
## elevenlabs
```
{
   "ModelId": 100203,
   "VoiceId": "ch-zn",
   "ApiKey": "XXXXX"
}
```
## minimax
```
{  
  "Model":"xxxx",
   "ApiUrl": "346w34",
   "ApiKey": "xxx",
   "GroupId": "ion",
  "VoiceType":"xioawei"
}
```
## cartesia
```
{  
  "Model":"xxxx",
   "ApiKey": "xxx",
  "VoiceId":"xioawei"
}
```
## aliyun
```
{
   "VoiceType": 100203,
   "RegionId": "XXXX",
   "ApiKey": "XXXXX"
}
```
## volcengine
```
{
   "AppId": "346w34",
   "AccessToken": "xxx",
   "ResourceId": "volc.bigasr.sauc.duration",
  "VoiceType":"xioawei"
}
```

     */
    public $Config;

    /**
     * @var float 温度
     */
    public $Speed;

    /**
     * @var float 最大token数
     */
    public $Volume;

    /**
     * @var float PITCH
     */
    public $Pitch;

    /**
     * @param string $TTSType 支持的LLM类型，支持tencent-腾讯；azure-亚马逊；volcengine-火山引擎；elevenlabs-ELEVENLABS；minimax-MINIMAX；cartesia-CARTESIA；aliyun-阿里；系统默认-tencent。
     * @param boolean $Enabled 是否开启
     * @param string $Config 配置信息JSON字符串，根据`TTSType`进行不同的值匹配。例如`TTSType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"VoiceType\":10001}`

## tencent
```
{
   "AppId": 100203,
   "SecretId": "XXXX",
   "SecretKey": "XXXXX",
  "VoiceType":123456
}
```

## azure
```
{
   "SubscriptionKey": 100203,
   "Region": "ch-zn",
   "VoiceName": "XXXXX",
  "Language":"zh"
}
```
## elevenlabs
```
{
   "ModelId": 100203,
   "VoiceId": "ch-zn",
   "ApiKey": "XXXXX"
}
```
## minimax
```
{  
  "Model":"xxxx",
   "ApiUrl": "346w34",
   "ApiKey": "xxx",
   "GroupId": "ion",
  "VoiceType":"xioawei"
}
```
## cartesia
```
{  
  "Model":"xxxx",
   "ApiKey": "xxx",
  "VoiceId":"xioawei"
}
```
## aliyun
```
{
   "VoiceType": 100203,
   "RegionId": "XXXX",
   "ApiKey": "XXXXX"
}
```
## volcengine
```
{
   "AppId": "346w34",
   "AccessToken": "xxx",
   "ResourceId": "volc.bigasr.sauc.duration",
  "VoiceType":"xioawei"
}
```

     * @param float $Speed 温度
     * @param float $Volume 最大token数
     * @param float $Pitch PITCH
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
        if (array_key_exists("TTSType",$param) and $param["TTSType"] !== null) {
            $this->TTSType = $param["TTSType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Pitch",$param) and $param["Pitch"] !== null) {
            $this->Pitch = $param["Pitch"];
        }
    }
}
