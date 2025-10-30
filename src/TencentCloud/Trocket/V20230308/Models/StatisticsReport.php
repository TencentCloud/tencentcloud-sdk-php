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
 * MQTT客户端数据流量统计
 *
 * @method integer getBytes() 获取字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBytes(integer $Bytes) 设置字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取监控指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置监控指标
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatisticsReport extends AbstractModel
{
    /**
     * @var integer 字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bytes;

    /**
     * @var array 监控指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param integer $Bytes 字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 监控指标
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
        if (array_key_exists("Bytes",$param) and $param["Bytes"] !== null) {
            $this->Bytes = $param["Bytes"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new PacketStatistics();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
