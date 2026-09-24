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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc TableInfo定义
 *
 * @method string getName() 获取<p>表名称</p>
 * @method void setName(string $Name) 设置<p>表名称</p>
 * @method string getComment() 获取<p>描述</p>
 * @method void setComment(string $Comment) 设置<p>描述</p>
 * @method array getColumns() 获取<p>字段信息</p>
 * @method void setColumns(array $Columns) 设置<p>字段信息</p>
 * @method array getProperties() 获取<p>属性值</p>
 * @method void setProperties(array $Properties) 设置<p>属性值</p>
 * @method array getPartitioning() 获取<p>分区</p>
 * @method void setPartitioning(array $Partitioning) 设置<p>分区</p>
 * @method array getIndexes() 获取<p>索引</p>
 * @method void setIndexes(array $Indexes) 设置<p>索引</p>
 * @method Audit getAudit() 获取<p>编辑者/审计信息</p>
 * @method void setAudit(Audit $Audit) 设置<p>编辑者/审计信息</p>
 * @method string getCatalogName() 获取<p>数据目录名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录名称</p>
 * @method string getSchemaName() 获取<p>数据库名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>数据库名称</p>
 * @method string getTableFormat() 获取<p>表格式</p>
 * @method void setTableFormat(string $TableFormat) 设置<p>表格式</p>
 * @method string getFormatType() 获取<p>表格式类型</p><p>枚举值：</p><ul><li>v2： TcIceberg v2版本</li></ul>
 * @method void setFormatType(string $FormatType) 设置<p>表格式类型</p><p>枚举值：</p><ul><li>v2： TcIceberg v2版本</li></ul>
 * @method string getTableType() 获取<p>表类型</p><p>枚举值：</p><ul><li>Managed： 内部表</li></ul>
 * @method void setTableType(string $TableType) 设置<p>表类型</p><p>枚举值：</p><ul><li>Managed： 内部表</li></ul>
 * @method string getTableMode() 获取<p>场景类型</p><p>枚举值：</p><ul><li>REALTIME： 实时类型</li></ul>
 * @method void setTableMode(string $TableMode) 设置<p>场景类型</p><p>枚举值：</p><ul><li>REALTIME： 实时类型</li></ul>
 */
class CatalogTaleInfo extends AbstractModel
{
    /**
     * @var string <p>表名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Comment;

    /**
     * @var array <p>字段信息</p>
     */
    public $Columns;

    /**
     * @var array <p>属性值</p>
     */
    public $Properties;

    /**
     * @var array <p>分区</p>
     */
    public $Partitioning;

    /**
     * @var array <p>索引</p>
     */
    public $Indexes;

    /**
     * @var Audit <p>编辑者/审计信息</p>
     */
    public $Audit;

    /**
     * @var string <p>数据目录名称</p>
     */
    public $CatalogName;

    /**
     * @var string <p>数据库名称</p>
     */
    public $SchemaName;

    /**
     * @var string <p>表格式</p>
     */
    public $TableFormat;

    /**
     * @var string <p>表格式类型</p><p>枚举值：</p><ul><li>v2： TcIceberg v2版本</li></ul>
     */
    public $FormatType;

    /**
     * @var string <p>表类型</p><p>枚举值：</p><ul><li>Managed： 内部表</li></ul>
     */
    public $TableType;

    /**
     * @var string <p>场景类型</p><p>枚举值：</p><ul><li>REALTIME： 实时类型</li></ul>
     */
    public $TableMode;

    /**
     * @param string $Name <p>表名称</p>
     * @param string $Comment <p>描述</p>
     * @param array $Columns <p>字段信息</p>
     * @param array $Properties <p>属性值</p>
     * @param array $Partitioning <p>分区</p>
     * @param array $Indexes <p>索引</p>
     * @param Audit $Audit <p>编辑者/审计信息</p>
     * @param string $CatalogName <p>数据目录名称</p>
     * @param string $SchemaName <p>数据库名称</p>
     * @param string $TableFormat <p>表格式</p>
     * @param string $FormatType <p>表格式类型</p><p>枚举值：</p><ul><li>v2： TcIceberg v2版本</li></ul>
     * @param string $TableType <p>表类型</p><p>枚举值：</p><ul><li>Managed： 内部表</li></ul>
     * @param string $TableMode <p>场景类型</p><p>枚举值：</p><ul><li>REALTIME： 实时类型</li></ul>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ColumnInfo();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Partitioning",$param) and $param["Partitioning"] !== null) {
            $this->Partitioning = [];
            foreach ($param["Partitioning"] as $key => $value){
                $obj = new Partitioning();
                $obj->deserialize($value);
                array_push($this->Partitioning, $obj);
            }
        }

        if (array_key_exists("Indexes",$param) and $param["Indexes"] !== null) {
            $this->Indexes = [];
            foreach ($param["Indexes"] as $key => $value){
                $obj = new IndexInfo();
                $obj->deserialize($value);
                array_push($this->Indexes, $obj);
            }
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }

        if (array_key_exists("FormatType",$param) and $param["FormatType"] !== null) {
            $this->FormatType = $param["FormatType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }
    }
}
