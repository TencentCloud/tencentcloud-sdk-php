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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群维度视图数据
 *
 * @method float getHealth() 获取集群健康状态
 * @method void setHealth(float $Health) 设置集群健康状态
 * @method float getVisible() 获取集群是否可见
 * @method void setVisible(float $Visible) 设置集群是否可见
 * @method float getBreak() 获取集群是否熔断
 * @method void setBreak(float $Break) 设置集群是否熔断
 * @method float getAvgDiskUsage() 获取平均磁盘使用率
 * @method void setAvgDiskUsage(float $AvgDiskUsage) 设置平均磁盘使用率
 * @method float getAvgMemUsage() 获取平均内存使用率
 * @method void setAvgMemUsage(float $AvgMemUsage) 设置平均内存使用率
 * @method float getAvgCpuUsage() 获取平均cpu使用率
 * @method void setAvgCpuUsage(float $AvgCpuUsage) 设置平均cpu使用率
 * @method integer getTotalDiskSize() 获取集群总存储大小
 * @method void setTotalDiskSize(integer $TotalDiskSize) 设置集群总存储大小
 * @method array getTargetNodeTypes() 获取客户端请求节点
 * @method void setTargetNodeTypes(array $TargetNodeTypes) 设置客户端请求节点
 * @method integer getNodeNum() 获取在线节点数
 * @method void setNodeNum(integer $NodeNum) 设置在线节点数
 * @method integer getTotalNodeNum() 获取总节点数
 * @method void setTotalNodeNum(integer $TotalNodeNum) 设置总节点数
 * @method integer getDataNodeNum() 获取数据节点数
 * @method void setDataNodeNum(integer $DataNodeNum) 设置数据节点数
 * @method integer getIndexNum() 获取索引数
 * @method void setIndexNum(integer $IndexNum) 设置索引数
 * @method integer getDocNum() 获取文档数
 * @method void setDocNum(integer $DocNum) 设置文档数
 * @method integer getDiskUsedInBytes() 获取磁盘已使用字节数
 * @method void setDiskUsedInBytes(integer $DiskUsedInBytes) 设置磁盘已使用字节数
 * @method integer getShardNum() 获取分片个数
 * @method void setShardNum(integer $ShardNum) 设置分片个数
 * @method integer getPrimaryShardNum() 获取主分片个数
 * @method void setPrimaryShardNum(integer $PrimaryShardNum) 设置主分片个数
 * @method integer getRelocatingShardNum() 获取迁移中的分片个数
 * @method void setRelocatingShardNum(integer $RelocatingShardNum) 设置迁移中的分片个数
 * @method integer getInitializingShardNum() 获取初始化中的分片个数
 * @method void setInitializingShardNum(integer $InitializingShardNum) 设置初始化中的分片个数
 * @method integer getUnassignedShardNum() 获取未分配的分片个数
 * @method void setUnassignedShardNum(integer $UnassignedShardNum) 设置未分配的分片个数
 * @method integer getTotalCosStorage() 获取企业版COS存储容量大小，单位GB
 * @method void setTotalCosStorage(integer $TotalCosStorage) 设置企业版COS存储容量大小，单位GB
 * @method string getSearchableSnapshotCosBucket() 获取企业版集群可搜索快照cos存放的bucket名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchableSnapshotCosBucket(string $SearchableSnapshotCosBucket) 设置企业版集群可搜索快照cos存放的bucket名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSearchableSnapshotCosAppId() 获取企业版集群可搜索快照cos所属appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchableSnapshotCosAppId(string $SearchableSnapshotCosAppId) 设置企业版集群可搜索快照cos所属appid
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterView extends AbstractModel
{
    /**
     * @var float 集群健康状态
     */
    public $Health;

    /**
     * @var float 集群是否可见
     */
    public $Visible;

    /**
     * @var float 集群是否熔断
     */
    public $Break;

    /**
     * @var float 平均磁盘使用率
     */
    public $AvgDiskUsage;

    /**
     * @var float 平均内存使用率
     */
    public $AvgMemUsage;

    /**
     * @var float 平均cpu使用率
     */
    public $AvgCpuUsage;

    /**
     * @var integer 集群总存储大小
     */
    public $TotalDiskSize;

    /**
     * @var array 客户端请求节点
     */
    public $TargetNodeTypes;

    /**
     * @var integer 在线节点数
     */
    public $NodeNum;

    /**
     * @var integer 总节点数
     */
    public $TotalNodeNum;

    /**
     * @var integer 数据节点数
     */
    public $DataNodeNum;

    /**
     * @var integer 索引数
     */
    public $IndexNum;

    /**
     * @var integer 文档数
     */
    public $DocNum;

    /**
     * @var integer 磁盘已使用字节数
     */
    public $DiskUsedInBytes;

    /**
     * @var integer 分片个数
     */
    public $ShardNum;

    /**
     * @var integer 主分片个数
     */
    public $PrimaryShardNum;

    /**
     * @var integer 迁移中的分片个数
     */
    public $RelocatingShardNum;

    /**
     * @var integer 初始化中的分片个数
     */
    public $InitializingShardNum;

    /**
     * @var integer 未分配的分片个数
     */
    public $UnassignedShardNum;

    /**
     * @var integer 企业版COS存储容量大小，单位GB
     */
    public $TotalCosStorage;

    /**
     * @var string 企业版集群可搜索快照cos存放的bucket名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchableSnapshotCosBucket;

    /**
     * @var string 企业版集群可搜索快照cos所属appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchableSnapshotCosAppId;

    /**
     * @param float $Health 集群健康状态
     * @param float $Visible 集群是否可见
     * @param float $Break 集群是否熔断
     * @param float $AvgDiskUsage 平均磁盘使用率
     * @param float $AvgMemUsage 平均内存使用率
     * @param float $AvgCpuUsage 平均cpu使用率
     * @param integer $TotalDiskSize 集群总存储大小
     * @param array $TargetNodeTypes 客户端请求节点
     * @param integer $NodeNum 在线节点数
     * @param integer $TotalNodeNum 总节点数
     * @param integer $DataNodeNum 数据节点数
     * @param integer $IndexNum 索引数
     * @param integer $DocNum 文档数
     * @param integer $DiskUsedInBytes 磁盘已使用字节数
     * @param integer $ShardNum 分片个数
     * @param integer $PrimaryShardNum 主分片个数
     * @param integer $RelocatingShardNum 迁移中的分片个数
     * @param integer $InitializingShardNum 初始化中的分片个数
     * @param integer $UnassignedShardNum 未分配的分片个数
     * @param integer $TotalCosStorage 企业版COS存储容量大小，单位GB
     * @param string $SearchableSnapshotCosBucket 企业版集群可搜索快照cos存放的bucket名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SearchableSnapshotCosAppId 企业版集群可搜索快照cos所属appid
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
        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }

        if (array_key_exists("Break",$param) and $param["Break"] !== null) {
            $this->Break = $param["Break"];
        }

        if (array_key_exists("AvgDiskUsage",$param) and $param["AvgDiskUsage"] !== null) {
            $this->AvgDiskUsage = $param["AvgDiskUsage"];
        }

        if (array_key_exists("AvgMemUsage",$param) and $param["AvgMemUsage"] !== null) {
            $this->AvgMemUsage = $param["AvgMemUsage"];
        }

        if (array_key_exists("AvgCpuUsage",$param) and $param["AvgCpuUsage"] !== null) {
            $this->AvgCpuUsage = $param["AvgCpuUsage"];
        }

        if (array_key_exists("TotalDiskSize",$param) and $param["TotalDiskSize"] !== null) {
            $this->TotalDiskSize = $param["TotalDiskSize"];
        }

        if (array_key_exists("TargetNodeTypes",$param) and $param["TargetNodeTypes"] !== null) {
            $this->TargetNodeTypes = $param["TargetNodeTypes"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("TotalNodeNum",$param) and $param["TotalNodeNum"] !== null) {
            $this->TotalNodeNum = $param["TotalNodeNum"];
        }

        if (array_key_exists("DataNodeNum",$param) and $param["DataNodeNum"] !== null) {
            $this->DataNodeNum = $param["DataNodeNum"];
        }

        if (array_key_exists("IndexNum",$param) and $param["IndexNum"] !== null) {
            $this->IndexNum = $param["IndexNum"];
        }

        if (array_key_exists("DocNum",$param) and $param["DocNum"] !== null) {
            $this->DocNum = $param["DocNum"];
        }

        if (array_key_exists("DiskUsedInBytes",$param) and $param["DiskUsedInBytes"] !== null) {
            $this->DiskUsedInBytes = $param["DiskUsedInBytes"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("PrimaryShardNum",$param) and $param["PrimaryShardNum"] !== null) {
            $this->PrimaryShardNum = $param["PrimaryShardNum"];
        }

        if (array_key_exists("RelocatingShardNum",$param) and $param["RelocatingShardNum"] !== null) {
            $this->RelocatingShardNum = $param["RelocatingShardNum"];
        }

        if (array_key_exists("InitializingShardNum",$param) and $param["InitializingShardNum"] !== null) {
            $this->InitializingShardNum = $param["InitializingShardNum"];
        }

        if (array_key_exists("UnassignedShardNum",$param) and $param["UnassignedShardNum"] !== null) {
            $this->UnassignedShardNum = $param["UnassignedShardNum"];
        }

        if (array_key_exists("TotalCosStorage",$param) and $param["TotalCosStorage"] !== null) {
            $this->TotalCosStorage = $param["TotalCosStorage"];
        }

        if (array_key_exists("SearchableSnapshotCosBucket",$param) and $param["SearchableSnapshotCosBucket"] !== null) {
            $this->SearchableSnapshotCosBucket = $param["SearchableSnapshotCosBucket"];
        }

        if (array_key_exists("SearchableSnapshotCosAppId",$param) and $param["SearchableSnapshotCosAppId"] !== null) {
            $this->SearchableSnapshotCosAppId = $param["SearchableSnapshotCosAppId"];
        }
    }
}
