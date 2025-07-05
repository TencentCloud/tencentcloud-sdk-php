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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数值结构
 *
 * @method integer getType() 获取数值类型，0是int,  1是字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置数值类型，0是int,  1是字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntVal() 获取整数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntVal(integer $IntVal) 设置整数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrVal() 获取字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrVal(string $StrVal) 设置字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntOrString extends AbstractModel
{
    /**
     * @var integer 数值类型，0是int,  1是字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 整数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntVal;

    /**
     * @var string 字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrVal;

    /**
     * @param integer $Type 数值类型，0是int,  1是字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntVal 整数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrVal 字符串
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IntVal",$param) and $param["IntVal"] !== null) {
            $this->IntVal = $param["IntVal"];
        }

        if (array_key_exists("StrVal",$param) and $param["StrVal"] !== null) {
            $this->StrVal = $param["StrVal"];
        }
    }
}
