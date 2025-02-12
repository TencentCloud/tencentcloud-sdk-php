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
 * 数据源元数据
 *
 * @method string getProjectId() 获取项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreType() 获取技术类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreType(string $MetastoreType) 设置技术类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceId() 获取数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取数据源类别：绑定引擎、绑定数据库,可用值:DB,ENGINE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置数据源类别：绑定引擎、绑定数据库,可用值:DB,ENGINE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstance() 获取数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(string $Instance) 设置数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取db名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置db名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取项目中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置项目中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerAccountName() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取数据来源展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置数据来源展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalog() 获取数据来源类型：hive/mysql/hbase等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(string $Catalog) 设置数据来源类型：hive/mysql/hbase等
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取存储量大小,单位为 byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置存储量大小,单位为 byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageSizeWithUnit() 获取格式化后的存储量大小，带单位，如 12B
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) 设置格式化后的存储量大小，带单位，如 12B
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableCount() 获取总表数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableCount(integer $TableCount) 设置总表数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatasourceList() 获取数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceList(array $DatasourceList) 设置数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectJobId() 获取采集任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectJobId(string $CollectJobId) 设置采集任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectJobName() 获取采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectJobName(string $CollectJobName) 设置采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取引擎id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置引擎id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModifiedTimeByTables() 获取库下表的最新更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTimeByTables(integer $ModifiedTimeByTables) 设置库下表的最新更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastAccessTimeByTables() 获取库下表的最新访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAccessTimeByTables(integer $LastAccessTimeByTables) 设置库下表的最新访问时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatabaseMeta extends AbstractModel
{
    /**
     * @var string 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 技术类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreType;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var integer 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 数据源类别：绑定引擎、绑定数据库,可用值:DB,ENGINE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var string 数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string db名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 项目中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccountName;

    /**
     * @var string 数据来源展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据来源类型：hive/mysql/hbase等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @var integer 存储量大小,单位为 byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var string 格式化后的存储量大小，带单位，如 12B
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSizeWithUnit;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 总表数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableCount;

    /**
     * @var array 数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceList;

    /**
     * @var string 采集任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectJobId;

    /**
     * @var string 采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectJobName;

    /**
     * @var string 引擎id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var integer 库下表的最新更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTimeByTables;

    /**
     * @var integer 库下表的最新访问时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAccessTimeByTables;

    /**
     * @param string $ProjectId 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreType 技术类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceId 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 数据源类别：绑定引擎、绑定数据库,可用值:DB,ENGINE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 数据源描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Instance 数据源引擎的实例ID，如CDB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 数据源引擎所属区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 数据源数据源的可见性，1为可见、0为不可见。默认为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName db名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 项目中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerAccountName 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 数据来源展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Catalog 数据来源类型：hive/mysql/hbase等
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 存储量大小,单位为 byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageSizeWithUnit 格式化后的存储量大小，带单位，如 12B
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableCount 总表数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatasourceList 数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectJobId 采集任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectJobName 采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 引擎id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModifiedTimeByTables 库下表的最新更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastAccessTimeByTables 库下表的最新访问时间
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("DatasourceList",$param) and $param["DatasourceList"] !== null) {
            $this->DatasourceList = [];
            foreach ($param["DatasourceList"] as $key => $value){
                $obj = new GovDatasourceInfo();
                $obj->deserialize($value);
                array_push($this->DatasourceList, $obj);
            }
        }

        if (array_key_exists("CollectJobId",$param) and $param["CollectJobId"] !== null) {
            $this->CollectJobId = $param["CollectJobId"];
        }

        if (array_key_exists("CollectJobName",$param) and $param["CollectJobName"] !== null) {
            $this->CollectJobName = $param["CollectJobName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ModifiedTimeByTables",$param) and $param["ModifiedTimeByTables"] !== null) {
            $this->ModifiedTimeByTables = $param["ModifiedTimeByTables"];
        }

        if (array_key_exists("LastAccessTimeByTables",$param) and $param["LastAccessTimeByTables"] !== null) {
            $this->LastAccessTimeByTables = $param["LastAccessTimeByTables"];
        }
    }
}
