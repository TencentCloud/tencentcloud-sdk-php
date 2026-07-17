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
 * CallDeviceRRPCSync请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名</p>
 * @method string getPayload() 获取<p>业务原始 payload，透传给设备</p>
 * @method void setPayload(string $Payload) 设置<p>业务原始 payload，透传给设备</p>
 * @method string getEncoding() 获取<p>下行传输层编码标识；base64 时下发到 broker 的 payload 会做一次 base64 编码</p>
 * @method void setEncoding(string $Encoding) 设置<p>下行传输层编码标识；base64 时下发到 broker 的 payload 会做一次 base64 编码</p>
 * @method string getTopic() 获取<p>自定义下行 topic；为空则用 <code>$iotrrpc/down/{ProductId}/{DeviceName}/{mid}</code></p>
 * @method void setTopic(string $Topic) 设置<p>自定义下行 topic；为空则用 <code>$iotrrpc/down/{ProductId}/{DeviceName}/{mid}</code></p>
 * @method string getReplyTopic() 获取<p>自定义上行 topic 模板（支持通配符）；可留空，留空时仅依赖 clientToken 关联 ack</p>
 * @method void setReplyTopic(string $ReplyTopic) 设置<p>自定义上行 topic 模板（支持通配符）；可留空，留空时仅依赖 clientToken 关联 ack</p>
 */
class CallDeviceRRPCSyncRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名</p>
     */
    public $DeviceName;

    /**
     * @var string <p>业务原始 payload，透传给设备</p>
     */
    public $Payload;

    /**
     * @var string <p>下行传输层编码标识；base64 时下发到 broker 的 payload 会做一次 base64 编码</p>
     */
    public $Encoding;

    /**
     * @var string <p>自定义下行 topic；为空则用 <code>$iotrrpc/down/{ProductId}/{DeviceName}/{mid}</code></p>
     */
    public $Topic;

    /**
     * @var string <p>自定义上行 topic 模板（支持通配符）；可留空，留空时仅依赖 clientToken 关联 ack</p>
     */
    public $ReplyTopic;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名</p>
     * @param string $Payload <p>业务原始 payload，透传给设备</p>
     * @param string $Encoding <p>下行传输层编码标识；base64 时下发到 broker 的 payload 会做一次 base64 编码</p>
     * @param string $Topic <p>自定义下行 topic；为空则用 <code>$iotrrpc/down/{ProductId}/{DeviceName}/{mid}</code></p>
     * @param string $ReplyTopic <p>自定义上行 topic 模板（支持通配符）；可留空，留空时仅依赖 clientToken 关联 ack</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("ReplyTopic",$param) and $param["ReplyTopic"] !== null) {
            $this->ReplyTopic = $param["ReplyTopic"];
        }
    }
}
