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
 * 任务数据库登记项
 *
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPartitionName() 获取分区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionName(string $PartitionName) 设置分区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataFlowType() 获取输入输出表类型
      输入流
 UPSTREAM,
      输出流
  DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFlowType(string $DataFlowType) 设置输入输出表类型
      输入流
 UPSTREAM,
      输出流
  DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTablePhysicalId() 获取表物理唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePhysicalId(string $TablePhysicalId) 设置表物理唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbGuid() 获取库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbGuid(string $DbGuid) 设置库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGuid() 获取表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGuid(string $TableGuid) 设置表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQualifiedName() 获取Catalog(如有).数据库(如有).表名名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualifiedName(string $QualifiedName) 设置Catalog(如有).数据库(如有).表名名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDataRegistry extends AbstractModel
{
    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 分区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionName;

    /**
     * @var string 输入输出表类型
      输入流
 UPSTREAM,
      输出流
  DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFlowType;

    /**
     * @var string 表物理唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePhysicalId;

    /**
     * @var string 库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbGuid;

    /**
     * @var string 表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGuid;

    /**
     * @var string Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string Catalog(如有).数据库(如有).表名名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualifiedName;

    /**
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PartitionName 分区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataFlowType 输入输出表类型
      输入流
 UPSTREAM,
      输出流
  DOWNSTREAM;
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TablePhysicalId 表物理唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbGuid 库唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGuid 表唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QualifiedName Catalog(如有).数据库(如有).表名名称
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("DataFlowType",$param) and $param["DataFlowType"] !== null) {
            $this->DataFlowType = $param["DataFlowType"];
        }

        if (array_key_exists("TablePhysicalId",$param) and $param["TablePhysicalId"] !== null) {
            $this->TablePhysicalId = $param["TablePhysicalId"];
        }

        if (array_key_exists("DbGuid",$param) and $param["DbGuid"] !== null) {
            $this->DbGuid = $param["DbGuid"];
        }

        if (array_key_exists("TableGuid",$param) and $param["TableGuid"] !== null) {
            $this->TableGuid = $param["TableGuid"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("QualifiedName",$param) and $param["QualifiedName"] !== null) {
            $this->QualifiedName = $param["QualifiedName"];
        }
    }
}
