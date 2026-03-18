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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练超参
 *
 * @method string getName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultValue() 获取默认参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置默认参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取参数注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置参数注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取参数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置参数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRequired() 获取是否必选
 * @method void setRequired(boolean $Required) 设置是否必选
 * @method string getValue() 获取参数值
 * @method void setValue(string $Value) 设置参数值
 * @method array getRange() 获取参数范围
 * @method void setRange(array $Range) 设置参数范围
 * @method array getEnum() 获取参数选项
 * @method void setEnum(array $Enum) 设置参数选项
 */
class TrainParam extends AbstractModel
{
    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 默认参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

    /**
     * @var string 参数注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 参数类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean 是否必选
     */
    public $Required;

    /**
     * @var string 参数值
     */
    public $Value;

    /**
     * @var array 参数范围
     */
    public $Range;

    /**
     * @var array 参数选项
     */
    public $Enum;

    /**
     * @param string $Name 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultValue 默认参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 参数注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 参数类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Required 是否必选
     * @param string $Value 参数值
     * @param array $Range 参数范围
     * @param array $Enum 参数选项
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

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = $param["Enum"];
        }
    }
}
