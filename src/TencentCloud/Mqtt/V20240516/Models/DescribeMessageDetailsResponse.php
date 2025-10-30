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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageDetails返回参数结构体
 *
 * @method string getBody() 获取消息体
 * @method void setBody(string $Body) 设置消息体
 * @method array getUserProperties() 获取用户自定义属性
 * @method void setUserProperties(array $UserProperties) 设置用户自定义属性
 * @method integer getStoreTimestamp() 获取消息存储时间，毫秒级时间戳。
 * @method void setStoreTimestamp(integer $StoreTimestamp) 设置消息存储时间，毫秒级时间戳。
 * @method string getMessageId() 获取消息ID
 * @method void setMessageId(string $MessageId) 设置消息ID
 * @method string getClientId() 获取生产者地址
 * @method void setClientId(string $ClientId) 设置生产者地址
 * @method string getQos() 获取Topic
 * @method void setQos(string $Qos) 设置Topic
 * @method string getOriginTopic() 获取源topic
 * @method void setOriginTopic(string $OriginTopic) 设置源topic
 * @method string getContentType() 获取内容类型（MQTT5）
含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。
示例：
application/json：表示载荷是 JSON 格式的数据。
text/plain：表示载荷是纯文本。
application/octet-stream：表示载荷是二进制数据。
 * @method void setContentType(string $ContentType) 设置内容类型（MQTT5）
含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。
示例：
application/json：表示载荷是 JSON 格式的数据。
text/plain：表示载荷是纯文本。
application/octet-stream：表示载荷是二进制数据。
 * @method integer getPayloadFormatIndicator() 获取载荷格式指示符（MQTT5）
含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。
示例：
值为0：当载荷是二进制数据，如图片、音频等。
值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。
 * @method void setPayloadFormatIndicator(integer $PayloadFormatIndicator) 设置载荷格式指示符（MQTT5）
含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。
示例：
值为0：当载荷是二进制数据，如图片、音频等。
值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。
 * @method integer getMessageExpiryInterval() 获取消息过期间隔（MQTT5）
含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。
示例：
值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。
值为0：表示消息不过期，永久有效（直到被接收或会话结束）。
 * @method void setMessageExpiryInterval(integer $MessageExpiryInterval) 设置消息过期间隔（MQTT5）
含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。
示例：
值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。
值为0：表示消息不过期，永久有效（直到被接收或会话结束）。
 * @method string getResponseTopic() 获取响应主题（MQTT5）
含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。
示例：
发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。
接收方处理请求后，将响应发布到devices/device1/responses主题。
 * @method void setResponseTopic(string $ResponseTopic) 设置响应主题（MQTT5）
含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。
示例：
发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。
接收方处理请求后，将响应发布到devices/device1/responses主题。
 * @method string getCorrelationData() 获取关联数据（MQTT5）
含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。
示例：
发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。
接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。
 * @method void setCorrelationData(string $CorrelationData) 设置关联数据（MQTT5）
含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。
示例：
发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。
接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。
 * @method string getSubscriptionIdentifier() 获取订阅标识符（MQTT5）
含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。
示例：
客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。
当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。
 * @method void setSubscriptionIdentifier(string $SubscriptionIdentifier) 设置订阅标识符（MQTT5）
含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。
示例：
客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。
当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMessageDetailsResponse extends AbstractModel
{
    /**
     * @var string 消息体
     */
    public $Body;

    /**
     * @var array 用户自定义属性
     */
    public $UserProperties;

    /**
     * @var integer 消息存储时间，毫秒级时间戳。
     */
    public $StoreTimestamp;

    /**
     * @var string 消息ID
     */
    public $MessageId;

    /**
     * @var string 生产者地址
     */
    public $ClientId;

    /**
     * @var string Topic
     */
    public $Qos;

    /**
     * @var string 源topic
     */
    public $OriginTopic;

    /**
     * @var string 内容类型（MQTT5）
含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。
示例：
application/json：表示载荷是 JSON 格式的数据。
text/plain：表示载荷是纯文本。
application/octet-stream：表示载荷是二进制数据。
     */
    public $ContentType;

    /**
     * @var integer 载荷格式指示符（MQTT5）
含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。
示例：
值为0：当载荷是二进制数据，如图片、音频等。
值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。
     */
    public $PayloadFormatIndicator;

    /**
     * @var integer 消息过期间隔（MQTT5）
含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。
示例：
值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。
值为0：表示消息不过期，永久有效（直到被接收或会话结束）。
     */
    public $MessageExpiryInterval;

    /**
     * @var string 响应主题（MQTT5）
含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。
示例：
发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。
接收方处理请求后，将响应发布到devices/device1/responses主题。
     */
    public $ResponseTopic;

    /**
     * @var string 关联数据（MQTT5）
含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。
示例：
发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。
接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。
     */
    public $CorrelationData;

    /**
     * @var string 订阅标识符（MQTT5）
含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。
示例：
客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。
当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。
     */
    public $SubscriptionIdentifier;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Body 消息体
     * @param array $UserProperties 用户自定义属性
     * @param integer $StoreTimestamp 消息存储时间，毫秒级时间戳。
     * @param string $MessageId 消息ID
     * @param string $ClientId 生产者地址
     * @param string $Qos Topic
     * @param string $OriginTopic 源topic
     * @param string $ContentType 内容类型（MQTT5）
含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。
示例：
application/json：表示载荷是 JSON 格式的数据。
text/plain：表示载荷是纯文本。
application/octet-stream：表示载荷是二进制数据。
     * @param integer $PayloadFormatIndicator 载荷格式指示符（MQTT5）
含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。
示例：
值为0：当载荷是二进制数据，如图片、音频等。
值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。
     * @param integer $MessageExpiryInterval 消息过期间隔（MQTT5）
含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。
示例：
值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。
值为0：表示消息不过期，永久有效（直到被接收或会话结束）。
     * @param string $ResponseTopic 响应主题（MQTT5）
含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。
示例：
发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。
接收方处理请求后，将响应发布到devices/device1/responses主题。
     * @param string $CorrelationData 关联数据（MQTT5）
含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。
示例：
发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。
接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。
     * @param string $SubscriptionIdentifier 订阅标识符（MQTT5）
含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。
示例：
客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。
当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("UserProperties",$param) and $param["UserProperties"] !== null) {
            $this->UserProperties = [];
            foreach ($param["UserProperties"] as $key => $value){
                $obj = new UserProperty();
                $obj->deserialize($value);
                array_push($this->UserProperties, $obj);
            }
        }

        if (array_key_exists("StoreTimestamp",$param) and $param["StoreTimestamp"] !== null) {
            $this->StoreTimestamp = $param["StoreTimestamp"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("OriginTopic",$param) and $param["OriginTopic"] !== null) {
            $this->OriginTopic = $param["OriginTopic"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("PayloadFormatIndicator",$param) and $param["PayloadFormatIndicator"] !== null) {
            $this->PayloadFormatIndicator = $param["PayloadFormatIndicator"];
        }

        if (array_key_exists("MessageExpiryInterval",$param) and $param["MessageExpiryInterval"] !== null) {
            $this->MessageExpiryInterval = $param["MessageExpiryInterval"];
        }

        if (array_key_exists("ResponseTopic",$param) and $param["ResponseTopic"] !== null) {
            $this->ResponseTopic = $param["ResponseTopic"];
        }

        if (array_key_exists("CorrelationData",$param) and $param["CorrelationData"] !== null) {
            $this->CorrelationData = $param["CorrelationData"];
        }

        if (array_key_exists("SubscriptionIdentifier",$param) and $param["SubscriptionIdentifier"] !== null) {
            $this->SubscriptionIdentifier = $param["SubscriptionIdentifier"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
