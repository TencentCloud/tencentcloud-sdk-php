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
 * RocketMQ消费组订阅信息
 *
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getType() 获取主题类型：
Normal 普通,
GlobalOrder 全局顺序,
PartitionedOrder 局部顺序,
Transaction 事务消息,
DelayScheduled 延时消息,
Retry 重试,
DeadLetter 死信
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置主题类型：
Normal 普通,
GlobalOrder 全局顺序,
PartitionedOrder 局部顺序,
Transaction 事务消息,
DelayScheduled 延时消息,
Retry 重试,
DeadLetter 死信
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionNum() 获取分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpressionType() 获取过滤模式，TAG，SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpressionType(string $ExpressionType) 设置过滤模式，TAG，SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubString() 获取过滤表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubString(string $SubString) 设置过滤表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取订阅状态：
0，订阅关系一致
1，订阅关系不一致
2，未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置订阅状态：
0，订阅关系一致
1，订阅关系不一致
2，未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsumerLag() 获取消费堆积数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerLag(integer $ConsumerLag) 设置消费堆积数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerGroup() 获取消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsOnline() 获取是否在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOnline(boolean $IsOnline) 设置是否在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsumeType() 获取消费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumeType(integer $ConsumeType) 设置消费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsistency() 获取订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsistency(integer $Consistency) 设置订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTime() 获取最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryTimes() 获取最大重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置最大重试次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQSubscription extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 主题类型：
Normal 普通,
GlobalOrder 全局顺序,
PartitionedOrder 局部顺序,
Transaction 事务消息,
DelayScheduled 延时消息,
Retry 重试,
DeadLetter 死信
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionNum;

    /**
     * @var string 过滤模式，TAG，SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpressionType;

    /**
     * @var string 过滤表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubString;

    /**
     * @var integer 订阅状态：
0，订阅关系一致
1，订阅关系不一致
2，未知
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 消费堆积数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerLag;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroup;

    /**
     * @var boolean 是否在线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOnline;

    /**
     * @var integer 消费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumeType;

    /**
     * @var integer 订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Consistency;

    /**
     * @var integer 最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var integer 最大重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetryTimes;

    /**
     * @param string $Topic 主题名称
     * @param string $Type 主题类型：
Normal 普通,
GlobalOrder 全局顺序,
PartitionedOrder 局部顺序,
Transaction 事务消息,
DelayScheduled 延时消息,
Retry 重试,
DeadLetter 死信
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionNum 分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpressionType 过滤模式，TAG，SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubString 过滤表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 订阅状态：
0，订阅关系一致
1，订阅关系不一致
2，未知
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsumerLag 消费堆积数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerGroup 消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsOnline 是否在线
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsumeType 消费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Consistency 订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTime 最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryTimes 最大重试次数
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("IsOnline",$param) and $param["IsOnline"] !== null) {
            $this->IsOnline = $param["IsOnline"];
        }

        if (array_key_exists("ConsumeType",$param) and $param["ConsumeType"] !== null) {
            $this->ConsumeType = $param["ConsumeType"];
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = $param["Consistency"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }
    }
}
