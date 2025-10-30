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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件消费记录
 *
 * @method string getConsumeLogId() 获取消费ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumeLogId(string $ConsumeLogId) 设置消费ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventCaseId() 获取事件案例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCaseId(string $EventCaseId) 设置事件案例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerId() 获取消费者ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerId(string $ConsumerId) 设置消费者ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTimestamp() 获取消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTimestamp(string $CreationTimestamp) 设置消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOpsDto getConsumerDetail() 获取任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerDetail(TaskOpsDto $ConsumerDetail) 设置任务详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventCaseConsumeLogOptDto extends AbstractModel
{
    /**
     * @var string 消费ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumeLogId;

    /**
     * @var string 事件案例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCaseId;

    /**
     * @var string 消费者ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerId;

    /**
     * @var string 消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTimestamp;

    /**
     * @var TaskOpsDto 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerDetail;

    /**
     * @param string $ConsumeLogId 消费ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventCaseId 事件案例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerId 消费者ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTimestamp 消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOpsDto $ConsumerDetail 任务详情
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
        if (array_key_exists("ConsumeLogId",$param) and $param["ConsumeLogId"] !== null) {
            $this->ConsumeLogId = $param["ConsumeLogId"];
        }

        if (array_key_exists("EventCaseId",$param) and $param["EventCaseId"] !== null) {
            $this->EventCaseId = $param["EventCaseId"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }

        if (array_key_exists("ConsumerDetail",$param) and $param["ConsumerDetail"] !== null) {
            $this->ConsumerDetail = new TaskOpsDto();
            $this->ConsumerDetail->deserialize($param["ConsumerDetail"]);
        }
    }
}
