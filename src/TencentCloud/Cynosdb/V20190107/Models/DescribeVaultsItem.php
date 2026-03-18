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
 * 保险箱信息
 *
 * @method string getVaultId() 获取保险箱ID
 * @method void setVaultId(string $VaultId) 设置保险箱ID
 * @method string getVaultName() 获取保险箱名称
 * @method void setVaultName(string $VaultName) 设置保险箱名称
 * @method string getVaultDescribe() 获取保险箱描述
 * @method void setVaultDescribe(string $VaultDescribe) 设置保险箱描述
 * @method string getKeyId() 获取加密密钥ID
 * @method void setKeyId(string $KeyId) 设置加密密钥ID
 * @method string getKeyRegion() 获取密钥所在地域
 * @method void setKeyRegion(string $KeyRegion) 设置密钥所在地域
 * @method string getKeyType() 获取密钥类型
 * @method void setKeyType(string $KeyType) 设置密钥类型
 * @method integer getBackupFileCount() 获取备份文件数量
 * @method void setBackupFileCount(integer $BackupFileCount) 设置备份文件数量
 * @method integer getBackupFileSize() 获取备份文件总大小（字节）
 * @method void setBackupFileSize(integer $BackupFileSize) 设置备份文件总大小（字节）
 * @method integer getBinlogFileCount() 获取Binlog文件数量
 * @method void setBinlogFileCount(integer $BinlogFileCount) 设置Binlog文件数量
 * @method integer getBinlogFileSize() 获取Binlog文件总大小（字节）
 * @method void setBinlogFileSize(integer $BinlogFileSize) 设置Binlog文件总大小（字节）
 * @method integer getRedoLogFileCount() 获取RedoLog文件数量
 * @method void setRedoLogFileCount(integer $RedoLogFileCount) 设置RedoLog文件数量
 * @method integer getRedoLogFileSize() 获取RedoLog文件总大小（字节）
 * @method void setRedoLogFileSize(integer $RedoLogFileSize) 设置RedoLog文件总大小（字节）
 * @method string getStatus() 获取保险箱状态
 * @method void setStatus(string $Status) 设置保险箱状态
 * @method integer getBackupSaveSeconds() 获取备份保留时长（秒）
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) 设置备份保留时长（秒）
 * @method string getLockedTime() 获取锁定时间
 * @method void setLockedTime(string $LockedTime) 设置锁定时间
 * @method array getTasks() 获取关联任务列表
 * @method void setTasks(array $Tasks) 设置关联任务列表
 * @method string getVaultRegion() 获取保险箱所在地域
 * @method void setVaultRegion(string $VaultRegion) 设置保险箱所在地域
 * @method array getAutoCopyConfigs() 获取自动投递关系
 * @method void setAutoCopyConfigs(array $AutoCopyConfigs) 设置自动投递关系
 */
class DescribeVaultsItem extends AbstractModel
{
    /**
     * @var string 保险箱ID
     */
    public $VaultId;

    /**
     * @var string 保险箱名称
     */
    public $VaultName;

    /**
     * @var string 保险箱描述
     */
    public $VaultDescribe;

    /**
     * @var string 加密密钥ID
     */
    public $KeyId;

    /**
     * @var string 密钥所在地域
     */
    public $KeyRegion;

    /**
     * @var string 密钥类型
     */
    public $KeyType;

    /**
     * @var integer 备份文件数量
     */
    public $BackupFileCount;

    /**
     * @var integer 备份文件总大小（字节）
     */
    public $BackupFileSize;

    /**
     * @var integer Binlog文件数量
     */
    public $BinlogFileCount;

    /**
     * @var integer Binlog文件总大小（字节）
     */
    public $BinlogFileSize;

    /**
     * @var integer RedoLog文件数量
     */
    public $RedoLogFileCount;

    /**
     * @var integer RedoLog文件总大小（字节）
     */
    public $RedoLogFileSize;

    /**
     * @var string 保险箱状态
     */
    public $Status;

    /**
     * @var integer 备份保留时长（秒）
     */
    public $BackupSaveSeconds;

    /**
     * @var string 锁定时间
     */
    public $LockedTime;

    /**
     * @var array 关联任务列表
     */
    public $Tasks;

    /**
     * @var string 保险箱所在地域
     */
    public $VaultRegion;

    /**
     * @var array 自动投递关系
     */
    public $AutoCopyConfigs;

    /**
     * @param string $VaultId 保险箱ID
     * @param string $VaultName 保险箱名称
     * @param string $VaultDescribe 保险箱描述
     * @param string $KeyId 加密密钥ID
     * @param string $KeyRegion 密钥所在地域
     * @param string $KeyType 密钥类型
     * @param integer $BackupFileCount 备份文件数量
     * @param integer $BackupFileSize 备份文件总大小（字节）
     * @param integer $BinlogFileCount Binlog文件数量
     * @param integer $BinlogFileSize Binlog文件总大小（字节）
     * @param integer $RedoLogFileCount RedoLog文件数量
     * @param integer $RedoLogFileSize RedoLog文件总大小（字节）
     * @param string $Status 保险箱状态
     * @param integer $BackupSaveSeconds 备份保留时长（秒）
     * @param string $LockedTime 锁定时间
     * @param array $Tasks 关联任务列表
     * @param string $VaultRegion 保险箱所在地域
     * @param array $AutoCopyConfigs 自动投递关系
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("VaultDescribe",$param) and $param["VaultDescribe"] !== null) {
            $this->VaultDescribe = $param["VaultDescribe"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("BackupFileCount",$param) and $param["BackupFileCount"] !== null) {
            $this->BackupFileCount = $param["BackupFileCount"];
        }

        if (array_key_exists("BackupFileSize",$param) and $param["BackupFileSize"] !== null) {
            $this->BackupFileSize = $param["BackupFileSize"];
        }

        if (array_key_exists("BinlogFileCount",$param) and $param["BinlogFileCount"] !== null) {
            $this->BinlogFileCount = $param["BinlogFileCount"];
        }

        if (array_key_exists("BinlogFileSize",$param) and $param["BinlogFileSize"] !== null) {
            $this->BinlogFileSize = $param["BinlogFileSize"];
        }

        if (array_key_exists("RedoLogFileCount",$param) and $param["RedoLogFileCount"] !== null) {
            $this->RedoLogFileCount = $param["RedoLogFileCount"];
        }

        if (array_key_exists("RedoLogFileSize",$param) and $param["RedoLogFileSize"] !== null) {
            $this->RedoLogFileSize = $param["RedoLogFileSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }

        if (array_key_exists("LockedTime",$param) and $param["LockedTime"] !== null) {
            $this->LockedTime = $param["LockedTime"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }

        if (array_key_exists("AutoCopyConfigs",$param) and $param["AutoCopyConfigs"] !== null) {
            $this->AutoCopyConfigs = [];
            foreach ($param["AutoCopyConfigs"] as $key => $value){
                $obj = new AutoCopyConfig();
                $obj->deserialize($value);
                array_push($this->AutoCopyConfigs, $obj);
            }
        }
    }
}
