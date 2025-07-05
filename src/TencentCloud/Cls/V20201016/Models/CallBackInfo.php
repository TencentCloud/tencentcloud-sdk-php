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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调配置
 *
 * @method string getBody() 获取回调时的Body。
可将各类告警变量放在请求内容中，详见[帮助文档](https://cloud.tencent.com/document/product/614/74718)。
如下示例：

```
{
"TopicId": "{{ .QueryLog[0][0].topicId }}",
"key": "{{.Alarm}}",
"time": "{{ .QueryLog[0][0].time }}",
"log": "{{ .QueryLog[0][0].content.__CONTENT__ }}",
"namespace": "{{ .QueryLog[0][0].content.__TAG__.namespace }}"
}
```
 * @method void setBody(string $Body) 设置回调时的Body。
可将各类告警变量放在请求内容中，详见[帮助文档](https://cloud.tencent.com/document/product/614/74718)。
如下示例：

```
{
"TopicId": "{{ .QueryLog[0][0].topicId }}",
"key": "{{.Alarm}}",
"time": "{{ .QueryLog[0][0].time }}",
"log": "{{ .QueryLog[0][0].content.__CONTENT__ }}",
"namespace": "{{ .QueryLog[0][0].content.__TAG__.namespace }}"
}
```
 * @method array getHeaders() 获取回调时的HTTP请求头部字段。
例如：下面请求头部字段来告知服务器请求主体的内容类型为JSON。
```
"Content-Type: application/json"
```
 * @method void setHeaders(array $Headers) 设置回调时的HTTP请求头部字段。
例如：下面请求头部字段来告知服务器请求主体的内容类型为JSON。
```
"Content-Type: application/json"
```
 */
class CallBackInfo extends AbstractModel
{
    /**
     * @var string 回调时的Body。
可将各类告警变量放在请求内容中，详见[帮助文档](https://cloud.tencent.com/document/product/614/74718)。
如下示例：

```
{
"TopicId": "{{ .QueryLog[0][0].topicId }}",
"key": "{{.Alarm}}",
"time": "{{ .QueryLog[0][0].time }}",
"log": "{{ .QueryLog[0][0].content.__CONTENT__ }}",
"namespace": "{{ .QueryLog[0][0].content.__TAG__.namespace }}"
}
```
     */
    public $Body;

    /**
     * @var array 回调时的HTTP请求头部字段。
例如：下面请求头部字段来告知服务器请求主体的内容类型为JSON。
```
"Content-Type: application/json"
```
     */
    public $Headers;

    /**
     * @param string $Body 回调时的Body。
可将各类告警变量放在请求内容中，详见[帮助文档](https://cloud.tencent.com/document/product/614/74718)。
如下示例：

```
{
"TopicId": "{{ .QueryLog[0][0].topicId }}",
"key": "{{.Alarm}}",
"time": "{{ .QueryLog[0][0].time }}",
"log": "{{ .QueryLog[0][0].content.__CONTENT__ }}",
"namespace": "{{ .QueryLog[0][0].content.__TAG__.namespace }}"
}
```
     * @param array $Headers 回调时的HTTP请求头部字段。
例如：下面请求头部字段来告知服务器请求主体的内容类型为JSON。
```
"Content-Type: application/json"
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }
    }
}
