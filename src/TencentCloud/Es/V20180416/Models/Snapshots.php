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
 * @method string getSnapshotName() 获取快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepository() 获取仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepository(string $Repository) 设置仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndices() 获取备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndices(array $Indices) 设置备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataStreams() 获取备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataStreams(array $DataStreams) 设置备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationInMillis() 获取快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationInMillis(integer $DurationInMillis) 设置快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalShards() 获取备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalShards(integer $TotalShards) 设置备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedShards() 获取备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedShards(integer $FailedShards) 设置备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessfulShards() 获取备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessfulShards(integer $SuccessfulShards) 设置备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailures() 获取备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailures(array $Failures) 设置备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserBackUp() 获取是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserBackUp(string $UserBackUp) 设置是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEsRepositoryType() 获取0 腾讯云仓库; 1 客户仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsRepositoryType(integer $EsRepositoryType) 设置0 腾讯云仓库; 1 客户仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaasEsRepository() 获取托管快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaasEsRepository(string $PaasEsRepository) 设置托管快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserEsRepository() 获取客户快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserEsRepository(string $UserEsRepository) 设置客户快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageDuration() 获取快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageDuration(integer $StorageDuration) 设置快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoBackupInterval() 获取自动备份频率, 如果是0,则等效24
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupInterval(integer $AutoBackupInterval) 设置自动备份频率, 如果是0,则等效24
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCosRetention() 获取备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosRetention(integer $CosRetention) 设置备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRetainUntilDate() 获取锁定截止日期 2022-12-10T08:34:48.000Z
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetainUntilDate(string $RetainUntilDate) 设置锁定截止日期 2022-12-10T08:34:48.000Z
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionGraceTime() 获取锁定宽限期,单位天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) 设置锁定宽限期,单位天
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsLocked() 获取是否已经备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocked(integer $IsLocked) 设置是否已经备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemoteCos() 获取跨地域备份 0 不跨地域; 1 跨地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteCos(integer $RemoteCos) 设置跨地域备份 0 不跨地域; 1 跨地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteCosRegion() 获取跨地域备份地域名称 ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteCosRegion(string $RemoteCosRegion) 设置跨地域备份地域名称 ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCosEncryption() 获取备份加密 0 不加密; 1 加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosEncryption(integer $CosEncryption) 设置备份加密 0 不加密; 1 加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKey() 获取kms密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKey(string $KmsKey) 设置kms密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMultiAz() 获取cos多AZ备份 0 单AZ; 1 多AZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiAz(integer $MultiAz) 设置cos多AZ备份 0 单AZ; 1 多AZ
注意：此字段可能返回 null，表示取不到有效值。
 */
class Snapshots extends AbstractModel
{
    /**
     * @var string 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var string 快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repository;

    /**
     * @var string 该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array 备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indices;

    /**
     * @var array 备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataStreams;

    /**
     * @var string 备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationInMillis;

    /**
     * @var integer 备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalShards;

    /**
     * @var integer 备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedShards;

    /**
     * @var integer 备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessfulShards;

    /**
     * @var array 备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Failures;

    /**
     * @var string 是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserBackUp;

    /**
     * @var integer 0 腾讯云仓库; 1 客户仓库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsRepositoryType;

    /**
     * @var string 托管快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaasEsRepository;

    /**
     * @var string 客户快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserEsRepository;

    /**
     * @var integer 快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageDuration;

    /**
     * @var integer 自动备份频率, 如果是0,则等效24
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupInterval;

    /**
     * @var integer 备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosRetention;

    /**
     * @var string 锁定截止日期 2022-12-10T08:34:48.000Z
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetainUntilDate;

    /**
     * @var integer 锁定宽限期,单位天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionGraceTime;

    /**
     * @var integer 是否已经备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocked;

    /**
     * @var integer 跨地域备份 0 不跨地域; 1 跨地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteCos;

    /**
     * @var string 跨地域备份地域名称 ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteCosRegion;

    /**
     * @var integer 备份加密 0 不加密; 1 加密
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosEncryption;

    /**
     * @var string kms密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKey;

    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var integer cos多AZ备份 0 单AZ; 1 多AZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiAz;

    /**
     * @param string $SnapshotName 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid 快照Uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repository 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 该快照所属集群的版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Indices 备份的索引列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataStreams 备份的datastream列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 备份的状态

FAILED            备份失败

IN_PROGRESS 备份执行中

PARTIAL          备份部分成功，部分失败，备份失败的索引和原因会在Failures字段中展示

SUCCESS     备份成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 快照备份的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 快照备份的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationInMillis 快照备份的耗时时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalShards 备份的总分片数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedShards 备份失败的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessfulShards 备份成功的分片数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Failures 备份失败的索引分片和失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserBackUp 是否用户备份
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EsRepositoryType 0 腾讯云仓库; 1 客户仓库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaasEsRepository 托管快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserEsRepository 客户快照仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageDuration 快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoBackupInterval 自动备份频率, 如果是0,则等效24
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CosRetention 备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RetainUntilDate 锁定截止日期 2022-12-10T08:34:48.000Z
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionGraceTime 锁定宽限期,单位天
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsLocked 是否已经备份锁定 0 不锁定; 1 锁定
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemoteCos 跨地域备份 0 不跨地域; 1 跨地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteCosRegion 跨地域备份地域名称 ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CosEncryption 备份加密 0 不加密; 1 加密
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKey kms密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MultiAz cos多AZ备份 0 单AZ; 1 多AZ
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
    }
}
