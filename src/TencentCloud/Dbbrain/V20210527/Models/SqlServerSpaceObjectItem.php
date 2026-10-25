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
 * SQL Server 产品空间对象项（单表明细）。字段命名与 MySQL 同构（TableSchema/TableName/Engine/TableRows/TotalLength/DataLength/IndexLength/DataFree，单位 MB），无 FragRatio / PhysicalFileSize。
 *
 * @method string getTableSchema() 获取<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableSchema(string $TableSchema) 设置<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>表名（库内限定名 schema.table，如 dbo.users）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>表名（库内限定名 schema.table，如 dbo.users）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取<p>存储引擎标识，固定为 SqlServer。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置<p>存储引擎标识，固定为 SqlServer。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableStatus() 获取<p>表状态（仅单表查询 DescribeTableSpaceDataV2 返回；取值：-1 表示库表最新一次采集不到或实例超限不拉取，0 正在拉取，1 拉取完成；该字段仅针对实例级别）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableStatus(integer $TableStatus) 设置<p>表状态（仅单表查询 DescribeTableSpaceDataV2 返回；取值：-1 表示库表最新一次采集不到或实例超限不拉取，0 正在拉取，1 拉取完成；该字段仅针对实例级别）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableRows() 获取<p>行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableRows(integer $TableRows) 设置<p>行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalLength() 获取<p>总使用空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalLength(float $TotalLength) 设置<p>总使用空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDataLength() 获取<p>数据空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLength(float $DataLength) 设置<p>数据空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getIndexLength() 获取<p>索引空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexLength(float $IndexLength) 设置<p>索引空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDataFree() 获取<p>碎片空间（MB），对应保留空洞 reserved-used。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFree(float $DataFree) 设置<p>碎片空间（MB），对应保留空洞 reserved-used。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlServerSpaceObjectItem extends AbstractModel
{
    /**
     * @var string <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableSchema;

    /**
     * @var string <p>表名（库内限定名 schema.table，如 dbo.users）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string <p>存储引擎标识，固定为 SqlServer。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var integer <p>表状态（仅单表查询 DescribeTableSpaceDataV2 返回；取值：-1 表示库表最新一次采集不到或实例超限不拉取，0 正在拉取，1 拉取完成；该字段仅针对实例级别）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableStatus;

    /**
     * @var integer <p>行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableRows;

    /**
     * @var float <p>总使用空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalLength;

    /**
     * @var float <p>数据空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLength;

    /**
     * @var float <p>索引空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexLength;

    /**
     * @var float <p>碎片空间（MB），对应保留空洞 reserved-used。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFree;

    /**
     * @param string $TableSchema <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>表名（库内限定名 schema.table，如 dbo.users）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine <p>存储引擎标识，固定为 SqlServer。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableStatus <p>表状态（仅单表查询 DescribeTableSpaceDataV2 返回；取值：-1 表示库表最新一次采集不到或实例超限不拉取，0 正在拉取，1 拉取完成；该字段仅针对实例级别）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableRows <p>行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalLength <p>总使用空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataLength <p>数据空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $IndexLength <p>索引空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataFree <p>碎片空间（MB），对应保留空洞 reserved-used。</p>
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
        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("TableStatus",$param) and $param["TableStatus"] !== null) {
            $this->TableStatus = $param["TableStatus"];
        }

        if (array_key_exists("TableRows",$param) and $param["TableRows"] !== null) {
            $this->TableRows = $param["TableRows"];
        }

        if (array_key_exists("TotalLength",$param) and $param["TotalLength"] !== null) {
            $this->TotalLength = $param["TotalLength"];
        }

        if (array_key_exists("DataLength",$param) and $param["DataLength"] !== null) {
            $this->DataLength = $param["DataLength"];
        }

        if (array_key_exists("IndexLength",$param) and $param["IndexLength"] !== null) {
            $this->IndexLength = $param["IndexLength"];
        }

        if (array_key_exists("DataFree",$param) and $param["DataFree"] !== null) {
            $this->DataFree = $param["DataFree"];
        }
    }
}
