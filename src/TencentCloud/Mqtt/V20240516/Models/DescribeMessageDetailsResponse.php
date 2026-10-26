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
 * @method string getBody() 获取<p>消息体</p>
 * @method void setBody(string $Body) 设置<p>消息体</p>
 * @method array getUserProperties() 获取<p>用户自定义属性</p>
 * @method void setUserProperties(array $UserProperties) 设置<p>用户自定义属性</p>
 * @method integer getStoreTimestamp() 获取<p>消息存储时间，毫秒级时间戳。</p>
 * @method void setStoreTimestamp(integer $StoreTimestamp) 设置<p>消息存储时间，毫秒级时间戳。</p>
 * @method string getMessageId() 获取<p>消息ID</p>
 * @method void setMessageId(string $MessageId) 设置<p>消息ID</p>
 * @method string getClientId() 获取<p>生产者地址</p>
 * @method void setClientId(string $ClientId) 设置<p>生产者地址</p>
 * @method string getQos() 获取<p>Topic</p>
 * @method void setQos(string $Qos) 设置<p>Topic</p>
 * @method string getOriginTopic() 获取<p>源topic</p>
 * @method void setOriginTopic(string $OriginTopic) 设置<p>源topic</p>
 * @method string getContentType() 获取<p>内容类型（MQTT5）<br>含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。<br>示例：<br>application/json：表示载荷是 JSON 格式的数据。<br>text/plain：表示载荷是纯文本。<br>application/octet-stream：表示载荷是二进制数据。</p>
 * @method void setContentType(string $ContentType) 设置<p>内容类型（MQTT5）<br>含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。<br>示例：<br>application/json：表示载荷是 JSON 格式的数据。<br>text/plain：表示载荷是纯文本。<br>application/octet-stream：表示载荷是二进制数据。</p>
 * @method integer getPayloadFormatIndicator() 获取<p>载荷格式指示符（MQTT5）<br>含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。<br>示例：<br>值为0：当载荷是二进制数据，如图片、音频等。<br>值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。</p>
 * @method void setPayloadFormatIndicator(integer $PayloadFormatIndicator) 设置<p>载荷格式指示符（MQTT5）<br>含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。<br>示例：<br>值为0：当载荷是二进制数据，如图片、音频等。<br>值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。</p>
 * @method integer getMessageExpiryInterval() 获取<p>消息过期间隔（MQTT5）<br>含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。<br>示例：<br>值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。<br>值为0：表示消息不过期，永久有效（直到被接收或会话结束）。</p>
 * @method void setMessageExpiryInterval(integer $MessageExpiryInterval) 设置<p>消息过期间隔（MQTT5）<br>含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。<br>示例：<br>值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。<br>值为0：表示消息不过期，永久有效（直到被接收或会话结束）。</p>
 * @method string getResponseTopic() 获取<p>响应主题（MQTT5）<br>含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。<br>示例：<br>发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。<br>接收方处理请求后，将响应发布到devices/device1/responses主题。</p>
 * @method void setResponseTopic(string $ResponseTopic) 设置<p>响应主题（MQTT5）<br>含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。<br>示例：<br>发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。<br>接收方处理请求后，将响应发布到devices/device1/responses主题。</p>
 * @method string getCorrelationData() 获取<p>关联数据（MQTT5）<br>含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。<br>示例：<br>发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。<br>接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。</p>
 * @method void setCorrelationData(string $CorrelationData) 设置<p>关联数据（MQTT5）<br>含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。<br>示例：<br>发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。<br>接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。</p>
 * @method string getSubscriptionIdentifier() 获取<p>订阅标识符（MQTT5）<br>含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。<br>示例：<br>客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。<br>当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。</p>
 * @method void setSubscriptionIdentifier(string $SubscriptionIdentifier) 设置<p>订阅标识符（MQTT5）<br>含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。<br>示例：<br>客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。<br>当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。</p>
 * @method boolean getRetain() 获取<p>是否保留消息</p>
 * @method void setRetain(boolean $Retain) 设置<p>是否保留消息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMessageDetailsResponse extends AbstractModel
{
    /**
     * @var string <p>消息体</p>
     */
    public $Body;

    /**
     * @var array <p>用户自定义属性</p>
     */
    public $UserProperties;

    /**
     * @var integer <p>消息存储时间，毫秒级时间戳。</p>
     */
    public $StoreTimestamp;

    /**
     * @var string <p>消息ID</p>
     */
    public $MessageId;

    /**
     * @var string <p>生产者地址</p>
     */
    public $ClientId;

    /**
     * @var string <p>Topic</p>
     */
    public $Qos;

    /**
     * @var string <p>源topic</p>
     */
    public $OriginTopic;

    /**
     * @var string <p>内容类型（MQTT5）<br>含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。<br>示例：<br>application/json：表示载荷是 JSON 格式的数据。<br>text/plain：表示载荷是纯文本。<br>application/octet-stream：表示载荷是二进制数据。</p>
     */
    public $ContentType;

    /**
     * @var integer <p>载荷格式指示符（MQTT5）<br>含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。<br>示例：<br>值为0：当载荷是二进制数据，如图片、音频等。<br>值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。</p>
     */
    public $PayloadFormatIndicator;

    /**
     * @var integer <p>消息过期间隔（MQTT5）<br>含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。<br>示例：<br>值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。<br>值为0：表示消息不过期，永久有效（直到被接收或会话结束）。</p>
     */
    public $MessageExpiryInterval;

    /**
     * @var string <p>响应主题（MQTT5）<br>含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。<br>示例：<br>发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。<br>接收方处理请求后，将响应发布到devices/device1/responses主题。</p>
     */
    public $ResponseTopic;

    /**
     * @var string <p>关联数据（MQTT5）<br>含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。<br>示例：<br>发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。<br>接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。</p>
     */
    public $CorrelationData;

    /**
     * @var string <p>订阅标识符（MQTT5）<br>含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。<br>示例：<br>客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。<br>当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。</p>
     */
    public $SubscriptionIdentifier;

    /**
     * @var boolean <p>是否保留消息</p>
     */
    public $Retain;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Body <p>消息体</p>
     * @param array $UserProperties <p>用户自定义属性</p>
     * @param integer $StoreTimestamp <p>消息存储时间，毫秒级时间戳。</p>
     * @param string $MessageId <p>消息ID</p>
     * @param string $ClientId <p>生产者地址</p>
     * @param string $Qos <p>Topic</p>
     * @param string $OriginTopic <p>源topic</p>
     * @param string $ContentType <p>内容类型（MQTT5）<br>含义：指示消息载荷的内容类型，使用标准的 MIME 类型格式。这帮助接收方正确解析和处理消息内容。<br>示例：<br>application/json：表示载荷是 JSON 格式的数据。<br>text/plain：表示载荷是纯文本。<br>application/octet-stream：表示载荷是二进制数据。</p>
     * @param integer $PayloadFormatIndicator <p>载荷格式指示符（MQTT5）<br>含义：指示载荷的格式，是一个布尔值。0表示未指定格式（二进制），1表示 UTF-8 编码的字符串。<br>示例：<br>值为0：当载荷是二进制数据，如图片、音频等。<br>值为1：当载荷是 UTF-8 编码的文本，如 JSON 字符串、XML 等。</p>
     * @param integer $MessageExpiryInterval <p>消息过期间隔（MQTT5）<br>含义：指定消息在被丢弃前的有效时间（秒）。如果消息在过期前未能送达，则会被 MQTT 服务器丢弃。<br>示例：<br>值为60：表示消息在发布后的 60 秒内有效，过期后未送达则被丢弃。<br>值为0：表示消息不过期，永久有效（直到被接收或会话结束）。</p>
     * @param string $ResponseTopic <p>响应主题（MQTT5）<br>含义：指定一个主题，用于请求 - 响应模式中的响应消息。发送方可以指定接收方应该将响应发送到哪个主题。<br>示例：<br>发送方发布请求到主题devices/device1/commands，并设置ResponseTopic为devices/device1/responses。<br>接收方处理请求后，将响应发布到devices/device1/responses主题。</p>
     * @param string $CorrelationData <p>关联数据（MQTT5）<br>含义：用于关联请求和响应的标识符，通常是一个字节数组。在请求 - 响应模式中，发送方设置此值，接收方在响应中包含相同的值，以便发送方识别响应对应的请求。<br>示例：<br>发送方生成一个唯一 ID（如 UUID 的字节数组）作为CorrelationData，附加到请求消息中。<br>接收方在响应消息中包含相同的CorrelationData，发送方通过比较此值来匹配响应和请求。</p>
     * @param string $SubscriptionIdentifier <p>订阅标识符（MQTT5）<br>含义：为订阅分配的唯一标识符，用于标识客户端的特定订阅。当服务器向客户端发送消息时，可以包含此标识符，帮助客户端识别消息对应的订阅。<br>示例：<br>客户端订阅主题devices/+/temperature，并设置SubscriptionIdentifier为123。<br>当服务器向客户端发送此主题的消息时，会在消息中包含SubscriptionIdentifier: 123，客户端可以根据此值知道消息是通过哪个订阅接收的。</p>
     * @param boolean $Retain <p>是否保留消息</p>
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

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
