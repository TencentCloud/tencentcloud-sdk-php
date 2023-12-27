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
 * 表的元数据信息
 *
 * @method string getTableId() 获取表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineType() 获取引擎/存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置引擎/存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表类型，视图，外部表等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表类型，视图，外部表等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerId() 获取责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerId(string $TableOwnerId) 设置责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerName() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerName(string $TableOwnerName) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageLocation() 获取存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageLocation(integer $StorageLocation) 设置存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPartitionTable() 获取是否分区表，0-全量表 1-分区表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartitionTable(integer $IsPartitionTable) 设置是否分区表，0-全量表 1-分区表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionColumns() 获取分区字段list
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionColumns(array $PartitionColumns) 设置分区字段list
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageFormat() 获取存储格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageFormat(string $StorageFormat) 设置存储格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageSizeWithUnit() 获取存储量，单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) 设置存储量，单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSizeMb() 获取累计存储【MB】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSizeMb(integer $TotalSizeMb) 设置累计存储【MB】
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicaCount() 获取副本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaCount(integer $ReplicaCount) 设置副本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileCount() 获取文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileCount(integer $FileCount) 设置文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionCount() 获取分区总数（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionCount(integer $PartitionCount) 设置分区总数（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionFieldCount() 获取分区字段数量（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionFieldCount(integer $PartitionFieldCount) 设置分区字段数量（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionExpireDays() 获取生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionExpireDays(integer $PartitionExpireDays) 设置生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableBasicInfo extends AbstractModel
{
    /**
     * @var string 表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 引擎/存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var string 表类型，视图，外部表等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var string 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerId;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerName;

    /**
     * @var integer 存储位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageLocation;

    /**
     * @var string 表描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 是否分区表，0-全量表 1-分区表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartitionTable;

    /**
     * @var array 分区字段list
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionColumns;

    /**
     * @var string 存储格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageFormat;

    /**
     * @var integer 存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var string 存储量，单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSizeWithUnit;

    /**
     * @var integer 累计存储【MB】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSizeMb;

    /**
     * @var integer 副本数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaCount;

    /**
     * @var integer 文件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileCount;

    /**
     * @var integer 分区总数（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionCount;

    /**
     * @var integer 分区字段数量（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionFieldCount;

    /**
     * @var integer 生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionExpireDays;

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
     * @param string $TableId 表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineType 引擎/存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表类型，视图，外部表等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerId 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerName 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageLocation 存储位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 表描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPartitionTable 是否分区表，0-全量表 1-分区表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionColumns 分区字段list
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageFormat 存储格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageSizeWithUnit 存储量，单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSizeMb 累计存储【MB】
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplicaCount 副本数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileCount 文件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionCount 分区总数（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionFieldCount 分区字段数量（包含hive，iceberg）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionExpireDays 生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("TableOwnerId",$param) and $param["TableOwnerId"] !== null) {
            $this->TableOwnerId = $param["TableOwnerId"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("StorageLocation",$param) and $param["StorageLocation"] !== null) {
            $this->StorageLocation = $param["StorageLocation"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsPartitionTable",$param) and $param["IsPartitionTable"] !== null) {
            $this->IsPartitionTable = $param["IsPartitionTable"];
        }

        if (array_key_exists("PartitionColumns",$param) and $param["PartitionColumns"] !== null) {
            $this->PartitionColumns = $param["PartitionColumns"];
        }

        if (array_key_exists("StorageFormat",$param) and $param["StorageFormat"] !== null) {
            $this->StorageFormat = $param["StorageFormat"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("TotalSizeMb",$param) and $param["TotalSizeMb"] !== null) {
            $this->TotalSizeMb = $param["TotalSizeMb"];
        }

        if (array_key_exists("ReplicaCount",$param) and $param["ReplicaCount"] !== null) {
            $this->ReplicaCount = $param["ReplicaCount"];
        }

        if (array_key_exists("FileCount",$param) and $param["FileCount"] !== null) {
            $this->FileCount = $param["FileCount"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("PartitionFieldCount",$param) and $param["PartitionFieldCount"] !== null) {
            $this->PartitionFieldCount = $param["PartitionFieldCount"];
        }

        if (array_key_exists("PartitionExpireDays",$param) and $param["PartitionExpireDays"] !== null) {
            $this->PartitionExpireDays = $param["PartitionExpireDays"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
