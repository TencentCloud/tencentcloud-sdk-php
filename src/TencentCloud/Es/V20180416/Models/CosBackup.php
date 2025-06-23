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
 * ES cos自动备份信息
 *
 * @method boolean getIsAutoBackup() 获取是否开启cos自动备份
 * @method void setIsAutoBackup(boolean $IsAutoBackup) 设置是否开启cos自动备份
 * @method string getBackupTime() 获取自动备份执行时间（精确到小时）, e.g. "22:00"
 * @method void setBackupTime(string $BackupTime) 设置自动备份执行时间（精确到小时）, e.g. "22:00"
 * @method integer getEsRepositoryType() 获取0 腾讯云仓库; 1 客户仓库
 * @method void setEsRepositoryType(integer $EsRepositoryType) 设置0 腾讯云仓库; 1 客户仓库
 * @method string getUserEsRepository() 获取客户快照仓库名称
 * @method void setUserEsRepository(string $UserEsRepository) 设置客户快照仓库名称
 * @method integer getStorageDuration() 获取快照存储周期 单位天
 * @method void setStorageDuration(integer $StorageDuration) 设置快照存储周期 单位天
 * @method integer getAutoBackupInterval() 获取自动备份频率单位小时
 * @method void setAutoBackupInterval(integer $AutoBackupInterval) 设置自动备份频率单位小时
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
     * @var integer 0 腾讯云仓库; 1 客户仓库
     */
    public $EsRepositoryType;

    /**
     * @var string 客户快照仓库名称
     */
    public $UserEsRepository;

    /**
     * @var integer 快照存储周期 单位天
     */
    public $StorageDuration;

    /**
     * @var integer 自动备份频率单位小时
     */
    public $AutoBackupInterval;

    /**
     * @param boolean $IsAutoBackup 是否开启cos自动备份
     * @param string $BackupTime 自动备份执行时间（精确到小时）, e.g. "22:00"
     * @param integer $EsRepositoryType 0 腾讯云仓库; 1 客户仓库
     * @param string $UserEsRepository 客户快照仓库名称
     * @param integer $StorageDuration 快照存储周期 单位天
     * @param integer $AutoBackupInterval 自动备份频率单位小时
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

        if (array_key_exists("EsRepositoryType",$param) and $param["EsRepositoryType"] !== null) {
            $this->EsRepositoryType = $param["EsRepositoryType"];
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
    }
}
