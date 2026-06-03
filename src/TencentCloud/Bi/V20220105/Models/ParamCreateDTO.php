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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 1
 *
 * @method string getParamName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamName(string $ParamName) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultValue() 获取默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamType() 获取参数类型，string/datetime/number
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamType(string $ParamType) 设置参数类型，string/datetime/number
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormatRule() 获取格式化类型，yyyy-MM-dd HH:mm:ss.SSS（只有时间必填）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormatRule(string $FormatRule) 设置格式化类型，yyyy-MM-dd HH:mm:ss.SSS（只有时间必填）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComplexType() 获取复杂类型，格式化的另一种表达，例如YYYY-MM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexType(string $ComplexType) 设置复杂类型，格式化的另一种表达，例如YYYY-MM
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScope() 获取作用域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(string $Scope) 设置作用域
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParamCreateDTO extends AbstractModel
{
    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamName;

    /**
     * @var string 默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

    /**
     * @var string 参数类型，string/datetime/number
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamType;

    /**
     * @var string 格式化类型，yyyy-MM-dd HH:mm:ss.SSS（只有时间必填）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormatRule;

    /**
     * @var string 复杂类型，格式化的另一种表达，例如YYYY-MM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexType;

    /**
     * @var string 作用域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @param string $ParamName 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultValue 默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamType 参数类型，string/datetime/number
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FormatRule 格式化类型，yyyy-MM-dd HH:mm:ss.SSS（只有时间必填）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComplexType 复杂类型，格式化的另一种表达，例如YYYY-MM
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scope 作用域
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("FormatRule",$param) and $param["FormatRule"] !== null) {
            $this->FormatRule = $param["FormatRule"];
        }

        if (array_key_exists("ComplexType",$param) and $param["ComplexType"] !== null) {
            $this->ComplexType = $param["ComplexType"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
