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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群快照数据结构
 *
 * @method string getSnapshotName() 获取<p>快照名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取<p>快照Uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置<p>快照Uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepository() 获取<p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepository(string $Repository) 设置<p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>该快照所属集群的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>该快照所属集群的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndices() 获取<p>备份的索引列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndices(array $Indices) 设置<p>备份的索引列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataStreams() 获取<p>备份的datastream列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataStreams(array $DataStreams) 设置<p>备份的datastream列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取<p>备份的状态</p><p>FAILED            备份失败</p><p>IN_PROGRESS 备份执行中</p><p>PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示</p><p>SUCCESS     备份成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置<p>备份的状态</p><p>FAILED            备份失败</p><p>IN_PROGRESS 备份执行中</p><p>PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示</p><p>SUCCESS     备份成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>快照备份的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>快照备份的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>快照备份的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>快照备份的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationInMillis() 获取<p>快照备份的耗时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationInMillis(integer $DurationInMillis) 设置<p>快照备份的耗时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalShards() 获取<p>备份的总分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalShards(integer $TotalShards) 设置<p>备份的总分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedShards() 获取<p>备份失败的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedShards(integer $FailedShards) 设置<p>备份失败的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessfulShards() 获取<p>备份成功的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessfulShards(integer $SuccessfulShards) 设置<p>备份成功的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailures() 获取<p>备份失败的索引分片和失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailures(array $Failures) 设置<p>备份失败的索引分片和失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserBackUp() 获取<p>是否用户备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserBackUp(string $UserBackUp) 设置<p>是否用户备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEsRepositoryType() 获取<p>0 腾讯云仓库; 1 客户仓库</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsRepositoryType(integer $EsRepositoryType) 设置<p>0 腾讯云仓库; 1 客户仓库</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaasEsRepository() 获取<p>托管快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaasEsRepository(string $PaasEsRepository) 设置<p>托管快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserEsRepository() 获取<p>客户快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserEsRepository(string $UserEsRepository) 设置<p>客户快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageDuration() 获取<p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageDuration(integer $StorageDuration) 设置<p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoBackupInterval() 获取<p>自动备份频率, 如果是0,则等效24</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupInterval(integer $AutoBackupInterval) 设置<p>自动备份频率, 如果是0,则等效24</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCosRetention() 获取<p>备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosRetention(integer $CosRetention) 设置<p>备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRetainUntilDate() 获取<p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetainUntilDate(string $RetainUntilDate) 设置<p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionGraceTime() 获取<p>锁定宽限期,单位天</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) 设置<p>锁定宽限期,单位天</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsLocked() 获取<p>是否已经备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocked(integer $IsLocked) 设置<p>是否已经备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemoteCos() 获取<p>跨地域备份 0 不跨地域; 1 跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteCos(integer $RemoteCos) 设置<p>跨地域备份 0 不跨地域; 1 跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteCosRegion() 获取<p>跨地域备份地域名称 ap-guangzhou</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteCosRegion(string $RemoteCosRegion) 设置<p>跨地域备份地域名称 ap-guangzhou</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCosEncryption() 获取<p>备份加密 0 不加密; 1 加密</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosEncryption(integer $CosEncryption) 设置<p>备份加密 0 不加密; 1 加密</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKey() 获取<p>kms密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKey(string $KmsKey) 设置<p>kms密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyName() 获取<p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置<p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMultiAz() 获取<p>cos多AZ备份 0 单AZ; 1 多AZ</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiAz(integer $MultiAz) 设置<p>cos多AZ备份 0 单AZ; 1 多AZ</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxSnapshotPerSec() 获取<p>每节点写入仓库的最大速度 max_snapshot_bytes_per_sec, 默认40m</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSnapshotPerSec(string $MaxSnapshotPerSec) 设置<p>每节点写入仓库的最大速度 max_snapshot_bytes_per_sec, 默认40m</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Snapshots extends AbstractModel
{
    /**
     * @var string <p>快照名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var string <p>快照Uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string <p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repository;

    /**
     * @var string <p>该快照所属集群的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array <p>备份的索引列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indices;

    /**
     * @var array <p>备份的datastream列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataStreams;

    /**
     * @var string <p>备份的状态</p><p>FAILED            备份失败</p><p>IN_PROGRESS 备份执行中</p><p>PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示</p><p>SUCCESS     备份成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string <p>快照备份的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>快照备份的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer <p>快照备份的耗时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationInMillis;

    /**
     * @var integer <p>备份的总分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalShards;

    /**
     * @var integer <p>备份失败的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedShards;

    /**
     * @var integer <p>备份成功的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessfulShards;

    /**
     * @var array <p>备份失败的索引分片和失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Failures;

    /**
     * @var string <p>是否用户备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserBackUp;

    /**
     * @var integer <p>0 腾讯云仓库; 1 客户仓库</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsRepositoryType;

    /**
     * @var string <p>托管快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaasEsRepository;

    /**
     * @var string <p>客户快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserEsRepository;

    /**
     * @var integer <p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageDuration;

    /**
     * @var integer <p>自动备份频率, 如果是0,则等效24</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupInterval;

    /**
     * @var integer <p>备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosRetention;

    /**
     * @var string <p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetainUntilDate;

    /**
     * @var integer <p>锁定宽限期,单位天</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionGraceTime;

    /**
     * @var integer <p>是否已经备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocked;

    /**
     * @var integer <p>跨地域备份 0 不跨地域; 1 跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteCos;

    /**
     * @var string <p>跨地域备份地域名称 ap-guangzhou</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteCosRegion;

    /**
     * @var integer <p>备份加密 0 不加密; 1 加密</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosEncryption;

    /**
     * @var string <p>kms密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKey;

    /**
     * @var string <p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var integer <p>cos多AZ备份 0 单AZ; 1 多AZ</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiAz;

    /**
     * @var string <p>每节点写入仓库的最大速度 max_snapshot_bytes_per_sec, 默认40m</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSnapshotPerSec;

    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @param string $SnapshotName <p>快照名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid <p>快照Uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repository <p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>该快照所属集群的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Indices <p>备份的索引列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataStreams <p>备份的datastream列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State <p>备份的状态</p><p>FAILED            备份失败</p><p>IN_PROGRESS 备份执行中</p><p>PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示</p><p>SUCCESS     备份成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>快照备份的开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>快照备份的结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationInMillis <p>快照备份的耗时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalShards <p>备份的总分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedShards <p>备份失败的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessfulShards <p>备份成功的分片数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Failures <p>备份失败的索引分片和失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserBackUp <p>是否用户备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EsRepositoryType <p>0 腾讯云仓库; 1 客户仓库</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaasEsRepository <p>托管快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserEsRepository <p>客户快照仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageDuration <p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoBackupInterval <p>自动备份频率, 如果是0,则等效24</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CosRetention <p>备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RetainUntilDate <p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionGraceTime <p>锁定宽限期,单位天</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsLocked <p>是否已经备份锁定 0 不锁定; 1 锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemoteCos <p>跨地域备份 0 不跨地域; 1 跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteCosRegion <p>跨地域备份地域名称 ap-guangzhou</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CosEncryption <p>备份加密 0 不加密; 1 加密</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKey <p>kms密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyName <p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MultiAz <p>cos多AZ备份 0 单AZ; 1 多AZ</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxSnapshotPerSec <p>每节点写入仓库的最大速度 max_snapshot_bytes_per_sec, 默认40m</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
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
        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = $param["Repository"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("DataStreams",$param) and $param["DataStreams"] !== null) {
            $this->DataStreams = $param["DataStreams"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DurationInMillis",$param) and $param["DurationInMillis"] !== null) {
            $this->DurationInMillis = $param["DurationInMillis"];
        }

        if (array_key_exists("TotalShards",$param) and $param["TotalShards"] !== null) {
            $this->TotalShards = $param["TotalShards"];
        }

        if (array_key_exists("FailedShards",$param) and $param["FailedShards"] !== null) {
            $this->FailedShards = $param["FailedShards"];
        }

        if (array_key_exists("SuccessfulShards",$param) and $param["SuccessfulShards"] !== null) {
            $this->SuccessfulShards = $param["SuccessfulShards"];
        }

        if (array_key_exists("Failures",$param) and $param["Failures"] !== null) {
            $this->Failures = [];
            foreach ($param["Failures"] as $key => $value){
                $obj = new Failures();
                $obj->deserialize($value);
                array_push($this->Failures, $obj);
            }
        }

        if (array_key_exists("UserBackUp",$param) and $param["UserBackUp"] !== null) {
            $this->UserBackUp = $param["UserBackUp"];
        }

        if (array_key_exists("EsRepositoryType",$param) and $param["EsRepositoryType"] !== null) {
            $this->EsRepositoryType = $param["EsRepositoryType"];
        }

        if (array_key_exists("PaasEsRepository",$param) and $param["PaasEsRepository"] !== null) {
            $this->PaasEsRepository = $param["PaasEsRepository"];
        }

        if (array_key_exists("UserEsRepository",$param) and $param["UserEsRepository"] !== null) {
            $this->UserEsRepository = $param["UserEsRepository"];
        }

        if (array_key_exists("StorageDuration",$param) and $param["StorageDuration"] !== null) {
            $this->StorageDuration = $param["StorageDuration"];
        }

        if (array_key_exists("AutoBackupInterval",$param) and $param["AutoBackupInterval"] !== null) {
            $this->AutoBackupInterval = $param["AutoBackupInterval"];
        }

        if (array_key_exists("CosRetention",$param) and $param["CosRetention"] !== null) {
            $this->CosRetention = $param["CosRetention"];
        }

        if (array_key_exists("RetainUntilDate",$param) and $param["RetainUntilDate"] !== null) {
            $this->RetainUntilDate = $param["RetainUntilDate"];
        }

        if (array_key_exists("RetentionGraceTime",$param) and $param["RetentionGraceTime"] !== null) {
            $this->RetentionGraceTime = $param["RetentionGraceTime"];
        }

        if (array_key_exists("IsLocked",$param) and $param["IsLocked"] !== null) {
            $this->IsLocked = $param["IsLocked"];
        }

        if (array_key_exists("RemoteCos",$param) and $param["RemoteCos"] !== null) {
            $this->RemoteCos = $param["RemoteCos"];
        }

        if (array_key_exists("RemoteCosRegion",$param) and $param["RemoteCosRegion"] !== null) {
            $this->RemoteCosRegion = $param["RemoteCosRegion"];
        }

        if (array_key_exists("CosEncryption",$param) and $param["CosEncryption"] !== null) {
            $this->CosEncryption = $param["CosEncryption"];
        }

        if (array_key_exists("KmsKey",$param) and $param["KmsKey"] !== null) {
            $this->KmsKey = $param["KmsKey"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("MultiAz",$param) and $param["MultiAz"] !== null) {
            $this->MultiAz = $param["MultiAz"];
        }

        if (array_key_exists("MaxSnapshotPerSec",$param) and $param["MaxSnapshotPerSec"] !== null) {
            $this->MaxSnapshotPerSec = $param["MaxSnapshotPerSec"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
