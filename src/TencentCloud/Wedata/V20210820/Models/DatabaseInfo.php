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
 * 数据质量数据来源数据库
 *
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginDatabaseName() 获取数据库原始名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginDatabaseName(string $OriginDatabaseName) 设置数据库原始名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginSchemaName() 获取schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginSchemaName(string $OriginSchemaName) 设置schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDsEnvType() 获取0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDsEnvType(integer $DsEnvType) 设置0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterDeployType() 获取EMR引擎部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDeployType(string $ClusterDeployType) 设置EMR引擎部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置模式名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatabaseInfo extends AbstractModel
{
    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 实例Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var string 数据库原始名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginDatabaseName;

    /**
     * @var string schema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginSchemaName;

    /**
     * @var integer 0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DsEnvType;

    /**
     * @var string EMR引擎部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDeployType;

    /**
     * @var string 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginDatabaseName 数据库原始名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginSchemaName schema名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DsEnvType 0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterDeployType EMR引擎部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名称
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
        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("OriginDatabaseName",$param) and $param["OriginDatabaseName"] !== null) {
            $this->OriginDatabaseName = $param["OriginDatabaseName"];
        }

        if (array_key_exists("OriginSchemaName",$param) and $param["OriginSchemaName"] !== null) {
            $this->OriginSchemaName = $param["OriginSchemaName"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }

        if (array_key_exists("ClusterDeployType",$param) and $param["ClusterDeployType"] !== null) {
            $this->ClusterDeployType = $param["ClusterDeployType"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}
