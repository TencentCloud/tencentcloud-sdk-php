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
 * CopyBackupToVault请求参数结构体
 *
 * @method string getVaultId() 获取<p>目标保险箱ID，备份文件将复制到此保险箱</p>
 * @method void setVaultId(string $VaultId) 设置<p>目标保险箱ID，备份文件将复制到此保险箱</p>
 * @method array getBackupIds() 获取<p>备份文件ID列表，支持批量复制多个备份文件</p>
 * @method void setBackupIds(array $BackupIds) 设置<p>备份文件ID列表，支持批量复制多个备份文件</p>
 */
class CopyBackupToVaultRequest extends AbstractModel
{
    /**
     * @var string <p>目标保险箱ID，备份文件将复制到此保险箱</p>
     */
    public $VaultId;

    /**
     * @var array <p>备份文件ID列表，支持批量复制多个备份文件</p>
     */
    public $BackupIds;

    /**
     * @param string $VaultId <p>目标保险箱ID，备份文件将复制到此保险箱</p>
     * @param array $BackupIds <p>备份文件ID列表，支持批量复制多个备份文件</p>
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

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }
    }
}
