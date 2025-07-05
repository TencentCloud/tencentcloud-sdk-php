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
 * 列的元数据
 *
 * @method string getNameEn() 获取字段英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameEn(string $NameEn) 设置字段英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameCn() 获取字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameCn(string $NameCn) 设置字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取字段序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置字段序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPartition() 获取是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartition(boolean $IsPartition) 设置是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumnFamiliesFieldSet() 获取HBase列簇属性集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnFamiliesFieldSet(array $ColumnFamiliesFieldSet) 设置HBase列簇属性集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDictionaryId() 获取对应码表字典ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDictionaryId(string $DictionaryId) 设置对应码表字典ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDictionaryName() 获取对应码表字典名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDictionaryName(string $DictionaryName) 设置对应码表字典名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevelName() 获取安全等级：名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelName(string $LevelName) 设置安全等级：名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelRank() 获取安全等级：值范围1-10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelRank(integer $LevelRank) 设置安全等级：值范围1-10
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInfluxCategory() 获取influxdb字段类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfluxCategory(string $InfluxCategory) 设置influxdb字段类别
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnMeta extends AbstractModel
{
    /**
     * @var string 字段英文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameEn;

    /**
     * @var string 字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameCn;

    /**
     * @var string 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 字段序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var boolean 是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartition;

    /**
     * @var string 字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array HBase列簇属性集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnFamiliesFieldSet;

    /**
     * @var string 对应码表字典ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DictionaryId;

    /**
     * @var string 对应码表字典名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DictionaryName;

    /**
     * @var string 安全等级：名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelName;

    /**
     * @var integer 安全等级：值范围1-10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelRank;

    /**
     * @var string influxdb字段类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InfluxCategory;

    /**
     * @param string $NameEn 字段英文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameCn 字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 字段序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPartition 是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ColumnFamiliesFieldSet HBase列簇属性集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DictionaryId 对应码表字典ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DictionaryName 对应码表字典名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LevelName 安全等级：名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelRank 安全等级：值范围1-10
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InfluxCategory influxdb字段类别
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
        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("NameCn",$param) and $param["NameCn"] !== null) {
            $this->NameCn = $param["NameCn"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ColumnFamiliesFieldSet",$param) and $param["ColumnFamiliesFieldSet"] !== null) {
            $this->ColumnFamiliesFieldSet = [];
            foreach ($param["ColumnFamiliesFieldSet"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->ColumnFamiliesFieldSet, $obj);
            }
        }

        if (array_key_exists("DictionaryId",$param) and $param["DictionaryId"] !== null) {
            $this->DictionaryId = $param["DictionaryId"];
        }

        if (array_key_exists("DictionaryName",$param) and $param["DictionaryName"] !== null) {
            $this->DictionaryName = $param["DictionaryName"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelRank",$param) and $param["LevelRank"] !== null) {
            $this->LevelRank = $param["LevelRank"];
        }

        if (array_key_exists("InfluxCategory",$param) and $param["InfluxCategory"] !== null) {
            $this->InfluxCategory = $param["InfluxCategory"];
        }
    }
}
