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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则元数据
 *
 * @method string getKey() 获取字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperate() 获取操作关系（等于、不等于、包含、不包含）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperate(string $Operate) 设置操作关系（等于、不等于、包含、不包含）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取内容，v2多值版本使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置内容，v2多值版本使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleItem extends AbstractModel
{
    /**
     * @var string 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 操作关系（等于、不等于、包含、不包含）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operate;

    /**
     * @var string 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array 内容，v2多值版本使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Key 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operate 操作关系（等于、不等于、包含、不包含）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 内容，v2多值版本使用
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

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
