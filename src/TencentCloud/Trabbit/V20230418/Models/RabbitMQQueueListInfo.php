<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * RabbitMQ队列列表成员信息
 *
 * @method string getQueueName() 获取队列名
 * @method void setQueueName(string $QueueName) 设置队列名
 * @method string getRemark() 获取备注说明
 * @method void setRemark(string $Remark) 设置备注说明
 * @method RabbitMQQueueListConsumerDetailInfo getConsumerDetail() 获取消费者信息
 * @method void setConsumerDetail(RabbitMQQueueListConsumerDetailInfo $ConsumerDetail) 设置消费者信息
 * @method string getQueueType() 获取队列类型，取值 "classic"，"quorum"
 * @method void setQueueType(string $QueueType) 设置队列类型，取值 "classic"，"quorum"
 * @method integer getMessageHeapCount() 获取消息堆积数
 * @method void setMessageHeapCount(integer $MessageHeapCount) 设置消息堆积数
 * @method float getMessageRateIn() 获取消息生产速率，每秒
 * @method void setMessageRateIn(float $MessageRateIn) 设置消息生产速率，每秒
 * @method float getMessageRateOut() 获取消息消费速率，每秒
 * @method void setMessageRateOut(float $MessageRateOut) 设置消息消费速率，每秒
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method boolean getDurable() 获取队列是否持久化，true 为持久化，false 为非持久化
 * @method void setDurable(boolean $Durable) 设置队列是否持久化，true 为持久化，false 为非持久化
 * @method boolean getAutoDelete() 获取队列是否为自动删除队列，true 为自动删除，false 为非自动删除
 * @method void setAutoDelete(boolean $AutoDelete) 设置队列是否为自动删除队列，true 为自动删除，false 为非自动删除
 * @method string getInstanceId() 获取队列所属实例 ID
 * @method void setInstanceId(string $InstanceId) 设置队列所属实例 ID
 * @method string getVirtualHost() 获取队列所属虚拟主机名称
 * @method void setVirtualHost(string $VirtualHost) 设置队列所属虚拟主机名称
 * @method string getNode() 获取队列所在主节点名称
 * @method void setNode(string $Node) 设置队列所在主节点名称
 * @method string getPolicy() 获取生效的策略名称
 * @method void setPolicy(string $Policy) 设置生效的策略名称
 * @method string getArguments() 获取扩展参数 key-value 对象
 * @method void setArguments(string $Arguments) 设置扩展参数 key-value 对象
 * @method boolean getExclusive() 获取是否独占队列
 * @method void setExclusive(boolean $Exclusive) 设置是否独占队列
 */
class RabbitMQQueueListInfo extends AbstractModel
{
    /**
     * @var string 队列名
     */
    public $QueueName;

    /**
     * @var string 备注说明
     */
    public $Remark;

    /**
     * @var RabbitMQQueueListConsumerDetailInfo 消费者信息
     */
    public $ConsumerDetail;

    /**
     * @var string 队列类型，取值 "classic"，"quorum"
     */
    public $QueueType;

    /**
     * @var integer 消息堆积数
     */
    public $MessageHeapCount;

    /**
     * @var float 消息生产速率，每秒
     */
    public $MessageRateIn;

    /**
     * @var float 消息消费速率，每秒
     */
    public $MessageRateOut;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var boolean 队列是否持久化，true 为持久化，false 为非持久化
     */
    public $Durable;

    /**
     * @var boolean 队列是否为自动删除队列，true 为自动删除，false 为非自动删除
     */
    public $AutoDelete;

    /**
     * @var string 队列所属实例 ID
     */
    public $InstanceId;

    /**
     * @var string 队列所属虚拟主机名称
     */
    public $VirtualHost;

    /**
     * @var string 队列所在主节点名称
     */
    public $Node;

    /**
     * @var string 生效的策略名称
     */
    public $Policy;

    /**
     * @var string 扩展参数 key-value 对象
     */
    public $Arguments;

    /**
     * @var boolean 是否独占队列
     */
    public $Exclusive;

    /**
     * @param string $QueueName 队列名
     * @param string $Remark 备注说明
     * @param RabbitMQQueueListConsumerDetailInfo $ConsumerDetail 消费者信息
     * @param string $QueueType 队列类型，取值 "classic"，"quorum"
     * @param integer $MessageHeapCount 消息堆积数
     * @param float $MessageRateIn 消息生产速率，每秒
     * @param float $MessageRateOut 消息消费速率，每秒
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param boolean $Durable 队列是否持久化，true 为持久化，false 为非持久化
     * @param boolean $AutoDelete 队列是否为自动删除队列，true 为自动删除，false 为非自动删除
     * @param string $InstanceId 队列所属实例 ID
     * @param string $VirtualHost 队列所属虚拟主机名称
     * @param string $Node 队列所在主节点名称
     * @param string $Policy 生效的策略名称
     * @param string $Arguments 扩展参数 key-value 对象
     * @param boolean $Exclusive 是否独占队列
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsumerDetail",$param) and $param["ConsumerDetail"] !== null) {
            $this->ConsumerDetail = new RabbitMQQueueListConsumerDetailInfo();
            $this->ConsumerDetail->deserialize($param["ConsumerDetail"]);
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("MessageHeapCount",$param) and $param["MessageHeapCount"] !== null) {
            $this->MessageHeapCount = $param["MessageHeapCount"];
        }

        if (array_key_exists("MessageRateIn",$param) and $param["MessageRateIn"] !== null) {
            $this->MessageRateIn = $param["MessageRateIn"];
        }

        if (array_key_exists("MessageRateOut",$param) and $param["MessageRateOut"] !== null) {
            $this->MessageRateOut = $param["MessageRateOut"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }
    }
}
