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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订阅者
 *
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getConnectedSince() 获取消费者开始连接的时间。
 * @method void setConnectedSince(string $ConnectedSince) 设置消费者开始连接的时间。
 * @method string getConsumerAddr() 获取消费者地址。
 * @method void setConsumerAddr(string $ConsumerAddr) 设置消费者地址。
 * @method string getConsumerCount() 获取消费者数量。
 * @method void setConsumerCount(string $ConsumerCount) 设置消费者数量。
 * @method string getConsumerName() 获取消费者名称。
 * @method void setConsumerName(string $ConsumerName) 设置消费者名称。
 * @method string getMsgBacklog() 获取堆积的消息数量。
 * @method void setMsgBacklog(string $MsgBacklog) 设置堆积的消息数量。
 * @method string getMsgRateExpired() 获取于TTL，此订阅下没有被发送而是被丢弃的比例。
 * @method void setMsgRateExpired(string $MsgRateExpired) 设置于TTL，此订阅下没有被发送而是被丢弃的比例。
 * @method string getMsgRateOut() 获取消费者每秒分发消息的数量之和。
 * @method void setMsgRateOut(string $MsgRateOut) 设置消费者每秒分发消息的数量之和。
 * @method string getMsgThroughputOut() 获取消费者每秒消息的byte。
 * @method void setMsgThroughputOut(string $MsgThroughputOut) 设置消费者每秒消息的byte。
 * @method string getSubscriptionName() 获取订阅名称。
 * @method void setSubscriptionName(string $SubscriptionName) 设置订阅名称。
 * @method array getConsumerSets() 获取消费者集合。
 * @method void setConsumerSets(array $ConsumerSets) 设置消费者集合。
 * @method boolean getIsOnline() 获取是否在线。
 * @method void setIsOnline(boolean $IsOnline) 设置是否在线。
 * @method array getConsumersScheduleSets() 获取消费进度集合。
 * @method void setConsumersScheduleSets(array $ConsumersScheduleSets) 设置消费进度集合。
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取最近修改时间。
 * @method void setUpdateTime(string $UpdateTime) 设置最近修改时间。
 * @method string getSubType() 获取订阅类型，Exclusive，Shared，Failover， Key_Shared，空或NULL表示未知，
 * @method void setSubType(string $SubType) 设置订阅类型，Exclusive，Shared，Failover， Key_Shared，空或NULL表示未知，
 * @method boolean getBlockedSubscriptionOnUnackedMsgs() 获取是否由于未 ack 数到达上限而被 block
 * @method void setBlockedSubscriptionOnUnackedMsgs(boolean $BlockedSubscriptionOnUnackedMsgs) 设置是否由于未 ack 数到达上限而被 block
 * @method integer getMaxUnackedMsgNum() 获取未 ack 消息数上限
 * @method void setMaxUnackedMsgNum(integer $MaxUnackedMsgNum) 设置未 ack 消息数上限
 */
class Subscription extends AbstractModel
{
    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 消费者开始连接的时间。
     */
    public $ConnectedSince;

    /**
     * @var string 消费者地址。
     */
    public $ConsumerAddr;

    /**
     * @var string 消费者数量。
     */
    public $ConsumerCount;

    /**
     * @var string 消费者名称。
     */
    public $ConsumerName;

    /**
     * @var string 堆积的消息数量。
     */
    public $MsgBacklog;

    /**
     * @var string 于TTL，此订阅下没有被发送而是被丢弃的比例。
     */
    public $MsgRateExpired;

    /**
     * @var string 消费者每秒分发消息的数量之和。
     */
    public $MsgRateOut;

    /**
     * @var string 消费者每秒消息的byte。
     */
    public $MsgThroughputOut;

    /**
     * @var string 订阅名称。
     */
    public $SubscriptionName;

    /**
     * @var array 消费者集合。
     */
    public $ConsumerSets;

    /**
     * @var boolean 是否在线。
     */
    public $IsOnline;

    /**
     * @var array 消费进度集合。
     */
    public $ConsumersScheduleSets;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间。
     */
    public $UpdateTime;

    /**
     * @var string 订阅类型，Exclusive，Shared，Failover， Key_Shared，空或NULL表示未知，
     */
    public $SubType;

    /**
     * @var boolean 是否由于未 ack 数到达上限而被 block
     */
    public $BlockedSubscriptionOnUnackedMsgs;

    /**
     * @var integer 未 ack 消息数上限
     */
    public $MaxUnackedMsgNum;

    /**
     * @param string $TopicName 主题名称。
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $ConnectedSince 消费者开始连接的时间。
     * @param string $ConsumerAddr 消费者地址。
     * @param string $ConsumerCount 消费者数量。
     * @param string $ConsumerName 消费者名称。
     * @param string $MsgBacklog 堆积的消息数量。
     * @param string $MsgRateExpired 于TTL，此订阅下没有被发送而是被丢弃的比例。
     * @param string $MsgRateOut 消费者每秒分发消息的数量之和。
     * @param string $MsgThroughputOut 消费者每秒消息的byte。
     * @param string $SubscriptionName 订阅名称。
     * @param array $ConsumerSets 消费者集合。
     * @param boolean $IsOnline 是否在线。
     * @param array $ConsumersScheduleSets 消费进度集合。
     * @param string $Remark 备注。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 最近修改时间。
     * @param string $SubType 订阅类型，Exclusive，Shared，Failover， Key_Shared，空或NULL表示未知，
     * @param boolean $BlockedSubscriptionOnUnackedMsgs 是否由于未 ack 数到达上限而被 block
     * @param integer $MaxUnackedMsgNum 未 ack 消息数上限
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ConnectedSince",$param) and $param["ConnectedSince"] !== null) {
            $this->ConnectedSince = $param["ConnectedSince"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumerCount",$param) and $param["ConsumerCount"] !== null) {
            $this->ConsumerCount = $param["ConsumerCount"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("MsgBacklog",$param) and $param["MsgBacklog"] !== null) {
            $this->MsgBacklog = $param["MsgBacklog"];
        }

        if (array_key_exists("MsgRateExpired",$param) and $param["MsgRateExpired"] !== null) {
            $this->MsgRateExpired = $param["MsgRateExpired"];
        }

        if (array_key_exists("MsgRateOut",$param) and $param["MsgRateOut"] !== null) {
            $this->MsgRateOut = $param["MsgRateOut"];
        }

        if (array_key_exists("MsgThroughputOut",$param) and $param["MsgThroughputOut"] !== null) {
            $this->MsgThroughputOut = $param["MsgThroughputOut"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("ConsumerSets",$param) and $param["ConsumerSets"] !== null) {
            $this->ConsumerSets = [];
            foreach ($param["ConsumerSets"] as $key => $value){
                $obj = new Consumer();
                $obj->deserialize($value);
                array_push($this->ConsumerSets, $obj);
            }
        }

        if (array_key_exists("IsOnline",$param) and $param["IsOnline"] !== null) {
            $this->IsOnline = $param["IsOnline"];
        }

        if (array_key_exists("ConsumersScheduleSets",$param) and $param["ConsumersScheduleSets"] !== null) {
            $this->ConsumersScheduleSets = [];
            foreach ($param["ConsumersScheduleSets"] as $key => $value){
                $obj = new ConsumersSchedule();
                $obj->deserialize($value);
                array_push($this->ConsumersScheduleSets, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("BlockedSubscriptionOnUnackedMsgs",$param) and $param["BlockedSubscriptionOnUnackedMsgs"] !== null) {
            $this->BlockedSubscriptionOnUnackedMsgs = $param["BlockedSubscriptionOnUnackedMsgs"];
        }

        if (array_key_exists("MaxUnackedMsgNum",$param) and $param["MaxUnackedMsgNum"] !== null) {
            $this->MaxUnackedMsgNum = $param["MaxUnackedMsgNum"];
        }
    }
}
