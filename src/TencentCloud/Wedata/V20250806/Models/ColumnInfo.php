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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ColumnInfo
 *
 * @method string getType() 获取字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method integer getLength() 获取字段长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLength(integer $Length) 设置字段长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取字段的顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置字段的顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPartition() 获取是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartition(boolean $IsPartition) 设置是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnInfo extends AbstractModel
{
    /**
     * @var string 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var integer 字段长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Length;

    /**
     * @var string 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 字段的顺序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var boolean 是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartition;

    /**
     * @param string $Type 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 字段名称
     * @param integer $Length 字段长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 字段的顺序
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPartition 是否为分区字段
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

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
