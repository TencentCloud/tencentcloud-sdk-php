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
 * CreateTopic请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
 * @method void setTopicName(string $TopicName) 设置主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
 * @method integer getPartitions() 获取入参为1，即是创建非分区topic，无分区；入参大于1，表示分区topic的分区数，最大不允许超过32。
 * @method void setPartitions(integer $Partitions) 设置入参为1，即是创建非分区topic，无分区；入参大于1，表示分区topic的分区数，最大不允许超过32。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 * @method string getRemark() 获取备注，128字符以内。
 * @method void setRemark(string $Remark) 设置备注，128字符以内。
 * @method integer getTopicType() 获取该入参将逐步弃用，可切换至PulsarTopicType参数
0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列。
 * @method void setTopicType(integer $TopicType) 设置该入参将逐步弃用，可切换至PulsarTopicType参数
0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列。
 * @method integer getPulsarTopicType() 获取Pulsar 主题类型
0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
 * @method void setPulsarTopicType(integer $PulsarTopicType) 设置Pulsar 主题类型
0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
 * @method integer getMsgTTL() 获取未消费消息过期时间，单位：秒，取值范围：60秒~15天。
 * @method void setMsgTTL(integer $MsgTTL) 设置未消费消息过期时间，单位：秒，取值范围：60秒~15天。
 * @method string getUnackPolicy() 获取不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
 * @method void setUnackPolicy(string $UnackPolicy) 设置不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
 * @method boolean getIsolateConsumerEnable() 获取是否开启异常消费者隔离
 * @method void setIsolateConsumerEnable(boolean $IsolateConsumerEnable) 设置是否开启异常消费者隔离
 * @method integer getAckTimeOut() 获取消费者 Ack 超时时间，单位：秒，范围60-（3600*24）
 * @method void setAckTimeOut(integer $AckTimeOut) 设置消费者 Ack 超时时间，单位：秒，范围60-（3600*24）
 * @method integer getPulsarTopicMessageType() 获取Pulsar主题消息类型0: 混合消息1:普通消息2:延迟消息
 * @method void setPulsarTopicMessageType(integer $PulsarTopicMessageType) 设置Pulsar主题消息类型0: 混合消息1:普通消息2:延迟消息
 * @method array getTags() 获取主题标签
 * @method void setTags(array $Tags) 设置主题标签
 * @method string getDelayMessagePolicy() 获取defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
 * @method void setDelayMessagePolicy(string $DelayMessagePolicy) 设置defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
     */
    public $TopicName;

    /**
     * @var integer 入参为1，即是创建非分区topic，无分区；入参大于1，表示分区topic的分区数，最大不允许超过32。
     */
    public $Partitions;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @var string 备注，128字符以内。
     */
    public $Remark;

    /**
     * @var integer 该入参将逐步弃用，可切换至PulsarTopicType参数
0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列。
     */
    public $TopicType;

    /**
     * @var integer Pulsar 主题类型
0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
     */
    public $PulsarTopicType;

    /**
     * @var integer 未消费消息过期时间，单位：秒，取值范围：60秒~15天。
     */
    public $MsgTTL;

    /**
     * @var string 不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
     */
    public $UnackPolicy;

    /**
     * @var boolean 是否开启异常消费者隔离
     */
    public $IsolateConsumerEnable;

    /**
     * @var integer 消费者 Ack 超时时间，单位：秒，范围60-（3600*24）
     */
    public $AckTimeOut;

    /**
     * @var integer Pulsar主题消息类型0: 混合消息1:普通消息2:延迟消息
     */
    public $PulsarTopicMessageType;

    /**
     * @var array 主题标签
     */
    public $Tags;

    /**
     * @var string defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
     */
    public $DelayMessagePolicy;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
     * @param integer $Partitions 入参为1，即是创建非分区topic，无分区；入参大于1，表示分区topic的分区数，最大不允许超过32。
     * @param string $ClusterId Pulsar 集群的ID
     * @param string $Remark 备注，128字符以内。
     * @param integer $TopicType 该入参将逐步弃用，可切换至PulsarTopicType参数
0： 普通消息；
1 ：全局顺序消息；
2 ：局部顺序消息；
3 ：重试队列；
4 ：死信队列。
     * @param integer $PulsarTopicType Pulsar 主题类型
0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
     * @param integer $MsgTTL 未消费消息过期时间，单位：秒，取值范围：60秒~15天。
     * @param string $UnackPolicy 不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
     * @param boolean $IsolateConsumerEnable 是否开启异常消费者隔离
     * @param integer $AckTimeOut 消费者 Ack 超时时间，单位：秒，范围60-（3600*24）
     * @param integer $PulsarTopicMessageType Pulsar主题消息类型0: 混合消息1:普通消息2:延迟消息
     * @param array $Tags 主题标签
     * @param string $DelayMessagePolicy defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("PulsarTopicType",$param) and $param["PulsarTopicType"] !== null) {
            $this->PulsarTopicType = $param["PulsarTopicType"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("UnackPolicy",$param) and $param["UnackPolicy"] !== null) {
            $this->UnackPolicy = $param["UnackPolicy"];
        }

        if (array_key_exists("IsolateConsumerEnable",$param) and $param["IsolateConsumerEnable"] !== null) {
            $this->IsolateConsumerEnable = $param["IsolateConsumerEnable"];
        }

        if (array_key_exists("AckTimeOut",$param) and $param["AckTimeOut"] !== null) {
            $this->AckTimeOut = $param["AckTimeOut"];
        }

        if (array_key_exists("PulsarTopicMessageType",$param) and $param["PulsarTopicMessageType"] !== null) {
            $this->PulsarTopicMessageType = $param["PulsarTopicMessageType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DelayMessagePolicy",$param) and $param["DelayMessagePolicy"] !== null) {
            $this->DelayMessagePolicy = $param["DelayMessagePolicy"];
        }
    }
}
