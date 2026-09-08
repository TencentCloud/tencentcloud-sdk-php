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
 * PublishMessage请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getPayload() 获取<p>消息负载 Payload，是消息的实际内容，需要按 encoding 指定的编码方式进行编码</p>
 * @method void setPayload(string $Payload) 设置<p>消息负载 Payload，是消息的实际内容，需要按 encoding 指定的编码方式进行编码</p>
 * @method string getTargetTopic() 获取<p>消息目的主题，该参数与 TargetClientId 二选一</p>
 * @method void setTargetTopic(string $TargetTopic) 设置<p>消息目的主题，该参数与 TargetClientId 二选一</p>
 * @method string getTargetClientId() 获取<p>消息目的客户端 ID，该参数与 TargetTopic 二选一</p>
 * @method void setTargetClientId(string $TargetClientId) 设置<p>消息目的客户端 ID，该参数与 TargetTopic 二选一</p>
 * @method string getEncoding() 获取<p>消息 payload 编码，可选 plain 或 base64，默认为 plain（即不编码）</p>
 * @method void setEncoding(string $Encoding) 设置<p>消息 payload 编码，可选 plain 或 base64，默认为 plain（即不编码）</p>
 * @method integer getQos() 获取<p>消息的服务质量等级，默认为 1<br>QoS 0（至多一次）消息发送后，不保证接收方一定收到，也不要求接收方确认。<br>QoS 1（至少一次）消息至少被接收方成功接收一次，但可能重复。<br>QoS 2（恰好一次）消息确保被接收方接收且仅接收一次，无重复。</p>
 * @method void setQos(integer $Qos) 设置<p>消息的服务质量等级，默认为 1<br>QoS 0（至多一次）消息发送后，不保证接收方一定收到，也不要求接收方确认。<br>QoS 1（至少一次）消息至少被接收方成功接收一次，但可能重复。<br>QoS 2（恰好一次）消息确保被接收方接收且仅接收一次，无重复。</p>
 * @method boolean getRetain() 获取<p>是否为保留消息，默认为 false，且仅支持发布到主题的消息设置为 true</p>
 * @method void setRetain(boolean $Retain) 设置<p>是否为保留消息，默认为 false，且仅支持发布到主题的消息设置为 true</p>
 */
class PublishMessageRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>消息负载 Payload，是消息的实际内容，需要按 encoding 指定的编码方式进行编码</p>
     */
    public $Payload;

    /**
     * @var string <p>消息目的主题，该参数与 TargetClientId 二选一</p>
     */
    public $TargetTopic;

    /**
     * @var string <p>消息目的客户端 ID，该参数与 TargetTopic 二选一</p>
     */
    public $TargetClientId;

    /**
     * @var string <p>消息 payload 编码，可选 plain 或 base64，默认为 plain（即不编码）</p>
     */
    public $Encoding;

    /**
     * @var integer <p>消息的服务质量等级，默认为 1<br>QoS 0（至多一次）消息发送后，不保证接收方一定收到，也不要求接收方确认。<br>QoS 1（至少一次）消息至少被接收方成功接收一次，但可能重复。<br>QoS 2（恰好一次）消息确保被接收方接收且仅接收一次，无重复。</p>
     */
    public $Qos;

    /**
     * @var boolean <p>是否为保留消息，默认为 false，且仅支持发布到主题的消息设置为 true</p>
     */
    public $Retain;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $Payload <p>消息负载 Payload，是消息的实际内容，需要按 encoding 指定的编码方式进行编码</p>
     * @param string $TargetTopic <p>消息目的主题，该参数与 TargetClientId 二选一</p>
     * @param string $TargetClientId <p>消息目的客户端 ID，该参数与 TargetTopic 二选一</p>
     * @param string $Encoding <p>消息 payload 编码，可选 plain 或 base64，默认为 plain（即不编码）</p>
     * @param integer $Qos <p>消息的服务质量等级，默认为 1<br>QoS 0（至多一次）消息发送后，不保证接收方一定收到，也不要求接收方确认。<br>QoS 1（至少一次）消息至少被接收方成功接收一次，但可能重复。<br>QoS 2（恰好一次）消息确保被接收方接收且仅接收一次，无重复。</p>
     * @param boolean $Retain <p>是否为保留消息，默认为 false，且仅支持发布到主题的消息设置为 true</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("TargetTopic",$param) and $param["TargetTopic"] !== null) {
            $this->TargetTopic = $param["TargetTopic"];
        }

        if (array_key_exists("TargetClientId",$param) and $param["TargetClientId"] !== null) {
            $this->TargetClientId = $param["TargetClientId"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }
    }
}
