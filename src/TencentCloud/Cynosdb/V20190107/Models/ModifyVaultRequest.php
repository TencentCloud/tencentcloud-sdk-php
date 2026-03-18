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
 * ModifyVault请求参数结构体
 *
 * @method string getVaultId() 获取保险箱ID
 * @method void setVaultId(string $VaultId) 设置保险箱ID
 * @method string getVaultName() 获取保险箱名称，最大255字符
 * @method void setVaultName(string $VaultName) 设置保险箱名称，最大255字符
 * @method string getVaultDescribe() 获取保险箱描述，最大1024字符
 * @method void setVaultDescribe(string $VaultDescribe) 设置保险箱描述，最大1024字符
 * @method integer getBackupSaveSeconds() 获取备份保留时长（秒），范围: (0, 632448000]
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) 设置备份保留时长（秒），范围: (0, 632448000]
 * @method string getKeyId() 获取加密密钥ID，最大36字符
 * @method void setKeyId(string $KeyId) 设置加密密钥ID，最大36字符
 * @method string getKeyType() 获取密钥类型，可选值: cloud、custom
 * @method void setKeyType(string $KeyType) 设置密钥类型，可选值: cloud、custom
 * @method string getKeyRegion() 获取密钥所在地域，最大32字符
 * @method void setKeyRegion(string $KeyRegion) 设置密钥所在地域，最大32字符
 * @method boolean getIsLock() 获取是否锁定保险箱
 * @method void setIsLock(boolean $IsLock) 设置是否锁定保险箱
 * @method string getLockedTime() 获取锁定到期时间，格式: 2006-01-02 15:04:05，锁定时间距当前最多15天
 * @method void setLockedTime(string $LockedTime) 设置锁定到期时间，格式: 2006-01-02 15:04:05，锁定时间距当前最多15天
 * @method boolean getIsEncryption() 获取是否加密
 * @method void setIsEncryption(boolean $IsEncryption) 设置是否加密
 */
class ModifyVaultRequest extends AbstractModel
{
    /**
     * @var string 保险箱ID
     */
    public $VaultId;

    /**
     * @var string 保险箱名称，最大255字符
     */
    public $VaultName;

    /**
     * @var string 保险箱描述，最大1024字符
     */
    public $VaultDescribe;

    /**
     * @var integer 备份保留时长（秒），范围: (0, 632448000]
     */
    public $BackupSaveSeconds;

    /**
     * @var string 加密密钥ID，最大36字符
     */
    public $KeyId;

    /**
     * @var string 密钥类型，可选值: cloud、custom
     */
    public $KeyType;

    /**
     * @var string 密钥所在地域，最大32字符
     */
    public $KeyRegion;

    /**
     * @var boolean 是否锁定保险箱
     */
    public $IsLock;

    /**
     * @var string 锁定到期时间，格式: 2006-01-02 15:04:05，锁定时间距当前最多15天
     */
    public $LockedTime;

    /**
     * @var boolean 是否加密
     */
    public $IsEncryption;

    /**
     * @param string $VaultId 保险箱ID
     * @param string $VaultName 保险箱名称，最大255字符
     * @param string $VaultDescribe 保险箱描述，最大1024字符
     * @param integer $BackupSaveSeconds 备份保留时长（秒），范围: (0, 632448000]
     * @param string $KeyId 加密密钥ID，最大36字符
     * @param string $KeyType 密钥类型，可选值: cloud、custom
     * @param string $KeyRegion 密钥所在地域，最大32字符
     * @param boolean $IsLock 是否锁定保险箱
     * @param string $LockedTime 锁定到期时间，格式: 2006-01-02 15:04:05，锁定时间距当前最多15天
     * @param boolean $IsEncryption 是否加密
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

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("IsLock",$param) and $param["IsLock"] !== null) {
            $this->IsLock = $param["IsLock"];
        }

        if (array_key_exists("LockedTime",$param) and $param["LockedTime"] !== null) {
            $this->LockedTime = $param["LockedTime"];
        }

        if (array_key_exists("IsEncryption",$param) and $param["IsEncryption"] !== null) {
            $this->IsEncryption = $param["IsEncryption"];
        }
    }
}
