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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRabbitMQServerlessQueue请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVirtualHost() 获取VHost参数
 * @method void setVirtualHost(string $VirtualHost) 设置VHost参数
 * @method string getQueueName() 获取队列名称
 * @method void setQueueName(string $QueueName) 设置队列名称
 * @method string getQueueType() 获取只支持 classic
 * @method void setQueueType(string $QueueType) 设置只支持 classic
 * @method boolean getDurable() 获取持久标记,classic类型必传,quorum类型无需传入固定为true
 * @method void setDurable(boolean $Durable) 设置持久标记,classic类型必传,quorum类型无需传入固定为true
 * @method boolean getAutoDelete() 获取自动清除,classic类型必传,quorum类型无需传入固定为false
 * @method void setAutoDelete(boolean $AutoDelete) 设置自动清除,classic类型必传,quorum类型无需传入固定为false
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getMessageTTL() 获取MessageTTL参数,classic类型专用
 * @method void setMessageTTL(integer $MessageTTL) 设置MessageTTL参数,classic类型专用
 * @method integer getAutoExpire() 获取AutoExpire参数，单位为 ms，队列在指定时间内没有被使用，将会被删除
 * @method void setAutoExpire(integer $AutoExpire) 设置AutoExpire参数，单位为 ms，队列在指定时间内没有被使用，将会被删除
 * @method integer getMaxLength() 获取MaxLength参数。队列可以容纳的最大条数。若超出上限，将根据 overview behavior 处理
 * @method void setMaxLength(integer $MaxLength) 设置MaxLength参数。队列可以容纳的最大条数。若超出上限，将根据 overview behavior 处理
 * @method integer getMaxLengthBytes() 获取MaxLengthBytes参数。若超出上限，将根据 overview behavior 处理。
 * @method void setMaxLengthBytes(integer $MaxLengthBytes) 设置MaxLengthBytes参数。若超出上限，将根据 overview behavior 处理。
 * @method integer getDeliveryLimit() 获取DeliveryLimit参数,quorum类型专用
 * @method void setDeliveryLimit(integer $DeliveryLimit) 设置DeliveryLimit参数,quorum类型专用
 * @method string getOverflowBehaviour() 获取OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
 * @method void setOverflowBehaviour(string $OverflowBehaviour) 设置OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
 * @method string getDeadLetterExchange() 获取DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
 * @method void setDeadLetterExchange(string $DeadLetterExchange) 设置DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
 * @method string getDeadLetterRoutingKey() 获取DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) 设置DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
 * @method boolean getSingleActiveConsumer() 获取SingleActiveConsumer参数。若开启，需确保每次有且只有一个消费者从队列中消费
 * @method void setSingleActiveConsumer(boolean $SingleActiveConsumer) 设置SingleActiveConsumer参数。若开启，需确保每次有且只有一个消费者从队列中消费
 * @method integer getMaximumPriority() 获取MaximumPriority参数,classic类型专用
 * @method void setMaximumPriority(integer $MaximumPriority) 设置MaximumPriority参数,classic类型专用
 * @method boolean getLazyMode() 获取LazyMode参数,classic类型专用
 * @method void setLazyMode(boolean $LazyMode) 设置LazyMode参数,classic类型专用
 * @method string getMasterLocator() 获取MasterLocator参数,classic类型专用,取值为min-masters,client-local或random
 * @method void setMasterLocator(string $MasterLocator) 设置MasterLocator参数,classic类型专用,取值为min-masters,client-local或random
 * @method integer getMaxInMemoryLength() 获取MaxInMemoryLength参数，quorum类型专用。quorum 队列的内存中最大消息数量
 * @method void setMaxInMemoryLength(integer $MaxInMemoryLength) 设置MaxInMemoryLength参数，quorum类型专用。quorum 队列的内存中最大消息数量
 * @method integer getMaxInMemoryBytes() 获取MaxInMemoryBytes参数，quorum类型专用。quorum 队列的内存中最大数总消息大小
 * @method void setMaxInMemoryBytes(integer $MaxInMemoryBytes) 设置MaxInMemoryBytes参数，quorum类型专用。quorum 队列的内存中最大数总消息大小
 * @method string getNode() 获取Node参数，非必填，指定创建 queue 所在节点
 * @method void setNode(string $Node) 设置Node参数，非必填，指定创建 queue 所在节点
 * @method string getDeadLetterStrategy() 获取仲裁队列死信一致性策略，at-most-once、at-least-once，默认是at-most-once
 * @method void setDeadLetterStrategy(string $DeadLetterStrategy) 设置仲裁队列死信一致性策略，at-most-once、at-least-once，默认是at-most-once
 * @method string getQueueLeaderLocator() 获取仲裁队列的领导者选举策略，client-local、balanced，默认是client-local
 * @method void setQueueLeaderLocator(string $QueueLeaderLocator) 设置仲裁队列的领导者选举策略，client-local、balanced，默认是client-local
 * @method integer getQuorumInitialGroupSize() 获取仲裁队列的初始副本组大小，默认3
 * @method void setQuorumInitialGroupSize(integer $QuorumInitialGroupSize) 设置仲裁队列的初始副本组大小，默认3
 */
class CreateRabbitMQServerlessQueueRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string VHost参数
     */
    public $VirtualHost;

    /**
     * @var string 队列名称
     */
    public $QueueName;

    /**
     * @var string 只支持 classic
     */
    public $QueueType;

    /**
     * @var boolean 持久标记,classic类型必传,quorum类型无需传入固定为true
     */
    public $Durable;

    /**
     * @var boolean 自动清除,classic类型必传,quorum类型无需传入固定为false
     */
    public $AutoDelete;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer MessageTTL参数,classic类型专用
     */
    public $MessageTTL;

    /**
     * @var integer AutoExpire参数，单位为 ms，队列在指定时间内没有被使用，将会被删除
     */
    public $AutoExpire;

    /**
     * @var integer MaxLength参数。队列可以容纳的最大条数。若超出上限，将根据 overview behavior 处理
     */
    public $MaxLength;

    /**
     * @var integer MaxLengthBytes参数。若超出上限，将根据 overview behavior 处理。
     */
    public $MaxLengthBytes;

    /**
     * @var integer DeliveryLimit参数,quorum类型专用
     */
    public $DeliveryLimit;

    /**
     * @var string OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
     */
    public $OverflowBehaviour;

    /**
     * @var string DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
     */
    public $DeadLetterExchange;

    /**
     * @var string DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
     */
    public $DeadLetterRoutingKey;

    /**
     * @var boolean SingleActiveConsumer参数。若开启，需确保每次有且只有一个消费者从队列中消费
     */
    public $SingleActiveConsumer;

    /**
     * @var integer MaximumPriority参数,classic类型专用
     */
    public $MaximumPriority;

    /**
     * @var boolean LazyMode参数,classic类型专用
     */
    public $LazyMode;

    /**
     * @var string MasterLocator参数,classic类型专用,取值为min-masters,client-local或random
     */
    public $MasterLocator;

    /**
     * @var integer MaxInMemoryLength参数，quorum类型专用。quorum 队列的内存中最大消息数量
     */
    public $MaxInMemoryLength;

    /**
     * @var integer MaxInMemoryBytes参数，quorum类型专用。quorum 队列的内存中最大数总消息大小
     */
    public $MaxInMemoryBytes;

    /**
     * @var string Node参数，非必填，指定创建 queue 所在节点
     */
    public $Node;

    /**
     * @var string 仲裁队列死信一致性策略，at-most-once、at-least-once，默认是at-most-once
     */
    public $DeadLetterStrategy;

    /**
     * @var string 仲裁队列的领导者选举策略，client-local、balanced，默认是client-local
     */
    public $QueueLeaderLocator;

    /**
     * @var integer 仲裁队列的初始副本组大小，默认3
     */
    public $QuorumInitialGroupSize;

    /**
     * @param string $InstanceId 实例Id
     * @param string $VirtualHost VHost参数
     * @param string $QueueName 队列名称
     * @param string $QueueType 只支持 classic
     * @param boolean $Durable 持久标记,classic类型必传,quorum类型无需传入固定为true
     * @param boolean $AutoDelete 自动清除,classic类型必传,quorum类型无需传入固定为false
     * @param string $Remark 备注
     * @param integer $MessageTTL MessageTTL参数,classic类型专用
     * @param integer $AutoExpire AutoExpire参数，单位为 ms，队列在指定时间内没有被使用，将会被删除
     * @param integer $MaxLength MaxLength参数。队列可以容纳的最大条数。若超出上限，将根据 overview behavior 处理
     * @param integer $MaxLengthBytes MaxLengthBytes参数。若超出上限，将根据 overview behavior 处理。
     * @param integer $DeliveryLimit DeliveryLimit参数,quorum类型专用
     * @param string $OverflowBehaviour OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
     * @param string $DeadLetterExchange DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
     * @param string $DeadLetterRoutingKey DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
     * @param boolean $SingleActiveConsumer SingleActiveConsumer参数。若开启，需确保每次有且只有一个消费者从队列中消费
     * @param integer $MaximumPriority MaximumPriority参数,classic类型专用
     * @param boolean $LazyMode LazyMode参数,classic类型专用
     * @param string $MasterLocator MasterLocator参数,classic类型专用,取值为min-masters,client-local或random
     * @param integer $MaxInMemoryLength MaxInMemoryLength参数，quorum类型专用。quorum 队列的内存中最大消息数量
     * @param integer $MaxInMemoryBytes MaxInMemoryBytes参数，quorum类型专用。quorum 队列的内存中最大数总消息大小
     * @param string $Node Node参数，非必填，指定创建 queue 所在节点
     * @param string $DeadLetterStrategy 仲裁队列死信一致性策略，at-most-once、at-least-once，默认是at-most-once
     * @param string $QueueLeaderLocator 仲裁队列的领导者选举策略，client-local、balanced，默认是client-local
     * @param integer $QuorumInitialGroupSize 仲裁队列的初始副本组大小，默认3
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageTTL",$param) and $param["MessageTTL"] !== null) {
            $this->MessageTTL = $param["MessageTTL"];
        }

        if (array_key_exists("AutoExpire",$param) and $param["AutoExpire"] !== null) {
            $this->AutoExpire = $param["AutoExpire"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("MaxLengthBytes",$param) and $param["MaxLengthBytes"] !== null) {
            $this->MaxLengthBytes = $param["MaxLengthBytes"];
        }

        if (array_key_exists("DeliveryLimit",$param) and $param["DeliveryLimit"] !== null) {
            $this->DeliveryLimit = $param["DeliveryLimit"];
        }

        if (array_key_exists("OverflowBehaviour",$param) and $param["OverflowBehaviour"] !== null) {
            $this->OverflowBehaviour = $param["OverflowBehaviour"];
        }

        if (array_key_exists("DeadLetterExchange",$param) and $param["DeadLetterExchange"] !== null) {
            $this->DeadLetterExchange = $param["DeadLetterExchange"];
        }

        if (array_key_exists("DeadLetterRoutingKey",$param) and $param["DeadLetterRoutingKey"] !== null) {
            $this->DeadLetterRoutingKey = $param["DeadLetterRoutingKey"];
        }

        if (array_key_exists("SingleActiveConsumer",$param) and $param["SingleActiveConsumer"] !== null) {
            $this->SingleActiveConsumer = $param["SingleActiveConsumer"];
        }

        if (array_key_exists("MaximumPriority",$param) and $param["MaximumPriority"] !== null) {
            $this->MaximumPriority = $param["MaximumPriority"];
        }

        if (array_key_exists("LazyMode",$param) and $param["LazyMode"] !== null) {
            $this->LazyMode = $param["LazyMode"];
        }

        if (array_key_exists("MasterLocator",$param) and $param["MasterLocator"] !== null) {
            $this->MasterLocator = $param["MasterLocator"];
        }

        if (array_key_exists("MaxInMemoryLength",$param) and $param["MaxInMemoryLength"] !== null) {
            $this->MaxInMemoryLength = $param["MaxInMemoryLength"];
        }

        if (array_key_exists("MaxInMemoryBytes",$param) and $param["MaxInMemoryBytes"] !== null) {
            $this->MaxInMemoryBytes = $param["MaxInMemoryBytes"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }

        if (array_key_exists("DeadLetterStrategy",$param) and $param["DeadLetterStrategy"] !== null) {
            $this->DeadLetterStrategy = $param["DeadLetterStrategy"];
        }

        if (array_key_exists("QueueLeaderLocator",$param) and $param["QueueLeaderLocator"] !== null) {
            $this->QueueLeaderLocator = $param["QueueLeaderLocator"];
        }

        if (array_key_exists("QuorumInitialGroupSize",$param) and $param["QuorumInitialGroupSize"] !== null) {
            $this->QuorumInitialGroupSize = $param["QuorumInitialGroupSize"];
        }
    }
}
