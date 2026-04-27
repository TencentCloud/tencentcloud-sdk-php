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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份文件信息
 *
 * @method integer getSnapshotId() 获取<p>快照文件ID，已废弃，请使用BackupId</p>
 * @method void setSnapshotId(integer $SnapshotId) 设置<p>快照文件ID，已废弃，请使用BackupId</p>
 * @method string getFileName() 获取<p>备份文件名</p>
 * @method void setFileName(string $FileName) 设置<p>备份文件名</p>
 * @method integer getFileSize() 获取<p>备份文件大小</p>
 * @method void setFileSize(integer $FileSize) 设置<p>备份文件大小</p>
 * @method string getStartTime() 获取<p>备份开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>备份开始时间</p>
 * @method string getFinishTime() 获取<p>备份完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>备份完成时间</p>
 * @method string getBackupType() 获取<p>备份类型：snapshot，快照备份；logic，逻辑备份</p>
 * @method void setBackupType(string $BackupType) 设置<p>备份类型：snapshot，快照备份；logic，逻辑备份</p>
 * @method string getBackupMethod() 获取<p>备份方式：auto，自动备份；manual，手动备份</p>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式：auto，自动备份；manual，手动备份</p>
 * @method string getBackupStatus() 获取<p>备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中</p>
 * @method void setBackupStatus(string $BackupStatus) 设置<p>备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中</p>
 * @method string getSnapshotTime() 获取<p>备份文件时间</p>
 * @method void setSnapshotTime(string $SnapshotTime) 设置<p>备份文件时间</p>
 * @method integer getBackupId() 获取<p>备份ID</p>
 * @method void setBackupId(integer $BackupId) 设置<p>备份ID</p>
 * @method string getSnapShotType() 获取<p>快照类型，可选值：full，全量；increment，增量</p>
 * @method void setSnapShotType(string $SnapShotType) 设置<p>快照类型，可选值：full，全量；increment，增量</p>
 * @method string getBackupName() 获取<p>备份文件备注</p>
 * @method void setBackupName(string $BackupName) 设置<p>备份文件备注</p>
 * @method string getCopyStatus() 获取<p>投递状态</p>
 * @method void setCopyStatus(string $CopyStatus) 设置<p>投递状态</p>
 * @method string getEncryptKeyId() 获取<p>秘钥id</p>
 * @method void setEncryptKeyId(string $EncryptKeyId) 设置<p>秘钥id</p>
 * @method string getEncryptRegion() 获取<p>秘钥地域</p>
 * @method void setEncryptRegion(string $EncryptRegion) 设置<p>秘钥地域</p>
 * @method array getVaultInfos() 获取<p>保险箱信息</p>
 * @method void setVaultInfos(array $VaultInfos) 设置<p>保险箱信息</p>
 * @method string getBackupPeriodStrategy() 获取<p>备份周期策略</p>
 * @method void setBackupPeriodStrategy(string $BackupPeriodStrategy) 设置<p>备份周期策略</p>
 */
class BackupFileInfo extends AbstractModel
{
    /**
     * @var integer <p>快照文件ID，已废弃，请使用BackupId</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>备份文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>备份文件大小</p>
     */
    public $FileSize;

    /**
     * @var string <p>备份开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>备份完成时间</p>
     */
    public $FinishTime;

    /**
     * @var string <p>备份类型：snapshot，快照备份；logic，逻辑备份</p>
     */
    public $BackupType;

    /**
     * @var string <p>备份方式：auto，自动备份；manual，手动备份</p>
     */
    public $BackupMethod;

    /**
     * @var string <p>备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中</p>
     */
    public $BackupStatus;

    /**
     * @var string <p>备份文件时间</p>
     */
    public $SnapshotTime;

    /**
     * @var integer <p>备份ID</p>
     */
    public $BackupId;

    /**
     * @var string <p>快照类型，可选值：full，全量；increment，增量</p>
     */
    public $SnapShotType;

    /**
     * @var string <p>备份文件备注</p>
     */
    public $BackupName;

    /**
     * @var string <p>投递状态</p>
     */
    public $CopyStatus;

    /**
     * @var string <p>秘钥id</p>
     */
    public $EncryptKeyId;

    /**
     * @var string <p>秘钥地域</p>
     */
    public $EncryptRegion;

    /**
     * @var array <p>保险箱信息</p>
     */
    public $VaultInfos;

    /**
     * @var string <p>备份周期策略</p>
     */
    public $BackupPeriodStrategy;

    /**
     * @param integer $SnapshotId <p>快照文件ID，已废弃，请使用BackupId</p>
     * @param string $FileName <p>备份文件名</p>
     * @param integer $FileSize <p>备份文件大小</p>
     * @param string $StartTime <p>备份开始时间</p>
     * @param string $FinishTime <p>备份完成时间</p>
     * @param string $BackupType <p>备份类型：snapshot，快照备份；logic，逻辑备份</p>
     * @param string $BackupMethod <p>备份方式：auto，自动备份；manual，手动备份</p>
     * @param string $BackupStatus <p>备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中</p>
     * @param string $SnapshotTime <p>备份文件时间</p>
     * @param integer $BackupId <p>备份ID</p>
     * @param string $SnapShotType <p>快照类型，可选值：full，全量；increment，增量</p>
     * @param string $BackupName <p>备份文件备注</p>
     * @param string $CopyStatus <p>投递状态</p>
     * @param string $EncryptKeyId <p>秘钥id</p>
     * @param string $EncryptRegion <p>秘钥地域</p>
     * @param array $VaultInfos <p>保险箱信息</p>
     * @param string $BackupPeriodStrategy <p>备份周期策略</p>
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("SnapShotType",$param) and $param["SnapShotType"] !== null) {
            $this->SnapShotType = $param["SnapShotType"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("CopyStatus",$param) and $param["CopyStatus"] !== null) {
            $this->CopyStatus = $param["CopyStatus"];
        }

        if (array_key_exists("EncryptKeyId",$param) and $param["EncryptKeyId"] !== null) {
            $this->EncryptKeyId = $param["EncryptKeyId"];
        }

        if (array_key_exists("EncryptRegion",$param) and $param["EncryptRegion"] !== null) {
            $this->EncryptRegion = $param["EncryptRegion"];
        }

        if (array_key_exists("VaultInfos",$param) and $param["VaultInfos"] !== null) {
            $this->VaultInfos = [];
            foreach ($param["VaultInfos"] as $key => $value){
                $obj = new VaultInfo();
                $obj->deserialize($value);
                array_push($this->VaultInfos, $obj);
            }
        }

        if (array_key_exists("BackupPeriodStrategy",$param) and $param["BackupPeriodStrategy"] !== null) {
            $this->BackupPeriodStrategy = $param["BackupPeriodStrategy"];
        }
    }
}
