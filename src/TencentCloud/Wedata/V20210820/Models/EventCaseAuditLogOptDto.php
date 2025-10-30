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
 * 事件实例
 *
 * @method string getCaseId() 获取事件实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCaseId(string $CaseId) 设置事件实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventName() 获取事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventSubType() 获取事件分割类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventSubType(string $EventSubType) 设置事件分割类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventBroadcastType() 获取事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventBroadcastType(string $EventBroadcastType) 设置事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTTL() 获取事件实例存活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTTL(integer $TTL) 设置事件实例存活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取事件实例存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置事件实例存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimension() 获取数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimension(string $Dimension) 设置数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取事件实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置事件实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventTriggerTimestamp() 获取事件实例触发时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventTriggerTimestamp(string $EventTriggerTimestamp) 设置事件实例触发时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTimestamp() 获取事件实例消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTimestamp(string $LogTimestamp) 设置事件实例消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取事件实例描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置事件实例描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventCaseAuditLogOptDto extends AbstractModel
{
    /**
     * @var string 事件实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CaseId;

    /**
     * @var string 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var string 事件分割类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventSubType;

    /**
     * @var string 事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventBroadcastType;

    /**
     * @var integer 事件实例存活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TTL;

    /**
     * @var string 事件实例存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var string 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimension;

    /**
     * @var string 事件实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 事件实例触发时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventTriggerTimestamp;

    /**
     * @var string 事件实例消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTimestamp;

    /**
     * @var string 事件实例描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $CaseId 事件实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventName 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventSubType 事件分割类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventBroadcastType 事件广播类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TTL 事件实例存活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 事件实例存活时间单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dimension 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 事件实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventTriggerTimestamp 事件实例触发时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTimestamp 事件实例消费时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 事件实例描述
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
        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTriggerTimestamp",$param) and $param["EventTriggerTimestamp"] !== null) {
            $this->EventTriggerTimestamp = $param["EventTriggerTimestamp"];
        }

        if (array_key_exists("LogTimestamp",$param) and $param["LogTimestamp"] !== null) {
            $this->LogTimestamp = $param["LogTimestamp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
