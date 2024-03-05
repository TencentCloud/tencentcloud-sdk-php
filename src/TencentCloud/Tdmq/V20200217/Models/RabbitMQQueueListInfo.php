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
 * RabbitMQ队列列表成员信息
 *
 * @method string getQueueName() 获取队列名
 * @method void setQueueName(string $QueueName) 设置队列名
 * @method string getRemark() 获取备注说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method RabbitMQQueueListConsumerDetailInfo getConsumerDetail() 获取消费者信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerDetail(RabbitMQQueueListConsumerDetailInfo $ConsumerDetail) 设置消费者信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueType() 获取队列类型，取值 "classic"，"quorum"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueType(string $QueueType) 设置队列类型，取值 "classic"，"quorum"
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageHeapCount() 获取消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageHeapCount(integer $MessageHeapCount) 设置消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMessageRateIn() 获取消息生产速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRateIn(float $MessageRateIn) 设置消息生产速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMessageRateOut() 获取消息消费速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRateOut(float $MessageRateOut) 设置消息消费速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQQueueListInfo extends AbstractModel
{
    /**
     * @var string 队列名
     */
    public $QueueName;

    /**
     * @var string 备注说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var RabbitMQQueueListConsumerDetailInfo 消费者信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerDetail;

    /**
     * @var string 队列类型，取值 "classic"，"quorum"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueType;

    /**
     * @var integer 消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageHeapCount;

    /**
     * @var float 消息生产速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRateIn;

    /**
     * @var float 消息消费速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRateOut;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param string $QueueName 队列名
     * @param string $Remark 备注说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param RabbitMQQueueListConsumerDetailInfo $ConsumerDetail 消费者信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueType 队列类型，取值 "classic"，"quorum"
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageHeapCount 消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MessageRateIn 消息生产速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MessageRateOut 消息消费速率，每秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
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
    }
}
