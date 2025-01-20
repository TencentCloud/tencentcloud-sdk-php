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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量描述。
 *
 * @method integer getValue() 获取实际流量，单位为 字节
 * @method void setValue(integer $Value) 设置实际流量，单位为 字节
 * @method float getFormatValue() 获取格式化后的流量，单位见参数 FormatUnit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormatValue(float $FormatValue) 设置格式化后的流量，单位见参数 FormatUnit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormatUnit() 获取格式化后流量的单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormatUnit(string $FormatUnit) 设置格式化后流量的单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrafficFlow extends AbstractModel
{
    /**
     * @var integer 实际流量，单位为 字节
     */
    public $Value;

    /**
     * @var float 格式化后的流量，单位见参数 FormatUnit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormatValue;

    /**
     * @var string 格式化后流量的单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormatUnit;

    /**
     * @param integer $Value 实际流量，单位为 字节
     * @param float $FormatValue 格式化后的流量，单位见参数 FormatUnit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FormatUnit 格式化后流量的单位
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("FormatValue",$param) and $param["FormatValue"] !== null) {
            $this->FormatValue = $param["FormatValue"];
        }

        if (array_key_exists("FormatUnit",$param) and $param["FormatUnit"] !== null) {
            $this->FormatUnit = $param["FormatUnit"];
        }
    }
}
