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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各规格下的参数信息
 *
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method string getMemory() 获取参数信息所属规格
 * @method void setMemory(string $Memory) 设置参数信息所属规格
 * @method string getValue() 获取参数在该规格下的默认值
 * @method void setValue(string $Value) 设置参数在该规格下的默认值
 * @method string getUnit() 获取参数值单位。参数没有单位时，该字段返回空
 * @method void setUnit(string $Unit) 设置参数值单位。参数没有单位时，该字段返回空
 * @method float getMax() 获取数值类型（integer、real）参数，取值上界
 * @method void setMax(float $Max) 设置数值类型（integer、real）参数，取值上界
 * @method float getMin() 获取数值类型（integer、real）参数，取值下界
 * @method void setMin(float $Min) 设置数值类型（integer、real）参数，取值下界
 * @method array getEnumValue() 获取枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnumValue(array $EnumValue) 设置枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParamSpecRelation extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var string 参数信息所属规格
     */
    public $Memory;

    /**
     * @var string 参数在该规格下的默认值
     */
    public $Value;

    /**
     * @var string 参数值单位。参数没有单位时，该字段返回空
     */
    public $Unit;

    /**
     * @var float 数值类型（integer、real）参数，取值上界
     */
    public $Max;

    /**
     * @var float 数值类型（integer、real）参数，取值下界
     */
    public $Min;

    /**
     * @var array 枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnumValue;

    /**
     * @param string $Name 参数名称
     * @param string $Memory 参数信息所属规格
     * @param string $Value 参数在该规格下的默认值
     * @param string $Unit 参数值单位。参数没有单位时，该字段返回空
     * @param float $Max 数值类型（integer、real）参数，取值上界
     * @param float $Min 数值类型（integer、real）参数，取值下界
     * @param array $EnumValue 枚举类型参数，取值范围
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }
    }
}
