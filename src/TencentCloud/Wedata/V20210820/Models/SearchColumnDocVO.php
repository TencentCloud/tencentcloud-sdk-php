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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表字段信息
 *
 * @method string getName() 获取字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChineseName() 获取字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChineseName(string $ChineseName) 设置字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLength() 获取字段类型长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLength(integer $Length) 设置字段类型长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrecision() 获取字段类型精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrecision(integer $Precision) 设置字段类型精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScale() 获取字段类型scale
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScale(integer $Scale) 设置字段类型scale
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultValue() 获取字段默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置字段默认值
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
 * @method string getColumnKey() 获取列上的索引类型 主键: PRI,唯一索引: UNI,一般索引: MUL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnKey(string $ColumnKey) 设置列上的索引类型 主键: PRI,唯一索引: UNI,一般索引: MUL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecification() 获取字段使用说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecification(string $Specification) 设置字段使用说明
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchColumnDocVO extends AbstractModel
{
    /**
     * @var string 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChineseName;

    /**
     * @var string 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 字段类型长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Length;

    /**
     * @var integer 字段类型精度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Precision;

    /**
     * @var integer 字段类型scale
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scale;

    /**
     * @var string 字段默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

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
     * @var string 列上的索引类型 主键: PRI,唯一索引: UNI,一般索引: MUL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnKey;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 字段使用说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Specification;

    /**
     * @param string $Name 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChineseName 字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Length 字段类型长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Precision 字段类型精度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scale 字段类型scale
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultValue 字段默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 字段的顺序
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPartition 是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnKey 列上的索引类型 主键: PRI,唯一索引: UNI,一般索引: MUL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Specification 字段使用说明
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

        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
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

        if (array_key_exists("ColumnKey",$param) and $param["ColumnKey"] !== null) {
            $this->ColumnKey = $param["ColumnKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }
    }
}
