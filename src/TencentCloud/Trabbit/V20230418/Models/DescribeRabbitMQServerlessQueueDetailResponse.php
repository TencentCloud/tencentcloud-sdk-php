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
 * DescribeRabbitMQServerlessQueueDetail返回参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getVirtualHost() 获取Vhost参数
 * @method void setVirtualHost(string $VirtualHost) 设置Vhost参数
 * @method string getQueueName() 获取队列名称
 * @method void setQueueName(string $QueueName) 设置队列名称
 * @method string getQueueType() 获取队列类型,取值classic或quorum
 * @method void setQueueType(string $QueueType) 设置队列类型,取值classic或quorum
 * @method integer getConsumers() 获取在线消费者数量
 * @method void setConsumers(integer $Consumers) 设置在线消费者数量
 * @method boolean getDurable() 获取持久标记
 * @method void setDurable(boolean $Durable) 设置持久标记
 * @method boolean getAutoDelete() 获取自动清除
 * @method void setAutoDelete(boolean $AutoDelete) 设置自动清除
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getMessageTTL() 获取MessageTTL参数,classic类型专用
 * @method void setMessageTTL(integer $MessageTTL) 设置MessageTTL参数,classic类型专用
 * @method integer getAutoExpire() 获取AutoExpire参数
 * @method void setAutoExpire(integer $AutoExpire) 设置AutoExpire参数
 * @method integer getMaxLength() 获取MaxLength参数
 * @method void setMaxLength(integer $MaxLength) 设置MaxLength参数
 * @method integer getMaxLengthBytes() 获取MaxLengthBytes参数
 * @method void setMaxLengthBytes(integer $MaxLengthBytes) 设置MaxLengthBytes参数
 * @method integer getDeliveryLimit() 获取DeliveryLimit参数,quorum类型专用
 * @method void setDeliveryLimit(integer $DeliveryLimit) 设置DeliveryLimit参数,quorum类型专用
 * @method string getOverflowBehaviour() 获取OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
 * @method void setOverflowBehaviour(string $OverflowBehaviour) 设置OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
 * @method string getDeadLetterExchange() 获取DeadLetterExchange参数
 * @method void setDeadLetterExchange(string $DeadLetterExchange) 设置DeadLetterExchange参数
 * @method string getDeadLetterRoutingKey() 获取DeadLetterRoutingKey参数
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) 设置DeadLetterRoutingKey参数
 * @method boolean getSingleActiveConsumer() 获取SingleActiveConsumer参数
 * @method void setSingleActiveConsumer(boolean $SingleActiveConsumer) 设置SingleActiveConsumer参数
 * @method integer getMaximumPriority() 获取MaximumPriority参数,classic类型专用
 * @method void setMaximumPriority(integer $MaximumPriority) 设置MaximumPriority参数,classic类型专用
 * @method boolean getLazyMode() 获取LazyMode参数,classic类型专用
 * @method void setLazyMode(boolean $LazyMode) 设置LazyMode参数,classic类型专用
 * @method string getMasterLocator() 获取MasterLocator参数,classic类型专用
 * @method void setMasterLocator(string $MasterLocator) 设置MasterLocator参数,classic类型专用
 * @method integer getMaxInMemoryLength() 获取MaxInMemoryLength参数,quorum类型专用
 * @method void setMaxInMemoryLength(integer $MaxInMemoryLength) 设置MaxInMemoryLength参数,quorum类型专用
 * @method integer getMaxInMemoryBytes() 获取MaxInMemoryBytes参数,quorum类型专用
 * @method void setMaxInMemoryBytes(integer $MaxInMemoryBytes) 设置MaxInMemoryBytes参数,quorum类型专用
 * @method integer getCreateTime() 获取创建时间戳,单位秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳,单位秒
 * @method string getNode() 获取节点
 * @method void setNode(string $Node) 设置节点
 * @method string getDeadLetterStrategy() 获取仲裁队列死信一致性策略
 * @method void setDeadLetterStrategy(string $DeadLetterStrategy) 设置仲裁队列死信一致性策略
 * @method string getQueueLeaderLocator() 获取仲裁队列的领导者选举策略
 * @method void setQueueLeaderLocator(string $QueueLeaderLocator) 设置仲裁队列的领导者选举策略
 * @method integer getQuorumInitialGroupSize() 获取仲裁队列的初始副本组大小
 * @method void setQuorumInitialGroupSize(integer $QuorumInitialGroupSize) 设置仲裁队列的初始副本组大小
 * @method boolean getExclusive() 获取是否为独占队列
 * @method void setExclusive(boolean $Exclusive) 设置是否为独占队列
 * @method string getPolicy() 获取生效的策略名
 * @method void setPolicy(string $Policy) 设置生效的策略名
 * @method string getArguments() 获取扩展参数 key-value
 * @method void setArguments(string $Arguments) 设置扩展参数 key-value
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRabbitMQServerlessQueueDetailResponse extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string Vhost参数
     */
    public $VirtualHost;

    /**
     * @var string 队列名称
     */
    public $QueueName;

    /**
     * @var string 队列类型,取值classic或quorum
     */
    public $QueueType;

    /**
     * @var integer 在线消费者数量
     */
    public $Consumers;

    /**
     * @var boolean 持久标记
     */
    public $Durable;

    /**
     * @var boolean 自动清除
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
     * @var integer AutoExpire参数
     */
    public $AutoExpire;

    /**
     * @var integer MaxLength参数
     */
    public $MaxLength;

    /**
     * @var integer MaxLengthBytes参数
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
     * @var string DeadLetterExchange参数
     */
    public $DeadLetterExchange;

    /**
     * @var string DeadLetterRoutingKey参数
     */
    public $DeadLetterRoutingKey;

    /**
     * @var boolean SingleActiveConsumer参数
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
     * @var string MasterLocator参数,classic类型专用
     */
    public $MasterLocator;

    /**
     * @var integer MaxInMemoryLength参数,quorum类型专用
     */
    public $MaxInMemoryLength;

    /**
     * @var integer MaxInMemoryBytes参数,quorum类型专用
     */
    public $MaxInMemoryBytes;

    /**
     * @var integer 创建时间戳,单位秒
     */
    public $CreateTime;

    /**
     * @var string 节点
     */
    public $Node;

    /**
     * @var string 仲裁队列死信一致性策略
     */
    public $DeadLetterStrategy;

    /**
     * @var string 仲裁队列的领导者选举策略
     */
    public $QueueLeaderLocator;

    /**
     * @var integer 仲裁队列的初始副本组大小
     */
    public $QuorumInitialGroupSize;

    /**
     * @var boolean 是否为独占队列
     */
    public $Exclusive;

    /**
     * @var string 生效的策略名
     */
    public $Policy;

    /**
     * @var string 扩展参数 key-value
     */
    public $Arguments;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例id
     * @param string $VirtualHost Vhost参数
     * @param string $QueueName 队列名称
     * @param string $QueueType 队列类型,取值classic或quorum
     * @param integer $Consumers 在线消费者数量
     * @param boolean $Durable 持久标记
     * @param boolean $AutoDelete 自动清除
     * @param string $Remark 备注
     * @param integer $MessageTTL MessageTTL参数,classic类型专用
     * @param integer $AutoExpire AutoExpire参数
     * @param integer $MaxLength MaxLength参数
     * @param integer $MaxLengthBytes MaxLengthBytes参数
     * @param integer $DeliveryLimit DeliveryLimit参数,quorum类型专用
     * @param string $OverflowBehaviour OverflowBehaviour参数,取值为drop-head, reject-publish或reject-publish-dlx
     * @param string $DeadLetterExchange DeadLetterExchange参数
     * @param string $DeadLetterRoutingKey DeadLetterRoutingKey参数
     * @param boolean $SingleActiveConsumer SingleActiveConsumer参数
     * @param integer $MaximumPriority MaximumPriority参数,classic类型专用
     * @param boolean $LazyMode LazyMode参数,classic类型专用
     * @param string $MasterLocator MasterLocator参数,classic类型专用
     * @param integer $MaxInMemoryLength MaxInMemoryLength参数,quorum类型专用
     * @param integer $MaxInMemoryBytes MaxInMemoryBytes参数,quorum类型专用
     * @param integer $CreateTime 创建时间戳,单位秒
     * @param string $Node 节点
     * @param string $DeadLetterStrategy 仲裁队列死信一致性策略
     * @param string $QueueLeaderLocator 仲裁队列的领导者选举策略
     * @param integer $QuorumInitialGroupSize 仲裁队列的初始副本组大小
     * @param boolean $Exclusive 是否为独占队列
     * @param string $Policy 生效的策略名
     * @param string $Arguments 扩展参数 key-value
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

        if (array_key_exists("Consumers",$param) and $param["Consumers"] !== null) {
            $this->Consumers = $param["Consumers"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
