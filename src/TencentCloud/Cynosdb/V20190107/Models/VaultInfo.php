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
 * @method string getVaultId() 获取保险箱id
 * @method void setVaultId(string $VaultId) 设置保险箱id
 * @method string getVaultName() 获取保险箱name
 * @method void setVaultName(string $VaultName) 设置保险箱name
 * @method string getVaultRegion() 获取保险箱地域
 * @method void setVaultRegion(string $VaultRegion) 设置保险箱地域
 * @method string getVaultStatus() 获取保险箱状态
 * @method void setVaultStatus(string $VaultStatus) 设置保险箱状态
 * @method integer getBackupSaveSeconds() 获取备份保留时间
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) 设置备份保留时间
 */
class VaultInfo extends AbstractModel
{
    /**
     * @var string 保险箱id
     */
    public $VaultId;

    /**
     * @var string 保险箱name
     */
    public $VaultName;

    /**
     * @var string 保险箱地域
     */
    public $VaultRegion;

    /**
     * @var string 保险箱状态
     */
    public $VaultStatus;

    /**
     * @var integer 备份保留时间
     */
    public $BackupSaveSeconds;

    /**
     * @param string $VaultId 保险箱id
     * @param string $VaultName 保险箱name
     * @param string $VaultRegion 保险箱地域
     * @param string $VaultStatus 保险箱状态
     * @param integer $BackupSaveSeconds 备份保留时间
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

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }

        if (array_key_exists("VaultStatus",$param) and $param["VaultStatus"] !== null) {
            $this->VaultStatus = $param["VaultStatus"];
        }

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
        }
    }
}
