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
 * rocketmq router mns 源信息
 *
 * @method string getAccessKey() 获取<p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置<p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取<p>mns接入点。<br>需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoint(string $Endpoint) 设置<p>mns接入点。<br>需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueue() 获取<p>mns queue名字。<br>可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueue(string $Queue) 设置<p>mns queue名字。<br>可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取<p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableDecodeBody() 获取<p>是否自动解码mns body。<br>ON：自动解码，复制后的消息内容为解码后的明文。<br>OFF：不用解码，保持Mns消息体原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDecodeBody(string $EnableDecodeBody) 设置<p>是否自动解码mns body。<br>ON：自动解码，复制后的消息内容为解码后的明文。<br>OFF：不用解码，保持Mns消息体原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceConsumeConcurrentThreadCount() 获取<p>mns消费并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceConsumeConcurrentThreadCount(integer $SourceConsumeConcurrentThreadCount) 设置<p>mns消费并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFilterFromTimestampMs() 获取<p>过滤时间戳，毫秒级时间戳</p>
 * @method void setFilterFromTimestampMs(integer $FilterFromTimestampMs) 设置<p>过滤时间戳，毫秒级时间戳</p>
 */
class RouterMessageServiceSource extends AbstractModel
{
    /**
     * @var string <p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var string <p>mns接入点。<br>需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoint;

    /**
     * @var string <p>mns queue名字。<br>可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Queue;

    /**
     * @var string <p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string <p>是否自动解码mns body。<br>ON：自动解码，复制后的消息内容为解码后的明文。<br>OFF：不用解码，保持Mns消息体原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDecodeBody;

    /**
     * @var integer <p>mns消费并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceConsumeConcurrentThreadCount;

    /**
     * @var integer <p>过滤时间戳，毫秒级时间戳</p>
     */
    public $FilterFromTimestampMs;

    /**
     * @param string $AccessKey <p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint <p>mns接入点。<br>需要和router内网联通，一般是公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Queue <p>mns queue名字。<br>可以在https://mns.console.aliyun.com/region/cn-shenzhen/queues 看到</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey <p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableDecodeBody <p>是否自动解码mns body。<br>ON：自动解码，复制后的消息内容为解码后的明文。<br>OFF：不用解码，保持Mns消息体原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceConsumeConcurrentThreadCount <p>mns消费并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FilterFromTimestampMs <p>过滤时间戳，毫秒级时间戳</p>
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

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("EnableDecodeBody",$param) and $param["EnableDecodeBody"] !== null) {
            $this->EnableDecodeBody = $param["EnableDecodeBody"];
        }

        if (array_key_exists("SourceConsumeConcurrentThreadCount",$param) and $param["SourceConsumeConcurrentThreadCount"] !== null) {
            $this->SourceConsumeConcurrentThreadCount = $param["SourceConsumeConcurrentThreadCount"];
        }

        if (array_key_exists("FilterFromTimestampMs",$param) and $param["FilterFromTimestampMs"] !== null) {
            $this->FilterFromTimestampMs = $param["FilterFromTimestampMs"];
        }
    }
}
