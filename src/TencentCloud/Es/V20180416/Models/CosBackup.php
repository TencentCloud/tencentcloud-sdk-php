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
 * ES cos自动备份信息
 *
 * @method boolean getIsAutoBackup() 获取是否开启cos自动备份
 * @method void setIsAutoBackup(boolean $IsAutoBackup) 设置是否开启cos自动备份
 * @method string getBackupTime() 获取自动备份执行时间（精确到小时）, e.g. "22:00"
 * @method void setBackupTime(string $BackupTime) 设置自动备份执行时间（精确到小时）, e.g. "22:00"
 * @method string getSnapshotName() 获取备份快照前缀
 * @method void setSnapshotName(string $SnapshotName) 设置备份快照前缀
 * @method integer getEsRepositoryType() 获取0 腾讯云仓库; 1 客户仓库
 * @method void setEsRepositoryType(integer $EsRepositoryType) 设置0 腾讯云仓库; 1 客户仓库
 * @method string getPaasEsRepository() 获取托管快照仓库名称
 * @method void setPaasEsRepository(string $PaasEsRepository) 设置托管快照仓库名称
 * @method string getUserEsRepository() 获取客户快照仓库名称
 * @method void setUserEsRepository(string $UserEsRepository) 设置客户快照仓库名称
 * @method string getCosBasePath() 获取cos存储文件夹目录
 * @method void setCosBasePath(string $CosBasePath) 设置cos存储文件夹目录
 * @method integer getStorageDuration() 获取快照存储周期 单位天
 * @method void setStorageDuration(integer $StorageDuration) 设置快照存储周期 单位天
 * @method integer getAutoBackupInterval() 获取自动备份频率单位小时
 * @method void setAutoBackupInterval(integer $AutoBackupInterval) 设置自动备份频率单位小时
 * @method integer getCosRetention() 获取备份锁定 0 不锁定; 1 锁定
 * @method void setCosRetention(integer $CosRetention) 设置备份锁定 0 不锁定; 1 锁定
 * @method string getRetainUntilDate() 获取锁定截止日期 2022-12-10T08:34:48.000Z
 * @method void setRetainUntilDate(string $RetainUntilDate) 设置锁定截止日期 2022-12-10T08:34:48.000Z
 * @method integer getRetentionGraceTime() 获取锁定宽限期
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) 设置锁定宽限期
 * @method integer getRemoteCos() 获取跨地域备份 0 不跨地域; 1 跨地域
 * @method void setRemoteCos(integer $RemoteCos) 设置跨地域备份 0 不跨地域; 1 跨地域
 * @method string getRemoteCosRegion() 获取跨地域备份地域名称 ap-guangzhou
 * @method void setRemoteCosRegion(string $RemoteCosRegion) 设置跨地域备份地域名称 ap-guangzhou
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 * @method string getIndices() 获取备份索引列表，如果不填表示备份所有索引
 * @method void setIndices(string $Indices) 设置备份索引列表，如果不填表示备份所有索引
 * @method integer getMultiAz() 获取cos多AZ备份 0 单AZ; 1 多AZ
 * @method void setMultiAz(integer $MultiAz) 设置cos多AZ备份 0 单AZ; 1 多AZ
 * @method string getCreateTime() 获取策略创建时间
 * @method void setCreateTime(string $CreateTime) 设置策略创建时间
 */
class CosBackup extends AbstractModel
{
    /**
     * @var boolean 是否开启cos自动备份
     */
    public $IsAutoBackup;

    /**
     * @var string 自动备份执行时间（精确到小时）, e.g. "22:00"
     */
    public $BackupTime;

    /**
     * @var string 备份快照前缀
     */
    public $SnapshotName;

    /**
     * @var integer 0 腾讯云仓库; 1 客户仓库
     */
    public $EsRepositoryType;

    /**
     * @var string 托管快照仓库名称
     */
    public $PaasEsRepository;

    /**
     * @var string 客户快照仓库名称
     */
    public $UserEsRepository;

    /**
     * @var string cos存储文件夹目录
     */
    public $CosBasePath;

    /**
     * @var integer 快照存储周期 单位天
     */
    public $StorageDuration;

    /**
     * @var integer 自动备份频率单位小时
     */
    public $AutoBackupInterval;

    /**
     * @var integer 备份锁定 0 不锁定; 1 锁定
     */
    public $CosRetention;

    /**
     * @var string 锁定截止日期 2022-12-10T08:34:48.000Z
     */
    public $RetainUntilDate;

    /**
     * @var integer 锁定宽限期
     */
    public $RetentionGraceTime;

    /**
     * @var integer 跨地域备份 0 不跨地域; 1 跨地域
     */
    public $RemoteCos;

    /**
     * @var string 跨地域备份地域名称 ap-guangzhou
     */
    public $RemoteCosRegion;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @var string 备份索引列表，如果不填表示备份所有索引
     */
    public $Indices;

    /**
     * @var integer cos多AZ备份 0 单AZ; 1 多AZ
     */
    public $MultiAz;

    /**
     * @var string 策略创建时间
     */
    public $CreateTime;

    /**
     * @param boolean $IsAutoBackup 是否开启cos自动备份
     * @param string $BackupTime 自动备份执行时间（精确到小时）, e.g. "22:00"
     * @param string $SnapshotName 备份快照前缀
     * @param integer $EsRepositoryType 0 腾讯云仓库; 1 客户仓库
     * @param string $PaasEsRepository 托管快照仓库名称
     * @param string $UserEsRepository 客户快照仓库名称
     * @param string $CosBasePath cos存储文件夹目录
     * @param integer $StorageDuration 快照存储周期 单位天
     * @param integer $AutoBackupInterval 自动备份频率单位小时
     * @param integer $CosRetention 备份锁定 0 不锁定; 1 锁定
     * @param string $RetainUntilDate 锁定截止日期 2022-12-10T08:34:48.000Z
     * @param integer $RetentionGraceTime 锁定宽限期
     * @param integer $RemoteCos 跨地域备份 0 不跨地域; 1 跨地域
     * @param string $RemoteCosRegion 跨地域备份地域名称 ap-guangzhou
     * @param string $StrategyName 策略名称
     * @param string $Indices 备份索引列表，如果不填表示备份所有索引
     * @param integer $MultiAz cos多AZ备份 0 单AZ; 1 多AZ
     * @param string $CreateTime 策略创建时间
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
        if (array_key_exists("IsAutoBackup",$param) and $param["IsAutoBackup"] !== null) {
            $this->IsAutoBackup = $param["IsAutoBackup"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
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

        if (array_key_exists("CosBasePath",$param) and $param["CosBasePath"] !== null) {
            $this->CosBasePath = $param["CosBasePath"];
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

        if (array_key_exists("RemoteCos",$param) and $param["RemoteCos"] !== null) {
            $this->RemoteCos = $param["RemoteCos"];
        }

        if (array_key_exists("RemoteCosRegion",$param) and $param["RemoteCosRegion"] !== null) {
            $this->RemoteCosRegion = $param["RemoteCosRegion"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("MultiAz",$param) and $param["MultiAz"] !== null) {
            $this->MultiAz = $param["MultiAz"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
