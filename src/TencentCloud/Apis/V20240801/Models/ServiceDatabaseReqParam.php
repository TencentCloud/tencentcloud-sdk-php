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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 向导模式请求参数
 *
 * @method string getFieldName() 获取<p>表字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldName(string $FieldName) 设置<p>表字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取<p>操作符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置<p>操作符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVal() 获取<p>参数名/常量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVal(string $Val) 设置<p>参数名/常量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValType() 获取<p>参数类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValType(string $ValType) 设置<p>参数类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInternalField() 获取<p>内部字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalField(boolean $InternalField) 设置<p>内部字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceDatabaseReqParam extends AbstractModel
{
    /**
     * @var string <p>表字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldName;

    /**
     * @var string <p>操作符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string <p>参数名/常量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Val;

    /**
     * @var string <p>参数类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValType;

    /**
     * @var boolean <p>内部字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalField;

    /**
     * @param string $FieldName <p>表字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator <p>操作符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Val <p>参数名/常量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValType <p>参数类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InternalField <p>内部字段</p>
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Val",$param) and $param["Val"] !== null) {
            $this->Val = $param["Val"];
        }

        if (array_key_exists("ValType",$param) and $param["ValType"] !== null) {
            $this->ValType = $param["ValType"];
        }

        if (array_key_exists("InternalField",$param) and $param["InternalField"] !== null) {
            $this->InternalField = $param["InternalField"];
        }
    }
}
