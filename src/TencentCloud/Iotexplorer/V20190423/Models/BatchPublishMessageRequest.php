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
 * BatchPublishMessage请求参数结构体
 *
 * @method string getProductId() 获取<p>产品名称</p>
 * @method void setProductId(string $ProductId) 设置<p>产品名称</p>
 * @method array getDeviceNames() 获取<p>设备名称</p>
 * @method void setDeviceNames(array $DeviceNames) 设置<p>设备名称</p>
 * @method string getTopic() 获取<p>主题</p>
 * @method void setTopic(string $Topic) 设置<p>主题</p>
 * @method string getPayload() 获取<p>消息体</p>
 * @method void setPayload(string $Payload) 设置<p>消息体</p>
 * @method integer getQos() 获取<p>服务质量</p>
 * @method void setQos(integer $Qos) 设置<p>服务质量</p>
 * @method string getPayloadEncoding() 获取<p>消息体编码</p>
 * @method void setPayloadEncoding(string $PayloadEncoding) 设置<p>消息体编码</p>
 */
class BatchPublishMessageRequest extends AbstractModel
{
    /**
     * @var string <p>产品名称</p>
     */
    public $ProductId;

    /**
     * @var array <p>设备名称</p>
     */
    public $DeviceNames;

    /**
     * @var string <p>主题</p>
     */
    public $Topic;

    /**
     * @var string <p>消息体</p>
     */
    public $Payload;

    /**
     * @var integer <p>服务质量</p>
     */
    public $Qos;

    /**
     * @var string <p>消息体编码</p>
     */
    public $PayloadEncoding;

    /**
     * @param string $ProductId <p>产品名称</p>
     * @param array $DeviceNames <p>设备名称</p>
     * @param string $Topic <p>主题</p>
     * @param string $Payload <p>消息体</p>
     * @param integer $Qos <p>服务质量</p>
     * @param string $PayloadEncoding <p>消息体编码</p>
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

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("PayloadEncoding",$param) and $param["PayloadEncoding"] !== null) {
            $this->PayloadEncoding = $param["PayloadEncoding"];
        }
    }
}
