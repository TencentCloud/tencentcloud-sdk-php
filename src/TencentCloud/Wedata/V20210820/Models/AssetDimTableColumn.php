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
 * 资产维度关联数据表字段结构定义
 *
 * @method string getColumnName() 获取表字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnName(string $ColumnName) 设置表字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnNameCn() 获取表字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNameCn(string $ColumnNameCn) 设置表字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnType() 获取表字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnType(string $ColumnType) 设置表字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnDescription() 获取表字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnDescription(string $ColumnDescription) 设置表字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGuid() 获取表GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGuid(string $TableGuid) 设置表GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取表归属的数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置表归属的数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取表归属的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置表归属的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetDimTableColumn extends AbstractModel
{
    /**
     * @var string 表字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnName;

    /**
     * @var string 表字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNameCn;

    /**
     * @var string 表字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnType;

    /**
     * @var string 表字段描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnDescription;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表GUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGuid;

    /**
     * @var string 表归属的数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表归属的Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @param string $ColumnName 表字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnNameCn 表字段中文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnType 表字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnDescription 表字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGuid 表GUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 表归属的数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 表归属的Schema名称
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
        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("ColumnNameCn",$param) and $param["ColumnNameCn"] !== null) {
            $this->ColumnNameCn = $param["ColumnNameCn"];
        }

        if (array_key_exists("ColumnType",$param) and $param["ColumnType"] !== null) {
            $this->ColumnType = $param["ColumnType"];
        }

        if (array_key_exists("ColumnDescription",$param) and $param["ColumnDescription"] !== null) {
            $this->ColumnDescription = $param["ColumnDescription"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableGuid",$param) and $param["TableGuid"] !== null) {
            $this->TableGuid = $param["TableGuid"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
