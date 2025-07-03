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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量queue属性信息
 *
 * @method string getQueueId() 获取消息队列ID。
 * @method void setQueueId(string $QueueId) 设置消息队列ID。
 * @method integer getRewindSeconds() 获取回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
 * @method void setRewindSeconds(integer $RewindSeconds) 设置回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
 * @method integer getCreateUin() 获取创建者Uin。
 * @method void setCreateUin(integer $CreateUin) 设置创建者Uin。
 * @method integer getLastModifyTime() 获取最后一次修改队列属性的时间。返回 Unix 时间戳，精确到秒。
 * @method void setLastModifyTime(integer $LastModifyTime) 设置最后一次修改队列属性的时间。返回 Unix 时间戳，精确到秒。
 * @method integer getVisibilityTimeout() 获取消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) 设置消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
 * @method string getQueueName() 获取消息队列名字。
 * @method void setQueueName(string $QueueName) 设置消息队列名字。
 * @method boolean getTrace() 获取消息轨迹。true表示开启，false表示不开启。
 * @method void setTrace(boolean $Trace) 设置消息轨迹。true表示开启，false表示不开启。
 * @method array getTags() 获取关联的标签。
 * @method void setTags(array $Tags) 设置关联的标签。
 * @method integer getRewindMsgNum() 获取已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
 * @method void setRewindMsgNum(integer $RewindMsgNum) 设置已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
 * @method integer getMaxDelaySeconds() 获取飞行消息最大保留时间。
 * @method void setMaxDelaySeconds(integer $MaxDelaySeconds) 设置飞行消息最大保留时间。
 * @method TransactionPolicy getTransactionPolicy() 获取事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionPolicy(TransactionPolicy $TransactionPolicy) 设置事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgRetentionSeconds() 获取消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
 * @method integer getDelayMsgNum() 获取延迟消息数。
 * @method void setDelayMsgNum(integer $DelayMsgNum) 设置延迟消息数。
 * @method integer getMaxMsgHeapNum() 获取最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) 设置最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
 * @method integer getPollingWaitSeconds() 获取消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) 设置消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
 * @method integer getBps() 获取带宽限制。
 * @method void setBps(integer $Bps) 设置带宽限制。
 * @method integer getInactiveMsgNum() 获取在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
 * @method void setInactiveMsgNum(integer $InactiveMsgNum) 设置在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
 * @method DeadLetterPolicy getDeadLetterPolicy() 获取死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterPolicy(DeadLetterPolicy $DeadLetterPolicy) 设置死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveMsgNum() 获取在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
 * @method void setActiveMsgNum(integer $ActiveMsgNum) 设置在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
 * @method integer getMaxMsgSize() 获取消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
 * @method integer getMinMsgTime() 获取消息最小未消费时间，单位为秒。
 * @method void setMinMsgTime(integer $MinMsgTime) 设置消息最小未消费时间，单位为秒。
 * @method array getDeadLetterSource() 获取死信队列。
 * @method void setDeadLetterSource(array $DeadLetterSource) 设置死信队列。
 * @method boolean getTransaction() 获取事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransaction(boolean $Transaction) 设置事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQps() 获取每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
 * @method void setQps(integer $Qps) 设置每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
 * @method integer getCreateTime() 获取队列的创建时间。返回 Unix 时间戳，精确到秒。
 * @method void setCreateTime(integer $CreateTime) 设置队列的创建时间。返回 Unix 时间戳，精确到秒。
 * @method integer getMigrate() 获取是否迁移到新版本。0 表示仅同步元数据，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未迁移。
 * @method void setMigrate(integer $Migrate) 设置是否迁移到新版本。0 表示仅同步元数据，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未迁移。
 */
class QueueSet extends AbstractModel
{
    /**
     * @var string 消息队列ID。
     */
    public $QueueId;

    /**
     * @var integer 回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
     */
    public $RewindSeconds;

    /**
     * @var integer 创建者Uin。
     */
    public $CreateUin;

    /**
     * @var integer 最后一次修改队列属性的时间。返回 Unix 时间戳，精确到秒。
     */
    public $LastModifyTime;

    /**
     * @var integer 消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
     */
    public $VisibilityTimeout;

    /**
     * @var string 消息队列名字。
     */
    public $QueueName;

    /**
     * @var boolean 消息轨迹。true表示开启，false表示不开启。
     */
    public $Trace;

    /**
     * @var array 关联的标签。
     */
    public $Tags;

    /**
     * @var integer 已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
     */
    public $RewindMsgNum;

    /**
     * @var integer 飞行消息最大保留时间。
     */
    public $MaxDelaySeconds;

    /**
     * @var TransactionPolicy 事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionPolicy;

    /**
     * @var integer 消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer 延迟消息数。
     */
    public $DelayMsgNum;

    /**
     * @var integer 最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer 消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
     */
    public $PollingWaitSeconds;

    /**
     * @var integer 带宽限制。
     */
    public $Bps;

    /**
     * @var integer 在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
     */
    public $InactiveMsgNum;

    /**
     * @var DeadLetterPolicy 死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterPolicy;

    /**
     * @var integer 在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
     */
    public $ActiveMsgNum;

    /**
     * @var integer 消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
     */
    public $MaxMsgSize;

    /**
     * @var integer 消息最小未消费时间，单位为秒。
     */
    public $MinMsgTime;

    /**
     * @var array 死信队列。
     */
    public $DeadLetterSource;

    /**
     * @var boolean 事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transaction;

    /**
     * @var integer 每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
     */
    public $Qps;

    /**
     * @var integer 队列的创建时间。返回 Unix 时间戳，精确到秒。
     */
    public $CreateTime;

    /**
     * @var integer 是否迁移到新版本。0 表示仅同步元数据，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未迁移。
     */
    public $Migrate;

    /**
     * @param string $QueueId 消息队列ID。
     * @param integer $RewindSeconds 回溯队列的消息回溯时间最大值，取值范围0 - 43200秒，0表示不开启消息回溯。
     * @param integer $CreateUin 创建者Uin。
     * @param integer $LastModifyTime 最后一次修改队列属性的时间。返回 Unix 时间戳，精确到秒。
     * @param integer $VisibilityTimeout 消息可见性超时。取值范围1 - 43200秒（即12小时内），默认值30。
     * @param string $QueueName 消息队列名字。
     * @param boolean $Trace 消息轨迹。true表示开启，false表示不开启。
     * @param array $Tags 关联的标签。
     * @param integer $RewindMsgNum 已调用 DelMsg 接口删除，但还在回溯保留时间内的消息数量。
     * @param integer $MaxDelaySeconds 飞行消息最大保留时间。
     * @param TransactionPolicy $TransactionPolicy 事务消息策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgRetentionSeconds 消息保留周期。取值范围60-1296000秒（1min-15天），默认值345600秒（4 天）。
     * @param integer $DelayMsgNum 延迟消息数。
     * @param integer $MaxMsgHeapNum 最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
     * @param integer $PollingWaitSeconds 消息接收长轮询等待时间。取值范围0 - 30秒，默认值0。
     * @param integer $Bps 带宽限制。
     * @param integer $InactiveMsgNum 在队列中处于 Inactive 状态（正处于被消费状态）的消息总数，为近似值。
     * @param DeadLetterPolicy $DeadLetterPolicy 死信队列策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveMsgNum 在队列中处于 Active 状态（不处于被消费状态）的消息总数，为近似值。
     * @param integer $MaxMsgSize 消息最大长度。取值范围1024 - 1048576 Byte（即1K - 1024K），默认值65536。
     * @param integer $MinMsgTime 消息最小未消费时间，单位为秒。
     * @param array $DeadLetterSource 死信队列。
     * @param boolean $Transaction 事务消息队列。true表示是事务消息，false表示不是事务消息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Qps 每秒钟生产消息条数的限制，消费消息的大小是该值的1.1倍。
     * @param integer $CreateTime 队列的创建时间。返回 Unix 时间戳，精确到秒。
     * @param integer $Migrate 是否迁移到新版本。0 表示仅同步元数据，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未迁移。
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

        if (array_key_exists("RewindSeconds",$param) and $param["RewindSeconds"] !== null) {
            $this->RewindSeconds = $param["RewindSeconds"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("VisibilityTimeout",$param) and $param["VisibilityTimeout"] !== null) {
            $this->VisibilityTimeout = $param["VisibilityTimeout"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RewindMsgNum",$param) and $param["RewindMsgNum"] !== null) {
            $this->RewindMsgNum = $param["RewindMsgNum"];
        }

        if (array_key_exists("MaxDelaySeconds",$param) and $param["MaxDelaySeconds"] !== null) {
            $this->MaxDelaySeconds = $param["MaxDelaySeconds"];
        }

        if (array_key_exists("TransactionPolicy",$param) and $param["TransactionPolicy"] !== null) {
            $this->TransactionPolicy = new TransactionPolicy();
            $this->TransactionPolicy->deserialize($param["TransactionPolicy"]);
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("DelayMsgNum",$param) and $param["DelayMsgNum"] !== null) {
            $this->DelayMsgNum = $param["DelayMsgNum"];
        }

        if (array_key_exists("MaxMsgHeapNum",$param) and $param["MaxMsgHeapNum"] !== null) {
            $this->MaxMsgHeapNum = $param["MaxMsgHeapNum"];
        }

        if (array_key_exists("PollingWaitSeconds",$param) and $param["PollingWaitSeconds"] !== null) {
            $this->PollingWaitSeconds = $param["PollingWaitSeconds"];
        }

        if (array_key_exists("Bps",$param) and $param["Bps"] !== null) {
            $this->Bps = $param["Bps"];
        }

        if (array_key_exists("InactiveMsgNum",$param) and $param["InactiveMsgNum"] !== null) {
            $this->InactiveMsgNum = $param["InactiveMsgNum"];
        }

        if (array_key_exists("DeadLetterPolicy",$param) and $param["DeadLetterPolicy"] !== null) {
            $this->DeadLetterPolicy = new DeadLetterPolicy();
            $this->DeadLetterPolicy->deserialize($param["DeadLetterPolicy"]);
        }

        if (array_key_exists("ActiveMsgNum",$param) and $param["ActiveMsgNum"] !== null) {
            $this->ActiveMsgNum = $param["ActiveMsgNum"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("MinMsgTime",$param) and $param["MinMsgTime"] !== null) {
            $this->MinMsgTime = $param["MinMsgTime"];
        }

        if (array_key_exists("DeadLetterSource",$param) and $param["DeadLetterSource"] !== null) {
            $this->DeadLetterSource = [];
            foreach ($param["DeadLetterSource"] as $key => $value){
                $obj = new DeadLetterSource();
                $obj->deserialize($value);
                array_push($this->DeadLetterSource, $obj);
            }
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = $param["Transaction"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Migrate",$param) and $param["Migrate"] !== null) {
            $this->Migrate = $param["Migrate"];
        }
    }
}
