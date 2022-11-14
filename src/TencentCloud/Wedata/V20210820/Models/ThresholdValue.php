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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量阈值
 *
 * @method integer getValueType() 获取阈值类型  1.低阈值  2.高阈值   3.普通阈值  4.枚举值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueType(integer $ValueType) 设置阈值类型  1.低阈值  2.高阈值   3.普通阈值  4.枚举值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置阈值
注意：此字段可能返回 null，表示取不到有效值。
 */
class ThresholdValue extends AbstractModel
{
    /**
     * @var integer 阈值类型  1.低阈值  2.高阈值   3.普通阈值  4.枚举值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueType;

    /**
     * @var string 阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $ValueType 阈值类型  1.低阈值  2.高阈值   3.普通阈值  4.枚举值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 阈值
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
        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
