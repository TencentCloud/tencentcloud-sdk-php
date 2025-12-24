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
 * 表的元数据信息
 *
 * @method string getTableId() 获取表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerName() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerName(string $TableOwnerName) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceId() 获取数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTablePath() 获取表路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePath(string $TablePath) 设置表路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableNameCn() 获取表中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNameCn(string $TableNameCn) 设置表中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetastoreId() 获取元数据租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreId(integer $MetastoreId) 设置元数据租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreType() 获取技术类型，可用值:HIVE,MYSQL,KAFKA, HBASE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreType(string $MetastoreType) 设置技术类型，可用值:HIVE,MYSQL,KAFKA, HBASE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置表描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumnSeparator() 获取列分隔符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnSeparator(string $ColumnSeparator) 设置列分隔符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageFormat() 获取存储格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageFormat(string $StorageFormat) 设置存储格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表类型，如hive MANAGED_TABLE;EXTERNAL_TABLE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表类型，如hive MANAGED_TABLE;EXTERNAL_TABLE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取最近数据变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置最近数据变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDdlModifyTime() 获取最近DDL变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdlModifyTime(string $DdlModifyTime) 设置最近DDL变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastAccessTime() 获取数据最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAccessTime(string $LastAccessTime) 设置数据最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizCatalogIds() 获取所属数据目录id（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCatalogIds(array $BizCatalogIds) 设置所属数据目录id（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizCatalogNames() 获取所属数据目录（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCatalogNames(array $BizCatalogNames) 设置所属数据目录（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasFavorite() 获取true已收藏/false表示未收藏状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasFavorite(boolean $HasFavorite) 设置true已收藏/false表示未收藏状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeCycleTime() 获取生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeCycleTime(integer $LifeCycleTime) 设置生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageSizeWithUnit() 获取存储量，已转为适合的单位展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) 设置存储量，已转为适合的单位展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取数据源引擎的实例ID：如EMR集群实例ID/数据源实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置数据源引擎的实例ID：如EMR集群实例ID/数据源实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTechnologyType() 获取数据来源技术类型：HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTechnologyType(string $TechnologyType) 设置数据来源技术类型：HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableNameEn() 获取表英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNameEn(string $TableNameEn) 设置表英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPartitions() 获取Kafka Topic 分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(string $Partitions) 设置Kafka Topic 分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplicationFactor() 获取Kafka Topic 副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicationFactor(string $ReplicationFactor) 设置Kafka Topic 副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataModifyTime() 获取数据最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataModifyTime(string $DataModifyTime) 设置数据最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasAdminAuthority() 获取当前用户是否有管理员权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasAdminAuthority(boolean $HasAdminAuthority) 设置当前用户是否有管理员权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceDisplayName() 获取数据源展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceDisplayName(string $DatasourceDisplayName) 设置数据源展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFavoriteCount() 获取租户下对表的收藏总次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFavoriteCount(integer $FavoriteCount) 设置租户下对表的收藏总次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLikeCount() 获取租户下对表的点赞总次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLikeCount(integer $LikeCount) 设置租户下对表的点赞总次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasLike() 获取true已点赞/false表示未点赞状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasLike(boolean $HasLike) 设置true已点赞/false表示未点赞状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method TablePropertyScore getTablePropertyScore() 获取表的资产评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePropertyScore(TablePropertyScore $TablePropertyScore) 设置表的资产评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method TableHeat getTableHeat() 获取表的热度值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableHeat(TableHeat $TableHeat) 设置表的热度值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerProjectId() 获取数据源ownerProjectId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerProjectId(string $OwnerProjectId) 设置数据源ownerProjectId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerId() 获取表负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerId(string $TableOwnerId) 设置表负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceCategory() 获取系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceCategory(string $DataSourceCategory) 设置系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取表字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置表字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaCrawlType() 获取表采集类型
TABLE, VIEW, MANAGED_TABLE(Hive管理表), EXTERNAL_TABLE(Hive外部表), VIRTUAL_VIEW(虚拟视图), MATERIALIZED_VIEW(物化视图), LATERAL_VIEW, INDEX_TABLE(索引表), END_SELECT(查询结构), INSTANCE(中间临时表类型(数据血缘)), CDW(CDW表类型)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaCrawlType(string $MetaCrawlType) 设置表采集类型
TABLE, VIEW, MANAGED_TABLE(Hive管理表), EXTERNAL_TABLE(Hive外部表), VIRTUAL_VIEW(虚拟视图), MATERIALIZED_VIEW(物化视图), LATERAL_VIEW, INDEX_TABLE(索引表), END_SELECT(查询结构), INSTANCE(中间临时表类型(数据血缘)), CDW(CDW表类型)
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsView() 获取是否视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsView(boolean $IsView) 设置是否视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPartitionTable() 获取判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartitionTable(integer $IsPartitionTable) 设置判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionColumns() 获取分区字段 key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionColumns(array $PartitionColumns) 设置分区字段 key
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionExpireDays() 获取生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionExpireDays(integer $PartitionExpireDays) 设置生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableProperties() 获取表附属信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableProperties(array $TableProperties) 设置表附属信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironment() 获取环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironment(string $Environment) 设置环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchema() 获取数据库模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchema(string $Schema) 设置数据库模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCollectDatasourceList() 获取关联数据眼信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectDatasourceList(array $CollectDatasourceList) 设置关联数据眼信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectJobId() 获取采集任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectJobId(string $CollectJobId) 设置采集任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectJobName() 获取采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectJobName(string $CollectJobName) 设置采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrn() 获取数据源urn
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrn(string $Urn) 设置数据源urn
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasBizPermission() 获取是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasBizPermission(boolean $HasBizPermission) 设置是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerByEngine() 获取引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerByEngine(string $OwnerByEngine) 设置引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorTips() 获取用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorTips(string $ErrorTips) 设置用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateAndDDLSupport getIfSupportCreateAndDDL() 获取是否支持select or ddl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIfSupportCreateAndDDL(CreateAndDDLSupport $IfSupportCreateAndDDL) 设置是否支持select or ddl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataFromType() 获取资产来源 历史默认值都是CRAWLER
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFromType(string $DataFromType) 设置资产来源 历史默认值都是CRAWLER
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineOwner() 获取引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineOwner(string $EngineOwner) 设置引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataLayerUuid() 获取数据分层UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLayerUuid(string $DataLayerUuid) 设置数据分层UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataLayerName() 获取数据分层名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLayerName(string $DataLayerName) 设置数据分层名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColumnCount() 获取字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnCount(integer $ColumnCount) 设置字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTablePermissionFlag() 获取权限标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePermissionFlag(boolean $TablePermissionFlag) 设置权限标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetStatus() 获取资产状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetStatus(integer $AssetStatus) 设置资产状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetLevel() 获取资产等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLevel(integer $AssetLevel) 设置资产等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetCode() 获取资产code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCode(string $AssetCode) 设置资产code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetAuditStatus() 获取审批状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetAuditStatus(string $AssetAuditStatus) 设置审批状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishedTime() 获取发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishedTime(string $PublishedTime) 设置发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagInfoList() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfoList(array $TagInfoList) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelValueSelections() 获取标签值选择列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValueSelections(array $LabelValueSelections) 设置标签值选择列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间 - 对应TC-Catalog
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间 - 对应TC-Catalog
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaFrom() 获取Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaFrom(string $MetaFrom) 设置Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineCreator() 获取引擎侧创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineCreator(string $EngineCreator) 设置引擎侧创建者
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableMeta extends AbstractModel
{
    /**
     * @var string 表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerName;

    /**
     * @var integer 数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePath;

    /**
     * @var string 表中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNameCn;

    /**
     * @var integer 元数据租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreId;

    /**
     * @var string 技术类型，可用值:HIVE,MYSQL,KAFKA, HBASE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreType;

    /**
     * @var string 表描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 列分隔符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnSeparator;

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
     * @var string 表类型，如hive MANAGED_TABLE;EXTERNAL_TABLE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近数据变更时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 最近DDL变更时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdlModifyTime;

    /**
     * @var string 数据最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAccessTime;

    /**
     * @var string 所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var array 所属数据目录id（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCatalogIds;

    /**
     * @var array 所属数据目录（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCatalogNames;

    /**
     * @var boolean true已收藏/false表示未收藏状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasFavorite;

    /**
     * @var integer 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeCycleTime;

    /**
     * @var string 存储量，已转为适合的单位展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSizeWithUnit;

    /**
     * @var string 数据源引擎的实例ID：如EMR集群实例ID/数据源实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据来源技术类型：HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TechnologyType;

    /**
     * @var string 表英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNameEn;

    /**
     * @var string 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string Kafka Topic 分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var string Kafka Topic 副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicationFactor;

    /**
     * @var string 所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var string 数据最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataModifyTime;

    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var boolean 当前用户是否有管理员权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasAdminAuthority;

    /**
     * @var string 数据源展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceDisplayName;

    /**
     * @var string 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var integer 租户下对表的收藏总次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FavoriteCount;

    /**
     * @var integer 租户下对表的点赞总次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LikeCount;

    /**
     * @var boolean true已点赞/false表示未点赞状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasLike;

    /**
     * @var TablePropertyScore 表的资产评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePropertyScore;

    /**
     * @var TableHeat 表的热度值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableHeat;

    /**
     * @var string 数据源ownerProjectId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerProjectId;

    /**
     * @var string 表负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerId;

    /**
     * @var string 系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceCategory;

    /**
     * @var array 表字段信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var string 表采集类型
TABLE, VIEW, MANAGED_TABLE(Hive管理表), EXTERNAL_TABLE(Hive外部表), VIRTUAL_VIEW(虚拟视图), MATERIALIZED_VIEW(物化视图), LATERAL_VIEW, INDEX_TABLE(索引表), END_SELECT(查询结构), INSTANCE(中间临时表类型(数据血缘)), CDW(CDW表类型)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaCrawlType;

    /**
     * @var boolean 是否视图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsView;

    /**
     * @var string 存储位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var integer 判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartitionTable;

    /**
     * @var array 分区字段 key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionColumns;

    /**
     * @var integer 生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionExpireDays;

    /**
     * @var array 表附属信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableProperties;

    /**
     * @var string 环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environment;

    /**
     * @var string 数据库模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Schema;

    /**
     * @var array 关联数据眼信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectDatasourceList;

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
     * @var string 数据源urn
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Urn;

    /**
     * @var boolean 是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasBizPermission;

    /**
     * @var string 引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerByEngine;

    /**
     * @var string 用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorTips;

    /**
     * @var CreateAndDDLSupport 是否支持select or ddl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IfSupportCreateAndDDL;

    /**
     * @var string 资产来源 历史默认值都是CRAWLER
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFromType;

    /**
     * @var string 引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineOwner;

    /**
     * @var string 数据分层UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLayerUuid;

    /**
     * @var string 数据分层名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLayerName;

    /**
     * @var integer 字段数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnCount;

    /**
     * @var boolean 权限标记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePermissionFlag;

    /**
     * @var integer 资产状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetStatus;

    /**
     * @var integer 资产等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLevel;

    /**
     * @var string 资产code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCode;

    /**
     * @var string 审批状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetAuditStatus;

    /**
     * @var string 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishedTime;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfoList;

    /**
     * @var array 标签值选择列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValueSelections;

    /**
     * @var string 命名空间 - 对应TC-Catalog
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaFrom;

    /**
     * @var string 引擎侧创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineCreator;

    /**
     * @param string $TableId 表的全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerName 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceId 数据源全局唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TablePath 表路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableNameCn 表中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetastoreId 元数据租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreType 技术类型，可用值:HIVE,MYSQL,KAFKA, HBASE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 表描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColumnSeparator 列分隔符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageFormat 存储格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 存储量，字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表类型，如hive MANAGED_TABLE;EXTERNAL_TABLE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 最近数据变更时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DdlModifyTime 最近DDL变更时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastAccessTime 数据最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 所属项目英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizCatalogIds 所属数据目录id（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizCatalogNames 所属数据目录（可能多个）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasFavorite true已收藏/false表示未收藏状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeCycleTime 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageSizeWithUnit 存储量，已转为适合的单位展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 数据源引擎的实例ID：如EMR集群实例ID/数据源实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TechnologyType 数据来源技术类型：HIVE/MYSQL/HBASE/KAFKA等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableNameEn 表英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Partitions Kafka Topic 分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplicationFactor Kafka Topic 副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 所属项目英中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataModifyTime 数据最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasAdminAuthority 当前用户是否有管理员权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceDisplayName 数据源展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FavoriteCount 租户下对表的收藏总次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LikeCount 租户下对表的点赞总次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasLike true已点赞/false表示未点赞状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param TablePropertyScore $TablePropertyScore 表的资产评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param TableHeat $TableHeat 表的热度值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerProjectId 数据源ownerProjectId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerId 表负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceCategory 系统源-CLUSTER, DB-自定义源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 表字段信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaCrawlType 表采集类型
TABLE, VIEW, MANAGED_TABLE(Hive管理表), EXTERNAL_TABLE(Hive外部表), VIRTUAL_VIEW(虚拟视图), MATERIALIZED_VIEW(物化视图), LATERAL_VIEW, INDEX_TABLE(索引表), END_SELECT(查询结构), INSTANCE(中间临时表类型(数据血缘)), CDW(CDW表类型)
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsView 是否视图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 存储位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPartitionTable 判断是否是分区表1 是 0否
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionColumns 分区字段 key
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionExpireDays 生命周期-分区保留天数【分区保留策略时有效】
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableProperties 表附属信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Environment 环境，取值 prod或者 dev
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Schema 数据库模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CollectDatasourceList 关联数据眼信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectJobId 采集任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectJobName 采集任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Urn 数据源urn
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasBizPermission 是否有修改业务权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerByEngine 引擎侧创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorTips 用户无映射账户，请先完成账户映射后再来申请。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateAndDDLSupport $IfSupportCreateAndDDL 是否支持select or ddl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataFromType 资产来源 历史默认值都是CRAWLER
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineOwner 引擎侧责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataLayerUuid 数据分层UUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataLayerName 数据分层名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColumnCount 字段数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TablePermissionFlag 权限标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetStatus 资产状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetLevel 资产等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetCode 资产code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetAuditStatus 审批状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishedTime 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagInfoList 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelValueSelections 标签值选择列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间 - 对应TC-Catalog
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaFrom Catalog来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineCreator 引擎侧创建者
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TablePath",$param) and $param["TablePath"] !== null) {
            $this->TablePath = $param["TablePath"];
        }

        if (array_key_exists("TableNameCn",$param) and $param["TableNameCn"] !== null) {
            $this->TableNameCn = $param["TableNameCn"];
        }

        if (array_key_exists("MetastoreId",$param) and $param["MetastoreId"] !== null) {
            $this->MetastoreId = $param["MetastoreId"];
        }

        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ColumnSeparator",$param) and $param["ColumnSeparator"] !== null) {
            $this->ColumnSeparator = $param["ColumnSeparator"];
        }

        if (array_key_exists("StorageFormat",$param) and $param["StorageFormat"] !== null) {
            $this->StorageFormat = $param["StorageFormat"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("DdlModifyTime",$param) and $param["DdlModifyTime"] !== null) {
            $this->DdlModifyTime = $param["DdlModifyTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("BizCatalogIds",$param) and $param["BizCatalogIds"] !== null) {
            $this->BizCatalogIds = $param["BizCatalogIds"];
        }

        if (array_key_exists("BizCatalogNames",$param) and $param["BizCatalogNames"] !== null) {
            $this->BizCatalogNames = $param["BizCatalogNames"];
        }

        if (array_key_exists("HasFavorite",$param) and $param["HasFavorite"] !== null) {
            $this->HasFavorite = $param["HasFavorite"];
        }

        if (array_key_exists("LifeCycleTime",$param) and $param["LifeCycleTime"] !== null) {
            $this->LifeCycleTime = $param["LifeCycleTime"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TechnologyType",$param) and $param["TechnologyType"] !== null) {
            $this->TechnologyType = $param["TechnologyType"];
        }

        if (array_key_exists("TableNameEn",$param) and $param["TableNameEn"] !== null) {
            $this->TableNameEn = $param["TableNameEn"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("ReplicationFactor",$param) and $param["ReplicationFactor"] !== null) {
            $this->ReplicationFactor = $param["ReplicationFactor"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("DataModifyTime",$param) and $param["DataModifyTime"] !== null) {
            $this->DataModifyTime = $param["DataModifyTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("HasAdminAuthority",$param) and $param["HasAdminAuthority"] !== null) {
            $this->HasAdminAuthority = $param["HasAdminAuthority"];
        }

        if (array_key_exists("DatasourceDisplayName",$param) and $param["DatasourceDisplayName"] !== null) {
            $this->DatasourceDisplayName = $param["DatasourceDisplayName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("FavoriteCount",$param) and $param["FavoriteCount"] !== null) {
            $this->FavoriteCount = $param["FavoriteCount"];
        }

        if (array_key_exists("LikeCount",$param) and $param["LikeCount"] !== null) {
            $this->LikeCount = $param["LikeCount"];
        }

        if (array_key_exists("HasLike",$param) and $param["HasLike"] !== null) {
            $this->HasLike = $param["HasLike"];
        }

        if (array_key_exists("TablePropertyScore",$param) and $param["TablePropertyScore"] !== null) {
            $this->TablePropertyScore = new TablePropertyScore();
            $this->TablePropertyScore->deserialize($param["TablePropertyScore"]);
        }

        if (array_key_exists("TableHeat",$param) and $param["TableHeat"] !== null) {
            $this->TableHeat = new TableHeat();
            $this->TableHeat->deserialize($param["TableHeat"]);
        }

        if (array_key_exists("OwnerProjectId",$param) and $param["OwnerProjectId"] !== null) {
            $this->OwnerProjectId = $param["OwnerProjectId"];
        }

        if (array_key_exists("TableOwnerId",$param) and $param["TableOwnerId"] !== null) {
            $this->TableOwnerId = $param["TableOwnerId"];
        }

        if (array_key_exists("DataSourceCategory",$param) and $param["DataSourceCategory"] !== null) {
            $this->DataSourceCategory = $param["DataSourceCategory"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new SearchColumnDocVO();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("MetaCrawlType",$param) and $param["MetaCrawlType"] !== null) {
            $this->MetaCrawlType = $param["MetaCrawlType"];
        }

        if (array_key_exists("IsView",$param) and $param["IsView"] !== null) {
            $this->IsView = $param["IsView"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("IsPartitionTable",$param) and $param["IsPartitionTable"] !== null) {
            $this->IsPartitionTable = $param["IsPartitionTable"];
        }

        if (array_key_exists("PartitionColumns",$param) and $param["PartitionColumns"] !== null) {
            $this->PartitionColumns = $param["PartitionColumns"];
        }

        if (array_key_exists("PartitionExpireDays",$param) and $param["PartitionExpireDays"] !== null) {
            $this->PartitionExpireDays = $param["PartitionExpireDays"];
        }

        if (array_key_exists("TableProperties",$param) and $param["TableProperties"] !== null) {
            $this->TableProperties = [];
            foreach ($param["TableProperties"] as $key => $value){
                $obj = new TableMetaProperty();
                $obj->deserialize($value);
                array_push($this->TableProperties, $obj);
            }
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("CollectDatasourceList",$param) and $param["CollectDatasourceList"] !== null) {
            $this->CollectDatasourceList = [];
            foreach ($param["CollectDatasourceList"] as $key => $value){
                $obj = new GovDatasourceInfo();
                $obj->deserialize($value);
                array_push($this->CollectDatasourceList, $obj);
            }
        }

        if (array_key_exists("CollectJobId",$param) and $param["CollectJobId"] !== null) {
            $this->CollectJobId = $param["CollectJobId"];
        }

        if (array_key_exists("CollectJobName",$param) and $param["CollectJobName"] !== null) {
            $this->CollectJobName = $param["CollectJobName"];
        }

        if (array_key_exists("Urn",$param) and $param["Urn"] !== null) {
            $this->Urn = $param["Urn"];
        }

        if (array_key_exists("HasBizPermission",$param) and $param["HasBizPermission"] !== null) {
            $this->HasBizPermission = $param["HasBizPermission"];
        }

        if (array_key_exists("OwnerByEngine",$param) and $param["OwnerByEngine"] !== null) {
            $this->OwnerByEngine = $param["OwnerByEngine"];
        }

        if (array_key_exists("ErrorTips",$param) and $param["ErrorTips"] !== null) {
            $this->ErrorTips = $param["ErrorTips"];
        }

        if (array_key_exists("IfSupportCreateAndDDL",$param) and $param["IfSupportCreateAndDDL"] !== null) {
            $this->IfSupportCreateAndDDL = new CreateAndDDLSupport();
            $this->IfSupportCreateAndDDL->deserialize($param["IfSupportCreateAndDDL"]);
        }

        if (array_key_exists("DataFromType",$param) and $param["DataFromType"] !== null) {
            $this->DataFromType = $param["DataFromType"];
        }

        if (array_key_exists("EngineOwner",$param) and $param["EngineOwner"] !== null) {
            $this->EngineOwner = $param["EngineOwner"];
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

        if (array_key_exists("TablePermissionFlag",$param) and $param["TablePermissionFlag"] !== null) {
            $this->TablePermissionFlag = $param["TablePermissionFlag"];
        }

        if (array_key_exists("AssetStatus",$param) and $param["AssetStatus"] !== null) {
            $this->AssetStatus = $param["AssetStatus"];
        }

        if (array_key_exists("AssetLevel",$param) and $param["AssetLevel"] !== null) {
            $this->AssetLevel = $param["AssetLevel"];
        }

        if (array_key_exists("AssetCode",$param) and $param["AssetCode"] !== null) {
            $this->AssetCode = $param["AssetCode"];
        }

        if (array_key_exists("AssetAuditStatus",$param) and $param["AssetAuditStatus"] !== null) {
            $this->AssetAuditStatus = $param["AssetAuditStatus"];
        }

        if (array_key_exists("PublishedTime",$param) and $param["PublishedTime"] !== null) {
            $this->PublishedTime = $param["PublishedTime"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new LabelTag();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("LabelValueSelections",$param) and $param["LabelValueSelections"] !== null) {
            $this->LabelValueSelections = [];
            foreach ($param["LabelValueSelections"] as $key => $value){
                $obj = new LabelValueSelection();
                $obj->deserialize($value);
                array_push($this->LabelValueSelections, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetaFrom",$param) and $param["MetaFrom"] !== null) {
            $this->MetaFrom = $param["MetaFrom"];
        }

        if (array_key_exists("EngineCreator",$param) and $param["EngineCreator"] !== null) {
            $this->EngineCreator = $param["EngineCreator"];
        }
    }
}
