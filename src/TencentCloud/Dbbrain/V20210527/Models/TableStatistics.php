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
 * 表统计信息明细
 *
 * @method string getTableName() 获取<p>表名。</p>
 * @method void setTableName(string $TableName) 设置<p>表名。</p>
 * @method string getTableSchema() 获取<p>Schema 名。</p>
 * @method void setTableSchema(string $TableSchema) 设置<p>Schema 名。</p>
 * @method string getDatabaseName() 获取<p>库名（catalog）。</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>库名（catalog）。</p>
 * @method string getEngine() 获取<p>存储引擎。</p>
 * @method void setEngine(string $Engine) 设置<p>存储引擎。</p>
 * @method float getDataLength() 获取<p>数据空间。</p><p>单位：MB</p>
 * @method void setDataLength(float $DataLength) 设置<p>数据空间。</p><p>单位：MB</p>
 * @method float getIndexLength() 获取<p>索引空间。</p><p>单位：MB</p>
 * @method void setIndexLength(float $IndexLength) 设置<p>索引空间。</p><p>单位：MB</p>
 * @method float getTotalLength() 获取<p>总分配空间。</p><p>单位：MB</p>
 * @method void setTotalLength(float $TotalLength) 设置<p>总分配空间。</p><p>单位：MB</p>
 * @method float getUsedLength() 获取<p>已用空间。</p><p>单位：MB</p>
 * @method void setUsedLength(float $UsedLength) 设置<p>已用空间。</p><p>单位：MB</p>
 * @method float getDataFree() 获取<p>碎片空间。</p><p>单位：MB</p>
 * @method void setDataFree(float $DataFree) 设置<p>碎片空间。</p><p>单位：MB</p>
 * @method integer getTableRows() 获取<p>行数。</p>
 * @method void setTableRows(integer $TableRows) 设置<p>行数。</p>
 * @method float getFragRatio() 获取<p>碎片率（%）。</p>
 * @method void setFragRatio(float $FragRatio) 设置<p>碎片率（%）。</p>
 * @method float getPhysicalFileSize() 获取<p>物理文件大小。</p><p>单位：MB</p>
 * @method void setPhysicalFileSize(float $PhysicalFileSize) 设置<p>物理文件大小。</p><p>单位：MB</p>
 */
class TableStatistics extends AbstractModel
{
    /**
     * @var string <p>表名。</p>
     */
    public $TableName;

    /**
     * @var string <p>Schema 名。</p>
     */
    public $TableSchema;

    /**
     * @var string <p>库名（catalog）。</p>
     */
    public $DatabaseName;

    /**
     * @var string <p>存储引擎。</p>
     */
    public $Engine;

    /**
     * @var float <p>数据空间。</p><p>单位：MB</p>
     */
    public $DataLength;

    /**
     * @var float <p>索引空间。</p><p>单位：MB</p>
     */
    public $IndexLength;

    /**
     * @var float <p>总分配空间。</p><p>单位：MB</p>
     */
    public $TotalLength;

    /**
     * @var float <p>已用空间。</p><p>单位：MB</p>
     */
    public $UsedLength;

    /**
     * @var float <p>碎片空间。</p><p>单位：MB</p>
     */
    public $DataFree;

    /**
     * @var integer <p>行数。</p>
     */
    public $TableRows;

    /**
     * @var float <p>碎片率（%）。</p>
     */
    public $FragRatio;

    /**
     * @var float <p>物理文件大小。</p><p>单位：MB</p>
     */
    public $PhysicalFileSize;

    /**
     * @param string $TableName <p>表名。</p>
     * @param string $TableSchema <p>Schema 名。</p>
     * @param string $DatabaseName <p>库名（catalog）。</p>
     * @param string $Engine <p>存储引擎。</p>
     * @param float $DataLength <p>数据空间。</p><p>单位：MB</p>
     * @param float $IndexLength <p>索引空间。</p><p>单位：MB</p>
     * @param float $TotalLength <p>总分配空间。</p><p>单位：MB</p>
     * @param float $UsedLength <p>已用空间。</p><p>单位：MB</p>
     * @param float $DataFree <p>碎片空间。</p><p>单位：MB</p>
     * @param integer $TableRows <p>行数。</p>
     * @param float $FragRatio <p>碎片率（%）。</p>
     * @param float $PhysicalFileSize <p>物理文件大小。</p><p>单位：MB</p>
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("DataLength",$param) and $param["DataLength"] !== null) {
            $this->DataLength = $param["DataLength"];
        }

        if (array_key_exists("IndexLength",$param) and $param["IndexLength"] !== null) {
            $this->IndexLength = $param["IndexLength"];
        }

        if (array_key_exists("TotalLength",$param) and $param["TotalLength"] !== null) {
            $this->TotalLength = $param["TotalLength"];
        }

        if (array_key_exists("UsedLength",$param) and $param["UsedLength"] !== null) {
            $this->UsedLength = $param["UsedLength"];
        }

        if (array_key_exists("DataFree",$param) and $param["DataFree"] !== null) {
            $this->DataFree = $param["DataFree"];
        }

        if (array_key_exists("TableRows",$param) and $param["TableRows"] !== null) {
            $this->TableRows = $param["TableRows"];
        }

        if (array_key_exists("FragRatio",$param) and $param["FragRatio"] !== null) {
            $this->FragRatio = $param["FragRatio"];
        }

        if (array_key_exists("PhysicalFileSize",$param) and $param["PhysicalFileSize"] !== null) {
            $this->PhysicalFileSize = $param["PhysicalFileSize"];
        }
    }
}
