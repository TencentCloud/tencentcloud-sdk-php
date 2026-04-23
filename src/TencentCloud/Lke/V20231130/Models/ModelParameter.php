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
 * @method string getName() 获取<p>超参名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>超参名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>类型</p><p>枚举值：</p><ul><li>string： 字符类型</li><li>int： 整数类型</li><li>float： 浮点数类型</li><li>array： 数组类型</li></ul>
 * @method void setType(string $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>string： 字符类型</li><li>int： 整数类型</li><li>float： 浮点数类型</li><li>array： 数组类型</li></ul>
 * @method string getDefaultValue() 获取<p>默认值</p>
 * @method void setDefaultValue(string $DefaultValue) 设置<p>默认值</p>
 * @method array getEnumValues() 获取<p>枚举值</p>
 * @method void setEnumValues(array $EnumValues) 设置<p>枚举值</p>
 * @method float getDefault() 获取<p>默认值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefault(float $Default) 设置<p>默认值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMin() 获取<p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(float $Min) 设置<p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMax() 获取<p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMax(float $Max) 设置<p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelParameter extends AbstractModel
{
    /**
     * @var string <p>超参名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>类型</p><p>枚举值：</p><ul><li>string： 字符类型</li><li>int： 整数类型</li><li>float： 浮点数类型</li><li>array： 数组类型</li></ul>
     */
    public $Type;

    /**
     * @var string <p>默认值</p>
     */
    public $DefaultValue;

    /**
     * @var array <p>枚举值</p>
     */
    public $EnumValues;

    /**
     * @var float <p>默认值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Default;

    /**
     * @var float <p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @var float <p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Max;

    /**
     * @param string $Name <p>超参名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>类型</p><p>枚举值：</p><ul><li>string： 字符类型</li><li>int： 整数类型</li><li>float： 浮点数类型</li><li>array： 数组类型</li></ul>
     * @param string $DefaultValue <p>默认值</p>
     * @param array $EnumValues <p>枚举值</p>
     * @param float $Default <p>默认值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Min <p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Max <p>最大值</p>
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
