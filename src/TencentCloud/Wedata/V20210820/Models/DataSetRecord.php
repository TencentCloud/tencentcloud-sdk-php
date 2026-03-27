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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产结构
 *
 * @method string getAssetId() 获取资产 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置资产 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableNameCn() 获取数据资产名称展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNameCn(string $TableNameCn) 设置数据资产名称展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableNameEn() 获取数据资产名称展示名称EN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNameEn(string $TableNameEn) 设置数据资产名称展示名称EN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取资产描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置资产描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getHeatValue() 获取资产热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeatValue(float $HeatValue) 设置资产热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelNames() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelNames(array $LabelNames) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaCrawlType() 获取元数据采集类型：Table View Index
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaCrawlType(string $MetaCrawlType) 设置元数据采集类型：Table View Index
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取数据资产归属的项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置数据资产归属的项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeTime() 获取生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeTime(integer $LifeTime) 设置生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPartitionTable() 获取判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartitionTable(integer $IsPartitionTable) 设置判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableRecordFieldSet() 获取表字段集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableRecordFieldSet(array $TableRecordFieldSet) 设置表字段集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method TablePropertyScore getTablePropertyScore() 获取表属性评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePropertyScore(TablePropertyScore $TablePropertyScore) 设置表属性评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsType(string $MsType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取数据存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置数据存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetLevel() 获取数据资产等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLevel(integer $AssetLevel) 设置数据资产等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetStatus() 获取数据资产状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetStatus(integer $AssetStatus) 设置数据资产状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizCatalogIds() 获取数据目录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCatalogIds(array $BizCatalogIds) 设置数据目录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizCatalogNames() 获取数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCatalogNames(array $BizCatalogNames) 设置数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceId() 获取数据源 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataAssetOption getOperateOption() 获取数据资产操作选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateOption(DataAssetOption $OperateOption) 设置数据资产操作选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchema() 获取数据库模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchema(string $Schema) 设置数据库模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironment() 获取环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironment(string $Environment) 设置环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsView() 获取是否为视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsView(boolean $IsView) 设置是否为视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTechnologyType() 获取数据来源技术类型
取值： HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTechnologyType(string $TechnologyType) 设置数据来源技术类型
取值： HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageSizeWithUnit() 获取存储大小，已转为如9.31TB:
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) 设置存储大小，已转为如9.31TB:
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCollectDatasourceList() 获取多数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectDatasourceList(array $CollectDatasourceList) 设置多数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceCategory() 获取数据源Category: 系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceCategory(string $DataSourceCategory) 设置数据源Category: 系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCollectId() 获取采集任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectId(integer $CollectId) 设置采集任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrn() 获取采集唯一性urn
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrn(string $Urn) 设置采集唯一性urn
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取数据资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置数据资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetRunningStatus() 获取资产运行状态： 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetRunningStatus(string $AssetRunningStatus) 设置资产运行状态： 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteTime() 获取资产运行时间， 任务最近执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteTime(string $ExecuteTime) 设置资产运行时间， 任务最近执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetLog() 获取资产日志，任务资产取 自动转交日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLog(string $AssetLog) 设置资产日志，任务资产取 自动转交日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取任务 Job名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置任务 Job名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取资产失效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置资产失效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelRank() 获取安全等级值范围1-10

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelRank(integer $LevelRank) 设置安全等级值范围1-10

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevelName() 获取安全等级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelName(string $LevelName) 设置安全等级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetCode() 获取资产编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCode(string $AssetCode) 设置资产编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerAccount() 获取责任人 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccount(integer $OwnerAccount) 设置责任人 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastAccessTime() 获取最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAccessTime(string $LastAccessTime) 设置最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerByEngine() 获取引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerByEngine(string $OwnerByEngine) 设置引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataLayerUuid() 获取数仓分层 UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLayerUuid(string $DataLayerUuid) 设置数仓分层 UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataLayerName() 获取数仓分层名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLayerName(string $DataLayerName) 设置数仓分层名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColumnCount() 获取字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnCount(integer $ColumnCount) 设置字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSearchHitColumns() 获取关键字搜索命中的表字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchHitColumns(array $SearchHitColumns) 设置关键字搜索命中的表字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelTagList() 获取标签对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelTagList(array $LabelTagList) 设置标签对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAliases() 获取模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliases(array $Aliases) 设置模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDeployed() 获取是否已经部署服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeployed(boolean $IsDeployed) 设置是否已经部署服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取模型标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置模型标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取模型类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置模型类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullName() 获取资产全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullName(string $FullName) 设置资产全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaFrom() 获取Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaFrom(string $MetaFrom) 设置Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineOwner() 获取引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineOwner(string $EngineOwner) 设置引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSetRecord extends AbstractModel
{
    /**
     * @var string 资产 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

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
     * @var string 数据资产名称展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNameCn;

    /**
     * @var string 数据资产名称展示名称EN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNameEn;

    /**
     * @var string 资产描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var float 资产热度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeatValue;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelNames;

    /**
     * @var string 负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 元数据采集类型：Table View Index
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaCrawlType;

    /**
     * @var string 数据资产归属的项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeTime;

    /**
     * @var integer 判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartitionTable;

    /**
     * @var array 表字段集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableRecordFieldSet;

    /**
     * @var TablePropertyScore 表属性评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePropertyScore;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsType;

    /**
     * @var integer 数据存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var integer 数据资产等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLevel;

    /**
     * @var integer 数据资产状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetStatus;

    /**
     * @var array 数据目录ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCatalogIds;

    /**
     * @var array 数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCatalogNames;

    /**
     * @var integer 数据源 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 表 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var DataAssetOption 数据资产操作选项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateOption;

    /**
     * @var string 数据库模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Schema;

    /**
     * @var string 环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environment;

    /**
     * @var boolean 是否为视图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsView;

    /**
     * @var string 数据来源技术类型
取值： HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TechnologyType;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var string 集群 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 存储大小，已转为如9.31TB:
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSizeWithUnit;

    /**
     * @var array 多数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectDatasourceList;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 数据源Category: 系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceCategory;

    /**
     * @var integer 采集任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectId;

    /**
     * @var string 采集唯一性urn
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Urn;

    /**
     * @var string 数据资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 资产运行状态： 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetRunningStatus;

    /**
     * @var integer 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 资产运行时间， 任务最近执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteTime;

    /**
     * @var string 资产日志，任务资产取 自动转交日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLog;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 任务 Job名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var string 资产失效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 安全等级值范围1-10

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelRank;

    /**
     * @var string 安全等级名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelName;

    /**
     * @var string 资产编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCode;

    /**
     * @var integer 责任人 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccount;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAccessTime;

    /**
     * @var string 引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerByEngine;

    /**
     * @var string 数仓分层 UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLayerUuid;

    /**
     * @var string 数仓分层名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLayerName;

    /**
     * @var integer 字段数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnCount;

    /**
     * @var array 关键字搜索命中的表字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchHitColumns;

    /**
     * @var array 标签对象集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelTagList;

    /**
     * @var array 模型别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Aliases;

    /**
     * @var boolean 是否已经部署服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeployed;

    /**
     * @var array 模型标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 模型类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var string 资产全称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullName;

    /**
     * @var string Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaFrom;

    /**
     * @var string 引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineOwner;

    /**
     * @param string $AssetId 资产 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableNameCn 数据资产名称展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableNameEn 数据资产名称展示名称EN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 资产描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $HeatValue 资产热度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelNames 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaCrawlType 元数据采集类型：Table View Index
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 数据资产归属的项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeTime 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPartitionTable 判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableRecordFieldSet 表字段集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param TablePropertyScore $TablePropertyScore 表属性评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 数据存储大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetLevel 数据资产等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetStatus 数据资产状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizCatalogIds 数据目录ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizCatalogNames 数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceId 数据源 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataAssetOption $OperateOption 数据资产操作选项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Schema 数据库模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Environment 环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsView 是否为视图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TechnologyType 数据来源技术类型
取值： HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageSizeWithUnit 存储大小，已转为如9.31TB:
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CollectDatasourceList 多数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceCategory 数据源Category: 系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CollectId 采集任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Urn 采集唯一性urn
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 数据资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetRunningStatus 资产运行状态： 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteTime 资产运行时间， 任务最近执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetLog 资产日志，任务资产取 自动转交日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName 任务 Job名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 资产失效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelRank 安全等级值范围1-10

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LevelName 安全等级名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetCode 资产编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerAccount 责任人 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastAccessTime 最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerByEngine 引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataLayerUuid 数仓分层 UUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataLayerName 数仓分层名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColumnCount 字段数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SearchHitColumns 关键字搜索命中的表字段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelTagList 标签对象集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Aliases 模型别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDeployed 是否已经部署服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 模型标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType 模型类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullName 资产全称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace Catalog名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaFrom Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineOwner 引擎侧责任人
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableNameCn",$param) and $param["TableNameCn"] !== null) {
            $this->TableNameCn = $param["TableNameCn"];
        }

        if (array_key_exists("TableNameEn",$param) and $param["TableNameEn"] !== null) {
            $this->TableNameEn = $param["TableNameEn"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HeatValue",$param) and $param["HeatValue"] !== null) {
            $this->HeatValue = $param["HeatValue"];
        }

        if (array_key_exists("LabelNames",$param) and $param["LabelNames"] !== null) {
            $this->LabelNames = $param["LabelNames"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("MetaCrawlType",$param) and $param["MetaCrawlType"] !== null) {
            $this->MetaCrawlType = $param["MetaCrawlType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("LifeTime",$param) and $param["LifeTime"] !== null) {
            $this->LifeTime = $param["LifeTime"];
        }

        if (array_key_exists("IsPartitionTable",$param) and $param["IsPartitionTable"] !== null) {
            $this->IsPartitionTable = $param["IsPartitionTable"];
        }

        if (array_key_exists("TableRecordFieldSet",$param) and $param["TableRecordFieldSet"] !== null) {
            $this->TableRecordFieldSet = [];
            foreach ($param["TableRecordFieldSet"] as $key => $value){
                $obj = new SearchColumnDocVO();
                $obj->deserialize($value);
                array_push($this->TableRecordFieldSet, $obj);
            }
        }

        if (array_key_exists("TablePropertyScore",$param) and $param["TablePropertyScore"] !== null) {
            $this->TablePropertyScore = new TablePropertyScore();
            $this->TablePropertyScore->deserialize($param["TablePropertyScore"]);
        }

        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("AssetLevel",$param) and $param["AssetLevel"] !== null) {
            $this->AssetLevel = $param["AssetLevel"];
        }

        if (array_key_exists("AssetStatus",$param) and $param["AssetStatus"] !== null) {
            $this->AssetStatus = $param["AssetStatus"];
        }

        if (array_key_exists("BizCatalogIds",$param) and $param["BizCatalogIds"] !== null) {
            $this->BizCatalogIds = $param["BizCatalogIds"];
        }

        if (array_key_exists("BizCatalogNames",$param) and $param["BizCatalogNames"] !== null) {
            $this->BizCatalogNames = $param["BizCatalogNames"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("OperateOption",$param) and $param["OperateOption"] !== null) {
            $this->OperateOption = new DataAssetOption();
            $this->OperateOption->deserialize($param["OperateOption"]);
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("IsView",$param) and $param["IsView"] !== null) {
            $this->IsView = $param["IsView"];
        }

        if (array_key_exists("TechnologyType",$param) and $param["TechnologyType"] !== null) {
            $this->TechnologyType = $param["TechnologyType"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("CollectDatasourceList",$param) and $param["CollectDatasourceList"] !== null) {
            $this->CollectDatasourceList = [];
            foreach ($param["CollectDatasourceList"] as $key => $value){
                $obj = new GovDatasourceInfo();
                $obj->deserialize($value);
                array_push($this->CollectDatasourceList, $obj);
            }
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("DataSourceCategory",$param) and $param["DataSourceCategory"] !== null) {
            $this->DataSourceCategory = $param["DataSourceCategory"];
        }

        if (array_key_exists("CollectId",$param) and $param["CollectId"] !== null) {
            $this->CollectId = $param["CollectId"];
        }

        if (array_key_exists("Urn",$param) and $param["Urn"] !== null) {
            $this->Urn = $param["Urn"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetRunningStatus",$param) and $param["AssetRunningStatus"] !== null) {
            $this->AssetRunningStatus = $param["AssetRunningStatus"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("ExecuteTime",$param) and $param["ExecuteTime"] !== null) {
            $this->ExecuteTime = $param["ExecuteTime"];
        }

        if (array_key_exists("AssetLog",$param) and $param["AssetLog"] !== null) {
            $this->AssetLog = $param["AssetLog"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("LevelRank",$param) and $param["LevelRank"] !== null) {
            $this->LevelRank = $param["LevelRank"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("AssetCode",$param) and $param["AssetCode"] !== null) {
            $this->AssetCode = $param["AssetCode"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("OwnerByEngine",$param) and $param["OwnerByEngine"] !== null) {
            $this->OwnerByEngine = $param["OwnerByEngine"];
        }

        if (array_key_exists("DataLayerUuid",$param) and $param["DataLayerUuid"] !== null) {
            $this->DataLayerUuid = $param["DataLayerUuid"];
        }

        if (array_key_exists("DataLayerName",$param) and $param["DataLayerName"] !== null) {
            $this->DataLayerName = $param["DataLayerName"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }

        if (array_key_exists("SearchHitColumns",$param) and $param["SearchHitColumns"] !== null) {
            $this->SearchHitColumns = [];
            foreach ($param["SearchHitColumns"] as $key => $value){
                $obj = new SearchColumnDocVO();
                $obj->deserialize($value);
                array_push($this->SearchHitColumns, $obj);
            }
        }

        if (array_key_exists("LabelTagList",$param) and $param["LabelTagList"] !== null) {
            $this->LabelTagList = [];
            foreach ($param["LabelTagList"] as $key => $value){
                $obj = new LabelTag();
                $obj->deserialize($value);
                array_push($this->LabelTagList, $obj);
            }
        }

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = [];
            foreach ($param["Aliases"] as $key => $value){
                $obj = new RegisteredModelAlias();
                $obj->deserialize($value);
                array_push($this->Aliases, $obj);
            }
        }

        if (array_key_exists("IsDeployed",$param) and $param["IsDeployed"] !== null) {
            $this->IsDeployed = $param["IsDeployed"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RegisteredModelTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetaFrom",$param) and $param["MetaFrom"] !== null) {
            $this->MetaFrom = $param["MetaFrom"];
        }

        if (array_key_exists("EngineOwner",$param) and $param["EngineOwner"] !== null) {
            $this->EngineOwner = $param["EngineOwner"];
        }
    }
}
