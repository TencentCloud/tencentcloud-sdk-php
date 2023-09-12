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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主题与消费组的订阅关系数据
 *
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicType() 获取主题类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicType(string $TopicType) 设置主题类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicQueueNum() 获取单个节点上主题队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicQueueNum(integer $TopicQueueNum) 设置单个节点上主题队列数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerGroup() 获取消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsOnline() 获取是否在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOnline(boolean $IsOnline) 设置是否在线
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumeType() 获取消费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumeType(string $ConsumeType) 设置消费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubString() 获取订阅规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubString(string $SubString) 设置订阅规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpressionType() 获取过滤类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpressionType(string $ExpressionType) 设置过滤类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsistency() 获取订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsistency(integer $Consistency) 设置订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsumerLag() 获取消费堆积
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerLag(integer $ConsumerLag) 设置消费堆积
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTime() 获取最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryTimes() 获取最大重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置最大重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getConsumeMessageOrderly() 获取是否顺序消费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置是否顺序消费
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscriptionData extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string 主题类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicType;

    /**
     * @var integer 单个节点上主题队列数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicQueueNum;

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
     * @var string 消费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumeType;

    /**
     * @var string 订阅规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubString;

    /**
     * @var string 过滤类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpressionType;

    /**
     * @var integer 订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Consistency;

    /**
     * @var integer 消费堆积
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerLag;

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
     * @var boolean 是否顺序消费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumeMessageOrderly;

    /**
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicType 主题类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicQueueNum 单个节点上主题队列数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerGroup 消费组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsOnline 是否在线
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumeType 消费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubString 订阅规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpressionType 过滤类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Consistency 订阅一致性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsumerLag 消费堆积
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTime 最后消费进度更新时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryTimes 最大重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ConsumeMessageOrderly 是否顺序消费
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("TopicQueueNum",$param) and $param["TopicQueueNum"] !== null) {
            $this->TopicQueueNum = $param["TopicQueueNum"];
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

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("ExpressionType",$param) and $param["ExpressionType"] !== null) {
            $this->ExpressionType = $param["ExpressionType"];
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = $param["Consistency"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }
    }
}
