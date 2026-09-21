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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostgreSQL 产品空间对象项。字段语义与 MySQL 不同：使用 pg_relation_size / pg_total_relation_size 等 PG 特有指标。库级查询时不包含 TableSchema/TableName 字段；表级查询时包含全部字段。
 *
 * @method string getTableCatalog() 获取<p>数据库名（PostgreSQL 顶层 catalog）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableCatalog(string $TableCatalog) 设置<p>数据库名（PostgreSQL 顶层 catalog）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableSchema() 获取<p>Schema 名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableSchema(string $TableSchema) 设置<p>Schema 名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>表名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>表名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRelationSize() 获取<p>表本身大小（MB），对应 pg_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationSize(float $RelationSize) 设置<p>表本身大小（MB），对应 pg_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTableSize() 获取<p>表数据大小（MB），含 TOAST 但不含索引，对应 pg_table_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableSize(float $TableSize) 设置<p>表数据大小（MB），含 TOAST 但不含索引，对应 pg_table_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getIndexSize() 获取<p>索引大小（MB），对应 pg_indexes_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexSize(float $IndexSize) 设置<p>索引大小（MB），对应 pg_indexes_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalRelationSize() 获取<p>总大小（MB），含数据、索引、TOAST，对应 pg_total_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRelationSize(float $TotalRelationSize) 设置<p>总大小（MB），含数据、索引、TOAST，对应 pg_total_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTableBloat() 获取<p>表膨胀率（PostgreSQL 特有指标）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableBloat(float $TableBloat) 设置<p>表膨胀率（PostgreSQL 特有指标）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableRows() 获取<p>表行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableRows(integer $TableRows) 设置<p>表行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PostgresSpaceObjectItem extends AbstractModel
{
    /**
     * @var string <p>数据库名（PostgreSQL 顶层 catalog）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableCatalog;

    /**
     * @var string <p>Schema 名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableSchema;

    /**
     * @var string <p>表名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var float <p>表本身大小（MB），对应 pg_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationSize;

    /**
     * @var float <p>表数据大小（MB），含 TOAST 但不含索引，对应 pg_table_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableSize;

    /**
     * @var float <p>索引大小（MB），对应 pg_indexes_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexSize;

    /**
     * @var float <p>总大小（MB），含数据、索引、TOAST，对应 pg_total_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRelationSize;

    /**
     * @var float <p>表膨胀率（PostgreSQL 特有指标）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableBloat;

    /**
     * @var integer <p>表行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableRows;

    /**
     * @param string $TableCatalog <p>数据库名（PostgreSQL 顶层 catalog）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableSchema <p>Schema 名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>表名（Level=TABLE 时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RelationSize <p>表本身大小（MB），对应 pg_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TableSize <p>表数据大小（MB），含 TOAST 但不含索引，对应 pg_table_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $IndexSize <p>索引大小（MB），对应 pg_indexes_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalRelationSize <p>总大小（MB），含数据、索引、TOAST，对应 pg_total_relation_size。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TableBloat <p>表膨胀率（PostgreSQL 特有指标）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableRows <p>表行数。</p>
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
        if (array_key_exists("TableCatalog",$param) and $param["TableCatalog"] !== null) {
            $this->TableCatalog = $param["TableCatalog"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RelationSize",$param) and $param["RelationSize"] !== null) {
            $this->RelationSize = $param["RelationSize"];
        }

        if (array_key_exists("TableSize",$param) and $param["TableSize"] !== null) {
            $this->TableSize = $param["TableSize"];
        }

        if (array_key_exists("IndexSize",$param) and $param["IndexSize"] !== null) {
            $this->IndexSize = $param["IndexSize"];
        }

        if (array_key_exists("TotalRelationSize",$param) and $param["TotalRelationSize"] !== null) {
            $this->TotalRelationSize = $param["TotalRelationSize"];
        }

        if (array_key_exists("TableBloat",$param) and $param["TableBloat"] !== null) {
            $this->TableBloat = $param["TableBloat"];
        }

        if (array_key_exists("TableRows",$param) and $param["TableRows"] !== null) {
            $this->TableRows = $param["TableRows"];
        }
    }
}
