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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT客户端监控
 *
 * @method string getMessageType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageType(string $MessageType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQos() 获取服务质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQos(integer $Qos) 设置服务质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置指标值
注意：此字段可能返回 null，表示取不到有效值。
 */
class PacketStatistics extends AbstractModel
{
    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageType;

    /**
     * @var integer 服务质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qos;

    /**
     * @var integer 指标值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $MessageType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Qos 服务质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 指标值
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
        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
