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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rocketmq router mns 目标信息
 *
 * @method string getAccessKey() 获取<p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置<p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取<p>mns接入点，需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoint(string $Endpoint) 设置<p>mns接入点，需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取<p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueue() 获取<p>mns queue名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueue(string $Queue) 设置<p>mns queue名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendWithBase64() 获取<p>是否用base64编码发送mns消息。<br> ON：发送base64编码的消息体到mns</p><p>OFF：将原始消息体发送到mns</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendWithBase64(string $SendWithBase64) 设置<p>是否用base64编码发送mns消息。<br> ON：发送base64编码的消息体到mns</p><p>OFF：将原始消息体发送到mns</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetProduceConcurrentThreadCount() 获取<p>发送mns的并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetProduceConcurrentThreadCount(integer $TargetProduceConcurrentThreadCount) 设置<p>发送mns的并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取<p>topic名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/topics 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置<p>topic名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/topics 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouterMessageServiceTarget extends AbstractModel
{
    /**
     * @var string <p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var string <p>mns接入点，需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoint;

    /**
     * @var string <p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string <p>mns queue名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Queue;

    /**
     * @var string <p>是否用base64编码发送mns消息。<br> ON：发送base64编码的消息体到mns</p><p>OFF：将原始消息体发送到mns</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendWithBase64;

    /**
     * @var integer <p>发送mns的并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetProduceConcurrentThreadCount;

    /**
     * @var string <p>topic名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/topics 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @param string $AccessKey <p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint <p>mns接入点，需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey <p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Queue <p>mns queue名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendWithBase64 <p>是否用base64编码发送mns消息。<br> ON：发送base64编码的消息体到mns</p><p>OFF：将原始消息体发送到mns</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetProduceConcurrentThreadCount <p>发送mns的并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic <p>topic名字。可以在https://mns.console.aliyun.com/region/cn-shenzhen/topics 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("SendWithBase64",$param) and $param["SendWithBase64"] !== null) {
            $this->SendWithBase64 = $param["SendWithBase64"];
        }

        if (array_key_exists("TargetProduceConcurrentThreadCount",$param) and $param["TargetProduceConcurrentThreadCount"] !== null) {
            $this->TargetProduceConcurrentThreadCount = $param["TargetProduceConcurrentThreadCount"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
