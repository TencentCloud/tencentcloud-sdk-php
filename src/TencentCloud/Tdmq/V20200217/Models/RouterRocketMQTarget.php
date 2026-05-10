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
 * rocketmq router任务的目标信息
 *
 * @method string getAccessKey() 获取<p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置<p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameServerAddressList() 获取<p>namesrv地址列表，也可以是云厂商提供的接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameServerAddressList(string $NameServerAddressList) 设置<p>namesrv地址列表，也可以是云厂商提供的接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取<p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取<p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置<p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取<p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocketmqka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置<p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocketmqka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetProduceConcurrentThreadCount() 获取<p>生产者并发数，可以不用填，可以在规则创建后修改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetProduceConcurrentThreadCount(integer $TargetProduceConcurrentThreadCount) 设置<p>生产者并发数，可以不用填，可以在规则创建后修改</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouterRocketMQTarget extends AbstractModel
{
    /**
     * @var string <p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var string <p>namesrv地址列表，也可以是云厂商提供的接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameServerAddressList;

    /**
     * @var string <p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string <p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string <p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocketmqka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var integer <p>生产者并发数，可以不用填，可以在规则创建后修改</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetProduceConcurrentThreadCount;

    /**
     * @param string $AccessKey <p>access key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameServerAddressList <p>namesrv地址列表，也可以是云厂商提供的接入点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey <p>secret key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic <p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace <p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocketmqka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetProduceConcurrentThreadCount <p>生产者并发数，可以不用填，可以在规则创建后修改</p>
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

        if (array_key_exists("NameServerAddressList",$param) and $param["NameServerAddressList"] !== null) {
            $this->NameServerAddressList = $param["NameServerAddressList"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TargetProduceConcurrentThreadCount",$param) and $param["TargetProduceConcurrentThreadCount"] !== null) {
            $this->TargetProduceConcurrentThreadCount = $param["TargetProduceConcurrentThreadCount"];
        }
    }
}
