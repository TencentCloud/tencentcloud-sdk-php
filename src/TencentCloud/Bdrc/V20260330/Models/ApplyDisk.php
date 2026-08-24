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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份组备份和云盘绑定信息
 *
 * @method string getBackupId() 获取备份ID
 * @method void setBackupId(string $BackupId) 设置备份ID
 * @method string getDiskId() 获取云盘ID
 * @method void setDiskId(string $DiskId) 设置云盘ID
 */
class ApplyDisk extends AbstractModel
{
    /**
     * @var string 备份ID
     */
    public $BackupId;

    /**
     * @var string 云盘ID
     */
    public $DiskId;

    /**
     * @param string $BackupId 备份ID
     * @param string $DiskId 云盘ID
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
