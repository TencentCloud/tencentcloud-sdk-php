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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据信息
 *
 * @method string getMsType() 获取数据类型：HIVE，ICEBERG，CDW，DLC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsType(string $MsType) 设置数据类型：HIVE，ICEBERG，CDW，DLC
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbName() 获取DbName类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置DbName类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Name表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Name表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(float $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOwnerAccount() 获取创建人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccount(float $OwnerAccount) 设置创建人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取普通字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置普通字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionKeys() 获取分区字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionKeys(array $PartitionKeys) 设置分区字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalog() 获取Catalog类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(string $Catalog) 设置Catalog类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取Type类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置Type类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameCn() 获取废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameCn(string $NameCn) 设置废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionType() 获取废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionType(integer $PartitionType) 设置废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeTime() 获取生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeTime(integer $LifeTime) 设置生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageFormat() 获取废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageFormat(string $StorageFormat) 设置废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnDelimiter() 获取废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnDelimiter(string $ColumnDelimiter) 设置废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectionType() 获取废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionType(string $ConnectionType) 设置废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameEn() 获取表英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameEn(string $NameEn) 设置表英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSql() 获取建表 SQL，DDL 模式 建 hive 表时，wedata 会对其进行 base64 解码，故传进来之前应该进行 base64转码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSql(string $Sql) 设置建表 SQL，DDL 模式 建 hive 表时，wedata 会对其进行 base64 解码，故传进来之前应该进行 base64转码
注意：此字段可能返回 null，表示取不到有效值。
 * @method BizParams getBizParams() 获取表业务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParams(BizParams $BizParams) 设置表业务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取模式名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置模式名
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableHybrisReq extends AbstractModel
{
    /**
     * @var string 数据类型：HIVE，ICEBERG，CDW，DLC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsType;

    /**
     * @var string DbName类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var string Name表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var float 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var float 创建人账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccount;

    /**
     * @var array 普通字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 分区字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionKeys;

    /**
     * @var string Catalog类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @var string Type类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameCn;

    /**
     * @var string 中文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionType;

    /**
     * @var integer 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeTime;

    /**
     * @var string 废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageFormat;

    /**
     * @var string 废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnDelimiter;

    /**
     * @var string 废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionType;

    /**
     * @var string 废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 表英文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameEn;

    /**
     * @var string 建表 SQL，DDL 模式 建 hive 表时，wedata 会对其进行 base64 解码，故传进来之前应该进行 base64转码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sql;

    /**
     * @var BizParams 表业务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParams;

    /**
     * @var string 模式名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @param string $MsType 数据类型：HIVE，ICEBERG，CDW，DLC
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbName DbName类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Name表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OwnerAccount 创建人账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 普通字段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionKeys 分区字段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Catalog Catalog类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type Type类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameCn 废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 中文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionType 废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeTime 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageFormat 废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnDelimiter 废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectionType 废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameEn 表英文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sql 建表 SQL，DDL 模式 建 hive 表时，wedata 会对其进行 base64 解码，故传进来之前应该进行 base64转码
注意：此字段可能返回 null，表示取不到有效值。
     * @param BizParams $BizParams 表业务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名
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
        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Columns();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("PartitionKeys",$param) and $param["PartitionKeys"] !== null) {
            $this->PartitionKeys = [];
            foreach ($param["PartitionKeys"] as $key => $value){
                $obj = new Columns();
                $obj->deserialize($value);
                array_push($this->PartitionKeys, $obj);
            }
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NameCn",$param) and $param["NameCn"] !== null) {
            $this->NameCn = $param["NameCn"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("LifeTime",$param) and $param["LifeTime"] !== null) {
            $this->LifeTime = $param["LifeTime"];
        }

        if (array_key_exists("StorageFormat",$param) and $param["StorageFormat"] !== null) {
            $this->StorageFormat = $param["StorageFormat"];
        }

        if (array_key_exists("ColumnDelimiter",$param) and $param["ColumnDelimiter"] !== null) {
            $this->ColumnDelimiter = $param["ColumnDelimiter"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = new BizParams();
            $this->BizParams->deserialize($param["BizParams"]);
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
