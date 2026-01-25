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
 * ModifyTopic请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method string getTopicName() 获取主题名。
 * @method void setTopicName(string $TopicName) 设置主题名。
 * @method integer getPartitions() 获取分区数，必须大于或者等于原分区数，若想维持原分区数请输入原数目，修改分区数仅对非全局顺序消息起效果，不允许超过32个分区。
 * @method void setPartitions(integer $Partitions) 设置分区数，必须大于或者等于原分区数，若想维持原分区数请输入原数目，修改分区数仅对非全局顺序消息起效果，不允许超过32个分区。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 * @method string getRemark() 获取备注，128字符以内。
 * @method void setRemark(string $Remark) 设置备注，128字符以内。
 * @method integer getMsgTTL() 获取未消费消息过期时间，单位：秒，取值范围：60秒~15天。

 * @method void setMsgTTL(integer $MsgTTL) 设置未消费消息过期时间，单位：秒，取值范围：60秒~15天。

 * @method string getUnackPolicy() 获取不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
 * @method void setUnackPolicy(string $UnackPolicy) 设置不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
 * @method boolean getIsolateConsumerEnable() 获取是否开启异常消费者隔离
 * @method void setIsolateConsumerEnable(boolean $IsolateConsumerEnable) 设置是否开启异常消费者隔离
 * @method integer getAckTimeOut() 获取消费者 Ack 超时时间，单位：秒，范围60-（3600*24
 * @method void setAckTimeOut(integer $AckTimeOut) 设置消费者 Ack 超时时间，单位：秒，范围60-（3600*24
 * @method string getDelayMessagePolicy() 获取defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
 * @method void setDelayMessagePolicy(string $DelayMessagePolicy) 设置defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var string 主题名。
     */
    public $TopicName;

    /**
     * @var integer 分区数，必须大于或者等于原分区数，若想维持原分区数请输入原数目，修改分区数仅对非全局顺序消息起效果，不允许超过32个分区。
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
     * @var integer 消费者 Ack 超时时间，单位：秒，范围60-（3600*24
     */
    public $AckTimeOut;

    /**
     * @var string defaultPolicy/timingwheelPolicy不传默认是社区版本延迟消息策略
     */
    public $DelayMessagePolicy;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param string $TopicName 主题名。
     * @param integer $Partitions 分区数，必须大于或者等于原分区数，若想维持原分区数请输入原数目，修改分区数仅对非全局顺序消息起效果，不允许超过32个分区。
     * @param string $ClusterId Pulsar 集群的ID
     * @param string $Remark 备注，128字符以内。
     * @param integer $MsgTTL 未消费消息过期时间，单位：秒，取值范围：60秒~15天。

     * @param string $UnackPolicy 不传默认是原生策略，DefaultPolicy表示当订阅下达到最大未确认消息数 5000 时，服务端将不再向当前订阅下的所有消费者推送消息，DynamicPolicy表示动态调整订阅下的最大未确认消息数，具体配额是在 5000 和消费者数量*20之间取最大值。每个消费者默认最大 unack 消息数为 20，超过该限制时仅影响该消费者，不影响其他消费者。
     * @param boolean $IsolateConsumerEnable 是否开启异常消费者隔离
     * @param integer $AckTimeOut 消费者 Ack 超时时间，单位：秒，范围60-（3600*24
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

        if (array_key_exists("DelayMessagePolicy",$param) and $param["DelayMessagePolicy"] !== null) {
            $this->DelayMessagePolicy = $param["DelayMessagePolicy"];
        }
    }
}
