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
 * 空值展示样式配置结构
 *
 * @method EmptyValue getNumber() 获取数值类字段空值样式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(EmptyValue $Number) 设置数值类字段空值样式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method EmptyValue getString() 获取字符串字段空置样式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setString(EmptyValue $String) 设置字符串字段空置样式配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmptyValueConfig extends AbstractModel
{
    /**
     * @var EmptyValue 数值类字段空值样式配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var EmptyValue 字符串字段空置样式配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $String;

    /**
     * @param EmptyValue $Number 数值类字段空值样式配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param EmptyValue $String 字符串字段空置样式配置
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = new EmptyValue();
            $this->Number->deserialize($param["Number"]);
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = new EmptyValue();
            $this->String->deserialize($param["String"]);
        }
    }
}
