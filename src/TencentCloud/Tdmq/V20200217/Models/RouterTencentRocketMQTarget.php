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
 * rocketmq router腾讯云目标
 *
 * @method string getTopic() 获取<p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置<p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>rocketmq实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>rocketmq实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取<p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocket2mq3ka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置<p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocket2mq3ka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetProduceConcurrentThreadCount() 获取<p>消费者并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetProduceConcurrentThreadCount(integer $TargetProduceConcurrentThreadCount) 设置<p>消费者并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetRegion() 获取<p>目标region</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetRegion(string $TargetRegion) 设置<p>目标region</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleName() 获取<p>选择TDMQ RocketMQ时，选择一个角色来完成数据同步</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置<p>选择TDMQ RocketMQ时，选择一个角色来完成数据同步</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessKey() 获取<p>选择腾讯云版RockeMQ类型后，RoleName对应的AssessKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置<p>选择腾讯云版RockeMQ类型后，RoleName对应的AssessKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取<p>选择腾讯云版RockeMQ类型后，RoleName对应的SecretKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>选择腾讯云版RockeMQ类型后，RoleName对应的SecretKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouterTencentRocketMQTarget extends AbstractModel
{
    /**
     * @var string <p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string <p>rocketmq实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocket2mq3ka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var integer <p>消费者并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetProduceConcurrentThreadCount;

    /**
     * @var string <p>目标region</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetRegion;

    /**
     * @var string <p>选择TDMQ RocketMQ时，选择一个角色来完成数据同步</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var string <p>选择腾讯云版RockeMQ类型后，RoleName对应的AssessKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var string <p>选择腾讯云版RockeMQ类型后，RoleName对应的SecretKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @param string $Topic <p>topic名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>rocketmq实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace <p>4.X的命名空间，没有使用则留空，5.X也留空。 naemspace 需要包含MQ_INST那部分. 比如：MQ_INST_rocket2mq3ka57d53rnn5_tiger_namespace</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetProduceConcurrentThreadCount <p>消费者并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetRegion <p>目标region</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleName <p>选择TDMQ RocketMQ时，选择一个角色来完成数据同步</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessKey <p>选择腾讯云版RockeMQ类型后，RoleName对应的AssessKey值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey <p>选择腾讯云版RockeMQ类型后，RoleName对应的SecretKey值</p>
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TargetProduceConcurrentThreadCount",$param) and $param["TargetProduceConcurrentThreadCount"] !== null) {
            $this->TargetProduceConcurrentThreadCount = $param["TargetProduceConcurrentThreadCount"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
