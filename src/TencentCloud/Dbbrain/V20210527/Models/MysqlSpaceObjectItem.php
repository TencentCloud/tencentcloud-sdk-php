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
 * MySQL 系列产品空间对象项。库级查询时不包含 TableName/Engine 字段；表级查询时包含全部字段。
 *
 * @method string getTableSchema() 获取<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableSchema(string $TableSchema) 设置<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>表名（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>表名（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取<p>存储引擎（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置<p>存储引擎（Level=TABLE时返回）。</p>
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
 * @method float getDataFree() 获取<p>碎片空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFree(float $DataFree) 设置<p>碎片空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFragRatio() 获取<p>碎片率（%）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragRatio(float $FragRatio) 设置<p>碎片率（%）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPhysicalFileSize() 获取<p>物理文件大小（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalFileSize(float $PhysicalFileSize) 设置<p>物理文件大小（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MysqlSpaceObjectItem extends AbstractModel
{
    /**
     * @var string <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableSchema;

    /**
     * @var string <p>表名（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string <p>存储引擎（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

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
     * @var float <p>碎片空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFree;

    /**
     * @var float <p>碎片率（%）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragRatio;

    /**
     * @var float <p>物理文件大小（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalFileSize;

    /**
     * @param string $TableSchema <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>表名（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine <p>存储引擎（Level=TABLE时返回）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableRows <p>行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalLength <p>总使用空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataLength <p>数据空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $IndexLength <p>索引空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataFree <p>碎片空间（MB）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FragRatio <p>碎片率（%）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PhysicalFileSize <p>物理文件大小（MB）。</p>
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

        if (array_key_exists("FragRatio",$param) and $param["FragRatio"] !== null) {
            $this->FragRatio = $param["FragRatio"];
        }

        if (array_key_exists("PhysicalFileSize",$param) and $param["PhysicalFileSize"] !== null) {
            $this->PhysicalFileSize = $param["PhysicalFileSize"];
        }
    }
}
