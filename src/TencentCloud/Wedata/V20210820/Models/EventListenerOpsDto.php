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
 * 事件监听器
 *
 * @method string getEventName() 获取事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取关键字，如果是任务，则是任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置关键字，如果是任务，则是任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取触发方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置触发方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProperties() 获取事件属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(string $Properties) 设置事件属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTimestamp() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTimestamp(string $CreationTimestamp) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventListenerOpsDto extends AbstractModel
{
    /**
     * @var string 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string 关键字，如果是任务，则是任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 触发方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 事件属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTimestamp;

    /**
     * @param string $EventName 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 关键字，如果是任务，则是任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 触发方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Properties 事件属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTimestamp 创建时间
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
