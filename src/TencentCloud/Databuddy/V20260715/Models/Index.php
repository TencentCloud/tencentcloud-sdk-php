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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引结构
 *
 * @method string getType() 获取字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFieldNames() 获取字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldNames(array $FieldNames) 设置字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexType() 获取字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexType(string $IndexType) 设置字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class Index extends AbstractModel
{
    /**
     * @var string 字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldNames;

    /**
     * @var string 字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexType;

    /**
     * @param string $Type 字段键值类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FieldNames 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexType 字段键值类型
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FieldNames",$param) and $param["FieldNames"] !== null) {
            $this->FieldNames = $param["FieldNames"];
        }

        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }
    }
}
