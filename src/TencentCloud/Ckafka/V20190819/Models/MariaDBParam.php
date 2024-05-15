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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MariaDB类型入参
 *
 * @method string getDatabase() 获取MariaDB的数据库名称，"*"为全数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(string $Database) 设置MariaDB的数据库名称，"*"为全数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTable() 获取MariaDB的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(string $Table) 设置MariaDB的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResource() 获取该MariaDB在连接管理内的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置该MariaDB在连接管理内的Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotMode() 获取复制存量信息(schema_only不复制, initial全量)，默认位initial
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotMode(string $SnapshotMode) 设置复制存量信息(schema_only不复制, initial全量)，默认位initial
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyColumns() 获取格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyColumns(string $KeyColumns) 设置格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsTablePrefix() 获取当Table输入的是前缀时，该项值为true，否则为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsTablePrefix(boolean $IsTablePrefix) 设置当Table输入的是前缀时，该项值为true，否则为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputFormat() 获取输出格式，DEFAULT、CANAL_1、CANAL_2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputFormat(string $OutputFormat) 设置输出格式，DEFAULT、CANAL_1、CANAL_2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncludeContentChanges() 获取如果该值为all，则DDL数据以及DML数据也会写入到选中的topic；若该值为dml，则只有DML数据写入到选中的topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeContentChanges(string $IncludeContentChanges) 设置如果该值为all，则DDL数据以及DML数据也会写入到选中的topic；若该值为dml，则只有DML数据写入到选中的topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIncludeQuery() 获取如果该值为true，且MySQL中"binlog_rows_query_log_events"配置项的值为"ON"，则流入到topic的数据包含原SQL语句；若该值为false，流入到topic的数据不包含原SQL语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeQuery(boolean $IncludeQuery) 设置如果该值为true，且MySQL中"binlog_rows_query_log_events"配置项的值为"ON"，则流入到topic的数据包含原SQL语句；若该值为false，流入到topic的数据不包含原SQL语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRecordWithSchema() 获取如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordWithSchema(boolean $RecordWithSchema) 设置如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
注意：此字段可能返回 null，表示取不到有效值。
 */
class MariaDBParam extends AbstractModel
{
    /**
     * @var string MariaDB的数据库名称，"*"为全数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var string MariaDB的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var string 该MariaDB在连接管理内的Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string 复制存量信息(schema_only不复制, initial全量)，默认位initial
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotMode;

    /**
     * @var string 格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyColumns;

    /**
     * @var boolean 当Table输入的是前缀时，该项值为true，否则为false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsTablePrefix;

    /**
     * @var string 输出格式，DEFAULT、CANAL_1、CANAL_2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputFormat;

    /**
     * @var string 如果该值为all，则DDL数据以及DML数据也会写入到选中的topic；若该值为dml，则只有DML数据写入到选中的topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeContentChanges;

    /**
     * @var boolean 如果该值为true，且MySQL中"binlog_rows_query_log_events"配置项的值为"ON"，则流入到topic的数据包含原SQL语句；若该值为false，流入到topic的数据不包含原SQL语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeQuery;

    /**
     * @var boolean 如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordWithSchema;

    /**
     * @param string $Database MariaDB的数据库名称，"*"为全数据库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Table MariaDB的数据表名称，"*"为所监听的所有数据库中的非系统表，可以","间隔，监听多个数据表，但数据表需要以"数据库名.数据表名"的格式进行填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resource 该MariaDB在连接管理内的Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotMode 复制存量信息(schema_only不复制, initial全量)，默认位initial
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyColumns 格式：库1.表1:字段1,字段2;库2.表2:字段2，表之间;（分号）隔开，字段之间,（逗号）隔开。不指定的表默认取表的主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsTablePrefix 当Table输入的是前缀时，该项值为true，否则为false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputFormat 输出格式，DEFAULT、CANAL_1、CANAL_2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncludeContentChanges 如果该值为all，则DDL数据以及DML数据也会写入到选中的topic；若该值为dml，则只有DML数据写入到选中的topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IncludeQuery 如果该值为true，且MySQL中"binlog_rows_query_log_events"配置项的值为"ON"，则流入到topic的数据包含原SQL语句；若该值为false，流入到topic的数据不包含原SQL语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RecordWithSchema 如果该值为 true，则消息中会携带消息结构体对应的schema，如果该值为false则不会携带
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("SnapshotMode",$param) and $param["SnapshotMode"] !== null) {
            $this->SnapshotMode = $param["SnapshotMode"];
        }

        if (array_key_exists("KeyColumns",$param) and $param["KeyColumns"] !== null) {
            $this->KeyColumns = $param["KeyColumns"];
        }

        if (array_key_exists("IsTablePrefix",$param) and $param["IsTablePrefix"] !== null) {
            $this->IsTablePrefix = $param["IsTablePrefix"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("IncludeContentChanges",$param) and $param["IncludeContentChanges"] !== null) {
            $this->IncludeContentChanges = $param["IncludeContentChanges"];
        }

        if (array_key_exists("IncludeQuery",$param) and $param["IncludeQuery"] !== null) {
            $this->IncludeQuery = $param["IncludeQuery"];
        }

        if (array_key_exists("RecordWithSchema",$param) and $param["RecordWithSchema"] !== null) {
            $this->RecordWithSchema = $param["RecordWithSchema"];
        }
    }
}
