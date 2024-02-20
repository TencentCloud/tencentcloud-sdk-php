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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 手动备份任务信息
 *
 * @method string getBackupType() 获取备份类型。snapshot-快照备份
 * @method void setBackupType(string $BackupType) 设置备份类型。snapshot-快照备份
 * @method string getBackupMethod() 获取备份方式。auto-自动备份，manual-手动
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式。auto-自动备份，manual-手动
 * @method string getSnapshotTime() 获取备份时间
 * @method void setSnapshotTime(string $SnapshotTime) 设置备份时间
 */
class ManualBackupData extends AbstractModel
{
    /**
     * @var string 备份类型。snapshot-快照备份
     */
    public $BackupType;

    /**
     * @var string 备份方式。auto-自动备份，manual-手动
     */
    public $BackupMethod;

    /**
     * @var string 备份时间
     */
    public $SnapshotTime;

    /**
     * @param string $BackupType 备份类型。snapshot-快照备份
     * @param string $BackupMethod 备份方式。auto-自动备份，manual-手动
     * @param string $SnapshotTime 备份时间
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
        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }
    }
}
