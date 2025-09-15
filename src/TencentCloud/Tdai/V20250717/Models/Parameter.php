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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体实例的参数值
 *
 * @method string getKey() 获取参数键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置参数键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueType() 获取枚举值，可取值包括：string(字符串), int(整型), float(浮点型), bool(布尔型), struct(结构体), array(数组), 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueType(string $ValueType) 设置枚举值，可取值包括：string(字符串), int(整型), float(浮点型), bool(布尔型), struct(结构体), array(数组), 
注意：此字段可能返回 null，表示取不到有效值。
 */
class Parameter extends AbstractModel
{
    /**
     * @var string 参数键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 枚举值，可取值包括：string(字符串), int(整型), float(浮点型), bool(布尔型), struct(结构体), array(数组), 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueType;

    /**
     * @param string $Key 参数键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueType 枚举值，可取值包括：string(字符串), int(整型), float(浮点型), bool(布尔型), struct(结构体), array(数组), 
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
