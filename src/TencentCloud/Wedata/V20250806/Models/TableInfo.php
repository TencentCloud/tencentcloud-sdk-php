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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库信息
 *
 * @method string getGuid() 获取数据表GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGuid(string $Guid) 设置数据表GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取数据表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置数据表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取数据表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取数据库Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置数据库Schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method TechnicalMetadata getTechnicalMetadata() 获取表的技术元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTechnicalMetadata(TechnicalMetadata $TechnicalMetadata) 设置表的技术元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method BusinessMetadata getBusinessMetadata() 获取表的业务元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessMetadata(BusinessMetadata $BusinessMetadata) 设置表的业务元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(string $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableInfo extends AbstractModel
{
    /**
     * @var string 数据表GUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Guid;

    /**
     * @var string 数据表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 数据表描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 数据库Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string 表类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var TechnicalMetadata 表的技术元数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TechnicalMetadata;

    /**
     * @var BusinessMetadata 表的业务元数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessMetadata;

    /**
     * @var string 数据目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var integer 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @param string $Guid 数据表GUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 数据表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 数据表描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 数据库Schema名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param TechnicalMetadata $TechnicalMetadata 表的技术元数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param BusinessMetadata $BusinessMetadata 表的业务元数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName 数据目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceType 数据源类型
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
        if (array_key_exists("Guid",$param) and $param["Guid"] !== null) {
            $this->Guid = $param["Guid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TechnicalMetadata",$param) and $param["TechnicalMetadata"] !== null) {
            $this->TechnicalMetadata = new TechnicalMetadata();
            $this->TechnicalMetadata->deserialize($param["TechnicalMetadata"]);
        }

        if (array_key_exists("BusinessMetadata",$param) and $param["BusinessMetadata"] !== null) {
            $this->BusinessMetadata = new BusinessMetadata();
            $this->BusinessMetadata->deserialize($param["BusinessMetadata"]);
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
