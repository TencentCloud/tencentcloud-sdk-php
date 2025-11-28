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
 * STT配置信息。
 *
 * @method string getSTTType() 获取支持的STT类型，tencent-腾讯；azure-亚马逊；deepgram-Deepgram;系统默认-tencent。
 * @method void setSTTType(string $STTType) 设置支持的STT类型，tencent-腾讯；azure-亚马逊；deepgram-Deepgram;系统默认-tencent。
 * @method boolean getEnabled() 获取是否开启
 * @method void setEnabled(boolean $Enabled) 设置是否开启
 * @method string getConfig() 获取配置信息JSON字符串，根据STTType进行不同的值匹配。例如`STTType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"EngineType\":\"16k_zh\"}`

## tencent
```
{
  "AppId": 123456,
  "SecretId": "secretId*****",
  "SecretKey": "SecretKey****",
  "EngineType": "16k_zh"
}
```

## azure
```
{
  "Region": "",
  "EndpointId": "id",
  "Language": "zh-CN",
  "SubscriptionKey": "*****"
}
```

## deepgram
```
{
  "Model": "nova-2",
  "Language": "zh",
   "BaseUrl":"http://www.deepgram.com",
  "ApiKey": "SecretKey****"
}
```

 * @method void setConfig(string $Config) 设置配置信息JSON字符串，根据STTType进行不同的值匹配。例如`STTType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"EngineType\":\"16k_zh\"}`

## tencent
```
{
  "AppId": 123456,
  "SecretId": "secretId*****",
  "SecretKey": "SecretKey****",
  "EngineType": "16k_zh"
}
```

## azure
```
{
  "Region": "",
  "EndpointId": "id",
  "Language": "zh-CN",
  "SubscriptionKey": "*****"
}
```

## deepgram
```
{
  "Model": "nova-2",
  "Language": "zh",
   "BaseUrl":"http://www.deepgram.com",
  "ApiKey": "SecretKey****"
}
```
 */
class TalkSTTConfigInfo extends AbstractModel
{
    /**
     * @var string 支持的STT类型，tencent-腾讯；azure-亚马逊；deepgram-Deepgram;系统默认-tencent。
     */
    public $STTType;

    /**
     * @var boolean 是否开启
     */
    public $Enabled;

    /**
     * @var string 配置信息JSON字符串，根据STTType进行不同的值匹配。例如`STTType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"EngineType\":\"16k_zh\"}`

## tencent
```
{
  "AppId": 123456,
  "SecretId": "secretId*****",
  "SecretKey": "SecretKey****",
  "EngineType": "16k_zh"
}
```

## azure
```
{
  "Region": "",
  "EndpointId": "id",
  "Language": "zh-CN",
  "SubscriptionKey": "*****"
}
```

## deepgram
```
{
  "Model": "nova-2",
  "Language": "zh",
   "BaseUrl":"http://www.deepgram.com",
  "ApiKey": "SecretKey****"
}
```

     */
    public $Config;

    /**
     * @param string $STTType 支持的STT类型，tencent-腾讯；azure-亚马逊；deepgram-Deepgram;系统默认-tencent。
     * @param boolean $Enabled 是否开启
     * @param string $Config 配置信息JSON字符串，根据STTType进行不同的值匹配。例如`STTType`是`tencent`，`Config`值是`{\"AppId\":123456,\"SecretId\":\"secretId*****\",\"SecretKey\":\"SecretKey****\",\"EngineType\":\"16k_zh\"}`

## tencent
```
{
  "AppId": 123456,
  "SecretId": "secretId*****",
  "SecretKey": "SecretKey****",
  "EngineType": "16k_zh"
}
```

## azure
```
{
  "Region": "",
  "EndpointId": "id",
  "Language": "zh-CN",
  "SubscriptionKey": "*****"
}
```

## deepgram
```
{
  "Model": "nova-2",
  "Language": "zh",
   "BaseUrl":"http://www.deepgram.com",
  "ApiKey": "SecretKey****"
}
```
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
        if (array_key_exists("STTType",$param) and $param["STTType"] !== null) {
            $this->STTType = $param["STTType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
