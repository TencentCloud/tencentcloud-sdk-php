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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * K8s的Event
 *
 * @method string getId() 获取事件的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置事件的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取事件的具体信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置事件的具体信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstTimestamp() 获取事件第一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstTimestamp(string $FirstTimestamp) 设置事件第一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTimestamp() 获取事件最后一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTimestamp(string $LastTimestamp) 设置事件最后一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取事件发生的次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置事件发生的次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取事件的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置事件的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceKind() 获取事件关联的资源的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceKind(string $ResourceKind) 设置事件关联的资源的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取事件关联的资源的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置事件关联的资源的名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class Event extends AbstractModel
{
    /**
     * @var string 事件的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 事件的具体信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 事件第一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstTimestamp;

    /**
     * @var string 事件最后一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTimestamp;

    /**
     * @var integer 事件发生的次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string 事件的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 事件关联的资源的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceKind;

    /**
     * @var string 事件关联的资源的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @param string $Id 事件的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 事件的具体信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTimestamp 事件第一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTimestamp 事件最后一次发生的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 事件发生的次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 事件的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceKind 事件关联的资源的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 事件关联的资源的名字
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FirstTimestamp",$param) and $param["FirstTimestamp"] !== null) {
            $this->FirstTimestamp = $param["FirstTimestamp"];
        }

        if (array_key_exists("LastTimestamp",$param) and $param["LastTimestamp"] !== null) {
            $this->LastTimestamp = $param["LastTimestamp"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceKind",$param) and $param["ResourceKind"] !== null) {
            $this->ResourceKind = $param["ResourceKind"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
