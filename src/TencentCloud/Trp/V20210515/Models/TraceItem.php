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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 溯源数据
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取单个值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置单个值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReadOnly() 获取只读
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnly(boolean $ReadOnly) 设置只读
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHidden() 获取扫码展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHidden(boolean $Hidden) 设置扫码展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取多个值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置多个值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取类型标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置类型标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class TraceItem extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 单个值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean 只读
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnly;

    /**
     * @var boolean 扫码展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hidden;

    /**
     * @var array 多个值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var string 类型标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 单个值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReadOnly 只读
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Hidden 扫码展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 多个值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 类型标识
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
