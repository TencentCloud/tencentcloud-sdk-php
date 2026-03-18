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
 * CreateVault请求参数结构体
 *
 * @method string getVaultName() 获取保险箱名称，长度必须大于0
 * @method void setVaultName(string $VaultName) 设置保险箱名称，长度必须大于0
 * @method integer getBackupSaveSeconds() 获取备份保留时长（秒），必须大于0
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) 设置备份保留时长（秒），必须大于0
 * @method string getVaultDescribe() 获取保险箱描述
 * @method void setVaultDescribe(string $VaultDescribe) 设置保险箱描述
 * @method string getKeyId() 获取KMS密钥ID，长度0-36字符
 * @method void setKeyId(string $KeyId) 设置KMS密钥ID，长度0-36字符
 * @method string getKeyType() 获取密钥类型，可选值：cloud（云托管密钥）、custom（自定义密钥）
 * @method void setKeyType(string $KeyType) 设置密钥类型，可选值：cloud（云托管密钥）、custom（自定义密钥）
 * @method string getKeyRegion() 获取密钥所在地域，长度0-32字符
 * @method void setKeyRegion(string $KeyRegion) 设置密钥所在地域，长度0-32字符
 * @method string getLockedTime() 获取锁定时间，格式：YYYY-MM-DD HH:mm:ss
 * @method void setLockedTime(string $LockedTime) 设置锁定时间，格式：YYYY-MM-DD HH:mm:ss
 */
class CreateVaultRequest extends AbstractModel
{
    /**
     * @var string 保险箱名称，长度必须大于0
     */
    public $VaultName;

    /**
     * @var integer 备份保留时长（秒），必须大于0
     */
    public $BackupSaveSeconds;

    /**
     * @var string 保险箱描述
     */
    public $VaultDescribe;

    /**
     * @var string KMS密钥ID，长度0-36字符
     */
    public $KeyId;

    /**
     * @var string 密钥类型，可选值：cloud（云托管密钥）、custom（自定义密钥）
     */
    public $KeyType;

    /**
     * @var string 密钥所在地域，长度0-32字符
     */
    public $KeyRegion;

    /**
     * @var string 锁定时间，格式：YYYY-MM-DD HH:mm:ss
     */
    public $LockedTime;

    /**
     * @param string $VaultName 保险箱名称，长度必须大于0
     * @param integer $BackupSaveSeconds 备份保留时长（秒），必须大于0
     * @param string $VaultDescribe 保险箱描述
     * @param string $KeyId KMS密钥ID，长度0-36字符
     * @param string $KeyType 密钥类型，可选值：cloud（云托管密钥）、custom（自定义密钥）
     * @param string $KeyRegion 密钥所在地域，长度0-32字符
     * @param string $LockedTime 锁定时间，格式：YYYY-MM-DD HH:mm:ss
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
        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }

        if (array_key_exists("VaultDescribe",$param) and $param["VaultDescribe"] !== null) {
            $this->VaultDescribe = $param["VaultDescribe"];
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

        if (array_key_exists("LockedTime",$param) and $param["LockedTime"] !== null) {
            $this->LockedTime = $param["LockedTime"];
        }
    }
}
