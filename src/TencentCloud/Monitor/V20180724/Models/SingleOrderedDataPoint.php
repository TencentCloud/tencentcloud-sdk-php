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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个有序数据点
 *
 * @method array getDimensions() 获取<p>实例对象维度组合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(array $Dimensions) 设置<p>实例对象维度组合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取<p>监控数据值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置<p>监控数据值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取<p>监控数据时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>监控数据时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrder() 获取<p>排序序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrder(integer $Order) 设置<p>排序序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SingleOrderedDataPoint extends AbstractModel
{
    /**
     * @var array <p>实例对象维度组合</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @var float <p>监控数据值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer <p>监控数据时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var integer <p>排序序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Order;

    /**
     * @param array $Dimensions <p>实例对象维度组合</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value <p>监控数据值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp <p>监控数据时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Order <p>排序序号</p>
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
        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
