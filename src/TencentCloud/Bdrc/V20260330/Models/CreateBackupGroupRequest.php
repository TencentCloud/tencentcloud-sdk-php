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
 * CreateBackupGroup请求参数结构体
 *
 * @method array getDiskIds() 获取需要创建备份组的云硬盘ID列表。
 * @method void setDiskIds(array $DiskIds) 设置需要创建备份组的云硬盘ID列表。
 * @method string getBackupGroupName() 获取备份组的名称
 * @method void setBackupGroupName(string $BackupGroupName) 设置备份组的名称
 * @method string getDeadline() 获取指定备份组到期时间，如果未传入该参数，默认为永久保留。
 * @method void setDeadline(string $Deadline) 设置指定备份组到期时间，如果未传入该参数，默认为永久保留。
 */
class CreateBackupGroupRequest extends AbstractModel
{
    /**
     * @var array 需要创建备份组的云硬盘ID列表。
     */
    public $DiskIds;

    /**
     * @var string 备份组的名称
     */
    public $BackupGroupName;

    /**
     * @var string 指定备份组到期时间，如果未传入该参数，默认为永久保留。
     */
    public $Deadline;

    /**
     * @param array $DiskIds 需要创建备份组的云硬盘ID列表。
     * @param string $BackupGroupName 备份组的名称
     * @param string $Deadline 指定备份组到期时间，如果未传入该参数，默认为永久保留。
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("BackupGroupName",$param) and $param["BackupGroupName"] !== null) {
            $this->BackupGroupName = $param["BackupGroupName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
