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
 * cmq 批量queue属性信息
 *
 * @method string getQueueId() 获取消息队列ID。
 * @method void setQueueId(string $QueueId) 设置消息队列ID。
 * @method string getQueueName() 获取消息队列名字。
 * @method void setQueueName(string $QueueName) 设置消息队列名字。
 * @method integer getQps() 获取每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQps(integer $Qps) 设置每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBps() 获取带宽限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBps(integer $Bps) 设置带宽限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDelaySeconds() 获取飞行消息最大保留时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDelaySeconds(integer $MaxDelaySeconds) 设置飞行消息最大保留时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMsgHeapNum() 获取最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) 设置最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
 * @method integer getPollingWaitSeconds() 获取消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) 设置消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgRetentionSeconds() 获取消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVisibilityTimeout() 获取消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) 设置消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMsgSize() 获取消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRewindSeconds() 获取回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewindSeconds(integer $RewindSeconds) 设置回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取队列的创建时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置队列的创建时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastModifyTime() 获取最后一次修改队列属性的时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifyTime(integer $LastModifyTime) 设置最后一次修改队列属性的时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveMsgNum() 获取在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveMsgNum(integer $ActiveMsgNum) 设置在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInactiveMsgNum() 获取在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInactiveMsgNum(integer $InactiveMsgNum) 设置在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayMsgNum() 获取延迟消息数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayMsgNum(integer $DelayMsgNum) 设置延迟消息数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRewindMsgNum() 获取已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewindMsgNum(integer $RewindMsgNum) 设置已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinMsgTime() 获取消息最小未消费时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinMsgTime(integer $MinMsgTime) 设置消息最小未消费时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTransaction() 获取事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransaction(boolean $Transaction) 设置事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeadLetterSource() 获取死信队列。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterSource(array $DeadLetterSource) 设置死信队列。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CmqDeadLetterPolicy getDeadLetterPolicy() 获取死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterPolicy(CmqDeadLetterPolicy $DeadLetterPolicy) 设置死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CmqTransactionPolicy getTransactionPolicy() 获取事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionPolicy(CmqTransactionPolicy $TransactionPolicy) 设置事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateUin() 获取创建者Uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(integer $CreateUin) 设置创建者Uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTrace() 获取消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrace(boolean $Trace) 设置消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxUnackedMsgNum() 获取最大未确认消息数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxUnackedMsgNum(integer $MaxUnackedMsgNum) 设置最大未确认消息数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMsgBacklogSize() 获取最大消息堆积大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMsgBacklogSize(integer $MaxMsgBacklogSize) 设置最大消息堆积大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionSizeInMB() 获取队列可回溯存储空间，取值范围1024MB - 10240MB，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionSizeInMB(integer $RetentionSizeInMB) 设置队列可回溯存储空间，取值范围1024MB - 10240MB，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
 */
class CmqQueue extends AbstractModel
{
    /**
     * @var string 消息队列ID。
     */
    public $QueueId;

    /**
     * @var string 消息队列名字。
     */
    public $QueueName;

    /**
     * @var integer 每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qps;

    /**
     * @var integer 带宽限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bps;

    /**
     * @var integer 飞行消息最大保留时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDelaySeconds;

    /**
     * @var integer 最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer 消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PollingWaitSeconds;

    /**
     * @var integer 消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer 消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VisibilityTimeout;

    /**
     * @var integer 消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMsgSize;

    /**
     * @var integer 回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewindSeconds;

    /**
     * @var integer 队列的创建时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 最后一次修改队列属性的时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifyTime;

    /**
     * @var integer 在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveMsgNum;

    /**
     * @var integer 在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InactiveMsgNum;

    /**
     * @var integer 延迟消息数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayMsgNum;

    /**
     * @var integer 已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewindMsgNum;

    /**
     * @var integer 消息最小未消费时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinMsgTime;

    /**
     * @var boolean 事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transaction;

    /**
     * @var array 死信队列。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterSource;

    /**
     * @var CmqDeadLetterPolicy 死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterPolicy;

    /**
     * @var CmqTransactionPolicy 事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionPolicy;

    /**
     * @var integer 创建者Uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var array 关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Trace;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 最大未确认消息数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxUnackedMsgNum;

    /**
     * @var integer 最大消息堆积大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMsgBacklogSize;

    /**
     * @var integer 队列可回溯存储空间，取值范围1024MB - 10240MB，0表示不开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionSizeInMB;

    /**
     * @param string $QueueId 消息队列ID。
     * @param string $QueueName 消息队列名字。
     * @param integer $Qps 每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bps 带宽限制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDelaySeconds 飞行消息最大保留时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMsgHeapNum 最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
     * @param integer $PollingWaitSeconds 消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgRetentionSeconds 消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VisibilityTimeout 消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMsgSize 消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RewindSeconds 回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 队列的创建时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastModifyTime 最后一次修改队列属性的时间。返回 Unix 时间戳，精确到毫秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveMsgNum 在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InactiveMsgNum 在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayMsgNum 延迟消息数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RewindMsgNum 已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinMsgTime 消息最小未消费时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Transaction 事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeadLetterSource 死信队列。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CmqDeadLetterPolicy $DeadLetterPolicy 死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CmqTransactionPolicy $TransactionPolicy 事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateUin 创建者Uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 关联的标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Trace 消息轨迹。true表示开启，false表示不开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxUnackedMsgNum 最大未确认消息数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMsgBacklogSize 最大消息堆积大小（字节）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionSizeInMB 队列可回溯存储空间，取值范围1024MB - 10240MB，0表示不开启
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Bps",$param) and $param["Bps"] !== null) {
            $this->Bps = $param["Bps"];
        }

        if (array_key_exists("MaxDelaySeconds",$param) and $param["MaxDelaySeconds"] !== null) {
            $this->MaxDelaySeconds = $param["MaxDelaySeconds"];
        }

        if (array_key_exists("MaxMsgHeapNum",$param) and $param["MaxMsgHeapNum"] !== null) {
            $this->MaxMsgHeapNum = $param["MaxMsgHeapNum"];
        }

        if (array_key_exists("PollingWaitSeconds",$param) and $param["PollingWaitSeconds"] !== null) {
            $this->PollingWaitSeconds = $param["PollingWaitSeconds"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("VisibilityTimeout",$param) and $param["VisibilityTimeout"] !== null) {
            $this->VisibilityTimeout = $param["VisibilityTimeout"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("RewindSeconds",$param) and $param["RewindSeconds"] !== null) {
            $this->RewindSeconds = $param["RewindSeconds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("ActiveMsgNum",$param) and $param["ActiveMsgNum"] !== null) {
            $this->ActiveMsgNum = $param["ActiveMsgNum"];
        }

        if (array_key_exists("InactiveMsgNum",$param) and $param["InactiveMsgNum"] !== null) {
            $this->InactiveMsgNum = $param["InactiveMsgNum"];
        }

        if (array_key_exists("DelayMsgNum",$param) and $param["DelayMsgNum"] !== null) {
            $this->DelayMsgNum = $param["DelayMsgNum"];
        }

        if (array_key_exists("RewindMsgNum",$param) and $param["RewindMsgNum"] !== null) {
            $this->RewindMsgNum = $param["RewindMsgNum"];
        }

        if (array_key_exists("MinMsgTime",$param) and $param["MinMsgTime"] !== null) {
            $this->MinMsgTime = $param["MinMsgTime"];
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = $param["Transaction"];
        }

        if (array_key_exists("DeadLetterSource",$param) and $param["DeadLetterSource"] !== null) {
            $this->DeadLetterSource = [];
            foreach ($param["DeadLetterSource"] as $key => $value){
                $obj = new CmqDeadLetterSource();
                $obj->deserialize($value);
                array_push($this->DeadLetterSource, $obj);
            }
        }

        if (array_key_exists("DeadLetterPolicy",$param) and $param["DeadLetterPolicy"] !== null) {
            $this->DeadLetterPolicy = new CmqDeadLetterPolicy();
            $this->DeadLetterPolicy->deserialize($param["DeadLetterPolicy"]);
        }

        if (array_key_exists("TransactionPolicy",$param) and $param["TransactionPolicy"] !== null) {
            $this->TransactionPolicy = new CmqTransactionPolicy();
            $this->TransactionPolicy->deserialize($param["TransactionPolicy"]);
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaxUnackedMsgNum",$param) and $param["MaxUnackedMsgNum"] !== null) {
            $this->MaxUnackedMsgNum = $param["MaxUnackedMsgNum"];
        }

        if (array_key_exists("MaxMsgBacklogSize",$param) and $param["MaxMsgBacklogSize"] !== null) {
            $this->MaxMsgBacklogSize = $param["MaxMsgBacklogSize"];
        }

        if (array_key_exists("RetentionSizeInMB",$param) and $param["RetentionSizeInMB"] !== null) {
            $this->RetentionSizeInMB = $param["RetentionSizeInMB"];
        }
    }
}
