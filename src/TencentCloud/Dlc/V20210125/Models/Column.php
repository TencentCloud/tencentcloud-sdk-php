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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据表列信息。
 *
 * @method string getName() 获取列名称，不区分大小写，最大支持25个字符。
 * @method void setName(string $Name) 设置列名称，不区分大小写，最大支持25个字符。
 * @method string getType() 获取列类型，支持如下类型定义:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>。
 * @method void setType(string $Type) 设置列类型，支持如下类型定义:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>。
 * @method string getComment() 获取对该类的注释。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置对该类的注释。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrecision() 获取表示整个 numeric 的长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrecision(integer $Precision) 设置表示整个 numeric 的长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScale() 获取表示小数部分的长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScale(integer $Scale) 设置表示小数部分的长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNullable() 获取是否为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNullable(string $Nullable) 设置是否为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取字段位置，小的在前
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置字段位置，小的在前
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取字段创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置字段创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取字段修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置字段修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPartition() 获取是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartition(boolean $IsPartition) 设置是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class Column extends AbstractModel
{
    /**
     * @var string 列名称，不区分大小写，最大支持25个字符。
     */
    public $Name;

    /**
     * @var string 列类型，支持如下类型定义:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>。
     */
    public $Type;

    /**
     * @var string 对该类的注释。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var integer 表示整个 numeric 的长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Precision;

    /**
     * @var integer 表示小数部分的长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scale;

    /**
     * @var string 是否为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nullable;

    /**
     * @var integer 字段位置，小的在前
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var string 字段创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 字段修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var boolean 是否为分区字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartition;

    /**
     * @param string $Name 列名称，不区分大小写，最大支持25个字符。
     * @param string $Type 列类型，支持如下类型定义:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>。
     * @param string $Comment 对该类的注释。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Precision 表示整个 numeric 的长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scale 表示小数部分的长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nullable 是否为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 字段位置，小的在前
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 字段创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 字段修改时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Nullable",$param) and $param["Nullable"] !== null) {
            $this->Nullable = $param["Nullable"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
