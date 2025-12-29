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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型参数范围
 *
 * @method string getName() 获取超参名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置超参名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method array getEnumValues() 获取枚举值
 * @method void setEnumValues(array $EnumValues) 设置枚举值
 * @method float getDefault() 获取默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefault(float $Default) 设置默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMin() 获取最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(float $Min) 设置最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMax() 获取最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMax(float $Max) 设置最大值
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelParameter extends AbstractModel
{
    /**
     * @var string 超参名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var array 枚举值
     */
    public $EnumValues;

    /**
     * @var float 默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Default;

    /**
     * @var float 最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @var float 最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Max;

    /**
     * @param string $Name 超参名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
     * @param string $DefaultValue 默认值
     * @param array $EnumValues 枚举值
     * @param float $Default 默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Min 最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Max 最大值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("EnumValues",$param) and $param["EnumValues"] !== null) {
            $this->EnumValues = $param["EnumValues"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
